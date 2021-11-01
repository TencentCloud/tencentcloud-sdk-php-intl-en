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
 * Log topic partition information
 *
 * @method integer getPartitionId() Obtain Partition ID
 * @method void setPartitionId(integer $PartitionId) Set Partition ID
 * @method string getStatus() Obtain Partition status. Valid values: `readwrite`, `readonly`
 * @method void setStatus(string $Status) Set Partition status. Valid values: `readwrite`, `readonly`
 * @method string getInclusiveBeginKey() Obtain Partition hash start key
 * @method void setInclusiveBeginKey(string $InclusiveBeginKey) Set Partition hash start key
 * @method string getExclusiveEndKey() Obtain Partition hash end key
 * @method void setExclusiveEndKey(string $ExclusiveEndKey) Set Partition hash end key
 * @method string getCreateTime() Obtain Partition creation time
 * @method void setCreateTime(string $CreateTime) Set Partition creation time
 * @method string getLastWriteTime() Obtain Last modified of read-only partition
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLastWriteTime(string $LastWriteTime) Set Last modified of read-only partition
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class PartitionInfo extends AbstractModel
{
    /**
     * @var integer Partition ID
     */
    public $PartitionId;

    /**
     * @var string Partition status. Valid values: `readwrite`, `readonly`
     */
    public $Status;

    /**
     * @var string Partition hash start key
     */
    public $InclusiveBeginKey;

    /**
     * @var string Partition hash end key
     */
    public $ExclusiveEndKey;

    /**
     * @var string Partition creation time
     */
    public $CreateTime;

    /**
     * @var string Last modified of read-only partition
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LastWriteTime;

    /**
     * @param integer $PartitionId Partition ID
     * @param string $Status Partition status. Valid values: `readwrite`, `readonly`
     * @param string $InclusiveBeginKey Partition hash start key
     * @param string $ExclusiveEndKey Partition hash end key
     * @param string $CreateTime Partition creation time
     * @param string $LastWriteTime Last modified of read-only partition
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InclusiveBeginKey",$param) and $param["InclusiveBeginKey"] !== null) {
            $this->InclusiveBeginKey = $param["InclusiveBeginKey"];
        }

        if (array_key_exists("ExclusiveEndKey",$param) and $param["ExclusiveEndKey"] !== null) {
            $this->ExclusiveEndKey = $param["ExclusiveEndKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastWriteTime",$param) and $param["LastWriteTime"] !== null) {
            $this->LastWriteTime = $param["LastWriteTime"];
        }
    }
}
