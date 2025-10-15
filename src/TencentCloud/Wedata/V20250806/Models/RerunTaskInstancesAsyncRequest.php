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
 * RerunTaskInstancesAsync request structure.
 *
 * @method string getProjectId() Obtain Project ID.

 * @method void setProjectId(string $ProjectId) Set Project ID.

 * @method array getInstanceKeyList() Obtain Instance id list. obtain from ListInstances.
 * @method void setInstanceKeyList(array $InstanceKeyList) Set Instance id list. obtain from ListInstances.
 * @method string getRerunType() Obtain Rerun type. valid values: 1 (self), 3 (child), 2 (self and child). default: 1.
 * @method void setRerunType(string $RerunType) Set Rerun type. valid values: 1 (self), 3 (child), 2 (self and child). default: 1.
 * @method string getCheckParentType() Obtain Whether to check upstream tasks: ALL (ALL), MAKE_SCOPE (select), NONE (do not check). default is NONE.
 * @method void setCheckParentType(string $CheckParentType) Set Whether to check upstream tasks: ALL (ALL), MAKE_SCOPE (select), NONE (do not check). default is NONE.
 * @method string getSonRangeType() Obtain Downstream Instance Scope

* WORKFLOW: Within the current workflow (default)

* PROJECT: Within the current project

* ALL: Across all projects with cross-workflow dependencies
 * @method void setSonRangeType(string $SonRangeType) Set Downstream Instance Scope

* WORKFLOW: Within the current workflow (default)

* PROJECT: Within the current project

* ALL: Across all projects with cross-workflow dependencies
 * @method boolean getSkipEventListening() Obtain Specifies whether to ignore event monitoring when rerunning.
 * @method void setSkipEventListening(boolean $SkipEventListening) Set Specifies whether to ignore event monitoring when rerunning.
 * @method integer getRedefineParallelNum() Obtain Specifies the degree of concurrency for a custom instance run. if not configured, use the existing self-dependent task.
 * @method void setRedefineParallelNum(integer $RedefineParallelNum) Set Specifies the degree of concurrency for a custom instance run. if not configured, use the existing self-dependent task.
 * @method string getRedefineSelfWorkflowDependency() Obtain Custom workflow self-dependency. valid values: yes (enable), no (disable). if not configured, use the existing workflow self-dependency.
 * @method void setRedefineSelfWorkflowDependency(string $RedefineSelfWorkflowDependency) Set Custom workflow self-dependency. valid values: yes (enable), no (disable). if not configured, use the existing workflow self-dependency.
 * @method KVMap getRedefineParamList() Obtain Rerun instance custom parameter.
 * @method void setRedefineParamList(KVMap $RedefineParamList) Set Rerun instance custom parameter.
 */
class RerunTaskInstancesAsyncRequest extends AbstractModel
{
    /**
     * @var string Project ID.

     */
    public $ProjectId;

    /**
     * @var array Instance id list. obtain from ListInstances.
     */
    public $InstanceKeyList;

    /**
     * @var string Rerun type. valid values: 1 (self), 3 (child), 2 (self and child). default: 1.
     */
    public $RerunType;

    /**
     * @var string Whether to check upstream tasks: ALL (ALL), MAKE_SCOPE (select), NONE (do not check). default is NONE.
     */
    public $CheckParentType;

    /**
     * @var string Downstream Instance Scope

* WORKFLOW: Within the current workflow (default)

* PROJECT: Within the current project

* ALL: Across all projects with cross-workflow dependencies
     */
    public $SonRangeType;

    /**
     * @var boolean Specifies whether to ignore event monitoring when rerunning.
     */
    public $SkipEventListening;

    /**
     * @var integer Specifies the degree of concurrency for a custom instance run. if not configured, use the existing self-dependent task.
     */
    public $RedefineParallelNum;

    /**
     * @var string Custom workflow self-dependency. valid values: yes (enable), no (disable). if not configured, use the existing workflow self-dependency.
     */
    public $RedefineSelfWorkflowDependency;

    /**
     * @var KVMap Rerun instance custom parameter.
     */
    public $RedefineParamList;

    /**
     * @param string $ProjectId Project ID.

     * @param array $InstanceKeyList Instance id list. obtain from ListInstances.
     * @param string $RerunType Rerun type. valid values: 1 (self), 3 (child), 2 (self and child). default: 1.
     * @param string $CheckParentType Whether to check upstream tasks: ALL (ALL), MAKE_SCOPE (select), NONE (do not check). default is NONE.
     * @param string $SonRangeType Downstream Instance Scope

* WORKFLOW: Within the current workflow (default)

* PROJECT: Within the current project

* ALL: Across all projects with cross-workflow dependencies
     * @param boolean $SkipEventListening Specifies whether to ignore event monitoring when rerunning.
     * @param integer $RedefineParallelNum Specifies the degree of concurrency for a custom instance run. if not configured, use the existing self-dependent task.
     * @param string $RedefineSelfWorkflowDependency Custom workflow self-dependency. valid values: yes (enable), no (disable). if not configured, use the existing workflow self-dependency.
     * @param KVMap $RedefineParamList Rerun instance custom parameter.
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

        if (array_key_exists("InstanceKeyList",$param) and $param["InstanceKeyList"] !== null) {
            $this->InstanceKeyList = $param["InstanceKeyList"];
        }

        if (array_key_exists("RerunType",$param) and $param["RerunType"] !== null) {
            $this->RerunType = $param["RerunType"];
        }

        if (array_key_exists("CheckParentType",$param) and $param["CheckParentType"] !== null) {
            $this->CheckParentType = $param["CheckParentType"];
        }

        if (array_key_exists("SonRangeType",$param) and $param["SonRangeType"] !== null) {
            $this->SonRangeType = $param["SonRangeType"];
        }

        if (array_key_exists("SkipEventListening",$param) and $param["SkipEventListening"] !== null) {
            $this->SkipEventListening = $param["SkipEventListening"];
        }

        if (array_key_exists("RedefineParallelNum",$param) and $param["RedefineParallelNum"] !== null) {
            $this->RedefineParallelNum = $param["RedefineParallelNum"];
        }

        if (array_key_exists("RedefineSelfWorkflowDependency",$param) and $param["RedefineSelfWorkflowDependency"] !== null) {
            $this->RedefineSelfWorkflowDependency = $param["RedefineSelfWorkflowDependency"];
        }

        if (array_key_exists("RedefineParamList",$param) and $param["RedefineParamList"] !== null) {
            $this->RedefineParamList = new KVMap();
            $this->RedefineParamList->deserialize($param["RedefineParamList"]);
        }
    }
}
