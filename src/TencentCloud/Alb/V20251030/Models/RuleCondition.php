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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Forwarding rule condition
 *
 * @method string getType() Obtain Forwarding condition type. Valid values:
Host: host.
Path: Path.
Header: HTTP header field.
QueryString: HTTP query string.
Method: Request method.
Cookie:Cookie.
SourceIp: Source IP.
 * @method void setType(string $Type) Set Forwarding condition type. Valid values:
Host: host.
Path: Path.
Header: HTTP header field.
QueryString: HTTP query string.
Method: Request method.
Cookie:Cookie.
SourceIp: Source IP.
 * @method array getCookieConfig() Obtain Cookie configuration.
 * @method void setCookieConfig(array $CookieConfig) Set Cookie configuration.
 * @method HTTPHeaderInfo getHeaderConfig() Obtain HTTP Header configuration.
 * @method void setHeaderConfig(HTTPHeaderInfo $HeaderConfig) Set HTTP Header configuration.
 * @method array getHostConfig() Obtain Host name. The host configuration can only appear once in a rule, with a length of 3 to 128 characters. It supports exact match, regular expression matching, and wildcard matching.
It cannot start or end with a half-width period (.) or underscore (_).
Exact match. Supported character sets: a-z 0-9 . - _ .
Regular expression matching. A value that begins with a tilde (~) indicates regular expression matching. Supported character sets: a-z 0-9 . - ? = ~ _ - + \ ^ * ! $ & | ( ) [ ] .
Wildcard matching. An asterisk (*) matches multiple characters, and a half-width question mark (?) matches any single character. Supported character sets: a-z 0-9 . - _ * ?.
 * @method void setHostConfig(array $HostConfig) Set Host name. The host configuration can only appear once in a rule, with a length of 3 to 128 characters. It supports exact match, regular expression matching, and wildcard matching.
It cannot start or end with a half-width period (.) or underscore (_).
Exact match. Supported character sets: a-z 0-9 . - _ .
Regular expression matching. A value that begins with a tilde (~) indicates regular expression matching. Supported character sets: a-z 0-9 . - ? = ~ _ - + \ ^ * ! $ & | ( ) [ ] .
Wildcard matching. An asterisk (*) matches multiple characters, and a half-width question mark (?) matches any single character. Supported character sets: a-z 0-9 . - _ * ?.
 * @method array getMethodConfig() Obtain Request method. Parameter values: HEAD, GET, POST, OPTIONS, PUT, PATCH, DELETE.
 * @method void setMethodConfig(array $MethodConfig) Set Request method. Parameter values: HEAD, GET, POST, OPTIONS, PUT, PATCH, DELETE.
 * @method array getPathConfig() Obtain Forwarding path. Length: 1–128 characters. Supports exact matching, regular expression matching, and wildcard matching.
Exact match. Supported character sets: a-z A-Z 0-9 . - _ / = :.
For regular expression matching, it must start with `~`. A `~` at the beginning means case-sensitive, and `~*` at the beginning means case-insensitive. Supported character sets: a-z A-Z 0-9 . - _ / = ? ~ ^ * $ : ( ) [ ] + |.
Wildcard matching. * means multiple character wildcard, and ? means any single character wildcard. Supported character sets: a-z A-Z 0-9 . - _ / = :.
 * @method void setPathConfig(array $PathConfig) Set Forwarding path. Length: 1–128 characters. Supports exact matching, regular expression matching, and wildcard matching.
Exact match. Supported character sets: a-z A-Z 0-9 . - _ / = :.
For regular expression matching, it must start with `~`. A `~` at the beginning means case-sensitive, and `~*` at the beginning means case-insensitive. Supported character sets: a-z A-Z 0-9 . - _ / = ? ~ ^ * $ : ( ) [ ] + |.
Wildcard matching. * means multiple character wildcard, and ? means any single character wildcard. Supported character sets: a-z A-Z 0-9 . - _ / = :.
 * @method array getQueryStringConfig() Obtain Query string configuration.
 * @method void setQueryStringConfig(array $QueryStringConfig) Set Query string configuration.
 * @method array getSourceIpConfig() Obtain Source IP matching configuration. CIDR format, IP address x.x.x.x/32, IP range x.x.x.x/24.
 * @method void setSourceIpConfig(array $SourceIpConfig) Set Source IP matching configuration. CIDR format, IP address x.x.x.x/32, IP range x.x.x.x/24.
 */
class RuleCondition extends AbstractModel
{
    /**
     * @var string Forwarding condition type. Valid values:
Host: host.
Path: Path.
Header: HTTP header field.
QueryString: HTTP query string.
Method: Request method.
Cookie:Cookie.
SourceIp: Source IP.
     */
    public $Type;

    /**
     * @var array Cookie configuration.
     */
    public $CookieConfig;

    /**
     * @var HTTPHeaderInfo HTTP Header configuration.
     */
    public $HeaderConfig;

