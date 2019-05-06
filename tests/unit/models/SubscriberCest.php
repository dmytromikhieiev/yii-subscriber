<?php

use app\models\Subscriber;

/**
 * Class SubscriberCest
 */
class SubscriberCest
{
    /**
     * @param UnitTester $I
     */
    public function tryToTest(UnitTester $I)
    {
        $subscriber = new Subscriber();
        $subscriber->email = 'test@test.com';
        $I->assertTrue($subscriber->validate());
        $subscriber->email = 'not-valid-email';
        $I->assertFalse($subscriber->validate());
        $errors = $subscriber->getErrors();
        $I->assertArraySubset(['email' => ['Email is not a valid email address.']], $errors);
        $subscriber->email = null;
        $I->assertFalse($subscriber->validate());
        $errors = $subscriber->getErrors();
        $I->assertArraySubset(['email' => ['Email cannot be blank.']], $errors);
    }
}
