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
 * DescribeMqMsgTrace request structure.
 *
 * @method string getProtocol() Obtain pulsar,rocketmq,rabbitmq,cmq
 * @method void setProtocol(string $Protocol) Set pulsar,rocketmq,rabbitmq,cmq
 * @method string getMsgId() Obtain Message ID
 * @method void setMsgId(string $MsgId) Set Message ID
 * @method string getClusterId() Obtain Cluster id. cmq is empty.
 * @method void setClusterId(string $ClusterId) Set Cluster id. cmq is empty.
 * @method string getEnvironmentId() Obtain Namespace. cmq is empty.
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace. cmq is empty.
 * @method string getTopicName() Obtain Topic. empty for cmq. group id when querying rocketmq dead letters.
 * @method void setTopicName(string $TopicName) Set Topic. empty for cmq. group id when querying rocketmq dead letters.
 * @method string getQueueName() Obtain cmq is required. fill in the blank for other protocols.
 * @method void setQueueName(string $QueueName) Set cmq is required. fill in the blank for other protocols.
 * @method string getGroupName() Obtain Consumer Group and Subscription
 * @method void setGroupName(string $GroupName) Set Consumer Group and Subscription
 * @method boolean getQueryDlqMsg() Obtain The value is true when querying dead letters, and only valid for RocketMQ.
 * @method void setQueryDlqMsg(boolean $QueryDlqMsg) Set The value is true when querying dead letters, and only valid for RocketMQ.
 * @method string getProduceTime() Obtain Message production time.
 * @method void setProduceTime(string $ProduceTime) Set Message production time.
 */
class DescribeMqMsgTraceRequest extends AbstractModel
{
    /**
     * @var string pulsar,rocketmq,rabbitmq,cmq
     */
    public $Protocol;

    /**
     * @var string Message ID
     */
    public $MsgId;

    /**
     * @var string Cluster id. cmq is empty.
     */
    public $ClusterId;

    /**
     * @var string Namespace. cmq is empty.
     */
    public $EnvironmentId;

    /**
     * @var string Topic. empty for cmq. group id when querying rocketmq dead letters.
     */
    public $TopicName;

    /**
     * @var string cmq is required. fill in the blank for other protocols.
     */
    public $QueueName;

    /**
     * @var string Consumer Group and Subscription
     */
    public $GroupName;

    /**
     * @var boolean The value is true when querying dead letters, and only valid for RocketMQ.
     */
    public $QueryDlqMsg;

    /**
     * @var string Message production time.
     */
    public $ProduceTime;

    /**
     * @param string $Protocol pulsar,rocketmq,rabbitmq,cmq
     * @param string $MsgId Message ID
     * @param string $ClusterId Cluster id. cmq is empty.
     * @param string $EnvironmentId Namespace. cmq is empty.
     * @param string $TopicName Topic. empty for cmq. group id when querying rocketmq dead letters.
     * @param string $QueueName cmq is required. fill in the blank for other protocols.
     * @param string $GroupName Consumer Group and Subscription
     * @param boolean $QueryDlqMsg The value is true when querying dead letters, and only valid for RocketMQ.
     * @param string $ProduceTime Message production time.
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("QueryDlqMsg",$param) and $param["QueryDlqMsg"] !== null) {
            $this->QueryDlqMsg = $param["QueryDlqMsg"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }
    }
}
