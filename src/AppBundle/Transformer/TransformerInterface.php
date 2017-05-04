<?php
namespace AppBundle\Transformer;

/**
 * Interface TransformerInterface
 */
interface TransformerInterface
{
    /**
     * Transform.
     *
     * @param string $content
     *
     * @return mixed
     */
    public function transform($content);
}
