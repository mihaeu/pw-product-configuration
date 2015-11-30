<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'articlewithmultipleoptionstest' => '/ArticleWithMultipleOptionsTest.php',
                'articlewithoneoptiontest' => '/ArticleWithOneOptionTest.php',
                'articlewithoutoptionstest' => '/ArticleWithoutOptionsTest.php',
                'createmoneytrait' => '/CreateMoneyTrait.php',
                'createusdtrait' => '/CreateUsdTrait.php',
                'currencytest' => '/CurrencyTest.php',
                'moneytest' => '/MoneyTest.php',
                'optiontest' => '/OptionTest.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
