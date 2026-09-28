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
 * ModifyLoadBalancerModificationProtection request structure.
 *
 * @method string getLoadBalancerId() Obtain Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 * @method boolean getModificationProtectionEnabled() Obtain Indicates whether to enable modification protection. Once enabled, the instance is protected from unintended modification or deletion.\n- true: enables modification protection\n- false: disables modification protection
 * @method void setModificationProtectionEnabled(boolean $ModificationProtectionEnabled) Set Indicates whether to enable modification protection. Once enabled, the instance is protected from unintended modification or deletion.\n- true: enables modification protection\n- false: disables modification protection
 * @method boolean getDryRun() Obtain Whether to only precheck this request. Parameter Value:
- true: Only perform precheck without performing operations on a resource. Check parameter integrity, request format, and service limits. If approved, DryRunOperation is returned. If not approved, the corresponding error is returned.
-false (default): Execute a normal request. After the check is passed, directly perform operations on the resource.
 * @method void setDryRun(boolean $DryRun) Set Whether to only precheck this request. Parameter Value:
- true: Only perform precheck without performing operations on a resource. Check parameter integrity, request format, and service limits. If approved, DryRunOperation is returned. If not approved, the corresponding error is returned.
-false (default): Execute a normal request. After the check is passed, directly perform operations on the resource.
 * @method string getReason() Obtain Reason explanation for enabling modification protection.
Length: 1–255 characters. It must be a Chinese or harmless string and can contain Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
 * @method void setReason(string $Reason) Set Reason explanation for enabling modification protection.
Length: 1–255 characters. It must be a Chinese or harmless string and can contain Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
 */
class ModifyLoadBalancerModificationProtectionRequest extends AbstractModel
{
    /**
     * @var string Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var boolean Indicates whether to enable modification protection. Once enabled, the instance is protected from unintended modification or deletion.\n- true: enables modification protection\n- false: disables modification protection
     */
    public $ModificationProtectionEnabled;

    /**
     * @var boolean Whether to only precheck this request. Parameter Value:
- true: Only perform precheck without performing operations on a resource. Check parameter integrity, request format, and service limits. If approved, DryRunOperation is returned. If not approved, the corresponding error is returned.
-false (default): Execute a normal request. After the check is passed, directly perform operations on the resource.
     */
    public $DryRun;

    /**
     * @var string Reason explanation for enabling modification protection.
Length: 1–255 characters. It must be a Chinese or harmless string and can contain Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
     */
    public $Reason;

    /**
     * @param string $LoadBalancerId Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
     * @param boolean $ModificationProtectionEnabled Indicates whether to enable modification protection. Once enabled, the instance is protected from unintended modification or deletion.\n- true: enables modification protection\n- false: disables modification protection
     * @param boolean $DryRun Whether to only precheck this request. Parameter Value:
- true: Only perform precheck without performing operations on a resource. Check parameter integrity, request format, and service limits. If approved, DryRunOperation is returned. If not approved, the corresponding error is returned.
-false (default): Execute a normal request. After the check is passed, directly perform operations on the resource.
     * @param string $Reason Reason explanation for enabling modification protection.
Length: 1–255 characters. It must be a Chinese or harmless string and can contain Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ModificationProtectionEnabled",$param) and $param["ModificationProtectionEnabled"] !== null) {
            $this->ModificationProtectionEnabled = $param["ModificationProtectionEnabled"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
