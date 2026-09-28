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
 * Application CLB operation lock configuration.
 *
 * @method string getLockReason() Obtain The causes for the lock. Valid when **LoadBalancerStatus** is **Abnormal**.
 * @method void setLockReason(string $LockReason) Set The causes for the lock. Valid when **LoadBalancerStatus** is **Abnormal**.
 * @method string getLockType() Obtain Lock type. Valid values:

- **SecurityLocked**: Security lock.

- **RelatedResourceLocked**: Related resource locked.

- **FinancialLocked**: Locked due to arrears.

- **ResidualLocked**: residual lock.
 * @method void setLockType(string $LockType) Set Lock type. Valid values:

- **SecurityLocked**: Security lock.

- **RelatedResourceLocked**: Related resource locked.

- **FinancialLocked**: Locked due to arrears.

- **ResidualLocked**: residual lock.
 */
class LoadBalancerOperationLocksItem extends AbstractModel
{
    /**
     * @var string The causes for the lock. Valid when **LoadBalancerStatus** is **Abnormal**.
     */
    public $LockReason;

    /**
     * @var string Lock type. Valid values:

- **SecurityLocked**: Security lock.

- **RelatedResourceLocked**: Related resource locked.

- **FinancialLocked**: Locked due to arrears.

- **ResidualLocked**: residual lock.
     */
    public $LockType;

    /**
     * @param string $LockReason The causes for the lock. Valid when **LoadBalancerStatus** is **Abnormal**.
     * @param string $LockType Lock type. Valid values:

- **SecurityLocked**: Security lock.

- **RelatedResourceLocked**: Related resource locked.

- **FinancialLocked**: Locked due to arrears.

- **ResidualLocked**: residual lock.
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
        if (array_key_exists("LockReason",$param) and $param["LockReason"] !== null) {
            $this->LockReason = $param["LockReason"];
        }

        if (array_key_exists("LockType",$param) and $param["LockType"] !== null) {
            $this->LockType = $param["LockType"];
        }
    }
}
