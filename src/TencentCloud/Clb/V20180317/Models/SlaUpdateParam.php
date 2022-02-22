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
 * Instance specification adjustment parameters
 *
 * @method string getLoadBalancerId() Obtain ID of the CLB instance
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the CLB instance
 * @method string getSlaType() Obtain To upgrade to LCU-supported CLB instances. It must be `SLA`.
 * @method void setSlaType(string $SlaType) Set To upgrade to LCU-supported CLB instances. It must be `SLA`.
 */
class SlaUpdateParam extends AbstractModel
{
    /**
     * @var string ID of the CLB instance
     */
    public $LoadBalancerId;

    /**
     * @var string To upgrade to LCU-supported CLB instances. It must be `SLA`.
     */
    public $SlaType;

    /**
     * @param string $LoadBalancerId ID of the CLB instance
     * @param string $SlaType To upgrade to LCU-supported CLB instances. It must be `SLA`.
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
