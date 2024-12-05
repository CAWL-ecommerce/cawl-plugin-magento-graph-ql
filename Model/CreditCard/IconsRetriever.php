<?php
declare(strict_types=1);

namespace Cawl\GraphQl\Model\CreditCard;

use Cawl\CreditCard\Ui\PaymentIconsProvider;
use Cawl\GraphQl\Model\PaymentIcons\IconsFormatter;
use Cawl\GraphQl\Model\PaymentIcons\IconsRetrieverInterface;

class IconsRetriever implements IconsRetrieverInterface
{
    /**
     * @var IconsFormatter
     */
    private $iconsFormatter;

    /**
     * @var PaymentIconsProvider
     */
    private $iconProvider;

    public function __construct(IconsFormatter $iconsFormatter, PaymentIconsProvider $iconProvider)
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
