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
 * @method string getRechargeType() Obtain Import type. Valid values: `json_log` (JSON logs), `minimalist_log` (single-line full text), and fullregex_log (single-line full regex)
 * @method void setRechargeType(string $RechargeType) Set Import type. Valid values: `json_log` (JSON logs), `minimalist_log` (single-line full text), and fullregex_log (single-line full regex)
 * @method integer getEncodingFormat() Obtain Encoding format. Valid values: 0 (default, UTF-8) and 1 GBK).
 * @method void setEncodingFormat(integer $EncodingFormat) Set Encoding format. Valid values: 0 (default, UTF-8) and 1 GBK).
 * @method boolean getDefaultTimeSwitch() Obtain Use default time status. true: when enabled, current system time or Kafka message timestamp will be used as log timestamp. false: when disabled, time field in the log will be used as log timestamp. Default: true.
 * @method void setDefaultTimeSwitch(boolean $DefaultTimeSwitch) Set Use default time status. true: when enabled, current system time or Kafka message timestamp will be used as log timestamp. false: when disabled, time field in the log will be used as log timestamp. Default: true.
 * @method string getLogRegex() Obtain Full log matching rule. It is valid only when RechargeType is fullregex_log.
 * @method void setLogRegex(string $LogRegex) Set Full log matching rule. It is valid only when RechargeType is fullregex_log.
 * @method boolean getUnMatchLogSwitch() Obtain Whether to upload the logs that failed to be parsed. Valid values: `true` and `false`.
 * @method void setUnMatchLogSwitch(boolean $UnMatchLogSwitch) Set Whether to upload the logs that failed to be parsed. Valid values: `true` and `false`.
 * @method string getUnMatchLogKey() Obtain key name of parsing-failed logs
 * @method void setUnMatchLogKey(string $UnMatchLogKey) Set key name of parsing-failed logs
 * @method integer getUnMatchLogTimeSrc() Obtain Time source for parsing failure logs. 0: current time of the system; 1: Kafka message timestamp.
 * @method void setUnMatchLogTimeSrc(integer $UnMatchLogTimeSrc) Set Time source for parsing failure logs. 0: current time of the system; 1: Kafka message timestamp.
 * @method integer getDefaultTimeSrc() Obtain Default time source. 0: Current system time; 1: Kafka message timestamp.
 * @method void setDefaultTimeSrc(integer $DefaultTimeSrc) Set Default time source. 0: Current system time; 1: Kafka message timestamp.
 * @method string getTimeKey() Obtain Time field. Field name representing time in logs.

-When DefaultTimeSwitch is false and RechargeType data extraction mode is `json_log` JSON file log or `fullregex_log` single-line full regex file log, TimeKey cannot be empty.
 * @method void setTimeKey(string $TimeKey) Set Time field. Field name representing time in logs.

-When DefaultTimeSwitch is false and RechargeType data extraction mode is `json_log` JSON file log or `fullregex_log` single-line full regex file log, TimeKey cannot be empty.
 * @method string getTimeRegex() Obtain Time extraction regular expression.
-When DefaultTimeSwitch is false and the data extraction mode of RechargeType is `minimalist_log` (single-line full text - file log), TimeRegex cannot be empty.
-Only need to input the regular expression representing the time field in logs. If multiple fields are matched to, the first will be used.
Example: The original log is "message with time 2022-08-08 14:20:20". You can set the retrieval time regex to \d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d.

 * @method void setTimeRegex(string $TimeRegex) Set Time extraction regular expression.
-When DefaultTimeSwitch is false and the data extraction mode of RechargeType is `minimalist_log` (single-line full text - file log), TimeRegex cannot be empty.
-Only need to input the regular expression representing the time field in logs. If multiple fields are matched to, the first will be used.
Example: The original log is "message with time 2022-08-08 14:20:20". You can set the retrieval time regex to \d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d.

 * @method string getTimeFormat() Obtain Time field format.
-When DefaultTimeSwitch is false, TimeFormat cannot be empty.
 * @method void setTimeFormat(string $TimeFormat) Set Time field format.
-When DefaultTimeSwitch is false, TimeFormat cannot be empty.
 * @method string getTimeZone() Obtain Time field time zone.
-When DefaultTimeSwitch is false, TimeZone cannot be empty.
-Time zone format rule
Prefix: Use GMT or UTC as the time zone benchmark.
Offset:
-`-` indicates a western time zone (later than the benchmark time).
-`+` means the east time zone (earlier than the benchmark time).
-Format ±HH:MM (hr:min)

