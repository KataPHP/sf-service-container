<?php
namespace AppBundle\Transformer;

/**
 * Class MD5Transformer
 *
 * @author Florent DESPIERRES <florent.despierres.ext@francetv.fr>
 */
class MD5Transformer implements TransformerInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform($content)
    {
        return MD5($content);
    }
}