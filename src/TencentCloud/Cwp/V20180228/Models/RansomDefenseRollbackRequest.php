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
 * RansomDefenseRollback request structure.
 *
 * @method string getBackupTime() Obtain Snapshot time
 * @method void setBackupTime(string $BackupTime) Set Snapshot time
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getDiskInfo() Obtain Information about the hard disks that need to be rolled back. Hard disks are directly separated by semicolons (;); blanks are all disks that have been snapshot: disk-id1|disk-name1;disk-id2|disk-name2.
 * @method void setDiskInfo(string $DiskInfo) Set Information about the hard disks that need to be rolled back. Hard disks are directly separated by semicolons (;); blanks are all disks that have been snapshot: disk-id1|disk-name1;disk-id2|disk-name2.
 */
class RansomDefenseRollbackRequest extends AbstractModel
{
    /**
     * @var string Snapshot time
     */
    public $BackupTime;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Information about the hard disks that need to be rolled back. Hard disks are directly separated by semicolons (;); blanks are all disks that have been snapshot: disk-id1|disk-name1;disk-id2|disk-name2.
     */
    public $DiskInfo;

    /**
     * @param string $BackupTime Snapshot time
     * @param string $Quuid Host QUUID
     * @param string $DiskInfo Information about the hard disks that need to be rolled back. Hard disks are directly separated by semicolons (;); blanks are all disks that have been snapshot: disk-id1|disk-name1;disk-id2|disk-name2.
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
        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("DiskInfo",$param) and $param["DiskInfo"] !== null) {
            $this->DiskInfo = $param["DiskInfo"];
        }
    }
}
