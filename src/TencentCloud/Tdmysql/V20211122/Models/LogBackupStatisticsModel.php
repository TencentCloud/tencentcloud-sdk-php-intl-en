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
 * Backup statistics object for logs
 *
 * @method integer getAverageSizePerBackup() Obtain <p>Avg size of each log backup in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAverageSizePerBackup(integer $AverageSizePerBackup) Set <p>Avg size of each log backup in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAverageSizePerDay() Obtain <p>Avg daily log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAverageSizePerDay(integer $AverageSizePerDay) Set <p>Avg daily log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain <p>Number of log backups</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set <p>Number of log backups</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalSize() Obtain <p>Log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalSize(integer $TotalSize) Set <p>Log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LogBackupStatisticsModel extends AbstractModel
{
    /**
     * @var integer <p>Avg size of each log backup in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AverageSizePerBackup;

    /**
     * @var integer <p>Avg daily log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AverageSizePerDay;

    /**
     * @var integer <p>Number of log backups</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer <p>Log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalSize;

    /**
     * @param integer $AverageSizePerBackup <p>Avg size of each log backup in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AverageSizePerDay <p>Avg daily log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount <p>Number of log backups</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalSize <p>Log backup size in Byte</p>
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
        if (array_key_exists("AverageSizePerBackup",$param) and $param["AverageSizePerBackup"] !== null) {
            $this->AverageSizePerBackup = $param["AverageSizePerBackup"];
        }

        if (array_key_exists("AverageSizePerDay",$param) and $param["AverageSizePerDay"] !== null) {
            $this->AverageSizePerDay = $param["AverageSizePerDay"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
