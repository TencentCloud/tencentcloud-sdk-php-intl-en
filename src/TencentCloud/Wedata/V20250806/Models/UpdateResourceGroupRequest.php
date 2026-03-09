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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateResourceGroup request structure.
 *
 * @method string getId() Obtain Resource group ID
 * @method void setId(string $Id) Set Resource group ID
 * @method string getType() Obtain **Change configuration (cannot include both modification, renewal, and resource package quantity changes). configuration changes cannot modify the resource group type.**.

Real-Time integration resource group.  
-i32c (real-time data sync - 16c64G).

Offline integration resource group.
-integrated (offline data sync-8C16G).
-i16 (offline data sync-8C32G).

Scheduling resource group.
-test specification.
-S_small (basic specification).
-S_medium (general specifications).
-S_large (professional specification).

Data service resource group.
-Test specification.
-ds_s(Basic specification).
-ds_m (general specifications).
-ds_l (professional specification).
 * @method void setType(string $Type) Set **Change configuration (cannot include both modification, renewal, and resource package quantity changes). configuration changes cannot modify the resource group type.**.

Real-Time integration resource group.  
-i32c (real-time data sync - 16c64G).

Offline integration resource group.
-integrated (offline data sync-8C16G).
-i16 (offline data sync-8C32G).

Scheduling resource group.
-test specification.
-S_small (basic specification).
-S_medium (general specifications).
-S_large (professional specification).

Data service resource group.
-Test specification.
-ds_s(Basic specification).
-ds_m (general specifications).
-ds_l (professional specification).
 * @method integer getPurchasePeriod() Obtain Renewal period, unit month (cannot include both modification, renewal, and resource package quantity changes).
 * @method void setPurchasePeriod(integer $PurchasePeriod) Set Renewal period, unit month (cannot include both modification, renewal, and resource package quantity changes).
 * @method ResourceNumber getNumber() Obtain Add or reduce the number of resource packages (modification, renewal, and changing the number of resource packages cannot include both).
 * @method void setNumber(ResourceNumber $Number) Set Add or reduce the number of resource packages (modification, renewal, and changing the number of resource packages cannot include both).
 * @method boolean getAutoRenewEnabled() Obtain Auto-Renewal or not. the renewal parameters take effect when PurchasePeriod is not empty.
 * @method void setAutoRenewEnabled(boolean $AutoRenewEnabled) Set Auto-Renewal or not. the renewal parameters take effect when PurchasePeriod is not empty.
 */
class UpdateResourceGroupRequest extends AbstractModel
{
    /**
     * @var string Resource group ID
     */
    public $Id;

    /**
     * @var string **Change configuration (cannot include both modification, renewal, and resource package quantity changes). configuration changes cannot modify the resource group type.**.

Real-Time integration resource group.  
-i32c (real-time data sync - 16c64G).

Offline integration resource group.
-integrated (offline data sync-8C16G).
-i16 (offline data sync-8C32G).

Scheduling resource group.
-test specification.
-S_small (basic specification).
-S_medium (general specifications).
-S_large (professional specification).

Data service resource group.
-Test specification.
-ds_s(Basic specification).
-ds_m (general specifications).
-ds_l (professional specification).
     */
    public $Type;

    /**
     * @var integer Renewal period, unit month (cannot include both modification, renewal, and resource package quantity changes).
     */
    public $PurchasePeriod;

    /**
     * @var ResourceNumber Add or reduce the number of resource packages (modification, renewal, and changing the number of resource packages cannot include both).
     */
    public $Number;

    /**
     * @var boolean Auto-Renewal or not. the renewal parameters take effect when PurchasePeriod is not empty.
     */
    public $AutoRenewEnabled;

    /**
     * @param string $Id Resource group ID
     * @param string $Type **Change configuration (cannot include both modification, renewal, and resource package quantity changes). configuration changes cannot modify the resource group type.**.

Real-Time integration resource group.  
-i32c (real-time data sync - 16c64G).

Offline integration resource group.
-integrated (offline data sync-8C16G).
-i16 (offline data sync-8C32G).

Scheduling resource group.
-test specification.
-S_small (basic specification).
-S_medium (general specifications).
-S_large (professional specification).

Data service resource group.
-Test specification.
-ds_s(Basic specification).
-ds_m (general specifications).
-ds_l (professional specification).
     * @param integer $PurchasePeriod Renewal period, unit month (cannot include both modification, renewal, and resource package quantity changes).
     * @param ResourceNumber $Number Add or reduce the number of resource packages (modification, renewal, and changing the number of resource packages cannot include both).
     * @param boolean $AutoRenewEnabled Auto-Renewal or not. the renewal parameters take effect when PurchasePeriod is not empty.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PurchasePeriod",$param) and $param["PurchasePeriod"] !== null) {
            $this->PurchasePeriod = $param["PurchasePeriod"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = new ResourceNumber();
            $this->Number->deserialize($param["Number"]);
        }

        if (array_key_exists("AutoRenewEnabled",$param) and $param["AutoRenewEnabled"] !== null) {
            $this->AutoRenewEnabled = $param["AutoRenewEnabled"];
        }
    }
}
