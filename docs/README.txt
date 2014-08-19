The virtual box can be started by running 'vagrant up' in the root directory.
   https://docs.vagrantup.com/v2/installation/

Composer is needed to bring in dependencies. Composer can be installed by running 'curl -sS https://getcomposer.org/installer | php' in the root directory.
Once composer is installed the dependencies can be downloaded by running 'php composer.phar install'

The site can be accessed at http:/10.10.10.10/

Unit tests can be run by:
cd tests/
../bin/phpunit --coverage-html

Feature tests require a standalone selenium server.
Tests can be run by
bin/behat features/EpisodeSearch.feature