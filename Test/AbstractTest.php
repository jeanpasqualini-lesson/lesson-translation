<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 13/11/15
 * Time: 13:47
 */

namespace Test;
use Symfony\Component\Translation\MessageSelector;
use Symfony\Component\Translation\Translator;
use Validator\TranslationValidator;

class AbstractTest
{
    /**
     * @return Translator
     */
    public function factoryTranslator()
    {
        return new Translator("fr_FR", new MessageSelector());
    }

    public function validate(Translator $translator)
    {
        $validator = new TranslationValidator($translator);

        $validator->validate();
    }
}