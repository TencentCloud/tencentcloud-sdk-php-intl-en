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
 * Node hardware information
 *
 * @method integer getAppId() Obtain User AppID.
 * @method void setAppId(integer $AppId) Set User AppID.
 * @method string getSerialNo() Obtain Serial number.
 * @method void setSerialNo(string $SerialNo) Set Serial number.
 * @method string getOrderNo() Obtain Machine instance ID.
 * @method void setOrderNo(string $OrderNo) Set Machine instance ID.
 * @method string getWanIp() Obtain Public network IP address bound for the Master node.
 * @method void setWanIp(string $WanIp) Set Public network IP address bound for the Master node.
 * @method integer getFlag() Obtain Node type. 0: Common node; 1: Master node.
 2: Core node; 3: Task node.
 * @method void setFlag(integer $Flag) Set Node type. 0: Common node; 1: Master node.
 2: Core node; 3: Task node.
 * @method string getSpec() Obtain Node specifications.
 * @method void setSpec(string $Spec) Set Node specifications.
 * @method integer getCpuNum() Obtain Number of node cores.
 * @method void setCpuNum(integer $CpuNum) Set Number of node cores.
 * @method integer getMemSize() Obtain Node memory (bytes).
 * @method void setMemSize(integer $MemSize) Set Node memory (bytes).
 * @method string getMemDesc() Obtain Node memory (GB).
 * @method void setMemDesc(string $MemDesc) Set Node memory (GB).
 * @method integer getRegionId() Obtain The region where the node is located.
 * @method void setRegionId(integer $RegionId) Set The region where the node is located.
 * @method integer getZoneId() Obtain The zone where the node is located.
 * @method void setZoneId(integer $ZoneId) Set The zone where the node is located.
 * @method string getApplyTime() Obtain Application time.
 * @method void setApplyTime(string $ApplyTime) Set Application time.
 * @method string getFreeTime() Obtain Release time.
 * @method void setFreeTime(string $FreeTime) Set Release time.
 * @method string getDiskSize() Obtain Hard disk size.
 * @method void setDiskSize(string $DiskSize) Set Hard disk size.
 * @method string getNameTag() Obtain Node description.
 * @method void setNameTag(string $NameTag) Set Node description.
 * @method string getServices() Obtain Node deployment service.
 * @method void setServices(string $Services) Set Node deployment service.
 * @method integer getStorageType() Obtain Disk type. Valid values: 1 (Local Disk), 2 (Cloud Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Cloud Disk), 6 (Enhanced SSD), 11 (Throughput SSD), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High IO Cloud Disk), and 16 (Remote SSD).

 * @method void setStorageType(integer $StorageType) Set Disk type. Valid values: 1 (Local Disk), 2 (Cloud Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Cloud Disk), 6 (Enhanced SSD), 11 (Throughput SSD), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High IO Cloud Disk), and 16 (Remote SSD).

 * @method integer getRootSize() Obtain System disk size (GB).
 * @method void setRootSize(integer $RootSize) Set System disk size (GB).
 * @method integer getChargeType() Obtain Payment type. Valid values: 0 (pay-as-you-go); 1 (yearly/monthly subscription).
 * @method void setChargeType(integer $ChargeType) Set Payment type. Valid values: 0 (pay-as-you-go); 1 (yearly/monthly subscription).
 * @method string getCdbIp() Obtain Database IP address.
 * @method void setCdbIp(string $CdbIp) Set Database IP address.
 * @method integer getCdbPort() Obtain Database port.
 * @method void setCdbPort(integer $CdbPort) Set Database port.
 * @method integer getHwDiskSize() Obtain Hard disk capacity (bytes).
 * @method void setHwDiskSize(integer $HwDiskSize) Set Hard disk capacity (bytes).
 * @method string getHwDiskSizeDesc() Obtain Hard disk capacity description.
 * @method void setHwDiskSizeDesc(string $HwDiskSizeDesc) Set Hard disk capacity description.
 * @method integer getHwMemSize() Obtain Memory capacity (bytes).
 * @method void setHwMemSize(integer $HwMemSize) Set Memory capacity (bytes).
 * @method string getHwMemSizeDesc() Obtain Memory capacity description.
 * @method void setHwMemSizeDesc(string $HwMemSizeDesc) Set Memory capacity description.
 * @method string getExpireTime() Obtain Expiration time.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time.
 * @method string getEmrResourceId() Obtain Node resource ID.
 * @method void setEmrResourceId(string $EmrResourceId) Set Node resource ID.
 * @method integer getIsAutoRenew() Obtain Renewal flag.
 * @method void setIsAutoRenew(integer $IsAutoRenew) Set Renewal flag.
 * @method string getDeviceClass() Obtain Device identification.
 * @method void setDeviceClass(string $DeviceClass) Set Device identification.
 * @method integer getMutable() Obtain Supporting resizing.
 * @method void setMutable(integer $Mutable) Set Supporting resizing.
 * @method array getMCMultiDisk() Obtain Multi-cloud disk
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMCMultiDisk(array $MCMultiDisk) Set Multi-cloud disk
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CdbInfo getCdbNodeInfo() Obtain Database information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCdbNodeInfo(CdbInfo $CdbNodeInfo) Set Database information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIp() Obtain Private network IP address.
 * @method void setIp(string $Ip) Set Private network IP address.
 * @method integer getDestroyable() Obtain Whether this node can be terminated. 1: Yes, 0: No.
 * @method void setDestroyable(integer $Destroyable) Set Whether this node can be terminated. 1: Yes, 0: No.
 * @method array getTags() Obtain Tags bound to node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tags bound to node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoFlag() Obtain Whether it is an automatic scaling node. 0: common node, 1: automatic scaling node.
 * @method void setAutoFlag(integer $AutoFlag) Set Whether it is an automatic scaling node. 0: common node, 1: automatic scaling node.
 * @method string getHardwareResourceType() Obtain Resource type, with the valid values of "host" and "pod".
 * @method void setHardwareResourceType(string $HardwareResourceType) Set Resource type, with the valid values of "host" and "pod".
 * @method integer getIsDynamicSpec() Obtain Whether it is a floating specification. 1: Yes, 0: No.
 * @method void setIsDynamicSpec(integer $IsDynamicSpec) Set Whether it is a floating specification. 1: Yes, 0: No.
 * @method string getDynamicPodSpec() Obtain Floating specification value in the JSON string format.
 * @method void setDynamicPodSpec(string $DynamicPodSpec) Set Floating specification value in the JSON string format.
 * @method integer getSupportModifyPayMode() Obtain Whether the billing type can be changed. 1: Yes, 0: No.
 * @method void setSupportModifyPayMode(integer $SupportModifyPayMode) Set Whether the billing type can be changed. 1: Yes, 0: No.
 * @method integer getRootStorageType() Obtain System disk type. Valid values: 1 (Local Disk), 2 (Cloud Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Cloud Disk), 6 (Enhanced SSD), 11 (Throughput HDD), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High IO Cloud Disk), and 16 (Remote SSD).
 * @method void setRootStorageType(integer $RootStorageType) Set System disk type. Valid values: 1 (Local Disk), 2 (Cloud Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Cloud Disk), 6 (Enhanced SSD), 11 (Throughput HDD), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High IO Cloud Disk), and 16 (Remote SSD).
 * @method string getZone() Obtain Availability information.
 * @method void setZone(string $Zone) Set Availability information.
 * @method SubnetInfo getSubnetInfo() Obtain Subnet
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSubnetInfo(SubnetInfo $SubnetInfo) Set Subnet
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getClients() Obtain Client.
 * @method void setClients(string $Clients) Set Client.
 * @method string getCurrentTime() Obtain Current system time.
 * @method void setCurrentTime(string $CurrentTime) Set Current system time.
 * @method integer getIsFederation() Obtain Indicates whether it is for federation. 1: Yes, 0: No.
 * @method void setIsFederation(integer $IsFederation) Set Indicates whether it is for federation. 1: Yes, 0: No.
 * @method string getDeviceName() Obtain Device name.
 * @method void setDeviceName(string $DeviceName) Set Device name.
 * @method string getServiceClient() Obtain Service.
 * @method void setServiceClient(string $ServiceClient) Set Service.
 * @method boolean getDisableApiTermination() Obtain Whether instance protection is enabled. True: enabled, false: disabled.
 * @method void setDisableApiTermination(boolean $DisableApiTermination) Set Whether instance protection is enabled. True: enabled, false: disabled.
 * @method integer getTradeVersion() Obtain 0: old billing, 1: new billing.
 * @method void setTradeVersion(integer $TradeVersion) Set 0: old billing, 1: new billing.
 * @method string getServicesStatus() Obtain Component status. ZooKeeper: STARTED, ResourceManager: STARTED, STARTED: Component is running, STOPPED: Component is halted.
 * @method void setServicesStatus(string $ServicesStatus) Set Component status. ZooKeeper: STARTED, ResourceManager: STARTED, STARTED: Component is running, STOPPED: Component is halted.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method string getSharedClusterId() Obtain Shared cluster ID.
 * @method void setSharedClusterId(string $SharedClusterId) Set Shared cluster ID.
 * @method string getSharedClusterIdDesc() Obtain Shared cluster ID description.
 * @method void setSharedClusterIdDesc(string $SharedClusterIdDesc) Set Shared cluster ID description.
 * @method boolean getTimingResource() Obtain Whether the resource is set for scheduled termination.
 * @method void setTimingResource(boolean $TimingResource) Set Whether the resource is set for scheduled termination.
 * @method string getTkeClusterId() Obtain Corresponding TKE cluster ID in the case that the resource type (HardwareResourceType) is pod.
 * @method void setTkeClusterId(string $TkeClusterId) Set Corresponding TKE cluster ID in the case that the resource type (HardwareResourceType) is pod.
 * @method array getConfigurableServices() Obtain Name list of services that can be configured when a new disk is mounted.
 * @method void setConfigurableServices(array $ConfigurableServices) Set Name list of services that can be configured when a new disk is mounted.
 * @method string getNodeMark() Obtain Node labeling information: currently used only in the Terraform.
 * @method void setNodeMark(string $NodeMark) Set Node labeling information: currently used only in the Terraform.
 * @method boolean getUnderwriteSetAutoRenew() Obtain Whether auto-renewal is available for committed use resources.
 * @method void setUnderwriteSetAutoRenew(boolean $UnderwriteSetAutoRenew) Set Whether auto-renewal is available for committed use resources.
 * @method string getGpuDesc() Obtain GPU information.
 * @method void setGpuDesc(string $GpuDesc) Set GPU information.
 */
