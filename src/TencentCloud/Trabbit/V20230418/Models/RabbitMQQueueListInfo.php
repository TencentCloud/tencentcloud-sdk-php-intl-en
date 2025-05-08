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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ queue list member information.
 *
 * @method string getQueueName() Obtain Queue name.
 * @method void setQueueName(string $QueueName) Set Queue name.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method RabbitMQQueueListConsumerDetailInfo getConsumerDetail() Obtain Consumer information.
 * @method void setConsumerDetail(RabbitMQQueueListConsumerDetailInfo $ConsumerDetail) Set Consumer information.
 * @method string getQueueType() Obtain Specifies the queue type. the valid values are "classic" and "quorum".
 * @method void setQueueType(string $QueueType) Set Specifies the queue type. the valid values are "classic" and "quorum".
 * @method integer getMessageHeapCount() Obtain Number of message backlogs.
 * @method void setMessageHeapCount(integer $MessageHeapCount) Set Number of message backlogs.
 * @method float getMessageRateIn() Obtain Message production rate per second.
 * @method void setMessageRateIn(float $MessageRateIn) Set Message production rate per second.
 * @method float getMessageRateOut() Obtain Message consumption rate per second.
 * @method void setMessageRateOut(float $MessageRateOut) Set Message consumption rate per second.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method boolean getDurable() Obtain Specifies whether the queue is persistent. true indicates persistent, and false indicates non-persistent.
 * @method void setDurable(boolean $Durable) Set Specifies whether the queue is persistent. true indicates persistent, and false indicates non-persistent.
 * @method boolean getAutoDelete() Obtain Specifies whether the queue is an auto-delete queue. true indicates auto-delete, and false indicates non-auto-delete.
 * @method void setAutoDelete(boolean $AutoDelete) Set Specifies whether the queue is an auto-delete queue. true indicates auto-delete, and false indicates non-auto-delete.
 * @method string getInstanceId() Obtain instanceId to which the queue belongs.
 * @method void setInstanceId(string $InstanceId) Set instanceId to which the queue belongs.
 * @method string getVirtualHost() Obtain Name of the virtual host to which the queue belongs.
 * @method void setVirtualHost(string $VirtualHost) Set Name of the virtual host to which the queue belongs.
 * @method string getNode() Obtain Specifies the name of the primary node where the queue is located.
 * @method void setNode(string $Node) Set Specifies the name of the primary node where the queue is located.
 * @method string getPolicy() Obtain The name of the effective policy.
 * @method void setPolicy(string $Policy) Set The name of the effective policy.
 * @method string getArguments() Obtain Additional parameters key-value objects.
 * @method void setArguments(string $Arguments) Set Additional parameters key-value objects.
 * @method boolean getExclusive() Obtain Whether it is an exclusive queue.
 * @method void setExclusive(boolean $Exclusive) Set Whether it is an exclusive queue.
 */
class RabbitMQQueueListInfo extends AbstractModel
{
    /**
     * @var string Queue name.
     */
    public $QueueName;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var RabbitMQQueueListConsumerDetailInfo Consumer information.
     */
    public $ConsumerDetail;

    /**
     * @var string Specifies the queue type. the valid values are "classic" and "quorum".
     */
    public $QueueType;

    /**
     * @var integer Number of message backlogs.
     */
    public $MessageHeapCount;

    /**
     * @var float Message production rate per second.
     */
    public $MessageRateIn;

    /**
     * @var float Message consumption rate per second.
     */
    public $MessageRateOut;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @var boolean Specifies whether the queue is persistent. true indicates persistent, and false indicates non-persistent.
     */
    public $Durable;

    /**
     * @var boolean Specifies whether the queue is an auto-delete queue. true indicates auto-delete, and false indicates non-auto-delete.
     */
    public $AutoDelete;

    /**
     * @var string instanceId to which the queue belongs.
     */
    public $InstanceId;

    /**
     * @var string Name of the virtual host to which the queue belongs.
     */
    public $VirtualHost;

    /**
     * @var string Specifies the name of the primary node where the queue is located.
     */
    public $Node;

    /**
     * @var string The name of the effective policy.
     */
    public $Policy;

    /**
     * @var string Additional parameters key-value objects.
     */
    public $Arguments;

    /**
     * @var boolean Whether it is an exclusive queue.
     */
    public $Exclusive;

    /**
     * @param string $QueueName Queue name.
     * @param string $Remark Remarks.
     * @param RabbitMQQueueListConsumerDetailInfo $ConsumerDetail Consumer information.
     * @param string $QueueType Specifies the queue type. the valid values are "classic" and "quorum".
     * @param integer $MessageHeapCount Number of message backlogs.
     * @param float $MessageRateIn Message production rate per second.
     * @param float $MessageRateOut Message consumption rate per second.
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
     * @param boolean $Durable Specifies whether the queue is persistent. true indicates persistent, and false indicates non-persistent.
     * @param boolean $AutoDelete Specifies whether the queue is an auto-delete queue. true indicates auto-delete, and false indicates non-auto-delete.
     * @param string $InstanceId instanceId to which the queue belongs.
     * @param string $VirtualHost Name of the virtual host to which the queue belongs.
     * @param string $Node Specifies the name of the primary node where the queue is located.
     * @param string $Policy The name of the effective policy.
     * @param string $Arguments Additional parameters key-value objects.
     * @param boolean $Exclusive Whether it is an exclusive queue.
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
    }
}
