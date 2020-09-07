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
 * @method string getPattern() Obtain Pattern of the URL to be matched, which can contain up to 1,024 characters. Full-path match and regex match are supported.
 * @method void setPattern(string $Pattern) Set Pattern of the URL to be matched, which can contain up to 1,024 characters. Full-path match and regex match are supported.
 * @method string getRedirectUrl() Obtain Target URL, which must begin with `/` and can contain up to 1,024 characters.
 * @method void setRedirectUrl(string $RedirectUrl) Set Target URL, which must begin with `/` and can contain up to 1,024 characters.
 */
class UrlRedirectRule extends AbstractModel
{
    /**
     * @var integer Redirect status code. Valid values: 301, 302
     */
    public $RedirectStatusCode;

    /**
     * @var string Pattern of the URL to be matched, which can contain up to 1,024 characters. Full-path match and regex match are supported.
     */
    public $Pattern;

    /**
     * @var string Target URL, which must begin with `/` and can contain up to 1,024 characters.
     */
    public $RedirectUrl;

    /**
     * @param integer $RedirectStatusCode Redirect status code. Valid values: 301, 302
     * @param string $Pattern Pattern of the URL to be matched, which can contain up to 1,024 characters. Full-path match and regex match are supported.
     * @param string $RedirectUrl Target URL, which must begin with `/` and can contain up to 1,024 characters.
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
    }
}
