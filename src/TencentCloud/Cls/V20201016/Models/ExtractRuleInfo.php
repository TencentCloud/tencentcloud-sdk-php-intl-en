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
 * @method string getTimeKey() Obtain Time field key name. `time_key` and `time_format` must appear in pairs
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimeKey(string $TimeKey) Set Time field key name. `time_key` and `time_format` must appear in pairs
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getTimeFormat() Obtain Time field format. For more information, please see the output parameters of the time format description of the `strftime` function in C language
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimeFormat(string $TimeFormat) Set Time field format. For more information, please see the output parameters of the time format description of the `strftime` function in C language
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDelimiter() Obtain Delimiter for delimited log, which is valid only if `log_type` is `delimiter_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDelimiter(string $Delimiter) Set Delimiter for delimited log, which is valid only if `log_type` is `delimiter_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getLogRegex() Obtain Full log matching rule, which is valid only if `log_type` is `fullregex_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogRegex(string $LogRegex) Set Full log matching rule, which is valid only if `log_type` is `fullregex_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getBeginRegex() Obtain First-Line matching rule, which is valid only if `log_type` is `multiline_log` or `fullregex_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBeginRegex(string $BeginRegex) Set First-Line matching rule, which is valid only if `log_type` is `multiline_log` or `fullregex_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getKeys() Obtain Key name of each extracted field. An empty key indicates to discard the field. This parameter is valid only if `log_type` is `delimiter_log`. `json_log` logs use the key of JSON itself
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setKeys(array $Keys) Set Key name of each extracted field. An empty key indicates to discard the field. This parameter is valid only if `log_type` is `delimiter_log`. `json_log` logs use the key of JSON itself
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getFilterKeyRegex() Obtain Log keys to be filtered and the corresponding regex
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFilterKeyRegex(array $FilterKeyRegex) Set Log keys to be filtered and the corresponding regex
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getUnMatchUpLoadSwitch() Obtain Whether to upload the logs that failed to be parsed. Valid values: `true`: yes; `false`: no
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnMatchUpLoadSwitch(boolean $UnMatchUpLoadSwitch) Set Whether to upload the logs that failed to be parsed. Valid values: `true`: yes; `false`: no
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUnMatchLogKey() Obtain Unmatched log key
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnMatchLogKey(string $UnMatchLogKey) Set Unmatched log key
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getBacktracking() Obtain Size of the data to be rewound in incremental collection mode. Default value: -1 (full collection)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBacktracking(integer $Backtracking) Set Size of the data to be rewound in incremental collection mode. Default value: -1 (full collection)
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ExtractRuleInfo extends AbstractModel
{
    /**
     * @var string Time field key name. `time_key` and `time_format` must appear in pairs
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimeKey;

    /**
     * @var string Time field format. For more information, please see the output parameters of the time format description of the `strftime` function in C language
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimeFormat;

    /**
     * @var string Delimiter for delimited log, which is valid only if `log_type` is `delimiter_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Delimiter;

    /**
     * @var string Full log matching rule, which is valid only if `log_type` is `fullregex_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LogRegex;

    /**
     * @var string First-Line matching rule, which is valid only if `log_type` is `multiline_log` or `fullregex_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $BeginRegex;

    /**
     * @var array Key name of each extracted field. An empty key indicates to discard the field. This parameter is valid only if `log_type` is `delimiter_log`. `json_log` logs use the key of JSON itself
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Keys;

    /**
     * @var array Log keys to be filtered and the corresponding regex
Note: this field may return `null`, indicating that no valid values can be obtained.
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
     * @var integer Size of the data to be rewound in incremental collection mode. Default value: -1 (full collection)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Backtracking;

    /**
     * @param string $TimeKey Time field key name. `time_key` and `time_format` must appear in pairs
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $TimeFormat Time field format. For more information, please see the output parameters of the time format description of the `strftime` function in C language
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Delimiter Delimiter for delimited log, which is valid only if `log_type` is `delimiter_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $LogRegex Full log matching rule, which is valid only if `log_type` is `fullregex_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $BeginRegex First-Line matching rule, which is valid only if `log_type` is `multiline_log` or `fullregex_log`
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Keys Key name of each extracted field. An empty key indicates to discard the field. This parameter is valid only if `log_type` is `delimiter_log`. `json_log` logs use the key of JSON itself
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $FilterKeyRegex Log keys to be filtered and the corresponding regex
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $UnMatchUpLoadSwitch Whether to upload the logs that failed to be parsed. Valid values: `true`: yes; `false`: no
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UnMatchLogKey Unmatched log key
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Backtracking Size of the data to be rewound in incremental collection mode. Default value: -1 (full collection)
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
    }
}
