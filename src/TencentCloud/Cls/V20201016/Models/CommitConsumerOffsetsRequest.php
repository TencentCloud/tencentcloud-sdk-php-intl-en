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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CommitConsumerOffsets request structure.
 *
 * @method string getConsumerGroup() Obtain Consumer group flag.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Consumer group flag.
 * @method string getConsumer() Obtain Consumption machine name.
 * @method void setConsumer(string $Consumer) Set Consumption machine name.
 * @method string getLogsetId() Obtain Logset id
 * @method void setLogsetId(string $LogsetId) Set Logset id
 * @method array getTopicPartitionOffsetsInfo() Obtain Topic partition offset information.
 * @method void setTopicPartitionOffsetsInfo(array $TopicPartitionOffsetsInfo) Set Topic partition offset information.
 */
class CommitConsumerOffsetsRequest extends AbstractModel
{
    /**
     * @var string Consumer group flag.
     */
    public $ConsumerGroup;

    /**
     * @var string Consumption machine name.
     */
    public $Consumer;

    /**
     * @var string Logset id
     */
    public $LogsetId;

    /**
     * @var array Topic partition offset information.
     */
    public $TopicPartitionOffsetsInfo;

    /**
     * @param string $ConsumerGroup Consumer group flag.
     * @param string $Consumer Consumption machine name.
     * @param string $LogsetId Logset id
     * @param array $TopicPartitionOffsetsInfo Topic partition offset information.
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
        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("Consumer",$param) and $param["Consumer"] !== null) {
            $this->Consumer = $param["Consumer"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicPartitionOffsetsInfo",$param) and $param["TopicPartitionOffsetsInfo"] !== null) {
            $this->TopicPartitionOffsetsInfo = [];
            foreach ($param["TopicPartitionOffsetsInfo"] as $key => $value){
                $obj = new TopicPartitionOffsetInfo();
                $obj->deserialize($value);
                array_push($this->TopicPartitionOffsetsInfo, $obj);
            }
        }
    }
}
