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
 * Data backup statistics object
 *
 * @method integer getAutoBackupCount() Obtain Auto-backup count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoBackupCount(integer $AutoBackupCount) Set Auto-backup count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoBackupSize() Obtain Auto-backup size, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoBackupSize(integer $AutoBackupSize) Set Auto-backup size, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAverageSizePerBackup() Obtain Avg backup size per each, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAverageSizePerBackup(integer $AverageSizePerBackup) Set Avg backup size per each, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAverageSizePerDay() Obtain Avg daily backup size, Byte
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAverageSizePerDay(integer $AverageSizePerDay) Set Avg daily backup size, Byte
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getManualBackupCount() Obtain Manual backup count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManualBackupCount(integer $ManualBackupCount) Set Manual backup count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getManualBackupSize() Obtain Manual backup size, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManualBackupSize(integer $ManualBackupSize) Set Manual backup size, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Number of data backups
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Number of data backups
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalSize() Obtain Data backup size, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalSize(integer $TotalSize) Set Data backup size, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataBackupStatisticsModel extends AbstractModel
{
    /**
     * @var integer Auto-backup count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoBackupCount;

    /**
     * @var integer Auto-backup size, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoBackupSize;

    /**
     * @var integer Avg backup size per each, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AverageSizePerBackup;

    /**
     * @var integer Avg daily backup size, Byte
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AverageSizePerDay;

    /**
     * @var integer Manual backup count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManualBackupCount;

    /**
     * @var integer Manual backup size, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManualBackupSize;

    /**
     * @var integer Number of data backups
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer Data backup size, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalSize;

    /**
     * @param integer $AutoBackupCount Auto-backup count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoBackupSize Auto-backup size, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AverageSizePerBackup Avg backup size per each, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AverageSizePerDay Avg daily backup size, Byte
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ManualBackupCount Manual backup count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ManualBackupSize Manual backup size, in Byte
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Number of data backups
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalSize Data backup size, in Byte
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
        if (array_key_exists("AutoBackupCount",$param) and $param["AutoBackupCount"] !== null) {
            $this->AutoBackupCount = $param["AutoBackupCount"];
        }

        if (array_key_exists("AutoBackupSize",$param) and $param["AutoBackupSize"] !== null) {
            $this->AutoBackupSize = $param["AutoBackupSize"];
        }

        if (array_key_exists("AverageSizePerBackup",$param) and $param["AverageSizePerBackup"] !== null) {
            $this->AverageSizePerBackup = $param["AverageSizePerBackup"];
        }

        if (array_key_exists("AverageSizePerDay",$param) and $param["AverageSizePerDay"] !== null) {
            $this->AverageSizePerDay = $param["AverageSizePerDay"];
        }

        if (array_key_exists("ManualBackupCount",$param) and $param["ManualBackupCount"] !== null) {
            $this->ManualBackupCount = $param["ManualBackupCount"];
        }

        if (array_key_exists("ManualBackupSize",$param) and $param["ManualBackupSize"] !== null) {
            $this->ManualBackupSize = $param["ManualBackupSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
