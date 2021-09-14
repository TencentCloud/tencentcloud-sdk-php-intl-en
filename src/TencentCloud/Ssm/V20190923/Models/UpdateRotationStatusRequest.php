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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRotationStatus request structure.
 *
 * @method string getSecretName() Obtain Tencent Cloud service credential name.
 * @method void setSecretName(string $SecretName) Set Tencent Cloud service credential name.
 * @method boolean getEnableRotation() Obtain Specifies whether to enable rotation.
`true`: enables rotation.
`false`: disables rotation.
 * @method void setEnableRotation(boolean $EnableRotation) Set Specifies whether to enable rotation.
`true`: enables rotation.
`false`: disables rotation.
 * @method integer getFrequency() Obtain Rotation frequency in days. Value range: 30–365.
 * @method void setFrequency(integer $Frequency) Set Rotation frequency in days. Value range: 30–365.
 * @method string getRotationBeginTime() Obtain User-defined rotation start time in the format of 2006-01-02 15:04:05.
When `EnableRotation` is `true` and `RotationBeginTime` is left empty, the current time will be entered by default.
 * @method void setRotationBeginTime(string $RotationBeginTime) Set User-defined rotation start time in the format of 2006-01-02 15:04:05.
When `EnableRotation` is `true` and `RotationBeginTime` is left empty, the current time will be entered by default.
 */
class UpdateRotationStatusRequest extends AbstractModel
{
    /**
     * @var string Tencent Cloud service credential name.
     */
    public $SecretName;

    /**
     * @var boolean Specifies whether to enable rotation.
`true`: enables rotation.
`false`: disables rotation.
     */
    public $EnableRotation;

    /**
     * @var integer Rotation frequency in days. Value range: 30–365.
     */
    public $Frequency;

    /**
     * @var string User-defined rotation start time in the format of 2006-01-02 15:04:05.
When `EnableRotation` is `true` and `RotationBeginTime` is left empty, the current time will be entered by default.
     */
    public $RotationBeginTime;

    /**
     * @param string $SecretName Tencent Cloud service credential name.
     * @param boolean $EnableRotation Specifies whether to enable rotation.
`true`: enables rotation.
`false`: disables rotation.
     * @param integer $Frequency Rotation frequency in days. Value range: 30–365.
     * @param string $RotationBeginTime User-defined rotation start time in the format of 2006-01-02 15:04:05.
When `EnableRotation` is `true` and `RotationBeginTime` is left empty, the current time will be entered by default.
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("EnableRotation",$param) and $param["EnableRotation"] !== null) {
            $this->EnableRotation = $param["EnableRotation"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("RotationBeginTime",$param) and $param["RotationBeginTime"] !== null) {
            $this->RotationBeginTime = $param["RotationBeginTime"];
        }
    }
}
