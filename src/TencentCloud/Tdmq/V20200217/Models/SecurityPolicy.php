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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security policy.
 *
 * @method string getRoute() Obtain ip or subnet.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoute(string $Route) Set ip or subnet.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getPolicy() Obtain Specifies whether the policy allows (true) or denies (false) access, corresponding to the allowlist or blocklist.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicy(boolean $Policy) Set Specifies whether the policy allows (true) or denies (false) access, corresponding to the allowlist or blocklist.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SecurityPolicy extends AbstractModel
{
    /**
     * @var string ip or subnet.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Route;

    /**
     * @var boolean Specifies whether the policy allows (true) or denies (false) access, corresponding to the allowlist or blocklist.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Policy;

    /**
     * @var string Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @param string $Route ip or subnet.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Policy Specifies whether the policy allows (true) or denies (false) access, corresponding to the allowlist or blocklist.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Route",$param) and $param["Route"] !== null) {
            $this->Route = $param["Route"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
