<?php

namespace spec\Phpro\MailManager\Adapter\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ZendMailAdapterSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Phpro\MailManager\Adapter\Factory\ZendMailAdapter');
    }

    public function it_is_a_factory()
    {
        $this->shouldImplement('Zend\ServiceManager\FactoryInterface');
    }

    /**
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceManager
     * @param \Phpro\MailManager\Service\MailMessageCreator $messageCreator
     */
    public function it_should_create_an_instance($serviceManager, $messageCreator)
    {
        $serviceManager->get('Phpro\MailManager\Service\MailMessageCreator')->willReturn($messageCreator);

        $this->createService($serviceManager)->shouldBeAnInstanceOf('Phpro\MailManager\Adapter\ZendMailAdapter');
    }
}
