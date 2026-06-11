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
 * Log extraction rule
 *
 * @method string getTimeKey() Obtain <p>key name for the time field. TimeKey and TimeFormat must appear in pairs</p>
 * @method void setTimeKey(string $TimeKey) Set <p>key name for the time field. TimeKey and TimeFormat must appear in pairs</p>
 * @method string getTimeFormat() Obtain <p>Time field format. Refer to the strftime function in C language for time format description output parameter</p><ul><li>See <a href="https://www.tencentcloud.com/document/product/614/38614?from_cn_redirect=1">configure time format</a> document</li></ul>
 * @method void setTimeFormat(string $TimeFormat) Set <p>Time field format. Refer to the strftime function in C language for time format description output parameter</p><ul><li>See <a href="https://www.tencentcloud.com/document/product/614/38614?from_cn_redirect=1">configure time format</a> document</li></ul>
 * @method string getDelimiter() Obtain <p>Delimiter for log type. Only valid when LogType is delimiter_log</p>
 * @method void setDelimiter(string $Delimiter) Set <p>Delimiter for log type. Only valid when LogType is delimiter_log</p>
 * @method string getLogRegex() Obtain <p>The whole log matching rule is only valid when LogType is fullregex_log</p>
 * @method void setLogRegex(string $LogRegex) Set <p>The whole log matching rule is only valid when LogType is fullregex_log</p>
 * @method string getBeginRegex() Obtain <p>First-line matching rule. Valid only when LogType is multiline_log or fullregex_log.</p>
 * @method void setBeginRegex(string $BeginRegex) Set <p>First-line matching rule. Valid only when LogType is multiline_log or fullregex_log.</p>
 * @method array getKeys() Obtain <p>The key name of each field. An empty key means to discard the field. Valid only when LogType is delimiter_log. For json_log, use the key in the json itself. Limited to 100.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeys(array $Keys) Set <p>The key name of each field. An empty key means to discard the field. Valid only when LogType is delimiter_log. For json_log, use the key in the json itself. Limited to 100.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFilterKeyRegex() Obtain <p>Log filtering rule list (legacy version), keys to be filtered, and corresponding regex.<br> Note: For LogListener 2.9.3 and above versions, it is recommended to use log filtering rules configuration.</p>
 * @method void setFilterKeyRegex(array $FilterKeyRegex) Set <p>Log filtering rule list (legacy version), keys to be filtered, and corresponding regex.<br> Note: For LogListener 2.9.3 and above versions, it is recommended to use log filtering rules configuration.</p>
 * @method boolean getUnMatchUpLoadSwitch() Obtain <p>Whether to upload logs that failed to be parsed, true for upload, false for not uploading</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnMatchUpLoadSwitch(boolean $UnMatchUpLoadSwitch) Set <p>Whether to upload logs that failed to be parsed, true for upload, false for not uploading</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUnMatchLogKey() Obtain <p>key of the failure log, required when UnMatchUpLoadSwitch is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnMatchLogKey(string $UnMatchLogKey) Set <p>key of the failure log, required when UnMatchUpLoadSwitch is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBacktracking() Obtain <p>Backtracking data volume in incremental collection mode. Default: -1 (full collection). Other non-negative numbers indicate incremental collection (backward collection of ${Backtracking} Byte logs from the newest position). Supports up to 1073741824 (1G).<br>Note:</p><ul><li>COS import does not support this field.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBacktracking(integer $Backtracking) Set <p>Backtracking data volume in incremental collection mode. Default: -1 (full collection). Other non-negative numbers indicate incremental collection (backward collection of ${Backtracking} Byte logs from the newest position). Supports up to 1073741824 (1G).<br>Note:</p><ul><li>COS import does not support this field.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsGBK() Obtain <p>Whether it is Gbk encoding. 0: No; 1: Yes.<br>Note</p><ul><li>Currently, a value of 0 indicates UTF-8 encoding.</li><li>COS import does not support this field.</li></ul>
 * @method void setIsGBK(integer $IsGBK) Set <p>Whether it is Gbk encoding. 0: No; 1: Yes.<br>Note</p><ul><li>Currently, a value of 0 indicates UTF-8 encoding.</li><li>COS import does not support this field.</li></ul>
 * @method integer getJsonStandard() Obtain <p>Whether it is standard json. 0: No; 1: Yes.</p><ul><li>Standard json means the collector uses industry-standard open-source parsers for json parsing. Non-standard json means the collector uses CLS self-developed json parsers. There is no essential difference between the two parsers. We recommend customers use standard json for parsing.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJsonStandard(integer $JsonStandard) Set <p>Whether it is standard json. 0: No; 1: Yes.</p><ul><li>Standard json means the collector uses industry-standard open-source parsers for json parsing. Non-standard json means the collector uses CLS self-developed json parsers. There is no essential difference between the two parsers. We recommend customers use standard json for parsing.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain <p>syslog transport protocol, valid values: tcp, udp, this parameter is valid only when LogType is service_syslog, not required for other types.<br>Note:</p><ul><li>This field applies to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
 * @method void setProtocol(string $Protocol) Set <p>syslog transport protocol, valid values: tcp, udp, this parameter is valid only when LogType is service_syslog, not required for other types.<br>Note:</p><ul><li>This field applies to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
 * @method string getAddress() Obtain <p>syslog system log collection specifies the address and port listened to by the collector, format: [ip]:[port]. This parameter is valid only when LogType is service_syslog. No need to specify for other types.<br>Note:</p><ul><li>This field applies to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
 * @method void setAddress(string $Address) Set <p>syslog system log collection specifies the address and port listened to by the collector, format: [ip]:[port]. This parameter is valid only when LogType is service_syslog. No need to specify for other types.<br>Note:</p><ul><li>This field applies to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
 * @method string getParseProtocol() Obtain <p>rfc3164: Specify system log collection using RFC3164 protocol parsing.<br>rfc5424: Specify system log collection using RFC5424 protocol parsing.<br>auto: Automatically match either RFC3164 or RFC5424 protocol.<br>This parameter is valid only when LogType is service_syslog. Not required for other types.<br>Note:</p><ul><li>This field is applicable to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
 * @method void setParseProtocol(string $ParseProtocol) Set <p>rfc3164: Specify system log collection using RFC3164 protocol parsing.<br>rfc5424: Specify system log collection using RFC5424 protocol parsing.<br>auto: Automatically match either RFC3164 or RFC5424 protocol.<br>This parameter is valid only when LogType is service_syslog. Not required for other types.<br>Note:</p><ul><li>This field is applicable to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
 * @method integer getMetadataType() Obtain <p>Metadata type. 0: Not use metadata information; 1: Use machine group metadata; 2: Using custom metadata; 3: Use collection configuration path.<br>Note:</p><ul><li>COS import does not support this field.</li></ul>
 * @method void setMetadataType(integer $MetadataType) Set <p>Metadata type. 0: Not use metadata information; 1: Use machine group metadata; 2: Using custom metadata; 3: Use collection configuration path.<br>Note:</p><ul><li>COS import does not support this field.</li></ul>
 * @method string getPathRegex() Obtain <p>Collection configuration path regular expression.</p><p><pre><code>Use "()" to identify the regular expression corresponding to the target field in the path. During parsing, "()" is considered as a capture group and reported together with logs in the form of __TAG__.{i}:{target field name}, where i is the serial number of the capture group. If you do not want to use the serial number as the key name, you can define a custom key name through the named capturing group "(?&lt;{key name}&gt;{regular expression})" and report it together with logs in the form of __TAG__.{key name}:{target field name}. Supports up to 5 capture groups.</code></pre></p><p>Note:</p><ul><li>Required when MetadataType is 3.</li><li>This field is not supported in COS import.</li></ul>
 * @method void setPathRegex(string $PathRegex) Set <p>Collection configuration path regular expression.</p><p><pre><code>Use "()" to identify the regular expression corresponding to the target field in the path. During parsing, "()" is considered as a capture group and reported together with logs in the form of __TAG__.{i}:{target field name}, where i is the serial number of the capture group. If you do not want to use the serial number as the key name, you can define a custom key name through the named capturing group "(?&lt;{key name}&gt;{regular expression})" and report it together with logs in the form of __TAG__.{key name}:{target field name}. Supports up to 5 capture groups.</code></pre></p><p>Note:</p><ul><li>Required when MetadataType is 3.</li><li>This field is not supported in COS import.</li></ul>
 * @method array getMetaTags() Obtain <p>User-defined metadata information.<br>Note:</p><ul><li>Required when MetadataType is 2.</li><li>This field is not supported for COS import.</li></ul>
 * @method void setMetaTags(array $MetaTags) Set <p>User-defined metadata information.<br>Note:</p><ul><li>Required when MetadataType is 2.</li><li>This field is not supported for COS import.</li></ul>
 * @method array getEventLogRules() Obtain <p>The Windows Event Log Collection rule is valid only when LogType is windows_event_log. No need to specify for other types.</p>
 * @method void setEventLogRules(array $EventLogRules) Set <p>The Windows Event Log Collection rule is valid only when LogType is windows_event_log. No need to specify for other types.</p>
 * @method array getAdvanceFilterRules() Obtain <p>Log filtering rule list (new version).<br>Note:</p><ul><li>LogListener versions below 2.9.3 do not support this. Please use FilterKeyRegex to configure log filter rules.</li><li>Self-built k8s collection configuration (CreateConfigExtra, ModifyConfigExtra) does not support this field.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdvanceFilterRules(array $AdvanceFilterRules) Set <p>Log filtering rule list (new version).<br>Note:</p><ul><li>LogListener versions below 2.9.3 do not support this. Please use FilterKeyRegex to configure log filter rules.</li><li>Self-built k8s collection configuration (CreateConfigExtra, ModifyConfigExtra) does not support this field.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRawLogKey() Obtain <p>Key name of raw logs. All raw logs are uploaded with the Key name you specified, and the original log content as Value. If left empty, raw log upload is disabled.</p><ul><li>COS import does not support this field.</li></ul>
 * @method void setRawLogKey(string $RawLogKey) Set <p>Key name of raw logs. All raw logs are uploaded with the Key name you specified, and the original log content as Value. If left empty, raw log upload is disabled.</p><ul><li>COS import does not support this field.</li></ul>
 */
