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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceIdTokenIntl request structure.
 *
 * @method string getCheckMode() Obtain The detection mode. Valid values:
`liveness`: Liveness detection only.
`compare`: Selfie verification.
Default value: `liveness`.
 * @method void setCheckMode(string $CheckMode) Set The detection mode. Valid values:
`liveness`: Liveness detection only.
`compare`: Selfie verification.
Default value: `liveness`.
 * @method string getSecureLevel() Obtain The verification security level. Valid values:
`1`: Video-based liveness detection.
`2`: Motion-based liveness detection.
`3`: Reflection-based liveness detection.
`4`: Motion- and reflection-based liveness detection.
Default value: `4`.
 * @method void setSecureLevel(string $SecureLevel) Set The verification security level. Valid values:
`1`: Video-based liveness detection.
`2`: Motion-based liveness detection.
`3`: Reflection-based liveness detection.
`4`: Motion- and reflection-based liveness detection.
Default value: `4`.
 * @method string getImage() Obtain The photo (in Base64) to compare. This parameter is required when the value of `CheckMode` is `compare`.
 * @method void setImage(string $Image) Set The photo (in Base64) to compare. This parameter is required when the value of `CheckMode` is `compare`.
 * @method string getExtra() Obtain The pass-through parameter, which can be omitted if there are no special requirements.
 * @method void setExtra(string $Extra) Set The pass-through parameter, which can be omitted if there are no special requirements.
 * @method string getActionList() Obtain This interface is used to control th action sequences.
Action types are as follows:
"blink"
"mouth"
"nod"
"shake"
You can choose 1-2 actions out of the four.
Single action example: "blink"
Multiple action example: "blink,mouth"
The default value is blink. The different action types passed in this parameter take effect only when the SecurityLevel is 2 or 4; otherwise, the interface reports an error.
 * @method void setActionList(string $ActionList) Set This interface is used to control th action sequences.
Action types are as follows:
"blink"
"mouth"
"nod"
"shake"
You can choose 1-2 actions out of the four.
Single action example: "blink"
Multiple action example: "blink,mouth"
The default value is blink. The different action types passed in this parameter take effect only when the SecurityLevel is 2 or 4; otherwise, the interface reports an error.
 */
class GetFaceIdTokenIntlRequest extends AbstractModel
{
    /**
     * @var string The detection mode. Valid values:
`liveness`: Liveness detection only.
`compare`: Selfie verification.
Default value: `liveness`.
     */
    public $CheckMode;

    /**
     * @var string The verification security level. Valid values:
`1`: Video-based liveness detection.
`2`: Motion-based liveness detection.
`3`: Reflection-based liveness detection.
`4`: Motion- and reflection-based liveness detection.
Default value: `4`.
     */
    public $SecureLevel;

    /**
     * @var string The photo (in Base64) to compare. This parameter is required when the value of `CheckMode` is `compare`.
     */
    public $Image;

    /**
     * @var string The pass-through parameter, which can be omitted if there are no special requirements.
     */
    public $Extra;

    /**
     * @var string This interface is used to control th action sequences.
Action types are as follows:
"blink"
"mouth"
"nod"
"shake"
You can choose 1-2 actions out of the four.
Single action example: "blink"
Multiple action example: "blink,mouth"
The default value is blink. The different action types passed in this parameter take effect only when the SecurityLevel is 2 or 4; otherwise, the interface reports an error.
     */
    public $ActionList;

    /**
     * @param string $CheckMode The detection mode. Valid values:
`liveness`: Liveness detection only.
`compare`: Selfie verification.
Default value: `liveness`.
     * @param string $SecureLevel The verification security level. Valid values:
`1`: Video-based liveness detection.
`2`: Motion-based liveness detection.
`3`: Reflection-based liveness detection.
`4`: Motion- and reflection-based liveness detection.
Default value: `4`.
     * @param string $Image The photo (in Base64) to compare. This parameter is required when the value of `CheckMode` is `compare`.
     * @param string $Extra The pass-through parameter, which can be omitted if there are no special requirements.
     * @param string $ActionList This interface is used to control th action sequences.
Action types are as follows:
"blink"
"mouth"
"nod"
"shake"
You can choose 1-2 actions out of the four.
Single action example: "blink"
Multiple action example: "blink,mouth"
The default value is blink. The different action types passed in this parameter take effect only when the SecurityLevel is 2 or 4; otherwise, the interface reports an error.
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
    }
}
