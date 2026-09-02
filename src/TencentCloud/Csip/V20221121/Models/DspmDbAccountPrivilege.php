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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database account permission information
 *
 * @method integer getUseDefaultPrivilege() Obtain Use the default permission. 0: inactive; 1: read-only permission, that is, SELECT permission; 2: all permissions, that is, all permissions at the global level.
 * @method void setUseDefaultPrivilege(integer $UseDefaultPrivilege) Set Use the default permission. 0: inactive; 1: read-only permission, that is, SELECT permission; 2: all permissions, that is, all permissions at the global level.
 * @method array getGlobalPrivileges() Obtain Global permission array.
 * @method void setGlobalPrivileges(array $GlobalPrivileges) Set Global permission array.
 * @method array getDatabasePrivilegesList() Obtain Database permission array.
 * @method void setDatabasePrivilegesList(array $DatabasePrivilegesList) Set Database permission array.
 * @method array getTablePrivileges() Obtain Array of table permissions in the database.
 * @method void setTablePrivileges(array $TablePrivileges) Set Array of table permissions in the database.
 * @method array getColumnPrivileges() Obtain Column permission array in the database table.
 * @method void setColumnPrivileges(array $ColumnPrivileges) Set Column permission array in the database table.
 */
class DspmDbAccountPrivilege extends AbstractModel
{
    /**
     * @var integer Use the default permission. 0: inactive; 1: read-only permission, that is, SELECT permission; 2: all permissions, that is, all permissions at the global level.
     */
    public $UseDefaultPrivilege;

    /**
     * @var array Global permission array.
     */
    public $GlobalPrivileges;

    /**
     * @var array Database permission array.
     */
    public $DatabasePrivilegesList;

    /**
     * @var array Array of table permissions in the database.
     */
    public $TablePrivileges;

    /**
     * @var array Column permission array in the database table.
     */
    public $ColumnPrivileges;

    /**
     * @param integer $UseDefaultPrivilege Use the default permission. 0: inactive; 1: read-only permission, that is, SELECT permission; 2: all permissions, that is, all permissions at the global level.
     * @param array $GlobalPrivileges Global permission array.
     * @param array $DatabasePrivilegesList Database permission array.
     * @param array $TablePrivileges Array of table permissions in the database.
     * @param array $ColumnPrivileges Column permission array in the database table.
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
        if (array_key_exists("UseDefaultPrivilege",$param) and $param["UseDefaultPrivilege"] !== null) {
            $this->UseDefaultPrivilege = $param["UseDefaultPrivilege"];
        }

        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivilegesList",$param) and $param["DatabasePrivilegesList"] !== null) {
            $this->DatabasePrivilegesList = [];
            foreach ($param["DatabasePrivilegesList"] as $key => $value){
                $obj = new DspmDatabasePrivilege();
                $obj->deserialize($value);
                array_push($this->DatabasePrivilegesList, $obj);
            }
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->TablePrivileges = [];
            foreach ($param["TablePrivileges"] as $key => $value){
                $obj = new DspmTablePrivilege();
                $obj->deserialize($value);
                array_push($this->TablePrivileges, $obj);
            }
        }

        if (array_key_exists("ColumnPrivileges",$param) and $param["ColumnPrivileges"] !== null) {
            $this->ColumnPrivileges = [];
            foreach ($param["ColumnPrivileges"] as $key => $value){
                $obj = new DspmColumnPrivilege();
                $obj->deserialize($value);
                array_push($this->ColumnPrivileges, $obj);
            }
        }
    }
}
