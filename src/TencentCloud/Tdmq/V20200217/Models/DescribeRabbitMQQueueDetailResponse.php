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
 * DescribeRabbitMQQueueDetail response structure.
 *
 * @method string getInstanceId() Obtain Instance name
 * @method void setInstanceId(string $InstanceId) Set Instance name
 * @method string getVirtualHost() Obtain Vhost parameter.
 * @method void setVirtualHost(string $VirtualHost) Set Vhost parameter.
 * @method string getQueueName() Obtain Queue name.
 * @method void setQueueName(string $QueueName) Set Queue name.
 * @method string getQueueType() Obtain Queue type. Valid values: classic and quorum.
 * @method void setQueueType(string $QueueType) Set Queue type. Valid values: classic and quorum.
 * @method integer getConsumers() Obtain The number of online consumers.

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setConsumers(integer $Consumers) Set The number of online consumers.

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getDurable() Obtain Durable queue flag.
 * @method void setDurable(boolean $Durable) Set Durable queue flag.
 * @method boolean getAutoDelete() Obtain Automatic cleanup.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAutoDelete(boolean $AutoDelete) Set Automatic cleanup.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMessageTTL() Obtain Messagettl parameter, specific to classic type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMessageTTL(integer $MessageTTL) Set Messagettl parameter, specific to classic type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getAutoExpire() Obtain Autoexpire parameter.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAutoExpire(integer $AutoExpire) Set Autoexpire parameter.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxLength() Obtain The maxlength parameter specifies the maximum length.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxLength(integer $MaxLength) Set The maxlength parameter specifies the maximum length.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxLengthBytes() Obtain The maxlengthbytes parameter specifies the maximum length in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxLengthBytes(integer $MaxLengthBytes) Set The maxlengthbytes parameter specifies the maximum length in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getDeliveryLimit() Obtain The deliverylimit parameter is used for quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeliveryLimit(integer $DeliveryLimit) Set The deliverylimit parameter is used for quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getOverflowBehaviour() Obtain The overflowbehaviour parameter specifies the behavior when overflow occurs. Valid values: drop-head, reject-publish, reject-publish-dlx.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setOverflowBehaviour(string $OverflowBehaviour) Set The overflowbehaviour parameter specifies the behavior when overflow occurs. Valid values: drop-head, reject-publish, reject-publish-dlx.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDeadLetterExchange() Obtain The deadletterexchange parameter specifies the dead letter exchange.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeadLetterExchange(string $DeadLetterExchange) Set The deadletterexchange parameter specifies the dead letter exchange.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDeadLetterRoutingKey() Obtain The deadletterroutingkey parameter specifies the routing key for dead letters. Valid values: [value1, value2, value3].
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeadLetterRoutingKey(string $DeadLetterRoutingKey) Set The deadletterroutingkey parameter specifies the routing key for dead letters. Valid values: [value1, value2, value3].
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getSingleActiveConsumer() Obtain The singleactiveconsumer parameter indicates whether only one consumer can be active at a time. Valid values: [true, false].
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSingleActiveConsumer(boolean $SingleActiveConsumer) Set The singleactiveconsumer parameter indicates whether only one consumer can be active at a time. Valid values: [true, false].
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaximumPriority() Obtain The maximumpriority parameter, for classic type only, specifies the maximum priority level. Value range: 1-30.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaximumPriority(integer $MaximumPriority) Set The maximumpriority parameter, for classic type only, specifies the maximum priority level. Value range: 1-30.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getLazyMode() Obtain The lazymode parameter, for classic type only, indicates whether lazy mode is enabled. Valid values: [true, false].
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLazyMode(boolean $LazyMode) Set The lazymode parameter, for classic type only, indicates whether lazy mode is enabled. Valid values: [true, false].
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getMasterLocator() Obtain The masterlocator parameter, for classic type only, specifies the master locator strategy. Valid values: [strategy1, strategy2, strategy3].
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMasterLocator(string $MasterLocator) Set The masterlocator parameter, for classic type only, specifies the master locator strategy. Valid values: [strategy1, strategy2, strategy3].
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxInMemoryLength() Obtain The maxinmemorylength parameter, specific to quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxInMemoryLength(integer $MaxInMemoryLength) Set The maxinmemorylength parameter, specific to quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxInMemoryBytes() Obtain The maxinmemorybytes parameter, specific to quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxInMemoryBytes(integer $MaxInMemoryBytes) Set The maxinmemorybytes parameter, specific to quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation timestamp. Unit: seconds.
 * @method void setCreateTime(integer $CreateTime) Set Creation timestamp. Unit: seconds.
 * @method string getNode() Obtain Node

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setNode(string $Node) Set Node

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDeadLetterStrategy() Obtain Quorum queue dead letter consistency policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeadLetterStrategy(string $DeadLetterStrategy) Set Quorum queue dead letter consistency policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getQueueLeaderLocator() Obtain Leader election policy for quorum queue.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setQueueLeaderLocator(string $QueueLeaderLocator) Set Leader election policy for quorum queue.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getQuorumInitialGroupSize() Obtain Initial replica group size of arbitration queue.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setQuorumInitialGroupSize(integer $QuorumInitialGroupSize) Set Initial replica group size of arbitration queue.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getExclusive() Obtain Whether the queue is an exclusive queue.
 * @method void setExclusive(boolean $Exclusive) Set Whether the queue is an exclusive queue.
 * @method string getPolicy() Obtain Effective policy name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPolicy(string $Policy) Set Effective policy name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getArguments() Obtain Extended parameters of the key-value type.
 * @method void setArguments(string $Arguments) Set Extended parameters of the key-value type.
 * @method integer getCreateTs() Obtain Creation timestamp.
 * @method void setCreateTs(integer $CreateTs) Set Creation timestamp.
 * @method integer getModifyTs() Obtain Modification timestamp.
 * @method void setModifyTs(integer $ModifyTs) Set Modification timestamp.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeRabbitMQQueueDetailResponse extends AbstractModel
{
    /**
     * @var string Instance name
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
     * @var string Queue type. Valid values: classic and quorum.
     */
    public $QueueType;

    /**
     * @var integer The number of online consumers.

Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Consumers;

    /**
     * @var boolean Durable queue flag.
     */
    public $Durable;

    /**
     * @var boolean Automatic cleanup.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AutoDelete;

    /**
     * @var string Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var integer Messagettl parameter, specific to classic type.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MessageTTL;

    /**
     * @var integer Autoexpire parameter.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AutoExpire;

    /**
     * @var integer The maxlength parameter specifies the maximum length.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxLength;

    /**
     * @var integer The maxlengthbytes parameter specifies the maximum length in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxLengthBytes;

    /**
     * @var integer The deliverylimit parameter is used for quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeliveryLimit;

    /**
     * @var string The overflowbehaviour parameter specifies the behavior when overflow occurs. Valid values: drop-head, reject-publish, reject-publish-dlx.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $OverflowBehaviour;

    /**
     * @var string The deadletterexchange parameter specifies the dead letter exchange.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeadLetterExchange;

    /**
     * @var string The deadletterroutingkey parameter specifies the routing key for dead letters. Valid values: [value1, value2, value3].
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeadLetterRoutingKey;

    /**
     * @var boolean The singleactiveconsumer parameter indicates whether only one consumer can be active at a time. Valid values: [true, false].
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SingleActiveConsumer;

    /**
     * @var integer The maximumpriority parameter, for classic type only, specifies the maximum priority level. Value range: 1-30.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaximumPriority;

    /**
     * @var boolean The lazymode parameter, for classic type only, indicates whether lazy mode is enabled. Valid values: [true, false].
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LazyMode;

    /**
     * @var string The masterlocator parameter, for classic type only, specifies the master locator strategy. Valid values: [strategy1, strategy2, strategy3].
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MasterLocator;

    /**
     * @var integer The maxinmemorylength parameter, specific to quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxInMemoryLength;

    /**
     * @var integer The maxinmemorybytes parameter, specific to quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxInMemoryBytes;

    /**
     * @var integer Creation timestamp. Unit: seconds.
     */
    public $CreateTime;

    /**
     * @var string Node

Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Node;

    /**
     * @var string Quorum queue dead letter consistency policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeadLetterStrategy;

    /**
     * @var string Leader election policy for quorum queue.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $QueueLeaderLocator;

    /**
     * @var integer Initial replica group size of arbitration queue.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $QuorumInitialGroupSize;

    /**
     * @var boolean Whether the queue is an exclusive queue.
     */
    public $Exclusive;

    /**
     * @var string Effective policy name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Policy;

    /**
     * @var string Extended parameters of the key-value type.
     */
    public $Arguments;

    /**
     * @var integer Creation timestamp.
     */
    public $CreateTs;

    /**
     * @var integer Modification timestamp.
     */
    public $ModifyTs;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceId Instance name
     * @param string $VirtualHost Vhost parameter.
     * @param string $QueueName Queue name.
     * @param string $QueueType Queue type. Valid values: classic and quorum.
     * @param integer $Consumers The number of online consumers.

Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Durable Durable queue flag.
     * @param boolean $AutoDelete Automatic cleanup.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Remark Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MessageTTL Messagettl parameter, specific to classic type.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $AutoExpire Autoexpire parameter.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxLength The maxlength parameter specifies the maximum length.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxLengthBytes The maxlengthbytes parameter specifies the maximum length in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $DeliveryLimit The deliverylimit parameter is used for quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $OverflowBehaviour The overflowbehaviour parameter specifies the behavior when overflow occurs. Valid values: drop-head, reject-publish, reject-publish-dlx.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DeadLetterExchange The deadletterexchange parameter specifies the dead letter exchange.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DeadLetterRoutingKey The deadletterroutingkey parameter specifies the routing key for dead letters. Valid values: [value1, value2, value3].
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $SingleActiveConsumer The singleactiveconsumer parameter indicates whether only one consumer can be active at a time. Valid values: [true, false].
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaximumPriority The maximumpriority parameter, for classic type only, specifies the maximum priority level. Value range: 1-30.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $LazyMode The lazymode parameter, for classic type only, indicates whether lazy mode is enabled. Valid values: [true, false].
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $MasterLocator The masterlocator parameter, for classic type only, specifies the master locator strategy. Valid values: [strategy1, strategy2, strategy3].
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxInMemoryLength The maxinmemorylength parameter, specific to quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxInMemoryBytes The maxinmemorybytes parameter, specific to quorum type.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation timestamp. Unit: seconds.
     * @param string $Node Node

Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DeadLetterStrategy Quorum queue dead letter consistency policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $QueueLeaderLocator Leader election policy for quorum queue.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $QuorumInitialGroupSize Initial replica group size of arbitration queue.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Exclusive Whether the queue is an exclusive queue.
     * @param string $Policy Effective policy name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Arguments Extended parameters of the key-value type.
     * @param integer $CreateTs Creation timestamp.
     * @param integer $ModifyTs Modification timestamp.
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

        if (array_key_exists("CreateTs",$param) and $param["CreateTs"] !== null) {
            $this->CreateTs = $param["CreateTs"];
        }

        if (array_key_exists("ModifyTs",$param) and $param["ModifyTs"] !== null) {
            $this->ModifyTs = $param["ModifyTs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
