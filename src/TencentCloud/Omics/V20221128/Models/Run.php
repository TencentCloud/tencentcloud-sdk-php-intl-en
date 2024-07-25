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
 * @method string getRunUuid() Obtain Run UUID
 * @method void setRunUuid(string $RunUuid) Set Run UUID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getRunGroupId() Obtain Run group ID
 * @method void setRunGroupId(string $RunGroupId) Set Run group ID
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getUserDefinedId() Obtain User-defined ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserDefinedId(string $UserDefinedId) Set User-defined ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableId() Obtain Table ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableId(string $TableId) Set Table ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableRowUuid() Obtain Table row UUID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableRowUuid(string $TableRowUuid) Set Table row UUID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Run status
 * @method void setStatus(string $Status) Set Run status
 * @method string getInput() Obtain Run input
 * @method void setInput(string $Input) Set Run input
 * @method RunOption getOption() Obtain Running option
 * @method void setOption(RunOption $Option) Set Running option
 * @method ExecutionTime getExecutionTime() Obtain Execution time
 * @method void setExecutionTime(ExecutionTime $ExecutionTime) Set Execution time
 * @method CacheInfo getCache() Obtain Cache information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCache(CacheInfo $Cache) Set Cache information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMessage() Obtain Error message
 * @method void setErrorMessage(string $ErrorMessage) Set Error message
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 */
class Run extends AbstractModel
{
    /**
     * @var string Run UUID
     */
    public $RunUuid;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Run group ID
     */
    public $RunGroupId;

    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string User-defined ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserDefinedId;

    /**
     * @var string Table ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableId;

    /**
     * @var string Table row UUID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableRowUuid;

    /**
     * @var string Run status
     */
    public $Status;

    /**
     * @var string Run input
     */
    public $Input;

    /**
     * @var RunOption Running option
     * @deprecated
     */
    public $Option;

    /**
     * @var ExecutionTime Execution time
     */
    public $ExecutionTime;

    /**
     * @var CacheInfo Cache information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cache;

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
     * @param string $RunUuid Run UUID
     * @param string $ProjectId Project ID
     * @param string $ApplicationId Application ID
     * @param string $RunGroupId Run group ID
     * @param string $EnvironmentId Environment ID
     * @param string $UserDefinedId User-defined ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableId Table ID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableRowUuid Table row UUID. Null for running in singleton mode.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Run status
     * @param string $Input Run input
     * @param RunOption $Option Running option
     * @param ExecutionTime $ExecutionTime Execution time
     * @param CacheInfo $Cache Cache information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMessage Error message
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update time
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
        if (array_key_exists("RunUuid",$param) and $param["RunUuid"] !== null) {
            $this->RunUuid = $param["RunUuid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("RunGroupId",$param) and $param["RunGroupId"] !== null) {
            $this->RunGroupId = $param["RunGroupId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("UserDefinedId",$param) and $param["UserDefinedId"] !== null) {
            $this->UserDefinedId = $param["UserDefinedId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableRowUuid",$param) and $param["TableRowUuid"] !== null) {
            $this->TableRowUuid = $param["TableRowUuid"];
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

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = new ExecutionTime();
            $this->ExecutionTime->deserialize($param["ExecutionTime"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new CacheInfo();
            $this->Cache->deserialize($param["Cache"]);
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
    }
}
