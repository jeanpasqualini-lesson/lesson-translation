<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 13/11/15
 * Time: 14:20
 */

namespace Test;


use Format\CustomFormat;
use Interfaces\TestInterface;

class CustomTest extends AbstractTest implements TestInterface
{
    public function runTest()
    {
        $translator = $this->factoryTranslator();

        $translator->addLoader("custom", new CustomFormat());

        $translator->addResource("custom", function()
        {
            $messages = require __DIR__."/../translations/messages.php";

            $messages = array_map(function($item)
            {
               return $item." ".uniqid();
            }, $messages);

            return $messages;
        }, "fr_FR");

        $this->validate($translator);
    }
}