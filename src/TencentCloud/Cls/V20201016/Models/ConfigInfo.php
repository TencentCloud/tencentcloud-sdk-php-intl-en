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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Collection rule configuration information
 *
 * @method string getConfigId() Obtain Collection rule configuration ID
 * @method void setConfigId(string $ConfigId) Set Collection rule configuration ID
 * @method string getName() Obtain Collection rule configuration name
 * @method void setName(string $Name) Set Collection rule configuration name
 * @method string getLogFormat() Obtain Log formatting method
 * @method void setLogFormat(string $LogFormat) Set Log formatting method
 * @method string getPath() Obtain log collection path
 * @method void setPath(string $Path) Set log collection path
 * @method string getLogType() Obtain Type of log collected.
-json_log represents JSON file logs (see [Use JSON extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17419?from_cn_redirect=1)).
-delimiter_log represents: delimiter-file logs (see [use delimiter extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17420?from_cn_redirect=1)).
-minimalist_log represents single-line full-text file logs (see [use single-line full-text extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17421?from_cn_redirect=1)).
-fullregex_log represents single-line full regex-file logs (see [Collect logs using single-line full regex extraction mode](https://www.tencentcloud.com/document/product/614/52365?from_cn_redirect=1)).
-multiline_log represents multi-line full-text file logs (see [use multi-line full-text extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17422?from_cn_redirect=1)).
-multiline_fullregex_log represents: Multiline full regex-file log (see [Collect logs using multiline-full regex extraction mode](https://www.tencentcloud.com/document/product/614/52366?from_cn_redirect=1));
-user_define_log represents: combined parsing mode (suitable for logs with multiple nested formats, see [Collecting logs using combined parsing extraction mode](https://www.tencentcloud.com/document/product/614/61310?from_cn_redirect=1));
-service_syslog represents syslog collection (see [Collect Syslog](https://www.tencentcloud.com/document/product/614/81454?from_cn_redirect=1)).
- windows_event_log: Windows event log (see [Collecting Windows Event Logs](https://www.tencentcloud.com/document/product/614/96678?from_cn_redirect=1)).
 * @method void setLogType(string $LogType) Set Type of log collected.
-json_log represents JSON file logs (see [Use JSON extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17419?from_cn_redirect=1)).
-delimiter_log represents: delimiter-file logs (see [use delimiter extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17420?from_cn_redirect=1)).
-minimalist_log represents single-line full-text file logs (see [use single-line full-text extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17421?from_cn_redirect=1)).
-fullregex_log represents single-line full regex-file logs (see [Collect logs using single-line full regex extraction mode](https://www.tencentcloud.com/document/product/614/52365?from_cn_redirect=1)).
-multiline_log represents multi-line full-text file logs (see [use multi-line full-text extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17422?from_cn_redirect=1)).
-multiline_fullregex_log represents: Multiline full regex-file log (see [Collect logs using multiline-full regex extraction mode](https://www.tencentcloud.com/document/product/614/52366?from_cn_redirect=1));
-user_define_log represents: combined parsing mode (suitable for logs with multiple nested formats, see [Collecting logs using combined parsing extraction mode](https://www.tencentcloud.com/document/product/614/61310?from_cn_redirect=1));
-service_syslog represents syslog collection (see [Collect Syslog](https://www.tencentcloud.com/document/product/614/81454?from_cn_redirect=1)).
- windows_event_log: Windows event log (see [Collecting Windows Event Logs](https://www.tencentcloud.com/document/product/614/96678?from_cn_redirect=1)).
 * @method ExtractRuleInfo getExtractRule() Obtain Extraction rule. If ExtractRule is set, then LogType must be set.
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) Set Extraction rule. If ExtractRule is set, then LogType must be set.
 * @method array getExcludePaths() Obtain Collection path blocklist
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setExcludePaths(array $ExcludePaths) Set Collection path blocklist
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getOutput() Obtain Log topic ID (TopicId) of collection configuration
 * @method void setOutput(string $Output) Set Log topic ID (TopicId) of collection configuration
 * @method string getUpdateTime() Obtain Update time
-Time format: yyyy-MM-dd HH:mm:ss
 * @method void setUpdateTime(string $UpdateTime) Set Update time
-Time format: yyyy-MM-dd HH:mm:ss
 * @method string getCreateTime() Obtain Creation time.
-Time format: yyyy-MM-dd HH:mm:ss
 * @method void setCreateTime(string $CreateTime) Set Creation time.
-Time format: yyyy-MM-dd HH:mm:ss
 * @method string getUserDefineRule() Obtain Custom parsing string. For more information, see [Collecting logs using combined parsing extraction mode](https://www.tencentcloud.com/document/product/614/61310?from_cn_redirect=1).
 * @method void setUserDefineRule(string $UserDefineRule) Set Custom parsing string. For more information, see [Collecting logs using combined parsing extraction mode](https://www.tencentcloud.com/document/product/614/61310?from_cn_redirect=1).
 * @method string getAdvancedConfig() Obtain Advanced collection configuration. Json string, Key/Value is defined as follows:
-ClsAgentFileTimeout (timeout attribute). Value ranges from 0 to integer. 0 means no timeout.
-ClsAgentMaxDepth (maximum directory depth), value ranges from 0 to integer
-ClsAgentParseFailMerge (merge parsing failure logs). Value ranges from true to false.
Example:
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

Default placeholder value in console: `{\"ClsAgentDefault\":0}`
 * @method void setAdvancedConfig(string $AdvancedConfig) Set Advanced collection configuration. Json string, Key/Value is defined as follows:
-ClsAgentFileTimeout (timeout attribute). Value ranges from 0 to integer. 0 means no timeout.
-ClsAgentMaxDepth (maximum directory depth), value ranges from 0 to integer
-ClsAgentParseFailMerge (merge parsing failure logs). Value ranges from true to false.
Example:
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

Default placeholder value in console: `{\"ClsAgentDefault\":0}`
 * @method string getInputType() Obtain Log input type (<span style="color:red; font-weight:bold">Note: required for Windows scenario and only supports file and windows_event event type</span>)
-file type collection
-windows event collection
-syslog: System log collection
 * @method void setInputType(string $InputType) Set Log input type (<span style="color:red; font-weight:bold">Note: required for Windows scenario and only supports file and windows_event event type</span>)
-file type collection
-windows event collection
-syslog: System log collection
 */
class ConfigInfo extends AbstractModel
{
    /**
     * @var string Collection rule configuration ID
     */
    public $ConfigId;

    /**
     * @var string Collection rule configuration name
     */
    public $Name;

    /**
     * @var string Log formatting method
     */
    public $LogFormat;

    /**
     * @var string log collection path
     */
    public $Path;

    /**
     * @var string Type of log collected.
-json_log represents JSON file logs (see [Use JSON extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17419?from_cn_redirect=1)).
-delimiter_log represents: delimiter-file logs (see [use delimiter extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17420?from_cn_redirect=1)).
-minimalist_log represents single-line full-text file logs (see [use single-line full-text extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17421?from_cn_redirect=1)).
-fullregex_log represents single-line full regex-file logs (see [Collect logs using single-line full regex extraction mode](https://www.tencentcloud.com/document/product/614/52365?from_cn_redirect=1)).
-multiline_log represents multi-line full-text file logs (see [use multi-line full-text extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17422?from_cn_redirect=1)).
-multiline_fullregex_log represents: Multiline full regex-file log (see [Collect logs using multiline-full regex extraction mode](https://www.tencentcloud.com/document/product/614/52366?from_cn_redirect=1));
-user_define_log represents: combined parsing mode (suitable for logs with multiple nested formats, see [Collecting logs using combined parsing extraction mode](https://www.tencentcloud.com/document/product/614/61310?from_cn_redirect=1));
-service_syslog represents syslog collection (see [Collect Syslog](https://www.tencentcloud.com/document/product/614/81454?from_cn_redirect=1)).
- windows_event_log: Windows event log (see [Collecting Windows Event Logs](https://www.tencentcloud.com/document/product/614/96678?from_cn_redirect=1)).
     */
    public $LogType;

    /**
     * @var ExtractRuleInfo Extraction rule. If ExtractRule is set, then LogType must be set.
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
-Time format: yyyy-MM-dd HH:mm:ss
     */
    public $UpdateTime;

    /**
     * @var string Creation time.
-Time format: yyyy-MM-dd HH:mm:ss
     */
    public $CreateTime;

    /**
     * @var string Custom parsing string. For more information, see [Collecting logs using combined parsing extraction mode](https://www.tencentcloud.com/document/product/614/61310?from_cn_redirect=1).
     */
    public $UserDefineRule;

    /**
     * @var string Advanced collection configuration. Json string, Key/Value is defined as follows:
-ClsAgentFileTimeout (timeout attribute). Value ranges from 0 to integer. 0 means no timeout.
-ClsAgentMaxDepth (maximum directory depth), value ranges from 0 to integer
-ClsAgentParseFailMerge (merge parsing failure logs). Value ranges from true to false.
Example:
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

Default placeholder value in console: `{\"ClsAgentDefault\":0}`
     */
    public $AdvancedConfig;

    /**
     * @var string Log input type (<span style="color:red; font-weight:bold">Note: required for Windows scenario and only supports file and windows_event event type</span>)
-file type collection
-windows event collection
-syslog: System log collection
     */
    public $InputType;

    /**
     * @param string $ConfigId Collection rule configuration ID
     * @param string $Name Collection rule configuration name
     * @param string $LogFormat Log formatting method
     * @param string $Path log collection path
     * @param string $LogType Type of log collected.
-json_log represents JSON file logs (see [Use JSON extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17419?from_cn_redirect=1)).
-delimiter_log represents: delimiter-file logs (see [use delimiter extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17420?from_cn_redirect=1)).
-minimalist_log represents single-line full-text file logs (see [use single-line full-text extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17421?from_cn_redirect=1)).
-fullregex_log represents single-line full regex-file logs (see [Collect logs using single-line full regex extraction mode](https://www.tencentcloud.com/document/product/614/52365?from_cn_redirect=1)).
-multiline_log represents multi-line full-text file logs (see [use multi-line full-text extraction mode to collect logs](https://www.tencentcloud.com/document/product/614/17422?from_cn_redirect=1)).
-multiline_fullregex_log represents: Multiline full regex-file log (see [Collect logs using multiline-full regex extraction mode](https://www.tencentcloud.com/document/product/614/52366?from_cn_redirect=1));
-user_define_log represents: combined parsing mode (suitable for logs with multiple nested formats, see [Collecting logs using combined parsing extraction mode](https://www.tencentcloud.com/document/product/614/61310?from_cn_redirect=1));
-service_syslog represents syslog collection (see [Collect Syslog](https://www.tencentcloud.com/document/product/614/81454?from_cn_redirect=1)).
- windows_event_log: Windows event log (see [Collecting Windows Event Logs](https://www.tencentcloud.com/document/product/614/96678?from_cn_redirect=1)).
     * @param ExtractRuleInfo $ExtractRule Extraction rule. If ExtractRule is set, then LogType must be set.
     * @param array $ExcludePaths Collection path blocklist
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Output Log topic ID (TopicId) of collection configuration
     * @param string $UpdateTime Update time
-Time format: yyyy-MM-dd HH:mm:ss
     * @param string $CreateTime Creation time.
-Time format: yyyy-MM-dd HH:mm:ss
     * @param string $UserDefineRule Custom parsing string. For more information, see [Collecting logs using combined parsing extraction mode](https://www.tencentcloud.com/document/product/614/61310?from_cn_redirect=1).
     * @param string $AdvancedConfig Advanced collection configuration. Json string, Key/Value is defined as follows:
-ClsAgentFileTimeout (timeout attribute). Value ranges from 0 to integer. 0 means no timeout.
-ClsAgentMaxDepth (maximum directory depth), value ranges from 0 to integer
-ClsAgentParseFailMerge (merge parsing failure logs). Value ranges from true to false.
Example:
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

Default placeholder value in console: `{\"ClsAgentDefault\":0}`
     * @param string $InputType Log input type (<span style="color:red; font-weight:bold">Note: required for Windows scenario and only supports file and windows_event event type</span>)
-file type collection
-windows event collection
-syslog: System log collection
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = $param["AdvancedConfig"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }
    }
}
