<?php

namespace tests\codeception\unit\models;

use Codeception\Specify;
use yii\codeception\TestCase;

class UserTest extends TestCase
{

    use Specify;

    protected function setUp()
    {
        parent::setUp();
        $this->specifyConfig()->shallowClone();
        // uncomment the following to load fixtures for user table
        //$this->loadFixtures(['user']);
    }

    // TODO add test methods here
}
