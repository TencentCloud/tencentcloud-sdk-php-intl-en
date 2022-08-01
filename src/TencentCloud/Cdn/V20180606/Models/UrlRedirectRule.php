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
 * URL redirect rule configuration
 *
 * @method integer getRedirectStatusCode() Obtain Redirect status code. Valid values: 301, 302
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) Set Redirect status code. Valid values: 301, 302
 * @method string getPattern() Obtain URL to be matched. Only URLs are supported, while parameters are not. The exact match is used by default. In regex match, up to 5 wildcards `*` are supported. The URL can contain up to 1,024 characters.
 * @method void setPattern(string $Pattern) Set URL to be matched. Only URLs are supported, while parameters are not. The exact match is used by default. In regex match, up to 5 wildcards `*` are supported. The URL can contain up to 1,024 characters.
 * @method string getRedirectUrl() Obtain Target URL, starting with `/` and excluding parameters. The path can contain up to 1,024 characters. The wildcards in the matching path can be respectively captured using `$1`, `$2`, `$3`, `$4`, and `$5`. Up to 10 values can be captured.
 * @method void setRedirectUrl(string $RedirectUrl) Set Target URL, starting with `/` and excluding parameters. The path can contain up to 1,024 characters. The wildcards in the matching path can be respectively captured using `$1`, `$2`, `$3`, `$4`, and `$5`. Up to 10 values can be captured.
 * @method string getRedirectHost() Obtain Target host. It should be a standard domain name starting with `http://` or `https://`. If it is left empty, “http://[current domain name]” will be used by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRedirectHost(string $RedirectHost) Set Target host. It should be a standard domain name starting with `http://` or `https://`. If it is left empty, “http://[current domain name]” will be used by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getFullMatch() Obtain Whether to use full-path matching or arbitrary matching
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFullMatch(boolean $FullMatch) Set Whether to use full-path matching or arbitrary matching
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class UrlRedirectRule extends AbstractModel
{
    /**
     * @var integer Redirect status code. Valid values: 301, 302
     */
    public $RedirectStatusCode;

    /**
     * @var string URL to be matched. Only URLs are supported, while parameters are not. The exact match is used by default. In regex match, up to 5 wildcards `*` are supported. The URL can contain up to 1,024 characters.
     */
    public $Pattern;

    /**
     * @var string Target URL, starting with `/` and excluding parameters. The path can contain up to 1,024 characters. The wildcards in the matching path can be respectively captured using `$1`, `$2`, `$3`, `$4`, and `$5`. Up to 10 values can be captured.
     */
    public $RedirectUrl;

    /**
     * @var string Target host. It should be a standard domain name starting with `http://` or `https://`. If it is left empty, “http://[current domain name]” will be used by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RedirectHost;

    /**
     * @var boolean Whether to use full-path matching or arbitrary matching
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FullMatch;

    /**
     * @param integer $RedirectStatusCode Redirect status code. Valid values: 301, 302
     * @param string $Pattern URL to be matched. Only URLs are supported, while parameters are not. The exact match is used by default. In regex match, up to 5 wildcards `*` are supported. The URL can contain up to 1,024 characters.
     * @param string $RedirectUrl Target URL, starting with `/` and excluding parameters. The path can contain up to 1,024 characters. The wildcards in the matching path can be respectively captured using `$1`, `$2`, `$3`, `$4`, and `$5`. Up to 10 values can be captured.
     * @param string $RedirectHost Target host. It should be a standard domain name starting with `http://` or `https://`. If it is left empty, “http://[current domain name]” will be used by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $FullMatch Whether to use full-path matching or arbitrary matching
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
        if (array_key_exists("RedirectStatusCode",$param) and $param["RedirectStatusCode"] !== null) {
            $this->RedirectStatusCode = $param["RedirectStatusCode"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("RedirectHost",$param) and $param["RedirectHost"] !== null) {
            $this->RedirectHost = $param["RedirectHost"];
        }

        if (array_key_exists("FullMatch",$param) and $param["FullMatch"] !== null) {
            $this->FullMatch = $param["FullMatch"];
        }
    }
}
