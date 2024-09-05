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
 * CLB instance details
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID.
 * @method string getLoadBalancerName() Obtain CLB instance name.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name.
 * @method string getLoadBalancerType() Obtain CLB instance network type:
Public: public network; Private: private network.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set CLB instance network type:
Public: public network; Private: private network.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain CLB instance status, including:
0: creating; 1: running.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set CLB instance status, including:
0: creating; 1: running.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain CLB instance VIP.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set CLB instance VIP.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAddressIPv6() Obtain IPv6 VIP address of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAddressIPv6(string $AddressIPv6) Set IPv6 VIP address of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAddressIPVersion() Obtain IP version of the CLB instance. Valid values: IPv4, IPv6.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAddressIPVersion(string $AddressIPVersion) Set IP version of the CLB instance. Valid values: IPv4, IPv6.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIPv6Mode() Obtain IPv6 address type of the CLB instance. Valid values: IPv6Nat64, IPv6FullChain.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIPv6Mode(string $IPv6Mode) Set IPv6 address type of the CLB instance. Valid values: IPv6Nat64, IPv6FullChain.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Availability zone where the CLB instance resides.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Availability zone where the CLB instance resides.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAddressIsp() Obtain ISP for the IP address of the CLB instance. Valid values: BGP (multi-line), CMCC (China Mobile), CUCC (China Unicom), CTCC (China Telecom), INTERNAL (private network).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddressIsp(string $AddressIsp) Set ISP for the IP address of the CLB instance. Valid values: BGP (multi-line), CMCC (China Mobile), CUCC (China Unicom), CTCC (China Telecom), INTERNAL (private network).Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain ID of the VPC instance to which the CLB instance belongs.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set ID of the VPC instance to which the CLB instance belongs.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain ID of the project to which the CLB instance belongs. 0: default project.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the CLB instance belongs. 0: default project.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain CLB instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set CLB instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getChargeType() Obtain Billing type of a CLB instance. Valid values: PREPAID (prepaid), POSTPAID_BY_HOUR (pay-as-you-go).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChargeType(string $ChargeType) Set Billing type of a CLB instance. Valid values: PREPAID (prepaid), POSTPAID_BY_HOUR (pay-as-you-go).Note: This field may return null, indicating that no valid values can be obtained.
 * @method InternetAccessible getNetworkAttributes() Obtain CLB instance network attribute.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkAttributes(InternetAccessible $NetworkAttributes) Set CLB instance network attribute.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method LBChargePrepaid getPrepaidAttributes() Obtain Pay-as-you-go attribute of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPrepaidAttributes(LBChargePrepaid $PrepaidAttributes) Set Pay-as-you-go attribute of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ExtraInfo getExtraInfo() Obtain Reserved field, which can be ignored generally.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) Set Reserved field, which can be ignored generally.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getConfigId() Obtain Custom configuration IDs of CLB instances. Multiple IDs must be separated by commas (,).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigId(string $ConfigId) Set Custom configuration IDs of CLB instances. Multiple IDs must be separated by commas (,).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain CLB instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set CLB instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getListenerId() Obtain CLB listener ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setListenerId(string $ListenerId) Set CLB listener ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Listener protocol.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Listener protocol.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Listener port.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Listener port.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLocationId() Obtain Forwarding rule ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLocationId(string $LocationId) Set Forwarding rule ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Domain name of the forwarding rule.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name of the forwarding rule.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain Forwarding rule path.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Forwarding rule path.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTargetId() Obtain ID of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTargetId(string $TargetId) Set ID of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTargetAddress() Obtain Address of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTargetAddress(string $TargetAddress) Set Address of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTargetPort() Obtain Listening port of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTargetPort(integer $TargetPort) Set Listening port of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTargetWeight() Obtain Forwarding weight of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTargetWeight(integer $TargetWeight) Set Forwarding weight of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsolation() Obtain 0: not isolated; 1: isolated.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsolation(integer $Isolation) Set 0: not isolated; 1: isolated.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSecurityGroup() Obtain List of the security groups bound to the CLB instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSecurityGroup(array $SecurityGroup) Set List of the security groups bound to the CLB instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getLoadBalancerPassToTarget() Obtain Whether to enable moving up CLB security groups. Valid values: 1 (enabled), 0 (not enabled).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerPassToTarget(integer $LoadBalancerPassToTarget) Set Whether to enable moving up CLB security groups. Valid values: 1 (enabled), 0 (not enabled).Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetHealth() Obtain Health status of the target real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTargetHealth(string $TargetHealth) Set Health status of the target real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDomains() Obtain List o domain names associated with the forwarding rule
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDomains(string $Domains) Set List o domain names associated with the forwarding rule
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getSlaveZone() Obtain The secondary zone of multi-AZ CLB instance
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSlaveZone(array $SlaveZone) Set The secondary zone of multi-AZ CLB instance
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getZones() Obtain The AZ of private CLB instance. This is only available for beta users.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setZones(array $Zones) Set The AZ of private CLB instance. This is only available for beta users.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getSniSwitch() Obtain Whether to enable SNI. `1`: Enable; `0`: Do not enable. This parameter is only meaningful for HTTPS listeners.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSniSwitch(integer $SniSwitch) Set Whether to enable SNI. `1`: Enable; `0`: Do not enable. This parameter is only meaningful for HTTPS listeners.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerDomain() Obtain Domain name of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) Set Domain name of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEgress() Obtain Network egress
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setEgress(string $Egress) Set Network egress
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getAttributeFlags() Obtain 
 * @method void setAttributeFlags(array $AttributeFlags) Set 
 * @method string getSlaType() Obtain 
 * @method void setSlaType(string $SlaType) Set 
 * @method integer getExclusive() Obtain 
 * @method void setExclusive(integer $Exclusive) Set 
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
     * @var string CLB instance network type:
