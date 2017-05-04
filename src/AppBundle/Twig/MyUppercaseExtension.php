<?php
namespace AppBundle\Twig;

use AppBundle\Transformer\UppercaseTransformer;

class MyUppercaseExtension extends \Twig_Extension
{
    /**
     * @var UppercaseTransformer
     */
    protected $transformer;

    /**
     * Constructor.
     *
     * @param UppercaseTransformer $transformer
     */
    public function __construct(UppercaseTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('MyUppercase', [$this->transformer, 'transform']),
        ];
    }
}