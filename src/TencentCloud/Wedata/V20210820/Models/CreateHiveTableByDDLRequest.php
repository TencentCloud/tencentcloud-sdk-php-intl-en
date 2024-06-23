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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHiveTableByDDL request structure.
 *
 * @method string getDatasourceId() Obtain Data Source ID
 * @method void setDatasourceId(string $DatasourceId) Set Data Source ID
 * @method string getDatabase() Obtain Database
 * @method void setDatabase(string $Database) Set Database
 * @method string getDDLSql() Obtain Create Hive Table DDL
 * @method void setDDLSql(string $DDLSql) Set Create Hive Table DDL
 * @method integer getPrivilege() Obtain Table permissions, default is 0: Project share; 1: Individual and administrator only
 * @method void setPrivilege(integer $Privilege) Set Table permissions, default is 0: Project share; 1: Individual and administrator only
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getType() Obtain Target Table Type (HIVE or GBASE)
 * @method void setType(string $Type) Set Target Table Type (HIVE or GBASE)
 * @method string getIncharge() Obtain Person in Charge
 * @method void setIncharge(string $Incharge) Set Person in Charge
 * @method string getSchemaName() Obtain Schema Name
 * @method void setSchemaName(string $SchemaName) Set Schema Name
 */
class CreateHiveTableByDDLRequest extends AbstractModel
{
    /**
     * @var string Data Source ID
     */
    public $DatasourceId;

    /**
     * @var string Database
     */
    public $Database;

    /**
     * @var string Create Hive Table DDL
     */
    public $DDLSql;

    /**
     * @var integer Table permissions, default is 0: Project share; 1: Individual and administrator only
     */
    public $Privilege;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Target Table Type (HIVE or GBASE)
     */
    public $Type;

    /**
     * @var string Person in Charge
     */
    public $Incharge;

    /**
     * @var string Schema Name
     */
    public $SchemaName;

    /**
     * @param string $DatasourceId Data Source ID
     * @param string $Database Database
     * @param string $DDLSql Create Hive Table DDL
     * @param integer $Privilege Table permissions, default is 0: Project share; 1: Individual and administrator only
     * @param string $ProjectId Project ID
     * @param string $Type Target Table Type (HIVE or GBASE)
     * @param string $Incharge Person in Charge
     * @param string $SchemaName Schema Name
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
        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("DDLSql",$param) and $param["DDLSql"] !== null) {
            $this->DDLSql = $param["DDLSql"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Incharge",$param) and $param["Incharge"] !== null) {
            $this->Incharge = $param["Incharge"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }
    }
}
