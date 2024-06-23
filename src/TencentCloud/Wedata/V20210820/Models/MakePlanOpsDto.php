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
 * Supplemental Plan
 *
 * @method string getPlanId() Obtain Supplement Plan ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPlanId(string $PlanId) Set Supplement Plan ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMakeName() Obtain Supplement Plan Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMakeName(string $MakeName) Set Supplement Plan Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getCheckParent() Obtain Check Parent Task Status for Supplement
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCheckParent(boolean $CheckParent) Set Check Parent Task Status for Supplement
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getSameSelfDependType() Obtain Use Original Task Self-Dependency Configuration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSameSelfDependType(boolean $SameSelfDependType) Set Use Original Task Self-Dependency Configuration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getParallelNum() Obtain Concurrency, effective when SameSelfDependType is false
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParallelNum(integer $ParallelNum) Set Concurrency, effective when SameSelfDependType is false
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getSameCycle() Obtain Modify Supplement Instance Generation Period
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSameCycle(boolean $SameCycle) Set Modify Supplement Instance Generation Period
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSourceTaskCycle() Obtain Scheduling Cycle Conversion Method - Original Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceTaskCycle(string $SourceTaskCycle) Set Scheduling Cycle Conversion Method - Original Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetTaskCycle() Obtain Scheduling Cycle Conversion Method - Target Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetTaskCycle(string $TargetTaskCycle) Set Scheduling Cycle Conversion Method - Target Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTargetTaskAction() Obtain Scheduling Cycle Conversion Method - Specific Time for Target Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetTaskAction(integer $TargetTaskAction) Set Scheduling Cycle Conversion Method - Specific Time for Target Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getMapParamList() Obtain Supplement Instance From Definition Parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMapParamList(array $MapParamList) Set Supplement Instance From Definition Parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreatorId() Obtain Creator ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreatorId(string $CreatorId) Set Creator ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreator() Obtain Creator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreator(string $Creator) Set Creator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getTaskIdList() Obtain Supplementary Task ID Collection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskIdList(array $TaskIdList) Set Supplementary Task ID Collection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getMakeDatetimeList() Obtain Supplementary Plan Date Range
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMakeDatetimeList(array $MakeDatetimeList) Set Supplementary Plan Date Range
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRemark() Obtain Supplementary Plan Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemark(string $Remark) Set Supplementary Plan Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSchedulerResourceGroup() Obtain Supplementary Designated Scheduling Resource Group (ID)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchedulerResourceGroup(string $SchedulerResourceGroup) Set Supplementary Designated Scheduling Resource Group (ID)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSchedulerResourceGroupName() Obtain Supplementary Scheduled Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchedulerResourceGroupName(string $SchedulerResourceGroupName) Set Supplementary Scheduled Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getIntegrationResourceGroup() Obtain Supplementary Designated Integration Resource Group (ID)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIntegrationResourceGroup(string $IntegrationResourceGroup) Set Supplementary Designated Integration Resource Group (ID)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getIntegrationResourceGroupName() Obtain Supplementary Integrated Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIntegrationResourceGroupName(string $IntegrationResourceGroupName) Set Supplementary Integrated Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTaskCount() Obtain Number of Supplementary Plan Tasks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskCount(integer $TaskCount) Set Number of Supplementary Plan Tasks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCompletePercent() Obtain Percentage of Supplementary Plan Instances Completed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCompletePercent(integer $CompletePercent) Set Percentage of Supplementary Plan Instances Completed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSuccessPercent() Obtain Percentage of Supplementary Plan Instances Successful
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSuccessPercent(integer $SuccessPercent) Set Percentage of Supplementary Plan Instances Successful
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCheckParentType() Obtain Check Parent Task Type for Supplementary. Value range:
<li> NONE: Do not check any </li>
<li> ALL: Check all upstream parent tasks </li>
<li> MAKE_SCOPE: Check only within the selected tasks of (the current supplementary plan) </li>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCheckParentType(string $CheckParentType) Set Check Parent Task Type for Supplementary. Value range:
<li> NONE: Do not check any </li>
<li> ALL: Check all upstream parent tasks </li>
<li> MAKE_SCOPE: Check only within the selected tasks of (the current supplementary plan) </li>
Note: This field may return null, indicating that no valid value can be obtained.
 */
