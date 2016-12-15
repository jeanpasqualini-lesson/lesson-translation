<?php
namespace Format;

use Symfony\Component\Translation\Exception\InvalidResourceException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;
use Symfony\Component\Translation\Loader\LoaderInterface;
use Symfony\Component\Translation\MessageCatalogue;

/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 13/11/15
 * Time: 14:18
 */
class CustomFormat implements LoaderInterface
{
    public function load($resource, $locale, $domain = 'messages')
    {
        $catalogue = new MessageCatalogue($locale);

        if($resource instanceof \Closure) $catalogue->add($resource());

        return $catalogue;
    }
}