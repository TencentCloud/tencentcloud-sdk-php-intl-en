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
 * Rule engine condition parameters
 *
 * @method string getOperator() Obtain Operator. Valid values:
<li>`equals`: Equals</li>
<li>`notEquals`: Does not equal</li>
<li>`exist`: Exists</li>
<li>`notexist`: Does not exist</li>
 * @method void setOperator(string $Operator) Set Operator. Valid values:
<li>`equals`: Equals</li>
<li>`notEquals`: Does not equal</li>
<li>`exist`: Exists</li>
<li>`notexist`: Does not exist</li>
 * @method string getTarget() Obtain Match type. Valid values: <li> filename: File name; </li> <li> extension: File extension; </li> <li> host: Host name; </li> <li> full_url: The complete URL path under the current site, which must include the HTTP protocol, host, and path; </li> <li> url: Request for the URL path under the current site; </li><li> client_country: Client country/region;</li> <li> query_string: The query string of the URL requested under the current site; </li> <li> request_header: HTTP request header; </li><li> client_ip: Client IP address; </li><li> request_protocol: Request Protocol; </li><li> request_method: HTTP Request Methods. </li>
 * @method void setTarget(string $Target) Set Match type. Valid values: <li> filename: File name; </li> <li> extension: File extension; </li> <li> host: Host name; </li> <li> full_url: The complete URL path under the current site, which must include the HTTP protocol, host, and path; </li> <li> url: Request for the URL path under the current site; </li><li> client_country: Client country/region;</li> <li> query_string: The query string of the URL requested under the current site; </li> <li> request_header: HTTP request header; </li><li> client_ip: Client IP address; </li><li> request_protocol: Request Protocol; </li><li> request_method: HTTP Request Methods. </li>
 * @method array getValues() Obtain The parameter values for match types. It is allowed to pass an empty array only when the match type is query_string or request_header and the operator value is Exist or Does Not Exist. The corresponding match types include:
<li> File extension: Extensions like jpg, txt, etc.;</li>
<li> File name: For example, foo in foo.jpg;</li>
<li> All: All requests for domain names under the site; </li>
<li> HOST: The host under the current site, for example, www.maxx55.com;</li>
<li> URL Path: Request for the URL path under the current site, for example, /example;</li>
<li> URL Full: The complete URL request under the current site, which must include the HTTP protocol, host, and path, for example, https://www.maxx55.cn/example;</li>
<li> Client country/region: Country/region codes compliant with the ISO3166 standard;</li>
<li> Query string: The parameter values in the query string of the URL requested under the current site, for example, cn and 1 in lang=cn&version=1; </li>
<li> HTTP request header: The value of the HTTP request header field, for example, zh-CN,zh;q=0.9 in Accept-Language:zh-CN,zh;q=0.9; </li>
<li> Client IP: The client IP address carried by the current request, supporting IPv4, IPv6, and an IP range; </li>
<li> Request Protocol: The protocol of the current request, with possible values: HTTP, HTTPS; </li>
<li> HTTP Request Methods: The method of the current request, with possible values: GET, HEAD, POST, PUT, DELETE, TRACE, CONNECT, OPTIONS, PATCH, COPY, LOCK, MKCOL, MOVE, PROPFIND, PROPPATCH, UNLOCK. </li>
 * @method void setValues(array $Values) Set The parameter values for match types. It is allowed to pass an empty array only when the match type is query_string or request_header and the operator value is Exist or Does Not Exist. The corresponding match types include:
