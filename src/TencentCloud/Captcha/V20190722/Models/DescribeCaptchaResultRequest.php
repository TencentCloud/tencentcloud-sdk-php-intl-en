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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaResult request structure.
 *
 * @method integer getCaptchaType() Obtain It must be `9` here.
 * @method void setCaptchaType(integer $CaptchaType) Set It must be `9` here.
 * @method string getTicket() Obtain The user verification ticket returned by the frontend callback function
 * @method void setTicket(string $Ticket) Set The user verification ticket returned by the frontend callback function
 * @method string getUserIp() Obtain The user public IP obtained from the customer backend server
 * @method void setUserIp(string $UserIp) Set The user public IP obtained from the customer backend server
 * @method string getRandstr() Obtain A random string returned by the frontend callback function
 * @method void setRandstr(string $Randstr) Set A random string returned by the frontend callback function
 * @method integer getCaptchaAppId() Obtain CAPTCHA's app ID. Log in to the [Captcha console](https://console.cloud.tencent.com/captcha/graphical) and you can view the CaptchaAppId in the "Key" column of the CAPTCHA list.
 * @method void setCaptchaAppId(integer $CaptchaAppId) Set CAPTCHA's app ID. Log in to the [Captcha console](https://console.cloud.tencent.com/captcha/graphical) and you can view the CaptchaAppId in the "Key" column of the CAPTCHA list.
 * @method string getAppSecretKey() Obtain CAPTCHA's app key. Log in to the [Captcha console](https://console.cloud.tencent.com/captcha/graphical) and you can view the AppSecretKey in the "Key" column of the CAPTCHA list. AppSecretKey is the key for CAPTCHA ticket verification performed by the server. Please keep it confidential and do not disclose it to any third parties.
 * @method void setAppSecretKey(string $AppSecretKey) Set CAPTCHA's app key. Log in to the [Captcha console](https://console.cloud.tencent.com/captcha/graphical) and you can view the AppSecretKey in the "Key" column of the CAPTCHA list. AppSecretKey is the key for CAPTCHA ticket verification performed by the server. Please keep it confidential and do not disclose it to any third parties.
 * @method integer getBusinessId() Obtain Reserved field.
 * @method void setBusinessId(integer $BusinessId) Set Reserved field.
 * @method integer getSceneId() Obtain Reserved field.
 * @method void setSceneId(integer $SceneId) Set Reserved field.
 * @method string getMacAddress() Obtain MAC address or unique identifier of a device
 * @method void setMacAddress(string $MacAddress) Set MAC address or unique identifier of a device
 * @method string getImei() Obtain Mobile equipment identity number
 * @method void setImei(string $Imei) Set Mobile equipment identity number
 * @method integer getNeedGetCaptchaTime() Obtain Indicates whether to return the time when the frontend obtains the CAPTCHA. Valid values: 1 (return the time) and others.
 * @method void setNeedGetCaptchaTime(integer $NeedGetCaptchaTime) Set Indicates whether to return the time when the frontend obtains the CAPTCHA. Valid values: 1 (return the time) and others.
 */
class DescribeCaptchaResultRequest extends AbstractModel
{
    /**
     * @var integer It must be `9` here.
     */
    public $CaptchaType;

    /**
     * @var string The user verification ticket returned by the frontend callback function
     */
    public $Ticket;

    /**
     * @var string The user public IP obtained from the customer backend server
     */
    public $UserIp;

    /**
     * @var string A random string returned by the frontend callback function
     */
    public $Randstr;

    /**
     * @var integer CAPTCHA's app ID. Log in to the [Captcha console](https://console.cloud.tencent.com/captcha/graphical) and you can view the CaptchaAppId in the "Key" column of the CAPTCHA list.
     */
    public $CaptchaAppId;

    /**
     * @var string CAPTCHA's app key. Log in to the [Captcha console](https://console.cloud.tencent.com/captcha/graphical) and you can view the AppSecretKey in the "Key" column of the CAPTCHA list. AppSecretKey is the key for CAPTCHA ticket verification performed by the server. Please keep it confidential and do not disclose it to any third parties.
     */
    public $AppSecretKey;

    /**
     * @var integer Reserved field.
     */
    public $BusinessId;

    /**
     * @var integer Reserved field.
     */
    public $SceneId;

    /**
     * @var string MAC address or unique identifier of a device
     */
    public $MacAddress;

    /**
     * @var string Mobile equipment identity number
     */
    public $Imei;

    /**
     * @var integer Indicates whether to return the time when the frontend obtains the CAPTCHA. Valid values: 1 (return the time) and others.
     */
    public $NeedGetCaptchaTime;

    /**
     * @param integer $CaptchaType It must be `9` here.
     * @param string $Ticket The user verification ticket returned by the frontend callback function
     * @param string $UserIp The user public IP obtained from the customer backend server
     * @param string $Randstr A random string returned by the frontend callback function
     * @param integer $CaptchaAppId CAPTCHA's app ID. Log in to the [Captcha console](https://console.cloud.tencent.com/captcha/graphical) and you can view the CaptchaAppId in the "Key" column of the CAPTCHA list.
     * @param string $AppSecretKey CAPTCHA's app key. Log in to the [Captcha console](https://console.cloud.tencent.com/captcha/graphical) and you can view the AppSecretKey in the "Key" column of the CAPTCHA list. AppSecretKey is the key for CAPTCHA ticket verification performed by the server. Please keep it confidential and do not disclose it to any third parties.
     * @param integer $BusinessId Reserved field.
     * @param integer $SceneId Reserved field.
     * @param string $MacAddress MAC address or unique identifier of a device
     * @param string $Imei Mobile equipment identity number
     * @param integer $NeedGetCaptchaTime Indicates whether to return the time when the frontend obtains the CAPTCHA. Valid values: 1 (return the time) and others.
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
        if (array_key_exists("CaptchaType",$param) and $param["CaptchaType"] !== null) {
            $this->CaptchaType = $param["CaptchaType"];
        }

        if (array_key_exists("Ticket",$param) and $param["Ticket"] !== null) {
            $this->Ticket = $param["Ticket"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("Randstr",$param) and $param["Randstr"] !== null) {
            $this->Randstr = $param["Randstr"];
        }

        if (array_key_exists("CaptchaAppId",$param) and $param["CaptchaAppId"] !== null) {
            $this->CaptchaAppId = $param["CaptchaAppId"];
        }

        if (array_key_exists("AppSecretKey",$param) and $param["AppSecretKey"] !== null) {
            $this->AppSecretKey = $param["AppSecretKey"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("NeedGetCaptchaTime",$param) and $param["NeedGetCaptchaTime"] !== null) {
            $this->NeedGetCaptchaTime = $param["NeedGetCaptchaTime"];
        }
    }
}
