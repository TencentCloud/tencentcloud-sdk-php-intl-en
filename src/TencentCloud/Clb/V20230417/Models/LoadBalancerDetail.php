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
 * CLB detailed information
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID.
 * @method string getLoadBalancerName() Obtain CLB instance name.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name.
 * @method string getLoadBalancerType() Obtain Network type of the CLB instance:
OPEN: public network attribute, INTERNAL: private network attribute. For a Cloud Load Balancer with private network attribute, you can bind EIP for outbound public network access. For details, see the EIP document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set Network type of the CLB instance:
OPEN: public network attribute, INTERNAL: private network attribute. For a Cloud Load Balancer with private network attribute, you can bind EIP for outbound public network access. For details, see the EIP document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain CLB instance state, including
0: creating, 1: normal operation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set CLB instance state, including
0: creating, 1: normal operation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain VIP of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set VIP of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddressIPv6() Obtain IPv6 address of the VIP in the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddressIPv6(string $AddressIPv6) Set IPv6 address of the VIP in the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddressIPVersion() Obtain IP version of the Cloud Load Balancer instance, IPv4 | IPv6.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddressIPVersion(string $AddressIPVersion) Set IP version of the Cloud Load Balancer instance, IPv4 | IPv6.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIPv6Mode() Obtain IPv6 address type of the Cloud Load Balancer instance: IPv6Nat64 | IPv6FullChain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIPv6Mode(string $IPv6Mode) Set IPv6 address type of the Cloud Load Balancer instance: IPv6Nat64 | IPv6FullChain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Availability Zone of the Cloud Load Balancer instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Availability Zone of the Cloud Load Balancer instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddressIsp() Obtain The ISP to which the IP address of the CLB instance belongs. Value ranges from BGP (multi-line), CMCC (China Mobile), CUCC (China Unicom), CTCC (China Telecom) to INTERNAL (private network).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddressIsp(string $AddressIsp) Set The ISP to which the IP address of the CLB instance belongs. Value ranges from BGP (multi-line), CMCC (China Mobile), CUCC (China Unicom), CTCC (China Telecom) to INTERNAL (private network).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain ID of the VPC that the CLB instance belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set ID of the VPC that the CLB instance belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain The ID of the project to which the CLB instance belongs. 0: Default project.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set The ID of the project to which the CLB instance belongs. 0: Default project.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain CLB instance creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set CLB instance creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getChargeType() Obtain Billing type of the CLB instance. Valid values: PREPAID and POSTPAID_BY_HOUR (pay-as-you-go).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChargeType(string $ChargeType) Set Billing type of the CLB instance. Valid values: PREPAID and POSTPAID_BY_HOUR (pay-as-you-go).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InternetAccessible getNetworkAttributes() Obtain Network properties of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkAttributes(InternetAccessible $NetworkAttributes) Set Network properties of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LBChargePrepaid getPrepaidAttributes() Obtain Prepaid billing attributes of the Cloud Load Balancer instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrepaidAttributes(LBChargePrepaid $PrepaidAttributes) Set Prepaid billing attributes of the Cloud Load Balancer instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtraInfo getExtraInfo() Obtain Reserved. Generally unnecessary for users to concern.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) Set Reserved. Generally unnecessary for users to concern.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConfigId() Obtain Personalized configuration ID of the Cloud Load Balancer (CLB) dimension. Multiple configurations are separated by commas.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigId(string $ConfigId) Set Personalized configuration ID of the Cloud Load Balancer (CLB) dimension. Multiple configurations are separated by commas.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag information of the GWLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag information of the GWLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getListenerId() Obtain CLB listener ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setListenerId(string $ListenerId) Set CLB listener ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Listener protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Listener protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Listener port.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Listener port.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLocationId() Obtain Forwarding rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocationId(string $LocationId) Set Forwarding rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Domain name of the forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name of the forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain Path of forwarding rules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Path of forwarding rules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetId() Obtain Backend target ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetId(string $TargetId) Set Backend target ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetAddress() Obtain Backend target IP address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetAddress(string $TargetAddress) Set Backend target IP address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTargetPort() Obtain Backend target listening port.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetPort(integer $TargetPort) Set Backend target listening port.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTargetWeight() Obtain Backend target forwarding weight.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetWeight(integer $TargetWeight) Set Backend target forwarding weight.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsolation() Obtain 0: Not isolated; 1: Isolated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolation(integer $Isolation) Set 0: Not isolated; 1: Isolated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSecurityGroup() Obtain List of security groups bound to Cloud Load Balancer (CLB).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecurityGroup(array $SecurityGroup) Set List of security groups bound to Cloud Load Balancer (CLB).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLoadBalancerPassToTarget() Obtain Valid values: 1 (enabled), 0 (not enabled). Value ranges from 1 to 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerPassToTarget(integer $LoadBalancerPassToTarget) Set Valid values: 1 (enabled), 0 (not enabled). Value ranges from 1 to 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetHealth() Obtain Backend target health status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetHealth(string $TargetHealth) Set Backend target health status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomains() Obtain Domain name list of the forwarding rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomains(string $Domains) Set Domain name list of the forwarding rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSlaveZone() Obtain Multi-availability zone Cloud Load Balancer instance selected backup availability zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSlaveZone(array $SlaveZone) Set Multi-availability zone Cloud Load Balancer instance selected backup availability zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZones() Obtain The availability zone of the private network CLB instance is controlled by the allowlist CLB_Internal_Zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZones(array $Zones) Set The availability zone of the private network CLB instance is controlled by the allowlist CLB_Internal_Zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSniSwitch() Obtain Whether to enable the SNI feature. 1: enable; 0: disable (this parameter is applicable only to HTTPS listeners).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSniSwitch(integer $SniSwitch) Set Whether to enable the SNI feature. 1: enable; 0: disable (this parameter is applicable only to HTTPS listeners).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerDomain() Obtain Domain name of the CLB instance.
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) Set Domain name of the CLB instance.
 * @method string getEgress() Obtain Network outbound
 * @method void setEgress(string $Egress) Set Network outbound
 * @method array getAttributeFlags() Obtain Attributes of Cloud Load Balancer
 * @method void setAttributeFlags(array $AttributeFlags) Set Attributes of Cloud Load Balancer
 * @method string getSlaType() Obtain Specification type information of Cloud Load Balancer instance<ul><li> clb.c1.small: Minimalist specification </li><li>clb.c2.medium: Standard specification </li><li> clb.c3.small: Advanced type 1 specification </li><li> clb.c3.medium: Advanced type 2 specification </li><li> clb.c4.small: Super type 1 specification </li><li> clb.c4.medium: Super type 2 specification </li><li> clb.c4.large: Super type 3 specification </li><li> clb.c4.xlarge: Super type 4 specification </li><li>\"\": Non-LCU-supported instance</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSlaType(string $SlaType) Set Specification type information of Cloud Load Balancer instance<ul><li> clb.c1.small: Minimalist specification </li><li>clb.c2.medium: Standard specification </li><li> clb.c3.small: Advanced type 1 specification </li><li> clb.c3.medium: Advanced type 2 specification </li><li> clb.c4.small: Super type 1 specification </li><li> clb.c4.medium: Super type 2 specification </li><li> clb.c4.large: Super type 3 specification </li><li> clb.c4.xlarge: Super type 4 specification </li><li>\"\": Non-LCU-supported instance</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExclusive() Obtain 0: Non-exclusive type instance; 1: Exclusive type instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExclusive(integer $Exclusive) Set 0: Non-exclusive type instance; 1: Exclusive type instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AvailableZoneAffinityInfo getAvailableZoneAffinityInfo() Obtain Availability zone forward affinity info
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvailableZoneAffinityInfo(AvailableZoneAffinityInfo $AvailableZoneAffinityInfo) Set Availability zone forward affinity info
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LoadBalancerDetail extends AbstractModel
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
     * @var string Network type of the CLB instance:
