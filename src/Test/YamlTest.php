<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 13/11/15
 * Time: 14:09
 */

namespace Test;

use Interfaces\TestInterface;
use Symfony\Component\Translation\Loader\YamlFileLoader;

class YamlTest extends AbstractTest implements TestInterface
{
    public function runTest()
    {
        $translator = $this->factoryTranslator();

        $translator->addLoader("php", new YamlFileLoader());

        $translator->addResource("php", __DIR__."/../translations/messages.yml", "fr_FR");

        $this->validate($translator);
    }
}