class ExtractRuleInfo extends AbstractModel
{
    /**
     * @var string <p>key name for the time field. TimeKey and TimeFormat must appear in pairs</p>
     */
    public $TimeKey;

    /**
     * @var string <p>Time field format. Refer to the strftime function in C language for time format description output parameter</p><ul><li>See <a href="https://www.tencentcloud.com/document/product/614/38614?from_cn_redirect=1">configure time format</a> document</li></ul>
     */
    public $TimeFormat;

    /**
     * @var string <p>Delimiter for log type. Only valid when LogType is delimiter_log</p>
     */
    public $Delimiter;

    /**
     * @var string <p>The whole log matching rule is only valid when LogType is fullregex_log</p>
     */
    public $LogRegex;

    /**
     * @var string <p>First-line matching rule. Valid only when LogType is multiline_log or fullregex_log.</p>
     */
    public $BeginRegex;

    /**
     * @var array <p>The key name of each field. An empty key means to discard the field. Valid only when LogType is delimiter_log. For json_log, use the key in the json itself. Limited to 100.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Keys;

    /**
     * @var array <p>Log filtering rule list (legacy version), keys to be filtered, and corresponding regex.<br> Note: For LogListener 2.9.3 and above versions, it is recommended to use log filtering rules configuration.</p>
     */
    public $FilterKeyRegex;

