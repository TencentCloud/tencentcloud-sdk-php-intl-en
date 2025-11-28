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
 * ModifyTopic request structure.
 *
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
 * @method string getTopicName() Obtain Topic name.
 * @method void setTopicName(string $TopicName) Set Topic name.
 * @method integer getPartitions() Obtain Specifies the number of partitions, which must be greater than or equal to the original partition count. if you want to maintain the original number of partitions, please enter the original number. changing the number of partitions is only effective for non-global sequential messages and cannot exceed 32 partitions.
 * @method void setPartitions(integer $Partitions) Set Specifies the number of partitions, which must be greater than or equal to the original partition count. if you want to maintain the original number of partitions, please enter the original number. changing the number of partitions is only effective for non-global sequential messages and cannot exceed 32 partitions.
 * @method string getClusterId() Obtain Pulsar cluster ID
 * @method void setClusterId(string $ClusterId) Set Pulsar cluster ID
 * @method string getRemark() Obtain Remarks (up to 128 characters).
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters).
 * @method integer getMsgTTL() Obtain Unconsumed message expiration time. measurement unit: seconds. value range: 60 seconds to 15 days.

 * @method void setMsgTTL(integer $MsgTTL) Set Unconsumed message expiration time. measurement unit: seconds. value range: 60 seconds to 15 days.

 * @method string getUnackPolicy() Obtain Default if not passed is native policy. DefaultPolicy means when the subscription reaches the maximum unacknowledged messages of 5000, the server will stop pushing messages to all consumers under the current subscription. DynamicPolicy refers to dynamically adjusting the maximum unacknowledged messages under the subscription, with the specific quota being the maximum between 5000 and the number of consumers multiplied by 20. the default maximum unacknowledged message count per consumer is 20. exceeding this limit only affects that consumer and does not affect other consumers.
 * @method void setUnackPolicy(string $UnackPolicy) Set Default if not passed is native policy. DefaultPolicy means when the subscription reaches the maximum unacknowledged messages of 5000, the server will stop pushing messages to all consumers under the current subscription. DynamicPolicy refers to dynamically adjusting the maximum unacknowledged messages under the subscription, with the specific quota being the maximum between 5000 and the number of consumers multiplied by 20. the default maximum unacknowledged message count per consumer is 20. exceeding this limit only affects that consumer and does not affect other consumers.
 * @method boolean getIsolateConsumerEnable() Obtain Whether exception consumer isolation is enabled.
 * @method void setIsolateConsumerEnable(boolean $IsolateConsumerEnable) Set Whether exception consumer isolation is enabled.
 * @method integer getAckTimeOut() Obtain Consumer Ack timeout period in seconds. value range: 60-(3600*24).
 * @method void setAckTimeOut(integer $AckTimeOut) Set Consumer Ack timeout period in seconds. value range: 60-(3600*24).
 */
class ModifyTopicRequest extends AbstractModel
{
    /**
     * @var string Environment (namespace) name.
     */
    public $EnvironmentId;

    /**
     * @var string Topic name.
     */
    public $TopicName;

    /**
     * @var integer Specifies the number of partitions, which must be greater than or equal to the original partition count. if you want to maintain the original number of partitions, please enter the original number. changing the number of partitions is only effective for non-global sequential messages and cannot exceed 32 partitions.
     */
    public $Partitions;

    /**
     * @var string Pulsar cluster ID
     */
    public $ClusterId;

    /**
     * @var string Remarks (up to 128 characters).
     */
    public $Remark;

    /**
     * @var integer Unconsumed message expiration time. measurement unit: seconds. value range: 60 seconds to 15 days.

     */
    public $MsgTTL;

    /**
     * @var string Default if not passed is native policy. DefaultPolicy means when the subscription reaches the maximum unacknowledged messages of 5000, the server will stop pushing messages to all consumers under the current subscription. DynamicPolicy refers to dynamically adjusting the maximum unacknowledged messages under the subscription, with the specific quota being the maximum between 5000 and the number of consumers multiplied by 20. the default maximum unacknowledged message count per consumer is 20. exceeding this limit only affects that consumer and does not affect other consumers.
     */
    public $UnackPolicy;

    /**
     * @var boolean Whether exception consumer isolation is enabled.
     */
    public $IsolateConsumerEnable;

    /**
     * @var integer Consumer Ack timeout period in seconds. value range: 60-(3600*24).
     */
    public $AckTimeOut;

    /**
     * @param string $EnvironmentId Environment (namespace) name.
     * @param string $TopicName Topic name.
     * @param integer $Partitions Specifies the number of partitions, which must be greater than or equal to the original partition count. if you want to maintain the original number of partitions, please enter the original number. changing the number of partitions is only effective for non-global sequential messages and cannot exceed 32 partitions.
     * @param string $ClusterId Pulsar cluster ID
     * @param string $Remark Remarks (up to 128 characters).
     * @param integer $MsgTTL Unconsumed message expiration time. measurement unit: seconds. value range: 60 seconds to 15 days.

     * @param string $UnackPolicy Default if not passed is native policy. DefaultPolicy means when the subscription reaches the maximum unacknowledged messages of 5000, the server will stop pushing messages to all consumers under the current subscription. DynamicPolicy refers to dynamically adjusting the maximum unacknowledged messages under the subscription, with the specific quota being the maximum between 5000 and the number of consumers multiplied by 20. the default maximum unacknowledged message count per consumer is 20. exceeding this limit only affects that consumer and does not affect other consumers.
     * @param boolean $IsolateConsumerEnable Whether exception consumer isolation is enabled.
     * @param integer $AckTimeOut Consumer Ack timeout period in seconds. value range: 60-(3600*24).
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("UnackPolicy",$param) and $param["UnackPolicy"] !== null) {
            $this->UnackPolicy = $param["UnackPolicy"];
        }

        if (array_key_exists("IsolateConsumerEnable",$param) and $param["IsolateConsumerEnable"] !== null) {
            $this->IsolateConsumerEnable = $param["IsolateConsumerEnable"];
        }

        if (array_key_exists("AckTimeOut",$param) and $param["AckTimeOut"] !== null) {
            $this->AckTimeOut = $param["AckTimeOut"];
        }
    }
}
