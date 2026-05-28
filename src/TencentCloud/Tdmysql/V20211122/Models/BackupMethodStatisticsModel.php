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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backup method statistical object - provided to backup space statistics API
 *
 * @method integer getAutoBackupSize() Obtain <p>Auto-backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoBackupSize(integer $AutoBackupSize) Set <p>Auto-backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAverageSizePerDay() Obtain <p>Average size of total backup per day in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAverageSizePerDay(integer $AverageSizePerDay) Set <p>Average size of total backup per day in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getManualBackupSize() Obtain <p>Manual backup size, unit Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManualBackupSize(integer $ManualBackupSize) Set <p>Manual backup size, unit Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalSize() Obtain <p>Total backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalSize(integer $TotalSize) Set <p>Total backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackupMethodStatisticsModel extends AbstractModel
{
    /**
     * @var integer <p>Auto-backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoBackupSize;

    /**
     * @var integer <p>Average size of total backup per day in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AverageSizePerDay;

    /**
     * @var integer <p>Manual backup size, unit Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManualBackupSize;

    /**
     * @var integer <p>Total backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalSize;

    /**
     * @param integer $AutoBackupSize <p>Auto-backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AverageSizePerDay <p>Average size of total backup per day in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ManualBackupSize <p>Manual backup size, unit Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalSize <p>Total backup size in Byte</p>
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
        if (array_key_exists("AutoBackupSize",$param) and $param["AutoBackupSize"] !== null) {
            $this->AutoBackupSize = $param["AutoBackupSize"];
        }

        if (array_key_exists("AverageSizePerDay",$param) and $param["AverageSizePerDay"] !== null) {
            $this->AverageSizePerDay = $param["AverageSizePerDay"];
        }

        if (array_key_exists("ManualBackupSize",$param) and $param["ManualBackupSize"] !== null) {
            $this->ManualBackupSize = $param["ManualBackupSize"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
