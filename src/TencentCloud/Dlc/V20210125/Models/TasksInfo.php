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
 * Collection of tasks executed sequentially in batches
 *
 * @method string getTaskType() Obtain Task type. Valid values: `SQLTask` (SQL query task), `SparkSQLTask` (Spark SQL query task).
 * @method void setTaskType(string $TaskType) Set Task type. Valid values: `SQLTask` (SQL query task), `SparkSQLTask` (Spark SQL query task).
 * @method string getFailureTolerance() Obtain Fault tolerance policy. `Proceed`: continues to execute subsequent tasks after the current task fails or is canceled. `Terminate`: terminates the execution of subsequent tasks after the current task fails or is canceled, and marks all subsequent tasks as canceled.
 * @method void setFailureTolerance(string $FailureTolerance) Set Fault tolerance policy. `Proceed`: continues to execute subsequent tasks after the current task fails or is canceled. `Terminate`: terminates the execution of subsequent tasks after the current task fails or is canceled, and marks all subsequent tasks as canceled.
 * @method string getSQL() Obtain Base64-encrypted SQL statements separated by ";". Up to 50 tasks can be submitted at a time, and they will be executed strictly in sequence.
 * @method void setSQL(string $SQL) Set Base64-encrypted SQL statements separated by ";". Up to 50 tasks can be submitted at a time, and they will be executed strictly in sequence.
 * @method array getConfig() Obtain Configuration information of the task. Currently, only `SparkSQLTask` tasks are supported.
 * @method void setConfig(array $Config) Set Configuration information of the task. Currently, only `SparkSQLTask` tasks are supported.
 * @method array getParams() Obtain User-defined parameters of the task
 * @method void setParams(array $Params) Set User-defined parameters of the task
 */
class TasksInfo extends AbstractModel
{
    /**
     * @var string Task type. Valid values: `SQLTask` (SQL query task), `SparkSQLTask` (Spark SQL query task).
     */
    public $TaskType;

    /**
     * @var string Fault tolerance policy. `Proceed`: continues to execute subsequent tasks after the current task fails or is canceled. `Terminate`: terminates the execution of subsequent tasks after the current task fails or is canceled, and marks all subsequent tasks as canceled.
     */
    public $FailureTolerance;

    /**
     * @var string Base64-encrypted SQL statements separated by ";". Up to 50 tasks can be submitted at a time, and they will be executed strictly in sequence.
     */
    public $SQL;

    /**
     * @var array Configuration information of the task. Currently, only `SparkSQLTask` tasks are supported.
     */
    public $Config;

    /**
     * @var array User-defined parameters of the task
     */
    public $Params;

    /**
     * @param string $TaskType Task type. Valid values: `SQLTask` (SQL query task), `SparkSQLTask` (Spark SQL query task).
     * @param string $FailureTolerance Fault tolerance policy. `Proceed`: continues to execute subsequent tasks after the current task fails or is canceled. `Terminate`: terminates the execution of subsequent tasks after the current task fails or is canceled, and marks all subsequent tasks as canceled.
     * @param string $SQL Base64-encrypted SQL statements separated by ";". Up to 50 tasks can be submitted at a time, and they will be executed strictly in sequence.
     * @param array $Config Configuration information of the task. Currently, only `SparkSQLTask` tasks are supported.
     * @param array $Params User-defined parameters of the task
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("FailureTolerance",$param) and $param["FailureTolerance"] !== null) {
            $this->FailureTolerance = $param["FailureTolerance"];
        }

        if (array_key_exists("SQL",$param) and $param["SQL"] !== null) {
            $this->SQL = $param["SQL"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }
    }
}