class NodeHardwareInfo extends AbstractModel
{
    /**
     * @var integer User AppID.
     */
    public $AppId;

    /**
     * @var string Serial number.
     */
    public $SerialNo;

    /**
     * @var string Machine instance ID.
     */
    public $OrderNo;

    /**
     * @var string Public network IP address bound for the Master node.
     */
    public $WanIp;

    /**
     * @var integer Node type. 0: Common node; 1: Master node.
 2: Core node; 3: Task node.
     */
    public $Flag;

    /**
     * @var string Node specifications.
     */
    public $Spec;

    /**
     * @var integer Number of node cores.
     */
    public $CpuNum;

    /**
     * @var integer Node memory (bytes).
     */
    public $MemSize;

    /**
     * @var string Node memory (GB).
     */
    public $MemDesc;

    /**
     * @var integer The region where the node is located.
     */
    public $RegionId;

    /**
     * @var integer The zone where the node is located.
     */
    public $ZoneId;

    /**
     * @var string Application time.
     */
    public $ApplyTime;

    /**
     * @var string Release time.
     */
    public $FreeTime;

    /**
     * @var string Hard disk size.
     */
    public $DiskSize;

    /**
     * @var string Node description.
     */
    public $NameTag;

    /**
     * @var string Node deployment service.
     */
    public $Services;

