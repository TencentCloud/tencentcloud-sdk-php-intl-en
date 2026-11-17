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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The database/table objects to be synced
 *
 * @method string getDbName() Obtain <p>Database name for migration or synchronization. This item is required when ObjectMode is Partial.</p>
 * @method void setDbName(string $DbName) Set <p>Database name for migration or synchronization. This item is required when ObjectMode is Partial.</p>
 * @method string getNewDbName() Obtain <p>The name of the migrated or synchronized database is identical to that of the source database by default.</p>
 * @method void setNewDbName(string $NewDbName) Set <p>The name of the migrated or synchronized database is identical to that of the source database by default.</p>
 * @method string getDbMode() Obtain <p>DB selection mode: All (for all objects under the current object), Partial (partial objects). This item is required when Mode is Partial. Note that synchronization of advanced objects is independent of this value. If you sync entire database, it should be All here.</p>
 * @method void setDbMode(string $DbMode) Set <p>DB selection mode: All (for all objects under the current object), Partial (partial objects). This item is required when Mode is Partial. Note that synchronization of advanced objects is independent of this value. If you sync entire database, it should be All here.</p>
 * @method string getSchemaName() Obtain <p>schema for migration or synchronization</p>
 * @method void setSchemaName(string $SchemaName) Set <p>schema for migration or synchronization</p>
 * @method string getNewSchemaName() Obtain <p>schema name after migration or synchronization</p>
 * @method void setNewSchemaName(string $NewSchemaName) Set <p>schema name after migration or synchronization</p>
 * @method string getSchemaMode() Obtain <p>schema Selection Mode, pg and sqlserver require the use of</p><p>Enumeration value:</p><ul><li>All: All objects under the current object</li><li>Partial: Partial objects</li></ul>
 * @method void setSchemaMode(string $SchemaMode) Set <p>schema Selection Mode, pg and sqlserver require the use of</p><p>Enumeration value:</p><ul><li>All: All objects under the current object</li><li>Partial: Partial objects</li></ul>
 * @method string getTableMode() Obtain <p>Schema selection mode: All (for all objects under the current object), Partial (partial objects). This item is required when DBMode is Partial. If you sync entire database, it should be All here.</p>
 * @method void setTableMode(string $TableMode) Set <p>Schema selection mode: All (for all objects under the current object), Partial (partial objects). This item is required when DBMode is Partial. If you sync entire database, it should be All here.</p>
 * @method array getTables() Obtain <p>Table diagram object set. This item needs to be filled in when TableMode is Partial.</p>
 * @method void setTables(array $Tables) Set <p>Table diagram object set. This item needs to be filled in when TableMode is Partial.</p>
 * @method string getViewMode() Obtain <p>View selection mode: All indicates all view objects under the current object, Partial indicates partial view objects. If you sync entire database, it should be All here.</p>
 * @method void setViewMode(string $ViewMode) Set <p>View selection mode: All indicates all view objects under the current object, Partial indicates partial view objects. If you sync entire database, it should be All here.</p>
 * @method array getViews() Obtain <p>View object set. When ViewMode is Partial, this item requires filling in.</p>
 * @method void setViews(array $Views) Set <p>View object set. When ViewMode is Partial, this item requires filling in.</p>
 * @method string getFunctionMode() Obtain <p>Select the sync mode. Partial means part, and All means the entire database. If you want to sync entire database, select All here.</p>
 * @method void setFunctionMode(string $FunctionMode) Set <p>Select the sync mode. Partial means part, and All means the entire database. If you want to sync entire database, select All here.</p>
 * @method array getFunctions() Obtain <p>This item needs to be filled in when FunctionMode value is Partial.</p>
 * @method void setFunctions(array $Functions) Set <p>This item needs to be filled in when FunctionMode value is Partial.</p>
 * @method string getProcedureMode() Obtain <p>Select the sync mode. Partial means part, and All means the entire database. If you want to sync entire database, select All here.</p>
 * @method void setProcedureMode(string $ProcedureMode) Set <p>Select the sync mode. Partial means part, and All means the entire database. If you want to sync entire database, select All here.</p>
 * @method array getProcedures() Obtain <p>This item needs to be filled in when the ProcedureMode value is Partial.</p>
 * @method void setProcedures(array $Procedures) Set <p>This item needs to be filled in when the ProcedureMode value is Partial.</p>
 * @method string getTriggerMode() Obtain <p>Trigger migration mode, All (all objects under the current object), Partial (partial objects). If syncing the entire database, it should be All here. Data sync does not currently support this advanced object.</p>
 * @method void setTriggerMode(string $TriggerMode) Set <p>Trigger migration mode, All (all objects under the current object), Partial (partial objects). If syncing the entire database, it should be All here. Data sync does not currently support this advanced object.</p>
 * @method array getTriggers() Obtain <p>When TriggerMode is partial, specify the trigger name to migrate.</p>
 * @method void setTriggers(array $Triggers) Set <p>When TriggerMode is partial, specify the trigger name to migrate.</p>
 * @method string getEventMode() Obtain <p>Event migration mode: All (all objects under the current object), Partial (partial objects). If syncing the entire database, it should be All here. This advanced object is not currently supported for data sync.</p>
 * @method void setEventMode(string $EventMode) Set <p>Event migration mode: All (all objects under the current object), Partial (partial objects). If syncing the entire database, it should be All here. This advanced object is not currently supported for data sync.</p>
 * @method array getEvents() Obtain <p>When EventMode is partial, specify the event name to migrate.</p>
 * @method void setEvents(array $Events) Set <p>When EventMode is partial, specify the event name to migrate.</p>
 */
