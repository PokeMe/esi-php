<?php
/**
 * GetCharactersCharacterIdSkillsSkill
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
 * GetCharactersCharacterIdSkillsSkill Class Doc Comment
 *
 * @category    Class
 * @description skill object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdSkillsSkill implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_skills_skill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_skill_level' => 'int',
        'skill_id' => 'int',
        'skillpoints_in_skill' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_skill_level' => 'int32',
        'skill_id' => 'int32',
        'skillpoints_in_skill' => 'int64'
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
        'current_skill_level' => 'current_skill_level',
        'skill_id' => 'skill_id',
        'skillpoints_in_skill' => 'skillpoints_in_skill'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'current_skill_level' => 'setCurrentSkillLevel',
        'skill_id' => 'setSkillId',
        'skillpoints_in_skill' => 'setSkillpointsInSkill'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'current_skill_level' => 'getCurrentSkillLevel',
        'skill_id' => 'getSkillId',
        'skillpoints_in_skill' => 'getSkillpointsInSkill'
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
        $this->container['current_skill_level'] = isset($data['current_skill_level']) ? $data['current_skill_level'] : null;
        $this->container['skill_id'] = isset($data['skill_id']) ? $data['skill_id'] : null;
        $this->container['skillpoints_in_skill'] = isset($data['skillpoints_in_skill']) ? $data['skillpoints_in_skill'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets current_skill_level
     * @return int
     */
    public function getCurrentSkillLevel()
    {
        return $this->container['current_skill_level'];
    }

    /**
     * Sets current_skill_level
     * @param int $current_skill_level current_skill_level integer
     * @return $this
     */
    public function setCurrentSkillLevel($current_skill_level)
    {
        $this->container['current_skill_level'] = $current_skill_level;

        return $this;
    }

    /**
     * Gets skill_id
     * @return int
     */
    public function getSkillId()
    {
        return $this->container['skill_id'];
    }

    /**
     * Sets skill_id
     * @param int $skill_id skill_id integer
     * @return $this
     */
    public function setSkillId($skill_id)
    {
        $this->container['skill_id'] = $skill_id;

        return $this;
    }

    /**
     * Gets skillpoints_in_skill
     * @return int
     */
    public function getSkillpointsInSkill()
    {
        return $this->container['skillpoints_in_skill'];
    }

    /**
     * Sets skillpoints_in_skill
     * @param int $skillpoints_in_skill skillpoints_in_skill integer
     * @return $this
     */
    public function setSkillpointsInSkill($skillpoints_in_skill)
    {
        $this->container['skillpoints_in_skill'] = $skillpoints_in_skill;

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

