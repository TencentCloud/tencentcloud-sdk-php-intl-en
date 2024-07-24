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
 * Log import rule
 *
 * @method string getRechargeType() Obtain Import type. Valid values: `json_log` (JSON logs), `minimalist_log` (single-line full text), and fullregex_log (single-line full regex)
 * @method void setRechargeType(string $RechargeType) Set Import type. Valid values: `json_log` (JSON logs), `minimalist_log` (single-line full text), and fullregex_log (single-line full regex)
 * @method integer getEncodingFormat() Obtain Encoding format. Valid values: 0 (default, UTF-8) and 1 GBK).
 * @method void setEncodingFormat(integer $EncodingFormat) Set Encoding format. Valid values: 0 (default, UTF-8) and 1 GBK).
 * @method boolean getDefaultTimeSwitch() Obtain Whether to use the default time. Valid values: `true` (default) and `false`.
 * @method void setDefaultTimeSwitch(boolean $DefaultTimeSwitch) Set Whether to use the default time. Valid values: `true` (default) and `false`.
 * @method string getLogRegex() Obtain Full log matching rule, which is valid only if `RechargeType` is `fullregex_log`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogRegex(string $LogRegex) Set Full log matching rule, which is valid only if `RechargeType` is `fullregex_log`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getUnMatchLogSwitch() Obtain Whether to upload the logs that failed to be parsed. Valid values: `true` and `false`.
 * @method void setUnMatchLogSwitch(boolean $UnMatchLogSwitch) Set Whether to upload the logs that failed to be parsed. Valid values: `true` and `false`.
 * @method string getUnMatchLogKey() Obtain Key of the log that failed to be parsed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnMatchLogKey(string $UnMatchLogKey) Set Key of the log that failed to be parsed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUnMatchLogTimeSrc() Obtain Time source of the log that failed to be parsed. Valid values: 0 (current system time) and 1 (Kafka message timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnMatchLogTimeSrc(integer $UnMatchLogTimeSrc) Set Time source of the log that failed to be parsed. Valid values: 0 (current system time) and 1 (Kafka message timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefaultTimeSrc() Obtain Default time source. Valid values: 0 (current system time) and 1 (Kafka message timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultTimeSrc(integer $DefaultTimeSrc) Set Default time source. Valid values: 0 (current system time) and 1 (Kafka message timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeKey() Obtain Time field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeKey(string $TimeKey) Set Time field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeRegex() Obtain Time regular expression
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeRegex(string $TimeRegex) Set Time regular expression
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeFormat() Obtain Time field format
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeFormat(string $TimeFormat) Set Time field format
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeZone() Obtain Time zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeZone(string $TimeZone) Set Time zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMetadata() Obtain Metadata information. Kafka supports import of kafka_topic, kafka_partition, kafka_offset, and kafka_timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetadata(array $Metadata) Set Metadata information. Kafka supports import of kafka_topic, kafka_partition, kafka_offset, and kafka_timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getKeys() Obtain List of log keys, which is required when `RechargeType` is set to `full_regex_log`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeys(array $Keys) Set List of log keys, which is required when `RechargeType` is set to `full_regex_log`
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var boolean Whether to use the default time. Valid values: `true` (default) and `false`.
     */
    public $DefaultTimeSwitch;

    /**
     * @var string Full log matching rule, which is valid only if `RechargeType` is `fullregex_log`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogRegex;

    /**
     * @var boolean Whether to upload the logs that failed to be parsed. Valid values: `true` and `false`.
     */
    public $UnMatchLogSwitch;

    /**
     * @var string Key of the log that failed to be parsed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnMatchLogKey;

    /**
     * @var integer Time source of the log that failed to be parsed. Valid values: 0 (current system time) and 1 (Kafka message timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnMatchLogTimeSrc;

    /**
     * @var integer Default time source. Valid values: 0 (current system time) and 1 (Kafka message timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultTimeSrc;

    /**
     * @var string Time field
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeKey;

    /**
     * @var string Time regular expression
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeRegex;

    /**
     * @var string Time field format
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeFormat;

    /**
     * @var string Time zone
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeZone;

    /**
     * @var array Metadata information. Kafka supports import of kafka_topic, kafka_partition, kafka_offset, and kafka_timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Metadata;

    /**
     * @var array List of log keys, which is required when `RechargeType` is set to `full_regex_log`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Keys;

    /**
     * @param string $RechargeType Import type. Valid values: `json_log` (JSON logs), `minimalist_log` (single-line full text), and fullregex_log (single-line full regex)
     * @param integer $EncodingFormat Encoding format. Valid values: 0 (default, UTF-8) and 1 GBK).
     * @param boolean $DefaultTimeSwitch Whether to use the default time. Valid values: `true` (default) and `false`.
     * @param string $LogRegex Full log matching rule, which is valid only if `RechargeType` is `fullregex_log`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $UnMatchLogSwitch Whether to upload the logs that failed to be parsed. Valid values: `true` and `false`.
     * @param string $UnMatchLogKey Key of the log that failed to be parsed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UnMatchLogTimeSrc Time source of the log that failed to be parsed. Valid values: 0 (current system time) and 1 (Kafka message timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefaultTimeSrc Default time source. Valid values: 0 (current system time) and 1 (Kafka message timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeKey Time field
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeRegex Time regular expression
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeFormat Time field format
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeZone Time zone
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Metadata Metadata information. Kafka supports import of kafka_topic, kafka_partition, kafka_offset, and kafka_timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Keys List of log keys, which is required when `RechargeType` is set to `full_regex_log`
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