class Database extends AbstractModel
{
    /**
     * @var string <p>Database name for migration or synchronization. This item is required when ObjectMode is Partial.</p>
     */
    public $DbName;

    /**
     * @var string <p>The name of the migrated or synchronized database is identical to that of the source database by default.</p>
     */
    public $NewDbName;

    /**
     * @var string <p>DB selection mode: All (for all objects under the current object), Partial (partial objects). This item is required when Mode is Partial. Note that synchronization of advanced objects is independent of this value. If you sync entire database, it should be All here.</p>
     */
    public $DbMode;

    /**
     * @var string <p>schema for migration or synchronization</p>
     */
    public $SchemaName;

    /**
     * @var string <p>schema name after migration or synchronization</p>
     */
    public $NewSchemaName;

    /**
     * @var string <p>schema Selection Mode, pg and sqlserver require the use of</p><p>Enumeration value:</p><ul><li>All: All objects under the current object</li><li>Partial: Partial objects</li></ul>
     */
    public $SchemaMode;

    /**
     * @var string <p>Schema selection mode: All (for all objects under the current object), Partial (partial objects). This item is required when DBMode is Partial. If you sync entire database, it should be All here.</p>
     */
    public $TableMode;

    /**
     * @var array <p>Table diagram object set. This item needs to be filled in when TableMode is Partial.</p>
     */
    public $Tables;

    /**
     * @var string <p>View selection mode: All indicates all view objects under the current object, Partial indicates partial view objects. If you sync entire database, it should be All here.</p>
     */
    public $ViewMode;

    /**
     * @var array <p>View object set. When ViewMode is Partial, this item requires filling in.</p>
     */
    public $Views;

    /**
     * @var string <p>Select the sync mode. Partial means part, and All means the entire database. If you want to sync entire database, select All here.</p>
     */
    public $FunctionMode;

    /**
     * @var array <p>This item needs to be filled in when FunctionMode value is Partial.</p>
     */
    public $Functions;

    /**
     * @var string <p>Select the sync mode. Partial means part, and All means the entire database. If you want to sync entire database, select All here.</p>
     */
    public $ProcedureMode;

    /**
     * @var array <p>This item needs to be filled in when the ProcedureMode value is Partial.</p>
     */
    public $Procedures;

    /**
     * @var string <p>Trigger migration mode, All (all objects under the current object), Partial (partial objects). If syncing the entire database, it should be All here. Data sync does not currently support this advanced object.</p>
     */
    public $TriggerMode;

