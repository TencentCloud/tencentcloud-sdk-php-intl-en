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
 * RocketMQ Consumer Group Subscription Information
 *
 * @method string getTopic() Obtain Topic name
 * @method void setTopic(string $Topic) Set Topic name
 * @method string getType() Obtain Topic type.
Normal.
GlobalOrder specifies the global sequential order.
Partitionally sequential.
Transactional message.
DelayScheduled specifies the delayed message.
Retry.
DeadLetter. specifies the dead letter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Topic type.
Normal.
GlobalOrder specifies the global sequential order.
Partitionally sequential.
Transactional message.
DelayScheduled specifies the delayed message.
Retry.
DeadLetter. specifies the dead letter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPartitionNum() Obtain Number of partitions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitionNum(integer $PartitionNum) Set Number of partitions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpressionType() Obtain Filter mode, which can be TAG or SQL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpressionType(string $ExpressionType) Set Filter mode, which can be TAG or SQL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubString() Obtain Filter expression.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubString(string $SubString) Set Filter expression.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Subscription status:.
Consistent subscription relationship.
Inconsistent subscription relationship.
2. unknown.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Subscription status:.
Consistent subscription relationship.
Inconsistent subscription relationship.
2. unknown.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getConsumerLag() Obtain Number of heaped consumer groups.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerLag(integer $ConsumerLag) Set Number of heaped consumer groups.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsumerGroup() Obtain Specifies the consumer group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Specifies the consumer group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsOnline() Obtain Online status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsOnline(boolean $IsOnline) Set Online status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getConsumeType() Obtain Consumption type.
Broadcast consumption.
Specifies the cluster consumption.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumeType(integer $ConsumeType) Set Consumption type.
Broadcast consumption.
Specifies the cluster consumption.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getConsistency() Obtain Subscription consistency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsistency(integer $Consistency) Set Subscription consistency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLastUpdateTime() Obtain Last consumption progress update time, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastUpdateTime(integer $LastUpdateTime) Set Last consumption progress update time, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRetryTimes() Obtain Maximum number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) Set Maximum number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClientProtocol() Obtain Protocol type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientProtocol(string $ClientProtocol) Set Protocol type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getClientSubscriptionInfos() Obtain Client subscription details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientSubscriptionInfos(array $ClientSubscriptionInfos) Set Client subscription details.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RocketMQSubscription extends AbstractModel
{
    /**
     * @var string Topic name
     */
    public $Topic;

    /**
     * @var string Topic type.
Normal.
GlobalOrder specifies the global sequential order.
Partitionally sequential.
Transactional message.
DelayScheduled specifies the delayed message.
Retry.
DeadLetter. specifies the dead letter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var integer Number of partitions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PartitionNum;

    /**
     * @var string Filter mode, which can be TAG or SQL.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpressionType;

    /**
     * @var string Filter expression.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubString;

    /**
     * @var integer Subscription status:.
Consistent subscription relationship.
Inconsistent subscription relationship.
2. unknown.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Number of heaped consumer groups.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerLag;

    /**
     * @var string Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

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
     * @var integer Consumption type.
Broadcast consumption.
Specifies the cluster consumption.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumeType;

    /**
     * @var integer Subscription consistency.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Consistency;

    /**
     * @var integer Last consumption progress update time, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastUpdateTime;

    /**
     * @var integer Maximum number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRetryTimes;

    /**
     * @var string Protocol type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientProtocol;

    /**
     * @var array Client subscription details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientSubscriptionInfos;

    /**
     * @param string $Topic Topic name
     * @param string $Type Topic type.
Normal.
GlobalOrder specifies the global sequential order.
Partitionally sequential.
Transactional message.
DelayScheduled specifies the delayed message.
Retry.
DeadLetter. specifies the dead letter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PartitionNum Number of partitions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpressionType Filter mode, which can be TAG or SQL.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubString Filter expression.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Subscription status:.
Consistent subscription relationship.
Inconsistent subscription relationship.
2. unknown.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ConsumerLag Number of heaped consumer groups.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumerGroup Specifies the consumer group name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsOnline Online status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ConsumeType Consumption type.
Broadcast consumption.
Specifies the cluster consumption.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Consistency Subscription consistency.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LastUpdateTime Last consumption progress update time, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRetryTimes Maximum number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClientProtocol Protocol type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ClientSubscriptionInfos Client subscription details.
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("ExpressionType",$param) and $param["ExpressionType"] !== null) {
            $this->ExpressionType = $param["ExpressionType"];
        }

        if (array_key_exists("SubString",$param) and $param["SubString"] !== null) {
            $this->SubString = $param["SubString"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ConsumerLag",$param) and $param["ConsumerLag"] !== null) {
            $this->ConsumerLag = $param["ConsumerLag"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
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

        if (array_key_exists("Consistency",$param) and $param["Consistency"] !== null) {
            $this->Consistency = $param["Consistency"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("ClientProtocol",$param) and $param["ClientProtocol"] !== null) {
            $this->ClientProtocol = $param["ClientProtocol"];
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
