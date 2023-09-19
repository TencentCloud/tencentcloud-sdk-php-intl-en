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
 * CreateClusterEndpoint request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getSubnetId() Obtain The ID of the subnet where the cluster's port is located (only needs to be entered when the non-public network access is enabled, and must be within the subnet of the cluster's VPC). 
 * @method void setSubnetId(string $SubnetId) Set The ID of the subnet where the cluster's port is located (only needs to be entered when the non-public network access is enabled, and must be within the subnet of the cluster's VPC). 
 * @method boolean getIsExtranet() Obtain Whether public network access is enabled or not (True = public network access, FALSE = private network access, with the default value as FALSE).
 * @method void setIsExtranet(boolean $IsExtranet) Set Whether public network access is enabled or not (True = public network access, FALSE = private network access, with the default value as FALSE).
 * @method string getDomain() Obtain The domain name
 * @method void setDomain(string $Domain) Set The domain name
 * @method string getSecurityGroup() Obtain The security group in use, which must be passed in when public access is enabled.
 * @method void setSecurityGroup(string $SecurityGroup) Set The security group in use, which must be passed in when public access is enabled.
 * @method string getExtensiveParameters() Obtain LB parameters in a JSON string. It is only required for public network access: {"InternetAccessible":{"InternetChargeType":"TRAFFIC_POSTPAID_BY_HOUR","InternetMaxBandwidthOut":200},"VipIsp":"","BandwidthPackageId":""}.
Description of parameters:
`InternetAccessible.InternetChargeType`: `TRAFFIC_POSTPAID_BY_HOUR` (Pay-as-you-go by traffic on an hourly basis); `BANDWIDTH_POSTPAID_BY_HOUR` (Pay-as-you-go by bandwidth on an hourly basis); `InternetAccessible.BANDWIDTH_PACKAGE` (Bill-by-bandwidth package).
`InternetMaxBandwidthOut`: Outbound bandwidth cap in Mbps. Value range: 0 - 2048. Default value: 10.
`VipIsp`: `CMCC` (China Mobile), `CTCC`·(China Telecom) and `CUCC` (China Unicom). If it is not specified, BGP line is used by default. To query ISPs available in a region, call `DescribeSingleIsp`. If this parameter is specified, the network billing mode must be `BANDWIDTH_PACKAGE`.
`BandwidthPackageId`: Bandwidth package ID. If this parameter is specified, only `BANDWIDTH_PACKAGE` is supported for `InternetAccessible.InternetChargeType`.
 * @method void setExtensiveParameters(string $ExtensiveParameters) Set LB parameters in a JSON string. It is only required for public network access: {"InternetAccessible":{"InternetChargeType":"TRAFFIC_POSTPAID_BY_HOUR","InternetMaxBandwidthOut":200},"VipIsp":"","BandwidthPackageId":""}.
Description of parameters:
`InternetAccessible.InternetChargeType`: `TRAFFIC_POSTPAID_BY_HOUR` (Pay-as-you-go by traffic on an hourly basis); `BANDWIDTH_POSTPAID_BY_HOUR` (Pay-as-you-go by bandwidth on an hourly basis); `InternetAccessible.BANDWIDTH_PACKAGE` (Bill-by-bandwidth package).
`InternetMaxBandwidthOut`: Outbound bandwidth cap in Mbps. Value range: 0 - 2048. Default value: 10.
`VipIsp`: `CMCC` (China Mobile), `CTCC`·(China Telecom) and `CUCC` (China Unicom). If it is not specified, BGP line is used by default. To query ISPs available in a region, call `DescribeSingleIsp`. If this parameter is specified, the network billing mode must be `BANDWIDTH_PACKAGE`.
`BandwidthPackageId`: Bandwidth package ID. If this parameter is specified, only `BANDWIDTH_PACKAGE` is supported for `InternetAccessible.InternetChargeType`.
 */
class CreateClusterEndpointRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string The ID of the subnet where the cluster's port is located (only needs to be entered when the non-public network access is enabled, and must be within the subnet of the cluster's VPC). 
     */
    public $SubnetId;

    /**
     * @var boolean Whether public network access is enabled or not (True = public network access, FALSE = private network access, with the default value as FALSE).
     */
    public $IsExtranet;

    /**
     * @var string The domain name
     */
    public $Domain;

    /**
     * @var string The security group in use, which must be passed in when public access is enabled.
     */
    public $SecurityGroup;

    /**
     * @var string LB parameters in a JSON string. It is only required for public network access: {"InternetAccessible":{"InternetChargeType":"TRAFFIC_POSTPAID_BY_HOUR","InternetMaxBandwidthOut":200},"VipIsp":"","BandwidthPackageId":""}.
Description of parameters:
`InternetAccessible.InternetChargeType`: `TRAFFIC_POSTPAID_BY_HOUR` (Pay-as-you-go by traffic on an hourly basis); `BANDWIDTH_POSTPAID_BY_HOUR` (Pay-as-you-go by bandwidth on an hourly basis); `InternetAccessible.BANDWIDTH_PACKAGE` (Bill-by-bandwidth package).
`InternetMaxBandwidthOut`: Outbound bandwidth cap in Mbps. Value range: 0 - 2048. Default value: 10.
`VipIsp`: `CMCC` (China Mobile), `CTCC`·(China Telecom) and `CUCC` (China Unicom). If it is not specified, BGP line is used by default. To query ISPs available in a region, call `DescribeSingleIsp`. If this parameter is specified, the network billing mode must be `BANDWIDTH_PACKAGE`.
`BandwidthPackageId`: Bandwidth package ID. If this parameter is specified, only `BANDWIDTH_PACKAGE` is supported for `InternetAccessible.InternetChargeType`.
     */
    public $ExtensiveParameters;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $SubnetId The ID of the subnet where the cluster's port is located (only needs to be entered when the non-public network access is enabled, and must be within the subnet of the cluster's VPC). 
     * @param boolean $IsExtranet Whether public network access is enabled or not (True = public network access, FALSE = private network access, with the default value as FALSE).
     * @param string $Domain The domain name
     * @param string $SecurityGroup The security group in use, which must be passed in when public access is enabled.
     * @param string $ExtensiveParameters LB parameters in a JSON string. It is only required for public network access: {"InternetAccessible":{"InternetChargeType":"TRAFFIC_POSTPAID_BY_HOUR","InternetMaxBandwidthOut":200},"VipIsp":"","BandwidthPackageId":""}.
Description of parameters:
`InternetAccessible.InternetChargeType`: `TRAFFIC_POSTPAID_BY_HOUR` (Pay-as-you-go by traffic on an hourly basis); `BANDWIDTH_POSTPAID_BY_HOUR` (Pay-as-you-go by bandwidth on an hourly basis); `InternetAccessible.BANDWIDTH_PACKAGE` (Bill-by-bandwidth package).
`InternetMaxBandwidthOut`: Outbound bandwidth cap in Mbps. Value range: 0 - 2048. Default value: 10.
`VipIsp`: `CMCC` (China Mobile), `CTCC`·(China Telecom) and `CUCC` (China Unicom). If it is not specified, BGP line is used by default. To query ISPs available in a region, call `DescribeSingleIsp`. If this parameter is specified, the network billing mode must be `BANDWIDTH_PACKAGE`.
`BandwidthPackageId`: Bandwidth package ID. If this parameter is specified, only `BANDWIDTH_PACKAGE` is supported for `InternetAccessible.InternetChargeType`.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("IsExtranet",$param) and $param["IsExtranet"] !== null) {
            $this->IsExtranet = $param["IsExtranet"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("ExtensiveParameters",$param) and $param["ExtensiveParameters"] !== null) {
            $this->ExtensiveParameters = $param["ExtensiveParameters"];
        }
    }
}
