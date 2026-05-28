# Sicura Finanziamenti - versione PHP con header/footer condivisi

Questa versione usa:

- `header.php` per intestazione, menu desktop e menu mobile
- `footer.php` per footer, WhatsApp floating e script finale
- pagine `.php` che includono header e footer con `include __DIR__ . '/header.php';` e `include __DIR__ . '/footer.php';`

## Menu

Il menu definitivo è quello della home page, ora centralizzato in `header.php`.
Per modificare una voce di menu, un link, il telefono o i social dell'header, basta intervenire su `header.php`.
Per modificare il footer, basta intervenire su `footer.php`.

## Pagine convertite

- `index.php`
- `studio-di-bancabilita.php`
- `prefattibilita-mutui.php`
- `finanziamenti-imprese.php`
- `cessione-del-quinto.php`
- `prestiti-personali.php`
- `report-di-prefattibilita.php`
- `come-funziona.php`
- `perche-e-importante.php`
- `chi-siamo.php`
- `contatti.php`

## Importante

La cartella `assets/` non era presente nei file caricati qui, quindi deve rimanere accanto a questi file sul server, con:

- `assets/style.css`
- `assets/site.js`
- `assets/logo-sicura.png`
- `assets/logo-sicura-symbol.png`

Ho incluso anche un file `.htaccess` opzionale per reindirizzare i vecchi URL `.html` verso i nuovi `.php`, utile se il server è Apache e `mod_rewrite` è attivo.
