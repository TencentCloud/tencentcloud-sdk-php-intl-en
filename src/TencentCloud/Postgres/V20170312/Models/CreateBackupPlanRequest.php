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
 * CreateBackupPlan request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method string getPlanName() Obtain Specifies the name of the backup plan.
 * @method void setPlanName(string $PlanName) Set Specifies the name of the backup plan.
 * @method string getBackupPeriodType() Obtain Specifies the schedule type of the backup created. currently only support month.
 * @method void setBackupPeriodType(string $BackupPeriodType) Set Specifies the schedule type of the backup created. currently only support month.
 * @method array getBackupPeriod() Obtain Backup date. example: enable backup on the 2nd of every month.
 * @method void setBackupPeriod(array $BackupPeriod) Set Backup date. example: enable backup on the 2nd of every month.
 * @method string getMinBackupStartTime() Obtain Specifies the backup start time. if not passed, it follows the default backup plan.
 * @method void setMinBackupStartTime(string $MinBackupStartTime) Set Specifies the backup start time. if not passed, it follows the default backup plan.
 * @method string getMaxBackupStartTime() Obtain Backup end time. follows the default plan if not specified.
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) Set Backup end time. follows the default plan if not specified.
 * @method integer getBaseBackupRetentionPeriod() Obtain Specifies the data backup retention duration in days. value range: [0,30000).
BackupPeriodType defaults to 7 when set to week and 31 when set to month.
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) Set Specifies the data backup retention duration in days. value range: [0,30000).
BackupPeriodType defaults to 7 when set to week and 31 when set to month.
 */
class CreateBackupPlanRequest extends AbstractModel
{
    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     */
    public $DBInstanceId;

    /**
     * @var string Specifies the name of the backup plan.
     */
    public $PlanName;

    /**
     * @var string Specifies the schedule type of the backup created. currently only support month.
     */
    public $BackupPeriodType;

    /**
     * @var array Backup date. example: enable backup on the 2nd of every month.
     */
    public $BackupPeriod;

    /**
     * @var string Specifies the backup start time. if not passed, it follows the default backup plan.
     */
    public $MinBackupStartTime;

    /**
     * @var string Backup end time. follows the default plan if not specified.
     */
    public $MaxBackupStartTime;

    /**
     * @var integer Specifies the data backup retention duration in days. value range: [0,30000).
BackupPeriodType defaults to 7 when set to week and 31 when set to month.
     */
    public $BaseBackupRetentionPeriod;

    /**
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     * @param string $PlanName Specifies the name of the backup plan.
     * @param string $BackupPeriodType Specifies the schedule type of the backup created. currently only support month.
     * @param array $BackupPeriod Backup date. example: enable backup on the 2nd of every month.
     * @param string $MinBackupStartTime Specifies the backup start time. if not passed, it follows the default backup plan.
     * @param string $MaxBackupStartTime Backup end time. follows the default plan if not specified.
     * @param integer $BaseBackupRetentionPeriod Specifies the data backup retention duration in days. value range: [0,30000).
BackupPeriodType defaults to 7 when set to week and 31 when set to month.
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

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("BackupPeriodType",$param) and $param["BackupPeriodType"] !== null) {
            $this->BackupPeriodType = $param["BackupPeriodType"];
        }

        if (array_key_exists("BackupPeriod",$param) and $param["BackupPeriod"] !== null) {
            $this->BackupPeriod = $param["BackupPeriod"];
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
    }
}
