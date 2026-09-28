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
 * Deletion protection status information.
 *
 * @method boolean getDeletionProtectionEnabled() Obtain Whether to enable deletion protection. Once enabled, instances can be prevented from being deleted accidentally.
- true: enable deletion protection
- false: disable deletion protection
 * @method void setDeletionProtectionEnabled(boolean $DeletionProtectionEnabled) Set Whether to enable deletion protection. Once enabled, instances can be prevented from being deleted accidentally.
- true: enable deletion protection
- false: disable deletion protection
 * @method string getReason() Obtain Reason explanation for enabling modification protection.
Length: 1 to 255 characters. It must contain Chinese and characters from harmless strings. It can contain Chinese, letters, digits, hyphens (-), forward slashes (/), half-width periods (.), and underscores (_).
 * @method void setReason(string $Reason) Set Reason explanation for enabling modification protection.
Length: 1 to 255 characters. It must contain Chinese and characters from harmless strings. It can contain Chinese, letters, digits, hyphens (-), forward slashes (/), half-width periods (.), and underscores (_).
 */
class DeletionProtectionConfig extends AbstractModel
{
    /**
     * @var boolean Whether to enable deletion protection. Once enabled, instances can be prevented from being deleted accidentally.
- true: enable deletion protection
- false: disable deletion protection
     */
    public $DeletionProtectionEnabled;

    /**
     * @var string Reason explanation for enabling modification protection.
Length: 1 to 255 characters. It must contain Chinese and characters from harmless strings. It can contain Chinese, letters, digits, hyphens (-), forward slashes (/), half-width periods (.), and underscores (_).
     */
    public $Reason;

    /**
     * @param boolean $DeletionProtectionEnabled Whether to enable deletion protection. Once enabled, instances can be prevented from being deleted accidentally.
- true: enable deletion protection
- false: disable deletion protection
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
        if (array_key_exists("DeletionProtectionEnabled",$param) and $param["DeletionProtectionEnabled"] !== null) {
            $this->DeletionProtectionEnabled = $param["DeletionProtectionEnabled"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
