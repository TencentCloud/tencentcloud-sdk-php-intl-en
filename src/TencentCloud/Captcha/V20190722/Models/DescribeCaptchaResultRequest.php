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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaResult request structure.
 *
 * @method integer getCaptchaType() Obtain <p>Fixed value: 9.</p>
 * @method void setCaptchaType(integer $CaptchaType) Set <p>Fixed value: 9.</p>
 * @method string getTicket() Obtain <p>User verification ticket returned by the frontend callback function</p>
 * @method void setTicket(string $Ticket) Set <p>User verification ticket returned by the frontend callback function</p>
 * @method string getUserIp() Obtain <p>Public network IP of the verification</p>
 * @method void setUserIp(string $UserIp) Set <p>Public network IP of the verification</p>
 * @method string getRandstr() Obtain <p>Random string returned by the frontend callback function</p>
 * @method void setRandstr(string $Randstr) Set <p>Random string returned by the frontend callback function</p>
 * @method integer getCaptchaAppId() Obtain <p>Captcha appId. Log in to the <a href="https://console.cloud.tencent.com/captcha/graphical">verification code console</a>. In the [Key] column of the verification list, you can see CaptchaAppId.</p>
 * @method void setCaptchaAppId(integer $CaptchaAppId) Set <p>Captcha appId. Log in to the <a href="https://console.cloud.tencent.com/captcha/graphical">verification code console</a>. In the [Key] column of the verification list, you can see CaptchaAppId.</p>
 * @method string getAppSecretKey() Obtain <p>Captcha application key. Log in to the <a href="https://console.cloud.tencent.com/captcha/graphical">verification code console</a>, and view AppSecretKey in the [Key] column of the verification list. AppSecretKey is a key for server-side verification of verification code tickets. Keep it confidential and do not leak it to third parties.</p>
 * @method void setAppSecretKey(string $AppSecretKey) Set <p>Captcha application key. Log in to the <a href="https://console.cloud.tencent.com/captcha/graphical">verification code console</a>, and view AppSecretKey in the [Key] column of the verification list. AppSecretKey is a key for server-side verification of verification code tickets. Keep it confidential and do not leak it to third parties.</p>
 * @method integer getBusinessId() Obtain <p>Reserved field</p>
 * @method void setBusinessId(integer $BusinessId) Set <p>Reserved field</p>
 * @method integer getSceneId() Obtain <p>Reserved field</p>
 * @method void setSceneId(integer $SceneId) Set <p>Reserved field</p>
 * @method string getMacAddress() Obtain <p>mac address or unique device identifier</p>
 * @method void setMacAddress(string $MacAddress) Set <p>mac address or unique device identifier</p>
 * @method string getImei() Obtain <p>Mobile device number</p>
 * @method void setImei(string $Imei) Set <p>Mobile device number</p>
 * @method integer getNeedGetCaptchaTime() Obtain <p>Whether to return the time when the frontend obtains the verification code. Value: 1: need to return</p>
 * @method void setNeedGetCaptchaTime(integer $NeedGetCaptchaTime) Set <p>Whether to return the time when the frontend obtains the verification code. Value: 1: need to return</p>
 */
class DescribeCaptchaResultRequest extends AbstractModel
{
    /**
     * @var integer <p>Fixed value: 9.</p>
     */
    public $CaptchaType;

    /**
     * @var string <p>User verification ticket returned by the frontend callback function</p>
     */
    public $Ticket;

    /**
     * @var string <p>Public network IP of the verification</p>
     */
    public $UserIp;

    /**
     * @var string <p>Random string returned by the frontend callback function</p>
     */
    public $Randstr;

    /**
     * @var integer <p>Captcha appId. Log in to the <a href="https://console.cloud.tencent.com/captcha/graphical">verification code console</a>. In the [Key] column of the verification list, you can see CaptchaAppId.</p>
     */
    public $CaptchaAppId;

    /**
     * @var string <p>Captcha application key. Log in to the <a href="https://console.cloud.tencent.com/captcha/graphical">verification code console</a>, and view AppSecretKey in the [Key] column of the verification list. AppSecretKey is a key for server-side verification of verification code tickets. Keep it confidential and do not leak it to third parties.</p>
     */
    public $AppSecretKey;

    /**
     * @var integer <p>Reserved field</p>
     */
    public $BusinessId;

    /**
     * @var integer <p>Reserved field</p>
     */
    public $SceneId;

    /**
     * @var string <p>mac address or unique device identifier</p>
     */
    public $MacAddress;

    /**
     * @var string <p>Mobile device number</p>
     */
    public $Imei;

    /**
     * @var integer <p>Whether to return the time when the frontend obtains the verification code. Value: 1: need to return</p>
     */
    public $NeedGetCaptchaTime;

    /**
     * @param integer $CaptchaType <p>Fixed value: 9.</p>
     * @param string $Ticket <p>User verification ticket returned by the frontend callback function</p>
     * @param string $UserIp <p>Public network IP of the verification</p>
     * @param string $Randstr <p>Random string returned by the frontend callback function</p>
     * @param integer $CaptchaAppId <p>Captcha appId. Log in to the <a href="https://console.cloud.tencent.com/captcha/graphical">verification code console</a>. In the [Key] column of the verification list, you can see CaptchaAppId.</p>
     * @param string $AppSecretKey <p>Captcha application key. Log in to the <a href="https://console.cloud.tencent.com/captcha/graphical">verification code console</a>, and view AppSecretKey in the [Key] column of the verification list. AppSecretKey is a key for server-side verification of verification code tickets. Keep it confidential and do not leak it to third parties.</p>
     * @param integer $BusinessId <p>Reserved field</p>
     * @param integer $SceneId <p>Reserved field</p>
     * @param string $MacAddress <p>mac address or unique device identifier</p>
     * @param string $Imei <p>Mobile device number</p>
     * @param integer $NeedGetCaptchaTime <p>Whether to return the time when the frontend obtains the verification code. Value: 1: need to return</p>
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
