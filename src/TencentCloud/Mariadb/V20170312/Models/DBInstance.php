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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TencentDB instance details.
 *
 * @method string getInstanceId() Obtain Instance ID, which uniquely identifies a TDSQL instance
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which uniquely identifies a TDSQL instance
 * @method string getInstanceName() Obtain Customizable instance name
 * @method void setInstanceName(string $InstanceName) Set Customizable instance name
 * @method integer getAppId() Obtain Application ID of instance
 * @method void setAppId(integer $AppId) Set Application ID of instance
 * @method integer getProjectId() Obtain Project ID of instance
 * @method void setProjectId(integer $ProjectId) Set Project ID of instance
 * @method string getRegion() Obtain Instance region name, such as ap-shanghai
 * @method void setRegion(string $Region) Set Instance region name, such as ap-shanghai
 * @method string getZone() Obtain Instance AZ name, such as ap-guangzhou-1
 * @method void setZone(string $Zone) Set Instance AZ name, such as ap-guangzhou-1
 * @method integer getVpcId() Obtain VPC ID, which is 0 if the basic network is used
 * @method void setVpcId(integer $VpcId) Set VPC ID, which is 0 if the basic network is used
 * @method integer getSubnetId() Obtain Subnet ID, which is 0 if the basic network is used
 * @method void setSubnetId(integer $SubnetId) Set Subnet ID, which is 0 if the basic network is used
 * @method integer getStatus() Obtain Instance status. Valid values: `0` (creating), `1` (running task), `2` (running), `3` (uninitialized), `-1` (isolated), `4` (initializing), `5` (eliminating), `6` (restarting), `7` (migrating data)
 * @method void setStatus(integer $Status) Set Instance status. Valid values: `0` (creating), `1` (running task), `2` (running), `3` (uninitialized), `-1` (isolated), `4` (initializing), `5` (eliminating), `6` (restarting), `7` (migrating data)
 * @method string getVip() Obtain Private IP address
 * @method void setVip(string $Vip) Set Private IP address
 * @method integer getVport() Obtain Private network port
 * @method void setVport(integer $Vport) Set Private network port
 * @method string getWanDomain() Obtain Domain name for public network access, which can be resolved by the public network
 * @method void setWanDomain(string $WanDomain) Set Domain name for public network access, which can be resolved by the public network
 * @method string getWanVip() Obtain Public IP address, which can be accessed over the public network
 * @method void setWanVip(string $WanVip) Set Public IP address, which can be accessed over the public network
 * @method integer getWanPort() Obtain Public network port
 * @method void setWanPort(integer $WanPort) Set Public network port
 * @method string getCreateTime() Obtain Instance creation time in the format of `2006-01-02 15:04:05`
 * @method void setCreateTime(string $CreateTime) Set Instance creation time in the format of `2006-01-02 15:04:05`
 * @method string getUpdateTime() Obtain Last updated time of instance in the format of `2006-01-02 15:04:05`
 * @method void setUpdateTime(string $UpdateTime) Set Last updated time of instance in the format of `2006-01-02 15:04:05`
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. 0: no, 1: yes
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. 0: no, 1: yes
 * @method string getPeriodEndTime() Obtain Instance expiration time in the format of `2006-01-02 15:04:05`
 * @method void setPeriodEndTime(string $PeriodEndTime) Set Instance expiration time in the format of `2006-01-02 15:04:05`
 * @method string getUin() Obtain Instance account
 * @method void setUin(string $Uin) Set Instance account
 * @method string getTdsqlVersion() Obtain TDSQL version information
 * @method void setTdsqlVersion(string $TdsqlVersion) Set TDSQL version information
 * @method integer getMemory() Obtain Instance memory size in GB
 * @method void setMemory(integer $Memory) Set Instance memory size in GB
 * @method integer getStorage() Obtain Instance storage capacity in GB
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB
 * @method string getUniqueVpcId() Obtain VPC ID in string type
 * @method void setUniqueVpcId(string $UniqueVpcId) Set VPC ID in string type
 * @method string getUniqueSubnetId() Obtain VPC subnet ID in string type
 * @method void setUniqueSubnetId(string $UniqueSubnetId) Set VPC subnet ID in string type
 * @method string getOriginSerialId() Obtain Original ID of instance (this field is obsolete and should not be depended on)
 * @method void setOriginSerialId(string $OriginSerialId) Set Original ID of instance (this field is obsolete and should not be depended on)
 * @method integer getNodeCount() Obtain Number of nodes. 2: one master and one slave, 3: one master and two slaves
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes. 2: one master and one slave, 3: one master and two slaves
 * @method integer getIsTmp() Obtain Whether it is a temp instance. 0: no, non-zero value: yes
 * @method void setIsTmp(integer $IsTmp) Set Whether it is a temp instance. 0: no, non-zero value: yes
 * @method string getExclusterId() Obtain Dedicated cluster ID. If this parameter is empty, the instance is a general instance
 * @method void setExclusterId(string $ExclusterId) Set Dedicated cluster ID. If this parameter is empty, the instance is a general instance
 * @method integer getId() Obtain Numeric ID of instance (this field is obsolete and should not be depended on)
 * @method void setId(integer $Id) Set Numeric ID of instance (this field is obsolete and should not be depended on)
 * @method integer getPid() Obtain Product type ID
 * @method void setPid(integer $Pid) Set Product type ID
 * @method integer getQps() Obtain Maximum QPS value
 * @method void setQps(integer $Qps) Set Maximum QPS value
 * @method string getPaymode() Obtain Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPaymode(string $Paymode) Set Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLocker() Obtain Async task flow ID when an async task is in progress on an instance
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLocker(integer $Locker) Set Async task flow ID when an async task is in progress on an instance
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatusDesc() Obtain Current instance running status description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusDesc(string $StatusDesc) Set Current instance running status description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWanStatus() Obtain Public network access status. 0: not enabled, 1: enabled, 2: disabled, 3: enabling
 * @method void setWanStatus(integer $WanStatus) Set Public network access status. 0: not enabled, 1: enabled, 2: disabled, 3: enabling
 * @method integer getIsAuditSupported() Obtain Whether the instance supports audit. 1: yes, 0: no
 * @method void setIsAuditSupported(integer $IsAuditSupported) Set Whether the instance supports audit. 1: yes, 0: no
 * @method string getMachine() Obtain Model
 * @method void setMachine(string $Machine) Set Model
 * @method integer getIsEncryptSupported() Obtain Whether data encryption is supported. 1: yes, 0: no
 * @method void setIsEncryptSupported(integer $IsEncryptSupported) Set Whether data encryption is supported. 1: yes, 0: no
 * @method integer getCpu() Obtain Number of CPU cores of instance
 * @method void setCpu(integer $Cpu) Set Number of CPU cores of instance
 * @method integer getIpv6Flag() Obtain Indicates whether the instance uses IPv6
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpv6Flag(integer $Ipv6Flag) Set Indicates whether the instance uses IPv6
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVipv6() Obtain Private network IPv6 address
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVipv6(string $Vipv6) Set Private network IPv6 address
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getWanVipv6() Obtain Public network IPv6 address
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWanVipv6(string $WanVipv6) Set Public network IPv6 address
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWanPortIpv6() Obtain Public network IPv6 port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWanPortIpv6(integer $WanPortIpv6) Set Public network IPv6 port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWanStatusIpv6() Obtain Public network IPv6 status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWanStatusIpv6(integer $WanStatusIpv6) Set Public network IPv6 status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDbEngine() Obtain Database engine
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDbEngine(string $DbEngine) Set Database engine
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDbVersion() Obtain Database version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDbVersion(string $DbVersion) Set Database version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDcnFlag() Obtain DCN type. Valid values: 0 (null), 1 (primary instance), 2 (disaster recovery instance)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDcnFlag(integer $DcnFlag) Set DCN type. Valid values: 0 (null), 1 (primary instance), 2 (disaster recovery instance)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDcnStatus() Obtain DCN status. Valid values: 0 (null), 1 (creating), 2 (syncing), 3 (disconnected)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDcnStatus(integer $DcnStatus) Set DCN status. Valid values: 0 (null), 1 (creating), 2 (syncing), 3 (disconnected)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDcnDstNum() Obtain The number of DCN disaster recovery instances
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDcnDstNum(integer $DcnDstNum) Set The number of DCN disaster recovery instances
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceType() Obtain Instance type. Valid values: `1` (dedicated primary instance), `2` (primary instance), `3` (disaster recovery instance), and `4` (dedicated disaster recovery instance).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(integer $InstanceType) Set Instance type. Valid values: `1` (dedicated primary instance), `2` (primary instance), `3` (disaster recovery instance), and `4` (dedicated disaster recovery instance).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getResourceTags() Obtain Instance tag information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceTags(array $ResourceTags) Set Instance tag information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDbVersionId() Obtain Database version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbVersionId(string $DbVersionId) Set Database version
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DBInstance extends AbstractModel
{
    /**
     * @var string Instance ID, which uniquely identifies a TDSQL instance
     */
    public $InstanceId;

    /**
     * @var string Customizable instance name
     */
    public $InstanceName;

    /**
     * @var integer Application ID of instance
     */
    public $AppId;

    /**
     * @var integer Project ID of instance
     */
    public $ProjectId;

    /**
     * @var string Instance region name, such as ap-shanghai
     */
    public $Region;

    /**
     * @var string Instance AZ name, such as ap-guangzhou-1
     */
    public $Zone;

    /**
     * @var integer VPC ID, which is 0 if the basic network is used
     */
    public $VpcId;

    /**
     * @var integer Subnet ID, which is 0 if the basic network is used
     */
    public $SubnetId;

    /**
     * @var integer Instance status. Valid values: `0` (creating), `1` (running task), `2` (running), `3` (uninitialized), `-1` (isolated), `4` (initializing), `5` (eliminating), `6` (restarting), `7` (migrating data)
     */
    public $Status;

    /**
     * @var string Private IP address
     */
    public $Vip;

    /**
     * @var integer Private network port
     */
    public $Vport;

    /**
     * @var string Domain name for public network access, which can be resolved by the public network
     */
    public $WanDomain;

    /**
     * @var string Public IP address, which can be accessed over the public network
     */
    public $WanVip;

    /**
     * @var integer Public network port
     */
    public $WanPort;

    /**
     * @var string Instance creation time in the format of `2006-01-02 15:04:05`
     */
    public $CreateTime;

    /**
     * @var string Last updated time of instance in the format of `2006-01-02 15:04:05`
     */
    public $UpdateTime;

    /**
     * @var integer Auto-renewal flag. 0: no, 1: yes
     */
    public $AutoRenewFlag;

    /**
     * @var string Instance expiration time in the format of `2006-01-02 15:04:05`
     */
    public $PeriodEndTime;

    /**
     * @var string Instance account
     */
    public $Uin;

    /**
     * @var string TDSQL version information
     */
    public $TdsqlVersion;

    /**
     * @var integer Instance memory size in GB
     */
    public $Memory;

    /**
     * @var integer Instance storage capacity in GB
     */
    public $Storage;

    /**
     * @var string VPC ID in string type
     */
    public $UniqueVpcId;

    /**
     * @var string VPC subnet ID in string type
     */
    public $UniqueSubnetId;

    /**
     * @var string Original ID of instance (this field is obsolete and should not be depended on)
     */
    public $OriginSerialId;

    /**
     * @var integer Number of nodes. 2: one master and one slave, 3: one master and two slaves
     */
    public $NodeCount;

    /**
     * @var integer Whether it is a temp instance. 0: no, non-zero value: yes
     */
    public $IsTmp;

    /**
     * @var string Dedicated cluster ID. If this parameter is empty, the instance is a general instance
     */
    public $ExclusterId;

    /**
     * @var integer Numeric ID of instance (this field is obsolete and should not be depended on)
     */
    public $Id;

    /**
     * @var integer Product type ID
     */
    public $Pid;

    /**
     * @var integer Maximum QPS value
     */
    public $Qps;

    /**
     * @var string Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Paymode;

    /**
     * @var integer Async task flow ID when an async task is in progress on an instance
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Locker;

    /**
     * @var string Current instance running status description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusDesc;

    /**
     * @var integer Public network access status. 0: not enabled, 1: enabled, 2: disabled, 3: enabling
     */
    public $WanStatus;

    /**
     * @var integer Whether the instance supports audit. 1: yes, 0: no
     */
    public $IsAuditSupported;

    /**
     * @var string Model
     */
    public $Machine;

    /**
     * @var integer Whether data encryption is supported. 1: yes, 0: no
     */
    public $IsEncryptSupported;

    /**
     * @var integer Number of CPU cores of instance
     */
    public $Cpu;

    /**
     * @var integer Indicates whether the instance uses IPv6
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Ipv6Flag;

    /**
     * @var string Private network IPv6 address
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Vipv6;

    /**
     * @var string Public network IPv6 address
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WanVipv6;

    /**
     * @var integer Public network IPv6 port
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WanPortIpv6;

    /**
     * @var integer Public network IPv6 status
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WanStatusIpv6;

    /**
     * @var string Database engine
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DbEngine;

    /**
     * @var string Database version
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DbVersion;

    /**
     * @var integer DCN type. Valid values: 0 (null), 1 (primary instance), 2 (disaster recovery instance)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DcnFlag;

    /**
     * @var integer DCN status. Valid values: 0 (null), 1 (creating), 2 (syncing), 3 (disconnected)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DcnStatus;

    /**
     * @var integer The number of DCN disaster recovery instances
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DcnDstNum;

    /**
     * @var integer Instance type. Valid values: `1` (dedicated primary instance), `2` (primary instance), `3` (disaster recovery instance), and `4` (dedicated disaster recovery instance).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var array Instance tag information
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceTags;

    /**
     * @var string Database version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbVersionId;

    /**
     * @param string $InstanceId Instance ID, which uniquely identifies a TDSQL instance
     * @param string $InstanceName Customizable instance name
     * @param integer $AppId Application ID of instance
     * @param integer $ProjectId Project ID of instance
     * @param string $Region Instance region name, such as ap-shanghai
     * @param string $Zone Instance AZ name, such as ap-guangzhou-1
     * @param integer $VpcId VPC ID, which is 0 if the basic network is used
     * @param integer $SubnetId Subnet ID, which is 0 if the basic network is used
     * @param integer $Status Instance status. Valid values: `0` (creating), `1` (running task), `2` (running), `3` (uninitialized), `-1` (isolated), `4` (initializing), `5` (eliminating), `6` (restarting), `7` (migrating data)
     * @param string $Vip Private IP address
     * @param integer $Vport Private network port
     * @param string $WanDomain Domain name for public network access, which can be resolved by the public network
     * @param string $WanVip Public IP address, which can be accessed over the public network
     * @param integer $WanPort Public network port
     * @param string $CreateTime Instance creation time in the format of `2006-01-02 15:04:05`
     * @param string $UpdateTime Last updated time of instance in the format of `2006-01-02 15:04:05`
     * @param integer $AutoRenewFlag Auto-renewal flag. 0: no, 1: yes
     * @param string $PeriodEndTime Instance expiration time in the format of `2006-01-02 15:04:05`
     * @param string $Uin Instance account
     * @param string $TdsqlVersion TDSQL version information
     * @param integer $Memory Instance memory size in GB
     * @param integer $Storage Instance storage capacity in GB
     * @param string $UniqueVpcId VPC ID in string type
     * @param string $UniqueSubnetId VPC subnet ID in string type
     * @param string $OriginSerialId Original ID of instance (this field is obsolete and should not be depended on)
     * @param integer $NodeCount Number of nodes. 2: one master and one slave, 3: one master and two slaves
     * @param integer $IsTmp Whether it is a temp instance. 0: no, non-zero value: yes
     * @param string $ExclusterId Dedicated cluster ID. If this parameter is empty, the instance is a general instance
     * @param integer $Id Numeric ID of instance (this field is obsolete and should not be depended on)
     * @param integer $Pid Product type ID
     * @param integer $Qps Maximum QPS value
     * @param string $Paymode Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Locker Async task flow ID when an async task is in progress on an instance
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StatusDesc Current instance running status description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $WanStatus Public network access status. 0: not enabled, 1: enabled, 2: disabled, 3: enabling
     * @param integer $IsAuditSupported Whether the instance supports audit. 1: yes, 0: no
     * @param string $Machine Model
     * @param integer $IsEncryptSupported Whether data encryption is supported. 1: yes, 0: no
     * @param integer $Cpu Number of CPU cores of instance
     * @param integer $Ipv6Flag Indicates whether the instance uses IPv6
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Vipv6 Private network IPv6 address
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $WanVipv6 Public network IPv6 address
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $WanPortIpv6 Public network IPv6 port
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $WanStatusIpv6 Public network IPv6 status
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DbEngine Database engine
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DbVersion Database version
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DcnFlag DCN type. Valid values: 0 (null), 1 (primary instance), 2 (disaster recovery instance)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DcnStatus DCN status. Valid values: 0 (null), 1 (creating), 2 (syncing), 3 (disconnected)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DcnDstNum The number of DCN disaster recovery instances
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceType Instance type. Valid values: `1` (dedicated primary instance), `2` (primary instance), `3` (disaster recovery instance), and `4` (dedicated disaster recovery instance).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ResourceTags Instance tag information
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DbVersionId Database version
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanVip",$param) and $param["WanVip"] !== null) {
            $this->WanVip = $param["WanVip"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TdsqlVersion",$param) and $param["TdsqlVersion"] !== null) {
            $this->TdsqlVersion = $param["TdsqlVersion"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("OriginSerialId",$param) and $param["OriginSerialId"] !== null) {
            $this->OriginSerialId = $param["OriginSerialId"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("IsTmp",$param) and $param["IsTmp"] !== null) {
            $this->IsTmp = $param["IsTmp"];
        }

        if (array_key_exists("ExclusterId",$param) and $param["ExclusterId"] !== null) {
            $this->ExclusterId = $param["ExclusterId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
        }

        if (array_key_exists("Locker",$param) and $param["Locker"] !== null) {
            $this->Locker = $param["Locker"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("IsAuditSupported",$param) and $param["IsAuditSupported"] !== null) {
            $this->IsAuditSupported = $param["IsAuditSupported"];
        }

        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("IsEncryptSupported",$param) and $param["IsEncryptSupported"] !== null) {
            $this->IsEncryptSupported = $param["IsEncryptSupported"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }

        if (array_key_exists("Vipv6",$param) and $param["Vipv6"] !== null) {
            $this->Vipv6 = $param["Vipv6"];
        }

        if (array_key_exists("WanVipv6",$param) and $param["WanVipv6"] !== null) {
            $this->WanVipv6 = $param["WanVipv6"];
        }

        if (array_key_exists("WanPortIpv6",$param) and $param["WanPortIpv6"] !== null) {
            $this->WanPortIpv6 = $param["WanPortIpv6"];
        }

        if (array_key_exists("WanStatusIpv6",$param) and $param["WanStatusIpv6"] !== null) {
            $this->WanStatusIpv6 = $param["WanStatusIpv6"];
        }

        if (array_key_exists("DbEngine",$param) and $param["DbEngine"] !== null) {
            $this->DbEngine = $param["DbEngine"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("DcnFlag",$param) and $param["DcnFlag"] !== null) {
            $this->DcnFlag = $param["DcnFlag"];
        }

        if (array_key_exists("DcnStatus",$param) and $param["DcnStatus"] !== null) {
            $this->DcnStatus = $param["DcnStatus"];
        }

        if (array_key_exists("DcnDstNum",$param) and $param["DcnDstNum"] !== null) {
            $this->DcnDstNum = $param["DcnDstNum"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }
    }
}
