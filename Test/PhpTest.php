<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 13/11/15
 * Time: 14:07
 */

namespace Test;


use Interfaces\TestInterface;
use Symfony\Component\Translation\Loader\PhpFileLoader;

class PhpTest extends AbstractTest implements TestInterface
{
    public function runTest()
    {
        $translator = $this->factoryTranslator();

        $translator->addLoader("php", new PhpFileLoader());

        $translator->addResource("php", __DIR__."/../translations/messages.php", "fr_FR");

        $this->validate($translator);
    }
}