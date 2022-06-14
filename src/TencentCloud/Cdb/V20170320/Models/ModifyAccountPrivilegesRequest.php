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
 * ModifyAccountPrivileges request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method array getAccounts() Obtain Database account, including username and domain name.
 * @method void setAccounts(array $Accounts) Set Database account, including username and domain name.
 * @method array getGlobalPrivileges() Obtain Global permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "PROCESS", "DROP", "REFERENCES", "INDEX", "ALTER", "SHOW DATABASES", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER", "CREATE USER", "RELOAD", "REPLICATION CLIENT", "REPLICATION SLAVE".
Note: When “ModifyAction” is empty, if `GlobalPrivileges` is not passed in, it indicates the global permission will become ineffective.
 * @method void setGlobalPrivileges(array $GlobalPrivileges) Set Global permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "PROCESS", "DROP", "REFERENCES", "INDEX", "ALTER", "SHOW DATABASES", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER", "CREATE USER", "RELOAD", "REPLICATION CLIENT", "REPLICATION SLAVE".
Note: When “ModifyAction” is empty, if `GlobalPrivileges` is not passed in, it indicates the global permission will become ineffective.
 * @method array getDatabasePrivileges() Obtain Database permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".
Note: When “ModifyAction” is empty, if `DatabasePrivileges` is not passed in, it indicates the permission of the database will become ineffective.
 * @method void setDatabasePrivileges(array $DatabasePrivileges) Set Database permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".
Note: When “ModifyAction” is empty, if `DatabasePrivileges` is not passed in, it indicates the permission of the database will become ineffective.
 * @method array getTablePrivileges() Obtain Table permission in the database. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE VIEW", "SHOW VIEW", "TRIGGER".
Note: When “ModifyAction” is empty, if `TablePrivileges` is not passed in, it indicates the permission of the table will become ineffective.
 * @method void setTablePrivileges(array $TablePrivileges) Set Table permission in the database. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE VIEW", "SHOW VIEW", "TRIGGER".
Note: When “ModifyAction” is empty, if `TablePrivileges` is not passed in, it indicates the permission of the table will become ineffective.
 * @method array getColumnPrivileges() Obtain Column permission in the table. Valid values: "SELECT", "INSERT", "UPDATE", "REFERENCES".
Note: When “ModifyAction” is empty, if `ColumnPrivileges` is not passed in, it indicates the permission of the column will become ineffective.
 * @method void setColumnPrivileges(array $ColumnPrivileges) Set Column permission in the table. Valid values: "SELECT", "INSERT", "UPDATE", "REFERENCES".
Note: When “ModifyAction” is empty, if `ColumnPrivileges` is not passed in, it indicates the permission of the column will become ineffective.
 * @method string getModifyAction() Obtain When this parameter is not empty, it indicates that the permission will be modified. Valid values: `grant` (grant permission), `revoke` (revoke permission)
 * @method void setModifyAction(string $ModifyAction) Set When this parameter is not empty, it indicates that the permission will be modified. Valid values: `grant` (grant permission), `revoke` (revoke permission)
 */
class ModifyAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var array Database account, including username and domain name.
     */
    public $Accounts;

    /**
     * @var array Global permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "PROCESS", "DROP", "REFERENCES", "INDEX", "ALTER", "SHOW DATABASES", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER", "CREATE USER", "RELOAD", "REPLICATION CLIENT", "REPLICATION SLAVE".
Note: When “ModifyAction” is empty, if `GlobalPrivileges` is not passed in, it indicates the global permission will become ineffective.
     */
    public $GlobalPrivileges;

    /**
     * @var array Database permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".
Note: When “ModifyAction” is empty, if `DatabasePrivileges` is not passed in, it indicates the permission of the database will become ineffective.
     */
    public $DatabasePrivileges;

    /**
     * @var array Table permission in the database. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE VIEW", "SHOW VIEW", "TRIGGER".
Note: When “ModifyAction” is empty, if `TablePrivileges` is not passed in, it indicates the permission of the table will become ineffective.
     */
    public $TablePrivileges;

    /**
     * @var array Column permission in the table. Valid values: "SELECT", "INSERT", "UPDATE", "REFERENCES".
Note: When “ModifyAction” is empty, if `ColumnPrivileges` is not passed in, it indicates the permission of the column will become ineffective.
     */
    public $ColumnPrivileges;

    /**
     * @var string When this parameter is not empty, it indicates that the permission will be modified. Valid values: `grant` (grant permission), `revoke` (revoke permission)
     */
    public $ModifyAction;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param array $Accounts Database account, including username and domain name.
     * @param array $GlobalPrivileges Global permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "PROCESS", "DROP", "REFERENCES", "INDEX", "ALTER", "SHOW DATABASES", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER", "CREATE USER", "RELOAD", "REPLICATION CLIENT", "REPLICATION SLAVE".
Note: When “ModifyAction” is empty, if `GlobalPrivileges` is not passed in, it indicates the global permission will become ineffective.
     * @param array $DatabasePrivileges Database permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".
Note: When “ModifyAction” is empty, if `DatabasePrivileges` is not passed in, it indicates the permission of the database will become ineffective.
     * @param array $TablePrivileges Table permission in the database. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE VIEW", "SHOW VIEW", "TRIGGER".
Note: When “ModifyAction” is empty, if `TablePrivileges` is not passed in, it indicates the permission of the table will become ineffective.
     * @param array $ColumnPrivileges Column permission in the table. Valid values: "SELECT", "INSERT", "UPDATE", "REFERENCES".
Note: When “ModifyAction” is empty, if `ColumnPrivileges` is not passed in, it indicates the permission of the column will become ineffective.
     * @param string $ModifyAction When this parameter is not empty, it indicates that the permission will be modified. Valid values: `grant` (grant permission), `revoke` (revoke permission)
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

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new Account();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivileges",$param) and $param["DatabasePrivileges"] !== null) {
            $this->DatabasePrivileges = [];
            foreach ($param["DatabasePrivileges"] as $key => $value){
                $obj = new DatabasePrivilege();
                $obj->deserialize($value);
                array_push($this->DatabasePrivileges, $obj);
            }
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->TablePrivileges = [];
            foreach ($param["TablePrivileges"] as $key => $value){
                $obj = new TablePrivilege();
                $obj->deserialize($value);
                array_push($this->TablePrivileges, $obj);
            }
        }

        if (array_key_exists("ColumnPrivileges",$param) and $param["ColumnPrivileges"] !== null) {
            $this->ColumnPrivileges = [];
            foreach ($param["ColumnPrivileges"] as $key => $value){
                $obj = new ColumnPrivilege();
                $obj->deserialize($value);
                array_push($this->ColumnPrivileges, $obj);
            }
        }

        if (array_key_exists("ModifyAction",$param) and $param["ModifyAction"] !== null) {
            $this->ModifyAction = $param["ModifyAction"];
        }
    }
}
