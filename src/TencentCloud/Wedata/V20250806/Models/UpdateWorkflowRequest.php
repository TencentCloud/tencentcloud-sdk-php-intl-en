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
 * UpdateWorkflow request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method string getOwnerUin() Obtain Owner ID.
 * @method void setOwnerUin(string $OwnerUin) Set Owner ID.
 * @method string getWorkflowDesc() Obtain Remarks.
 * @method void setWorkflowDesc(string $WorkflowDesc) Set Remarks.
 * @method array getWorkflowParams() Obtain Workflow parameter list.
 * @method void setWorkflowParams(array $WorkflowParams) Set Workflow parameter list.
 * @method WorkflowSchedulerConfigurationInfo getWorkflowSchedulerConfiguration() Obtain Specifies unified scheduling parameters.
 * @method void setWorkflowSchedulerConfiguration(WorkflowSchedulerConfigurationInfo $WorkflowSchedulerConfiguration) Set Specifies unified scheduling parameters.
 * @method string getBundleId() Obtain BundleId item.
 * @method void setBundleId(string $BundleId) Set BundleId item.
 * @method string getBundleInfo() Obtain Bundle info.
 * @method void setBundleInfo(string $BundleInfo) Set Bundle info.
 */
class UpdateWorkflowRequest extends AbstractModel
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
     * @var string Owner ID.
     */
    public $OwnerUin;

    /**
     * @var string Remarks.
     */
    public $WorkflowDesc;

    /**
     * @var array Workflow parameter list.
     */
    public $WorkflowParams;

    /**
     * @var WorkflowSchedulerConfigurationInfo Specifies unified scheduling parameters.
     */
    public $WorkflowSchedulerConfiguration;

    /**
     * @var string BundleId item.
     */
    public $BundleId;

    /**
     * @var string Bundle info.
     */
    public $BundleInfo;

    /**
     * @param string $ProjectId Project ID.
     * @param string $WorkflowId Workflow ID.
     * @param string $WorkflowName Workflow name.
     * @param string $OwnerUin Owner ID.
     * @param string $WorkflowDesc Remarks.
     * @param array $WorkflowParams Workflow parameter list.
     * @param WorkflowSchedulerConfigurationInfo $WorkflowSchedulerConfiguration Specifies unified scheduling parameters.
     * @param string $BundleId BundleId item.
     * @param string $BundleInfo Bundle info.
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

        if (array_key_exists("WorkflowSchedulerConfiguration",$param) and $param["WorkflowSchedulerConfiguration"] !== null) {
            $this->WorkflowSchedulerConfiguration = new WorkflowSchedulerConfigurationInfo();
            $this->WorkflowSchedulerConfiguration->deserialize($param["WorkflowSchedulerConfiguration"]);
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
