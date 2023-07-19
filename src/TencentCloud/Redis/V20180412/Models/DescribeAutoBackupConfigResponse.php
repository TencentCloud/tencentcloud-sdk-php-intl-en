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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoBackupConfig response structure.
 *
 * @method integer getAutoBackupType() Obtain This parameter is retained due to compatibility and can be ignored.
 * @method void setAutoBackupType(integer $AutoBackupType) Set This parameter is retained due to compatibility and can be ignored.
 * @method array getWeekDays() Obtain Backup cycle, which will be daily by default. Valid values: `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`.
 * @method void setWeekDays(array $WeekDays) Set Backup cycle, which will be daily by default. Valid values: `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`.
 * @method string getTimePeriod() Obtain Time period for backup task initialization
 * @method void setTimePeriod(string $TimePeriod) Set Time period for backup task initialization
 * @method integer getBackupStorageDays() Obtain Retention time of full backup files in days.  Default value: `7`.  To retain the files for more days, [submit a ticket](https://console.cloud.tencent.com/workorder/category) for application.
 * @method void setBackupStorageDays(integer $BackupStorageDays) Set Retention time of full backup files in days.  Default value: `7`.  To retain the files for more days, [submit a ticket](https://console.cloud.tencent.com/workorder/category) for application.
 * @method integer getBinlogStorageDays() Obtain This parameter has been disused.
 * @method void setBinlogStorageDays(integer $BinlogStorageDays) Set This parameter has been disused.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAutoBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer This parameter is retained due to compatibility and can be ignored.
     */
    public $AutoBackupType;

    /**
     * @var array Backup cycle, which will be daily by default. Valid values: `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`.
     */
    public $WeekDays;

    /**
     * @var string Time period for backup task initialization
     */
    public $TimePeriod;

    /**
     * @var integer Retention time of full backup files in days.  Default value: `7`.  To retain the files for more days, [submit a ticket](https://console.cloud.tencent.com/workorder/category) for application.
     */
    public $BackupStorageDays;

    /**
     * @var integer This parameter has been disused.
     */
    public $BinlogStorageDays;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AutoBackupType This parameter is retained due to compatibility and can be ignored.
     * @param array $WeekDays Backup cycle, which will be daily by default. Valid values: `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`.
     * @param string $TimePeriod Time period for backup task initialization
     * @param integer $BackupStorageDays Retention time of full backup files in days.  Default value: `7`.  To retain the files for more days, [submit a ticket](https://console.cloud.tencent.com/workorder/category) for application.
     * @param integer $BinlogStorageDays This parameter has been disused.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("AutoBackupType",$param) and $param["AutoBackupType"] !== null) {
            $this->AutoBackupType = $param["AutoBackupType"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("TimePeriod",$param) and $param["TimePeriod"] !== null) {
            $this->TimePeriod = $param["TimePeriod"];
        }

        if (array_key_exists("BackupStorageDays",$param) and $param["BackupStorageDays"] !== null) {
            $this->BackupStorageDays = $param["BackupStorageDays"];
        }

        if (array_key_exists("BinlogStorageDays",$param) and $param["BinlogStorageDays"] !== null) {
            $this->BinlogStorageDays = $param["BinlogStorageDays"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
