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
 * CreateTask request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getTaskName() Obtain Task Name
 * @method void setTaskName(string $TaskName) Set Task Name
 * @method integer getTaskType() Obtain 26 Offline Synchronization,30 Python,31 PySpark,32 DLC,33 Impala,34 Hive SQL,35 Shell,36 Spark SQL,39 Spark,40 TCHouse-P,92 MapReduce
 * @method void setTaskType(integer $TaskType) Set 26 Offline Synchronization,30 Python,31 PySpark,32 DLC,33 Impala,34 Hive SQL,35 Shell,36 Spark SQL,39 Spark,40 TCHouse-P,92 MapReduce
 * @method array getTaskExt() Obtain Extended Attributes
 * @method void setTaskExt(array $TaskExt) Set Extended Attributes
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Task Name
     */
    public $TaskName;

    /**
     * @var integer 26 Offline Synchronization,30 Python,31 PySpark,32 DLC,33 Impala,34 Hive SQL,35 Shell,36 Spark SQL,39 Spark,40 TCHouse-P,92 MapReduce
     */
    public $TaskType;

    /**
     * @var array Extended Attributes
     */
    public $TaskExt;

    /**
     * @param string $ProjectId Project ID
     * @param string $WorkflowId Workflow ID
     * @param string $TaskName Task Name
     * @param integer $TaskType 26 Offline Synchronization,30 Python,31 PySpark,32 DLC,33 Impala,34 Hive SQL,35 Shell,36 Spark SQL,39 Spark,40 TCHouse-P,92 MapReduce
     * @param array $TaskExt Extended Attributes
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskExt",$param) and $param["TaskExt"] !== null) {
            $this->TaskExt = [];
            foreach ($param["TaskExt"] as $key => $value){
                $obj = new TaskExtInfo();
                $obj->deserialize($value);
                array_push($this->TaskExt, $obj);
            }
        }
    }
}
