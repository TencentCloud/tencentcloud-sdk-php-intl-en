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
 * CreateOpsMakePlan request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getMakeName() Obtain Supplemental Plan Name
 * @method void setMakeName(string $MakeName) Set Supplemental Plan Name
 * @method array getTaskIdList() Obtain Supplementary Task Collection
 * @method void setTaskIdList(array $TaskIdList) Set Supplementary Task Collection
 * @method array getMakeDatetimeList() Obtain Supplementary Plan Date Range
 * @method void setMakeDatetimeList(array $MakeDatetimeList) Set Supplementary Plan Date Range
 * @method string getProjectIdent() Obtain Project Identifier
 * @method void setProjectIdent(string $ProjectIdent) Set Project Identifier
 * @method boolean getCheckParent() Obtain Check Parent Task Status for Supplement, default is not to check. Not recommended for use, will be deprecated, recommend using CheckParentType.
 * @method void setCheckParent(boolean $CheckParent) Set Check Parent Task Status for Supplement, default is not to check. Not recommended for use, will be deprecated, recommend using CheckParentType.
 * @method string getCheckParentType() Obtain Check Parent Task Type for Supplementary. Value range:
<li> NONE: Do not check any </li>
<li> ALL: Check all upstream parent tasks </li>
<li> MAKE_SCOPE: Check only within the selected tasks of (the current supplementary plan) </li>
 * @method void setCheckParentType(string $CheckParentType) Set Check Parent Task Type for Supplementary. Value range:
<li> NONE: Do not check any </li>
<li> ALL: Check all upstream parent tasks </li>
<li> MAKE_SCOPE: Check only within the selected tasks of (the current supplementary plan) </li>
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method string getSelfDependence() Obtain Deprecated. Task Self-Dependency Type: parallel, serial (unordered parallel), orderly (ordered serial)
 * @method void setSelfDependence(string $SelfDependence) Set Deprecated. Task Self-Dependency Type: parallel, serial (unordered parallel), orderly (ordered serial)
 * @method integer getParallelNum() Obtain Parallelism
 * @method void setParallelNum(integer $ParallelNum) Set Parallelism
 * @method boolean getSameCycle() Obtain Is the generation cycle of the supplementary instance the same as the original cycle, default is true
 * @method void setSameCycle(boolean $SameCycle) Set Is the generation cycle of the supplementary instance the same as the original cycle, default is true
 * @method string getTargetTaskCycle() Obtain Supplementary Instance Target Cycle Type
 * @method void setTargetTaskCycle(string $TargetTaskCycle) Set Supplementary Instance Target Cycle Type
 * @method integer getTargetTaskAction() Obtain Specified Time for Supplementary Instance Target Cycle Type
 * @method void setTargetTaskAction(integer $TargetTaskAction) Set Specified Time for Supplementary Instance Target Cycle Type
 * @method array getMapParamList() Obtain Custom Parameters for Supplement Instance
 * @method void setMapParamList(array $MapParamList) Set Custom Parameters for Supplement Instance
 * @method string getCreatorId() Obtain Creator ID
 * @method void setCreatorId(string $CreatorId) Set Creator ID
 * @method string getCreator() Obtain Creator
 * @method void setCreator(string $Creator) Set Creator
 * @method string getRemark() Obtain Supplementary Plan Description
 * @method void setRemark(string $Remark) Set Supplementary Plan Description
 * @method boolean getSameSelfDependType() Obtain Use Original Self-Dependency Configuration of Task, default is true
 * @method void setSameSelfDependType(boolean $SameSelfDependType) Set Use Original Self-Dependency Configuration of Task, default is true
 * @method string getSourceTaskCycle() Obtain Supplementary Instance Original Cycle Type
 * @method void setSourceTaskCycle(string $SourceTaskCycle) Set Supplementary Instance Original Cycle Type
 * @method string getSchedulerResourceGroup() Obtain If no specified scheduling resource group (ID) is provided, the original task scheduling execution resource group will be used
 * @method void setSchedulerResourceGroup(string $SchedulerResourceGroup) Set If no specified scheduling resource group (ID) is provided, the original task scheduling execution resource group will be used
 * @method string getIntegrationResourceGroup() Obtain If no specified integration resource group (ID) is provided, the original task integration execution resource group will be used
 * @method void setIntegrationResourceGroup(string $IntegrationResourceGroup) Set If no specified integration resource group (ID) is provided, the original task integration execution resource group will be used
 * @method string getSchedulerResourceGroupName() Obtain If no specified scheduling resource group name is provided, the original task scheduling execution resource group will be used
 * @method void setSchedulerResourceGroupName(string $SchedulerResourceGroupName) Set If no specified scheduling resource group name is provided, the original task scheduling execution resource group will be used
 * @method string getIntegrationResourceGroupName() Obtain If no specified integration resource group name is provided, the original task integration execution resource group will be used
 * @method void setIntegrationResourceGroupName(string $IntegrationResourceGroupName) Set If no specified integration resource group name is provided, the original task integration execution resource group will be used
 */
class CreateOpsMakePlanRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Supplemental Plan Name
     */
    public $MakeName;

    /**
     * @var array Supplementary Task Collection
     */
    public $TaskIdList;

    /**
     * @var array Supplementary Plan Date Range
     */
    public $MakeDatetimeList;

    /**
     * @var string Project Identifier
     */
    public $ProjectIdent;

    /**
     * @var boolean Check Parent Task Status for Supplement, default is not to check. Not recommended for use, will be deprecated, recommend using CheckParentType.
     */
    public $CheckParent;

    /**
     * @var string Check Parent Task Type for Supplementary. Value range:
<li> NONE: Do not check any </li>
<li> ALL: Check all upstream parent tasks </li>
<li> MAKE_SCOPE: Check only within the selected tasks of (the current supplementary plan) </li>
     */
    public $CheckParentType;

    /**
     * @var string Project name
     */
    public $ProjectName;

    /**
     * @var string Deprecated. Task Self-Dependency Type: parallel, serial (unordered parallel), orderly (ordered serial)
     */
    public $SelfDependence;

    /**
     * @var integer Parallelism
     */
    public $ParallelNum;

    /**
     * @var boolean Is the generation cycle of the supplementary instance the same as the original cycle, default is true
     */
    public $SameCycle;

    /**
     * @var string Supplementary Instance Target Cycle Type
     */
    public $TargetTaskCycle;

    /**
     * @var integer Specified Time for Supplementary Instance Target Cycle Type
     */
    public $TargetTaskAction;

    /**
     * @var array Custom Parameters for Supplement Instance
     */
    public $MapParamList;

    /**
     * @var string Creator ID
     */
    public $CreatorId;

    /**
     * @var string Creator
     */
    public $Creator;

    /**
     * @var string Supplementary Plan Description
     */
    public $Remark;

    /**
     * @var boolean Use Original Self-Dependency Configuration of Task, default is true
     */
    public $SameSelfDependType;

    /**
     * @var string Supplementary Instance Original Cycle Type
     */
    public $SourceTaskCycle;

    /**
     * @var string If no specified scheduling resource group (ID) is provided, the original task scheduling execution resource group will be used
     */
    public $SchedulerResourceGroup;

    /**
     * @var string If no specified integration resource group (ID) is provided, the original task integration execution resource group will be used
     */
    public $IntegrationResourceGroup;

    /**
     * @var string If no specified scheduling resource group name is provided, the original task scheduling execution resource group will be used
     */
    public $SchedulerResourceGroupName;

    /**
     * @var string If no specified integration resource group name is provided, the original task integration execution resource group will be used
     */
    public $IntegrationResourceGroupName;

    /**
     * @param string $ProjectId Project ID
     * @param string $MakeName Supplemental Plan Name
     * @param array $TaskIdList Supplementary Task Collection
     * @param array $MakeDatetimeList Supplementary Plan Date Range
     * @param string $ProjectIdent Project Identifier
     * @param boolean $CheckParent Check Parent Task Status for Supplement, default is not to check. Not recommended for use, will be deprecated, recommend using CheckParentType.
     * @param string $CheckParentType Check Parent Task Type for Supplementary. Value range:
<li> NONE: Do not check any </li>
<li> ALL: Check all upstream parent tasks </li>
<li> MAKE_SCOPE: Check only within the selected tasks of (the current supplementary plan) </li>
     * @param string $ProjectName Project name
     * @param string $SelfDependence Deprecated. Task Self-Dependency Type: parallel, serial (unordered parallel), orderly (ordered serial)
     * @param integer $ParallelNum Parallelism
     * @param boolean $SameCycle Is the generation cycle of the supplementary instance the same as the original cycle, default is true
     * @param string $TargetTaskCycle Supplementary Instance Target Cycle Type
     * @param integer $TargetTaskAction Specified Time for Supplementary Instance Target Cycle Type
     * @param array $MapParamList Custom Parameters for Supplement Instance
     * @param string $CreatorId Creator ID
     * @param string $Creator Creator
     * @param string $Remark Supplementary Plan Description
     * @param boolean $SameSelfDependType Use Original Self-Dependency Configuration of Task, default is true
     * @param string $SourceTaskCycle Supplementary Instance Original Cycle Type
     * @param string $SchedulerResourceGroup If no specified scheduling resource group (ID) is provided, the original task scheduling execution resource group will be used
     * @param string $IntegrationResourceGroup If no specified integration resource group (ID) is provided, the original task integration execution resource group will be used
     * @param string $SchedulerResourceGroupName If no specified scheduling resource group name is provided, the original task scheduling execution resource group will be used
     * @param string $IntegrationResourceGroupName If no specified integration resource group name is provided, the original task integration execution resource group will be used
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

        if (array_key_exists("MakeName",$param) and $param["MakeName"] !== null) {
            $this->MakeName = $param["MakeName"];
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

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("CheckParent",$param) and $param["CheckParent"] !== null) {
            $this->CheckParent = $param["CheckParent"];
        }

        if (array_key_exists("CheckParentType",$param) and $param["CheckParentType"] !== null) {
            $this->CheckParentType = $param["CheckParentType"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("SelfDependence",$param) and $param["SelfDependence"] !== null) {
            $this->SelfDependence = $param["SelfDependence"];
        }

        if (array_key_exists("ParallelNum",$param) and $param["ParallelNum"] !== null) {
            $this->ParallelNum = $param["ParallelNum"];
        }

        if (array_key_exists("SameCycle",$param) and $param["SameCycle"] !== null) {
            $this->SameCycle = $param["SameCycle"];
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SameSelfDependType",$param) and $param["SameSelfDependType"] !== null) {
            $this->SameSelfDependType = $param["SameSelfDependType"];
        }

        if (array_key_exists("SourceTaskCycle",$param) and $param["SourceTaskCycle"] !== null) {
            $this->SourceTaskCycle = $param["SourceTaskCycle"];
        }

        if (array_key_exists("SchedulerResourceGroup",$param) and $param["SchedulerResourceGroup"] !== null) {
            $this->SchedulerResourceGroup = $param["SchedulerResourceGroup"];
        }

        if (array_key_exists("IntegrationResourceGroup",$param) and $param["IntegrationResourceGroup"] !== null) {
            $this->IntegrationResourceGroup = $param["IntegrationResourceGroup"];
        }

        if (array_key_exists("SchedulerResourceGroupName",$param) and $param["SchedulerResourceGroupName"] !== null) {
            $this->SchedulerResourceGroupName = $param["SchedulerResourceGroupName"];
        }

        if (array_key_exists("IntegrationResourceGroupName",$param) and $param["IntegrationResourceGroupName"] !== null) {
            $this->IntegrationResourceGroupName = $param["IntegrationResourceGroupName"];
        }
    }
}
