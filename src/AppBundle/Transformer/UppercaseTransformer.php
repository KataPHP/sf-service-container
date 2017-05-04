<?php
namespace AppBundle\Transformer;

use Psr\Log\LoggerInterface;

/**
 * Class UppercaseTransformer
 *
 * @author Florent DESPIERRES <florent.despierres.ext@francetv.fr>
 */
class UppercaseTransformer implements TransformerInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * {@inheritdoc}
     */
    public function transform($content)
    {
        $this->logger->info(sprintf('The UppercaseTransformer has transformed %s', $content));

        return strtoupper($content);
    }
}