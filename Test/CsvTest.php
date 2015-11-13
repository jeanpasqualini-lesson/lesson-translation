<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 13/11/15
 * Time: 14:10
 */
namespace Test;

use Interfaces\TestInterface;
use Symfony\Component\Translation\Loader\CsvFileLoader;

class CsvTest extends AbstractTest implements TestInterface
{
    public function runTest()
    {
        $translator = $this->factoryTranslator();

        $translator->addLoader("php", new CsvFileLoader());

        $translator->addResource("php", __DIR__."/../translations/messages.csv", "fr_FR");

        $this->validate($translator);
    }
}