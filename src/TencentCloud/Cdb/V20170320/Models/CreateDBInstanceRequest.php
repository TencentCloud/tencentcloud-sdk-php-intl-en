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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBInstance request structure.
 *
 * @method integer getMemory() Obtain Instance memory size in MB. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported memory specifications.
 * @method void setMemory(integer $Memory) Set Instance memory size in MB. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported memory specifications.
 * @method integer getVolume() Obtain Instance disk size in GB. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported disk specifications.
 * @method void setVolume(integer $Volume) Set Instance disk size in GB. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported disk specifications.
 * @method integer getPeriod() Obtain Instance validity period in months. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
 * @method void setPeriod(integer $Period) Set Instance validity period in months. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
 * @method integer getGoodsNum() Obtain Number of instances. Value range: 1-100. Default value: `1`.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances. Value range: 1-100. Default value: `1`.
 * @method string getZone() Obtain For AZ information, please use the [Obtain the Purchasable Specifications of Cloud Databases](https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1) API to obtain the availability zones that can be created.
Description: If you create a single-node, two-node, or three-node instance, this parameter is required. Specify an availability zone. If you do not specify an availability zone, the system will automatically select one (possibly not the availability zone you want to deploy in). If you create a cloud disk edition instance, leave this parameter empty. Configure the availability zone for the read-write node and read-only node with parameter ClusterTopology.
 * @method void setZone(string $Zone) Set For AZ information, please use the [Obtain the Purchasable Specifications of Cloud Databases](https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1) API to obtain the availability zones that can be created.
Description: If you create a single-node, two-node, or three-node instance, this parameter is required. Specify an availability zone. If you do not specify an availability zone, the system will automatically select one (possibly not the availability zone you want to deploy in). If you create a cloud disk edition instance, leave this parameter empty. Configure the availability zone for the read-write node and read-only node with parameter ClusterTopology.
 * @method string getUniqVpcId() Obtain VPC ID. Please use [Querying VPC list](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1).
Description: If a cloud disk edition instance is created, this item is required and must be a VPC type. If this item is left blank, the system will select the default VPC.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID. Please use [Querying VPC list](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1).
Description: If a cloud disk edition instance is created, this item is required and must be a VPC type. If this item is left blank, the system will select the default VPC.
 * @method string getUniqSubnetId() Obtain Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use [query subnet list](https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1).
Description: If this item is left empty, the system will select the default subnet in the Default VPC.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use [query subnet list](https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1).
Description: If this item is left empty, the system will select the default subnet in the Default VPC.
 * @method integer getProjectId() Obtain Project ID. If this parameter is left empty, the default project will be used. When you purchase read-only instances and disaster recovery instances, the project ID is the same as that of the source instance by default.
 * @method void setProjectId(integer $ProjectId) Set Project ID. If this parameter is left empty, the default project will be used. When you purchase read-only instances and disaster recovery instances, the project ID is the same as that of the source instance by default.
 * @method integer getPort() Obtain Custom port. Port range: 1024-65535.
Description: If this item is left blank, it defaults to 3306.
 * @method void setPort(integer $Port) Set Custom port. Port range: 1024-65535.
Description: If this item is left blank, it defaults to 3306.
 * @method string getInstanceRole() Obtain Instance type. Supported values include: master - indicates the primary instance, dr - indicates the disaster recovery instance, ro - indicates the read-only instance.
Description: Select instance type. The master type is selected by default if left empty.
 * @method void setInstanceRole(string $InstanceRole) Set Instance type. Supported values include: master - indicates the primary instance, dr - indicates the disaster recovery instance, ro - indicates the read-only instance.
Description: Select instance type. The master type is selected by default if left empty.
 * @method string getMasterInstanceId() Obtain Instance ID, required when purchasing a read-only instance or disaster recovery instance. This field represents the primary instance ID of the read-only instance or disaster recovery instance. Please use the [Query Instance List](https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) API to query the cloud database instance ID.
 * @method void setMasterInstanceId(string $MasterInstanceId) Set Instance ID, required when purchasing a read-only instance or disaster recovery instance. This field represents the primary instance ID of the read-only instance or disaster recovery instance. Please use the [Query Instance List](https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) API to query the cloud database instance ID.
 * @method string getEngineVersion() Obtain MySQL version, including 5.5, 5.6, 5.7, and 8.0. Please use the [obtain the purchasable specifications of cloud databases](https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1) API to get the version of the instance created.
Description: When creating a non-cloud disk edition instance, specify the instance version as needed (recommend 5.7 or 8.0). If this parameter is left empty, the default value is 8.0. If creating a cloud disk edition instance, this parameter can only be set to 5.7 or 8.0.
 * @method void setEngineVersion(string $EngineVersion) Set MySQL version, including 5.5, 5.6, 5.7, and 8.0. Please use the [obtain the purchasable specifications of cloud databases](https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1) API to get the version of the instance created.
