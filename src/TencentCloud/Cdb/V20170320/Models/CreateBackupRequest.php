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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackup request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method string getBackupMethod() Obtain Target backup method. Valid values: `logical` (logical cold backup), `physical` (physical cold backup), `snapshot` (snapshot backup). Basic Edition instances only support snapshot backups.
 * @method void setBackupMethod(string $BackupMethod) Set Target backup method. Valid values: `logical` (logical cold backup), `physical` (physical cold backup), `snapshot` (snapshot backup). Basic Edition instances only support snapshot backups.
 * @method array getBackupDBTableList() Obtain Information of the table to be backed up. If this parameter is not set, the entire instance will be backed up by default. It can be set only in logical backup (i.e., BackupMethod = logical). The specified table must exist; otherwise, backup may fail.
For example, if you want to backup tb1 and tb2 in db1 and the entire db2, you should set the parameter as [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"} ].
 * @method void setBackupDBTableList(array $BackupDBTableList) Set Information of the table to be backed up. If this parameter is not set, the entire instance will be backed up by default. It can be set only in logical backup (i.e., BackupMethod = logical). The specified table must exist; otherwise, backup may fail.
For example, if you want to backup tb1 and tb2 in db1 and the entire db2, you should set the parameter as [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"} ].
 * @method string getManualBackupName() Obtain Manual backup alias
 * @method void setManualBackupName(string $ManualBackupName) Set Manual backup alias
 */
class CreateBackupRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var string Target backup method. Valid values: `logical` (logical cold backup), `physical` (physical cold backup), `snapshot` (snapshot backup). Basic Edition instances only support snapshot backups.
     */
    public $BackupMethod;

    /**
     * @var array Information of the table to be backed up. If this parameter is not set, the entire instance will be backed up by default. It can be set only in logical backup (i.e., BackupMethod = logical). The specified table must exist; otherwise, backup may fail.
For example, if you want to backup tb1 and tb2 in db1 and the entire db2, you should set the parameter as [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"} ].
     */
    public $BackupDBTableList;

    /**
     * @var string Manual backup alias
     */
    public $ManualBackupName;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param string $BackupMethod Target backup method. Valid values: `logical` (logical cold backup), `physical` (physical cold backup), `snapshot` (snapshot backup). Basic Edition instances only support snapshot backups.
     * @param array $BackupDBTableList Information of the table to be backed up. If this parameter is not set, the entire instance will be backed up by default. It can be set only in logical backup (i.e., BackupMethod = logical). The specified table must exist; otherwise, backup may fail.
For example, if you want to backup tb1 and tb2 in db1 and the entire db2, you should set the parameter as [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"} ].
     * @param string $ManualBackupName Manual backup alias
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

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupDBTableList",$param) and $param["BackupDBTableList"] !== null) {
            $this->BackupDBTableList = [];
            foreach ($param["BackupDBTableList"] as $key => $value){
                $obj = new BackupItem();
                $obj->deserialize($value);
                array_push($this->BackupDBTableList, $obj);
            }
        }

        if (array_key_exists("ManualBackupName",$param) and $param["ManualBackupName"] !== null) {
            $this->ManualBackupName = $param["ManualBackupName"];
        }
    }
}
