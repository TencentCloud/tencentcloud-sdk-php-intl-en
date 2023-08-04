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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameters for upgrading to an LCU-supported instance
 *
 * @method string getLoadBalancerId() Obtain ID of the CLB instance
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the CLB instance
 * @method string getSlaType() Obtain u200dTo upgrade the instance to an LCU-support instance, set it to `SLA`. `SLA` indicates Super Large 1. 
If you have activated Super Large LCU-supported instances, `SLA` indicates the Super Large 4 specification. Super u200dLarge LCU-supported specification is in beta now. u200cu200dTo join the beta, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method void setSlaType(string $SlaType) Set u200dTo upgrade the instance to an LCU-support instance, set it to `SLA`. `SLA` indicates Super Large 1. 
If you have activated Super Large LCU-supported instances, `SLA` indicates the Super Large 4 specification. Super u200dLarge LCU-supported specification is in beta now. u200cu200dTo join the beta, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 */
class SlaUpdateParam extends AbstractModel
{
    /**
     * @var string ID of the CLB instance
     */
    public $LoadBalancerId;

    /**
     * @var string u200dTo upgrade the instance to an LCU-support instance, set it to `SLA`. `SLA` indicates Super Large 1. 
If you have activated Super Large LCU-supported instances, `SLA` indicates the Super Large 4 specification. Super u200dLarge LCU-supported specification is in beta now. u200cu200dTo join the beta, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
     */
    public $SlaType;

    /**
     * @param string $LoadBalancerId ID of the CLB instance
     * @param string $SlaType u200dTo upgrade the instance to an LCU-support instance, set it to `SLA`. `SLA` indicates Super Large 1. 
If you have activated Super Large LCU-supported instances, `SLA` indicates the Super Large 4 specification. Super u200dLarge LCU-supported specification is in beta now. u200cu200dTo join the beta, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
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

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }
    }
}
