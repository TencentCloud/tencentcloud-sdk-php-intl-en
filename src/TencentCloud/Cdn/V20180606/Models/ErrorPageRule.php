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
 * Status code redirect rules configuration
 *
 * @method integer getStatusCode() Obtain Status code
Supports 400, 403, 404, 500.
 * @method void setStatusCode(integer $StatusCode) Set Status code
Supports 400, 403, 404, 500.
 * @method integer getRedirectCode() Obtain Redirect status code settings
Supports 301 or 302.
 * @method void setRedirectCode(integer $RedirectCode) Set Redirect status code settings
Supports 301 or 302.
 * @method string getRedirectUrl() Obtain Redirect URL
Requires a full redirect path, such as https://www.test.com/error.html.
 * @method void setRedirectUrl(string $RedirectUrl) Set Redirect URL
Requires a full redirect path, such as https://www.test.com/error.html.
 */
class ErrorPageRule extends AbstractModel
{
    /**
     * @var integer Status code
Supports 400, 403, 404, 500.
     */
    public $StatusCode;

    /**
     * @var integer Redirect status code settings
Supports 301 or 302.
     */
    public $RedirectCode;

    /**
     * @var string Redirect URL
Requires a full redirect path, such as https://www.test.com/error.html.
     */
    public $RedirectUrl;

    /**
     * @param integer $StatusCode Status code
Supports 400, 403, 404, 500.
     * @param integer $RedirectCode Redirect status code settings
Supports 301 or 302.
     * @param string $RedirectUrl Redirect URL
Requires a full redirect path, such as https://www.test.com/error.html.
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("RedirectCode",$param) and $param["RedirectCode"] !== null) {
            $this->RedirectCode = $param["RedirectCode"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }
    }
}
