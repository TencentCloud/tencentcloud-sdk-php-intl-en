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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Collection rule configuration information
 *
 * @method string getConfigId() Obtain Collection rule configuration ID
 * @method void setConfigId(string $ConfigId) Set Collection rule configuration ID
 * @method string getLogFormat() Obtain Log formatting method
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogFormat(string $LogFormat) Set Log formatting method
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPath() Obtain Log collection path
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Log collection path
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getLogType() Obtain Type of the log to be collected. Valid values: `json_log`: log in JSON format; `delimiter_log`: log in delimited format; `minimalist_log`: minimalist log; `multiline_log`: log in multi-line format; `fullregex_log`: log in full regex format. Default value: `minimalist_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogType(string $LogType) Set Type of the log to be collected. Valid values: `json_log`: log in JSON format; `delimiter_log`: log in delimited format; `minimalist_log`: minimalist log; `multiline_log`: log in multi-line format; `fullregex_log`: log in full regex format. Default value: `minimalist_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method ExtractRuleInfo getExtractRule() Obtain Extraction rule. If `ExtractRule` is set, `LogType` must be set
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) Set Extraction rule. If `ExtractRule` is set, `LogType` must be set
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getExcludePaths() Obtain Collection path blocklist
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setExcludePaths(array $ExcludePaths) Set Collection path blocklist
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getOutput() Obtain Log topic ID (TopicId) of collection configuration
 * @method void setOutput(string $Output) Set Log topic ID (TopicId) of collection configuration
 * @method string getUpdateTime() Obtain Update time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUserDefineRule() Obtain Custom parsing string
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUserDefineRule(string $UserDefineRule) Set Custom parsing string
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ConfigInfo extends AbstractModel
{
    /**
     * @var string Collection rule configuration ID
     */
    public $ConfigId;

    /**
     * @var string Log formatting method
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LogFormat;

    /**
     * @var string Log collection path
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string Type of the log to be collected. Valid values: `json_log`: log in JSON format; `delimiter_log`: log in delimited format; `minimalist_log`: minimalist log; `multiline_log`: log in multi-line format; `fullregex_log`: log in full regex format. Default value: `minimalist_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LogType;

    /**
     * @var ExtractRuleInfo Extraction rule. If `ExtractRule` is set, `LogType` must be set
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExtractRule;

    /**
     * @var array Collection path blocklist
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExcludePaths;

    /**
     * @var string Log topic ID (TopicId) of collection configuration
     */
    public $Output;

    /**
     * @var string Update time
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Custom parsing string
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UserDefineRule;

    /**
     * @param string $ConfigId Collection rule configuration ID
     * @param string $LogFormat Log formatting method
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Path Log collection path
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $LogType Type of the log to be collected. Valid values: `json_log`: log in JSON format; `delimiter_log`: log in delimited format; `minimalist_log`: minimalist log; `multiline_log`: log in multi-line format; `fullregex_log`: log in full regex format. Default value: `minimalist_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param ExtractRuleInfo $ExtractRule Extraction rule. If `ExtractRule` is set, `LogType` must be set
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $ExcludePaths Collection path blocklist
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Output Log topic ID (TopicId) of collection configuration
     * @param string $UpdateTime Update time
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
     * @param string $UserDefineRule Custom parsing string
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("LogFormat",$param) and $param["LogFormat"] !== null) {
            $this->LogFormat = $param["LogFormat"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("ExtractRule",$param) and $param["ExtractRule"] !== null) {
            $this->ExtractRule = new ExtractRuleInfo();
            $this->ExtractRule->deserialize($param["ExtractRule"]);
        }

        if (array_key_exists("ExcludePaths",$param) and $param["ExcludePaths"] !== null) {
            $this->ExcludePaths = [];
            foreach ($param["ExcludePaths"] as $key => $value){
                $obj = new ExcludePathInfo();
                $obj->deserialize($value);
                array_push($this->ExcludePaths, $obj);
            }
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserDefineRule",$param) and $param["UserDefineRule"] !== null) {
            $this->UserDefineRule = $param["UserDefineRule"];
        }
    }
}
