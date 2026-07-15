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
 * Log import rule
 *
 * @method string getRechargeType() Obtain <p>Import type, support json_log: JSON logs, minimalist_log: single-line full-text log, fullregex_log: single-line full regular expression</p>
 * @method void setRechargeType(string $RechargeType) Set <p>Import type, support json_log: JSON logs, minimalist_log: single-line full-text log, fullregex_log: single-line full regular expression</p>
 * @method integer getEncodingFormat() Obtain <p>Parse encoding format. 0: UTF-8 (default value), 1: GBK</p>
 * @method void setEncodingFormat(integer $EncodingFormat) Set <p>Parse encoding format. 0: UTF-8 (default value), 1: GBK</p>
 * @method boolean getDefaultTimeSwitch() Obtain <p>Use default time status. true: once enabled, current system time or Kafka message timestamp will be used as log timestamp; false: when turned off, time field in the log will be used as log timestamp. Default: true</p>
 * @method void setDefaultTimeSwitch(boolean $DefaultTimeSwitch) Set <p>Use default time status. true: once enabled, current system time or Kafka message timestamp will be used as log timestamp; false: when turned off, time field in the log will be used as log timestamp. Default: true</p>
 * @method string getLogRegex() Obtain <p>The whole log matching rule is valid only when RechargeType is fullregex_log.</p>
 * @method void setLogRegex(string $LogRegex) Set <p>The whole log matching rule is valid only when RechargeType is fullregex_log.</p>
 * @method boolean getUnMatchLogSwitch() Obtain <p>Whether to upload logs that failed to be parsed. true for upload, false for not uploading.</p>
 * @method void setUnMatchLogSwitch(boolean $UnMatchLogSwitch) Set <p>Whether to upload logs that failed to be parsed. true for upload, false for not uploading.</p>
 * @method string getUnMatchLogKey() Obtain <p>Key name of parsing-failed logs</p>
 * @method void setUnMatchLogKey(string $UnMatchLogKey) Set <p>Key name of parsing-failed logs</p>
 * @method integer getUnMatchLogTimeSrc() Obtain <p>Parsing failure log time source. 0: Current system time. 1: Kafka message timestamp.</p>
 * @method void setUnMatchLogTimeSrc(integer $UnMatchLogTimeSrc) Set <p>Parsing failure log time source. 0: Current system time. 1: Kafka message timestamp.</p>
 * @method integer getDefaultTimeSrc() Obtain <p>Default time source. 0: Current system time, 1: Kafka message timestamp</p>
 * @method void setDefaultTimeSrc(integer $DefaultTimeSrc) Set <p>Default time source. 0: Current system time, 1: Kafka message timestamp</p>
 * @method string getTimeKey() Obtain <p>Time field. Field name that represents time in logs.</p><ul><li>When DefaultTimeSwitch is false and the RechargeType data extraction mode is <code>json_log</code> JSON-file log or <code>fullregex_log</code> single-line full regex-file log, the TimeKey cannot be empty.</li></ul>
 * @method void setTimeKey(string $TimeKey) Set <p>Time field. Field name that represents time in logs.</p><ul><li>When DefaultTimeSwitch is false and the RechargeType data extraction mode is <code>json_log</code> JSON-file log or <code>fullregex_log</code> single-line full regex-file log, the TimeKey cannot be empty.</li></ul>
 * @method string getTimeRegex() Obtain <p>Time extraction regular expression.</p><ul><li>When DefaultTimeSwitch is false and the RechargeType data extraction mode is <code>minimalist_log</code> single-line full text - file log, the TimeRegex cannot be empty.</li><li>Only need to input the regular expression for the field representing time in logs. If multiple fields are matched to, the first one will be used.<br> For example: If the original log is: message with time 2022-08-08 14:20:20, you can set the retrieval time regular expression to \d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d</li></ul>
 * @method void setTimeRegex(string $TimeRegex) Set <p>Time extraction regular expression.</p><ul><li>When DefaultTimeSwitch is false and the RechargeType data extraction mode is <code>minimalist_log</code> single-line full text - file log, the TimeRegex cannot be empty.</li><li>Only need to input the regular expression for the field representing time in logs. If multiple fields are matched to, the first one will be used.<br> For example: If the original log is: message with time 2022-08-08 14:20:20, you can set the retrieval time regular expression to \d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d</li></ul>
 * @method string getTimeFormat() Obtain <p>Time field format.</p><ul><li>When DefaultTimeSwitch is false, TimeFormat cannot be empty.</li></ul>
 * @method void setTimeFormat(string $TimeFormat) Set <p>Time field format.</p><ul><li>When DefaultTimeSwitch is false, TimeFormat cannot be empty.</li></ul>
 * @method string getTimeZone() Obtain <p>Time field time zone.</p><ul><li><p>When DefaultTimeSwitch is false, TimeZone cannot be empty.</p></li><li><p>Time zone format rule<br>Prefix: Use GMT or UTC as the time zone benchmark<br>Offset:</p><ul><li><code>-</code> indicates a western time zone (later than the benchmark time)</li><li><code>+</code> indicates an eastern time zone (earlier than the benchmark time)</li><li>Format is ±HH:MM (hour:minute)</li></ul></li><li><p>Currently supported:<br><pre><code>&quot;GMT-12:00&quot; &quot;GMT-11:00&quot; &quot;GMT-10:00&quot; &quot;GMT-09:30&quot; &quot;GMT-09:00&quot; &quot;GMT-08:00&quot; &quot;GMT-07:00&quot; &quot;GMT-06:00&quot; &quot;GMT-05:00&quot; &quot;GMT-04:00&quot; &quot;GMT-03:30&quot; &quot;GMT-03:00&quot; &quot;GMT-02:00&quot; &quot;GMT-01:00&quot; &quot;GMT+00:00&quot;&quot;GMT+01:00&quot;&quot;GMT+02:00&quot;&quot;GMT+03:30&quot;&quot;GMT+04:00&quot;&quot;GMT+04:30&quot;&quot;GMT+05:00&quot;&quot;GMT+05:30&quot;&quot;GMT+05:45&quot;&quot;GMT+06:00&quot;&quot;GMT+06:30&quot;&quot;GMT+07:00&quot;&quot;GMT+08:00&quot;&quot;GMT+09:00&quot;&quot;GMT+09:30&quot;&quot;GMT+10:00&quot;&quot;GMT+10:30&quot;&quot;GMT+11:00&quot;&quot;GMT+11:30&quot;&quot;GMT+12:00&quot;&quot;GMT+12:45&quot;&quot;GMT+13:00&quot;&quot;GMT+14:00&quot;&quot;UTC-11:00&quot;&quot;UTC-10:00&quot;&quot;UTC-09:00&quot;&quot;UTC-08:00&quot;&quot;UTC-12:00&quot;&quot;UTC-07:00&quot;&quot;UTC-06:00&quot;&quot;UTC-05:00&quot;&quot;UTC-04:30&quot;&quot;UTC-04:00&quot;&quot;UTC-03:30&quot;&quot;UTC-03:00&quot;&quot;UTC-02:00&quot;&quot;UTC-01:00&quot;&quot;UTC+00:00&quot;&quot;UTC+01:00&quot;&quot;UTC+02:00&quot;&quot;UTC+03:00&quot;&quot;UTC+03:30&quot;&quot;UTC+04:00&quot;&quot;UTC+04:30&quot;&quot;UTC+05:00&quot;&quot;UTC+05:45&quot;&quot;UTC+06:00&quot;&quot;UTC+06:30&quot;&quot;UTC+07:00&quot;&quot;UTC+08:00&quot;&quot;UTC+09:00&quot;&quot;UTC+09:30&quot;&quot;UTC+10:00&quot;&quot;UTC+11:00&quot;&quot;UTC+12:00&quot;&quot;UTC+13:00&quot;</code></pre></p></li></ul>
 * @method void setTimeZone(string $TimeZone) Set <p>Time field time zone.</p><ul><li><p>When DefaultTimeSwitch is false, TimeZone cannot be empty.</p></li><li><p>Time zone format rule<br>Prefix: Use GMT or UTC as the time zone benchmark<br>Offset:</p><ul><li><code>-</code> indicates a western time zone (later than the benchmark time)</li><li><code>+</code> indicates an eastern time zone (earlier than the benchmark time)</li><li>Format is ±HH:MM (hour:minute)</li></ul></li><li><p>Currently supported:<br><pre><code>&quot;GMT-12:00&quot; &quot;GMT-11:00&quot; &quot;GMT-10:00&quot; &quot;GMT-09:30&quot; &quot;GMT-09:00&quot; &quot;GMT-08:00&quot; &quot;GMT-07:00&quot; &quot;GMT-06:00&quot; &quot;GMT-05:00&quot; &quot;GMT-04:00&quot; &quot;GMT-03:30&quot; &quot;GMT-03:00&quot; &quot;GMT-02:00&quot; &quot;GMT-01:00&quot; &quot;GMT+00:00&quot;&quot;GMT+01:00&quot;&quot;GMT+02:00&quot;&quot;GMT+03:30&quot;&quot;GMT+04:00&quot;&quot;GMT+04:30&quot;&quot;GMT+05:00&quot;&quot;GMT+05:30&quot;&quot;GMT+05:45&quot;&quot;GMT+06:00&quot;&quot;GMT+06:30&quot;&quot;GMT+07:00&quot;&quot;GMT+08:00&quot;&quot;GMT+09:00&quot;&quot;GMT+09:30&quot;&quot;GMT+10:00&quot;&quot;GMT+10:30&quot;&quot;GMT+11:00&quot;&quot;GMT+11:30&quot;&quot;GMT+12:00&quot;&quot;GMT+12:45&quot;&quot;GMT+13:00&quot;&quot;GMT+14:00&quot;&quot;UTC-11:00&quot;&quot;UTC-10:00&quot;&quot;UTC-09:00&quot;&quot;UTC-08:00&quot;&quot;UTC-12:00&quot;&quot;UTC-07:00&quot;&quot;UTC-06:00&quot;&quot;UTC-05:00&quot;&quot;UTC-04:30&quot;&quot;UTC-04:00&quot;&quot;UTC-03:30&quot;&quot;UTC-03:00&quot;&quot;UTC-02:00&quot;&quot;UTC-01:00&quot;&quot;UTC+00:00&quot;&quot;UTC+01:00&quot;&quot;UTC+02:00&quot;&quot;UTC+03:00&quot;&quot;UTC+03:30&quot;&quot;UTC+04:00&quot;&quot;UTC+04:30&quot;&quot;UTC+05:00&quot;&quot;UTC+05:45&quot;&quot;UTC+06:00&quot;&quot;UTC+06:30&quot;&quot;UTC+07:00&quot;&quot;UTC+08:00&quot;&quot;UTC+09:00&quot;&quot;UTC+09:30&quot;&quot;UTC+10:00&quot;&quot;UTC+11:00&quot;&quot;UTC+12:00&quot;&quot;UTC+13:00&quot;</code></pre></p></li></ul>
 * @method array getMetadata() Obtain <p>Metadata information, Kafka import supports kafka_topic, kafka_partition, kafka_offset, kafka_timestamp</p>
 * @method void setMetadata(array $Metadata) Set <p>Metadata information, Kafka import supports kafka_topic, kafka_partition, kafka_offset, kafka_timestamp</p>
 * @method array getKeys() Obtain <p>log Key list, required when RechargeType is full_regex_log or delimiter_log.</p>
 * @method void setKeys(array $Keys) Set <p>log Key list, required when RechargeType is full_regex_log or delimiter_log.</p>
 * @method boolean getParseArray() Obtain <p>json parsing mode, enable first level data parsing</p>
 * @method void setParseArray(boolean $ParseArray) Set <p>json parsing mode, enable first level data parsing</p>
 * @method string getDelimiter() Obtain <p>Delimiter parsing mode - Separator<br>This field is required when the parsing format is delimiter extraction.</p>
 * @method void setDelimiter(string $Delimiter) Set <p>Delimiter parsing mode - Separator<br>This field is required when the parsing format is delimiter extraction.</p>
 * @method JsonExpandInfo getJsonExpand() Obtain <p>JSON nest unfold configuration. This parameter is valid only when RechargeType is json_log. If it is not passed, it is disabled.</p>
 * @method void setJsonExpand(JsonExpandInfo $JsonExpand) Set <p>JSON nest unfold configuration. This parameter is valid only when RechargeType is json_log. If it is not passed, it is disabled.</p>
 */
