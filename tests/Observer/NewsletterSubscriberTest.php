<?php

use AwesomePatterns\Observer\NewsletterSubscriber;
use AwesomePatterns\Observer\SendNewsletterEmailHandler;
use AwesomePatterns\Observer\UpdateNewsletterDatabaseHandler;

/**
 * Class NewsletterSubscriberTest
 */
class NewsletterSubscriberTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_subscribe_user_and_send_out_an_email()
    {
        $subscriber = new NewsletterSubscriber;
        $subscriber->attach(new SendNewsletterEmailHandler);
        $subscriber->fire();

        $this->expectOutputString("send out newsletter emails" . PHP_EOL);
    }

    /**
     *@test
     */
    public function it_subscribe_user_send_out_email_and_update_db()
    {
        $subscriber = new NewsletterSubscriber;
        $subscriber->attach(new SendNewsletterEmailHandler)
                   ->attach(new UpdateNewsletterDatabaseHandler);
        $subscriber->fire();

        $this->expectOutputString(
            "send out newsletter emails" . PHP_EOL .
            "persist data in newsletter database" . PHP_EOL
        );
    }

    /**
     *@test
     */
    public function it_attach_listeners_in_array()
    {
        $subscriber = new NewsletterSubscriber;
        $subscriber->attach([
            new SendNewsletterEmailHandler,
            new UpdateNewsletterDatabaseHandler,
        ]);
        $subscriber->fire();

        $this->expectOutputString(
            "send out newsletter emails" . PHP_EOL .
            "persist data in newsletter database" . PHP_EOL
        );
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     * @dataProvider wrongEventListenerDataProvider
     * @param $wrongListeners
     */
    public function it_throws_exception_for_wrong_listeners($wrongListeners)
    {
        $subscriber = new NewsletterSubscriber;
        $subscriber->attach($wrongListeners);
    }

    /**
     * @return array
     */
    public function wrongEventListenerDataProvider()
    {
        return [
            [[new stdClass()]],
            ['dummy'],
            [true],
        ];
    }
}
