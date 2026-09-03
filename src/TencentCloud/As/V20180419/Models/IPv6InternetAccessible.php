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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * This describes the IPv6 address public network accessibility of the instance created by a launch configuration and declares the public network usage billing method of the IPv6 address and the maximum bandwidth.
 *
 * @method string getInternetChargeType() Obtain Network billing mode. Values include TRAFFIC_POSTPAID_BY_HOUR and BANDWIDTH_PACKAGE. Default value: TRAFFIC_POSTPAID_BY_HOUR. To view the current account type, see Account Type Description (https://www.tencentcloud.com/document/product/1199/49090?from_cn_redirect=1#judge).
<br><li> IPv6 supports TRAFFIC_POSTPAID_BY_HOUR for standard account type.
<br><li> IPv6 supports BANDWIDTH_PACKAGE for classic account type.
 * @method void setInternetChargeType(string $InternetChargeType) Set Network billing mode. Values include TRAFFIC_POSTPAID_BY_HOUR and BANDWIDTH_PACKAGE. Default value: TRAFFIC_POSTPAID_BY_HOUR. To view the current account type, see Account Type Description (https://www.tencentcloud.com/document/product/1199/49090?from_cn_redirect=1#judge).
<br><li> IPv6 supports TRAFFIC_POSTPAID_BY_HOUR for standard account type.
<br><li> IPv6 supports BANDWIDTH_PACKAGE for classic account type.
 * @method integer getInternetMaxBandwidthOut() Obtain Public network outbound bandwidth cap, unit: Mbps.<br>Default value: 0. At this point, no public network bandwidth is allocated to IPv6. The bandwidth cap range varies by model, availability zone, and billing mode. For specific limitations, see [Public Network Bandwidth Limit](https://www.tencentcloud.com/document/product/213/12523?from_cn_redirect=1).
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Public network outbound bandwidth cap, unit: Mbps.<br>Default value: 0. At this point, no public network bandwidth is allocated to IPv6. The bandwidth cap range varies by model, availability zone, and billing mode. For specific limitations, see [Public Network Bandwidth Limit](https://www.tencentcloud.com/document/product/213/12523?from_cn_redirect=1).
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID, which can be obtained from the `BandwidthPackageId` in the return value from the [DescribeBandwidthPackages](https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1) API.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID, which can be obtained from the `BandwidthPackageId` in the return value from the [DescribeBandwidthPackages](https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1) API.
 */
class IPv6InternetAccessible extends AbstractModel
{
    /**
     * @var string Network billing mode. Values include TRAFFIC_POSTPAID_BY_HOUR and BANDWIDTH_PACKAGE. Default value: TRAFFIC_POSTPAID_BY_HOUR. To view the current account type, see Account Type Description (https://www.tencentcloud.com/document/product/1199/49090?from_cn_redirect=1#judge).
<br><li> IPv6 supports TRAFFIC_POSTPAID_BY_HOUR for standard account type.
<br><li> IPv6 supports BANDWIDTH_PACKAGE for classic account type.
     */
    public $InternetChargeType;

    /**
     * @var integer Public network outbound bandwidth cap, unit: Mbps.<br>Default value: 0. At this point, no public network bandwidth is allocated to IPv6. The bandwidth cap range varies by model, availability zone, and billing mode. For specific limitations, see [Public Network Bandwidth Limit](https://www.tencentcloud.com/document/product/213/12523?from_cn_redirect=1).
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Bandwidth package ID, which can be obtained from the `BandwidthPackageId` in the return value from the [DescribeBandwidthPackages](https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1) API.
     */
    public $BandwidthPackageId;

    /**
     * @param string $InternetChargeType Network billing mode. Values include TRAFFIC_POSTPAID_BY_HOUR and BANDWIDTH_PACKAGE. Default value: TRAFFIC_POSTPAID_BY_HOUR. To view the current account type, see Account Type Description (https://www.tencentcloud.com/document/product/1199/49090?from_cn_redirect=1#judge).
<br><li> IPv6 supports TRAFFIC_POSTPAID_BY_HOUR for standard account type.
<br><li> IPv6 supports BANDWIDTH_PACKAGE for classic account type.
     * @param integer $InternetMaxBandwidthOut Public network outbound bandwidth cap, unit: Mbps.<br>Default value: 0. At this point, no public network bandwidth is allocated to IPv6. The bandwidth cap range varies by model, availability zone, and billing mode. For specific limitations, see [Public Network Bandwidth Limit](https://www.tencentcloud.com/document/product/213/12523?from_cn_redirect=1).
     * @param string $BandwidthPackageId Bandwidth package ID, which can be obtained from the `BandwidthPackageId` in the return value from the [DescribeBandwidthPackages](https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1) API.
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

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}
