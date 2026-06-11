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
 * PartitionOffsetInfo
 *
 * @method integer getPartitionId() Obtain Partition ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitionId(integer $PartitionId) Set Partition ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOffset() Obtain Offset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOffset(integer $Offset) Set Offset.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PartitionOffsetInfo extends AbstractModel
{
    /**
     * @var integer Partition ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PartitionId;

    /**
     * @var integer Offset.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Offset;

    /**
     * @param integer $PartitionId Partition ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Offset Offset.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
