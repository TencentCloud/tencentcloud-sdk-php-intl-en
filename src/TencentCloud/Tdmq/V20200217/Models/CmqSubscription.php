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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subscription response parameter in CMQ
 *
 * @method string getSubscriptionName() Obtain Subscription name, which must be unique under the same account and same topic in a single region. the name is a string of no more than 64 characters, beginning with a letter, and the remaining part may contain letters, numbers, and hyphens (-).
 * @method void setSubscriptionName(string $SubscriptionName) Set Subscription name, which must be unique under the same account and same topic in a single region. the name is a string of no more than 64 characters, beginning with a letter, and the remaining part may contain letters, numbers, and hyphens (-).
 * @method string getSubscriptionId() Obtain Subscription ID. The subscription ID is used when monitoring data is pulled.
 * @method void setSubscriptionId(string $SubscriptionId) Set Subscription ID. The subscription ID is used when monitoring data is pulled.
 * @method integer getTopicOwner() Obtain Subscription owner `APPID`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicOwner(integer $TopicOwner) Set Subscription owner `APPID`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMsgCount() Obtain The number of messages waiting for shipping for this subscription.
 * @method void setMsgCount(integer $MsgCount) Set The number of messages waiting for shipping for this subscription.
 * @method integer getLastModifyTime() Obtain The last time the subscription attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
 * @method void setLastModifyTime(integer $LastModifyTime) Set The last time the subscription attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
 * @method integer getCreateTime() Obtain The time when the subscription was created. Returns a Unix timestamp, accurate to milliseconds.
 * @method void setCreateTime(integer $CreateTime) Set The time when the subscription was created. Returns a Unix timestamp, accurate to milliseconds.
 * @method array getBindingKey() Obtain Filtering policy for subscribing to and receiving messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBindingKey(array $BindingKey) Set Filtering policy for subscribing to and receiving messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEndpoint() Obtain The endpoint that receives notifications is differentiated by protocol: For HTTP, the endpoint must start with http://, and the host can be a domain name or IP; for queue, fill in queueName.
 * @method void setEndpoint(string $Endpoint) Set The endpoint that receives notifications is differentiated by protocol: For HTTP, the endpoint must start with http://, and the host can be a domain name or IP; for queue, fill in queueName.
 * @method array getFilterTags() Obtain Describes the filtering policy selected by users when creating subscriptions.
filterType = 1 indicates Tag filtering when users use filterTag.
filterType = 2 indicates user use bindingKey for filtering.
 * @method void setFilterTags(array $FilterTags) Set Describes the filtering policy selected by users when creating subscriptions.
filterType = 1 indicates Tag filtering when users use filterTag.
filterType = 2 indicates user use bindingKey for filtering.
 * @method string getProtocol() Obtain The subscription protocol, currently supports two protocols: HTTP and queue. When the HTTP protocol is used, users need to set up their own web server to accept messages. When the queue protocol is used, messages will automatically be pushed to CMQ queues, and users can pull messages concurrently.
 * @method void setProtocol(string $Protocol) Set The subscription protocol, currently supports two protocols: HTTP and queue. When the HTTP protocol is used, users need to set up their own web server to accept messages. When the queue protocol is used, messages will automatically be pushed to CMQ queues, and users can pull messages concurrently.
 * @method string getNotifyStrategy() Obtain Specifies the CMQ push server retry policy when an error occurs while pushing messages to an endpoint. valid values:.
BACKOFF_RETRY, backoff retry. retry at regular intervals, discard the message after a certain number of retries, and continue to push the next message.
(2) EXPONENTIAL_DECAY_RETRY, EXPONENTIAL DECAY RETRY. the interval between retries increases exponentially, for example starting at 1s, followed by 2s, 4s, 8s... since the Topic message period is one day, RETRY for at most one day then discard the message. default value is EXPONENTIAL_DECAY_RETRY.
 * @method void setNotifyStrategy(string $NotifyStrategy) Set Specifies the CMQ push server retry policy when an error occurs while pushing messages to an endpoint. valid values:.
BACKOFF_RETRY, backoff retry. retry at regular intervals, discard the message after a certain number of retries, and continue to push the next message.
(2) EXPONENTIAL_DECAY_RETRY, EXPONENTIAL DECAY RETRY. the interval between retries increases exponentially, for example starting at 1s, followed by 2s, 4s, 8s... since the Topic message period is one day, RETRY for at most one day then discard the message. default value is EXPONENTIAL_DECAY_RETRY.
 * @method string getNotifyContentFormat() Obtain The format of the push content. Values: (1) JSON; (2) SIMPLIFIED, i.e., raw format. If protocol is queue, the value must be SIMPLIFIED. If protocol is HTTP, both values are acceptable, with the default being JSON.
 * @method void setNotifyContentFormat(string $NotifyContentFormat) Set The format of the push content. Values: (1) JSON; (2) SIMPLIFIED, i.e., raw format. If protocol is queue, the value must be SIMPLIFIED. If protocol is HTTP, both values are acceptable, with the default being JSON.
 * @method string getTopicName() Obtain Topic Name of the Subscription
 * @method void setTopicName(string $TopicName) Set Topic Name of the Subscription
 */
class CmqSubscription extends AbstractModel
{
    /**
     * @var string Subscription name, which must be unique under the same account and same topic in a single region. the name is a string of no more than 64 characters, beginning with a letter, and the remaining part may contain letters, numbers, and hyphens (-).
     */
    public $SubscriptionName;

