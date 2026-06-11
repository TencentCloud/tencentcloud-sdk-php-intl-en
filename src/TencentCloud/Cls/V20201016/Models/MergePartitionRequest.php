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
 * MergePartition request structure.
 *
 * @method string getTopicId() Obtain Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method integer getPartitionId() Obtain Merged partition id (find the next partition whose InclusiveBeginKey equals the ExclusiveEndKey of the corresponding partition id in the input parameter, and the found partition must be a read-write partition (Status:readwrite), set the input partition id and the found partition id to read-only partition (Status:readonly), then create a new read-write partition). [Get partition list](https://www.tencentcloud.com/document/product/614/56470?from_cn_redirect=1)

1. PartitionId can only be a read-write partition (Status can be readonly or readwrite), and the next read-write partition of PartitionId can be found (the InclusiveBeginKey of the next partition equals to the ExclusiveEndKey of PartitionId).
2. The PartitionId cannot be the last partition (the ExclusiveEndKey of PartitionId cannot be ffffffffffffffffffffffffffffffff).
3. The number of topic partitions is limited (50 by default). After merging, it must not exceed the maximum partition, otherwise merging is not allowed.
 * @method void setPartitionId(integer $PartitionId) Set Merged partition id (find the next partition whose InclusiveBeginKey equals the ExclusiveEndKey of the corresponding partition id in the input parameter, and the found partition must be a read-write partition (Status:readwrite), set the input partition id and the found partition id to read-only partition (Status:readonly), then create a new read-write partition). [Get partition list](https://www.tencentcloud.com/document/product/614/56470?from_cn_redirect=1)

1. PartitionId can only be a read-write partition (Status can be readonly or readwrite), and the next read-write partition of PartitionId can be found (the InclusiveBeginKey of the next partition equals to the ExclusiveEndKey of PartitionId).
2. The PartitionId cannot be the last partition (the ExclusiveEndKey of PartitionId cannot be ffffffffffffffffffffffffffffffff).
3. The number of topic partitions is limited (50 by default). After merging, it must not exceed the maximum partition, otherwise merging is not allowed.
 */
class MergePartitionRequest extends AbstractModel
{
    /**
     * @var string Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var integer Merged partition id (find the next partition whose InclusiveBeginKey equals the ExclusiveEndKey of the corresponding partition id in the input parameter, and the found partition must be a read-write partition (Status:readwrite), set the input partition id and the found partition id to read-only partition (Status:readonly), then create a new read-write partition). [Get partition list](https://www.tencentcloud.com/document/product/614/56470?from_cn_redirect=1)

1. PartitionId can only be a read-write partition (Status can be readonly or readwrite), and the next read-write partition of PartitionId can be found (the InclusiveBeginKey of the next partition equals to the ExclusiveEndKey of PartitionId).
2. The PartitionId cannot be the last partition (the ExclusiveEndKey of PartitionId cannot be ffffffffffffffffffffffffffffffff).
3. The number of topic partitions is limited (50 by default). After merging, it must not exceed the maximum partition, otherwise merging is not allowed.
     */
    public $PartitionId;

    /**
     * @param string $TopicId Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param integer $PartitionId Merged partition id (find the next partition whose InclusiveBeginKey equals the ExclusiveEndKey of the corresponding partition id in the input parameter, and the found partition must be a read-write partition (Status:readwrite), set the input partition id and the found partition id to read-only partition (Status:readonly), then create a new read-write partition). [Get partition list](https://www.tencentcloud.com/document/product/614/56470?from_cn_redirect=1)

1. PartitionId can only be a read-write partition (Status can be readonly or readwrite), and the next read-write partition of PartitionId can be found (the InclusiveBeginKey of the next partition equals to the ExclusiveEndKey of PartitionId).
2. The PartitionId cannot be the last partition (the ExclusiveEndKey of PartitionId cannot be ffffffffffffffffffffffffffffffff).
3. The number of topic partitions is limited (50 by default). After merging, it must not exceed the maximum partition, otherwise merging is not allowed.
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
    }
}
