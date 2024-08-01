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
 * CreateTask request structure.
 *
 * @method Task getTask() Obtain Computing task. This parameter contains the task type and related configuration information.
 * @method void setTask(Task $Task) Set Computing task. This parameter contains the task type and related configuration information.
 * @method string getDatabaseName() Obtain Database name. If there is a database name in the SQL statement, the database in the SQL statement will be used first; otherwise, the database specified by this parameter will be used (note: when submitting the database creation SQL statement, passed in an empty string for this field).
 * @method void setDatabaseName(string $DatabaseName) Set Database name. If there is a database name in the SQL statement, the database in the SQL statement will be used first; otherwise, the database specified by this parameter will be used (note: when submitting the database creation SQL statement, passed in an empty string for this field).
 * @method string getDatasourceConnectionName() Obtain Name of the default data source
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) Set Name of the default data source
 * @method string getDataEngineName() Obtain Data engine name. If this parameter is not specified, the task will be submitted to the default engine.
 * @method void setDataEngineName(string $DataEngineName) Set Data engine name. If this parameter is not specified, the task will be submitted to the default engine.
 * @method string getResourceGroupName() Obtain Standard spark execution task resourceGroupName
 * @method void setResourceGroupName(string $ResourceGroupName) Set Standard spark execution task resourceGroupName
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * @var Task Computing task. This parameter contains the task type and related configuration information.
     */
    public $Task;

    /**
     * @var string Database name. If there is a database name in the SQL statement, the database in the SQL statement will be used first; otherwise, the database specified by this parameter will be used (note: when submitting the database creation SQL statement, passed in an empty string for this field).
     */
    public $DatabaseName;

    /**
     * @var string Name of the default data source
     */
    public $DatasourceConnectionName;

    /**
     * @var string Data engine name. If this parameter is not specified, the task will be submitted to the default engine.
     */
    public $DataEngineName;

    /**
     * @var string Standard spark execution task resourceGroupName
     */
    public $ResourceGroupName;

    /**
     * @param Task $Task Computing task. This parameter contains the task type and related configuration information.
     * @param string $DatabaseName Database name. If there is a database name in the SQL statement, the database in the SQL statement will be used first; otherwise, the database specified by this parameter will be used (note: when submitting the database creation SQL statement, passed in an empty string for this field).
     * @param string $DatasourceConnectionName Name of the default data source
     * @param string $DataEngineName Data engine name. If this parameter is not specified, the task will be submitted to the default engine.
     * @param string $ResourceGroupName Standard spark execution task resourceGroupName
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
        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new Task();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
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