    /**
     * @var string Subscription ID. The subscription ID is used when monitoring data is pulled.
     */
    public $SubscriptionId;

    /**
     * @var integer Subscription owner `APPID`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicOwner;

    /**
     * @var integer The number of messages waiting for shipping for this subscription.
     */
    public $MsgCount;

    /**
     * @var integer The last time the subscription attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
     */
    public $LastModifyTime;

    /**
     * @var integer The time when the subscription was created. Returns a Unix timestamp, accurate to milliseconds.
     */
    public $CreateTime;

    /**
     * @var array Filtering policy for subscribing to and receiving messages.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BindingKey;

    /**
     * @var string The endpoint that receives notifications is differentiated by protocol: For HTTP, the endpoint must start with http://, and the host can be a domain name or IP; for queue, fill in queueName.
     */
    public $Endpoint;

    /**
     * @var array Describes the filtering policy selected by users when creating subscriptions.
filterType = 1 indicates Tag filtering when users use filterTag.
filterType = 2 indicates user use bindingKey for filtering.
     */
    public $FilterTags;

    /**
     * @var string The subscription protocol, currently supports two protocols: HTTP and queue. When the HTTP protocol is used, users need to set up their own web server to accept messages. When the queue protocol is used, messages will automatically be pushed to CMQ queues, and users can pull messages concurrently.
     */
    public $Protocol;

    /**
     * @var string Specifies the CMQ push server retry policy when an error occurs while pushing messages to an endpoint. valid values:.
BACKOFF_RETRY, backoff retry. retry at regular intervals, discard the message after a certain number of retries, and continue to push the next message.
(2) EXPONENTIAL_DECAY_RETRY, EXPONENTIAL DECAY RETRY. the interval between retries increases exponentially, for example starting at 1s, followed by 2s, 4s, 8s... since the Topic message period is one day, RETRY for at most one day then discard the message. default value is EXPONENTIAL_DECAY_RETRY.
     */
    public $NotifyStrategy;

    /**
     * @var string The format of the push content. Values: (1) JSON; (2) SIMPLIFIED, i.e., raw format. If protocol is queue, the value must be SIMPLIFIED. If protocol is HTTP, both values are acceptable, with the default being JSON.
     */
    public $NotifyContentFormat;

    /**
     * @var string Topic Name of the Subscription
     */
    public $TopicName;

    /**
     * @param string $SubscriptionName Subscription name, which must be unique under the same account and same topic in a single region. the name is a string of no more than 64 characters, beginning with a letter, and the remaining part may contain letters, numbers, and hyphens (-).
     * @param string $SubscriptionId Subscription ID. The subscription ID is used when monitoring data is pulled.
     * @param integer $TopicOwner Subscription owner `APPID`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MsgCount The number of messages waiting for shipping for this subscription.
     * @param integer $LastModifyTime The last time the subscription attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
     * @param integer $CreateTime The time when the subscription was created. Returns a Unix timestamp, accurate to milliseconds.
     * @param array $BindingKey Filtering policy for subscribing to and receiving messages.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Endpoint The endpoint that receives notifications is differentiated by protocol: For HTTP, the endpoint must start with http://, and the host can be a domain name or IP; for queue, fill in queueName.
     * @param array $FilterTags Describes the filtering policy selected by users when creating subscriptions.
filterType = 1 indicates Tag filtering when users use filterTag.
filterType = 2 indicates user use bindingKey for filtering.
     * @param string $Protocol The subscription protocol, currently supports two protocols: HTTP and queue. When the HTTP protocol is used, users need to set up their own web server to accept messages. When the queue protocol is used, messages will automatically be pushed to CMQ queues, and users can pull messages concurrently.
     * @param string $NotifyStrategy Specifies the CMQ push server retry policy when an error occurs while pushing messages to an endpoint. valid values:.
BACKOFF_RETRY, backoff retry. retry at regular intervals, discard the message after a certain number of retries, and continue to push the next message.
(2) EXPONENTIAL_DECAY_RETRY, EXPONENTIAL DECAY RETRY. the interval between retries increases exponentially, for example starting at 1s, followed by 2s, 4s, 8s... since the Topic message period is one day, RETRY for at most one day then discard the message. default value is EXPONENTIAL_DECAY_RETRY.
     * @param string $NotifyContentFormat The format of the push content. Values: (1) JSON; (2) SIMPLIFIED, i.e., raw format. If protocol is queue, the value must be SIMPLIFIED. If protocol is HTTP, both values are acceptable, with the default being JSON.
     * @param string $TopicName Topic Name of the Subscription
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
        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("SubscriptionId",$param) and $param["SubscriptionId"] !== null) {
            $this->SubscriptionId = $param["SubscriptionId"];
        }

        if (array_key_exists("TopicOwner",$param) and $param["TopicOwner"] !== null) {
            $this->TopicOwner = $param["TopicOwner"];
        }

        if (array_key_exists("MsgCount",$param) and $param["MsgCount"] !== null) {
            $this->MsgCount = $param["MsgCount"];
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BindingKey",$param) and $param["BindingKey"] !== null) {
            $this->BindingKey = $param["BindingKey"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("FilterTags",$param) and $param["FilterTags"] !== null) {
            $this->FilterTags = $param["FilterTags"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("NotifyStrategy",$param) and $param["NotifyStrategy"] !== null) {
            $this->NotifyStrategy = $param["NotifyStrategy"];
        }

        if (array_key_exists("NotifyContentFormat",$param) and $param["NotifyContentFormat"] !== null) {
            $this->NotifyContentFormat = $param["NotifyContentFormat"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
