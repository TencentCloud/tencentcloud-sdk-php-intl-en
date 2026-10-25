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
 * Output format for real-time log delivery. You can directly use the specified predefined log output format (JSON Lines / csv) through the FormatType parameter, or define a variant output format through additional parameters based on the predefined log output format. For usage details, see [Custom Log Output Format](https://www.tencentcloud.com/document/product/1552/110448?from_cn_redirect=1).
 *
 * @method string getFormatType() Obtain <p>Log output format. Valid values:</p><ul><li>`json`: uses the preset JSON Lines format, where the fields in each log entry are presented as key-value pairs;</li><li>`csv`: uses the preset CSV format, where each log entry presents only field values and not field names;</li><li>`template`: uses a user-defined output template, which allows you to customize the layout and concatenation of each log entry. It must be used together with the `RecordTemplate` parameter.</li></ul>
 * @method void setFormatType(string $FormatType) Set <p>Log output format. Valid values:</p><ul><li>`json`: uses the preset JSON Lines format, where the fields in each log entry are presented as key-value pairs;</li><li>`csv`: uses the preset CSV format, where each log entry presents only field values and not field names;</li><li>`template`: uses a user-defined output template, which allows you to customize the layout and concatenation of each log entry. It must be used together with the `RecordTemplate` parameter.</li></ul>
 * @method string getBatchPrefix() Obtain <p>A string added before each log delivery batch. Each log delivery batch may contain multiple log records.</p>
 * @method void setBatchPrefix(string $BatchPrefix) Set <p>A string added before each log delivery batch. Each log delivery batch may contain multiple log records.</p>
 * @method string getBatchSuffix() Obtain <p>A string appended after each log delivery batch.</p>
 * @method void setBatchSuffix(string $BatchSuffix) Set <p>A string appended after each log delivery batch.</p>
 * @method string getRecordPrefix() Obtain <p>Prefix of a single log entry. String added before each log record.</p>
 * @method void setRecordPrefix(string $RecordPrefix) Set <p>Prefix of a single log entry. String added before each log record.</p>
 * @method string getRecordSuffix() Obtain <p>Suffix of a single log entry. String appended after each log record.</p>
 * @method void setRecordSuffix(string $RecordSuffix) Set <p>Suffix of a single log entry. String appended after each log record.</p>
 * @method string getRecordDelimiter() Obtain <p>Log delimiter. String inserted between log records as a separator. Valid values:</p><ul><li>`\n`: line feed;</li><li>`\t`: tab;</li><li>`,`: half-width comma.</li></ul>
 * @method void setRecordDelimiter(string $RecordDelimiter) Set <p>Log delimiter. String inserted between log records as a separator. Valid values:</p><ul><li>`\n`: line feed;</li><li>`\t`: tab;</li><li>`,`: half-width comma.</li></ul>
 * @method string getRecordTemplate() Obtain <p>Log template. Output template of a single log entry, with a length limit of 4 KB. It takes effect only when `FormatType` = `template`. It allows you to customize the layout and concatenation of the configured delivery fields according to the template.</p>
 * @method void setRecordTemplate(string $RecordTemplate) Set <p>Log template. Output template of a single log entry, with a length limit of 4 KB. It takes effect only when `FormatType` = `template`. It allows you to customize the layout and concatenation of the configured delivery fields according to the template.</p>
 * @method string getFieldDelimiter() Obtain <p>Field delimiter. String inserted between fields within a single log record as a separator. It takes effect only when `FormatType` = `csv`. Valid values:</p><ul><li>`\t`: tab;</li><li>`,`: half-width comma;</li><li>`;`: half-width semicolon.</li></ul>
 * @method void setFieldDelimiter(string $FieldDelimiter) Set <p>Field delimiter. String inserted between fields within a single log record as a separator. It takes effect only when `FormatType` = `csv`. Valid values:</p><ul><li>`\t`: tab;</li><li>`,`: half-width comma;</li><li>`;`: half-width semicolon.</li></ul>
 */
class LogFormat extends AbstractModel
{
    /**
     * @var string <p>Log output format. Valid values:</p><ul><li>`json`: uses the preset JSON Lines format, where the fields in each log entry are presented as key-value pairs;</li><li>`csv`: uses the preset CSV format, where each log entry presents only field values and not field names;</li><li>`template`: uses a user-defined output template, which allows you to customize the layout and concatenation of each log entry. It must be used together with the `RecordTemplate` parameter.</li></ul>
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
     * @var string <p>Prefix of a single log entry. String added before each log record.</p>
     */
    public $RecordPrefix;

    /**
     * @var string <p>Suffix of a single log entry. String appended after each log record.</p>
     */
    public $RecordSuffix;

    /**
     * @var string <p>Log delimiter. String inserted between log records as a separator. Valid values:</p><ul><li>`\n`: line feed;</li><li>`\t`: tab;</li><li>`,`: half-width comma.</li></ul>
     */
    public $RecordDelimiter;

    /**
     * @var string <p>Log template. Output template of a single log entry, with a length limit of 4 KB. It takes effect only when `FormatType` = `template`. It allows you to customize the layout and concatenation of the configured delivery fields according to the template.</p>
     */
    public $RecordTemplate;

    /**
     * @var string <p>Field delimiter. String inserted between fields within a single log record as a separator. It takes effect only when `FormatType` = `csv`. Valid values:</p><ul><li>`\t`: tab;</li><li>`,`: half-width comma;</li><li>`;`: half-width semicolon.</li></ul>
     */
    public $FieldDelimiter;

    /**
     * @param string $FormatType <p>Log output format. Valid values:</p><ul><li>`json`: uses the preset JSON Lines format, where the fields in each log entry are presented as key-value pairs;</li><li>`csv`: uses the preset CSV format, where each log entry presents only field values and not field names;</li><li>`template`: uses a user-defined output template, which allows you to customize the layout and concatenation of each log entry. It must be used together with the `RecordTemplate` parameter.</li></ul>
     * @param string $BatchPrefix <p>A string added before each log delivery batch. Each log delivery batch may contain multiple log records.</p>
     * @param string $BatchSuffix <p>A string appended after each log delivery batch.</p>
     * @param string $RecordPrefix <p>Prefix of a single log entry. String added before each log record.</p>
     * @param string $RecordSuffix <p>Suffix of a single log entry. String appended after each log record.</p>
     * @param string $RecordDelimiter <p>Log delimiter. String inserted between log records as a separator. Valid values:</p><ul><li>`\n`: line feed;</li><li>`\t`: tab;</li><li>`,`: half-width comma.</li></ul>
     * @param string $RecordTemplate <p>Log template. Output template of a single log entry, with a length limit of 4 KB. It takes effect only when `FormatType` = `template`. It allows you to customize the layout and concatenation of the configured delivery fields according to the template.</p>
     * @param string $FieldDelimiter <p>Field delimiter. String inserted between fields within a single log record as a separator. It takes effect only when `FormatType` = `csv`. Valid values:</p><ul><li>`\t`: tab;</li><li>`,`: half-width comma;</li><li>`;`: half-width semicolon.</li></ul>
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
