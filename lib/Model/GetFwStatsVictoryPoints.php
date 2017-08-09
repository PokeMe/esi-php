<?php
/**
 * GetFwStatsVictoryPoints
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
 * GetFwStatsVictoryPoints Class Doc Comment
 *
 * @category    Class
 * @description Summary of victory points gained for the given faction
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetFwStatsVictoryPoints implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_fw_stats_victory_points';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'last_week' => 'int',
        'total' => 'int',
        'yesterday' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'last_week' => 'int32',
        'total' => 'int32',
        'yesterday' => 'int32'
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
        'last_week' => 'last_week',
        'total' => 'total',
        'yesterday' => 'yesterday'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'last_week' => 'setLastWeek',
        'total' => 'setTotal',
        'yesterday' => 'setYesterday'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'last_week' => 'getLastWeek',
        'total' => 'getTotal',
        'yesterday' => 'getYesterday'
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
        $this->container['last_week'] = isset($data['last_week']) ? $data['last_week'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['yesterday'] = isset($data['yesterday']) ? $data['yesterday'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['last_week'] === null) {
            $invalid_properties[] = "'last_week' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalid_properties[] = "'total' can't be null";
        }
        if ($this->container['yesterday'] === null) {
            $invalid_properties[] = "'yesterday' can't be null";
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

        if ($this->container['last_week'] === null) {
            return false;
        }
        if ($this->container['total'] === null) {
            return false;
        }
        if ($this->container['yesterday'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets last_week
     * @return int
     */
    public function getLastWeek()
    {
        return $this->container['last_week'];
    }

    /**
     * Sets last_week
     * @param int $last_week Last week's victory points gained
     * @return $this
     */
    public function setLastWeek($last_week)
    {
        $this->container['last_week'] = $last_week;

        return $this;
    }

    /**
     * Gets total
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param int $total Total victory points gained since faction warfare began
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets yesterday
     * @return int
     */
    public function getYesterday()
    {
        return $this->container['yesterday'];
    }

    /**
     * Sets yesterday
     * @param int $yesterday Yesterday's victory points gained
     * @return $this
     */
    public function setYesterday($yesterday)
    {
        $this->container['yesterday'] = $yesterday;

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


