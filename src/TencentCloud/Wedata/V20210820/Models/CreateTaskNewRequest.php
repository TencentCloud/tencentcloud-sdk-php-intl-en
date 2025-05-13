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
 * CreateTaskNew request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getTaskName() Obtain Task Name
 * @method void setTaskName(string $TaskName) Set Task Name
 * @method integer getTaskType() Obtain 26 offline synchronization,30 Python,31 PySpark,32 DLC,33 Impala,34 Hive SQL,35 Shell,36 Spark SQL,39 Spark,40 CDW PG,92 MapReduce.
 * @method void setTaskType(integer $TaskType) Set 26 offline synchronization,30 Python,31 PySpark,32 DLC,33 Impala,34 Hive SQL,35 Shell,36 Spark SQL,39 Spark,40 CDW PG,92 MapReduce.
 * @method array getTaskExt() Obtain Extended Attribute
 * @method void setTaskExt(array $TaskExt) Set Extended Attribute
 * @method string getProductName() Obtain Product Name
 * @method void setProductName(string $ProductName) Set Product Name
 * @method string getInstanceInitStrategy() Obtain Specifies the task instance initialization strategy
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) Set Specifies the task instance initialization strategy
 * @method float getLeftCoordinate() Obtain The horizontal axis of the canvas coordinate
 * @method void setLeftCoordinate(float $LeftCoordinate) Set The horizontal axis of the canvas coordinate
 * @method float getTopCoordinate() Obtain The vertical axis of the canvas coordinate
 * @method void setTopCoordinate(float $TopCoordinate) Set The vertical axis of the canvas coordinate
 * @method string getTaskFolderId() Obtain Workflow Directory ID
 * @method void setTaskFolderId(string $TaskFolderId) Set Workflow Directory ID
 * @method string getContent() Obtain Specifies the script content, base64 encoded
 * @method void setContent(string $Content) Set Specifies the script content, base64 encoded
 * @method string getCodeTemplateId() Obtain Code Template ID
 * @method void setCodeTemplateId(string $CodeTemplateId) Set Code Template ID
 */
class CreateTaskNewRequest extends AbstractModel
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
     * @var integer 26 offline synchronization,30 Python,31 PySpark,32 DLC,33 Impala,34 Hive SQL,35 Shell,36 Spark SQL,39 Spark,40 CDW PG,92 MapReduce.
     */
    public $TaskType;

    /**
     * @var array Extended Attribute
     */
    public $TaskExt;

    /**
     * @var string Product Name
     */
    public $ProductName;

    /**
     * @var string Specifies the task instance initialization strategy
     */
    public $InstanceInitStrategy;

    /**
     * @var float The horizontal axis of the canvas coordinate
     */
    public $LeftCoordinate;

    /**
     * @var float The vertical axis of the canvas coordinate
     */
    public $TopCoordinate;

    /**
     * @var string Workflow Directory ID
     */
    public $TaskFolderId;

    /**
     * @var string Specifies the script content, base64 encoded
     */
    public $Content;

    /**
     * @var string Code Template ID
     */
    public $CodeTemplateId;

    /**
     * @param string $ProjectId Project ID
     * @param string $WorkflowId Workflow ID
     * @param string $TaskName Task Name
     * @param integer $TaskType 26 offline synchronization,30 Python,31 PySpark,32 DLC,33 Impala,34 Hive SQL,35 Shell,36 Spark SQL,39 Spark,40 CDW PG,92 MapReduce.
     * @param array $TaskExt Extended Attribute
     * @param string $ProductName Product Name
     * @param string $InstanceInitStrategy Specifies the task instance initialization strategy
     * @param float $LeftCoordinate The horizontal axis of the canvas coordinate
     * @param float $TopCoordinate The vertical axis of the canvas coordinate
     * @param string $TaskFolderId Workflow Directory ID
     * @param string $Content Specifies the script content, base64 encoded
     * @param string $CodeTemplateId Code Template ID
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

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CodeTemplateId",$param) and $param["CodeTemplateId"] !== null) {
            $this->CodeTemplateId = $param["CodeTemplateId"];
        }
    }
}
