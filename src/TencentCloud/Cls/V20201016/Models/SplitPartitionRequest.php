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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SplitPartition request structure.
 *
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method integer getPartitionId() Obtain ID of the partition to be split
 * @method void setPartitionId(integer $PartitionId) Set ID of the partition to be split
 * @method string getSplitKey() Obtain Partition split hash key position, which is meaningful only if `Number=2` is set
 * @method void setSplitKey(string $SplitKey) Set Partition split hash key position, which is meaningful only if `Number=2` is set
 * @method integer getNumber() Obtain Number of partitions to split into, which is optional. Default value: 2
 * @method void setNumber(integer $Number) Set Number of partitions to split into, which is optional. Default value: 2
 */
class SplitPartitionRequest extends AbstractModel
{
    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var integer ID of the partition to be split
     */
    public $PartitionId;

    /**
     * @var string Partition split hash key position, which is meaningful only if `Number=2` is set
     */
    public $SplitKey;

    /**
     * @var integer Number of partitions to split into, which is optional. Default value: 2
     */
    public $Number;

    /**
     * @param string $TopicId Log topic ID
     * @param integer $PartitionId ID of the partition to be split
     * @param string $SplitKey Partition split hash key position, which is meaningful only if `Number=2` is set
     * @param integer $Number Number of partitions to split into, which is optional. Default value: 2
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("PartitionId",$param) and $param["PartitionId"] !== null) {
            $this->PartitionId = $param["PartitionId"];
        }

        if (array_key_exists("SplitKey",$param) and $param["SplitKey"] !== null) {
            $this->SplitKey = $param["SplitKey"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}
