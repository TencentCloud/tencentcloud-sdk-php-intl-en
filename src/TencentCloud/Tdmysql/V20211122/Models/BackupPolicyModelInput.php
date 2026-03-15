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
 * Modify backup policy object.
 *
 * @method string getBackupEndTime() Obtain <P>Backup end time.</p>
 * @method void setBackupEndTime(string $BackupEndTime) Set <P>Backup end time.</p>
 * @method string getBackupMethod() Obtain <P>Backup method: physical physical backup, snapshot snapshot backup</p>
 * @method void setBackupMethod(string $BackupMethod) Set <P>Backup method: physical physical backup, snapshot snapshot backup</p>
 * @method string getBackupStartTime() Obtain <P>Backup start time</p>
 * @method void setBackupStartTime(string $BackupStartTime) Set <P>Backup start time</p>
 * @method integer getEnableFull() Obtain <P>Whether full backup is enabled</p>
 * @method void setEnableFull(integer $EnableFull) Set <P>Whether full backup is enabled</p>
 * @method integer getEnableLog() Obtain <P>Whether to enable log backup</p>
 * @method void setEnableLog(integer $EnableLog) Set <P>Whether to enable log backup</p>
 * @method integer getFullRetentionPeriod() Obtain <P>Full backup retention time can currently only be set to 7 days.</p>
 * @method void setFullRetentionPeriod(integer $FullRetentionPeriod) Set <P>Full backup retention time can currently only be set to 7 days.</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method integer getLogRetentionPeriod() Obtain <P>Log retention days. currently, can only set retention to 7 days.</p>
 * @method void setLogRetentionPeriod(integer $LogRetentionPeriod) Set <P>Log retention days. currently, can only set retention to 7 days.</p>
 * @method string getPeriodTime() Obtain <P>Days of the week to perform backup.</p>
 * @method void setPeriodTime(string $PeriodTime) Set <P>Days of the week to perform backup.</p>
 * @method string getStorageType() Obtain <p>Storage type: COS, SNAPSHOT</p>valid values: <ul><li> COS: COS storage</li><li> SNAPSHOT: cloud disk SNAPSHOT</li></ul>
 * @method void setStorageType(string $StorageType) Set <p>Storage type: COS, SNAPSHOT</p>valid values: <ul><li> COS: COS storage</li><li> SNAPSHOT: cloud disk SNAPSHOT</li></ul>
 */
class BackupPolicyModelInput extends AbstractModel
{
    /**
     * @var string <P>Backup end time.</p>
     */
    public $BackupEndTime;

    /**
     * @var string <P>Backup method: physical physical backup, snapshot snapshot backup</p>
     */
    public $BackupMethod;

    /**
     * @var string <P>Backup start time</p>
     */
    public $BackupStartTime;

    /**
     * @var integer <P>Whether full backup is enabled</p>
     */
    public $EnableFull;

    /**
     * @var integer <P>Whether to enable log backup</p>
     */
    public $EnableLog;

    /**
     * @var integer <P>Full backup retention time can currently only be set to 7 days.</p>
     */
    public $FullRetentionPeriod;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var integer <P>Log retention days. currently, can only set retention to 7 days.</p>
     */
    public $LogRetentionPeriod;

    /**
     * @var string <P>Days of the week to perform backup.</p>
     */
    public $PeriodTime;

    /**
     * @var string <p>Storage type: COS, SNAPSHOT</p>valid values: <ul><li> COS: COS storage</li><li> SNAPSHOT: cloud disk SNAPSHOT</li></ul>
     */
    public $StorageType;

    /**
     * @param string $BackupEndTime <P>Backup end time.</p>
     * @param string $BackupMethod <P>Backup method: physical physical backup, snapshot snapshot backup</p>
     * @param string $BackupStartTime <P>Backup start time</p>
     * @param integer $EnableFull <P>Whether full backup is enabled</p>
     * @param integer $EnableLog <P>Whether to enable log backup</p>
     * @param integer $FullRetentionPeriod <P>Full backup retention time can currently only be set to 7 days.</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param integer $LogRetentionPeriod <P>Log retention days. currently, can only set retention to 7 days.</p>
     * @param string $PeriodTime <P>Days of the week to perform backup.</p>
     * @param string $StorageType <p>Storage type: COS, SNAPSHOT</p>valid values: <ul><li> COS: COS storage</li><li> SNAPSHOT: cloud disk SNAPSHOT</li></ul>
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

        if (array_key_exists("EnableFull",$param) and $param["EnableFull"] !== null) {
            $this->EnableFull = $param["EnableFull"];
        }

        if (array_key_exists("EnableLog",$param) and $param["EnableLog"] !== null) {
            $this->EnableLog = $param["EnableLog"];
        }

        if (array_key_exists("FullRetentionPeriod",$param) and $param["FullRetentionPeriod"] !== null) {
            $this->FullRetentionPeriod = $param["FullRetentionPeriod"];
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

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
