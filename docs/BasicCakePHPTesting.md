Basic Cake PHP testing
======================

### Prerequisites: ###

The prerequisites for installing CakePHP can be found [here](http://book.cakephp.org/3.0/en/installation.html#requirements)

In order to install intl extension, run the following commands:

    brew update
    brew install icu4c
    sudo pecl update-channels
    sudo pecl install intl
    
At this point, the terminal will display the path of intl.so file. Note this down for future reference.

    sudo cp /etc/php.ini{,.bak}
    sudo vim /etc/php.ini
    
Add the line `extension=path-of-intl.so-file` to php.ini, save and exit

    sudo apachectl -t
    sudo apache restart
    php -m | grep intl
    
You might be displayed something like `19:intl` which means that intl extension installation was successful.

### Installation: ###

The steps for installing CakePHP can be found [here](http://book.cakephp.org/3.0/en/installation.html#installing-cakephp)

If the installation was successful, then you should be able to see the following after navigating to your app’s folder and running `bin/cake server`:

[see screenshot]

And you should be able to open http://localhost:8765/ on your browser

### Unit Testing ###

CakePHP uses PHPUnit as its testing framework. Check [this link](http://book.cakephp.org/3.0/en/development/testing.html#installing-phpunit) for installing PHPUnit.


### References ###

http://culttt.com/2013/01/07/what-is-php-composer/
http://culttt.com/2013/03/13/getting-started-with-phpunit/
http://darraghenright.tumblr.com/post/22027208929/installing-intl-package-on-osx-lion
http://book.cakephp.org/3.0/en/development/testing.html#checking-the-test-setup
http://book.cakephp.org/3.0/en/development/testing.html#installing-phpunit
