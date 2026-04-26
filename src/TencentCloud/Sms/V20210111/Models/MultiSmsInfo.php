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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SMS information for each phone number in a batch delivery.
 *
 * @method string getPhoneNumber() Obtain Target mobile number in the E.164 standard in the format of +[country/region code][mobile number]. Up to 200 mobile numbers are supported in one request (which should be all global mobile numbers). For example, +60198890000, which has a + sign followed by 60 (country/region code) and then by 198890000 (mobile number).
 * @method void setPhoneNumber(string $PhoneNumber) Set Target mobile number in the E.164 standard in the format of +[country/region code][mobile number]. Up to 200 mobile numbers are supported in one request (which should be all global mobile numbers). For example, +60198890000, which has a + sign followed by 60 (country/region code) and then by 198890000 (mobile number).
 * @method string getTemplateId() Obtain Template ID, which can be viewed on the **Body Templates** page in [Global SMS](https://console.cloud.tencent.com/smsv2/isms-template). You must enter the ID of an approved template.
 * @method void setTemplateId(string $TemplateId) Set Template ID, which can be viewed on the **Body Templates** page in [Global SMS](https://console.cloud.tencent.com/smsv2/isms-template). You must enter the ID of an approved template.
 * @method array getTemplateParamSet() Obtain Template parameter. If there is no template parameter, leave this field empty.
<dx-alert infotype="notice" title="Note">The number of template parameters should be consistent with that of the template variables of `TemplateId`.</dx-alert>
 * @method void setTemplateParamSet(array $TemplateParamSet) Set Template parameter. If there is no template parameter, leave this field empty.
<dx-alert infotype="notice" title="Note">The number of template parameters should be consistent with that of the template variables of `TemplateId`.</dx-alert>
 * @method string getSenderId() Obtain Sender ID for Global SMS. For detail, please refer to the [Sender ID](https://www.tencentcloud.com/document/product/382/58270) Guidelines.
Note: This parameter applies solely to Global SMS. If you do not require a dedicated Sender ID, the public Sender ID will be used by default, and this parameter may be left blank.
Example: Qsms
 * @method void setSenderId(string $SenderId) Set Sender ID for Global SMS. For detail, please refer to the [Sender ID](https://www.tencentcloud.com/document/product/382/58270) Guidelines.
Note: This parameter applies solely to Global SMS. If you do not require a dedicated Sender ID, the public Sender ID will be used by default, and this parameter may be left blank.
Example: Qsms
 * @method string getSessionContext() Obtain User session content, which can carry context information such as user-side ID and will be returned as-is by the server. Note that the length must be less than 512 bytes.
 * @method void setSessionContext(string $SessionContext) Set User session content, which can carry context information such as user-side ID and will be returned as-is by the server. Note that the length must be less than 512 bytes.
 */
class MultiSmsInfo extends AbstractModel
{
    /**
     * @var string Target mobile number in the E.164 standard in the format of +[country/region code][mobile number]. Up to 200 mobile numbers are supported in one request (which should be all global mobile numbers). For example, +60198890000, which has a + sign followed by 60 (country/region code) and then by 198890000 (mobile number).
     */
    public $PhoneNumber;

    /**
     * @var string Template ID, which can be viewed on the **Body Templates** page in [Global SMS](https://console.cloud.tencent.com/smsv2/isms-template). You must enter the ID of an approved template.
     */
    public $TemplateId;

    /**
     * @var array Template parameter. If there is no template parameter, leave this field empty.
<dx-alert infotype="notice" title="Note">The number of template parameters should be consistent with that of the template variables of `TemplateId`.</dx-alert>
     */
    public $TemplateParamSet;

    /**
     * @var string Sender ID for Global SMS. For detail, please refer to the [Sender ID](https://www.tencentcloud.com/document/product/382/58270) Guidelines.
Note: This parameter applies solely to Global SMS. If you do not require a dedicated Sender ID, the public Sender ID will be used by default, and this parameter may be left blank.
Example: Qsms
     */
    public $SenderId;

    /**
     * @var string User session content, which can carry context information such as user-side ID and will be returned as-is by the server. Note that the length must be less than 512 bytes.
     */
    public $SessionContext;

    /**
     * @param string $PhoneNumber Target mobile number in the E.164 standard in the format of +[country/region code][mobile number]. Up to 200 mobile numbers are supported in one request (which should be all global mobile numbers). For example, +60198890000, which has a + sign followed by 60 (country/region code) and then by 198890000 (mobile number).
     * @param string $TemplateId Template ID, which can be viewed on the **Body Templates** page in [Global SMS](https://console.cloud.tencent.com/smsv2/isms-template). You must enter the ID of an approved template.
     * @param array $TemplateParamSet Template parameter. If there is no template parameter, leave this field empty.
<dx-alert infotype="notice" title="Note">The number of template parameters should be consistent with that of the template variables of `TemplateId`.</dx-alert>
     * @param string $SenderId Sender ID for Global SMS. For detail, please refer to the [Sender ID](https://www.tencentcloud.com/document/product/382/58270) Guidelines.
Note: This parameter applies solely to Global SMS. If you do not require a dedicated Sender ID, the public Sender ID will be used by default, and this parameter may be left blank.
Example: Qsms
     * @param string $SessionContext User session content, which can carry context information such as user-side ID and will be returned as-is by the server. Note that the length must be less than 512 bytes.
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
        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateParamSet",$param) and $param["TemplateParamSet"] !== null) {
            $this->TemplateParamSet = $param["TemplateParamSet"];
        }

        if (array_key_exists("SenderId",$param) and $param["SenderId"] !== null) {
            $this->SenderId = $param["SenderId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
