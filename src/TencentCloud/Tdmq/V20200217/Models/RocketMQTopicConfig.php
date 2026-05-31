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
 * RocketMQ Topic Configuration Information
 *
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method string getType() Obtain Topic type:
Normal, ordinary
PartitionedOrder, partition order
Transactional message
DelayScheduled, delay/scheduled message
 * @method void setType(string $Type) Set Topic type:
Normal, ordinary
PartitionedOrder, partition order
Transactional message
DelayScheduled, delay/scheduled message
 * @method integer getPartitions() Obtain Number of partitions
 * @method void setPartitions(integer $Partitions) Set Number of partitions
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 */
class RocketMQTopicConfig extends AbstractModel
{
    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var string Topic type:
Normal, ordinary
PartitionedOrder, partition order
Transactional message
DelayScheduled, delay/scheduled message
     */
    public $Type;

    /**
     * @var integer Number of partitions
     */
    public $Partitions;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @param string $Namespace Namespace
     * @param string $TopicName Topic name
     * @param string $Type Topic type:
Normal, ordinary
PartitionedOrder, partition order
Transactional message
DelayScheduled, delay/scheduled message
     * @param integer $Partitions Number of partitions
     * @param string $Remark Remarks
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
