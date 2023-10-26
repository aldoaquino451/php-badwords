PHP Badwords
===

## Esercizio

Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.    
Gestire il tutto con due file diversi.    
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.    

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:    
- stampare a schermo il paragrafo e la sua lunghezza    
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare    


## PHP 

- crea una pagina html con un form composto da due input (per la parola e per il testo) e un button submit
- crea un secondo file, in php, dove rimandare al click del button 
- salva in due varibili il testo contenuto nei due input
- stampa il testo e la sua lunghezza in un container html
- applica il metodo per sostituire stringhe di caratteri
- stampa il nuovo testo e la sua lunghezza in un altro container