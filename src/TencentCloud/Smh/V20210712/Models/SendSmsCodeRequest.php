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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendSmsCode request structure.
 *
 * @method string getPurpose() Obtain Captcha target, currently supported: rebind super administrator account, BindSuperAdmin; trial version business upgrade, ChannelUpdateVerify.
 * @method void setPurpose(string $Purpose) Set Captcha target, currently supported: rebind super administrator account, BindSuperAdmin; trial version business upgrade, ChannelUpdateVerify.
 * @method string getPhoneNumber() Obtain Specifies the mobile number as the super admin account.
 * @method void setPhoneNumber(string $PhoneNumber) Set Specifies the mobile number as the super admin account.
 * @method string getInstanceId() Obtain Official cloud disk instance ID.
 * @method void setInstanceId(string $InstanceId) Set Official cloud disk instance ID.
 * @method string getCountryCode() Obtain Specifies the country code of the mobile number that serves as the super administrator account. defaults to +86.
 * @method void setCountryCode(string $CountryCode) Set Specifies the country code of the mobile number that serves as the super administrator account. defaults to +86.
 */
class SendSmsCodeRequest extends AbstractModel
{
    /**
     * @var string Captcha target, currently supported: rebind super administrator account, BindSuperAdmin; trial version business upgrade, ChannelUpdateVerify.
     */
    public $Purpose;

    /**
     * @var string Specifies the mobile number as the super admin account.
     */
    public $PhoneNumber;

    /**
     * @var string Official cloud disk instance ID.
     */
    public $InstanceId;

    /**
     * @var string Specifies the country code of the mobile number that serves as the super administrator account. defaults to +86.
     */
    public $CountryCode;

    /**
     * @param string $Purpose Captcha target, currently supported: rebind super administrator account, BindSuperAdmin; trial version business upgrade, ChannelUpdateVerify.
     * @param string $PhoneNumber Specifies the mobile number as the super admin account.
     * @param string $InstanceId Official cloud disk instance ID.
     * @param string $CountryCode Specifies the country code of the mobile number that serves as the super administrator account. defaults to +86.
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
        if (array_key_exists("Purpose",$param) and $param["Purpose"] !== null) {
            $this->Purpose = $param["Purpose"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }
    }
}
