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
 * DeleteSecurityPolicy request structure.
 *
 * @method array getSecurityPolicyIds() Obtain Security policy ID list. ID format: tls- followed by 8 alphanumeric characters.
 * @method void setSecurityPolicyIds(array $SecurityPolicyIds) Set Security policy ID list. ID format: tls- followed by 8 alphanumeric characters.
 * @method boolean getDryRun() Obtain Whether to only execute a preflight request. Value:
- **true**: Execute only the preflight request without actually deleting a resource. The preflight request will verify the parameter format, permission, and whether the security policy is referenced, helping you identify potential issues before proceeding with any operations.
- **false** (default): Execute a normal request. After the precheck is passed, delete the security policy directly.

 * @method void setDryRun(boolean $DryRun) Set Whether to only execute a preflight request. Value:
- **true**: Execute only the preflight request without actually deleting a resource. The preflight request will verify the parameter format, permission, and whether the security policy is referenced, helping you identify potential issues before proceeding with any operations.
- **false** (default): Execute a normal request. After the precheck is passed, delete the security policy directly.
 */
class DeleteSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var array Security policy ID list. ID format: tls- followed by 8 alphanumeric characters.
     */
    public $SecurityPolicyIds;

    /**
     * @var boolean Whether to only execute a preflight request. Value:
- **true**: Execute only the preflight request without actually deleting a resource. The preflight request will verify the parameter format, permission, and whether the security policy is referenced, helping you identify potential issues before proceeding with any operations.
- **false** (default): Execute a normal request. After the precheck is passed, delete the security policy directly.

     */
    public $DryRun;

    /**
     * @param array $SecurityPolicyIds Security policy ID list. ID format: tls- followed by 8 alphanumeric characters.
     * @param boolean $DryRun Whether to only execute a preflight request. Value:
- **true**: Execute only the preflight request without actually deleting a resource. The preflight request will verify the parameter format, permission, and whether the security policy is referenced, helping you identify potential issues before proceeding with any operations.
- **false** (default): Execute a normal request. After the precheck is passed, delete the security policy directly.
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
        if (array_key_exists("SecurityPolicyIds",$param) and $param["SecurityPolicyIds"] !== null) {
            $this->SecurityPolicyIds = $param["SecurityPolicyIds"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
