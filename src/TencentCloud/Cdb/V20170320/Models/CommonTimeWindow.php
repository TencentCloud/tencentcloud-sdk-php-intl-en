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
 * Common time window
 *
 * @method string getMonday() Obtain Time window on Monday in the format of 02:00-06:00
 * @method void setMonday(string $Monday) Set Time window on Monday in the format of 02:00-06:00
 * @method string getTuesday() Obtain Time window on Tuesday in the format of 02:00-06:00
 * @method void setTuesday(string $Tuesday) Set Time window on Tuesday in the format of 02:00-06:00
 * @method string getWednesday() Obtain Time window on Wednesday in the format of 02:00-06:00
 * @method void setWednesday(string $Wednesday) Set Time window on Wednesday in the format of 02:00-06:00
 * @method string getThursday() Obtain Time window on Thursday in the format of 02:00-06:00
 * @method void setThursday(string $Thursday) Set Time window on Thursday in the format of 02:00-06:00
 * @method string getFriday() Obtain Time window on Friday in the format of 02:00-06:00
 * @method void setFriday(string $Friday) Set Time window on Friday in the format of 02:00-06:00
 * @method string getSaturday() Obtain Time window on Saturday in the format of 02:00-06:00
 * @method void setSaturday(string $Saturday) Set Time window on Saturday in the format of 02:00-06:00
 * @method string getSunday() Obtain Time window on Sunday in the format of 02:00-06:00
 * @method void setSunday(string $Sunday) Set Time window on Sunday in the format of 02:00-06:00
 * @method string getBackupPeriodStrategy() Obtain Non-archive backup retention policy. Valid values: `weekly` (back up by week), monthly (back up by month), default value: `weekly`.
 * @method void setBackupPeriodStrategy(string $BackupPeriodStrategy) Set Non-archive backup retention policy. Valid values: `weekly` (back up by week), monthly (back up by month), default value: `weekly`.
 * @method array getDays() Obtain If `BackupPeriodStrategy` is `monthly`, you need to pass in the specific backup dates. The time interval between any two adjacent dates cannot exceed 2 days, for example, [1,4,7,9,11,14,17,19,22,25,28,30,31].
 * @method void setDays(array $Days) Set If `BackupPeriodStrategy` is `monthly`, you need to pass in the specific backup dates. The time interval between any two adjacent dates cannot exceed 2 days, for example, [1,4,7,9,11,14,17,19,22,25,28,30,31].
 * @method string getBackupPeriodTime() Obtain Backup time by month in the format of 02:00–06:00, which is required when `BackupPeriodStrategy` is `monthly`.
 * @method void setBackupPeriodTime(string $BackupPeriodTime) Set Backup time by month in the format of 02:00–06:00, which is required when `BackupPeriodStrategy` is `monthly`.
 */
class CommonTimeWindow extends AbstractModel
{
    /**
     * @var string Time window on Monday in the format of 02:00-06:00
     */
    public $Monday;

    /**
     * @var string Time window on Tuesday in the format of 02:00-06:00
     */
    public $Tuesday;

    /**
     * @var string Time window on Wednesday in the format of 02:00-06:00
     */
    public $Wednesday;

    /**
     * @var string Time window on Thursday in the format of 02:00-06:00
     */
    public $Thursday;

    /**
     * @var string Time window on Friday in the format of 02:00-06:00
     */
    public $Friday;

    /**
     * @var string Time window on Saturday in the format of 02:00-06:00
     */
    public $Saturday;

    /**
     * @var string Time window on Sunday in the format of 02:00-06:00
     */
    public $Sunday;

    /**
     * @var string Non-archive backup retention policy. Valid values: `weekly` (back up by week), monthly (back up by month), default value: `weekly`.
     */
    public $BackupPeriodStrategy;

    /**
     * @var array If `BackupPeriodStrategy` is `monthly`, you need to pass in the specific backup dates. The time interval between any two adjacent dates cannot exceed 2 days, for example, [1,4,7,9,11,14,17,19,22,25,28,30,31].
     */
    public $Days;

    /**
     * @var string Backup time by month in the format of 02:00–06:00, which is required when `BackupPeriodStrategy` is `monthly`.
     */
    public $BackupPeriodTime;

    /**
     * @param string $Monday Time window on Monday in the format of 02:00-06:00
     * @param string $Tuesday Time window on Tuesday in the format of 02:00-06:00
     * @param string $Wednesday Time window on Wednesday in the format of 02:00-06:00
     * @param string $Thursday Time window on Thursday in the format of 02:00-06:00
     * @param string $Friday Time window on Friday in the format of 02:00-06:00
     * @param string $Saturday Time window on Saturday in the format of 02:00-06:00
     * @param string $Sunday Time window on Sunday in the format of 02:00-06:00
     * @param string $BackupPeriodStrategy Non-archive backup retention policy. Valid values: `weekly` (back up by week), monthly (back up by month), default value: `weekly`.
     * @param array $Days If `BackupPeriodStrategy` is `monthly`, you need to pass in the specific backup dates. The time interval between any two adjacent dates cannot exceed 2 days, for example, [1,4,7,9,11,14,17,19,22,25,28,30,31].
     * @param string $BackupPeriodTime Backup time by month in the format of 02:00–06:00, which is required when `BackupPeriodStrategy` is `monthly`.
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
        if (array_key_exists("Monday",$param) and $param["Monday"] !== null) {
            $this->Monday = $param["Monday"];
        }

        if (array_key_exists("Tuesday",$param) and $param["Tuesday"] !== null) {
            $this->Tuesday = $param["Tuesday"];
        }

        if (array_key_exists("Wednesday",$param) and $param["Wednesday"] !== null) {
            $this->Wednesday = $param["Wednesday"];
        }

        if (array_key_exists("Thursday",$param) and $param["Thursday"] !== null) {
            $this->Thursday = $param["Thursday"];
        }

        if (array_key_exists("Friday",$param) and $param["Friday"] !== null) {
            $this->Friday = $param["Friday"];
        }

        if (array_key_exists("Saturday",$param) and $param["Saturday"] !== null) {
            $this->Saturday = $param["Saturday"];
        }

        if (array_key_exists("Sunday",$param) and $param["Sunday"] !== null) {
            $this->Sunday = $param["Sunday"];
        }

        if (array_key_exists("BackupPeriodStrategy",$param) and $param["BackupPeriodStrategy"] !== null) {
            $this->BackupPeriodStrategy = $param["BackupPeriodStrategy"];
        }

        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("BackupPeriodTime",$param) and $param["BackupPeriodTime"] !== null) {
            $this->BackupPeriodTime = $param["BackupPeriodTime"];
        }
    }
}
