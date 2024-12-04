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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kafka consumer group details
 *
 * @method string getAccount() Obtain Consumer group account
 * @method void setAccount(string $Account) Set Consumer group account
 * @method string getConsumerGroupName() Obtain Consumer group name
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set Consumer group name
 * @method string getDescription() Obtain Consumer group descriptionNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Consumer group descriptionNote: This field may return null, indicating that no valid values can be obtained.
 * @method integer getConsumerGroupOffset() Obtain Consumer group offset. This field is for compatibility with the previous single partition scenario, where the value is the offset of the last partition. For the offset of each partition, please refer to the StateOfPartition field.
 * @method void setConsumerGroupOffset(integer $ConsumerGroupOffset) Set Consumer group offset. This field is for compatibility with the previous single partition scenario, where the value is the offset of the last partition. For the offset of each partition, please refer to the StateOfPartition field.
 * @method integer getConsumerGroupLag() Obtain The amount of data that has not been consumed by the consumer group. This field is for compatibility with the previous single partition scenario, where the value is the amount of unconsumed data in the last partition. For the amount of unconsumed data in each partition, refer to the StateOfPartition field.
 * @method void setConsumerGroupLag(integer $ConsumerGroupLag) Set The amount of data that has not been consumed by the consumer group. This field is for compatibility with the previous single partition scenario, where the value is the amount of unconsumed data in the last partition. For the amount of unconsumed data in each partition, refer to the StateOfPartition field.
 * @method integer getLatency() Obtain Consumption delay (in seconds)
 * @method void setLatency(integer $Latency) Set Consumption delay (in seconds)
 * @method array getStateOfPartition() Obtain Consumption status of each partition
 * @method void setStateOfPartition(array $StateOfPartition) Set Consumption status of each partition
 * @method string getCreatedAt() Obtain Consumer group creation time, the format is: YYYY-MM-DD hh:mm:ss.
 * @method void setCreatedAt(string $CreatedAt) Set Consumer group creation time, the format is: YYYY-MM-DD hh:mm:ss.
 * @method string getUpdatedAt() Obtain Consumer group update time, the format is: YYYY-MM-DD hh:mm:ss.
 * @method void setUpdatedAt(string $UpdatedAt) Set Consumer group update time, the format is: YYYY-MM-DD hh:mm:ss.
 * @method string getConsumerGroupState() Obtain Consumer group states, including Dead, Empty, Stable, etc. Only Dead and Empty states can perform reset operations.
 * @method void setConsumerGroupState(string $ConsumerGroupState) Set Consumer group states, including Dead, Empty, Stable, etc. Only Dead and Empty states can perform reset operations.
 * @method array getPartitionAssignment() Obtain The partition is being consumed by each consumer.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitionAssignment(array $PartitionAssignment) Set The partition is being consumed by each consumer.Note: This field may return null, indicating that no valid values can be obtained.
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string Consumer group account
     */
    public $Account;

    /**
     * @var string Consumer group name
     */
    public $ConsumerGroupName;

    /**
     * @var string Consumer group descriptionNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var integer Consumer group offset. This field is for compatibility with the previous single partition scenario, where the value is the offset of the last partition. For the offset of each partition, please refer to the StateOfPartition field.
     */
    public $ConsumerGroupOffset;

    /**
     * @var integer The amount of data that has not been consumed by the consumer group. This field is for compatibility with the previous single partition scenario, where the value is the amount of unconsumed data in the last partition. For the amount of unconsumed data in each partition, refer to the StateOfPartition field.
     */
    public $ConsumerGroupLag;

    /**
     * @var integer Consumption delay (in seconds)
     */
    public $Latency;

    /**
     * @var array Consumption status of each partition
     */
    public $StateOfPartition;

    /**
     * @var string Consumer group creation time, the format is: YYYY-MM-DD hh:mm:ss.
     */
    public $CreatedAt;

    /**
     * @var string Consumer group update time, the format is: YYYY-MM-DD hh:mm:ss.
     */
    public $UpdatedAt;

    /**
     * @var string Consumer group states, including Dead, Empty, Stable, etc. Only Dead and Empty states can perform reset operations.
     */
    public $ConsumerGroupState;

    /**
     * @var array The partition is being consumed by each consumer.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PartitionAssignment;

    /**
     * @param string $Account Consumer group account
     * @param string $ConsumerGroupName Consumer group name
     * @param string $Description Consumer group descriptionNote: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ConsumerGroupOffset Consumer group offset. This field is for compatibility with the previous single partition scenario, where the value is the offset of the last partition. For the offset of each partition, please refer to the StateOfPartition field.
     * @param integer $ConsumerGroupLag The amount of data that has not been consumed by the consumer group. This field is for compatibility with the previous single partition scenario, where the value is the amount of unconsumed data in the last partition. For the amount of unconsumed data in each partition, refer to the StateOfPartition field.
     * @param integer $Latency Consumption delay (in seconds)
     * @param array $StateOfPartition Consumption status of each partition
     * @param string $CreatedAt Consumer group creation time, the format is: YYYY-MM-DD hh:mm:ss.
     * @param string $UpdatedAt Consumer group update time, the format is: YYYY-MM-DD hh:mm:ss.
     * @param string $ConsumerGroupState Consumer group states, including Dead, Empty, Stable, etc. Only Dead and Empty states can perform reset operations.
     * @param array $PartitionAssignment The partition is being consumed by each consumer.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConsumerGroupOffset",$param) and $param["ConsumerGroupOffset"] !== null) {
            $this->ConsumerGroupOffset = $param["ConsumerGroupOffset"];
        }

        if (array_key_exists("ConsumerGroupLag",$param) and $param["ConsumerGroupLag"] !== null) {
            $this->ConsumerGroupLag = $param["ConsumerGroupLag"];
        }

        if (array_key_exists("Latency",$param) and $param["Latency"] !== null) {
            $this->Latency = $param["Latency"];
        }

        if (array_key_exists("StateOfPartition",$param) and $param["StateOfPartition"] !== null) {
            $this->StateOfPartition = [];
            foreach ($param["StateOfPartition"] as $key => $value){
                $obj = new MonitorInfo();
                $obj->deserialize($value);
                array_push($this->StateOfPartition, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("ConsumerGroupState",$param) and $param["ConsumerGroupState"] !== null) {
            $this->ConsumerGroupState = $param["ConsumerGroupState"];
        }

        if (array_key_exists("PartitionAssignment",$param) and $param["PartitionAssignment"] !== null) {
            $this->PartitionAssignment = [];
            foreach ($param["PartitionAssignment"] as $key => $value){
                $obj = new PartitionAssignment();
                $obj->deserialize($value);
                array_push($this->PartitionAssignment, $obj);
            }
        }
    }
}
