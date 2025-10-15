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
 * Describes the workflow details.
 *
 * @method string getWorkflowName() Obtain Workflow name.

 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.

 * @method string getOwnerUin() Obtain Owner ID.
 * @method void setOwnerUin(string $OwnerUin) Set Owner ID.
 * @method string getCreateUserUin() Obtain Creator ID.
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator ID.
 * @method string getWorkflowType() Obtain Workflow type. Valid values: cycle or manual.

 * @method void setWorkflowType(string $WorkflowType) Set Workflow type. Valid values: cycle or manual.

 * @method array getWorkflowParams() Obtain Workflow parameter array.
 * @method void setWorkflowParams(array $WorkflowParams) Set Workflow parameter array.
 * @method WorkflowSchedulerConfiguration getWorkflowSchedulerConfiguration() Obtain Unified scheduling parameter.
.
 * @method void setWorkflowSchedulerConfiguration(WorkflowSchedulerConfiguration $WorkflowSchedulerConfiguration) Set Unified scheduling parameter.
.
 * @method string getWorkflowDesc() Obtain Workflow description.

 * @method void setWorkflowDesc(string $WorkflowDesc) Set Workflow description.

 * @method string getPath() Obtain Workflow path.
 * @method void setPath(string $Path) Set Workflow path.
 * @method string getBundleId() Obtain BundleId item.
 * @method void setBundleId(string $BundleId) Set BundleId item.
 * @method string getBundleInfo() Obtain BundleInfo item. specifies the bundle information.

 * @method void setBundleInfo(string $BundleInfo) Set BundleInfo item. specifies the bundle information.
 */
class WorkflowDetail extends AbstractModel
{
    /**
     * @var string Workflow name.

     */
    public $WorkflowName;

    /**
     * @var string Owner ID.
     */
    public $OwnerUin;

    /**
     * @var string Creator ID.
     */
    public $CreateUserUin;

    /**
     * @var string Workflow type. Valid values: cycle or manual.

     */
    public $WorkflowType;

    /**
     * @var array Workflow parameter array.
     */
    public $WorkflowParams;

    /**
     * @var WorkflowSchedulerConfiguration Unified scheduling parameter.
.
     */
    public $WorkflowSchedulerConfiguration;

    /**
     * @var string Workflow description.

     */
    public $WorkflowDesc;

    /**
     * @var string Workflow path.
     */
    public $Path;

    /**
     * @var string BundleId item.
     */
    public $BundleId;

    /**
     * @var string BundleInfo item. specifies the bundle information.

     */
    public $BundleInfo;

    /**
     * @param string $WorkflowName Workflow name.

     * @param string $OwnerUin Owner ID.
     * @param string $CreateUserUin Creator ID.
     * @param string $WorkflowType Workflow type. Valid values: cycle or manual.

     * @param array $WorkflowParams Workflow parameter array.
     * @param WorkflowSchedulerConfiguration $WorkflowSchedulerConfiguration Unified scheduling parameter.
.
     * @param string $WorkflowDesc Workflow description.

     * @param string $Path Workflow path.
     * @param string $BundleId BundleId item.
     * @param string $BundleInfo BundleInfo item. specifies the bundle information.
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
        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
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
            $this->WorkflowSchedulerConfiguration = new WorkflowSchedulerConfiguration();
            $this->WorkflowSchedulerConfiguration->deserialize($param["WorkflowSchedulerConfiguration"]);
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
