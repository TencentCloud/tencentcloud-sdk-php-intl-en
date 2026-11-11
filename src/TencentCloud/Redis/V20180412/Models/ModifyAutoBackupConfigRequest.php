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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoBackupConfig request structure.
 *
 * @method string getInstanceId() Obtain <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID in the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID in the instance list.</p>
 * @method array getWeekDays() Obtain <p>Set the automatic backup cycle. It can be set to Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, or Sunday. This parameter cannot be modified for the moment.</p>
 * @method void setWeekDays(array $WeekDays) Set <p>Set the automatic backup cycle. It can be set to Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, or Sunday. This parameter cannot be modified for the moment.</p>
 * @method string getTimePeriod() Obtain <p>Backup time period. It can be set to every full hour. Format: 00:00-01:00, 01:00-02:00...... 23:00-00:00.</p>
 * @method void setTimePeriod(string $TimePeriod) Set <p>Backup time period. It can be set to every full hour. Format: 00:00-01:00, 01:00-02:00...... 23:00-00:00.</p>
 * @method integer getAutoBackupType() Obtain <p>Automatic backup type. Currently, it can only be configured as: 1, scheduled backup.</p>
 * @method void setAutoBackupType(integer $AutoBackupType) Set <p>Automatic backup type. Currently, it can only be configured as: 1, scheduled backup.</p>
 * @method integer getBackupStorageDays() Obtain <p>Number of days to save full backup files. Only support setting to 7, unit: days. For a longer period, please <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
 * @method void setBackupStorageDays(integer $BackupStorageDays) Set <p>Number of days to save full backup files. Only support setting to 7, unit: days. For a longer period, please <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
 */
class ModifyAutoBackupConfigRequest extends AbstractModel
{
    /**
     * @var string <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID in the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var array <p>Set the automatic backup cycle. It can be set to Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, or Sunday. This parameter cannot be modified for the moment.</p>
     */
    public $WeekDays;

    /**
     * @var string <p>Backup time period. It can be set to every full hour. Format: 00:00-01:00, 01:00-02:00...... 23:00-00:00.</p>
     */
    public $TimePeriod;

    /**
     * @var integer <p>Automatic backup type. Currently, it can only be configured as: 1, scheduled backup.</p>
     */
    public $AutoBackupType;

    /**
     * @var integer <p>Number of days to save full backup files. Only support setting to 7, unit: days. For a longer period, please <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
     */
    public $BackupStorageDays;

    /**
     * @param string $InstanceId <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID in the instance list.</p>
     * @param array $WeekDays <p>Set the automatic backup cycle. It can be set to Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, or Sunday. This parameter cannot be modified for the moment.</p>
     * @param string $TimePeriod <p>Backup time period. It can be set to every full hour. Format: 00:00-01:00, 01:00-02:00...... 23:00-00:00.</p>
     * @param integer $AutoBackupType <p>Automatic backup type. Currently, it can only be configured as: 1, scheduled backup.</p>
     * @param integer $BackupStorageDays <p>Number of days to save full backup files. Only support setting to 7, unit: days. For a longer period, please <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
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

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("TimePeriod",$param) and $param["TimePeriod"] !== null) {
            $this->TimePeriod = $param["TimePeriod"];
        }

        if (array_key_exists("AutoBackupType",$param) and $param["AutoBackupType"] !== null) {
            $this->AutoBackupType = $param["AutoBackupType"];
        }

        if (array_key_exists("BackupStorageDays",$param) and $param["BackupStorageDays"] !== null) {
            $this->BackupStorageDays = $param["BackupStorageDays"];
        }
    }
}
