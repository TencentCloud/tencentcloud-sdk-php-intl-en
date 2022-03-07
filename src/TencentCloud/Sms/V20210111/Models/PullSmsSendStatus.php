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
 * SMS delivery status details
 *
 * @method integer getUserReceiveTime() Obtain Actual time of SMS receipt by user in seconds in the format of UNIX timestamp.
 * @method void setUserReceiveTime(integer $UserReceiveTime) Set Actual time of SMS receipt by user in seconds in the format of UNIX timestamp.
 * @method string getCountryCode() Obtain Country (or region) code.
 * @method void setCountryCode(string $CountryCode) Set Country (or region) code.
 * @method string getSubscriberNumber() Obtain User's mobile number in a common format such as 13711112222.
 * @method void setSubscriberNumber(string $SubscriberNumber) Set User's mobile number in a common format such as 13711112222.
 * @method string getPhoneNumber() Obtain Mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method void setPhoneNumber(string $PhoneNumber) Set Mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method string getSerialNo() Obtain ID of the current delivery.
 * @method void setSerialNo(string $SerialNo) Set ID of the current delivery.
 * @method string getReportStatus() Obtain Whether the SMS message is actually received. Valid values: SUCCESS (success), FAIL (failure).
 * @method void setReportStatus(string $ReportStatus) Set Whether the SMS message is actually received. Valid values: SUCCESS (success), FAIL (failure).
 * @method string getDescription() Obtain Description of SMS receipt by user.
 * @method void setDescription(string $Description) Set Description of SMS receipt by user.
 * @method string getSessionContext() Obtain User session content, which is the same as the `SessionContext` in the request and is empty by default. If you need to activate it, contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionContext(string $SessionContext) Set User session content, which is the same as the `SessionContext` in the request and is empty by default. If you need to activate it, contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PullSmsSendStatus extends AbstractModel
{
    /**
     * @var integer Actual time of SMS receipt by user in seconds in the format of UNIX timestamp.
     */
    public $UserReceiveTime;

    /**
     * @var string Country (or region) code.
     */
    public $CountryCode;

    /**
     * @var string User's mobile number in a common format such as 13711112222.
     */
    public $SubscriberNumber;

    /**
     * @var string Mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     */
    public $PhoneNumber;

    /**
     * @var string ID of the current delivery.
     */
    public $SerialNo;

    /**
     * @var string Whether the SMS message is actually received. Valid values: SUCCESS (success), FAIL (failure).
     */
    public $ReportStatus;

    /**
     * @var string Description of SMS receipt by user.
     */
    public $Description;

    /**
     * @var string User session content, which is the same as the `SessionContext` in the request and is empty by default. If you need to activate it, contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionContext;

    /**
     * @param integer $UserReceiveTime Actual time of SMS receipt by user in seconds in the format of UNIX timestamp.
     * @param string $CountryCode Country (or region) code.
     * @param string $SubscriberNumber User's mobile number in a common format such as 13711112222.
     * @param string $PhoneNumber Mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     * @param string $SerialNo ID of the current delivery.
     * @param string $ReportStatus Whether the SMS message is actually received. Valid values: SUCCESS (success), FAIL (failure).
     * @param string $Description Description of SMS receipt by user.
     * @param string $SessionContext User session content, which is the same as the `SessionContext` in the request and is empty by default. If you need to activate it, contact [SMS Helper](https://intl.cloud.tencent.com/document/product/382/3773?from_cn_redirect=1#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81).
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("UserReceiveTime",$param) and $param["UserReceiveTime"] !== null) {
            $this->UserReceiveTime = $param["UserReceiveTime"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("SubscriberNumber",$param) and $param["SubscriberNumber"] !== null) {
            $this->SubscriberNumber = $param["SubscriberNumber"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("ReportStatus",$param) and $param["ReportStatus"] !== null) {
            $this->ReportStatus = $param["ReportStatus"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
