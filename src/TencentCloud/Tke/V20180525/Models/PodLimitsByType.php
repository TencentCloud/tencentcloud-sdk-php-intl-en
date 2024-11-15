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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The maximum number of Pods in VPC-CNI mode supported by a model
 *
 * @method integer getTKERouteENINonStaticIP() Obtain The number of Pods supported by a TKE shared ENI in non-static IP address mode
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setTKERouteENINonStaticIP(integer $TKERouteENINonStaticIP) Set The number of Pods supported by a TKE shared ENI in non-static IP address mode
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method integer getTKERouteENIStaticIP() Obtain The number of Pods supported by a TKE shared ENI in static IP address mode
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setTKERouteENIStaticIP(integer $TKERouteENIStaticIP) Set The number of Pods supported by a TKE shared ENI in static IP address mode
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method integer getTKEDirectENI() Obtain The number of Pods supported by TKE independent ENI mode
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setTKEDirectENI(integer $TKEDirectENI) Set The number of Pods supported by TKE independent ENI mode
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method integer getTKESubENI() Obtain Number of Pods supported by TKE relay network card mode
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setTKESubENI(integer $TKESubENI) Set Number of Pods supported by TKE relay network card mode
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class PodLimitsByType extends AbstractModel
{
    /**
     * @var integer The number of Pods supported by a TKE shared ENI in non-static IP address mode
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $TKERouteENINonStaticIP;

    /**
     * @var integer The number of Pods supported by a TKE shared ENI in static IP address mode
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $TKERouteENIStaticIP;

    /**
     * @var integer The number of Pods supported by TKE independent ENI mode
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $TKEDirectENI;

    /**
     * @var integer Number of Pods supported by TKE relay network card mode
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $TKESubENI;

    /**
     * @param integer $TKERouteENINonStaticIP The number of Pods supported by a TKE shared ENI in non-static IP address mode
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param integer $TKERouteENIStaticIP The number of Pods supported by a TKE shared ENI in static IP address mode
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param integer $TKEDirectENI The number of Pods supported by TKE independent ENI mode
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param integer $TKESubENI Number of Pods supported by TKE relay network card mode
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("TKERouteENINonStaticIP",$param) and $param["TKERouteENINonStaticIP"] !== null) {
            $this->TKERouteENINonStaticIP = $param["TKERouteENINonStaticIP"];
        }

        if (array_key_exists("TKERouteENIStaticIP",$param) and $param["TKERouteENIStaticIP"] !== null) {
            $this->TKERouteENIStaticIP = $param["TKERouteENIStaticIP"];
        }

        if (array_key_exists("TKEDirectENI",$param) and $param["TKEDirectENI"] !== null) {
            $this->TKEDirectENI = $param["TKEDirectENI"];
        }

        if (array_key_exists("TKESubENI",$param) and $param["TKESubENI"] !== null) {
            $this->TKESubENI = $param["TKESubENI"];
        }
    }
}
