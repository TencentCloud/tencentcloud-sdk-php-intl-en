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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDCDBInstanceDetail response structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as dcdbt-7oaxtcb7.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as dcdbt-7oaxtcb7.
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getStatus() Obtain Instance status. Valid values: `0` (creating), `1` (running task), `2` (running), `3` (uninitialized), `-1` (isolated).
 * @method void setStatus(integer $Status) Set Instance status. Valid values: `0` (creating), `1` (running task), `2` (running), `3` (uninitialized), `-1` (isolated).
 * @method string getStatusDesc() Obtain Current status of the instance
 * @method void setStatusDesc(string $StatusDesc) Set Current status of the instance
 * @method string getVip() Obtain Instance private IP address
 * @method void setVip(string $Vip) Set Instance private IP address
 * @method integer getVport() Obtain Private port of instance
 * @method void setVport(integer $Vport) Set Private port of instance
 * @method integer getNodeCount() Obtain Number of instance nodes. Valid values: `2` (1-source-1-replica), `3` (1-source-2-replica).
 * @method void setNodeCount(integer $NodeCount) Set Number of instance nodes. Valid values: `2` (1-source-1-replica), `3` (1-source-2-replica).
 * @method string getRegion() Obtain Instance region, such as ap-guangzhou.
 * @method void setRegion(string $Region) Set Instance region, such as ap-guangzhou.
 * @method string getVpcId() Obtain Instance VPC ID, such as vpc-r9jr0de3.
 * @method void setVpcId(string $VpcId) Set Instance VPC ID, such as vpc-r9jr0de3.
 * @method string getSubnetId() Obtain VPC subnet ID of an instance, such as subnet-6rqs61o2.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID of an instance, such as subnet-6rqs61o2.
 * @method integer getWanStatus() Obtain Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
 * @method void setWanStatus(integer $WanStatus) Set Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
 * @method string getWanDomain() Obtain Domain name for public network access, which can be resolved by the public network.
 * @method void setWanDomain(string $WanDomain) Set Domain name for public network access, which can be resolved by the public network.
 * @method string getWanVip() Obtain Public IP address, which can be accessed over the public network.
 * @method void setWanVip(string $WanVip) Set Public IP address, which can be accessed over the public network.
 * @method integer getWanPort() Obtain Public network access port
 * @method void setWanPort(integer $WanPort) Set Public network access port
 * @method integer getProjectId() Obtain Project ID of the instance
 * @method void setProjectId(integer $ProjectId) Set Project ID of the instance
 * @method integer getAutoRenewFlag() Obtain Automatic renewal flag for an instance. Valid values: `0` (normal renewal), `1` (auto-renewal), `3` (no renewal upon expiration).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Automatic renewal flag for an instance. Valid values: `0` (normal renewal), `1` (auto-renewal), `3` (no renewal upon expiration).
 * @method string getExclusterId() Obtain Dedicated cluster ID
 * @method void setExclusterId(string $ExclusterId) Set Dedicated cluster ID
 * @method string getPayMode() Obtain Billing mode. Valid values: `prepaid` (monthly subscription), `postpaid` (pay-as-you-go).
 * @method void setPayMode(string $PayMode) Set Billing mode. Valid values: `prepaid` (monthly subscription), `postpaid` (pay-as-you-go).
 * @method string getCreateTime() Obtain Creation time of the instance in the format of 2006-01-02 15:04:05
 * @method void setCreateTime(string $CreateTime) Set Creation time of the instance in the format of 2006-01-02 15:04:05
 * @method string getPeriodEndTime() Obtain Expiration time of the instance in the format of 2006-01-02 15:04:05
 * @method void setPeriodEndTime(string $PeriodEndTime) Set Expiration time of the instance in the format of 2006-01-02 15:04:05
 * @method string getDbVersion() Obtain Database version information
 * @method void setDbVersion(string $DbVersion) Set Database version information
 * @method integer getIsAuditSupported() Obtain Whether the instance supports audit. Valid values: `1` (yes), `0` (no).
 * @method void setIsAuditSupported(integer $IsAuditSupported) Set Whether the instance supports audit. Valid values: `1` (yes), `0` (no).
 * @method integer getIsEncryptSupported() Obtain Whether data encryption is supported for an instance. Valid values: `1` (yes), `0` (no).
 * @method void setIsEncryptSupported(integer $IsEncryptSupported) Set Whether data encryption is supported for an instance. Valid values: `1` (yes), `0` (no).
 * @method string getMachine() Obtain Instance machine model
 * @method void setMachine(string $Machine) Set Instance machine model
 * @method integer getMemory() Obtain Instance memory size in GB, which is the sum of the memory of all shards.
 * @method void setMemory(integer $Memory) Set Instance memory size in GB, which is the sum of the memory of all shards.
 * @method integer getStorage() Obtain Instance disk storage size in GB, which is the sum of the disk size of all shards.
 * @method void setStorage(integer $Storage) Set Instance disk storage size in GB, which is the sum of the disk size of all shards.
 * @method float getStorageUsage() Obtain Instance storage space utilization. It is calculated by dividing the sum of the used disk size of all shards by the total disk size of all shards.
 * @method void setStorageUsage(float $StorageUsage) Set Instance storage space utilization. It is calculated by dividing the sum of the used disk size of all shards by the total disk size of all shards.
 * @method integer getLogStorage() Obtain Size of log storage space in GB
 * @method void setLogStorage(integer $LogStorage) Set Size of log storage space in GB
 * @method integer getPid() Obtain Product type ID
 * @method void setPid(integer $Pid) Set Product type ID
 * @method string getMasterZone() Obtain Source AZ
 * @method void setMasterZone(string $MasterZone) Set Source AZ
 * @method array getSlaveZones() Obtain Replica AZ
 * @method void setSlaveZones(array $SlaveZones) Set Replica AZ
 * @method array getShards() Obtain Shard information
 * @method void setShards(array $Shards) Set Shard information
 * @method string getVip6() Obtain Private network IPv6 address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip6(string $Vip6) Set Private network IPv6 address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCpu() Obtain Number of CPU cores of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getQps() Obtain Instance QPS
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQps(integer $Qps) Set Instance QPS
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbEngine() Obtain Database engine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbEngine(string $DbEngine) Set Database engine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIpv6Flag() Obtain Whether IPv6 is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpv6Flag(integer $Ipv6Flag) Set Whether IPv6 is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWanVipv6() Obtain Public IPv6 address, which can be accessed over the public network
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWanVipv6(string $WanVipv6) Set Public IPv6 address, which can be accessed over the public network
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWanStatusIpv6() Obtain Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWanStatusIpv6(integer $WanStatusIpv6) Set Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWanPortIpv6() Obtain Public network IPv6 port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWanPortIpv6(integer $WanPortIpv6) Set Public network IPv6 port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getResourceTags() Obtain Tag information
 * @method void setResourceTags(array $ResourceTags) Set Tag information
 * @method integer getDcnFlag() Obtain DCN type. Valid values: `0` (N/A), `1` (source instance), `2` (disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDcnFlag(integer $DcnFlag) Set DCN type. Valid values: `0` (N/A), `1` (source instance), `2` (disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDcnStatus() Obtain DCN status. Valid values: `0` (N/A), `1` (creating), `2` (syncing), `3` (disconnected).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDcnStatus(integer $DcnStatus) Set DCN status. Valid values: `0` (N/A), `1` (creating), `2` (syncing), `3` (disconnected).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDcnDstNum() Obtain The number of DCN disaster recovery instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDcnDstNum(integer $DcnDstNum) Set The number of DCN disaster recovery instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceType() Obtain Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery read-only instance), `4` (dedicated disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(integer $InstanceType) Set Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery read-only instance), `4` (dedicated disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsMaxUserConnectionsSupported() Obtain Whether the instance supports setting the connection limit, which is not supported for kernel version 10.1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsMaxUserConnectionsSupported(boolean $IsMaxUserConnectionsSupported) Set Whether the instance supports setting the connection limit, which is not supported for kernel version 10.1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbVersionId() Obtain The displayed database version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbVersionId(string $DbVersionId) Set The displayed database version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEncryptStatus() Obtain Encryption status. Valid values: `0` (disabled), `1` (enabled).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncryptStatus(integer $EncryptStatus) Set Encryption status. Valid values: `0` (disabled), `1` (enabled).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExclusterType() Obtain Type of dedicated cluster. Valid values: `0` (public cloud), `1` (finance cage), `2` (CDC cluster).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExclusterType(integer $ExclusterType) Set Type of dedicated cluster. Valid values: `0` (public cloud), `1` (finance cage), `2` (CDC cluster).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRsAccessStrategy() Obtain Nearby VPC access
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRsAccessStrategy(integer $RsAccessStrategy) Set Nearby VPC access
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getReservedNetResources() Obtain Unclaimed network resource
 * @method void setReservedNetResources(array $ReservedNetResources) Set Unclaimed network resource
 * @method boolean getIsPhysicalReplicationSupported() Obtain Whether physical replication is supported.
 * @method void setIsPhysicalReplicationSupported(boolean $IsPhysicalReplicationSupported) Set Whether physical replication is supported.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeDCDBInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string Instance ID, such as dcdbt-7oaxtcb7.
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Instance status. Valid values: `0` (creating), `1` (running task), `2` (running), `3` (uninitialized), `-1` (isolated).
     */
    public $Status;

    /**
     * @var string Current status of the instance
     */
    public $StatusDesc;

    /**
     * @var string Instance private IP address
     */
    public $Vip;

    /**
     * @var integer Private port of instance
     */
    public $Vport;

    /**
     * @var integer Number of instance nodes. Valid values: `2` (1-source-1-replica), `3` (1-source-2-replica).
     */
    public $NodeCount;

    /**
     * @var string Instance region, such as ap-guangzhou.
     */
    public $Region;

    /**
     * @var string Instance VPC ID, such as vpc-r9jr0de3.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID of an instance, such as subnet-6rqs61o2.
     */
    public $SubnetId;

    /**
     * @var integer Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
     */
    public $WanStatus;

    /**
     * @var string Domain name for public network access, which can be resolved by the public network.
     */
    public $WanDomain;

    /**
     * @var string Public IP address, which can be accessed over the public network.
     */
    public $WanVip;

    /**
     * @var integer Public network access port
     */
    public $WanPort;

    /**
     * @var integer Project ID of the instance
     */
    public $ProjectId;

    /**
     * @var integer Automatic renewal flag for an instance. Valid values: `0` (normal renewal), `1` (auto-renewal), `3` (no renewal upon expiration).
     */
    public $AutoRenewFlag;

    /**
     * @var string Dedicated cluster ID
     */
    public $ExclusterId;

    /**
     * @var string Billing mode. Valid values: `prepaid` (monthly subscription), `postpaid` (pay-as-you-go).
     */
    public $PayMode;

    /**
     * @var string Creation time of the instance in the format of 2006-01-02 15:04:05
     */
    public $CreateTime;

    /**
     * @var string Expiration time of the instance in the format of 2006-01-02 15:04:05
     */
    public $PeriodEndTime;

    /**
     * @var string Database version information
     */
    public $DbVersion;

    /**
     * @var integer Whether the instance supports audit. Valid values: `1` (yes), `0` (no).
     */
    public $IsAuditSupported;

    /**
     * @var integer Whether data encryption is supported for an instance. Valid values: `1` (yes), `0` (no).
     */
    public $IsEncryptSupported;

    /**
     * @var string Instance machine model
     */
    public $Machine;

    /**
     * @var integer Instance memory size in GB, which is the sum of the memory of all shards.
     */
    public $Memory;

    /**
     * @var integer Instance disk storage size in GB, which is the sum of the disk size of all shards.
     */
    public $Storage;

    /**
     * @var float Instance storage space utilization. It is calculated by dividing the sum of the used disk size of all shards by the total disk size of all shards.
     */
    public $StorageUsage;

    /**
     * @var integer Size of log storage space in GB
     */
    public $LogStorage;

    /**
     * @var integer Product type ID
     */
    public $Pid;

    /**
     * @var string Source AZ
     */
    public $MasterZone;

    /**
     * @var array Replica AZ
     */
    public $SlaveZones;

    /**
     * @var array Shard information
     */
    public $Shards;

    /**
     * @var string Private network IPv6 address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip6;

    /**
     * @var integer Number of CPU cores of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cpu;

    /**
     * @var integer Instance QPS
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Qps;

    /**
     * @var string Database engine
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbEngine;

    /**
     * @var integer Whether IPv6 is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ipv6Flag;

    /**
     * @var string Public IPv6 address, which can be accessed over the public network
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WanVipv6;

    /**
     * @var integer Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WanStatusIpv6;

    /**
     * @var integer Public network IPv6 port
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WanPortIpv6;

    /**
     * @var array Tag information
     */
    public $ResourceTags;

    /**
     * @var integer DCN type. Valid values: `0` (N/A), `1` (source instance), `2` (disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DcnFlag;

    /**
     * @var integer DCN status. Valid values: `0` (N/A), `1` (creating), `2` (syncing), `3` (disconnected).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DcnStatus;

    /**
     * @var integer The number of DCN disaster recovery instances
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DcnDstNum;

    /**
     * @var integer Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery read-only instance), `4` (dedicated disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var boolean Whether the instance supports setting the connection limit, which is not supported for kernel version 10.1.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsMaxUserConnectionsSupported;

    /**
     * @var string The displayed database version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbVersionId;

    /**
     * @var integer Encryption status. Valid values: `0` (disabled), `1` (enabled).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EncryptStatus;

    /**
     * @var integer Type of dedicated cluster. Valid values: `0` (public cloud), `1` (finance cage), `2` (CDC cluster).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExclusterType;

    /**
     * @var integer Nearby VPC access
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RsAccessStrategy;

    /**
     * @var array Unclaimed network resource
     */
    public $ReservedNetResources;

    /**
     * @var boolean Whether physical replication is supported.
     */
    public $IsPhysicalReplicationSupported;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceId Instance ID, such as dcdbt-7oaxtcb7.
     * @param string $InstanceName Instance name
     * @param integer $Status Instance status. Valid values: `0` (creating), `1` (running task), `2` (running), `3` (uninitialized), `-1` (isolated).
     * @param string $StatusDesc Current status of the instance
     * @param string $Vip Instance private IP address
     * @param integer $Vport Private port of instance
     * @param integer $NodeCount Number of instance nodes. Valid values: `2` (1-source-1-replica), `3` (1-source-2-replica).
     * @param string $Region Instance region, such as ap-guangzhou.
     * @param string $VpcId Instance VPC ID, such as vpc-r9jr0de3.
     * @param string $SubnetId VPC subnet ID of an instance, such as subnet-6rqs61o2.
     * @param integer $WanStatus Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
     * @param string $WanDomain Domain name for public network access, which can be resolved by the public network.
     * @param string $WanVip Public IP address, which can be accessed over the public network.
     * @param integer $WanPort Public network access port
     * @param integer $ProjectId Project ID of the instance
     * @param integer $AutoRenewFlag Automatic renewal flag for an instance. Valid values: `0` (normal renewal), `1` (auto-renewal), `3` (no renewal upon expiration).
     * @param string $ExclusterId Dedicated cluster ID
     * @param string $PayMode Billing mode. Valid values: `prepaid` (monthly subscription), `postpaid` (pay-as-you-go).
     * @param string $CreateTime Creation time of the instance in the format of 2006-01-02 15:04:05
     * @param string $PeriodEndTime Expiration time of the instance in the format of 2006-01-02 15:04:05
     * @param string $DbVersion Database version information
     * @param integer $IsAuditSupported Whether the instance supports audit. Valid values: `1` (yes), `0` (no).
     * @param integer $IsEncryptSupported Whether data encryption is supported for an instance. Valid values: `1` (yes), `0` (no).
     * @param string $Machine Instance machine model
     * @param integer $Memory Instance memory size in GB, which is the sum of the memory of all shards.
     * @param integer $Storage Instance disk storage size in GB, which is the sum of the disk size of all shards.
     * @param float $StorageUsage Instance storage space utilization. It is calculated by dividing the sum of the used disk size of all shards by the total disk size of all shards.
     * @param integer $LogStorage Size of log storage space in GB
     * @param integer $Pid Product type ID
     * @param string $MasterZone Source AZ
     * @param array $SlaveZones Replica AZ
     * @param array $Shards Shard information
     * @param string $Vip6 Private network IPv6 address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Cpu Number of CPU cores of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Qps Instance QPS
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbEngine Database engine
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Ipv6Flag Whether IPv6 is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WanVipv6 Public IPv6 address, which can be accessed over the public network
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WanStatusIpv6 Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WanPortIpv6 Public network IPv6 port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ResourceTags Tag information
     * @param integer $DcnFlag DCN type. Valid values: `0` (N/A), `1` (source instance), `2` (disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DcnStatus DCN status. Valid values: `0` (N/A), `1` (creating), `2` (syncing), `3` (disconnected).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DcnDstNum The number of DCN disaster recovery instances
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceType Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery read-only instance), `4` (dedicated disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsMaxUserConnectionsSupported Whether the instance supports setting the connection limit, which is not supported for kernel version 10.1.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbVersionId The displayed database version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EncryptStatus Encryption status. Valid values: `0` (disabled), `1` (enabled).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExclusterType Type of dedicated cluster. Valid values: `0` (public cloud), `1` (finance cage), `2` (CDC cluster).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RsAccessStrategy Nearby VPC access
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ReservedNetResources Unclaimed network resource
     * @param boolean $IsPhysicalReplicationSupported Whether physical replication is supported.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ExclusterId",$param) and $param["ExclusterId"] !== null) {
            $this->ExclusterId = $param["ExclusterId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("IsAuditSupported",$param) and $param["IsAuditSupported"] !== null) {
            $this->IsAuditSupported = $param["IsAuditSupported"];
        }

        if (array_key_exists("IsEncryptSupported",$param) and $param["IsEncryptSupported"] !== null) {
            $this->IsEncryptSupported = $param["IsEncryptSupported"];
        }

        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("StorageUsage",$param) and $param["StorageUsage"] !== null) {
            $this->StorageUsage = $param["StorageUsage"];
        }

        if (array_key_exists("LogStorage",$param) and $param["LogStorage"] !== null) {
            $this->LogStorage = $param["LogStorage"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = $param["SlaveZones"];
        }

        if (array_key_exists("Shards",$param) and $param["Shards"] !== null) {
            $this->Shards = [];
            foreach ($param["Shards"] as $key => $value){
                $obj = new ShardBriefInfo();
                $obj->deserialize($value);
                array_push($this->Shards, $obj);
            }
        }

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("DbEngine",$param) and $param["DbEngine"] !== null) {
            $this->DbEngine = $param["DbEngine"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }

        if (array_key_exists("WanVipv6",$param) and $param["WanVipv6"] !== null) {
            $this->WanVipv6 = $param["WanVipv6"];
        }

        if (array_key_exists("WanStatusIpv6",$param) and $param["WanStatusIpv6"] !== null) {
            $this->WanStatusIpv6 = $param["WanStatusIpv6"];
        }

        if (array_key_exists("WanPortIpv6",$param) and $param["WanPortIpv6"] !== null) {
            $this->WanPortIpv6 = $param["WanPortIpv6"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
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

        if (array_key_exists("IsMaxUserConnectionsSupported",$param) and $param["IsMaxUserConnectionsSupported"] !== null) {
            $this->IsMaxUserConnectionsSupported = $param["IsMaxUserConnectionsSupported"];
        }

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }

        if (array_key_exists("EncryptStatus",$param) and $param["EncryptStatus"] !== null) {
            $this->EncryptStatus = $param["EncryptStatus"];
        }

        if (array_key_exists("ExclusterType",$param) and $param["ExclusterType"] !== null) {
            $this->ExclusterType = $param["ExclusterType"];
        }

        if (array_key_exists("RsAccessStrategy",$param) and $param["RsAccessStrategy"] !== null) {
            $this->RsAccessStrategy = $param["RsAccessStrategy"];
        }

        if (array_key_exists("ReservedNetResources",$param) and $param["ReservedNetResources"] !== null) {
            $this->ReservedNetResources = [];
            foreach ($param["ReservedNetResources"] as $key => $value){
                $obj = new ReservedNetResource();
                $obj->deserialize($value);
                array_push($this->ReservedNetResources, $obj);
            }
        }

        if (array_key_exists("IsPhysicalReplicationSupported",$param) and $param["IsPhysicalReplicationSupported"] !== null) {
            $this->IsPhysicalReplicationSupported = $param["IsPhysicalReplicationSupported"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
