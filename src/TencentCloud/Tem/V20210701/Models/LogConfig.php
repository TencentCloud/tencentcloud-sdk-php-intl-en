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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log collection configuration
 *
 * @method string getName() Obtain Name.
 * @method void setName(string $Name) Set Name.
 * @method string getInputType() Obtain Collection type. Values: `container_stdout` (standard); `container_file` (file)
 * @method void setInputType(string $InputType) Set Collection type. Values: `container_stdout` (standard); `container_file` (file)
 * @method string getLogsetId() Obtain Logset ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogsetId(string $LogsetId) Set Logset ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getTopicId() Obtain Log topic ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTopicId(string $TopicId) Set Log topic ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getLogType() Obtain Log withdrawal mode. Values: `minimalist_log` (full text in a single line); `multiline_log` (full text in multiple lines); `fullregex_log` (regex in a single line); `multiline_fullregex_log` (regex in multiple lines), `json_log` (JSON); 
 * @method void setLogType(string $LogType) Set Log withdrawal mode. Values: `minimalist_log` (full text in a single line); `multiline_log` (full text in multiple lines); `fullregex_log` (regex in a single line); `multiline_fullregex_log` (regex in multiple lines), `json_log` (JSON); 
 * @method string getBeginningRegex() Obtain First line regex. It’s valid when `LogType` is `multiline_log` or `multiline_fullregex_log`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setBeginningRegex(string $BeginningRegex) Set First line regex. It’s valid when `LogType` is `multiline_log` or `multiline_fullregex_log`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getLogPath() Obtain Directory of files to collect. It’s valid when `InputType` is `container_file`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogPath(string $LogPath) Set Directory of files to collect. It’s valid when `InputType` is `container_file`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getFilePattern() Obtain Name pattern of files to collect. It’s valid when `InputType` is `container_file`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setFilePattern(string $FilePattern) Set Name pattern of files to collect. It’s valid when `InputType` is `container_file`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateDate() Obtain Creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateDate(string $CreateDate) Set Creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getModifyDate() Obtain Update time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setModifyDate(string $ModifyDate) Set Update time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getApplicationId() Obtain Application ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Application ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method LogConfigExtractRule getExtractRule() Obtain Export rules
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setExtractRule(LogConfigExtractRule $ExtractRule) Set Export rules
Note: This field may return `null`, indicating that no valid value was found.
 */
class LogConfig extends AbstractModel
{
    /**
     * @var string Name.
     */
    public $Name;

    /**
     * @var string Collection type. Values: `container_stdout` (standard); `container_file` (file)
     */
    public $InputType;

    /**
     * @var string Logset ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LogsetId;

    /**
     * @var string Log topic ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TopicId;

    /**
     * @var string Log withdrawal mode. Values: `minimalist_log` (full text in a single line); `multiline_log` (full text in multiple lines); `fullregex_log` (regex in a single line); `multiline_fullregex_log` (regex in multiple lines), `json_log` (JSON); 
     */
    public $LogType;

    /**
     * @var string First line regex. It’s valid when `LogType` is `multiline_log` or `multiline_fullregex_log`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $BeginningRegex;

    /**
     * @var string Directory of files to collect. It’s valid when `InputType` is `container_file`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LogPath;

    /**
     * @var string Name pattern of files to collect. It’s valid when `InputType` is `container_file`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $FilePattern;

    /**
     * @var string Creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateDate;

    /**
     * @var string Update time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ModifyDate;

    /**
     * @var string Application ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var string Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var LogConfigExtractRule Export rules
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ExtractRule;

    /**
     * @param string $Name Name.
     * @param string $InputType Collection type. Values: `container_stdout` (standard); `container_file` (file)
     * @param string $LogsetId Logset ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $TopicId Log topic ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $LogType Log withdrawal mode. Values: `minimalist_log` (full text in a single line); `multiline_log` (full text in multiple lines); `fullregex_log` (regex in a single line); `multiline_fullregex_log` (regex in multiple lines), `json_log` (JSON); 
     * @param string $BeginningRegex First line regex. It’s valid when `LogType` is `multiline_log` or `multiline_fullregex_log`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $LogPath Directory of files to collect. It’s valid when `InputType` is `container_file`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $FilePattern Name pattern of files to collect. It’s valid when `InputType` is `container_file`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateDate Creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ModifyDate Update time
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ApplicationId Application ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param LogConfigExtractRule $ExtractRule Export rules
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("BeginningRegex",$param) and $param["BeginningRegex"] !== null) {
            $this->BeginningRegex = $param["BeginningRegex"];
        }

        if (array_key_exists("LogPath",$param) and $param["LogPath"] !== null) {
            $this->LogPath = $param["LogPath"];
        }

        if (array_key_exists("FilePattern",$param) and $param["FilePattern"] !== null) {
            $this->FilePattern = $param["FilePattern"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("ModifyDate",$param) and $param["ModifyDate"] !== null) {
            $this->ModifyDate = $param["ModifyDate"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ExtractRule",$param) and $param["ExtractRule"] !== null) {
            $this->ExtractRule = new LogConfigExtractRule();
            $this->ExtractRule->deserialize($param["ExtractRule"]);
        }
    }
}
