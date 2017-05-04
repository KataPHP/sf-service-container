<?php
namespace AppBundle\Twig;

class MyUppercaseExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('MyUppercase', 'strtoupper'),
        ];
    }
}