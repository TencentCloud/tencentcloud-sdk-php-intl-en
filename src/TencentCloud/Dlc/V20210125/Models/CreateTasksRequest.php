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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTasks request structure.
 *
 * @method string getDatabaseName() Obtain Database name. If there is a database name in the SQL statement, the database in the SQL statement will be used first; otherwise, the database specified by this parameter will be used (note: when submitting the database creation SQL statement, passed in an empty string for this field).
 * @method void setDatabaseName(string $DatabaseName) Set Database name. If there is a database name in the SQL statement, the database in the SQL statement will be used first; otherwise, the database specified by this parameter will be used (note: when submitting the database creation SQL statement, passed in an empty string for this field).
 * @method TasksInfo getTasks() Obtain SQL task information
 * @method void setTasks(TasksInfo $Tasks) Set SQL task information
 * @method string getDatasourceConnectionName() Obtain Data source name. Default value: DataLakeCatalog.
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) Set Data source name. Default value: DataLakeCatalog.
 * @method string getDataEngineName() Obtain Compute engine name. If this parameter is not specified, the task will be submitted to the default engine.
 * @method void setDataEngineName(string $DataEngineName) Set Compute engine name. If this parameter is not specified, the task will be submitted to the default engine.
 * @method string getResourceGroupName() Obtain Resource group name of the spark cluster
 * @method void setResourceGroupName(string $ResourceGroupName) Set Resource group name of the spark cluster
 */
class CreateTasksRequest extends AbstractModel
{
    /**
     * @var string Database name. If there is a database name in the SQL statement, the database in the SQL statement will be used first; otherwise, the database specified by this parameter will be used (note: when submitting the database creation SQL statement, passed in an empty string for this field).
     */
    public $DatabaseName;

    /**
     * @var TasksInfo SQL task information
     */
    public $Tasks;

    /**
     * @var string Data source name. Default value: DataLakeCatalog.
     */
    public $DatasourceConnectionName;

    /**
     * @var string Compute engine name. If this parameter is not specified, the task will be submitted to the default engine.
     */
    public $DataEngineName;

    /**
     * @var string Resource group name of the spark cluster
     */
    public $ResourceGroupName;

    /**
     * @param string $DatabaseName Database name. If there is a database name in the SQL statement, the database in the SQL statement will be used first; otherwise, the database specified by this parameter will be used (note: when submitting the database creation SQL statement, passed in an empty string for this field).
     * @param TasksInfo $Tasks SQL task information
     * @param string $DatasourceConnectionName Data source name. Default value: DataLakeCatalog.
     * @param string $DataEngineName Compute engine name. If this parameter is not specified, the task will be submitted to the default engine.
     * @param string $ResourceGroupName Resource group name of the spark cluster
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = new TasksInfo();
            $this->Tasks->deserialize($param["Tasks"]);
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }
    }
}
