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
 * Consumption group distinguish information over kafka protocol
 *
 * @method integer getPartitionId() Obtain Partition ID
 * @method void setPartitionId(integer $PartitionId) Set Partition ID
 * @method integer getCommitTimestamp() Obtain Latest data timestamp of the partition, unit: s
 * @method void setCommitTimestamp(integer $CommitTimestamp) Set Latest data timestamp of the partition, unit: s
 * @method string getConsumer() Obtain consumer
 * @method void setConsumer(string $Consumer) Set consumer
 */
class GroupPartitionInfo extends AbstractModel
{
    /**
     * @var integer Partition ID
     */
    public $PartitionId;

    /**
     * @var integer Latest data timestamp of the partition, unit: s
     */
    public $CommitTimestamp;

    /**
     * @var string consumer
     */
    public $Consumer;

    /**
     * @param integer $PartitionId Partition ID
     * @param integer $CommitTimestamp Latest data timestamp of the partition, unit: s
     * @param string $Consumer consumer
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
        if (array_key_exists("PartitionId",$param) and $param["PartitionId"] !== null) {
            $this->PartitionId = $param["PartitionId"];
        }

        if (array_key_exists("CommitTimestamp",$param) and $param["CommitTimestamp"] !== null) {
            $this->CommitTimestamp = $param["CommitTimestamp"];
        }

        if (array_key_exists("Consumer",$param) and $param["Consumer"] !== null) {
            $this->Consumer = $param["Consumer"];
        }
    }
}
