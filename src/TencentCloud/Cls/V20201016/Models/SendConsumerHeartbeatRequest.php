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
 * SendConsumerHeartbeat request structure.
 *
 * @method string getConsumerGroup() Obtain Flag of the consumer group that reports the heartbeat.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Flag of the consumer group that reports the heartbeat.
 * @method string getConsumer() Obtain Consumer name for reporting heartbeat
(alphanumeric underscore, no numbers or _ at the beginning, length less than 256)
 * @method void setConsumer(string $Consumer) Set Consumer name for reporting heartbeat
(alphanumeric underscore, no numbers or _ at the beginning, length less than 256)
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method array getTopicPartitionsInfo() Obtain Topic partition information.
 * @method void setTopicPartitionsInfo(array $TopicPartitionsInfo) Set Topic partition information.
 */
class SendConsumerHeartbeatRequest extends AbstractModel
{
    /**
     * @var string Flag of the consumer group that reports the heartbeat.
     */
    public $ConsumerGroup;

    /**
     * @var string Consumer name for reporting heartbeat
(alphanumeric underscore, no numbers or _ at the beginning, length less than 256)
     */
    public $Consumer;

    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var array Topic partition information.
     */
    public $TopicPartitionsInfo;

    /**
     * @param string $ConsumerGroup Flag of the consumer group that reports the heartbeat.
     * @param string $Consumer Consumer name for reporting heartbeat
(alphanumeric underscore, no numbers or _ at the beginning, length less than 256)
     * @param string $LogsetId Logset ID
     * @param array $TopicPartitionsInfo Topic partition information.
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

        if (array_key_exists("TopicPartitionsInfo",$param) and $param["TopicPartitionsInfo"] !== null) {
            $this->TopicPartitionsInfo = [];
            foreach ($param["TopicPartitionsInfo"] as $key => $value){
                $obj = new TopicPartitionInfo();
                $obj->deserialize($value);
                array_push($this->TopicPartitionsInfo, $obj);
            }
        }
    }
}
