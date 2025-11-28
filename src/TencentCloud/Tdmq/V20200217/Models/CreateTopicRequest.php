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
 * CreateTopic request structure.
 *
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
 * @method string getTopicName() Obtain Topic name, which can contain up to 64 letters, digits, hyphens, and underscores.
 * @method void setTopicName(string $TopicName) Set Topic name, which can contain up to 64 letters, digits, hyphens, and underscores.
 * @method integer getPartitions() Obtain The input parameter is 1, which means creating a non-partitioned topic with no partition. if the input parameter is greater than 1, it indicates the number of partitions for a partitioned topic, and the maximum cannot exceed 32.
 * @method void setPartitions(integer $Partitions) Set The input parameter is 1, which means creating a non-partitioned topic with no partition. if the input parameter is greater than 1, it indicates the number of partitions for a partitioned topic, and the maximum cannot exceed 32.
 * @method string getClusterId() Obtain Pulsar cluster ID
 * @method void setClusterId(string $ClusterId) Set Pulsar cluster ID
 * @method string getRemark() Obtain Remarks (up to 128 characters).
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters).
 * @method integer getTopicType() Obtain This input parameter will be disused soon. You can use `PulsarTopicType` instead.
0: General message;
1: Globally sequential message;
2: Partitionally sequential message;
3: Retry letter topic;
4: Dead letter topic.
 * @method void setTopicType(integer $TopicType) Set This input parameter will be disused soon. You can use `PulsarTopicType` instead.
0: General message;
1: Globally sequential message;
2: Partitionally sequential message;
3: Retry letter topic;
4: Dead letter topic.
 * @method integer getPulsarTopicType() Obtain Pulsar topic type.
`0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
 * @method void setPulsarTopicType(integer $PulsarTopicType) Set Pulsar topic type.
`0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
 * @method integer getMsgTTL() Obtain Retention period for unconsumed messages in seconds. value ranges from 60 seconds to 15 days.
 * @method void setMsgTTL(integer $MsgTTL) Set Retention period for unconsumed messages in seconds. value ranges from 60 seconds to 15 days.
 * @method string getUnackPolicy() Obtain Default if not passed is native policy. DefaultPolicy means when the subscription reaches the maximum unacknowledged messages of 5000, the server will stop pushing messages to all consumers under the current subscription. DynamicPolicy means dynamically adjust the maximum unacknowledged messages of the subscription, with the specific quota being the maximum between 5000 and the number of consumers multiplied by 20. the default maximum unacknowledged message count per consumer is 20. exceeding this limit only affects that consumer and does not affect other consumers.
 * @method void setUnackPolicy(string $UnackPolicy) Set Default if not passed is native policy. DefaultPolicy means when the subscription reaches the maximum unacknowledged messages of 5000, the server will stop pushing messages to all consumers under the current subscription. DynamicPolicy means dynamically adjust the maximum unacknowledged messages of the subscription, with the specific quota being the maximum between 5000 and the number of consumers multiplied by 20. the default maximum unacknowledged message count per consumer is 20. exceeding this limit only affects that consumer and does not affect other consumers.
 * @method boolean getIsolateConsumerEnable() Obtain Whether exception consumer isolation is enabled.
 * @method void setIsolateConsumerEnable(boolean $IsolateConsumerEnable) Set Whether exception consumer isolation is enabled.
 * @method integer getAckTimeOut() Obtain Specifies the consumer Ack timeout period in seconds. value range: 60-(3600*24).
 * @method void setAckTimeOut(integer $AckTimeOut) Set Specifies the consumer Ack timeout period in seconds. value range: 60-(3600*24).
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string Environment (namespace) name.
     */
    public $EnvironmentId;

    /**
     * @var string Topic name, which can contain up to 64 letters, digits, hyphens, and underscores.
     */
    public $TopicName;

    /**
     * @var integer The input parameter is 1, which means creating a non-partitioned topic with no partition. if the input parameter is greater than 1, it indicates the number of partitions for a partitioned topic, and the maximum cannot exceed 32.
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
     * @var integer This input parameter will be disused soon. You can use `PulsarTopicType` instead.
0: General message;
1: Globally sequential message;
2: Partitionally sequential message;
3: Retry letter topic;
4: Dead letter topic.
     */
    public $TopicType;

    /**
     * @var integer Pulsar topic type.
`0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
     */
    public $PulsarTopicType;

    /**
     * @var integer Retention period for unconsumed messages in seconds. value ranges from 60 seconds to 15 days.
     */
    public $MsgTTL;

    /**
     * @var string Default if not passed is native policy. DefaultPolicy means when the subscription reaches the maximum unacknowledged messages of 5000, the server will stop pushing messages to all consumers under the current subscription. DynamicPolicy means dynamically adjust the maximum unacknowledged messages of the subscription, with the specific quota being the maximum between 5000 and the number of consumers multiplied by 20. the default maximum unacknowledged message count per consumer is 20. exceeding this limit only affects that consumer and does not affect other consumers.
     */
    public $UnackPolicy;

    /**
     * @var boolean Whether exception consumer isolation is enabled.
     */
    public $IsolateConsumerEnable;

    /**
     * @var integer Specifies the consumer Ack timeout period in seconds. value range: 60-(3600*24).
     */
    public $AckTimeOut;

    /**
     * @param string $EnvironmentId Environment (namespace) name.
     * @param string $TopicName Topic name, which can contain up to 64 letters, digits, hyphens, and underscores.
     * @param integer $Partitions The input parameter is 1, which means creating a non-partitioned topic with no partition. if the input parameter is greater than 1, it indicates the number of partitions for a partitioned topic, and the maximum cannot exceed 32.
     * @param string $ClusterId Pulsar cluster ID
     * @param string $Remark Remarks (up to 128 characters).
     * @param integer $TopicType This input parameter will be disused soon. You can use `PulsarTopicType` instead.
0: General message;
1: Globally sequential message;
2: Partitionally sequential message;
3: Retry letter topic;
4: Dead letter topic.
     * @param integer $PulsarTopicType Pulsar topic type.
`0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
     * @param integer $MsgTTL Retention period for unconsumed messages in seconds. value ranges from 60 seconds to 15 days.
     * @param string $UnackPolicy Default if not passed is native policy. DefaultPolicy means when the subscription reaches the maximum unacknowledged messages of 5000, the server will stop pushing messages to all consumers under the current subscription. DynamicPolicy means dynamically adjust the maximum unacknowledged messages of the subscription, with the specific quota being the maximum between 5000 and the number of consumers multiplied by 20. the default maximum unacknowledged message count per consumer is 20. exceeding this limit only affects that consumer and does not affect other consumers.
     * @param boolean $IsolateConsumerEnable Whether exception consumer isolation is enabled.
     * @param integer $AckTimeOut Specifies the consumer Ack timeout period in seconds. value range: 60-(3600*24).
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

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("PulsarTopicType",$param) and $param["PulsarTopicType"] !== null) {
            $this->PulsarTopicType = $param["PulsarTopicType"];
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
