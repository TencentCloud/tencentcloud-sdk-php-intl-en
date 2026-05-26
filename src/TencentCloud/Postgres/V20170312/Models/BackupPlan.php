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
 * Backup plan
 *
 * @method string getBackupPeriod() Obtain Backup cycle
 * @method void setBackupPeriod(string $BackupPeriod) Set Backup cycle
 * @method integer getBaseBackupRetentionPeriod() Obtain Specifies the data backup retention duration in days.
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) Set Specifies the data backup retention duration in days.
 * @method string getMinBackupStartTime() Obtain The earliest time to start a backup
 * @method void setMinBackupStartTime(string $MinBackupStartTime) Set The earliest time to start a backup
 * @method string getMaxBackupStartTime() Obtain The latest time to start a backup
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) Set The latest time to start a backup
 * @method string getPlanId() Obtain Backup plan ID.
 * @method void setPlanId(string $PlanId) Set Backup plan ID.
 * @method string getPlanName() Obtain Specifies the custom name of the backup plan.
 * @method void setPlanName(string $PlanName) Set Specifies the custom name of the backup plan.
 * @method integer getLogBackupRetentionPeriod() Obtain Specifies the log backup retention period in days.
 * @method void setLogBackupRetentionPeriod(integer $LogBackupRetentionPeriod) Set Specifies the log backup retention period in days.
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method string getUpdatedTime() Obtain Last modification time.
 * @method void setUpdatedTime(string $UpdatedTime) Set Last modification time.
 * @method string getPlanType() Obtain Backup plan type. valid values: default (created by system), custom.
 * @method void setPlanType(string $PlanType) Set Backup plan type. valid values: default (created by system), custom.
 * @method string getBackupPeriodType() Obtain Backup cycle type. valid values: week, month.
 * @method void setBackupPeriodType(string $BackupPeriodType) Set Backup cycle type. valid values: week, month.
 */
class BackupPlan extends AbstractModel
{
    /**
     * @var string Backup cycle
     */
    public $BackupPeriod;

    /**
     * @var integer Specifies the data backup retention duration in days.
     */
    public $BaseBackupRetentionPeriod;

    /**
     * @var string The earliest time to start a backup
     */
    public $MinBackupStartTime;

    /**
     * @var string The latest time to start a backup
     */
    public $MaxBackupStartTime;

    /**
     * @var string Backup plan ID.
     */
    public $PlanId;

    /**
     * @var string Specifies the custom name of the backup plan.
     */
    public $PlanName;

    /**
     * @var integer Specifies the log backup retention period in days.
     */
    public $LogBackupRetentionPeriod;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var string Last modification time.
     */
    public $UpdatedTime;

    /**
     * @var string Backup plan type. valid values: default (created by system), custom.
     */
    public $PlanType;

    /**
     * @var string Backup cycle type. valid values: week, month.
     */
    public $BackupPeriodType;

    /**
     * @param string $BackupPeriod Backup cycle
     * @param integer $BaseBackupRetentionPeriod Specifies the data backup retention duration in days.
     * @param string $MinBackupStartTime The earliest time to start a backup
     * @param string $MaxBackupStartTime The latest time to start a backup
     * @param string $PlanId Backup plan ID.
     * @param string $PlanName Specifies the custom name of the backup plan.
     * @param integer $LogBackupRetentionPeriod Specifies the log backup retention period in days.
     * @param string $CreatedTime Creation time.
     * @param string $UpdatedTime Last modification time.
     * @param string $PlanType Backup plan type. valid values: default (created by system), custom.
     * @param string $BackupPeriodType Backup cycle type. valid values: week, month.
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
        if (array_key_exists("BackupPeriod",$param) and $param["BackupPeriod"] !== null) {
            $this->BackupPeriod = $param["BackupPeriod"];
        }

        if (array_key_exists("BaseBackupRetentionPeriod",$param) and $param["BaseBackupRetentionPeriod"] !== null) {
            $this->BaseBackupRetentionPeriod = $param["BaseBackupRetentionPeriod"];
        }

        if (array_key_exists("MinBackupStartTime",$param) and $param["MinBackupStartTime"] !== null) {
            $this->MinBackupStartTime = $param["MinBackupStartTime"];
        }

        if (array_key_exists("MaxBackupStartTime",$param) and $param["MaxBackupStartTime"] !== null) {
            $this->MaxBackupStartTime = $param["MaxBackupStartTime"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("LogBackupRetentionPeriod",$param) and $param["LogBackupRetentionPeriod"] !== null) {
            $this->LogBackupRetentionPeriod = $param["LogBackupRetentionPeriod"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("BackupPeriodType",$param) and $param["BackupPeriodType"] !== null) {
            $this->BackupPeriodType = $param["BackupPeriodType"];
        }
    }
}
