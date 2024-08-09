<?php
/**
 * ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocCtrlPPCreate
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
 * ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocCtrlPPCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BillingDocumentODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocCtrlPPCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_billingdocument.v0001.D_BillgDocCrteFrmSDDocCtrlPP-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_billing_document_date' => '\DateTime',
        'default_billing_document_type' => 'string',
        'autom_posting_to_acctg_is_disabled' => 'bool',
        'cut_off_billing_document_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_billing_document_date' => 'date',
        'default_billing_document_type' => null,
        'autom_posting_to_acctg_is_disabled' => null,
        'cut_off_billing_document_date' => 'date'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'default_billing_document_date' => true,
		'default_billing_document_type' => false,
		'autom_posting_to_acctg_is_disabled' => false,
		'cut_off_billing_document_date' => true
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
        'default_billing_document_date' => 'DefaultBillingDocumentDate',
        'default_billing_document_type' => 'DefaultBillingDocumentType',
        'autom_posting_to_acctg_is_disabled' => 'AutomPostingToAcctgIsDisabled',
        'cut_off_billing_document_date' => 'CutOffBillingDocumentDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_billing_document_date' => 'setDefaultBillingDocumentDate',
        'default_billing_document_type' => 'setDefaultBillingDocumentType',
        'autom_posting_to_acctg_is_disabled' => 'setAutomPostingToAcctgIsDisabled',
        'cut_off_billing_document_date' => 'setCutOffBillingDocumentDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_billing_document_date' => 'getDefaultBillingDocumentDate',
        'default_billing_document_type' => 'getDefaultBillingDocumentType',
        'autom_posting_to_acctg_is_disabled' => 'getAutomPostingToAcctgIsDisabled',
        'cut_off_billing_document_date' => 'getCutOffBillingDocumentDate'
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
        $this->setIfExists('default_billing_document_date', $data ?? [], null);
        $this->setIfExists('default_billing_document_type', $data ?? [], null);
        $this->setIfExists('autom_posting_to_acctg_is_disabled', $data ?? [], null);
        $this->setIfExists('cut_off_billing_document_date', $data ?? [], null);
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

        if (!is_null($this->container['default_billing_document_type']) && (mb_strlen($this->container['default_billing_document_type']) > 4)) {
            $invalidProperties[] = "invalid value for 'default_billing_document_type', the character length must be smaller than or equal to 4.";
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
     * Gets default_billing_document_date
     *
     * @return \DateTime|null
     */
    public function getDefaultBillingDocumentDate()
    {
        return $this->container['default_billing_document_date'];
    }

    /**
     * Sets default_billing_document_date
     *
     * @param \DateTime|null $default_billing_document_date Default Billing Document Date
     *
     * @return self
     */
    public function setDefaultBillingDocumentDate($default_billing_document_date)
    {
        if (is_null($default_billing_document_date)) {
            array_push($this->openAPINullablesSetToNull, 'default_billing_document_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_billing_document_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_billing_document_date'] = $default_billing_document_date;

        return $this;
    }

    /**
     * Gets default_billing_document_type
     *
     * @return string|null
     */
    public function getDefaultBillingDocumentType()
    {
        return $this->container['default_billing_document_type'];
    }

    /**
     * Sets default_billing_document_type
     *
     * @param string|null $default_billing_document_type Default Billing Document Type
     *
     * @return self
     */
    public function setDefaultBillingDocumentType($default_billing_document_type)
    {
        if (is_null($default_billing_document_type)) {
            throw new \InvalidArgumentException('non-nullable default_billing_document_type cannot be null');
        }
        if ((mb_strlen($default_billing_document_type) > 4)) {
            throw new \InvalidArgumentException('invalid length for $default_billing_document_type when calling ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocCtrlPPCreate., must be smaller than or equal to 4.');
        }

        $this->container['default_billing_document_type'] = $default_billing_document_type;

        return $this;
    }

    /**
     * Gets autom_posting_to_acctg_is_disabled
     *
     * @return bool|null
     */
    public function getAutomPostingToAcctgIsDisabled()
    {
        return $this->container['autom_posting_to_acctg_is_disabled'];
    }

    /**
     * Sets autom_posting_to_acctg_is_disabled
     *
     * @param bool|null $autom_posting_to_acctg_is_disabled Blocked for transfer to accounting
     *
     * @return self
     */
    public function setAutomPostingToAcctgIsDisabled($autom_posting_to_acctg_is_disabled)
    {
        if (is_null($autom_posting_to_acctg_is_disabled)) {
            throw new \InvalidArgumentException('non-nullable autom_posting_to_acctg_is_disabled cannot be null');
        }
        $this->container['autom_posting_to_acctg_is_disabled'] = $autom_posting_to_acctg_is_disabled;

        return $this;
    }

    /**
     * Gets cut_off_billing_document_date
     *
     * @return \DateTime|null
     */
    public function getCutOffBillingDocumentDate()
    {
        return $this->container['cut_off_billing_document_date'];
    }

    /**
     * Sets cut_off_billing_document_date
     *
     * @param \DateTime|null $cut_off_billing_document_date Date up to which billing is to be carried out
     *
     * @return self
     */
    public function setCutOffBillingDocumentDate($cut_off_billing_document_date)
    {
        if (is_null($cut_off_billing_document_date)) {
            array_push($this->openAPINullablesSetToNull, 'cut_off_billing_document_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cut_off_billing_document_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cut_off_billing_document_date'] = $cut_off_billing_document_date;

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


