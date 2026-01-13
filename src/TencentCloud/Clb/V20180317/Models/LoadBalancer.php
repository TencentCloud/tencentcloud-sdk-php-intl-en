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
 * CLB instance information
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID.
 * @method string getLoadBalancerName() Obtain CLB instance name.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name.
 * @method string getLoadBalancerType() Obtain Network type of the load balancing instance.
OPEN: public network attribute. INTERNAL: private network attribute. for a cloud load balancer with private network attribute, you can bind an EIP for public network access. for details, see the EIP document on binding elastic IP (https://www.tencentcloud.com/document/product/215/16700?from_cn_redirect=1).
 * @method void setLoadBalancerType(string $LoadBalancerType) Set Network type of the load balancing instance.
OPEN: public network attribute. INTERNAL: private network attribute. for a cloud load balancer with private network attribute, you can bind an EIP for public network access. for details, see the EIP document on binding elastic IP (https://www.tencentcloud.com/document/product/215/16700?from_cn_redirect=1).
 * @method integer getForward() Obtain CLB type identifier. Value range: 1 (CLB); 0 (classic CLB).
 * @method void setForward(integer $Forward) Set CLB type identifier. Value range: 1 (CLB); 0 (classic CLB).
 * @method string getDomain() Obtain The domain name of the cloud load balancer instance. this field is only provided for public network classic and domain name-based load balancing instances. it is being gradually phased out. we recommend using LoadBalancerDomain instead.
 * @method void setDomain(string $Domain) Set The domain name of the cloud load balancer instance. this field is only provided for public network classic and domain name-based load balancing instances. it is being gradually phased out. we recommend using LoadBalancerDomain instead.
 * @method array getLoadBalancerVips() Obtain List of VIPs of a CLB instance.
 * @method void setLoadBalancerVips(array $LoadBalancerVips) Set List of VIPs of a CLB instance.
 * @method integer getStatus() Obtain Specifies the state of the load balancing instance, including.
0: creating. 1: normal operation.
 * @method void setStatus(integer $Status) Set Specifies the state of the load balancing instance, including.
0: creating. 1: normal operation.
 * @method string getCreateTime() Obtain CLB instance creation time
Format: YYYY-MM-DD HH:MM:ss.
 * @method void setCreateTime(string $CreateTime) Set CLB instance creation time
Format: YYYY-MM-DD HH:MM:ss.
 * @method string getStatusTime() Obtain Last status transition time of the CLB instance.
Format: YYYY-MM-DD HH:MM:ss.
 * @method void setStatusTime(string $StatusTime) Set Last status transition time of the CLB instance.
Format: YYYY-MM-DD HH:MM:ss.
 * @method integer getProjectId() Obtain ID of the project to which a CLB instance belongs. 0: default project.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which a CLB instance belongs. 0: default project.
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method integer getOpenBgp() Obtain Anti-DDoS Pro identifier for CLB. 1: CLB with Anti-DDoS Pro; 0: CLB without Anti-DDoS Pro.
 * @method void setOpenBgp(integer $OpenBgp) Set Anti-DDoS Pro identifier for CLB. 1: CLB with Anti-DDoS Pro; 0: CLB without Anti-DDoS Pro.
 * @method boolean getSnat() Obtain Whether SNAT is enabled. for traditional private network clbs before december 2016, SNAT was enabled.
 * @method void setSnat(boolean $Snat) Set Whether SNAT is enabled. for traditional private network clbs before december 2016, SNAT was enabled.
 * @method integer getIsolation() Obtain Whether isolated. 0 means not isolated. 1 means isolated.
 * @method void setIsolation(integer $Isolation) Set Whether isolated. 0 means not isolated. 1 means isolated.
 * @method string getLog() Obtain Log information. Only the public network CLB that have HTTP or HTTPS listeners can generate logs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLog(string $Log) Set Log information. Only the public network CLB that have HTTP or HTTPS listeners can generate logs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet of the CLB instance (applicable only to VPC-type CLB instances on private networks)
 * @method void setSubnetId(string $SubnetId) Set Subnet of the CLB instance (applicable only to VPC-type CLB instances on private networks)
 * @method array getTags() Obtain CLB instance tag information
 * @method void setTags(array $Tags) Set CLB instance tag information
 * @method array getSecureGroups() Obtain Security group of the CLB instance
 * @method void setSecureGroups(array $SecureGroups) Set Security group of the CLB instance
 * @method TargetRegionInfo getTargetRegionInfo() Obtain Basic information of real servers bound to the CLB instance
 * @method void setTargetRegionInfo(TargetRegionInfo $TargetRegionInfo) Set Basic information of real servers bound to the CLB instance
 * @method string getAnycastZone() Obtain Anycast CLB release domain. For non-anycast CLB, this field returns an empty string.
 * @method void setAnycastZone(string $AnycastZone) Set Anycast CLB release domain. For non-anycast CLB, this field returns an empty string.
 * @method string getAddressIPVersion() Obtain IP Version, ipv4 | ipv6
 * @method void setAddressIPVersion(string $AddressIPVersion) Set IP Version, ipv4 | ipv6
 * @method integer getNumericalVpcId() Obtain Specifies the VPC ID in numerical form, obtainable through the DescribeVpcs API (https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1).
 * @method void setNumericalVpcId(integer $NumericalVpcId) Set Specifies the VPC ID in numerical form, obtainable through the DescribeVpcs API (https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1).
 * @method string getVipIsp() Obtain Specifies the ISP of the load balancer IP address.

-BGP (multi-line).
- CMCC: CMCC single line network.
-CTCC: ctcc single-line.
- CUCC: china unicom single-line.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVipIsp(string $VipIsp) Set Specifies the ISP of the load balancer IP address.

-BGP (multi-line).
- CMCC: CMCC single line network.
-CTCC: ctcc single-line.
- CUCC: china unicom single-line.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ZoneInfo getMasterZone() Obtain Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMasterZone(ZoneInfo $MasterZone) Set Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBackupZoneSet() Obtain Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupZoneSet(array $BackupZoneSet) Set Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsolatedTime() Obtain Specifies the isolation time of the cloud load balancer instance.
Format: YYYY-MM-DD HH:MM:ss.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolatedTime(string $IsolatedTime) Set Specifies the isolation time of the cloud load balancer instance.
Format: YYYY-MM-DD HH:MM:ss.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain CLB instance expiration time, which takes effect only for prepaid instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set CLB instance expiration time, which takes effect only for prepaid instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getChargeType() Obtain Billing mode of CLB instance. Valid values: PREPAID (monthly subscription), POSTPAID_BY_HOUR (pay as you go).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setChargeType(string $ChargeType) Set Billing mode of CLB instance. Valid values: PREPAID (monthly subscription), POSTPAID_BY_HOUR (pay as you go).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method InternetAccessible getNetworkAttributes() Obtain CLB instance network attributes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkAttributes(InternetAccessible $NetworkAttributes) Set CLB instance network attributes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LBChargePrepaid getPrepaidAttributes() Obtain Prepaid billing attributes of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrepaidAttributes(LBChargePrepaid $PrepaidAttributes) Set Prepaid billing attributes of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogSetId() Obtain Log set ID of Cloud Log Service (CLS) for CLB
 * @method void setLogSetId(string $LogSetId) Set Log set ID of Cloud Log Service (CLS) for CLB
 * @method string getLogTopicId() Obtain Log topic ID of Cloud Log Service (CLS) for CLB
 * @method void setLogTopicId(string $LogTopicId) Set Log topic ID of Cloud Log Service (CLS) for CLB
 * @method string getAddressIPv6() Obtain IPv6 address of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddressIPv6(string $AddressIPv6) Set IPv6 address of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtraInfo getExtraInfo() Obtain Reserved field which can be ignored generally.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) Set Reserved field which can be ignored generally.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDDos() Obtain Whether an Anti-DDoS Pro instance can be bound
 * @method void setIsDDos(boolean $IsDDos) Set Whether an Anti-DDoS Pro instance can be bound
 * @method string getConfigId() Obtain Custom configuration IDs of CLB instances
 * @method void setConfigId(string $ConfigId) Set Custom configuration IDs of CLB instances
 * @method boolean getLoadBalancerPassToTarget() Obtain Whether the real server allows traffic from CLB
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) Set Whether the real server allows traffic from CLB
 * @method ExclusiveCluster getExclusiveCluster() Obtain Exclusive cluster on the private network
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) Set Exclusive cluster on the private network
 * @method string getIPv6Mode() Obtain Specifies the field is meaningful when the IP address version is ipv6. valid values: ipv6Nat64 | ipv6FullChain.
