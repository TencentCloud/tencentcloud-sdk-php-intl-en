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
 * DescribeConsumerOffsets request structure.
 *
 * @method string getConsumerGroup() Obtain Consumer group flag corresponding to a log topic.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Consumer group flag corresponding to a log topic.
 * @method string getFrom() Obtain Timestamp (second-level).
 * @method void setFrom(string $From) Set Timestamp (second-level).
 * @method string getLogsetId() Obtain Logset ID (corresponding to a log topic).
 * @method void setLogsetId(string $LogsetId) Set Logset ID (corresponding to a log topic).
 * @method string getTopicId() Obtain Log topic id
 * @method void setTopicId(string $TopicId) Set Log topic id
 * @method string getPartitionId() Obtain Partition ID
 * @method void setPartitionId(string $PartitionId) Set Partition ID
 */
class DescribeConsumerOffsetsRequest extends AbstractModel
{
    /**
     * @var string Consumer group flag corresponding to a log topic.
     */
    public $ConsumerGroup;

    /**
     * @var string Timestamp (second-level).
     */
    public $From;

    /**
     * @var string Logset ID (corresponding to a log topic).
     */
    public $LogsetId;

    /**
     * @var string Log topic id
     */
    public $TopicId;

    /**
     * @var string Partition ID
     */
    public $PartitionId;

    /**
     * @param string $ConsumerGroup Consumer group flag corresponding to a log topic.
     * @param string $From Timestamp (second-level).
     * @param string $LogsetId Logset ID (corresponding to a log topic).
     * @param string $TopicId Log topic id
     * @param string $PartitionId Partition ID
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

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("PartitionId",$param) and $param["PartitionId"] !== null) {
            $this->PartitionId = $param["PartitionId"];
        }
    }
}
