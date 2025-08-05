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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CAPTCHA authentication instance information.
 *
 * @method string getCaptchaAppId() Obtain CaptchaAppId information.
 * @method void setCaptchaAppId(string $CaptchaAppId) Set CaptchaAppId information.
 * @method string getAppSecretKey() Obtain AppSecretKey information.
 * @method void setAppSecretKey(string $AppSecretKey) Set AppSecretKey information.
 */
class TCCaptchaOption extends AbstractModel
{
    /**
     * @var string CaptchaAppId information.
     */
    public $CaptchaAppId;

    /**
     * @var string AppSecretKey information.
     */
    public $AppSecretKey;

    /**
     * @param string $CaptchaAppId CaptchaAppId information.
     * @param string $AppSecretKey AppSecretKey information.
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
        if (array_key_exists("CaptchaAppId",$param) and $param["CaptchaAppId"] !== null) {
            $this->CaptchaAppId = $param["CaptchaAppId"];
        }

        if (array_key_exists("AppSecretKey",$param) and $param["AppSecretKey"] !== null) {
            $this->AppSecretKey = $param["AppSecretKey"];
        }
    }
}
