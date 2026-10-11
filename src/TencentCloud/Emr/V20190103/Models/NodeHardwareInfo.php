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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node hardware information.
 *
 * @method integer getAppId() Obtain <p>User APPID.</p>
 * @method void setAppId(integer $AppId) Set <p>User APPID.</p>
 * @method string getSerialNo() Obtain <p>Serial number.</p>
 * @method void setSerialNo(string $SerialNo) Set <p>Serial number.</p>
 * @method string getOrderNo() Obtain <p>Machine instance ID.</p>
 * @method void setOrderNo(string $OrderNo) Set <p>Machine instance ID.</p>
 * @method string getWanIp() Obtain <p>Public IP address bound to the Master node.</p>
 * @method void setWanIp(string $WanIp) Set <p>Public IP address bound to the Master node.</p>
 * @method integer getFlag() Obtain <p>Node type. Valid values: 0 (Common node), 1 (Master node)<br>2 (Core node) and 3 (Task node).</p>
 * @method void setFlag(integer $Flag) Set <p>Node type. Valid values: 0 (Common node), 1 (Master node)<br>2 (Core node) and 3 (Task node).</p>
 * @method string getSpec() Obtain <p>Node specifications.</p>
 * @method void setSpec(string $Spec) Set <p>Node specifications.</p>
 * @method integer getCpuNum() Obtain <p>Number of node cores.</p>
 * @method void setCpuNum(integer $CpuNum) Set <p>Number of node cores.</p>
 * @method integer getMemSize() Obtain <p>Node memory (bytes).</p>
 * @method void setMemSize(integer $MemSize) Set <p>Node memory (bytes).</p>
 * @method string getMemDesc() Obtain <p>Node memory description (GB).</p>
 * @method void setMemDesc(string $MemDesc) Set <p>Node memory description (GB).</p>
 * @method integer getRegionId() Obtain <p>Region where the node is located.</p>
 * @method void setRegionId(integer $RegionId) Set <p>Region where the node is located.</p>
 * @method integer getZoneId() Obtain <p>Zone where the node is located.</p>
 * @method void setZoneId(integer $ZoneId) Set <p>Zone where the node is located.</p>
 * @method string getApplyTime() Obtain <p>Application time.</p>
 * @method void setApplyTime(string $ApplyTime) Set <p>Application time.</p>
 * @method string getFreeTime() Obtain <p>Release time.</p>
 * @method void setFreeTime(string $FreeTime) Set <p>Release time.</p>
 * @method string getDiskSize() Obtain <p>Hard disk size.</p>
 * @method void setDiskSize(string $DiskSize) Set <p>Hard disk size.</p>
 * @method string getNameTag() Obtain <p>Node description.</p>
 * @method void setNameTag(string $NameTag) Set <p>Node description.</p>
 * @method string getServices() Obtain <p>Services deployed on the node.</p>
 * @method void setServices(string $Services) Set <p>Services deployed on the node.</p>
 * @method integer getStorageType() Obtain <p>Disk type. Valid values: 1 (Local Basic Disk), 2 (Cloud Basic Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Disk), 6 (Enhanced SSD), 11 (Throughput-Optimized Cloud Disk), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High-IO Cloud Disk), and 16 (Remote SSD Disk).</p>
 * @method void setStorageType(integer $StorageType) Set <p>Disk type. Valid values: 1 (Local Basic Disk), 2 (Cloud Basic Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Disk), 6 (Enhanced SSD), 11 (Throughput-Optimized Cloud Disk), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High-IO Cloud Disk), and 16 (Remote SSD Disk).</p>
 * @method integer getRootSize() Obtain <p>System disk size (GB).</p>
 * @method void setRootSize(integer $RootSize) Set <p>System disk size (GB).</p>
 * @method integer getChargeType() Obtain <p>Payment type. Valid values: 0 (pay-as-you-go) and 1 (yearly/monthly subscription).</p>
 * @method void setChargeType(integer $ChargeType) Set <p>Payment type. Valid values: 0 (pay-as-you-go) and 1 (yearly/monthly subscription).</p>
 * @method string getCdbIp() Obtain <p>Database IP address.</p>
 * @method void setCdbIp(string $CdbIp) Set <p>Database IP address.</p>
 * @method integer getCdbPort() Obtain <p>Database port.</p>
 * @method void setCdbPort(integer $CdbPort) Set <p>Database port.</p>
 * @method integer getHwDiskSize() Obtain <p>Hard disk capacity (bytes).</p>
 * @method void setHwDiskSize(integer $HwDiskSize) Set <p>Hard disk capacity (bytes).</p>
 * @method string getHwDiskSizeDesc() Obtain <p>Hard disk capacity description.</p>
 * @method void setHwDiskSizeDesc(string $HwDiskSizeDesc) Set <p>Hard disk capacity description.</p>
 * @method integer getHwMemSize() Obtain <p>Memory capacity (bytes).</p>
 * @method void setHwMemSize(integer $HwMemSize) Set <p>Memory capacity (bytes).</p>
 * @method string getHwMemSizeDesc() Obtain <p>Memory capacity description.</p>
 * @method void setHwMemSizeDesc(string $HwMemSizeDesc) Set <p>Memory capacity description.</p>
 * @method string getExpireTime() Obtain <p>Expiration time.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Expiration time.</p>
 * @method string getEmrResourceId() Obtain <p>Node resource ID.</p>
 * @method void setEmrResourceId(string $EmrResourceId) Set <p>Node resource ID.</p>
 * @method integer getIsAutoRenew() Obtain <p>Renewal flag.</p>
 * @method void setIsAutoRenew(integer $IsAutoRenew) Set <p>Renewal flag.</p>
 * @method string getDeviceClass() Obtain <p>Device identifier.</p>
 * @method void setDeviceClass(string $DeviceClass) Set <p>Device identifier.</p>
 * @method integer getMutable() Obtain <p>Supports configuration change.</p>
 * @method void setMutable(integer $Mutable) Set <p>Supports configuration change.</p>
 * @method array getMCMultiDisk() Obtain <p>Multi-cloud disk.</p>
 * @method void setMCMultiDisk(array $MCMultiDisk) Set <p>Multi-cloud disk.</p>
 * @method CdbInfo getCdbNodeInfo() Obtain <p>Database information.</p>
 * @method void setCdbNodeInfo(CdbInfo $CdbNodeInfo) Set <p>Database information.</p>
 * @method string getIp() Obtain <p>Private IP address.</p>
 * @method void setIp(string $Ip) Set <p>Private IP address.</p>
 * @method integer getDestroyable() Obtain <p>Whether this node can be terminated. Valid values: 1 (yes) and 0 (no).</p>
 * @method void setDestroyable(integer $Destroyable) Set <p>Whether this node can be terminated. Valid values: 1 (yes) and 0 (no).</p>
 * @method array getTags() Obtain <p>Tag bound to the node.</p>
 * @method void setTags(array $Tags) Set <p>Tag bound to the node.</p>
 * @method integer getAutoFlag() Obtain <p>Whether it is an auto scaling node. Valid values: 0 (regular node) and 1 (auto scaling node).</p>
 * @method void setAutoFlag(integer $AutoFlag) Set <p>Whether it is an auto scaling node. Valid values: 0 (regular node) and 1 (auto scaling node).</p>
 * @method string getHardwareResourceType() Obtain <p>Resource type. Valid values: host and pod.</p>
 * @method void setHardwareResourceType(string $HardwareResourceType) Set <p>Resource type. Valid values: host and pod.</p>
 * @method integer getIsDynamicSpec() Obtain <p>Whether it is a floating specification. Valid values: 1 (yes) and 0 (no).</p>
 * @method void setIsDynamicSpec(integer $IsDynamicSpec) Set <p>Whether it is a floating specification. Valid values: 1 (yes) and 0 (no).</p>
 * @method string getDynamicPodSpec() Obtain <p>JSON string of the floating specification value.</p>
 * @method void setDynamicPodSpec(string $DynamicPodSpec) Set <p>JSON string of the floating specification value.</p>
 * @method integer getSupportModifyPayMode() Obtain <p>Whether changing the billing mode is supported. Valid values: 1 (yes) and 0 (no).</p>
 * @method void setSupportModifyPayMode(integer $SupportModifyPayMode) Set <p>Whether changing the billing mode is supported. Valid values: 1 (yes) and 0 (no).</p>
 * @method integer getRootStorageType() Obtain <p>System disk type. Valid values: 1 (Local Basic Disk), 2 (Cloud Basic Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Disk), 6 (Enhanced SSD), 11 (Throughput-Optimized Cloud Disk), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High-IO Cloud Disk), and 16 (Remote SSD Disk).</p>
 * @method void setRootStorageType(integer $RootStorageType) Set <p>System disk type. Valid values: 1 (Local Basic Disk), 2 (Cloud Basic Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Disk), 6 (Enhanced SSD), 11 (Throughput-Optimized Cloud Disk), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High-IO Cloud Disk), and 16 (Remote SSD Disk).</p>
 * @method string getZone() Obtain <p>AZ information.</p>
 * @method void setZone(string $Zone) Set <p>AZ information.</p>
 * @method SubnetInfo getSubnetInfo() Obtain <p>Subnet.</p>
 * @method void setSubnetInfo(SubnetInfo $SubnetInfo) Set <p>Subnet.</p>
 * @method string getClients() Obtain <p>Client.</p>
 * @method void setClients(string $Clients) Set <p>Client.</p>
 * @method string getCurrentTime() Obtain <p>Current system time.</p>
 * @method void setCurrentTime(string $CurrentTime) Set <p>Current system time.</p>
 * @method integer getIsFederation() Obtain <p>Whether it is used for federation. Valid values: 1 (yes) and 0 (no).</p>
 * @method void setIsFederation(integer $IsFederation) Set <p>Whether it is used for federation. Valid values: 1 (yes) and 0 (no).</p>
 * @method string getDeviceName() Obtain <p>Device name.</p>
 * @method void setDeviceName(string $DeviceName) Set <p>Device name.</p>
 * @method string getServiceClient() Obtain <p>Service.</p>
 * @method void setServiceClient(string $ServiceClient) Set <p>Service.</p>
 * @method boolean getDisableApiTermination() Obtain <p>Whether instance protection is enabled for this instance. Valid values: true (enabled) and false (disabled).</p>
 * @method void setDisableApiTermination(boolean $DisableApiTermination) Set <p>Whether instance protection is enabled for this instance. Valid values: true (enabled) and false (disabled).</p>
 * @method integer getTradeVersion() Obtain <p>0 indicates the old billing mode, and 1 indicates the new billing mode.</p>
 * @method void setTradeVersion(integer $TradeVersion) Set <p>0 indicates the old billing mode, and 1 indicates the new billing mode.</p>
 * @method string getServicesStatus() Obtain <p>Status of each component. ZooKeeper: STARTED; ResourceManager: STARTED. STARTED means started, and STOPPED means stopped.</p>
 * @method void setServicesStatus(string $ServicesStatus) Set <p>Status of each component. ZooKeeper: STARTED; ResourceManager: STARTED. STARTED means started, and STOPPED means stopped.</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getSharedClusterId() Obtain <p>Shared cluster ID.</p>
 * @method void setSharedClusterId(string $SharedClusterId) Set <p>Shared cluster ID.</p>
 * @method string getSharedClusterIdDesc() Obtain <p>Description of the shared cluster ID.</p>
 * @method void setSharedClusterIdDesc(string $SharedClusterIdDesc) Set <p>Description of the shared cluster ID.</p>
 * @method boolean getTimingResource() Obtain <p>Whether it is a scheduled termination resource.</p>
 * @method void setTimingResource(boolean $TimingResource) Set <p>Whether it is a scheduled termination resource.</p>
 * @method string getTkeClusterId() Obtain <p>TKE cluster ID when the resource type (HardwareResourceType) is pod.</p>
 * @method void setTkeClusterId(string $TkeClusterId) Set <p>TKE cluster ID when the resource type (HardwareResourceType) is pod.</p>
 * @method array getConfigurableServices() Obtain <p>Name list of services that can be configured when a new disk is mounted.</p>
 * @method void setConfigurableServices(array $ConfigurableServices) Set <p>Name list of services that can be configured when a new disk is mounted.</p>
 * @method string getNodeMark() Obtain <p>Node annotation information, which is currently only provided for the Terraform platform.</p>
 * @method void setNodeMark(string $NodeMark) Set <p>Node annotation information, which is currently only provided for the Terraform platform.</p>
 * @method boolean getUnderwriteSetAutoRenew() Obtain <p>Whether the committed use resource supports setting auto-renewal.</p>
 * @method void setUnderwriteSetAutoRenew(boolean $UnderwriteSetAutoRenew) Set <p>Whether the committed use resource supports setting auto-renewal.</p>
 * @method string getGpuDesc() Obtain <p>GPU information.</p>
 * @method void setGpuDesc(string $GpuDesc) Set <p>GPU information.</p>
 * @method array getDiskHealthIssues() Obtain <p>Disk issue description.</p>
 * @method void setDiskHealthIssues(array $DiskHealthIssues) Set <p>Disk issue description.</p>
 * @method string getNodeGroupId() Obtain <p>ID of the node group where the node resides.</p>
 * @method void setNodeGroupId(string $NodeGroupId) Set <p>ID of the node group where the node resides.</p>
 * @method string getNodeGroupName() Obtain <p>Name of the node group where the node resides.</p>
 * @method void setNodeGroupName(string $NodeGroupName) Set <p>Name of the node group where the node resides.</p>
 */
