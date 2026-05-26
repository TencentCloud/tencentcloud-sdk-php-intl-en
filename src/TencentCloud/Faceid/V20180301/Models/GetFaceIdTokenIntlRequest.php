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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceIdTokenIntl request structure.
 *
 * @method string getCheckMode() Obtain <p>Indicates the detection mode. Parameter values as follows:<br>"liveness": liveness detection only;<br>"compare": liveness detection + face comparison;<br>Default value: "liveness".</p>
 * @method void setCheckMode(string $CheckMode) Set <p>Indicates the detection mode. Parameter values as follows:<br>"liveness": liveness detection only;<br>"compare": liveness detection + face comparison;<br>Default value: "liveness".</p>
 * @method string getSecureLevel() Obtain <p>Indicates the security level of authentication. Security levels are divided into:<br>"1": silent liveness;<br>"2": action liveness detection;<br>"3": light liveness;<br>"4": action + light liveness;<br>Default value is "4".</p>
**Note:** Security level increases from `1` to `4`, with `4` providing the highest security.
 * @method void setSecureLevel(string $SecureLevel) Set <p>Indicates the security level of authentication. Security levels are divided into:<br>"1": silent liveness;<br>"2": action liveness detection;<br>"3": light liveness;<br>"4": action + light liveness;<br>Default value is "4".</p>
**Note:** Security level increases from `1` to `4`, with `4` providing the highest security.
 * @method string getImage() Obtain <p>The base64 code of the image for comparison, used for the "liveness comparison" mode. This parameter is required when CheckMode is "compare".</p>
 * @method void setImage(string $Image) Set <p>The base64 code of the image for comparison, used for the "liveness comparison" mode. This parameter is required when CheckMode is "compare".</p>
 * @method string getExtra() Obtain <p>This parameter is a business passthrough parameter and can be omitted unless otherwise needed.</p>
 * @method void setExtra(string $Extra) Set <p>This parameter is a business passthrough parameter and can be omitted unless otherwise needed.</p>
 * @method string getActionList() Obtain <p>This API is used to control the sequence of actions. The action types are as follows:<br>"blink"<br>"mouth"<br>"nod"<br>"shake"<br>Choose 1-2 actions from the four.<br>Single action example: "blink"<br>Multi-action example: "blink,mouth".<br>Default value is blink.<br>Input this parameter only when SecureLevel is 2 or 4 for different action types to take effect; otherwise, the API returns an error.</p>
 * @method void setActionList(string $ActionList) Set <p>This API is used to control the sequence of actions. The action types are as follows:<br>"blink"<br>"mouth"<br>"nod"<br>"shake"<br>Choose 1-2 actions from the four.<br>Single action example: "blink"<br>Multi-action example: "blink,mouth".<br>Default value is blink.<br>Input this parameter only when SecureLevel is 2 or 4 for different action types to take effect; otherwise, the API returns an error.</p>
 * @method string getSdkVersion() Obtain <p>PLUS: PLUS version, PRO: PRO version, ENHANCED: enhanced, BASIC: basic (default)</p>
 * @method void setSdkVersion(string $SdkVersion) Set <p>PLUS: PLUS version, PRO: PRO version, ENHANCED: enhanced, BASIC: basic (default)</p>
 * @method integer getRetryLimit() Obtain <p>Liveness retry count</p><p>Value ranges from 1 to 5</p><p>Default value: 5</p>
 * @method void setRetryLimit(integer $RetryLimit) Set <p>Liveness retry count</p><p>Value ranges from 1 to 5</p><p>Default value: 5</p>
 */
class GetFaceIdTokenIntlRequest extends AbstractModel
{
    /**
     * @var string <p>Indicates the detection mode. Parameter values as follows:<br>"liveness": liveness detection only;<br>"compare": liveness detection + face comparison;<br>Default value: "liveness".</p>
     */
    public $CheckMode;

    /**
     * @var string <p>Indicates the security level of authentication. Security levels are divided into:<br>"1": silent liveness;<br>"2": action liveness detection;<br>"3": light liveness;<br>"4": action + light liveness;<br>Default value is "4".</p>
**Note:** Security level increases from `1` to `4`, with `4` providing the highest security.
     */
    public $SecureLevel;

    /**
     * @var string <p>The base64 code of the image for comparison, used for the "liveness comparison" mode. This parameter is required when CheckMode is "compare".</p>
     */
    public $Image;

    /**
     * @var string <p>This parameter is a business passthrough parameter and can be omitted unless otherwise needed.</p>
     */
    public $Extra;

    /**
     * @var string <p>This API is used to control the sequence of actions. The action types are as follows:<br>"blink"<br>"mouth"<br>"nod"<br>"shake"<br>Choose 1-2 actions from the four.<br>Single action example: "blink"<br>Multi-action example: "blink,mouth".<br>Default value is blink.<br>Input this parameter only when SecureLevel is 2 or 4 for different action types to take effect; otherwise, the API returns an error.</p>
     */
    public $ActionList;

    /**
     * @var string <p>PLUS: PLUS version, PRO: PRO version, ENHANCED: enhanced, BASIC: basic (default)</p>
     */
    public $SdkVersion;

    /**
     * @var integer <p>Liveness retry count</p><p>Value ranges from 1 to 5</p><p>Default value: 5</p>
     */
    public $RetryLimit;

    /**
     * @param string $CheckMode <p>Indicates the detection mode. Parameter values as follows:<br>"liveness": liveness detection only;<br>"compare": liveness detection + face comparison;<br>Default value: "liveness".</p>
     * @param string $SecureLevel <p>Indicates the security level of authentication. Security levels are divided into:<br>"1": silent liveness;<br>"2": action liveness detection;<br>"3": light liveness;<br>"4": action + light liveness;<br>Default value is "4".</p>
**Note:** Security level increases from `1` to `4`, with `4` providing the highest security.
     * @param string $Image <p>The base64 code of the image for comparison, used for the "liveness comparison" mode. This parameter is required when CheckMode is "compare".</p>
     * @param string $Extra <p>This parameter is a business passthrough parameter and can be omitted unless otherwise needed.</p>
     * @param string $ActionList <p>This API is used to control the sequence of actions. The action types are as follows:<br>"blink"<br>"mouth"<br>"nod"<br>"shake"<br>Choose 1-2 actions from the four.<br>Single action example: "blink"<br>Multi-action example: "blink,mouth".<br>Default value is blink.<br>Input this parameter only when SecureLevel is 2 or 4 for different action types to take effect; otherwise, the API returns an error.</p>
     * @param string $SdkVersion <p>PLUS: PLUS version, PRO: PRO version, ENHANCED: enhanced, BASIC: basic (default)</p>
     * @param integer $RetryLimit <p>Liveness retry count</p><p>Value ranges from 1 to 5</p><p>Default value: 5</p>
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
        if (array_key_exists("CheckMode",$param) and $param["CheckMode"] !== null) {
            $this->CheckMode = $param["CheckMode"];
        }

        if (array_key_exists("SecureLevel",$param) and $param["SecureLevel"] !== null) {
            $this->SecureLevel = $param["SecureLevel"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("ActionList",$param) and $param["ActionList"] !== null) {
            $this->ActionList = $param["ActionList"];
        }

        if (array_key_exists("SdkVersion",$param) and $param["SdkVersion"] !== null) {
            $this->SdkVersion = $param["SdkVersion"];
        }

        if (array_key_exists("RetryLimit",$param) and $param["RetryLimit"] !== null) {
            $this->RetryLimit = $param["RetryLimit"];
        }
    }
}