    /**
     * @var boolean <p>Whether to upload logs that failed to be parsed, true for upload, false for not uploading</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnMatchUpLoadSwitch;

    /**
     * @var string <p>key of the failure log, required when UnMatchUpLoadSwitch is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnMatchLogKey;

    /**
     * @var integer <p>Backtracking data volume in incremental collection mode. Default: -1 (full collection). Other non-negative numbers indicate incremental collection (backward collection of ${Backtracking} Byte logs from the newest position). Supports up to 1073741824 (1G).<br>Note:</p><ul><li>COS import does not support this field.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Backtracking;

    /**
     * @var integer <p>Whether it is Gbk encoding. 0: No; 1: Yes.<br>Note</p><ul><li>Currently, a value of 0 indicates UTF-8 encoding.</li><li>COS import does not support this field.</li></ul>
     */
    public $IsGBK;

    /**
     * @var integer <p>Whether it is standard json. 0: No; 1: Yes.</p><ul><li>Standard json means the collector uses industry-standard open-source parsers for json parsing. Non-standard json means the collector uses CLS self-developed json parsers. There is no essential difference between the two parsers. We recommend customers use standard json for parsing.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JsonStandard;

    /**
     * @var string <p>syslog transport protocol, valid values: tcp, udp, this parameter is valid only when LogType is service_syslog, not required for other types.<br>Note:</p><ul><li>This field applies to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
     */
    public $Protocol;

