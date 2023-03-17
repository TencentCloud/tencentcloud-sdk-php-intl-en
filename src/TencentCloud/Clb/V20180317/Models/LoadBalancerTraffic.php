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
 * CLB instance traffic data
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getLoadBalancerName() Obtain CLB instance name
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name
 * @method string getRegion() Obtain CLB instance region
 * @method void setRegion(string $Region) Set CLB instance region
 * @method string getVip() Obtain CLB instance VIP
 * @method void setVip(string $Vip) Set CLB instance VIP
 * @method float getOutBandwidth() Obtain Maximum outbound bandwidth in Mbps
 * @method void setOutBandwidth(float $OutBandwidth) Set Maximum outbound bandwidth in Mbps
 * @method string getDomain() Obtain CLB domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set CLB domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class LoadBalancerTraffic extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var string CLB instance name
     */
    public $LoadBalancerName;

    /**
     * @var string CLB instance region
     */
    public $Region;

    /**
     * @var string CLB instance VIP
     */
    public $Vip;

    /**
     * @var float Maximum outbound bandwidth in Mbps
     */
    public $OutBandwidth;

    /**
     * @var string CLB domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $LoadBalancerName CLB instance name
     * @param string $Region CLB instance region
     * @param string $Vip CLB instance VIP
     * @param float $OutBandwidth Maximum outbound bandwidth in Mbps
     * @param string $Domain CLB domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("OutBandwidth",$param) and $param["OutBandwidth"] !== null) {
            $this->OutBandwidth = $param["OutBandwidth"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
