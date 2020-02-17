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
 * @method string getLoadBalancerId() Obtain Unique CLB ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Unique CLB ID
 * @method string getLoadBalancerName() Obtain CLB instance name
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name
 * @method TargetRegionInfo getTargetRegionInfo() Obtain Region information of the real server bound to a CLB.
 * @method void setTargetRegionInfo(TargetRegionInfo $TargetRegionInfo) Set Region information of the real server bound to a CLB.
 * @method InternetAccessible getInternetChargeInfo() Obtain Network billing parameter. Note: The maximum outbound bandwidth can be modified, but the network billing method cannot be modified.
 * @method void setInternetChargeInfo(InternetAccessible $InternetChargeInfo) Set Network billing parameter. Note: The maximum outbound bandwidth can be modified, but the network billing method cannot be modified.
 */

/**
 *ModifyLoadBalancerAttributes request structure.
 */
class ModifyLoadBalancerAttributesRequest extends AbstractModel
{
    /**
     * @var string Unique CLB ID
     */
    public $LoadBalancerId;

    /**
     * @var string CLB instance name
     */
    public $LoadBalancerName;

    /**
     * @var TargetRegionInfo Region information of the real server bound to a CLB.
     */
    public $TargetRegionInfo;

    /**
     * @var InternetAccessible Network billing parameter. Note: The maximum outbound bandwidth can be modified, but the network billing method cannot be modified.
     */
    public $InternetChargeInfo;
    /**
     * @param string $LoadBalancerId Unique CLB ID
     * @param string $LoadBalancerName CLB instance name
     * @param TargetRegionInfo $TargetRegionInfo Region information of the real server bound to a CLB.
     * @param InternetAccessible $InternetChargeInfo Network billing parameter. Note: The maximum outbound bandwidth can be modified, but the network billing method cannot be modified.
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

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("TargetRegionInfo",$param) and $param["TargetRegionInfo"] !== null) {
            $this->TargetRegionInfo = new TargetRegionInfo();
            $this->TargetRegionInfo->deserialize($param["TargetRegionInfo"]);
        }

        if (array_key_exists("InternetChargeInfo",$param) and $param["InternetChargeInfo"] !== null) {
            $this->InternetChargeInfo = new InternetAccessible();
            $this->InternetChargeInfo->deserialize($param["InternetChargeInfo"]);
        }
    }
}
