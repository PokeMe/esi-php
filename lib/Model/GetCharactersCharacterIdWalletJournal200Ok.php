<?php
/**
 * GetCharactersCharacterIdWalletJournal200Ok
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
 * GetCharactersCharacterIdWalletJournal200Ok Class Doc Comment
 *
 * @category    Class
 * @description 200 ok object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdWalletJournal200Ok implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_wallet_journal_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
        'balance' => 'float',
        'date' => '\DateTime',
        'extra_info' => '\Swagger\Client\Model\GetCharactersCharacterIdWalletJournalExtraInfo',
        'first_party_id' => 'int',
        'first_party_type' => 'string',
        'reason' => 'string',
        'ref_id' => 'int',
        'ref_type' => 'string',
        'second_party_id' => 'int',
        'second_party_type' => 'string',
        'tax' => 'float',
        'tax_reciever_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => 'float',
        'balance' => 'float',
        'date' => 'date-time',
        'extra_info' => null,
        'first_party_id' => 'int32',
        'first_party_type' => null,
        'reason' => null,
        'ref_id' => 'int64',
        'ref_type' => null,
        'second_party_id' => 'int32',
        'second_party_type' => null,
        'tax' => 'float',
        'tax_reciever_id' => 'int32'
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
        'amount' => 'amount',
        'balance' => 'balance',
        'date' => 'date',
        'extra_info' => 'extra_info',
        'first_party_id' => 'first_party_id',
        'first_party_type' => 'first_party_type',
        'reason' => 'reason',
        'ref_id' => 'ref_id',
        'ref_type' => 'ref_type',
        'second_party_id' => 'second_party_id',
        'second_party_type' => 'second_party_type',
        'tax' => 'tax',
        'tax_reciever_id' => 'tax_reciever_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'balance' => 'setBalance',
        'date' => 'setDate',
        'extra_info' => 'setExtraInfo',
        'first_party_id' => 'setFirstPartyId',
        'first_party_type' => 'setFirstPartyType',
        'reason' => 'setReason',
        'ref_id' => 'setRefId',
        'ref_type' => 'setRefType',
        'second_party_id' => 'setSecondPartyId',
        'second_party_type' => 'setSecondPartyType',
        'tax' => 'setTax',
        'tax_reciever_id' => 'setTaxRecieverId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'balance' => 'getBalance',
        'date' => 'getDate',
        'extra_info' => 'getExtraInfo',
        'first_party_id' => 'getFirstPartyId',
        'first_party_type' => 'getFirstPartyType',
        'reason' => 'getReason',
        'ref_id' => 'getRefId',
        'ref_type' => 'getRefType',
        'second_party_id' => 'getSecondPartyId',
        'second_party_type' => 'getSecondPartyType',
        'tax' => 'getTax',
        'tax_reciever_id' => 'getTaxRecieverId'
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

    const FIRST_PARTY_TYPE_CHARACTER = 'character';
    const FIRST_PARTY_TYPE_CORPORATION = 'corporation';
    const FIRST_PARTY_TYPE_ALLIANCE = 'alliance';
    const FIRST_PARTY_TYPE_FACTION = 'faction';
    const REF_TYPE_PLAYER_TRADING = 'player_trading';
    const REF_TYPE_MARKET_TRANSACTION = 'market_transaction';
    const REF_TYPE_PLAYER_DONATION = 'player_donation';
    const REF_TYPE_OFFICE_RENTAL_FEE = 'office_rental_fee';
    const REF_TYPE_BOUNTY_PRIZE_HISTORICAL = 'bounty_prize_historical';
    const REF_TYPE_INSURANCE = 'insurance';
    const REF_TYPE_MISSION_REWARD = 'mission_reward';
    const REF_TYPE_MISSION_REWARD_BONUS = 'mission_reward_bonus';
    const REF_TYPE_CSPA = 'cspa';
    const REF_TYPE_CORP_ACCOUNT_WITHDRAWAL = 'corp_account_withdrawal';
    const REF_TYPE_LOGO_CHANGE_FEE = 'logo_change_fee';
    const REF_TYPE_MARKET_ESCROW = 'market_escrow';
    const REF_TYPE_BROKER_FEE = 'broker_fee';
    const REF_TYPE_ALLIANCE_MAINTENANCE_FEE = 'alliance_maintenance_fee';
    const REF_TYPE_SALES_TAX = 'sales_tax';
    const REF_TYPE_JUMP_CLONE_INSTALLATION_FEE = 'jump_clone_installation_fee';
    const REF_TYPE_MANUFACTURING = 'manufacturing';
    const REF_TYPE_CONTRACT = 'contract';
    const REF_TYPE_BOUNTY_PRIZES = 'bounty_prizes';
    const REF_TYPE_MEDAL_CREATION_FEE = 'medal_creation_fee';
    const REF_TYPE_MEDAL_ISSUING_FEE = 'medal_issuing_fee';
    const REF_TYPE_CUSTOMS_OFFICE_IMPORT_DUTY = 'customs_office_import_duty';
    const REF_TYPE_CUSTOMS_OFFICE_EXPORT_DUTY = 'customs_office_export_duty';
    const REF_TYPE_CORPORATE_REWARD_PAYOUT = 'corporate_reward_payout';
    const REF_TYPE_INDUSTRY_FACILITY_TAX = 'industry_facility_tax';
    const REF_TYPE_PROJECT_DISCOVERY_REWARD = 'project_discovery_reward';
    const REF_TYPE_REPROCESSING_FEE = 'reprocessing_fee';
    const REF_TYPE_JUMP_CLONE_ACTIVATION_FEE = 'jump_clone_activation_fee';
    const REF_TYPE_UNKNOWN = 'unknown';
    const SECOND_PARTY_TYPE_CHARACTER = 'character';
    const SECOND_PARTY_TYPE_CORPORATION = 'corporation';
    const SECOND_PARTY_TYPE_ALLIANCE = 'alliance';
    const SECOND_PARTY_TYPE_FACTION = 'faction';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFirstPartyTypeAllowableValues()
    {
        return [
            self::FIRST_PARTY_TYPE_CHARACTER,
            self::FIRST_PARTY_TYPE_CORPORATION,
            self::FIRST_PARTY_TYPE_ALLIANCE,
            self::FIRST_PARTY_TYPE_FACTION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRefTypeAllowableValues()
    {
        return [
            self::REF_TYPE_PLAYER_TRADING,
            self::REF_TYPE_MARKET_TRANSACTION,
            self::REF_TYPE_PLAYER_DONATION,
            self::REF_TYPE_OFFICE_RENTAL_FEE,
            self::REF_TYPE_BOUNTY_PRIZE_HISTORICAL,
            self::REF_TYPE_INSURANCE,
            self::REF_TYPE_MISSION_REWARD,
            self::REF_TYPE_MISSION_REWARD_BONUS,
            self::REF_TYPE_CSPA,
            self::REF_TYPE_CORP_ACCOUNT_WITHDRAWAL,
            self::REF_TYPE_LOGO_CHANGE_FEE,
            self::REF_TYPE_MARKET_ESCROW,
            self::REF_TYPE_BROKER_FEE,
            self::REF_TYPE_ALLIANCE_MAINTENANCE_FEE,
            self::REF_TYPE_SALES_TAX,
            self::REF_TYPE_JUMP_CLONE_INSTALLATION_FEE,
            self::REF_TYPE_MANUFACTURING,
            self::REF_TYPE_CONTRACT,
            self::REF_TYPE_BOUNTY_PRIZES,
            self::REF_TYPE_MEDAL_CREATION_FEE,
            self::REF_TYPE_MEDAL_ISSUING_FEE,
            self::REF_TYPE_CUSTOMS_OFFICE_IMPORT_DUTY,
            self::REF_TYPE_CUSTOMS_OFFICE_EXPORT_DUTY,
            self::REF_TYPE_CORPORATE_REWARD_PAYOUT,
            self::REF_TYPE_INDUSTRY_FACILITY_TAX,
            self::REF_TYPE_PROJECT_DISCOVERY_REWARD,
            self::REF_TYPE_REPROCESSING_FEE,
            self::REF_TYPE_JUMP_CLONE_ACTIVATION_FEE,
            self::REF_TYPE_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSecondPartyTypeAllowableValues()
    {
        return [
            self::SECOND_PARTY_TYPE_CHARACTER,
            self::SECOND_PARTY_TYPE_CORPORATION,
            self::SECOND_PARTY_TYPE_ALLIANCE,
            self::SECOND_PARTY_TYPE_FACTION,
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['extra_info'] = isset($data['extra_info']) ? $data['extra_info'] : null;
        $this->container['first_party_id'] = isset($data['first_party_id']) ? $data['first_party_id'] : null;
        $this->container['first_party_type'] = isset($data['first_party_type']) ? $data['first_party_type'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['ref_id'] = isset($data['ref_id']) ? $data['ref_id'] : null;
        $this->container['ref_type'] = isset($data['ref_type']) ? $data['ref_type'] : null;
        $this->container['second_party_id'] = isset($data['second_party_id']) ? $data['second_party_id'] : null;
        $this->container['second_party_type'] = isset($data['second_party_type']) ? $data['second_party_type'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['tax_reciever_id'] = isset($data['tax_reciever_id']) ? $data['tax_reciever_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['date'] === null) {
            $invalid_properties[] = "'date' can't be null";
        }
        $allowed_values = $this->getFirstPartyTypeAllowableValues();
        if (!in_array($this->container['first_party_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'first_party_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['ref_id'] === null) {
            $invalid_properties[] = "'ref_id' can't be null";
        }
        if ($this->container['ref_type'] === null) {
            $invalid_properties[] = "'ref_type' can't be null";
        }
        $allowed_values = $this->getRefTypeAllowableValues();
        if (!in_array($this->container['ref_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'ref_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getSecondPartyTypeAllowableValues();
        if (!in_array($this->container['second_party_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'second_party_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        if ($this->container['date'] === null) {
            return false;
        }
        $allowed_values = $this->getFirstPartyTypeAllowableValues();
        if (!in_array($this->container['first_party_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['ref_id'] === null) {
            return false;
        }
        if ($this->container['ref_type'] === null) {
            return false;
        }
        $allowed_values = $this->getRefTypeAllowableValues();
        if (!in_array($this->container['ref_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getSecondPartyTypeAllowableValues();
        if (!in_array($this->container['second_party_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets amount
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param float $amount Transaction amount. Positive when value transferred to the first party. Negative otherwise
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets balance
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     * @param float $balance Wallet balance after transaction occurred
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param \DateTime $date Date and time of transaction
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets extra_info
     * @return \Swagger\Client\Model\GetCharactersCharacterIdWalletJournalExtraInfo
     */
    public function getExtraInfo()
    {
        return $this->container['extra_info'];
    }

    /**
     * Sets extra_info
     * @param \Swagger\Client\Model\GetCharactersCharacterIdWalletJournalExtraInfo $extra_info
     * @return $this
     */
    public function setExtraInfo($extra_info)
    {
        $this->container['extra_info'] = $extra_info;

        return $this;
    }

    /**
     * Gets first_party_id
     * @return int
     */
    public function getFirstPartyId()
    {
        return $this->container['first_party_id'];
    }

    /**
     * Sets first_party_id
     * @param int $first_party_id first_party_id integer
     * @return $this
     */
    public function setFirstPartyId($first_party_id)
    {
        $this->container['first_party_id'] = $first_party_id;

        return $this;
    }

    /**
     * Gets first_party_type
     * @return string
     */
    public function getFirstPartyType()
    {
        return $this->container['first_party_type'];
    }

    /**
     * Sets first_party_type
     * @param string $first_party_type first_party_type string
     * @return $this
     */
    public function setFirstPartyType($first_party_type)
    {
        $allowed_values = $this->getFirstPartyTypeAllowableValues();
        if (!is_null($first_party_type) && !in_array($first_party_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'first_party_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['first_party_type'] = $first_party_type;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason reason string
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets ref_id
     * @return int
     */
    public function getRefId()
    {
        return $this->container['ref_id'];
    }

    /**
     * Sets ref_id
     * @param int $ref_id Unique journal reference ID
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets ref_type
     * @return string
     */
    public function getRefType()
    {
        return $this->container['ref_type'];
    }

    /**
     * Sets ref_type
     * @param string $ref_type Transaction type, different type of transaction will populate different fields in `extra_info`
     * @return $this
     */
    public function setRefType($ref_type)
    {
        $allowed_values = $this->getRefTypeAllowableValues();
        if (!in_array($ref_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ref_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['ref_type'] = $ref_type;

        return $this;
    }

    /**
     * Gets second_party_id
     * @return int
     */
    public function getSecondPartyId()
    {
        return $this->container['second_party_id'];
    }

    /**
     * Sets second_party_id
     * @param int $second_party_id second_party_id integer
     * @return $this
     */
    public function setSecondPartyId($second_party_id)
    {
        $this->container['second_party_id'] = $second_party_id;

        return $this;
    }

    /**
     * Gets second_party_type
     * @return string
     */
    public function getSecondPartyType()
    {
        return $this->container['second_party_type'];
    }

    /**
     * Sets second_party_type
     * @param string $second_party_type second_party_type string
     * @return $this
     */
    public function setSecondPartyType($second_party_type)
    {
        $allowed_values = $this->getSecondPartyTypeAllowableValues();
        if (!is_null($second_party_type) && !in_array($second_party_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'second_party_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['second_party_type'] = $second_party_type;

        return $this;
    }

    /**
     * Gets tax
     * @return float
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     * @param float $tax Tax amount received for tax related transactions
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets tax_reciever_id
     * @return int
     */
    public function getTaxRecieverId()
    {
        return $this->container['tax_reciever_id'];
    }

    /**
     * Sets tax_reciever_id
     * @param int $tax_reciever_id the corporation ID receiving any tax paid
     * @return $this
     */
    public function setTaxRecieverId($tax_reciever_id)
    {
        $this->container['tax_reciever_id'] = $tax_reciever_id;

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