-Currently supported:
```
"GMT-12:00" 
"GMT-11:00" 
"GMT-10:00" 
"GMT-09:30" 
"GMT-09:00" 
"GMT-08:00" 
"GMT-07:00" 
"GMT-06:00" 
"GMT-05:00" 
"GMT-04:00" 
"GMT-03:30" 
"GMT-03:00" 
"GMT-02:00" 
"GMT-01:00" 
"GMT+00:00"
"GMT+01:00"
"GMT+02:00"
"GMT+03:30"
"GMT+04:00"
"GMT+04:30"
"GMT+05:00"
"GMT+05:30"
"GMT+05:45"
"GMT+06:00"
"GMT+06:30"
"GMT+07:00"
"GMT+08:00"
"GMT+09:00"
"GMT+09:30"
"GMT+10:00"
"GMT+10:30"
"GMT+11:00"
"GMT+11:30"
"GMT+12:00"
"GMT+12:45"
"GMT+13:00"
"GMT+14:00"
"UTC-11:00"
"UTC-10:00"
"UTC-09:00"
"UTC-08:00"
"UTC-12:00"
"UTC-07:00"
"UTC-06:00"
"UTC-05:00"
"UTC-04:30"
"UTC-04:00"
"UTC-03:30"
"UTC-03:00"
"UTC-02:00"
"UTC-01:00"
"UTC+00:00"
"UTC+01:00"
"UTC+02:00"
"UTC+03:00"
"UTC+03:30"
"UTC+04:00"
"UTC+04:30"
"UTC+05:00"
"UTC+05:45"
"UTC+06:00"
"UTC+06:30"
"UTC+07:00"
"UTC+08:00"
"UTC+09:00"
"UTC+09:30"
"UTC+10:00"
"UTC+11:00"
"UTC+12:00"
"UTC+13:00"
```
 * @method void setTimeZone(string $TimeZone) Set Time field time zone.
-When DefaultTimeSwitch is false, TimeZone cannot be empty.
-Time zone format rule
Prefix: Use GMT or UTC as the time zone benchmark.
Offset:
-`-` indicates a western time zone (later than the benchmark time).
-`+` means the east time zone (earlier than the benchmark time).
-Format ±HH:MM (hr:min)

-Currently supported:
```
"GMT-12:00" 
"GMT-11:00" 
"GMT-10:00" 
"GMT-09:30" 
"GMT-09:00" 
"GMT-08:00" 
"GMT-07:00" 
"GMT-06:00" 
"GMT-05:00" 
"GMT-04:00" 
"GMT-03:30" 
"GMT-03:00" 
"GMT-02:00" 
"GMT-01:00" 
"GMT+00:00"
"GMT+01:00"
"GMT+02:00"
"GMT+03:30"
"GMT+04:00"
"GMT+04:30"
"GMT+05:00"
"GMT+05:30"
"GMT+05:45"
"GMT+06:00"
"GMT+06:30"
"GMT+07:00"
"GMT+08:00"
"GMT+09:00"
"GMT+09:30"
"GMT+10:00"
"GMT+10:30"
"GMT+11:00"
"GMT+11:30"
"GMT+12:00"
"GMT+12:45"
"GMT+13:00"
"GMT+14:00"
"UTC-11:00"
"UTC-10:00"
"UTC-09:00"
"UTC-08:00"
"UTC-12:00"
"UTC-07:00"
"UTC-06:00"
"UTC-05:00"
"UTC-04:30"
"UTC-04:00"
"UTC-03:30"
"UTC-03:00"
"UTC-02:00"
"UTC-01:00"
"UTC+00:00"
"UTC+01:00"
"UTC+02:00"
"UTC+03:00"
"UTC+03:30"
"UTC+04:00"
"UTC+04:30"
"UTC+05:00"
"UTC+05:45"
"UTC+06:00"
"UTC+06:30"
"UTC+07:00"
"UTC+08:00"
"UTC+09:00"
"UTC+09:30"
"UTC+10:00"
"UTC+11:00"
"UTC+12:00"
"UTC+13:00"
```
 * @method array getMetadata() Obtain Metadata information. Kafka import supports kafka_topic, kafka_partition, kafka_offset, and kafka_timestamp.
 * @method void setMetadata(array $Metadata) Set Metadata information. Kafka import supports kafka_topic, kafka_partition, kafka_offset, and kafka_timestamp.
 * @method array getKeys() Obtain log Key list. It is required when RechargeType is full_regex_log or delimiter_log.
 * @method void setKeys(array $Keys) Set log Key list. It is required when RechargeType is full_regex_log or delimiter_log.
 * @method boolean getParseArray() Obtain JSON parsing mode. The first-level data parsing is enabled.
 * @method void setParseArray(boolean $ParseArray) Set JSON parsing mode. The first-level data parsing is enabled.
 * @method string getDelimiter() Obtain Delimiter parsing mode - Separator
This field is required when the parsing format is delimiter extraction.
 * @method void setDelimiter(string $Delimiter) Set Delimiter parsing mode - Separator
