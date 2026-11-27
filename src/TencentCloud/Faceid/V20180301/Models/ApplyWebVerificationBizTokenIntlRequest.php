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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyWebVerificationBizTokenIntl request structure.
 *
 * @method string getRedirectURL() Obtain <p>The Web redirect URL after verification, including the protocol header, host name, and path, for example, https://www.tencentcloud.com/products/faceid.<br>After the verification process is completed, the BizToken of the current process is appended to the redirect URL, and the redirect is performed in the format of https://www.tencentcloud.com/products/faceid?token={BizToken}.</p>
 * @method void setRedirectURL(string $RedirectURL) Set <p>The Web redirect URL after verification, including the protocol header, host name, and path, for example, https://www.tencentcloud.com/products/faceid.<br>After the verification process is completed, the BizToken of the current process is appended to the redirect URL, and the redirect is performed in the format of https://www.tencentcloud.com/products/faceid?token={BizToken}.</p>
 * @method string getCompareImageBase64() Obtain <p>Base64-encoded string of the comparison photo. The Data URI scheme header needs to be removed from the encoded string, and the size cannot exceed 8 MB.</p>
 * @method void setCompareImageBase64(string $CompareImageBase64) Set <p>Base64-encoded string of the comparison photo. The Data URI scheme header needs to be removed from the encoded string, and the size cannot exceed 8 MB.</p>
 * @method string getExtra() Obtain <p>Business passthrough parameter, with a maximum length of 1,000 characters. It is returned in the GetWebVerificationResultIntl API.</p>
 * @method void setExtra(string $Extra) Set <p>Business passthrough parameter, with a maximum length of 1,000 characters. It is returned in the GetWebVerificationResultIntl API.</p>
 * @method string getRuleId() Obtain <p>Id generated in the console configuration</p>
 * @method void setRuleId(string $RuleId) Set <p>Id generated in the console configuration</p>
 * @method WebVerificationConfigIntl getConfig() Obtain <p>Related configurations of the custom verification page.</p>
 * @method void setConfig(WebVerificationConfigIntl $Config) Set <p>Related configurations of the custom verification page.</p>
 */
class ApplyWebVerificationBizTokenIntlRequest extends AbstractModel
{
    /**
     * @var string <p>The Web redirect URL after verification, including the protocol header, host name, and path, for example, https://www.tencentcloud.com/products/faceid.<br>After the verification process is completed, the BizToken of the current process is appended to the redirect URL, and the redirect is performed in the format of https://www.tencentcloud.com/products/faceid?token={BizToken}.</p>
     */
    public $RedirectURL;

    /**
     * @var string <p>Base64-encoded string of the comparison photo. The Data URI scheme header needs to be removed from the encoded string, and the size cannot exceed 8 MB.</p>
     */
    public $CompareImageBase64;

    /**
     * @var string <p>Business passthrough parameter, with a maximum length of 1,000 characters. It is returned in the GetWebVerificationResultIntl API.</p>
     */
    public $Extra;

    /**
     * @var string <p>Id generated in the console configuration</p>
     */
    public $RuleId;

    /**
     * @var WebVerificationConfigIntl <p>Related configurations of the custom verification page.</p>
     */
    public $Config;

    /**
     * @param string $RedirectURL <p>The Web redirect URL after verification, including the protocol header, host name, and path, for example, https://www.tencentcloud.com/products/faceid.<br>After the verification process is completed, the BizToken of the current process is appended to the redirect URL, and the redirect is performed in the format of https://www.tencentcloud.com/products/faceid?token={BizToken}.</p>
     * @param string $CompareImageBase64 <p>Base64-encoded string of the comparison photo. The Data URI scheme header needs to be removed from the encoded string, and the size cannot exceed 8 MB.</p>
     * @param string $Extra <p>Business passthrough parameter, with a maximum length of 1,000 characters. It is returned in the GetWebVerificationResultIntl API.</p>
     * @param string $RuleId <p>Id generated in the console configuration</p>
     * @param WebVerificationConfigIntl $Config <p>Related configurations of the custom verification page.</p>
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
        if (array_key_exists("RedirectURL",$param) and $param["RedirectURL"] !== null) {
            $this->RedirectURL = $param["RedirectURL"];
        }

        if (array_key_exists("CompareImageBase64",$param) and $param["CompareImageBase64"] !== null) {
            $this->CompareImageBase64 = $param["CompareImageBase64"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new WebVerificationConfigIntl();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
