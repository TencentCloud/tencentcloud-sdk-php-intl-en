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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackup request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getBackupType() Obtain Backup type. Valid values: `logic` (logic backup), `snapshot` (physical backup)
 * @method void setBackupType(string $BackupType) Set Backup type. Valid values: `logic` (logic backup), `snapshot` (physical backup)
 * @method array getBackupDatabases() Obtain Backup database, which is valid when `BackupType` is `logic`.
 * @method void setBackupDatabases(array $BackupDatabases) Set Backup database, which is valid when `BackupType` is `logic`.
 * @method array getBackupTables() Obtain Backup table, which is valid when `BackupType` is `logic`.
 * @method void setBackupTables(array $BackupTables) Set Backup table, which is valid when `BackupType` is `logic`.
 * @method string getBackupName() Obtain Backup name
 * @method void setBackupName(string $BackupName) Set Backup name
 */
class CreateBackupRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Backup type. Valid values: `logic` (logic backup), `snapshot` (physical backup)
     */
    public $BackupType;

    /**
     * @var array Backup database, which is valid when `BackupType` is `logic`.
     */
    public $BackupDatabases;

    /**
     * @var array Backup table, which is valid when `BackupType` is `logic`.
     */
    public $BackupTables;

    /**
     * @var string Backup name
     */
    public $BackupName;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $BackupType Backup type. Valid values: `logic` (logic backup), `snapshot` (physical backup)
     * @param array $BackupDatabases Backup database, which is valid when `BackupType` is `logic`.
     * @param array $BackupTables Backup table, which is valid when `BackupType` is `logic`.
     * @param string $BackupName Backup name
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupDatabases",$param) and $param["BackupDatabases"] !== null) {
            $this->BackupDatabases = $param["BackupDatabases"];
        }

        if (array_key_exists("BackupTables",$param) and $param["BackupTables"] !== null) {
            $this->BackupTables = [];
            foreach ($param["BackupTables"] as $key => $value){
                $obj = new DatabaseTables();
                $obj->deserialize($value);
                array_push($this->BackupTables, $obj);
            }
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }
    }
}
