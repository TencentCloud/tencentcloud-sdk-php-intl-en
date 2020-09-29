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
 * RestoreInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of mssql-j8kv137v
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of mssql-j8kv137v
 * @method integer getBackupId() Obtain Backup file ID, which can be obtained through the `Id` field in the returned value of the `DescribeBackups` API
 * @method void setBackupId(integer $BackupId) Set Backup file ID, which can be obtained through the `Id` field in the returned value of the `DescribeBackups` API
 * @method string getTargetInstanceId() Obtain ID of the target instance to which the backup is restored. The target instance should be under the same `APPID`. If this parameter is left empty, ID of the source instance will be used.
 * @method void setTargetInstanceId(string $TargetInstanceId) Set ID of the target instance to which the backup is restored. The target instance should be under the same `APPID`. If this parameter is left empty, ID of the source instance will be used.
 * @method array getRenameRestore() Obtain Restore the databases listed in `ReNameRestoreDatabase` and rename them after restoration. If this parameter is left empty, all databases will be restored and renamed in the default format.
 * @method void setRenameRestore(array $RenameRestore) Set Restore the databases listed in `ReNameRestoreDatabase` and rename them after restoration. If this parameter is left empty, all databases will be restored and renamed in the default format.
 */
class RestoreInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of mssql-j8kv137v
     */
    public $InstanceId;

    /**
     * @var integer Backup file ID, which can be obtained through the `Id` field in the returned value of the `DescribeBackups` API
     */
    public $BackupId;

    /**
     * @var string ID of the target instance to which the backup is restored. The target instance should be under the same `APPID`. If this parameter is left empty, ID of the source instance will be used.
     */
    public $TargetInstanceId;

    /**
     * @var array Restore the databases listed in `ReNameRestoreDatabase` and rename them after restoration. If this parameter is left empty, all databases will be restored and renamed in the default format.
     */
    public $RenameRestore;

    /**
     * @param string $InstanceId Instance ID in the format of mssql-j8kv137v
     * @param integer $BackupId Backup file ID, which can be obtained through the `Id` field in the returned value of the `DescribeBackups` API
     * @param string $TargetInstanceId ID of the target instance to which the backup is restored. The target instance should be under the same `APPID`. If this parameter is left empty, ID of the source instance will be used.
     * @param array $RenameRestore Restore the databases listed in `ReNameRestoreDatabase` and rename them after restoration. If this parameter is left empty, all databases will be restored and renamed in the default format.
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

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }

        if (array_key_exists("RenameRestore",$param) and $param["RenameRestore"] !== null) {
            $this->RenameRestore = [];
            foreach ($param["RenameRestore"] as $key => $value){
                $obj = new RenameRestoreDatabase();
                $obj->deserialize($value);
                array_push($this->RenameRestore, $obj);
            }
        }
    }
}
