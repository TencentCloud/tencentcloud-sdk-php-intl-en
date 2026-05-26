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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupPlan request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method string getMinBackupStartTime() Obtain The earliest time to start a backup
 * @method void setMinBackupStartTime(string $MinBackupStartTime) Set The earliest time to start a backup
 * @method string getMaxBackupStartTime() Obtain The latest time to start a backup
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) Set The latest time to start a backup
 * @method integer getBaseBackupRetentionPeriod() Obtain Backup retention period in days. Value range: 7-1830
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) Set Backup retention period in days. Value range: 7-1830
 * @method array getBackupPeriod() Obtain Instance backup period. if by week, format is lowercase english word of week and set at least two days for backup. if by month, format is digits such as ["1","2"].
 * @method void setBackupPeriod(array $BackupPeriod) Set Instance backup period. if by week, format is lowercase english word of week and set at least two days for backup. if by month, format is digits such as ["1","2"].
 * @method integer getLogBackupRetentionPeriod() Obtain Instance log backup retention duration, with a value range of 7-1830 and a unit of day
 * @method void setLogBackupRetentionPeriod(integer $LogBackupRetentionPeriod) Set Instance log backup retention duration, with a value range of 7-1830 and a unit of day
 * @method string getPlanId() Obtain Backup plan ID. specifies which backup plan to modify. if left empty, the default backup plan will be modified.
 * @method void setPlanId(string $PlanId) Set Backup plan ID. specifies which backup plan to modify. if left empty, the default backup plan will be modified.
 * @method string getPlanName() Obtain Specifies the name of the backup plan to modify.
 * @method void setPlanName(string $PlanName) Set Specifies the name of the backup plan to modify.
 */
class ModifyBackupPlanRequest extends AbstractModel
{
    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
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
     * @var array Instance backup period. if by week, format is lowercase english word of week and set at least two days for backup. if by month, format is digits such as ["1","2"].
     */
    public $BackupPeriod;

    /**
     * @var integer Instance log backup retention duration, with a value range of 7-1830 and a unit of day
     */
    public $LogBackupRetentionPeriod;

    /**
     * @var string Backup plan ID. specifies which backup plan to modify. if left empty, the default backup plan will be modified.
     */
    public $PlanId;

    /**
     * @var string Specifies the name of the backup plan to modify.
     */
    public $PlanName;

    /**
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     * @param string $MinBackupStartTime The earliest time to start a backup
     * @param string $MaxBackupStartTime The latest time to start a backup
     * @param integer $BaseBackupRetentionPeriod Backup retention period in days. Value range: 7-1830
     * @param array $BackupPeriod Instance backup period. if by week, format is lowercase english word of week and set at least two days for backup. if by month, format is digits such as ["1","2"].
     * @param integer $LogBackupRetentionPeriod Instance log backup retention duration, with a value range of 7-1830 and a unit of day
     * @param string $PlanId Backup plan ID. specifies which backup plan to modify. if left empty, the default backup plan will be modified.
     * @param string $PlanName Specifies the name of the backup plan to modify.
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

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }
    }
}
