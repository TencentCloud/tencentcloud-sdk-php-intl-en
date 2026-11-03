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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSessionToken request structure.
 *
 * @method string getSerialNumber() Obtain MFA serial number, the identifier of the MFA device associated with the CAM user making the call. Format: qcs::CAM:uin/${ownerUin}::MFA/${mfaType}. mfaType supports softToken.
 * @method void setSerialNumber(string $SerialNumber) Set MFA serial number, the identifier of the MFA device associated with the CAM user making the call. Format: qcs::CAM:uin/${ownerUin}::MFA/${mfaType}. mfaType supports softToken.
 * @method string getTokenCode() Obtain mfa identity verification code.
 * @method void setTokenCode(string $TokenCode) Set mfa identity verification code.
 * @method integer getDurationSeconds() Obtain Validity period of the specified temporary certificate. Unit: second. Default value: 1800 seconds. The root account can set a validity period of up to 7200 seconds, and a sub-account can set a validity period of up to 129600 seconds.
 * @method void setDurationSeconds(integer $DurationSeconds) Set Validity period of the specified temporary certificate. Unit: second. Default value: 1800 seconds. The root account can set a validity period of up to 7200 seconds, and a sub-account can set a validity period of up to 129600 seconds.
 */
class GetSessionTokenRequest extends AbstractModel
{
    /**
     * @var string MFA serial number, the identifier of the MFA device associated with the CAM user making the call. Format: qcs::CAM:uin/${ownerUin}::MFA/${mfaType}. mfaType supports softToken.
     */
    public $SerialNumber;

    /**
     * @var string mfa identity verification code.
     */
    public $TokenCode;

    /**
     * @var integer Validity period of the specified temporary certificate. Unit: second. Default value: 1800 seconds. The root account can set a validity period of up to 7200 seconds, and a sub-account can set a validity period of up to 129600 seconds.
     */
    public $DurationSeconds;

    /**
     * @param string $SerialNumber MFA serial number, the identifier of the MFA device associated with the CAM user making the call. Format: qcs::CAM:uin/${ownerUin}::MFA/${mfaType}. mfaType supports softToken.
     * @param string $TokenCode mfa identity verification code.
     * @param integer $DurationSeconds Validity period of the specified temporary certificate. Unit: second. Default value: 1800 seconds. The root account can set a validity period of up to 7200 seconds, and a sub-account can set a validity period of up to 129600 seconds.
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
        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("TokenCode",$param) and $param["TokenCode"] !== null) {
            $this->TokenCode = $param["TokenCode"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }
    }
}
