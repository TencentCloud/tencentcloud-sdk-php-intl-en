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
 * @method string getName() Obtain Name of the collection rule configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name of the collection rule configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogFormat() Obtain Log formatting method
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogFormat(string $LogFormat) Set Log formatting method
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPath() Obtain Log collection path
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Log collection path
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getLogType() Obtain Type of collected logs.- json_log: JSON File Log (For more information, see [Using JSON pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17419?from_cn_redirect=1));- delimiter_log: Delimiter - File Logs (For more information, see [Using delimiter pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17420?from_cn_redirect=1));- minimalist_log: Single-line Full-text File Log (For more information, see [Using single-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17421?from_cn_redirect=1));- fullregex_log: Single line full regular expression - File log (For more information, see [Using single-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52365?from_cn_redirect=1));- multiline_log: Multiline Full-text File Log (For more information, see [Using multi-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17422?from_cn_redirect=1));- multiline_fullregex_log: Multi-line complete regular expression - File Logs (For more information, see [Using multi-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52366?from_cn_redirect=1));- user_define_log: Combined parsing (Suitable for logs with multiple nested formats, see [Using combined parsing pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1));- service_syslog: syslog collection (For more information, see [Collect Syslog](https://intl.cloud.tencent.com/document/product/614/81454?from_cn_redirect=1));- windows_event_log represents: Windows event logs (see Collecting Windows Event Logs (https://intl.cloud.tencent.com/document/product/614/96678?from_cn_redirect=1) for details.).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogType(string $LogType) Set Type of collected logs.- json_log: JSON File Log (For more information, see [Using JSON pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17419?from_cn_redirect=1));- delimiter_log: Delimiter - File Logs (For more information, see [Using delimiter pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17420?from_cn_redirect=1));- minimalist_log: Single-line Full-text File Log (For more information, see [Using single-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17421?from_cn_redirect=1));- fullregex_log: Single line full regular expression - File log (For more information, see [Using single-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52365?from_cn_redirect=1));- multiline_log: Multiline Full-text File Log (For more information, see [Using multi-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17422?from_cn_redirect=1));- multiline_fullregex_log: Multi-line complete regular expression - File Logs (For more information, see [Using multi-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52366?from_cn_redirect=1));- user_define_log: Combined parsing (Suitable for logs with multiple nested formats, see [Using combined parsing pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1));- service_syslog: syslog collection (For more information, see [Collect Syslog](https://intl.cloud.tencent.com/document/product/614/81454?from_cn_redirect=1));- windows_event_log represents: Windows event logs (see Collecting Windows Event Logs (https://intl.cloud.tencent.com/document/product/614/96678?from_cn_redirect=1) for details.).Note: This field may return null, indicating that no valid values can be obtained.
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
 * @method string getUserDefineRule() Obtain User-defined parsing strings, see Collecting Logs Using Combined Parsing Extraction Mode (https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1) for details.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserDefineRule(string $UserDefineRule) Set User-defined parsing strings, see Collecting Logs Using Combined Parsing Extraction Mode (https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1) for details.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAdvancedConfig() Obtain Advanced collection configuration. A JSON string, Key/Value definition as follows:- ClsAgentFileTimeout (timeout property), value range: an integer greater than or equal to 0, where 0 means no timeout- ClsAgentMaxDepth (maximum directory depth), value range: an integer greater than or equal to 0- ClsAgentParseFailMerge (merge logs that failed parsing), value range: true or falseSample:`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

Default placeholder value in the console: `{"ClsAgentDefault":0}`Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdvancedConfig(string $AdvancedConfig) Set Advanced collection configuration. A JSON string, Key/Value definition as follows:- ClsAgentFileTimeout (timeout property), value range: an integer greater than or equal to 0, where 0 means no timeout- ClsAgentMaxDepth (maximum directory depth), value range: an integer greater than or equal to 0- ClsAgentParseFailMerge (merge logs that failed parsing), value range: true or falseSample:`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

Default placeholder value in the console: `{"ClsAgentDefault":0}`Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConfigInfo extends AbstractModel
{
    /**
     * @var string Collection rule configuration ID
     */
    public $ConfigId;

    /**
     * @var string Name of the collection rule configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

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
     * @var string Type of collected logs.- json_log: JSON File Log (For more information, see [Using JSON pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17419?from_cn_redirect=1));- delimiter_log: Delimiter - File Logs (For more information, see [Using delimiter pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17420?from_cn_redirect=1));- minimalist_log: Single-line Full-text File Log (For more information, see [Using single-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17421?from_cn_redirect=1));- fullregex_log: Single line full regular expression - File log (For more information, see [Using single-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52365?from_cn_redirect=1));- multiline_log: Multiline Full-text File Log (For more information, see [Using multi-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17422?from_cn_redirect=1));- multiline_fullregex_log: Multi-line complete regular expression - File Logs (For more information, see [Using multi-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52366?from_cn_redirect=1));- user_define_log: Combined parsing (Suitable for logs with multiple nested formats, see [Using combined parsing pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1));- service_syslog: syslog collection (For more information, see [Collect Syslog](https://intl.cloud.tencent.com/document/product/614/81454?from_cn_redirect=1));- windows_event_log represents: Windows event logs (see Collecting Windows Event Logs (https://intl.cloud.tencent.com/document/product/614/96678?from_cn_redirect=1) for details.).Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string User-defined parsing strings, see Collecting Logs Using Combined Parsing Extraction Mode (https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1) for details.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserDefineRule;

    /**
     * @var string Advanced collection configuration. A JSON string, Key/Value definition as follows:- ClsAgentFileTimeout (timeout property), value range: an integer greater than or equal to 0, where 0 means no timeout- ClsAgentMaxDepth (maximum directory depth), value range: an integer greater than or equal to 0- ClsAgentParseFailMerge (merge logs that failed parsing), value range: true or falseSample:`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

Default placeholder value in the console: `{"ClsAgentDefault":0}`Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdvancedConfig;

    /**
     * @param string $ConfigId Collection rule configuration ID
     * @param string $Name Name of the collection rule configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogFormat Log formatting method
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Path Log collection path
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $LogType Type of collected logs.- json_log: JSON File Log (For more information, see [Using JSON pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17419?from_cn_redirect=1));- delimiter_log: Delimiter - File Logs (For more information, see [Using delimiter pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17420?from_cn_redirect=1));- minimalist_log: Single-line Full-text File Log (For more information, see [Using single-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17421?from_cn_redirect=1));- fullregex_log: Single line full regular expression - File log (For more information, see [Using single-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52365?from_cn_redirect=1));- multiline_log: Multiline Full-text File Log (For more information, see [Using multi-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17422?from_cn_redirect=1));- multiline_fullregex_log: Multi-line complete regular expression - File Logs (For more information, see [Using multi-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52366?from_cn_redirect=1));- user_define_log: Combined parsing (Suitable for logs with multiple nested formats, see [Using combined parsing pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1));- service_syslog: syslog collection (For more information, see [Collect Syslog](https://intl.cloud.tencent.com/document/product/614/81454?from_cn_redirect=1));- windows_event_log represents: Windows event logs (see Collecting Windows Event Logs (https://intl.cloud.tencent.com/document/product/614/96678?from_cn_redirect=1) for details.).Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtractRuleInfo $ExtractRule Extraction rule. If `ExtractRule` is set, `LogType` must be set
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $ExcludePaths Collection path blocklist
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Output Log topic ID (TopicId) of collection configuration
     * @param string $UpdateTime Update time
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
     * @param string $UserDefineRule User-defined parsing strings, see Collecting Logs Using Combined Parsing Extraction Mode (https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1) for details.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AdvancedConfig Advanced collection configuration. A JSON string, Key/Value definition as follows:- ClsAgentFileTimeout (timeout property), value range: an integer greater than or equal to 0, where 0 means no timeout- ClsAgentMaxDepth (maximum directory depth), value range: an integer greater than or equal to 0- ClsAgentParseFailMerge (merge logs that failed parsing), value range: true or falseSample:`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

Default placeholder value in the console: `{"ClsAgentDefault":0}`Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