class MakePlanOpsDto extends AbstractModel
{
    /**
     * @var string Supplement Plan ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PlanId;

    /**
     * @var string Supplement Plan Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MakeName;

    /**
     * @var string Project ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var boolean Check Parent Task Status for Supplement
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CheckParent;

    /**
     * @var boolean Use Original Task Self-Dependency Configuration
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SameSelfDependType;

    /**
     * @var integer Concurrency, effective when SameSelfDependType is false
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParallelNum;

    /**
     * @var boolean Modify Supplement Instance Generation Period
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SameCycle;

    /**
     * @var string Scheduling Cycle Conversion Method - Original Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceTaskCycle;

    /**
     * @var string Scheduling Cycle Conversion Method - Target Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetTaskCycle;

    /**
     * @var integer Scheduling Cycle Conversion Method - Specific Time for Target Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetTaskAction;

    /**
     * @var array Supplement Instance From Definition Parameters
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MapParamList;

    /**
     * @var string Creator ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreatorId;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Creator;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var array Supplementary Task ID Collection
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskIdList;

    /**
     * @var array Supplementary Plan Date Range
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MakeDatetimeList;

    /**
     * @var string Supplementary Plan Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Remark;

    /**
     * @var string Supplementary Designated Scheduling Resource Group (ID)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SchedulerResourceGroup;

    /**
     * @var string Supplementary Scheduled Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SchedulerResourceGroupName;

    /**
     * @var string Supplementary Designated Integration Resource Group (ID)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IntegrationResourceGroup;

    /**
     * @var string Supplementary Integrated Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IntegrationResourceGroupName;

    /**
     * @var integer Number of Supplementary Plan Tasks
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskCount;

    /**
     * @var integer Percentage of Supplementary Plan Instances Completed
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CompletePercent;

    /**
     * @var integer Percentage of Supplementary Plan Instances Successful
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SuccessPercent;

    /**
     * @var string Check Parent Task Type for Supplementary. Value range:
<li> NONE: Do not check any </li>
<li> ALL: Check all upstream parent tasks </li>
<li> MAKE_SCOPE: Check only within the selected tasks of (the current supplementary plan) </li>
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CheckParentType;

    /**
     * @param string $PlanId Supplement Plan ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MakeName Supplement Plan Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $CheckParent Check Parent Task Status for Supplement
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $SameSelfDependType Use Original Task Self-Dependency Configuration
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ParallelNum Concurrency, effective when SameSelfDependType is false
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $SameCycle Modify Supplement Instance Generation Period
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SourceTaskCycle Scheduling Cycle Conversion Method - Original Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetTaskCycle Scheduling Cycle Conversion Method - Target Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TargetTaskAction Scheduling Cycle Conversion Method - Specific Time for Target Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $MapParamList Supplement Instance From Definition Parameters
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreatorId Creator ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Creator Creator
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $TaskIdList Supplementary Task ID Collection
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $MakeDatetimeList Supplementary Plan Date Range
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Remark Supplementary Plan Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SchedulerResourceGroup Supplementary Designated Scheduling Resource Group (ID)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SchedulerResourceGroupName Supplementary Scheduled Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $IntegrationResourceGroup Supplementary Designated Integration Resource Group (ID)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $IntegrationResourceGroupName Supplementary Integrated Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TaskCount Number of Supplementary Plan Tasks
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CompletePercent Percentage of Supplementary Plan Instances Completed
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SuccessPercent Percentage of Supplementary Plan Instances Successful
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CheckParentType Check Parent Task Type for Supplementary. Value range:
<li> NONE: Do not check any </li>
<li> ALL: Check all upstream parent tasks </li>
<li> MAKE_SCOPE: Check only within the selected tasks of (the current supplementary plan) </li>
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("MakeName",$param) and $param["MakeName"] !== null) {
            $this->MakeName = $param["MakeName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CheckParent",$param) and $param["CheckParent"] !== null) {
            $this->CheckParent = $param["CheckParent"];
        }

        if (array_key_exists("SameSelfDependType",$param) and $param["SameSelfDependType"] !== null) {
            $this->SameSelfDependType = $param["SameSelfDependType"];
        }

        if (array_key_exists("ParallelNum",$param) and $param["ParallelNum"] !== null) {
            $this->ParallelNum = $param["ParallelNum"];
        }

        if (array_key_exists("SameCycle",$param) and $param["SameCycle"] !== null) {
            $this->SameCycle = $param["SameCycle"];
        }

        if (array_key_exists("SourceTaskCycle",$param) and $param["SourceTaskCycle"] !== null) {
            $this->SourceTaskCycle = $param["SourceTaskCycle"];
        }

        if (array_key_exists("TargetTaskCycle",$param) and $param["TargetTaskCycle"] !== null) {
            $this->TargetTaskCycle = $param["TargetTaskCycle"];
        }

        if (array_key_exists("TargetTaskAction",$param) and $param["TargetTaskAction"] !== null) {
            $this->TargetTaskAction = $param["TargetTaskAction"];
        }

        if (array_key_exists("MapParamList",$param) and $param["MapParamList"] !== null) {
            $this->MapParamList = [];
            foreach ($param["MapParamList"] as $key => $value){
                $obj = new StrToStrMap();
                $obj->deserialize($value);
                array_push($this->MapParamList, $obj);
            }
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("MakeDatetimeList",$param) and $param["MakeDatetimeList"] !== null) {
            $this->MakeDatetimeList = [];
            foreach ($param["MakeDatetimeList"] as $key => $value){
                $obj = new CreateMakeDatetimeInfo();
                $obj->deserialize($value);
                array_push($this->MakeDatetimeList, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SchedulerResourceGroup",$param) and $param["SchedulerResourceGroup"] !== null) {
            $this->SchedulerResourceGroup = $param["SchedulerResourceGroup"];
        }

        if (array_key_exists("SchedulerResourceGroupName",$param) and $param["SchedulerResourceGroupName"] !== null) {
            $this->SchedulerResourceGroupName = $param["SchedulerResourceGroupName"];
        }

        if (array_key_exists("IntegrationResourceGroup",$param) and $param["IntegrationResourceGroup"] !== null) {
            $this->IntegrationResourceGroup = $param["IntegrationResourceGroup"];
        }

        if (array_key_exists("IntegrationResourceGroupName",$param) and $param["IntegrationResourceGroupName"] !== null) {
            $this->IntegrationResourceGroupName = $param["IntegrationResourceGroupName"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("CompletePercent",$param) and $param["CompletePercent"] !== null) {
            $this->CompletePercent = $param["CompletePercent"];
        }

        if (array_key_exists("SuccessPercent",$param) and $param["SuccessPercent"] !== null) {
            $this->SuccessPercent = $param["SuccessPercent"];
        }

        if (array_key_exists("CheckParentType",$param) and $param["CheckParentType"] !== null) {
            $this->CheckParentType = $param["CheckParentType"];
        }
    }
}
