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
 * SMS reply status
 *
 * @method string getExtendCode() Obtain SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
 * @method void setExtendCode(string $ExtendCode) Set SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
 * @method string getCountryCode() Obtain Country (or region) code.
 * @method void setCountryCode(string $CountryCode) Set Country (or region) code.
 * @method string getPhoneNumber() Obtain Mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method void setPhoneNumber(string $PhoneNumber) Set Mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method string getSignName() Obtain SMS signature name.
 * @method void setSignName(string $SignName) Set SMS signature name.
 * @method string getReplyContent() Obtain User reply.
 * @method void setReplyContent(string $ReplyContent) Set User reply.
 * @method integer getReplyTime() Obtain Reply time in seconds in the format of UNIX timestamp.
 * @method void setReplyTime(integer $ReplyTime) Set Reply time in seconds in the format of UNIX timestamp.
 * @method string getSubscriberNumber() Obtain User's mobile number in a common format such as 13711112222.
 * @method void setSubscriberNumber(string $SubscriberNumber) Set User's mobile number in a common format such as 13711112222.
 */
class PullSmsReplyStatus extends AbstractModel
{
    /**
     * @var string SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
     */
    public $ExtendCode;

    /**
     * @var string Country (or region) code.
     */
    public $CountryCode;

    /**
     * @var string Mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     */
    public $PhoneNumber;

    /**
     * @var string SMS signature name.
     */
    public $SignName;

    /**
     * @var string User reply.
     */
    public $ReplyContent;

    /**
     * @var integer Reply time in seconds in the format of UNIX timestamp.
     */
    public $ReplyTime;

    /**
     * @var string User's mobile number in a common format such as 13711112222.
     */
    public $SubscriberNumber;

    /**
     * @param string $ExtendCode SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
     * @param string $CountryCode Country (or region) code.
     * @param string $PhoneNumber Mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     * @param string $SignName SMS signature name.
     * @param string $ReplyContent User reply.
     * @param integer $ReplyTime Reply time in seconds in the format of UNIX timestamp.
     * @param string $SubscriberNumber User's mobile number in a common format such as 13711112222.
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
        if (array_key_exists("ExtendCode",$param) and $param["ExtendCode"] !== null) {
            $this->ExtendCode = $param["ExtendCode"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("SignName",$param) and $param["SignName"] !== null) {
            $this->SignName = $param["SignName"];
        }

        if (array_key_exists("ReplyContent",$param) and $param["ReplyContent"] !== null) {
            $this->ReplyContent = $param["ReplyContent"];
        }

        if (array_key_exists("ReplyTime",$param) and $param["ReplyTime"] !== null) {
            $this->ReplyTime = $param["ReplyTime"];
        }

        if (array_key_exists("SubscriberNumber",$param) and $param["SubscriberNumber"] !== null) {
            $this->SubscriberNumber = $param["SubscriberNumber"];
        }
    }
}
