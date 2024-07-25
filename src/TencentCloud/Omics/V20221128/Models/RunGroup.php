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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Run
 *
 * @method string getRunGroupId() Obtain Run group ID
 * @method void setRunGroupId(string $RunGroupId) Set Run group ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getApplicationName() Obtain Application name
 * @method void setApplicationName(string $ApplicationName) Set Application name
 * @method string getApplicationType() Obtain Application type
 * @method void setApplicationType(string $ApplicationType) Set Application type
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getEnvironmentName() Obtain Environment name
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name
 * @method string getTableId() Obtain Table ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableId(string $TableId) Set Table ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Run name
 * @method void setName(string $Name) Set Run name
 * @method string getDescription() Obtain Run description
 * @method void setDescription(string $Description) Set Run description
 * @method string getStatus() Obtain Run status
 * @method void setStatus(string $Status) Set Run status
 * @method string getInput() Obtain Run input
 * @method void setInput(string $Input) Set Run input
 * @method RunOption getOption() Obtain WDL running option
 * @method void setOption(RunOption $Option) Set WDL running option
 * @method NFOption getNFOption() Obtain Nextflow running option
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNFOption(NFOption $NFOption) Set Nextflow running option
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalRun() Obtain Total number of runs
 * @method void setTotalRun(integer $TotalRun) Set Total number of runs
 * @method array getRunStatusCounts() Obtain Number of runs in various status
 * @method void setRunStatusCounts(array $RunStatusCounts) Set Number of runs in various status
 * @method ExecutionTime getExecutionTime() Obtain Execution time
 * @method void setExecutionTime(ExecutionTime $ExecutionTime) Set Execution time
 * @method string getErrorMessage() Obtain Error message
 * @method void setErrorMessage(string $ErrorMessage) Set Error message
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getCreator() Obtain Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreator(string $Creator) Set Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatorId() Obtain Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatorId(string $CreatorId) Set Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResultNotify() Obtain Running result notification method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResultNotify(string $ResultNotify) Set Running result notification method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ApplicationVersion getApplicationVersion() Obtain Application version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationVersion(ApplicationVersion $ApplicationVersion) Set Application version
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RunGroup extends AbstractModel
{
    /**
     * @var string Run group ID
     */
    public $RunGroupId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Project name
     */
    public $ProjectName;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Application name
     */
    public $ApplicationName;

    /**
     * @var string Application type
     */
    public $ApplicationType;

    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Environment name
     */
    public $EnvironmentName;

    /**
     * @var string Table ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableId;

    /**
     * @var string Run name
     */
    public $Name;

    /**
     * @var string Run description
     */
    public $Description;

    /**
     * @var string Run status
     */
    public $Status;

    /**
     * @var string Run input
     */
    public $Input;

    /**
     * @var RunOption WDL running option
     */
    public $Option;

    /**
     * @var NFOption Nextflow running option
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NFOption;

    /**
     * @var integer Total number of runs
     */
    public $TotalRun;

    /**
     * @var array Number of runs in various status
     */
    public $RunStatusCounts;

    /**
     * @var ExecutionTime Execution time
     */
    public $ExecutionTime;

    /**
     * @var string Error message
     */
    public $ErrorMessage;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Creator;

    /**
     * @var string Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatorId;

    /**
     * @var string Running result notification method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResultNotify;

    /**
     * @var ApplicationVersion Application version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationVersion;

    /**
     * @param string $RunGroupId Run group ID
     * @param string $ProjectId Project ID
     * @param string $ProjectName Project name
     * @param string $ApplicationId Application ID
     * @param string $ApplicationName Application name
     * @param string $ApplicationType Application type
     * @param string $EnvironmentId Environment ID
     * @param string $EnvironmentName Environment name
     * @param string $TableId Table ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Run name
     * @param string $Description Run description
     * @param string $Status Run status
     * @param string $Input Run input
     * @param RunOption $Option WDL running option
     * @param NFOption $NFOption Nextflow running option
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalRun Total number of runs
     * @param array $RunStatusCounts Number of runs in various status
     * @param ExecutionTime $ExecutionTime Execution time
     * @param string $ErrorMessage Error message
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update time
     * @param string $Creator Creator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatorId Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResultNotify Running result notification method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ApplicationVersion $ApplicationVersion Application version
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
        if (array_key_exists("RunGroupId",$param) and $param["RunGroupId"] !== null) {
            $this->RunGroupId = $param["RunGroupId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = new RunOption();
            $this->Option->deserialize($param["Option"]);
        }

        if (array_key_exists("NFOption",$param) and $param["NFOption"] !== null) {
            $this->NFOption = new NFOption();
            $this->NFOption->deserialize($param["NFOption"]);
        }

        if (array_key_exists("TotalRun",$param) and $param["TotalRun"] !== null) {
            $this->TotalRun = $param["TotalRun"];
        }

        if (array_key_exists("RunStatusCounts",$param) and $param["RunStatusCounts"] !== null) {
            $this->RunStatusCounts = [];
            foreach ($param["RunStatusCounts"] as $key => $value){
                $obj = new RunStatusCount();
                $obj->deserialize($value);
                array_push($this->RunStatusCounts, $obj);
            }
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = new ExecutionTime();
            $this->ExecutionTime->deserialize($param["ExecutionTime"]);
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("ResultNotify",$param) and $param["ResultNotify"] !== null) {
            $this->ResultNotify = $param["ResultNotify"];
        }

        if (array_key_exists("ApplicationVersion",$param) and $param["ApplicationVersion"] !== null) {
            $this->ApplicationVersion = new ApplicationVersion();
            $this->ApplicationVersion->deserialize($param["ApplicationVersion"]);
        }
    }
}
