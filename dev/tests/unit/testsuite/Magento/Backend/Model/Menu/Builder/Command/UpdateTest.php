<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Magento_Backend
 * @subpackage  unit_tests
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Magento\Backend\Model\Menu\Builder\Command;

class UpdateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Backend\Model\Menu\Builder\Command\Update
     */
    protected $_model;

    protected $_params = array(
        'id' => 'item', 'title' => 'item', 'module' => 'Magento_Backend', 'parent' => 'parent'
    );

    protected function setUp()
    {
        $this->_model = new \Magento\Backend\Model\Menu\Builder\Command\Update($this->_params);
    }

    public function testExecuteFillsEmptyItemWithData()
    {
        $params = $this->_model->execute(array());
        $this->assertEquals($this->_params, $params);
    }

    public function testExecuteRewritesDataInFilledItem()
    {
        $params = $this->_model->execute(array('title' => 'newitem'));
        $this->assertEquals($this->_params, $params);
    }
}
