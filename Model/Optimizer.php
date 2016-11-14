<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\ElasticsuiteCatalogOptimizer
 * @author    Fanny DECLERCK <fadec@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */
namespace Smile\ElasticsuiteCatalogOptimizer\Model;

use Smile\ElasticsuiteCatalogOptimizer\Api\Data\date;
use Smile\ElasticsuiteCatalogOptimizer\Api\Data\OptimizerInterface;

/**
 * Optimizer Model
 *
 * @SuppressWarnings(PHPMD.CamelCasePropertyName)
 *
 * @category Smile
 * @package  Smile\ElasticsuiteCatalogOptimizer
 * @author   Fanny DECLERCK <fadec@smile.fr>
 */
class Optimizer extends \Magento\Framework\Model\AbstractModel implements OptimizerInterface
{
    /**
     * Internal Constructor
     *
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct()
    {
        $this->_init('Smile\ElasticsuiteCatalogOptimizer\Model\ResourceModel\Optimizer');
    }

    /**
     * Get Optimizer ID.
     *
     * @return int|null
     */
    public function getOptimizerId()
    {
        return $this->getId();
    }

    /**
     * Retrieve Optimizer name.
     *
     * @return string
     */
    public function getName()
    {
        return (string) $this->getData(self::NAME);
    }

    /**
     * Get Optimizer status.
     *
     * @return bool
     */
    public function isActive()
    {
        return (bool) $this->getData(self::IS_ACTIVE);
    }

    /**
     * Get Optimizer model.
     *
     * @return string
     */
    public function getModel()
    {
        return (string) $this->getData(self::MODEL);
    }

    /**
     * Get Optimizer config.
     *
     * @return array|string
     */
    public function getConfig()
    {
        return $this->getData(self::CONFIG);
    }

    /**
     * Get Optimizer store id.
     *
     * @return int
     */
    public function getStoreId()
    {
        return (int) $this->getData(self::STORE_ID);
    }

    /**
     * Get Optimizer from date.
     *
     * @return date
     */
    public function getFromDate()
    {
        return (string) $this->getData(self::FROM_DATE);
    }

    /**
     * Get Optimizer to date.
     *
     * @return date
     */
    public function getToDate()
    {
        return (string) $this->getData(self::TO_DATE);
    }

    /**
     * Get Optimizer search container.
     *
     * @return string
     */
    public function getSearchContainer()
    {
        return (string) $this->getData(self::SEARCH_CONTAINER);
    }

    /**
     * Set name.
     *
     * @param string $name the value to save.
     *
     * @return Optimizer
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, (string) $name);
    }

    /**
     * Set Optimizer status.
     *
     * @param bool $status The Optimizer status.
     *
     * @return Optimizer
     */
    public function setIsActive($status)
    {
        return $this->setData(self::IS_ACTIVE, (bool) $status);
    }

    /**
     * Set Optimizer model.
     *
     * @param string $model The Optimizer model.
     *
     * @return Optimizer
     */
    public function setModel($model)
    {
        return $this->setData(self::MODEL, (string) $model);
    }

    /**
     * Set Optimizer config.
     *
     * @param string|array $config The Optimizer config.
     *
     * @return Optimizer
     */
    public function setConfig($config)
    {
        return $this->setData(self::CONFIG, $config);
    }

    /**
     * Set Optimizer store id.
     *
     * @param int $storeId The Optimizer store id.
     *
     * @return Optimizer
     */
    public function setStoreId($storeId)
    {
        return $this->setData(self::STORE_ID, (int) $storeId);
    }

    /**
     * Set Optimizer from date.
     *
     * @param date $fromDate The Optimizer from date.
     *
     * @return Optimizer
     */
    public function setFromDate($fromDate)
    {
        return $this->setData(self::FROM_DATE, (string) $fromDate);
    }

    /**
     * Set Optimizer to date.
     *
     * @param date $toDate The Optimizer to date.
     *
     * @return Optimizer
     */
    public function setToDate($toDate)
    {
        return $this->setData(self::TO_DATE, (string) $toDate);
    }

    /**
     * Set Optimizer search container.
     *
     * @param string $searchContainer The Optimizer search container.
     *
     * @return Optimizer
     */
    public function setSearchContainer($searchContainer)
    {
        return $this->setData(self::SEARCH_CONTAINER, (string) $searchContainer);
    }

}
