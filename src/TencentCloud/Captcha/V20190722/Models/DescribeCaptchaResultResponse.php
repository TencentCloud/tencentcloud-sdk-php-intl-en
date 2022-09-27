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
 * @method integer getCaptchaCode() Obtain  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  
  
 
 
 
 
 
  
 
 * @method void setCaptchaCode(integer $CaptchaCode) Set  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  
  
 
 
 
 
 
  
 
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
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCaptchaResultResponse extends AbstractModel
{
    /**
     * @var integer  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  
  
 
 
 
 
 
  
 
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
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $CaptchaCode  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  
  
 
 
 
 
 
  
 
     * @param string $CaptchaMsg Status description and verification error message
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $EvilLevel This parameter returns the result of imperceptible verification. This parameter is not available for Tencent Cloud International yet.
`0`: The request is trusted.
`100`: The request is malicious.
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $GetCaptchaTime The timestamp when the frontend obtains the CAPTCHA.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
