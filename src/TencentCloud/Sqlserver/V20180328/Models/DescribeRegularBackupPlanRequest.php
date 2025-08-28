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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegularBackupPlan request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getRegularBackupSaveDays() Obtain Scheduled backup retention days, in the range of [90 - 3650]. The default value is 365.
 * @method void setRegularBackupSaveDays(integer $RegularBackupSaveDays) Set Scheduled backup retention days, in the range of [90 - 3650]. The default value is 365.
 * @method string getRegularBackupStrategy() Obtain Scheduled backup policy. years - annually; quarters - quarterly; months - monthly. The default value is months.
 * @method void setRegularBackupStrategy(string $RegularBackupStrategy) Set Scheduled backup policy. years - annually; quarters - quarterly; months - monthly. The default value is months.
 * @method integer getRegularBackupCounts() Obtain Number of retained scheduled backups. The default value is 1.
 * @method void setRegularBackupCounts(integer $RegularBackupCounts) Set Number of retained scheduled backups. The default value is 1.
 * @method string getRegularBackupStartTime() Obtain Scheduled backup start date, in the format of YYYY-MM-DD. The current date is used by default.
 * @method void setRegularBackupStartTime(string $RegularBackupStartTime) Set Scheduled backup start date, in the format of YYYY-MM-DD. The current date is used by default.
 * @method array getBackupCycle() Obtain Regular backup cycle.
 * @method void setBackupCycle(array $BackupCycle) Set Regular backup cycle.
 */
class DescribeRegularBackupPlanRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Scheduled backup retention days, in the range of [90 - 3650]. The default value is 365.
     */
    public $RegularBackupSaveDays;

    /**
     * @var string Scheduled backup policy. years - annually; quarters - quarterly; months - monthly. The default value is months.
     */
    public $RegularBackupStrategy;

    /**
     * @var integer Number of retained scheduled backups. The default value is 1.
     */
    public $RegularBackupCounts;

    /**
     * @var string Scheduled backup start date, in the format of YYYY-MM-DD. The current date is used by default.
     */
    public $RegularBackupStartTime;

    /**
     * @var array Regular backup cycle.
     */
    public $BackupCycle;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $RegularBackupSaveDays Scheduled backup retention days, in the range of [90 - 3650]. The default value is 365.
     * @param string $RegularBackupStrategy Scheduled backup policy. years - annually; quarters - quarterly; months - monthly. The default value is months.
     * @param integer $RegularBackupCounts Number of retained scheduled backups. The default value is 1.
     * @param string $RegularBackupStartTime Scheduled backup start date, in the format of YYYY-MM-DD. The current date is used by default.
     * @param array $BackupCycle Regular backup cycle.
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

        if (array_key_exists("RegularBackupSaveDays",$param) and $param["RegularBackupSaveDays"] !== null) {
            $this->RegularBackupSaveDays = $param["RegularBackupSaveDays"];
        }

        if (array_key_exists("RegularBackupStrategy",$param) and $param["RegularBackupStrategy"] !== null) {
            $this->RegularBackupStrategy = $param["RegularBackupStrategy"];
        }

        if (array_key_exists("RegularBackupCounts",$param) and $param["RegularBackupCounts"] !== null) {
            $this->RegularBackupCounts = $param["RegularBackupCounts"];
        }

        if (array_key_exists("RegularBackupStartTime",$param) and $param["RegularBackupStartTime"] !== null) {
            $this->RegularBackupStartTime = $param["RegularBackupStartTime"];
        }

        if (array_key_exists("BackupCycle",$param) and $param["BackupCycle"] !== null) {
            $this->BackupCycle = $param["BackupCycle"];
        }
    }
}