class NodeHardwareInfo extends AbstractModel
{
    /**
     * @var integer <p>User APPID.</p>
     */
    public $AppId;

    /**
     * @var string <p>Serial number.</p>
     */
    public $SerialNo;

    /**
     * @var string <p>Machine instance ID.</p>
     */
    public $OrderNo;

    /**
     * @var string <p>Public IP address bound to the Master node.</p>
     */
    public $WanIp;

    /**
     * @var integer <p>Node type. Valid values: 0 (Common node), 1 (Master node)<br>2 (Core node) and 3 (Task node).</p>
     */
    public $Flag;

    /**
     * @var string <p>Node specifications.</p>
     */
    public $Spec;

    /**
     * @var integer <p>Number of node cores.</p>
     */
    public $CpuNum;

    /**
     * @var integer <p>Node memory (bytes).</p>
     */
    public $MemSize;

    /**
     * @var string <p>Node memory description (GB).</p>
     */
    public $MemDesc;

    /**
     * @var integer <p>Region where the node is located.</p>
     */
    public $RegionId;

    /**
     * @var integer <p>Zone where the node is located.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Application time.</p>
     */
    public $ApplyTime;

    /**
     * @var string <p>Release time.</p>
     */
    public $FreeTime;

    /**
     * @var string <p>Hard disk size.</p>
     */
    public $DiskSize;

