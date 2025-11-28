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
 * RabbitMQ queue list member information.
 *
 * @method string getQueueName() Obtain Queue name
 * @method void setQueueName(string $QueueName) Set Queue name
 * @method string getRemark() Obtain Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method RabbitMQQueueListConsumerDetailInfo getConsumerDetail() Obtain Consumer information.
 * @method void setConsumerDetail(RabbitMQQueueListConsumerDetailInfo $ConsumerDetail) Set Consumer information.
 * @method string getQueueType() Obtain Queue type. Valid values: "classic" and "quorum".
 * @method void setQueueType(string $QueueType) Set Queue type. Valid values: "classic" and "quorum".
 * @method integer getMessageHeapCount() Obtain Number of retained messages

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMessageHeapCount(integer $MessageHeapCount) Set Number of retained messages

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method float getMessageRateIn() Obtain Message production rate per second.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMessageRateIn(float $MessageRateIn) Set Message production rate per second.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method float getMessageRateOut() Obtain Message consumption rate per second.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMessageRateOut(float $MessageRateOut) Set Message consumption rate per second.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getModifyTime() Obtain Modification time.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
 * @method boolean getDurable() Obtain Whether the queue is durable. true: durable; false: non-durable.
 * @method void setDurable(boolean $Durable) Set Whether the queue is durable. true: durable; false: non-durable.
 * @method boolean getAutoDelete() Obtain Whether automatic deletion is set for the queue. true: automatic deletion set; false: automatic deletion not set.
 * @method void setAutoDelete(boolean $AutoDelete) Set Whether automatic deletion is set for the queue. true: automatic deletion set; false: automatic deletion not set.
 * @method string getInstanceId() Obtain Instance ID of the queue.
 * @method void setInstanceId(string $InstanceId) Set Instance ID of the queue.
 * @method string getVirtualHost() Obtain Vhost name of the queue.
 * @method void setVirtualHost(string $VirtualHost) Set Vhost name of the queue.
 * @method string getNode() Obtain Primary node name of the queue.
 * @method void setNode(string $Node) Set Primary node name of the queue.
 * @method string getPolicy() Obtain Indicates the name of the effective policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPolicy(string $Policy) Set Indicates the name of the effective policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getArguments() Obtain Extended parameters of the key-value object type.
 * @method void setArguments(string $Arguments) Set Extended parameters of the key-value object type.
 * @method boolean getExclusive() Obtain Whether the queue is exclusive.
 * @method void setExclusive(boolean $Exclusive) Set Whether the queue is exclusive.
 * @method integer getCreateTs() Obtain Creation time timestamp.
 * @method void setCreateTs(integer $CreateTs) Set Creation time timestamp.
 * @method integer getModifyTs() Obtain Modification time timestamp.
 * @method void setModifyTs(integer $ModifyTs) Set Modification time timestamp.
 */
class RabbitMQQueueListInfo extends AbstractModel
{
    /**
     * @var string Queue name
     */
    public $QueueName;

    /**
     * @var string Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var RabbitMQQueueListConsumerDetailInfo Consumer information.
     */
    public $ConsumerDetail;

    /**
     * @var string Queue type. Valid values: "classic" and "quorum".
     */
    public $QueueType;

    /**
     * @var integer Number of retained messages

Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MessageHeapCount;

    /**
     * @var float Message production rate per second.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MessageRateIn;

    /**
     * @var float Message consumption rate per second.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MessageRateOut;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Modification time.
     */
    public $ModifyTime;

    /**
     * @var boolean Whether the queue is durable. true: durable; false: non-durable.
     */
    public $Durable;

    /**
     * @var boolean Whether automatic deletion is set for the queue. true: automatic deletion set; false: automatic deletion not set.
     */
    public $AutoDelete;

    /**
     * @var string Instance ID of the queue.
     */
    public $InstanceId;

    /**
     * @var string Vhost name of the queue.
     */
    public $VirtualHost;

    /**
     * @var string Primary node name of the queue.
     */
    public $Node;

    /**
     * @var string Indicates the name of the effective policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Policy;

    /**
     * @var string Extended parameters of the key-value object type.
     */
    public $Arguments;

    /**
     * @var boolean Whether the queue is exclusive.
     */
    public $Exclusive;

    /**
     * @var integer Creation time timestamp.
     */
    public $CreateTs;

    /**
     * @var integer Modification time timestamp.
     */
    public $ModifyTs;

    /**
     * @param string $QueueName Queue name
     * @param string $Remark Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param RabbitMQQueueListConsumerDetailInfo $ConsumerDetail Consumer information.
     * @param string $QueueType Queue type. Valid values: "classic" and "quorum".
     * @param integer $MessageHeapCount Number of retained messages

Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param float $MessageRateIn Message production rate per second.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param float $MessageRateOut Message consumption rate per second.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
     * @param string $ModifyTime Modification time.
     * @param boolean $Durable Whether the queue is durable. true: durable; false: non-durable.
     * @param boolean $AutoDelete Whether automatic deletion is set for the queue. true: automatic deletion set; false: automatic deletion not set.
     * @param string $InstanceId Instance ID of the queue.
     * @param string $VirtualHost Vhost name of the queue.
     * @param string $Node Primary node name of the queue.
     * @param string $Policy Indicates the name of the effective policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Arguments Extended parameters of the key-value object type.
     * @param boolean $Exclusive Whether the queue is exclusive.
     * @param integer $CreateTs Creation time timestamp.
     * @param integer $ModifyTs Modification time timestamp.
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsumerDetail",$param) and $param["ConsumerDetail"] !== null) {
            $this->ConsumerDetail = new RabbitMQQueueListConsumerDetailInfo();
            $this->ConsumerDetail->deserialize($param["ConsumerDetail"]);
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }

        if (array_key_exists("MessageHeapCount",$param) and $param["MessageHeapCount"] !== null) {
            $this->MessageHeapCount = $param["MessageHeapCount"];
        }

        if (array_key_exists("MessageRateIn",$param) and $param["MessageRateIn"] !== null) {
            $this->MessageRateIn = $param["MessageRateIn"];
        }

        if (array_key_exists("MessageRateOut",$param) and $param["MessageRateOut"] !== null) {
            $this->MessageRateOut = $param["MessageRateOut"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Durable",$param) and $param["Durable"] !== null) {
            $this->Durable = $param["Durable"];
        }

        if (array_key_exists("AutoDelete",$param) and $param["AutoDelete"] !== null) {
            $this->AutoDelete = $param["AutoDelete"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = $param["Node"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = $param["Arguments"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("CreateTs",$param) and $param["CreateTs"] !== null) {
            $this->CreateTs = $param["CreateTs"];
        }

        if (array_key_exists("ModifyTs",$param) and $param["ModifyTs"] !== null) {
            $this->ModifyTs = $param["ModifyTs"];
        }
    }
}