    /**
     * @var integer Disk type. Valid values: 1 (Local Disk), 2 (Cloud Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Cloud Disk), 6 (Enhanced SSD), 11 (Throughput SSD), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High IO Cloud Disk), and 16 (Remote SSD).

     */
    public $StorageType;

    /**
     * @var integer System disk size (GB).
     */
    public $RootSize;

    /**
     * @var integer Payment type. Valid values: 0 (pay-as-you-go); 1 (yearly/monthly subscription).
     */
    public $ChargeType;

    /**
     * @var string Database IP address.
     */
    public $CdbIp;

    /**
     * @var integer Database port.
     */
    public $CdbPort;

    /**
     * @var integer Hard disk capacity (bytes).
     */
    public $HwDiskSize;

    /**
     * @var string Hard disk capacity description.
     */
    public $HwDiskSizeDesc;

    /**
     * @var integer Memory capacity (bytes).
     */
    public $HwMemSize;

    /**
     * @var string Memory capacity description.
     */
    public $HwMemSizeDesc;

    /**
     * @var string Expiration time.
     */
    public $ExpireTime;

    /**
     * @var string Node resource ID.
     */
    public $EmrResourceId;

    /**
     * @var integer Renewal flag.
     */
    public $IsAutoRenew;

    /**
     * @var string Device identification.
     */
    public $DeviceClass;

