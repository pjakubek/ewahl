Phalcon
-------
####Links
[Phalcon Website](https://phalconphp.com/)
[Phalcon Dokumentation](https://docs.phalconphp.com/en/latest/index.html)
####Produkt
Phalcon ist ein Open-Source PHP-Framework.
Es erlaubt eine effiziente und rasche Entwicklung von Webapplikationen und ist, im Vergleich zu anderen Frameworks, sehr schnell.

###Installation
> auf Ubuntu Server 14.04
    
#####Vorrausgesetzte Pakete
- PHP 5.3
- GCC compiler
- Git

#####Installtion der vorrausgesetzten Pakete
	sudo apt-get install php5-dev libpcre3-dev gcc make php5-mysql

#####Installation von Phalcon
######Phalcon herunterladen und installieren
	git clone --depth=1 git://github.com/phalcon/cphalcon.git
    cd cphalcon/build
    sudo ./install
#####Phalcon zur PHP-Konfiguration hinzufügen
Das Phalcon eine PHP-Extension(=Erweiterung) ist, muss es auch als Extension definiert werden.
	# Neues File mit dem Namen 30-phalcon.ini in /etc/php5/conf.d mit diesem Inhalt:
    extension=phalcon.so
Nun muss der Webserver neu gestartet werden um die Änderungen wirksam zu machen.
**Nun ist Phalcon installiert**

#####Installation überprüfen
Um die Installation von Phalcon zu überprüfen kann man ein neues PHP-File erstellen(beliebiges Verzeichnis) mit dem Inhalt:
	<?php print_r(get_loaded_extensions());?>
Dieses PHP-File muss nun ausgeführt werden:
	#Selber Ordner
    php name.php
    
    #Anderer Ordner
    php /pfad/zu/file/name.php
Oder mit:
	phpinfo();

Im Falle einer erfolgreich Installation sollte die Ausgabe, nach Ausführung des PHP-Files, an irgendeiner Stelle **phalcon** beeinhalten.

	Array 
	(
    [0] => Core
    [1] => libxml
    [2] => filter
    [3] => SPL
    [4] => standard
    [5] => phalcon
    [6] => pdo_mysql
	)

Diese Auflistung zeigt die installierten PHP-Erweiterungen.
Sollte sich **phalcon** nicht in dieser Liste befinden war die Installation nicht erfolgreich. Sollte dies der Fall sein ist eine Neuinstallation im Normalfall die Lösung.