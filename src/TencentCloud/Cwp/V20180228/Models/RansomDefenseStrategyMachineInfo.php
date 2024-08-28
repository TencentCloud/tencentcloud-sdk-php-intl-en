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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Anti-Ransomware Machine Hard Disk Configuration
 *
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getDiskInfo() Obtain Specified Hard Disk List. When it is empty, it means all hard disks: disk_id1|disk_name1;disk_id2|disk_name2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskInfo(string $DiskInfo) Set Specified Hard Disk List. When it is empty, it means all hard disks: disk_id1|disk_name1;disk_id2|disk_name2.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RansomDefenseStrategyMachineInfo extends AbstractModel
{
    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Specified Hard Disk List. When it is empty, it means all hard disks: disk_id1|disk_name1;disk_id2|disk_name2.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskInfo;

    /**
     * @param string $Uuid Host UUID
     * @param string $DiskInfo Specified Hard Disk List. When it is empty, it means all hard disks: disk_id1|disk_name1;disk_id2|disk_name2.
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("DiskInfo",$param) and $param["DiskInfo"] !== null) {
            $this->DiskInfo = $param["DiskInfo"];
        }
    }
}
