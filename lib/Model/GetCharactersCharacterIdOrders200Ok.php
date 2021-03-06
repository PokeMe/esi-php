<?php
/**
 * GetCharactersCharacterIdOrders200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.5.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetCharactersCharacterIdOrders200Ok Class Doc Comment
 *
 * @category    Class
 * @description 200 ok object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdOrders200Ok implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_orders_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'int',
        'duration' => 'int',
        'escrow' => 'float',
        'is_buy_order' => 'bool',
        'is_corp' => 'bool',
        'issued' => '\DateTime',
        'location_id' => 'int',
        'min_volume' => 'int',
        'order_id' => 'int',
        'price' => 'float',
        'range' => 'string',
        'region_id' => 'int',
        'state' => 'string',
        'type_id' => 'int',
        'volume_remain' => 'int',
        'volume_total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => 'int32',
        'duration' => 'int32',
        'escrow' => 'float',
        'is_buy_order' => null,
        'is_corp' => null,
        'issued' => 'date-time',
        'location_id' => 'int64',
        'min_volume' => 'int32',
        'order_id' => 'int64',
        'price' => 'float',
        'range' => null,
        'region_id' => 'int32',
        'state' => null,
        'type_id' => 'int32',
        'volume_remain' => 'int32',
        'volume_total' => 'int32'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'account_id' => 'account_id',
        'duration' => 'duration',
        'escrow' => 'escrow',
        'is_buy_order' => 'is_buy_order',
        'is_corp' => 'is_corp',
        'issued' => 'issued',
        'location_id' => 'location_id',
        'min_volume' => 'min_volume',
        'order_id' => 'order_id',
        'price' => 'price',
        'range' => 'range',
        'region_id' => 'region_id',
        'state' => 'state',
        'type_id' => 'type_id',
        'volume_remain' => 'volume_remain',
        'volume_total' => 'volume_total'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'duration' => 'setDuration',
        'escrow' => 'setEscrow',
        'is_buy_order' => 'setIsBuyOrder',
        'is_corp' => 'setIsCorp',
        'issued' => 'setIssued',
        'location_id' => 'setLocationId',
        'min_volume' => 'setMinVolume',
        'order_id' => 'setOrderId',
        'price' => 'setPrice',
        'range' => 'setRange',
        'region_id' => 'setRegionId',
        'state' => 'setState',
        'type_id' => 'setTypeId',
        'volume_remain' => 'setVolumeRemain',
        'volume_total' => 'setVolumeTotal'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'duration' => 'getDuration',
        'escrow' => 'getEscrow',
        'is_buy_order' => 'getIsBuyOrder',
        'is_corp' => 'getIsCorp',
        'issued' => 'getIssued',
        'location_id' => 'getLocationId',
        'min_volume' => 'getMinVolume',
        'order_id' => 'getOrderId',
        'price' => 'getPrice',
        'range' => 'getRange',
        'region_id' => 'getRegionId',
        'state' => 'getState',
        'type_id' => 'getTypeId',
        'volume_remain' => 'getVolumeRemain',
        'volume_total' => 'getVolumeTotal'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const RANGE_STATION = 'station';
    const RANGE_REGION = 'region';
    const RANGE_SOLARSYSTEM = 'solarsystem';
    const RANGE__1 = '1';
    const RANGE__2 = '2';
    const RANGE__3 = '3';
    const RANGE__4 = '4';
    const RANGE__5 = '5';
    const RANGE__10 = '10';
    const RANGE__20 = '20';
    const RANGE__30 = '30';
    const RANGE__40 = '40';
    const STATE_OPEN = 'open';
    const STATE_CLOSED = 'closed';
    const STATE_EXPIRED = 'expired';
    const STATE_CANCELLED = 'cancelled';
    const STATE_PENDING = 'pending';
    const STATE_CHARACTER_DELETED = 'character_deleted';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRangeAllowableValues()
    {
        return [
            self::RANGE_STATION,
            self::RANGE_REGION,
            self::RANGE_SOLARSYSTEM,
            self::RANGE__1,
            self::RANGE__2,
            self::RANGE__3,
            self::RANGE__4,
            self::RANGE__5,
            self::RANGE__10,
            self::RANGE__20,
            self::RANGE__30,
            self::RANGE__40,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_OPEN,
            self::STATE_CLOSED,
            self::STATE_EXPIRED,
            self::STATE_CANCELLED,
            self::STATE_PENDING,
            self::STATE_CHARACTER_DELETED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['escrow'] = isset($data['escrow']) ? $data['escrow'] : null;
        $this->container['is_buy_order'] = isset($data['is_buy_order']) ? $data['is_buy_order'] : null;
        $this->container['is_corp'] = isset($data['is_corp']) ? $data['is_corp'] : null;
        $this->container['issued'] = isset($data['issued']) ? $data['issued'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['min_volume'] = isset($data['min_volume']) ? $data['min_volume'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['region_id'] = isset($data['region_id']) ? $data['region_id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['volume_remain'] = isset($data['volume_remain']) ? $data['volume_remain'] : null;
        $this->container['volume_total'] = isset($data['volume_total']) ? $data['volume_total'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['account_id'] === null) {
            $invalid_properties[] = "'account_id' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalid_properties[] = "'duration' can't be null";
        }
        if ($this->container['escrow'] === null) {
            $invalid_properties[] = "'escrow' can't be null";
        }
        if ($this->container['is_buy_order'] === null) {
            $invalid_properties[] = "'is_buy_order' can't be null";
        }
        if ($this->container['is_corp'] === null) {
            $invalid_properties[] = "'is_corp' can't be null";
        }
        if ($this->container['issued'] === null) {
            $invalid_properties[] = "'issued' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalid_properties[] = "'location_id' can't be null";
        }
        if ($this->container['min_volume'] === null) {
            $invalid_properties[] = "'min_volume' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalid_properties[] = "'order_id' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalid_properties[] = "'price' can't be null";
        }
        if ($this->container['range'] === null) {
            $invalid_properties[] = "'range' can't be null";
        }
        $allowed_values = $this->getRangeAllowableValues();
        if (!in_array($this->container['range'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'range', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['region_id'] === null) {
            $invalid_properties[] = "'region_id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['type_id'] === null) {
            $invalid_properties[] = "'type_id' can't be null";
        }
        if ($this->container['volume_remain'] === null) {
            $invalid_properties[] = "'volume_remain' can't be null";
        }
        if ($this->container['volume_total'] === null) {
            $invalid_properties[] = "'volume_total' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['account_id'] === null) {
            return false;
        }
        if ($this->container['duration'] === null) {
            return false;
        }
        if ($this->container['escrow'] === null) {
            return false;
        }
        if ($this->container['is_buy_order'] === null) {
            return false;
        }
        if ($this->container['is_corp'] === null) {
            return false;
        }
        if ($this->container['issued'] === null) {
            return false;
        }
        if ($this->container['location_id'] === null) {
            return false;
        }
        if ($this->container['min_volume'] === null) {
            return false;
        }
        if ($this->container['order_id'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['range'] === null) {
            return false;
        }
        $allowed_values = $this->getRangeAllowableValues();
        if (!in_array($this->container['range'], $allowed_values)) {
            return false;
        }
        if ($this->container['region_id'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        if ($this->container['volume_remain'] === null) {
            return false;
        }
        if ($this->container['volume_total'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets account_id
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     * @param int $account_id Wallet division for the buyer or seller of this order. Always 1000 for characters. Currently 1000 through 1006 for corporations
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration Numer of days for which order is valid (starting from the issued date). An order expires at time issued + duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets escrow
     * @return float
     */
    public function getEscrow()
    {
        return $this->container['escrow'];
    }

    /**
     * Sets escrow
     * @param float $escrow For buy orders, the amount of ISK in escrow
     * @return $this
     */
    public function setEscrow($escrow)
    {
        $this->container['escrow'] = $escrow;

        return $this;
    }

    /**
     * Gets is_buy_order
     * @return bool
     */
    public function getIsBuyOrder()
    {
        return $this->container['is_buy_order'];
    }

    /**
     * Sets is_buy_order
     * @param bool $is_buy_order True for a bid (buy) order. False for an offer (sell) order
     * @return $this
     */
    public function setIsBuyOrder($is_buy_order)
    {
        $this->container['is_buy_order'] = $is_buy_order;

        return $this;
    }

    /**
     * Gets is_corp
     * @return bool
     */
    public function getIsCorp()
    {
        return $this->container['is_corp'];
    }

    /**
     * Sets is_corp
     * @param bool $is_corp is_corp boolean
     * @return $this
     */
    public function setIsCorp($is_corp)
    {
        $this->container['is_corp'] = $is_corp;

        return $this;
    }

    /**
     * Gets issued
     * @return \DateTime
     */
    public function getIssued()
    {
        return $this->container['issued'];
    }

    /**
     * Sets issued
     * @param \DateTime $issued Date and time when this order was issued
     * @return $this
     */
    public function setIssued($issued)
    {
        $this->container['issued'] = $issued;

        return $this;
    }

    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param int $location_id ID of the location where order was placed
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets min_volume
     * @return int
     */
    public function getMinVolume()
    {
        return $this->container['min_volume'];
    }

    /**
     * Sets min_volume
     * @param int $min_volume For bids (buy orders), the minimum quantity that will be accepted in a matching offer (sell order)
     * @return $this
     */
    public function setMinVolume($min_volume)
    {
        $this->container['min_volume'] = $min_volume;

        return $this;
    }

    /**
     * Gets order_id
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param int $order_id Unique order ID
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price Cost per unit for this order
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets range
     * @return string
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     * @param string $range Valid order range, numbers are ranges in jumps
     * @return $this
     */
    public function setRange($range)
    {
        $allowed_values = $this->getRangeAllowableValues();
        if (!in_array($range, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'range', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets region_id
     * @return int
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     * @param int $region_id ID of the region where order was placed
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state Current order state
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets type_id
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     * @param int $type_id The type ID of the item transacted in this order
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets volume_remain
     * @return int
     */
    public function getVolumeRemain()
    {
        return $this->container['volume_remain'];
    }

    /**
     * Sets volume_remain
     * @param int $volume_remain Quantity of items still required or offered
     * @return $this
     */
    public function setVolumeRemain($volume_remain)
    {
        $this->container['volume_remain'] = $volume_remain;

        return $this;
    }

    /**
     * Gets volume_total
     * @return int
     */
    public function getVolumeTotal()
    {
        return $this->container['volume_total'];
    }

    /**
     * Sets volume_total
     * @param int $volume_total Quantity of items required or offered at time order was placed
     * @return $this
     */
    public function setVolumeTotal($volume_total)
    {
        $this->container['volume_total'] = $volume_total;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


