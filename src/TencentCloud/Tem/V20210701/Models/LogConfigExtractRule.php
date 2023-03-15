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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration of log exporting rule
 *
 * @method string getBeginningRegex() Obtain First line regex
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setBeginningRegex(string $BeginningRegex) Set First line regex
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getKeys() Obtain Withdrawl result
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setKeys(array $Keys) Set Withdrawl result
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getFilterKeys() Obtain Filter keys
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setFilterKeys(array $FilterKeys) Set Filter keys
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getFilterRegex() Obtain Filter values
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setFilterRegex(array $FilterRegex) Set Filter values
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getLogRegex() Obtain Log regex
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setLogRegex(string $LogRegex) Set Log regex
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getTimeKey() Obtain Time field
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTimeKey(string $TimeKey) Set Time field
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getTimeFormat() Obtain Time Format
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTimeFormat(string $TimeFormat) Set Time Format
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getUnMatchUpload() Obtain - Enable the upload of the log that failed to parse
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUnMatchUpload(string $UnMatchUpload) Set - Enable the upload of the log that failed to parse
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getUnMatchedKey() Obtain Key of log failed to be parsed
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUnMatchedKey(string $UnMatchedKey) Set Key of log failed to be parsed
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getBacktracking() Obtain tracking
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBacktracking(string $Backtracking) Set tracking
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDelimiter() Obtain Separator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDelimiter(string $Delimiter) Set Separator
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LogConfigExtractRule extends AbstractModel
{
    /**
     * @var string First line regex
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $BeginningRegex;

    /**
     * @var array Withdrawl result
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Keys;

    /**
     * @var array Filter keys
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $FilterKeys;

    /**
     * @var array Filter values
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $FilterRegex;

    /**
     * @var string Log regex
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $LogRegex;

    /**
     * @var string Time field
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TimeKey;

    /**
     * @var string Time Format
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TimeFormat;

    /**
     * @var string - Enable the upload of the log that failed to parse
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UnMatchUpload;

    /**
     * @var string Key of log failed to be parsed
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UnMatchedKey;

    /**
     * @var string tracking
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Backtracking;

    /**
     * @var string Separator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Delimiter;

    /**
     * @param string $BeginningRegex First line regex
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $Keys Withdrawl result
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $FilterKeys Filter keys
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $FilterRegex Filter values
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $LogRegex Log regex
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $TimeKey Time field
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $TimeFormat Time Format
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $UnMatchUpload - Enable the upload of the log that failed to parse
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $UnMatchedKey Key of log failed to be parsed
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Backtracking tracking
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Delimiter Separator
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
        if (array_key_exists("BeginningRegex",$param) and $param["BeginningRegex"] !== null) {
            $this->BeginningRegex = $param["BeginningRegex"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("FilterKeys",$param) and $param["FilterKeys"] !== null) {
            $this->FilterKeys = $param["FilterKeys"];
        }

        if (array_key_exists("FilterRegex",$param) and $param["FilterRegex"] !== null) {
            $this->FilterRegex = $param["FilterRegex"];
        }

        if (array_key_exists("LogRegex",$param) and $param["LogRegex"] !== null) {
            $this->LogRegex = $param["LogRegex"];
        }

        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("UnMatchUpload",$param) and $param["UnMatchUpload"] !== null) {
            $this->UnMatchUpload = $param["UnMatchUpload"];
        }

        if (array_key_exists("UnMatchedKey",$param) and $param["UnMatchedKey"] !== null) {
            $this->UnMatchedKey = $param["UnMatchedKey"];
        }

        if (array_key_exists("Backtracking",$param) and $param["Backtracking"] !== null) {
            $this->Backtracking = $param["Backtracking"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }
    }
}
