<?php
require 'vendor/autoload.php';


class QueueTest extends PHPUnit_Framework_TestCase
{
  public function testEverything()
  {
    $queue = new Queue();
    $this->assertTrue($queue->is_empty());
    $queue->push_back(1);
    $queue->push_back(2);
    $queue->push_back(3);
    $this->assertFalse($queue->is_empty());

    $this->assertEquals(1, $queue->pop_front());
    $this->assertEquals(2, $queue->pop_front());
    $this->assertEquals(3, $queue->pop_front());
    $this->assertTrue($queue->is_empty());

    $queue->push_back(4);
    $this->assertFalse($queue->is_empty());
    $this->assertEquals(4, $queue->pop_front());

    $in_cnt = 0;
    $out_cnt = 0;
    for ($i = 1; $i < 50; $i++)
    {
      for ($j = 0; $j < $i; $j++)
      {
        $queue->push_back($in_cnt);
        $in_cnt++;
      }
      $this->assertEquals($out_cnt, $queue->pop_front());
      $out_cnt++;
    }

    while (!$queue->is_empty())
    {
      $this->assertEquals($out_cnt, $queue->pop_front());
      $out_cnt++;
    }
  }
}

$suite  = new PHPUnit_Framework_TestSuite();
$suite->addTestSuite('QueueTest');
PHPUnit_TextUI_TestRunner::run($suite);
?>

