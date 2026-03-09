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
 * Integration resource group.
 *
 * @method ResourceGroupSpecification getRealTimeDataSync() Obtain Real-Time integration resource group.

-i32c (real-time data sync - 16c64G).
 * @method void setRealTimeDataSync(ResourceGroupSpecification $RealTimeDataSync) Set Real-Time integration resource group.

-i32c (real-time data sync - 16c64G).
 * @method ResourceGroupSpecification getOfflineDataSync() Obtain Offline integration resource group.

-integrated (offline data sync-8C16G).
-i16 (offline data sync-8C32G).
 * @method void setOfflineDataSync(ResourceGroupSpecification $OfflineDataSync) Set Offline integration resource group.

-integrated (offline data sync-8C16G).
-i16 (offline data sync-8C32G).
 */
class IntegrationResource extends AbstractModel
{
    /**
     * @var ResourceGroupSpecification Real-Time integration resource group.

-i32c (real-time data sync - 16c64G).
     */
    public $RealTimeDataSync;

    /**
     * @var ResourceGroupSpecification Offline integration resource group.

-integrated (offline data sync-8C16G).
-i16 (offline data sync-8C32G).
     */
    public $OfflineDataSync;

    /**
     * @param ResourceGroupSpecification $RealTimeDataSync Real-Time integration resource group.

-i32c (real-time data sync - 16c64G).
     * @param ResourceGroupSpecification $OfflineDataSync Offline integration resource group.

-integrated (offline data sync-8C16G).
-i16 (offline data sync-8C32G).
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
        if (array_key_exists("RealTimeDataSync",$param) and $param["RealTimeDataSync"] !== null) {
            $this->RealTimeDataSync = new ResourceGroupSpecification();
            $this->RealTimeDataSync->deserialize($param["RealTimeDataSync"]);
        }

        if (array_key_exists("OfflineDataSync",$param) and $param["OfflineDataSync"] !== null) {
            $this->OfflineDataSync = new ResourceGroupSpecification();
            $this->OfflineDataSync->deserialize($param["OfflineDataSync"]);
        }
    }
}
