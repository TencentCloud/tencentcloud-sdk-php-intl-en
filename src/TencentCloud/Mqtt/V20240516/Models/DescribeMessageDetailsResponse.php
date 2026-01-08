<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageDetails response structure.
 *
 * @method string getBody() Obtain Message body.
 * @method void setBody(string $Body) Set Message body.
 * @method array getUserProperties() Obtain Describes the user-customized attribute.
 * @method void setUserProperties(array $UserProperties) Set Describes the user-customized attribute.
 * @method integer getStoreTimestamp() Obtain Specifies the message storage time. millisecond-level timestamp.
 * @method void setStoreTimestamp(integer $StoreTimestamp) Set Specifies the message storage time. millisecond-level timestamp.
 * @method string getMessageId() Obtain Message ID.
 * @method void setMessageId(string $MessageId) Set Message ID.
 * @method string getClientId() Obtain Producer address.
 * @method void setClientId(string $ClientId) Set Producer address.
 * @method string getQos() Obtain Topic
 * @method void setQos(string $Qos) Set Topic
 * @method string getOriginTopic() Obtain Specifies the source topic.
 * @method void setOriginTopic(string $OriginTopic) Set Specifies the source topic.
 * @method string getContentType() Obtain Content type (MQTT5).
Indicates the content type of the message payload using standard MIME type format. helps the receiver correctly parse and process the message content.
Specifies the example.
application/json: indicates the payload is data in json format.
Text/Plain: indicates the payload is plain text.
application/octet-stream: indicates the payload is binary data.
 * @method void setContentType(string $ContentType) Set Content type (MQTT5).
Indicates the content type of the message payload using standard MIME type format. helps the receiver correctly parse and process the message content.
Specifies the example.
application/json: indicates the payload is data in json format.
Text/Plain: indicates the payload is plain text.
application/octet-stream: indicates the payload is binary data.
 * @method integer getPayloadFormatIndicator() Obtain Payload format indicator (MQTT5).
Indicates the payload format, which is a boolean value. 0 means an unspecified format (binary), and 1 means a UTF-8 encoded string.
Specifies the example.
Valid values: 0 indicates the payload is binary data, such as images or audio.
Valid value 1: when the payload is UTF-8 encoded text, such as JSON string or XML.
 * @method void setPayloadFormatIndicator(integer $PayloadFormatIndicator) Set Payload format indicator (MQTT5).
Indicates the payload format, which is a boolean value. 0 means an unspecified format (binary), and 1 means a UTF-8 encoded string.
Specifies the example.
Valid values: 0 indicates the payload is binary data, such as images or audio.
Valid value 1: when the payload is UTF-8 encoded text, such as JSON string or XML.
 * @method integer getMessageExpiryInterval() Obtain Message expiration interval (MQTT5).
Specifies the validity time (in seconds) of the specified message before it is discarded. if the message fails to reach the MQTT server before expiration, it will be discarded.
Specifies the example.
The value 60 indicates that the message is valid within 60 seconds after release. unreached messages will be dropped after expiry.
A value of 0 indicates the message never expires and remains permanently valid until received or the session ends.
 * @method void setMessageExpiryInterval(integer $MessageExpiryInterval) Set Message expiration interval (MQTT5).
Specifies the validity time (in seconds) of the specified message before it is discarded. if the message fails to reach the MQTT server before expiration, it will be discarded.
Specifies the example.
The value 60 indicates that the message is valid within 60 seconds after release. unreached messages will be dropped after expiry.
A value of 0 indicates the message never expires and remains permanently valid until received or the session ends.
 * @method string getResponseTopic() Obtain Response topic (MQTT5).
Specifies a topic for the response message in request-response mode. the sender can specify which topic the recipient should send the response to.
Specifies the example.
Sender publishes a request to the topic devices/device1/commands and sets ResponseTopic to devices/device1/responses.
Specifies the topic where the response is published after the recipient processes the request.
 * @method void setResponseTopic(string $ResponseTopic) Set Response topic (MQTT5).
Specifies a topic for the response message in request-response mode. the sender can specify which topic the recipient should send the response to.
Specifies the example.
Sender publishes a request to the topic devices/device1/commands and sets ResponseTopic to devices/device1/responses.
Specifies the topic where the response is published after the recipient processes the request.
 * @method string getCorrelationData() Obtain Associated data (MQTT5).
