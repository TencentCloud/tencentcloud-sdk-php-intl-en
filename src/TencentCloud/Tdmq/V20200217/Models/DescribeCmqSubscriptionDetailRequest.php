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
 * DescribeCmqSubscriptionDetail request structure.
 *
 * @method string getTopicName() Obtain Topic name, which must be unique under the same account in a single region. The name is a string of no more than 64 characters, starting with a letter, and the remaining part may include letters, numbers, and hyphens (-).
 * @method void setTopicName(string $TopicName) Set Topic name, which must be unique under the same account in a single region. The name is a string of no more than 64 characters, starting with a letter, and the remaining part may include letters, numbers, and hyphens (-).
 * @method integer getOffset() Obtain Starting position of the list of topics to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
 * @method void setOffset(integer $Offset) Set Starting position of the list of topics to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
 * @method integer getLimit() Obtain Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
 * @method void setLimit(integer $Limit) Set Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
 * @method string getSubscriptionName() Obtain Fuzzy search by `SubscriptionName`
 * @method void setSubscriptionName(string $SubscriptionName) Set Fuzzy search by `SubscriptionName`
 * @method string getQueueName() Obtain Queue name. Endpoint of bound subscription
 * @method void setQueueName(string $QueueName) Set Queue name. Endpoint of bound subscription
 * @method string getQueryType() Obtain Query type. valid values: (1) topic; (2) queue.
Default value is topic. if queryType is topic, query subscriptions under the topic. if queryType is queue, query subscriptions bound to the queue.
 * @method void setQueryType(string $QueryType) Set Query type. valid values: (1) topic; (2) queue.
Default value is topic. if queryType is topic, query subscriptions under the topic. if queryType is queue, query subscriptions bound to the queue.
 */
class DescribeCmqSubscriptionDetailRequest extends AbstractModel
{
    /**
     * @var string Topic name, which must be unique under the same account in a single region. The name is a string of no more than 64 characters, starting with a letter, and the remaining part may include letters, numbers, and hyphens (-).
     */
    public $TopicName;

    /**
     * @var integer Starting position of the list of topics to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
     */
    public $Offset;

    /**
     * @var integer Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
     */
    public $Limit;

    /**
     * @var string Fuzzy search by `SubscriptionName`
     */
    public $SubscriptionName;

    /**
     * @var string Queue name. Endpoint of bound subscription
     */
    public $QueueName;

    /**
     * @var string Query type. valid values: (1) topic; (2) queue.
Default value is topic. if queryType is topic, query subscriptions under the topic. if queryType is queue, query subscriptions bound to the queue.
     */
    public $QueryType;

    /**
     * @param string $TopicName Topic name, which must be unique under the same account in a single region. The name is a string of no more than 64 characters, starting with a letter, and the remaining part may include letters, numbers, and hyphens (-).
     * @param integer $Offset Starting position of the list of topics to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
     * @param integer $Limit Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
     * @param string $SubscriptionName Fuzzy search by `SubscriptionName`
     * @param string $QueueName Queue name. Endpoint of bound subscription
     * @param string $QueryType Query type. valid values: (1) topic; (2) queue.
Default value is topic. if queryType is topic, query subscriptions under the topic. if queryType is queue, query subscriptions bound to the queue.
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }
    }
}