IPv6Nat64: specifies a load balancer based on Nat64 IPv6 transition technology.
IPv6FullChain: specifies a cloud load balancer implemented based on ipv6 single-stack technology.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIPv6Mode(string $IPv6Mode) Set Specifies the field is meaningful when the IP address version is ipv6. valid values: ipv6Nat64 | ipv6FullChain.
IPv6Nat64: specifies a load balancer based on Nat64 IPv6 transition technology.
IPv6FullChain: specifies a cloud load balancer implemented based on ipv6 single-stack technology.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSnatPro() Obtain Specifies whether SnatPro is enabled.
 * @method void setSnatPro(boolean $SnatPro) Set Specifies whether SnatPro is enabled.
 * @method array getSnatIps() Obtain Enables the SnatIp list after turning on SnatPro load balancing.
 * @method void setSnatIps(array $SnatIps) Set Enables the SnatIp list after turning on SnatPro load balancing.
 * @method string getSlaType() Obtain Performance capacity specification. <ul><li> clb.c1.small: minimalist specification </li> <li> clb.c2.medium: standard specification </li> <li> clb.c3.small: advanced type 1 specification </li> <li> clb.c3.medium: advanced type 2 specification </li> <li> clb.c4.small: super type 1 specification </li> <li> clb.c4.medium: super type 2 specification </li> <li> clb.c4.large: super type 3 specification </li> <li> clb.c4.xlarge: super type 4 specification </li> <li>"" : non-performance capacity instance</li></ul>.
 * @method void setSlaType(string $SlaType) Set Performance capacity specification. <ul><li> clb.c1.small: minimalist specification </li> <li> clb.c2.medium: standard specification </li> <li> clb.c3.small: advanced type 1 specification </li> <li> clb.c3.medium: advanced type 2 specification </li> <li> clb.c4.small: super type 1 specification </li> <li> clb.c4.medium: super type 2 specification </li> <li> clb.c4.large: super type 3 specification </li> <li> clb.c4.xlarge: super type 4 specification </li> <li>"" : non-performance capacity instance</li></ul>.
 * @method boolean getIsBlock() Obtain Whether VIP is blocked
 * @method void setIsBlock(boolean $IsBlock) Set Whether VIP is blocked
 * @method string getIsBlockTime() Obtain Specifies the blocking or unblocking time.
