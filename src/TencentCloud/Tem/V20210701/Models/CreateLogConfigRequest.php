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
 * CreateLogConfig request structure.
 *
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getName() Obtain Configuration name
 * @method void setName(string $Name) Set Configuration name
 * @method string getInputType() Obtain Collection type. Values: `container_stdout` (standard); `container_file` (file)
 * @method void setInputType(string $InputType) Set Collection type. Values: `container_stdout` (standard); `container_file` (file)
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getLogType() Obtain Log withdrawal mode. Values: `minimalist_log` (full text in a single line); `multiline_log` (full text in multiple lines); `json_log` (JSON); `fullregex_log` (regex in a single line); `multiline_fullregex_log` (regex in multiple lines)
 * @method void setLogType(string $LogType) Set Log withdrawal mode. Values: `minimalist_log` (full text in a single line); `multiline_log` (full text in multiple lines); `json_log` (JSON); `fullregex_log` (regex in a single line); `multiline_fullregex_log` (regex in multiple lines)
 * @method string getBeginningRegex() Obtain The first line regex. It’s valid when `LogType` is `multiline_log`.
 * @method void setBeginningRegex(string $BeginningRegex) Set The first line regex. It’s valid when `LogType` is `multiline_log`.
 * @method string getLogPath() Obtain Directory of files to collect. It’s valid when `InputType` is `container_file`.
 * @method void setLogPath(string $LogPath) Set Directory of files to collect. It’s valid when `InputType` is `container_file`.
 * @method string getFilePattern() Obtain Name pattern of files to collect. It’s valid when `InputType` is `container_file`.
 * @method void setFilePattern(string $FilePattern) Set Name pattern of files to collect. It’s valid when `InputType` is `container_file`.
 * @method LogConfigExtractRule getExtractRule() Obtain Export
 * @method void setExtractRule(LogConfigExtractRule $ExtractRule) Set Export
 */
class CreateLogConfigRequest extends AbstractModel
{
    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Configuration name
     */
    public $Name;

    /**
     * @var string Collection type. Values: `container_stdout` (standard); `container_file` (file)
     */
    public $InputType;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Log withdrawal mode. Values: `minimalist_log` (full text in a single line); `multiline_log` (full text in multiple lines); `json_log` (JSON); `fullregex_log` (regex in a single line); `multiline_fullregex_log` (regex in multiple lines)
     */
    public $LogType;

    /**
     * @var string The first line regex. It’s valid when `LogType` is `multiline_log`.
     */
    public $BeginningRegex;

    /**
     * @var string Directory of files to collect. It’s valid when `InputType` is `container_file`.
     */
    public $LogPath;

    /**
     * @var string Name pattern of files to collect. It’s valid when `InputType` is `container_file`.
     */
    public $FilePattern;

    /**
     * @var LogConfigExtractRule Export
     */
    public $ExtractRule;

    /**
     * @param string $EnvironmentId Environment ID
     * @param string $Name Configuration name
     * @param string $InputType Collection type. Values: `container_stdout` (standard); `container_file` (file)
     * @param string $ApplicationId Application ID
     * @param string $LogsetId Logset ID
     * @param string $TopicId Log topic ID
     * @param string $LogType Log withdrawal mode. Values: `minimalist_log` (full text in a single line); `multiline_log` (full text in multiple lines); `json_log` (JSON); `fullregex_log` (regex in a single line); `multiline_fullregex_log` (regex in multiple lines)
     * @param string $BeginningRegex The first line regex. It’s valid when `LogType` is `multiline_log`.
     * @param string $LogPath Directory of files to collect. It’s valid when `InputType` is `container_file`.
     * @param string $FilePattern Name pattern of files to collect. It’s valid when `InputType` is `container_file`.
     * @param LogConfigExtractRule $ExtractRule Export
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
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

        if (array_key_exists("ExtractRule",$param) and $param["ExtractRule"] !== null) {
            $this->ExtractRule = new LogConfigExtractRule();
            $this->ExtractRule->deserialize($param["ExtractRule"]);
        }
    }
}