Specifies the identifier used to associate a request and response, usually a byte array. in request-response mode, the sender sets this value, and the recipient includes the same value in the response so that the sender can identify the corresponding request.
Specifies the example.
The sender generates a unique ID (such as a byte[] of UUID) as CorrelationData and adds it to the request message.
The recipient includes the same CorrelationData in the response message. the sender compares this value to match the response and the request.
 * @method void setCorrelationData(string $CorrelationData) Set Associated data (MQTT5).
Specifies the identifier used to associate a request and response, usually a byte array. in request-response mode, the sender sets this value, and the recipient includes the same value in the response so that the sender can identify the corresponding request.
Specifies the example.
The sender generates a unique ID (such as a byte[] of UUID) as CorrelationData and adds it to the request message.
The recipient includes the same CorrelationData in the response message. the sender compares this value to match the response and the request.
 * @method string getSubscriptionIdentifier() Obtain Subscription identifier (MQTT5).
Specifies the unique identifier assigned to the subscription, used to identify a specific subscription of the client. when sending a message to the client, the server can include this identifier to help with client identification of the corresponding subscription.
Specifies the example.
The client subscribes to the topic devices/+/temperature and sets SubscriptionIdentifier to 123.
When the server sends a message of this topic to the client, the message will contain SubscriptionIdentifier: 123. the client can know which subscription the message is sent through based on this value.
 * @method void setSubscriptionIdentifier(string $SubscriptionIdentifier) Set Subscription identifier (MQTT5).