class LogRechargeRuleInfo extends AbstractModel
{
    /**
     * @var string <p>Import type, support json_log: JSON logs, minimalist_log: single-line full-text log, fullregex_log: single-line full regular expression</p>
     */
    public $RechargeType;

    /**
     * @var integer <p>Parse encoding format. 0: UTF-8 (default value), 1: GBK</p>
     */
    public $EncodingFormat;

    /**
     * @var boolean <p>Use default time status. true: once enabled, current system time or Kafka message timestamp will be used as log timestamp; false: when turned off, time field in the log will be used as log timestamp. Default: true</p>
     */
    public $DefaultTimeSwitch;

    /**
     * @var string <p>The whole log matching rule is valid only when RechargeType is fullregex_log.</p>
     */
    public $LogRegex;

    /**
     * @var boolean <p>Whether to upload logs that failed to be parsed. true for upload, false for not uploading.</p>
     */
    public $UnMatchLogSwitch;

    /**
     * @var string <p>Key name of parsing-failed logs</p>
     */
    public $UnMatchLogKey;

    /**
     * @var integer <p>Parsing failure log time source. 0: Current system time. 1: Kafka message timestamp.</p>
     */
    public $UnMatchLogTimeSrc;

    /**
     * @var integer <p>Default time source. 0: Current system time, 1: Kafka message timestamp</p>
     */
    public $DefaultTimeSrc;

