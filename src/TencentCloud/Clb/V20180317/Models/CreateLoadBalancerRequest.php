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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLoadBalancer request structure.
 *
 * @method string getLoadBalancerType() Obtain CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method integer getForward() Obtain CLB instance type. Valid value: 1 (generic CLB instance).
 * @method void setForward(integer $Forward) Set CLB instance type. Valid value: 1 (generic CLB instance).
 * @method string getLoadBalancerName() Obtain CLB instance name, which takes effect only when only one instance is to be created in the request. It can consist 1 to 60 letters, digits, hyphens (-), or underscores (_).
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name, which takes effect only when only one instance is to be created in the request. It can consist 1 to 60 letters, digits, hyphens (-), or underscores (_).
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
 * @method string getVpcId() Obtain Network ID of the target device on the CLB backend, such as `vpc-12345678`, which can be obtained through the `DescribeVpcEx` API. If this parameter is not entered, `DefaultVPC` is used by default. This parameter is required when creating a private network instance.
 * @method void setVpcId(string $VpcId) Set Network ID of the target device on the CLB backend, such as `vpc-12345678`, which can be obtained through the `DescribeVpcEx` API. If this parameter is not entered, `DefaultVPC` is used by default. This parameter is required when creating a private network instance.
 * @method string getSubnetId() Obtain A subnet ID should be specified when you purchase a private network CLB instance under a VPC. The VIP of the private network CLB instance is in this subnet. This parameter is required when you create a private network CLB instance but not supported when you create a public network IPv4 CLB instance.
 * @method void setSubnetId(string $SubnetId) Set A subnet ID should be specified when you purchase a private network CLB instance under a VPC. The VIP of the private network CLB instance is in this subnet. This parameter is required when you create a private network CLB instance but not supported when you create a public network IPv4 CLB instance.
 * @method integer getProjectId() Obtain ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not entered, the default project will be used.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not entered, the default project will be used.
 * @method string getAddressIPVersion() Obtain It's only applicable to public network CLB instances. IP version. Values: `IPV4`, `IPV6` and `IPv6FullChain` (case-insensitive). Default: `IPV4`. Note: `IPV6` indicates IPv6 NAT64, while `IPv6FullChain` indicates IPv6. 
 * @method void setAddressIPVersion(string $AddressIPVersion) Set It's only applicable to public network CLB instances. IP version. Values: `IPV4`, `IPV6` and `IPv6FullChain` (case-insensitive). Default: `IPV4`. Note: `IPV6` indicates IPv6 NAT64, while `IPv6FullChain` indicates IPv6. 
 * @method integer getNumber() Obtain Specifies the count of cloud load balancers to create, with a default value of 1. the count must not exceed the maximum value allowed for the account, with a default creation maximum value of 20.
 * @method void setNumber(integer $Number) Set Specifies the count of cloud load balancers to create, with a default value of 1. the count must not exceed the maximum value allowed for the account, with a default creation maximum value of 20.
 * @method string getMasterZoneId() Obtain Applicable only to public network IPv4 cloud load balancer instances. specifies the primary AZ ID for cross-az disaster recovery. both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.
Note: the primary AZ loads traffic. the secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable.
 * @method void setMasterZoneId(string $MasterZoneId) Set Applicable only to public network IPv4 cloud load balancer instances. specifies the primary AZ ID for cross-az disaster recovery. both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.
