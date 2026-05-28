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
 * Backup policy object
 *
 * @method string getBackupEndTime() Obtain <p>Backup end time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupEndTime(string $BackupEndTime) Set <p>Backup end time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupMethod() Obtain <p>Backup method</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupMethod(string $BackupMethod) Set <p>Backup method</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupStartTime() Obtain <p>Backup start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupStartTime(string $BackupStartTime) Set <p>Backup start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDBType() Obtain <p>Engine type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDBType(string $DBType) Set <p>Engine type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDBVersion() Obtain <p>Engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDBVersion(string $DBVersion) Set <p>Engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnableFull() Obtain <p>Whether full backup is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableFull(integer $EnableFull) Set <p>Whether full backup is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnableLog() Obtain <p>Whether to enable log backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableLog(integer $EnableLog) Set <p>Whether to enable log backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpectedNextBackupPeriod() Obtain <p>Expected next backup time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpectedNextBackupPeriod(string $ExpectedNextBackupPeriod) Set <p>Expected next backup time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFullRetentionPeriod() Obtain <p>Full backup retention time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullRetentionPeriod(integer $FullRetentionPeriod) Set <p>Full backup retention time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getID() Obtain <p>Policy ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setID(integer $ID) Set <p>Policy ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLogRetentionPeriod() Obtain <p>Log retention days</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogRetentionPeriod(integer $LogRetentionPeriod) Set <p>Log retention days</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPeriodTime() Obtain <p>Days of the week to perform backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeriodTime(string $PeriodTime) Set <p>Days of the week to perform backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPeriodType() Obtain <p>Backup cycle type 0:Weekly</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeriodType(integer $PeriodType) Set <p>Backup cycle type 0:Weekly</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackupPolicyModelOutPut extends AbstractModel
{
    /**
     * @var string <p>Backup end time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupEndTime;

    /**
     * @var string <p>Backup method</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupMethod;

    /**
     * @var string <p>Backup start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupStartTime;

    /**
     * @var string <p>Engine type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DBType;

    /**
     * @var string <p>Engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DBVersion;

    /**
     * @var integer <p>Whether full backup is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableFull;

    /**
     * @var integer <p>Whether to enable log backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableLog;

    /**
     * @var string <p>Expected next backup time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpectedNextBackupPeriod;

    /**
     * @var integer <p>Full backup retention time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullRetentionPeriod;

    /**
     * @var integer <p>Policy ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ID;

    /**
     * @var string <p>Instance ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var integer <p>Log retention days</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogRetentionPeriod;

    /**
     * @var string <p>Days of the week to perform backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PeriodTime;

    /**
     * @var string <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer <p>Backup cycle type 0:Weekly</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PeriodType;

    /**
     * @param string $BackupEndTime <p>Backup end time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupMethod <p>Backup method</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupStartTime <p>Backup start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DBType <p>Engine type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DBVersion <p>Engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnableFull <p>Whether full backup is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnableLog <p>Whether to enable log backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpectedNextBackupPeriod <p>Expected next backup time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FullRetentionPeriod <p>Full backup retention time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ID <p>Policy ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId <p>Instance ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LogRetentionPeriod <p>Log retention days</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PeriodTime <p>Days of the week to perform backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PeriodType <p>Backup cycle type 0:Weekly</p>
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
        if (array_key_exists("BackupEndTime",$param) and $param["BackupEndTime"] !== null) {
            $this->BackupEndTime = $param["BackupEndTime"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupStartTime",$param) and $param["BackupStartTime"] !== null) {
            $this->BackupStartTime = $param["BackupStartTime"];
        }

        if (array_key_exists("DBType",$param) and $param["DBType"] !== null) {
            $this->DBType = $param["DBType"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("EnableFull",$param) and $param["EnableFull"] !== null) {
            $this->EnableFull = $param["EnableFull"];
        }

        if (array_key_exists("EnableLog",$param) and $param["EnableLog"] !== null) {
            $this->EnableLog = $param["EnableLog"];
        }

        if (array_key_exists("ExpectedNextBackupPeriod",$param) and $param["ExpectedNextBackupPeriod"] !== null) {
            $this->ExpectedNextBackupPeriod = $param["ExpectedNextBackupPeriod"];
        }

        if (array_key_exists("FullRetentionPeriod",$param) and $param["FullRetentionPeriod"] !== null) {
            $this->FullRetentionPeriod = $param["FullRetentionPeriod"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogRetentionPeriod",$param) and $param["LogRetentionPeriod"] !== null) {
            $this->LogRetentionPeriod = $param["LogRetentionPeriod"];
        }

        if (array_key_exists("PeriodTime",$param) and $param["PeriodTime"] !== null) {
            $this->PeriodTime = $param["PeriodTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }
    }
}
