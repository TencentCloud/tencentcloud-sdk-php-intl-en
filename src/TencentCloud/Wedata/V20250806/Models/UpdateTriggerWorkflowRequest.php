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
 * UpdateTriggerWorkflow request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method string getOwnerUin() Obtain Responsible person ID.
 * @method void setOwnerUin(string $OwnerUin) Set Responsible person ID.
 * @method string getWorkflowDesc() Obtain Remarks
 * @method void setWorkflowDesc(string $WorkflowDesc) Set Remarks
 * @method array getWorkflowParams() Obtain Workflow parameter list.
 * @method void setWorkflowParams(array $WorkflowParams) Set Workflow parameter list.
 * @method array getTriggerWorkflowSchedulerConfigurations() Obtain Unify scheduling parameters.
 * @method void setTriggerWorkflowSchedulerConfigurations(array $TriggerWorkflowSchedulerConfigurations) Set Unify scheduling parameters.
 * @method string getBundleId() Obtain BundleId item.
 * @method void setBundleId(string $BundleId) Set BundleId item.
 * @method string getBundleInfo() Obtain Bundle info.
 * @method void setBundleInfo(string $BundleInfo) Set Bundle info.
 * @method array getGeneralTaskParams() Obtain General parameters configuration.
 * @method void setGeneralTaskParams(array $GeneralTaskParams) Set General parameters configuration.
 */
class UpdateTriggerWorkflowRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Workflow ID.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
     */
    public $WorkflowName;

    /**
     * @var string Responsible person ID.
     */
    public $OwnerUin;

    /**
     * @var string Remarks
     */
    public $WorkflowDesc;

    /**
     * @var array Workflow parameter list.
     */
    public $WorkflowParams;

    /**
     * @var array Unify scheduling parameters.
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
     * @param string $WorkflowId Workflow ID.
     * @param string $WorkflowName Workflow name.
     * @param string $OwnerUin Responsible person ID.
     * @param string $WorkflowDesc Remarks
     * @param array $WorkflowParams Workflow parameter list.
     * @param array $TriggerWorkflowSchedulerConfigurations Unify scheduling parameters.
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
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
