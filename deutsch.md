# ScrollTextBox - ESP8266
![alt tag](https://github.com/DIYDave/Scroll-Box-Verion-2/blob/main/Thumbnail_v2.png)
<br>
### [Auf Youtube anschauen](https://youtu.be/5OIPGGdnwp8?si=vZdS-dJnMlYQxo7t)    
### [English version of this text]()

## 🔥 Neue Version 2.2 "easy to use"!  Dez. 2023

✔ Neu einfach als Webserver oder Client konfigurierbar

✔ Dynamisches generieren der QR-Codes. Für Wifi-Settings und Texteingabe

Falls eine Verbindung zu einem bekannten Accesspoint möglich ist, verbindet sich der ESP damit.

Ist keine Verbindung möglich, wechselt der ESP automatisch in den AP Modus. 
Wird mit dem Smartphone eine Verbindung zu diesem AP gemacht (QR-Code), wird man auf eine WiFi-Konfigurationsseite im ESP weitergeleitet. 
Hier kann eine verfügbare WiFi SSID ausgewählt und das Passwort eingegeben werden. Die Daten werden im EEPROM gespeichert.

Ist die Box mit WLAN verbunden, wird der QR-Code auf dem Display verwendet um die Webseite zu erreichen.
Hier kann dann ein freier Text eingegeben werden. (Die Texte laufen absolut ruhig, nicht wie im Video)
Der Webserver für diese Seite kann extern bei einem Hoster oder intern auf dem ESP laufen.

Erstellt mit VS-Code und PlatformIO

Materialiste:
- Wemos Mini D1 pro CP2104: 	https://s.click.aliexpress.com/e/_DkDmfWn
- 2 x Dot Matrix Display :	http://s.click.aliexpress.com/e/b5pQfgZw
- 1,3" OLED Display:              http://s.click.aliexpress.com/e/NrO6VzW
- Breakeout USB micro/USB-C	https://s.click.aliexpress.com/e/_De692vh

Das Furiner sollte eine ruhige Struktur haben und eher hell sein. Dicke ca. 0.5-0.6 mm
- Furnier im Video: 2 x A4 :    	https://cutt.ly/NtdbuPj	(nur Schweiz)
- Beispiel (ungetestet)		https://www.metz-furniere.de/shop/7102-Buche-Furnier?L=de
- Furnier (europa):		https://www.metz-furniere.de/shop/index.php?mode=0

Hilfreich aber nicht nötig:
- Günstiges und gutes Fluke Multimeter:  https://s.click.aliexpress.com/e/_DmQdyAL
- Besseres Kabelset:   https://s.click.aliexpress.com/e/_Dm6syqb
