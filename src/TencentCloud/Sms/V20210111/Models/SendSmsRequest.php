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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendSms request structure.
 *
 * @method array getPhoneNumberSet() Obtain Target mobile number in E.164 format (+[country/region code][subscriber number]). Up to 200 numbers, all of which should be either Chinese mainland numbers or international numbers, are supported in a single request.
Take the number +8613711112222 as an example. “86” is the country code (with a “+” sign in its front) and “13711112222” is the subscriber number.
Note: 11-digit Chinese mainland numbers prefixed by 0086 or 86 or those without any country/region code are also supported. The default prefix is +86.
 * @method void setPhoneNumberSet(array $PhoneNumberSet) Set Target mobile number in E.164 format (+[country/region code][subscriber number]). Up to 200 numbers, all of which should be either Chinese mainland numbers or international numbers, are supported in a single request.
Take the number +8613711112222 as an example. “86” is the country code (with a “+” sign in its front) and “13711112222” is the subscriber number.
Note: 11-digit Chinese mainland numbers prefixed by 0086 or 86 or those without any country/region code are also supported. The default prefix is +86.
 * @method string getSmsSdkAppId() Obtain The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 1400006666.
 * @method void setSmsSdkAppId(string $SmsSdkAppId) Set The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 1400006666.
 * @method string getTemplateId() Obtain Template ID. You must enter the ID of an approved template, which can be viewed on the [Mainland China SMS](https://console.cloud.tencent.com/smsv2/csms-template) or [Global SMS](https://console.cloud.tencent.com/smsv2/isms-template) body template management page. If you need to send SMS messages to global mobile numbers, you can only use a Global SMS template.
 * @method void setTemplateId(string $TemplateId) Set Template ID. You must enter the ID of an approved template, which can be viewed on the [Mainland China SMS](https://console.cloud.tencent.com/smsv2/csms-template) or [Global SMS](https://console.cloud.tencent.com/smsv2/isms-template) body template management page. If you need to send SMS messages to global mobile numbers, you can only use a Global SMS template.
 * @method string getSignName() Obtain Content of the SMS signature, which should be encoded in UTF-8. You must enter an approved signature, such as Tencent Cloud. The signature information can be viewed on the [Mainland China SMS](https://console.cloud.tencent.com/smsv2/csms-sign) or [Global SMS](https://console.cloud.tencent.com/smsv2/isms-sign) signature management page.
<dx-alert infotype="notice" title="Note">This parameter is required for Mainland China SMS.</dx-alert>
 * @method void setSignName(string $SignName) Set Content of the SMS signature, which should be encoded in UTF-8. You must enter an approved signature, such as Tencent Cloud. The signature information can be viewed on the [Mainland China SMS](https://console.cloud.tencent.com/smsv2/csms-sign) or [Global SMS](https://console.cloud.tencent.com/smsv2/isms-sign) signature management page.
<dx-alert infotype="notice" title="Note">This parameter is required for Mainland China SMS.</dx-alert>
 * @method array getTemplateParamSet() Obtain Template parameter. If there is no template parameter, leave this field empty.
<dx-alert infotype="notice" title="Note">The number of template parameters should be consistent with that of the template variables of `TemplateId`.</dx-alert>
 * @method void setTemplateParamSet(array $TemplateParamSet) Set Template parameter. If there is no template parameter, leave this field empty.
<dx-alert infotype="notice" title="Note">The number of template parameters should be consistent with that of the template variables of `TemplateId`.</dx-alert>
 * @method string getExtendCode() Obtain SMS code number extension, which is not activated by default. If you need to activate it, you can contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
 * @method void setExtendCode(string $ExtendCode) Set SMS code number extension, which is not activated by default. If you need to activate it, you can contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
 * @method string getSessionContext() Obtain User session content, which can carry context information such as user-side ID and will be returned as-is by the server.
 * @method void setSessionContext(string $SessionContext) Set User session content, which can carry context information such as user-side ID and will be returned as-is by the server.
 * @method string getSenderId() Obtain This parameter is not required for Mainland China SMS. For Global SMS, if you have applied for a separate `SenderId`, this parameter is required. By default, the public `SenderId` is used, in which case you don't need to enter this parameter.
Note: if your monthly usage reaches the specified threshold, you can apply for an independent `SenderId`. For more information, contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
 * @method void setSenderId(string $SenderId) Set This parameter is not required for Mainland China SMS. For Global SMS, if you have applied for a separate `SenderId`, this parameter is required. By default, the public `SenderId` is used, in which case you don't need to enter this parameter.
Note: if your monthly usage reaches the specified threshold, you can apply for an independent `SenderId`. For more information, contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
 */
class SendSmsRequest extends AbstractModel
{
    /**
     * @var array Target mobile number in E.164 format (+[country/region code][subscriber number]). Up to 200 numbers, all of which should be either Chinese mainland numbers or international numbers, are supported in a single request.
Take the number +8613711112222 as an example. “86” is the country code (with a “+” sign in its front) and “13711112222” is the subscriber number.
Note: 11-digit Chinese mainland numbers prefixed by 0086 or 86 or those without any country/region code are also supported. The default prefix is +86.
     */
    public $PhoneNumberSet;

    /**
     * @var string The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 1400006666.
     */
    public $SmsSdkAppId;

    /**
     * @var string Template ID. You must enter the ID of an approved template, which can be viewed on the [Mainland China SMS](https://console.cloud.tencent.com/smsv2/csms-template) or [Global SMS](https://console.cloud.tencent.com/smsv2/isms-template) body template management page. If you need to send SMS messages to global mobile numbers, you can only use a Global SMS template.
     */
    public $TemplateId;

    /**
     * @var string Content of the SMS signature, which should be encoded in UTF-8. You must enter an approved signature, such as Tencent Cloud. The signature information can be viewed on the [Mainland China SMS](https://console.cloud.tencent.com/smsv2/csms-sign) or [Global SMS](https://console.cloud.tencent.com/smsv2/isms-sign) signature management page.
<dx-alert infotype="notice" title="Note">This parameter is required for Mainland China SMS.</dx-alert>
     */
    public $SignName;

    /**
     * @var array Template parameter. If there is no template parameter, leave this field empty.
<dx-alert infotype="notice" title="Note">The number of template parameters should be consistent with that of the template variables of `TemplateId`.</dx-alert>
     */
    public $TemplateParamSet;

    /**
     * @var string SMS code number extension, which is not activated by default. If you need to activate it, you can contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
     */
    public $ExtendCode;

    /**
     * @var string User session content, which can carry context information such as user-side ID and will be returned as-is by the server.
     */
    public $SessionContext;

    /**
     * @var string This parameter is not required for Mainland China SMS. For Global SMS, if you have applied for a separate `SenderId`, this parameter is required. By default, the public `SenderId` is used, in which case you don't need to enter this parameter.
Note: if your monthly usage reaches the specified threshold, you can apply for an independent `SenderId`. For more information, contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
     */
    public $SenderId;

    /**
     * @param array $PhoneNumberSet Target mobile number in E.164 format (+[country/region code][subscriber number]). Up to 200 numbers, all of which should be either Chinese mainland numbers or international numbers, are supported in a single request.
Take the number +8613711112222 as an example. “86” is the country code (with a “+” sign in its front) and “13711112222” is the subscriber number.
Note: 11-digit Chinese mainland numbers prefixed by 0086 or 86 or those without any country/region code are also supported. The default prefix is +86.
     * @param string $SmsSdkAppId The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 1400006666.
     * @param string $TemplateId Template ID. You must enter the ID of an approved template, which can be viewed on the [Mainland China SMS](https://console.cloud.tencent.com/smsv2/csms-template) or [Global SMS](https://console.cloud.tencent.com/smsv2/isms-template) body template management page. If you need to send SMS messages to global mobile numbers, you can only use a Global SMS template.
     * @param string $SignName Content of the SMS signature, which should be encoded in UTF-8. You must enter an approved signature, such as Tencent Cloud. The signature information can be viewed on the [Mainland China SMS](https://console.cloud.tencent.com/smsv2/csms-sign) or [Global SMS](https://console.cloud.tencent.com/smsv2/isms-sign) signature management page.
<dx-alert infotype="notice" title="Note">This parameter is required for Mainland China SMS.</dx-alert>
     * @param array $TemplateParamSet Template parameter. If there is no template parameter, leave this field empty.
<dx-alert infotype="notice" title="Note">The number of template parameters should be consistent with that of the template variables of `TemplateId`.</dx-alert>
     * @param string $ExtendCode SMS code number extension, which is not activated by default. If you need to activate it, you can contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
     * @param string $SessionContext User session content, which can carry context information such as user-side ID and will be returned as-is by the server.
     * @param string $SenderId This parameter is not required for Mainland China SMS. For Global SMS, if you have applied for a separate `SenderId`, this parameter is required. By default, the public `SenderId` is used, in which case you don't need to enter this parameter.
Note: if your monthly usage reaches the specified threshold, you can apply for an independent `SenderId`. For more information, contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
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
        if (array_key_exists("PhoneNumberSet",$param) and $param["PhoneNumberSet"] !== null) {
            $this->PhoneNumberSet = $param["PhoneNumberSet"];
        }

        if (array_key_exists("SmsSdkAppId",$param) and $param["SmsSdkAppId"] !== null) {
            $this->SmsSdkAppId = $param["SmsSdkAppId"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("SignName",$param) and $param["SignName"] !== null) {
            $this->SignName = $param["SignName"];
        }

        if (array_key_exists("TemplateParamSet",$param) and $param["TemplateParamSet"] !== null) {
            $this->TemplateParamSet = $param["TemplateParamSet"];
        }

        if (array_key_exists("ExtendCode",$param) and $param["ExtendCode"] !== null) {
            $this->ExtendCode = $param["ExtendCode"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SenderId",$param) and $param["SenderId"] !== null) {
            $this->SenderId = $param["SenderId"];
        }
    }
}