This field is required when the parsing format is delimiter extraction.
 */
class LogRechargeRuleInfo extends AbstractModel
{
    /**
     * @var string Import type. Valid values: `json_log` (JSON logs), `minimalist_log` (single-line full text), and fullregex_log (single-line full regex)
     */
    public $RechargeType;

    /**
     * @var integer Encoding format. Valid values: 0 (default, UTF-8) and 1 GBK).
     */
    public $EncodingFormat;

    /**
     * @var boolean Use default time status. true: when enabled, current system time or Kafka message timestamp will be used as log timestamp. false: when disabled, time field in the log will be used as log timestamp. Default: true.
     */
    public $DefaultTimeSwitch;

    /**
     * @var string Full log matching rule. It is valid only when RechargeType is fullregex_log.
     */
    public $LogRegex;

    /**
     * @var boolean Whether to upload the logs that failed to be parsed. Valid values: `true` and `false`.
     */
    public $UnMatchLogSwitch;

    /**
     * @var string key name of parsing-failed logs
     */
    public $UnMatchLogKey;

    /**
     * @var integer Time source for parsing failure logs. 0: current time of the system; 1: Kafka message timestamp.
     */
    public $UnMatchLogTimeSrc;

    /**
     * @var integer Default time source. 0: Current system time; 1: Kafka message timestamp.
     */
    public $DefaultTimeSrc;

    /**
     * @var string Time field. Field name representing time in logs.

-When DefaultTimeSwitch is false and RechargeType data extraction mode is `json_log` JSON file log or `fullregex_log` single-line full regex file log, TimeKey cannot be empty.
     */
    public $TimeKey;

    /**
     * @var string Time extraction regular expression.
-When DefaultTimeSwitch is false and the data extraction mode of RechargeType is `minimalist_log` (single-line full text - file log), TimeRegex cannot be empty.
-Only need to input the regular expression representing the time field in logs. If multiple fields are matched to, the first will be used.
Example: The original log is "message with time 2022-08-08 14:20:20". You can set the retrieval time regex to \d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d.

     */
    public $TimeRegex;

    /**
     * @var string Time field format.
-When DefaultTimeSwitch is false, TimeFormat cannot be empty.
     */
    public $TimeFormat;

    /**
     * @var string Time field time zone.
-When DefaultTimeSwitch is false, TimeZone cannot be empty.
-Time zone format rule
Prefix: Use GMT or UTC as the time zone benchmark.
Offset:
-`-` indicates a western time zone (later than the benchmark time).
-`+` means the east time zone (earlier than the benchmark time).
-Format ±HH:MM (hr:min)

-Currently supported:
```
"GMT-12:00" 
"GMT-11:00" 
"GMT-10:00" 
"GMT-09:30" 
"GMT-09:00" 
"GMT-08:00" 
"GMT-07:00" 
"GMT-06:00" 
"GMT-05:00" 
"GMT-04:00" 
"GMT-03:30" 
"GMT-03:00" 
"GMT-02:00" 
"GMT-01:00" 
"GMT+00:00"
"GMT+01:00"
"GMT+02:00"
"GMT+03:30"
"GMT+04:00"
"GMT+04:30"
"GMT+05:00"
"GMT+05:30"
"GMT+05:45"
"GMT+06:00"
"GMT+06:30"
"GMT+07:00"
"GMT+08:00"
"GMT+09:00"
"GMT+09:30"
"GMT+10:00"
"GMT+10:30"
"GMT+11:00"
"GMT+11:30"
"GMT+12:00"
"GMT+12:45"
"GMT+13:00"
"GMT+14:00"
"UTC-11:00"
"UTC-10:00"
"UTC-09:00"
"UTC-08:00"
"UTC-12:00"
"UTC-07:00"
"UTC-06:00"
"UTC-05:00"
"UTC-04:30"
"UTC-04:00"
"UTC-03:30"
"UTC-03:00"
"UTC-02:00"
"UTC-01:00"
"UTC+00:00"
"UTC+01:00"
"UTC+02:00"
"UTC+03:00"
"UTC+03:30"
"UTC+04:00"
"UTC+04:30"
"UTC+05:00"
"UTC+05:45"
"UTC+06:00"
"UTC+06:30"
"UTC+07:00"
"UTC+08:00"
"UTC+09:00"
"UTC+09:30"
"UTC+10:00"
"UTC+11:00"
"UTC+12:00"
"UTC+13:00"
```
     */
    public $TimeZone;

    /**
     * @var array Metadata information. Kafka import supports kafka_topic, kafka_partition, kafka_offset, and kafka_timestamp.
     */
    public $Metadata;

    /**
     * @var array log Key list. It is required when RechargeType is full_regex_log or delimiter_log.
     */
    public $Keys;

