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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output format for real-time log delivery. You can directly use the specified predefined log output format (JSON Lines / csv) through the FormatType parameter, or define a variant output format through additional parameters based on the predefined log output format. For usage details, see Custom Log Output Format (https://www.tencentcloud.com/document/product/1552/110448?from_cn_redirect=1).
 *
 * @method string getFormatType() Obtain <p>Log output format. Valid values:</p><ul><li>json: Use the predefined log output format JSON Lines, where each log entry is presented as key-value pairs;</li><li>csv: Use the predefined log output format CSV, where each log entry presents only field values, not field names.</li><li>template: Use a user-customized output template. Each log entry supports custom layout and concatenation based on the custom template, in conjunction with the RecordTemplate field.</li></ul>
 * @method void setFormatType(string $FormatType) Set <p>Log output format. Valid values:</p><ul><li>json: Use the predefined log output format JSON Lines, where each log entry is presented as key-value pairs;</li><li>csv: Use the predefined log output format CSV, where each log entry presents only field values, not field names.</li><li>template: Use a user-customized output template. Each log entry supports custom layout and concatenation based on the custom template, in conjunction with the RecordTemplate field.</li></ul>
 * @method string getBatchPrefix() Obtain <p>A string added before each log delivery batch. Each log delivery batch may contain multiple log records.</p>
 * @method void setBatchPrefix(string $BatchPrefix) Set <p>A string added before each log delivery batch. Each log delivery batch may contain multiple log records.</p>
 * @method string getBatchSuffix() Obtain <p>A string appended after each log delivery batch.</p>
 * @method void setBatchSuffix(string $BatchSuffix) Set <p>A string appended after each log delivery batch.</p>
 * @method string getRecordPrefix() Obtain <p>Log prefix, a string added before each log record.</p>
 * @method void setRecordPrefix(string $RecordPrefix) Set <p>Log prefix, a string added before each log record.</p>
 * @method string getRecordSuffix() Obtain <p>Single-line log suffix, a string appended after each log record.</p>
 * @method void setRecordSuffix(string $RecordSuffix) Set <p>Single-line log suffix, a string appended after each log record.</p>
 * @method string getRecordDelimiter() Obtain <p>Log separator, a string inserted between log records as a separator. Valid values:</p><ul><li>\n: line break;</li><li>\t: tab character;</li><li>,: half-width comma.</li></ul>
 * @method void setRecordDelimiter(string $RecordDelimiter) Set <p>Log separator, a string inserted between log records as a separator. Valid values:</p><ul><li>\n: line break;</li><li>\t: tab character;</li><li>,: half-width comma.</li></ul>
 * @method string getRecordTemplate() Obtain <p>Log template, output template for a single log, length limited to 4KB, takes effect only when FormatType = template. Supports custom layout and concatenation of configured push fields according to the template.</p>
 * @method void setRecordTemplate(string $RecordTemplate) Set <p>Log template, output template for a single log, length limited to 4KB, takes effect only when FormatType = template. Supports custom layout and concatenation of configured push fields according to the template.</p>
 * @method string getFieldDelimiter() Obtain <p>Field separator, a string inserted between fields within a single log record as a separator. It takes effect only when FormatType = csv. Valid values:</p><ul><li>\t: tab character;</li><li>,: half-width comma;</li><li>;: half-width semicolon.</li></ul>
 * @method void setFieldDelimiter(string $FieldDelimiter) Set <p>Field separator, a string inserted between fields within a single log record as a separator. It takes effect only when FormatType = csv. Valid values:</p><ul><li>\t: tab character;</li><li>,: half-width comma;</li><li>;: half-width semicolon.</li></ul>
 */
class LogFormat extends AbstractModel
{
    /**
     * @var string <p>Log output format. Valid values:</p><ul><li>json: Use the predefined log output format JSON Lines, where each log entry is presented as key-value pairs;</li><li>csv: Use the predefined log output format CSV, where each log entry presents only field values, not field names.</li><li>template: Use a user-customized output template. Each log entry supports custom layout and concatenation based on the custom template, in conjunction with the RecordTemplate field.</li></ul>
     */
    public $FormatType;

    /**
     * @var string <p>A string added before each log delivery batch. Each log delivery batch may contain multiple log records.</p>
     */
    public $BatchPrefix;

    /**
     * @var string <p>A string appended after each log delivery batch.</p>
     */
    public $BatchSuffix;

    /**
     * @var string <p>Log prefix, a string added before each log record.</p>
     */
    public $RecordPrefix;

    /**
     * @var string <p>Single-line log suffix, a string appended after each log record.</p>
     */
    public $RecordSuffix;

    /**
     * @var string <p>Log separator, a string inserted between log records as a separator. Valid values:</p><ul><li>\n: line break;</li><li>\t: tab character;</li><li>,: half-width comma.</li></ul>
     */
    public $RecordDelimiter;

    /**
     * @var string <p>Log template, output template for a single log, length limited to 4KB, takes effect only when FormatType = template. Supports custom layout and concatenation of configured push fields according to the template.</p>
     */
    public $RecordTemplate;

    /**
     * @var string <p>Field separator, a string inserted between fields within a single log record as a separator. It takes effect only when FormatType = csv. Valid values:</p><ul><li>\t: tab character;</li><li>,: half-width comma;</li><li>;: half-width semicolon.</li></ul>
     */
    public $FieldDelimiter;

    /**
     * @param string $FormatType <p>Log output format. Valid values:</p><ul><li>json: Use the predefined log output format JSON Lines, where each log entry is presented as key-value pairs;</li><li>csv: Use the predefined log output format CSV, where each log entry presents only field values, not field names.</li><li>template: Use a user-customized output template. Each log entry supports custom layout and concatenation based on the custom template, in conjunction with the RecordTemplate field.</li></ul>
     * @param string $BatchPrefix <p>A string added before each log delivery batch. Each log delivery batch may contain multiple log records.</p>
     * @param string $BatchSuffix <p>A string appended after each log delivery batch.</p>
     * @param string $RecordPrefix <p>Log prefix, a string added before each log record.</p>
     * @param string $RecordSuffix <p>Single-line log suffix, a string appended after each log record.</p>
     * @param string $RecordDelimiter <p>Log separator, a string inserted between log records as a separator. Valid values:</p><ul><li>\n: line break;</li><li>\t: tab character;</li><li>,: half-width comma.</li></ul>
     * @param string $RecordTemplate <p>Log template, output template for a single log, length limited to 4KB, takes effect only when FormatType = template. Supports custom layout and concatenation of configured push fields according to the template.</p>
     * @param string $FieldDelimiter <p>Field separator, a string inserted between fields within a single log record as a separator. It takes effect only when FormatType = csv. Valid values:</p><ul><li>\t: tab character;</li><li>,: half-width comma;</li><li>;: half-width semicolon.</li></ul>
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

        if (array_key_exists("RecordTemplate",$param) and $param["RecordTemplate"] !== null) {
            $this->RecordTemplate = $param["RecordTemplate"];
        }

        if (array_key_exists("FieldDelimiter",$param) and $param["FieldDelimiter"] !== null) {
            $this->FieldDelimiter = $param["FieldDelimiter"];
        }
    }
}
