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
 * Plan details.
 *
 * @method string getProjectId() Obtain Project ID.

 * @method void setProjectId(string $ProjectId) Set Project ID.

 * @method string getDataBackfillPlanId() Obtain Data supplement plan id.
 * @method void setDataBackfillPlanId(string $DataBackfillPlanId) Set Data supplement plan id.
 * @method string getDataBackfillPlanName() Obtain Data supplement plan name.
 * @method void setDataBackfillPlanName(string $DataBackfillPlanName) Set Data supplement plan name.
 * @method array getTaskIds() Obtain Supplementary task collection.
 * @method void setTaskIds(array $TaskIds) Set Supplementary task collection.
 * @method array getDataBackfillRangeList() Obtain Backfill task data configuration list.
 * @method void setDataBackfillRangeList(array $DataBackfillRangeList) Set Backfill task data configuration list.
 * @method string getCheckParentType() Obtain Check parent task type. valid values: NONE (do not check ALL), ALL (check ALL upstream parent tasks), MAKE_SCOPE (check only in the selected tasks of the present replenishment plan).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckParentType(string $CheckParentType) Set Check parent task type. valid values: NONE (do not check ALL), ALL (check ALL upstream parent tasks), MAKE_SCOPE (check only in the selected tasks of the present replenishment plan).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSkipEventListening() Obtain Specifies whether to ignore event dependency during backfill.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSkipEventListening(boolean $SkipEventListening) Set Specifies whether to ignore event dependency during backfill.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRedefineParallelNum() Obtain Custom instance run degree of concurrency. return null or do not return indicates task original self-dependent.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRedefineParallelNum(integer $RedefineParallelNum) Set Custom instance run degree of concurrency. return null or do not return indicates task original self-dependent.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRedefineSelfWorkflowDependency() Obtain Custom workflow self-dependency, yes or no. if not configured, use the existing workflow self-dependency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRedefineSelfWorkflowDependency(string $RedefineSelfWorkflowDependency) Set Custom workflow self-dependency, yes or no. if not configured, use the existing workflow self-dependency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSchedulerResourceGroupId() Obtain Scheduling resource group id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSchedulerResourceGroupId(string $SchedulerResourceGroupId) Set Scheduling resource group id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIntegrationResourceGroupId() Obtain Integration resource group id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntegrationResourceGroupId(string $IntegrationResourceGroupId) Set Integration resource group id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRedefineCycleType() Obtain Backfill custom generation cycle.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRedefineCycleType(string $RedefineCycleType) Set Backfill custom generation cycle.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRedefineParamList() Obtain Custom parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRedefineParamList(array $RedefineParamList) Set Custom parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Execution start time of the backfill task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Execution start time of the backfill task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Backfill task execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Backfill task execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUserUin() Obtain Create a user id.
 * @method void setCreateUserUin(string $CreateUserUin) Set Create a user id.
 * @method integer getCompletePercent() Obtain Percentage of supplementary plan instances completed.
 * @method void setCompletePercent(integer $CompletePercent) Set Percentage of supplementary plan instances completed.
 * @method integer getSuccessPercent() Obtain Percentage of supplementary plan instances successful.
 * @method void setSuccessPercent(integer $SuccessPercent) Set Percentage of supplementary plan instances successful.
 * @method string getDataTimeOrder() Obtain Backfill follows the instance data time sequence and must meet two conditions to take effect: 1. must be tasks in the same cycle 2. execute based on dependencies, or execute based on configured execution ORDER without dependency impact  available values: - NORMAL: leave unset - ORDER: sequence - REVERSE: descending ORDER  if not set, the default is NORMAL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataTimeOrder(string $DataTimeOrder) Set Backfill follows the instance data time sequence and must meet two conditions to take effect: 1. must be tasks in the same cycle 2. execute based on dependencies, or execute based on configured execution ORDER without dependency impact  available values: - NORMAL: leave unset - ORDER: sequence - REVERSE: descending ORDER  if not set, the default is NORMAL.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataBackfill extends AbstractModel
{
    /**
     * @var string Project ID.

     */
    public $ProjectId;

    /**
     * @var string Data supplement plan id.
     */
    public $DataBackfillPlanId;

    /**
     * @var string Data supplement plan name.
     */
    public $DataBackfillPlanName;

    /**
     * @var array Supplementary task collection.
     */
    public $TaskIds;

    /**
     * @var array Backfill task data configuration list.
     */
    public $DataBackfillRangeList;

    /**
     * @var string Check parent task type. valid values: NONE (do not check ALL), ALL (check ALL upstream parent tasks), MAKE_SCOPE (check only in the selected tasks of the present replenishment plan).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckParentType;

    /**
     * @var boolean Specifies whether to ignore event dependency during backfill.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SkipEventListening;

    /**
     * @var integer Custom instance run degree of concurrency. return null or do not return indicates task original self-dependent.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RedefineParallelNum;

    /**
     * @var string Custom workflow self-dependency, yes or no. if not configured, use the existing workflow self-dependency.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RedefineSelfWorkflowDependency;

    /**
     * @var string Scheduling resource group id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SchedulerResourceGroupId;

    /**
     * @var string Integration resource group id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntegrationResourceGroupId;

    /**
     * @var string Backfill custom generation cycle.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RedefineCycleType;

    /**
     * @var array Custom parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RedefineParamList;

    /**
     * @var string Execution start time of the backfill task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Backfill task execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Create a user id.
     */
    public $CreateUserUin;

    /**
     * @var integer Percentage of supplementary plan instances completed.
     */
    public $CompletePercent;

    /**
     * @var integer Percentage of supplementary plan instances successful.
     */
    public $SuccessPercent;

    /**
     * @var string Backfill follows the instance data time sequence and must meet two conditions to take effect: 1. must be tasks in the same cycle 2. execute based on dependencies, or execute based on configured execution ORDER without dependency impact  available values: - NORMAL: leave unset - ORDER: sequence - REVERSE: descending ORDER  if not set, the default is NORMAL.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataTimeOrder;

    /**
     * @param string $ProjectId Project ID.

     * @param string $DataBackfillPlanId Data supplement plan id.
     * @param string $DataBackfillPlanName Data supplement plan name.
     * @param array $TaskIds Supplementary task collection.
     * @param array $DataBackfillRangeList Backfill task data configuration list.
     * @param string $CheckParentType Check parent task type. valid values: NONE (do not check ALL), ALL (check ALL upstream parent tasks), MAKE_SCOPE (check only in the selected tasks of the present replenishment plan).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SkipEventListening Specifies whether to ignore event dependency during backfill.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RedefineParallelNum Custom instance run degree of concurrency. return null or do not return indicates task original self-dependent.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RedefineSelfWorkflowDependency Custom workflow self-dependency, yes or no. if not configured, use the existing workflow self-dependency.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SchedulerResourceGroupId Scheduling resource group id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IntegrationResourceGroupId Integration resource group id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RedefineCycleType Backfill custom generation cycle.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RedefineParamList Custom parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Execution start time of the backfill task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Backfill task execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUserUin Create a user id.
     * @param integer $CompletePercent Percentage of supplementary plan instances completed.
     * @param integer $SuccessPercent Percentage of supplementary plan instances successful.
     * @param string $DataTimeOrder Backfill follows the instance data time sequence and must meet two conditions to take effect: 1. must be tasks in the same cycle 2. execute based on dependencies, or execute based on configured execution ORDER without dependency impact  available values: - NORMAL: leave unset - ORDER: sequence - REVERSE: descending ORDER  if not set, the default is NORMAL.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DataBackfillPlanId",$param) and $param["DataBackfillPlanId"] !== null) {
            $this->DataBackfillPlanId = $param["DataBackfillPlanId"];
        }

        if (array_key_exists("DataBackfillPlanName",$param) and $param["DataBackfillPlanName"] !== null) {
            $this->DataBackfillPlanName = $param["DataBackfillPlanName"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("DataBackfillRangeList",$param) and $param["DataBackfillRangeList"] !== null) {
            $this->DataBackfillRangeList = [];
            foreach ($param["DataBackfillRangeList"] as $key => $value){
                $obj = new DataBackfillRange();
                $obj->deserialize($value);
                array_push($this->DataBackfillRangeList, $obj);
            }
        }

        if (array_key_exists("CheckParentType",$param) and $param["CheckParentType"] !== null) {
            $this->CheckParentType = $param["CheckParentType"];
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

        if (array_key_exists("SchedulerResourceGroupId",$param) and $param["SchedulerResourceGroupId"] !== null) {
            $this->SchedulerResourceGroupId = $param["SchedulerResourceGroupId"];
        }

        if (array_key_exists("IntegrationResourceGroupId",$param) and $param["IntegrationResourceGroupId"] !== null) {
            $this->IntegrationResourceGroupId = $param["IntegrationResourceGroupId"];
        }

        if (array_key_exists("RedefineCycleType",$param) and $param["RedefineCycleType"] !== null) {
            $this->RedefineCycleType = $param["RedefineCycleType"];
        }

        if (array_key_exists("RedefineParamList",$param) and $param["RedefineParamList"] !== null) {
            $this->RedefineParamList = [];
            foreach ($param["RedefineParamList"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->RedefineParamList, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("CompletePercent",$param) and $param["CompletePercent"] !== null) {
            $this->CompletePercent = $param["CompletePercent"];
        }

        if (array_key_exists("SuccessPercent",$param) and $param["SuccessPercent"] !== null) {
            $this->SuccessPercent = $param["SuccessPercent"];
        }

        if (array_key_exists("DataTimeOrder",$param) and $param["DataTimeOrder"] !== null) {
            $this->DataTimeOrder = $param["DataTimeOrder"];
        }
    }
}
