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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name (1-50 English letters, Chinese characters, digits, hyphens -, or underscores _)
 * @method void setInstanceName(string $InstanceName) Set Instance name (1-50 English letters, Chinese characters, digits, hyphens -, or underscores _)
 * @method integer getNodeNum() Obtain Abandoned. Please use NodeInfoList.
Number of nodes (2-50).
 * @method void setNodeNum(integer $NodeNum) Set Abandoned. Please use NodeInfoList.
Number of nodes (2-50).
 * @method string getEsConfig() Obtain ES configuration item (JSON format string)
 * @method void setEsConfig(string $EsConfig) Set ES configuration item (JSON format string)
 * @method string getPassword() Obtain Password of the default user elastic (8–16 characters, including at least two of the following: [a-z,A-Z], [0-9], and special characters [-!@#$%&^*+=_:;,.?])
 * @method void setPassword(string $Password) Set Password of the default user elastic (8–16 characters, including at least two of the following: [a-z,A-Z], [0-9], and special characters [-!@#$%&^*+=_:;,.?])
 * @method EsAcl getEsAcl() Obtain Public access policy for visualization components (Kibana and Cerebro)
 * @method void setEsAcl(EsAcl $EsAcl) Set Public access policy for visualization components (Kibana and Cerebro)
 * @method integer getDiskSize() Obtain Abandoned. Please use NodeInfoList.
Disk size in GB
 * @method void setDiskSize(integer $DiskSize) Set Abandoned. Please use NodeInfoList.
Disk size in GB
 * @method string getNodeType() Obtain Abandoned. Please use NodeInfoList.
Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li>
 * @method void setNodeType(string $NodeType) Set Abandoned. Please use NodeInfoList.
Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li>
 * @method integer getMasterNodeNum() Obtain Abandoned. Please use NodeInfoList.
Number of dedicated primary nodes (supports only 3 or 5)
 * @method void setMasterNodeNum(integer $MasterNodeNum) Set Abandoned. Please use NodeInfoList.
Number of dedicated primary nodes (supports only 3 or 5)
 * @method string getMasterNodeType() Obtain Abandoned. Please use NodeInfoList.
Dedicated primary node specification<li>ES.S1.SMALL2: 1-core 2GB</li><li>ES.S1.MEDIUM4: 2-core 4GB</li><li>ES.S1.MEDIUM8: 2-core 8GB</li><li>ES.S1.LARGE16: 4-core 16GB</li><li>ES.S1.2XLARGE32: 8-core 32GB</li><li>ES.S1.4XLARGE32: 16-core 32GB</li><li>ES.S1.4XLARGE64: 16-core 64GB</li>
 * @method void setMasterNodeType(string $MasterNodeType) Set Abandoned. Please use NodeInfoList.
Dedicated primary node specification<li>ES.S1.SMALL2: 1-core 2GB</li><li>ES.S1.MEDIUM4: 2-core 4GB</li><li>ES.S1.MEDIUM8: 2-core 8GB</li><li>ES.S1.LARGE16: 4-core 16GB</li><li>ES.S1.2XLARGE32: 8-core 32GB</li><li>ES.S1.4XLARGE32: 16-core 32GB</li><li>ES.S1.4XLARGE64: 16-core 64GB</li>
 * @method integer getMasterNodeDiskSize() Obtain Abandoned. Please use NodeInfoList.
Dedicated primary node disk size (in GB. The system default configuration is 50 GB. Customization is temporarily not supported.)
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) Set Abandoned. Please use NodeInfoList.
Dedicated primary node disk size (in GB. The system default configuration is 50 GB. Customization is temporarily not supported.)
 * @method boolean getForceRestart() Obtain Whether to force restart when updating the configuration <li>true: force restart</li><li>false: do not force restart</li>Currently, this needs to be set only when updating EsConfig. The default value is false.
 * @method void setForceRestart(boolean $ForceRestart) Set Whether to force restart when updating the configuration <li>true: force restart</li><li>false: do not force restart</li>Currently, this needs to be set only when updating EsConfig. The default value is false.
 * @method CosBackup getCosBackup() Obtain COS auto backup information
 * @method void setCosBackup(CosBackup $CosBackup) Set COS auto backup information
 * @method array getNodeInfoList() Obtain Node information list. You can transmit only the node to be updated and its corresponding specification information. Supported operations include <li>modifying the count of a node type</li><li>modifying the node specification and disk size of a node type</li><li>adding a node type (you need to simultaneously specify the node type, count, specification, disk, and other information)</li>. You can perform only one of the above operations at a time, and the disk type cannot be modified.
 * @method void setNodeInfoList(array $NodeInfoList) Set Node information list. You can transmit only the node to be updated and its corresponding specification information. Supported operations include <li>modifying the count of a node type</li><li>modifying the node specification and disk size of a node type</li><li>adding a node type (you need to simultaneously specify the node type, count, specification, disk, and other information)</li>. You can perform only one of the above operations at a time, and the disk type cannot be modified.
 * @method string getPublicAccess() Obtain Public access status of the ES cluster
OPEN: enabled.
-CLOSE: disabled.
 * @method void setPublicAccess(string $PublicAccess) Set Public access status of the ES cluster
OPEN: enabled.
-CLOSE: disabled.
 * @method EsPublicAcl getEsPublicAcl() Obtain Public network access control list
 * @method void setEsPublicAcl(EsPublicAcl $EsPublicAcl) Set Public network access control list
 * @method string getKibanaPublicAccess() Obtain Kibana public access status
OPEN: enabled.
-CLOSE: disabled.
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) Set Kibana public access status
OPEN: enabled.
-CLOSE: disabled.
 * @method string getKibanaPrivateAccess() Obtain Kibana internal access status
OPEN: enabled.
-CLOSE: disabled.
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) Set Kibana internal access status
OPEN: enabled.
-CLOSE: disabled.
 * @method integer getBasicSecurityType() Obtain Turn on or off user authentication for the basic version of ES 6.8 and above
 * @method void setBasicSecurityType(integer $BasicSecurityType) Set Turn on or off user authentication for the basic version of ES 6.8 and above
 * @method integer getKibanaPrivatePort() Obtain Kibana private network port
 * @method void setKibanaPrivatePort(integer $KibanaPrivatePort) Set Kibana private network port
 * @method integer getScaleType() Obtain 0: Scale out via blue-green change without restarting the cluster (default) 1: Scale out by unmounting disks with a cluster rolling restart
 * @method void setScaleType(integer $ScaleType) Set 0: Scale out via blue-green change without restarting the cluster (default) 1: Scale out by unmounting disks with a cluster rolling restart
 * @method array getMultiZoneInfo() Obtain Multi-AZ deployment
 * @method void setMultiZoneInfo(array $MultiZoneInfo) Set Multi-AZ deployment
 * @method integer getSceneType() Obtain Scenario template type. -1: not enabled. 1: common. 2: log. 3: search
 * @method void setSceneType(integer $SceneType) Set Scenario template type. -1: not enabled. 1: common. 2: log. 3: search
 * @method string getKibanaConfig() Obtain Kibana configuration item (JSON format string)
 * @method void setKibanaConfig(string $KibanaConfig) Set Kibana configuration item (JSON format string)
 * @method WebNodeTypeInfo getWebNodeTypeInfo() Obtain Visualize node configuration
 * @method void setWebNodeTypeInfo(WebNodeTypeInfo $WebNodeTypeInfo) Set Visualize node configuration
 * @method string getSwitchPrivateLink() Obtain Switch to the new network architecture
 * @method void setSwitchPrivateLink(string $SwitchPrivateLink) Set Switch to the new network architecture
 * @method boolean getEnableCerebro() Obtain Enable Cerebro
 * @method void setEnableCerebro(boolean $EnableCerebro) Set Enable Cerebro
 * @method string getCerebroPublicAccess() Obtain Cerebro public access status
OPEN: enabled.
-CLOSE: disabled.
 * @method void setCerebroPublicAccess(string $CerebroPublicAccess) Set Cerebro public access status
OPEN: enabled.
-CLOSE: disabled.
 * @method string getCerebroPrivateAccess() Obtain Cerebro private network access status
OPEN: enabled.
-CLOSE: disabled.
 * @method void setCerebroPrivateAccess(string $CerebroPrivateAccess) Set Cerebro private network access status
OPEN: enabled.
-CLOSE: disabled.
 * @method EsConfigSetInfo getEsConfigSet() Obtain Newly-added or modified configuration group information
 * @method void setEsConfigSet(EsConfigSetInfo $EsConfigSet) Set Newly-added or modified configuration group information
 * @method OperationDurationUpdated getOperationDuration() Obtain Maintenance time slot.
 * @method void setOperationDuration(OperationDurationUpdated $OperationDuration) Set Maintenance time slot.
 * @method string getKibanaAlteringPublicAccess() Obtain Whether Alerting public network alert output is enabled:
OPEN: enabled.
-CLOSE: disabled.
 * @method void setKibanaAlteringPublicAccess(string $KibanaAlteringPublicAccess) Set Whether Alerting public network alert output is enabled:
OPEN: enabled.
-CLOSE: disabled.
 * @method string getKibanaPrivateDomain() Obtain Custom domain name of kibana on the private network
 * @method void setKibanaPrivateDomain(string $KibanaPrivateDomain) Set Custom domain name of kibana on the private network
 * @method string getCerebroPrivateDomain() Obtain Custom domain name of cerebro on the private network
 * @method void setCerebroPrivateDomain(string $CerebroPrivateDomain) Set Custom domain name of cerebro on the private network
 * @method string getProtocol() Obtain Change to an https cluster. http is selected by default.
 * @method void setProtocol(string $Protocol) Set Change to an https cluster. http is selected by default.
 * @method array getOutboundPublicAcls() Obtain Outbound access details of the node

 * @method void setOutboundPublicAcls(array $OutboundPublicAcls) Set Outbound access details of the node

 * @method string getOutboundPublicAccess() Obtain Outbound access operations of the node
OPEN
-CLOSE: disabled.
 * @method void setOutboundPublicAccess(string $OutboundPublicAccess) Set Outbound access operations of the node
OPEN
-CLOSE: disabled.
 * @method integer getCvmDelayOnlineTime() Obtain Parameter for delayed cvm launch
 * @method void setCvmDelayOnlineTime(integer $CvmDelayOnlineTime) Set Parameter for delayed cvm launch
 * @method integer getShardAllocationConcurrents() Obtain Number of concurrent shard migrations
 * @method void setShardAllocationConcurrents(integer $ShardAllocationConcurrents) Set Number of concurrent shard migrations
 * @method integer getShardAllocationBytes() Obtain Shard migration concurrency speed
 * @method void setShardAllocationBytes(integer $ShardAllocationBytes) Set Shard migration concurrency speed
 * @method integer getReadWriteMode() Obtain Read-write separation mode: -1: not enabled; 1: local read/write separation; 2: remote read/write separation.
 * @method void setReadWriteMode(integer $ReadWriteMode) Set Read-write separation mode: -1: not enabled; 1: local read/write separation; 2: remote read/write separation.
 * @method boolean getEnableScheduleRecoverGroup() Obtain Whether to enable the placement group async task
 * @method void setEnableScheduleRecoverGroup(boolean $EnableScheduleRecoverGroup) Set Whether to enable the placement group async task
 * @method EnableScheduleOperationDuration getEnableScheduleOperationDuration() Obtain Placement group async task maintenance time slot
 * @method void setEnableScheduleOperationDuration(EnableScheduleOperationDuration $EnableScheduleOperationDuration) Set Placement group async task maintenance time slot
 * @method string getEnableDestroyProtection() Obtain Cluster protection: OPEN: enable, CLOSE: disable
 * @method void setEnableDestroyProtection(string $EnableDestroyProtection) Set Cluster protection: OPEN: enable, CLOSE: disable
 * @method array getAutoScaleDiskInfoList() Obtain Auto capacity expansion parameter
 * @method void setAutoScaleDiskInfoList(array $AutoScaleDiskInfoList) Set Auto capacity expansion parameter
 * @method array getAutoScaleDiskDeleteNodeTypeList() Obtain Auto-expansion delete parameter
 * @method void setAutoScaleDiskDeleteNodeTypeList(array $AutoScaleDiskDeleteNodeTypeList) Set Auto-expansion delete parameter
 * @method OtherConfig getOtherConfig() Obtain Other additional configuration, jvm or yml.
 * @method void setOtherConfig(OtherConfig $OtherConfig) Set Other additional configuration, jvm or yml.
 */
class UpdateInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name (1-50 English letters, Chinese characters, digits, hyphens -, or underscores _)
     */
    public $InstanceName;

    /**
     * @var integer Abandoned. Please use NodeInfoList.
Number of nodes (2-50).
     */
    public $NodeNum;

    /**
     * @var string ES configuration item (JSON format string)
     */
    public $EsConfig;

    /**
     * @var string Password of the default user elastic (8–16 characters, including at least two of the following: [a-z,A-Z], [0-9], and special characters [-!@#$%&^*+=_:;,.?])
     */
    public $Password;

    /**
     * @var EsAcl Public access policy for visualization components (Kibana and Cerebro)
     */
    public $EsAcl;

    /**
     * @var integer Abandoned. Please use NodeInfoList.
Disk size in GB
     */
    public $DiskSize;

    /**
     * @var string Abandoned. Please use NodeInfoList.
Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li>
     */
    public $NodeType;

    /**
     * @var integer Abandoned. Please use NodeInfoList.
Number of dedicated primary nodes (supports only 3 or 5)
     */
    public $MasterNodeNum;

    /**
     * @var string Abandoned. Please use NodeInfoList.
Dedicated primary node specification<li>ES.S1.SMALL2: 1-core 2GB</li><li>ES.S1.MEDIUM4: 2-core 4GB</li><li>ES.S1.MEDIUM8: 2-core 8GB</li><li>ES.S1.LARGE16: 4-core 16GB</li><li>ES.S1.2XLARGE32: 8-core 32GB</li><li>ES.S1.4XLARGE32: 16-core 32GB</li><li>ES.S1.4XLARGE64: 16-core 64GB</li>
     */
    public $MasterNodeType;

    /**
     * @var integer Abandoned. Please use NodeInfoList.
Dedicated primary node disk size (in GB. The system default configuration is 50 GB. Customization is temporarily not supported.)
     */
    public $MasterNodeDiskSize;

    /**
     * @var boolean Whether to force restart when updating the configuration <li>true: force restart</li><li>false: do not force restart</li>Currently, this needs to be set only when updating EsConfig. The default value is false.
     */
    public $ForceRestart;

    /**
     * @var CosBackup COS auto backup information
     */
    public $CosBackup;

    /**
     * @var array Node information list. You can transmit only the node to be updated and its corresponding specification information. Supported operations include <li>modifying the count of a node type</li><li>modifying the node specification and disk size of a node type</li><li>adding a node type (you need to simultaneously specify the node type, count, specification, disk, and other information)</li>. You can perform only one of the above operations at a time, and the disk type cannot be modified.
     */
    public $NodeInfoList;

    /**
     * @var string Public access status of the ES cluster
OPEN: enabled.
-CLOSE: disabled.
     */
    public $PublicAccess;

    /**
     * @var EsPublicAcl Public network access control list
     */
    public $EsPublicAcl;

    /**
     * @var string Kibana public access status
OPEN: enabled.
-CLOSE: disabled.
     */
    public $KibanaPublicAccess;

    /**
     * @var string Kibana internal access status
OPEN: enabled.
-CLOSE: disabled.
     */
    public $KibanaPrivateAccess;

    /**
     * @var integer Turn on or off user authentication for the basic version of ES 6.8 and above
     */
    public $BasicSecurityType;

    /**
     * @var integer Kibana private network port
     */
    public $KibanaPrivatePort;

    /**
     * @var integer 0: Scale out via blue-green change without restarting the cluster (default) 1: Scale out by unmounting disks with a cluster rolling restart
     */
    public $ScaleType;

    /**
     * @var array Multi-AZ deployment
     */
    public $MultiZoneInfo;

    /**
     * @var integer Scenario template type. -1: not enabled. 1: common. 2: log. 3: search
     */
    public $SceneType;

    /**
     * @var string Kibana configuration item (JSON format string)
     */
    public $KibanaConfig;

    /**
     * @var WebNodeTypeInfo Visualize node configuration
     */
    public $WebNodeTypeInfo;

    /**
     * @var string Switch to the new network architecture
     */
    public $SwitchPrivateLink;

    /**
     * @var boolean Enable Cerebro
     */
    public $EnableCerebro;

    /**
     * @var string Cerebro public access status
OPEN: enabled.
-CLOSE: disabled.
     */
    public $CerebroPublicAccess;

    /**
     * @var string Cerebro private network access status
OPEN: enabled.
-CLOSE: disabled.
     */
    public $CerebroPrivateAccess;

    /**
     * @var EsConfigSetInfo Newly-added or modified configuration group information
     */
    public $EsConfigSet;

    /**
     * @var OperationDurationUpdated Maintenance time slot.
     */
    public $OperationDuration;

    /**
     * @var string Whether Alerting public network alert output is enabled:
OPEN: enabled.
-CLOSE: disabled.
     */
    public $KibanaAlteringPublicAccess;

    /**
     * @var string Custom domain name of kibana on the private network
     */
    public $KibanaPrivateDomain;

    /**
     * @var string Custom domain name of cerebro on the private network
     */
    public $CerebroPrivateDomain;

    /**
     * @var string Change to an https cluster. http is selected by default.
     */
    public $Protocol;

    /**
     * @var array Outbound access details of the node

     */
    public $OutboundPublicAcls;

    /**
     * @var string Outbound access operations of the node
OPEN
-CLOSE: disabled.
     */
    public $OutboundPublicAccess;

    /**
     * @var integer Parameter for delayed cvm launch
     */
    public $CvmDelayOnlineTime;

    /**
     * @var integer Number of concurrent shard migrations
     */
    public $ShardAllocationConcurrents;

    /**
     * @var integer Shard migration concurrency speed
     */
    public $ShardAllocationBytes;

    /**
     * @var integer Read-write separation mode: -1: not enabled; 1: local read/write separation; 2: remote read/write separation.
     */
    public $ReadWriteMode;

    /**
     * @var boolean Whether to enable the placement group async task
     */
    public $EnableScheduleRecoverGroup;

    /**
     * @var EnableScheduleOperationDuration Placement group async task maintenance time slot
     */
    public $EnableScheduleOperationDuration;

    /**
     * @var string Cluster protection: OPEN: enable, CLOSE: disable
     */
    public $EnableDestroyProtection;

    /**
     * @var array Auto capacity expansion parameter
     */
    public $AutoScaleDiskInfoList;

    /**
     * @var array Auto-expansion delete parameter
     */
    public $AutoScaleDiskDeleteNodeTypeList;

    /**
     * @var OtherConfig Other additional configuration, jvm or yml.
     */
    public $OtherConfig;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name (1-50 English letters, Chinese characters, digits, hyphens -, or underscores _)
     * @param integer $NodeNum Abandoned. Please use NodeInfoList.
Number of nodes (2-50).
     * @param string $EsConfig ES configuration item (JSON format string)
     * @param string $Password Password of the default user elastic (8–16 characters, including at least two of the following: [a-z,A-Z], [0-9], and special characters [-!@#$%&^*+=_:;,.?])
     * @param EsAcl $EsAcl Public access policy for visualization components (Kibana and Cerebro)
     * @param integer $DiskSize Abandoned. Please use NodeInfoList.
Disk size in GB
     * @param string $NodeType Abandoned. Please use NodeInfoList.
Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li>
     * @param integer $MasterNodeNum Abandoned. Please use NodeInfoList.
Number of dedicated primary nodes (supports only 3 or 5)
     * @param string $MasterNodeType Abandoned. Please use NodeInfoList.
Dedicated primary node specification<li>ES.S1.SMALL2: 1-core 2GB</li><li>ES.S1.MEDIUM4: 2-core 4GB</li><li>ES.S1.MEDIUM8: 2-core 8GB</li><li>ES.S1.LARGE16: 4-core 16GB</li><li>ES.S1.2XLARGE32: 8-core 32GB</li><li>ES.S1.4XLARGE32: 16-core 32GB</li><li>ES.S1.4XLARGE64: 16-core 64GB</li>
     * @param integer $MasterNodeDiskSize Abandoned. Please use NodeInfoList.
Dedicated primary node disk size (in GB. The system default configuration is 50 GB. Customization is temporarily not supported.)
     * @param boolean $ForceRestart Whether to force restart when updating the configuration <li>true: force restart</li><li>false: do not force restart</li>Currently, this needs to be set only when updating EsConfig. The default value is false.
     * @param CosBackup $CosBackup COS auto backup information
     * @param array $NodeInfoList Node information list. You can transmit only the node to be updated and its corresponding specification information. Supported operations include <li>modifying the count of a node type</li><li>modifying the node specification and disk size of a node type</li><li>adding a node type (you need to simultaneously specify the node type, count, specification, disk, and other information)</li>. You can perform only one of the above operations at a time, and the disk type cannot be modified.
     * @param string $PublicAccess Public access status of the ES cluster
OPEN: enabled.
-CLOSE: disabled.
     * @param EsPublicAcl $EsPublicAcl Public network access control list
     * @param string $KibanaPublicAccess Kibana public access status
OPEN: enabled.
-CLOSE: disabled.
     * @param string $KibanaPrivateAccess Kibana internal access status
OPEN: enabled.
-CLOSE: disabled.
     * @param integer $BasicSecurityType Turn on or off user authentication for the basic version of ES 6.8 and above
     * @param integer $KibanaPrivatePort Kibana private network port
     * @param integer $ScaleType 0: Scale out via blue-green change without restarting the cluster (default) 1: Scale out by unmounting disks with a cluster rolling restart
     * @param array $MultiZoneInfo Multi-AZ deployment
     * @param integer $SceneType Scenario template type. -1: not enabled. 1: common. 2: log. 3: search
     * @param string $KibanaConfig Kibana configuration item (JSON format string)
     * @param WebNodeTypeInfo $WebNodeTypeInfo Visualize node configuration
     * @param string $SwitchPrivateLink Switch to the new network architecture
     * @param boolean $EnableCerebro Enable Cerebro
     * @param string $CerebroPublicAccess Cerebro public access status
OPEN: enabled.
-CLOSE: disabled.
     * @param string $CerebroPrivateAccess Cerebro private network access status
OPEN: enabled.
-CLOSE: disabled.
     * @param EsConfigSetInfo $EsConfigSet Newly-added or modified configuration group information
     * @param OperationDurationUpdated $OperationDuration Maintenance time slot.
     * @param string $KibanaAlteringPublicAccess Whether Alerting public network alert output is enabled:
OPEN: enabled.
-CLOSE: disabled.
     * @param string $KibanaPrivateDomain Custom domain name of kibana on the private network
     * @param string $CerebroPrivateDomain Custom domain name of cerebro on the private network
     * @param string $Protocol Change to an https cluster. http is selected by default.
     * @param array $OutboundPublicAcls Outbound access details of the node

     * @param string $OutboundPublicAccess Outbound access operations of the node
OPEN
-CLOSE: disabled.
     * @param integer $CvmDelayOnlineTime Parameter for delayed cvm launch
     * @param integer $ShardAllocationConcurrents Number of concurrent shard migrations
     * @param integer $ShardAllocationBytes Shard migration concurrency speed
     * @param integer $ReadWriteMode Read-write separation mode: -1: not enabled; 1: local read/write separation; 2: remote read/write separation.
     * @param boolean $EnableScheduleRecoverGroup Whether to enable the placement group async task
     * @param EnableScheduleOperationDuration $EnableScheduleOperationDuration Placement group async task maintenance time slot
     * @param string $EnableDestroyProtection Cluster protection: OPEN: enable, CLOSE: disable
     * @param array $AutoScaleDiskInfoList Auto capacity expansion parameter
     * @param array $AutoScaleDiskDeleteNodeTypeList Auto-expansion delete parameter
     * @param OtherConfig $OtherConfig Other additional configuration, jvm or yml.
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

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EsAcl",$param) and $param["EsAcl"] !== null) {
            $this->EsAcl = new EsAcl();
            $this->EsAcl->deserialize($param["EsAcl"]);
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("MasterNodeNum",$param) and $param["MasterNodeNum"] !== null) {
            $this->MasterNodeNum = $param["MasterNodeNum"];
        }

        if (array_key_exists("MasterNodeType",$param) and $param["MasterNodeType"] !== null) {
            $this->MasterNodeType = $param["MasterNodeType"];
        }

        if (array_key_exists("MasterNodeDiskSize",$param) and $param["MasterNodeDiskSize"] !== null) {
            $this->MasterNodeDiskSize = $param["MasterNodeDiskSize"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = new CosBackup();
            $this->CosBackup->deserialize($param["CosBackup"]);
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("PublicAccess",$param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }

        if (array_key_exists("EsPublicAcl",$param) and $param["EsPublicAcl"] !== null) {
            $this->EsPublicAcl = new EsPublicAcl();
            $this->EsPublicAcl->deserialize($param["EsPublicAcl"]);
        }

        if (array_key_exists("KibanaPublicAccess",$param) and $param["KibanaPublicAccess"] !== null) {
            $this->KibanaPublicAccess = $param["KibanaPublicAccess"];
        }

        if (array_key_exists("KibanaPrivateAccess",$param) and $param["KibanaPrivateAccess"] !== null) {
            $this->KibanaPrivateAccess = $param["KibanaPrivateAccess"];
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }

        if (array_key_exists("KibanaPrivatePort",$param) and $param["KibanaPrivatePort"] !== null) {
            $this->KibanaPrivatePort = $param["KibanaPrivatePort"];
        }

        if (array_key_exists("ScaleType",$param) and $param["ScaleType"] !== null) {
            $this->ScaleType = $param["ScaleType"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("KibanaConfig",$param) and $param["KibanaConfig"] !== null) {
            $this->KibanaConfig = $param["KibanaConfig"];
        }

        if (array_key_exists("WebNodeTypeInfo",$param) and $param["WebNodeTypeInfo"] !== null) {
            $this->WebNodeTypeInfo = new WebNodeTypeInfo();
            $this->WebNodeTypeInfo->deserialize($param["WebNodeTypeInfo"]);
        }

        if (array_key_exists("SwitchPrivateLink",$param) and $param["SwitchPrivateLink"] !== null) {
            $this->SwitchPrivateLink = $param["SwitchPrivateLink"];
        }

        if (array_key_exists("EnableCerebro",$param) and $param["EnableCerebro"] !== null) {
            $this->EnableCerebro = $param["EnableCerebro"];
        }

        if (array_key_exists("CerebroPublicAccess",$param) and $param["CerebroPublicAccess"] !== null) {
            $this->CerebroPublicAccess = $param["CerebroPublicAccess"];
        }

        if (array_key_exists("CerebroPrivateAccess",$param) and $param["CerebroPrivateAccess"] !== null) {
            $this->CerebroPrivateAccess = $param["CerebroPrivateAccess"];
        }

        if (array_key_exists("EsConfigSet",$param) and $param["EsConfigSet"] !== null) {
            $this->EsConfigSet = new EsConfigSetInfo();
            $this->EsConfigSet->deserialize($param["EsConfigSet"]);
        }

        if (array_key_exists("OperationDuration",$param) and $param["OperationDuration"] !== null) {
            $this->OperationDuration = new OperationDurationUpdated();
            $this->OperationDuration->deserialize($param["OperationDuration"]);
        }

        if (array_key_exists("KibanaAlteringPublicAccess",$param) and $param["KibanaAlteringPublicAccess"] !== null) {
            $this->KibanaAlteringPublicAccess = $param["KibanaAlteringPublicAccess"];
        }

        if (array_key_exists("KibanaPrivateDomain",$param) and $param["KibanaPrivateDomain"] !== null) {
            $this->KibanaPrivateDomain = $param["KibanaPrivateDomain"];
        }

        if (array_key_exists("CerebroPrivateDomain",$param) and $param["CerebroPrivateDomain"] !== null) {
            $this->CerebroPrivateDomain = $param["CerebroPrivateDomain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("OutboundPublicAcls",$param) and $param["OutboundPublicAcls"] !== null) {
            $this->OutboundPublicAcls = [];
            foreach ($param["OutboundPublicAcls"] as $key => $value){
                $obj = new OutboundPublicAcl();
                $obj->deserialize($value);
                array_push($this->OutboundPublicAcls, $obj);
            }
        }

        if (array_key_exists("OutboundPublicAccess",$param) and $param["OutboundPublicAccess"] !== null) {
            $this->OutboundPublicAccess = $param["OutboundPublicAccess"];
        }

        if (array_key_exists("CvmDelayOnlineTime",$param) and $param["CvmDelayOnlineTime"] !== null) {
            $this->CvmDelayOnlineTime = $param["CvmDelayOnlineTime"];
        }

        if (array_key_exists("ShardAllocationConcurrents",$param) and $param["ShardAllocationConcurrents"] !== null) {
            $this->ShardAllocationConcurrents = $param["ShardAllocationConcurrents"];
        }

        if (array_key_exists("ShardAllocationBytes",$param) and $param["ShardAllocationBytes"] !== null) {
            $this->ShardAllocationBytes = $param["ShardAllocationBytes"];
        }

        if (array_key_exists("ReadWriteMode",$param) and $param["ReadWriteMode"] !== null) {
            $this->ReadWriteMode = $param["ReadWriteMode"];
        }

        if (array_key_exists("EnableScheduleRecoverGroup",$param) and $param["EnableScheduleRecoverGroup"] !== null) {
            $this->EnableScheduleRecoverGroup = $param["EnableScheduleRecoverGroup"];
        }

        if (array_key_exists("EnableScheduleOperationDuration",$param) and $param["EnableScheduleOperationDuration"] !== null) {
            $this->EnableScheduleOperationDuration = new EnableScheduleOperationDuration();
            $this->EnableScheduleOperationDuration->deserialize($param["EnableScheduleOperationDuration"]);
        }

        if (array_key_exists("EnableDestroyProtection",$param) and $param["EnableDestroyProtection"] !== null) {
            $this->EnableDestroyProtection = $param["EnableDestroyProtection"];
        }

        if (array_key_exists("AutoScaleDiskInfoList",$param) and $param["AutoScaleDiskInfoList"] !== null) {
            $this->AutoScaleDiskInfoList = [];
            foreach ($param["AutoScaleDiskInfoList"] as $key => $value){
                $obj = new AutoScaleDiskInfo();
                $obj->deserialize($value);
                array_push($this->AutoScaleDiskInfoList, $obj);
            }
        }

        if (array_key_exists("AutoScaleDiskDeleteNodeTypeList",$param) and $param["AutoScaleDiskDeleteNodeTypeList"] !== null) {
            $this->AutoScaleDiskDeleteNodeTypeList = $param["AutoScaleDiskDeleteNodeTypeList"];
        }

        if (array_key_exists("OtherConfig",$param) and $param["OtherConfig"] !== null) {
            $this->OtherConfig = new OtherConfig();
            $this->OtherConfig->deserialize($param["OtherConfig"]);
        }
    }
}
