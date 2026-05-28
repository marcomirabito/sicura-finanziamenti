
const header = document.getElementById('siteHeader');
const menuToggle = document.getElementById('menuToggle');
const mobilePanel = document.getElementById('mobilePanel');
function onScroll(){
  if(window.scrollY > 20){ header.classList.add('is-scrolled'); }
  else { header.classList.remove('is-scrolled'); }
}
window.addEventListener('scroll', onScroll, {passive:true});
onScroll();
if(menuToggle && mobilePanel){
  menuToggle.addEventListener('click', () => {
    const open = menuToggle.classList.toggle('is-open');
    mobilePanel.classList.toggle('is-open', open);
    menuToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    mobilePanel.setAttribute('aria-hidden', open ? 'false' : 'true');
    document.body.style.overflow = open ? 'hidden' : '';
  });
  mobilePanel.addEventListener('click', (e) => {
    if(e.target === mobilePanel || e.target.tagName === 'A'){
      menuToggle.classList.remove('is-open');
      mobilePanel.classList.remove('is-open');
      menuToggle.setAttribute('aria-expanded','false');
      mobilePanel.setAttribute('aria-hidden','true');
      document.body.style.overflow = '';
    }
  });
}
const io = new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      entry.target.classList.add('in-view');
      io.unobserve(entry.target);
    }
  })
},{threshold:.12});
document.querySelectorAll('.reveal').forEach(el=>io.observe(el));
