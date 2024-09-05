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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB instance information
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID.
 * @method string getLoadBalancerName() Obtain CLB instance name.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name.
 * @method string getLoadBalancerType() Obtain CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method integer getForward() Obtain CLB type identifier. Value range: 1 (CLB); 0 (classic CLB).
 * @method void setForward(integer $Forward) Set CLB type identifier. Value range: 1 (CLB); 0 (classic CLB).
 * @method string getDomain() Obtain Domain name of the CLB instance. This field is provided only for classic public network CLB instances and domain name-based CLB instances. It is being gradually phased out, so use LoadBalancerDomain instead.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name of the CLB instance. This field is provided only for classic public network CLB instances and domain name-based CLB instances. It is being gradually phased out, so use LoadBalancerDomain instead.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLoadBalancerVips() Obtain List of VIPs of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerVips(array $LoadBalancerVips) Set List of VIPs of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain CLB instance status, including:
0: creating; 1: running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set CLB instance status, including:
0: creating; 1: running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain CLB instance creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set CLB instance creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatusTime() Obtain Last status change time of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusTime(string $StatusTime) Set Last status change time of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain ID of the project to which a CLB instance belongs. 0: default project.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which a CLB instance belongs. 0: default project.
 * @method string getVpcId() Obtain VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOpenBgp() Obtain Protective CLB identifier. Value range: 1 (protective), 0 (non-protective).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOpenBgp(integer $OpenBgp) Set Protective CLB identifier. Value range: 1 (protective), 0 (non-protective).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSnat() Obtain SNAT is enabled for all private network classic CLB created before December 2016.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnat(boolean $Snat) Set SNAT is enabled for all private network classic CLB created before December 2016.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsolation() Obtain 0: not isolated; 1: isolated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolation(integer $Isolation) Set 0: not isolated; 1: isolated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLog() Obtain Log information. Only the public network CLB that have HTTP or HTTPS listeners can generate logs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLog(string $Log) Set Log information. Only the public network CLB that have HTTP or HTTPS listeners can generate logs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet where a CLB instance resides (meaningful only for private network VPC CLB)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet where a CLB instance resides (meaningful only for private network VPC CLB)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain CLB instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set CLB instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSecureGroups() Obtain Security group of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecureGroups(array $SecureGroups) Set Security group of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TargetRegionInfo getTargetRegionInfo() Obtain Basic information of a backend server bound to a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetRegionInfo(TargetRegionInfo $TargetRegionInfo) Set Basic information of a backend server bound to a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAnycastZone() Obtain Anycast CLB publishing region. For non-anycast CLB, this field returns an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnycastZone(string $AnycastZone) Set Anycast CLB publishing region. For non-anycast CLB, this field returns an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddressIPVersion() Obtain IP version. Valid values: ipv4, ipv6
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAddressIPVersion(string $AddressIPVersion) Set IP version. Valid values: ipv4, ipv6
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getNumericalVpcId() Obtain VPC ID in a numeric form
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNumericalVpcId(integer $NumericalVpcId) Set VPC ID in a numeric form
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVipIsp() Obtain ISP for the IP address of the CLB instance. Valid values: BGP, CMCC, CTCC, CUCC.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVipIsp(string $VipIsp) Set ISP for the IP address of the CLB instance. Valid values: BGP, CMCC, CTCC, CUCC.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ZoneInfo getMasterZone() Obtain Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMasterZone(ZoneInfo $MasterZone) Set Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBackupZoneSet() Obtain Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupZoneSet(array $BackupZoneSet) Set Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsolatedTime() Obtain CLB instance isolation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolatedTime(string $IsolatedTime) Set CLB instance isolation time
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
 * @method string getLogSetId() Obtain Logset ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogSetId(string $LogSetId) Set Logset ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogTopicId() Obtain Log topic ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogTopicId(string $LogTopicId) Set Log topic ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddressIPv6() Obtain IPv6 address of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddressIPv6(string $AddressIPv6) Set IPv6 address of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtraInfo getExtraInfo() Obtain Reserved field which can be ignored generally.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) Set Reserved field which can be ignored generally.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDDos() Obtain Whether an Anti-DDoS Pro instance can be bound
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDDos(boolean $IsDDos) Set Whether an Anti-DDoS Pro instance can be bound
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConfigId() Obtain Custom configuration ID at the CLB instance level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigId(string $ConfigId) Set Custom configuration ID at the CLB instance level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getLoadBalancerPassToTarget() Obtain Whether a real server opens the traffic from a CLB instance to the internet
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) Set Whether a real server opens the traffic from a CLB instance to the internet
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ExclusiveCluster getExclusiveCluster() Obtain Private network dedicated cluster
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) Set Private network dedicated cluster
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIPv6Mode() Obtain This field is meaningful only when the IP address version is `ipv6`. Valid values: IPv6Nat64, IPv6FullChain
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIPv6Mode(string $IPv6Mode) Set This field is meaningful only when the IP address version is `ipv6`. Valid values: IPv6Nat64, IPv6FullChain
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getSnatPro() Obtain Whether to enable SnatPro.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSnatPro(boolean $SnatPro) Set Whether to enable SnatPro.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSnatIps() Obtain `SnatIp` list after SnatPro load balancing is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSnatIps(array $SnatIps) Set `SnatIp` list after SnatPro load balancing is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSlaType() Obtain Specification of the LCU-supported instance. <ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li><li>null: Shared instance</li></ul>Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSlaType(string $SlaType) Set Specification of the LCU-supported instance. <ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li><li>null: Shared instance</li></ul>Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsBlock() Obtain Whether VIP is blocked
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsBlock(boolean $IsBlock) Set Whether VIP is blocked
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIsBlockTime() Obtain Time blocked or unblocked
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsBlockTime(string $IsBlockTime) Set Time blocked or unblocked
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getLocalBgp() Obtain Whether the IP type is the local BGP
 * @method void setLocalBgp(boolean $LocalBgp) Set Whether the IP type is the local BGP
 * @method string getClusterTag() Obtain Dedicated layer-7 tag.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClusterTag(string $ClusterTag) Set Dedicated layer-7 tag.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getMixIpTarget() Obtain If the layer-7 listener of an IPv6FullChain CLB instance is enabled, the CLB instance can be bound with an IPv4 and an IPv6 CVM instance simultaneously.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMixIpTarget(boolean $MixIpTarget) Set If the layer-7 listener of an IPv6FullChain CLB instance is enabled, the CLB instance can be bound with an IPv4 and an IPv6 CVM instance simultaneously.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getZones() Obtain Availability zone of a VPC-based private network CLB instance
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setZones(array $Zones) Set Availability zone of a VPC-based private network CLB instance
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getNfvInfo() Obtain Whether it is an NFV CLB instance. No returned information: no; l7nfv: yes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setNfvInfo(string $NfvInfo) Set Whether it is an NFV CLB instance. No returned information: no; l7nfv: yes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getHealthLogSetId() Obtain Health check logset ID of CLB CLS
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setHealthLogSetId(string $HealthLogSetId) Set Health check logset ID of CLB CLS
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getHealthLogTopicId() Obtain Health check log topic ID of CLB CLS
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setHealthLogTopicId(string $HealthLogTopicId) Set Health check log topic ID of CLB CLS
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getClusterIds() Obtain Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterIds(array $ClusterIds) Set Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAttributeFlags() Obtain CLB attribute
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAttributeFlags(array $AttributeFlags) Set CLB attribute
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getLoadBalancerDomain() Obtain Domain name of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) Set Domain name of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEgress() Obtain Network egress
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setEgress(string $Egress) Set Network egress
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getExclusive() Obtain 
 * @method void setExclusive(integer $Exclusive) Set 
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
     * @var string CLB instance network type:
