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
 * PullSmsSendStatusByPhoneNumber request structure.
 *
 * @method integer getBeginTime() Obtain Pull start time in seconds in the format of UNIX timestamp.
Note: the data for the last 7 days can be pulled at most.
 * @method void setBeginTime(integer $BeginTime) Set Pull start time in seconds in the format of UNIX timestamp.
Note: the data for the last 7 days can be pulled at most.
 * @method integer getOffset() Obtain Offset.
Note: this parameter is currently fixed at 0.
 * @method void setOffset(integer $Offset) Set Offset.
Note: this parameter is currently fixed at 0.
 * @method integer getLimit() Obtain Maximum number of pulled entries. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of pulled entries. Maximum value: 100.
 * @method string getPhoneNumber() Obtain Target mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method void setPhoneNumber(string $PhoneNumber) Set Target mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
 * @method string getSmsSdkAppId() Obtain The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 1400006666.
 * @method void setSmsSdkAppId(string $SmsSdkAppId) Set The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 1400006666.
 * @method integer getEndTime() Obtain Pull end time in seconds in the format of UNIX timestamp.
 * @method void setEndTime(integer $EndTime) Set Pull end time in seconds in the format of UNIX timestamp.
 */
class PullSmsSendStatusByPhoneNumberRequest extends AbstractModel
{
    /**
     * @var integer Pull start time in seconds in the format of UNIX timestamp.
Note: the data for the last 7 days can be pulled at most.
     */
    public $BeginTime;

    /**
     * @var integer Offset.
Note: this parameter is currently fixed at 0.
     */
    public $Offset;

    /**
     * @var integer Maximum number of pulled entries. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Target mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     */
    public $PhoneNumber;

    /**
     * @var string The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 1400006666.
     */
    public $SmsSdkAppId;

    /**
     * @var integer Pull end time in seconds in the format of UNIX timestamp.
     */
    public $EndTime;

    /**
     * @param integer $BeginTime Pull start time in seconds in the format of UNIX timestamp.
Note: the data for the last 7 days can be pulled at most.
     * @param integer $Offset Offset.
Note: this parameter is currently fixed at 0.
     * @param integer $Limit Maximum number of pulled entries. Maximum value: 100.
     * @param string $PhoneNumber Target mobile number in the E.164 standard (+[country/region code][mobile number]), such as +8613711112222, which has a + sign followed by 86 (country/region code) and then by 13711112222 (mobile number).
     * @param string $SmsSdkAppId The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 1400006666.
     * @param integer $EndTime Pull end time in seconds in the format of UNIX timestamp.
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("SmsSdkAppId",$param) and $param["SmsSdkAppId"] !== null) {
            $this->SmsSdkAppId = $param["SmsSdkAppId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
