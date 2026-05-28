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
 * Backup statistics object
 *
 * @method integer getAverageSizePerDay() Obtain <p>Average size of total backup per day in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAverageSizePerDay(integer $AverageSizePerDay) Set <p>Average size of total backup per day in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDataBackupSize() Obtain <p>Backup size of data, in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataBackupSize(integer $DataBackupSize) Set <p>Backup size of data, in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLogBackupSize() Obtain <p>Log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogBackupSize(integer $LogBackupSize) Set <p>Log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain <p>Total backup count</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set <p>Total backup count</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalSize() Obtain <p>Total backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalSize(integer $TotalSize) Set <p>Total backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackupStatisticsModel extends AbstractModel
{
    /**
     * @var integer <p>Average size of total backup per day in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AverageSizePerDay;

    /**
     * @var integer <p>Backup size of data, in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataBackupSize;

    /**
     * @var integer <p>Log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogBackupSize;

    /**
     * @var integer <p>Total backup count</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer <p>Total backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalSize;

    /**
     * @param integer $AverageSizePerDay <p>Average size of total backup per day in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DataBackupSize <p>Backup size of data, in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LogBackupSize <p>Log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount <p>Total backup count</p>
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
        if (array_key_exists("AverageSizePerDay",$param) and $param["AverageSizePerDay"] !== null) {
            $this->AverageSizePerDay = $param["AverageSizePerDay"];
        }

        if (array_key_exists("DataBackupSize",$param) and $param["DataBackupSize"] !== null) {
            $this->DataBackupSize = $param["DataBackupSize"];
        }

        if (array_key_exists("LogBackupSize",$param) and $param["LogBackupSize"] !== null) {
            $this->LogBackupSize = $param["LogBackupSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
