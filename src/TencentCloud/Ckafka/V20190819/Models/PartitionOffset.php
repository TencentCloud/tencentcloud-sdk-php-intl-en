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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Partition and offset
 *
 * @method string getPartition() Obtain Partition
 * @method void setPartition(string $Partition) Set Partition
 * @method integer getOffset() Obtain Specifies the offset.
 * @method void setOffset(integer $Offset) Set Specifies the offset.
 */
class PartitionOffset extends AbstractModel
{
    /**
     * @var string Partition
     */
    public $Partition;

    /**
     * @var integer Specifies the offset.
     */
    public $Offset;

    /**
     * @param string $Partition Partition
     * @param integer $Offset Specifies the offset.
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
        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
