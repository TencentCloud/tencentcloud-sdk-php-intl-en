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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Migration object information, which is case-sensitive when objects such as databases, tables, and views are configured.
 *
 * @method string getDbName() Obtain Name of the database to be migrated or synced, which is required if `ObjectMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbName(string $DbName) Set Name of the database to be migrated or synced, which is required if `ObjectMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNewDbName() Obtain Name of the database after migration or sync, which is the same as the source database name by default.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNewDbName(string $NewDbName) Set Name of the database after migration or sync, which is the same as the source database name by default.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSchemaName() Obtain The schema to be migrated or synced
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSchemaName(string $SchemaName) Set The schema to be migrated or synced
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNewSchemaName() Obtain Name of the schema after migration or sync
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNewSchemaName(string $NewSchemaName) Set Name of the schema after migration or sync
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDBMode() Obtain Database selection mode, which is required if `ObjectMode` is `partial`. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDBMode(string $DBMode) Set Database selection mode, which is required if `ObjectMode` is `partial`. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSchemaMode() Obtain Schema selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSchemaMode(string $SchemaMode) Set Schema selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableMode() Obtain Table selection mode, which is required if `DBMode` is `partial`. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableMode(string $TableMode) Set Table selection mode, which is required if `DBMode` is `partial`. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTables() Obtain The set of table objects, which is required if `TableMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTables(array $Tables) Set The set of table objects, which is required if `TableMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getViewMode() Obtain View selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setViewMode(string $ViewMode) Set View selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getViews() Obtain The set of view objects, which is required if `ViewMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setViews(array $Views) Set The set of view objects, which is required if `ViewMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRoleMode() Obtain Role selection mode, which is exclusive to PostgreSQL. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleMode(string $RoleMode) Set Role selection mode, which is exclusive to PostgreSQL. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRoles() Obtain Role, which is exclusive to PostgreSQL and required if `RoleMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoles(array $Roles) Set Role, which is exclusive to PostgreSQL and required if `RoleMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFunctionMode() Obtain Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFunctionMode(string $FunctionMode) Set Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTriggerMode() Obtain Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerMode(string $TriggerMode) Set Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventMode() Obtain Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventMode(string $EventMode) Set Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcedureMode() Obtain Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcedureMode(string $ProcedureMode) Set Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFunctions() Obtain This parameter is required if `FunctionMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFunctions(array $Functions) Set This parameter is required if `FunctionMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProcedures() Obtain This parameter is required if `ProcedureMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcedures(array $Procedures) Set This parameter is required if `ProcedureMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEvents() Obtain This parameter is required if `EventMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEvents(array $Events) Set This parameter is required if `EventMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTriggers() Obtain This parameter is required if `TriggerMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggers(array $Triggers) Set This parameter is required if `TriggerMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DBItem extends AbstractModel
{
    /**
     * @var string Name of the database to be migrated or synced, which is required if `ObjectMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbName;

    /**
     * @var string Name of the database after migration or sync, which is the same as the source database name by default.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NewDbName;

    /**
     * @var string The schema to be migrated or synced
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SchemaName;

    /**
     * @var string Name of the schema after migration or sync
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NewSchemaName;

    /**
     * @var string Database selection mode, which is required if `ObjectMode` is `partial`. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DBMode;

    /**
     * @var string Schema selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SchemaMode;

    /**
     * @var string Table selection mode, which is required if `DBMode` is `partial`. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableMode;

    /**
     * @var array The set of table objects, which is required if `TableMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tables;

    /**
     * @var string View selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ViewMode;

    /**
     * @var array The set of view objects, which is required if `ViewMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Views;

    /**
     * @var string Role selection mode, which is exclusive to PostgreSQL. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleMode;

    /**
     * @var array Role, which is exclusive to PostgreSQL and required if `RoleMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Roles;

    /**
     * @var string Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FunctionMode;

    /**
     * @var string Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerMode;

    /**
     * @var string Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventMode;

    /**
     * @var string Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcedureMode;

    /**
     * @var array This parameter is required if `FunctionMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Functions;

    /**
     * @var array This parameter is required if `ProcedureMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Procedures;

    /**
     * @var array This parameter is required if `EventMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Events;

    /**
     * @var array This parameter is required if `TriggerMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Triggers;

    /**
     * @param string $DbName Name of the database to be migrated or synced, which is required if `ObjectMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NewDbName Name of the database after migration or sync, which is the same as the source database name by default.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SchemaName The schema to be migrated or synced
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NewSchemaName Name of the schema after migration or sync
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DBMode Database selection mode, which is required if `ObjectMode` is `partial`. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SchemaMode Schema selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableMode Table selection mode, which is required if `DBMode` is `partial`. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tables The set of table objects, which is required if `TableMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ViewMode View selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Views The set of view objects, which is required if `ViewMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RoleMode Role selection mode, which is exclusive to PostgreSQL. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Roles Role, which is exclusive to PostgreSQL and required if `RoleMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FunctionMode Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TriggerMode Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventMode Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcedureMode Sync mode. Valid values: `partial`, `all`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Functions This parameter is required if `FunctionMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Procedures This parameter is required if `ProcedureMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Events This parameter is required if `EventMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Triggers This parameter is required if `TriggerMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("NewDbName",$param) and $param["NewDbName"] !== null) {
            $this->NewDbName = $param["NewDbName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("NewSchemaName",$param) and $param["NewSchemaName"] !== null) {
            $this->NewSchemaName = $param["NewSchemaName"];
        }

        if (array_key_exists("DBMode",$param) and $param["DBMode"] !== null) {
            $this->DBMode = $param["DBMode"];
        }

        if (array_key_exists("SchemaMode",$param) and $param["SchemaMode"] !== null) {
            $this->SchemaMode = $param["SchemaMode"];
        }

        if (array_key_exists("TableMode",$param) and $param["TableMode"] !== null) {
            $this->TableMode = $param["TableMode"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new TableItem();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }

        if (array_key_exists("ViewMode",$param) and $param["ViewMode"] !== null) {
            $this->ViewMode = $param["ViewMode"];
        }

        if (array_key_exists("Views",$param) and $param["Views"] !== null) {
            $this->Views = [];
            foreach ($param["Views"] as $key => $value){
                $obj = new ViewItem();
                $obj->deserialize($value);
                array_push($this->Views, $obj);
            }
        }

        if (array_key_exists("RoleMode",$param) and $param["RoleMode"] !== null) {
            $this->RoleMode = $param["RoleMode"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new RoleItem();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("FunctionMode",$param) and $param["FunctionMode"] !== null) {
            $this->FunctionMode = $param["FunctionMode"];
        }

        if (array_key_exists("TriggerMode",$param) and $param["TriggerMode"] !== null) {
            $this->TriggerMode = $param["TriggerMode"];
        }

        if (array_key_exists("EventMode",$param) and $param["EventMode"] !== null) {
            $this->EventMode = $param["EventMode"];
        }

        if (array_key_exists("ProcedureMode",$param) and $param["ProcedureMode"] !== null) {
            $this->ProcedureMode = $param["ProcedureMode"];
        }

        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = $param["Functions"];
        }

        if (array_key_exists("Procedures",$param) and $param["Procedures"] !== null) {
            $this->Procedures = $param["Procedures"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = $param["Events"];
        }

        if (array_key_exists("Triggers",$param) and $param["Triggers"] !== null) {
            $this->Triggers = $param["Triggers"];
        }
    }
}
