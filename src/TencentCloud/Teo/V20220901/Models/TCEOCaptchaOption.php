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
 * EdgeOne human-machine verification authenticates instance information.
 *
 * @method string getCaptchaMode() Obtain <p>Browser-side WebView human-machine verification interaction mode.</p><p>Enumeration values:</p><ul><li>Invisible: invisible verification</li><li>Adaptive: self adaptive interactive verification</li></ul><p>Default value: Invisible</p>
 * @method void setCaptchaMode(string $CaptchaMode) Set <p>Browser-side WebView human-machine verification interaction mode.</p><p>Enumeration values:</p><ul><li>Invisible: invisible verification</li><li>Adaptive: self adaptive interactive verification</li></ul><p>Default value: Invisible</p>
 * @method string getMobileCaptchaMode() Obtain <p>Human-machine verification interaction mode for native apps on mobile terminals.</p><p>Enumeration values:</p><ul><li>Invisible: Invisible verification</li><li>Visible: interactive verification</li></ul><p>Default value: Invisible</p>
 * @method void setMobileCaptchaMode(string $MobileCaptchaMode) Set <p>Human-machine verification interaction mode for native apps on mobile terminals.</p><p>Enumeration values:</p><ul><li>Invisible: Invisible verification</li><li>Visible: interactive verification</li></ul><p>Default value: Invisible</p>
 */
class TCEOCaptchaOption extends AbstractModel
{
    /**
     * @var string <p>Browser-side WebView human-machine verification interaction mode.</p><p>Enumeration values:</p><ul><li>Invisible: invisible verification</li><li>Adaptive: self adaptive interactive verification</li></ul><p>Default value: Invisible</p>
     */
    public $CaptchaMode;

    /**
     * @var string <p>Human-machine verification interaction mode for native apps on mobile terminals.</p><p>Enumeration values:</p><ul><li>Invisible: Invisible verification</li><li>Visible: interactive verification</li></ul><p>Default value: Invisible</p>
     */
    public $MobileCaptchaMode;

    /**
     * @param string $CaptchaMode <p>Browser-side WebView human-machine verification interaction mode.</p><p>Enumeration values:</p><ul><li>Invisible: invisible verification</li><li>Adaptive: self adaptive interactive verification</li></ul><p>Default value: Invisible</p>
     * @param string $MobileCaptchaMode <p>Human-machine verification interaction mode for native apps on mobile terminals.</p><p>Enumeration values:</p><ul><li>Invisible: Invisible verification</li><li>Visible: interactive verification</li></ul><p>Default value: Invisible</p>
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
        if (array_key_exists("CaptchaMode",$param) and $param["CaptchaMode"] !== null) {
            $this->CaptchaMode = $param["CaptchaMode"];
        }

        if (array_key_exists("MobileCaptchaMode",$param) and $param["MobileCaptchaMode"] !== null) {
            $this->MobileCaptchaMode = $param["MobileCaptchaMode"];
        }
    }
}
