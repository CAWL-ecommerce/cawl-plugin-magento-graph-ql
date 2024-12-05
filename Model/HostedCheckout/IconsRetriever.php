<?php
declare(strict_types=1);

namespace Cawl\GraphQl\Model\HostedCheckout;

use Cawl\GraphQl\Model\PaymentIcons\IconsFormatter;
use Cawl\GraphQl\Model\PaymentIcons\IconsRetrieverInterface;
use Cawl\PaymentCore\Api\Ui\PaymentIconsProviderInterface;

class IconsRetriever implements IconsRetrieverInterface
{
    /**
     * @var IconsFormatter
     */
    private $iconsFormatter;

    /**
     * @var PaymentIconsProviderInterface
     */
    private $iconProvider;

    public function __construct(IconsFormatter $iconsFormatter, PaymentIconsProviderInterface $iconProvider)
    {
        $this->iconsFormatter = $iconsFormatter;
        $this->iconProvider = $iconProvider;
    }

    /**
     * @param string $code
     * @param string $originalCode
     * @param int $storeId
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function getIcons(string $code, string $originalCode, int $storeId): array
    {
        return $this->iconsFormatter->formatIcons($this->iconProvider->getIcons($storeId));
    }
}