    /**
     * @var array Host name. The host configuration can only appear once in a rule, with a length of 3 to 128 characters. It supports exact match, regular expression matching, and wildcard matching.
It cannot start or end with a half-width period (.) or underscore (_).
Exact match. Supported character sets: a-z 0-9 . - _ .
Regular expression matching. A value that begins with a tilde (~) indicates regular expression matching. Supported character sets: a-z 0-9 . - ? = ~ _ - + \ ^ * ! $ & | ( ) [ ] .
Wildcard matching. An asterisk (*) matches multiple characters, and a half-width question mark (?) matches any single character. Supported character sets: a-z 0-9 . - _ * ?.
     */
    public $HostConfig;

    /**
     * @var array Request method. Parameter values: HEAD, GET, POST, OPTIONS, PUT, PATCH, DELETE.
     */
    public $MethodConfig;

    /**
     * @var array Forwarding path. Length: 1–128 characters. Supports exact matching, regular expression matching, and wildcard matching.
Exact match. Supported character sets: a-z A-Z 0-9 . - _ / = :.
For regular expression matching, it must start with `~`. A `~` at the beginning means case-sensitive, and `~*` at the beginning means case-insensitive. Supported character sets: a-z A-Z 0-9 . - _ / = ? ~ ^ * $ : ( ) [ ] + |.
Wildcard matching. * means multiple character wildcard, and ? means any single character wildcard. Supported character sets: a-z A-Z 0-9 . - _ / = :.
     */
    public $PathConfig;

    /**
     * @var array Query string configuration.
     */
    public $QueryStringConfig;

    /**
     * @var array Source IP matching configuration. CIDR format, IP address x.x.x.x/32, IP range x.x.x.x/24.
     */
    public $SourceIpConfig;

    /**
     * @param string $Type Forwarding condition type. Valid values:
Host: host.
Path: Path.
Header: HTTP header field.
QueryString: HTTP query string.
Method: Request method.
Cookie:Cookie.
SourceIp: Source IP.
     * @param array $CookieConfig Cookie configuration.
     * @param HTTPHeaderInfo $HeaderConfig HTTP Header configuration.
     * @param array $HostConfig Host name. The host configuration can only appear once in a rule, with a length of 3 to 128 characters. It supports exact match, regular expression matching, and wildcard matching.
It cannot start or end with a half-width period (.) or underscore (_).
Exact match. Supported character sets: a-z 0-9 . - _ .
Regular expression matching. A value that begins with a tilde (~) indicates regular expression matching. Supported character sets: a-z 0-9 . - ? = ~ _ - + \ ^ * ! $ & | ( ) [ ] .
Wildcard matching. An asterisk (*) matches multiple characters, and a half-width question mark (?) matches any single character. Supported character sets: a-z 0-9 . - _ * ?.
     * @param array $MethodConfig Request method. Parameter values: HEAD, GET, POST, OPTIONS, PUT, PATCH, DELETE.
     * @param array $PathConfig Forwarding path. Length: 1–128 characters. Supports exact matching, regular expression matching, and wildcard matching.
Exact match. Supported character sets: a-z A-Z 0-9 . - _ / = :.
For regular expression matching, it must start with `~`. A `~` at the beginning means case-sensitive, and `~*` at the beginning means case-insensitive. Supported character sets: a-z A-Z 0-9 . - _ / = ? ~ ^ * $ : ( ) [ ] + |.
Wildcard matching. * means multiple character wildcard, and ? means any single character wildcard. Supported character sets: a-z A-Z 0-9 . - _ / = :.
     * @param array $QueryStringConfig Query string configuration.
     * @param array $SourceIpConfig Source IP matching configuration. CIDR format, IP address x.x.x.x/32, IP range x.x.x.x/24.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CookieConfig",$param) and $param["CookieConfig"] !== null) {
            $this->CookieConfig = [];
            foreach ($param["CookieConfig"] as $key => $value){
                $obj = new HTTPCookieInfo();
                $obj->deserialize($value);
                array_push($this->CookieConfig, $obj);
            }
        }

        if (array_key_exists("HeaderConfig",$param) and $param["HeaderConfig"] !== null) {
            $this->HeaderConfig = new HTTPHeaderInfo();
            $this->HeaderConfig->deserialize($param["HeaderConfig"]);
        }

        if (array_key_exists("HostConfig",$param) and $param["HostConfig"] !== null) {
            $this->HostConfig = $param["HostConfig"];
        }

        if (array_key_exists("MethodConfig",$param) and $param["MethodConfig"] !== null) {
            $this->MethodConfig = $param["MethodConfig"];
        }

        if (array_key_exists("PathConfig",$param) and $param["PathConfig"] !== null) {
            $this->PathConfig = $param["PathConfig"];
        }

        if (array_key_exists("QueryStringConfig",$param) and $param["QueryStringConfig"] !== null) {
            $this->QueryStringConfig = [];
            foreach ($param["QueryStringConfig"] as $key => $value){
                $obj = new HTTPQueryStringInfo();
                $obj->deserialize($value);
                array_push($this->QueryStringConfig, $obj);
            }
        }

        if (array_key_exists("SourceIpConfig",$param) and $param["SourceIpConfig"] !== null) {
            $this->SourceIpConfig = $param["SourceIpConfig"];
        }
    }
}
