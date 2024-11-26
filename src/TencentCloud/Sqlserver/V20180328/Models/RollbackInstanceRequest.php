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
 * RollbackInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getType() Obtain Rollback type. 0: the database rolled back overwrites the original database; 1: the database rolled back is renamed and does not overwrite the original database
 * @method void setType(integer $Type) Set Rollback type. 0: the database rolled back overwrites the original database; 1: the database rolled back is renamed and does not overwrite the original database
 * @method string getTime() Obtain Target time point for rollback
 * @method void setTime(string $Time) Set Target time point for rollback
 * @method array getDBs() Obtain Database to be rolled back
 * @method void setDBs(array $DBs) Set Database to be rolled back
 * @method string getTargetInstanceId() Obtain ID of the target instance to which the backup is restored. The target instance should be under the same `APPID`. If this parameter is left empty, ID of the source instance will be used.
 * @method void setTargetInstanceId(string $TargetInstanceId) Set ID of the target instance to which the backup is restored. The target instance should be under the same `APPID`. If this parameter is left empty, ID of the source instance will be used.
 * @method array getRenameRestore() Obtain Rename the databases listed in `ReNameRestoreDatabase`. This parameter takes effect only when `Type = 1` which indicates that backup rollback supports renaming databases. If it is left empty, databases will be renamed in the default format and the `DBs` parameter specifies the databases to be restored.
 * @method void setRenameRestore(array $RenameRestore) Set Rename the databases listed in `ReNameRestoreDatabase`. This parameter takes effect only when `Type = 1` which indicates that backup rollback supports renaming databases. If it is left empty, databases will be renamed in the default format and the `DBs` parameter specifies the databases to be restored.
 */
class RollbackInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Rollback type. 0: the database rolled back overwrites the original database; 1: the database rolled back is renamed and does not overwrite the original database
     */
    public $Type;

    /**
     * @var string Target time point for rollback
     */
    public $Time;

    /**
     * @var array Database to be rolled back
     */
    public $DBs;

    /**
     * @var string ID of the target instance to which the backup is restored. The target instance should be under the same `APPID`. If this parameter is left empty, ID of the source instance will be used.
     */
    public $TargetInstanceId;

    /**
     * @var array Rename the databases listed in `ReNameRestoreDatabase`. This parameter takes effect only when `Type = 1` which indicates that backup rollback supports renaming databases. If it is left empty, databases will be renamed in the default format and the `DBs` parameter specifies the databases to be restored.
     */
    public $RenameRestore;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $Type Rollback type. 0: the database rolled back overwrites the original database; 1: the database rolled back is renamed and does not overwrite the original database
     * @param string $Time Target time point for rollback
     * @param array $DBs Database to be rolled back
     * @param string $TargetInstanceId ID of the target instance to which the backup is restored. The target instance should be under the same `APPID`. If this parameter is left empty, ID of the source instance will be used.
     * @param array $RenameRestore Rename the databases listed in `ReNameRestoreDatabase`. This parameter takes effect only when `Type = 1` which indicates that backup rollback supports renaming databases. If it is left empty, databases will be renamed in the default format and the `DBs` parameter specifies the databases to be restored.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("DBs",$param) and $param["DBs"] !== null) {
            $this->DBs = $param["DBs"];
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
