<?php
/**
 * Controller Plugin Config Driven Abstract Factory
 *
 * PHP version 5
 *
 * @category  ZF2 Modules
 * @package   RmZfConfigFactories
 * @author    Rod Mcnew
 * @copyright 2014 Rod Mcnew
 * @license   License.txt New BSD License
 * @version   GIT: <git_id>
 * @link      https://github.com/reliv
 */

namespace Reliv\ZfConfigFactories\ConcreteFactory;

use Reliv\ZfConfigFactories\AbstractConfigFactory;
use Zend\ServiceManager\AbstractFactoryInterface;

/**
 * ControllerPlugin Config Driven Abstract Factory
 *
 * PHP version 5
 *
 * @category  ZF2 Modules
 * @package   RmZfConfigFactories
 * @author    Rod Mcnew
 * @copyright 2014 Rod Mcnew
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class ControllerPluginFactory extends AbstractConfigFactory implements AbstractFactoryInterface
{
    /**
     * @var string the config key of the target service manager
     */
    protected $serviceMgrKey = 'controller_plugins';
}
