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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyWebVerificationBizTokenIntl request structure.
 *
 * @method string getCompareImageBase64() Obtain The Base64-encoded string (max 8 MB in size) of the photo to be compared.
 * @method void setCompareImageBase64(string $CompareImageBase64) Set The Base64-encoded string (max 8 MB in size) of the photo to be compared.
 * @method string getRedirectURL() Obtain The web callback URL to redirect to after the verification is completed, including the protocol, hostname, and path. Example: `https://www.tencentcloud.com/products/faceid`.
After the verification process is completed, the `BizToken` of this process will be spliced to the callback URL in the format of `https://www.tencentcloud.com/products/faceid?token={BizToken}` before redirect.
 * @method void setRedirectURL(string $RedirectURL) Set The web callback URL to redirect to after the verification is completed, including the protocol, hostname, and path. Example: `https://www.tencentcloud.com/products/faceid`.
After the verification process is completed, the `BizToken` of this process will be spliced to the callback URL in the format of `https://www.tencentcloud.com/products/faceid?token={BizToken}` before redirect.
 * @method string getExtra() Obtain The passthrough parameter of the business, max 1,000 characters, which will be returned in `GetWebVerificationResultIntl`.
 * @method void setExtra(string $Extra) Set The passthrough parameter of the business, max 1,000 characters, which will be returned in `GetWebVerificationResultIntl`.
 * @method WebVerificationConfigIntl getConfig() Obtain The parameter control the page configuration.
 * @method void setConfig(WebVerificationConfigIntl $Config) Set The parameter control the page configuration.
 */
class ApplyWebVerificationBizTokenIntlRequest extends AbstractModel
{
    /**
     * @var string The Base64-encoded string (max 8 MB in size) of the photo to be compared.
     */
    public $CompareImageBase64;

    /**
     * @var string The web callback URL to redirect to after the verification is completed, including the protocol, hostname, and path. Example: `https://www.tencentcloud.com/products/faceid`.
After the verification process is completed, the `BizToken` of this process will be spliced to the callback URL in the format of `https://www.tencentcloud.com/products/faceid?token={BizToken}` before redirect.
     */
    public $RedirectURL;

    /**
     * @var string The passthrough parameter of the business, max 1,000 characters, which will be returned in `GetWebVerificationResultIntl`.
     */
    public $Extra;

    /**
     * @var WebVerificationConfigIntl The parameter control the page configuration.
     */
    public $Config;

    /**
     * @param string $CompareImageBase64 The Base64-encoded string (max 8 MB in size) of the photo to be compared.
     * @param string $RedirectURL The web callback URL to redirect to after the verification is completed, including the protocol, hostname, and path. Example: `https://www.tencentcloud.com/products/faceid`.
After the verification process is completed, the `BizToken` of this process will be spliced to the callback URL in the format of `https://www.tencentcloud.com/products/faceid?token={BizToken}` before redirect.
     * @param string $Extra The passthrough parameter of the business, max 1,000 characters, which will be returned in `GetWebVerificationResultIntl`.
     * @param WebVerificationConfigIntl $Config The parameter control the page configuration.
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
        if (array_key_exists("CompareImageBase64",$param) and $param["CompareImageBase64"] !== null) {
            $this->CompareImageBase64 = $param["CompareImageBase64"];
        }

        if (array_key_exists("RedirectURL",$param) and $param["RedirectURL"] !== null) {
            $this->RedirectURL = $param["RedirectURL"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new WebVerificationConfigIntl();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