    /**
     * @var string <p>Time field. Field name that represents time in logs.</p><ul><li>When DefaultTimeSwitch is false and the RechargeType data extraction mode is <code>json_log</code> JSON-file log or <code>fullregex_log</code> single-line full regex-file log, the TimeKey cannot be empty.</li></ul>
     */
    public $TimeKey;

    /**
     * @var string <p>Time extraction regular expression.</p><ul><li>When DefaultTimeSwitch is false and the RechargeType data extraction mode is <code>minimalist_log</code> single-line full text - file log, the TimeRegex cannot be empty.</li><li>Only need to input the regular expression for the field representing time in logs. If multiple fields are matched to, the first one will be used.<br> For example: If the original log is: message with time 2022-08-08 14:20:20, you can set the retrieval time regular expression to \d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d</li></ul>
     */
    public $TimeRegex;

    /**
     * @var string <p>Time field format.</p><ul><li>When DefaultTimeSwitch is false, TimeFormat cannot be empty.</li></ul>
     */
    public $TimeFormat;

    /**
     * @var string <p>Time field time zone.</p><ul><li><p>When DefaultTimeSwitch is false, TimeZone cannot be empty.</p></li><li><p>Time zone format rule<br>Prefix: Use GMT or UTC as the time zone benchmark<br>Offset:</p><ul><li><code>-</code> indicates a western time zone (later than the benchmark time)</li><li><code>+</code> indicates an eastern time zone (earlier than the benchmark time)</li><li>Format is ±HH:MM (hour:minute)</li></ul></li><li><p>Currently supported:<br><pre><code>&quot;GMT-12:00&quot; &quot;GMT-11:00&quot; &quot;GMT-10:00&quot; &quot;GMT-09:30&quot; &quot;GMT-09:00&quot; &quot;GMT-08:00&quot; &quot;GMT-07:00&quot; &quot;GMT-06:00&quot; &quot;GMT-05:00&quot; &quot;GMT-04:00&quot; &quot;GMT-03:30&quot; &quot;GMT-03:00&quot; &quot;GMT-02:00&quot; &quot;GMT-01:00&quot; &quot;GMT+00:00&quot;&quot;GMT+01:00&quot;&quot;GMT+02:00&quot;&quot;GMT+03:30&quot;&quot;GMT+04:00&quot;&quot;GMT+04:30&quot;&quot;GMT+05:00&quot;&quot;GMT+05:30&quot;&quot;GMT+05:45&quot;&quot;GMT+06:00&quot;&quot;GMT+06:30&quot;&quot;GMT+07:00&quot;&quot;GMT+08:00&quot;&quot;GMT+09:00&quot;&quot;GMT+09:30&quot;&quot;GMT+10:00&quot;&quot;GMT+10:30&quot;&quot;GMT+11:00&quot;&quot;GMT+11:30&quot;&quot;GMT+12:00&quot;&quot;GMT+12:45&quot;&quot;GMT+13:00&quot;&quot;GMT+14:00&quot;&quot;UTC-11:00&quot;&quot;UTC-10:00&quot;&quot;UTC-09:00&quot;&quot;UTC-08:00&quot;&quot;UTC-12:00&quot;&quot;UTC-07:00&quot;&quot;UTC-06:00&quot;&quot;UTC-05:00&quot;&quot;UTC-04:30&quot;&quot;UTC-04:00&quot;&quot;UTC-03:30&quot;&quot;UTC-03:00&quot;&quot;UTC-02:00&quot;&quot;UTC-01:00&quot;&quot;UTC+00:00&quot;&quot;UTC+01:00&quot;&quot;UTC+02:00&quot;&quot;UTC+03:00&quot;&quot;UTC+03:30&quot;&quot;UTC+04:00&quot;&quot;UTC+04:30&quot;&quot;UTC+05:00&quot;&quot;UTC+05:45&quot;&quot;UTC+06:00&quot;&quot;UTC+06:30&quot;&quot;UTC+07:00&quot;&quot;UTC+08:00&quot;&quot;UTC+09:00&quot;&quot;UTC+09:30&quot;&quot;UTC+10:00&quot;&quot;UTC+11:00&quot;&quot;UTC+12:00&quot;&quot;UTC+13:00&quot;</code></pre></p></li></ul>
     */
    public $TimeZone;

