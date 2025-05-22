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
 * Network billing mode based on maximum outbound bandwidth
 *
 * @method string getInternetChargeType() Obtain TRAFFIC_POSTPAID_BY_HOUR: Postpaid by traffic on an hourly basis. BANDWIDTH_POSTPAID_BY_HOUR: Postpaid by bandwidth on an hourly basis. International site users do not support this billing mode. BANDWIDTH_PACKAGE: Charged by bandwidth package. BANDWIDTH_PREPAID: Bandwidth prepaid.
 * @method void setInternetChargeType(string $InternetChargeType) Set TRAFFIC_POSTPAID_BY_HOUR: Postpaid by traffic on an hourly basis. BANDWIDTH_POSTPAID_BY_HOUR: Postpaid by bandwidth on an hourly basis. International site users do not support this billing mode. BANDWIDTH_PACKAGE: Charged by bandwidth package. BANDWIDTH_PREPAID: Bandwidth prepaid.
 * @method integer getInternetMaxBandwidthOut() Obtain Maximum outbound bandwidth, in Mbps. This parameter is valid only for public network shared, LCU-supported, and exclusive CLB instances and private network LCU-supported CLB instances.
- The range of the maximum outbound bandwidth for public network shared and exclusive CLB instances is 1 Mbps to 2,048 Mbps.
- The range of the maximum outbound bandwidth for public network and private network LCU-supported CLB instances is 1 Mbps to 61,440 Mbps.
(If this parameter is not specified when CreateLoadBalancer is called to create a CLB instance, the default value of 10 Mbps is used. This value can be modified.)
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Maximum outbound bandwidth, in Mbps. This parameter is valid only for public network shared, LCU-supported, and exclusive CLB instances and private network LCU-supported CLB instances.
- The range of the maximum outbound bandwidth for public network shared and exclusive CLB instances is 1 Mbps to 2,048 Mbps.
- The range of the maximum outbound bandwidth for public network and private network LCU-supported CLB instances is 1 Mbps to 61,440 Mbps.
(If this parameter is not specified when CreateLoadBalancer is called to create a CLB instance, the default value of 10 Mbps is used. This value can be modified.)
 * @method string getBandwidthpkgSubType() Obtain Bandwidth package type, such as SINGLEISP (single-line) and BGP (multi-line).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidthpkgSubType(string $BandwidthpkgSubType) Set Bandwidth package type, such as SINGLEISP (single-line) and BGP (multi-line).Note: This field may return null, indicating that no valid values can be obtained.
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var string TRAFFIC_POSTPAID_BY_HOUR: Postpaid by traffic on an hourly basis. BANDWIDTH_POSTPAID_BY_HOUR: Postpaid by bandwidth on an hourly basis. International site users do not support this billing mode. BANDWIDTH_PACKAGE: Charged by bandwidth package. BANDWIDTH_PREPAID: Bandwidth prepaid.
     */
    public $InternetChargeType;

    /**
     * @var integer Maximum outbound bandwidth, in Mbps. This parameter is valid only for public network shared, LCU-supported, and exclusive CLB instances and private network LCU-supported CLB instances.
- The range of the maximum outbound bandwidth for public network shared and exclusive CLB instances is 1 Mbps to 2,048 Mbps.
- The range of the maximum outbound bandwidth for public network and private network LCU-supported CLB instances is 1 Mbps to 61,440 Mbps.
(If this parameter is not specified when CreateLoadBalancer is called to create a CLB instance, the default value of 10 Mbps is used. This value can be modified.)
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Bandwidth package type, such as SINGLEISP (single-line) and BGP (multi-line).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BandwidthpkgSubType;

    /**
     * @param string $InternetChargeType TRAFFIC_POSTPAID_BY_HOUR: Postpaid by traffic on an hourly basis. BANDWIDTH_POSTPAID_BY_HOUR: Postpaid by bandwidth on an hourly basis. International site users do not support this billing mode. BANDWIDTH_PACKAGE: Charged by bandwidth package. BANDWIDTH_PREPAID: Bandwidth prepaid.
     * @param integer $InternetMaxBandwidthOut Maximum outbound bandwidth, in Mbps. This parameter is valid only for public network shared, LCU-supported, and exclusive CLB instances and private network LCU-supported CLB instances.
- The range of the maximum outbound bandwidth for public network shared and exclusive CLB instances is 1 Mbps to 2,048 Mbps.
- The range of the maximum outbound bandwidth for public network and private network LCU-supported CLB instances is 1 Mbps to 61,440 Mbps.
(If this parameter is not specified when CreateLoadBalancer is called to create a CLB instance, the default value of 10 Mbps is used. This value can be modified.)
     * @param string $BandwidthpkgSubType Bandwidth package type, such as SINGLEISP (single-line) and BGP (multi-line).Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("BandwidthpkgSubType",$param) and $param["BandwidthpkgSubType"] !== null) {
            $this->BandwidthpkgSubType = $param["BandwidthpkgSubType"];
        }
    }
}
