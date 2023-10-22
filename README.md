# PHPUnit
> Repo di apprendimento `PHP Unit Test`.

## Requisiti:
Installare le dipendenze PHPUnit nel terminale ↓<br>
`composer require --dev phpunit/phpunit`

## Per far partire il/i test: ↓
        
`php vendor/bin/phpunit total-phpunit/tests/`
`php vendor/bin/phpunit total-phpunit/tests/ExampleTest.php`
`php vendor/bin/phpunit total-phpunit/tests/CartTest.php`

## Alcune opzioni di visualizzazione e/o filtraggio dei `Test`
-> aggiungendo `--filter` ed il nome della funzione si può testare solo quella all'interno di un file che contiene altri test
-> aggiungendo `--colors` -> si avrà una sottolineatura colorata in base al successo o al fallimento del test
-> aggiungendo -> `--testdox` -> si avrà un feedback testuale


### Alcuni Esempi:
<ul>
  <li>php vendor/bin/phpunit total-phpunit/tests/ExampleTest.php --colors</li>
  <li>php vendor/bin/phpunit total-phpunit/tests/ExampleTest.php --colors -testdox</li>
  <li>php vendor/bin/phpunit total-phpunit/tests/ExampleTest.php --filters</li>testProductIsCalculatedCorrectly</li>
  <li>php vendor/bin/phpunit total-phpunit/tests/ExampleTest.php --filters testProductIsCalculatedCorrectly --colors</li>
  <li>php vendor/bin/phpunit total-phpunit/tests/ExampleTest.php --filter testProductIsCalculatedCorrectly --colors --testdox</li>
</ul>