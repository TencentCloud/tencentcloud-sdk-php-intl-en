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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modification protection status information.
 *
 * @method boolean getModificationProtectionEnabled() Obtain Whether modification protection is enabled. Once enabled, it prevents the instance from unintended modification or deletion.
- true: enable modification protection
- false: disable modification protection
 * @method void setModificationProtectionEnabled(boolean $ModificationProtectionEnabled) Set Whether modification protection is enabled. Once enabled, it prevents the instance from unintended modification or deletion.
- true: enable modification protection
- false: disable modification protection
 * @method string getOperatorUin() Obtain 1238716123
 * @method void setOperatorUin(string $OperatorUin) Set 1238716123
 * @method string getReason() Obtain Reason explanation for enabling modification protection.
Length: 1 to 255 characters. It must contain Chinese and characters from harmless strings. It can contain Chinese, letters, digits, hyphens (-), forward slashes (/), half-width periods (.), and underscores (_).
 * @method void setReason(string $Reason) Set Reason explanation for enabling modification protection.
Length: 1 to 255 characters. It must contain Chinese and characters from harmless strings. It can contain Chinese, letters, digits, hyphens (-), forward slashes (/), half-width periods (.), and underscores (_).
 */
class ModificationProtectionInfo extends AbstractModel
{
    /**
     * @var boolean Whether modification protection is enabled. Once enabled, it prevents the instance from unintended modification or deletion.
- true: enable modification protection
- false: disable modification protection
     */
    public $ModificationProtectionEnabled;

    /**
     * @var string 1238716123
     */
    public $OperatorUin;

    /**
     * @var string Reason explanation for enabling modification protection.
Length: 1 to 255 characters. It must contain Chinese and characters from harmless strings. It can contain Chinese, letters, digits, hyphens (-), forward slashes (/), half-width periods (.), and underscores (_).
     */
    public $Reason;

    /**
     * @param boolean $ModificationProtectionEnabled Whether modification protection is enabled. Once enabled, it prevents the instance from unintended modification or deletion.
- true: enable modification protection
- false: disable modification protection
     * @param string $OperatorUin 1238716123
     * @param string $Reason Reason explanation for enabling modification protection.
Length: 1 to 255 characters. It must contain Chinese and characters from harmless strings. It can contain Chinese, letters, digits, hyphens (-), forward slashes (/), half-width periods (.), and underscores (_).
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
        if (array_key_exists("ModificationProtectionEnabled",$param) and $param["ModificationProtectionEnabled"] !== null) {
            $this->ModificationProtectionEnabled = $param["ModificationProtectionEnabled"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