OPEN: public network; INTERNAL: private network.
     */
    public $LoadBalancerType;

    /**
     * @var integer CLB type identifier. Value range: 1 (CLB); 0 (classic CLB).
     */
    public $Forward;

    /**
     * @var string Domain name of the CLB instance. This field is provided only for classic public network CLB instances and domain name-based CLB instances. It is being gradually phased out, so use LoadBalancerDomain instead.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var array List of VIPs of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerVips;

    /**
     * @var integer CLB instance status, including:
0: creating; 1: running.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string CLB instance creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last status change time of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusTime;

    /**
     * @var integer ID of the project to which a CLB instance belongs. 0: default project.
     */
    public $ProjectId;

    /**
     * @var string VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var integer Protective CLB identifier. Value range: 1 (protective), 0 (non-protective).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OpenBgp;

    /**
     * @var boolean SNAT is enabled for all private network classic CLB created before December 2016.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Snat;

    /**
     * @var integer 0: not isolated; 1: isolated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Isolation;

    /**
     * @var string Log information. Only the public network CLB that have HTTP or HTTPS listeners can generate logs.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Log;

    /**
     * @var string Subnet where a CLB instance resides (meaningful only for private network VPC CLB)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var array CLB instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var array Security group of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecureGroups;

    /**
     * @var TargetRegionInfo Basic information of a backend server bound to a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetRegionInfo;

    /**
     * @var string Anycast CLB publishing region. For non-anycast CLB, this field returns an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AnycastZone;

    /**
     * @var string IP version. Valid values: ipv4, ipv6
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AddressIPVersion;

    /**
     * @var integer VPC ID in a numeric form
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NumericalVpcId;

    /**
     * @var string ISP for the IP address of the CLB instance. Valid values: BGP, CMCC, CTCC, CUCC.Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string CLB instance isolation time
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
     * @var string Logset ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogSetId;

    /**
     * @var string Log topic ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
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
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDDos;

    /**
     * @var string Custom configuration ID at the CLB instance level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigId;

    /**
     * @var boolean Whether a real server opens the traffic from a CLB instance to the internet
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var ExclusiveCluster Private network dedicated cluster
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExclusiveCluster;

    /**
     * @var string This field is meaningful only when the IP address version is `ipv6`. Valid values: IPv6Nat64, IPv6FullChain
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IPv6Mode;

    /**
     * @var boolean Whether to enable SnatPro.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SnatPro;

    /**
     * @var array `SnatIp` list after SnatPro load balancing is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SnatIps;

    /**
     * @var string Specification of the LCU-supported instance. <ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li><li>null: Shared instance</li></ul>Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SlaType;

    /**
     * @var boolean Whether VIP is blocked
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsBlock;

    /**
     * @var string Time blocked or unblocked
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsBlockTime;

    /**
     * @var boolean Whether the IP type is the local BGP
     */
    public $LocalBgp;

    /**
     * @var string Dedicated layer-7 tag.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterTag;

    /**
     * @var boolean If the layer-7 listener of an IPv6FullChain CLB instance is enabled, the CLB instance can be bound with an IPv4 and an IPv6 CVM instance simultaneously.
Note: this field may return null, indicating that no valid values can be obtained.
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
     * @var string Health check logset ID of CLB CLS
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $HealthLogSetId;

    /**
     * @var string Health check log topic ID of CLB CLS
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $HealthLogTopicId;

    /**
     * @var array Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterIds;

    /**
     * @var array CLB attribute
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AttributeFlags;

    /**
     * @var string Domain name of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerDomain;

    /**
     * @var string Network egress
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Egress;

    /**
     * @var integer 
     */
    public $Exclusive;

    /**
     * @param string $LoadBalancerId CLB instance ID.
     * @param string $LoadBalancerName CLB instance name.
     * @param string $LoadBalancerType CLB instance network type:
OPEN: public network; INTERNAL: private network.
     * @param integer $Forward CLB type identifier. Value range: 1 (CLB); 0 (classic CLB).
     * @param string $Domain Domain name of the CLB instance. This field is provided only for classic public network CLB instances and domain name-based CLB instances. It is being gradually phased out, so use LoadBalancerDomain instead.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LoadBalancerVips List of VIPs of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status CLB instance status, including:
0: creating; 1: running.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime CLB instance creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StatusTime Last status change time of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId ID of the project to which a CLB instance belongs. 0: default project.
     * @param string $VpcId VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OpenBgp Protective CLB identifier. Value range: 1 (protective), 0 (non-protective).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Snat SNAT is enabled for all private network classic CLB created before December 2016.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Isolation 0: not isolated; 1: isolated.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Log Log information. Only the public network CLB that have HTTP or HTTPS listeners can generate logs.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet where a CLB instance resides (meaningful only for private network VPC CLB)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags CLB instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SecureGroups Security group of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TargetRegionInfo $TargetRegionInfo Basic information of a backend server bound to a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AnycastZone Anycast CLB publishing region. For non-anycast CLB, this field returns an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AddressIPVersion IP version. Valid values: ipv4, ipv6
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $NumericalVpcId VPC ID in a numeric form
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VipIsp ISP for the IP address of the CLB instance. Valid values: BGP, CMCC, CTCC, CUCC.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ZoneInfo $MasterZone Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BackupZoneSet Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsolatedTime CLB instance isolation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime CLB instance expiration time, which takes effect only for prepaid instances
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeType Billing mode of CLB instance. Valid values: PREPAID (monthly subscription), POSTPAID_BY_HOUR (pay as you go).
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param InternetAccessible $NetworkAttributes CLB instance network attributes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LBChargePrepaid $PrepaidAttributes Prepaid billing attributes of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogSetId Logset ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogTopicId Log topic ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AddressIPv6 IPv6 address of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtraInfo $ExtraInfo Reserved field which can be ignored generally.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDDos Whether an Anti-DDoS Pro instance can be bound
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConfigId Custom configuration ID at the CLB instance level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $LoadBalancerPassToTarget Whether a real server opens the traffic from a CLB instance to the internet
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ExclusiveCluster $ExclusiveCluster Private network dedicated cluster
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IPv6Mode This field is meaningful only when the IP address version is `ipv6`. Valid values: IPv6Nat64, IPv6FullChain
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $SnatPro Whether to enable SnatPro.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SnatIps `SnatIp` list after SnatPro load balancing is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SlaType Specification of the LCU-supported instance. <ul><li> clb.c2.medium: Standard </li><li> clb.c3.small: Advanced 1 </li><li> clb.c3.medium: Advanced 2 </li><li> clb.c4.small: Super Large 1 </li><li> clb.c4.medium: Super Large 2 </li><li> clb.c4.large: Super Large 3 </li><li> clb.c4.xlarge: Super Large 4 </li><li>null: Shared instance</li></ul>Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsBlock Whether VIP is blocked
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IsBlockTime Time blocked or unblocked
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $LocalBgp Whether the IP type is the local BGP
     * @param string $ClusterTag Dedicated layer-7 tag.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $MixIpTarget If the layer-7 listener of an IPv6FullChain CLB instance is enabled, the CLB instance can be bound with an IPv4 and an IPv6 CVM instance simultaneously.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Zones Availability zone of a VPC-based private network CLB instance
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $NfvInfo Whether it is an NFV CLB instance. No returned information: no; l7nfv: yes.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $HealthLogSetId Health check logset ID of CLB CLS
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $HealthLogTopicId Health check log topic ID of CLB CLS
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $ClusterIds Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AttributeFlags CLB attribute
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $LoadBalancerDomain Domain name of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Egress Network egress
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Exclusive 
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
    }
}
