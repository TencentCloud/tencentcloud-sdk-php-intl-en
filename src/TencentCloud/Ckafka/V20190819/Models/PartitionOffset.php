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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Partition and offset
 *
 * @method string getPartition() Obtain Partition, such as "0" or "1"
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPartition(string $Partition) Set Partition, such as "0" or "1"
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getOffset() Obtain Offset, such as 100
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOffset(integer $Offset) Set Offset, such as 100
Note: this field may return null, indicating that no valid values can be obtained.
 */
class PartitionOffset extends AbstractModel
{
    /**
     * @var string Partition, such as "0" or "1"
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Partition;

    /**
     * @var integer Offset, such as 100
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Offset;

    /**
     * @param string $Partition Partition, such as "0" or "1"
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Offset Offset, such as 100
Note: this field may return null, indicating that no valid values can be obtained.
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