<li> File extension: Extensions like jpg, txt, etc.;</li>
<li> File name: For example, foo in foo.jpg;</li>
<li> All: All requests for domain names under the site; </li>
<li> HOST: The host under the current site, for example, www.maxx55.com;</li>
<li> URL Path: Request for the URL path under the current site, for example, /example;</li>
<li> URL Full: The complete URL request under the current site, which must include the HTTP protocol, host, and path, for example, https://www.maxx55.cn/example;</li>
<li> Client country/region: Country/region codes compliant with the ISO3166 standard;</li>
<li> Query string: The parameter values in the query string of the URL requested under the current site, for example, cn and 1 in lang=cn&version=1; </li>
<li> HTTP request header: The value of the HTTP request header field, for example, zh-CN,zh;q=0.9 in Accept-Language:zh-CN,zh;q=0.9; </li>
<li> Client IP: The client IP address carried by the current request, supporting IPv4, IPv6, and an IP range; </li>
<li> Request Protocol: The protocol of the current request, with possible values: HTTP, HTTPS; </li>
<li> HTTP Request Methods: The method of the current request, with possible values: GET, HEAD, POST, PUT, DELETE, TRACE, CONNECT, OPTIONS, PATCH, COPY, LOCK, MKCOL, MOVE, PROPFIND, PROPPATCH, UNLOCK. </li>
 * @method boolean getIgnoreCase() Obtain Whether the parameter value is case insensitive. Default value: false.
 * @method void setIgnoreCase(boolean $IgnoreCase) Set Whether the parameter value is case insensitive. Default value: false.
 * @method string getName() Obtain The parameter name of the match type. This field is required only when `Target=query_string/request_header`.
<li>`query_string`: Name of the query string, such as "lang" and "version" in "lang=cn&version=1".</li>
<li>`request_header`: Name of the HTTP request header, such as "Accept-Language" in the "Accept-Language:zh-CN,zh;q=0.9" header.</li>
 * @method void setName(string $Name) Set The parameter name of the match type. This field is required only when `Target=query_string/request_header`.
