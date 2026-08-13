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
 * Backup setting.
 *
 * @method boolean getBackupCustomAutoTime() Obtain <p>System automation time</p>
 * @method void setBackupCustomAutoTime(boolean $BackupCustomAutoTime) Set <p>System automation time</p>
 * @method integer getBackupTimeBeg() Obtain <p>Indicates the full backup start time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
 * @method void setBackupTimeBeg(integer $BackupTimeBeg) Set <p>Indicates the full backup start time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
 * @method integer getBackupTimeEnd() Obtain <p>Indicates the full backup end time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
 * @method void setBackupTimeEnd(integer $BackupTimeEnd) Set <p>Indicates the full backup end time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
 * @method array getBackupWeekDays() Obtain <p>Currently this parameter cannot be modified and no need to specify. Backup frequency is an array of length 7, corresponding to the backup method from Sunday to Saturday, full-full backup, increment-incremental backup.</p>
 * @method void setBackupWeekDays(array $BackupWeekDays) Set <p>Currently this parameter cannot be modified and no need to specify. Backup frequency is an array of length 7, corresponding to the backup method from Sunday to Saturday, full-full backup, increment-incremental backup.</p>
 * @method integer getBackupIntervalTime() Obtain <p>Interval</p>
 * @method void setBackupIntervalTime(integer $BackupIntervalTime) Set <p>Interval</p>
 * @method integer getReserveDuration() Obtain <p>Indicates the backup retention period in seconds. Backups will be cleaned up longer than this time. 7 days means 3600*24*7=604800. The maximum value is 158112000.</p>
 * @method void setReserveDuration(integer $ReserveDuration) Set <p>Indicates the backup retention period in seconds. Backups will be cleaned up longer than this time. 7 days means 3600*24*7=604800. The maximum value is 158112000.</p>
 * @method string getCrossRegionsEnable() Obtain <p>Cross-region backup enabled<br>yes-Enable<br>no-Disable</p>
 * @method void setCrossRegionsEnable(string $CrossRegionsEnable) Set <p>Cross-region backup enabled<br>yes-Enable<br>no-Disable</p>
 * @method array getCrossRegions() Obtain <p>Cross-regional backup region</p>
 * @method void setCrossRegions(array $CrossRegions) Set <p>Cross-regional backup region</p>
 * @method integer getCrossRegionSaveDays() Obtain <p>Cross-region backup retention period</p><p>Unit: Day</p>
 * @method void setCrossRegionSaveDays(integer $CrossRegionSaveDays) Set <p>Cross-region backup retention period</p><p>Unit: Day</p>
 * @method string getBackupTriggerStrategy() Obtain <p>Automatic data backup trigger policy, periodically: automatic periodic backup, frequent: high frequency backup</p>
 * @method void setBackupTriggerStrategy(string $BackupTriggerStrategy) Set <p>Automatic data backup trigger policy, periodically: automatic periodic backup, frequent: high frequency backup</p>
 * @method array getAutoCopyVaults() Obtain <p>Backup delivery relationship</p>
 * @method void setAutoCopyVaults(array $AutoCopyVaults) Set <p>Backup delivery relationship</p>
 */
class BackupConfigInfo extends AbstractModel
{
    /**
     * @var boolean <p>System automation time</p>
     */
    public $BackupCustomAutoTime;

    /**
     * @var integer <p>Indicates the full backup start time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
     */
    public $BackupTimeBeg;

    /**
     * @var integer <p>Indicates the full backup end time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
     */
    public $BackupTimeEnd;

    /**
     * @var array <p>Currently this parameter cannot be modified and no need to specify. Backup frequency is an array of length 7, corresponding to the backup method from Sunday to Saturday, full-full backup, increment-incremental backup.</p>
     */
    public $BackupWeekDays;

    /**
     * @var integer <p>Interval</p>
     */
    public $BackupIntervalTime;

    /**
     * @var integer <p>Indicates the backup retention period in seconds. Backups will be cleaned up longer than this time. 7 days means 3600*24*7=604800. The maximum value is 158112000.</p>
     */
    public $ReserveDuration;

    /**
     * @var string <p>Cross-region backup enabled<br>yes-Enable<br>no-Disable</p>
     */
    public $CrossRegionsEnable;

    /**
     * @var array <p>Cross-regional backup region</p>
     */
    public $CrossRegions;

    /**
     * @var integer <p>Cross-region backup retention period</p><p>Unit: Day</p>
     */
    public $CrossRegionSaveDays;

    /**
     * @var string <p>Automatic data backup trigger policy, periodically: automatic periodic backup, frequent: high frequency backup</p>
     */
    public $BackupTriggerStrategy;

    /**
     * @var array <p>Backup delivery relationship</p>
     */
    public $AutoCopyVaults;

    /**
     * @param boolean $BackupCustomAutoTime <p>System automation time</p>
     * @param integer $BackupTimeBeg <p>Indicates the full backup start time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
     * @param integer $BackupTimeEnd <p>Indicates the full backup end time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
     * @param array $BackupWeekDays <p>Currently this parameter cannot be modified and no need to specify. Backup frequency is an array of length 7, corresponding to the backup method from Sunday to Saturday, full-full backup, increment-incremental backup.</p>
     * @param integer $BackupIntervalTime <p>Interval</p>
     * @param integer $ReserveDuration <p>Indicates the backup retention period in seconds. Backups will be cleaned up longer than this time. 7 days means 3600*24*7=604800. The maximum value is 158112000.</p>
     * @param string $CrossRegionsEnable <p>Cross-region backup enabled<br>yes-Enable<br>no-Disable</p>
     * @param array $CrossRegions <p>Cross-regional backup region</p>
     * @param integer $CrossRegionSaveDays <p>Cross-region backup retention period</p><p>Unit: Day</p>
     * @param string $BackupTriggerStrategy <p>Automatic data backup trigger policy, periodically: automatic periodic backup, frequent: high frequency backup</p>
     * @param array $AutoCopyVaults <p>Backup delivery relationship</p>
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

        if (array_key_exists("CrossRegionsEnable",$param) and $param["CrossRegionsEnable"] !== null) {
            $this->CrossRegionsEnable = $param["CrossRegionsEnable"];
        }

        if (array_key_exists("CrossRegions",$param) and $param["CrossRegions"] !== null) {
            $this->CrossRegions = $param["CrossRegions"];
        }

        if (array_key_exists("CrossRegionSaveDays",$param) and $param["CrossRegionSaveDays"] !== null) {
            $this->CrossRegionSaveDays = $param["CrossRegionSaveDays"];
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