    /**
     * @var integer Supporting resizing.
     */
    public $Mutable;

    /**
     * @var array Multi-cloud disk
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MCMultiDisk;

    /**
     * @var CdbInfo Database information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CdbNodeInfo;

    /**
     * @var string Private network IP address.
     */
    public $Ip;

    /**
     * @var integer Whether this node can be terminated. 1: Yes, 0: No.
     */
    public $Destroyable;

    /**
     * @var array Tags bound to node
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Whether it is an automatic scaling node. 0: common node, 1: automatic scaling node.
     */
    public $AutoFlag;

    /**
     * @var string Resource type, with the valid values of "host" and "pod".
     */
    public $HardwareResourceType;

    /**
     * @var integer Whether it is a floating specification. 1: Yes, 0: No.
     */
    public $IsDynamicSpec;

    /**
     * @var string Floating specification value in the JSON string format.
     */
    public $DynamicPodSpec;

    /**
     * @var integer Whether the billing type can be changed. 1: Yes, 0: No.
     */
    public $SupportModifyPayMode;

    /**
     * @var integer System disk type. Valid values: 1 (Local Disk), 2 (Cloud Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Cloud Disk), 6 (Enhanced SSD), 11 (Throughput HDD), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High IO Cloud Disk), and 16 (Remote SSD).
     */
    public $RootStorageType;

    /**
     * @var string Availability information.
     */
    public $Zone;

    /**
     * @var SubnetInfo Subnet
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SubnetInfo;

    /**
     * @var string Client.
     */
    public $Clients;

    /**
     * @var string Current system time.
     */
    public $CurrentTime;

    /**
     * @var integer Indicates whether it is for federation. 1: Yes, 0: No.
     */
    public $IsFederation;

    /**
     * @var string Device name.
     */
    public $DeviceName;

    /**
     * @var string Service.
     */
    public $ServiceClient;

    /**
     * @var boolean Whether instance protection is enabled. True: enabled, false: disabled.
     */
    public $DisableApiTermination;

    /**
     * @var integer 0: old billing, 1: new billing.
     */
    public $TradeVersion;

    /**
     * @var string Component status. ZooKeeper: STARTED, ResourceManager: STARTED, STARTED: Component is running, STOPPED: Component is halted.
     */
    public $ServicesStatus;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var string Shared cluster ID.
     */
    public $SharedClusterId;

    /**
     * @var string Shared cluster ID description.
     */
    public $SharedClusterIdDesc;

    /**
     * @var boolean Whether the resource is set for scheduled termination.
     */
    public $TimingResource;

    /**
     * @var string Corresponding TKE cluster ID in the case that the resource type (HardwareResourceType) is pod.
     */
    public $TkeClusterId;

    /**
     * @var array Name list of services that can be configured when a new disk is mounted.
     */
    public $ConfigurableServices;

    /**
     * @var string Node labeling information: currently used only in the Terraform.
     */
    public $NodeMark;

    /**
     * @var boolean Whether auto-renewal is available for committed use resources.
     */
    public $UnderwriteSetAutoRenew;

    /**
     * @var string GPU information.
     */
    public $GpuDesc;

