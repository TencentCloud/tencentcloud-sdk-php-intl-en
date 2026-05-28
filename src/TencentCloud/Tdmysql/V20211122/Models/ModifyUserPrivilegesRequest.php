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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserPrivileges request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as tdsql3-5baee8df.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as tdsql3-5baee8df.
 * @method array getUsers() Obtain Login username and host information
 * @method void setUsers(array $Users) Set Login username and host information
 * @method array getGlobalPrivileges() Obtain Global permission
 * @method void setGlobalPrivileges(array $GlobalPrivileges) Set Global permission
 * @method array getDatabasePrivileges() Obtain Database-level permission
 * @method void setDatabasePrivileges(array $DatabasePrivileges) Set Database-level permission
 * @method array getTablePrivileges() Obtain Table-level permission
 * @method void setTablePrivileges(array $TablePrivileges) Set Table-level permission
 */
class ModifyUserPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as tdsql3-5baee8df.
     */
    public $InstanceId;

    /**
     * @var array Login username and host information
     */
    public $Users;

    /**
     * @var array Global permission
     */
    public $GlobalPrivileges;

    /**
     * @var array Database-level permission
     */
    public $DatabasePrivileges;

    /**
     * @var array Table-level permission
     */
    public $TablePrivileges;

    /**
     * @param string $InstanceId Instance ID, such as tdsql3-5baee8df.
     * @param array $Users Login username and host information
     * @param array $GlobalPrivileges Global permission
     * @param array $DatabasePrivileges Database-level permission
     * @param array $TablePrivileges Table-level permission
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

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new User();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }

        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivileges",$param) and $param["DatabasePrivileges"] !== null) {
            $this->DatabasePrivileges = [];
            foreach ($param["DatabasePrivileges"] as $key => $value){
                $obj = new DatabasePrivileges();
                $obj->deserialize($value);
                array_push($this->DatabasePrivileges, $obj);
            }
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->TablePrivileges = [];
            foreach ($param["TablePrivileges"] as $key => $value){
                $obj = new TablePrivileges();
                $obj->deserialize($value);
                array_push($this->TablePrivileges, $obj);
            }
        }
    }
}