Specifies the unique identifier assigned to the subscription, used to identify a specific subscription of the client. when sending a message to the client, the server can include this identifier to help with client identification of the corresponding subscription.
Specifies the example.
The client subscribes to the topic devices/+/temperature and sets SubscriptionIdentifier to 123.
When the server sends a message of this topic to the client, the message will contain SubscriptionIdentifier: 123. the client can know which subscription the message is sent through based on this value.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeMessageDetailsResponse extends AbstractModel
{
    /**
     * @var string Message body.
     */
    public $Body;

    /**
     * @var array Describes the user-customized attribute.
     */
    public $UserProperties;

    /**
     * @var integer Specifies the message storage time. millisecond-level timestamp.
     */
    public $StoreTimestamp;

    /**
     * @var string Message ID.
     */
    public $MessageId;

    /**
     * @var string Producer address.
     */
    public $ClientId;

    /**
     * @var string Topic
     */
    public $Qos;

    /**
     * @var string Specifies the source topic.
     */
    public $OriginTopic;

    /**
     * @var string Content type (MQTT5).
Indicates the content type of the message payload using standard MIME type format. helps the receiver correctly parse and process the message content.
Specifies the example.
application/json: indicates the payload is data in json format.
Text/Plain: indicates the payload is plain text.
application/octet-stream: indicates the payload is binary data.
     */
    public $ContentType;

    /**
     * @var integer Payload format indicator (MQTT5).
Indicates the payload format, which is a boolean value. 0 means an unspecified format (binary), and 1 means a UTF-8 encoded string.
Specifies the example.
Valid values: 0 indicates the payload is binary data, such as images or audio.
Valid value 1: when the payload is UTF-8 encoded text, such as JSON string or XML.
     */
    public $PayloadFormatIndicator;

    /**
     * @var integer Message expiration interval (MQTT5).
Specifies the validity time (in seconds) of the specified message before it is discarded. if the message fails to reach the MQTT server before expiration, it will be discarded.
Specifies the example.
The value 60 indicates that the message is valid within 60 seconds after release. unreached messages will be dropped after expiry.
A value of 0 indicates the message never expires and remains permanently valid until received or the session ends.
     */
    public $MessageExpiryInterval;

    /**
     * @var string Response topic (MQTT5).
Specifies a topic for the response message in request-response mode. the sender can specify which topic the recipient should send the response to.
Specifies the example.
Sender publishes a request to the topic devices/device1/commands and sets ResponseTopic to devices/device1/responses.
Specifies the topic where the response is published after the recipient processes the request.
     */
    public $ResponseTopic;

    /**
     * @var string Associated data (MQTT5).
Specifies the identifier used to associate a request and response, usually a byte array. in request-response mode, the sender sets this value, and the recipient includes the same value in the response so that the sender can identify the corresponding request.
Specifies the example.
The sender generates a unique ID (such as a byte[] of UUID) as CorrelationData and adds it to the request message.
The recipient includes the same CorrelationData in the response message. the sender compares this value to match the response and the request.
     */
    public $CorrelationData;

    /**
     * @var string Subscription identifier (MQTT5).
Specifies the unique identifier assigned to the subscription, used to identify a specific subscription of the client. when sending a message to the client, the server can include this identifier to help with client identification of the corresponding subscription.
Specifies the example.
The client subscribes to the topic devices/+/temperature and sets SubscriptionIdentifier to 123.
When the server sends a message of this topic to the client, the message will contain SubscriptionIdentifier: 123. the client can know which subscription the message is sent through based on this value.
     */
    public $SubscriptionIdentifier;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Body Message body.
     * @param array $UserProperties Describes the user-customized attribute.
     * @param integer $StoreTimestamp Specifies the message storage time. millisecond-level timestamp.
     * @param string $MessageId Message ID.
     * @param string $ClientId Producer address.
     * @param string $Qos Topic
     * @param string $OriginTopic Specifies the source topic.
     * @param string $ContentType Content type (MQTT5).
Indicates the content type of the message payload using standard MIME type format. helps the receiver correctly parse and process the message content.
Specifies the example.
application/json: indicates the payload is data in json format.
Text/Plain: indicates the payload is plain text.
application/octet-stream: indicates the payload is binary data.
     * @param integer $PayloadFormatIndicator Payload format indicator (MQTT5).
Indicates the payload format, which is a boolean value. 0 means an unspecified format (binary), and 1 means a UTF-8 encoded string.
Specifies the example.
Valid values: 0 indicates the payload is binary data, such as images or audio.
Valid value 1: when the payload is UTF-8 encoded text, such as JSON string or XML.
     * @param integer $MessageExpiryInterval Message expiration interval (MQTT5).
Specifies the validity time (in seconds) of the specified message before it is discarded. if the message fails to reach the MQTT server before expiration, it will be discarded.
Specifies the example.
The value 60 indicates that the message is valid within 60 seconds after release. unreached messages will be dropped after expiry.
A value of 0 indicates the message never expires and remains permanently valid until received or the session ends.
     * @param string $ResponseTopic Response topic (MQTT5).
Specifies a topic for the response message in request-response mode. the sender can specify which topic the recipient should send the response to.
Specifies the example.
Sender publishes a request to the topic devices/device1/commands and sets ResponseTopic to devices/device1/responses.
Specifies the topic where the response is published after the recipient processes the request.
     * @param string $CorrelationData Associated data (MQTT5).
Specifies the identifier used to associate a request and response, usually a byte array. in request-response mode, the sender sets this value, and the recipient includes the same value in the response so that the sender can identify the corresponding request.
Specifies the example.
The sender generates a unique ID (such as a byte[] of UUID) as CorrelationData and adds it to the request message.
The recipient includes the same CorrelationData in the response message. the sender compares this value to match the response and the request.
     * @param string $SubscriptionIdentifier Subscription identifier (MQTT5).
Specifies the unique identifier assigned to the subscription, used to identify a specific subscription of the client. when sending a message to the client, the server can include this identifier to help with client identification of the corresponding subscription.
Specifies the example.
The client subscribes to the topic devices/+/temperature and sets SubscriptionIdentifier to 123.
When the server sends a message of this topic to the client, the message will contain SubscriptionIdentifier: 123. the client can know which subscription the message is sent through based on this value.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("UserProperties",$param) and $param["UserProperties"] !== null) {
            $this->UserProperties = [];
            foreach ($param["UserProperties"] as $key => $value){
                $obj = new UserProperty();
                $obj->deserialize($value);
                array_push($this->UserProperties, $obj);
            }
        }

        if (array_key_exists("StoreTimestamp",$param) and $param["StoreTimestamp"] !== null) {
            $this->StoreTimestamp = $param["StoreTimestamp"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("OriginTopic",$param) and $param["OriginTopic"] !== null) {
            $this->OriginTopic = $param["OriginTopic"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("PayloadFormatIndicator",$param) and $param["PayloadFormatIndicator"] !== null) {
            $this->PayloadFormatIndicator = $param["PayloadFormatIndicator"];
        }

        if (array_key_exists("MessageExpiryInterval",$param) and $param["MessageExpiryInterval"] !== null) {
            $this->MessageExpiryInterval = $param["MessageExpiryInterval"];
        }

        if (array_key_exists("ResponseTopic",$param) and $param["ResponseTopic"] !== null) {
            $this->ResponseTopic = $param["ResponseTopic"];
        }

        if (array_key_exists("CorrelationData",$param) and $param["CorrelationData"] !== null) {
            $this->CorrelationData = $param["CorrelationData"];
        }

        if (array_key_exists("SubscriptionIdentifier",$param) and $param["SubscriptionIdentifier"] !== null) {
            $this->SubscriptionIdentifier = $param["SubscriptionIdentifier"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