OPEN: public network attribute, INTERNAL: private network attribute. For a Cloud Load Balancer with private network attribute, you can bind EIP for outbound public network access. For details, see the EIP document.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerType;

    /**
     * @var integer CLB instance state, including
0: creating, 1: normal operation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string VIP of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string IPv6 address of the VIP in the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddressIPv6;

    /**
     * @var string IP version of the Cloud Load Balancer instance, IPv4 | IPv6.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddressIPVersion;

    /**
     * @var string IPv6 address type of the Cloud Load Balancer instance: IPv6Nat64 | IPv6FullChain.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IPv6Mode;

    /**
     * @var string Availability Zone of the Cloud Load Balancer instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string The ISP to which the IP address of the CLB instance belongs. Value ranges from BGP (multi-line), CMCC (China Mobile), CUCC (China Unicom), CTCC (China Telecom) to INTERNAL (private network).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddressIsp;

    /**
     * @var string ID of the VPC that the CLB instance belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var integer The ID of the project to which the CLB instance belongs. 0: Default project.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string CLB instance creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Billing type of the CLB instance. Valid values: PREPAID and POSTPAID_BY_HOUR (pay-as-you-go).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var InternetAccessible Network properties of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkAttributes;

    /**
     * @var LBChargePrepaid Prepaid billing attributes of the Cloud Load Balancer instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrepaidAttributes;

    /**
     * @var ExtraInfo Reserved. Generally unnecessary for users to concern.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtraInfo;

    /**
     * @var string Personalized configuration ID of the Cloud Load Balancer (CLB) dimension. Multiple configurations are separated by commas.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigId;

    /**
     * @var array Tag information of the GWLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string CLB listener ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ListenerId;

    /**
     * @var string Listener protocol.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var integer Listener port.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Forwarding rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LocationId;

    /**
     * @var string Domain name of the forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Path of forwarding rules.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var string Backend target ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetId;

    /**
     * @var string Backend target IP address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetAddress;

    /**
     * @var integer Backend target listening port.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetPort;

    /**
     * @var integer Backend target forwarding weight.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetWeight;

    /**
     * @var integer 0: Not isolated; 1: Isolated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Isolation;

    /**
     * @var array List of security groups bound to Cloud Load Balancer (CLB).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecurityGroup;

    /**
     * @var integer Valid values: 1 (enabled), 0 (not enabled). Value ranges from 1 to 0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var string Backend target health status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetHealth;

    /**
     * @var string Domain name list of the forwarding rule.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domains;

    /**
     * @var array Multi-availability zone Cloud Load Balancer instance selected backup availability zone
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SlaveZone;

    /**
     * @var array The availability zone of the private network CLB instance is controlled by the allowlist CLB_Internal_Zone.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zones;

    /**
     * @var integer Whether to enable the SNI feature. 1: enable; 0: disable (this parameter is applicable only to HTTPS listeners).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SniSwitch;

    /**
     * @var string Domain name of the CLB instance.
     */
    public $LoadBalancerDomain;

    /**
     * @var string Network outbound
     */
    public $Egress;

    /**
     * @var array Attributes of Cloud Load Balancer
     */
    public $AttributeFlags;

    /**
     * @var string Specification type information of Cloud Load Balancer instance<ul><li> clb.c1.small: Minimalist specification </li><li>clb.c2.medium: Standard specification </li><li> clb.c3.small: Advanced type 1 specification </li><li> clb.c3.medium: Advanced type 2 specification </li><li> clb.c4.small: Super type 1 specification </li><li> clb.c4.medium: Super type 2 specification </li><li> clb.c4.large: Super type 3 specification </li><li> clb.c4.xlarge: Super type 4 specification </li><li>\"\": Non-LCU-supported instance</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SlaType;

    /**
     * @var integer 0: Non-exclusive type instance; 1: Exclusive type instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Exclusive;

    /**
     * @var AvailableZoneAffinityInfo Availability zone forward affinity info
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AvailableZoneAffinityInfo;

    /**
     * @param string $LoadBalancerId CLB instance ID.
     * @param string $LoadBalancerName CLB instance name.
     * @param string $LoadBalancerType Network type of the CLB instance:
OPEN: public network attribute, INTERNAL: private network attribute. For a Cloud Load Balancer with private network attribute, you can bind EIP for outbound public network access. For details, see the EIP document.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status CLB instance state, including
0: creating, 1: normal operation.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address VIP of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AddressIPv6 IPv6 address of the VIP in the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AddressIPVersion IP version of the Cloud Load Balancer instance, IPv4 | IPv6.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IPv6Mode IPv6 address type of the Cloud Load Balancer instance: IPv6Nat64 | IPv6FullChain.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Availability Zone of the Cloud Load Balancer instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AddressIsp The ISP to which the IP address of the CLB instance belongs. Value ranges from BGP (multi-line), CMCC (China Mobile), CUCC (China Unicom), CTCC (China Telecom) to INTERNAL (private network).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId ID of the VPC that the CLB instance belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId The ID of the project to which the CLB instance belongs. 0: Default project.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime CLB instance creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeType Billing type of the CLB instance. Valid values: PREPAID and POSTPAID_BY_HOUR (pay-as-you-go).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InternetAccessible $NetworkAttributes Network properties of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LBChargePrepaid $PrepaidAttributes Prepaid billing attributes of the Cloud Load Balancer instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtraInfo $ExtraInfo Reserved. Generally unnecessary for users to concern.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConfigId Personalized configuration ID of the Cloud Load Balancer (CLB) dimension. Multiple configurations are separated by commas.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag information of the GWLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ListenerId CLB listener ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Listener protocol.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Listener port.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LocationId Forwarding rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Domain Domain name of the forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url Path of forwarding rules.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetId Backend target ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetAddress Backend target IP address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TargetPort Backend target listening port.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TargetWeight Backend target forwarding weight.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Isolation 0: Not isolated; 1: Isolated.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SecurityGroup List of security groups bound to Cloud Load Balancer (CLB).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LoadBalancerPassToTarget Valid values: 1 (enabled), 0 (not enabled). Value ranges from 1 to 0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetHealth Backend target health status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Domains Domain name list of the forwarding rule.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SlaveZone Multi-availability zone Cloud Load Balancer instance selected backup availability zone
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Zones The availability zone of the private network CLB instance is controlled by the allowlist CLB_Internal_Zone.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SniSwitch Whether to enable the SNI feature. 1: enable; 0: disable (this parameter is applicable only to HTTPS listeners).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerDomain Domain name of the CLB instance.
     * @param string $Egress Network outbound
     * @param array $AttributeFlags Attributes of Cloud Load Balancer
     * @param string $SlaType Specification type information of Cloud Load Balancer instance<ul><li> clb.c1.small: Minimalist specification </li><li>clb.c2.medium: Standard specification </li><li> clb.c3.small: Advanced type 1 specification </li><li> clb.c3.medium: Advanced type 2 specification </li><li> clb.c4.small: Super type 1 specification </li><li> clb.c4.medium: Super type 2 specification </li><li> clb.c4.large: Super type 3 specification </li><li> clb.c4.xlarge: Super type 4 specification </li><li>\"\": Non-LCU-supported instance</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Exclusive 0: Non-exclusive type instance; 1: Exclusive type instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AvailableZoneAffinityInfo $AvailableZoneAffinityInfo Availability zone forward affinity info
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AddressIPv6",$param) and $param["AddressIPv6"] !== null) {
            $this->AddressIPv6 = $param["AddressIPv6"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("IPv6Mode",$param) and $param["IPv6Mode"] !== null) {
            $this->IPv6Mode = $param["IPv6Mode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AddressIsp",$param) and $param["AddressIsp"] !== null) {
            $this->AddressIsp = $param["AddressIsp"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = new ExtraInfo();
            $this->ExtraInfo->deserialize($param["ExtraInfo"]);
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetAddress",$param) and $param["TargetAddress"] !== null) {
            $this->TargetAddress = $param["TargetAddress"];
        }

        if (array_key_exists("TargetPort",$param) and $param["TargetPort"] !== null) {
            $this->TargetPort = $param["TargetPort"];
        }

        if (array_key_exists("TargetWeight",$param) and $param["TargetWeight"] !== null) {
            $this->TargetWeight = $param["TargetWeight"];
        }

        if (array_key_exists("Isolation",$param) and $param["Isolation"] !== null) {
            $this->Isolation = $param["Isolation"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }

        if (array_key_exists("TargetHealth",$param) and $param["TargetHealth"] !== null) {
            $this->TargetHealth = $param["TargetHealth"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("LoadBalancerDomain",$param) and $param["LoadBalancerDomain"] !== null) {
            $this->LoadBalancerDomain = $param["LoadBalancerDomain"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }

        if (array_key_exists("AttributeFlags",$param) and $param["AttributeFlags"] !== null) {
            $this->AttributeFlags = $param["AttributeFlags"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("AvailableZoneAffinityInfo",$param) and $param["AvailableZoneAffinityInfo"] !== null) {
            $this->AvailableZoneAffinityInfo = new AvailableZoneAffinityInfo();
            $this->AvailableZoneAffinityInfo->deserialize($param["AvailableZoneAffinityInfo"]);
        }
    }
}
