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
 * CreateRabbitMQServerlessQueue request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getVirtualHost() Obtain VHost parameter.
 * @method void setVirtualHost(string $VirtualHost) Set VHost parameter.
 * @method string getQueueName() Obtain Queue name.
 * @method void setQueueName(string $QueueName) Set Queue name.
 * @method string getQueueType() Obtain Supports only classic.
 * @method void setQueueType(string $QueueType) Set Supports only classic.
 * @method boolean getDurable() Obtain Durable flag. specifies that for the classic type, it must be passed in. for the quorum type, there is no need to pass it in and it is fixed as true.
 * @method void setDurable(boolean $Durable) Set Durable flag. specifies that for the classic type, it must be passed in. for the quorum type, there is no need to pass it in and it is fixed as true.
 * @method boolean getAutoDelete() Obtain Automatic cleanup. the classic type must be passed. the quorum type does not need to be passed and is fixed as false.
 * @method void setAutoDelete(boolean $AutoDelete) Set Automatic cleanup. the classic type must be passed. the quorum type does not need to be passed and is fixed as false.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getMessageTTL() Obtain The MessageTTL parameter specifies settings dedicated to the classic type.
 * @method void setMessageTTL(integer $MessageTTL) Set The MessageTTL parameter specifies settings dedicated to the classic type.
 * @method integer getAutoExpire() Obtain The AutoExpire parameter, in milliseconds, indicates that the queue will be deleted if it is not used within a specified time.
 * @method void setAutoExpire(integer $AutoExpire) Set The AutoExpire parameter, in milliseconds, indicates that the queue will be deleted if it is not used within a specified time.
 * @method integer getMaxLength() Obtain MaxLength parameter. specifies the maximum number of entries the queue can hold. if the limit is exceeded, it will be handled according to the overview behavior.
 * @method void setMaxLength(integer $MaxLength) Set MaxLength parameter. specifies the maximum number of entries the queue can hold. if the limit is exceeded, it will be handled according to the overview behavior.
 * @method integer getMaxLengthBytes() Obtain The MaxLengthBytes parameter specifies the maximum length in bytes. if the value exceeds the limit, it will be handled according to the overview behavior.
 * @method void setMaxLengthBytes(integer $MaxLengthBytes) Set The MaxLengthBytes parameter specifies the maximum length in bytes. if the value exceeds the limit, it will be handled according to the overview behavior.
 * @method integer getDeliveryLimit() Obtain DeliveryLimit parameter. specifies the parameter dedicated to the quorum type.
 * @method void setDeliveryLimit(integer $DeliveryLimit) Set DeliveryLimit parameter. specifies the parameter dedicated to the quorum type.
 * @method string getOverflowBehaviour() Obtain OverflowBehaviour parameter specifies a value of drop-head, reject-publish, or reject-publish-dlx.
 * @method void setOverflowBehaviour(string $OverflowBehaviour) Set OverflowBehaviour parameter specifies a value of drop-head, reject-publish, or reject-publish-dlx.
 * @method string getDeadLetterExchange() Obtain The DeadLetterExchange parameter specifies that expired or rejected messages can be routed to a designated dead letter exchange.
 * @method void setDeadLetterExchange(string $DeadLetterExchange) Set The DeadLetterExchange parameter specifies that expired or rejected messages can be routed to a designated dead letter exchange.
 * @method string getDeadLetterRoutingKey() Obtain The DeadLetterRoutingKey parameter specifies that it can only contain letters, digits, ".", "-", "@", and "_".
 * @method void setDeadLetterRoutingKey(string $DeadLetterRoutingKey) Set The DeadLetterRoutingKey parameter specifies that it can only contain letters, digits, ".", "-", "@", and "_".
 * @method boolean getSingleActiveConsumer() Obtain The SingleActiveConsumer parameter. if enabled, ensure that there is only one consumer consuming from the queue every time.
 * @method void setSingleActiveConsumer(boolean $SingleActiveConsumer) Set The SingleActiveConsumer parameter. if enabled, ensure that there is only one consumer consuming from the queue every time.
 * @method integer getMaximumPriority() Obtain MaximumPriority parameter. specifies that it is dedicated for the classic type.
 * @method void setMaximumPriority(integer $MaximumPriority) Set MaximumPriority parameter. specifies that it is dedicated for the classic type.
 * @method boolean getLazyMode() Obtain LazyMode parameter. specifies that it is dedicated for the classic type.
 * @method void setLazyMode(boolean $LazyMode) Set LazyMode parameter. specifies that it is dedicated for the classic type.
 * @method string getMasterLocator() Obtain The MasterLocator parameter, dedicated to the classic type, specifies a value of min-masters, client-local, or random.
 * @method void setMasterLocator(string $MasterLocator) Set The MasterLocator parameter, dedicated to the classic type, specifies a value of min-masters, client-local, or random.
 * @method integer getMaxInMemoryLength() Obtain MaxInMemoryLength parameter, dedicated for quorum type. specifies the maximum number of messages in memory for quorum queues.
 * @method void setMaxInMemoryLength(integer $MaxInMemoryLength) Set MaxInMemoryLength parameter, dedicated for quorum type. specifies the maximum number of messages in memory for quorum queues.
 * @method integer getMaxInMemoryBytes() Obtain The MaxInMemoryBytes parameter is dedicated to the quorum type. it specifies the maximum total message size in memory for quorum queues.
 * @method void setMaxInMemoryBytes(integer $MaxInMemoryBytes) Set The MaxInMemoryBytes parameter is dedicated to the quorum type. it specifies the maximum total message size in memory for quorum queues.
 * @method string getNode() Obtain Node parameter. optional. specifies the node where the specified creation queue is located.
 * @method void setNode(string $Node) Set Node parameter. optional. specifies the node where the specified creation queue is located.
 * @method string getDeadLetterStrategy() Obtain Consistency policy for dead-letter in arbitrating queues. specifies valid values: at-most-once, at-least-once. at-most-once is selected by default.
 * @method void setDeadLetterStrategy(string $DeadLetterStrategy) Set Consistency policy for dead-letter in arbitrating queues. specifies valid values: at-most-once, at-least-once. at-most-once is selected by default.
 * @method string getQueueLeaderLocator() Obtain Specifies the leader election strategy for the arbitration queue. valid values are client-local and balanced. the default value is client-local.
 * @method void setQueueLeaderLocator(string $QueueLeaderLocator) Set Specifies the leader election strategy for the arbitration queue. valid values are client-local and balanced. the default value is client-local.
 * @method integer getQuorumInitialGroupSize() Obtain Specifies the initial replica group size of the arbitration queue. the default value is 3.
 * @method void setQuorumInitialGroupSize(integer $QuorumInitialGroupSize) Set Specifies the initial replica group size of the arbitration queue. the default value is 3.
 */
class CreateRabbitMQServerlessQueueRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string VHost parameter.
     */
    public $VirtualHost;

    /**
     * @var string Queue name.
     */
    public $QueueName;

    /**
     * @var string Supports only classic.
     */
    public $QueueType;

    /**
     * @var boolean Durable flag. specifies that for the classic type, it must be passed in. for the quorum type, there is no need to pass it in and it is fixed as true.
     */
    public $Durable;

    /**
     * @var boolean Automatic cleanup. the classic type must be passed. the quorum type does not need to be passed and is fixed as false.
     */
    public $AutoDelete;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer The MessageTTL parameter specifies settings dedicated to the classic type.
     */
    public $MessageTTL;

    /**
     * @var integer The AutoExpire parameter, in milliseconds, indicates that the queue will be deleted if it is not used within a specified time.
     */
    public $AutoExpire;

    /**
     * @var integer MaxLength parameter. specifies the maximum number of entries the queue can hold. if the limit is exceeded, it will be handled according to the overview behavior.
     */
    public $MaxLength;

    /**
     * @var integer The MaxLengthBytes parameter specifies the maximum length in bytes. if the value exceeds the limit, it will be handled according to the overview behavior.
     */
    public $MaxLengthBytes;

    /**
     * @var integer DeliveryLimit parameter. specifies the parameter dedicated to the quorum type.
     */
    public $DeliveryLimit;

    /**
     * @var string OverflowBehaviour parameter specifies a value of drop-head, reject-publish, or reject-publish-dlx.
     */
    public $OverflowBehaviour;

    /**
     * @var string The DeadLetterExchange parameter specifies that expired or rejected messages can be routed to a designated dead letter exchange.
     */
    public $DeadLetterExchange;

    /**
     * @var string The DeadLetterRoutingKey parameter specifies that it can only contain letters, digits, ".", "-", "@", and "_".
     */
    public $DeadLetterRoutingKey;

    /**
     * @var boolean The SingleActiveConsumer parameter. if enabled, ensure that there is only one consumer consuming from the queue every time.
     */
    public $SingleActiveConsumer;

    /**
     * @var integer MaximumPriority parameter. specifies that it is dedicated for the classic type.
     */
    public $MaximumPriority;

    /**
     * @var boolean LazyMode parameter. specifies that it is dedicated for the classic type.
     */
    public $LazyMode;

    /**
     * @var string The MasterLocator parameter, dedicated to the classic type, specifies a value of min-masters, client-local, or random.
     */
    public $MasterLocator;

    /**
     * @var integer MaxInMemoryLength parameter, dedicated for quorum type. specifies the maximum number of messages in memory for quorum queues.
     */
    public $MaxInMemoryLength;

    /**
     * @var integer The MaxInMemoryBytes parameter is dedicated to the quorum type. it specifies the maximum total message size in memory for quorum queues.
     */
    public $MaxInMemoryBytes;

    /**
     * @var string Node parameter. optional. specifies the node where the specified creation queue is located.
     */
    public $Node;

    /**
     * @var string Consistency policy for dead-letter in arbitrating queues. specifies valid values: at-most-once, at-least-once. at-most-once is selected by default.
     */
    public $DeadLetterStrategy;

    /**
     * @var string Specifies the leader election strategy for the arbitration queue. valid values are client-local and balanced. the default value is client-local.
     */
    public $QueueLeaderLocator;

    /**
     * @var integer Specifies the initial replica group size of the arbitration queue. the default value is 3.
     */
    public $QuorumInitialGroupSize;

    /**
     * @param string $InstanceId Instance ID
     * @param string $VirtualHost VHost parameter.
     * @param string $QueueName Queue name.
     * @param string $QueueType Supports only classic.
     * @param boolean $Durable Durable flag. specifies that for the classic type, it must be passed in. for the quorum type, there is no need to pass it in and it is fixed as true.
     * @param boolean $AutoDelete Automatic cleanup. the classic type must be passed. the quorum type does not need to be passed and is fixed as false.
     * @param string $Remark Remarks
     * @param integer $MessageTTL The MessageTTL parameter specifies settings dedicated to the classic type.
     * @param integer $AutoExpire The AutoExpire parameter, in milliseconds, indicates that the queue will be deleted if it is not used within a specified time.
     * @param integer $MaxLength MaxLength parameter. specifies the maximum number of entries the queue can hold. if the limit is exceeded, it will be handled according to the overview behavior.
     * @param integer $MaxLengthBytes The MaxLengthBytes parameter specifies the maximum length in bytes. if the value exceeds the limit, it will be handled according to the overview behavior.
     * @param integer $DeliveryLimit DeliveryLimit parameter. specifies the parameter dedicated to the quorum type.
     * @param string $OverflowBehaviour OverflowBehaviour parameter specifies a value of drop-head, reject-publish, or reject-publish-dlx.
     * @param string $DeadLetterExchange The DeadLetterExchange parameter specifies that expired or rejected messages can be routed to a designated dead letter exchange.
     * @param string $DeadLetterRoutingKey The DeadLetterRoutingKey parameter specifies that it can only contain letters, digits, ".", "-", "@", and "_".
     * @param boolean $SingleActiveConsumer The SingleActiveConsumer parameter. if enabled, ensure that there is only one consumer consuming from the queue every time.
     * @param integer $MaximumPriority MaximumPriority parameter. specifies that it is dedicated for the classic type.
     * @param boolean $LazyMode LazyMode parameter. specifies that it is dedicated for the classic type.
     * @param string $MasterLocator The MasterLocator parameter, dedicated to the classic type, specifies a value of min-masters, client-local, or random.
     * @param integer $MaxInMemoryLength MaxInMemoryLength parameter, dedicated for quorum type. specifies the maximum number of messages in memory for quorum queues.
     * @param integer $MaxInMemoryBytes The MaxInMemoryBytes parameter is dedicated to the quorum type. it specifies the maximum total message size in memory for quorum queues.
     * @param string $Node Node parameter. optional. specifies the node where the specified creation queue is located.
     * @param string $DeadLetterStrategy Consistency policy for dead-letter in arbitrating queues. specifies valid values: at-most-once, at-least-once. at-most-once is selected by default.
     * @param string $QueueLeaderLocator Specifies the leader election strategy for the arbitration queue. valid values are client-local and balanced. the default value is client-local.
     * @param integer $QuorumInitialGroupSize Specifies the initial replica group size of the arbitration queue. the default value is 3.
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }

        if (array_key_exists("Durable",$param) and $param["Durable"] !== null) {
            $this->Durable = $param["Durable"];
        }

        if (array_key_exists("AutoDelete",$param) and $param["AutoDelete"] !== null) {
            $this->AutoDelete = $param["AutoDelete"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MessageTTL",$param) and $param["MessageTTL"] !== null) {
            $this->MessageTTL = $param["MessageTTL"];
        }

        if (array_key_exists("AutoExpire",$param) and $param["AutoExpire"] !== null) {
            $this->AutoExpire = $param["AutoExpire"];
        }

        if (array_key_exists("MaxLength",$param) and $param["MaxLength"] !== null) {
            $this->MaxLength = $param["MaxLength"];
        }

        if (array_key_exists("MaxLengthBytes",$param) and $param["MaxLengthBytes"] !== null) {
            $this->MaxLengthBytes = $param["MaxLengthBytes"];
        }

        if (array_key_exists("DeliveryLimit",$param) and $param["DeliveryLimit"] !== null) {
            $this->DeliveryLimit = $param["DeliveryLimit"];
        }

        if (array_key_exists("OverflowBehaviour",$param) and $param["OverflowBehaviour"] !== null) {
            $this->OverflowBehaviour = $param["OverflowBehaviour"];
        }

        if (array_key_exists("DeadLetterExchange",$param) and $param["DeadLetterExchange"] !== null) {
            $this->DeadLetterExchange = $param["DeadLetterExchange"];
        }

        if (array_key_exists("DeadLetterRoutingKey",$param) and $param["DeadLetterRoutingKey"] !== null) {
            $this->DeadLetterRoutingKey = $param["DeadLetterRoutingKey"];
        }

        if (array_key_exists("SingleActiveConsumer",$param) and $param["SingleActiveConsumer"] !== null) {
            $this->SingleActiveConsumer = $param["SingleActiveConsumer"];
        }

        if (array_key_exists("MaximumPriority",$param) and $param["MaximumPriority"] !== null) {
            $this->MaximumPriority = $param["MaximumPriority"];
        }

        if (array_key_exists("LazyMode",$param) and $param["LazyMode"] !== null) {
            $this->LazyMode = $param["LazyMode"];
        }

        if (array_key_exists("MasterLocator",$param) and $param["MasterLocator"] !== null) {
            $this->MasterLocator = $param["MasterLocator"];
        }

        if (array_key_exists("MaxInMemoryLength",$param) and $param["MaxInMemoryLength"] !== null) {
            $this->MaxInMemoryLength = $param["MaxInMemoryLength"];
        }

        if (array_key_exists("MaxInMemoryBytes",$param) and $param["MaxInMemoryBytes"] !== null) {
            $this->MaxInMemoryBytes = $param["MaxInMemoryBytes"];
        }

        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = $param["Node"];
        }

        if (array_key_exists("DeadLetterStrategy",$param) and $param["DeadLetterStrategy"] !== null) {
            $this->DeadLetterStrategy = $param["DeadLetterStrategy"];
        }

        if (array_key_exists("QueueLeaderLocator",$param) and $param["QueueLeaderLocator"] !== null) {
            $this->QueueLeaderLocator = $param["QueueLeaderLocator"];
        }

        if (array_key_exists("QuorumInitialGroupSize",$param) and $param["QuorumInitialGroupSize"] !== null) {
            $this->QuorumInitialGroupSize = $param["QuorumInitialGroupSize"];
        }
    }
}