Format: YYYY-MM-DD HH:MM:ss.
 * @method void setIsBlockTime(string $IsBlockTime) Set Specifies the blocking or unblocking time.
Format: YYYY-MM-DD HH:MM:ss.
 * @method boolean getLocalBgp() Obtain Whether the IP type is Local BGP
 * @method void setLocalBgp(boolean $LocalBgp) Set Whether the IP type is Local BGP
 * @method string getClusterTag() Obtain Dedicated layer-7 tag.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClusterTag(string $ClusterTag) Set Dedicated layer-7 tag.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getMixIpTarget() Obtain If the layer-7 listener of an IPv6FullChain CLB instance is enabled, the CLB instance can be bound with IPv4 and IPv6 CVM instances simultaneously.
 * @method void setMixIpTarget(boolean $MixIpTarget) Set If the layer-7 listener of an IPv6FullChain CLB instance is enabled, the CLB instance can be bound with IPv4 and IPv6 CVM instances simultaneously.
 * @method array getZones() Obtain Availability zone of a VPC-based private network CLB instance
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setZones(array $Zones) Set Availability zone of a VPC-based private network CLB instance
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getNfvInfo() Obtain Whether it is an NFV CLB instance. No returned information: no; l7nfv: yes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setNfvInfo(string $NfvInfo) Set Whether it is an NFV CLB instance. No returned information: no; l7nfv: yes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getHealthLogSetId() Obtain Health check log set ID of Cloud Log Service (CLS) for CLB
 * @method void setHealthLogSetId(string $HealthLogSetId) Set Health check log set ID of Cloud Log Service (CLS) for CLB
 * @method string getHealthLogTopicId() Obtain Health check log topic ID of Cloud Log Service (CLS) for CLB
 * @method void setHealthLogTopicId(string $HealthLogTopicId) Set Health check log topic ID of Cloud Log Service (CLS) for CLB
 * @method array getClusterIds() Obtain Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterIds(array $ClusterIds) Set Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAttributeFlags() Obtain Attributes of cloud load balancer, input an array of strings to determine whether it is enabled.
DeleteProtect: specifies deletion protection. once enabled, it prevents the cloud load balancer from being accidentally deleted. 
UserInVisible: invisible to users, controls load balancing visibility to users. 
BlockStatus: specifies the blockage status, used to limit certain operations or traffic for cloud load balancer. 
NoLBNat: disables the NAT feature of cloud load balancer for direct forwarding of traffic in specific scenarios. 
BanStatus: specifies the blocking status for suspending the clb service or restricting access. 
ShiftupFlag: specifies the upgrade flag used to identify if the cloud load balancer requires a configuration upgrade or performance improvement. 
Specifies the stopped status. once enabled, the cloud load balancer suspends service. 
NoVpcGw: specifies not to use VPC gateway to bypass the gateway for direct traffic handling. 
SgInTgw: specifies the security group in TGW (Transit Gateway) involving network security policy configuration. 
SharedLimitFlag: specifies the shared limit flag used to control the resource constraints of cloud load balancer. 
WafFlag: specifies the Web application firewall (WAF) flag. enabled to enable WAF protection. 
IsDomainCLB: indicates whether the cloud load balancer is domain name-based for traffic distribution. 
IPv6Snat: IPv6 source address translation (Snat), used for source address processing in IPv6 networks. 
HideDomain. specifies whether to hide the domain name for privacy protection or to avoid exposing it in specific scenarios. 
JumboFrame: specifies giant frame support. once enabled, it supports larger data frames to improve network efficiency. 
NoLBNatL4IPdc: specifies layer 4 IP direct connection without NAT, used for direct forwarding of IP traffic in layer 4 load balancing. 
VpcGwL3Service: specifies the VPC gateway layer-3 Service, which involves the gateway feature of the layer-3 network. 
Ipv62Flag: specifies the Ipv6 expansion Flag for specific feature support. 
Ipv62ExclusiveFlag: specifies the Ipv6 exclusive flag used for exclusive Ipv6 traffic processing. 
BgpPro: specifies BGP Pro support. 
ToaClean: TOA (TCP Option Address) cleanup. clears Address information in TCP options. 

 * @method void setAttributeFlags(array $AttributeFlags) Set Attributes of cloud load balancer, input an array of strings to determine whether it is enabled.
