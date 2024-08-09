<?php
/**
 * ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeUpdate
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
 * ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BillingDocumentODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_billingdocument.v0001.BillingDocumentItemPartner_Type-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer' => 'string',
        'supplier' => 'string',
        'personnel' => 'string',
        'contact_person' => 'string',
        'reference_business_partner' => 'string',
        'business_partner_address_uuid' => 'string',
        'partner_is_specific_for_sd_doc_item' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer' => null,
        'supplier' => null,
        'personnel' => null,
        'contact_person' => null,
        'reference_business_partner' => null,
        'business_partner_address_uuid' => 'uuid',
        'partner_is_specific_for_sd_doc_item' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer' => true,
		'supplier' => true,
		'personnel' => true,
		'contact_person' => true,
		'reference_business_partner' => false,
		'business_partner_address_uuid' => true,
		'partner_is_specific_for_sd_doc_item' => false
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
        'customer' => 'Customer',
        'supplier' => 'Supplier',
        'personnel' => 'Personnel',
        'contact_person' => 'ContactPerson',
        'reference_business_partner' => 'ReferenceBusinessPartner',
        'business_partner_address_uuid' => 'BusinessPartnerAddressUUID',
        'partner_is_specific_for_sd_doc_item' => 'PartnerIsSpecificForSDDocItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
        'supplier' => 'setSupplier',
        'personnel' => 'setPersonnel',
        'contact_person' => 'setContactPerson',
        'reference_business_partner' => 'setReferenceBusinessPartner',
        'business_partner_address_uuid' => 'setBusinessPartnerAddressUuid',
        'partner_is_specific_for_sd_doc_item' => 'setPartnerIsSpecificForSdDocItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
        'supplier' => 'getSupplier',
        'personnel' => 'getPersonnel',
        'contact_person' => 'getContactPerson',
        'reference_business_partner' => 'getReferenceBusinessPartner',
        'business_partner_address_uuid' => 'getBusinessPartnerAddressUuid',
        'partner_is_specific_for_sd_doc_item' => 'getPartnerIsSpecificForSdDocItem'
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
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('supplier', $data ?? [], null);
        $this->setIfExists('personnel', $data ?? [], null);
        $this->setIfExists('contact_person', $data ?? [], null);
        $this->setIfExists('reference_business_partner', $data ?? [], null);
        $this->setIfExists('business_partner_address_uuid', $data ?? [], null);
        $this->setIfExists('partner_is_specific_for_sd_doc_item', $data ?? [], null);
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

        if (!is_null($this->container['customer']) && (mb_strlen($this->container['customer']) > 10)) {
            $invalidProperties[] = "invalid value for 'customer', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['supplier']) && (mb_strlen($this->container['supplier']) > 10)) {
            $invalidProperties[] = "invalid value for 'supplier', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['personnel']) && (mb_strlen($this->container['personnel']) > 8)) {
            $invalidProperties[] = "invalid value for 'personnel', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['contact_person']) && (mb_strlen($this->container['contact_person']) > 10)) {
            $invalidProperties[] = "invalid value for 'contact_person', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['reference_business_partner']) && (mb_strlen($this->container['reference_business_partner']) > 10)) {
            $invalidProperties[] = "invalid value for 'reference_business_partner', the character length must be smaller than or equal to 10.";
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
     * Gets customer
     *
     * @return string|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param string|null $customer Customer Number
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            array_push($this->openAPINullablesSetToNull, 'customer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($customer) && (mb_strlen($customer) > 10)) {
            throw new \InvalidArgumentException('invalid length for $customer when calling ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeUpdate., must be smaller than or equal to 10.');
        }

        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return string|null
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param string|null $supplier Account Number of Supplier
     *
     * @return self
     */
    public function setSupplier($supplier)
    {
        if (is_null($supplier)) {
            array_push($this->openAPINullablesSetToNull, 'supplier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('supplier', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($supplier) && (mb_strlen($supplier) > 10)) {
            throw new \InvalidArgumentException('invalid length for $supplier when calling ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeUpdate., must be smaller than or equal to 10.');
        }

        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets personnel
     *
     * @return string|null
     */
    public function getPersonnel()
    {
        return $this->container['personnel'];
    }

    /**
     * Sets personnel
     *
     * @param string|null $personnel personnel
     *
     * @return self
     */
    public function setPersonnel($personnel)
    {
        if (is_null($personnel)) {
            array_push($this->openAPINullablesSetToNull, 'personnel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('personnel', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($personnel) && (mb_strlen($personnel) > 8)) {
            throw new \InvalidArgumentException('invalid length for $personnel when calling ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeUpdate., must be smaller than or equal to 8.');
        }

        $this->container['personnel'] = $personnel;

        return $this;
    }

    /**
     * Gets contact_person
     *
     * @return string|null
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     *
     * @param string|null $contact_person Number of Contact Person
     *
     * @return self
     */
    public function setContactPerson($contact_person)
    {
        if (is_null($contact_person)) {
            array_push($this->openAPINullablesSetToNull, 'contact_person');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contact_person', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($contact_person) && (mb_strlen($contact_person) > 10)) {
            throw new \InvalidArgumentException('invalid length for $contact_person when calling ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeUpdate., must be smaller than or equal to 10.');
        }

        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets reference_business_partner
     *
     * @return string|null
     */
    public function getReferenceBusinessPartner()
    {
        return $this->container['reference_business_partner'];
    }

    /**
     * Sets reference_business_partner
     *
     * @param string|null $reference_business_partner Business Partner Number
     *
     * @return self
     */
    public function setReferenceBusinessPartner($reference_business_partner)
    {
        if (is_null($reference_business_partner)) {
            throw new \InvalidArgumentException('non-nullable reference_business_partner cannot be null');
        }
        if ((mb_strlen($reference_business_partner) > 10)) {
            throw new \InvalidArgumentException('invalid length for $reference_business_partner when calling ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeUpdate., must be smaller than or equal to 10.');
        }

        $this->container['reference_business_partner'] = $reference_business_partner;

        return $this;
    }

    /**
     * Gets business_partner_address_uuid
     *
     * @return string|null
     */
    public function getBusinessPartnerAddressUuid()
    {
        return $this->container['business_partner_address_uuid'];
    }

    /**
     * Sets business_partner_address_uuid
     *
     * @param string|null $business_partner_address_uuid business_partner_address_uuid
     *
     * @return self
     */
    public function setBusinessPartnerAddressUuid($business_partner_address_uuid)
    {
        if (is_null($business_partner_address_uuid)) {
            array_push($this->openAPINullablesSetToNull, 'business_partner_address_uuid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('business_partner_address_uuid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['business_partner_address_uuid'] = $business_partner_address_uuid;

        return $this;
    }

    /**
     * Gets partner_is_specific_for_sd_doc_item
     *
     * @return bool|null
     */
    public function getPartnerIsSpecificForSdDocItem()
    {
        return $this->container['partner_is_specific_for_sd_doc_item'];
    }

    /**
     * Sets partner_is_specific_for_sd_doc_item
     *
     * @param bool|null $partner_is_specific_for_sd_doc_item Partner is specific for item
     *
     * @return self
     */
    public function setPartnerIsSpecificForSdDocItem($partner_is_specific_for_sd_doc_item)
    {
        if (is_null($partner_is_specific_for_sd_doc_item)) {
            throw new \InvalidArgumentException('non-nullable partner_is_specific_for_sd_doc_item cannot be null');
        }
        $this->container['partner_is_specific_for_sd_doc_item'] = $partner_is_specific_for_sd_doc_item;

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


