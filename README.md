 Jour 2 - Job 02 - Test Unitaire avec PHPUnit

 1: Initialiser Composer
Commande pour créer le fichier `composer.json` :

composer init --no-interaction

![composer init](screenshots/01-composer-init.jpg)

 2: Installer PHPUnit

composer require --dev phpunit/phpunit

![install phpunit](screenshots/02-install-phpunit.jpg)

 3: Créer les dossiers src/ et tests/

mkdir src
mkdir tests

![mkdir](screenshots/03-mkdir-src-tests.jpg)

4: Créer la classe Math.php
Classe PHP avec la méthode addition :
![Math.php](screenshots/04-math-php.jpg)

 5: Créer le fichier MathTest.php
Fichier de test avec PHPUnit :
![MathTest.php](screenshots/05-mathtest-php.jpg)

 6: Lancer les tests - succès

./vendor/bin/phpunit tests/

![tests verts](screenshots/06-tests-verts.jpg)

7: Erreur volontaire
Modification du `+` en `*` dans Math.php :
![erreur volontaire](screenshots/07-erreur-volontaire.jpg)

8: Tests en échec
![tests rouges](screenshots/08-tests-rouges.jpg)

9: Correction du bug
Remise du `+` dans Math.php :
![correction](screenshots/09-correction.jpg)

10: Tests finaux - succès
![tests verts final](screenshots/10-tests-verts-final.jpg)