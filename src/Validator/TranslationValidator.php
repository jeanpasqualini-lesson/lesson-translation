<?php
namespace Validator;
use Symfony\Component\Translation\Translator;

/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 13/11/15
 * Time: 13:35
 */
class TranslationValidator
{
    protected $translator;

    public function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }

    public function validate()
    {
        $this->trans("Symfony is great");
        $this->trans("Hello %name%", array("%name%" => "Jean"));
        $this->transChoice("apple.choice", 10, array("%count%" => 10));
    }

    protected function trans($id, $params = array())
    {
        echo "\t [DEBUG] ".$id." => " .$this->translator->trans($id, $params).PHP_EOL;
    }

    protected function transChoice($id, $count, $params = array())
    {
        echo "\t [DEBUG] ".$id." => " .$this->translator->transChoice($id, $count, $params).PHP_EOL;
    }
}