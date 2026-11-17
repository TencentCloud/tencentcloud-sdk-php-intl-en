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
 * Description of synced database objects
 *
 * @method string getMode() Obtain <p>Sync object type Partial (partial objects)</p>
 * @method void setMode(string $Mode) Set <p>Sync object type Partial (partial objects)</p>
 * @method array getDatabases() Obtain <p>Sync object, not empty when Mode is Partial</p>
 * @method void setDatabases(array $Databases) Set <p>Sync object, not empty when Mode is Partial</p>
 * @method array getAdvancedObjects() Obtain <p>Advanced object types, such as function and procedure. Note: If you need to migrate and synchronize advanced objects, this configuration should contain the corresponding advanced object type. When synchronization of advanced objects is required, the initialization type must contain the structure initialization type, that is, the field value of task Options.InitType must be Structure or Full.</p>
 * @method void setAdvancedObjects(array $AdvancedObjects) Set <p>Advanced object types, such as function and procedure. Note: If you need to migrate and synchronize advanced objects, this configuration should contain the corresponding advanced object type. When synchronization of advanced objects is required, the initialization type must contain the structure initialization type, that is, the field value of task Options.InitType must be Structure or Full.</p>
 * @method OnlineDDL getOnlineDDL() Obtain <p>This field is deprecated. For temporary table synchronization, use Objects.Databases[n].Tables[n].TmpTables to import.</p>
 * @method void setOnlineDDL(OnlineDDL $OnlineDDL) Set <p>This field is deprecated. For temporary table synchronization, use Objects.Databases[n].Tables[n].TmpTables to import.</p>
 * @method array getDatabasesOpFilter() Obtain <p>Database/Table/View-level DML/DDL allowlist</p>
 * @method void setDatabasesOpFilter(array $DatabasesOpFilter) Set <p>Database/Table/View-level DML/DDL allowlist</p>
 */
class Objects extends AbstractModel
{
    /**
     * @var string <p>Sync object type Partial (partial objects)</p>
     */
    public $Mode;

    /**
     * @var array <p>Sync object, not empty when Mode is Partial</p>
     */
    public $Databases;

    /**
     * @var array <p>Advanced object types, such as function and procedure. Note: If you need to migrate and synchronize advanced objects, this configuration should contain the corresponding advanced object type. When synchronization of advanced objects is required, the initialization type must contain the structure initialization type, that is, the field value of task Options.InitType must be Structure or Full.</p>
     */
    public $AdvancedObjects;

    /**
     * @var OnlineDDL <p>This field is deprecated. For temporary table synchronization, use Objects.Databases[n].Tables[n].TmpTables to import.</p>
     */
    public $OnlineDDL;

    /**
     * @var array <p>Database/Table/View-level DML/DDL allowlist</p>
     */
    public $DatabasesOpFilter;

    /**
     * @param string $Mode <p>Sync object type Partial (partial objects)</p>
     * @param array $Databases <p>Sync object, not empty when Mode is Partial</p>
     * @param array $AdvancedObjects <p>Advanced object types, such as function and procedure. Note: If you need to migrate and synchronize advanced objects, this configuration should contain the corresponding advanced object type. When synchronization of advanced objects is required, the initialization type must contain the structure initialization type, that is, the field value of task Options.InitType must be Structure or Full.</p>
     * @param OnlineDDL $OnlineDDL <p>This field is deprecated. For temporary table synchronization, use Objects.Databases[n].Tables[n].TmpTables to import.</p>
     * @param array $DatabasesOpFilter <p>Database/Table/View-level DML/DDL allowlist</p>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new Database();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }

        if (array_key_exists("AdvancedObjects",$param) and $param["AdvancedObjects"] !== null) {
            $this->AdvancedObjects = $param["AdvancedObjects"];
        }

        if (array_key_exists("OnlineDDL",$param) and $param["OnlineDDL"] !== null) {
            $this->OnlineDDL = new OnlineDDL();
            $this->OnlineDDL->deserialize($param["OnlineDDL"]);
        }

        if (array_key_exists("DatabasesOpFilter",$param) and $param["DatabasesOpFilter"] !== null) {
            $this->DatabasesOpFilter = [];
            foreach ($param["DatabasesOpFilter"] as $key => $value){
                $obj = new DBOpFilter();
                $obj->deserialize($value);
                array_push($this->DatabasesOpFilter, $obj);
            }
        }
    }
}
