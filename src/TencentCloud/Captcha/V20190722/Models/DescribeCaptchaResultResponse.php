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
 * DescribeCaptchaResult response structure.
 *
 * @method integer getCaptchaCode() Obtain `1 OK`: Verification passed
`7 captcha no match`: The passed in `Randstr` is invalid. Make sure it is the same as the `Randstr` returned from the frontend.
`8 ticket expired`: The `Ticket` has expired. A ticket is valid for five minutes. Please generate a new `Ticket` and `Randstr`.
`9 ticket reused`: The specified `Ticket` has been used. Please generate a new `Ticket` and `Randstr`.
`15 decrypt fail`: The specified `Ticket` is invalid. Make sure it's the same as the Ticket returned from the frontend. 
`16 appid-ticket mismatch`: The specified `CaptchaAppId` is invalid. Make sure it's the same as the `CaptchaAppId` returned from the frontend. You can obtain it from the CAPTCHA console in **Verification management** > **Basic configuration**.
`21 diff`. Ticket verification error. Possible reasons: 1) If the ticket contains the `terror` prefix, it's usually the case that a disaster recovery ticket is generated due to the network connection problems of the user. You can choose to ignore it or verify again. 2) If the ticket does not include the `terror` prefix, Captcha detects security risk on this request . You can choose to block it or not.
`100 appid-secretkey-ticket mismatch`: Parameter error. 1) Make sure `CaptchaAppId` and `AppSecretKey` are correct. `CaptchaAppId` and `AppSecretKey` in the CAPTACHA console under **Verification management** > **Basic configuration**. 2) Make sure the passed-in `Ticket` is generated by using the passed-in `CaptchaAppId`.
 * @method void setCaptchaCode(integer $CaptchaCode) Set `1 OK`: Verification passed
