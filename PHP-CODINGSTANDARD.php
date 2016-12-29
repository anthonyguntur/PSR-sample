<?php namespace Name\Space\Donjagoda;

use AnotherClassName1;
use AnotherClassName2;
use AnotherClassName3;

/**
 * Documentation if needed
 */
// studly case for class name (just like camel case but using capital letter)
class NameForClass extends ExtendsClassName implements \InterfaceOne, \InterfaceTwo
{
    // constant should always in uppercase
    const VERSION = '1.0';
    const DATE_APPROVED = '2012-06-01';

    // variable should be written with lowercase and words separated with underscores. please use short variable but still readable, 3 words is maximum
    protected $variable_one;

    use TraitClass; // if you want to use trait on this class

    public function __construct()
    {
        $this->variable = $inject_variable;

        $arrays = ['array1', 'array2', 'array3'];

        $long_array = [
            'array1',
            'array2',
            'array3',
            'array4',
            'array5',
            'array6',
            'array7',
            'array8'
        ];
    }

    // camel case for method;
    public static function methodOne($s)
    {
        // regular condition make sure no white space parentesses
        if (condition) {
            # code...
            $boolean = true;  // true must in lowercase
            $boolean = false; // false must in lowercase
            $null = null; // null must in lowercase
        }

            // when using ! condition, and use and, or instead of &&, ||
        if (! empty(condition) and strval(condition) or intval(condition)) {
            # code...

            print('Hello');
            echo "World\n";
        }

        // multiple conditional
        if (condition) {
            #code
        } elseif (condition2) {
            #code
        } else {
            $ternary = (test ? true : false);
        }

        // while conditional
        while ($this->variable_one) {
        // for body
        }

        for ($i = 0; $i < 10; $i++) {
            // for body
        }

        // You can iterate over the keys as well as the values
        foreach ($wheels as $vehicle => $wheel_count) {
            // leave whitespace between concatenation `.`
            echo 'A $vehicle ' . $variable . "has {$wheel_count} wheels";
        }

        // error handler
        try {
            #code
        } catch (Exception $e) {
            #code
        }
    }

    /**
     * Please leave your description about this method
     *
     * @param integer $a
     * @param string $b
     * @return void
     */
    // no white space after opening and before closing parenthesses, make sure to leave whitespace after comma `,`
    public function methodTwo($a, $b = null)
    {
        // how to call static method on the same class
        self::methodThree();
    }

    /*
        Visibility MUST be declared on all properties and methods; 
        abstract and final MUST be declared before the visibility; 
        static MUST be declared after the visibility.
    */
    final public static function methodThree()
    {
        // switch case
        switch ($expr) {
            case 0:
                echo 'First case, with a break';
                break;
            case 1:
                echo 'Second case, which falls through';
                // no break
            case 2:
            case 3:
            case 4:
                echo 'Third case, return instead of break';
                return;
            default:
                echo 'Default case';
                break;
        }
    }

    // for a very long method name and have the arguments more than 3, use this format
    public function aVeryLongMethodName(
        ClassTypeHint $arg1,
        &$arg2,
        array $arg3 = [],
        $arg4 = null
    ) {
        $foo->bar(
            $long_argument,
            $longer_argument,
            $much_longer_argument,
            $very_much_longer_argument
        );
    }
}
// important notes:
// avoid to use double quotes versus single quotes. but you still can use double quotes when needed.
// never ever use PHP closing tag for a file containing only PHP!
// Code MUST use 4 spaces for indenting, not tabs!
// All PHP files MUST end with a single blank line.
/**
    PHP CODING STANDARD based on (http://www.php-fig.org)
    - PSR-1
    - PSR-2
    - PSR-4
    ======================
    version  : 1.1
    modified : Dec 29 2016
*/
