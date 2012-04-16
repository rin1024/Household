<?php
App::import('Model','Post');

class PostTestCase extends CakeTestCase {
  //var $fixtures = array( 'app.post' );
  function setUp(){
    //print_r(get_class_methods("PostTestCase"));
    $this->Post = new Post();
  }
  function tearDown() {
    unset($this->Post);
  }
  /*function testValidate() {
    $data = array();
    $this->Post->create($data);
    $result = $this->Post->validates();
    $this->assertFalse($result);
  }*/
  function testSomeone(){
    $this->assertTrue( $this->Post->findById(1) );
    $this->assertEqual(3, count( $this->Post->findAll() ) );
  }
}
?>
<!--
(
    [0] => setUp
    [1] => tearDown
    [2] => testValidate
    [3] => testSomeone
    [4] => startCase
    [5] => endCase
    [6] => startTest
    [7] => endTest
    [8] => assert
    [9] => skipIf
    [10] => startController
    [11] => endController
    [12] => testAction
    [13] => before
    [14] => start
    [15] => end
    [16] => after
    [17] => getTests
    [18] => loadFixtures
    [19] => assertTags
    [20] => _initDb
    [21] => _loadFixtures
    [22] => __array_permute
    [23] => UnitTestCase
    [24] => assertTrue
    [25] => assertFalse
    [26] => assertNull
    [27] => assertNotNull
    [28] => assertIsA
    [29] => assertNotA
    [30] => assertEqual
    [31] => assertNotEqual
    [32] => assertWithinMargin
    [33] => assertOutsideMargin
    [34] => assertIdentical
    [35] => assertNotIdentical
    [36] => assertReference
    [37] => assertClone
    [38] => assertCopy
    [39] => assertPattern
    [40] => assertWantedPattern
    [41] => assertNoPattern
    [42] => assertNoUnwantedPattern
    [43] => swallowErrors
    [44] => assertNoErrors
    [45] => assertError
    [46] => expectError
    [47] => expectException
    [48] => _coerceExpectation
    [49] => assertErrorPattern
    [50] => SimpleTestCase
    [51] => getLabel
    [52] => skip
    [53] => skipUnless
    [54] => createInvoker
    [55] => run
    [56] => _isTest
    [57] => tell
    [58] => pass
    [59] => fail
    [60] => error
    [61] => exception
    [62] => signal
    [63] => assertExpectation
    [64] => getAssertionLine
    [65] => dump
    [66] => sendMessage
    [67] => getSize
)
-->
