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
 * DescribeScheduleInstances request structure.
 *
 * @method array getInstances() Obtain Instance List
 * @method void setInstances(array $Instances) Set Instance List
 * @method boolean getCheckFather() Obtain Check Parent Task Type, true: Check parent task; false: Do not check parent task
 * @method void setCheckFather(boolean $CheckFather) Set Check Parent Task Type, true: Check parent task; false: Do not check parent task
 * @method string getRerunType() Obtain Rerun Type, 1: Self; 3: Child; 2: Self and Child
 * @method void setRerunType(string $RerunType) Set Rerun Type, 1: Self; 3: Child; 2: Self and Child
 * @method string getDependentWay() Obtain Instance Dependency Mode, 1: Self-dependent; 2: Task-dependent; 3: Self and Parent-Child dependent
 * @method void setDependentWay(string $DependentWay) Set Instance Dependency Mode, 1: Self-dependent; 2: Task-dependent; 3: Self and Parent-Child dependent
 * @method boolean getSkipEventListening() Obtain Rerun Ignore Event Listening or Not
 * @method void setSkipEventListening(boolean $SkipEventListening) Set Rerun Ignore Event Listening or Not
 * @method string getSonInstanceType() Obtain Downstream Instance Range 1: Within the workflow 2: Within the project 3: Across all workflows dependent on the project
 * @method void setSonInstanceType(string $SonInstanceType) Set Downstream Instance Range 1: Within the workflow 2: Within the project 3: Across all workflows dependent on the project
 * @method InstanceApiOpsRequest getSearchCondition() Obtain Query conditions
 * @method void setSearchCondition(InstanceApiOpsRequest $SearchCondition) Set Query conditions
 * @method string getOptType() Obtain Access type
 * @method void setOptType(string $OptType) Set Access type
 * @method string getOperatorName() Obtain Operator Name
 * @method void setOperatorName(string $OperatorName) Set Operator Name
 * @method string getOperatorId() Obtain Operator ID
 * @method void setOperatorId(string $OperatorId) Set Operator ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getProjectIdent() Obtain Project Identifier
 * @method void setProjectIdent(string $ProjectIdent) Set Project Identifier
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method integer getPageIndex() Obtain Index Page Number
 * @method void setPageIndex(integer $PageIndex) Set Index Page Number
 * @method integer getPageSize() Obtain Page size
 * @method void setPageSize(integer $PageSize) Set Page size
 * @method integer getCount() Obtain Total Data
 * @method void setCount(integer $Count) Set Total Data
 * @method ProjectBaseInfoOpsRequest getRequestBaseInfo() Obtain Basic Request Information
 * @method void setRequestBaseInfo(ProjectBaseInfoOpsRequest $RequestBaseInfo) Set Basic Request Information
 * @method boolean getIsCount() Obtain Whether to Calculate Total
 * @method void setIsCount(boolean $IsCount) Set Whether to Calculate Total
 */
class DescribeScheduleInstancesRequest extends AbstractModel
{
    /**
     * @var array Instance List
     */
    public $Instances;

    /**
     * @var boolean Check Parent Task Type, true: Check parent task; false: Do not check parent task
     */
    public $CheckFather;

    /**
     * @var string Rerun Type, 1: Self; 3: Child; 2: Self and Child
     */
    public $RerunType;

    /**
     * @var string Instance Dependency Mode, 1: Self-dependent; 2: Task-dependent; 3: Self and Parent-Child dependent
     */
    public $DependentWay;

    /**
     * @var boolean Rerun Ignore Event Listening or Not
     */
    public $SkipEventListening;

    /**
     * @var string Downstream Instance Range 1: Within the workflow 2: Within the project 3: Across all workflows dependent on the project
     */
    public $SonInstanceType;

    /**
     * @var InstanceApiOpsRequest Query conditions
     */
    public $SearchCondition;

    /**
     * @var string Access type
     */
    public $OptType;

    /**
     * @var string Operator Name
     */
    public $OperatorName;

    /**
     * @var string Operator ID
     */
    public $OperatorId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Project Identifier
     */
    public $ProjectIdent;

    /**
     * @var string Project name
     */
    public $ProjectName;

    /**
     * @var integer Index Page Number
     */
    public $PageIndex;

    /**
     * @var integer Page size
     */
    public $PageSize;

    /**
     * @var integer Total Data
     */
    public $Count;

    /**
     * @var ProjectBaseInfoOpsRequest Basic Request Information
     */
    public $RequestBaseInfo;

    /**
     * @var boolean Whether to Calculate Total
     */
    public $IsCount;

    /**
     * @param array $Instances Instance List
     * @param boolean $CheckFather Check Parent Task Type, true: Check parent task; false: Do not check parent task
     * @param string $RerunType Rerun Type, 1: Self; 3: Child; 2: Self and Child
     * @param string $DependentWay Instance Dependency Mode, 1: Self-dependent; 2: Task-dependent; 3: Self and Parent-Child dependent
     * @param boolean $SkipEventListening Rerun Ignore Event Listening or Not
     * @param string $SonInstanceType Downstream Instance Range 1: Within the workflow 2: Within the project 3: Across all workflows dependent on the project
     * @param InstanceApiOpsRequest $SearchCondition Query conditions
     * @param string $OptType Access type
     * @param string $OperatorName Operator Name
     * @param string $OperatorId Operator ID
     * @param string $ProjectId Project ID
     * @param string $ProjectIdent Project Identifier
     * @param string $ProjectName Project name
     * @param integer $PageIndex Index Page Number
     * @param integer $PageSize Page size
     * @param integer $Count Total Data
     * @param ProjectBaseInfoOpsRequest $RequestBaseInfo Basic Request Information
     * @param boolean $IsCount Whether to Calculate Total
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
        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new InstanceOpsDto();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("CheckFather",$param) and $param["CheckFather"] !== null) {
            $this->CheckFather = $param["CheckFather"];
        }

        if (array_key_exists("RerunType",$param) and $param["RerunType"] !== null) {
            $this->RerunType = $param["RerunType"];
        }

        if (array_key_exists("DependentWay",$param) and $param["DependentWay"] !== null) {
            $this->DependentWay = $param["DependentWay"];
        }

        if (array_key_exists("SkipEventListening",$param) and $param["SkipEventListening"] !== null) {
            $this->SkipEventListening = $param["SkipEventListening"];
        }

        if (array_key_exists("SonInstanceType",$param) and $param["SonInstanceType"] !== null) {
            $this->SonInstanceType = $param["SonInstanceType"];
        }

        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new InstanceApiOpsRequest();
            $this->SearchCondition->deserialize($param["SearchCondition"]);
        }

        if (array_key_exists("OptType",$param) and $param["OptType"] !== null) {
            $this->OptType = $param["OptType"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("OperatorId",$param) and $param["OperatorId"] !== null) {
            $this->OperatorId = $param["OperatorId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("RequestBaseInfo",$param) and $param["RequestBaseInfo"] !== null) {
            $this->RequestBaseInfo = new ProjectBaseInfoOpsRequest();
            $this->RequestBaseInfo->deserialize($param["RequestBaseInfo"]);
        }

        if (array_key_exists("IsCount",$param) and $param["IsCount"] !== null) {
            $this->IsCount = $param["IsCount"];
        }
    }
}
