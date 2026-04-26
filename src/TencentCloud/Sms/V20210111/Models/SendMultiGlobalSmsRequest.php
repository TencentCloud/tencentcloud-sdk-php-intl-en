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
 * SendMultiGlobalSms request structure.
 *
 * @method string getSmsSdkAppId() Obtain The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 2400006666.
 * @method void setSmsSdkAppId(string $SmsSdkAppId) Set The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 2400006666.
 * @method array getMultiSmsInfoSet() Obtain Multi SMS information list. Up to 200 phone numbers are supported in one request, which should be all Global SMS numbers. Each element contains a phone number and its corresponding template, template parameters, and other information.
 * @method void setMultiSmsInfoSet(array $MultiSmsInfoSet) Set Multi SMS information list. Up to 200 phone numbers are supported in one request, which should be all Global SMS numbers. Each element contains a phone number and its corresponding template, template parameters, and other information.
 */
class SendMultiGlobalSmsRequest extends AbstractModel
{
    /**
     * @var string The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 2400006666.
     */
    public $SmsSdkAppId;

    /**
     * @var array Multi SMS information list. Up to 200 phone numbers are supported in one request, which should be all Global SMS numbers. Each element contains a phone number and its corresponding template, template parameters, and other information.
     */
    public $MultiSmsInfoSet;

    /**
     * @param string $SmsSdkAppId The SMS `SdkAppId` generated after an application is added in the [SMS console](https://console.cloud.tencent.com/smsv2/app-manage), such as 2400006666.
     * @param array $MultiSmsInfoSet Multi SMS information list. Up to 200 phone numbers are supported in one request, which should be all Global SMS numbers. Each element contains a phone number and its corresponding template, template parameters, and other information.
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

        if (array_key_exists("MultiSmsInfoSet",$param) and $param["MultiSmsInfoSet"] !== null) {
            $this->MultiSmsInfoSet = [];
            foreach ($param["MultiSmsInfoSet"] as $key => $value){
                $obj = new MultiSmsInfo();
                $obj->deserialize($value);
                array_push($this->MultiSmsInfoSet, $obj);
            }
        }
    }
}
