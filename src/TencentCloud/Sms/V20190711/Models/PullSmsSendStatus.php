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
 * SMS delivery status details
 *
 * @method string getUserReceiveTime() Obtain Actual time of SMS receipt by user.
 * @method void setUserReceiveTime(string $UserReceiveTime) Set Actual time of SMS receipt by user.
 * @method integer getUserReceiveUnixTime() Obtain Actual time of SMS receipt by user in seconds in the format of UNIX timestamp.
 * @method void setUserReceiveUnixTime(integer $UserReceiveUnixTime) Set Actual time of SMS receipt by user in seconds in the format of UNIX timestamp.
 * @method string getNationCode() Obtain Country (or region) code.
 * @method void setNationCode(string $NationCode) Set Country (or region) code.
 * @method string getPurePhoneNumber() Obtain Mobile number in the e.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method void setPurePhoneNumber(string $PurePhoneNumber) Set Mobile number in the e.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method string getPhoneNumber() Obtain Mobile number in a common format such as 13711112222.
 * @method void setPhoneNumber(string $PhoneNumber) Set Mobile number in a common format such as 13711112222.
 * @method string getSerialNo() Obtain ID of the current delivery.
 * @method void setSerialNo(string $SerialNo) Set ID of the current delivery.
 * @method string getReportStatus() Obtain Whether the SMS message is actually received. Valid values: SUCCESS (success), FAIL (failure).
 * @method void setReportStatus(string $ReportStatus) Set Whether the SMS message is actually received. Valid values: SUCCESS (success), FAIL (failure).
 * @method string getDescription() Obtain Description of SMS receipt by user.
 * @method void setDescription(string $Description) Set Description of SMS receipt by user.
 */
class PullSmsSendStatus extends AbstractModel
{
    /**
     * @var string Actual time of SMS receipt by user.
     */
    public $UserReceiveTime;

    /**
     * @var integer Actual time of SMS receipt by user in seconds in the format of UNIX timestamp.
     */
    public $UserReceiveUnixTime;

    /**
     * @var string Country (or region) code.
     */
    public $NationCode;

    /**
     * @var string Mobile number in the e.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     */
    public $PurePhoneNumber;

    /**
     * @var string Mobile number in a common format such as 13711112222.
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
     * @param string $UserReceiveTime Actual time of SMS receipt by user.
     * @param integer $UserReceiveUnixTime Actual time of SMS receipt by user in seconds in the format of UNIX timestamp.
     * @param string $NationCode Country (or region) code.
     * @param string $PurePhoneNumber Mobile number in the e.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     * @param string $PhoneNumber Mobile number in a common format such as 13711112222.
     * @param string $SerialNo ID of the current delivery.
     * @param string $ReportStatus Whether the SMS message is actually received. Valid values: SUCCESS (success), FAIL (failure).
     * @param string $Description Description of SMS receipt by user.
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

        if (array_key_exists("UserReceiveUnixTime",$param) and $param["UserReceiveUnixTime"] !== null) {
            $this->UserReceiveUnixTime = $param["UserReceiveUnixTime"];
        }

        if (array_key_exists("NationCode",$param) and $param["NationCode"] !== null) {
            $this->NationCode = $param["NationCode"];
        }

        if (array_key_exists("PurePhoneNumber",$param) and $param["PurePhoneNumber"] !== null) {
            $this->PurePhoneNumber = $param["PurePhoneNumber"];
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
    }
}
