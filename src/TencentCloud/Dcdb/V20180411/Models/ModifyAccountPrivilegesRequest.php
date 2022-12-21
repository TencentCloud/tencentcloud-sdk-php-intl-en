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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountPrivileges request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of tdsql-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of tdsql-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method array getAccounts() Obtain Database account, including username and host address.
 * @method void setAccounts(array $Accounts) Set Database account, including username and host address.
 * @method array getGlobalPrivileges() Obtain Global permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "PROCESS", "DROP", "REFERENCES", "INDEX", "ALTER", "SHOW DATABASES", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".
Note: If the parameter is left empty, no change will be made to the granted global permissions. To clear the granted global permissions, set the parameter to an empty array.
 * @method void setGlobalPrivileges(array $GlobalPrivileges) Set Global permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "PROCESS", "DROP", "REFERENCES", "INDEX", "ALTER", "SHOW DATABASES", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".
Note: If the parameter is left empty, no change will be made to the granted global permissions. To clear the granted global permissions, set the parameter to an empty array.
 * @method array getDatabasePrivileges() Obtain Database permission. Value range: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".	
Note: If the parameter is not passed in, no change will be made to the granted stored procedure permissions. To clear the granted database permissions, set `Privileges` to an empty array.
 * @method void setDatabasePrivileges(array $DatabasePrivileges) Set Database permission. Value range: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".	
Note: If the parameter is not passed in, no change will be made to the granted stored procedure permissions. To clear the granted database permissions, set `Privileges` to an empty array.
 * @method array getTablePrivileges() Obtain Database table permission. Valid values of `Privileges`: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `REFERENCES`, `INDEX`, `ALTER`, `CREATE VIEW`, `SHOW VIEW`, `TRIGGER`.
Note: If the parameter is not passed in, no change will be made to the granted view permissions. To clear the granted table permissions, set `Privileges` to an empty array.
 * @method void setTablePrivileges(array $TablePrivileges) Set Database table permission. Valid values of `Privileges`: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `REFERENCES`, `INDEX`, `ALTER`, `CREATE VIEW`, `SHOW VIEW`, `TRIGGER`.
Note: If the parameter is not passed in, no change will be made to the granted view permissions. To clear the granted table permissions, set `Privileges` to an empty array.
 * @method array getColumnPrivileges() Obtain Column permission in the table. Valid values: "SELECT", "INSERT", "UPDATE", "REFERENCES".
Note: If the parameter is not passed in, no change will be made to the granted column permissions. To clear the granted column permissions, set `Privileges` to an empty array.
 * @method void setColumnPrivileges(array $ColumnPrivileges) Set Column permission in the table. Valid values: "SELECT", "INSERT", "UPDATE", "REFERENCES".
Note: If the parameter is not passed in, no change will be made to the granted column permissions. To clear the granted column permissions, set `Privileges` to an empty array.
 * @method array getViewPrivileges() Obtain Database view permission. Valid values of `Privileges`: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `REFERENCES`, `INDEX`, `ALTER`, `CREATE VIEW`, `SHOW VIEW`, `TRIGGER`.
Note: If the parameter is not passed in, no change will be made to the granted table permissions. To clear the granted view permissions, set `Privileges` to an empty array.
 * @method void setViewPrivileges(array $ViewPrivileges) Set Database view permission. Valid values of `Privileges`: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `REFERENCES`, `INDEX`, `ALTER`, `CREATE VIEW`, `SHOW VIEW`, `TRIGGER`.
Note: If the parameter is not passed in, no change will be made to the granted table permissions. To clear the granted view permissions, set `Privileges` to an empty array.
 */
class ModifyAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of tdsql-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var array Database account, including username and host address.
     */
    public $Accounts;

    /**
     * @var array Global permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "PROCESS", "DROP", "REFERENCES", "INDEX", "ALTER", "SHOW DATABASES", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".
Note: If the parameter is left empty, no change will be made to the granted global permissions. To clear the granted global permissions, set the parameter to an empty array.
     */
    public $GlobalPrivileges;

    /**
     * @var array Database permission. Value range: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".	
Note: If the parameter is not passed in, no change will be made to the granted stored procedure permissions. To clear the granted database permissions, set `Privileges` to an empty array.
     */
    public $DatabasePrivileges;

    /**
     * @var array Database table permission. Valid values of `Privileges`: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `REFERENCES`, `INDEX`, `ALTER`, `CREATE VIEW`, `SHOW VIEW`, `TRIGGER`.
Note: If the parameter is not passed in, no change will be made to the granted view permissions. To clear the granted table permissions, set `Privileges` to an empty array.
     */
    public $TablePrivileges;

    /**
     * @var array Column permission in the table. Valid values: "SELECT", "INSERT", "UPDATE", "REFERENCES".
Note: If the parameter is not passed in, no change will be made to the granted column permissions. To clear the granted column permissions, set `Privileges` to an empty array.
     */
    public $ColumnPrivileges;

    /**
     * @var array Database view permission. Valid values of `Privileges`: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `REFERENCES`, `INDEX`, `ALTER`, `CREATE VIEW`, `SHOW VIEW`, `TRIGGER`.
Note: If the parameter is not passed in, no change will be made to the granted table permissions. To clear the granted view permissions, set `Privileges` to an empty array.
     */
    public $ViewPrivileges;

    /**
     * @param string $InstanceId Instance ID in the format of tdsql-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     * @param array $Accounts Database account, including username and host address.
     * @param array $GlobalPrivileges Global permission. Valid values: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "PROCESS", "DROP", "REFERENCES", "INDEX", "ALTER", "SHOW DATABASES", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".
Note: If the parameter is left empty, no change will be made to the granted global permissions. To clear the granted global permissions, set the parameter to an empty array.
     * @param array $DatabasePrivileges Database permission. Value range: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "REFERENCES", "INDEX", "ALTER", "CREATE TEMPORARY TABLES", "LOCK TABLES", "EXECUTE", "CREATE VIEW", "SHOW VIEW", "CREATE ROUTINE", "ALTER ROUTINE", "EVENT", "TRIGGER".	
Note: If the parameter is not passed in, no change will be made to the granted stored procedure permissions. To clear the granted database permissions, set `Privileges` to an empty array.
     * @param array $TablePrivileges Database table permission. Valid values of `Privileges`: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `REFERENCES`, `INDEX`, `ALTER`, `CREATE VIEW`, `SHOW VIEW`, `TRIGGER`.
Note: If the parameter is not passed in, no change will be made to the granted view permissions. To clear the granted table permissions, set `Privileges` to an empty array.
     * @param array $ColumnPrivileges Column permission in the table. Valid values: "SELECT", "INSERT", "UPDATE", "REFERENCES".
Note: If the parameter is not passed in, no change will be made to the granted column permissions. To clear the granted column permissions, set `Privileges` to an empty array.
     * @param array $ViewPrivileges Database view permission. Valid values of `Privileges`: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `REFERENCES`, `INDEX`, `ALTER`, `CREATE VIEW`, `SHOW VIEW`, `TRIGGER`.
Note: If the parameter is not passed in, no change will be made to the granted table permissions. To clear the granted view permissions, set `Privileges` to an empty array.
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

        if (array_key_exists("ViewPrivileges",$param) and $param["ViewPrivileges"] !== null) {
            $this->ViewPrivileges = [];
            foreach ($param["ViewPrivileges"] as $key => $value){
                $obj = new ViewPrivileges();
                $obj->deserialize($value);
                array_push($this->ViewPrivileges, $obj);
            }
        }
    }
}
