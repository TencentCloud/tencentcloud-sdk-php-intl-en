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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network billing mode, maximum outbound bandwidth
 *
 * @method string getInternetChargeType() Obtain TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic on an hourly basis;
 * @method void setInternetChargeType(string $InternetChargeType) Set TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic on an hourly basis;
 * @method integer getInternetMaxBandwidthOut() Obtain Maximum outbound bandwidth in Mbps. It applies only to shared, LCU-supported, and exclusive CLB instances of the public network type and LCU-supported CLB instances of the private network type.
-For shared type and exclusive CLB instances with public network attributes, the maximum outbound bandwidth ranges from 1Mbps to 2048Mbps.
-For LCU-supported CLB instances with public network attributes and private network attributes, the maximum outbound bandwidth ranges from 1Mbps to 61440Mbps.
(If this parameter is not specified when CreateLoadBalancer is called to create a CLB instance, the default value of 10 Mbps is used. This value can be modified.)
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Maximum outbound bandwidth in Mbps. It applies only to shared, LCU-supported, and exclusive CLB instances of the public network type and LCU-supported CLB instances of the private network type.
-For shared type and exclusive CLB instances with public network attributes, the maximum outbound bandwidth ranges from 1Mbps to 2048Mbps.
-For LCU-supported CLB instances with public network attributes and private network attributes, the maximum outbound bandwidth ranges from 1Mbps to 61440Mbps.
(If this parameter is not specified when CreateLoadBalancer is called to create a CLB instance, the default value of 10 Mbps is used. This value can be modified.)
 * @method string getBandwidthPackageSubType() Obtain Bandwidth package type, such as SINGLEISP (single ISP) and BGP (multi ISP).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidthPackageSubType(string $BandwidthPackageSubType) Set Bandwidth package type, such as SINGLEISP (single ISP) and BGP (multi ISP).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var string TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic on an hourly basis;
     */
    public $InternetChargeType;

    /**
     * @var integer Maximum outbound bandwidth in Mbps. It applies only to shared, LCU-supported, and exclusive CLB instances of the public network type and LCU-supported CLB instances of the private network type.
-For shared type and exclusive CLB instances with public network attributes, the maximum outbound bandwidth ranges from 1Mbps to 2048Mbps.
-For LCU-supported CLB instances with public network attributes and private network attributes, the maximum outbound bandwidth ranges from 1Mbps to 61440Mbps.
(If this parameter is not specified when CreateLoadBalancer is called to create a CLB instance, the default value of 10 Mbps is used. This value can be modified.)
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Bandwidth package type, such as SINGLEISP (single ISP) and BGP (multi ISP).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BandwidthPackageSubType;

    /**
     * @param string $InternetChargeType TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic on an hourly basis;
     * @param integer $InternetMaxBandwidthOut Maximum outbound bandwidth in Mbps. It applies only to shared, LCU-supported, and exclusive CLB instances of the public network type and LCU-supported CLB instances of the private network type.
-For shared type and exclusive CLB instances with public network attributes, the maximum outbound bandwidth ranges from 1Mbps to 2048Mbps.
-For LCU-supported CLB instances with public network attributes and private network attributes, the maximum outbound bandwidth ranges from 1Mbps to 61440Mbps.
(If this parameter is not specified when CreateLoadBalancer is called to create a CLB instance, the default value of 10 Mbps is used. This value can be modified.)
     * @param string $BandwidthPackageSubType Bandwidth package type, such as SINGLEISP (single ISP) and BGP (multi ISP).
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("BandwidthPackageSubType",$param) and $param["BandwidthPackageSubType"] !== null) {
            $this->BandwidthPackageSubType = $param["BandwidthPackageSubType"];
        }
    }
}
