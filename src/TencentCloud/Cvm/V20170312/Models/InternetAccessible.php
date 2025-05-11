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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the accessibility of an instance in the public network, including its network billing method, maximum bandwidth, etc.
 *
 * @method string getInternetChargeType() Obtain Network connection billing plan. Valid value: <br><li>TRAFFIC_POSTPAID_BY_HOUR: pay after use. You are billed for your traffic, by the hour.
 * @method void setInternetChargeType(string $InternetChargeType) Set Network connection billing plan. Valid value: <br><li>TRAFFIC_POSTPAID_BY_HOUR: pay after use. You are billed for your traffic, by the hour.
 * @method integer getInternetMaxBandwidthOut() Obtain The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/12523?from_cn_redirect=1).
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/12523?from_cn_redirect=1).
 * @method boolean getPublicIpAssigned() Obtain Whether to allocate a public IP address. Valid values:<br><li>true: Allocate a public IP address.</li><li>false: Do not allocate a public IP address.</li><br>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable the public IP address. The public IP address is enabled by default. When the public network bandwidth is 0, allocating the public IP address is not supported. This parameter is only used as an input parameter in the RunInstances API.
 * @method void setPublicIpAssigned(boolean $PublicIpAssigned) Set Whether to allocate a public IP address. Valid values:<br><li>true: Allocate a public IP address.</li><li>false: Do not allocate a public IP address.</li><br>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable the public IP address. The public IP address is enabled by default. When the public network bandwidth is 0, allocating the public IP address is not supported. This parameter is only used as an input parameter in the RunInstances API.
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID. it can be obtained through the `BandwidthPackageId` in the return value from the DescribeBandwidthPackages api. this parameter is used as an input parameter only in the RunInstances api.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID. it can be obtained through the `BandwidthPackageId` in the return value from the DescribeBandwidthPackages api. this parameter is used as an input parameter only in the RunInstances api.
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var string Network connection billing plan. Valid value: <br><li>TRAFFIC_POSTPAID_BY_HOUR: pay after use. You are billed for your traffic, by the hour.
     */
    public $InternetChargeType;

    /**
     * @var integer The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/12523?from_cn_redirect=1).
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean Whether to allocate a public IP address. Valid values:<br><li>true: Allocate a public IP address.</li><li>false: Do not allocate a public IP address.</li><br>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable the public IP address. The public IP address is enabled by default. When the public network bandwidth is 0, allocating the public IP address is not supported. This parameter is only used as an input parameter in the RunInstances API.
     */
    public $PublicIpAssigned;

    /**
     * @var string Bandwidth package ID. it can be obtained through the `BandwidthPackageId` in the return value from the DescribeBandwidthPackages api. this parameter is used as an input parameter only in the RunInstances api.
     */
    public $BandwidthPackageId;

    /**
     * @param string $InternetChargeType Network connection billing plan. Valid value: <br><li>TRAFFIC_POSTPAID_BY_HOUR: pay after use. You are billed for your traffic, by the hour.
     * @param integer $InternetMaxBandwidthOut The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/12523?from_cn_redirect=1).
     * @param boolean $PublicIpAssigned Whether to allocate a public IP address. Valid values:<br><li>true: Allocate a public IP address.</li><li>false: Do not allocate a public IP address.</li><br>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable the public IP address. The public IP address is enabled by default. When the public network bandwidth is 0, allocating the public IP address is not supported. This parameter is only used as an input parameter in the RunInstances API.
     * @param string $BandwidthPackageId Bandwidth package ID. it can be obtained through the `BandwidthPackageId` in the return value from the DescribeBandwidthPackages api. this parameter is used as an input parameter only in the RunInstances api.
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
