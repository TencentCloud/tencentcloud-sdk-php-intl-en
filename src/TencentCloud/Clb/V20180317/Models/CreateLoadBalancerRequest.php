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
 * @method string getLoadBalancerType() Obtain <p>Network type of the Cloud Load Balancer instance:<br>OPEN: public network attribute, INTERNAL: private network attribute.</p>
 * @method void setLoadBalancerType(string $LoadBalancerType) Set <p>Network type of the Cloud Load Balancer instance:<br>OPEN: public network attribute, INTERNAL: private network attribute.</p>
 * @method integer getForward() Obtain <p>Type of the Cloud Load Balancer instance. 1: Common CLB instance. Currently only support passing in 1.</p>
 * @method void setForward(integer $Forward) Set <p>Type of the Cloud Load Balancer instance. 1: Common CLB instance. Currently only support passing in 1.</p>
 * @method string getLoadBalancerName() Obtain <p>The name of the Cloud Load Balancer instance is effective only when creating an instance. Rule: 1-80 characters in internationally compatible languages such as English letters, Chinese characters, digits, connecting line "-", underscore "_", and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden). Note: If the name is identical to an existing Cloud Load Balancer instance name in the system, the system will automatically generate the name for the created CLB instance.</p>
 * @method void setLoadBalancerName(string $LoadBalancerName) Set <p>The name of the Cloud Load Balancer instance is effective only when creating an instance. Rule: 1-80 characters in internationally compatible languages such as English letters, Chinese characters, digits, connecting line "-", underscore "_", and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden). Note: If the name is identical to an existing Cloud Load Balancer instance name in the system, the system will automatically generate the name for the created CLB instance.</p>
 * @method string getVpcId() Obtain Network ID of the target device on the CLB backend, such as `vpc-12345678`, which can be obtained through the `DescribeVpcEx` API. If this parameter is not entered, `DefaultVPC` is used by default. This parameter is required when creating a private network instance.
 * @method void setVpcId(string $VpcId) Set Network ID of the target device on the CLB backend, such as `vpc-12345678`, which can be obtained through the `DescribeVpcEx` API. If this parameter is not entered, `DefaultVPC` is used by default. This parameter is required when creating a private network instance.
 * @method string getSubnetId() Obtain <p>When you purchase a private network CLB instance in a VPC, the subnet ID must be specified. The VIP of the private network CLB instance is generated in this subnet.<br>This parameter is required when you create a private network CLB instance or a CLB instance of the IPv6FullChain version.<br>It cannot be specified when you create a public network IPv4 CLB instance.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>When you purchase a private network CLB instance in a VPC, the subnet ID must be specified. The VIP of the private network CLB instance is generated in this subnet.<br>This parameter is required when you create a private network CLB instance or a CLB instance of the IPv6FullChain version.<br>It cannot be specified when you create a public network IPv4 CLB instance.</p>
 * @method integer getProjectId() Obtain ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not entered, the default project will be used.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not entered, the default project will be used.
 * @method string getAddressIPVersion() Obtain <p>Applicable only to public network CLB. IP version, valid values: IPV4, IPV6, IPv6FullChain, case-insensitive, default value IPV4. Description: A value of IPV6 means IPV6 NAT64 version; a value of IPv6FullChain means IPv6 version.</p>
 * @method void setAddressIPVersion(string $AddressIPVersion) Set <p>Applicable only to public network CLB. IP version, valid values: IPV4, IPV6, IPv6FullChain, case-insensitive, default value IPV4. Description: A value of IPV6 means IPV6 NAT64 version; a value of IPv6FullChain means IPv6 version.</p>
 * @method integer getNumber() Obtain <p>Count of Cloud Load Balancers to create, default value is 1. The count must not exceed the maximum value allowed for the account, with a default creation maximum value of 20.</p>
 * @method void setNumber(integer $Number) Set <p>Count of Cloud Load Balancers to create, default value is 1. The count must not exceed the maximum value allowed for the account, with a default creation maximum value of 20.</p>
 * @method string getMasterZoneId() Obtain <p>Applicable only to public network load balancing with IP version IPv4. Sets the primary AZ ID for cross-AZ disaster recovery. Both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.<br>Note: The primary AZ loads traffic. The secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable.</p>
 * @method void setMasterZoneId(string $MasterZoneId) Set <p>Applicable only to public network load balancing with IP version IPv4. Sets the primary AZ ID for cross-AZ disaster recovery. Both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.<br>Note: The primary AZ loads traffic. The secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable.</p>
 * @method string getZoneId() Obtain <p>Applicable only to public network load balancing with IP version IPv4. AZ ID, availability zone id and name are supported. Specify availability zone to create a CLB instance. For example: 100001 or ap-guangzhou-1.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Applicable only to public network load balancing with IP version IPv4. AZ ID, availability zone id and name are supported. Specify availability zone to create a CLB instance. For example: 100001 or ap-guangzhou-1.</p>
 * @method InternetAccessible getInternetAccessible() Obtain <p>Maximum outbound bandwidth under the network billing mode. It applies only to LCU-supported instances of the private network type and all instances of the public network type.</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set <p>Maximum outbound bandwidth under the network billing mode. It applies only to LCU-supported instances of the private network type and all instances of the public network type.</p>
 * @method string getVipIsp() Obtain <p>Applicable only to public network CLB. Currently, only Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing regions support static single-line IP type. If you need to experience it, contact business manager to submit a request. After approval, you can select operator type of China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). Only can be used network billing mode BANDWIDTH_PACKAGE. If this parameter is not specified, use BGP by default. You can query ISPs supported in a region via <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> api.</p>
 * @method void setVipIsp(string $VipIsp) Set <p>Applicable only to public network CLB. Currently, only Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing regions support static single-line IP type. If you need to experience it, contact business manager to submit a request. After approval, you can select operator type of China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). Only can be used network billing mode BANDWIDTH_PACKAGE. If this parameter is not specified, use BGP by default. You can query ISPs supported in a region via <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> api.</p>
 * @method array getTags() Obtain <p>When purchasing a Cloud Load Balancer, you can tag it with up to 20 tag key-value pairs.</p>
 * @method void setTags(array $Tags) Set <p>When purchasing a Cloud Load Balancer, you can tag it with up to 20 tag key-value pairs.</p>
 * @method string getVip() Obtain <p>Specify VIP to apply for Cloud Load Balancer. This parameter is optional. If this parameter is not specified, VIP is automatically assigned. This parameter is supported for IPv4 and IPv6 types but not for IPv6 NAT64 type.<br>Note: When creating a private network instance or a public IPv6 BGP instance with a designated VIP, creation fails if the VIP is not within the IP range of the specified VPC subnet or if the VIP is already occupied.</p>
 * @method void setVip(string $Vip) Set <p>Specify VIP to apply for Cloud Load Balancer. This parameter is optional. If this parameter is not specified, VIP is automatically assigned. This parameter is supported for IPv4 and IPv6 types but not for IPv6 NAT64 type.<br>Note: When creating a private network instance or a public IPv6 BGP instance with a designated VIP, creation fails if the VIP is not within the IP range of the specified VPC subnet or if the VIP is already occupied.</p>
 * @method string getBandwidthPackageId() Obtain <p>Bandwidth package ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1">DescribeBandwidthPackages</a> API. When this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by bandwidth package (BANDWIDTH_PACKAGE), and the bandwidth package attributes determine the settlement method. For IPv6 Cloud Load Balancer instances purchased by non-promoted users with a non-BGP operator type, specifying bandwidth package ID is unsupported.</p>
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set <p>Bandwidth package ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1">DescribeBandwidthPackages</a> API. When this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by bandwidth package (BANDWIDTH_PACKAGE), and the bandwidth package attributes determine the settlement method. For IPv6 Cloud Load Balancer instances purchased by non-promoted users with a non-BGP operator type, specifying bandwidth package ID is unsupported.</p>
 * @method ExclusiveCluster getExclusiveCluster() Obtain <p>Dedicated instance info. This parameter is required when creating a private network CLB instance of exclusive type.</p>
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) Set <p>Dedicated instance info. This parameter is required when creating a private network CLB instance of exclusive type.</p>
 * @method string getSlaType() Obtain <p>Performance capacity specification.</p><ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>For Chinese site users who need to create a shared instance, this parameter is not required. International site users will purchase a standard instance by default if this parameter is not passed.</li></ul> For specification details, see [Instance Specifications Comparison](https://www.tencentcloud.com/document/product/214/84689?from_cn_redirect=1).
 * @method void setSlaType(string $SlaType) Set <p>Performance capacity specification.</p><ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>For Chinese site users who need to create a shared instance, this parameter is not required. International site users will purchase a standard instance by default if this parameter is not passed.</li></ul> For specification details, see [Instance Specifications Comparison](https://www.tencentcloud.com/document/product/214/84689?from_cn_redirect=1).
 * @method array getClusterIds() Obtain <p>Cluster ID. This cluster identifier is used for configuring a public cloud exclusive cluster or a local dedicated cluster. To apply for a public cloud exclusive cluster, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a>. For local dedicated clusters, refer to the description in <a href="https://www.tencentcloud.com/document/product/1346?from_cn_redirect=1">Local Dedicated Cluster</a>.</p>
 * @method void setClusterIds(array $ClusterIds) Set <p>Cluster ID. This cluster identifier is used for configuring a public cloud exclusive cluster or a local dedicated cluster. To apply for a public cloud exclusive cluster, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a>. For local dedicated clusters, refer to the description in <a href="https://www.tencentcloud.com/document/product/1346?from_cn_redirect=1">Local Dedicated Cluster</a>.</p>
 * @method string getClientToken() Obtain <p>String used to ensure request idempotency. This string is generated by the customer and must be unique among different requests, with a maximum value of 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
 * @method void setClientToken(string $ClientToken) Set <p>String used to ensure request idempotency. This string is generated by the customer and must be unique among different requests, with a maximum value of 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
 * @method boolean getSnatPro() Obtain <p>Whether binding cross-regional or cross-Vpc IP addresses is supported.</p>
 * @method void setSnatPro(boolean $SnatPro) Set <p>Whether binding cross-regional or cross-Vpc IP addresses is supported.</p>
 * @method array getSnatIps() Obtain <p>Enable the cross-regional or cross-Vpc IP binding feature to create a SnatIp.</p>
 * @method void setSnatIps(array $SnatIps) Set <p>Enable the cross-regional or cross-Vpc IP binding feature to create a SnatIp.</p>
 * @method string getClusterTag() Obtain <p>Tag of the Stgw exclusive cluster.</p>
 * @method void setClusterTag(string $ClusterTag) Set <p>Tag of the Stgw exclusive cluster.</p>
 * @method string getSlaveZoneId() Obtain <p>Applicable only to public network load balancing with IP version IPv4. Sets the secondary AZ ID for cross-AZ disaster recovery. AZ ID and name are supported, such as 100001 or ap-guangzhou-1.<br>Note: The secondary AZ is the availability zone that needs to carry traffic after primary availability zone failure. Query a region's list of primary/secondary AZs via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API. [If you need to trial the feature, submit a ticket application via <a href="https://console.cloud.tencent.com/workorder/category">Work Order</a>]</p>
 * @method void setSlaveZoneId(string $SlaveZoneId) Set <p>Applicable only to public network load balancing with IP version IPv4. Sets the secondary AZ ID for cross-AZ disaster recovery. AZ ID and name are supported, such as 100001 or ap-guangzhou-1.<br>Note: The secondary AZ is the availability zone that needs to carry traffic after primary availability zone failure. Query a region's list of primary/secondary AZs via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API. [If you need to trial the feature, submit a ticket application via <a href="https://console.cloud.tencent.com/workorder/category">Work Order</a>]</p>
 * @method string getEipAddressId() Obtain <p>The unique ID of EIP can be accessed through the <a href="https://www.tencentcloud.com/document/product/215/16702?from_cn_redirect=1">DescribeAddresses</a> api for the query. Example: eip-qhx8udkc, applicable only to bind EIP for private network CLB.</p>
 * @method void setEipAddressId(string $EipAddressId) Set <p>The unique ID of EIP can be accessed through the <a href="https://www.tencentcloud.com/document/product/215/16702?from_cn_redirect=1">DescribeAddresses</a> api for the query. Example: eip-qhx8udkc, applicable only to bind EIP for private network CLB.</p>
 * @method boolean getLoadBalancerPassToTarget() Obtain <p>Allow CLB traffic to the Target. Enable (true): verify security groups on CLB; deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances. IPv6 CLB security group default permit, this parameter is not required.</p>
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) Set <p>Allow CLB traffic to the Target. Enable (true): verify security groups on CLB; deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances. IPv6 CLB security group default permit, this parameter is not required.</p>
 * @method boolean getDynamicVip() Obtain <p>Create a domain-name based CLB.</p>
 * @method void setDynamicVip(boolean $DynamicVip) Set <p>Create a domain-name based CLB.</p>
 * @method string getEgress() Obtain <p>Network outbound</p>
 * @method void setEgress(string $Egress) Set <p>Network outbound</p>
 * @method LBChargePrepaid getLBChargePrepaid() Obtain <p>Prepaid billing attributes of the CLB instance</p>
 * @method void setLBChargePrepaid(LBChargePrepaid $LBChargePrepaid) Set <p>Prepaid billing attributes of the CLB instance</p>
 * @method string getLBChargeType() Obtain <p>Billing type of the CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR.</p><p>Enumeration values:</p><ul><li>POSTPAID_BY_HOUR: Pay-As-You-Go</li><li>PREPAID: Monthly Subscription</li></ul>
 * @method void setLBChargeType(string $LBChargeType) Set <p>Billing type of the CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR.</p><p>Enumeration values:</p><ul><li>POSTPAID_BY_HOUR: Pay-As-You-Go</li><li>PREPAID: Monthly Subscription</li></ul>
 * @method string getAccessLogTopicId() Obtain <p>L7 access log topic ID</p>
 * @method void setAccessLogTopicId(string $AccessLogTopicId) Set <p>L7 access log topic ID</p>
 * @method boolean getAdvancedRoute() Obtain <p>Whether layer-7 advanced routing is enabled</p>
 * @method void setAdvancedRoute(boolean $AdvancedRoute) Set <p>Whether layer-7 advanced routing is enabled</p>
 * @method AvailableZoneAffinityInfo getAvailableZoneAffinityInfo() Obtain <p>Availability zone affinity info</p>
 * @method void setAvailableZoneAffinityInfo(AvailableZoneAffinityInfo $AvailableZoneAffinityInfo) Set <p>Availability zone affinity info</p>
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string <p>Network type of the Cloud Load Balancer instance:<br>OPEN: public network attribute, INTERNAL: private network attribute.</p>
     */
    public $LoadBalancerType;

    /**
     * @var integer <p>Type of the Cloud Load Balancer instance. 1: Common CLB instance. Currently only support passing in 1.</p>
     */
    public $Forward;

    /**
     * @var string <p>The name of the Cloud Load Balancer instance is effective only when creating an instance. Rule: 1-80 characters in internationally compatible languages such as English letters, Chinese characters, digits, connecting line "-", underscore "_", and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden). Note: If the name is identical to an existing Cloud Load Balancer instance name in the system, the system will automatically generate the name for the created CLB instance.</p>
     */
    public $LoadBalancerName;

    /**
     * @var string Network ID of the target device on the CLB backend, such as `vpc-12345678`, which can be obtained through the `DescribeVpcEx` API. If this parameter is not entered, `DefaultVPC` is used by default. This parameter is required when creating a private network instance.
     */
    public $VpcId;

    /**
     * @var string <p>When you purchase a private network CLB instance in a VPC, the subnet ID must be specified. The VIP of the private network CLB instance is generated in this subnet.<br>This parameter is required when you create a private network CLB instance or a CLB instance of the IPv6FullChain version.<br>It cannot be specified when you create a public network IPv4 CLB instance.</p>
     */
    public $SubnetId;

    /**
     * @var integer ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not entered, the default project will be used.
     */
    public $ProjectId;

    /**
     * @var string <p>Applicable only to public network CLB. IP version, valid values: IPV4, IPV6, IPv6FullChain, case-insensitive, default value IPV4. Description: A value of IPV6 means IPV6 NAT64 version; a value of IPv6FullChain means IPv6 version.</p>
     */
    public $AddressIPVersion;

    /**
     * @var integer <p>Count of Cloud Load Balancers to create, default value is 1. The count must not exceed the maximum value allowed for the account, with a default creation maximum value of 20.</p>
     */
    public $Number;

    /**
     * @var string <p>Applicable only to public network load balancing with IP version IPv4. Sets the primary AZ ID for cross-AZ disaster recovery. Both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.<br>Note: The primary AZ loads traffic. The secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable.</p>
     */
    public $MasterZoneId;

    /**
     * @var string <p>Applicable only to public network load balancing with IP version IPv4. AZ ID, availability zone id and name are supported. Specify availability zone to create a CLB instance. For example: 100001 or ap-guangzhou-1.</p>
     */
    public $ZoneId;

    /**
     * @var InternetAccessible <p>Maximum outbound bandwidth under the network billing mode. It applies only to LCU-supported instances of the private network type and all instances of the public network type.</p>
     */
    public $InternetAccessible;

    /**
     * @var string <p>Applicable only to public network CLB. Currently, only Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing regions support static single-line IP type. If you need to experience it, contact business manager to submit a request. After approval, you can select operator type of China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). Only can be used network billing mode BANDWIDTH_PACKAGE. If this parameter is not specified, use BGP by default. You can query ISPs supported in a region via <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> api.</p>
     */
    public $VipIsp;

    /**
     * @var array <p>When purchasing a Cloud Load Balancer, you can tag it with up to 20 tag key-value pairs.</p>
     */
    public $Tags;

    /**
     * @var string <p>Specify VIP to apply for Cloud Load Balancer. This parameter is optional. If this parameter is not specified, VIP is automatically assigned. This parameter is supported for IPv4 and IPv6 types but not for IPv6 NAT64 type.<br>Note: When creating a private network instance or a public IPv6 BGP instance with a designated VIP, creation fails if the VIP is not within the IP range of the specified VPC subnet or if the VIP is already occupied.</p>
     */
    public $Vip;

    /**
     * @var string <p>Bandwidth package ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1">DescribeBandwidthPackages</a> API. When this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by bandwidth package (BANDWIDTH_PACKAGE), and the bandwidth package attributes determine the settlement method. For IPv6 Cloud Load Balancer instances purchased by non-promoted users with a non-BGP operator type, specifying bandwidth package ID is unsupported.</p>
     */
    public $BandwidthPackageId;

    /**
     * @var ExclusiveCluster <p>Dedicated instance info. This parameter is required when creating a private network CLB instance of exclusive type.</p>
     */
    public $ExclusiveCluster;

    /**
     * @var string <p>Performance capacity specification.</p><ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>For Chinese site users who need to create a shared instance, this parameter is not required. International site users will purchase a standard instance by default if this parameter is not passed.</li></ul> For specification details, see [Instance Specifications Comparison](https://www.tencentcloud.com/document/product/214/84689?from_cn_redirect=1).
     */
    public $SlaType;

    /**
     * @var array <p>Cluster ID. This cluster identifier is used for configuring a public cloud exclusive cluster or a local dedicated cluster. To apply for a public cloud exclusive cluster, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a>. For local dedicated clusters, refer to the description in <a href="https://www.tencentcloud.com/document/product/1346?from_cn_redirect=1">Local Dedicated Cluster</a>.</p>
     */
    public $ClusterIds;

    /**
     * @var string <p>String used to ensure request idempotency. This string is generated by the customer and must be unique among different requests, with a maximum value of 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
     */
    public $ClientToken;

    /**
     * @var boolean <p>Whether binding cross-regional or cross-Vpc IP addresses is supported.</p>
     */
    public $SnatPro;

    /**
     * @var array <p>Enable the cross-regional or cross-Vpc IP binding feature to create a SnatIp.</p>
     */
    public $SnatIps;

    /**
     * @var string <p>Tag of the Stgw exclusive cluster.</p>
     */
    public $ClusterTag;

    /**
     * @var string <p>Applicable only to public network load balancing with IP version IPv4. Sets the secondary AZ ID for cross-AZ disaster recovery. AZ ID and name are supported, such as 100001 or ap-guangzhou-1.<br>Note: The secondary AZ is the availability zone that needs to carry traffic after primary availability zone failure. Query a region's list of primary/secondary AZs via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API. [If you need to trial the feature, submit a ticket application via <a href="https://console.cloud.tencent.com/workorder/category">Work Order</a>]</p>
     */
    public $SlaveZoneId;

    /**
     * @var string <p>The unique ID of EIP can be accessed through the <a href="https://www.tencentcloud.com/document/product/215/16702?from_cn_redirect=1">DescribeAddresses</a> api for the query. Example: eip-qhx8udkc, applicable only to bind EIP for private network CLB.</p>
     */
    public $EipAddressId;

    /**
     * @var boolean <p>Allow CLB traffic to the Target. Enable (true): verify security groups on CLB; deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances. IPv6 CLB security group default permit, this parameter is not required.</p>
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var boolean <p>Create a domain-name based CLB.</p>
     */
    public $DynamicVip;

    /**
     * @var string <p>Network outbound</p>
     */
    public $Egress;

    /**
     * @var LBChargePrepaid <p>Prepaid billing attributes of the CLB instance</p>
     */
    public $LBChargePrepaid;

    /**
     * @var string <p>Billing type of the CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR.</p><p>Enumeration values:</p><ul><li>POSTPAID_BY_HOUR: Pay-As-You-Go</li><li>PREPAID: Monthly Subscription</li></ul>
     */
    public $LBChargeType;

    /**
     * @var string <p>L7 access log topic ID</p>
     */
    public $AccessLogTopicId;

    /**
     * @var boolean <p>Whether layer-7 advanced routing is enabled</p>
     */
    public $AdvancedRoute;

    /**
     * @var AvailableZoneAffinityInfo <p>Availability zone affinity info</p>
     */
    public $AvailableZoneAffinityInfo;

    /**
     * @param string $LoadBalancerType <p>Network type of the Cloud Load Balancer instance:<br>OPEN: public network attribute, INTERNAL: private network attribute.</p>
     * @param integer $Forward <p>Type of the Cloud Load Balancer instance. 1: Common CLB instance. Currently only support passing in 1.</p>
     * @param string $LoadBalancerName <p>The name of the Cloud Load Balancer instance is effective only when creating an instance. Rule: 1-80 characters in internationally compatible languages such as English letters, Chinese characters, digits, connecting line "-", underscore "_", and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden). Note: If the name is identical to an existing Cloud Load Balancer instance name in the system, the system will automatically generate the name for the created CLB instance.</p>
     * @param string $VpcId Network ID of the target device on the CLB backend, such as `vpc-12345678`, which can be obtained through the `DescribeVpcEx` API. If this parameter is not entered, `DefaultVPC` is used by default. This parameter is required when creating a private network instance.
     * @param string $SubnetId <p>When you purchase a private network CLB instance in a VPC, the subnet ID must be specified. The VIP of the private network CLB instance is generated in this subnet.<br>This parameter is required when you create a private network CLB instance or a CLB instance of the IPv6FullChain version.<br>It cannot be specified when you create a public network IPv4 CLB instance.</p>
     * @param integer $ProjectId ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not entered, the default project will be used.
     * @param string $AddressIPVersion <p>Applicable only to public network CLB. IP version, valid values: IPV4, IPV6, IPv6FullChain, case-insensitive, default value IPV4. Description: A value of IPV6 means IPV6 NAT64 version; a value of IPv6FullChain means IPv6 version.</p>
     * @param integer $Number <p>Count of Cloud Load Balancers to create, default value is 1. The count must not exceed the maximum value allowed for the account, with a default creation maximum value of 20.</p>
     * @param string $MasterZoneId <p>Applicable only to public network load balancing with IP version IPv4. Sets the primary AZ ID for cross-AZ disaster recovery. Both AZ ID and name are supported, such as 100001 or ap-guangzhou-1.<br>Note: The primary AZ loads traffic. The secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable.</p>
     * @param string $ZoneId <p>Applicable only to public network load balancing with IP version IPv4. AZ ID, availability zone id and name are supported. Specify availability zone to create a CLB instance. For example: 100001 or ap-guangzhou-1.</p>
     * @param InternetAccessible $InternetAccessible <p>Maximum outbound bandwidth under the network billing mode. It applies only to LCU-supported instances of the private network type and all instances of the public network type.</p>
     * @param string $VipIsp <p>Applicable only to public network CLB. Currently, only Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing regions support static single-line IP type. If you need to experience it, contact business manager to submit a request. After approval, you can select operator type of China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). Only can be used network billing mode BANDWIDTH_PACKAGE. If this parameter is not specified, use BGP by default. You can query ISPs supported in a region via <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> api.</p>
     * @param array $Tags <p>When purchasing a Cloud Load Balancer, you can tag it with up to 20 tag key-value pairs.</p>
     * @param string $Vip <p>Specify VIP to apply for Cloud Load Balancer. This parameter is optional. If this parameter is not specified, VIP is automatically assigned. This parameter is supported for IPv4 and IPv6 types but not for IPv6 NAT64 type.<br>Note: When creating a private network instance or a public IPv6 BGP instance with a designated VIP, creation fails if the VIP is not within the IP range of the specified VPC subnet or if the VIP is already occupied.</p>
     * @param string $BandwidthPackageId <p>Bandwidth package ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1">DescribeBandwidthPackages</a> API. When this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by bandwidth package (BANDWIDTH_PACKAGE), and the bandwidth package attributes determine the settlement method. For IPv6 Cloud Load Balancer instances purchased by non-promoted users with a non-BGP operator type, specifying bandwidth package ID is unsupported.</p>
     * @param ExclusiveCluster $ExclusiveCluster <p>Dedicated instance info. This parameter is required when creating a private network CLB instance of exclusive type.</p>
     * @param string $SlaType <p>Performance capacity specification.</p><ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>For Chinese site users who need to create a shared instance, this parameter is not required. International site users will purchase a standard instance by default if this parameter is not passed.</li></ul> For specification details, see [Instance Specifications Comparison](https://www.tencentcloud.com/document/product/214/84689?from_cn_redirect=1).
     * @param array $ClusterIds <p>Cluster ID. This cluster identifier is used for configuring a public cloud exclusive cluster or a local dedicated cluster. To apply for a public cloud exclusive cluster, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a>. For local dedicated clusters, refer to the description in <a href="https://www.tencentcloud.com/document/product/1346?from_cn_redirect=1">Local Dedicated Cluster</a>.</p>
     * @param string $ClientToken <p>String used to ensure request idempotency. This string is generated by the customer and must be unique among different requests, with a maximum value of 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
     * @param boolean $SnatPro <p>Whether binding cross-regional or cross-Vpc IP addresses is supported.</p>
     * @param array $SnatIps <p>Enable the cross-regional or cross-Vpc IP binding feature to create a SnatIp.</p>
     * @param string $ClusterTag <p>Tag of the Stgw exclusive cluster.</p>
     * @param string $SlaveZoneId <p>Applicable only to public network load balancing with IP version IPv4. Sets the secondary AZ ID for cross-AZ disaster recovery. AZ ID and name are supported, such as 100001 or ap-guangzhou-1.<br>Note: The secondary AZ is the availability zone that needs to carry traffic after primary availability zone failure. Query a region's list of primary/secondary AZs via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API. [If you need to trial the feature, submit a ticket application via <a href="https://console.cloud.tencent.com/workorder/category">Work Order</a>]</p>
     * @param string $EipAddressId <p>The unique ID of EIP can be accessed through the <a href="https://www.tencentcloud.com/document/product/215/16702?from_cn_redirect=1">DescribeAddresses</a> api for the query. Example: eip-qhx8udkc, applicable only to bind EIP for private network CLB.</p>
     * @param boolean $LoadBalancerPassToTarget <p>Allow CLB traffic to the Target. Enable (true): verify security groups on CLB; deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances. IPv6 CLB security group default permit, this parameter is not required.</p>
     * @param boolean $DynamicVip <p>Create a domain-name based CLB.</p>
     * @param string $Egress <p>Network outbound</p>
     * @param LBChargePrepaid $LBChargePrepaid <p>Prepaid billing attributes of the CLB instance</p>
     * @param string $LBChargeType <p>Billing type of the CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR.</p><p>Enumeration values:</p><ul><li>POSTPAID_BY_HOUR: Pay-As-You-Go</li><li>PREPAID: Monthly Subscription</li></ul>
     * @param string $AccessLogTopicId <p>L7 access log topic ID</p>
     * @param boolean $AdvancedRoute <p>Whether layer-7 advanced routing is enabled</p>
     * @param AvailableZoneAffinityInfo $AvailableZoneAffinityInfo <p>Availability zone affinity info</p>
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

        if (array_key_exists("AvailableZoneAffinityInfo",$param) and $param["AvailableZoneAffinityInfo"] !== null) {
            $this->AvailableZoneAffinityInfo = new AvailableZoneAffinityInfo();
            $this->AvailableZoneAffinityInfo->deserialize($param["AvailableZoneAffinityInfo"]);
        }
    }
}
