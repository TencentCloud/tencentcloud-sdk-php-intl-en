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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the public network accessibility of instances created with the launch configuration, and declares the public network billing mode and maximum bandwidth of the instance.
 *
 * @method string getInternetChargeType() Obtain Network billing type. Valid values:
<li>Pay-as-you-go by traffic: TRAFFIC_POSTPAID_BY_HOUR</li>
<li>Pay-as-you-go by bandwidth: BANDWIDTH_POSTPAID_BY_HOUR</li>
 * @method void setInternetChargeType(string $InternetChargeType) Set Network billing type. Valid values:
<li>Pay-as-you-go by traffic: TRAFFIC_POSTPAID_BY_HOUR</li>
<li>Pay-as-you-go by bandwidth: BANDWIDTH_POSTPAID_BY_HOUR</li>
 * @method integer getInternetMaxBandwidthOut() Obtain Maximum outbound public bandwidth, in the unit of Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Maximum outbound public bandwidth, in the unit of Mbps.
 * @method boolean getPublicIpAssigned() Obtain Indicates whether a public IP is assigned.
 * @method void setPublicIpAssigned(boolean $PublicIpAssigned) Set Indicates whether a public IP is assigned.
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var string Network billing type. Valid values:
<li>Pay-as-you-go by traffic: TRAFFIC_POSTPAID_BY_HOUR</li>
<li>Pay-as-you-go by bandwidth: BANDWIDTH_POSTPAID_BY_HOUR</li>
     */
    public $InternetChargeType;

    /**
     * @var integer Maximum outbound public bandwidth, in the unit of Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean Indicates whether a public IP is assigned.
     */
    public $PublicIpAssigned;

    /**
     * @param string $InternetChargeType Network billing type. Valid values:
<li>Pay-as-you-go by traffic: TRAFFIC_POSTPAID_BY_HOUR</li>
<li>Pay-as-you-go by bandwidth: BANDWIDTH_POSTPAID_BY_HOUR</li>
     * @param integer $InternetMaxBandwidthOut Maximum outbound public bandwidth, in the unit of Mbps.
     * @param boolean $PublicIpAssigned Indicates whether a public IP is assigned.
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
        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("PublicIpAssigned",$param) and $param["PublicIpAssigned"] !== null) {
            $this->PublicIpAssigned = $param["PublicIpAssigned"];
        }
    }
}
