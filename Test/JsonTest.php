<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 13/11/15
 * Time: 14:09
 */
namespace Test;

use Interfaces\TestInterface;
use Symfony\Component\Translation\Loader\JsonFileLoader;

class JsonTest extends AbstractTest implements TestInterface
{
    public function runTest()
    {
        $translator = $this->factoryTranslator();

        $translator->addLoader("php", new JsonFileLoader());

        $translator->addResource("php", __DIR__."/../translations/messages.json", "fr_FR");

        $this->validate($translator);
    }
}