<li>`query_string`: Name of the query string, such as "lang" and "version" in "lang=cn&version=1".</li>
<li>`request_header`: Name of the HTTP request header, such as "Accept-Language" in the "Accept-Language:zh-CN,zh;q=0.9" header.</li>
 * @method boolean getIgnoreNameCase() Obtain Whether the parameter name is case insensitive. Default value: `false`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIgnoreNameCase(boolean $IgnoreNameCase) Set Whether the parameter name is case insensitive. Default value: `false`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RuleCondition extends AbstractModel
{
    /**
     * @var string Operator. Valid values:
<li>`equals`: Equals</li>
<li>`notEquals`: Does not equal</li>
<li>`exist`: Exists</li>
<li>`notexist`: Does not exist</li>
     */
    public $Operator;

    /**
     * @var string Match type. Valid values: <li> filename: File name; </li> <li> extension: File extension; </li> <li> host: Host name; </li> <li> full_url: The complete URL path under the current site, which must include the HTTP protocol, host, and path; </li> <li> url: Request for the URL path under the current site; </li><li> client_country: Client country/region;</li> <li> query_string: The query string of the URL requested under the current site; </li> <li> request_header: HTTP request header; </li><li> client_ip: Client IP address; </li><li> request_protocol: Request Protocol; </li><li> request_method: HTTP Request Methods. </li>
     */
    public $Target;

    /**
     * @var array The parameter values for match types. It is allowed to pass an empty array only when the match type is query_string or request_header and the operator value is Exist or Does Not Exist. The corresponding match types include:
<li> File extension: Extensions like jpg, txt, etc.;</li>
<li> File name: For example, foo in foo.jpg;</li>
<li> All: All requests for domain names under the site; </li>
<li> HOST: The host under the current site, for example, www.maxx55.com;</li>
<li> URL Path: Request for the URL path under the current site, for example, /example;</li>
<li> URL Full: The complete URL request under the current site, which must include the HTTP protocol, host, and path, for example, https://www.maxx55.cn/example;</li>
<li> Client country/region: Country/region codes compliant with the ISO3166 standard;</li>
<li> Query string: The parameter values in the query string of the URL requested under the current site, for example, cn and 1 in lang=cn&version=1; </li>
<li> HTTP request header: The value of the HTTP request header field, for example, zh-CN,zh;q=0.9 in Accept-Language:zh-CN,zh;q=0.9; </li>
<li> Client IP: The client IP address carried by the current request, supporting IPv4, IPv6, and an IP range; </li>
<li> Request Protocol: The protocol of the current request, with possible values: HTTP, HTTPS; </li>
<li> HTTP Request Methods: The method of the current request, with possible values: GET, HEAD, POST, PUT, DELETE, TRACE, CONNECT, OPTIONS, PATCH, COPY, LOCK, MKCOL, MOVE, PROPFIND, PROPPATCH, UNLOCK. </li>
     */
    public $Values;

    /**
     * @var boolean Whether the parameter value is case insensitive. Default value: false.
     */
    public $IgnoreCase;

    /**
     * @var string The parameter name of the match type. This field is required only when `Target=query_string/request_header`.
<li>`query_string`: Name of the query string, such as "lang" and "version" in "lang=cn&version=1".</li>
<li>`request_header`: Name of the HTTP request header, such as "Accept-Language" in the "Accept-Language:zh-CN,zh;q=0.9" header.</li>
     */
    public $Name;

    /**
     * @var boolean Whether the parameter name is case insensitive. Default value: `false`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $IgnoreNameCase;

    /**
     * @param string $Operator Operator. Valid values:
<li>`equals`: Equals</li>
<li>`notEquals`: Does not equal</li>
<li>`exist`: Exists</li>
<li>`notexist`: Does not exist</li>
     * @param string $Target Match type. Valid values: <li> filename: File name; </li> <li> extension: File extension; </li> <li> host: Host name; </li> <li> full_url: The complete URL path under the current site, which must include the HTTP protocol, host, and path; </li> <li> url: Request for the URL path under the current site; </li><li> client_country: Client country/region;</li> <li> query_string: The query string of the URL requested under the current site; </li> <li> request_header: HTTP request header; </li><li> client_ip: Client IP address; </li><li> request_protocol: Request Protocol; </li><li> request_method: HTTP Request Methods. </li>
     * @param array $Values The parameter values for match types. It is allowed to pass an empty array only when the match type is query_string or request_header and the operator value is Exist or Does Not Exist. The corresponding match types include:
<li> File extension: Extensions like jpg, txt, etc.;</li>
<li> File name: For example, foo in foo.jpg;</li>
<li> All: All requests for domain names under the site; </li>
<li> HOST: The host under the current site, for example, www.maxx55.com;</li>
<li> URL Path: Request for the URL path under the current site, for example, /example;</li>
<li> URL Full: The complete URL request under the current site, which must include the HTTP protocol, host, and path, for example, https://www.maxx55.cn/example;</li>
<li> Client country/region: Country/region codes compliant with the ISO3166 standard;</li>
<li> Query string: The parameter values in the query string of the URL requested under the current site, for example, cn and 1 in lang=cn&version=1; </li>
<li> HTTP request header: The value of the HTTP request header field, for example, zh-CN,zh;q=0.9 in Accept-Language:zh-CN,zh;q=0.9; </li>
<li> Client IP: The client IP address carried by the current request, supporting IPv4, IPv6, and an IP range; </li>
<li> Request Protocol: The protocol of the current request, with possible values: HTTP, HTTPS; </li>
<li> HTTP Request Methods: The method of the current request, with possible values: GET, HEAD, POST, PUT, DELETE, TRACE, CONNECT, OPTIONS, PATCH, COPY, LOCK, MKCOL, MOVE, PROPFIND, PROPPATCH, UNLOCK. </li>
     * @param boolean $IgnoreCase Whether the parameter value is case insensitive. Default value: false.
     * @param string $Name The parameter name of the match type. This field is required only when `Target=query_string/request_header`.
<li>`query_string`: Name of the query string, such as "lang" and "version" in "lang=cn&version=1".</li>
<li>`request_header`: Name of the HTTP request header, such as "Accept-Language" in the "Accept-Language:zh-CN,zh;q=0.9" header.</li>
     * @param boolean $IgnoreNameCase Whether the parameter name is case insensitive. Default value: `false`.
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("IgnoreCase",$param) and $param["IgnoreCase"] !== null) {
            $this->IgnoreCase = $param["IgnoreCase"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IgnoreNameCase",$param) and $param["IgnoreNameCase"] !== null) {
            $this->IgnoreNameCase = $param["IgnoreNameCase"];
        }
    }
}
