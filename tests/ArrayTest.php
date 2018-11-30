<?php

namespace Charles\Helper\Tests;

use Charles\Helper\ArrayHelper;
use Charles\Helper\File\ArrayHelper as FileArrayHelper;
use PHPUnit\Framework\TestCase;

/**
 * 数组的帮助类库
 *
 * @author dusong<1264735045@qq.com>
 */
class ArrayTest extends AbstractTestCase
{

    /**
     * @test
     */
    public function test1()
    {
        $restul = ArrayHelper::test();

        $this->assertEquals("Charles\\Helper\\ArrayHelper::test", $restul);
    }

    /**
     * @test
     */
    public function test2()
    {
        $restul = FileArrayHelper::test();

        $this->assertEquals("Charles\\Helper\\File\\ArrayHelper::test", $restul);
    }
} 