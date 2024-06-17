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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupPlan request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID
 * @method string getMinBackupStartTime() Obtain The earliest time to start a backup
 * @method void setMinBackupStartTime(string $MinBackupStartTime) Set The earliest time to start a backup
 * @method string getMaxBackupStartTime() Obtain The latest time to start a backup
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) Set The latest time to start a backup
 * @method integer getBaseBackupRetentionPeriod() Obtain Backup retention period in days. Value range: 7-1830
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) Set Backup retention period in days. Value range: 7-1830
 * @method array getBackupPeriod() Obtain Backup cycle, which means on which days each week the instance will be backed up. The parameter value should be the lowercase names of the days of the week.
 * @method void setBackupPeriod(array $BackupPeriod) Set Backup cycle, which means on which days each week the instance will be backed up. The parameter value should be the lowercase names of the days of the week.
 * @method integer getLogBackupRetentionPeriod() Obtain Instance log backup retention duration, with a value range of 7-1830 and a unit of day
 * @method void setLogBackupRetentionPeriod(integer $LogBackupRetentionPeriod) Set Instance log backup retention duration, with a value range of 7-1830 and a unit of day
 */
class ModifyBackupPlanRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $DBInstanceId;

    /**
     * @var string The earliest time to start a backup
     */
    public $MinBackupStartTime;

    /**
     * @var string The latest time to start a backup
     */
    public $MaxBackupStartTime;

    /**
     * @var integer Backup retention period in days. Value range: 7-1830
     */
    public $BaseBackupRetentionPeriod;

    /**
     * @var array Backup cycle, which means on which days each week the instance will be backed up. The parameter value should be the lowercase names of the days of the week.
     */
    public $BackupPeriod;

    /**
     * @var integer Instance log backup retention duration, with a value range of 7-1830 and a unit of day
     */
    public $LogBackupRetentionPeriod;

    /**
     * @param string $DBInstanceId Instance ID
     * @param string $MinBackupStartTime The earliest time to start a backup
     * @param string $MaxBackupStartTime The latest time to start a backup
     * @param integer $BaseBackupRetentionPeriod Backup retention period in days. Value range: 7-1830
     * @param array $BackupPeriod Backup cycle, which means on which days each week the instance will be backed up. The parameter value should be the lowercase names of the days of the week.
     * @param integer $LogBackupRetentionPeriod Instance log backup retention duration, with a value range of 7-1830 and a unit of day
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("MinBackupStartTime",$param) and $param["MinBackupStartTime"] !== null) {
            $this->MinBackupStartTime = $param["MinBackupStartTime"];
        }

        if (array_key_exists("MaxBackupStartTime",$param) and $param["MaxBackupStartTime"] !== null) {
            $this->MaxBackupStartTime = $param["MaxBackupStartTime"];
        }

        if (array_key_exists("BaseBackupRetentionPeriod",$param) and $param["BaseBackupRetentionPeriod"] !== null) {
            $this->BaseBackupRetentionPeriod = $param["BaseBackupRetentionPeriod"];
        }

        if (array_key_exists("BackupPeriod",$param) and $param["BackupPeriod"] !== null) {
            $this->BackupPeriod = $param["BackupPeriod"];
        }

        if (array_key_exists("LogBackupRetentionPeriod",$param) and $param["LogBackupRetentionPeriod"] !== null) {
            $this->LogBackupRetentionPeriod = $param["LogBackupRetentionPeriod"];
        }
    }
}
