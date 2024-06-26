<?php
/**
 * CancelRequest
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
 * CancelRequest Class Doc Comment
 *
 * @category Class
 * @description This type contains information about a buyer request to cancel an order.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CancelRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CancelRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cancel_completed_date' => 'string',
        'cancel_initiator' => 'string',
        'cancel_reason' => 'string',
        'cancel_requested_date' => 'string',
        'cancel_request_id' => 'string',
        'cancel_request_state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cancel_completed_date' => null,
        'cancel_initiator' => null,
        'cancel_reason' => null,
        'cancel_requested_date' => null,
        'cancel_request_id' => null,
        'cancel_request_state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cancel_completed_date' => false,
        'cancel_initiator' => false,
        'cancel_reason' => false,
        'cancel_requested_date' => false,
        'cancel_request_id' => false,
        'cancel_request_state' => false
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
        'cancel_completed_date' => 'cancelCompletedDate',
        'cancel_initiator' => 'cancelInitiator',
        'cancel_reason' => 'cancelReason',
        'cancel_requested_date' => 'cancelRequestedDate',
        'cancel_request_id' => 'cancelRequestId',
        'cancel_request_state' => 'cancelRequestState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancel_completed_date' => 'setCancelCompletedDate',
        'cancel_initiator' => 'setCancelInitiator',
        'cancel_reason' => 'setCancelReason',
        'cancel_requested_date' => 'setCancelRequestedDate',
        'cancel_request_id' => 'setCancelRequestId',
        'cancel_request_state' => 'setCancelRequestState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancel_completed_date' => 'getCancelCompletedDate',
        'cancel_initiator' => 'getCancelInitiator',
        'cancel_reason' => 'getCancelReason',
        'cancel_requested_date' => 'getCancelRequestedDate',
        'cancel_request_id' => 'getCancelRequestId',
        'cancel_request_state' => 'getCancelRequestState'
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
        $this->setIfExists('cancel_completed_date', $data ?? [], null);
        $this->setIfExists('cancel_initiator', $data ?? [], null);
        $this->setIfExists('cancel_reason', $data ?? [], null);
        $this->setIfExists('cancel_requested_date', $data ?? [], null);
        $this->setIfExists('cancel_request_id', $data ?? [], null);
        $this->setIfExists('cancel_request_state', $data ?? [], null);
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
     * Gets cancel_completed_date
     *
     * @return string|null
     */
    public function getCancelCompletedDate()
    {
        return $this->container['cancel_completed_date'];
    }

    /**
     * Sets cancel_completed_date
     *
     * @param string|null $cancel_completed_date The date and time that the order cancellation was completed, if applicable. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the cancellation request has actually been approved by the seller.<br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return self
     */
    public function setCancelCompletedDate($cancel_completed_date)
    {
        if (is_null($cancel_completed_date)) {
            throw new \InvalidArgumentException('non-nullable cancel_completed_date cannot be null');
        }
        $this->container['cancel_completed_date'] = $cancel_completed_date;

        return $this;
    }

    /**
     * Gets cancel_initiator
     *
     * @return string|null
     */
    public function getCancelInitiator()
    {
        return $this->container['cancel_initiator'];
    }

    /**
     * Sets cancel_initiator
     *
     * @param string|null $cancel_initiator This string value indicates the party who made the initial cancellation request. Typically, either the 'Buyer' or 'Seller'. If a cancellation request has been made, this field should be returned.
     *
     * @return self
     */
    public function setCancelInitiator($cancel_initiator)
    {
        if (is_null($cancel_initiator)) {
            throw new \InvalidArgumentException('non-nullable cancel_initiator cannot be null');
        }
        $this->container['cancel_initiator'] = $cancel_initiator;

        return $this;
    }

    /**
     * Gets cancel_reason
     *
     * @return string|null
     */
    public function getCancelReason()
    {
        return $this->container['cancel_reason'];
    }

    /**
     * Sets cancel_reason
     *
     * @param string|null $cancel_reason The reason why the <b>cancelInitiator</b> initiated the cancellation request. Cancellation reasons for a buyer might include 'order placed by mistake' or 'order won't arrive in time'. For a seller, a typical cancellation reason is 'out of stock'. If a cancellation request has been made, this field should be returned.
     *
     * @return self
     */
    public function setCancelReason($cancel_reason)
    {
        if (is_null($cancel_reason)) {
            throw new \InvalidArgumentException('non-nullable cancel_reason cannot be null');
        }
        $this->container['cancel_reason'] = $cancel_reason;

        return $this;
    }

    /**
     * Gets cancel_requested_date
     *
     * @return string|null
     */
    public function getCancelRequestedDate()
    {
        return $this->container['cancel_requested_date'];
    }

    /**
     * Sets cancel_requested_date
     *
     * @param string|null $cancel_requested_date The date and time that the order cancellation was requested. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is returned for each cancellation request.<br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return self
     */
    public function setCancelRequestedDate($cancel_requested_date)
    {
        if (is_null($cancel_requested_date)) {
            throw new \InvalidArgumentException('non-nullable cancel_requested_date cannot be null');
        }
        $this->container['cancel_requested_date'] = $cancel_requested_date;

        return $this;
    }

    /**
     * Gets cancel_request_id
     *
     * @return string|null
     */
    public function getCancelRequestId()
    {
        return $this->container['cancel_request_id'];
    }

    /**
     * Sets cancel_request_id
     *
     * @param string|null $cancel_request_id The unique identifier of the order cancellation request. This field is returned for each cancellation request.
     *
     * @return self
     */
    public function setCancelRequestId($cancel_request_id)
    {
        if (is_null($cancel_request_id)) {
            throw new \InvalidArgumentException('non-nullable cancel_request_id cannot be null');
        }
        $this->container['cancel_request_id'] = $cancel_request_id;

        return $this;
    }

    /**
     * Gets cancel_request_state
     *
     * @return string|null
     */
    public function getCancelRequestState()
    {
        return $this->container['cancel_request_state'];
    }

    /**
     * Sets cancel_request_state
     *
     * @param string|null $cancel_request_state The current stage or condition of the cancellation request. This field is returned for each cancellation request. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:CancelRequestStateEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCancelRequestState($cancel_request_state)
    {
        if (is_null($cancel_request_state)) {
            throw new \InvalidArgumentException('non-nullable cancel_request_state cannot be null');
        }
        $this->container['cancel_request_state'] = $cancel_request_state;

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


