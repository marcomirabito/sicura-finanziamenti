<?php
$pageTitle = $pageTitle ?? 'Sicura Finanziamenti';
$metaDescription = $metaDescription ?? 'Analisi preventiva di mutui, finanziamenti alle imprese e operazioni di credito.';
$currentPage = $currentPage ?? basename($_SERVER['PHP_SELF'], '.php');

$servicesPages = [
  'studio-di-bancabilita',
  'prefattibilita-mutui',
  'finanziamenti-imprese',
  'cessione-del-quinto',
  'prestiti-personali',
  'report-di-prefattibilita'
];

$insightPages = [
  'come-funziona',
  'perche-e-importante',
  'chi-siamo'
];

if (!function_exists('sf_e')) {
  function sf_e($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
  }
}

if (!function_exists('sf_active_attr')) {
  function sf_active_attr($page) {
    global $currentPage;
    return $currentPage === $page ? ' aria-current="page" class="active"' : '';
  }
}

if (!function_exists('sf_group_class')) {
  function sf_group_class($pages) {
    global $currentPage;
    return in_array($currentPage, $pages, true) ? ' active' : '';
  }
}

if (!function_exists('sf_details_open')) {
  function sf_details_open($pages) {
    global $currentPage;
    return in_array($currentPage, $pages, true) ? ' open' : '';
  }
}
?>
<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= sf_e($pageTitle); ?></title>
  <meta name="description" content="<?= sf_e($metaDescription); ?>">
  <link rel="icon" href="assets/logo-sicura-symbol.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body data-page="<?= sf_e($currentPage); ?>">
  <div class="site-shell">
    <header class="site-header" id="siteHeader">
      <a class="brand" href="index.php" aria-label="Sicura Finanziamenti Home">
        <img src="assets/logo-sicura.png" alt="Sicura Finanziamenti">
      </a>
      <nav class="desktop-nav" aria-label="Navigazione principale">
        <a href="index.php"<?= sf_active_attr('index'); ?>>Home</a>
        <div class="nav-dropdown<?= sf_group_class($servicesPages); ?>">
          <button class="nav-drop-toggle" type="button">Servizi <span>▾</span></button>
          <div class="nav-dropdown-panel">
            <a href="studio-di-bancabilita.php"<?= sf_active_attr('studio-di-bancabilita'); ?>><strong>Studio di Bancabilità</strong><small>Analisi preventiva della pratica</small></a>
            <a href="prefattibilita-mutui.php"<?= sf_active_attr('prefattibilita-mutui'); ?>><strong>Prefattibilità Mutui</strong><small>Richieste di mutuo e sostenibilità rata</small></a>
            <a href="finanziamenti-imprese.php"<?= sf_active_attr('finanziamenti-imprese'); ?>><strong>Finanziamenti alle Imprese</strong><small>Bilanci, flussi e capacità di rimborso</small></a>
            <a href="cessione-del-quinto.php"<?= sf_active_attr('cessione-del-quinto'); ?>><strong>Cessione del Quinto</strong><small>Compatibilità con reddito e impegni</small></a>
            <a href="prestiti-personali.php"<?= sf_active_attr('prestiti-personali'); ?>><strong>Prestiti Personali</strong><small>Nuova rata e sostenibilità complessiva</small></a>
            <a href="report-di-prefattibilita.php"<?= sf_active_attr('report-di-prefattibilita'); ?>><strong>Report di prefattibilità</strong><small>Documento finale di valutazione</small></a>
          </div>
        </div>
        <div class="nav-dropdown<?= sf_group_class($insightPages); ?>">
          <button class="nav-drop-toggle" type="button">Approfondimenti <span>▾</span></button>
          <div class="nav-dropdown-panel nav-dropdown-panel-right">
            <a href="come-funziona.php"<?= sf_active_attr('come-funziona'); ?>><strong>Come funziona</strong><small>Metodo di lavoro in 4 passaggi</small></a>
            <a href="perche-e-importante.php"<?= sf_active_attr('perche-e-importante'); ?>><strong>Perché è importante</strong><small>Valutare prima della banca</small></a>
            <a href="chi-siamo.php"<?= sf_active_attr('chi-siamo'); ?>><strong>Chi sono</strong><small>Esperienza e approccio professionale</small></a>
          </div>
        </div>
        <a href="contatti.php"<?= sf_active_attr('contatti'); ?>>Contatti</a>
      </nav>
      <div class="header-actions">
        <a class="phone-link" href="tel:+393296290451">+39 329 629 0451</a>
        <div class="social-icons header-socials">
          <a href="#" aria-label="Facebook Sicura Finanziamenti" title="Facebook">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V4h-3c-3.2 0-5.2 2-5.2 5.2V12H6v4h2.8v6H13v-6h3.2l.8-4h-4V9.4c0-.9.4-1.4 1-1.4z"/></svg>
          </a>
          <a href="#" aria-label="Instagram Sicura Finanziamenti" title="Instagram">
            <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="5" ry="5"/><circle cx="12" cy="12" r="4"/><circle cx="17" cy="7" r="1.1"/></svg>
          </a>
        </div>
        <a class="btn btn-small" href="contatti.php">Valutazione</a>
        <button class="menu-toggle" id="menuToggle" aria-label="Apri menu" aria-expanded="false">
          <span></span><span></span>
        </button>
      </div>
    </header>

    <div class="mobile-panel" id="mobilePanel" aria-hidden="true">
      <div class="mobile-panel-inner">
        <img class="mobile-logo" src="assets/logo-sicura.png" alt="Sicura Finanziamenti">
        <nav aria-label="Navigazione mobile" class="mobile-nav">
          <a href="index.php"<?= sf_active_attr('index'); ?>>Home</a>
          <details class="mobile-accordion"<?= sf_details_open($servicesPages); ?>>
            <summary>Servizi</summary>
            <a href="studio-di-bancabilita.php"<?= sf_active_attr('studio-di-bancabilita'); ?>>Studio di bancabilità</a>
            <a href="prefattibilita-mutui.php"<?= sf_active_attr('prefattibilita-mutui'); ?>>Prefattibilità Mutui</a>
            <a href="finanziamenti-imprese.php"<?= sf_active_attr('finanziamenti-imprese'); ?>>Finanziamenti alle Imprese</a>
            <a href="cessione-del-quinto.php"<?= sf_active_attr('cessione-del-quinto'); ?>>Cessione del Quinto</a>
            <a href="prestiti-personali.php"<?= sf_active_attr('prestiti-personali'); ?>>Prestiti Personali</a>
            <a href="report-di-prefattibilita.php"<?= sf_active_attr('report-di-prefattibilita'); ?>>Report di prefattibilità</a>
          </details>
          <details class="mobile-accordion"<?= sf_details_open($insightPages); ?>>
            <summary>Approfondimenti</summary>
            <a href="come-funziona.php"<?= sf_active_attr('come-funziona'); ?>>Come funziona</a>
            <a href="perche-e-importante.php"<?= sf_active_attr('perche-e-importante'); ?>>Perché è importante</a>
            <a href="chi-siamo.php"<?= sf_active_attr('chi-siamo'); ?>>Chi sono</a>
          </details>
          <a href="contatti.php"<?= sf_active_attr('contatti'); ?>>Contatti</a>
        </nav>
        <a class="btn" href="contatti.php">Richiedi una valutazione</a>
        <a class="mobile-whatsapp" href="https://wa.me/393296290451?text=Buongiorno%2C%20vorrei%20richiedere%20una%20valutazione%20preliminare%20per%20una%20pratica%20di%20credito.%20Potete%20indicarmi%20quali%20informazioni%20servono%20per%20iniziare%3F" target="_blank" rel="noreferrer">Scrivi su WhatsApp</a>
        <div class="social-icons mobile-socials">
          <a href="#" aria-label="Facebook Sicura Finanziamenti" title="Facebook">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V4h-3c-3.2 0-5.2 2-5.2 5.2V12H6v4h2.8v6H13v-6h3.2l.8-4h-4V9.4c0-.9.4-1.4 1-1.4z"/></svg>
          </a>
          <a href="#" aria-label="Instagram Sicura Finanziamenti" title="Instagram">
            <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="5" ry="5"/><circle cx="12" cy="12" r="4"/><circle cx="17" cy="7" r="1.1"/></svg>
          </a>
        </div>
      </div>
    </div>

    <main>