    /**
     * @param integer $AppId User AppID.
     * @param string $SerialNo Serial number.
     * @param string $OrderNo Machine instance ID.
     * @param string $WanIp Public network IP address bound for the Master node.
     * @param integer $Flag Node type. 0: Common node; 1: Master node.
 2: Core node; 3: Task node.
     * @param string $Spec Node specifications.
     * @param integer $CpuNum Number of node cores.
     * @param integer $MemSize Node memory (bytes).
     * @param string $MemDesc Node memory (GB).
     * @param integer $RegionId The region where the node is located.
     * @param integer $ZoneId The zone where the node is located.
     * @param string $ApplyTime Application time.
     * @param string $FreeTime Release time.
     * @param string $DiskSize Hard disk size.
     * @param string $NameTag Node description.
     * @param string $Services Node deployment service.
     * @param integer $StorageType Disk type. Valid values: 1 (Local Disk), 2 (Cloud Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Cloud Disk), 6 (Enhanced SSD), 11 (Throughput SSD), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High IO Cloud Disk), and 16 (Remote SSD).

     * @param integer $RootSize System disk size (GB).
     * @param integer $ChargeType Payment type. Valid values: 0 (pay-as-you-go); 1 (yearly/monthly subscription).
     * @param string $CdbIp Database IP address.
     * @param integer $CdbPort Database port.
     * @param integer $HwDiskSize Hard disk capacity (bytes).
     * @param string $HwDiskSizeDesc Hard disk capacity description.
     * @param integer $HwMemSize Memory capacity (bytes).
     * @param string $HwMemSizeDesc Memory capacity description.
     * @param string $ExpireTime Expiration time.
     * @param string $EmrResourceId Node resource ID.
     * @param integer $IsAutoRenew Renewal flag.
     * @param string $DeviceClass Device identification.
     * @param integer $Mutable Supporting resizing.
     * @param array $MCMultiDisk Multi-cloud disk
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CdbInfo $CdbNodeInfo Database information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Ip Private network IP address.
     * @param integer $Destroyable Whether this node can be terminated. 1: Yes, 0: No.
     * @param array $Tags Tags bound to node
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoFlag Whether it is an automatic scaling node. 0: common node, 1: automatic scaling node.
     * @param string $HardwareResourceType Resource type, with the valid values of "host" and "pod".
     * @param integer $IsDynamicSpec Whether it is a floating specification. 1: Yes, 0: No.
     * @param string $DynamicPodSpec Floating specification value in the JSON string format.
     * @param integer $SupportModifyPayMode Whether the billing type can be changed. 1: Yes, 0: No.
     * @param integer $RootStorageType System disk type. Valid values: 1 (Local Disk), 2 (Cloud Disk), 3 (Local SSD), 4 (Cloud SSD), 5 (Premium Cloud Disk), 6 (Enhanced SSD), 11 (Throughput HDD), 12 (Tremendous SSD), 13 (Balanced SSD), 14 (Big Data Cloud Disk), 15 (High IO Cloud Disk), and 16 (Remote SSD).
     * @param string $Zone Availability information.
     * @param SubnetInfo $SubnetInfo Subnet
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Clients Client.
     * @param string $CurrentTime Current system time.
     * @param integer $IsFederation Indicates whether it is for federation. 1: Yes, 0: No.
     * @param string $DeviceName Device name.
     * @param string $ServiceClient Service.
     * @param boolean $DisableApiTermination Whether instance protection is enabled. True: enabled, false: disabled.
     * @param integer $TradeVersion 0: old billing, 1: new billing.
     * @param string $ServicesStatus Component status. ZooKeeper: STARTED, ResourceManager: STARTED, STARTED: Component is running, STOPPED: Component is halted.
     * @param string $Remark Remarks.
     * @param string $SharedClusterId Shared cluster ID.
     * @param string $SharedClusterIdDesc Shared cluster ID description.
     * @param boolean $TimingResource Whether the resource is set for scheduled termination.
     * @param string $TkeClusterId Corresponding TKE cluster ID in the case that the resource type (HardwareResourceType) is pod.
     * @param array $ConfigurableServices Name list of services that can be configured when a new disk is mounted.
     * @param string $NodeMark Node labeling information: currently used only in the Terraform.
     * @param boolean $UnderwriteSetAutoRenew Whether auto-renewal is available for committed use resources.
     * @param string $GpuDesc GPU information.
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
    }
}
