<?php
/**
 * @category    Scandiweb
 * @package     Scandiweb_Test
 * @author      Abdelrahman Elbasel <info@scandiweb.com>
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0 (OSL-3.0)
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Scandiweb_Test',
    __DIR__
);
