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
 * Log extraction rule
 *
 * @method string getTimeKey() Obtain Key name for the time field. TikeKey and TimeFormat must appear in pairsNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeKey(string $TimeKey) Set Key name for the time field. TikeKey and TimeFormat must appear in pairsNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeFormat() Obtain Time field format. For more information, please see the output parameters of the time format description of the `strftime` function in C language
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimeFormat(string $TimeFormat) Set Time field format. For more information, please see the output parameters of the time format description of the `strftime` function in C language
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDelimiter() Obtain Delimiter for log type. Valid only when LogType is delimiter_logNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setDelimiter(string $Delimiter) Set Delimiter for log type. Valid only when LogType is delimiter_logNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogRegex() Obtain Full log matching rule. Valid only if LogType is fullregex_logNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogRegex(string $LogRegex) Set Full log matching rule. Valid only if LogType is fullregex_logNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getBeginRegex() Obtain Line beginning matching rule, valid only if LogType is multiline_log or fullregex_logNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setBeginRegex(string $BeginRegex) Set Line beginning matching rule, valid only if LogType is multiline_log or fullregex_logNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getKeys() Obtain Key name of each extracted field. An empty key indicates discarding the field. Valid only if LogType is delimiter_log. json_log logs use the key of JSON itself. Limited to 100.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeys(array $Keys) Set Key name of each extracted field. An empty key indicates discarding the field. Valid only if LogType is delimiter_log. json_log logs use the key of JSON itself. Limited to 100.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFilterKeyRegex() Obtain Log filter rule list (previous version), keys to be filtered in the log and their corresponding regex.Note: For LogListener version 2.9.3 and later, it is recommended to use the AdvanceFilterRules configuration for log filtering.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFilterKeyRegex(array $FilterKeyRegex) Set Log filter rule list (previous version), keys to be filtered in the log and their corresponding regex.Note: For LogListener version 2.9.3 and later, it is recommended to use the AdvanceFilterRules configuration for log filtering.Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getUnMatchUpLoadSwitch() Obtain Whether to upload the logs that failed to be parsed. Valid values: `true`: yes; `false`: no
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnMatchUpLoadSwitch(boolean $UnMatchUpLoadSwitch) Set Whether to upload the logs that failed to be parsed. Valid values: `true`: yes; `false`: no
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUnMatchLogKey() Obtain Unmatched log key
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnMatchLogKey(string $UnMatchLogKey) Set Unmatched log key
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getBacktracking() Obtain Backtracking data volume under incremental collection pattern, default -1 indicates full collection; other non-negative numbers indicate incremental collection (collect logs backward from the latest position by ${Backtracking} bytes) with a maximum support of 1073741824 (1G).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBacktracking(integer $Backtracking) Set Backtracking data volume under incremental collection pattern, default -1 indicates full collection; other non-negative numbers indicate incremental collection (collect logs backward from the latest position by ${Backtracking} bytes) with a maximum support of 1073741824 (1G).Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsGBK() Obtain Whether to be encoded in GBK format. Valid values: `0` (No) and `1` (Yes).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsGBK(integer $IsGBK) Set Whether to be encoded in GBK format. Valid values: `0` (No) and `1` (Yes).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getJsonStandard() Obtain Whether to be formatted as JSON (standard). Valid values: `0` (No) and `1` (Yes).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJsonStandard(integer $JsonStandard) Set Whether to be formatted as JSON (standard). Valid values: `0` (No) and `1` (Yes).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Syslog protocol. Valid values: `tcp`, `udp`.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Syslog protocol. Valid values: `tcp`, `udp`.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain Listening address and port specified by the syslog collection. Format: [ip]:[port]. Example: 127.0.0.1:9000.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Listening address and port specified by the syslog collection. Format: [ip]:[port]. Example: 127.0.0.1:9000.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParseProtocol() Obtain `rfc3164`: Resolve logs by using the RFC 3164 protocol during the syslog collection.
`rfc5424`: Resolve logs by using the RFC 5424 protocol during the syslog collection.
`auto`: Automatically match either the RFC 3164 or RFC 5424 protocol.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParseProtocol(string $ParseProtocol) Set `rfc3164`: Resolve logs by using the RFC 3164 protocol during the syslog collection.
`rfc5424`: Resolve logs by using the RFC 5424 protocol during the syslog collection.
`auto`: Automatically match either the RFC 3164 or RFC 5424 protocol.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMetadataType() Obtain Metadata type. Valid values:
0: Do not use metadata.
1: Use machine group metadata.
2: Use user-defined metadata.
3: Use the collection path to extract metadata.
 * @method void setMetadataType(integer $MetadataType) Set Metadata type. Valid values:
0: Do not use metadata.
1: Use machine group metadata.
2: Use user-defined metadata.
3: Use the collection path to extract metadata.
 * @method string getPathRegex() Obtain Regular expression of the collection configuration path, which is required when `MetadataType` is set to `3`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPathRegex(string $PathRegex) Set Regular expression of the collection configuration path, which is required when `MetadataType` is set to `3`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMetaTags() Obtain User-defined metadata, which is required when `MetadataType` is set to `2`.
 * @method void setMetaTags(array $MetaTags) Set User-defined metadata, which is required when `MetadataType` is set to `2`.
 * @method array getEventLogRules() Obtain Windows event log collection
 * @method void setEventLogRules(array $EventLogRules) Set Windows event log collection
 */
class ExtractRuleInfo extends AbstractModel
{
    /**
     * @var string Key name for the time field. TikeKey and TimeFormat must appear in pairsNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeKey;

    /**
     * @var string Time field format. For more information, please see the output parameters of the time format description of the `strftime` function in C language
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimeFormat;

    /**
     * @var string Delimiter for log type. Valid only when LogType is delimiter_logNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Delimiter;

    /**
     * @var string Full log matching rule. Valid only if LogType is fullregex_logNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogRegex;

    /**
     * @var string Line beginning matching rule, valid only if LogType is multiline_log or fullregex_logNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $BeginRegex;

    /**
     * @var array Key name of each extracted field. An empty key indicates discarding the field. Valid only if LogType is delimiter_log. json_log logs use the key of JSON itself. Limited to 100.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Keys;

    /**
     * @var array Log filter rule list (previous version), keys to be filtered in the log and their corresponding regex.Note: For LogListener version 2.9.3 and later, it is recommended to use the AdvanceFilterRules configuration for log filtering.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FilterKeyRegex;

    /**
     * @var boolean Whether to upload the logs that failed to be parsed. Valid values: `true`: yes; `false`: no
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnMatchUpLoadSwitch;

    /**
     * @var string Unmatched log key
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnMatchLogKey;

    /**
     * @var integer Backtracking data volume under incremental collection pattern, default -1 indicates full collection; other non-negative numbers indicate incremental collection (collect logs backward from the latest position by ${Backtracking} bytes) with a maximum support of 1073741824 (1G).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Backtracking;

    /**
     * @var integer Whether to be encoded in GBK format. Valid values: `0` (No) and `1` (Yes).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsGBK;

    /**
     * @var integer Whether to be formatted as JSON (standard). Valid values: `0` (No) and `1` (Yes).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JsonStandard;

    /**
     * @var string Syslog protocol. Valid values: `tcp`, `udp`.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string Listening address and port specified by the syslog collection. Format: [ip]:[port]. Example: 127.0.0.1:9000.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string `rfc3164`: Resolve logs by using the RFC 3164 protocol during the syslog collection.
`rfc5424`: Resolve logs by using the RFC 5424 protocol during the syslog collection.
`auto`: Automatically match either the RFC 3164 or RFC 5424 protocol.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParseProtocol;

    /**
     * @var integer Metadata type. Valid values:
0: Do not use metadata.
1: Use machine group metadata.
2: Use user-defined metadata.
3: Use the collection path to extract metadata.
     */
    public $MetadataType;

    /**
     * @var string Regular expression of the collection configuration path, which is required when `MetadataType` is set to `3`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PathRegex;

    /**
     * @var array User-defined metadata, which is required when `MetadataType` is set to `2`.
     */
    public $MetaTags;

    /**
     * @var array Windows event log collection
     */
    public $EventLogRules;