    /**
     * @var string <p>syslog system log collection specifies the address and port listened to by the collector, format: [ip]:[port]. This parameter is valid only when LogType is service_syslog. No need to specify for other types.<br>Note:</p><ul><li>This field applies to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
     */
    public $Address;

    /**
     * @var string <p>rfc3164: Specify system log collection using RFC3164 protocol parsing.<br>rfc5424: Specify system log collection using RFC5424 protocol parsing.<br>auto: Automatically match either RFC3164 or RFC5424 protocol.<br>This parameter is valid only when LogType is service_syslog. Not required for other types.<br>Note:</p><ul><li>This field is applicable to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
     */
    public $ParseProtocol;

    /**
     * @var integer <p>Metadata type. 0: Not use metadata information; 1: Use machine group metadata; 2: Using custom metadata; 3: Use collection configuration path.<br>Note:</p><ul><li>COS import does not support this field.</li></ul>
     */
    public $MetadataType;

    /**
     * @var string <p>Collection configuration path regular expression.</p><p><pre><code>Use "()" to identify the regular expression corresponding to the target field in the path. During parsing, "()" is considered as a capture group and reported together with logs in the form of __TAG__.{i}:{target field name}, where i is the serial number of the capture group. If you do not want to use the serial number as the key name, you can define a custom key name through the named capturing group "(?&lt;{key name}&gt;{regular expression})" and report it together with logs in the form of __TAG__.{key name}:{target field name}. Supports up to 5 capture groups.</code></pre></p><p>Note:</p><ul><li>Required when MetadataType is 3.</li><li>This field is not supported in COS import.</li></ul>
     */
    public $PathRegex;

    /**
     * @var array <p>User-defined metadata information.<br>Note:</p><ul><li>Required when MetadataType is 2.</li><li>This field is not supported for COS import.</li></ul>
     */
    public $MetaTags;

    /**
     * @var array <p>The Windows Event Log Collection rule is valid only when LogType is windows_event_log. No need to specify for other types.</p>
     */
    public $EventLogRules;

    /**
     * @var array <p>Log filtering rule list (new version).<br>Note:</p><ul><li>LogListener versions below 2.9.3 do not support this. Please use FilterKeyRegex to configure log filter rules.</li><li>Self-built k8s collection configuration (CreateConfigExtra, ModifyConfigExtra) does not support this field.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdvanceFilterRules;

    /**
     * @var string <p>Key name of raw logs. All raw logs are uploaded with the Key name you specified, and the original log content as Value. If left empty, raw log upload is disabled.</p><ul><li>COS import does not support this field.</li></ul>
     */
    public $RawLogKey;

