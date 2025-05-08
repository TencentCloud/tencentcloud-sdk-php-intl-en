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
 * DescribeRabbitMQServerlessQueueDetail response structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getVirtualHost() Obtain Vhost parameter.
 * @method void setVirtualHost(string $VirtualHost) Set Vhost parameter.
 * @method string getQueueName() Obtain Queue name.
 * @method void setQueueName(string $QueueName) Set Queue name.
 * @method string getQueueType() Obtain Specifies the queue type. the valid values are classic or quorum.
 * @method void setQueueType(string $QueueType) Set Specifies the queue type. the valid values are classic or quorum.
 * @method integer getConsumers() Obtain Number of online consumers.
 * @method void setConsumers(integer $Consumers) Set Number of online consumers.
 * @method boolean getDurable() Obtain Durable flag.
 * @method void setDurable(boolean $Durable) Set Durable flag.
 * @method boolean getAutoDelete() Obtain Automatic cleanup.
 * @method void setAutoDelete(boolean $AutoDelete) Set Automatic cleanup.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getMessageTTL() Obtain MessageTTL parameter, dedicated for classic type.
 * @method void setMessageTTL(integer $MessageTTL) Set MessageTTL parameter, dedicated for classic type.
 * @method integer getAutoExpire() Obtain AutoExpire parameter.
 * @method void setAutoExpire(integer $AutoExpire) Set AutoExpire parameter.
 * @method integer getMaxLength() Obtain MaxLength parameter.
 * @method void setMaxLength(integer $MaxLength) Set MaxLength parameter.
 * @method integer getMaxLengthBytes() Obtain MaxLengthBytes parameter.
 * @method void setMaxLengthBytes(integer $MaxLengthBytes) Set MaxLengthBytes parameter.
 * @method integer getDeliveryLimit() Obtain DeliveryLimit parameter. specifies the parameter dedicated to the quorum type.
 * @method void setDeliveryLimit(integer $DeliveryLimit) Set DeliveryLimit parameter. specifies the parameter dedicated to the quorum type.
 * @method string getOverflowBehaviour() Obtain OverflowBehaviour parameter specifies a value of drop-head, reject-publish, or reject-publish-dlx.
 * @method void setOverflowBehaviour(string $OverflowBehaviour) Set OverflowBehaviour parameter specifies a value of drop-head, reject-publish, or reject-publish-dlx.
 * @method string getDeadLetterExchange() Obtain DeadLetterExchange parameter.
 * @method void setDeadLetterExchange(string $DeadLetterExchange) Set DeadLetterExchange parameter.
 * @method string getDeadLetterRoutingKey() Obtain The DeadLetterRoutingKey parameter.
 * @method void setDeadLetterRoutingKey(string $DeadLetterRoutingKey) Set The DeadLetterRoutingKey parameter.
 * @method boolean getSingleActiveConsumer() Obtain SingleActiveConsumer parameter.
 * @method void setSingleActiveConsumer(boolean $SingleActiveConsumer) Set SingleActiveConsumer parameter.
 * @method integer getMaximumPriority() Obtain MaximumPriority parameter. specifies that it is dedicated for the classic type.
 * @method void setMaximumPriority(integer $MaximumPriority) Set MaximumPriority parameter. specifies that it is dedicated for the classic type.
 * @method boolean getLazyMode() Obtain LazyMode parameter, dedicated for classic type.
 * @method void setLazyMode(boolean $LazyMode) Set LazyMode parameter, dedicated for classic type.
 * @method string getMasterLocator() Obtain MasterLocator parameter, dedicated for classic type.
 * @method void setMasterLocator(string $MasterLocator) Set MasterLocator parameter, dedicated for classic type.
 * @method integer getMaxInMemoryLength() Obtain MaxInMemoryLength parameter, dedicated for quorum type.
 * @method void setMaxInMemoryLength(integer $MaxInMemoryLength) Set MaxInMemoryLength parameter, dedicated for quorum type.
 * @method integer getMaxInMemoryBytes() Obtain The MaxInMemoryBytes parameter is dedicated to the quorum type.
 * @method void setMaxInMemoryBytes(integer $MaxInMemoryBytes) Set The MaxInMemoryBytes parameter is dedicated to the quorum type.
 * @method integer getCreateTime() Obtain Create timestamp, in seconds.
 * @method void setCreateTime(integer $CreateTime) Set Create timestamp, in seconds.
 * @method string getNode() Obtain Node.
 * @method void setNode(string $Node) Set Node.
 * @method string getDeadLetterStrategy() Obtain Arbitration queue dead letter consistency policy.
 * @method void setDeadLetterStrategy(string $DeadLetterStrategy) Set Arbitration queue dead letter consistency policy.
 * @method string getQueueLeaderLocator() Obtain Leadership election policy for arbitration queue.
 * @method void setQueueLeaderLocator(string $QueueLeaderLocator) Set Leadership election policy for arbitration queue.
 * @method integer getQuorumInitialGroupSize() Obtain Specifies the initial replica group size of the arbitration queue.
 * @method void setQuorumInitialGroupSize(integer $QuorumInitialGroupSize) Set Specifies the initial replica group size of the arbitration queue.
 * @method boolean getExclusive() Obtain Whether it is an exclusive queue.
 * @method void setExclusive(boolean $Exclusive) Set Whether it is an exclusive queue.
 * @method string getPolicy() Obtain The name of the policy that takes effect.
 * @method void setPolicy(string $Policy) Set The name of the policy that takes effect.
 * @method string getArguments() Obtain Additional parameters key-value.
 * @method void setArguments(string $Arguments) Set Additional parameters key-value.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeRabbitMQServerlessQueueDetailResponse extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Vhost parameter.
     */
    public $VirtualHost;

    /**
     * @var string Queue name.
     */
    public $QueueName;

    /**
     * @var string Specifies the queue type. the valid values are classic or quorum.
     */
    public $QueueType;

    /**
     * @var integer Number of online consumers.
     */
    public $Consumers;

    /**
     * @var boolean Durable flag.
     */
    public $Durable;

    /**
     * @var boolean Automatic cleanup.
     */
    public $AutoDelete;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer MessageTTL parameter, dedicated for classic type.
     */
    public $MessageTTL;

    /**
     * @var integer AutoExpire parameter.
     */
    public $AutoExpire;

    /**
     * @var integer MaxLength parameter.
     */
    public $MaxLength;

    /**
     * @var integer MaxLengthBytes parameter.
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
     * @var string DeadLetterExchange parameter.
     */
    public $DeadLetterExchange;

    /**
     * @var string The DeadLetterRoutingKey parameter.
     */
    public $DeadLetterRoutingKey;

    /**
     * @var boolean SingleActiveConsumer parameter.
     */
    public $SingleActiveConsumer;

    /**
     * @var integer MaximumPriority parameter. specifies that it is dedicated for the classic type.
     */
    public $MaximumPriority;

    /**
     * @var boolean LazyMode parameter, dedicated for classic type.
     */
    public $LazyMode;

    /**
     * @var string MasterLocator parameter, dedicated for classic type.
     */
    public $MasterLocator;

    /**
     * @var integer MaxInMemoryLength parameter, dedicated for quorum type.
     */
    public $MaxInMemoryLength;

    /**
     * @var integer The MaxInMemoryBytes parameter is dedicated to the quorum type.
     */
    public $MaxInMemoryBytes;

    /**
     * @var integer Create timestamp, in seconds.
     */
    public $CreateTime;

    /**
     * @var string Node.
     */
    public $Node;

    /**
     * @var string Arbitration queue dead letter consistency policy.
     */
    public $DeadLetterStrategy;

    /**
     * @var string Leadership election policy for arbitration queue.
     */
    public $QueueLeaderLocator;

    /**
     * @var integer Specifies the initial replica group size of the arbitration queue.
     */
    public $QuorumInitialGroupSize;

    /**
     * @var boolean Whether it is an exclusive queue.
     */
    public $Exclusive;

    /**
     * @var string The name of the policy that takes effect.
     */
    public $Policy;

    /**
     * @var string Additional parameters key-value.
     */
    public $Arguments;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceId Instance ID
     * @param string $VirtualHost Vhost parameter.
     * @param string $QueueName Queue name.
     * @param string $QueueType Specifies the queue type. the valid values are classic or quorum.
     * @param integer $Consumers Number of online consumers.
     * @param boolean $Durable Durable flag.
     * @param boolean $AutoDelete Automatic cleanup.
     * @param string $Remark Remarks
     * @param integer $MessageTTL MessageTTL parameter, dedicated for classic type.
     * @param integer $AutoExpire AutoExpire parameter.
     * @param integer $MaxLength MaxLength parameter.
     * @param integer $MaxLengthBytes MaxLengthBytes parameter.
     * @param integer $DeliveryLimit DeliveryLimit parameter. specifies the parameter dedicated to the quorum type.
     * @param string $OverflowBehaviour OverflowBehaviour parameter specifies a value of drop-head, reject-publish, or reject-publish-dlx.
     * @param string $DeadLetterExchange DeadLetterExchange parameter.
     * @param string $DeadLetterRoutingKey The DeadLetterRoutingKey parameter.
     * @param boolean $SingleActiveConsumer SingleActiveConsumer parameter.
     * @param integer $MaximumPriority MaximumPriority parameter. specifies that it is dedicated for the classic type.
     * @param boolean $LazyMode LazyMode parameter, dedicated for classic type.
     * @param string $MasterLocator MasterLocator parameter, dedicated for classic type.
     * @param integer $MaxInMemoryLength MaxInMemoryLength parameter, dedicated for quorum type.
     * @param integer $MaxInMemoryBytes The MaxInMemoryBytes parameter is dedicated to the quorum type.
     * @param integer $CreateTime Create timestamp, in seconds.
     * @param string $Node Node.
     * @param string $DeadLetterStrategy Arbitration queue dead letter consistency policy.
     * @param string $QueueLeaderLocator Leadership election policy for arbitration queue.
     * @param integer $QuorumInitialGroupSize Specifies the initial replica group size of the arbitration queue.
     * @param boolean $Exclusive Whether it is an exclusive queue.
     * @param string $Policy The name of the policy that takes effect.
     * @param string $Arguments Additional parameters key-value.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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

        if (array_key_exists("Consumers",$param) and $param["Consumers"] !== null) {
            $this->Consumers = $param["Consumers"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = $param["Arguments"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
