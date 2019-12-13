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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInternetChargeType() 获取Network billing method. Valid values: <br><li>BANDWIDTH_PREPAID: prepaid; billed by bandwidth <br><li>TRAFFIC_POSTPAID_BY_HOUR: pay-as-you-go; billed by traffic on an hourly basis <br><li>BANDWIDTH_POSTPAID_BY_HOUR: pay-as-you-go; billed by bandwidth on an hourly basis <br><li>BANDWIDTH_PACKAGE: for bandwidth package users <br>Default value: same as the instance billing method for non-bandwidth package users.
 * @method void setInternetChargeType(string $InternetChargeType) 设置Network billing method. Valid values: <br><li>BANDWIDTH_PREPAID: prepaid; billed by bandwidth <br><li>TRAFFIC_POSTPAID_BY_HOUR: pay-as-you-go; billed by traffic on an hourly basis <br><li>BANDWIDTH_POSTPAID_BY_HOUR: pay-as-you-go; billed by bandwidth on an hourly basis <br><li>BANDWIDTH_PACKAGE: for bandwidth package users <br>Default value: same as the instance billing method for non-bandwidth package users.
 * @method integer getInternetMaxBandwidthOut() 获取The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://cloud.tencent.com/document/product/213/12523).
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://cloud.tencent.com/document/product/213/12523).
 * @method boolean getPublicIpAssigned() 获取Whether to assign a public IP. Valid values: <br><li>TRUE: Assign a public IP <br><li>FALSE: Do not assign a public IP <br><br>If the public network bandwidth is greater than 0 Mbps, you can choose whether to assign a public IP; by default a public IP will be assigned. If the public network bandwidth is 0 Mbps, you will not be able to assign a public IP.
 * @method void setPublicIpAssigned(boolean $PublicIpAssigned) 设置Whether to assign a public IP. Valid values: <br><li>TRUE: Assign a public IP <br><li>FALSE: Do not assign a public IP <br><br>If the public network bandwidth is greater than 0 Mbps, you can choose whether to assign a public IP; by default a public IP will be assigned. If the public network bandwidth is 0 Mbps, you will not be able to assign a public IP.
 * @method string getBandwidthPackageId() 获取Bandwidth package ID. To obatin the IDs, you can call [`DescribeBandwidthPackages`](https://cloud.tencent.com/document/api/215/19209) and look for the `BandwidthPackageId` fields in the response.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置Bandwidth package ID. To obatin the IDs, you can call [`DescribeBandwidthPackages`](https://cloud.tencent.com/document/api/215/19209) and look for the `BandwidthPackageId` fields in the response.
 */

/**
 *Describes the accessibility of an instance in the public network, including its network billing method, maximum bandwidth, etc.
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var string Network billing method. Valid values: <br><li>BANDWIDTH_PREPAID: prepaid; billed by bandwidth <br><li>TRAFFIC_POSTPAID_BY_HOUR: pay-as-you-go; billed by traffic on an hourly basis <br><li>BANDWIDTH_POSTPAID_BY_HOUR: pay-as-you-go; billed by bandwidth on an hourly basis <br><li>BANDWIDTH_PACKAGE: for bandwidth package users <br>Default value: same as the instance billing method for non-bandwidth package users.
     */
    public $InternetChargeType;

    /**
     * @var integer The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://cloud.tencent.com/document/product/213/12523).
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean Whether to assign a public IP. Valid values: <br><li>TRUE: Assign a public IP <br><li>FALSE: Do not assign a public IP <br><br>If the public network bandwidth is greater than 0 Mbps, you can choose whether to assign a public IP; by default a public IP will be assigned. If the public network bandwidth is 0 Mbps, you will not be able to assign a public IP.
     */
    public $PublicIpAssigned;

    /**
     * @var string Bandwidth package ID. To obatin the IDs, you can call [`DescribeBandwidthPackages`](https://cloud.tencent.com/document/api/215/19209) and look for the `BandwidthPackageId` fields in the response.
     */
    public $BandwidthPackageId;
    /**
     * @param string $InternetChargeType Network billing method. Valid values: <br><li>BANDWIDTH_PREPAID: prepaid; billed by bandwidth <br><li>TRAFFIC_POSTPAID_BY_HOUR: pay-as-you-go; billed by traffic on an hourly basis <br><li>BANDWIDTH_POSTPAID_BY_HOUR: pay-as-you-go; billed by bandwidth on an hourly basis <br><li>BANDWIDTH_PACKAGE: for bandwidth package users <br>Default value: same as the instance billing method for non-bandwidth package users.
     * @param integer $InternetMaxBandwidthOut The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://cloud.tencent.com/document/product/213/12523).
     * @param boolean $PublicIpAssigned Whether to assign a public IP. Valid values: <br><li>TRUE: Assign a public IP <br><li>FALSE: Do not assign a public IP <br><br>If the public network bandwidth is greater than 0 Mbps, you can choose whether to assign a public IP; by default a public IP will be assigned. If the public network bandwidth is 0 Mbps, you will not be able to assign a public IP.
     * @param string $BandwidthPackageId Bandwidth package ID. To obatin the IDs, you can call [`DescribeBandwidthPackages`](https://cloud.tencent.com/document/api/215/19209) and look for the `BandwidthPackageId` fields in the response.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