DeleteProtect: specifies deletion protection. once enabled, it prevents the cloud load balancer from being accidentally deleted. 
UserInVisible: invisible to users, controls load balancing visibility to users. 
BlockStatus: specifies the blockage status, used to limit certain operations or traffic for cloud load balancer. 
NoLBNat: disables the NAT feature of cloud load balancer for direct forwarding of traffic in specific scenarios. 
BanStatus: specifies the blocking status for suspending the clb service or restricting access. 
ShiftupFlag: specifies the upgrade flag used to identify if the cloud load balancer requires a configuration upgrade or performance improvement. 
Specifies the stopped status. once enabled, the cloud load balancer suspends service. 
NoVpcGw: specifies not to use VPC gateway to bypass the gateway for direct traffic handling. 
SgInTgw: specifies the security group in TGW (Transit Gateway) involving network security policy configuration. 
SharedLimitFlag: specifies the shared limit flag used to control the resource constraints of cloud load balancer. 
WafFlag: specifies the Web application firewall (WAF) flag. enabled to enable WAF protection. 
IsDomainCLB: indicates whether the cloud load balancer is domain name-based for traffic distribution. 
IPv6Snat: IPv6 source address translation (Snat), used for source address processing in IPv6 networks. 
HideDomain. specifies whether to hide the domain name for privacy protection or to avoid exposing it in specific scenarios. 
JumboFrame: specifies giant frame support. once enabled, it supports larger data frames to improve network efficiency. 
NoLBNatL4IPdc: specifies layer 4 IP direct connection without NAT, used for direct forwarding of IP traffic in layer 4 load balancing. 
VpcGwL3Service: specifies the VPC gateway layer-3 Service, which involves the gateway feature of the layer-3 network. 
Ipv62Flag: specifies the Ipv6 expansion Flag for specific feature support. 
Ipv62ExclusiveFlag: specifies the Ipv6 exclusive flag used for exclusive Ipv6 traffic processing. 
BgpPro: specifies BGP Pro support. 
ToaClean: TOA (TCP Option Address) cleanup. clears Address information in TCP options. 

 * @method string getLoadBalancerDomain() Obtain Specifies the domain name of the load balancing instance.
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) Set Specifies the domain name of the load balancing instance.
 * @method string getEgress() Obtain Specifies the network outbound.
 * @method void setEgress(string $Egress) Set Specifies the network outbound.
 * @method integer getExclusive() Obtain Indicates whether the instance type is dedicated. 1: dedicated instance. 0: non-dedicated instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExclusive(integer $Exclusive) Set Indicates whether the instance type is dedicated. 1: dedicated instance. 0: non-dedicated instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTargetCount() Obtain Specifies the number of bound backend services.
 * @method void setTargetCount(integer $TargetCount) Set Specifies the number of bound backend services.
 * @method string getAssociateEndpoint() Obtain Specifies the Endpoint id associated with the clb instance.
 * @method void setAssociateEndpoint(string $AssociateEndpoint) Set Specifies the Endpoint id associated with the clb instance.
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string CLB instance ID.
     */
    public $LoadBalancerId;

    /**
     * @var string CLB instance name.
     */
    public $LoadBalancerName;

    /**
     * @var string Network type of the load balancing instance.
OPEN: public network attribute. INTERNAL: private network attribute. for a cloud load balancer with private network attribute, you can bind an EIP for public network access. for details, see the EIP document on binding elastic IP (https://www.tencentcloud.com/document/product/215/16700?from_cn_redirect=1).
     */
    public $LoadBalancerType;

    /**
     * @var integer CLB type identifier. Value range: 1 (CLB); 0 (classic CLB).
     */
    public $Forward;

    /**
     * @var string The domain name of the cloud load balancer instance. this field is only provided for public network classic and domain name-based load balancing instances. it is being gradually phased out. we recommend using LoadBalancerDomain instead.
     */
    public $Domain;

    /**
     * @var array List of VIPs of a CLB instance.
     */
    public $LoadBalancerVips;

    /**
     * @var integer Specifies the state of the load balancing instance, including.
0: creating. 1: normal operation.
     */
    public $Status;

    /**
     * @var string CLB instance creation time
Format: YYYY-MM-DD HH:MM:ss.
     */
    public $CreateTime;

    /**
     * @var string Last status transition time of the CLB instance.
Format: YYYY-MM-DD HH:MM:ss.
     */
    public $StatusTime;

    /**
     * @var integer ID of the project to which a CLB instance belongs. 0: default project.
     */
    public $ProjectId;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var integer Anti-DDoS Pro identifier for CLB. 1: CLB with Anti-DDoS Pro; 0: CLB without Anti-DDoS Pro.
     */
    public $OpenBgp;

    /**
     * @var boolean Whether SNAT is enabled. for traditional private network clbs before december 2016, SNAT was enabled.
     */
    public $Snat;

    /**
     * @var integer Whether isolated. 0 means not isolated. 1 means isolated.
     */
    public $Isolation;

    /**
     * @var string Log information. Only the public network CLB that have HTTP or HTTPS listeners can generate logs.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Log;

    /**
     * @var string Subnet of the CLB instance (applicable only to VPC-type CLB instances on private networks)
     */
    public $SubnetId;

    /**
     * @var array CLB instance tag information
     */
    public $Tags;

    /**
     * @var array Security group of the CLB instance
     */
    public $SecureGroups;

    /**
     * @var TargetRegionInfo Basic information of real servers bound to the CLB instance
     */
    public $TargetRegionInfo;

    /**
     * @var string Anycast CLB release domain. For non-anycast CLB, this field returns an empty string.
     */
    public $AnycastZone;

    /**
     * @var string IP Version, ipv4 | ipv6
     */
    public $AddressIPVersion;

    /**
     * @var integer Specifies the VPC ID in numerical form, obtainable through the DescribeVpcs API (https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1).
     */
    public $NumericalVpcId;

    /**
     * @var string Specifies the ISP of the load balancer IP address.

-BGP (multi-line).
- CMCC: CMCC single line network.
-CTCC: ctcc single-line.
- CUCC: china unicom single-line.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VipIsp;

    /**
     * @var ZoneInfo Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MasterZone;

    /**
     * @var array Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupZoneSet;

    /**
     * @var string Specifies the isolation time of the cloud load balancer instance.
Format: YYYY-MM-DD HH:MM:ss.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolatedTime;

    /**
     * @var string CLB instance expiration time, which takes effect only for prepaid instances
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Billing mode of CLB instance. Valid values: PREPAID (monthly subscription), POSTPAID_BY_HOUR (pay as you go).
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var InternetAccessible CLB instance network attributes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkAttributes;

    /**
     * @var LBChargePrepaid Prepaid billing attributes of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrepaidAttributes;

    /**
     * @var string Log set ID of Cloud Log Service (CLS) for CLB
     */
    public $LogSetId;

    /**
     * @var string Log topic ID of Cloud Log Service (CLS) for CLB
     */
    public $LogTopicId;

    /**
     * @var string IPv6 address of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddressIPv6;

    /**
     * @var ExtraInfo Reserved field which can be ignored generally.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtraInfo;

    /**
     * @var boolean Whether an Anti-DDoS Pro instance can be bound
     */
    public $IsDDos;

    /**
     * @var string Custom configuration IDs of CLB instances
     */
    public $ConfigId;

    /**
     * @var boolean Whether the real server allows traffic from CLB
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var ExclusiveCluster Exclusive cluster on the private network
     */
    public $ExclusiveCluster;

    /**
     * @var string Specifies the field is meaningful when the IP address version is ipv6. valid values: ipv6Nat64 | ipv6FullChain.
IPv6Nat64: specifies a load balancer based on Nat64 IPv6 transition technology.
IPv6FullChain: specifies a cloud load balancer implemented based on ipv6 single-stack technology.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IPv6Mode;

    /**
     * @var boolean Specifies whether SnatPro is enabled.
     */
    public $SnatPro;

    /**
     * @var array Enables the SnatIp list after turning on SnatPro load balancing.
     */
    public $SnatIps;

    /**
     * @var string Performance capacity specification. <ul><li> clb.c1.small: minimalist specification </li> <li> clb.c2.medium: standard specification </li> <li> clb.c3.small: advanced type 1 specification </li> <li> clb.c3.medium: advanced type 2 specification </li> <li> clb.c4.small: super type 1 specification </li> <li> clb.c4.medium: super type 2 specification </li> <li> clb.c4.large: super type 3 specification </li> <li> clb.c4.xlarge: super type 4 specification </li> <li>"" : non-performance capacity instance</li></ul>.
     */
    public $SlaType;

    /**
     * @var boolean Whether VIP is blocked
     */
    public $IsBlock;

    /**
     * @var string Specifies the blocking or unblocking time.
Format: YYYY-MM-DD HH:MM:ss.
     */
    public $IsBlockTime;

    /**
     * @var boolean Whether the IP type is Local BGP
     */
    public $LocalBgp;

    /**
     * @var string Dedicated layer-7 tag.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterTag;

    /**
     * @var boolean If the layer-7 listener of an IPv6FullChain CLB instance is enabled, the CLB instance can be bound with IPv4 and IPv6 CVM instances simultaneously.
     */
    public $MixIpTarget;

    /**
     * @var array Availability zone of a VPC-based private network CLB instance
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Zones;

    /**
     * @var string Whether it is an NFV CLB instance. No returned information: no; l7nfv: yes.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $NfvInfo;

    /**
     * @var string Health check log set ID of Cloud Log Service (CLS) for CLB
     */
    public $HealthLogSetId;

    /**
     * @var string Health check log topic ID of Cloud Log Service (CLS) for CLB
     */
    public $HealthLogTopicId;

    /**
     * @var array Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterIds;

    /**
     * @var array Attributes of cloud load balancer, input an array of strings to determine whether it is enabled.
DeleteProtect: specifies deletion protection. once enabled, it prevents the cloud load balancer from being accidentally deleted. 
UserInVisible: invisible to users, controls load balancing visibility to users. 
BlockStatus: specifies the blockage status, used to limit certain operations or traffic for cloud load balancer. 
NoLBNat: disables the NAT feature of cloud load balancer for direct forwarding of traffic in specific scenarios. 
BanStatus: specifies the blocking status for suspending the clb service or restricting access. 
ShiftupFlag: specifies the upgrade flag used to identify if the cloud load balancer requires a configuration upgrade or performance improvement. 
Specifies the stopped status. once enabled, the cloud load balancer suspends service. 
NoVpcGw: specifies not to use VPC gateway to bypass the gateway for direct traffic handling. 
SgInTgw: specifies the security group in TGW (Transit Gateway) involving network security policy configuration. 
SharedLimitFlag: specifies the shared limit flag used to control the resource constraints of cloud load balancer. 
WafFlag: specifies the Web application firewall (WAF) flag. enabled to enable WAF protection. 
IsDomainCLB: indicates whether the cloud load balancer is domain name-based for traffic distribution. 
IPv6Snat: IPv6 source address translation (Snat), used for source address processing in IPv6 networks. 
HideDomain. specifies whether to hide the domain name for privacy protection or to avoid exposing it in specific scenarios. 
JumboFrame: specifies giant frame support. once enabled, it supports larger data frames to improve network efficiency. 
NoLBNatL4IPdc: specifies layer 4 IP direct connection without NAT, used for direct forwarding of IP traffic in layer 4 load balancing. 
VpcGwL3Service: specifies the VPC gateway layer-3 Service, which involves the gateway feature of the layer-3 network. 
Ipv62Flag: specifies the Ipv6 expansion Flag for specific feature support. 
Ipv62ExclusiveFlag: specifies the Ipv6 exclusive flag used for exclusive Ipv6 traffic processing. 
BgpPro: specifies BGP Pro support. 
ToaClean: TOA (TCP Option Address) cleanup. clears Address information in TCP options. 

     */
    public $AttributeFlags;

    /**
     * @var string Specifies the domain name of the load balancing instance.
     */
    public $LoadBalancerDomain;

    /**
     * @var string Specifies the network outbound.
     */
    public $Egress;

    /**
     * @var integer Indicates whether the instance type is dedicated. 1: dedicated instance. 0: non-dedicated instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Exclusive;

    /**
     * @var integer Specifies the number of bound backend services.
     */
    public $TargetCount;

    /**
     * @var string Specifies the Endpoint id associated with the clb instance.
     */
    public $AssociateEndpoint;

    /**
     * @param string $LoadBalancerId CLB instance ID.
     * @param string $LoadBalancerName CLB instance name.
     * @param string $LoadBalancerType Network type of the load balancing instance.
OPEN: public network attribute. INTERNAL: private network attribute. for a cloud load balancer with private network attribute, you can bind an EIP for public network access. for details, see the EIP document on binding elastic IP (https://www.tencentcloud.com/document/product/215/16700?from_cn_redirect=1).
     * @param integer $Forward CLB type identifier. Value range: 1 (CLB); 0 (classic CLB).
     * @param string $Domain The domain name of the cloud load balancer instance. this field is only provided for public network classic and domain name-based load balancing instances. it is being gradually phased out. we recommend using LoadBalancerDomain instead.
     * @param array $LoadBalancerVips List of VIPs of a CLB instance.
     * @param integer $Status Specifies the state of the load balancing instance, including.
0: creating. 1: normal operation.
     * @param string $CreateTime CLB instance creation time
Format: YYYY-MM-DD HH:MM:ss.
     * @param string $StatusTime Last status transition time of the CLB instance.
Format: YYYY-MM-DD HH:MM:ss.
     * @param integer $ProjectId ID of the project to which a CLB instance belongs. 0: default project.
     * @param string $VpcId VPC ID
     * @param integer $OpenBgp Anti-DDoS Pro identifier for CLB. 1: CLB with Anti-DDoS Pro; 0: CLB without Anti-DDoS Pro.
     * @param boolean $Snat Whether SNAT is enabled. for traditional private network clbs before december 2016, SNAT was enabled.
     * @param integer $Isolation Whether isolated. 0 means not isolated. 1 means isolated.
     * @param string $Log Log information. Only the public network CLB that have HTTP or HTTPS listeners can generate logs.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet of the CLB instance (applicable only to VPC-type CLB instances on private networks)
     * @param array $Tags CLB instance tag information
     * @param array $SecureGroups Security group of the CLB instance
     * @param TargetRegionInfo $TargetRegionInfo Basic information of real servers bound to the CLB instance
     * @param string $AnycastZone Anycast CLB release domain. For non-anycast CLB, this field returns an empty string.
     * @param string $AddressIPVersion IP Version, ipv4 | ipv6
     * @param integer $NumericalVpcId Specifies the VPC ID in numerical form, obtainable through the DescribeVpcs API (https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1).
     * @param string $VipIsp Specifies the ISP of the load balancer IP address.

-BGP (multi-line).
- CMCC: CMCC single line network.
-CTCC: ctcc single-line.
- CUCC: china unicom single-line.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ZoneInfo $MasterZone Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BackupZoneSet Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsolatedTime Specifies the isolation time of the cloud load balancer instance.
Format: YYYY-MM-DD HH:MM:ss.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime CLB instance expiration time, which takes effect only for prepaid instances
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeType Billing mode of CLB instance. Valid values: PREPAID (monthly subscription), POSTPAID_BY_HOUR (pay as you go).
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param InternetAccessible $NetworkAttributes CLB instance network attributes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LBChargePrepaid $PrepaidAttributes Prepaid billing attributes of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogSetId Log set ID of Cloud Log Service (CLS) for CLB
     * @param string $LogTopicId Log topic ID of Cloud Log Service (CLS) for CLB
     * @param string $AddressIPv6 IPv6 address of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtraInfo $ExtraInfo Reserved field which can be ignored generally.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDDos Whether an Anti-DDoS Pro instance can be bound
     * @param string $ConfigId Custom configuration IDs of CLB instances
     * @param boolean $LoadBalancerPassToTarget Whether the real server allows traffic from CLB
     * @param ExclusiveCluster $ExclusiveCluster Exclusive cluster on the private network
     * @param string $IPv6Mode Specifies the field is meaningful when the IP address version is ipv6. valid values: ipv6Nat64 | ipv6FullChain.
IPv6Nat64: specifies a load balancer based on Nat64 IPv6 transition technology.
IPv6FullChain: specifies a cloud load balancer implemented based on ipv6 single-stack technology.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SnatPro Specifies whether SnatPro is enabled.
     * @param array $SnatIps Enables the SnatIp list after turning on SnatPro load balancing.
     * @param string $SlaType Performance capacity specification. <ul><li> clb.c1.small: minimalist specification </li> <li> clb.c2.medium: standard specification </li> <li> clb.c3.small: advanced type 1 specification </li> <li> clb.c3.medium: advanced type 2 specification </li> <li> clb.c4.small: super type 1 specification </li> <li> clb.c4.medium: super type 2 specification </li> <li> clb.c4.large: super type 3 specification </li> <li> clb.c4.xlarge: super type 4 specification </li> <li>"" : non-performance capacity instance</li></ul>.
     * @param boolean $IsBlock Whether VIP is blocked
     * @param string $IsBlockTime Specifies the blocking or unblocking time.
Format: YYYY-MM-DD HH:MM:ss.
     * @param boolean $LocalBgp Whether the IP type is Local BGP
     * @param string $ClusterTag Dedicated layer-7 tag.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $MixIpTarget If the layer-7 listener of an IPv6FullChain CLB instance is enabled, the CLB instance can be bound with IPv4 and IPv6 CVM instances simultaneously.
     * @param array $Zones Availability zone of a VPC-based private network CLB instance
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $NfvInfo Whether it is an NFV CLB instance. No returned information: no; l7nfv: yes.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $HealthLogSetId Health check log set ID of Cloud Log Service (CLS) for CLB
     * @param string $HealthLogTopicId Health check log topic ID of Cloud Log Service (CLS) for CLB
     * @param array $ClusterIds Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AttributeFlags Attributes of cloud load balancer, input an array of strings to determine whether it is enabled.
DeleteProtect: specifies deletion protection. once enabled, it prevents the cloud load balancer from being accidentally deleted. 
UserInVisible: invisible to users, controls load balancing visibility to users. 
BlockStatus: specifies the blockage status, used to limit certain operations or traffic for cloud load balancer. 
NoLBNat: disables the NAT feature of cloud load balancer for direct forwarding of traffic in specific scenarios. 
BanStatus: specifies the blocking status for suspending the clb service or restricting access. 
ShiftupFlag: specifies the upgrade flag used to identify if the cloud load balancer requires a configuration upgrade or performance improvement. 
Specifies the stopped status. once enabled, the cloud load balancer suspends service. 
NoVpcGw: specifies not to use VPC gateway to bypass the gateway for direct traffic handling. 
SgInTgw: specifies the security group in TGW (Transit Gateway) involving network security policy configuration. 
SharedLimitFlag: specifies the shared limit flag used to control the resource constraints of cloud load balancer. 
WafFlag: specifies the Web application firewall (WAF) flag. enabled to enable WAF protection. 
IsDomainCLB: indicates whether the cloud load balancer is domain name-based for traffic distribution. 
IPv6Snat: IPv6 source address translation (Snat), used for source address processing in IPv6 networks. 
HideDomain. specifies whether to hide the domain name for privacy protection or to avoid exposing it in specific scenarios. 
JumboFrame: specifies giant frame support. once enabled, it supports larger data frames to improve network efficiency. 
NoLBNatL4IPdc: specifies layer 4 IP direct connection without NAT, used for direct forwarding of IP traffic in layer 4 load balancing. 
VpcGwL3Service: specifies the VPC gateway layer-3 Service, which involves the gateway feature of the layer-3 network. 
Ipv62Flag: specifies the Ipv6 expansion Flag for specific feature support. 
Ipv62ExclusiveFlag: specifies the Ipv6 exclusive flag used for exclusive Ipv6 traffic processing. 
BgpPro: specifies BGP Pro support. 
ToaClean: TOA (TCP Option Address) cleanup. clears Address information in TCP options. 

     * @param string $LoadBalancerDomain Specifies the domain name of the load balancing instance.
     * @param string $Egress Specifies the network outbound.
     * @param integer $Exclusive Indicates whether the instance type is dedicated. 1: dedicated instance. 0: non-dedicated instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TargetCount Specifies the number of bound backend services.
     * @param string $AssociateEndpoint Specifies the Endpoint id associated with the clb instance.
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StatusTime",$param) and $param["StatusTime"] !== null) {
            $this->StatusTime = $param["StatusTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("OpenBgp",$param) and $param["OpenBgp"] !== null) {
            $this->OpenBgp = $param["OpenBgp"];
        }

        if (array_key_exists("Snat",$param) and $param["Snat"] !== null) {
            $this->Snat = $param["Snat"];
        }

        if (array_key_exists("Isolation",$param) and $param["Isolation"] !== null) {
            $this->Isolation = $param["Isolation"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SecureGroups",$param) and $param["SecureGroups"] !== null) {
            $this->SecureGroups = $param["SecureGroups"];
        }

        if (array_key_exists("TargetRegionInfo",$param) and $param["TargetRegionInfo"] !== null) {
            $this->TargetRegionInfo = new TargetRegionInfo();
            $this->TargetRegionInfo->deserialize($param["TargetRegionInfo"]);
        }

        if (array_key_exists("AnycastZone",$param) and $param["AnycastZone"] !== null) {
            $this->AnycastZone = $param["AnycastZone"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("NumericalVpcId",$param) and $param["NumericalVpcId"] !== null) {
            $this->NumericalVpcId = $param["NumericalVpcId"];
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = new ZoneInfo();
            $this->MasterZone->deserialize($param["MasterZone"]);
        }

        if (array_key_exists("BackupZoneSet",$param) and $param["BackupZoneSet"] !== null) {
            $this->BackupZoneSet = [];
            foreach ($param["BackupZoneSet"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->BackupZoneSet, $obj);
            }
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("NetworkAttributes",$param) and $param["NetworkAttributes"] !== null) {
            $this->NetworkAttributes = new InternetAccessible();
            $this->NetworkAttributes->deserialize($param["NetworkAttributes"]);
        }

        if (array_key_exists("PrepaidAttributes",$param) and $param["PrepaidAttributes"] !== null) {
            $this->PrepaidAttributes = new LBChargePrepaid();
            $this->PrepaidAttributes->deserialize($param["PrepaidAttributes"]);
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("AddressIPv6",$param) and $param["AddressIPv6"] !== null) {
            $this->AddressIPv6 = $param["AddressIPv6"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = new ExtraInfo();
            $this->ExtraInfo->deserialize($param["ExtraInfo"]);
        }

        if (array_key_exists("IsDDos",$param) and $param["IsDDos"] !== null) {
            $this->IsDDos = $param["IsDDos"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }

        if (array_key_exists("ExclusiveCluster",$param) and $param["ExclusiveCluster"] !== null) {
            $this->ExclusiveCluster = new ExclusiveCluster();
            $this->ExclusiveCluster->deserialize($param["ExclusiveCluster"]);
        }

        if (array_key_exists("IPv6Mode",$param) and $param["IPv6Mode"] !== null) {
            $this->IPv6Mode = $param["IPv6Mode"];
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

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("IsBlock",$param) and $param["IsBlock"] !== null) {
            $this->IsBlock = $param["IsBlock"];
        }

        if (array_key_exists("IsBlockTime",$param) and $param["IsBlockTime"] !== null) {
            $this->IsBlockTime = $param["IsBlockTime"];
        }

        if (array_key_exists("LocalBgp",$param) and $param["LocalBgp"] !== null) {
            $this->LocalBgp = $param["LocalBgp"];
        }

        if (array_key_exists("ClusterTag",$param) and $param["ClusterTag"] !== null) {
            $this->ClusterTag = $param["ClusterTag"];
        }

        if (array_key_exists("MixIpTarget",$param) and $param["MixIpTarget"] !== null) {
            $this->MixIpTarget = $param["MixIpTarget"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("NfvInfo",$param) and $param["NfvInfo"] !== null) {
            $this->NfvInfo = $param["NfvInfo"];
        }

        if (array_key_exists("HealthLogSetId",$param) and $param["HealthLogSetId"] !== null) {
            $this->HealthLogSetId = $param["HealthLogSetId"];
        }

        if (array_key_exists("HealthLogTopicId",$param) and $param["HealthLogTopicId"] !== null) {
            $this->HealthLogTopicId = $param["HealthLogTopicId"];
        }

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("AttributeFlags",$param) and $param["AttributeFlags"] !== null) {
            $this->AttributeFlags = $param["AttributeFlags"];
        }

        if (array_key_exists("LoadBalancerDomain",$param) and $param["LoadBalancerDomain"] !== null) {
            $this->LoadBalancerDomain = $param["LoadBalancerDomain"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("TargetCount",$param) and $param["TargetCount"] !== null) {
            $this->TargetCount = $param["TargetCount"];
        }

        if (array_key_exists("AssociateEndpoint",$param) and $param["AssociateEndpoint"] !== null) {
            $this->AssociateEndpoint = $param["AssociateEndpoint"];
        }
    }
}
