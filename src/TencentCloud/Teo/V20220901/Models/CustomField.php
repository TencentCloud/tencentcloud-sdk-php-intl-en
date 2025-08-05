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
 * The custom log field in a real-time log delivery task.
 *
 * @method string getName() Obtain Type of the custom log field, which indicates extracting data from specified positions in HTTP requests and responses. valid values:.
<li>ReqHeader: extract the value of a specified field from an HTTP request header;</li>.
<li>RspHeader: extracts the value of a specified field from an HTTP response header.</li>.
<Li>Cookie: extract the specified field value from a cookie;</li>.
<li>ReqBody: extract specified content from an HTTP request body using a Google RE2 regular expression.</li>.
 * @method void setName(string $Name) Set Type of the custom log field, which indicates extracting data from specified positions in HTTP requests and responses. valid values:.
<li>ReqHeader: extract the value of a specified field from an HTTP request header;</li>.
<li>RspHeader: extracts the value of a specified field from an HTTP response header.</li>.
<Li>Cookie: extract the specified field value from a cookie;</li>.
<li>ReqBody: extract specified content from an HTTP request body using a Google RE2 regular expression.</li>.
 * @method string getValue() Obtain Enter the field value definition based on the field type (Name). this parameter is case-sensitive.
<li>When the field type is ReqHeader, RspHeader, or Cookie, enter the parameter name for value extraction, such as Accept-Language. you can enter 1-100 characters. the name must start with a letter, contain letters, digits, or hyphens (-) in the middle, and end with a letter or digit.</li>.
<li>When the field type is ReqBody, enter the Google RE2 regular expression. the maximum length of the regular expression is 4 KB.</li>.
 * @method void setValue(string $Value) Set Enter the field value definition based on the field type (Name). this parameter is case-sensitive.
<li>When the field type is ReqHeader, RspHeader, or Cookie, enter the parameter name for value extraction, such as Accept-Language. you can enter 1-100 characters. the name must start with a letter, contain letters, digits, or hyphens (-) in the middle, and end with a letter or digit.</li>.
<li>When the field type is ReqBody, enter the Google RE2 regular expression. the maximum length of the regular expression is 4 KB.</li>.
 * @method boolean getEnabled() Obtain Whether to deliver this field. leave blank to skip delivery.
 * @method void setEnabled(boolean $Enabled) Set Whether to deliver this field. leave blank to skip delivery.
 */
class CustomField extends AbstractModel
{
    /**
     * @var string Type of the custom log field, which indicates extracting data from specified positions in HTTP requests and responses. valid values:.
<li>ReqHeader: extract the value of a specified field from an HTTP request header;</li>.
<li>RspHeader: extracts the value of a specified field from an HTTP response header.</li>.
<Li>Cookie: extract the specified field value from a cookie;</li>.
<li>ReqBody: extract specified content from an HTTP request body using a Google RE2 regular expression.</li>.
     */
    public $Name;

    /**
     * @var string Enter the field value definition based on the field type (Name). this parameter is case-sensitive.
<li>When the field type is ReqHeader, RspHeader, or Cookie, enter the parameter name for value extraction, such as Accept-Language. you can enter 1-100 characters. the name must start with a letter, contain letters, digits, or hyphens (-) in the middle, and end with a letter or digit.</li>.
<li>When the field type is ReqBody, enter the Google RE2 regular expression. the maximum length of the regular expression is 4 KB.</li>.
     */
    public $Value;

    /**
     * @var boolean Whether to deliver this field. leave blank to skip delivery.
     */
    public $Enabled;

    /**
     * @param string $Name Type of the custom log field, which indicates extracting data from specified positions in HTTP requests and responses. valid values:.
<li>ReqHeader: extract the value of a specified field from an HTTP request header;</li>.
<li>RspHeader: extracts the value of a specified field from an HTTP response header.</li>.
<Li>Cookie: extract the specified field value from a cookie;</li>.
<li>ReqBody: extract specified content from an HTTP request body using a Google RE2 regular expression.</li>.
     * @param string $Value Enter the field value definition based on the field type (Name). this parameter is case-sensitive.
<li>When the field type is ReqHeader, RspHeader, or Cookie, enter the parameter name for value extraction, such as Accept-Language. you can enter 1-100 characters. the name must start with a letter, contain letters, digits, or hyphens (-) in the middle, and end with a letter or digit.</li>.
<li>When the field type is ReqBody, enter the Google RE2 regular expression. the maximum length of the regular expression is 4 KB.</li>.
     * @param boolean $Enabled Whether to deliver this field. leave blank to skip delivery.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
