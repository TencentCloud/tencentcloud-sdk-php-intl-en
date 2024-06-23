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
 * CreateHiveTable request structure.
 *
 * @method string getDatasourceId() Obtain Data source ID
 * @method void setDatasourceId(string $DatasourceId) Set Data source ID
 * @method string getDatabase() Obtain Database name
 * @method void setDatabase(string $Database) Set Database name
 * @method string getDDLSql() Obtain Base64-encoded Table Creation Statement
 * @method void setDDLSql(string $DDLSql) Set Base64-encoded Table Creation Statement
 * @method integer getPrivilege() Obtain Table permissions, default is 0: Project share; 1: Individual and administrator only
 * @method void setPrivilege(integer $Privilege) Set Table permissions, default is 0: Project share; 1: Individual and administrator only
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getIncharge() Obtain Person in Charge
 * @method void setIncharge(string $Incharge) Set Person in Charge
 */
class CreateHiveTableRequest extends AbstractModel
{
    /**
     * @var string Data source ID
     */
    public $DatasourceId;

    /**
     * @var string Database name
     */
    public $Database;

    /**
     * @var string Base64-encoded Table Creation Statement
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
     * @var string Person in Charge
     */
    public $Incharge;

    /**
     * @param string $DatasourceId Data source ID
     * @param string $Database Database name
     * @param string $DDLSql Base64-encoded Table Creation Statement
     * @param integer $Privilege Table permissions, default is 0: Project share; 1: Individual and administrator only
     * @param string $ProjectId Project ID
     * @param string $Incharge Person in Charge
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

        if (array_key_exists("Incharge",$param) and $param["Incharge"] !== null) {
            $this->Incharge = $param["Incharge"];
        }
    }
}