    /**
     * @var string <p>Node description.</p>
     */
    public $NameTag;

    /**
     * @var string <p>Services deployed on the node.</p>
     */
    public $Services;

    /**
     * @var integer <p>Disk type. Valid values: 1 (Local Basic Disk), 2 (Cloud Basic Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Disk), 6 (Enhanced SSD), 11 (Throughput-Optimized Cloud Disk), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High-IO Cloud Disk), and 16 (Remote SSD Disk).</p>
     */
    public $StorageType;

    /**
     * @var integer <p>System disk size (GB).</p>
     */
    public $RootSize;

    /**
     * @var integer <p>Payment type. Valid values: 0 (pay-as-you-go) and 1 (yearly/monthly subscription).</p>
     */
    public $ChargeType;

    /**
     * @var string <p>Database IP address.</p>
     */
    public $CdbIp;

    /**
     * @var integer <p>Database port.</p>
     */
    public $CdbPort;

    /**
     * @var integer <p>Hard disk capacity (bytes).</p>
     */
    public $HwDiskSize;

    /**
     * @var string <p>Hard disk capacity description.</p>
     */
    public $HwDiskSizeDesc;

    /**
     * @var integer <p>Memory capacity (bytes).</p>
     */
    public $HwMemSize;

    /**
     * @var string <p>Memory capacity description.</p>
     */
    public $HwMemSizeDesc;

