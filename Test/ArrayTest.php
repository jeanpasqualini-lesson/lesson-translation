<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 09/11/15
 * Time: 17:28
 */

namespace Test;

use \Interfaces\TestInterface;
use Symfony\Component\Translation\Loader\ArrayLoader;
use Symfony\Component\Translation\MessageSelector;
use Symfony\Component\Translation\Translator;
use Validator\TranslationValidator;

class ArrayTest extends AbstractTest implements TestInterface
{
    public function runTest()
    {
        $translator = new Translator("fr_FR", new MessageSelector());

        $translator->addLoader("array", new ArrayLoader());

        $translator->addResource("array", array(
            "Hello World!" => "Bonjour",
            "Symfony is great" => "Symfony est le meuilleur",
            "Hello %name%" => "Bonjour %name%",
            "apple.choice" => "Une pomme | %count% pommes"
        ), "fr_FR");

        $translator->setFallbackLocales(array("en"));

        (new TranslationValidator($translator))->validate();
    }
}