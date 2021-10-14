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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupStrategy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getBackupType() Obtain Backup mode, which supports daily backup only. Valid value: daily.
 * @method void setBackupType(string $BackupType) Set Backup mode, which supports daily backup only. Valid value: daily.
 * @method integer getBackupTime() Obtain Backup time. Value range: an integer from 0 to 23.
 * @method void setBackupTime(integer $BackupTime) Set Backup time. Value range: an integer from 0 to 23.
 * @method integer getBackupDay() Obtain Backup interval in days when the `BackupType` is `daily`. Valid value: 1.
 * @method void setBackupDay(integer $BackupDay) Set Backup interval in days when the `BackupType` is `daily`. Valid value: 1.
 * @method string getBackupModel() Obtain Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node), `slave_no_pkg` (do not archive the backup files of the replica node). Backup files of the replica node are supported only when Always On disaster recovery is enabled.
 * @method void setBackupModel(string $BackupModel) Set Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node), `slave_no_pkg` (do not archive the backup files of the replica node). Backup files of the replica node are supported only when Always On disaster recovery is enabled.
 */
class ModifyBackupStrategyRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Backup mode, which supports daily backup only. Valid value: daily.
     */
    public $BackupType;

    /**
     * @var integer Backup time. Value range: an integer from 0 to 23.
     */
    public $BackupTime;

    /**
     * @var integer Backup interval in days when the `BackupType` is `daily`. Valid value: 1.
     */
    public $BackupDay;

    /**
     * @var string Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node), `slave_no_pkg` (do not archive the backup files of the replica node). Backup files of the replica node are supported only when Always On disaster recovery is enabled.
     */
    public $BackupModel;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $BackupType Backup mode, which supports daily backup only. Valid value: daily.
     * @param integer $BackupTime Backup time. Value range: an integer from 0 to 23.
     * @param integer $BackupDay Backup interval in days when the `BackupType` is `daily`. Valid value: 1.
     * @param string $BackupModel Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node), `slave_no_pkg` (do not archive the backup files of the replica node). Backup files of the replica node are supported only when Always On disaster recovery is enabled.
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

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("BackupDay",$param) and $param["BackupDay"] !== null) {
            $this->BackupDay = $param["BackupDay"];
        }

        if (array_key_exists("BackupModel",$param) and $param["BackupModel"] !== null) {
            $this->BackupModel = $param["BackupModel"];
        }
    }
}
