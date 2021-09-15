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
 * ModifyLoadBalancerAttributes request structure.
 *
 * @method string getLoadBalancerId() Obtain Unique CLB ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Unique CLB ID
 * @method string getLoadBalancerName() Obtain CLB instance name
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name
 * @method TargetRegionInfo getTargetRegionInfo() Obtain Region information of the real server bound to a CLB.
 * @method void setTargetRegionInfo(TargetRegionInfo $TargetRegionInfo) Set Region information of the real server bound to a CLB.
 * @method InternetAccessible getInternetChargeInfo() Obtain Network billing parameter
 * @method void setInternetChargeInfo(InternetAccessible $InternetChargeInfo) Set Network billing parameter
 * @method boolean getLoadBalancerPassToTarget() Obtain Whether the target opens traffic from CLB to the internet. If yes (true), only security groups on CLB will be verified; if no (false), security groups on both CLB and backend instance need to be verified.
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) Set Whether the target opens traffic from CLB to the internet. If yes (true), only security groups on CLB will be verified; if no (false), security groups on both CLB and backend instance need to be verified.
 * @method boolean getSnatPro() Obtain Whether to enable SnatPro
 * @method void setSnatPro(boolean $SnatPro) Set Whether to enable SnatPro
 * @method boolean getDeleteProtect() Obtain Specifies whether to enable deletion protection.
 * @method void setDeleteProtect(boolean $DeleteProtect) Set Specifies whether to enable deletion protection.
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
     * @var InternetAccessible Network billing parameter
     */
    public $InternetChargeInfo;

    /**
     * @var boolean Whether the target opens traffic from CLB to the internet. If yes (true), only security groups on CLB will be verified; if no (false), security groups on both CLB and backend instance need to be verified.
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var boolean Whether to enable SnatPro
     */
    public $SnatPro;

    /**
     * @var boolean Specifies whether to enable deletion protection.
     */
    public $DeleteProtect;

    /**
     * @param string $LoadBalancerId Unique CLB ID
     * @param string $LoadBalancerName CLB instance name
     * @param TargetRegionInfo $TargetRegionInfo Region information of the real server bound to a CLB.
     * @param InternetAccessible $InternetChargeInfo Network billing parameter
     * @param boolean $LoadBalancerPassToTarget Whether the target opens traffic from CLB to the internet. If yes (true), only security groups on CLB will be verified; if no (false), security groups on both CLB and backend instance need to be verified.
     * @param boolean $SnatPro Whether to enable SnatPro
     * @param boolean $DeleteProtect Specifies whether to enable deletion protection.
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

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }

        if (array_key_exists("SnatPro",$param) and $param["SnatPro"] !== null) {
            $this->SnatPro = $param["SnatPro"];
        }

        if (array_key_exists("DeleteProtect",$param) and $param["DeleteProtect"] !== null) {
            $this->DeleteProtect = $param["DeleteProtect"];
        }
    }
}
