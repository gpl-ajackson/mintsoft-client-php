<?php
/**
 * ToolkitDataClassesStockASN
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.47-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ToolkitDataClassesStockASN Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ToolkitDataClassesStockASN implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Toolkit.DataClasses.Stock.ASN';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clientshortname' => 'string',
        'po_reference' => 'string',
        'supplier' => 'string',
        'product_supplier_id' => 'int',
        'estimated_delivery' => '\DateTime',
        'estimated_time_to_dock' => '\DateTime',
        'warehouse_booked_date' => '\DateTime',
        'booked_in_date' => '\DateTime',
        'comments' => 'string',
        'goods_in_type' => 'string',
        'quantity' => 'int',
        'asn_status' => '\Swagger\Client\Model\ToolkitDataClassesStockASNStatus',
        'asn_status_id' => 'int',
        'shipped' => 'bool',
        'hours_logged' => 'double',
        'items' => '\Swagger\Client\Model\ToolkitDataClassesStockASNItem[]',
        'warehouse_id' => 'int',
        'client_id' => 'int',
        'id' => 'int',
        'last_updated' => '\DateTime',
        'last_updated_by_user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clientshortname' => null,
        'po_reference' => null,
        'supplier' => null,
        'product_supplier_id' => 'int32',
        'estimated_delivery' => 'date-time',
        'estimated_time_to_dock' => 'date-time',
        'warehouse_booked_date' => 'date-time',
        'booked_in_date' => 'date-time',
        'comments' => null,
        'goods_in_type' => null,
        'quantity' => 'int32',
        'asn_status' => null,
        'asn_status_id' => 'int32',
        'shipped' => null,
        'hours_logged' => 'double',
        'items' => null,
        'warehouse_id' => 'int32',
        'client_id' => 'int32',
        'id' => 'int32',
        'last_updated' => 'date-time',
        'last_updated_by_user' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'clientshortname' => 'CLIENTSHORTNAME',
        'po_reference' => 'POReference',
        'supplier' => 'Supplier',
        'product_supplier_id' => 'ProductSupplierId',
        'estimated_delivery' => 'EstimatedDelivery',
        'estimated_time_to_dock' => 'EstimatedTimeToDock',
        'warehouse_booked_date' => 'WarehouseBookedDate',
        'booked_in_date' => 'BookedInDate',
        'comments' => 'Comments',
        'goods_in_type' => 'GoodsInType',
        'quantity' => 'Quantity',
        'asn_status' => 'ASNStatus',
        'asn_status_id' => 'ASNStatusId',
        'shipped' => 'Shipped',
        'hours_logged' => 'HoursLogged',
        'items' => 'Items',
        'warehouse_id' => 'WarehouseId',
        'client_id' => 'ClientId',
        'id' => 'ID',
        'last_updated' => 'LastUpdated',
        'last_updated_by_user' => 'LastUpdatedByUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clientshortname' => 'setClientshortname',
        'po_reference' => 'setPoReference',
        'supplier' => 'setSupplier',
        'product_supplier_id' => 'setProductSupplierId',
        'estimated_delivery' => 'setEstimatedDelivery',
        'estimated_time_to_dock' => 'setEstimatedTimeToDock',
        'warehouse_booked_date' => 'setWarehouseBookedDate',
        'booked_in_date' => 'setBookedInDate',
        'comments' => 'setComments',
        'goods_in_type' => 'setGoodsInType',
        'quantity' => 'setQuantity',
        'asn_status' => 'setAsnStatus',
        'asn_status_id' => 'setAsnStatusId',
        'shipped' => 'setShipped',
        'hours_logged' => 'setHoursLogged',
        'items' => 'setItems',
        'warehouse_id' => 'setWarehouseId',
        'client_id' => 'setClientId',
        'id' => 'setId',
        'last_updated' => 'setLastUpdated',
        'last_updated_by_user' => 'setLastUpdatedByUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clientshortname' => 'getClientshortname',
        'po_reference' => 'getPoReference',
        'supplier' => 'getSupplier',
        'product_supplier_id' => 'getProductSupplierId',
        'estimated_delivery' => 'getEstimatedDelivery',
        'estimated_time_to_dock' => 'getEstimatedTimeToDock',
        'warehouse_booked_date' => 'getWarehouseBookedDate',
        'booked_in_date' => 'getBookedInDate',
        'comments' => 'getComments',
        'goods_in_type' => 'getGoodsInType',
        'quantity' => 'getQuantity',
        'asn_status' => 'getAsnStatus',
        'asn_status_id' => 'getAsnStatusId',
        'shipped' => 'getShipped',
        'hours_logged' => 'getHoursLogged',
        'items' => 'getItems',
        'warehouse_id' => 'getWarehouseId',
        'client_id' => 'getClientId',
        'id' => 'getId',
        'last_updated' => 'getLastUpdated',
        'last_updated_by_user' => 'getLastUpdatedByUser'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['clientshortname'] = isset($data['clientshortname']) ? $data['clientshortname'] : null;
        $this->container['po_reference'] = isset($data['po_reference']) ? $data['po_reference'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['product_supplier_id'] = isset($data['product_supplier_id']) ? $data['product_supplier_id'] : null;
        $this->container['estimated_delivery'] = isset($data['estimated_delivery']) ? $data['estimated_delivery'] : null;
        $this->container['estimated_time_to_dock'] = isset($data['estimated_time_to_dock']) ? $data['estimated_time_to_dock'] : null;
        $this->container['warehouse_booked_date'] = isset($data['warehouse_booked_date']) ? $data['warehouse_booked_date'] : null;
        $this->container['booked_in_date'] = isset($data['booked_in_date']) ? $data['booked_in_date'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['goods_in_type'] = isset($data['goods_in_type']) ? $data['goods_in_type'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['asn_status'] = isset($data['asn_status']) ? $data['asn_status'] : null;
        $this->container['asn_status_id'] = isset($data['asn_status_id']) ? $data['asn_status_id'] : null;
        $this->container['shipped'] = isset($data['shipped']) ? $data['shipped'] : null;
        $this->container['hours_logged'] = isset($data['hours_logged']) ? $data['hours_logged'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_updated'] = isset($data['last_updated']) ? $data['last_updated'] : null;
        $this->container['last_updated_by_user'] = isset($data['last_updated_by_user']) ? $data['last_updated_by_user'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['supplier']) && (mb_strlen($this->container['supplier']) > 250)) {
            $invalidProperties[] = "invalid value for 'supplier', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['supplier']) && (mb_strlen($this->container['supplier']) < 0)) {
            $invalidProperties[] = "invalid value for 'supplier', the character length must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets clientshortname
     *
     * @return string
     */
    public function getClientshortname()
    {
        return $this->container['clientshortname'];
    }

    /**
     * Sets clientshortname
     *
     * @param string $clientshortname clientshortname
     *
     * @return $this
     */
    public function setClientshortname($clientshortname)
    {
        $this->container['clientshortname'] = $clientshortname;

        return $this;
    }

    /**
     * Gets po_reference
     *
     * @return string
     */
    public function getPoReference()
    {
        return $this->container['po_reference'];
    }

    /**
     * Sets po_reference
     *
     * @param string $po_reference po_reference
     *
     * @return $this
     */
    public function setPoReference($po_reference)
    {
        $this->container['po_reference'] = $po_reference;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return string
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param string $supplier supplier
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        if (!is_null($supplier) && (mb_strlen($supplier) > 250)) {
            throw new \InvalidArgumentException('invalid length for $supplier when calling ToolkitDataClassesStockASN., must be smaller than or equal to 250.');
        }
        if (!is_null($supplier) && (mb_strlen($supplier) < 0)) {
            throw new \InvalidArgumentException('invalid length for $supplier when calling ToolkitDataClassesStockASN., must be bigger than or equal to 0.');
        }

        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets product_supplier_id
     *
     * @return int
     */
    public function getProductSupplierId()
    {
        return $this->container['product_supplier_id'];
    }

    /**
     * Sets product_supplier_id
     *
     * @param int $product_supplier_id product_supplier_id
     *
     * @return $this
     */
    public function setProductSupplierId($product_supplier_id)
    {
        $this->container['product_supplier_id'] = $product_supplier_id;

        return $this;
    }

    /**
     * Gets estimated_delivery
     *
     * @return \DateTime
     */
    public function getEstimatedDelivery()
    {
        return $this->container['estimated_delivery'];
    }

    /**
     * Sets estimated_delivery
     *
     * @param \DateTime $estimated_delivery estimated_delivery
     *
     * @return $this
     */
    public function setEstimatedDelivery($estimated_delivery)
    {
        $this->container['estimated_delivery'] = $estimated_delivery;

        return $this;
    }

    /**
     * Gets estimated_time_to_dock
     *
     * @return \DateTime
     */
    public function getEstimatedTimeToDock()
    {
        return $this->container['estimated_time_to_dock'];
    }

    /**
     * Sets estimated_time_to_dock
     *
     * @param \DateTime $estimated_time_to_dock estimated_time_to_dock
     *
     * @return $this
     */
    public function setEstimatedTimeToDock($estimated_time_to_dock)
    {
        $this->container['estimated_time_to_dock'] = $estimated_time_to_dock;

        return $this;
    }

    /**
     * Gets warehouse_booked_date
     *
     * @return \DateTime
     */
    public function getWarehouseBookedDate()
    {
        return $this->container['warehouse_booked_date'];
    }

    /**
     * Sets warehouse_booked_date
     *
     * @param \DateTime $warehouse_booked_date warehouse_booked_date
     *
     * @return $this
     */
    public function setWarehouseBookedDate($warehouse_booked_date)
    {
        $this->container['warehouse_booked_date'] = $warehouse_booked_date;

        return $this;
    }

    /**
     * Gets booked_in_date
     *
     * @return \DateTime
     */
    public function getBookedInDate()
    {
        return $this->container['booked_in_date'];
    }

    /**
     * Sets booked_in_date
     *
     * @param \DateTime $booked_in_date booked_in_date
     *
     * @return $this
     */
    public function setBookedInDate($booked_in_date)
    {
        $this->container['booked_in_date'] = $booked_in_date;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets goods_in_type
     *
     * @return string
     */
    public function getGoodsInType()
    {
        return $this->container['goods_in_type'];
    }

    /**
     * Sets goods_in_type
     *
     * @param string $goods_in_type goods_in_type
     *
     * @return $this
     */
    public function setGoodsInType($goods_in_type)
    {
        $this->container['goods_in_type'] = $goods_in_type;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets asn_status
     *
     * @return \Swagger\Client\Model\ToolkitDataClassesStockASNStatus
     */
    public function getAsnStatus()
    {
        return $this->container['asn_status'];
    }

    /**
     * Sets asn_status
     *
     * @param \Swagger\Client\Model\ToolkitDataClassesStockASNStatus $asn_status asn_status
     *
     * @return $this
     */
    public function setAsnStatus($asn_status)
    {
        $this->container['asn_status'] = $asn_status;

        return $this;
    }

    /**
     * Gets asn_status_id
     *
     * @return int
     */
    public function getAsnStatusId()
    {
        return $this->container['asn_status_id'];
    }

    /**
     * Sets asn_status_id
     *
     * @param int $asn_status_id asn_status_id
     *
     * @return $this
     */
    public function setAsnStatusId($asn_status_id)
    {
        $this->container['asn_status_id'] = $asn_status_id;

        return $this;
    }

    /**
     * Gets shipped
     *
     * @return bool
     */
    public function getShipped()
    {
        return $this->container['shipped'];
    }

    /**
     * Sets shipped
     *
     * @param bool $shipped shipped
     *
     * @return $this
     */
    public function setShipped($shipped)
    {
        $this->container['shipped'] = $shipped;

        return $this;
    }

    /**
     * Gets hours_logged
     *
     * @return double
     */
    public function getHoursLogged()
    {
        return $this->container['hours_logged'];
    }

    /**
     * Sets hours_logged
     *
     * @param double $hours_logged hours_logged
     *
     * @return $this
     */
    public function setHoursLogged($hours_logged)
    {
        $this->container['hours_logged'] = $hours_logged;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\ToolkitDataClassesStockASNItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\ToolkitDataClassesStockASNItem[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param int $warehouse_id warehouse_id
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param int $client_id client_id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param \DateTime $last_updated last_updated
     *
     * @return $this
     */
    public function setLastUpdated($last_updated)
    {
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets last_updated_by_user
     *
     * @return string
     */
    public function getLastUpdatedByUser()
    {
        return $this->container['last_updated_by_user'];
    }

    /**
     * Sets last_updated_by_user
     *
     * @param string $last_updated_by_user last_updated_by_user
     *
     * @return $this
     */
    public function setLastUpdatedByUser($last_updated_by_user)
    {
        $this->container['last_updated_by_user'] = $last_updated_by_user;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