Description: When creating a non-cloud disk edition instance, specify the instance version as needed (recommend 5.7 or 8.0). If this parameter is left empty, the default value is 8.0. If creating a cloud disk edition instance, this parameter can only be set to 5.7 or 8.0.
 * @method string getPassword() Obtain The root account password, which can contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and symbols `_+-&=!@#$%^*()`. This parameter applies to source instances but not to read-only or disaster recovery instances.
 * @method void setPassword(string $Password) Set The root account password, which can contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and symbols `_+-&=!@#$%^*()`. This parameter applies to source instances but not to read-only or disaster recovery instances.
 * @method integer getProtectMode() Obtain Data replication mode. Valid values: `0` (async replication), `1` (semi-sync replication), `2` (strong sync replication). Default value: `0`.
 * @method void setProtectMode(integer $ProtectMode) Set Data replication mode. Valid values: `0` (async replication), `1` (semi-sync replication), `2` (strong sync replication). Default value: `0`.
 * @method integer getDeployMode() Obtain Multi-AZ or single-AZ. Valid values: `0` (single-AZ), `1` (multi-AZ). Default value: `0`.
 * @method void setDeployMode(integer $DeployMode) Set Multi-AZ or single-AZ. Valid values: `0` (single-AZ), `1` (multi-AZ). Default value: `0`.
 * @method string getSlaveZone() Obtain AZ information of standby database 1.
Description: For two-node and three-node instances, specify this parameter. If not specified, it defaults to the value of Zone. For cloud disk edition instances, this parameter is optional. Configure the availability zone for read-write nodes and read-only nodes with parameter ClusterTopology. Single-node instances are single availability zone and no need to specify this parameter.
 * @method void setSlaveZone(string $SlaveZone) Set AZ information of standby database 1.