    /**
     * @var string <p>Expiration time.</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>Node resource ID.</p>
     */
    public $EmrResourceId;

    /**
     * @var integer <p>Renewal flag.</p>
     */
    public $IsAutoRenew;

    /**
     * @var string <p>Device identifier.</p>
     */
    public $DeviceClass;

    /**
     * @var integer <p>Supports configuration change.</p>
     */
    public $Mutable;

    /**
     * @var array <p>Multi-cloud disk.</p>
     */
    public $MCMultiDisk;

    /**
     * @var CdbInfo <p>Database information.</p>
     */
    public $CdbNodeInfo;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $Ip;

    /**
     * @var integer <p>Whether this node can be terminated. Valid values: 1 (yes) and 0 (no).</p>
     */
    public $Destroyable;

    /**
     * @var array <p>Tag bound to the node.</p>
     */
    public $Tags;

    /**
     * @var integer <p>Whether it is an auto scaling node. Valid values: 0 (regular node) and 1 (auto scaling node).</p>
     */
    public $AutoFlag;

    /**
     * @var string <p>Resource type. Valid values: host and pod.</p>
     */
    public $HardwareResourceType;

    /**
     * @var integer <p>Whether it is a floating specification. Valid values: 1 (yes) and 0 (no).</p>
     */
    public $IsDynamicSpec;

