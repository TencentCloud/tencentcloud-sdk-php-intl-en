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
 * CreateLoadBalancer request structure.
 *
 * @method string getLoadBalancerType() Obtain <p>Network type of the Cloud Load Balancer instance:<br>OPEN: public network attribute, INTERNAL: private network attribute.</p>
 * @method void setLoadBalancerType(string $LoadBalancerType) Set <p>Network type of the Cloud Load Balancer instance:<br>OPEN: public network attribute, INTERNAL: private network attribute.</p>
 * @method integer getForward() Obtain <p>Type of the Cloud Load Balancer instance. 1: Common Cloud Load Balancer instance. Currently only support input 1.</p>
 * @method void setForward(integer $Forward) Set <p>Type of the Cloud Load Balancer instance. 1: Common Cloud Load Balancer instance. Currently only support input 1.</p>
 * @method string getLoadBalancerName() Obtain <p>The name of a Cloud Load Balancer instance takes effect only when creating an instance. Rule: 1-80 characters in internationally compatible languages, including English letters, Chinese characters, digits, hyphens "-", underscores "_", and other common characters (Unicode supplementary characters such as emojis and rare Chinese characters are forbidden). Note: If the name is identical to that of an existing Cloud Load Balancer instance in the system, the system will automatically generate a name for the newly created CLB instance.</p>
 * @method void setLoadBalancerName(string $LoadBalancerName) Set <p>The name of a Cloud Load Balancer instance takes effect only when creating an instance. Rule: 1-80 characters in internationally compatible languages, including English letters, Chinese characters, digits, hyphens "-", underscores "_", and other common characters (Unicode supplementary characters such as emojis and rare Chinese characters are forbidden). Note: If the name is identical to that of an existing Cloud Load Balancer instance in the system, the system will automatically generate a name for the newly created CLB instance.</p>
 * @method string getVpcId() Obtain <p>The network ID of the backend target device belonging to the Cloud Load Balancer, such as vpc-12345678, can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">DescribeVpcs</a> API. It defaults to DefaultVPC if this parameter is not specified. This parameter is required when creating a private network CLB instance.</p>
 * @method void setVpcId(string $VpcId) Set <p>The network ID of the backend target device belonging to the Cloud Load Balancer, such as vpc-12345678, can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">DescribeVpcs</a> API. It defaults to DefaultVPC if this parameter is not specified. This parameter is required when creating a private network CLB instance.</p>
 * @method string getSubnetId() Obtain <p>A subnet ID must be specified when you purchase a private network CLB instance under a VPC. The VIP of the private network CLB instance is generated in this subnet. This parameter is required when you create a private network CLB instance but not supported when you create a public network IPv4 CLB instance.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>A subnet ID must be specified when you purchase a private network CLB instance under a VPC. The VIP of the private network CLB instance is generated in this subnet. This parameter is required when you create a private network CLB instance but not supported when you create a public network IPv4 CLB instance.</p>
 * @method integer getProjectId() Obtain <p>The project ID associated with the Cloud Load Balancer instance can be obtained through the <a href="https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1">DescribeProject</a> API. If this parameter is left blank, it will be used as the default project.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>The project ID associated with the Cloud Load Balancer instance can be obtained through the <a href="https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1">DescribeProject</a> API. If this parameter is left blank, it will be used as the default project.</p>
 * @method string getAddressIPVersion() Obtain <p>Applicable only to public network CLB. IP version, valid values: IPV4, IPV6, IPv6FullChain, case-insensitive, default value IPV4. Description: A value of IPV6 means IPV6 NAT64 version; a value of IPv6FullChain means IPv6 version.</p>
 * @method void setAddressIPVersion(string $AddressIPVersion) Set <p>Applicable only to public network CLB. IP version, valid values: IPV4, IPV6, IPv6FullChain, case-insensitive, default value IPV4. Description: A value of IPV6 means IPV6 NAT64 version; a value of IPv6FullChain means IPv6 version.</p>
 * @method integer getNumber() Obtain <p>Count of Cloud Load Balancers to create. Default value: 1.</p>
 * @method void setNumber(integer $Number) Set <p>Count of Cloud Load Balancers to create. Default value: 1.</p>
 * @method string getMasterZoneId() Obtain <p>Applicable only to public network IPv4 Cloud Load Balancer. Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.<br>Note: The primary AZ loads traffic. The secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable. Currently, primary and secondary AZs are supported only for IPv4 CLB instances in Guangzhou, Shanghai, Nanjing, Beijing, Chengdu, Shenzhen Finance, Hong Kong (China), Seoul, Frankfurt, and Singapore regions. You can call the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API to query the primary AZ list of a region. [If you need to experience this feature, submit a ticket](https://console.cloud.tencent.com/workorder/category).</p>
 * @method void setMasterZoneId(string $MasterZoneId) Set <p>Applicable only to public network IPv4 Cloud Load Balancer. Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.<br>Note: The primary AZ loads traffic. The secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable. Currently, primary and secondary AZs are supported only for IPv4 CLB instances in Guangzhou, Shanghai, Nanjing, Beijing, Chengdu, Shenzhen Finance, Hong Kong (China), Seoul, Frankfurt, and Singapore regions. You can call the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API to query the primary AZ list of a region. [If you need to experience this feature, submit a ticket](https://console.cloud.tencent.com/workorder/category).</p>
 * @method string getZoneId() Obtain <p>Applicable only to public network load balancing with IPv4 version. Availability zone ID. Designated availability zone to create a CLB instance, for example: ap-guangzhou-1.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Applicable only to public network load balancing with IPv4 version. Availability zone ID. Designated availability zone to create a CLB instance, for example: ap-guangzhou-1.</p>
 * @method InternetAccessible getInternetAccessible() Obtain <p>Maximum outbound bandwidth under the network billing mode. It applies only to LCU-supported instances of the private network type and all instances of the public network type.</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set <p>Maximum outbound bandwidth under the network billing mode. It applies only to LCU-supported instances of the private network type and all instances of the public network type.</p>
 * @method string getVipIsp() Obtain <p>Applicable only to public network CLB. Currently, static single-line IP type is supported in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing regions. If you need to experience it, contact business manager to submit a request. After approval, just select CMCC, CUCC, or CTCC as the operator type. Only can be used BANDWIDTH_PACKAGE for network billing mode. If this parameter is not specified, use BGP by default. You can check ISPs supported in a region via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> api query.</p>
 * @method void setVipIsp(string $VipIsp) Set <p>Applicable only to public network CLB. Currently, static single-line IP type is supported in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing regions. If you need to experience it, contact business manager to submit a request. After approval, just select CMCC, CUCC, or CTCC as the operator type. Only can be used BANDWIDTH_PACKAGE for network billing mode. If this parameter is not specified, use BGP by default. You can check ISPs supported in a region via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> api query.</p>
 * @method array getTags() Obtain <p>When you purchase Cloud Load Balancer (CLB), you can tag it with up to 20 tag key-value pairs.</p>
 * @method void setTags(array $Tags) Set <p>When you purchase Cloud Load Balancer (CLB), you can tag it with up to 20 tag key-value pairs.</p>
 * @method string getVip() Obtain <p>Apply for a Cloud Load Balancer with a designated VIP. This parameter is optional. If this parameter is not specified, the VIP is assigned by system. This parameter is supported for IPv4 and IPv6 types but unsupported for IPv6 NAT64 type.<br>Note: When specifying a VIP to create a private network instance or a public IPv6 BGP instance, creation fails if the VIP is not within the specified VPC subnet or if the VIP is already occupied.</p>
 * @method void setVip(string $Vip) Set <p>Apply for a Cloud Load Balancer with a designated VIP. This parameter is optional. If this parameter is not specified, the VIP is assigned by system. This parameter is supported for IPv4 and IPv6 types but unsupported for IPv6 NAT64 type.<br>Note: When specifying a VIP to create a private network instance or a public IPv6 BGP instance, creation fails if the VIP is not within the specified VPC subnet or if the VIP is already occupied.</p>
 * @method string getBandwidthPackageId() Obtain <p>Bandwidth package ID. If this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) will only support billing by bandwidth package (BANDWIDTH_PACKAGE). The attributes of the bandwidth package determine the settlement method. For IPv6 CLB instances purchased by non-promoted users, if the ISP type is not BGP, the bandwidth package ID cannot be specified.</p>
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set <p>Bandwidth package ID. If this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) will only support billing by bandwidth package (BANDWIDTH_PACKAGE). The attributes of the bandwidth package determine the settlement method. For IPv6 CLB instances purchased by non-promoted users, if the ISP type is not BGP, the bandwidth package ID cannot be specified.</p>
 * @method ExclusiveCluster getExclusiveCluster() Obtain <p>Dedicated instance info. This parameter is required when creating a private network CLB instance of exclusive type.</p>
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) Set <p>Dedicated instance info. This parameter is required when creating a private network CLB instance of exclusive type.</p>
 * @method string getSlaType() Obtain <p>Performance capacity specification.</p><ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>For domestic site users, this parameter is not required when creating a shared instance. For international site users, the default purchased instance is standard if this parameter is not passed.</li></ul> For specification details, see [Instance Specifications Comparison](https://www.tencentcloud.com/document/product/214/84689?from_cn_redirect=1).
 * @method void setSlaType(string $SlaType) Set <p>Performance capacity specification.</p><ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>For domestic site users, this parameter is not required when creating a shared instance. For international site users, the default purchased instance is standard if this parameter is not passed.</li></ul> For specification details, see [Instance Specifications Comparison](https://www.tencentcloud.com/document/product/214/84689?from_cn_redirect=1).
 * @method string getClientToken() Obtain <p>A string used to ensure request idempotency. This string is generated by the customer and must be unique among different requests, with a maximum value of no more than 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
 * @method void setClientToken(string $ClientToken) Set <p>A string used to ensure request idempotency. This string is generated by the customer and must be unique among different requests, with a maximum value of no more than 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
 * @method boolean getSnatPro() Obtain <p>Whether the cross-regional or cross-Vpc IP binding feature is supported.</p>
 * @method void setSnatPro(boolean $SnatPro) Set <p>Whether the cross-regional or cross-Vpc IP binding feature is supported.</p>
 * @method array getSnatIps() Obtain <p>After enabling the cross-regional/cross-Vpc IP binding feature, create a SnatIp.</p>
 * @method void setSnatIps(array $SnatIps) Set <p>After enabling the cross-regional/cross-Vpc IP binding feature, create a SnatIp.</p>
 * @method string getClusterTag() Obtain <p>Tag of the Stgw exclusive cluster.</p>
 * @method void setClusterTag(string $ClusterTag) Set <p>Tag of the Stgw exclusive cluster.</p>
 * @method string getSlaveZoneId() Obtain <p>Applicable only to public network load balancing with IPv4 version. Sets the secondary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.<br>Note: The secondary AZ is the availability zone that needs to carry traffic after primary availability zone failure. You can query a region's list of primary/secondary AZs via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API. [If you need to trial the feature, submit a <a href="https://console.cloud.tencent.com/workorder/category">ticket application</a>]</p>
 * @method void setSlaveZoneId(string $SlaveZoneId) Set <p>Applicable only to public network load balancing with IPv4 version. Sets the secondary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.<br>Note: The secondary AZ is the availability zone that needs to carry traffic after primary availability zone failure. You can query a region's list of primary/secondary AZs via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API. [If you need to trial the feature, submit a <a href="https://console.cloud.tencent.com/workorder/category">ticket application</a>]</p>
 * @method string getEipAddressId() Obtain <p>Unique ID of EIP, such as eip-11112222, applicable only to private network CLB to bind EIP.</p>
 * @method void setEipAddressId(string $EipAddressId) Set <p>Unique ID of EIP, such as eip-11112222, applicable only to private network CLB to bind EIP.</p>
 * @method boolean getLoadBalancerPassToTarget() Obtain <p>Allow CLB traffic to the Target. Enable (true): verify security groups on CLB; deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances.</p>
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) Set <p>Allow CLB traffic to the Target. Enable (true): verify security groups on CLB; deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances.</p>
 * @method string getEgress() Obtain <p>Network outbound</p>
 * @method void setEgress(string $Egress) Set <p>Network outbound</p>
 * @method LBChargePrepaid getLBChargePrepaid() Obtain <p>Prepaid billing attributes of the Cloud Load Balancer instance</p>
 * @method void setLBChargePrepaid(LBChargePrepaid $LBChargePrepaid) Set <p>Prepaid billing attributes of the Cloud Load Balancer instance</p>
 * @method string getLBChargeType() Obtain <p>Billing type of the CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR.</p>
 * @method void setLBChargeType(string $LBChargeType) Set <p>Billing type of the CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR.</p>
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
     * @var integer <p>Type of the Cloud Load Balancer instance. 1: Common Cloud Load Balancer instance. Currently only support input 1.</p>
     */
    public $Forward;

    /**
     * @var string <p>The name of a Cloud Load Balancer instance takes effect only when creating an instance. Rule: 1-80 characters in internationally compatible languages, including English letters, Chinese characters, digits, hyphens "-", underscores "_", and other common characters (Unicode supplementary characters such as emojis and rare Chinese characters are forbidden). Note: If the name is identical to that of an existing Cloud Load Balancer instance in the system, the system will automatically generate a name for the newly created CLB instance.</p>
     */
    public $LoadBalancerName;

    /**
     * @var string <p>The network ID of the backend target device belonging to the Cloud Load Balancer, such as vpc-12345678, can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">DescribeVpcs</a> API. It defaults to DefaultVPC if this parameter is not specified. This parameter is required when creating a private network CLB instance.</p>
     */
    public $VpcId;

    /**
     * @var string <p>A subnet ID must be specified when you purchase a private network CLB instance under a VPC. The VIP of the private network CLB instance is generated in this subnet. This parameter is required when you create a private network CLB instance but not supported when you create a public network IPv4 CLB instance.</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>The project ID associated with the Cloud Load Balancer instance can be obtained through the <a href="https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1">DescribeProject</a> API. If this parameter is left blank, it will be used as the default project.</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Applicable only to public network CLB. IP version, valid values: IPV4, IPV6, IPv6FullChain, case-insensitive, default value IPV4. Description: A value of IPV6 means IPV6 NAT64 version; a value of IPv6FullChain means IPv6 version.</p>
     */
    public $AddressIPVersion;

    /**
     * @var integer <p>Count of Cloud Load Balancers to create. Default value: 1.</p>
     */
    public $Number;

    /**
     * @var string <p>Applicable only to public network IPv4 Cloud Load Balancer. Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.<br>Note: The primary AZ loads traffic. The secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable. Currently, primary and secondary AZs are supported only for IPv4 CLB instances in Guangzhou, Shanghai, Nanjing, Beijing, Chengdu, Shenzhen Finance, Hong Kong (China), Seoul, Frankfurt, and Singapore regions. You can call the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API to query the primary AZ list of a region. [If you need to experience this feature, submit a ticket](https://console.cloud.tencent.com/workorder/category).</p>
     */
    public $MasterZoneId;

    /**
     * @var string <p>Applicable only to public network load balancing with IPv4 version. Availability zone ID. Designated availability zone to create a CLB instance, for example: ap-guangzhou-1.</p>
     */
    public $ZoneId;

    /**
     * @var InternetAccessible <p>Maximum outbound bandwidth under the network billing mode. It applies only to LCU-supported instances of the private network type and all instances of the public network type.</p>
     */
    public $InternetAccessible;

    /**
     * @var string <p>Applicable only to public network CLB. Currently, static single-line IP type is supported in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing regions. If you need to experience it, contact business manager to submit a request. After approval, just select CMCC, CUCC, or CTCC as the operator type. Only can be used BANDWIDTH_PACKAGE for network billing mode. If this parameter is not specified, use BGP by default. You can check ISPs supported in a region via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> api query.</p>
     */
    public $VipIsp;

    /**
     * @var array <p>When you purchase Cloud Load Balancer (CLB), you can tag it with up to 20 tag key-value pairs.</p>
     */
    public $Tags;

    /**
     * @var string <p>Apply for a Cloud Load Balancer with a designated VIP. This parameter is optional. If this parameter is not specified, the VIP is assigned by system. This parameter is supported for IPv4 and IPv6 types but unsupported for IPv6 NAT64 type.<br>Note: When specifying a VIP to create a private network instance or a public IPv6 BGP instance, creation fails if the VIP is not within the specified VPC subnet or if the VIP is already occupied.</p>
     */
    public $Vip;

    /**
     * @var string <p>Bandwidth package ID. If this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) will only support billing by bandwidth package (BANDWIDTH_PACKAGE). The attributes of the bandwidth package determine the settlement method. For IPv6 CLB instances purchased by non-promoted users, if the ISP type is not BGP, the bandwidth package ID cannot be specified.</p>
     */
    public $BandwidthPackageId;

    /**
     * @var ExclusiveCluster <p>Dedicated instance info. This parameter is required when creating a private network CLB instance of exclusive type.</p>
     */
    public $ExclusiveCluster;

    /**
     * @var string <p>Performance capacity specification.</p><ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>For domestic site users, this parameter is not required when creating a shared instance. For international site users, the default purchased instance is standard if this parameter is not passed.</li></ul> For specification details, see [Instance Specifications Comparison](https://www.tencentcloud.com/document/product/214/84689?from_cn_redirect=1).
     */
    public $SlaType;

    /**
     * @var string <p>A string used to ensure request idempotency. This string is generated by the customer and must be unique among different requests, with a maximum value of no more than 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
     */
    public $ClientToken;

    /**
     * @var boolean <p>Whether the cross-regional or cross-Vpc IP binding feature is supported.</p>
     */
    public $SnatPro;

    /**
     * @var array <p>After enabling the cross-regional/cross-Vpc IP binding feature, create a SnatIp.</p>
     */
    public $SnatIps;

    /**
     * @var string <p>Tag of the Stgw exclusive cluster.</p>
     */
    public $ClusterTag;

    /**
     * @var string <p>Applicable only to public network load balancing with IPv4 version. Sets the secondary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.<br>Note: The secondary AZ is the availability zone that needs to carry traffic after primary availability zone failure. You can query a region's list of primary/secondary AZs via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API. [If you need to trial the feature, submit a <a href="https://console.cloud.tencent.com/workorder/category">ticket application</a>]</p>
     */
    public $SlaveZoneId;

    /**
     * @var string <p>Unique ID of EIP, such as eip-11112222, applicable only to private network CLB to bind EIP.</p>
     */
    public $EipAddressId;

    /**
     * @var boolean <p>Allow CLB traffic to the Target. Enable (true): verify security groups on CLB; deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances.</p>
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var string <p>Network outbound</p>
     */
    public $Egress;

    /**
     * @var LBChargePrepaid <p>Prepaid billing attributes of the Cloud Load Balancer instance</p>
     */
    public $LBChargePrepaid;

    /**
     * @var string <p>Billing type of the CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR.</p>
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
     * @param integer $Forward <p>Type of the Cloud Load Balancer instance. 1: Common Cloud Load Balancer instance. Currently only support input 1.</p>
     * @param string $LoadBalancerName <p>The name of a Cloud Load Balancer instance takes effect only when creating an instance. Rule: 1-80 characters in internationally compatible languages, including English letters, Chinese characters, digits, hyphens "-", underscores "_", and other common characters (Unicode supplementary characters such as emojis and rare Chinese characters are forbidden). Note: If the name is identical to that of an existing Cloud Load Balancer instance in the system, the system will automatically generate a name for the newly created CLB instance.</p>
     * @param string $VpcId <p>The network ID of the backend target device belonging to the Cloud Load Balancer, such as vpc-12345678, can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">DescribeVpcs</a> API. It defaults to DefaultVPC if this parameter is not specified. This parameter is required when creating a private network CLB instance.</p>
     * @param string $SubnetId <p>A subnet ID must be specified when you purchase a private network CLB instance under a VPC. The VIP of the private network CLB instance is generated in this subnet. This parameter is required when you create a private network CLB instance but not supported when you create a public network IPv4 CLB instance.</p>
     * @param integer $ProjectId <p>The project ID associated with the Cloud Load Balancer instance can be obtained through the <a href="https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1">DescribeProject</a> API. If this parameter is left blank, it will be used as the default project.</p>
     * @param string $AddressIPVersion <p>Applicable only to public network CLB. IP version, valid values: IPV4, IPV6, IPv6FullChain, case-insensitive, default value IPV4. Description: A value of IPV6 means IPV6 NAT64 version; a value of IPv6FullChain means IPv6 version.</p>
     * @param integer $Number <p>Count of Cloud Load Balancers to create. Default value: 1.</p>
     * @param string $MasterZoneId <p>Applicable only to public network IPv4 Cloud Load Balancer. Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.<br>Note: The primary AZ loads traffic. The secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable. Currently, primary and secondary AZs are supported only for IPv4 CLB instances in Guangzhou, Shanghai, Nanjing, Beijing, Chengdu, Shenzhen Finance, Hong Kong (China), Seoul, Frankfurt, and Singapore regions. You can call the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API to query the primary AZ list of a region. [If you need to experience this feature, submit a ticket](https://console.cloud.tencent.com/workorder/category).</p>
     * @param string $ZoneId <p>Applicable only to public network load balancing with IPv4 version. Availability zone ID. Designated availability zone to create a CLB instance, for example: ap-guangzhou-1.</p>
     * @param InternetAccessible $InternetAccessible <p>Maximum outbound bandwidth under the network billing mode. It applies only to LCU-supported instances of the private network type and all instances of the public network type.</p>
     * @param string $VipIsp <p>Applicable only to public network CLB. Currently, static single-line IP type is supported in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing regions. If you need to experience it, contact business manager to submit a request. After approval, just select CMCC, CUCC, or CTCC as the operator type. Only can be used BANDWIDTH_PACKAGE for network billing mode. If this parameter is not specified, use BGP by default. You can check ISPs supported in a region via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> api query.</p>
     * @param array $Tags <p>When you purchase Cloud Load Balancer (CLB), you can tag it with up to 20 tag key-value pairs.</p>
     * @param string $Vip <p>Apply for a Cloud Load Balancer with a designated VIP. This parameter is optional. If this parameter is not specified, the VIP is assigned by system. This parameter is supported for IPv4 and IPv6 types but unsupported for IPv6 NAT64 type.<br>Note: When specifying a VIP to create a private network instance or a public IPv6 BGP instance, creation fails if the VIP is not within the specified VPC subnet or if the VIP is already occupied.</p>
     * @param string $BandwidthPackageId <p>Bandwidth package ID. If this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) will only support billing by bandwidth package (BANDWIDTH_PACKAGE). The attributes of the bandwidth package determine the settlement method. For IPv6 CLB instances purchased by non-promoted users, if the ISP type is not BGP, the bandwidth package ID cannot be specified.</p>
     * @param ExclusiveCluster $ExclusiveCluster <p>Dedicated instance info. This parameter is required when creating a private network CLB instance of exclusive type.</p>
     * @param string $SlaType <p>Performance capacity specification.</p><ul><li>If you need to create an LCU-supported instance, this parameter is required. Valid values:<ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li></ul></li><li>For domestic site users, this parameter is not required when creating a shared instance. For international site users, the default purchased instance is standard if this parameter is not passed.</li></ul> For specification details, see [Instance Specifications Comparison](https://www.tencentcloud.com/document/product/214/84689?from_cn_redirect=1).
     * @param string $ClientToken <p>A string used to ensure request idempotency. This string is generated by the customer and must be unique among different requests, with a maximum value of no more than 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
     * @param boolean $SnatPro <p>Whether the cross-regional or cross-Vpc IP binding feature is supported.</p>
     * @param array $SnatIps <p>After enabling the cross-regional/cross-Vpc IP binding feature, create a SnatIp.</p>
     * @param string $ClusterTag <p>Tag of the Stgw exclusive cluster.</p>
     * @param string $SlaveZoneId <p>Applicable only to public network load balancing with IPv4 version. Sets the secondary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.<br>Note: The secondary AZ is the availability zone that needs to carry traffic after primary availability zone failure. You can query a region's list of primary/secondary AZs via the <a href="https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1">DescribeResources</a> API. [If you need to trial the feature, submit a <a href="https://console.cloud.tencent.com/workorder/category">ticket application</a>]</p>
     * @param string $EipAddressId <p>Unique ID of EIP, such as eip-11112222, applicable only to private network CLB to bind EIP.</p>
     * @param boolean $LoadBalancerPassToTarget <p>Allow CLB traffic to the Target. Enable (true): verify security groups on CLB; deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances.</p>
     * @param string $Egress <p>Network outbound</p>
     * @param LBChargePrepaid $LBChargePrepaid <p>Prepaid billing attributes of the Cloud Load Balancer instance</p>
     * @param string $LBChargeType <p>Billing type of the CLB instance. Valid values: POSTPAID_BY_HOUR and PREPAID. Default value: POSTPAID_BY_HOUR.</p>
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
