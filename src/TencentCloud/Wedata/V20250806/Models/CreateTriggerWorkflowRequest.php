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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTriggerWorkflow request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method string getParentFolderPath() Obtain Folder path.
 * @method void setParentFolderPath(string $ParentFolderPath) Set Folder path.
 * @method string getWorkflowDesc() Obtain Workflow description.
 * @method void setWorkflowDesc(string $WorkflowDesc) Set Workflow description.
 * @method string getOwnerUin() Obtain Workflow owner ID.
 * @method void setOwnerUin(string $OwnerUin) Set Workflow owner ID.
 * @method array getWorkflowParams() Obtain Workflow parameter.
 * @method void setWorkflowParams(array $WorkflowParams) Set Workflow parameter.
 * @method array getTriggerWorkflowSchedulerConfigurations() Obtain Unified scheduling info.
 * @method void setTriggerWorkflowSchedulerConfigurations(array $TriggerWorkflowSchedulerConfigurations) Set Unified scheduling info.
 * @method string getBundleId() Obtain BundleId item.
 * @method void setBundleId(string $BundleId) Set BundleId item.
 * @method string getBundleInfo() Obtain Bundle info.
 * @method void setBundleInfo(string $BundleInfo) Set Bundle info.
 * @method array getGeneralTaskParams() Obtain General parameters configuration.
 * @method void setGeneralTaskParams(array $GeneralTaskParams) Set General parameters configuration.
 */
class CreateTriggerWorkflowRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Workflow name.
     */
    public $WorkflowName;

    /**
     * @var string Folder path.
     */
    public $ParentFolderPath;

    /**
     * @var string Workflow description.
     */
    public $WorkflowDesc;

    /**
     * @var string Workflow owner ID.
     */
    public $OwnerUin;

    /**
     * @var array Workflow parameter.
     */
    public $WorkflowParams;

    /**
     * @var array Unified scheduling info.
     */
    public $TriggerWorkflowSchedulerConfigurations;

    /**
     * @var string BundleId item.
     */
    public $BundleId;

    /**
     * @var string Bundle info.
     */
    public $BundleInfo;

    /**
     * @var array General parameters configuration.
     */
    public $GeneralTaskParams;

    /**
     * @param string $ProjectId Project ID.
     * @param string $WorkflowName Workflow name.
     * @param string $ParentFolderPath Folder path.
     * @param string $WorkflowDesc Workflow description.
     * @param string $OwnerUin Workflow owner ID.
     * @param array $WorkflowParams Workflow parameter.
     * @param array $TriggerWorkflowSchedulerConfigurations Unified scheduling info.
     * @param string $BundleId BundleId item.
     * @param string $BundleInfo Bundle info.
     * @param array $GeneralTaskParams General parameters configuration.
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

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = [];
            foreach ($param["WorkflowParams"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->WorkflowParams, $obj);
            }
        }

        if (array_key_exists("TriggerWorkflowSchedulerConfigurations",$param) and $param["TriggerWorkflowSchedulerConfigurations"] !== null) {
            $this->TriggerWorkflowSchedulerConfigurations = [];
            foreach ($param["TriggerWorkflowSchedulerConfigurations"] as $key => $value){
                $obj = new WorkflowTriggerConfig();
                $obj->deserialize($value);
                array_push($this->TriggerWorkflowSchedulerConfigurations, $obj);
            }
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("GeneralTaskParams",$param) and $param["GeneralTaskParams"] !== null) {
            $this->GeneralTaskParams = [];
            foreach ($param["GeneralTaskParams"] as $key => $value){
                $obj = new WorkflowGeneralTaskParam();
                $obj->deserialize($value);
                array_push($this->GeneralTaskParams, $obj);
            }
        }
    }
}
