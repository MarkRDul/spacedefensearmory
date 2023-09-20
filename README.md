# Space Defense Armory
## 2023 Liberty CCDC Tryouts Website

Requires PHP setup with MySQL backend.

To set up site, ensure that the database connection in includes/dbh.inc.php has the correct information and is able to connect. Run script.sql on the host with the database. If the connection is set up correctly the shop pages and monitoring page should work normally.

---
## Vulnerabilities
This website is intentionally vulnerable to a multitude of major security errors. As this site is intended to test participant's ability to identify vulnerabilities and patch them, you may wish to try yourself before looking at the complete list.

The alien monitoring sites can be changed in severity by using Get parameters when visiting the monitor page. This can be done by going to the url:
http://<ip>/monitor.php?axiom=0&fcl=0&mec=0&pp=0
Where any of those numbers can be 0 through 4. Changing those numbers allows the status of the sites to be updated following a visit to the page.

---
### Vulnerability List
* SQL injections
    - When updating monitor
    - When getting weapons
* Shells
    - Two P0wny shells, one at shield.php and one at bootstrap/js/bootstrap.package.js.php
    - One in header (every page) with GET parameter cmd
    - One in footer (every page) with POST parameter cmd
    - One on the catalog with GET parameter cmdc, requires GET parameter cmd to activate
    - One in the reviews page with GET parameter review
* Arbitrary file upload with a form on the reviews page going to upload.php
* Arbitrary file read when requesting a weapon (/weapon.php), it's possible to add either a GET or POST paramater of weapon, and it will read the contents of the file specified
* Weapon view PHP XSS
