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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextModeration request structure.
 *
 * @method string getContent() Obtain This field indicates the text content of the object to be moderated. The text needs to be encoded in utf-8 format and encrypted with Base64. It can contain up to 10,000 characters, calculated by unicode encoding.
 * @method void setContent(string $Content) Set This field indicates the text content of the object to be moderated. The text needs to be encoded in utf-8 format and encrypted with Base64. It can contain up to 10,000 characters, calculated by unicode encoding.
 * @method string getBizType() Obtain This field indicates the specific policy number, which is used for the API call and can be configured in the CMS console. If it's not entered (left empty), the default moderation policy is adopted. If it's entered, the moderation policies are specified for business scenarios. <br>Note: Biztype contains 3 to 32 characters, including numbers, letters and underscores only. Different Biztypes are associated with different business scenarios and moderation policies. Ensure that you use the Biztype corresponding to the policy you want to apply.
 * @method void setBizType(string $BizType) Set This field indicates the specific policy number, which is used for the API call and can be configured in the CMS console. If it's not entered (left empty), the default moderation policy is adopted. If it's entered, the moderation policies are specified for business scenarios. <br>Note: Biztype contains 3 to 32 characters, including numbers, letters and underscores only. Different Biztypes are associated with different business scenarios and moderation policies. Ensure that you use the Biztype corresponding to the policy you want to apply.
 * @method string getDataId() Obtain This field indicates the data ID you assigned to the object to be moderated, which is convenient for you to identify and manage the file. <br>Value: this field can contain **up to 64 characters**, including uppercase and lowercase letters, numbers and four special symbols (_, -, @, #)
 * @method void setDataId(string $DataId) Set This field indicates the data ID you assigned to the object to be moderated, which is convenient for you to identify and manage the file. <br>Value: this field can contain **up to 64 characters**, including uppercase and lowercase letters, numbers and four special symbols (_, -, @, #)
 * @method User getUser() Obtain This field indicates the user information related with the object to be moderated, which can be used to identify violating users at risk.
 * @method void setUser(User $User) Set This field indicates the user information related with the object to be moderated, which can be used to identify violating users at risk.
 * @method Device getDevice() Obtain This field indicates the device information related with the object to be moderated, which can be used to identify violating devices at risk.
 * @method void setDevice(Device $Device) Set This field indicates the device information related with the object to be moderated, which can be used to identify violating devices at risk.
 * @method string getSourceLanguage() Obtain This field Indicates the original language of the content.The enumeration values are ("en", "zh", ""), where en means English, zh means Chinese, and an empty string means the default language is Chinese. It is recommended to enter "en" only when the language of the content is clearly "English".
 * @method void setSourceLanguage(string $SourceLanguage) Set This field Indicates the original language of the content.The enumeration values are ("en", "zh", ""), where en means English, zh means Chinese, and an empty string means the default language is Chinese. It is recommended to enter "en" only when the language of the content is clearly "English".
 */
class TextModerationRequest extends AbstractModel
{
    /**
     * @var string This field indicates the text content of the object to be moderated. The text needs to be encoded in utf-8 format and encrypted with Base64. It can contain up to 10,000 characters, calculated by unicode encoding.
     */
    public $Content;

    /**
     * @var string This field indicates the specific policy number, which is used for the API call and can be configured in the CMS console. If it's not entered (left empty), the default moderation policy is adopted. If it's entered, the moderation policies are specified for business scenarios. <br>Note: Biztype contains 3 to 32 characters, including numbers, letters and underscores only. Different Biztypes are associated with different business scenarios and moderation policies. Ensure that you use the Biztype corresponding to the policy you want to apply.
     */
    public $BizType;

    /**
     * @var string This field indicates the data ID you assigned to the object to be moderated, which is convenient for you to identify and manage the file. <br>Value: this field can contain **up to 64 characters**, including uppercase and lowercase letters, numbers and four special symbols (_, -, @, #)
     */
    public $DataId;

    /**
     * @var User This field indicates the user information related with the object to be moderated, which can be used to identify violating users at risk.
     */
    public $User;

    /**
     * @var Device This field indicates the device information related with the object to be moderated, which can be used to identify violating devices at risk.
     */
    public $Device;

    /**
     * @var string This field Indicates the original language of the content.The enumeration values are ("en", "zh", ""), where en means English, zh means Chinese, and an empty string means the default language is Chinese. It is recommended to enter "en" only when the language of the content is clearly "English".
     */
    public $SourceLanguage;

    /**
     * @param string $Content This field indicates the text content of the object to be moderated. The text needs to be encoded in utf-8 format and encrypted with Base64. It can contain up to 10,000 characters, calculated by unicode encoding.
     * @param string $BizType This field indicates the specific policy number, which is used for the API call and can be configured in the CMS console. If it's not entered (left empty), the default moderation policy is adopted. If it's entered, the moderation policies are specified for business scenarios. <br>Note: Biztype contains 3 to 32 characters, including numbers, letters and underscores only. Different Biztypes are associated with different business scenarios and moderation policies. Ensure that you use the Biztype corresponding to the policy you want to apply.
     * @param string $DataId This field indicates the data ID you assigned to the object to be moderated, which is convenient for you to identify and manage the file. <br>Value: this field can contain **up to 64 characters**, including uppercase and lowercase letters, numbers and four special symbols (_, -, @, #)
     * @param User $User This field indicates the user information related with the object to be moderated, which can be used to identify violating users at risk.
     * @param Device $Device This field indicates the device information related with the object to be moderated, which can be used to identify violating devices at risk.
     * @param string $SourceLanguage This field Indicates the original language of the content.The enumeration values are ("en", "zh", ""), where en means English, zh means Chinese, and an empty string means the default language is Chinese. It is recommended to enter "en" only when the language of the content is clearly "English".
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new User();
            $this->User->deserialize($param["User"]);
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = new Device();
            $this->Device->deserialize($param["Device"]);
        }

        if (array_key_exists("SourceLanguage",$param) and $param["SourceLanguage"] !== null) {
            $this->SourceLanguage = $param["SourceLanguage"];
        }
    }
}
