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
 * @method string getLoadBalancerId() 获取CLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置CLB instance ID.
 * @method string getLoadBalancerName() 获取CLB instance name.
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置CLB instance name.
 * @method string getLoadBalancerType() 获取CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method integer getForward() 获取CLB type identifier. Value range: 1 (CLB); 0 (classic CLB).
 * @method void setForward(integer $Forward) 设置CLB type identifier. Value range: 1 (CLB); 0 (classic CLB).
 * @method string getDomain() 获取CLB instance domain name. This field is provided only to public network classic CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) 设置CLB instance domain name. This field is provided only to public network classic CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLoadBalancerVips() 获取List of VIPs of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置List of VIPs of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() 获取CLB instance status, including:
0: creating; 1: running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) 设置CLB instance status, including:
0: creating; 1: running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() 获取CLB instance creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) 设置CLB instance creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatusTime() 获取Last status change time of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusTime(string $StatusTime) 设置Last status change time of a CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() 获取ID of the project to which a CLB instance belongs. 0: default project.
 * @method void setProjectId(integer $ProjectId) 设置ID of the project to which a CLB instance belongs. 0: default project.
 * @method string getVpcId() 获取VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) 设置VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOpenBgp() 获取Protective CLB identifier. Value range: 1 (protective), 0 (non-protective).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOpenBgp(integer $OpenBgp) 设置Protective CLB identifier. Value range: 1 (protective), 0 (non-protective).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSnat() 获取SNAT is enabled for all private network classic CLB created before December 2016.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnat(boolean $Snat) 设置SNAT is enabled for all private network classic CLB created before December 2016.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsolation() 获取0: not isolated; 1: isolated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolation(integer $Isolation) 设置0: not isolated; 1: isolated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLog() 获取Log information. Only the public network CLB that have HTTP or HTTPS listeners can generate logs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLog(string $Log) 设置Log information. Only the public network CLB that have HTTP or HTTPS listeners can generate logs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() 获取Subnet where a CLB instance resides (meaningful only for private network VPC CLB)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) 设置Subnet where a CLB instance resides (meaningful only for private network VPC CLB)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() 获取CLB instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) 设置CLB instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSecureGroups() 获取Security group of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecureGroups(array $SecureGroups) 设置Security group of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TargetRegionInfo getTargetRegionInfo() 获取Basic information of a backend server bound to a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetRegionInfo(TargetRegionInfo $TargetRegionInfo) 设置Basic information of a backend server bound to a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAnycastZone() 获取Anycast CLB publishing region. For non-anycast CLB, this field returns an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnycastZone(string $AnycastZone) 设置Anycast CLB publishing region. For non-anycast CLB, this field returns an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddressIPVersion() 获取IP version. Value range: ipv4, ipv6
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddressIPVersion(string $AddressIPVersion) 设置IP version. Value range: ipv4, ipv6
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNumericalVpcId() 获取VPC ID in a numeric form
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNumericalVpcId(integer $NumericalVpcId) 设置VPC ID in a numeric form
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVipIsp() 获取ISP to which a CLB IP address belongs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVipIsp(string $VipIsp) 设置ISP to which a CLB IP address belongs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ZoneInfo getMasterZone() 获取Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMasterZone(ZoneInfo $MasterZone) 设置Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBackupZoneSet() 获取Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupZoneSet(array $BackupZoneSet) 设置Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsolatedTime() 获取CLB instance isolation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolatedTime(string $IsolatedTime) 设置CLB instance isolation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() 获取CLB instance expiration time, which takes effect only for prepaid instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) 设置CLB instance expiration time, which takes effect only for prepaid instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getChargeType() 获取CLB instance billing mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChargeType(string $ChargeType) 设置CLB instance billing mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InternetAccessible getNetworkAttributes() 获取CLB instance network attributes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkAttributes(InternetAccessible $NetworkAttributes) 设置CLB instance network attributes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LBChargePrepaid getPrepaidAttributes() 获取Prepaid billing attributes of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrepaidAttributes(LBChargePrepaid $PrepaidAttributes) 设置Prepaid billing attributes of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogSetId() 获取Logset ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogSetId(string $LogSetId) 设置Logset ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogTopicId() 获取Log topic ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogTopicId(string $LogTopicId) 设置Log topic ID of CLB Log Service (CLS)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddressIPv6() 获取IPv6 address of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddressIPv6(string $AddressIPv6) 设置IPv6 address of a CLB instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtraInfo getExtraInfo() 获取Reserved field which can be ignored generally.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) 设置Reserved field which can be ignored generally.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDDos() 获取Whether an Anti-DDoS Pro instance can be bound
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDDos(boolean $IsDDos) 设置Whether an Anti-DDoS Pro instance can be bound
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConfigId() 获取Custom configuration ID at the CLB instance level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigId(string $ConfigId) 设置Custom configuration ID at the CLB instance level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getLoadBalancerPassToTarget() 获取Whether a real server opens the traffic from a CLB instance to the internet by default
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) 设置Whether a real server opens the traffic from a CLB instance to the internet by default
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExclusiveCluster getExclusiveCluster() 获取
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) 设置
 * @method string getIPv6Mode() 获取
 * @method void setIPv6Mode(string $IPv6Mode) 设置
 */

/**
 *CLB instance information
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
     * @var string CLB instance domain name. This field is provided only to public network classic CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string IP version. Value range: ipv4, ipv6
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddressIPVersion;

    /**
     * @var integer VPC ID in a numeric form
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NumericalVpcId;

    /**
     * @var string ISP to which a CLB IP address belongs
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
     * @var string CLB instance billing mode
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var boolean Whether a real server opens the traffic from a CLB instance to the internet by default
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var ExclusiveCluster 
     */
    public $ExclusiveCluster;

    /**
     * @var string 
     */
    public $IPv6Mode;
    /**
     * @param string $LoadBalancerId CLB instance ID.
     * @param string $LoadBalancerName CLB instance name.
     * @param string $LoadBalancerType CLB instance network type:
OPEN: public network; INTERNAL: private network.
     * @param integer $Forward CLB type identifier. Value range: 1 (CLB); 0 (classic CLB).
     * @param string $Domain CLB instance domain name. This field is provided only to public network classic CLB instance.
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @param string $AddressIPVersion IP version. Value range: ipv4, ipv6
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NumericalVpcId VPC ID in a numeric form
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VipIsp ISP to which a CLB IP address belongs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ZoneInfo $MasterZone Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BackupZoneSet Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsolatedTime CLB instance isolation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime CLB instance expiration time, which takes effect only for prepaid instances
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeType CLB instance billing mode
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @param boolean $LoadBalancerPassToTarget Whether a real server opens the traffic from a CLB instance to the internet by default
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExclusiveCluster $ExclusiveCluster 
     * @param string $IPv6Mode 
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
    }
}
