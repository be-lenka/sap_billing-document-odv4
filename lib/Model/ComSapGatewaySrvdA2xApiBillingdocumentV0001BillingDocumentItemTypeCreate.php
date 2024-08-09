<?php
/**
 * ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemTypeCreate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\SAP\BillingDocumentODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Billing Document
 *
 * Billing documents collectively refer to customer invoices, credit memos, debit memos, pro forma invoices, and the related cancellation documents. This service, which offers both synchronous and asynchronous processing, makes billing document data available through its header, item, and partner entities. You can extend it with custom fields via key user extensibility.      You can use this service to do the following:   - Create billing documents with reference to billable SD documents in your system   - Read most billing document fields at header and item level   - Update specific billing document fields, including custom fields added through extensibility   - Post billing documents to financial accounting to create the corresponding journal entries 
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BeLenka\SAP\BillingDocumentODV4\Model;

use \ArrayAccess;
use \BeLenka\SAP\BillingDocumentODV4\ObjectSerializer;

/**
 * ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BillingDocumentODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_billingdocument.v0001.BillingDocumentItem_Type-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sap__messages' => '\BeLenka\SAP\BillingDocumentODV4\Model\ComSapGatewaySrvdA2xApiBillingdocumentV0001SAPMessageCreate[]',
        '_billing_document' => '\BeLenka\SAP\BillingDocumentODV4\Model\ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentTypeCreate',
        '_item_partner' => '\BeLenka\SAP\BillingDocumentODV4\Model\ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeCreate[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sap__messages' => null,
        '_billing_document' => null,
        '_item_partner' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sap__messages' => false,
		'_billing_document' => false,
		'_item_partner' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sap__messages' => 'SAP__Messages',
        '_billing_document' => '_BillingDocument',
        '_item_partner' => '_ItemPartner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sap__messages' => 'setSapMessages',
        '_billing_document' => 'setBillingDocument',
        '_item_partner' => 'setItemPartner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sap__messages' => 'getSapMessages',
        '_billing_document' => 'getBillingDocument',
        '_item_partner' => 'getItemPartner'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('sap__messages', $data ?? [], null);
        $this->setIfExists('_billing_document', $data ?? [], null);
        $this->setIfExists('_item_partner', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets sap__messages
     *
     * @return \BeLenka\SAP\BillingDocumentODV4\Model\ComSapGatewaySrvdA2xApiBillingdocumentV0001SAPMessageCreate[]|null
     */
    public function getSapMessages()
    {
        return $this->container['sap__messages'];
    }

    /**
     * Sets sap__messages
     *
     * @param \BeLenka\SAP\BillingDocumentODV4\Model\ComSapGatewaySrvdA2xApiBillingdocumentV0001SAPMessageCreate[]|null $sap__messages sap__messages
     *
     * @return self
     */
    public function setSapMessages($sap__messages)
    {
        if (is_null($sap__messages)) {
            throw new \InvalidArgumentException('non-nullable sap__messages cannot be null');
        }
        $this->container['sap__messages'] = $sap__messages;

        return $this;
    }

    /**
     * Gets _billing_document
     *
     * @return \BeLenka\SAP\BillingDocumentODV4\Model\ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentTypeCreate|null
     */
    public function getBillingDocument()
    {
        return $this->container['_billing_document'];
    }

    /**
     * Sets _billing_document
     *
     * @param \BeLenka\SAP\BillingDocumentODV4\Model\ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentTypeCreate|null $_billing_document _billing_document
     *
     * @return self
     */
    public function setBillingDocument($_billing_document)
    {
        if (is_null($_billing_document)) {
            throw new \InvalidArgumentException('non-nullable _billing_document cannot be null');
        }
        $this->container['_billing_document'] = $_billing_document;

        return $this;
    }

    /**
     * Gets _item_partner
     *
     * @return \BeLenka\SAP\BillingDocumentODV4\Model\ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeCreate[]|null
     */
    public function getItemPartner()
    {
        return $this->container['_item_partner'];
    }

    /**
     * Sets _item_partner
     *
     * @param \BeLenka\SAP\BillingDocumentODV4\Model\ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeCreate[]|null $_item_partner _item_partner
     *
     * @return self
     */
    public function setItemPartner($_item_partner)
    {
        if (is_null($_item_partner)) {
            throw new \InvalidArgumentException('non-nullable _item_partner cannot be null');
        }
        $this->container['_item_partner'] = $_item_partner;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


