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
 * ModifyConfig request structure.
 *
 * @method string getConfigId() Obtain Collection rule configuration ID, accessed through [Access collection rule configuration](https://intl.cloud.tencent.com/document/product/614/58616?from_cn_redirect=1).
 * @method void setConfigId(string $ConfigId) Set Collection rule configuration ID, accessed through [Access collection rule configuration](https://intl.cloud.tencent.com/document/product/614/58616?from_cn_redirect=1).
 * @method string getName() Obtain Collection rule configuration name
 * @method void setName(string $Name) Set Collection rule configuration name
 * @method string getPath() Obtain Log collection path containing the filename
 * @method void setPath(string $Path) Set Log collection path containing the filename
 * @method string getLogType() Obtain The types of logs collected. Supported types are:
- json_log: JSON File Log (For more information, see [Using JSON pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17419?from_cn_redirect=1));- delimiter_log: Delimiter - File Logs (For more information, see [Using delimiter pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17420?from_cn_redirect=1));- minimalist_log: Single-line Full-text File Log (For more information, see [Using single-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17421?from_cn_redirect=1));- fullregex_log: Single line full regular expression - File log (For more information, see [Using single-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52365?from_cn_redirect=1));- multiline_log: Multiline Full-text File Log (For more information, see [Using multi-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17422?from_cn_redirect=1));- multiline_fullregex_log: Multi-line complete regular expression - File Logs (For more information, see [Using multi-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52366?from_cn_redirect=1));- user_define_log: Combined parsing (Suitable for logs with multiple nested formats, see [Using combined parsing pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1));- service_syslog: syslog collection (For more information, see [Collect Syslog](https://intl.cloud.tencent.com/document/product/614/81454?from_cn_redirect=1));- windows_event_log: Windows event log (For more information, see [Collect Windows Event Log](https://intl.cloud.tencent.com/document/product/614/96678?from_cn_redirect=1)).
 * @method void setLogType(string $LogType) Set The types of logs collected. Supported types are:
- json_log: JSON File Log (For more information, see [Using JSON pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17419?from_cn_redirect=1));- delimiter_log: Delimiter - File Logs (For more information, see [Using delimiter pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17420?from_cn_redirect=1));- minimalist_log: Single-line Full-text File Log (For more information, see [Using single-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17421?from_cn_redirect=1));- fullregex_log: Single line full regular expression - File log (For more information, see [Using single-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52365?from_cn_redirect=1));- multiline_log: Multiline Full-text File Log (For more information, see [Using multi-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17422?from_cn_redirect=1));- multiline_fullregex_log: Multi-line complete regular expression - File Logs (For more information, see [Using multi-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52366?from_cn_redirect=1));- user_define_log: Combined parsing (Suitable for logs with multiple nested formats, see [Using combined parsing pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1));- service_syslog: syslog collection (For more information, see [Collect Syslog](https://intl.cloud.tencent.com/document/product/614/81454?from_cn_redirect=1));- windows_event_log: Windows event log (For more information, see [Collect Windows Event Log](https://intl.cloud.tencent.com/document/product/614/96678?from_cn_redirect=1)).
 * @method ExtractRuleInfo getExtractRule() Obtain Extraction rule. If `ExtractRule` is set, `LogType` must be set.
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) Set Extraction rule. If `ExtractRule` is set, `LogType` must be set.
 * @method array getExcludePaths() Obtain Collection path blocklist
 * @method void setExcludePaths(array $ExcludePaths) Set Collection path blocklist
 * @method string getOutput() Obtain Log topic (TopicId) associated with collection configuration
 * @method void setOutput(string $Output) Set Log topic (TopicId) associated with collection configuration
 * @method string getUserDefineRule() Obtain Custom parsing string, serialized as a JSON string.
 * @method void setUserDefineRule(string $UserDefineRule) Set Custom parsing string, serialized as a JSON string.
 * @method string getAdvancedConfig() Obtain Advanced collection configuration. A JSON string, Key/Value definition as follows:
- ClsAgentFileTimeout (timeout property), value range: an integer greater than or equal to 0, where 0 means no timeout- ClsAgentMaxDepth (maximum directory depth), value range: an integer greater than or equal to 0
- ClsAgentParseFailMerge (merge logs that failed parsing), value range: true or false
Sample:
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`
 * @method void setAdvancedConfig(string $AdvancedConfig) Set Advanced collection configuration. A JSON string, Key/Value definition as follows:
- ClsAgentFileTimeout (timeout property), value range: an integer greater than or equal to 0, where 0 means no timeout- ClsAgentMaxDepth (maximum directory depth), value range: an integer greater than or equal to 0
- ClsAgentParseFailMerge (merge logs that failed parsing), value range: true or false
Sample:
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`
 */
class ModifyConfigRequest extends AbstractModel
{
    /**
     * @var string Collection rule configuration ID, accessed through [Access collection rule configuration](https://intl.cloud.tencent.com/document/product/614/58616?from_cn_redirect=1).
     */
    public $ConfigId;

    /**
     * @var string Collection rule configuration name
     */
    public $Name;

    /**
     * @var string Log collection path containing the filename
     */
    public $Path;

    /**
     * @var string The types of logs collected. Supported types are:
- json_log: JSON File Log (For more information, see [Using JSON pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17419?from_cn_redirect=1));- delimiter_log: Delimiter - File Logs (For more information, see [Using delimiter pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17420?from_cn_redirect=1));- minimalist_log: Single-line Full-text File Log (For more information, see [Using single-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17421?from_cn_redirect=1));- fullregex_log: Single line full regular expression - File log (For more information, see [Using single-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52365?from_cn_redirect=1));- multiline_log: Multiline Full-text File Log (For more information, see [Using multi-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17422?from_cn_redirect=1));- multiline_fullregex_log: Multi-line complete regular expression - File Logs (For more information, see [Using multi-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52366?from_cn_redirect=1));- user_define_log: Combined parsing (Suitable for logs with multiple nested formats, see [Using combined parsing pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1));- service_syslog: syslog collection (For more information, see [Collect Syslog](https://intl.cloud.tencent.com/document/product/614/81454?from_cn_redirect=1));- windows_event_log: Windows event log (For more information, see [Collect Windows Event Log](https://intl.cloud.tencent.com/document/product/614/96678?from_cn_redirect=1)).
     */
    public $LogType;

    /**
     * @var ExtractRuleInfo Extraction rule. If `ExtractRule` is set, `LogType` must be set.
     */
    public $ExtractRule;

    /**
     * @var array Collection path blocklist
     */
    public $ExcludePaths;

    /**
     * @var string Log topic (TopicId) associated with collection configuration
     */
    public $Output;

    /**
     * @var string Custom parsing string, serialized as a JSON string.
     */
    public $UserDefineRule;

    /**
     * @var string Advanced collection configuration. A JSON string, Key/Value definition as follows:
- ClsAgentFileTimeout (timeout property), value range: an integer greater than or equal to 0, where 0 means no timeout- ClsAgentMaxDepth (maximum directory depth), value range: an integer greater than or equal to 0
- ClsAgentParseFailMerge (merge logs that failed parsing), value range: true or false
Sample:
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`
     */
    public $AdvancedConfig;

    /**
     * @param string $ConfigId Collection rule configuration ID, accessed through [Access collection rule configuration](https://intl.cloud.tencent.com/document/product/614/58616?from_cn_redirect=1).
     * @param string $Name Collection rule configuration name
     * @param string $Path Log collection path containing the filename
     * @param string $LogType The types of logs collected. Supported types are:
- json_log: JSON File Log (For more information, see [Using JSON pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17419?from_cn_redirect=1));- delimiter_log: Delimiter - File Logs (For more information, see [Using delimiter pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17420?from_cn_redirect=1));- minimalist_log: Single-line Full-text File Log (For more information, see [Using single-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17421?from_cn_redirect=1));- fullregex_log: Single line full regular expression - File log (For more information, see [Using single-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52365?from_cn_redirect=1));- multiline_log: Multiline Full-text File Log (For more information, see [Using multi-line full-text pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/17422?from_cn_redirect=1));- multiline_fullregex_log: Multi-line complete regular expression - File Logs (For more information, see [Using multi-line - complete regular expression pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/52366?from_cn_redirect=1));- user_define_log: Combined parsing (Suitable for logs with multiple nested formats, see [Using combined parsing pattern to collect logs](https://intl.cloud.tencent.com/document/product/614/61310?from_cn_redirect=1));- service_syslog: syslog collection (For more information, see [Collect Syslog](https://intl.cloud.tencent.com/document/product/614/81454?from_cn_redirect=1));- windows_event_log: Windows event log (For more information, see [Collect Windows Event Log](https://intl.cloud.tencent.com/document/product/614/96678?from_cn_redirect=1)).
     * @param ExtractRuleInfo $ExtractRule Extraction rule. If `ExtractRule` is set, `LogType` must be set.
     * @param array $ExcludePaths Collection path blocklist
     * @param string $Output Log topic (TopicId) associated with collection configuration
     * @param string $UserDefineRule Custom parsing string, serialized as a JSON string.
     * @param string $AdvancedConfig Advanced collection configuration. A JSON string, Key/Value definition as follows:
- ClsAgentFileTimeout (timeout property), value range: an integer greater than or equal to 0, where 0 means no timeout- ClsAgentMaxDepth (maximum directory depth), value range: an integer greater than or equal to 0
- ClsAgentParseFailMerge (merge logs that failed parsing), value range: true or false
Sample:
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`
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

        if (array_key_exists("UserDefineRule",$param) and $param["UserDefineRule"] !== null) {
            $this->UserDefineRule = $param["UserDefineRule"];
        }

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = $param["AdvancedConfig"];
        }
    }
}
