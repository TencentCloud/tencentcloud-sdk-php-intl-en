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
 * ResetConsumerGroupOffset request structure.
 *
 * @method string getSubscribeId() Obtain Subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Subscription instance ID
 * @method string getTopicName() Obtain Subscribed Kafka topic
 * @method void setTopicName(string $TopicName) Set Subscribed Kafka topic
 * @method string getConsumerGroupName() Obtain Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
 * @method array getPartitionNos() Obtain The partition number of offset needs to be modified.
 * @method void setPartitionNos(array $PartitionNos) Set The partition number of offset needs to be modified.
 * @method string getResetMode() Obtain Reset mode. Valid values: earliest (start consumption from the earliest position); latest (start consumption from the latest position); datetime (start consumption from the most recent checkpoint before the specified time).
 * @method void setResetMode(string $ResetMode) Set Reset mode. Valid values: earliest (start consumption from the earliest position); latest (start consumption from the latest position); datetime (start consumption from the most recent checkpoint before the specified time).
 * @method string getResetDatetime() Obtain When ResetMode is datetime, this field needs to be filled in, the format is: Y-m-d h:m:s. If not filled in, the default time is 0, and the effect is the same as earliest.
 * @method void setResetDatetime(string $ResetDatetime) Set When ResetMode is datetime, this field needs to be filled in, the format is: Y-m-d h:m:s. If not filled in, the default time is 0, and the effect is the same as earliest.
 */
class ResetConsumerGroupOffsetRequest extends AbstractModel
{
    /**
     * @var string Subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var string Subscribed Kafka topic
     */
    public $TopicName;

    /**
     * @var string Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
     */
    public $ConsumerGroupName;

    /**
     * @var array The partition number of offset needs to be modified.
     */
    public $PartitionNos;

    /**
     * @var string Reset mode. Valid values: earliest (start consumption from the earliest position); latest (start consumption from the latest position); datetime (start consumption from the most recent checkpoint before the specified time).
     */
    public $ResetMode;

    /**
     * @var string When ResetMode is datetime, this field needs to be filled in, the format is: Y-m-d h:m:s. If not filled in, the default time is 0, and the effect is the same as earliest.
     */
    public $ResetDatetime;

    /**
     * @param string $SubscribeId Subscription instance ID
     * @param string $TopicName Subscribed Kafka topic
     * @param string $ConsumerGroupName Consumer group name. The full name of the actual consumer group is in the form: consumer-grp-#{SubscribeId}-#{ConsumerGroupName}.
     * @param array $PartitionNos The partition number of offset needs to be modified.
     * @param string $ResetMode Reset mode. Valid values: earliest (start consumption from the earliest position); latest (start consumption from the latest position); datetime (start consumption from the most recent checkpoint before the specified time).
     * @param string $ResetDatetime When ResetMode is datetime, this field needs to be filled in, the format is: Y-m-d h:m:s. If not filled in, the default time is 0, and the effect is the same as earliest.
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("PartitionNos",$param) and $param["PartitionNos"] !== null) {
            $this->PartitionNos = $param["PartitionNos"];
        }

        if (array_key_exists("ResetMode",$param) and $param["ResetMode"] !== null) {
            $this->ResetMode = $param["ResetMode"];
        }

        if (array_key_exists("ResetDatetime",$param) and $param["ResetDatetime"] !== null) {
            $this->ResetDatetime = $param["ResetDatetime"];
        }
    }
}
