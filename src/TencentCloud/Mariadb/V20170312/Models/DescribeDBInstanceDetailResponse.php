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
 * DescribeDBInstanceDetail response structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getStatus() Obtain Instance status
 * @method void setStatus(integer $Status) Set Instance status
 * @method string getStatusDesc() Obtain Current status of the instance
 * @method void setStatusDesc(string $StatusDesc) Set Current status of the instance
 * @method string getVip() Obtain Private IP address
 * @method void setVip(string $Vip) Set Private IP address
 * @method integer getVport() Obtain Private port
 * @method void setVport(integer $Vport) Set Private port
 * @method integer getIsTmp() Obtain Whether it is a temp instance. Valid values: `0` (no), non-zero value (yes).
 * @method void setIsTmp(integer $IsTmp) Set Whether it is a temp instance. Valid values: `0` (no), non-zero value (yes).
 * @method integer getNodeCount() Obtain Number of nodes. Valid values: `2` (1 primary-1 replica), `3` (1 primary-2 replicas).
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes. Valid values: `2` (1 primary-1 replica), `3` (1 primary-2 replicas).
 * @method string getRegion() Obtain Instance region name, such as ap-shanghai.
 * @method void setRegion(string $Region) Set Instance region name, such as ap-shanghai.
 * @method string getZone() Obtain Instance AZ name, such as ap-guangzhou-1.
 * @method void setZone(string $Zone) Set Instance AZ name, such as ap-guangzhou-1.
 * @method string getVpcId() Obtain VPC ID in string type
 * @method void setVpcId(string $VpcId) Set VPC ID in string type
 * @method string getSubnetId() Obtain VPC subnet ID in string type
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID in string type
 * @method integer getWanStatus() Obtain Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
 * @method void setWanStatus(integer $WanStatus) Set Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
 * @method string getWanDomain() Obtain Domain name for public network access, which can be resolved by the public network.
 * @method void setWanDomain(string $WanDomain) Set Domain name for public network access, which can be resolved by the public network.
 * @method string getWanVip() Obtain Public IP address, which can be accessed over the public network.
 * @method void setWanVip(string $WanVip) Set Public IP address, which can be accessed over the public network.
 * @method integer getWanPort() Obtain Public network port
 * @method void setWanPort(integer $WanPort) Set Public network port
 * @method integer getProjectId() Obtain Project ID of the instance
 * @method void setProjectId(integer $ProjectId) Set Project ID of the instance
 * @method string getTdsqlVersion() Obtain TDSQL version information
 * @method void setTdsqlVersion(string $TdsqlVersion) Set TDSQL version information
 * @method integer getMemory() Obtain Instance memory capacity in GB
 * @method void setMemory(integer $Memory) Set Instance memory capacity in GB
 * @method integer getStorage() Obtain Instance storage capacity in GB
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB
 * @method string getMasterZone() Obtain Primary AZ, such as ap-shanghai-1.
 * @method void setMasterZone(string $MasterZone) Set Primary AZ, such as ap-shanghai-1.
 * @method array getSlaveZones() Obtain List of replica AZs, such as ap-shanghai-2.
 * @method void setSlaveZones(array $SlaveZones) Set List of replica AZs, such as ap-shanghai-2.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. Valid values: `0` (no), `1` (yes).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. Valid values: `0` (no), `1` (yes).
 * @method string getExclusterId() Obtain Dedicated cluster ID, which is empty for a non-dedicated cluster instance.
 * @method void setExclusterId(string $ExclusterId) Set Dedicated cluster ID, which is empty for a non-dedicated cluster instance.
 * @method string getPayMode() Obtain Billing mode. Valid values: `prepaid` (monthly subscription), `postpaid` (pay-as-you-go).
 * @method void setPayMode(string $PayMode) Set Billing mode. Valid values: `prepaid` (monthly subscription), `postpaid` (pay-as-you-go).
 * @method string getCreateTime() Obtain Creation time of the instance in the format of 2006-01-02 15:04:05
 * @method void setCreateTime(string $CreateTime) Set Creation time of the instance in the format of 2006-01-02 15:04:05
 * @method boolean getIsAuditSupported() Obtain Whether the instance supports audit
 * @method void setIsAuditSupported(boolean $IsAuditSupported) Set Whether the instance supports audit
 * @method string getPeriodEndTime() Obtain Expiration time of the instance in the format of 2006-01-02 15:04:05
 * @method void setPeriodEndTime(string $PeriodEndTime) Set Expiration time of the instance in the format of 2006-01-02 15:04:05
 * @method string getMachine() Obtain Model information
 * @method void setMachine(string $Machine) Set Model information
 * @method string getStorageUsage() Obtain Storage space utilization
 * @method void setStorageUsage(string $StorageUsage) Set Storage space utilization
 * @method integer getLogStorage() Obtain Size of log storage space in GB
 * @method void setLogStorage(integer $LogStorage) Set Size of log storage space in GB
 * @method integer getIsEncryptSupported() Obtain Whether data encryption is supported. Valid values: `1` (yes), `0`: (no).
 * @method void setIsEncryptSupported(integer $IsEncryptSupported) Set Whether data encryption is supported. Valid values: `1` (yes), `0`: (no).
 * @method string getVip6() Obtain Private network IPv6 address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip6(string $Vip6) Set Private network IPv6 address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCpu() Obtain Number of CPU cores of an instance.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores of an instance.
 * @method integer getPid() Obtain Product type ID
 * @method void setPid(integer $Pid) Set Product type ID
 * @method integer getQps() Obtain Max QPS
 * @method void setQps(integer $Qps) Set Max QPS
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
 * @method string getDbEngine() Obtain Database engine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbEngine(string $DbEngine) Set Database engine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbVersion() Obtain Database version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbVersion(string $DbVersion) Set Database version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getResourceTags() Obtain Tag information
 * @method void setResourceTags(array $ResourceTags) Set Tag information
 * @method integer getDcnFlag() Obtain DCN type. Valid values: `0` (N/A), `1` (primary instance), `2` (disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDcnFlag(integer $DcnFlag) Set DCN type. Valid values: `0` (N/A), `1` (primary instance), `2` (disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDcnStatus() Obtain DCN status. Valid values: `0` (N/A), `1` (creating), `2` (syncing), `3` (disconnected)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDcnStatus(integer $DcnStatus) Set DCN status. Valid values: `0` (N/A), `1` (creating), `2` (syncing), `3` (disconnected)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDcnDstNum() Obtain Number of disaster recovery read-only instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDcnDstNum(integer $DcnDstNum) Set Number of disaster recovery read-only instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceType() Obtain Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery read-only instance), `4` (dedicated disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(integer $InstanceType) Set Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery read-only instance), `4` (dedicated disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNodesInfo() Obtain Instance node information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodesInfo(array $NodesInfo) Set Instance node information
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
 * @method DCNReplicaConfig getReplicaConfig() Obtain Configuration information of DCN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplicaConfig(DCNReplicaConfig $ReplicaConfig) Set Configuration information of DCN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DCNReplicaStatus getReplicaStatus() Obtain Running status of DCN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplicaStatus(DCNReplicaStatus $ReplicaStatus) Set Running status of DCN
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
class DescribeDBInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Instance status
     */
    public $Status;

    /**
     * @var string Current status of the instance
     */
    public $StatusDesc;

    /**
     * @var string Private IP address
     */
    public $Vip;

    /**
     * @var integer Private port
     */
    public $Vport;

    /**
     * @var integer Whether it is a temp instance. Valid values: `0` (no), non-zero value (yes).
     */
    public $IsTmp;

    /**
     * @var integer Number of nodes. Valid values: `2` (1 primary-1 replica), `3` (1 primary-2 replicas).
     */
    public $NodeCount;

    /**
     * @var string Instance region name, such as ap-shanghai.
     */
    public $Region;

    /**
     * @var string Instance AZ name, such as ap-guangzhou-1.
     */
    public $Zone;

    /**
     * @var string VPC ID in string type
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID in string type
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
     * @var integer Public network port
     */
    public $WanPort;

    /**
     * @var integer Project ID of the instance
     */
    public $ProjectId;

    /**
     * @var string TDSQL version information
     */
    public $TdsqlVersion;

    /**
     * @var integer Instance memory capacity in GB
     */
    public $Memory;

    /**
     * @var integer Instance storage capacity in GB
     */
    public $Storage;

    /**
     * @var string Primary AZ, such as ap-shanghai-1.
     */
    public $MasterZone;

    /**
     * @var array List of replica AZs, such as ap-shanghai-2.
     */
    public $SlaveZones;

    /**
     * @var integer Auto-renewal flag. Valid values: `0` (no), `1` (yes).
     */
    public $AutoRenewFlag;

    /**
     * @var string Dedicated cluster ID, which is empty for a non-dedicated cluster instance.
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
     * @var boolean Whether the instance supports audit
     */
    public $IsAuditSupported;

    /**
     * @var string Expiration time of the instance in the format of 2006-01-02 15:04:05
     */
    public $PeriodEndTime;

    /**
     * @var string Model information
     */
    public $Machine;

    /**
     * @var string Storage space utilization
     */
    public $StorageUsage;

    /**
     * @var integer Size of log storage space in GB
     */
    public $LogStorage;

    /**
     * @var integer Whether data encryption is supported. Valid values: `1` (yes), `0`: (no).
     */
    public $IsEncryptSupported;

    /**
     * @var string Private network IPv6 address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip6;

    /**
     * @var integer Number of CPU cores of an instance.
     */
    public $Cpu;

    /**
     * @var integer Product type ID
     */
    public $Pid;

    /**
     * @var integer Max QPS
     */
    public $Qps;

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
     * @var string Database engine
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbEngine;

    /**
     * @var string Database version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbVersion;

    /**
     * @var array Tag information
     */
    public $ResourceTags;

    /**
     * @var integer DCN type. Valid values: `0` (N/A), `1` (primary instance), `2` (disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DcnFlag;

    /**
     * @var integer DCN status. Valid values: `0` (N/A), `1` (creating), `2` (syncing), `3` (disconnected)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DcnStatus;

    /**
     * @var integer Number of disaster recovery read-only instances
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DcnDstNum;

    /**
     * @var integer Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery read-only instance), `4` (dedicated disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var array Instance node information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodesInfo;

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
     * @var DCNReplicaConfig Configuration information of DCN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReplicaConfig;

    /**
     * @var DCNReplicaStatus Running status of DCN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReplicaStatus;

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
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param integer $Status Instance status
     * @param string $StatusDesc Current status of the instance
     * @param string $Vip Private IP address
     * @param integer $Vport Private port
     * @param integer $IsTmp Whether it is a temp instance. Valid values: `0` (no), non-zero value (yes).
     * @param integer $NodeCount Number of nodes. Valid values: `2` (1 primary-1 replica), `3` (1 primary-2 replicas).
     * @param string $Region Instance region name, such as ap-shanghai.
     * @param string $Zone Instance AZ name, such as ap-guangzhou-1.
     * @param string $VpcId VPC ID in string type
     * @param string $SubnetId VPC subnet ID in string type
     * @param integer $WanStatus Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
     * @param string $WanDomain Domain name for public network access, which can be resolved by the public network.
     * @param string $WanVip Public IP address, which can be accessed over the public network.
     * @param integer $WanPort Public network port
     * @param integer $ProjectId Project ID of the instance
     * @param string $TdsqlVersion TDSQL version information
     * @param integer $Memory Instance memory capacity in GB
     * @param integer $Storage Instance storage capacity in GB
     * @param string $MasterZone Primary AZ, such as ap-shanghai-1.
     * @param array $SlaveZones List of replica AZs, such as ap-shanghai-2.
     * @param integer $AutoRenewFlag Auto-renewal flag. Valid values: `0` (no), `1` (yes).
     * @param string $ExclusterId Dedicated cluster ID, which is empty for a non-dedicated cluster instance.
     * @param string $PayMode Billing mode. Valid values: `prepaid` (monthly subscription), `postpaid` (pay-as-you-go).
     * @param string $CreateTime Creation time of the instance in the format of 2006-01-02 15:04:05
     * @param boolean $IsAuditSupported Whether the instance supports audit
     * @param string $PeriodEndTime Expiration time of the instance in the format of 2006-01-02 15:04:05
     * @param string $Machine Model information
     * @param string $StorageUsage Storage space utilization
     * @param integer $LogStorage Size of log storage space in GB
     * @param integer $IsEncryptSupported Whether data encryption is supported. Valid values: `1` (yes), `0`: (no).
     * @param string $Vip6 Private network IPv6 address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Cpu Number of CPU cores of an instance.
     * @param integer $Pid Product type ID
     * @param integer $Qps Max QPS
     * @param integer $Ipv6Flag Whether IPv6 is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WanVipv6 Public IPv6 address, which can be accessed over the public network
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WanStatusIpv6 Public network status. Valid values: `0` (not enabled), `1` (enabled), `2` (disabled), `3`: (enabling), `4` (disabling).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WanPortIpv6 Public network IPv6 port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbEngine Database engine
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbVersion Database version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ResourceTags Tag information
     * @param integer $DcnFlag DCN type. Valid values: `0` (N/A), `1` (primary instance), `2` (disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DcnStatus DCN status. Valid values: `0` (N/A), `1` (creating), `2` (syncing), `3` (disconnected)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DcnDstNum Number of disaster recovery read-only instances
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceType Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery read-only instance), `4` (dedicated disaster recovery read-only instance)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $NodesInfo Instance node information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsMaxUserConnectionsSupported Whether the instance supports setting the connection limit, which is not supported for kernel version 10.1.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbVersionId The displayed database version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EncryptStatus Encryption status. Valid values: `0` (disabled), `1` (enabled).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DCNReplicaConfig $ReplicaConfig Configuration information of DCN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DCNReplicaStatus $ReplicaStatus Running status of DCN
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

        if (array_key_exists("IsTmp",$param) and $param["IsTmp"] !== null) {
            $this->IsTmp = $param["IsTmp"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
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

        if (array_key_exists("TdsqlVersion",$param) and $param["TdsqlVersion"] !== null) {
            $this->TdsqlVersion = $param["TdsqlVersion"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = $param["SlaveZones"];
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

        if (array_key_exists("IsAuditSupported",$param) and $param["IsAuditSupported"] !== null) {
            $this->IsAuditSupported = $param["IsAuditSupported"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("StorageUsage",$param) and $param["StorageUsage"] !== null) {
            $this->StorageUsage = $param["StorageUsage"];
        }

        if (array_key_exists("LogStorage",$param) and $param["LogStorage"] !== null) {
            $this->LogStorage = $param["LogStorage"];
        }

        if (array_key_exists("IsEncryptSupported",$param) and $param["IsEncryptSupported"] !== null) {
            $this->IsEncryptSupported = $param["IsEncryptSupported"];
        }

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
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

        if (array_key_exists("DbEngine",$param) and $param["DbEngine"] !== null) {
            $this->DbEngine = $param["DbEngine"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
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

        if (array_key_exists("NodesInfo",$param) and $param["NodesInfo"] !== null) {
            $this->NodesInfo = [];
            foreach ($param["NodesInfo"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodesInfo, $obj);
            }
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

        if (array_key_exists("ReplicaConfig",$param) and $param["ReplicaConfig"] !== null) {
            $this->ReplicaConfig = new DCNReplicaConfig();
            $this->ReplicaConfig->deserialize($param["ReplicaConfig"]);
        }

        if (array_key_exists("ReplicaStatus",$param) and $param["ReplicaStatus"] !== null) {
            $this->ReplicaStatus = new DCNReplicaStatus();
            $this->ReplicaStatus->deserialize($param["ReplicaStatus"]);
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