    /**
     * @var string <p>JSON string of the floating specification value.</p>
     */
    public $DynamicPodSpec;

    /**
     * @var integer <p>Whether changing the billing mode is supported. Valid values: 1 (yes) and 0 (no).</p>
     */
    public $SupportModifyPayMode;

    /**
     * @var integer <p>System disk type. Valid values: 1 (Local Basic Disk), 2 (Cloud Basic Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Disk), 6 (Enhanced SSD), 11 (Throughput-Optimized Cloud Disk), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High-IO Cloud Disk), and 16 (Remote SSD Disk).</p>
     */
    public $RootStorageType;

    /**
     * @var string <p>AZ information.</p>
     */
    public $Zone;

    /**
     * @var SubnetInfo <p>Subnet.</p>
     */
    public $SubnetInfo;

    /**
     * @var string <p>Client.</p>
     */
    public $Clients;

    /**
     * @var string <p>Current system time.</p>
     */
    public $CurrentTime;

    /**
     * @var integer <p>Whether it is used for federation. Valid values: 1 (yes) and 0 (no).</p>
     */
    public $IsFederation;

    /**
     * @var string <p>Device name.</p>
     */
    public $DeviceName;

    /**
     * @var string <p>Service.</p>
     */
    public $ServiceClient;

    /**
     * @var boolean <p>Whether instance protection is enabled for this instance. Valid values: true (enabled) and false (disabled).</p>
     */
    public $DisableApiTermination;

    /**
     * @var integer <p>0 indicates the old billing mode, and 1 indicates the new billing mode.</p>
     */
    public $TradeVersion;

    /**
     * @var string <p>Status of each component. ZooKeeper: STARTED; ResourceManager: STARTED. STARTED means started, and STOPPED means stopped.</p>
     */
    public $ServicesStatus;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var string <p>Shared cluster ID.</p>
     */
    public $SharedClusterId;

    /**
     * @var string <p>Description of the shared cluster ID.</p>
     */
    public $SharedClusterIdDesc;

    /**
     * @var boolean <p>Whether it is a scheduled termination resource.</p>
     */
    public $TimingResource;

    /**
     * @var string <p>TKE cluster ID when the resource type (HardwareResourceType) is pod.</p>
     */
    public $TkeClusterId;

    /**
     * @var array <p>Name list of services that can be configured when a new disk is mounted.</p>
     */
    public $ConfigurableServices;

    /**
     * @var string <p>Node annotation information, which is currently only provided for the Terraform platform.</p>
     */
    public $NodeMark;

    /**
     * @var boolean <p>Whether the committed use resource supports setting auto-renewal.</p>
     */
    public $UnderwriteSetAutoRenew;

    /**
     * @var string <p>GPU information.</p>
     */
    public $GpuDesc;

    /**
     * @var array <p>Disk issue description.</p>
     */
    public $DiskHealthIssues;

    /**
     * @var string <p>ID of the node group where the node resides.</p>
     */
    public $NodeGroupId;

    /**
     * @var string <p>Name of the node group where the node resides.</p>
     */
    public $NodeGroupName;

