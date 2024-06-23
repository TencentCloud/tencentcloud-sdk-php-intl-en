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
 * SubmitTaskTestRun request structure.
 *
 * @method string getTaskIds() Obtain taskId list
 * @method void setTaskIds(string $TaskIds) Set taskId list
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getWorkFlowId() Obtain Workflow ID
 * @method void setWorkFlowId(string $WorkFlowId) Set Workflow ID
 * @method string getName() Obtain Workflow name
 * @method void setName(string $Name) Set Workflow name
 * @method array getTasks() Obtain Workflow Task List
 * @method void setTasks(array $Tasks) Set Workflow Task List
 * @method string getDescription() Obtain Remarks
 * @method void setDescription(string $Description) Set Remarks
 * @method string getRunParams() Obtain Runtime Parameters, JSON format of map
 * @method void setRunParams(string $RunParams) Set Runtime Parameters, JSON format of map
 * @method string getScriptContent() Obtain Script Content
 * @method void setScriptContent(string $ScriptContent) Set Script Content
 * @method string getVersionId() Obtain Version number
 * @method void setVersionId(string $VersionId) Set Version number
 */
class SubmitTaskTestRunRequest extends AbstractModel
{
    /**
     * @var string taskId list
     */
    public $TaskIds;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Workflow ID
     */
    public $WorkFlowId;

    /**
     * @var string Workflow name
     */
    public $Name;

    /**
     * @var array Workflow Task List
     */
    public $Tasks;

    /**
     * @var string Remarks
     */
    public $Description;

    /**
     * @var string Runtime Parameters, JSON format of map
     */
    public $RunParams;

    /**
     * @var string Script Content
     */
    public $ScriptContent;

    /**
     * @var string Version number
     */
    public $VersionId;

    /**
     * @param string $TaskIds taskId list
     * @param string $ProjectId Project ID
     * @param string $WorkFlowId Workflow ID
     * @param string $Name Workflow name
     * @param array $Tasks Workflow Task List
     * @param string $Description Remarks
     * @param string $RunParams Runtime Parameters, JSON format of map
     * @param string $ScriptContent Script Content
     * @param string $VersionId Version number
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkFlowId",$param) and $param["WorkFlowId"] !== null) {
            $this->WorkFlowId = $param["WorkFlowId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new StageCloudApiRequest();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RunParams",$param) and $param["RunParams"] !== null) {
            $this->RunParams = $param["RunParams"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
