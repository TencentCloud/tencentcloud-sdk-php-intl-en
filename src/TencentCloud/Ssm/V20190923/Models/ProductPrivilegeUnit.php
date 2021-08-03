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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Permission granted when the credential is associated with the service
 *
 * @method string getPrivilegeName() Obtain Permission name. Valid values:
GlobalPrivileges
DatabasePrivileges
TablePrivileges
ColumnPrivileges

When the permission is `DatabasePrivileges`, the database name must be specified by the `Database` parameter;

When the permission is `TablePrivileges`, the database name and the table name in the database must be specified by the `Database` and `TableName` parameters;

When the permission is `ColumnPrivileges`, the database name, table name in the database, and column name in the table must be specified by the `Database`, `TableName`, and `ColumnName` parameters.
 * @method void setPrivilegeName(string $PrivilegeName) Set Permission name. Valid values:
GlobalPrivileges
DatabasePrivileges
TablePrivileges
ColumnPrivileges

When the permission is `DatabasePrivileges`, the database name must be specified by the `Database` parameter;

When the permission is `TablePrivileges`, the database name and the table name in the database must be specified by the `Database` and `TableName` parameters;

When the permission is `ColumnPrivileges`, the database name, table name in the database, and column name in the table must be specified by the `Database`, `TableName`, and `ColumnName` parameters.
 * @method array getPrivileges() Obtain Permission list.
For the `Mysql` service, optional permission values are:

1. Valid values of `GlobalPrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "PROCESS", "DROP","REFERENCES","INDEX","ALTER","SHOW DATABASES","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

2. Valid values of `DatabasePrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

3. Valid values of `TablePrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE VIEW","SHOW VIEW", "TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

4. Valid values of `ColumnPrivileges`: "SELECT","INSERT","UPDATE","REFERENCES".
Note: if this parameter is not passed in, it means to clear the permission.
 * @method void setPrivileges(array $Privileges) Set Permission list.
For the `Mysql` service, optional permission values are:

1. Valid values of `GlobalPrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "PROCESS", "DROP","REFERENCES","INDEX","ALTER","SHOW DATABASES","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

2. Valid values of `DatabasePrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

3. Valid values of `TablePrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE VIEW","SHOW VIEW", "TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

4. Valid values of `ColumnPrivileges`: "SELECT","INSERT","UPDATE","REFERENCES".
Note: if this parameter is not passed in, it means to clear the permission.
 * @method string getDatabase() Obtain This value takes effect only when `PrivilegeName` is `DatabasePrivileges`.
 * @method void setDatabase(string $Database) Set This value takes effect only when `PrivilegeName` is `DatabasePrivileges`.
 * @method string getTableName() Obtain This value takes effect only when `PrivilegeName` is `TablePrivileges`, and the `Database` parameter is required in this case to explicitly indicate the database instance.
 * @method void setTableName(string $TableName) Set This value takes effect only when `PrivilegeName` is `TablePrivileges`, and the `Database` parameter is required in this case to explicitly indicate the database instance.
 * @method string getColumnName() Obtain This value takes effect only when `PrivilegeName` is `ColumnPrivileges`, and the following parameters are required in this case:
Database: explicitly indicate the database instance.
TableName: explicitly indicate the table
 * @method void setColumnName(string $ColumnName) Set This value takes effect only when `PrivilegeName` is `ColumnPrivileges`, and the following parameters are required in this case:
Database: explicitly indicate the database instance.
TableName: explicitly indicate the table
 */
class ProductPrivilegeUnit extends AbstractModel
{
    /**
     * @var string Permission name. Valid values:
GlobalPrivileges
DatabasePrivileges
TablePrivileges
ColumnPrivileges

When the permission is `DatabasePrivileges`, the database name must be specified by the `Database` parameter;

When the permission is `TablePrivileges`, the database name and the table name in the database must be specified by the `Database` and `TableName` parameters;

When the permission is `ColumnPrivileges`, the database name, table name in the database, and column name in the table must be specified by the `Database`, `TableName`, and `ColumnName` parameters.
     */
    public $PrivilegeName;

    /**
     * @var array Permission list.
For the `Mysql` service, optional permission values are:

1. Valid values of `GlobalPrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "PROCESS", "DROP","REFERENCES","INDEX","ALTER","SHOW DATABASES","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

2. Valid values of `DatabasePrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

3. Valid values of `TablePrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE VIEW","SHOW VIEW", "TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

4. Valid values of `ColumnPrivileges`: "SELECT","INSERT","UPDATE","REFERENCES".
Note: if this parameter is not passed in, it means to clear the permission.
     */
    public $Privileges;

    /**
     * @var string This value takes effect only when `PrivilegeName` is `DatabasePrivileges`.
     */
    public $Database;

    /**
     * @var string This value takes effect only when `PrivilegeName` is `TablePrivileges`, and the `Database` parameter is required in this case to explicitly indicate the database instance.
     */
    public $TableName;

    /**
     * @var string This value takes effect only when `PrivilegeName` is `ColumnPrivileges`, and the following parameters are required in this case:
Database: explicitly indicate the database instance.
TableName: explicitly indicate the table
     */
    public $ColumnName;

    /**
     * @param string $PrivilegeName Permission name. Valid values:
GlobalPrivileges
DatabasePrivileges
TablePrivileges
ColumnPrivileges

When the permission is `DatabasePrivileges`, the database name must be specified by the `Database` parameter;

When the permission is `TablePrivileges`, the database name and the table name in the database must be specified by the `Database` and `TableName` parameters;

When the permission is `ColumnPrivileges`, the database name, table name in the database, and column name in the table must be specified by the `Database`, `TableName`, and `ColumnName` parameters.
     * @param array $Privileges Permission list.
For the `Mysql` service, optional permission values are:

1. Valid values of `GlobalPrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "PROCESS", "DROP","REFERENCES","INDEX","ALTER","SHOW DATABASES","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

2. Valid values of `DatabasePrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

3. Valid values of `TablePrivileges`: "SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE VIEW","SHOW VIEW", "TRIGGER".
Note: if this parameter is not passed in, it means to clear the permission.

4. Valid values of `ColumnPrivileges`: "SELECT","INSERT","UPDATE","REFERENCES".
Note: if this parameter is not passed in, it means to clear the permission.
     * @param string $Database This value takes effect only when `PrivilegeName` is `DatabasePrivileges`.
     * @param string $TableName This value takes effect only when `PrivilegeName` is `TablePrivileges`, and the `Database` parameter is required in this case to explicitly indicate the database instance.
     * @param string $ColumnName This value takes effect only when `PrivilegeName` is `ColumnPrivileges`, and the following parameters are required in this case:
Database: explicitly indicate the database instance.
TableName: explicitly indicate the table
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
        if (array_key_exists("PrivilegeName",$param) and $param["PrivilegeName"] !== null) {
            $this->PrivilegeName = $param["PrivilegeName"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }
    }
}
