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
 * Query workflow details.
 *
 * @method string getWorkflowName() Obtain Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwnerUin() Obtain Responsible person ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUin(string $OwnerUin) Set Responsible person ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUserUin() Obtain Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getWorkflowParams() Obtain Workflow parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowParams(array $WorkflowParams) Set Workflow parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTriggerWorkflowSchedulerConfigurations() Obtain Unify scheduling parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerWorkflowSchedulerConfigurations(array $TriggerWorkflowSchedulerConfigurations) Set Unify scheduling parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowDesc() Obtain Workflow description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowDesc(string $WorkflowDesc) Set Workflow description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain Workflow path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Workflow path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBundleId() Obtain BundleId item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBundleId(string $BundleId) Set BundleId item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBundleInfo() Obtain BundleInfo item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBundleInfo(string $BundleInfo) Set BundleInfo item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getGeneralTaskParams() Obtain General parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGeneralTaskParams(array $GeneralTaskParams) Set General parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSchedulerStatus() Obtain Trigger status: ACTIVE (start), PAUSED (suspend).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSchedulerStatus(string $SchedulerStatus) Set Trigger status: ACTIVE (start), PAUSED (suspend).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TriggerWorkflowDetail extends AbstractModel
{
    /**
     * @var string Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowName;

    /**
     * @var string Responsible person ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUin;

    /**
     * @var string Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUserUin;

    /**
     * @var array Workflow parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowParams;

    /**
     * @var array Unify scheduling parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerWorkflowSchedulerConfigurations;

    /**
     * @var string Workflow description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowDesc;

    /**
     * @var string Workflow path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string BundleId item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BundleId;

    /**
     * @var string BundleInfo item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BundleInfo;

    /**
     * @var array General parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GeneralTaskParams;

    /**
     * @var string Trigger status: ACTIVE (start), PAUSED (suspend).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SchedulerStatus;

    /**
     * @param string $WorkflowName Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OwnerUin Responsible person ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUserUin Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $WorkflowParams Workflow parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TriggerWorkflowSchedulerConfigurations Unify scheduling parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowDesc Workflow description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Path Workflow path.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BundleId BundleId item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BundleInfo BundleInfo item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $GeneralTaskParams General parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SchedulerStatus Trigger status: ACTIVE (start), PAUSED (suspend).
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("GeneralTaskParams",$param) and $param["GeneralTaskParams"] !== null) {
            $this->GeneralTaskParams = [];
            foreach ($param["GeneralTaskParams"] as $key => $value){
                $obj = new WorkflowGeneralTaskParam();
                $obj->deserialize($value);
                array_push($this->GeneralTaskParams, $obj);
            }
        }

        if (array_key_exists("SchedulerStatus",$param) and $param["SchedulerStatus"] !== null) {
            $this->SchedulerStatus = $param["SchedulerStatus"];
        }
    }
}
