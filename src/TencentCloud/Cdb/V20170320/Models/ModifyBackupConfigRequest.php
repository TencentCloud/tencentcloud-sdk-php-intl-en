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
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method integer getExpireDays() Obtain Backup file retention period in days. Value range: 7-732.
 * @method void setExpireDays(integer $ExpireDays) Set Backup file retention period in days. Value range: 7-732.
 * @method string getStartTime() Obtain (This parameter will be disused. The `BackupTimeWindow` parameter is recommended.) Backup time range in the format of 02:00–06:00, with the start time and end time on the hour. Valid values: 00:00–12:00, 02:00–06:00, 06:00–10:00, 10:00–14:00, 14:00–18:00, 18:00–22:00, 22:00–02:00.
 * @method void setStartTime(string $StartTime) Set (This parameter will be disused. The `BackupTimeWindow` parameter is recommended.) Backup time range in the format of 02:00–06:00, with the start time and end time on the hour. Valid values: 00:00–12:00, 02:00–06:00, 06:00–10:00, 10:00–14:00, 14:00–18:00, 18:00–22:00, 22:00–02:00.
 * @method string getBackupMethod() Obtain Automatic backup mode. Only `physical` (physical cold backup) is supported
 * @method void setBackupMethod(string $BackupMethod) Set Automatic backup mode. Only `physical` (physical cold backup) is supported
 * @method integer getBinlogExpireDays() Obtain Binlog retention period in days. Value range: 7-732. It cannot be greater than the retention period of backup files.
 * @method void setBinlogExpireDays(integer $BinlogExpireDays) Set Binlog retention period in days. Value range: 7-732. It cannot be greater than the retention period of backup files.
 * @method CommonTimeWindow getBackupTimeWindow() Obtain Backup time window; for example, to set up backup between 10:00 and 14:00 on every Tuesday and Sunday, you should set this parameter as follows: {"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"} (Note: You can set up backup on different days, but the backup time windows need to be the same. If this field is set, the `StartTime` field will be ignored)
 * @method void setBackupTimeWindow(CommonTimeWindow $BackupTimeWindow) Set Backup time window; for example, to set up backup between 10:00 and 14:00 on every Tuesday and Sunday, you should set this parameter as follows: {"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"} (Note: You can set up backup on different days, but the backup time windows need to be the same. If this field is set, the `StartTime` field will be ignored)
 */

/**
 *ModifyBackupConfig request structure.
 */
class ModifyBackupConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var integer Backup file retention period in days. Value range: 7-732.
     */
    public $ExpireDays;

    /**
     * @var string (This parameter will be disused. The `BackupTimeWindow` parameter is recommended.) Backup time range in the format of 02:00–06:00, with the start time and end time on the hour. Valid values: 00:00–12:00, 02:00–06:00, 06:00–10:00, 10:00–14:00, 14:00–18:00, 18:00–22:00, 22:00–02:00.
     */
    public $StartTime;

    /**
     * @var string Automatic backup mode. Only `physical` (physical cold backup) is supported
     */
    public $BackupMethod;

    /**
     * @var integer Binlog retention period in days. Value range: 7-732. It cannot be greater than the retention period of backup files.
     */
    public $BinlogExpireDays;

    /**
     * @var CommonTimeWindow Backup time window; for example, to set up backup between 10:00 and 14:00 on every Tuesday and Sunday, you should set this parameter as follows: {"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"} (Note: You can set up backup on different days, but the backup time windows need to be the same. If this field is set, the `StartTime` field will be ignored)
     */
    public $BackupTimeWindow;
    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param integer $ExpireDays Backup file retention period in days. Value range: 7-732.
     * @param string $StartTime (This parameter will be disused. The `BackupTimeWindow` parameter is recommended.) Backup time range in the format of 02:00–06:00, with the start time and end time on the hour. Valid values: 00:00–12:00, 02:00–06:00, 06:00–10:00, 10:00–14:00, 14:00–18:00, 18:00–22:00, 22:00–02:00.
     * @param string $BackupMethod Automatic backup mode. Only `physical` (physical cold backup) is supported
     * @param integer $BinlogExpireDays Binlog retention period in days. Value range: 7-732. It cannot be greater than the retention period of backup files.
     * @param CommonTimeWindow $BackupTimeWindow Backup time window; for example, to set up backup between 10:00 and 14:00 on every Tuesday and Sunday, you should set this parameter as follows: {"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"} (Note: You can set up backup on different days, but the backup time windows need to be the same. If this field is set, the `StartTime` field will be ignored)
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ExpireDays",$param) and $param["ExpireDays"] !== null) {
            $this->ExpireDays = $param["ExpireDays"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
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
    }
}
