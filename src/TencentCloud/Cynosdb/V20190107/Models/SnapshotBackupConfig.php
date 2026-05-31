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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Snapshot backup settings.
 *
 * @method boolean getBackupCustomAutoTime() Obtain System automation time.
 * @method void setBackupCustomAutoTime(boolean $BackupCustomAutoTime) Set System automation time.
 * @method integer getBackupTimeBeg() Obtain Indicates the full backup start time. value range: [0-24*3600]. for example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.
 * @method void setBackupTimeBeg(integer $BackupTimeBeg) Set Indicates the full backup start time. value range: [0-24*3600]. for example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.
 * @method integer getBackupTimeEnd() Obtain Indicates the full backup end time. value range: [0-24*3600]. for example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.
 * @method void setBackupTimeEnd(integer $BackupTimeEnd) Set Indicates the full backup end time. value range: [0-24*3600]. for example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.
 * @method array getBackupWeekDays() Obtain This parameter currently does not support modification and no need to specify. backup frequency is an array of length 7, corresponding to the backup method from sunday to saturday, full for full backup and increment for incremental backup.
 * @method void setBackupWeekDays(array $BackupWeekDays) Set This parameter currently does not support modification and no need to specify. backup frequency is an array of length 7, corresponding to the backup method from sunday to saturday, full for full backup and increment for incremental backup.
 * @method integer getBackupIntervalTime() Obtain Interval.
 * @method void setBackupIntervalTime(integer $BackupIntervalTime) Set Interval.
 * @method integer getReserveDuration() Obtain Indicates the backup retention period in seconds. data will be cleaned up longer than this time. 7 days means 3600247=604800. the maximum is 158112000.
 * @method void setReserveDuration(integer $ReserveDuration) Set Indicates the backup retention period in seconds. data will be cleaned up longer than this time. 7 days means 3600247=604800. the maximum is 158112000.
 * @method string getBackupTriggerStrategy() Obtain Automatic data backup trigger policy, periodically: automatic periodic backup, frequent: high-frequency backup
 * @method void setBackupTriggerStrategy(string $BackupTriggerStrategy) Set Automatic data backup trigger policy, periodically: automatic periodic backup, frequent: high-frequency backup
 * @method array getAutoCopyVaults() Obtain Safe info
 * @method void setAutoCopyVaults(array $AutoCopyVaults) Set Safe info
 */
class SnapshotBackupConfig extends AbstractModel
{
    /**
     * @var boolean System automation time.
     */
    public $BackupCustomAutoTime;

    /**
     * @var integer Indicates the full backup start time. value range: [0-24*3600]. for example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.
     */
    public $BackupTimeBeg;

    /**
     * @var integer Indicates the full backup end time. value range: [0-24*3600]. for example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.
     */
    public $BackupTimeEnd;

    /**
     * @var array This parameter currently does not support modification and no need to specify. backup frequency is an array of length 7, corresponding to the backup method from sunday to saturday, full for full backup and increment for incremental backup.
     */
    public $BackupWeekDays;

    /**
     * @var integer Interval.
     */
    public $BackupIntervalTime;

    /**
     * @var integer Indicates the backup retention period in seconds. data will be cleaned up longer than this time. 7 days means 3600247=604800. the maximum is 158112000.
     */
    public $ReserveDuration;

    /**
     * @var string Automatic data backup trigger policy, periodically: automatic periodic backup, frequent: high-frequency backup
     */
    public $BackupTriggerStrategy;

    /**
     * @var array Safe info
     */
    public $AutoCopyVaults;

    /**
     * @param boolean $BackupCustomAutoTime System automation time.
     * @param integer $BackupTimeBeg Indicates the full backup start time. value range: [0-24*3600]. for example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.
     * @param integer $BackupTimeEnd Indicates the full backup end time. value range: [0-24*3600]. for example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.
     * @param array $BackupWeekDays This parameter currently does not support modification and no need to specify. backup frequency is an array of length 7, corresponding to the backup method from sunday to saturday, full for full backup and increment for incremental backup.
     * @param integer $BackupIntervalTime Interval.
     * @param integer $ReserveDuration Indicates the backup retention period in seconds. data will be cleaned up longer than this time. 7 days means 3600247=604800. the maximum is 158112000.
     * @param string $BackupTriggerStrategy Automatic data backup trigger policy, periodically: automatic periodic backup, frequent: high-frequency backup
     * @param array $AutoCopyVaults Safe info
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
        if (array_key_exists("BackupCustomAutoTime",$param) and $param["BackupCustomAutoTime"] !== null) {
            $this->BackupCustomAutoTime = $param["BackupCustomAutoTime"];
        }

        if (array_key_exists("BackupTimeBeg",$param) and $param["BackupTimeBeg"] !== null) {
            $this->BackupTimeBeg = $param["BackupTimeBeg"];
        }

        if (array_key_exists("BackupTimeEnd",$param) and $param["BackupTimeEnd"] !== null) {
            $this->BackupTimeEnd = $param["BackupTimeEnd"];
        }

        if (array_key_exists("BackupWeekDays",$param) and $param["BackupWeekDays"] !== null) {
            $this->BackupWeekDays = $param["BackupWeekDays"];
        }

        if (array_key_exists("BackupIntervalTime",$param) and $param["BackupIntervalTime"] !== null) {
            $this->BackupIntervalTime = $param["BackupIntervalTime"];
        }

        if (array_key_exists("ReserveDuration",$param) and $param["ReserveDuration"] !== null) {
            $this->ReserveDuration = $param["ReserveDuration"];
        }

        if (array_key_exists("BackupTriggerStrategy",$param) and $param["BackupTriggerStrategy"] !== null) {
            $this->BackupTriggerStrategy = $param["BackupTriggerStrategy"];
        }

        if (array_key_exists("AutoCopyVaults",$param) and $param["AutoCopyVaults"] !== null) {
            $this->AutoCopyVaults = [];
            foreach ($param["AutoCopyVaults"] as $key => $value){
                $obj = new CreateBackupVaultItem();
                $obj->deserialize($value);
                array_push($this->AutoCopyVaults, $obj);
            }
        }
    }
}