Note: the primary AZ loads traffic. the secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable.
 * @method string getZoneId() Obtain Applicable only to public network IPv4 clb instances. specifies the AZ ID or availability zone name for creating a clb instance. for example, 100001 or ap-guangzhou-1.
 * @method void setZoneId(string $ZoneId) Set Applicable only to public network IPv4 clb instances. specifies the AZ ID or availability zone name for creating a clb instance. for example, 100001 or ap-guangzhou-1.
 * @method InternetAccessible getInternetAccessible() Obtain Network billing mode by the maximum outbound bandwidth. It applies only to private network LCU-supported instances and all public network instances. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Network billing mode by the maximum outbound bandwidth. It applies only to private network LCU-supported instances and all public network instances. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method string getVipIsp() Obtain ISP of VIP. Values: `CMCC` (China Mobile), `CUCC` (China Unicom) and `CTCC` (China Telecom). You need to activate static single-line IPs. This feature is in beta and is only available in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu and Chongqing regions. To try it out, please contact your sales rep. If it's specified, the network billing mode must be `BANDWIDTH_PACKAGE`. If it's not specified, BGP is used by default. To query ISPs supported in a region, please use [DescribeResources](https://intl.cloud.tencent.com/document/api/214/70213?from_cn_redirect=1). 
 * @method void setVipIsp(string $VipIsp) Set ISP of VIP. Values: `CMCC` (China Mobile), `CUCC` (China Unicom) and `CTCC` (China Telecom). You need to activate static single-line IPs. This feature is in beta and is only available in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu and Chongqing regions. To try it out, please contact your sales rep. If it's specified, the network billing mode must be `BANDWIDTH_PACKAGE`. If it's not specified, BGP is used by default. To query ISPs supported in a region, please use [DescribeResources](https://intl.cloud.tencent.com/document/api/214/70213?from_cn_redirect=1). 
 * @method array getTags() Obtain Tags the CLB instance when purchasing it. Up to 20 tag key value pairs are supported.
 * @method void setTags(array $Tags) Set Tags the CLB instance when purchasing it. Up to 20 tag key value pairs are supported.
 * @method string getVip() Obtain Specifies the VIP for the application of a CLB instance. This parameter is optional. If you do not specify this parameter, the system automatically assigns a value for the parameter. IPv4 and IPv6 CLB instances support this parameter, but IPv6 NAT64 CLB instances do not.
Note: If the specified VIP is occupied or is not within the IP range of the specified VPC subnet, you cannot use the VIP to create a CLB instance in a private network or an IPv6 BGP CLB instance in a public network.
 * @method void setVip(string $Vip) Set Specifies the VIP for the application of a CLB instance. This parameter is optional. If you do not specify this parameter, the system automatically assigns a value for the parameter. IPv4 and IPv6 CLB instances support this parameter, but IPv6 NAT64 CLB instances do not.
Note: If the specified VIP is occupied or is not within the IP range of the specified VPC subnet, you cannot use the VIP to create a CLB instance in a private network or an IPv6 BGP CLB instance in a public network.
 * @method string getBandwidthPackageId() Obtain BANDWIDTH PACKAGE ID, which can be obtained through the [DescribeBandwidthPackages](https://www.tencentcloud.comom/document/api/215/19209?from_cn_redirect=1) api. specifies the BANDWIDTH PACKAGE ID. when this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by BANDWIDTH PACKAGE (BANDWIDTH_PACKAGE). the attributes of the BANDWIDTH PACKAGE determine the settlement method. for IPv6 clb instances purchased by non-promoted users, if the operator type is not BGP, the BANDWIDTH PACKAGE ID cannot be specified.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set BANDWIDTH PACKAGE ID, which can be obtained through the [DescribeBandwidthPackages](https://www.tencentcloud.comom/document/api/215/19209?from_cn_redirect=1) api. specifies the BANDWIDTH PACKAGE ID. when this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by BANDWIDTH PACKAGE (BANDWIDTH_PACKAGE). the attributes of the BANDWIDTH PACKAGE determine the settlement method. for IPv6 clb instances purchased by non-promoted users, if the operator type is not BGP, the BANDWIDTH PACKAGE ID cannot be specified.
 * @method ExclusiveCluster getExclusiveCluster() Obtain Information about the dedicated CLB instance. You must specify this parameter when you create a dedicated CLB instance in a private network.
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) Set Information about the dedicated CLB instance. You must specify this parameter when you create a dedicated CLB instance in a private network.
 * @method string getSlaType() Obtain Specification of the LCU-supported instance.<ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>If you need to create a shared instance, this parameter is not required.</li></ul> For specification details, see [Instance Specifications Comparison](https://intl.cloud.tencent.com/document/product/214/84689?from_cn_redirect=1).
 * @method void setSlaType(string $SlaType) Set Specification of the LCU-supported instance.<ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>If you need to create a shared instance, this parameter is not required.</li></ul> For specification details, see [Instance Specifications Comparison](https://intl.cloud.tencent.com/document/product/214/84689?from_cn_redirect=1).
 * @method array getClusterIds() Obtain Cluster ID. This cluster identifier is used for configuring a public cloud exclusive cluster or a cloud dedicated cluster. To apply for a public cloud exclusive cluster, [submit a ticket](https://console.cloud.tencent.com/workorder/category). For cloud dedicated clusters, see the descriptions in [Cloud Dedicated Cluster](https://intl.cloud.tencent.com/document/product/1346?from_cn_redirect=1).
 * @method void setClusterIds(array $ClusterIds) Set Cluster ID. This cluster identifier is used for configuring a public cloud exclusive cluster or a cloud dedicated cluster. To apply for a public cloud exclusive cluster, [submit a ticket](https://console.cloud.tencent.com/workorder/category). For cloud dedicated clusters, see the descriptions in [Cloud Dedicated Cluster](https://intl.cloud.tencent.com/document/product/1346?from_cn_redirect=1).
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method boolean getSnatPro() Obtain Whether Binding IPs of other VPCs feature switch
 * @method void setSnatPro(boolean $SnatPro) Set Whether Binding IPs of other VPCs feature switch
 * @method array getSnatIps() Obtain Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
 * @method void setSnatIps(array $SnatIps) Set Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
 * @method string getClusterTag() Obtain Tag for the STGW exclusive cluster.
 * @method void setClusterTag(string $ClusterTag) Set Tag for the STGW exclusive cluster.
 * @method string getSlaveZoneId() Obtain Applicable only to public network IPv4 clb instances. specifies the secondary AZ ID for cross-az disaster recovery. both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.
Note: The secondary AZ sustains traffic when the primary AZ encounters faults. You can call the [DescribeResources](https://www.tencentcloud.comom/document/api/214/70213?from_cn_redirect=1) API to query the list of primary/secondary AZs in a region. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method void setSlaveZoneId(string $SlaveZoneId) Set Applicable only to public network IPv4 clb instances. specifies the secondary AZ ID for cross-az disaster recovery. both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.
Note: The secondary AZ sustains traffic when the primary AZ encounters faults. You can call the [DescribeResources](https://www.tencentcloud.comom/document/api/214/70213?from_cn_redirect=1) API to query the list of primary/secondary AZs in a region. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method string getEipAddressId() Obtain The unique ID of EIP, which can be queried through the DescribeAddresses API (https://www.tencentcloud.comom/document/product/215/16702?from_cn_redirect=1). format: EIP-qhx8udkc. applicable only to private network clb binding EIP.
 * @method void setEipAddressId(string $EipAddressId) Set The unique ID of EIP, which can be queried through the DescribeAddresses API (https://www.tencentcloud.comom/document/product/215/16702?from_cn_redirect=1). format: EIP-qhx8udkc. applicable only to private network clb binding EIP.
 * @method boolean getLoadBalancerPassToTarget() Obtain Specifies whether to allow CLB traffic to the Target. enable (true): verify security groups on CLB. disable (false): verify security groups on both CLB and backend instances. IPv6 CLB security group default permit, this parameter is not required.
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) Set Specifies whether to allow CLB traffic to the Target. enable (true): verify security groups on CLB. disable (false): verify security groups on both CLB and backend instances. IPv6 CLB security group default permit, this parameter is not required.
 * @method boolean getDynamicVip() Obtain Upgrades to domain name-based CLB
 * @method void setDynamicVip(boolean $DynamicVip) Set Upgrades to domain name-based CLB
 * @method string getEgress() Obtain Network egress point
 * @method void setEgress(string $Egress) Set Network egress point
 * @method LBChargePrepaid getLBChargePrepaid() Obtain Prepayment-related attributes of a CLB instance. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method void setLBChargePrepaid(LBChargePrepaid $LBChargePrepaid) Set Prepayment-related attributes of a CLB instance. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method string getLBChargeType() Obtain Billing type of a CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method void setLBChargeType(string $LBChargeType) Set Billing type of a CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method string getAccessLogTopicId() Obtain Topic ID of logs of traffic access over layer-7 protocols.
 * @method void setAccessLogTopicId(string $AccessLogTopicId) Set Topic ID of logs of traffic access over layer-7 protocols.
 * @method boolean getAdvancedRoute() Obtain Whether layer-7 advanced routing is enabled.
 * @method void setAdvancedRoute(boolean $AdvancedRoute) Set Whether layer-7 advanced routing is enabled.
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string CLB instance network type:
OPEN: public network; INTERNAL: private network.
     */
    public $LoadBalancerType;

    /**
     * @var integer CLB instance type. Valid value: 1 (generic CLB instance).
     */
    public $Forward;

    /**
     * @var string CLB instance name, which takes effect only when only one instance is to be created in the request. It can consist 1 to 60 letters, digits, hyphens (-), or underscores (_).
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
     */
    public $LoadBalancerName;

    /**
     * @var string Network ID of the target device on the CLB backend, such as `vpc-12345678`, which can be obtained through the `DescribeVpcEx` API. If this parameter is not entered, `DefaultVPC` is used by default. This parameter is required when creating a private network instance.
     */
    public $VpcId;

    /**
     * @var string A subnet ID should be specified when you purchase a private network CLB instance under a VPC. The VIP of the private network CLB instance is in this subnet. This parameter is required when you create a private network CLB instance but not supported when you create a public network IPv4 CLB instance.
     */
    public $SubnetId;

    /**
     * @var integer ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not entered, the default project will be used.
     */
    public $ProjectId;

    /**
     * @var string It's only applicable to public network CLB instances. IP version. Values: `IPV4`, `IPV6` and `IPv6FullChain` (case-insensitive). Default: `IPV4`. Note: `IPV6` indicates IPv6 NAT64, while `IPv6FullChain` indicates IPv6. 
     */
    public $AddressIPVersion;

    /**
     * @var integer Specifies the count of cloud load balancers to create, with a default value of 1. the count must not exceed the maximum value allowed for the account, with a default creation maximum value of 20.
     */
    public $Number;

    /**
     * @var string Applicable only to public network IPv4 cloud load balancer instances. specifies the primary AZ ID for cross-az disaster recovery. both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.
Note: the primary AZ loads traffic. the secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable.
     */
    public $MasterZoneId;

    /**
     * @var string Applicable only to public network IPv4 clb instances. specifies the AZ ID or availability zone name for creating a clb instance. for example, 100001 or ap-guangzhou-1.
     */
    public $ZoneId;

    /**
     * @var InternetAccessible Network billing mode by the maximum outbound bandwidth. It applies only to private network LCU-supported instances and all public network instances. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
     */
    public $InternetAccessible;

    /**
     * @var string ISP of VIP. Values: `CMCC` (China Mobile), `CUCC` (China Unicom) and `CTCC` (China Telecom). You need to activate static single-line IPs. This feature is in beta and is only available in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu and Chongqing regions. To try it out, please contact your sales rep. If it's specified, the network billing mode must be `BANDWIDTH_PACKAGE`. If it's not specified, BGP is used by default. To query ISPs supported in a region, please use [DescribeResources](https://intl.cloud.tencent.com/document/api/214/70213?from_cn_redirect=1). 
     */
    public $VipIsp;

    /**
     * @var array Tags the CLB instance when purchasing it. Up to 20 tag key value pairs are supported.
     */
    public $Tags;

    /**
     * @var string Specifies the VIP for the application of a CLB instance. This parameter is optional. If you do not specify this parameter, the system automatically assigns a value for the parameter. IPv4 and IPv6 CLB instances support this parameter, but IPv6 NAT64 CLB instances do not.
Note: If the specified VIP is occupied or is not within the IP range of the specified VPC subnet, you cannot use the VIP to create a CLB instance in a private network or an IPv6 BGP CLB instance in a public network.
     */
    public $Vip;

    /**
     * @var string BANDWIDTH PACKAGE ID, which can be obtained through the [DescribeBandwidthPackages](https://www.tencentcloud.comom/document/api/215/19209?from_cn_redirect=1) api. specifies the BANDWIDTH PACKAGE ID. when this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by BANDWIDTH PACKAGE (BANDWIDTH_PACKAGE). the attributes of the BANDWIDTH PACKAGE determine the settlement method. for IPv6 clb instances purchased by non-promoted users, if the operator type is not BGP, the BANDWIDTH PACKAGE ID cannot be specified.
     */
    public $BandwidthPackageId;

    /**
     * @var ExclusiveCluster Information about the dedicated CLB instance. You must specify this parameter when you create a dedicated CLB instance in a private network.
     */
    public $ExclusiveCluster;

    /**
     * @var string Specification of the LCU-supported instance.<ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>If you need to create a shared instance, this parameter is not required.</li></ul> For specification details, see [Instance Specifications Comparison](https://intl.cloud.tencent.com/document/product/214/84689?from_cn_redirect=1).
     */
    public $SlaType;

    /**
     * @var array Cluster ID. This cluster identifier is used for configuring a public cloud exclusive cluster or a cloud dedicated cluster. To apply for a public cloud exclusive cluster, [submit a ticket](https://console.cloud.tencent.com/workorder/category). For cloud dedicated clusters, see the descriptions in [Cloud Dedicated Cluster](https://intl.cloud.tencent.com/document/product/1346?from_cn_redirect=1).
     */
    public $ClusterIds;

    /**
     * @var string A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     */
    public $ClientToken;

    /**
     * @var boolean Whether Binding IPs of other VPCs feature switch
     */
    public $SnatPro;

    /**
     * @var array Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
     */
    public $SnatIps;

    /**
     * @var string Tag for the STGW exclusive cluster.
     */
    public $ClusterTag;

    /**
     * @var string Applicable only to public network IPv4 clb instances. specifies the secondary AZ ID for cross-az disaster recovery. both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.
Note: The secondary AZ sustains traffic when the primary AZ encounters faults. You can call the [DescribeResources](https://www.tencentcloud.comom/document/api/214/70213?from_cn_redirect=1) API to query the list of primary/secondary AZs in a region. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
     */
    public $SlaveZoneId;

    /**
     * @var string The unique ID of EIP, which can be queried through the DescribeAddresses API (https://www.tencentcloud.comom/document/product/215/16702?from_cn_redirect=1). format: EIP-qhx8udkc. applicable only to private network clb binding EIP.
     */
    public $EipAddressId;

    /**
     * @var boolean Specifies whether to allow CLB traffic to the Target. enable (true): verify security groups on CLB. disable (false): verify security groups on both CLB and backend instances. IPv6 CLB security group default permit, this parameter is not required.
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var boolean Upgrades to domain name-based CLB
     */
    public $DynamicVip;

    /**
     * @var string Network egress point
     */
    public $Egress;

    /**
     * @var LBChargePrepaid Prepayment-related attributes of a CLB instance. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
     */
    public $LBChargePrepaid;

    /**
     * @var string Billing type of a CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
     */
    public $LBChargeType;

    /**
     * @var string Topic ID of logs of traffic access over layer-7 protocols.
     */
    public $AccessLogTopicId;

    /**
     * @var boolean Whether layer-7 advanced routing is enabled.
     */
    public $AdvancedRoute;

    /**
     * @param string $LoadBalancerType CLB instance network type:
OPEN: public network; INTERNAL: private network.
     * @param integer $Forward CLB instance type. Valid value: 1 (generic CLB instance).
     * @param string $LoadBalancerName CLB instance name, which takes effect only when only one instance is to be created in the request. It can consist 1 to 60 letters, digits, hyphens (-), or underscores (_).
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
     * @param string $VpcId Network ID of the target device on the CLB backend, such as `vpc-12345678`, which can be obtained through the `DescribeVpcEx` API. If this parameter is not entered, `DefaultVPC` is used by default. This parameter is required when creating a private network instance.
     * @param string $SubnetId A subnet ID should be specified when you purchase a private network CLB instance under a VPC. The VIP of the private network CLB instance is in this subnet. This parameter is required when you create a private network CLB instance but not supported when you create a public network IPv4 CLB instance.
     * @param integer $ProjectId ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not entered, the default project will be used.
     * @param string $AddressIPVersion It's only applicable to public network CLB instances. IP version. Values: `IPV4`, `IPV6` and `IPv6FullChain` (case-insensitive). Default: `IPV4`. Note: `IPV6` indicates IPv6 NAT64, while `IPv6FullChain` indicates IPv6. 
     * @param integer $Number Specifies the count of cloud load balancers to create, with a default value of 1. the count must not exceed the maximum value allowed for the account, with a default creation maximum value of 20.
     * @param string $MasterZoneId Applicable only to public network IPv4 cloud load balancer instances. specifies the primary AZ ID for cross-az disaster recovery. both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.
Note: the primary AZ loads traffic. the secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable.
     * @param string $ZoneId Applicable only to public network IPv4 clb instances. specifies the AZ ID or availability zone name for creating a clb instance. for example, 100001 or ap-guangzhou-1.
     * @param InternetAccessible $InternetAccessible Network billing mode by the maximum outbound bandwidth. It applies only to private network LCU-supported instances and all public network instances. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
     * @param string $VipIsp ISP of VIP. Values: `CMCC` (China Mobile), `CUCC` (China Unicom) and `CTCC` (China Telecom). You need to activate static single-line IPs. This feature is in beta and is only available in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu and Chongqing regions. To try it out, please contact your sales rep. If it's specified, the network billing mode must be `BANDWIDTH_PACKAGE`. If it's not specified, BGP is used by default. To query ISPs supported in a region, please use [DescribeResources](https://intl.cloud.tencent.com/document/api/214/70213?from_cn_redirect=1). 
     * @param array $Tags Tags the CLB instance when purchasing it. Up to 20 tag key value pairs are supported.
     * @param string $Vip Specifies the VIP for the application of a CLB instance. This parameter is optional. If you do not specify this parameter, the system automatically assigns a value for the parameter. IPv4 and IPv6 CLB instances support this parameter, but IPv6 NAT64 CLB instances do not.
Note: If the specified VIP is occupied or is not within the IP range of the specified VPC subnet, you cannot use the VIP to create a CLB instance in a private network or an IPv6 BGP CLB instance in a public network.
     * @param string $BandwidthPackageId BANDWIDTH PACKAGE ID, which can be obtained through the [DescribeBandwidthPackages](https://www.tencentcloud.comom/document/api/215/19209?from_cn_redirect=1) api. specifies the BANDWIDTH PACKAGE ID. when this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by BANDWIDTH PACKAGE (BANDWIDTH_PACKAGE). the attributes of the BANDWIDTH PACKAGE determine the settlement method. for IPv6 clb instances purchased by non-promoted users, if the operator type is not BGP, the BANDWIDTH PACKAGE ID cannot be specified.
     * @param ExclusiveCluster $ExclusiveCluster Information about the dedicated CLB instance. You must specify this parameter when you create a dedicated CLB instance in a private network.
     * @param string $SlaType Specification of the LCU-supported instance.<ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>If you need to create a shared instance, this parameter is not required.</li></ul> For specification details, see [Instance Specifications Comparison](https://intl.cloud.tencent.com/document/product/214/84689?from_cn_redirect=1).
     * @param array $ClusterIds Cluster ID. This cluster identifier is used for configuring a public cloud exclusive cluster or a cloud dedicated cluster. To apply for a public cloud exclusive cluster, [submit a ticket](https://console.cloud.tencent.com/workorder/category). For cloud dedicated clusters, see the descriptions in [Cloud Dedicated Cluster](https://intl.cloud.tencent.com/document/product/1346?from_cn_redirect=1).
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     * @param boolean $SnatPro Whether Binding IPs of other VPCs feature switch
     * @param array $SnatIps Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
     * @param string $ClusterTag Tag for the STGW exclusive cluster.
     * @param string $SlaveZoneId Applicable only to public network IPv4 clb instances. specifies the secondary AZ ID for cross-az disaster recovery. both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.
Note: The secondary AZ sustains traffic when the primary AZ encounters faults. You can call the [DescribeResources](https://www.tencentcloud.comom/document/api/214/70213?from_cn_redirect=1) API to query the list of primary/secondary AZs in a region. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
     * @param string $EipAddressId The unique ID of EIP, which can be queried through the DescribeAddresses API (https://www.tencentcloud.comom/document/product/215/16702?from_cn_redirect=1). format: EIP-qhx8udkc. applicable only to private network clb binding EIP.
     * @param boolean $LoadBalancerPassToTarget Specifies whether to allow CLB traffic to the Target. enable (true): verify security groups on CLB. disable (false): verify security groups on both CLB and backend instances. IPv6 CLB security group default permit, this parameter is not required.
     * @param boolean $DynamicVip Upgrades to domain name-based CLB
     * @param string $Egress Network egress point
     * @param LBChargePrepaid $LBChargePrepaid Prepayment-related attributes of a CLB instance. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
     * @param string $LBChargeType Billing type of a CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR. The feature of purchasing monthly subscription instances via an API is under grayscale release. If you want to experience this feature, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
     * @param string $AccessLogTopicId Topic ID of logs of traffic access over layer-7 protocols.
     * @param boolean $AdvancedRoute Whether layer-7 advanced routing is enabled.
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
        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("MasterZoneId",$param) and $param["MasterZoneId"] !== null) {
            $this->MasterZoneId = $param["MasterZoneId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("ExclusiveCluster",$param) and $param["ExclusiveCluster"] !== null) {
            $this->ExclusiveCluster = new ExclusiveCluster();
            $this->ExclusiveCluster->deserialize($param["ExclusiveCluster"]);
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("SnatPro",$param) and $param["SnatPro"] !== null) {
            $this->SnatPro = $param["SnatPro"];
        }

        if (array_key_exists("SnatIps",$param) and $param["SnatIps"] !== null) {
            $this->SnatIps = [];
            foreach ($param["SnatIps"] as $key => $value){
                $obj = new SnatIp();
                $obj->deserialize($value);
                array_push($this->SnatIps, $obj);
            }
        }

        if (array_key_exists("ClusterTag",$param) and $param["ClusterTag"] !== null) {
            $this->ClusterTag = $param["ClusterTag"];
        }

        if (array_key_exists("SlaveZoneId",$param) and $param["SlaveZoneId"] !== null) {
            $this->SlaveZoneId = $param["SlaveZoneId"];
        }

        if (array_key_exists("EipAddressId",$param) and $param["EipAddressId"] !== null) {
            $this->EipAddressId = $param["EipAddressId"];
        }

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }

        if (array_key_exists("DynamicVip",$param) and $param["DynamicVip"] !== null) {
            $this->DynamicVip = $param["DynamicVip"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }

        if (array_key_exists("LBChargePrepaid",$param) and $param["LBChargePrepaid"] !== null) {
            $this->LBChargePrepaid = new LBChargePrepaid();
            $this->LBChargePrepaid->deserialize($param["LBChargePrepaid"]);
        }

        if (array_key_exists("LBChargeType",$param) and $param["LBChargeType"] !== null) {
            $this->LBChargeType = $param["LBChargeType"];
        }

        if (array_key_exists("AccessLogTopicId",$param) and $param["AccessLogTopicId"] !== null) {
            $this->AccessLogTopicId = $param["AccessLogTopicId"];
        }

        if (array_key_exists("AdvancedRoute",$param) and $param["AdvancedRoute"] !== null) {
            $this->AdvancedRoute = $param["AdvancedRoute"];
        }
    }
}