    /**
     * @var array <p>When TriggerMode is partial, specify the trigger name to migrate.</p>
     */
    public $Triggers;

    /**
     * @var string <p>Event migration mode: All (all objects under the current object), Partial (partial objects). If syncing the entire database, it should be All here. This advanced object is not currently supported for data sync.</p>
     */
    public $EventMode;

    /**
     * @var array <p>When EventMode is partial, specify the event name to migrate.</p>
     */
    public $Events;

    /**
     * @param string $DbName <p>Database name for migration or synchronization. This item is required when ObjectMode is Partial.</p>
     * @param string $NewDbName <p>The name of the migrated or synchronized database is identical to that of the source database by default.</p>
     * @param string $DbMode <p>DB selection mode: All (for all objects under the current object), Partial (partial objects). This item is required when Mode is Partial. Note that synchronization of advanced objects is independent of this value. If you sync entire database, it should be All here.</p>
     * @param string $SchemaName <p>schema for migration or synchronization</p>
     * @param string $NewSchemaName <p>schema name after migration or synchronization</p>
     * @param string $SchemaMode <p>schema Selection Mode, pg and sqlserver require the use of</p><p>Enumeration value:</p><ul><li>All: All objects under the current object</li><li>Partial: Partial objects</li></ul>
     * @param string $TableMode <p>Schema selection mode: All (for all objects under the current object), Partial (partial objects). This item is required when DBMode is Partial. If you sync entire database, it should be All here.</p>
     * @param array $Tables <p>Table diagram object set. This item needs to be filled in when TableMode is Partial.</p>
     * @param string $ViewMode <p>View selection mode: All indicates all view objects under the current object, Partial indicates partial view objects. If you sync entire database, it should be All here.</p>
     * @param array $Views <p>View object set. When ViewMode is Partial, this item requires filling in.</p>
     * @param string $FunctionMode <p>Select the sync mode. Partial means part, and All means the entire database. If you want to sync entire database, select All here.</p>
     * @param array $Functions <p>This item needs to be filled in when FunctionMode value is Partial.</p>
     * @param string $ProcedureMode <p>Select the sync mode. Partial means part, and All means the entire database. If you want to sync entire database, select All here.</p>
     * @param array $Procedures <p>This item needs to be filled in when the ProcedureMode value is Partial.</p>
     * @param string $TriggerMode <p>Trigger migration mode, All (all objects under the current object), Partial (partial objects). If syncing the entire database, it should be All here. Data sync does not currently support this advanced object.</p>
     * @param array $Triggers <p>When TriggerMode is partial, specify the trigger name to migrate.</p>
     * @param string $EventMode <p>Event migration mode: All (all objects under the current object), Partial (partial objects). If syncing the entire database, it should be All here. This advanced object is not currently supported for data sync.</p>
     * @param array $Events <p>When EventMode is partial, specify the event name to migrate.</p>
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

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("NewSchemaName",$param) and $param["NewSchemaName"] !== null) {
            $this->NewSchemaName = $param["NewSchemaName"];
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
                $obj = new Table();
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
                $obj = new View();
                $obj->deserialize($value);
                array_push($this->Views, $obj);
            }
        }

        if (array_key_exists("FunctionMode",$param) and $param["FunctionMode"] !== null) {
            $this->FunctionMode = $param["FunctionMode"];
        }

        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = $param["Functions"];
        }

        if (array_key_exists("ProcedureMode",$param) and $param["ProcedureMode"] !== null) {
            $this->ProcedureMode = $param["ProcedureMode"];
        }

        if (array_key_exists("Procedures",$param) and $param["Procedures"] !== null) {
            $this->Procedures = $param["Procedures"];
        }

        if (array_key_exists("TriggerMode",$param) and $param["TriggerMode"] !== null) {
            $this->TriggerMode = $param["TriggerMode"];
        }

        if (array_key_exists("Triggers",$param) and $param["Triggers"] !== null) {
            $this->Triggers = $param["Triggers"];
        }

        if (array_key_exists("EventMode",$param) and $param["EventMode"] !== null) {
            $this->EventMode = $param["EventMode"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = $param["Events"];
        }
    }
}
