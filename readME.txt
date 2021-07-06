


Preparazione del menu:

Le categorie dei vari cibi andranno inserite lato database una volta accordate con il cliente

L'admin potrà fare login e inserire direttamente i suoi piatti, selezionando le categorie a cui appartengono, caricando anche la foto.
L'admin potrà visualizzare la lista dei piatti nel suo menu ed effettuare azioni di eliminazione, visualizzazione e modifica dei piatti stessi.


Ordinazione:

Lato utente

l'utente si siede e gli viene detto il numero del tavolo
seleziona i piatti e manda l'ordine, nell'ordine verrà chiesto di inserire il numero del tavolo

Lato admin

l'admin avrà accesso a una tabella in cui verrà fatta apparire la lista con tutti gli ordini con in cima i più recenti
ogni ordine avrà un'icona di colore rosso su consegnato se l'ordine anche non sarà mandato al tavolo
cliccando sul bottone modifica stato l'admin potrà cambiare il valore del booleano delivered da 0 a 1 e quindi l'icona diventerà verde

Conto:

Lato utente

l'utente potrà richiedere il conto una volta finito di mangiare

Lato admin

l'admin avrà accesso a una tabella in cui verrà fatta apparire una lista di tutte le richieste di conto con in cima le più recenti
ogni conto avrà il totale della somma degli ordini di quel tavolo, potrà editare la voce del conto da non pagato a pagato



Per visualizzare il progetto

1-Scaricare MAMP ed avviare il server, scegliere nelle preferences la document root di dove si andrà a mettere la cartella del progetto
2-Aprire in MAMP la webstartpage, dove ci sarà la homepage del database di riferimento
3-nella root principale del progetto c'è un file env.example, copiare e incollare il file rinominandolo .env
4-incollare sostituendo tutto con:

APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=restaurant_tablet_order
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

5-la sezione 
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=restaurant_tablet_order
DB_USERNAME=root
DB_PASSWORD=root
va impostata in base ai dati che vengono elencati nella homepage si MAMP sotto la voce MySQL.

6-cliccare phpMyAdmin da dentro la homepage di MAMP per accedere al database
7-cliccare new e impostare come nome restaurant_tablet_order
8-una volta creata la voce del DB cliccarla e poi fare import dal menu in alto, selezionare il file DB restaurant_tablet_order.sql per importare il db.
9-una volta importato il db tornare in VScode con il terminale aperto e inviare 
aprire la cartella con VScode o simili, aprire il terminale e eseguire:


php artisan key:generate

npm install

npm run dev 

php artisan config:clear

npm audit fix

composer dump-autoload 

npx mix 

php artisan serve 

10-facendo un controllo che il server di MAMP sia acceso andiamo su http://localhost:8000/ e dovremmo visualizzare il progetto