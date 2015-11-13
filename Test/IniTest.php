<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 13/11/15
 * Time: 13:46
 */

namespace Test;


use Interfaces\TestInterface;
use Symfony\Component\Translation\Loader\IniFileLoader;

class IniTest extends AbstractTest implements TestInterface
{
    public function runTest()
    {
        $translator = $this->factoryTranslator();

        $translator->addLoader("ini", new IniFileLoader());

        $translator->addResource("ini", __DIR__."/../translations/messages.ini", "fr_FR");

        $this->validate($translator);
    }

}