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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * This describes the internet accessibility of the instance created by a launch configuration and declares the internet usage billing method of the instance and the maximum bandwidth
 *
 * @method string getInternetChargeType() Obtain Network billing type. Valid values: <li>BANDWIDTH_PREPAID: prepaid by bandwidth;</li> <li>TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic per hour;</li> <li>BANDWIDTH_POSTPAID_BY_HOUR: postpaid by bandwidth per hour;</li> <li>BANDWIDTH_PACKAGE: bandwidth package users.</li> Default value: TRAFFIC_POSTPAID_BY_HOUR.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInternetChargeType(string $InternetChargeType) Set Network billing type. Valid values: <li>BANDWIDTH_PREPAID: prepaid by bandwidth;</li> <li>TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic per hour;</li> <li>BANDWIDTH_POSTPAID_BY_HOUR: postpaid by bandwidth per hour;</li> <li>BANDWIDTH_PACKAGE: bandwidth package users.</li> Default value: TRAFFIC_POSTPAID_BY_HOUR.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInternetMaxBandwidthOut() Obtain The maximum outbound bandwidth in Mbps of the public network. The default value is 0 Mbps. The upper limit of bandwidth varies by model. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/509?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The maximum outbound bandwidth in Mbps of the public network. The default value is 0 Mbps. The upper limit of bandwidth varies by model. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/509?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getPublicIpAssigned() Obtain Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li> <li>FALSE: Do not allocate a public IP address.</li> When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature based on your needs. By default, this feature is enabled. When the public network bandwidth is 0, public IP address assignment is not allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIpAssigned(boolean $PublicIpAssigned) Set Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li> <li>FALSE: Do not allocate a public IP address.</li> When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature based on your needs. By default, this feature is enabled. When the public network bandwidth is 0, public IP address assignment is not allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID. You can obtain the ID from the `BandwidthPackageId` field in the response of the [DescribeBandwidthPackages](https://intl.cloud.tencent.com/document/api/215/19209?from_cn_redirect=1) API.
Note: this field may return null, indicating that no valid value was found.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID. You can obtain the ID from the `BandwidthPackageId` field in the response of the [DescribeBandwidthPackages](https://intl.cloud.tencent.com/document/api/215/19209?from_cn_redirect=1) API.
Note: this field may return null, indicating that no valid value was found.
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var string Network billing type. Valid values: <li>BANDWIDTH_PREPAID: prepaid by bandwidth;</li> <li>TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic per hour;</li> <li>BANDWIDTH_POSTPAID_BY_HOUR: postpaid by bandwidth per hour;</li> <li>BANDWIDTH_PACKAGE: bandwidth package users.</li> Default value: TRAFFIC_POSTPAID_BY_HOUR.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InternetChargeType;

    /**
     * @var integer The maximum outbound bandwidth in Mbps of the public network. The default value is 0 Mbps. The upper limit of bandwidth varies by model. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/509?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li> <li>FALSE: Do not allocate a public IP address.</li> When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature based on your needs. By default, this feature is enabled. When the public network bandwidth is 0, public IP address assignment is not allowed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicIpAssigned;

    /**
     * @var string Bandwidth package ID. You can obtain the ID from the `BandwidthPackageId` field in the response of the [DescribeBandwidthPackages](https://intl.cloud.tencent.com/document/api/215/19209?from_cn_redirect=1) API.
Note: this field may return null, indicating that no valid value was found.
     */
    public $BandwidthPackageId;

    /**
     * @param string $InternetChargeType Network billing type. Valid values: <li>BANDWIDTH_PREPAID: prepaid by bandwidth;</li> <li>TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic per hour;</li> <li>BANDWIDTH_POSTPAID_BY_HOUR: postpaid by bandwidth per hour;</li> <li>BANDWIDTH_PACKAGE: bandwidth package users.</li> Default value: TRAFFIC_POSTPAID_BY_HOUR.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InternetMaxBandwidthOut The maximum outbound bandwidth in Mbps of the public network. The default value is 0 Mbps. The upper limit of bandwidth varies by model. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/509?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $PublicIpAssigned Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li> <li>FALSE: Do not allocate a public IP address.</li> When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature based on your needs. By default, this feature is enabled. When the public network bandwidth is 0, public IP address assignment is not allowed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BandwidthPackageId Bandwidth package ID. You can obtain the ID from the `BandwidthPackageId` field in the response of the [DescribeBandwidthPackages](https://intl.cloud.tencent.com/document/api/215/19209?from_cn_redirect=1) API.
Note: this field may return null, indicating that no valid value was found.
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

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}
