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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendSms request structure.
 *
 * @method array getPhoneNumberSet() Obtain Target mobile number in the e.164 standard in the format of +[country/region code][mobile number]. Up to 200 mobile numbers are supported in one request (which should be all Mainland China mobile numbers or all global mobile numbers).
Example: +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method void setPhoneNumberSet(array $PhoneNumberSet) Set Target mobile number in the e.164 standard in the format of +[country/region code][mobile number]. Up to 200 mobile numbers are supported in one request (which should be all Mainland China mobile numbers or all global mobile numbers).
Example: +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method string getTemplateID() Obtain Template ID. You must enter the ID of an approved template, which can be viewed in the [SMS Console](https://console.cloud.tencent.com/sms/smslist).
 * @method void setTemplateID(string $TemplateID) Set Template ID. You must enter the ID of an approved template, which can be viewed in the [SMS Console](https://console.cloud.tencent.com/sms/smslist).
 * @method string getSmsSdkAppid() Obtain SMS `SdkAppid` actually generated after an application is added in the [SMS Console](https://console.cloud.tencent.com/sms/smslist), such as 1400006666.
 * @method void setSmsSdkAppid(string $SmsSdkAppid) Set SMS `SdkAppid` actually generated after an application is added in the [SMS Console](https://console.cloud.tencent.com/sms/smslist), such as 1400006666.
 * @method string getSign() Obtain The content of SMS signature should be encoded in UTF-8. You must enter an approved signature, which can be viewed in the [SMS Console](https://console.cloud.tencent.com/sms/smslist). Note: this parameter is required for Mainland China SMS.
 * @method void setSign(string $Sign) Set The content of SMS signature should be encoded in UTF-8. You must enter an approved signature, which can be viewed in the [SMS Console](https://console.cloud.tencent.com/sms/smslist). Note: this parameter is required for Mainland China SMS.
 * @method array getTemplateParamSet() Obtain Template parameter. If there is no template parameter, leave this parameter blank.
 * @method void setTemplateParamSet(array $TemplateParamSet) Set Template parameter. If there is no template parameter, leave this parameter blank.
 * @method string getExtendCode() Obtain SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1).
 * @method void setExtendCode(string $ExtendCode) Set SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1).
 * @method string getSessionContext() Obtain User session content, which can carry context information such as user-side ID and will be returned as-is by the server.
 * @method void setSessionContext(string $SessionContext) Set User session content, which can carry context information such as user-side ID and will be returned as-is by the server.
 * @method string getSenderId() Obtain `senderid` for Global SMS, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1) for assistance. This parameter should be empty for Mainland China SMS.
 * @method void setSenderId(string $SenderId) Set `senderid` for Global SMS, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1) for assistance. This parameter should be empty for Mainland China SMS.
 */
class SendSmsRequest extends AbstractModel
{
    /**
     * @var array Target mobile number in the e.164 standard in the format of +[country/region code][mobile number]. Up to 200 mobile numbers are supported in one request (which should be all Mainland China mobile numbers or all global mobile numbers).
Example: +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     */
    public $PhoneNumberSet;

    /**
     * @var string Template ID. You must enter the ID of an approved template, which can be viewed in the [SMS Console](https://console.cloud.tencent.com/sms/smslist).
     */
    public $TemplateID;

    /**
     * @var string SMS `SdkAppid` actually generated after an application is added in the [SMS Console](https://console.cloud.tencent.com/sms/smslist), such as 1400006666.
     */
    public $SmsSdkAppid;

    /**
     * @var string The content of SMS signature should be encoded in UTF-8. You must enter an approved signature, which can be viewed in the [SMS Console](https://console.cloud.tencent.com/sms/smslist). Note: this parameter is required for Mainland China SMS.
     */
    public $Sign;

    /**
     * @var array Template parameter. If there is no template parameter, leave this parameter blank.
     */
    public $TemplateParamSet;

    /**
     * @var string SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1).
     */
    public $ExtendCode;

    /**
     * @var string User session content, which can carry context information such as user-side ID and will be returned as-is by the server.
     */
    public $SessionContext;

    /**
     * @var string `senderid` for Global SMS, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1) for assistance. This parameter should be empty for Mainland China SMS.
     */
    public $SenderId;

    /**
     * @param array $PhoneNumberSet Target mobile number in the e.164 standard in the format of +[country/region code][mobile number]. Up to 200 mobile numbers are supported in one request (which should be all Mainland China mobile numbers or all global mobile numbers).
Example: +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     * @param string $TemplateID Template ID. You must enter the ID of an approved template, which can be viewed in the [SMS Console](https://console.cloud.tencent.com/sms/smslist).
     * @param string $SmsSdkAppid SMS `SdkAppid` actually generated after an application is added in the [SMS Console](https://console.cloud.tencent.com/sms/smslist), such as 1400006666.
     * @param string $Sign The content of SMS signature should be encoded in UTF-8. You must enter an approved signature, which can be viewed in the [SMS Console](https://console.cloud.tencent.com/sms/smslist). Note: this parameter is required for Mainland China SMS.
     * @param array $TemplateParamSet Template parameter. If there is no template parameter, leave this parameter blank.
     * @param string $ExtendCode SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1).
     * @param string $SessionContext User session content, which can carry context information such as user-side ID and will be returned as-is by the server.
     * @param string $SenderId `senderid` for Global SMS, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1) for assistance. This parameter should be empty for Mainland China SMS.
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

        if (array_key_exists("TemplateID",$param) and $param["TemplateID"] !== null) {
            $this->TemplateID = $param["TemplateID"];
        }

        if (array_key_exists("SmsSdkAppid",$param) and $param["SmsSdkAppid"] !== null) {
            $this->SmsSdkAppid = $param["SmsSdkAppid"];
        }

        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
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
