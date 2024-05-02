<?php
/**
 * PaymentDisputeSummary
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
 * PaymentDisputeSummary Class Doc Comment
 *
 * @category Class
 * @description This type is used by each payment dispute that is returned with the &lt;strong&gt;getPaymentDisputeSummaries&lt;/strong&gt; method.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentDisputeSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentDisputeSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\OpenAPI\Client\Model\SimpleAmount',
        'buyer_username' => 'string',
        'closed_date' => 'string',
        'open_date' => 'string',
        'order_id' => 'string',
        'payment_dispute_id' => 'string',
        'payment_dispute_status' => 'string',
        'reason' => 'string',
        'respond_by_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'buyer_username' => null,
        'closed_date' => null,
        'open_date' => null,
        'order_id' => null,
        'payment_dispute_id' => null,
        'payment_dispute_status' => null,
        'reason' => null,
        'respond_by_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'buyer_username' => false,
        'closed_date' => false,
        'open_date' => false,
        'order_id' => false,
        'payment_dispute_id' => false,
        'payment_dispute_status' => false,
        'reason' => false,
        'respond_by_date' => false
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
        'amount' => 'amount',
        'buyer_username' => 'buyerUsername',
        'closed_date' => 'closedDate',
        'open_date' => 'openDate',
        'order_id' => 'orderId',
        'payment_dispute_id' => 'paymentDisputeId',
        'payment_dispute_status' => 'paymentDisputeStatus',
        'reason' => 'reason',
        'respond_by_date' => 'respondByDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'buyer_username' => 'setBuyerUsername',
        'closed_date' => 'setClosedDate',
        'open_date' => 'setOpenDate',
        'order_id' => 'setOrderId',
        'payment_dispute_id' => 'setPaymentDisputeId',
        'payment_dispute_status' => 'setPaymentDisputeStatus',
        'reason' => 'setReason',
        'respond_by_date' => 'setRespondByDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'buyer_username' => 'getBuyerUsername',
        'closed_date' => 'getClosedDate',
        'open_date' => 'getOpenDate',
        'order_id' => 'getOrderId',
        'payment_dispute_id' => 'getPaymentDisputeId',
        'payment_dispute_status' => 'getPaymentDisputeStatus',
        'reason' => 'getReason',
        'respond_by_date' => 'getRespondByDate'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('buyer_username', $data ?? [], null);
        $this->setIfExists('closed_date', $data ?? [], null);
        $this->setIfExists('open_date', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('payment_dispute_id', $data ?? [], null);
        $this->setIfExists('payment_dispute_status', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('respond_by_date', $data ?? [], null);
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
     * Gets amount
     *
     * @return \OpenAPI\Client\Model\SimpleAmount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \OpenAPI\Client\Model\SimpleAmount|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets buyer_username
     *
     * @return string|null
     */
    public function getBuyerUsername()
    {
        return $this->container['buyer_username'];
    }

    /**
     * Sets buyer_username
     *
     * @param string|null $buyer_username This is the buyer's eBay user ID. This field is returned for all payment disputes returned in the response.
     *
     * @return self
     */
    public function setBuyerUsername($buyer_username)
    {
        if (is_null($buyer_username)) {
            throw new \InvalidArgumentException('non-nullable buyer_username cannot be null');
        }
        $this->container['buyer_username'] = $buyer_username;

        return $this;
    }

    /**
     * Gets closed_date
     *
     * @return string|null
     */
    public function getClosedDate()
    {
        return $this->container['closed_date'];
    }

    /**
     * Sets closed_date
     *
     * @param string|null $closed_date The timestamp in this field shows the date/time when the payment dispute was closed, so this field is only returned for payment disputes in the <code>CLOSED</code> state.<br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return self
     */
    public function setClosedDate($closed_date)
    {
        if (is_null($closed_date)) {
            throw new \InvalidArgumentException('non-nullable closed_date cannot be null');
        }
        $this->container['closed_date'] = $closed_date;

        return $this;
    }

    /**
     * Gets open_date
     *
     * @return string|null
     */
    public function getOpenDate()
    {
        return $this->container['open_date'];
    }

    /**
     * Sets open_date
     *
     * @param string|null $open_date The timestamp in this field shows the date/time when the payment dispute was opened. This field is returned for payment disputes in all states.<br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return self
     */
    public function setOpenDate($open_date)
    {
        if (is_null($open_date)) {
            throw new \InvalidArgumentException('non-nullable open_date cannot be null');
        }
        $this->container['open_date'] = $open_date;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id This is the unique identifier of the order involved in the payment dispute.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets payment_dispute_id
     *
     * @return string|null
     */
    public function getPaymentDisputeId()
    {
        return $this->container['payment_dispute_id'];
    }

    /**
     * Sets payment_dispute_id
     *
     * @param string|null $payment_dispute_id This is the unique identifier of the payment dispute. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. This identifier is passed in at the end of the <strong>getPaymentDispute</strong> call URI to retrieve a specific payment dispute. The <strong>getPaymentDispute</strong> method returns more details about a payment dispute than the <strong>getPaymentDisputeSummaries</strong> method.
     *
     * @return self
     */
    public function setPaymentDisputeId($payment_dispute_id)
    {
        if (is_null($payment_dispute_id)) {
            throw new \InvalidArgumentException('non-nullable payment_dispute_id cannot be null');
        }
        $this->container['payment_dispute_id'] = $payment_dispute_id;

        return $this;
    }

    /**
     * Gets payment_dispute_status
     *
     * @return string|null
     */
    public function getPaymentDisputeStatus()
    {
        return $this->container['payment_dispute_status'];
    }

    /**
     * Sets payment_dispute_status
     *
     * @param string|null $payment_dispute_status The enumeration value in this field gives the current status of the payment dispute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:DisputeStateEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPaymentDisputeStatus($payment_dispute_status)
    {
        if (is_null($payment_dispute_status)) {
            throw new \InvalidArgumentException('non-nullable payment_dispute_status cannot be null');
        }
        $this->container['payment_dispute_status'] = $payment_dispute_status;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The enumeration value in this field gives the reason why the buyer initiated the payment dispute. See <strong>DisputeReasonEnum</strong> type for a description of the supported reasons that buyers can give for initiating a payment dispute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:DisputeReasonEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets respond_by_date
     *
     * @return string|null
     */
    public function getRespondByDate()
    {
        return $this->container['respond_by_date'];
    }

    /**
     * Sets respond_by_date
     *
     * @param string|null $respond_by_date The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the <code>ACTION_NEEDED</code> state. For payment disputes that require action by the seller, that same seller must call <strong>getPaymentDispute</strong> to see the next action(s) that they can take against the payment dispute.<br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return self
     */
    public function setRespondByDate($respond_by_date)
    {
        if (is_null($respond_by_date)) {
            throw new \InvalidArgumentException('non-nullable respond_by_date cannot be null');
        }
        $this->container['respond_by_date'] = $respond_by_date;

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


