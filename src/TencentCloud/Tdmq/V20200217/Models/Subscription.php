<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Subscriber
 *
 * @method string getTopicName() Obtain Topic name.
 * @method void setTopicName(string $TopicName) Set Topic name.
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
 * @method string getConnectedSince() Obtain The time when the consumer started connecting.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setConnectedSince(string $ConnectedSince) Set The time when the consumer started connecting.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getConsumerAddr() Obtain Consumer address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerAddr(string $ConsumerAddr) Set Consumer address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsumerCount() Obtain The number of consumers.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerCount(string $ConsumerCount) Set The number of consumers.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsumerName() Obtain Consumer name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerName(string $ConsumerName) Set Consumer name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMsgBacklog() Obtain The number of heaped messages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMsgBacklog(string $MsgBacklog) Set The number of heaped messages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMsgRateExpired() Obtain Percentage of messages under this subscription that were discarded but not sent after TTL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMsgRateExpired(string $MsgRateExpired) Set Percentage of messages under this subscription that were discarded but not sent after TTL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMsgRateOut() Obtain The total number of messages delivered by the consumer per second.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMsgRateOut(string $MsgRateOut) Set The total number of messages delivered by the consumer per second.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMsgThroughputOut() Obtain The size (in bytes) of messages consumed by the consumer per second.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMsgThroughputOut(string $MsgThroughputOut) Set The size (in bytes) of messages consumed by the consumer per second.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubscriptionName() Obtain Subscription name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubscriptionName(string $SubscriptionName) Set Subscription name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getConsumerSets() Obtain Set of consumers.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerSets(array $ConsumerSets) Set Set of consumers.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsOnline() Obtain Whether the consumer is online.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsOnline(boolean $IsOnline) Set Whether the consumer is online.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getConsumersScheduleSets() Obtain Set of consumption progress information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumersScheduleSets(array $ConsumersScheduleSets) Set Set of consumption progress information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Last modified.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Last modified.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubType() Obtain Subscription type. Valid values: `Exclusive`, `Shared`, `Failover`, and `Key_Shared`. An empty string or `NULL`: Unknown.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubType(string $SubType) Set Subscription type. Valid values: `Exclusive`, `Shared`, `Failover`, and `Key_Shared`. An empty string or `NULL`: Unknown.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getBlockedSubscriptionOnUnackedMsgs() Obtain Whether messages are blocked as the limit of unacknowledged messages has been reached.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBlockedSubscriptionOnUnackedMsgs(boolean $BlockedSubscriptionOnUnackedMsgs) Set Whether messages are blocked as the limit of unacknowledged messages has been reached.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxUnackedMsgNum() Obtain The maximum number of unacknowledged messages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxUnackedMsgNum(integer $MaxUnackedMsgNum) Set The maximum number of unacknowledged messages.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Subscription extends AbstractModel
{
    /**
     * @var string Topic name.
     */
    public $TopicName;

    /**
     * @var string Environment (namespace) name.
     */
    public $EnvironmentId;

    /**
     * @var string The time when the consumer started connecting.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ConnectedSince;

    /**
     * @var string Consumer address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerAddr;

    /**
     * @var string The number of consumers.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerCount;

    /**
     * @var string Consumer name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerName;

    /**
     * @var string The number of heaped messages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MsgBacklog;

    /**
     * @var string Percentage of messages under this subscription that were discarded but not sent after TTL.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MsgRateExpired;

    /**
     * @var string The total number of messages delivered by the consumer per second.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MsgRateOut;

    /**
     * @var string The size (in bytes) of messages consumed by the consumer per second.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MsgThroughputOut;

    /**
     * @var string Subscription name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubscriptionName;

    /**
     * @var array Set of consumers.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerSets;

    /**
     * @var boolean Whether the consumer is online.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsOnline;

    /**
     * @var array Set of consumption progress information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumersScheduleSets;

    /**
     * @var string Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last modified.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Subscription type. Valid values: `Exclusive`, `Shared`, `Failover`, and `Key_Shared`. An empty string or `NULL`: Unknown.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubType;

    /**
     * @var boolean Whether messages are blocked as the limit of unacknowledged messages has been reached.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BlockedSubscriptionOnUnackedMsgs;

    /**
     * @var integer The maximum number of unacknowledged messages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxUnackedMsgNum;

    /**
     * @param string $TopicName Topic name.
     * @param string $EnvironmentId Environment (namespace) name.
     * @param string $ConnectedSince The time when the consumer started connecting.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ConsumerAddr Consumer address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumerCount The number of consumers.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumerName Consumer name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MsgBacklog The number of heaped messages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MsgRateExpired Percentage of messages under this subscription that were discarded but not sent after TTL.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MsgRateOut The total number of messages delivered by the consumer per second.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MsgThroughputOut The size (in bytes) of messages consumed by the consumer per second.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubscriptionName Subscription name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ConsumerSets Set of consumers.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsOnline Whether the consumer is online.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ConsumersScheduleSets Set of consumption progress information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Last modified.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubType Subscription type. Valid values: `Exclusive`, `Shared`, `Failover`, and `Key_Shared`. An empty string or `NULL`: Unknown.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $BlockedSubscriptionOnUnackedMsgs Whether messages are blocked as the limit of unacknowledged messages has been reached.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxUnackedMsgNum The maximum number of unacknowledged messages.
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ConnectedSince",$param) and $param["ConnectedSince"] !== null) {
            $this->ConnectedSince = $param["ConnectedSince"];
        }

        if (array_key_exists("ConsumerAddr",$param) and $param["ConsumerAddr"] !== null) {
            $this->ConsumerAddr = $param["ConsumerAddr"];
        }

        if (array_key_exists("ConsumerCount",$param) and $param["ConsumerCount"] !== null) {
            $this->ConsumerCount = $param["ConsumerCount"];
        }

        if (array_key_exists("ConsumerName",$param) and $param["ConsumerName"] !== null) {
            $this->ConsumerName = $param["ConsumerName"];
        }

        if (array_key_exists("MsgBacklog",$param) and $param["MsgBacklog"] !== null) {
            $this->MsgBacklog = $param["MsgBacklog"];
        }

        if (array_key_exists("MsgRateExpired",$param) and $param["MsgRateExpired"] !== null) {
            $this->MsgRateExpired = $param["MsgRateExpired"];
        }

        if (array_key_exists("MsgRateOut",$param) and $param["MsgRateOut"] !== null) {
            $this->MsgRateOut = $param["MsgRateOut"];
        }

        if (array_key_exists("MsgThroughputOut",$param) and $param["MsgThroughputOut"] !== null) {
            $this->MsgThroughputOut = $param["MsgThroughputOut"];
        }

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("ConsumerSets",$param) and $param["ConsumerSets"] !== null) {
            $this->ConsumerSets = [];
            foreach ($param["ConsumerSets"] as $key => $value){
                $obj = new Consumer();
                $obj->deserialize($value);
                array_push($this->ConsumerSets, $obj);
            }
        }

        if (array_key_exists("IsOnline",$param) and $param["IsOnline"] !== null) {
            $this->IsOnline = $param["IsOnline"];
        }

        if (array_key_exists("ConsumersScheduleSets",$param) and $param["ConsumersScheduleSets"] !== null) {
            $this->ConsumersScheduleSets = [];
            foreach ($param["ConsumersScheduleSets"] as $key => $value){
                $obj = new ConsumersSchedule();
                $obj->deserialize($value);
                array_push($this->ConsumersScheduleSets, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("BlockedSubscriptionOnUnackedMsgs",$param) and $param["BlockedSubscriptionOnUnackedMsgs"] !== null) {
            $this->BlockedSubscriptionOnUnackedMsgs = $param["BlockedSubscriptionOnUnackedMsgs"];
        }

        if (array_key_exists("MaxUnackedMsgNum",$param) and $param["MaxUnackedMsgNum"] !== null) {
            $this->MaxUnackedMsgNum = $param["MaxUnackedMsgNum"];
        }
    }
}
