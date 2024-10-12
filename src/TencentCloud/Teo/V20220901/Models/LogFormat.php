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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output format for real-time log delivery. You can directly use the specified predefined log output format (JSON Lines / csv) through the FormatType parameter, or define a variant output format through additional parameters based on the predefined log output format.
 *
 * @method string getFormatType() Obtain Predefined output format for log shipping. Valid values:
<li>json: Use JSON Lines as the predefined log output format. In each log entry, fields are displayed as key-value pairs.</li>
<li>csv: Use the predefined log output format csv, where each log entry only is presented as field values only, excluding field names. </li>
 * @method void setFormatType(string $FormatType) Set Predefined output format for log shipping. Valid values:
<li>json: Use JSON Lines as the predefined log output format. In each log entry, fields are displayed as key-value pairs.</li>
<li>csv: Use the predefined log output format csv, where each log entry only is presented as field values only, excluding field names. </li>
 * @method string getBatchPrefix() Obtain A string added before each log delivery batch. Each log delivery batch may contain multiple log records.
 * @method void setBatchPrefix(string $BatchPrefix) Set A string added before each log delivery batch. Each log delivery batch may contain multiple log records.
 * @method string getBatchSuffix() Obtain A string appended after each log delivery batch.
 * @method void setBatchSuffix(string $BatchSuffix) Set A string appended after each log delivery batch.
 * @method string getRecordPrefix() Obtain A string added before each log record.
 * @method void setRecordPrefix(string $RecordPrefix) Set A string added before each log record.
 * @method string getRecordSuffix() Obtain A string appended after each log record.
 * @method void setRecordSuffix(string $RecordSuffix) Set A string appended after each log record.
 * @method string getRecordDelimiter() Obtain A string inserted between log records as a separator. Valid values:
<li>\n: line break;</li>
<li>\t: tab character;</li>
<li>,: Half-width comma. </li>
 * @method void setRecordDelimiter(string $RecordDelimiter) Set A string inserted between log records as a separator. Valid values:
<li>\n: line break;</li>
<li>\t: tab character;</li>
<li>,: Half-width comma. </li>
 * @method string getFieldDelimiter() Obtain A string inserted between fields as a separator within a single log record. Valid values:
<li>\t: tab character;</li>
<li>,: half-width comma;</li>
<li>;: Half-width semicolon. </li>
 * @method void setFieldDelimiter(string $FieldDelimiter) Set A string inserted between fields as a separator within a single log record. Valid values:
<li>\t: tab character;</li>
<li>,: half-width comma;</li>
<li>;: Half-width semicolon. </li>
 */
class LogFormat extends AbstractModel
{
    /**
     * @var string Predefined output format for log shipping. Valid values:
<li>json: Use JSON Lines as the predefined log output format. In each log entry, fields are displayed as key-value pairs.</li>
<li>csv: Use the predefined log output format csv, where each log entry only is presented as field values only, excluding field names. </li>
     */
    public $FormatType;

    /**
     * @var string A string added before each log delivery batch. Each log delivery batch may contain multiple log records.
     */
    public $BatchPrefix;

    /**
     * @var string A string appended after each log delivery batch.
     */
    public $BatchSuffix;

    /**
     * @var string A string added before each log record.
     */
    public $RecordPrefix;

    /**
     * @var string A string appended after each log record.
     */
    public $RecordSuffix;

    /**
     * @var string A string inserted between log records as a separator. Valid values:
<li>\n: line break;</li>
<li>\t: tab character;</li>
<li>,: Half-width comma. </li>
     */
    public $RecordDelimiter;

    /**
     * @var string A string inserted between fields as a separator within a single log record. Valid values:
<li>\t: tab character;</li>
<li>,: half-width comma;</li>
<li>;: Half-width semicolon. </li>
     */
    public $FieldDelimiter;

    /**
     * @param string $FormatType Predefined output format for log shipping. Valid values:
<li>json: Use JSON Lines as the predefined log output format. In each log entry, fields are displayed as key-value pairs.</li>
<li>csv: Use the predefined log output format csv, where each log entry only is presented as field values only, excluding field names. </li>
     * @param string $BatchPrefix A string added before each log delivery batch. Each log delivery batch may contain multiple log records.
     * @param string $BatchSuffix A string appended after each log delivery batch.
     * @param string $RecordPrefix A string added before each log record.
     * @param string $RecordSuffix A string appended after each log record.
     * @param string $RecordDelimiter A string inserted between log records as a separator. Valid values:
<li>\n: line break;</li>
<li>\t: tab character;</li>
<li>,: Half-width comma. </li>
     * @param string $FieldDelimiter A string inserted between fields as a separator within a single log record. Valid values:
<li>\t: tab character;</li>
<li>,: half-width comma;</li>
<li>;: Half-width semicolon. </li>
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
        if (array_key_exists("FormatType",$param) and $param["FormatType"] !== null) {
            $this->FormatType = $param["FormatType"];
        }

        if (array_key_exists("BatchPrefix",$param) and $param["BatchPrefix"] !== null) {
            $this->BatchPrefix = $param["BatchPrefix"];
        }

        if (array_key_exists("BatchSuffix",$param) and $param["BatchSuffix"] !== null) {
            $this->BatchSuffix = $param["BatchSuffix"];
        }

        if (array_key_exists("RecordPrefix",$param) and $param["RecordPrefix"] !== null) {
            $this->RecordPrefix = $param["RecordPrefix"];
        }

        if (array_key_exists("RecordSuffix",$param) and $param["RecordSuffix"] !== null) {
            $this->RecordSuffix = $param["RecordSuffix"];
        }

        if (array_key_exists("RecordDelimiter",$param) and $param["RecordDelimiter"] !== null) {
            $this->RecordDelimiter = $param["RecordDelimiter"];
        }

        if (array_key_exists("FieldDelimiter",$param) and $param["FieldDelimiter"] !== null) {
            $this->FieldDelimiter = $param["FieldDelimiter"];
        }
    }
}