Description: For two-node and three-node instances, specify this parameter. If not specified, it defaults to the value of Zone. For cloud disk edition instances, this parameter is optional. Configure the availability zone for read-write nodes and read-only nodes with parameter ClusterTopology. Single-node instances are single availability zone and no need to specify this parameter.
 * @method array getParamList() Obtain Parameter list. The parameter format is ParamList.0.Name=auto_increment&ParamList.0.Value=1. You can query the configurable parameters by default by referring to [Querying the Default Configurable Parameter List](https://www.tencentcloud.com/document/api/236/32662?from_cn_redirect=1).
Description: table name case sensitivity can be enabled or disabled with parameter lower_case_table_names. A parameter value of 0 means enabling, and 1 means disabling. If not set, the default value is 0. For MySQL 8.0 edition instances, you need to set the lower_case_table_names parameter when creating an instance to turn on or off table name case sensitivity. Once created, the parameter cannot be modified, meaning table name case sensitivity cannot be changed after creation. Other database versions support modifying the lower_case_table_names parameter after the instance is created. For the function invocation method to set table name case sensitivity when creating an instance, please see example 3 in this document.
 * @method void setParamList(array $ParamList) Set Parameter list. The parameter format is ParamList.0.Name=auto_increment&ParamList.0.Value=1. You can query the configurable parameters by default by referring to [Querying the Default Configurable Parameter List](https://www.tencentcloud.com/document/api/236/32662?from_cn_redirect=1).
Description: table name case sensitivity can be enabled or disabled with parameter lower_case_table_names. A parameter value of 0 means enabling, and 1 means disabling. If not set, the default value is 0. For MySQL 8.0 edition instances, you need to set the lower_case_table_names parameter when creating an instance to turn on or off table name case sensitivity. Once created, the parameter cannot be modified, meaning table name case sensitivity cannot be changed after creation. Other database versions support modifying the lower_case_table_names parameter after the instance is created. For the function invocation method to set table name case sensitivity when creating an instance, please see example 3 in this document.
 * @method string getBackupZone() Obtain Information of replica AZ 2, which is left empty by default. Specify this parameter when purchasing a source instance in the one-source-two-replica architecture.
 * @method void setBackupZone(string $BackupZone) Set Information of replica AZ 2, which is left empty by default. Specify this parameter when purchasing a source instance in the one-source-two-replica architecture.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. Available values are: 0 - no auto-renewal; 1 - auto-renewal. Default is 0.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. Available values are: 0 - no auto-renewal; 1 - auto-renewal. Default is 0.
 * @method string getMasterRegion() Obtain Region information of the source instance, which is required when purchasing a read-only or disaster recovery instance.
 * @method void setMasterRegion(string $MasterRegion) Set Region information of the source instance, which is required when purchasing a read-only or disaster recovery instance.
 * @method array getSecurityGroup() Obtain Security group parameter. You can use the [DescribeProjectSecurityGroups](https://intl.cloud.tencent.com/document/api/236/15850?from_cn_redirect=1) API to query the security group details of a project.
 * @method void setSecurityGroup(array $SecurityGroup) Set Security group parameter. You can use the [DescribeProjectSecurityGroups](https://intl.cloud.tencent.com/document/api/236/15850?from_cn_redirect=1) API to query the security group details of a project.
 * @method RoGroup getRoGroup() Obtain Read-only instance parameter. This parameter must be passed in when purchasing read-only instances.
 * @method void setRoGroup(RoGroup $RoGroup) Set Read-only instance parameter. This parameter must be passed in when purchasing read-only instances.
 * @method string getInstanceName() Obtain Instance name. For multiple instances purchased at one time, they will be distinguished by the name suffix number, such as instnaceName=db and goodsNum=3, and their instance names are db1, db2, and db3, respectively.
 * @method void setInstanceName(string $InstanceName) Set Instance name. For multiple instances purchased at one time, they will be distinguished by the name suffix number, such as instnaceName=db and goodsNum=3, and their instance names are db1, db2, and db3, respectively.
 * @method array getResourceTags() Obtain Instance tag information
 * @method void setResourceTags(array $ResourceTags) Set Instance tag information
 * @method string getDeployGroupId() Obtain Placement group ID
 * @method void setDeployGroupId(string $DeployGroupId) Set Placement group ID
 * @method string getClientToken() Obtain A string unique in 48 hours, which is supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method void setClientToken(string $ClientToken) Set A string unique in 48 hours, which is supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method string getDeviceType() Obtain Instance isolation type. Supported values include "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "BASIC_V2" - ONTKE single-node instance, "CLOUD_NATIVE_CLUSTER" - standard type for cloud disk edition, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced for cloud disk edition. Default to general-purpose instance if not specified.
Description: If a cloud disk edition instance is created, this parameter is required.
 * @method void setDeviceType(string $DeviceType) Set Instance isolation type. Supported values include "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "BASIC_V2" - ONTKE single-node instance, "CLOUD_NATIVE_CLUSTER" - standard type for cloud disk edition, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced for cloud disk edition. Default to general-purpose instance if not specified.
Description: If a cloud disk edition instance is created, this parameter is required.
 * @method integer getParamTemplateId() Obtain Parameter template id.
Remark: If you use a custom parameter template ID, you can input the custom parameter template ID. If you plan to use the default parameter template, inputting the parameter template ID is invalid, and you need to set ParamTemplateType.
 * @method void setParamTemplateId(integer $ParamTemplateId) Set Parameter template id.
Remark: If you use a custom parameter template ID, you can input the custom parameter template ID. If you plan to use the default parameter template, inputting the parameter template ID is invalid, and you need to set ParamTemplateType.
 * @method array getAlarmPolicyList() Obtain Array of alarm policy IDs, which can be obtained through the `OriginId` field in the return value of the `DescribeAlarmPolicy` API of TCOP.
 * @method void setAlarmPolicyList(array $AlarmPolicyList) Set Array of alarm policy IDs, which can be obtained through the `OriginId` field in the return value of the `DescribeAlarmPolicy` API of TCOP.
 * @method integer getInstanceNodes() Obtain The number of nodes of the instance. To purchase a read-only instance or a basic instance, set this parameter to `1` or leave it empty. To purchase a three-node instance, set this parameter to `3` or specify the `BackupZone` parameter. If the instance to be purchased is a source instance and both `BackupZone` and this parameter are left empty, the value `2` will be used, which indicates the source instance will have two nodes.
 * @method void setInstanceNodes(integer $InstanceNodes) Set The number of nodes of the instance. To purchase a read-only instance or a basic instance, set this parameter to `1` or leave it empty. To purchase a three-node instance, set this parameter to `3` or specify the `BackupZone` parameter. If the instance to be purchased is a source instance and both `BackupZone` and this parameter are left empty, the value `2` will be used, which indicates the source instance will have two nodes.
 * @method integer getCpu() Obtain The number of the instance CPU cores. If this parameter is left empty, it will be subject to the `Memory` value.
 * @method void setCpu(integer $Cpu) Set The number of the instance CPU cores. If this parameter is left empty, it will be subject to the `Memory` value.
 * @method integer getAutoSyncFlag() Obtain Whether to automatically start disaster recovery synchronization. This parameter takes effect only for disaster recovery instances. Valid values: `0` (no), `1` (yes). Default value: `0`.
 * @method void setAutoSyncFlag(integer $AutoSyncFlag) Set Whether to automatically start disaster recovery synchronization. This parameter takes effect only for disaster recovery instances. Valid values: `0` (no), `1` (yes). Default value: `0`.
 * @method string getCageId() Obtain Financial cage ID.
 * @method void setCageId(string $CageId) Set Financial cage ID.
 * @method string getParamTemplateType() Obtain Default parameter template type. Supported values include: "HIGH_STABILITY" - high-stability template, "HIGH_PERFORMANCE" - high-performance template.
Remark: If you need to use the TencentDB for MySQL default parameter template, set up ParamTemplateType.
 * @method void setParamTemplateType(string $ParamTemplateType) Set Default parameter template type. Supported values include: "HIGH_STABILITY" - high-stability template, "HIGH_PERFORMANCE" - high-performance template.
Remark: If you need to use the TencentDB for MySQL default parameter template, set up ParamTemplateType.
 * @method array getAlarmPolicyIdList() Obtain The array of alarm policy names, such as ["policy-uyoee9wg"]. If the `AlarmPolicyList` parameter is specified, this parameter is invalid.
 * @method void setAlarmPolicyIdList(array $AlarmPolicyIdList) Set The array of alarm policy names, such as ["policy-uyoee9wg"]. If the `AlarmPolicyList` parameter is specified, this parameter is invalid.
 * @method boolean getDryRun() Obtain Whether to only pre-check this request. true: Send a check request without creating an instance. Check items include whether required parameters are filled, request format, and service limit. If the check failed, return the corresponding error code; if the check passed, return RequestId. false: Send a normal request and create the instance directly after passing the check.
Defaults to false.
 * @method void setDryRun(boolean $DryRun) Set Whether to only pre-check this request. true: Send a check request without creating an instance. Check items include whether required parameters are filled, request format, and service limit. If the check failed, return the corresponding error code; if the check passed, return RequestId. false: Send a normal request and create the instance directly after passing the check.
Defaults to false.
 * @method string getEngineType() Obtain Instance engine type. Valid values: `InnoDB` (default), `RocksDB`.
 * @method void setEngineType(string $EngineType) Set Instance engine type. Valid values: `InnoDB` (default), `RocksDB`.
 * @method array getVips() Obtain The list of IPs for sources instances. Only one IP address can be assigned to a single source instance. If all IPs are used up, the system will automatically assign IPs to the remaining source instances that do not have one.
 * @method void setVips(array $Vips) Set The list of IPs for sources instances. Only one IP address can be assigned to a single source instance. If all IPs are used up, the system will automatically assign IPs to the remaining source instances that do not have one.
 * @method integer getDataProtectVolume() Obtain Data protection space size of the cloud disk edition instance in GB. Setting range is 1 - 10.
 * @method void setDataProtectVolume(integer $DataProtectVolume) Set Data protection space size of the cloud disk edition instance in GB. Setting range is 1 - 10.
 * @method ClusterTopology getClusterTopology() Obtain Cloud disk edition node topology configuration.
Description: If a cloud disk edition instance is purchased, this parameter is required. Set the RW and RO node topology for the cloud disk edition instance. The RO node scope is 1-5. Set at least 1 RO node.
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) Set Cloud disk edition node topology configuration.
Description: If a cloud disk edition instance is purchased, this parameter is required. Set the RW and RO node topology for the cloud disk edition instance. The RO node scope is 1-5. Set at least 1 RO node.
 * @method string getDiskType() Obtain Disk Type. This parameter can be specified for single-node (cloud disk edition) or cloud disk edition instance. CLOUD_SSD means SSD Cloud Block Storage, CLOUD_HSSD refers to enhanced SSD cloud disk, and CLOUD_PREMIUM indicates high-performance cloud block storage.
Description: The supported regions for the hard disk type of single-node (cloud disk edition) and cloud disk edition instances vary slightly. For the specific support situation, refer to [Regions and Availability Zones](https://www.tencentcloud.com/document/product/236/8458?from_cn_redirect=1).
 * @method void setDiskType(string $DiskType) Set Disk Type. This parameter can be specified for single-node (cloud disk edition) or cloud disk edition instance. CLOUD_SSD means SSD Cloud Block Storage, CLOUD_HSSD refers to enhanced SSD cloud disk, and CLOUD_PREMIUM indicates high-performance cloud block storage.
Description: The supported regions for the hard disk type of single-node (cloud disk edition) and cloud disk edition instances vary slightly. For the specific support situation, refer to [Regions and Availability Zones](https://www.tencentcloud.com/document/product/236/8458?from_cn_redirect=1).
 * @method string getDestroyProtect() Obtain Turn on or off instance destruction protection. on - enabled, off - disabled.
 * @method void setDestroyProtect(string $DestroyProtect) Set Turn on or off instance destruction protection. on - enabled, off - disabled.
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer Instance memory size in MB. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported memory specifications.
     */
    public $Memory;

    /**
     * @var integer Instance disk size in GB. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported disk specifications.
     */
    public $Volume;

    /**
     * @var integer Instance validity period in months. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
     */
    public $Period;

    /**
     * @var integer Number of instances. Value range: 1-100. Default value: `1`.
     */
    public $GoodsNum;

    /**
     * @var string For AZ information, please use the [Obtain the Purchasable Specifications of Cloud Databases](https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1) API to obtain the availability zones that can be created.
Description: If you create a single-node, two-node, or three-node instance, this parameter is required. Specify an availability zone. If you do not specify an availability zone, the system will automatically select one (possibly not the availability zone you want to deploy in). If you create a cloud disk edition instance, leave this parameter empty. Configure the availability zone for the read-write node and read-only node with parameter ClusterTopology.
     */
    public $Zone;

    /**
     * @var string VPC ID. Please use [Querying VPC list](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1).
Description: If a cloud disk edition instance is created, this item is required and must be a VPC type. If this item is left blank, the system will select the default VPC.
     */
    public $UniqVpcId;

    /**
     * @var string Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use [query subnet list](https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1).
Description: If this item is left empty, the system will select the default subnet in the Default VPC.
     */
    public $UniqSubnetId;

    /**
     * @var integer Project ID. If this parameter is left empty, the default project will be used. When you purchase read-only instances and disaster recovery instances, the project ID is the same as that of the source instance by default.
     */
    public $ProjectId;

    /**
     * @var integer Custom port. Port range: 1024-65535.
Description: If this item is left blank, it defaults to 3306.
     */
    public $Port;

    /**
     * @var string Instance type. Supported values include: master - indicates the primary instance, dr - indicates the disaster recovery instance, ro - indicates the read-only instance.
Description: Select instance type. The master type is selected by default if left empty.
     */
    public $InstanceRole;

    /**
     * @var string Instance ID, required when purchasing a read-only instance or disaster recovery instance. This field represents the primary instance ID of the read-only instance or disaster recovery instance. Please use the [Query Instance List](https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) API to query the cloud database instance ID.
     */
    public $MasterInstanceId;

    /**
     * @var string MySQL version, including 5.5, 5.6, 5.7, and 8.0. Please use the [obtain the purchasable specifications of cloud databases](https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1) API to get the version of the instance created.
Description: When creating a non-cloud disk edition instance, specify the instance version as needed (recommend 5.7 or 8.0). If this parameter is left empty, the default value is 8.0. If creating a cloud disk edition instance, this parameter can only be set to 5.7 or 8.0.
     */
    public $EngineVersion;

    /**
     * @var string The root account password, which can contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and symbols `_+-&=!@#$%^*()`. This parameter applies to source instances but not to read-only or disaster recovery instances.
     */
    public $Password;

    /**
     * @var integer Data replication mode. Valid values: `0` (async replication), `1` (semi-sync replication), `2` (strong sync replication). Default value: `0`.
     */
    public $ProtectMode;

    /**
     * @var integer Multi-AZ or single-AZ. Valid values: `0` (single-AZ), `1` (multi-AZ). Default value: `0`.
     */
    public $DeployMode;

    /**
     * @var string AZ information of standby database 1.
Description: For two-node and three-node instances, specify this parameter. If not specified, it defaults to the value of Zone. For cloud disk edition instances, this parameter is optional. Configure the availability zone for read-write nodes and read-only nodes with parameter ClusterTopology. Single-node instances are single availability zone and no need to specify this parameter.
     */
    public $SlaveZone;

    /**
     * @var array Parameter list. The parameter format is ParamList.0.Name=auto_increment&ParamList.0.Value=1. You can query the configurable parameters by default by referring to [Querying the Default Configurable Parameter List](https://www.tencentcloud.com/document/api/236/32662?from_cn_redirect=1).
Description: table name case sensitivity can be enabled or disabled with parameter lower_case_table_names. A parameter value of 0 means enabling, and 1 means disabling. If not set, the default value is 0. For MySQL 8.0 edition instances, you need to set the lower_case_table_names parameter when creating an instance to turn on or off table name case sensitivity. Once created, the parameter cannot be modified, meaning table name case sensitivity cannot be changed after creation. Other database versions support modifying the lower_case_table_names parameter after the instance is created. For the function invocation method to set table name case sensitivity when creating an instance, please see example 3 in this document.
     */
    public $ParamList;

    /**
     * @var string Information of replica AZ 2, which is left empty by default. Specify this parameter when purchasing a source instance in the one-source-two-replica architecture.
     */
    public $BackupZone;

    /**
     * @var integer Auto-renewal flag. Available values are: 0 - no auto-renewal; 1 - auto-renewal. Default is 0.
     */
    public $AutoRenewFlag;

    /**
     * @var string Region information of the source instance, which is required when purchasing a read-only or disaster recovery instance.
     */
    public $MasterRegion;

    /**
     * @var array Security group parameter. You can use the [DescribeProjectSecurityGroups](https://intl.cloud.tencent.com/document/api/236/15850?from_cn_redirect=1) API to query the security group details of a project.
     */
    public $SecurityGroup;

    /**
     * @var RoGroup Read-only instance parameter. This parameter must be passed in when purchasing read-only instances.
     */
    public $RoGroup;

    /**
     * @var string Instance name. For multiple instances purchased at one time, they will be distinguished by the name suffix number, such as instnaceName=db and goodsNum=3, and their instance names are db1, db2, and db3, respectively.
     */
    public $InstanceName;

    /**
     * @var array Instance tag information
     */
    public $ResourceTags;

    /**
     * @var string Placement group ID
     */
    public $DeployGroupId;

    /**
     * @var string A string unique in 48 hours, which is supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     */
    public $ClientToken;

    /**
     * @var string Instance isolation type. Supported values include "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "BASIC_V2" - ONTKE single-node instance, "CLOUD_NATIVE_CLUSTER" - standard type for cloud disk edition, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced for cloud disk edition. Default to general-purpose instance if not specified.
Description: If a cloud disk edition instance is created, this parameter is required.
     */
    public $DeviceType;

    /**
     * @var integer Parameter template id.
Remark: If you use a custom parameter template ID, you can input the custom parameter template ID. If you plan to use the default parameter template, inputting the parameter template ID is invalid, and you need to set ParamTemplateType.
     */
    public $ParamTemplateId;

    /**
     * @var array Array of alarm policy IDs, which can be obtained through the `OriginId` field in the return value of the `DescribeAlarmPolicy` API of TCOP.
     */
    public $AlarmPolicyList;

    /**
     * @var integer The number of nodes of the instance. To purchase a read-only instance or a basic instance, set this parameter to `1` or leave it empty. To purchase a three-node instance, set this parameter to `3` or specify the `BackupZone` parameter. If the instance to be purchased is a source instance and both `BackupZone` and this parameter are left empty, the value `2` will be used, which indicates the source instance will have two nodes.
     */
    public $InstanceNodes;

    /**
     * @var integer The number of the instance CPU cores. If this parameter is left empty, it will be subject to the `Memory` value.
     */
    public $Cpu;

    /**
     * @var integer Whether to automatically start disaster recovery synchronization. This parameter takes effect only for disaster recovery instances. Valid values: `0` (no), `1` (yes). Default value: `0`.
     */
    public $AutoSyncFlag;

    /**
     * @var string Financial cage ID.
     */
    public $CageId;

    /**
     * @var string Default parameter template type. Supported values include: "HIGH_STABILITY" - high-stability template, "HIGH_PERFORMANCE" - high-performance template.
Remark: If you need to use the TencentDB for MySQL default parameter template, set up ParamTemplateType.
     */
    public $ParamTemplateType;

    /**
     * @var array The array of alarm policy names, such as ["policy-uyoee9wg"]. If the `AlarmPolicyList` parameter is specified, this parameter is invalid.
     */
    public $AlarmPolicyIdList;

    /**
     * @var boolean Whether to only pre-check this request. true: Send a check request without creating an instance. Check items include whether required parameters are filled, request format, and service limit. If the check failed, return the corresponding error code; if the check passed, return RequestId. false: Send a normal request and create the instance directly after passing the check.
Defaults to false.
     */
    public $DryRun;

    /**
     * @var string Instance engine type. Valid values: `InnoDB` (default), `RocksDB`.
     */
    public $EngineType;

    /**
     * @var array The list of IPs for sources instances. Only one IP address can be assigned to a single source instance. If all IPs are used up, the system will automatically assign IPs to the remaining source instances that do not have one.
     */
    public $Vips;

    /**
     * @var integer Data protection space size of the cloud disk edition instance in GB. Setting range is 1 - 10.
     */
    public $DataProtectVolume;

    /**
     * @var ClusterTopology Cloud disk edition node topology configuration.
Description: If a cloud disk edition instance is purchased, this parameter is required. Set the RW and RO node topology for the cloud disk edition instance. The RO node scope is 1-5. Set at least 1 RO node.
     */
    public $ClusterTopology;

    /**
     * @var string Disk Type. This parameter can be specified for single-node (cloud disk edition) or cloud disk edition instance. CLOUD_SSD means SSD Cloud Block Storage, CLOUD_HSSD refers to enhanced SSD cloud disk, and CLOUD_PREMIUM indicates high-performance cloud block storage.
Description: The supported regions for the hard disk type of single-node (cloud disk edition) and cloud disk edition instances vary slightly. For the specific support situation, refer to [Regions and Availability Zones](https://www.tencentcloud.com/document/product/236/8458?from_cn_redirect=1).
     */
    public $DiskType;

    /**
     * @var string Turn on or off instance destruction protection. on - enabled, off - disabled.
     */
    public $DestroyProtect;

    /**
     * @param integer $Memory Instance memory size in MB. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported memory specifications.
     * @param integer $Volume Instance disk size in GB. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported disk specifications.
     * @param integer $Period Instance validity period in months. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
     * @param integer $GoodsNum Number of instances. Value range: 1-100. Default value: `1`.
     * @param string $Zone For AZ information, please use the [Obtain the Purchasable Specifications of Cloud Databases](https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1) API to obtain the availability zones that can be created.
Description: If you create a single-node, two-node, or three-node instance, this parameter is required. Specify an availability zone. If you do not specify an availability zone, the system will automatically select one (possibly not the availability zone you want to deploy in). If you create a cloud disk edition instance, leave this parameter empty. Configure the availability zone for the read-write node and read-only node with parameter ClusterTopology.
     * @param string $UniqVpcId VPC ID. Please use [Querying VPC list](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1).
Description: If a cloud disk edition instance is created, this item is required and must be a VPC type. If this item is left blank, the system will select the default VPC.
     * @param string $UniqSubnetId Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use [query subnet list](https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1).
Description: If this item is left empty, the system will select the default subnet in the Default VPC.
     * @param integer $ProjectId Project ID. If this parameter is left empty, the default project will be used. When you purchase read-only instances and disaster recovery instances, the project ID is the same as that of the source instance by default.
     * @param integer $Port Custom port. Port range: 1024-65535.
Description: If this item is left blank, it defaults to 3306.
     * @param string $InstanceRole Instance type. Supported values include: master - indicates the primary instance, dr - indicates the disaster recovery instance, ro - indicates the read-only instance.
Description: Select instance type. The master type is selected by default if left empty.
     * @param string $MasterInstanceId Instance ID, required when purchasing a read-only instance or disaster recovery instance. This field represents the primary instance ID of the read-only instance or disaster recovery instance. Please use the [Query Instance List](https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) API to query the cloud database instance ID.
     * @param string $EngineVersion MySQL version, including 5.5, 5.6, 5.7, and 8.0. Please use the [obtain the purchasable specifications of cloud databases](https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1) API to get the version of the instance created.
Description: When creating a non-cloud disk edition instance, specify the instance version as needed (recommend 5.7 or 8.0). If this parameter is left empty, the default value is 8.0. If creating a cloud disk edition instance, this parameter can only be set to 5.7 or 8.0.
     * @param string $Password The root account password, which can contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and symbols `_+-&=!@#$%^*()`. This parameter applies to source instances but not to read-only or disaster recovery instances.
     * @param integer $ProtectMode Data replication mode. Valid values: `0` (async replication), `1` (semi-sync replication), `2` (strong sync replication). Default value: `0`.
     * @param integer $DeployMode Multi-AZ or single-AZ. Valid values: `0` (single-AZ), `1` (multi-AZ). Default value: `0`.
     * @param string $SlaveZone AZ information of standby database 1.
Description: For two-node and three-node instances, specify this parameter. If not specified, it defaults to the value of Zone. For cloud disk edition instances, this parameter is optional. Configure the availability zone for read-write nodes and read-only nodes with parameter ClusterTopology. Single-node instances are single availability zone and no need to specify this parameter.
     * @param array $ParamList Parameter list. The parameter format is ParamList.0.Name=auto_increment&ParamList.0.Value=1. You can query the configurable parameters by default by referring to [Querying the Default Configurable Parameter List](https://www.tencentcloud.com/document/api/236/32662?from_cn_redirect=1).
Description: table name case sensitivity can be enabled or disabled with parameter lower_case_table_names. A parameter value of 0 means enabling, and 1 means disabling. If not set, the default value is 0. For MySQL 8.0 edition instances, you need to set the lower_case_table_names parameter when creating an instance to turn on or off table name case sensitivity. Once created, the parameter cannot be modified, meaning table name case sensitivity cannot be changed after creation. Other database versions support modifying the lower_case_table_names parameter after the instance is created. For the function invocation method to set table name case sensitivity when creating an instance, please see example 3 in this document.
     * @param string $BackupZone Information of replica AZ 2, which is left empty by default. Specify this parameter when purchasing a source instance in the one-source-two-replica architecture.
     * @param integer $AutoRenewFlag Auto-renewal flag. Available values are: 0 - no auto-renewal; 1 - auto-renewal. Default is 0.
     * @param string $MasterRegion Region information of the source instance, which is required when purchasing a read-only or disaster recovery instance.
     * @param array $SecurityGroup Security group parameter. You can use the [DescribeProjectSecurityGroups](https://intl.cloud.tencent.com/document/api/236/15850?from_cn_redirect=1) API to query the security group details of a project.
     * @param RoGroup $RoGroup Read-only instance parameter. This parameter must be passed in when purchasing read-only instances.
     * @param string $InstanceName Instance name. For multiple instances purchased at one time, they will be distinguished by the name suffix number, such as instnaceName=db and goodsNum=3, and their instance names are db1, db2, and db3, respectively.
     * @param array $ResourceTags Instance tag information
     * @param string $DeployGroupId Placement group ID
     * @param string $ClientToken A string unique in 48 hours, which is supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     * @param string $DeviceType Instance isolation type. Supported values include "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "BASIC_V2" - ONTKE single-node instance, "CLOUD_NATIVE_CLUSTER" - standard type for cloud disk edition, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced for cloud disk edition. Default to general-purpose instance if not specified.
Description: If a cloud disk edition instance is created, this parameter is required.
     * @param integer $ParamTemplateId Parameter template id.
Remark: If you use a custom parameter template ID, you can input the custom parameter template ID. If you plan to use the default parameter template, inputting the parameter template ID is invalid, and you need to set ParamTemplateType.
     * @param array $AlarmPolicyList Array of alarm policy IDs, which can be obtained through the `OriginId` field in the return value of the `DescribeAlarmPolicy` API of TCOP.
     * @param integer $InstanceNodes The number of nodes of the instance. To purchase a read-only instance or a basic instance, set this parameter to `1` or leave it empty. To purchase a three-node instance, set this parameter to `3` or specify the `BackupZone` parameter. If the instance to be purchased is a source instance and both `BackupZone` and this parameter are left empty, the value `2` will be used, which indicates the source instance will have two nodes.
     * @param integer $Cpu The number of the instance CPU cores. If this parameter is left empty, it will be subject to the `Memory` value.
     * @param integer $AutoSyncFlag Whether to automatically start disaster recovery synchronization. This parameter takes effect only for disaster recovery instances. Valid values: `0` (no), `1` (yes). Default value: `0`.
     * @param string $CageId Financial cage ID.
     * @param string $ParamTemplateType Default parameter template type. Supported values include: "HIGH_STABILITY" - high-stability template, "HIGH_PERFORMANCE" - high-performance template.
Remark: If you need to use the TencentDB for MySQL default parameter template, set up ParamTemplateType.
     * @param array $AlarmPolicyIdList The array of alarm policy names, such as ["policy-uyoee9wg"]. If the `AlarmPolicyList` parameter is specified, this parameter is invalid.
     * @param boolean $DryRun Whether to only pre-check this request. true: Send a check request without creating an instance. Check items include whether required parameters are filled, request format, and service limit. If the check failed, return the corresponding error code; if the check passed, return RequestId. false: Send a normal request and create the instance directly after passing the check.
Defaults to false.
     * @param string $EngineType Instance engine type. Valid values: `InnoDB` (default), `RocksDB`.
     * @param array $Vips The list of IPs for sources instances. Only one IP address can be assigned to a single source instance. If all IPs are used up, the system will automatically assign IPs to the remaining source instances that do not have one.
     * @param integer $DataProtectVolume Data protection space size of the cloud disk edition instance in GB. Setting range is 1 - 10.
     * @param ClusterTopology $ClusterTopology Cloud disk edition node topology configuration.
Description: If a cloud disk edition instance is purchased, this parameter is required. Set the RW and RO node topology for the cloud disk edition instance. The RO node scope is 1-5. Set at least 1 RO node.
     * @param string $DiskType Disk Type. This parameter can be specified for single-node (cloud disk edition) or cloud disk edition instance. CLOUD_SSD means SSD Cloud Block Storage, CLOUD_HSSD refers to enhanced SSD cloud disk, and CLOUD_PREMIUM indicates high-performance cloud block storage.
Description: The supported regions for the hard disk type of single-node (cloud disk edition) and cloud disk edition instances vary slightly. For the specific support situation, refer to [Regions and Availability Zones](https://www.tencentcloud.com/document/product/236/8458?from_cn_redirect=1).
     * @param string $DestroyProtect Turn on or off instance destruction protection. on - enabled, off - disabled.
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("MasterInstanceId",$param) and $param["MasterInstanceId"] !== null) {
            $this->MasterInstanceId = $param["MasterInstanceId"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("BackupZone",$param) and $param["BackupZone"] !== null) {
            $this->BackupZone = $param["BackupZone"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("MasterRegion",$param) and $param["MasterRegion"] !== null) {
            $this->MasterRegion = $param["MasterRegion"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("RoGroup",$param) and $param["RoGroup"] !== null) {
            $this->RoGroup = new RoGroup();
            $this->RoGroup->deserialize($param["RoGroup"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DeployGroupId",$param) and $param["DeployGroupId"] !== null) {
            $this->DeployGroupId = $param["DeployGroupId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("AlarmPolicyList",$param) and $param["AlarmPolicyList"] !== null) {
            $this->AlarmPolicyList = $param["AlarmPolicyList"];
        }

        if (array_key_exists("InstanceNodes",$param) and $param["InstanceNodes"] !== null) {
            $this->InstanceNodes = $param["InstanceNodes"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("AutoSyncFlag",$param) and $param["AutoSyncFlag"] !== null) {
            $this->AutoSyncFlag = $param["AutoSyncFlag"];
        }

        if (array_key_exists("CageId",$param) and $param["CageId"] !== null) {
            $this->CageId = $param["CageId"];
        }

        if (array_key_exists("ParamTemplateType",$param) and $param["ParamTemplateType"] !== null) {
            $this->ParamTemplateType = $param["ParamTemplateType"];
        }

        if (array_key_exists("AlarmPolicyIdList",$param) and $param["AlarmPolicyIdList"] !== null) {
            $this->AlarmPolicyIdList = $param["AlarmPolicyIdList"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("DataProtectVolume",$param) and $param["DataProtectVolume"] !== null) {
            $this->DataProtectVolume = $param["DataProtectVolume"];
        }

        if (array_key_exists("ClusterTopology",$param) and $param["ClusterTopology"] !== null) {
            $this->ClusterTopology = new ClusterTopology();
            $this->ClusterTopology->deserialize($param["ClusterTopology"]);
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DestroyProtect",$param) and $param["DestroyProtect"] !== null) {
            $this->DestroyProtect = $param["DestroyProtect"];
        }
    }
}
