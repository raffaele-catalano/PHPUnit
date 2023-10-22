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
<ul>
  <li>aggiungendo `--filter` ed il nome della funzione si può testare solo quella all'interno di un file che contiene altri test</li>
  <li>aggiungendo `--colors` -> si avrà una sottolineatura colorata in base al successo o al fallimento del test</li>
  <li>aggiungendo -> `--testdox` -> si avrà un feedback testuale</li>
</ul>


### Alcuni Esempi
`php vendor/bin/phpunit total-phpunit/tests/ExampleTest.php --colors`  
`php vendor/bin/phpunit total-phpunit/tests/ExampleTest.php --colors -testdox`  
`php vendor/bin/phpunit total-phpunit/tests/ExampleTest.php --filter testProductIsCalculatedCorrectly`  
`php vendor/bin/phpunit total-phpunit/tests/ExampleTest.php --filter testProductIsCalculatedCorrectly --colors`  
`php vendor/bin/phpunit total-phpunit/tests/ExampleTest.php --filter testProductIsCalculatedCorrectly --colors --testdox`