Public: public network; Private: private network.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerType;

    /**
     * @var integer CLB instance status, including:
0: creating; 1: running.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string CLB instance VIP.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string IPv6 VIP address of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AddressIPv6;

    /**
     * @var string IP version of the CLB instance. Valid values: IPv4, IPv6.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AddressIPVersion;

    /**
     * @var string IPv6 address type of the CLB instance. Valid values: IPv6Nat64, IPv6FullChain.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IPv6Mode;

    /**
     * @var string Availability zone where the CLB instance resides.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string ISP for the IP address of the CLB instance. Valid values: BGP (multi-line), CMCC (China Mobile), CUCC (China Unicom), CTCC (China Telecom), INTERNAL (private network).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddressIsp;

    /**
     * @var string ID of the VPC instance to which the CLB instance belongs.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var integer ID of the project to which the CLB instance belongs. 0: default project.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string CLB instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Billing type of a CLB instance. Valid values: PREPAID (prepaid), POSTPAID_BY_HOUR (pay-as-you-go).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var InternetAccessible CLB instance network attribute.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkAttributes;

    /**
     * @var LBChargePrepaid Pay-as-you-go attribute of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PrepaidAttributes;

    /**
     * @var ExtraInfo Reserved field, which can be ignored generally.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExtraInfo;

    /**
     * @var string Custom configuration IDs of CLB instances. Multiple IDs must be separated by commas (,).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigId;

    /**
     * @var array CLB instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string CLB listener ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ListenerId;

    /**
     * @var string Listener protocol.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var integer Listener port.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Forwarding rule ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LocationId;

    /**
     * @var string Domain name of the forwarding rule.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Forwarding rule path.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var string ID of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TargetId;

    /**
     * @var string Address of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TargetAddress;

    /**
     * @var integer Listening port of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TargetPort;

    /**
     * @var integer Forwarding weight of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TargetWeight;

    /**
     * @var integer 0: not isolated; 1: isolated.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Isolation;

    /**
     * @var array List of the security groups bound to the CLB instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SecurityGroup;

    /**
     * @var integer Whether to enable moving up CLB security groups. Valid values: 1 (enabled), 0 (not enabled).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var string Health status of the target real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TargetHealth;

    /**
     * @var string List o domain names associated with the forwarding rule
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Domains;

    /**
     * @var array The secondary zone of multi-AZ CLB instance
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SlaveZone;

    /**
     * @var array The AZ of private CLB instance. This is only available for beta users.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Zones;

    /**
     * @var integer Whether to enable SNI. `1`: Enable; `0`: Do not enable. This parameter is only meaningful for HTTPS listeners.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SniSwitch;

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
     * @var array 
     */
    public $AttributeFlags;

    /**
     * @var string 
     */
    public $SlaType;

    /**
     * @var integer 
     */
    public $Exclusive;

    /**
     * @param string $LoadBalancerId CLB instance ID.
     * @param string $LoadBalancerName CLB instance name.
     * @param string $LoadBalancerType CLB instance network type:
Public: public network; Private: private network.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status CLB instance status, including:
0: creating; 1: running.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Address CLB instance VIP.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AddressIPv6 IPv6 VIP address of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AddressIPVersion IP version of the CLB instance. Valid values: IPv4, IPv6.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IPv6Mode IPv6 address type of the CLB instance. Valid values: IPv6Nat64, IPv6FullChain.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Availability zone where the CLB instance resides.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AddressIsp ISP for the IP address of the CLB instance. Valid values: BGP (multi-line), CMCC (China Mobile), CUCC (China Unicom), CTCC (China Telecom), INTERNAL (private network).Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId ID of the VPC instance to which the CLB instance belongs.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId ID of the project to which the CLB instance belongs. 0: default project.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime CLB instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeType Billing type of a CLB instance. Valid values: PREPAID (prepaid), POSTPAID_BY_HOUR (pay-as-you-go).Note: This field may return null, indicating that no valid values can be obtained.
     * @param InternetAccessible $NetworkAttributes CLB instance network attribute.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param LBChargePrepaid $PrepaidAttributes Pay-as-you-go attribute of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ExtraInfo $ExtraInfo Reserved field, which can be ignored generally.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ConfigId Custom configuration IDs of CLB instances. Multiple IDs must be separated by commas (,).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags CLB instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ListenerId CLB listener ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Listener protocol.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Listener port.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LocationId Forwarding rule ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Domain Domain name of the forwarding rule.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Url Forwarding rule path.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TargetId ID of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TargetAddress Address of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TargetPort Listening port of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TargetWeight Forwarding weight of target real servers.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Isolation 0: not isolated; 1: isolated.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SecurityGroup List of the security groups bound to the CLB instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $LoadBalancerPassToTarget Whether to enable moving up CLB security groups. Valid values: 1 (enabled), 0 (not enabled).Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetHealth Health status of the target real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Domains List o domain names associated with the forwarding rule
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $SlaveZone The secondary zone of multi-AZ CLB instance
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $Zones The AZ of private CLB instance. This is only available for beta users.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $SniSwitch Whether to enable SNI. `1`: Enable; `0`: Do not enable. This parameter is only meaningful for HTTPS listeners.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerDomain Domain name of the CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Egress Network egress
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $AttributeFlags 
     * @param string $SlaType 
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
    }
}
