<?php
declare(strict_types=1);

namespace GuzabaPlatform\Cart;

use GuzabaPlatform\Components\Base\Interfaces\ComponentInterface;
use GuzabaPlatform\Components\Base\Traits\ComponentTrait;

/**
 * Class Component
 * @package GuzabaPlatform\Component
 */
class Component implements ComponentInterface
{

    use ComponentTrait;

    protected const COMPONENT_NAME = "Cart";
    //https://components.platform.guzaba.org/component/{vendor}/{component}
    protected const COMPONENT_URL = 'https://components.platform.guzaba.org/component/guzaba-platform/tags';
    //protected const DEV_COMPONENT_URL//this should come from composer.json
    protected const COMPONENT_NAMESPACE = 'GuzabaPlatform\\Cart';
    protected const COMPONENT_VERSION = 'dev';//TODO update this to come from the Composer.json file of the component
    protected const VENDOR_NAME = 'GuzabaPlatform';
    protected const VENDOR_URL = 'https://platofrm.guzaba.org';



}