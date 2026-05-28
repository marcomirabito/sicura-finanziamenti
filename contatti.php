<?php
$pageTitle = 'Contatti | Sicura Finanziamenti';
$metaDescription = 'Richiedi informazioni e una prima valutazione di prefattibilità.';
$currentPage = 'contatti';
include __DIR__ . '/header.php';
?>

<section class="page-hero">
  <div class="container page-hero-grid">
    <div class="page-hero-copy reveal">
      <span class="eyebrow">Contatti</span>
      <h1>Richiedi una valutazione di prefattibilità</h1>
      <p>Compila il modulo o contattaci direttamente per una prima valutazione della tua richiesta di mutuo, finanziamento aziendale, prestito personale, cessione del quinto, anticipo TFS o leasing.</p>
      <div class="hero-actions">
        <a class="btn" href="https://wa.me/393296290451?text=Buongiorno%2C%20vorrei%20richiedere%20una%20valutazione%20preliminare%20per%20una%20pratica%20di%20credito.%20Potete%20indicarmi%20quali%20informazioni%20servono%20per%20iniziare%3F">Scrivi su WhatsApp</a>
        <a class="btn btn-ghost" href="come-funziona.php">Scopri il metodo</a>
      </div>
    </div>
    <div class="page-hero-media reveal delay-1">
      <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=1500&q=82" alt="Consulenza finanziaria con professionisti">
      <div class="media-card"><strong>Analisi preventiva</strong><span>Prima del confronto con la banca</span></div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container contact-grid">
    <div class="contact-card reveal">
      <span class="eyebrow">Sicura Finanziamenti</span>
      <h2>Ti ricontatteremo per comprendere meglio la tua esigenza.</h2>
      <p>Indicheremo quali informazioni sono necessarie per procedere con l’analisi preliminare.</p>
      <div class="contact-methods">
        <a href="tel:+393296290451"><strong>Telefono</strong><span>+39 329 629 0451</span></a>
        <a href="https://wa.me/393296290451?text=Buongiorno%2C%20vorrei%20richiedere%20una%20valutazione%20preliminare%20per%20una%20pratica%20di%20credito.%20Potete%20indicarmi%20quali%20informazioni%20servono%20per%20iniziare%3F" target="_blank" rel="noreferrer"><strong>WhatsApp</strong><span>+39 329 629 0451</span></a>
        <a href="https://www.google.com/maps/search/?api=1&query=Viale%20Santa%20Panagia%20Scala%20C%20n.%20141" target="_blank" rel="noreferrer"><strong>Sede</strong><span>Viale Santa Panagia Scala C n. 141</span></a>
        <div><strong>Referente</strong><span>Simona Tragna</span></div>
      </div>
      <div class="social-icons contact-socials">
          <a href="#" aria-label="Facebook Sicura Finanziamenti" title="Facebook">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V4h-3c-3.2 0-5.2 2-5.2 5.2V12H6v4h2.8v6H13v-6h3.2l.8-4h-4V9.4c0-.9.4-1.4 1-1.4z"/></svg>
          </a>
          <a href="#" aria-label="Instagram Sicura Finanziamenti" title="Instagram">
            <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="5" ry="5"/><circle cx="12" cy="12" r="4"/><circle cx="17" cy="7" r="1.1"/></svg>
          </a>
        </div>
      <div class="note-box"><strong>Nota importante</strong><p>Sicura Finanziamenti svolge attività di consulenza preliminare e analisi della sostenibilità delle operazioni di accesso al credito. Le valutazioni fornite non costituiscono garanzia di approvazione da parte degli istituti di credito.</p></div>
    </div>
    <form class="contact-form reveal delay-1" action="#" method="post">
      <p>Raccontaci brevemente la tua esigenza. Ti aiuteremo a capire quali documenti servono e se la tua richiesta può essere analizzata attraverso una valutazione preliminare.</p>
      <div class="form-row"><label>Nome e cognome<input type="text" name="nome" required></label><label>Telefono<input type="tel" name="telefono" required></label></div>
      <label>Email<input type="email" name="email" required></label>
      <div class="form-row"><label>Tipo di soggetto<select name="soggetto"><option>Persona fisica</option><option>Azienda / Partita IVA</option></select></label><label>Ragione sociale / Partita IVA<input type="text" name="partita_iva" placeholder="Se azienda o P.IVA"></label></div>
      <label>Tipo di richiesta<select name="richiesta"><option>Mutuo</option><option>Finanziamento aziendale</option><option>Cessione del quinto</option><option>Prestito personale</option><option>Anticipo TFS</option><option>Leasing</option><option>Altro</option></select></label>
      <label>Importo indicativo richiesto<input type="text" name="importo" placeholder="Es. 120.000 €"></label>
      <label>Breve descrizione della situazione<textarea name="messaggio" rows="5" placeholder="Descrivi in poche righe la tua esigenza"></textarea></label>
      <label class="privacy"><input type="checkbox" required><span>Autorizzo il trattamento dei dati personali per essere ricontattato.</span></label>
      <button class="btn" type="submit">Invia richiesta di valutazione</button>
      <small>Il modulo è pronto graficamente: va collegato al sistema form del sito, a un CRM o a una mail.</small>
    </form>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