    /**
     * @var array <p>Metadata information, Kafka import supports kafka_topic, kafka_partition, kafka_offset, kafka_timestamp</p>
     */
    public $Metadata;

    /**
     * @var array <p>log Key list, required when RechargeType is full_regex_log or delimiter_log.</p>
     */
    public $Keys;

    /**
     * @var boolean <p>json parsing mode, enable first level data parsing</p>
     */
    public $ParseArray;

    /**
     * @var string <p>Delimiter parsing mode - Separator<br>This field is required when the parsing format is delimiter extraction.</p>
     */
    public $Delimiter;

    /**
     * @var JsonExpandInfo <p>JSON nest unfold configuration. This parameter is valid only when RechargeType is json_log. If it is not passed, it is disabled.</p>
     */
    public $JsonExpand;

    /**
     * @param string $RechargeType <p>Import type, support json_log: JSON logs, minimalist_log: single-line full-text log, fullregex_log: single-line full regular expression</p>
     * @param integer $EncodingFormat <p>Parse encoding format. 0: UTF-8 (default value), 1: GBK</p>
     * @param boolean $DefaultTimeSwitch <p>Use default time status. true: once enabled, current system time or Kafka message timestamp will be used as log timestamp; false: when turned off, time field in the log will be used as log timestamp. Default: true</p>
     * @param string $LogRegex <p>The whole log matching rule is valid only when RechargeType is fullregex_log.</p>
     * @param boolean $UnMatchLogSwitch <p>Whether to upload logs that failed to be parsed. true for upload, false for not uploading.</p>
     * @param string $UnMatchLogKey <p>Key name of parsing-failed logs</p>
     * @param integer $UnMatchLogTimeSrc <p>Parsing failure log time source. 0: Current system time. 1: Kafka message timestamp.</p>
     * @param integer $DefaultTimeSrc <p>Default time source. 0: Current system time, 1: Kafka message timestamp</p>
     * @param string $TimeKey <p>Time field. Field name that represents time in logs.</p><ul><li>When DefaultTimeSwitch is false and the RechargeType data extraction mode is <code>json_log</code> JSON-file log or <code>fullregex_log</code> single-line full regex-file log, the TimeKey cannot be empty.</li></ul>
     * @param string $TimeRegex <p>Time extraction regular expression.</p><ul><li>When DefaultTimeSwitch is false and the RechargeType data extraction mode is <code>minimalist_log</code> single-line full text - file log, the TimeRegex cannot be empty.</li><li>Only need to input the regular expression for the field representing time in logs. If multiple fields are matched to, the first one will be used.<br> For example: If the original log is: message with time 2022-08-08 14:20:20, you can set the retrieval time regular expression to \d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d</li></ul>
     * @param string $TimeFormat <p>Time field format.</p><ul><li>When DefaultTimeSwitch is false, TimeFormat cannot be empty.</li></ul>
     * @param string $TimeZone <p>Time field time zone.</p><ul><li><p>When DefaultTimeSwitch is false, TimeZone cannot be empty.</p></li><li><p>Time zone format rule<br>Prefix: Use GMT or UTC as the time zone benchmark<br>Offset:</p><ul><li><code>-</code> indicates a western time zone (later than the benchmark time)</li><li><code>+</code> indicates an eastern time zone (earlier than the benchmark time)</li><li>Format is ±HH:MM (hour:minute)</li></ul></li><li><p>Currently supported:<br><pre><code>&quot;GMT-12:00&quot; &quot;GMT-11:00&quot; &quot;GMT-10:00&quot; &quot;GMT-09:30&quot; &quot;GMT-09:00&quot; &quot;GMT-08:00&quot; &quot;GMT-07:00&quot; &quot;GMT-06:00&quot; &quot;GMT-05:00&quot; &quot;GMT-04:00&quot; &quot;GMT-03:30&quot; &quot;GMT-03:00&quot; &quot;GMT-02:00&quot; &quot;GMT-01:00&quot; &quot;GMT+00:00&quot;&quot;GMT+01:00&quot;&quot;GMT+02:00&quot;&quot;GMT+03:30&quot;&quot;GMT+04:00&quot;&quot;GMT+04:30&quot;&quot;GMT+05:00&quot;&quot;GMT+05:30&quot;&quot;GMT+05:45&quot;&quot;GMT+06:00&quot;&quot;GMT+06:30&quot;&quot;GMT+07:00&quot;&quot;GMT+08:00&quot;&quot;GMT+09:00&quot;&quot;GMT+09:30&quot;&quot;GMT+10:00&quot;&quot;GMT+10:30&quot;&quot;GMT+11:00&quot;&quot;GMT+11:30&quot;&quot;GMT+12:00&quot;&quot;GMT+12:45&quot;&quot;GMT+13:00&quot;&quot;GMT+14:00&quot;&quot;UTC-11:00&quot;&quot;UTC-10:00&quot;&quot;UTC-09:00&quot;&quot;UTC-08:00&quot;&quot;UTC-12:00&quot;&quot;UTC-07:00&quot;&quot;UTC-06:00&quot;&quot;UTC-05:00&quot;&quot;UTC-04:30&quot;&quot;UTC-04:00&quot;&quot;UTC-03:30&quot;&quot;UTC-03:00&quot;&quot;UTC-02:00&quot;&quot;UTC-01:00&quot;&quot;UTC+00:00&quot;&quot;UTC+01:00&quot;&quot;UTC+02:00&quot;&quot;UTC+03:00&quot;&quot;UTC+03:30&quot;&quot;UTC+04:00&quot;&quot;UTC+04:30&quot;&quot;UTC+05:00&quot;&quot;UTC+05:45&quot;&quot;UTC+06:00&quot;&quot;UTC+06:30&quot;&quot;UTC+07:00&quot;&quot;UTC+08:00&quot;&quot;UTC+09:00&quot;&quot;UTC+09:30&quot;&quot;UTC+10:00&quot;&quot;UTC+11:00&quot;&quot;UTC+12:00&quot;&quot;UTC+13:00&quot;</code></pre></p></li></ul>
     * @param array $Metadata <p>Metadata information, Kafka import supports kafka_topic, kafka_partition, kafka_offset, kafka_timestamp</p>
     * @param array $Keys <p>log Key list, required when RechargeType is full_regex_log or delimiter_log.</p>
     * @param boolean $ParseArray <p>json parsing mode, enable first level data parsing</p>
     * @param string $Delimiter <p>Delimiter parsing mode - Separator<br>This field is required when the parsing format is delimiter extraction.</p>
     * @param JsonExpandInfo $JsonExpand <p>JSON nest unfold configuration. This parameter is valid only when RechargeType is json_log. If it is not passed, it is disabled.</p>
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
        if (array_key_exists("RechargeType",$param) and $param["RechargeType"] !== null) {
            $this->RechargeType = $param["RechargeType"];
        }

        if (array_key_exists("EncodingFormat",$param) and $param["EncodingFormat"] !== null) {
            $this->EncodingFormat = $param["EncodingFormat"];
        }

        if (array_key_exists("DefaultTimeSwitch",$param) and $param["DefaultTimeSwitch"] !== null) {
            $this->DefaultTimeSwitch = $param["DefaultTimeSwitch"];
        }

        if (array_key_exists("LogRegex",$param) and $param["LogRegex"] !== null) {
            $this->LogRegex = $param["LogRegex"];
        }

        if (array_key_exists("UnMatchLogSwitch",$param) and $param["UnMatchLogSwitch"] !== null) {
            $this->UnMatchLogSwitch = $param["UnMatchLogSwitch"];
        }

        if (array_key_exists("UnMatchLogKey",$param) and $param["UnMatchLogKey"] !== null) {
            $this->UnMatchLogKey = $param["UnMatchLogKey"];
        }

        if (array_key_exists("UnMatchLogTimeSrc",$param) and $param["UnMatchLogTimeSrc"] !== null) {
            $this->UnMatchLogTimeSrc = $param["UnMatchLogTimeSrc"];
        }

        if (array_key_exists("DefaultTimeSrc",$param) and $param["DefaultTimeSrc"] !== null) {
            $this->DefaultTimeSrc = $param["DefaultTimeSrc"];
        }

        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("TimeRegex",$param) and $param["TimeRegex"] !== null) {
            $this->TimeRegex = $param["TimeRegex"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("ParseArray",$param) and $param["ParseArray"] !== null) {
            $this->ParseArray = $param["ParseArray"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("JsonExpand",$param) and $param["JsonExpand"] !== null) {
            $this->JsonExpand = new JsonExpandInfo();
            $this->JsonExpand->deserialize($param["JsonExpand"]);
        }
    }
}
