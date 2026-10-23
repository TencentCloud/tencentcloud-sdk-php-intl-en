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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackup request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getBackupType() Obtain Backup type. Available values: logic (logical backup); snapshot (physical backup).
 * @method void setBackupType(string $BackupType) Set Backup type. Available values: logic (logical backup); snapshot (physical backup).
 * @method array getBackupDatabases() Obtain Database to be backed up. This parameter is valid only when BackupType is logic.
 * @method void setBackupDatabases(array $BackupDatabases) Set Database to be backed up. This parameter is valid only when BackupType is logic.
 * @method array getBackupTables() Obtain Tables to be backed up. This parameter is valid only when BackupType is logic.
 * @method void setBackupTables(array $BackupTables) Set Tables to be backed up. This parameter is valid only when BackupType is logic.
 * @method string getBackupName() Obtain Alias name
 * @method void setBackupName(string $BackupName) Set Alias name
 * @method array getVaults() Obtain 	Information sent to the safe
 * @method void setVaults(array $Vaults) Set 	Information sent to the safe
 */
class CreateBackupRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Backup type. Available values: logic (logical backup); snapshot (physical backup).
     */
    public $BackupType;

    /**
     * @var array Database to be backed up. This parameter is valid only when BackupType is logic.
     */
    public $BackupDatabases;

    /**
     * @var array Tables to be backed up. This parameter is valid only when BackupType is logic.
     */
    public $BackupTables;

    /**
     * @var string Alias name
     */
    public $BackupName;

    /**
     * @var array 	Information sent to the safe
     */
    public $Vaults;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $BackupType Backup type. Available values: logic (logical backup); snapshot (physical backup).
     * @param array $BackupDatabases Database to be backed up. This parameter is valid only when BackupType is logic.
     * @param array $BackupTables Tables to be backed up. This parameter is valid only when BackupType is logic.
     * @param string $BackupName Alias name
     * @param array $Vaults 	Information sent to the safe
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

        if (array_key_exists("Vaults",$param) and $param["Vaults"] !== null) {
            $this->Vaults = [];
            foreach ($param["Vaults"] as $key => $value){
                $obj = new CreateBackupVaultItem();
                $obj->deserialize($value);
                array_push($this->Vaults, $obj);
            }
        }
    }
}