    /**
     * @param string $TimeKey Key name for the time field. TikeKey and TimeFormat must appear in pairsNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeFormat Time field format. For more information, please see the output parameters of the time format description of the `strftime` function in C language
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Delimiter Delimiter for log type. Valid only when LogType is delimiter_logNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogRegex Full log matching rule. Valid only if LogType is fullregex_logNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $BeginRegex Line beginning matching rule, valid only if LogType is multiline_log or fullregex_logNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $Keys Key name of each extracted field. An empty key indicates discarding the field. Valid only if LogType is delimiter_log. json_log logs use the key of JSON itself. Limited to 100.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $FilterKeyRegex Log filter rule list (previous version), keys to be filtered in the log and their corresponding regex.Note: For LogListener version 2.9.3 and later, it is recommended to use the AdvanceFilterRules configuration for log filtering.Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $UnMatchUpLoadSwitch Whether to upload the logs that failed to be parsed. Valid values: `true`: yes; `false`: no
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UnMatchLogKey Unmatched log key
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Backtracking Backtracking data volume under incremental collection pattern, default -1 indicates full collection; other non-negative numbers indicate incremental collection (collect logs backward from the latest position by ${Backtracking} bytes) with a maximum support of 1073741824 (1G).Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsGBK Whether to be encoded in GBK format. Valid values: `0` (No) and `1` (Yes).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $JsonStandard Whether to be formatted as JSON (standard). Valid values: `0` (No) and `1` (Yes).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Syslog protocol. Valid values: `tcp`, `udp`.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address Listening address and port specified by the syslog collection. Format: [ip]:[port]. Example: 127.0.0.1:9000.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ParseProtocol `rfc3164`: Resolve logs by using the RFC 3164 protocol during the syslog collection.
`rfc5424`: Resolve logs by using the RFC 5424 protocol during the syslog collection.
`auto`: Automatically match either the RFC 3164 or RFC 5424 protocol.
This field can be used when you create or modify collection rule configurations.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MetadataType Metadata type. Valid values:
0: Do not use metadata.
1: Use machine group metadata.
2: Use user-defined metadata.
3: Use the collection path to extract metadata.
     * @param string $PathRegex Regular expression of the collection configuration path, which is required when `MetadataType` is set to `3`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $MetaTags User-defined metadata, which is required when `MetadataType` is set to `2`.
     * @param array $EventLogRules Windows event log collection
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
        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("LogRegex",$param) and $param["LogRegex"] !== null) {
            $this->LogRegex = $param["LogRegex"];
        }

        if (array_key_exists("BeginRegex",$param) and $param["BeginRegex"] !== null) {
            $this->BeginRegex = $param["BeginRegex"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("FilterKeyRegex",$param) and $param["FilterKeyRegex"] !== null) {
            $this->FilterKeyRegex = [];
            foreach ($param["FilterKeyRegex"] as $key => $value){
                $obj = new KeyRegexInfo();
                $obj->deserialize($value);
                array_push($this->FilterKeyRegex, $obj);
            }
        }

        if (array_key_exists("UnMatchUpLoadSwitch",$param) and $param["UnMatchUpLoadSwitch"] !== null) {
            $this->UnMatchUpLoadSwitch = $param["UnMatchUpLoadSwitch"];
        }

        if (array_key_exists("UnMatchLogKey",$param) and $param["UnMatchLogKey"] !== null) {
            $this->UnMatchLogKey = $param["UnMatchLogKey"];
        }

        if (array_key_exists("Backtracking",$param) and $param["Backtracking"] !== null) {
            $this->Backtracking = $param["Backtracking"];
        }

        if (array_key_exists("IsGBK",$param) and $param["IsGBK"] !== null) {
            $this->IsGBK = $param["IsGBK"];
        }

        if (array_key_exists("JsonStandard",$param) and $param["JsonStandard"] !== null) {
            $this->JsonStandard = $param["JsonStandard"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ParseProtocol",$param) and $param["ParseProtocol"] !== null) {
            $this->ParseProtocol = $param["ParseProtocol"];
        }

        if (array_key_exists("MetadataType",$param) and $param["MetadataType"] !== null) {
            $this->MetadataType = $param["MetadataType"];
        }

        if (array_key_exists("PathRegex",$param) and $param["PathRegex"] !== null) {
            $this->PathRegex = $param["PathRegex"];
        }

        if (array_key_exists("MetaTags",$param) and $param["MetaTags"] !== null) {
            $this->MetaTags = [];
            foreach ($param["MetaTags"] as $key => $value){
                $obj = new MetaTagInfo();
                $obj->deserialize($value);
                array_push($this->MetaTags, $obj);
            }
        }

        if (array_key_exists("EventLogRules",$param) and $param["EventLogRules"] !== null) {
            $this->EventLogRules = [];
            foreach ($param["EventLogRules"] as $key => $value){
                $obj = new EventLog();
                $obj->deserialize($value);
                array_push($this->EventLogRules, $obj);
            }
        }
    }
}
