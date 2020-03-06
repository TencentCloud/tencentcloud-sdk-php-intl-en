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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getStartTimeMin() Obtain Earliest start time point of automatic backup, such as 2 (for 2:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
 * @method void setStartTimeMin(integer $StartTimeMin) Set Earliest start time point of automatic backup, such as 2 (for 2:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
 * @method integer getStartTimeMax() Obtain Latest start time point of automatic backup, such as 6 (for 6:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
 * @method void setStartTimeMax(integer $StartTimeMax) Set Latest start time point of automatic backup, such as 6 (for 6:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
 * @method integer getBackupExpireDays() Obtain Backup file retention period in days.
 * @method void setBackupExpireDays(integer $BackupExpireDays) Set Backup file retention period in days.
 * @method string getBackupMethod() Obtain Backup mode. Value range: physical, logical
 * @method void setBackupMethod(string $BackupMethod) Set Backup mode. Value range: physical, logical
 * @method integer getBinlogExpireDays() Obtain Binlog file retention period in days.
 * @method void setBinlogExpireDays(integer $BinlogExpireDays) Set Binlog file retention period in days.
 * @method CommonTimeWindow getBackupTimeWindow() Obtain Time window for automatic instance backup.
 * @method void setBackupTimeWindow(CommonTimeWindow $BackupTimeWindow) Set Time window for automatic instance backup.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeBackupConfig response structure.
 */
class DescribeBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer Earliest start time point of automatic backup, such as 2 (for 2:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
     */
    public $StartTimeMin;

    /**
     * @var integer Latest start time point of automatic backup, such as 6 (for 6:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
     */
    public $StartTimeMax;

    /**
     * @var integer Backup file retention period in days.
     */
    public $BackupExpireDays;

    /**
     * @var string Backup mode. Value range: physical, logical
     */
    public $BackupMethod;

    /**
     * @var integer Binlog file retention period in days.
     */
    public $BinlogExpireDays;

    /**
     * @var CommonTimeWindow Time window for automatic instance backup.
     */
    public $BackupTimeWindow;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $StartTimeMin Earliest start time point of automatic backup, such as 2 (for 2:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
     * @param integer $StartTimeMax Latest start time point of automatic backup, such as 6 (for 6:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
     * @param integer $BackupExpireDays Backup file retention period in days.
     * @param string $BackupMethod Backup mode. Value range: physical, logical
     * @param integer $BinlogExpireDays Binlog file retention period in days.
     * @param CommonTimeWindow $BackupTimeWindow Time window for automatic instance backup.
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
        if (array_key_exists("StartTimeMin",$param) and $param["StartTimeMin"] !== null) {
            $this->StartTimeMin = $param["StartTimeMin"];
        }

        if (array_key_exists("StartTimeMax",$param) and $param["StartTimeMax"] !== null) {
            $this->StartTimeMax = $param["StartTimeMax"];
        }

        if (array_key_exists("BackupExpireDays",$param) and $param["BackupExpireDays"] !== null) {
            $this->BackupExpireDays = $param["BackupExpireDays"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BinlogExpireDays",$param) and $param["BinlogExpireDays"] !== null) {
            $this->BinlogExpireDays = $param["BinlogExpireDays"];
        }

        if (array_key_exists("BackupTimeWindow",$param) and $param["BackupTimeWindow"] !== null) {
            $this->BackupTimeWindow = new CommonTimeWindow();
            $this->BackupTimeWindow->deserialize($param["BackupTimeWindow"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
