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

namespace TencentCloud\Sms\V20190711;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Sms\V20190711\Models as Models;

/**
 * @method Models\AddSmsSignResponse AddSmsSign(Models\AddSmsSignRequest $req) This API is used to add an SMS signature. Please read the [Tencent Cloud SMS Signature Review Standards](https://intl.cloud.tencent.com/document/product/382/39022?from_cn_redirect=1) before starting an application.
> Note: individual users cannot use this API to apply for SMS signatures. For more information, please see [Identity Verification Overview](https://intl.cloud.tencent.com/document/product/378/3629?from_cn_redirect=1). If your account identity is individual, please log in to the console to apply for SMS signatures. For detailed directions, please see [Creating SMS Signatures](https://intl.cloud.tencent.com/document/product/382/36136?from_cn_redirect=1#Sign).
 * @method Models\AddSmsTemplateResponse AddSmsTemplate(Models\AddSmsTemplateRequest $req) This API is used to add an SMS template. Please read the [Tencent Cloud SMS Body Template Review Standards](https://intl.cloud.tencent.com/document/product/382/39023?from_cn_redirect=1) before starting an application.
> Note: individual users cannot use this API to apply for SMS body templates. For more information, please see [Identity Verification Overview](https://intl.cloud.tencent.com/document/product/378/3629?from_cn_redirect=1). If your account identity is individual, please log in to the console to apply for SMS body templates. For detailed directions, please see [Creating SMS Body Templates](https://intl.cloud.tencent.com/document/product/382/36136?from_cn_redirect=1#Template).
 * @method Models\CallbackStatusStatisticsResponse CallbackStatusStatistics(Models\CallbackStatusStatisticsRequest $req) This API is used to collect statistics on user receipts.
 * @method Models\DeleteSmsSignResponse DeleteSmsSign(Models\DeleteSmsSignRequest $req) > Note: individual users cannot use this API to delete SMS signatures. For more information, please see [Identity Verification Overview](https://intl.cloud.tencent.com/document/product/378/3629?from_cn_redirect=1). You can log in to the console to delete SMS signatures. For detailed directions, please see the notes on deleting SMS signatures in [SMS Signature Operations](https://intl.cloud.tencent.com/document/product/382/36136?from_cn_redirect=1#Sign).
 * @method Models\DeleteSmsTemplateResponse DeleteSmsTemplate(Models\DeleteSmsTemplateRequest $req) > Note: individual users cannot use this API to delete SMS body templates. For more information, please see [Identity Verification Overview](https://intl.cloud.tencent.com/document/product/378/3629?from_cn_redirect=1). You can log in to the console to delete SMS body templates. For detailed directions, please see the notes on deleting SMS body templates in [SMS Body Template Operations](https://intl.cloud.tencent.com/document/product/382/36136?from_cn_redirect=1#Template).
 * @method Models\DescribeSmsSignListResponse DescribeSmsSignList(Models\DescribeSmsSignListRequest $req) > Note: individual users cannot use this API to query SMS signatures. For more information, please see [Identity Verification Overview](https://intl.cloud.tencent.com/document/product/378/3629?from_cn_redirect=1).
 * @method Models\DescribeSmsTemplateListResponse DescribeSmsTemplateList(Models\DescribeSmsTemplateListRequest $req) > Note: individual users cannot use this API to query SMS body templates. For more information, please see [Identity Verification Overview](https://intl.cloud.tencent.com/document/product/378/3629?from_cn_redirect=1).
 * @method Models\ModifySmsSignResponse ModifySmsSign(Models\ModifySmsSignRequest $req) This API is used to modify an SMS signature. Please read the [Tencent Cloud SMS Signature Review Standards](https://intl.cloud.tencent.com/document/product/382/39022?from_cn_redirect=1) before making a modification.
>-  Note: individual users cannot use this API to modify SMS signatures. For more information, please see [Identity Verification Overview](https://intl.cloud.tencent.com/document/product/378/3629?from_cn_redirect=1). If your account identity is individual, you can log in to the console to modify SMS signatures.
>- Modifications can be made only if the signature status is **pending review** or **rejected**. **Approved** signatures cannot be modified.
 * @method Models\ModifySmsTemplateResponse ModifySmsTemplate(Models\ModifySmsTemplateRequest $req) This API is used to modify an SMS body template. Please read the [Tencent Cloud SMS Body Template Review Standards](https://intl.cloud.tencent.com/document/product/382/39023?from_cn_redirect=1) before making a modification.
>-  Note: individual users cannot use this API to modify SMS body templates. For more information, please see [Identity Verification Overview](https://intl.cloud.tencent.com/document/product/378/3629?from_cn_redirect=1). If your account identity is individual, you can log in to the console to modify SMS body templates.
>- Modifications can be made only if the body template status is **pending review** or **rejected**. **Approved** body templates cannot be modified.
 * @method Models\PullSmsReplyStatusResponse PullSmsReplyStatus(Models\PullSmsReplyStatusRequest $req) This API is used to pull SMS reply status.
 * @method Models\PullSmsReplyStatusByPhoneNumberResponse PullSmsReplyStatusByPhoneNumber(Models\PullSmsReplyStatusByPhoneNumberRequest $req) This API is used to pull SMS reply status for one single number.
 * @method Models\PullSmsSendStatusResponse PullSmsSendStatus(Models\PullSmsSendStatusRequest $req) This API is used to pull SMS delivery status.
 * @method Models\PullSmsSendStatusByPhoneNumberResponse PullSmsSendStatusByPhoneNumber(Models\PullSmsSendStatusByPhoneNumberRequest $req) This API is used to pull SMS delivery status for one single number.
 * @method Models\SendSmsResponse SendSms(Models\SendSmsRequest $req) This API is used to send SMS verification codes, notification, or marketing messages to users.


 * @method Models\SendStatusStatisticsResponse SendStatusStatistics(Models\SendStatusStatisticsRequest $req) This API is used to collect statistics on SMS sent by users.
 * @method Models\SmsPackagesStatisticsResponse SmsPackagesStatistics(Models\SmsPackagesStatisticsRequest $req) This API is used to collect statistics on user's packages.
 */

class SmsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "sms.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "sms";

    /**
     * @var string
     */
    protected $version = "2019-07-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("sms")."\\"."V20190711\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
