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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Path-based origin-pull configuration rules
 *
 * @method boolean getRegex() Obtain Whether to enable wildcard match (`*`).
`false`: disabled
`true`: enabled
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setRegex(boolean $Regex) Set Whether to enable wildcard match (`*`).
`false`: disabled
`true`: enabled
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getPath() Obtain Matched URL. Only URLs are supported, while parameters are not. The exact match is used by default. If wildcard match is enabled, up to 5 wildcards are supported. The URL can contain up to 1,024 characters.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Matched URL. Only URLs are supported, while parameters are not. The exact match is used by default. If wildcard match is enabled, up to 5 wildcards are supported. The URL can contain up to 1,024 characters.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getOrigin() Obtain Origin server when the path matches. COS origin with private read/write is not supported. The default origin server will be used by default when this field is left empty.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setOrigin(string $Origin) Set Origin server when the path matches. COS origin with private read/write is not supported. The default origin server will be used by default when this field is left empty.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getServerName() Obtain Origin server host header when the path matches. The default `ServerName` will be used by default when this field is left empty.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setServerName(string $ServerName) Set Origin server host header when the path matches. The default `ServerName` will be used by default when this field is left empty.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getOriginArea() Obtain Region of the origin server. Valid values: `CN` and `OV`.
`CN`: Within the Chinese mainland
`OV`: Outside the Chinese mainland
Default value: `CN`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setOriginArea(string $OriginArea) Set Region of the origin server. Valid values: `CN` and `OV`.
`CN`: Within the Chinese mainland
`OV`: Outside the Chinese mainland
Default value: `CN`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getForwardUri() Obtain Origin server URI path when the path matches, starting with `/` and excluding parameters. The path can contain up to 1,024 characters. The wildcards in the match path can be respectively captured using `$1`, `$2`, `$3`, `$4`, and `$5`. Up to 10 values can be captured.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setForwardUri(string $ForwardUri) Set Origin server URI path when the path matches, starting with `/` and excluding parameters. The path can contain up to 1,024 characters. The wildcards in the match path can be respectively captured using `$1`, `$2`, `$3`, `$4`, and `$5`. Up to 10 values can be captured.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getRequestHeaders() Obtain Origin-pull header setting when the path matches.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRequestHeaders(array $RequestHeaders) Set Origin-pull header setting when the path matches.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getFullMatch() Obtain When `Regex` is `false`, this parameter should be `true`.
`false`: Disabled
`true`: enabled
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFullMatch(boolean $FullMatch) Set When `Regex` is `false`, this parameter should be `true`.
`false`: Disabled
`true`: enabled
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class PathRule extends AbstractModel
{
    /**
     * @var boolean Whether to enable wildcard match (`*`).
`false`: disabled
`true`: enabled
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Regex;

    /**
     * @var string Matched URL. Only URLs are supported, while parameters are not. The exact match is used by default. If wildcard match is enabled, up to 5 wildcards are supported. The URL can contain up to 1,024 characters.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string Origin server when the path matches. COS origin with private read/write is not supported. The default origin server will be used by default when this field is left empty.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Origin;

    /**
     * @var string Origin server host header when the path matches. The default `ServerName` will be used by default when this field is left empty.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ServerName;

    /**
     * @var string Region of the origin server. Valid values: `CN` and `OV`.
`CN`: Within the Chinese mainland
`OV`: Outside the Chinese mainland
Default value: `CN`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $OriginArea;

    /**
     * @var string Origin server URI path when the path matches, starting with `/` and excluding parameters. The path can contain up to 1,024 characters. The wildcards in the match path can be respectively captured using `$1`, `$2`, `$3`, `$4`, and `$5`. Up to 10 values can be captured.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ForwardUri;

    /**
     * @var array Origin-pull header setting when the path matches.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RequestHeaders;

    /**
     * @var boolean When `Regex` is `false`, this parameter should be `true`.
`false`: Disabled
`true`: enabled
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FullMatch;

    /**
     * @param boolean $Regex Whether to enable wildcard match (`*`).
`false`: disabled
`true`: enabled
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $Path Matched URL. Only URLs are supported, while parameters are not. The exact match is used by default. If wildcard match is enabled, up to 5 wildcards are supported. The URL can contain up to 1,024 characters.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Origin Origin server when the path matches. COS origin with private read/write is not supported. The default origin server will be used by default when this field is left empty.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ServerName Origin server host header when the path matches. The default `ServerName` will be used by default when this field is left empty.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $OriginArea Region of the origin server. Valid values: `CN` and `OV`.
`CN`: Within the Chinese mainland
`OV`: Outside the Chinese mainland
Default value: `CN`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ForwardUri Origin server URI path when the path matches, starting with `/` and excluding parameters. The path can contain up to 1,024 characters. The wildcards in the match path can be respectively captured using `$1`, `$2`, `$3`, `$4`, and `$5`. Up to 10 values can be captured.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $RequestHeaders Origin-pull header setting when the path matches.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $FullMatch When `Regex` is `false`, this parameter should be `true`.
`false`: Disabled
`true`: enabled
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("OriginArea",$param) and $param["OriginArea"] !== null) {
            $this->OriginArea = $param["OriginArea"];
        }

        if (array_key_exists("ForwardUri",$param) and $param["ForwardUri"] !== null) {
            $this->ForwardUri = $param["ForwardUri"];
        }

        if (array_key_exists("RequestHeaders",$param) and $param["RequestHeaders"] !== null) {
            $this->RequestHeaders = [];
            foreach ($param["RequestHeaders"] as $key => $value){
                $obj = new HttpHeaderRule();
                $obj->deserialize($value);
                array_push($this->RequestHeaders, $obj);
            }
        }

        if (array_key_exists("FullMatch",$param) and $param["FullMatch"] !== null) {
            $this->FullMatch = $param["FullMatch"];
        }
    }
}
