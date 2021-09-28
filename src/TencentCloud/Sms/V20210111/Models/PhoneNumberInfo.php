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
 * Mobile number information.
 *
 * @method string getCode() Obtain Error code for mobile number information query. `Ok` will be returned if the query is successful.
 * @method void setCode(string $Code) Set Error code for mobile number information query. `Ok` will be returned if the query is successful.
 * @method string getMessage() Obtain Description of the error code for mobile number information query.
 * @method void setMessage(string $Message) Set Description of the error code for mobile number information query.
 * @method string getNationCode() Obtain Country (or region) code.
 * @method void setNationCode(string $NationCode) Set Country (or region) code.
 * @method string getSubscriberNumber() Obtain Subscriber number in normal format such as 13711112222, without any prefix (country or region code).
 * @method void setSubscriberNumber(string $SubscriberNumber) Set Subscriber number in normal format such as 13711112222, without any prefix (country or region code).
 * @method string getPhoneNumber() Obtain The standardized mobile number in E.164 format after parsing, which is consistent with the parsed number for SMS message delivery. If the parsing fails, the original number will be returned.
 * @method void setPhoneNumber(string $PhoneNumber) Set The standardized mobile number in E.164 format after parsing, which is consistent with the parsed number for SMS message delivery. If the parsing fails, the original number will be returned.
 * @method string getIsoCode() Obtain Country or region code such as CN and US. If the country or region code cannot be identified, `DEF` will be returned by default.
 * @method void setIsoCode(string $IsoCode) Set Country or region code such as CN and US. If the country or region code cannot be identified, `DEF` will be returned by default.
 * @method string getIsoName() Obtain Country code or region name such as China. For more information, see [Global SMS Price Overview](https://intl.cloud.tencent.com/document/product/382/18051?from_cn_redirect=1#.E6.97.A5.E7.BB.93.E5.90.8E.E4.BB.98.E8.B4.B9.3Ca-id.3D.22post-payment.22.3E.3C.2Fa.3E)
 * @method void setIsoName(string $IsoName) Set Country code or region name such as China. For more information, see [Global SMS Price Overview](https://intl.cloud.tencent.com/document/product/382/18051?from_cn_redirect=1#.E6.97.A5.E7.BB.93.E5.90.8E.E4.BB.98.E8.B4.B9.3Ca-id.3D.22post-payment.22.3E.3C.2Fa.3E)
 */
class PhoneNumberInfo extends AbstractModel
{
    /**
     * @var string Error code for mobile number information query. `Ok` will be returned if the query is successful.
     */
    public $Code;

    /**
     * @var string Description of the error code for mobile number information query.
     */
    public $Message;

    /**
     * @var string Country (or region) code.
     */
    public $NationCode;

    /**
     * @var string Subscriber number in normal format such as 13711112222, without any prefix (country or region code).
     */
    public $SubscriberNumber;

    /**
     * @var string The standardized mobile number in E.164 format after parsing, which is consistent with the parsed number for SMS message delivery. If the parsing fails, the original number will be returned.
     */
    public $PhoneNumber;

    /**
     * @var string Country or region code such as CN and US. If the country or region code cannot be identified, `DEF` will be returned by default.
     */
    public $IsoCode;

    /**
     * @var string Country code or region name such as China. For more information, see [Global SMS Price Overview](https://intl.cloud.tencent.com/document/product/382/18051?from_cn_redirect=1#.E6.97.A5.E7.BB.93.E5.90.8E.E4.BB.98.E8.B4.B9.3Ca-id.3D.22post-payment.22.3E.3C.2Fa.3E)
     */
    public $IsoName;

    /**
     * @param string $Code Error code for mobile number information query. `Ok` will be returned if the query is successful.
     * @param string $Message Description of the error code for mobile number information query.
     * @param string $NationCode Country (or region) code.
     * @param string $SubscriberNumber Subscriber number in normal format such as 13711112222, without any prefix (country or region code).
     * @param string $PhoneNumber The standardized mobile number in E.164 format after parsing, which is consistent with the parsed number for SMS message delivery. If the parsing fails, the original number will be returned.
     * @param string $IsoCode Country or region code such as CN and US. If the country or region code cannot be identified, `DEF` will be returned by default.
     * @param string $IsoName Country code or region name such as China. For more information, see [Global SMS Price Overview](https://intl.cloud.tencent.com/document/product/382/18051?from_cn_redirect=1#.E6.97.A5.E7.BB.93.E5.90.8E.E4.BB.98.E8.B4.B9.3Ca-id.3D.22post-payment.22.3E.3C.2Fa.3E)
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("NationCode",$param) and $param["NationCode"] !== null) {
            $this->NationCode = $param["NationCode"];
        }

        if (array_key_exists("SubscriberNumber",$param) and $param["SubscriberNumber"] !== null) {
            $this->SubscriberNumber = $param["SubscriberNumber"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("IsoCode",$param) and $param["IsoCode"] !== null) {
            $this->IsoCode = $param["IsoCode"];
        }

        if (array_key_exists("IsoName",$param) and $param["IsoName"] !== null) {
            $this->IsoName = $param["IsoName"];
        }
    }
}