`7 captcha no match`: The passed in `Randstr` is invalid. Make sure it is the same as the `Randstr` returned from the frontend.
`8 ticket expired`: The `Ticket` has expired. A ticket is valid for five minutes. Please generate a new `Ticket` and `Randstr`.
`9 ticket reused`: The specified `Ticket` has been used. Please generate a new `Ticket` and `Randstr`.
`15 decrypt fail`: The specified `Ticket` is invalid. Make sure it's the same as the Ticket returned from the frontend. 
`16 appid-ticket mismatch`: The specified `CaptchaAppId` is invalid. Make sure it's the same as the `CaptchaAppId` returned from the frontend. You can obtain it from the CAPTCHA console in **Verification management** > **Basic configuration**.
`21 diff`. Ticket verification error. Possible reasons: 1) If the ticket contains the `terror` prefix, it's usually the case that a disaster recovery ticket is generated due to the network connection problems of the user. You can choose to ignore it or verify again. 2) If the ticket does not include the `terror` prefix, Captcha detects security risk on this request . You can choose to block it or not.
`100 appid-secretkey-ticket mismatch`: Parameter error. 1) Make sure `CaptchaAppId` and `AppSecretKey` are correct. `CaptchaAppId` and `AppSecretKey` in the CAPTACHA console under **Verification management** > **Basic configuration**. 2) Make sure the passed-in `Ticket` is generated by using the passed-in `CaptchaAppId`.
 * @method string getCaptchaMsg() Obtain Status description and verification error message
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setCaptchaMsg(string $CaptchaMsg) Set Status description and verification error message
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getEvilLevel() Obtain This parameter returns the result of imperceptible verification. This parameter is not available for Tencent Cloud International yet.
`0`: The request is trusted.
`100`: The request is malicious.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEvilLevel(integer $EvilLevel) Set This parameter returns the result of imperceptible verification. This parameter is not available for Tencent Cloud International yet.
`0`: The request is trusted.
`100`: The request is malicious.
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getGetCaptchaTime() Obtain The timestamp when the frontend obtains the CAPTCHA.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setGetCaptchaTime(integer $GetCaptchaTime) Set The timestamp when the frontend obtains the CAPTCHA.
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getEvilBitmap() Obtain Blocking type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEvilBitmap(integer $EvilBitmap) Set Blocking type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSubmitCaptchaTime() Obtain The time when the CAPTCHA is submitted.
 * @method void setSubmitCaptchaTime(integer $SubmitCaptchaTime) Set The time when the CAPTCHA is submitted.
 * @method string getDeviceRiskCategory() Obtain Device Risk Category
 * @method void setDeviceRiskCategory(string $DeviceRiskCategory) Set Device Risk Category
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeCaptchaResultResponse extends AbstractModel
{
    /**
     * @var integer `1 OK`: Verification passed
`7 captcha no match`: The passed in `Randstr` is invalid. Make sure it is the same as the `Randstr` returned from the frontend.
`8 ticket expired`: The `Ticket` has expired. A ticket is valid for five minutes. Please generate a new `Ticket` and `Randstr`.
`9 ticket reused`: The specified `Ticket` has been used. Please generate a new `Ticket` and `Randstr`.
`15 decrypt fail`: The specified `Ticket` is invalid. Make sure it's the same as the Ticket returned from the frontend. 
`16 appid-ticket mismatch`: The specified `CaptchaAppId` is invalid. Make sure it's the same as the `CaptchaAppId` returned from the frontend. You can obtain it from the CAPTCHA console in **Verification management** > **Basic configuration**.
`21 diff`. Ticket verification error. Possible reasons: 1) If the ticket contains the `terror` prefix, it's usually the case that a disaster recovery ticket is generated due to the network connection problems of the user. You can choose to ignore it or verify again. 2) If the ticket does not include the `terror` prefix, Captcha detects security risk on this request . You can choose to block it or not.
`100 appid-secretkey-ticket mismatch`: Parameter error. 1) Make sure `CaptchaAppId` and `AppSecretKey` are correct. `CaptchaAppId` and `AppSecretKey` in the CAPTACHA console under **Verification management** > **Basic configuration**. 2) Make sure the passed-in `Ticket` is generated by using the passed-in `CaptchaAppId`.
     */
    public $CaptchaCode;

    /**
     * @var string Status description and verification error message
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $CaptchaMsg;

    /**
     * @var integer This parameter returns the result of imperceptible verification. This parameter is not available for Tencent Cloud International yet.
`0`: The request is trusted.
`100`: The request is malicious.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EvilLevel;

    /**
     * @var integer The timestamp when the frontend obtains the CAPTCHA.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $GetCaptchaTime;

    /**
     * @var integer Blocking type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EvilBitmap;

    /**
     * @var integer The time when the CAPTCHA is submitted.
     */
    public $SubmitCaptchaTime;

    /**
     * @var string Device Risk Category
     */
    public $DeviceRiskCategory;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $CaptchaCode `1 OK`: Verification passed
`7 captcha no match`: The passed in `Randstr` is invalid. Make sure it is the same as the `Randstr` returned from the frontend.
`8 ticket expired`: The `Ticket` has expired. A ticket is valid for five minutes. Please generate a new `Ticket` and `Randstr`.
`9 ticket reused`: The specified `Ticket` has been used. Please generate a new `Ticket` and `Randstr`.
`15 decrypt fail`: The specified `Ticket` is invalid. Make sure it's the same as the Ticket returned from the frontend. 
`16 appid-ticket mismatch`: The specified `CaptchaAppId` is invalid. Make sure it's the same as the `CaptchaAppId` returned from the frontend. You can obtain it from the CAPTCHA console in **Verification management** > **Basic configuration**.
`21 diff`. Ticket verification error. Possible reasons: 1) If the ticket contains the `terror` prefix, it's usually the case that a disaster recovery ticket is generated due to the network connection problems of the user. You can choose to ignore it or verify again. 2) If the ticket does not include the `terror` prefix, Captcha detects security risk on this request . You can choose to block it or not.
`100 appid-secretkey-ticket mismatch`: Parameter error. 1) Make sure `CaptchaAppId` and `AppSecretKey` are correct. `CaptchaAppId` and `AppSecretKey` in the CAPTACHA console under **Verification management** > **Basic configuration**. 2) Make sure the passed-in `Ticket` is generated by using the passed-in `CaptchaAppId`.
     * @param string $CaptchaMsg Status description and verification error message
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $EvilLevel This parameter returns the result of imperceptible verification. This parameter is not available for Tencent Cloud International yet.
`0`: The request is trusted.
`100`: The request is malicious.
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $GetCaptchaTime The timestamp when the frontend obtains the CAPTCHA.
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $EvilBitmap Blocking type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SubmitCaptchaTime The time when the CAPTCHA is submitted.
     * @param string $DeviceRiskCategory Device Risk Category
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("CaptchaCode",$param) and $param["CaptchaCode"] !== null) {
            $this->CaptchaCode = $param["CaptchaCode"];
        }

        if (array_key_exists("CaptchaMsg",$param) and $param["CaptchaMsg"] !== null) {
            $this->CaptchaMsg = $param["CaptchaMsg"];
        }

        if (array_key_exists("EvilLevel",$param) and $param["EvilLevel"] !== null) {
            $this->EvilLevel = $param["EvilLevel"];
        }

        if (array_key_exists("GetCaptchaTime",$param) and $param["GetCaptchaTime"] !== null) {
            $this->GetCaptchaTime = $param["GetCaptchaTime"];
        }

        if (array_key_exists("EvilBitmap",$param) and $param["EvilBitmap"] !== null) {
            $this->EvilBitmap = $param["EvilBitmap"];
        }

        if (array_key_exists("SubmitCaptchaTime",$param) and $param["SubmitCaptchaTime"] !== null) {
            $this->SubmitCaptchaTime = $param["SubmitCaptchaTime"];
        }

        if (array_key_exists("DeviceRiskCategory",$param) and $param["DeviceRiskCategory"] !== null) {
            $this->DeviceRiskCategory = $param["DeviceRiskCategory"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
