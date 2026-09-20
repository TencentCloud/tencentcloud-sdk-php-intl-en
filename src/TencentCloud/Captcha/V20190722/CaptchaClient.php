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

namespace TencentCloud\Captcha\V20190722;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Captcha\V20190722\Models as Models;

/**
 * @method Models\CreateCaptchaInfoInternationalResponse CreateCaptchaInfoInternational(Models\CreateCaptchaInfoInternationalRequest $req) Create a captcha: You can create multiple Captcha based on different business needs. Each verification has different client types and security policies. The limit for new Captcha is 50.
 * @method Models\CreateIpWhiteListInternationalResponse CreateIpWhiteListInternational(Models\CreateIpWhiteListInternationalRequest $req) Create an IP allowlist: You can create an IP allowlist based on different business needs.
 * @method Models\DeleteIpWhiteListInternationalResponse DeleteIpWhiteListInternational(Models\DeleteIpWhiteListInternationalRequest $req) Delete an IP allowlist: You can delete an IP allowlist based on different business needs.
 * @method Models\DescribeCaptchaInfoListInternationalResponse DescribeCaptchaInfoListInternational(Models\DescribeCaptchaInfoListInternationalRequest $req) Query the Captcha list to obtain all verification CaptchaAppIds, verification names, and other information internationally.
 * @method Models\DescribeCaptchaResultResponse DescribeCaptchaResult(Models\DescribeCaptchaResultRequest $req) This API is used to check the ticket results of verification codes for Web and APP.
 * @method Models\DescribeIpWhiteListInternationalResponse DescribeIpWhiteListInternational(Models\DescribeIpWhiteListInternationalRequest $req) IP allowlist list: You can query the IP whitelist list based on different business needs.
 * @method Models\ModifyCaptchaInfoInternationalResponse ModifyCaptchaInfoInternational(Models\ModifyCaptchaInfoInternationalRequest $req) Change the captcha configuration, including basic, appearance, and security settings such as captcha name, prompt language, and validation type.
 * @method Models\ModifyIpWhiteListInternationalResponse ModifyIpWhiteListInternational(Models\ModifyIpWhiteListInternationalRequest $req) Edit IP allowlist: You can edit the IP allowlist based on different business needs.
 * @method Models\RemoveCaptchaInfoInternationalResponse RemoveCaptchaInfoInternational(Models\RemoveCaptchaInfoInternationalRequest $req) Delete a captcha: once deleted, verification scenarios using this CaptchaAppId will fail to load the verification code on the frontend, and invoice verification will report an error on the backend. Proceed with caution.
 */

class CaptchaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "captcha.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "captcha";

    /**
     * @var string
     */
    protected $version = "2019-07-22";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("captcha")."\\"."V20190722\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