    /**
     * @param string $TimeKey <p>key name for the time field. TimeKey and TimeFormat must appear in pairs</p>
     * @param string $TimeFormat <p>Time field format. Refer to the strftime function in C language for time format description output parameter</p><ul><li>See <a href="https://www.tencentcloud.com/document/product/614/38614?from_cn_redirect=1">configure time format</a> document</li></ul>
     * @param string $Delimiter <p>Delimiter for log type. Only valid when LogType is delimiter_log</p>
     * @param string $LogRegex <p>The whole log matching rule is only valid when LogType is fullregex_log</p>
     * @param string $BeginRegex <p>First-line matching rule. Valid only when LogType is multiline_log or fullregex_log.</p>
     * @param array $Keys <p>The key name of each field. An empty key means to discard the field. Valid only when LogType is delimiter_log. For json_log, use the key in the json itself. Limited to 100.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $FilterKeyRegex <p>Log filtering rule list (legacy version), keys to be filtered, and corresponding regex.<br> Note: For LogListener 2.9.3 and above versions, it is recommended to use log filtering rules configuration.</p>
     * @param boolean $UnMatchUpLoadSwitch <p>Whether to upload logs that failed to be parsed, true for upload, false for not uploading</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UnMatchLogKey <p>key of the failure log, required when UnMatchUpLoadSwitch is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Backtracking <p>Backtracking data volume in incremental collection mode. Default: -1 (full collection). Other non-negative numbers indicate incremental collection (backward collection of ${Backtracking} Byte logs from the newest position). Supports up to 1073741824 (1G).<br>Note:</p><ul><li>COS import does not support this field.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsGBK <p>Whether it is Gbk encoding. 0: No; 1: Yes.<br>Note</p><ul><li>Currently, a value of 0 indicates UTF-8 encoding.</li><li>COS import does not support this field.</li></ul>
     * @param integer $JsonStandard <p>Whether it is standard json. 0: No; 1: Yes.</p><ul><li>Standard json means the collector uses industry-standard open-source parsers for json parsing. Non-standard json means the collector uses CLS self-developed json parsers. There is no essential difference between the two parsers. We recommend customers use standard json for parsing.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol <p>syslog transport protocol, valid values: tcp, udp, this parameter is valid only when LogType is service_syslog, not required for other types.<br>Note:</p><ul><li>This field applies to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
     * @param string $Address <p>syslog system log collection specifies the address and port listened to by the collector, format: [ip]:[port]. This parameter is valid only when LogType is service_syslog. No need to specify for other types.<br>Note:</p><ul><li>This field applies to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
     * @param string $ParseProtocol <p>rfc3164: Specify system log collection using RFC3164 protocol parsing.<br>rfc5424: Specify system log collection using RFC5424 protocol parsing.<br>auto: Automatically match either RFC3164 or RFC5424 protocol.<br>This parameter is valid only when LogType is service_syslog. Not required for other types.<br>Note:</p><ul><li>This field is applicable to: create collection rule configuration, modify collection rule configuration.</li><li>COS import does not support this field.</li></ul>
     * @param integer $MetadataType <p>Metadata type. 0: Not use metadata information; 1: Use machine group metadata; 2: Using custom metadata; 3: Use collection configuration path.<br>Note:</p><ul><li>COS import does not support this field.</li></ul>
     * @param string $PathRegex <p>Collection configuration path regular expression.</p><p><pre><code>Use "()" to identify the regular expression corresponding to the target field in the path. During parsing, "()" is considered as a capture group and reported together with logs in the form of __TAG__.{i}:{target field name}, where i is the serial number of the capture group. If you do not want to use the serial number as the key name, you can define a custom key name through the named capturing group "(?&lt;{key name}&gt;{regular expression})" and report it together with logs in the form of __TAG__.{key name}:{target field name}. Supports up to 5 capture groups.</code></pre></p><p>Note:</p><ul><li>Required when MetadataType is 3.</li><li>This field is not supported in COS import.</li></ul>
     * @param array $MetaTags <p>User-defined metadata information.<br>Note:</p><ul><li>Required when MetadataType is 2.</li><li>This field is not supported for COS import.</li></ul>
     * @param array $EventLogRules <p>The Windows Event Log Collection rule is valid only when LogType is windows_event_log. No need to specify for other types.</p>
     * @param array $AdvanceFilterRules <p>Log filtering rule list (new version).<br>Note:</p><ul><li>LogListener versions below 2.9.3 do not support this. Please use FilterKeyRegex to configure log filter rules.</li><li>Self-built k8s collection configuration (CreateConfigExtra, ModifyConfigExtra) does not support this field.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RawLogKey <p>Key name of raw logs. All raw logs are uploaded with the Key name you specified, and the original log content as Value. If left empty, raw log upload is disabled.</p><ul><li>COS import does not support this field.</li></ul>
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

        if (array_key_exists("AdvanceFilterRules",$param) and $param["AdvanceFilterRules"] !== null) {
            $this->AdvanceFilterRules = [];
            foreach ($param["AdvanceFilterRules"] as $key => $value){
                $obj = new AdvanceFilterRuleInfo();
                $obj->deserialize($value);
                array_push($this->AdvanceFilterRules, $obj);
            }
        }

        if (array_key_exists("RawLogKey",$param) and $param["RawLogKey"] !== null) {
            $this->RawLogKey = $param["RawLogKey"];
        }
    }
}
