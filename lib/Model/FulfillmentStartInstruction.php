<?php
/**
 * FulfillmentStartInstruction
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.20.4
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FulfillmentStartInstruction Class Doc Comment
 *
 * @category Class
 * @description This type contains a set of specifications for processing a fulfillment of an order, including the type of fulfillment, shipping carrier and service, addressing details, and estimated delivery window. These instructions are derived from the buyer&#39;s and seller&#39;s eBay account preferences, the listing parameters, and the buyer&#39;s checkout selections. The seller can use them as a starting point for packaging, addressing, and shipping the order.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FulfillmentStartInstruction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FulfillmentStartInstruction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appointment' => '\OpenAPI\Client\Model\AppointmentDetails',
        'ebay_supported_fulfillment' => 'bool',
        'final_destination_address' => '\OpenAPI\Client\Model\Address',
        'fulfillment_instructions_type' => 'string',
        'max_estimated_delivery_date' => 'string',
        'min_estimated_delivery_date' => 'string',
        'pickup_step' => '\OpenAPI\Client\Model\PickupStep',
        'shipping_step' => '\OpenAPI\Client\Model\ShippingStep'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appointment' => null,
        'ebay_supported_fulfillment' => null,
        'final_destination_address' => null,
        'fulfillment_instructions_type' => null,
        'max_estimated_delivery_date' => null,
        'min_estimated_delivery_date' => null,
        'pickup_step' => null,
        'shipping_step' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'appointment' => false,
        'ebay_supported_fulfillment' => false,
        'final_destination_address' => false,
        'fulfillment_instructions_type' => false,
        'max_estimated_delivery_date' => false,
        'min_estimated_delivery_date' => false,
        'pickup_step' => false,
        'shipping_step' => false
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
        'appointment' => 'appointment',
        'ebay_supported_fulfillment' => 'ebaySupportedFulfillment',
        'final_destination_address' => 'finalDestinationAddress',
        'fulfillment_instructions_type' => 'fulfillmentInstructionsType',
        'max_estimated_delivery_date' => 'maxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'minEstimatedDeliveryDate',
        'pickup_step' => 'pickupStep',
        'shipping_step' => 'shippingStep'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appointment' => 'setAppointment',
        'ebay_supported_fulfillment' => 'setEbaySupportedFulfillment',
        'final_destination_address' => 'setFinalDestinationAddress',
        'fulfillment_instructions_type' => 'setFulfillmentInstructionsType',
        'max_estimated_delivery_date' => 'setMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'setMinEstimatedDeliveryDate',
        'pickup_step' => 'setPickupStep',
        'shipping_step' => 'setShippingStep'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment' => 'getAppointment',
        'ebay_supported_fulfillment' => 'getEbaySupportedFulfillment',
        'final_destination_address' => 'getFinalDestinationAddress',
        'fulfillment_instructions_type' => 'getFulfillmentInstructionsType',
        'max_estimated_delivery_date' => 'getMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'getMinEstimatedDeliveryDate',
        'pickup_step' => 'getPickupStep',
        'shipping_step' => 'getShippingStep'
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
        $this->setIfExists('appointment', $data ?? [], null);
        $this->setIfExists('ebay_supported_fulfillment', $data ?? [], null);
        $this->setIfExists('final_destination_address', $data ?? [], null);
        $this->setIfExists('fulfillment_instructions_type', $data ?? [], null);
        $this->setIfExists('max_estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('min_estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('pickup_step', $data ?? [], null);
        $this->setIfExists('shipping_step', $data ?? [], null);
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
     * Gets appointment
     *
     * @return \OpenAPI\Client\Model\AppointmentDetails|null
     */
    public function getAppointment()
    {
        return $this->container['appointment'];
    }

    /**
     * Sets appointment
     *
     * @param \OpenAPI\Client\Model\AppointmentDetails|null $appointment appointment
     *
     * @return self
     */
    public function setAppointment($appointment)
    {
        if (is_null($appointment)) {
            throw new \InvalidArgumentException('non-nullable appointment cannot be null');
        }
        $this->container['appointment'] = $appointment;

        return $this;
    }

    /**
     * Gets ebay_supported_fulfillment
     *
     * @return bool|null
     */
    public function getEbaySupportedFulfillment()
    {
        return $this->container['ebay_supported_fulfillment'];
    }

    /**
     * Sets ebay_supported_fulfillment
     *
     * @param bool|null $ebay_supported_fulfillment This field is only returned if its value is <code>true</code> and indicates that the fulfillment will be shipped via eBay's Global Shipping Program, eBay International Shipping, or the Authenticity Guarantee service program. <br><br>For more information, see the <a href=\"https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/global-shipping-program?id=4646 \" target=\"_blank\">Global Shipping Program</a> help topic.
     *
     * @return self
     */
    public function setEbaySupportedFulfillment($ebay_supported_fulfillment)
    {
        if (is_null($ebay_supported_fulfillment)) {
            throw new \InvalidArgumentException('non-nullable ebay_supported_fulfillment cannot be null');
        }
        $this->container['ebay_supported_fulfillment'] = $ebay_supported_fulfillment;

        return $this;
    }

    /**
     * Gets final_destination_address
     *
     * @return \OpenAPI\Client\Model\Address|null
     */
    public function getFinalDestinationAddress()
    {
        return $this->container['final_destination_address'];
    }

    /**
     * Sets final_destination_address
     *
     * @param \OpenAPI\Client\Model\Address|null $final_destination_address final_destination_address
     *
     * @return self
     */
    public function setFinalDestinationAddress($final_destination_address)
    {
        if (is_null($final_destination_address)) {
            throw new \InvalidArgumentException('non-nullable final_destination_address cannot be null');
        }
        $this->container['final_destination_address'] = $final_destination_address;

        return $this;
    }

    /**
     * Gets fulfillment_instructions_type
     *
     * @return string|null
     */
    public function getFulfillmentInstructionsType()
    {
        return $this->container['fulfillment_instructions_type'];
    }

    /**
     * Sets fulfillment_instructions_type
     *
     * @param string|null $fulfillment_instructions_type The enumeration value returned in this field indicates the method of fulfillment that will be used to deliver this set of line items (this package) to the buyer. This field will have a value of <code>SHIP_TO</code> if the <b>ebaySupportedFulfillment</b> field is returned with a value of <code>true</code>. See the <strong>FulfillmentInstructionsType</strong> definition for more information about different fulfillment types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:FulfillmentInstructionsType'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFulfillmentInstructionsType($fulfillment_instructions_type)
    {
        if (is_null($fulfillment_instructions_type)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_instructions_type cannot be null');
        }
        $this->container['fulfillment_instructions_type'] = $fulfillment_instructions_type;

        return $this;
    }

    /**
     * Gets max_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMaxEstimatedDeliveryDate()
    {
        return $this->container['max_estimated_delivery_date'];
    }

    /**
     * Sets max_estimated_delivery_date
     *
     * @param string|null $max_estimated_delivery_date This is the estimated latest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned ifthe value of the <b>fulfillmentInstructionsType</b> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return self
     */
    public function setMaxEstimatedDeliveryDate($max_estimated_delivery_date)
    {
        if (is_null($max_estimated_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable max_estimated_delivery_date cannot be null');
        }
        $this->container['max_estimated_delivery_date'] = $max_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets min_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMinEstimatedDeliveryDate()
    {
        return $this->container['min_estimated_delivery_date'];
    }

    /**
     * Sets min_estimated_delivery_date
     *
     * @param string|null $min_estimated_delivery_date This is the estimated earliest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned if  the value of the <b>fulfillmentInstructionsType</b> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return self
     */
    public function setMinEstimatedDeliveryDate($min_estimated_delivery_date)
    {
        if (is_null($min_estimated_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable min_estimated_delivery_date cannot be null');
        }
        $this->container['min_estimated_delivery_date'] = $min_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets pickup_step
     *
     * @return \OpenAPI\Client\Model\PickupStep|null
     */
    public function getPickupStep()
    {
        return $this->container['pickup_step'];
    }

    /**
     * Sets pickup_step
     *
     * @param \OpenAPI\Client\Model\PickupStep|null $pickup_step pickup_step
     *
     * @return self
     */
    public function setPickupStep($pickup_step)
    {
        if (is_null($pickup_step)) {
            throw new \InvalidArgumentException('non-nullable pickup_step cannot be null');
        }
        $this->container['pickup_step'] = $pickup_step;

        return $this;
    }

    /**
     * Gets shipping_step
     *
     * @return \OpenAPI\Client\Model\ShippingStep|null
     */
    public function getShippingStep()
    {
        return $this->container['shipping_step'];
    }

    /**
     * Sets shipping_step
     *
     * @param \OpenAPI\Client\Model\ShippingStep|null $shipping_step shipping_step
     *
     * @return self
     */
    public function setShippingStep($shipping_step)
    {
        if (is_null($shipping_step)) {
            throw new \InvalidArgumentException('non-nullable shipping_step cannot be null');
        }
        $this->container['shipping_step'] = $shipping_step;

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

