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
 * ReportConversion request structure.
 *
 * @method string getSmsSdkAppId() Obtain The SMS SdkAppId generated after an application is created in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as “1400006666”.
 * @method void setSmsSdkAppId(string $SmsSdkAppId) Set The SMS SdkAppId generated after an application is created in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as “1400006666”.
 * @method string getSerialNo() Obtain The serial number returned for a message sent.
 * @method void setSerialNo(string $SerialNo) Set The serial number returned for a message sent.
 * @method integer getConversionTime() Obtain The recipient’s reply time in seconds in the format of UNIX timestamp.
 * @method void setConversionTime(integer $ConversionTime) Set The recipient’s reply time in seconds in the format of UNIX timestamp.
 */
class ReportConversionRequest extends AbstractModel
{
    /**
     * @var string The SMS SdkAppId generated after an application is created in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as “1400006666”.
     */
    public $SmsSdkAppId;

    /**
     * @var string The serial number returned for a message sent.
     */
    public $SerialNo;

    /**
     * @var integer The recipient’s reply time in seconds in the format of UNIX timestamp.
     */
    public $ConversionTime;

    /**
     * @param string $SmsSdkAppId The SMS SdkAppId generated after an application is created in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as “1400006666”.
     * @param string $SerialNo The serial number returned for a message sent.
     * @param integer $ConversionTime The recipient’s reply time in seconds in the format of UNIX timestamp.
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
        if (array_key_exists("SmsSdkAppId",$param) and $param["SmsSdkAppId"] !== null) {
            $this->SmsSdkAppId = $param["SmsSdkAppId"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("ConversionTime",$param) and $param["ConversionTime"] !== null) {
            $this->ConversionTime = $param["ConversionTime"];
        }
    }
}
