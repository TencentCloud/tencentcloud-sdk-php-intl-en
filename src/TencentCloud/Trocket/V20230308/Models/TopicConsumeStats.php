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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Topic consumption progress
 *
 * @method string getTopic() Obtain Topic name
 * @method void setTopic(string $Topic) Set Topic name
 * @method string getTopicType() Obtain Topic type. valid values are as follows:.

-UNSPECIFIED: unspecified.
-NORMAL: standard message.
-FIFO: specifies sequential messaging.
-DELAY: specifies the delayed message.
-Specifies the TRANSACTION message.
 * @method void setTopicType(string $TopicType) Set Topic type. valid values are as follows:.

-UNSPECIFIED: unspecified.
-NORMAL: standard message.
-FIFO: specifies sequential messaging.
-DELAY: specifies the delayed message.
-Specifies the TRANSACTION message.
 * @method integer getQueueNum() Obtain Number of topic queues per node
 * @method void setQueueNum(integer $QueueNum) Set Number of topic queues per node
 * @method integer getConsumerLag() Obtain Consumption heap
 * @method void setConsumerLag(integer $ConsumerLag) Set Consumption heap
 * @method string getSubString() Obtain Subscription rule. `*` indicates subscription to all topics.
 * @method void setSubString(string $SubString) Set Subscription rule. `*` indicates subscription to all topics.
 * @method integer getLastUpdateTime() Obtain Last consumption progress update time. **It is a Unix timestamp (ms).**
 * @method void setLastUpdateTime(integer $LastUpdateTime) Set Last consumption progress update time. **It is a Unix timestamp (ms).**
 */
class TopicConsumeStats extends AbstractModel
{
    /**
     * @var string Topic name
     */
    public $Topic;

    /**
     * @var string Topic type. valid values are as follows:.

-UNSPECIFIED: unspecified.
-NORMAL: standard message.
-FIFO: specifies sequential messaging.
-DELAY: specifies the delayed message.
-Specifies the TRANSACTION message.
     */
    public $TopicType;

    /**
     * @var integer Number of topic queues per node
     */
    public $QueueNum;

    /**
     * @var integer Consumption heap
     */
    public $ConsumerLag;

    /**
     * @var string Subscription rule. `*` indicates subscription to all topics.
     */
    public $SubString;

    /**
     * @var integer Last consumption progress update time. **It is a Unix timestamp (ms).**
     */
    public $LastUpdateTime;

    /**
     * @param string $Topic Topic name
     * @param string $TopicType Topic type. valid values are as follows:.

-UNSPECIFIED: unspecified.
-NORMAL: standard message.
-FIFO: specifies sequential messaging.
-DELAY: specifies the delayed message.
-Specifies the TRANSACTION message.
     * @param integer $QueueNum Number of topic queues per node
     * @param integer $ConsumerLag Consumption heap
     * @param string $SubString Subscription rule. `*` indicates subscription to all topics.
     * @param integer $LastUpdateTime Last consumption progress update time. **It is a Unix timestamp (ms).**
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("QueueNum",$param) and $param["QueueNum"] !== null) {
            $this->QueueNum = $param["QueueNum"];
        }

        if (array_key_exists("ConsumerLag",$param) and $param["ConsumerLag"] !== null) {
            $this->ConsumerLag = $param["ConsumerLag"];
        }

        if (array_key_exists("SubString",$param) and $param["SubString"] !== null) {
            $this->SubString = $param["SubString"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }
    }
}