    /**
     * @param integer $AppId <p>User APPID.</p>
     * @param string $SerialNo <p>Serial number.</p>
     * @param string $OrderNo <p>Machine instance ID.</p>
     * @param string $WanIp <p>Public IP address bound to the Master node.</p>
     * @param integer $Flag <p>Node type. Valid values: 0 (Common node), 1 (Master node)<br>2 (Core node) and 3 (Task node).</p>
     * @param string $Spec <p>Node specifications.</p>
     * @param integer $CpuNum <p>Number of node cores.</p>
     * @param integer $MemSize <p>Node memory (bytes).</p>
     * @param string $MemDesc <p>Node memory description (GB).</p>
     * @param integer $RegionId <p>Region where the node is located.</p>
     * @param integer $ZoneId <p>Zone where the node is located.</p>
     * @param string $ApplyTime <p>Application time.</p>
     * @param string $FreeTime <p>Release time.</p>
     * @param string $DiskSize <p>Hard disk size.</p>
     * @param string $NameTag <p>Node description.</p>
     * @param string $Services <p>Services deployed on the node.</p>
     * @param integer $StorageType <p>Disk type. Valid values: 1 (Local Basic Disk), 2 (Cloud Basic Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Disk), 6 (Enhanced SSD), 11 (Throughput-Optimized Cloud Disk), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High-IO Cloud Disk), and 16 (Remote SSD Disk).</p>
     * @param integer $RootSize <p>System disk size (GB).</p>
     * @param integer $ChargeType <p>Payment type. Valid values: 0 (pay-as-you-go) and 1 (yearly/monthly subscription).</p>
     * @param string $CdbIp <p>Database IP address.</p>
     * @param integer $CdbPort <p>Database port.</p>
     * @param integer $HwDiskSize <p>Hard disk capacity (bytes).</p>
     * @param string $HwDiskSizeDesc <p>Hard disk capacity description.</p>
     * @param integer $HwMemSize <p>Memory capacity (bytes).</p>
     * @param string $HwMemSizeDesc <p>Memory capacity description.</p>
     * @param string $ExpireTime <p>Expiration time.</p>
     * @param string $EmrResourceId <p>Node resource ID.</p>
     * @param integer $IsAutoRenew <p>Renewal flag.</p>
     * @param string $DeviceClass <p>Device identifier.</p>
     * @param integer $Mutable <p>Supports configuration change.</p>
     * @param array $MCMultiDisk <p>Multi-cloud disk.</p>
     * @param CdbInfo $CdbNodeInfo <p>Database information.</p>
     * @param string $Ip <p>Private IP address.</p>
     * @param integer $Destroyable <p>Whether this node can be terminated. Valid values: 1 (yes) and 0 (no).</p>
     * @param array $Tags <p>Tag bound to the node.</p>
     * @param integer $AutoFlag <p>Whether it is an auto scaling node. Valid values: 0 (regular node) and 1 (auto scaling node).</p>
     * @param string $HardwareResourceType <p>Resource type. Valid values: host and pod.</p>
     * @param integer $IsDynamicSpec <p>Whether it is a floating specification. Valid values: 1 (yes) and 0 (no).</p>
     * @param string $DynamicPodSpec <p>JSON string of the floating specification value.</p>
     * @param integer $SupportModifyPayMode <p>Whether changing the billing mode is supported. Valid values: 1 (yes) and 0 (no).</p>
     * @param integer $RootStorageType <p>System disk type. Valid values: 1 (Local Basic Disk), 2 (Cloud Basic Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Disk), 6 (Enhanced SSD), 11 (Throughput-Optimized Cloud Disk), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High-IO Cloud Disk), and 16 (Remote SSD Disk).</p>
     * @param string $Zone <p>AZ information.</p>
     * @param SubnetInfo $SubnetInfo <p>Subnet.</p>
     * @param string $Clients <p>Client.</p>
     * @param string $CurrentTime <p>Current system time.</p>
     * @param integer $IsFederation <p>Whether it is used for federation. Valid values: 1 (yes) and 0 (no).</p>
     * @param string $DeviceName <p>Device name.</p>
     * @param string $ServiceClient <p>Service.</p>
     * @param boolean $DisableApiTermination <p>Whether instance protection is enabled for this instance. Valid values: true (enabled) and false (disabled).</p>
     * @param integer $TradeVersion <p>0 indicates the old billing mode, and 1 indicates the new billing mode.</p>
     * @param string $ServicesStatus <p>Status of each component. ZooKeeper: STARTED; ResourceManager: STARTED. STARTED means started, and STOPPED means stopped.</p>
     * @param string $Remark <p>Remarks.</p>
     * @param string $SharedClusterId <p>Shared cluster ID.</p>
     * @param string $SharedClusterIdDesc <p>Description of the shared cluster ID.</p>
     * @param boolean $TimingResource <p>Whether it is a scheduled termination resource.</p>
     * @param string $TkeClusterId <p>TKE cluster ID when the resource type (HardwareResourceType) is pod.</p>
     * @param array $ConfigurableServices <p>Name list of services that can be configured when a new disk is mounted.</p>
     * @param string $NodeMark <p>Node annotation information, which is currently only provided for the Terraform platform.</p>
     * @param boolean $UnderwriteSetAutoRenew <p>Whether the committed use resource supports setting auto-renewal.</p>
     * @param string $GpuDesc <p>GPU information.</p>
     * @param array $DiskHealthIssues <p>Disk issue description.</p>
     * @param string $NodeGroupId <p>ID of the node group where the node resides.</p>
     * @param string $NodeGroupName <p>Name of the node group where the node resides.</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemDesc",$param) and $param["MemDesc"] !== null) {
            $this->MemDesc = $param["MemDesc"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("FreeTime",$param) and $param["FreeTime"] !== null) {
            $this->FreeTime = $param["FreeTime"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NameTag",$param) and $param["NameTag"] !== null) {
            $this->NameTag = $param["NameTag"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("RootSize",$param) and $param["RootSize"] !== null) {
            $this->RootSize = $param["RootSize"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("CdbIp",$param) and $param["CdbIp"] !== null) {
            $this->CdbIp = $param["CdbIp"];
        }

        if (array_key_exists("CdbPort",$param) and $param["CdbPort"] !== null) {
            $this->CdbPort = $param["CdbPort"];
        }

        if (array_key_exists("HwDiskSize",$param) and $param["HwDiskSize"] !== null) {
            $this->HwDiskSize = $param["HwDiskSize"];
        }

        if (array_key_exists("HwDiskSizeDesc",$param) and $param["HwDiskSizeDesc"] !== null) {
            $this->HwDiskSizeDesc = $param["HwDiskSizeDesc"];
        }

        if (array_key_exists("HwMemSize",$param) and $param["HwMemSize"] !== null) {
            $this->HwMemSize = $param["HwMemSize"];
        }

        if (array_key_exists("HwMemSizeDesc",$param) and $param["HwMemSizeDesc"] !== null) {
            $this->HwMemSizeDesc = $param["HwMemSizeDesc"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("EmrResourceId",$param) and $param["EmrResourceId"] !== null) {
            $this->EmrResourceId = $param["EmrResourceId"];
        }

        if (array_key_exists("IsAutoRenew",$param) and $param["IsAutoRenew"] !== null) {
            $this->IsAutoRenew = $param["IsAutoRenew"];
        }

        if (array_key_exists("DeviceClass",$param) and $param["DeviceClass"] !== null) {
            $this->DeviceClass = $param["DeviceClass"];
        }

        if (array_key_exists("Mutable",$param) and $param["Mutable"] !== null) {
            $this->Mutable = $param["Mutable"];
        }

        if (array_key_exists("MCMultiDisk",$param) and $param["MCMultiDisk"] !== null) {
            $this->MCMultiDisk = [];
            foreach ($param["MCMultiDisk"] as $key => $value){
                $obj = new MultiDiskMC();
                $obj->deserialize($value);
                array_push($this->MCMultiDisk, $obj);
            }
        }

        if (array_key_exists("CdbNodeInfo",$param) and $param["CdbNodeInfo"] !== null) {
            $this->CdbNodeInfo = new CdbInfo();
            $this->CdbNodeInfo->deserialize($param["CdbNodeInfo"]);
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Destroyable",$param) and $param["Destroyable"] !== null) {
            $this->Destroyable = $param["Destroyable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoFlag",$param) and $param["AutoFlag"] !== null) {
            $this->AutoFlag = $param["AutoFlag"];
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }

        if (array_key_exists("IsDynamicSpec",$param) and $param["IsDynamicSpec"] !== null) {
            $this->IsDynamicSpec = $param["IsDynamicSpec"];
        }

        if (array_key_exists("DynamicPodSpec",$param) and $param["DynamicPodSpec"] !== null) {
            $this->DynamicPodSpec = $param["DynamicPodSpec"];
        }

        if (array_key_exists("SupportModifyPayMode",$param) and $param["SupportModifyPayMode"] !== null) {
            $this->SupportModifyPayMode = $param["SupportModifyPayMode"];
        }

        if (array_key_exists("RootStorageType",$param) and $param["RootStorageType"] !== null) {
            $this->RootStorageType = $param["RootStorageType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetInfo",$param) and $param["SubnetInfo"] !== null) {
            $this->SubnetInfo = new SubnetInfo();
            $this->SubnetInfo->deserialize($param["SubnetInfo"]);
        }

        if (array_key_exists("Clients",$param) and $param["Clients"] !== null) {
            $this->Clients = $param["Clients"];
        }

        if (array_key_exists("CurrentTime",$param) and $param["CurrentTime"] !== null) {
            $this->CurrentTime = $param["CurrentTime"];
        }

        if (array_key_exists("IsFederation",$param) and $param["IsFederation"] !== null) {
            $this->IsFederation = $param["IsFederation"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ServiceClient",$param) and $param["ServiceClient"] !== null) {
            $this->ServiceClient = $param["ServiceClient"];
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }

        if (array_key_exists("TradeVersion",$param) and $param["TradeVersion"] !== null) {
            $this->TradeVersion = $param["TradeVersion"];
        }

        if (array_key_exists("ServicesStatus",$param) and $param["ServicesStatus"] !== null) {
            $this->ServicesStatus = $param["ServicesStatus"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SharedClusterId",$param) and $param["SharedClusterId"] !== null) {
            $this->SharedClusterId = $param["SharedClusterId"];
        }

        if (array_key_exists("SharedClusterIdDesc",$param) and $param["SharedClusterIdDesc"] !== null) {
            $this->SharedClusterIdDesc = $param["SharedClusterIdDesc"];
        }

        if (array_key_exists("TimingResource",$param) and $param["TimingResource"] !== null) {
            $this->TimingResource = $param["TimingResource"];
        }

        if (array_key_exists("TkeClusterId",$param) and $param["TkeClusterId"] !== null) {
            $this->TkeClusterId = $param["TkeClusterId"];
        }

        if (array_key_exists("ConfigurableServices",$param) and $param["ConfigurableServices"] !== null) {
            $this->ConfigurableServices = $param["ConfigurableServices"];
        }

        if (array_key_exists("NodeMark",$param) and $param["NodeMark"] !== null) {
            $this->NodeMark = $param["NodeMark"];
        }

        if (array_key_exists("UnderwriteSetAutoRenew",$param) and $param["UnderwriteSetAutoRenew"] !== null) {
            $this->UnderwriteSetAutoRenew = $param["UnderwriteSetAutoRenew"];
        }

        if (array_key_exists("GpuDesc",$param) and $param["GpuDesc"] !== null) {
            $this->GpuDesc = $param["GpuDesc"];
        }

        if (array_key_exists("DiskHealthIssues",$param) and $param["DiskHealthIssues"] !== null) {
            $this->DiskHealthIssues = [];
            foreach ($param["DiskHealthIssues"] as $key => $value){
                $obj = new DiskHealthIssue();
                $obj->deserialize($value);
                array_push($this->DiskHealthIssues, $obj);
            }
        }

        if (array_key_exists("NodeGroupId",$param) and $param["NodeGroupId"] !== null) {
            $this->NodeGroupId = $param["NodeGroupId"];
        }

        if (array_key_exists("NodeGroupName",$param) and $param["NodeGroupName"] !== null) {
            $this->NodeGroupName = $param["NodeGroupName"];
        }
    }
}
