# Laravel Reviews BackOffice API

Benvenuto nel progetto **Laravel Reviews BackOffice**!  
Questa API permette la gestione di recensioni tramite un backoffice sviluppato in Laravel.

## 🚀 Funzionalità principali

- Gestione CRUD delle recensioni
- Autenticazione e autorizzazione utenti
- Gestione immagini collegate alle recensioni
- Filtri e ricerca avanzata
- Pannello di amministrazione intuitivo

## 📦 Installazione

1. Clona la repository:
   ```bash
   git clone https://github.com/tuo-utente/laravel-reviews_backOffice.git
   ```
2. Installa le dipendenze:
   ```bash
   composer install
   ```
3. Configura il file `.env` e genera la chiave:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Esegui le migrazioni:
   ```bash
   php artisan migrate
   ```
5. Avvia il server:
   ```bash
   php artisan serve
   ```

## 🛠️ Esempio di utilizzo API

### Ottenere tutte le recensioni

```http
GET /api/reviews
```

### Creare una nuova recensione

```http
POST /api/reviews
Content-Type: application/json

{
  "titolo": "Ottimo prodotto",
  "testo": "Mi sono trovato benissimo!",
  "valutazione": 5
}
```

## 📂 Gestione immagini

Le immagini caricate vengono salvate nella cartella `storage/app/public` e sono versionate su git.

## 👤 Contatti

Per domande o supporto, contatta:  
[tuo.email@example.com](mailto:tuo.email@example.com)

---

> Progetto sviluppato con ❤️ usando Laravel.
