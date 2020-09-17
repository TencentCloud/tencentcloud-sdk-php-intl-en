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
 * SMS reply status
 *
 * @method string getExtendCode() Obtain SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1).
 * @method void setExtendCode(string $ExtendCode) Set SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1).
 * @method string getNationCode() Obtain Country (or region) code.
 * @method void setNationCode(string $NationCode) Set Country (or region) code.
 * @method string getPhoneNumber() Obtain Mobile number in the e.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method void setPhoneNumber(string $PhoneNumber) Set Mobile number in the e.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method string getSign() Obtain SMS signature.
 * @method void setSign(string $Sign) Set SMS signature.
 * @method string getReplyContent() Obtain User reply.
 * @method void setReplyContent(string $ReplyContent) Set User reply.
 * @method string getReplyTime() Obtain Reply time (e.g., 2019-10-08 17:18:37).
 * @method void setReplyTime(string $ReplyTime) Set Reply time (e.g., 2019-10-08 17:18:37).
 * @method integer getReplyUnixTime() Obtain Reply time in seconds in the format of UNIX timestamp.
 * @method void setReplyUnixTime(integer $ReplyUnixTime) Set Reply time in seconds in the format of UNIX timestamp.
 */
class PullSmsReplyStatus extends AbstractModel
{
    /**
     * @var string SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1).
     */
    public $ExtendCode;

    /**
     * @var string Country (or region) code.
     */
    public $NationCode;

    /**
     * @var string Mobile number in the e.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     */
    public $PhoneNumber;

    /**
     * @var string SMS signature.
     */
    public $Sign;

    /**
     * @var string User reply.
     */
    public $ReplyContent;

    /**
     * @var string Reply time (e.g., 2019-10-08 17:18:37).
     */
    public $ReplyTime;

    /**
     * @var integer Reply time in seconds in the format of UNIX timestamp.
     */
    public $ReplyUnixTime;

    /**
     * @param string $ExtendCode SMS code number extension, which is not activated by default. If you need to activate it, please contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1).
     * @param string $NationCode Country (or region) code.
     * @param string $PhoneNumber Mobile number in the e.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     * @param string $Sign SMS signature.
     * @param string $ReplyContent User reply.
     * @param string $ReplyTime Reply time (e.g., 2019-10-08 17:18:37).
     * @param integer $ReplyUnixTime Reply time in seconds in the format of UNIX timestamp.
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

        if (array_key_exists("NationCode",$param) and $param["NationCode"] !== null) {
            $this->NationCode = $param["NationCode"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }

        if (array_key_exists("ReplyContent",$param) and $param["ReplyContent"] !== null) {
            $this->ReplyContent = $param["ReplyContent"];
        }

        if (array_key_exists("ReplyTime",$param) and $param["ReplyTime"] !== null) {
            $this->ReplyTime = $param["ReplyTime"];
        }

        if (array_key_exists("ReplyUnixTime",$param) and $param["ReplyUnixTime"] !== null) {
            $this->ReplyUnixTime = $param["ReplyUnixTime"];
        }
    }
}
