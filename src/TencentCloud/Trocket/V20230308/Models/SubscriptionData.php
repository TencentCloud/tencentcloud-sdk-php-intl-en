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
 * Topic and consumer group subscription relationship data
 *
 * @method string getInstanceId() Obtain Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTopic() Obtain Topic name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopic(string $Topic) Set Topic name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTopicType() Obtain Topic type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicType(string $TopicType) Set Topic type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTopicQueueNum() Obtain Number of topic queues on a single node

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicQueueNum(integer $TopicQueueNum) Set Number of topic queues on a single node

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsumerGroup() Obtain Specifies the consumer group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Specifies the consumer group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsOnline() Obtain Online status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsOnline(boolean $IsOnline) Set Online status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsumeType() Obtain Consumption type. valid values as follows:.

-PULL: specifies the pull consumption type.
-PUSH: specifies the push consumption type.
-POP: specifies the pop consumption type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumeType(string $ConsumeType) Set Consumption type. valid values as follows:.

-PULL: specifies the pull consumption type.
-PUSH: specifies the push consumption type.
-POP: specifies the pop consumption type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubString() Obtain Subscription rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubString(string $SubString) Set Subscription rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpressionType() Obtain Filter type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpressionType(string $ExpressionType) Set Filter type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getConsistency() Obtain Subscription consistency. enumerated as follows:.

-Subscription consistency.
-Subscription inconsistency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsistency(integer $Consistency) Set Subscription consistency. enumerated as follows:.

-Subscription consistency.
-Subscription inconsistency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getConsumerLag() Obtain Consumption heap

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerLag(integer $ConsumerLag) Set Consumption heap

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLastUpdateTime() Obtain Last consumption progress update time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastUpdateTime(integer $LastUpdateTime) Set Last consumption progress update time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRetryTimes() Obtain Maximum number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) Set Maximum number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getConsumeMessageOrderly() Obtain Whether it is sequential consumption

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) Set Whether it is sequential consumption

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessageModel() Obtain Specifies the consumption mode. 
BROADCASTING mode.
CLUSTERING: cluster mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessageModel(string $MessageModel) Set Specifies the consumption mode. 
BROADCASTING mode.
CLUSTERING: cluster mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getClientSubscriptionInfos() Obtain List of clients with inconsistent subscriptions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientSubscriptionInfos(array $ClientSubscriptionInfos) Set List of clients with inconsistent subscriptions.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SubscriptionData extends AbstractModel
{
    /**
     * @var string Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Topic name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Topic;

    /**
     * @var string Topic type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicType;

    /**
     * @var integer Number of topic queues on a single node

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicQueueNum;

    /**
     * @var string Specifies the consumer group name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerGroup;

    /**
     * @var boolean Online status

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsOnline;

    /**
     * @var string Consumption type. valid values as follows:.

-PULL: specifies the pull consumption type.
-PUSH: specifies the push consumption type.
-POP: specifies the pop consumption type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumeType;

    /**
     * @var string Subscription rule.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubString;

    /**
     * @var string Filter type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpressionType;

    /**
     * @var integer Subscription consistency. enumerated as follows:.

-Subscription consistency.
-Subscription inconsistency.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Consistency;

    /**
     * @var integer Consumption heap

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerLag;

    /**
     * @var integer Last consumption progress update time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastUpdateTime;

    /**
     * @var integer Maximum number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRetryTimes;

    /**
     * @var boolean Whether it is sequential consumption

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumeMessageOrderly;

    /**
     * @var string Specifies the consumption mode. 
BROADCASTING mode.
CLUSTERING: cluster mode.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MessageModel;

    /**
     * @var array List of clients with inconsistent subscriptions.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientSubscriptionInfos;

    /**
     * @param string $InstanceId Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Topic Topic name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TopicType Topic type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TopicQueueNum Number of topic queues on a single node

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumerGroup Specifies the consumer group name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsOnline Online status

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumeType Consumption type. valid values as follows:.

-PULL: specifies the pull consumption type.
-PUSH: specifies the push consumption type.
-POP: specifies the pop consumption type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubString Subscription rule.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpressionType Filter type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Consistency Subscription consistency. enumerated as follows:.

-Subscription consistency.
-Subscription inconsistency.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ConsumerLag Consumption heap

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LastUpdateTime Last consumption progress update time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRetryTimes Maximum number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ConsumeMessageOrderly Whether it is sequential consumption

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MessageModel Specifies the consumption mode. 
BROADCASTING mode.
CLUSTERING: cluster mode.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ClientSubscriptionInfos List of clients with inconsistent subscriptions.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("TopicQueueNum",$param) and $param["TopicQueueNum"] !== null) {
            $this->TopicQueueNum = $param["TopicQueueNum"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("IsOnline",$param) and $param["IsOnline"] !== null) {
            $this->IsOnline = $param["IsOnline"];
        }

        if (array_key_exists("ConsumeType",$param) and $param["ConsumeType"] !== null) {
            $this->ConsumeType = $param["ConsumeType"];
        }

        if (array_key_exists("SubString",$param) and $param["SubString"] !== null) {
            $this->SubString = $param["SubString"];
        }

        if (array_key_exists("ExpressionType",$param) and $param["ExpressionType"] !== null) {
            $this->ExpressionType = $param["ExpressionType"];
        }

        if (array_key_exists("Consistency",$param) and $param["Consistency"] !== null) {
            $this->Consistency = $param["Consistency"];
        }

        if (array_key_exists("ConsumerLag",$param) and $param["ConsumerLag"] !== null) {
            $this->ConsumerLag = $param["ConsumerLag"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("ConsumeMessageOrderly",$param) and $param["ConsumeMessageOrderly"] !== null) {
            $this->ConsumeMessageOrderly = $param["ConsumeMessageOrderly"];
        }

        if (array_key_exists("MessageModel",$param) and $param["MessageModel"] !== null) {
            $this->MessageModel = $param["MessageModel"];
        }

        if (array_key_exists("ClientSubscriptionInfos",$param) and $param["ClientSubscriptionInfos"] !== null) {
            $this->ClientSubscriptionInfos = [];
            foreach ($param["ClientSubscriptionInfos"] as $key => $value){
                $obj = new ClientSubscriptionInfo();
                $obj->deserialize($value);
                array_push($this->ClientSubscriptionInfos, $obj);
            }
        }
    }
}
