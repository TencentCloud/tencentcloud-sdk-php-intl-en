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
 * Backup plan
 *
 * @method string getBackupPeriod() Obtain Backup cycle
 * @method void setBackupPeriod(string $BackupPeriod) Set Backup cycle
 * @method integer getBaseBackupRetentionPeriod() Obtain Data backup retention duration
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) Set Data backup retention duration
 * @method string getMinBackupStartTime() Obtain The earliest time to start a backup
 * @method void setMinBackupStartTime(string $MinBackupStartTime) Set The earliest time to start a backup
 * @method string getMaxBackupStartTime() Obtain The latest time to start a backup
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) Set The latest time to start a backup
 */
class BackupPlan extends AbstractModel
{
    /**
     * @var string Backup cycle
     */
    public $BackupPeriod;

    /**
     * @var integer Data backup retention duration
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
     * @param string $BackupPeriod Backup cycle
     * @param integer $BaseBackupRetentionPeriod Data backup retention duration
     * @param string $MinBackupStartTime The earliest time to start a backup
     * @param string $MaxBackupStartTime The latest time to start a backup
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
    }
}
