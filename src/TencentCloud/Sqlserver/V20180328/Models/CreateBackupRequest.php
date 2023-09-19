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
 * CreateBackup request structure.
 *
 * @method integer getStrategy() Obtain Backup policy (0: instance backup, 1: multi-database backup)
 * @method void setStrategy(integer $Strategy) Set Backup policy (0: instance backup, 1: multi-database backup)
 * @method array getDBNames() Obtain List of names of databases to be backed up (required only for multi-database backup)
 * @method void setDBNames(array $DBNames) Set List of names of databases to be backed up (required only for multi-database backup)
 * @method string getInstanceId() Obtain (Required) Instance ID in the format of mssql-i1z41iwd
 * @method void setInstanceId(string $InstanceId) Set (Required) Instance ID in the format of mssql-i1z41iwd
 * @method string getBackupName() Obtain Backup name. If this parameter is left empty, a backup name in the format of "[Instance ID]_[Backup start timestamp]" will be automatically generated.
 * @method void setBackupName(string $BackupName) Set Backup name. If this parameter is left empty, a backup name in the format of "[Instance ID]_[Backup start timestamp]" will be automatically generated.
 * @method integer getStorageStrategy() Obtain 
 * @method void setStorageStrategy(integer $StorageStrategy) Set 
 */
class CreateBackupRequest extends AbstractModel
{
    /**
     * @var integer Backup policy (0: instance backup, 1: multi-database backup)
     */
    public $Strategy;

    /**
     * @var array List of names of databases to be backed up (required only for multi-database backup)
     */
    public $DBNames;

    /**
     * @var string (Required) Instance ID in the format of mssql-i1z41iwd
     */
    public $InstanceId;

    /**
     * @var string Backup name. If this parameter is left empty, a backup name in the format of "[Instance ID]_[Backup start timestamp]" will be automatically generated.
     */
    public $BackupName;

    /**
     * @var integer 
     */
    public $StorageStrategy;

    /**
     * @param integer $Strategy Backup policy (0: instance backup, 1: multi-database backup)
     * @param array $DBNames List of names of databases to be backed up (required only for multi-database backup)
     * @param string $InstanceId (Required) Instance ID in the format of mssql-i1z41iwd
     * @param string $BackupName Backup name. If this parameter is left empty, a backup name in the format of "[Instance ID]_[Backup start timestamp]" will be automatically generated.
     * @param integer $StorageStrategy 
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
        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("DBNames",$param) and $param["DBNames"] !== null) {
            $this->DBNames = $param["DBNames"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("StorageStrategy",$param) and $param["StorageStrategy"] !== null) {
            $this->StorageStrategy = $param["StorageStrategy"];
        }
    }
}