    /**
     * @var boolean JSON parsing mode. The first-level data parsing is enabled.
     */
    public $ParseArray;

    /**
     * @var string Delimiter parsing mode - Separator
This field is required when the parsing format is delimiter extraction.
     */
    public $Delimiter;

    /**
     * @param string $RechargeType Import type. Valid values: `json_log` (JSON logs), `minimalist_log` (single-line full text), and fullregex_log (single-line full regex)
     * @param integer $EncodingFormat Encoding format. Valid values: 0 (default, UTF-8) and 1 GBK).
     * @param boolean $DefaultTimeSwitch Use default time status. true: when enabled, current system time or Kafka message timestamp will be used as log timestamp. false: when disabled, time field in the log will be used as log timestamp. Default: true.
     * @param string $LogRegex Full log matching rule. It is valid only when RechargeType is fullregex_log.
     * @param boolean $UnMatchLogSwitch Whether to upload the logs that failed to be parsed. Valid values: `true` and `false`.
     * @param string $UnMatchLogKey key name of parsing-failed logs
     * @param integer $UnMatchLogTimeSrc Time source for parsing failure logs. 0: current time of the system; 1: Kafka message timestamp.
     * @param integer $DefaultTimeSrc Default time source. 0: Current system time; 1: Kafka message timestamp.
     * @param string $TimeKey Time field. Field name representing time in logs.

-When DefaultTimeSwitch is false and RechargeType data extraction mode is `json_log` JSON file log or `fullregex_log` single-line full regex file log, TimeKey cannot be empty.
     * @param string $TimeRegex Time extraction regular expression.
-When DefaultTimeSwitch is false and the data extraction mode of RechargeType is `minimalist_log` (single-line full text - file log), TimeRegex cannot be empty.
-Only need to input the regular expression representing the time field in logs. If multiple fields are matched to, the first will be used.
Example: The original log is "message with time 2022-08-08 14:20:20". You can set the retrieval time regex to \d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d.

     * @param string $TimeFormat Time field format.
-When DefaultTimeSwitch is false, TimeFormat cannot be empty.
     * @param string $TimeZone Time field time zone.
-When DefaultTimeSwitch is false, TimeZone cannot be empty.
-Time zone format rule
Prefix: Use GMT or UTC as the time zone benchmark.
Offset:
-`-` indicates a western time zone (later than the benchmark time).
-`+` means the east time zone (earlier than the benchmark time).
-Format ±HH:MM (hr:min)

-Currently supported:
```
"GMT-12:00" 
"GMT-11:00" 
"GMT-10:00" 
"GMT-09:30" 
"GMT-09:00" 
"GMT-08:00" 
"GMT-07:00" 
"GMT-06:00" 
"GMT-05:00" 
"GMT-04:00" 
"GMT-03:30" 
"GMT-03:00" 
"GMT-02:00" 
"GMT-01:00" 
"GMT+00:00"
"GMT+01:00"
"GMT+02:00"
"GMT+03:30"
"GMT+04:00"
"GMT+04:30"
"GMT+05:00"
"GMT+05:30"
"GMT+05:45"
"GMT+06:00"
"GMT+06:30"
"GMT+07:00"
"GMT+08:00"
"GMT+09:00"
"GMT+09:30"
"GMT+10:00"
"GMT+10:30"
"GMT+11:00"
"GMT+11:30"
"GMT+12:00"
"GMT+12:45"
"GMT+13:00"
"GMT+14:00"
"UTC-11:00"
"UTC-10:00"
"UTC-09:00"
"UTC-08:00"
"UTC-12:00"
"UTC-07:00"
"UTC-06:00"
"UTC-05:00"
"UTC-04:30"
"UTC-04:00"
"UTC-03:30"
"UTC-03:00"
"UTC-02:00"
"UTC-01:00"
"UTC+00:00"
"UTC+01:00"
"UTC+02:00"
"UTC+03:00"
"UTC+03:30"
"UTC+04:00"
"UTC+04:30"
"UTC+05:00"
"UTC+05:45"
"UTC+06:00"
"UTC+06:30"
"UTC+07:00"
"UTC+08:00"
"UTC+09:00"
"UTC+09:30"
"UTC+10:00"
"UTC+11:00"
"UTC+12:00"
"UTC+13:00"
```
     * @param array $Metadata Metadata information. Kafka import supports kafka_topic, kafka_partition, kafka_offset, and kafka_timestamp.
     * @param array $Keys log Key list. It is required when RechargeType is full_regex_log or delimiter_log.
     * @param boolean $ParseArray JSON parsing mode. The first-level data parsing is enabled.
     * @param string $Delimiter Delimiter parsing mode - Separator
This field is required when the parsing format is delimiter extraction.
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
    }
}
