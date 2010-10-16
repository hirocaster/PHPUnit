<?php
require_once 'PHPUnit/Framework.php';
 
class ExceptionTest extends PHPUnit_Framework_TestCase {
    public function testException() {
        try {
            // ... 例外が発生するであろうコード ...
          throw new Exception('foo');
        }
 
        catch (Exception $ex) {
            return;
        }
 
        $this->fail('期待通りの例外が発生しませんでした。');
    }
}
?>