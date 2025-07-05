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
 * @method string getZone() Obtain AZ information. The system will automatically select an AZ by default. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported AZs.
 * @method void setZone(string $Zone) Set AZ information. The system will automatically select an AZ by default. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported AZs.
 * @method string getUniqVpcId() Obtain VPC ID. If this parameter is not passed in, the basic network will be selected by default. You can use the [DescribeVpcs](https://intl.cloud.tencent.com/document/api/215/15778?from_cn_redirect=1) API to query the VPCs.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID. If this parameter is not passed in, the basic network will be selected by default. You can use the [DescribeVpcs](https://intl.cloud.tencent.com/document/api/215/15778?from_cn_redirect=1) API to query the VPCs.
 * @method string getUniqSubnetId() Obtain VPC subnet ID. If `UniqVpcId` is set, then `UniqSubnetId` will be required. You can use the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API to query the subnet lists.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set VPC subnet ID. If `UniqVpcId` is set, then `UniqSubnetId` will be required. You can use the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API to query the subnet lists.
 * @method integer getProjectId() Obtain Project ID. If this parameter is left empty, the default project will be used. When you purchase read-only instances and disaster recovery instances, the project ID is the same as that of the source instance by default.
 * @method void setProjectId(integer $ProjectId) Set Project ID. If this parameter is left empty, the default project will be used. When you purchase read-only instances and disaster recovery instances, the project ID is the same as that of the source instance by default.
 * @method integer getPort() Obtain Custom port. Value range: 1024-65535.
 * @method void setPort(integer $Port) Set Custom port. Value range: 1024-65535.
 * @method string getInstanceRole() Obtain Instance typeA. Valid values: `master` (source instance), `dr` (disaster recovery instance), `ro` (read-only instance).
 * @method void setInstanceRole(string $InstanceRole) Set Instance typeA. Valid values: `master` (source instance), `dr` (disaster recovery instance), `ro` (read-only instance).
 * @method string getMasterInstanceId() Obtain Instance ID. It is required when purchasing a read-only instance, which is the same as the source instance ID. You can use the [DescribeDBInstances](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) API to query the instance ID.
 * @method void setMasterInstanceId(string $MasterInstanceId) Set Instance ID. It is required when purchasing a read-only instance, which is the same as the source instance ID. You can use the [DescribeDBInstances](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) API to query the instance ID.
 * @method string getEngineVersion() Obtain MySQL version. Valid values: `5.5`, `5.6`, `5.7`, and `8.0`. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported instance versions.
 * @method void setEngineVersion(string $EngineVersion) Set MySQL version. Valid values: `5.5`, `5.6`, `5.7`, and `8.0`. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported instance versions.
 * @method string getPassword() Obtain The root account password, which can contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and symbols `_+-&=!@#$%^*()`. This parameter applies to source instances but not to read-only or disaster recovery instances.
 * @method void setPassword(string $Password) Set The root account password, which can contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and symbols `_+-&=!@#$%^*()`. This parameter applies to source instances but not to read-only or disaster recovery instances.
 * @method integer getProtectMode() Obtain Data replication mode. Valid values: `0` (async replication), `1` (semi-sync replication), `2` (strong sync replication). Default value: `0`.
 * @method void setProtectMode(integer $ProtectMode) Set Data replication mode. Valid values: `0` (async replication), `1` (semi-sync replication), `2` (strong sync replication). Default value: `0`.
 * @method integer getDeployMode() Obtain Multi-AZ or single-AZ. Valid values: `0` (single-AZ), `1` (multi-AZ). Default value: `0`.
 * @method void setDeployMode(integer $DeployMode) Set Multi-AZ or single-AZ. Valid values: `0` (single-AZ), `1` (multi-AZ). Default value: `0`.
 * @method string getSlaveZone() Obtain Information of replica AZ 1, which is the `Zone` value by default.
 * @method void setSlaveZone(string $SlaveZone) Set Information of replica AZ 1, which is the `Zone` value by default.
 * @method array getParamList() Obtain List of parameters in the format of ParamList.0.Name=auto_increment&ParamList.0.Value=1. You can use the [DescribeDefaultParams](https://intl.cloud.tencent.com/document/api/236/32662?from_cn_redirect=1) API to query the configurable parameters.
 * @method void setParamList(array $ParamList) Set List of parameters in the format of ParamList.0.Name=auto_increment&ParamList.0.Value=1. You can use the [DescribeDefaultParams](https://intl.cloud.tencent.com/document/api/236/32662?from_cn_redirect=1) API to query the configurable parameters.
 * @method string getBackupZone() Obtain Information of replica AZ 2, which is left empty by default. Specify this parameter when purchasing a source instance in the one-source-two-replica architecture.
 * @method void setBackupZone(string $BackupZone) Set Information of replica AZ 2, which is left empty by default. Specify this parameter when purchasing a source instance in the one-source-two-replica architecture.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. Valid values: `0` (auto-renewal not enabled), `1` (auto-renewal enabled).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. Valid values: `0` (auto-renewal not enabled), `1` (auto-renewal enabled).
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
 * @method string getDeviceType() Obtain Instance isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). Default value: `UNIVERSAL`.
 * @method void setDeviceType(string $DeviceType) Set Instance isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). Default value: `UNIVERSAL`.
 * @method integer getParamTemplateId() Obtain Parameter template ID
 * @method void setParamTemplateId(integer $ParamTemplateId) Set Parameter template ID
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
 * @method string getParamTemplateType() Obtain Type of the default parameter template. Valid values: `HIGH_STABILITY` (high-stability template), `HIGH_PERFORMANCE` (high-performance template).
 * @method void setParamTemplateType(string $ParamTemplateType) Set Type of the default parameter template. Valid values: `HIGH_STABILITY` (high-stability template), `HIGH_PERFORMANCE` (high-performance template).
 * @method array getAlarmPolicyIdList() Obtain The array of alarm policy names, such as ["policy-uyoee9wg"]. If the `AlarmPolicyList` parameter is specified, this parameter is invalid.
 * @method void setAlarmPolicyIdList(array $AlarmPolicyIdList) Set The array of alarm policy names, such as ["policy-uyoee9wg"]. If the `AlarmPolicyList` parameter is specified, this parameter is invalid.
 * @method boolean getDryRun() Obtain Whether to check the request without creating any instance. Valid values: `true`, `false` (default). After being submitted, the request will be checked to see if it is in correct format and has all required parameters with valid values. An error code is returned if the check failed, and `RequestId` is returned if the check succeeded. After a successful check, no instance will be created if this parameter is set to `true`, whereas an instance will be created and if it is set to `false`.
 * @method void setDryRun(boolean $DryRun) Set Whether to check the request without creating any instance. Valid values: `true`, `false` (default). After being submitted, the request will be checked to see if it is in correct format and has all required parameters with valid values. An error code is returned if the check failed, and `RequestId` is returned if the check succeeded. After a successful check, no instance will be created if this parameter is set to `true`, whereas an instance will be created and if it is set to `false`.
 * @method string getEngineType() Obtain Instance engine type. Valid values: `InnoDB` (default), `RocksDB`.
 * @method void setEngineType(string $EngineType) Set Instance engine type. Valid values: `InnoDB` (default), `RocksDB`.
 * @method array getVips() Obtain The list of IPs for sources instances. Only one IP address can be assigned to a single source instance. If all IPs are used up, the system will automatically assign IPs to the remaining source instances that do not have one.
 * @method void setVips(array $Vips) Set The list of IPs for sources instances. Only one IP address can be assigned to a single source instance. If all IPs are used up, the system will automatically assign IPs to the remaining source instances that do not have one.
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
     * @var string AZ information. The system will automatically select an AZ by default. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported AZs.
     */
    public $Zone;

    /**
     * @var string VPC ID. If this parameter is not passed in, the basic network will be selected by default. You can use the [DescribeVpcs](https://intl.cloud.tencent.com/document/api/215/15778?from_cn_redirect=1) API to query the VPCs.
     */
    public $UniqVpcId;

    /**
     * @var string VPC subnet ID. If `UniqVpcId` is set, then `UniqSubnetId` will be required. You can use the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API to query the subnet lists.
     */
    public $UniqSubnetId;

    /**
     * @var integer Project ID. If this parameter is left empty, the default project will be used. When you purchase read-only instances and disaster recovery instances, the project ID is the same as that of the source instance by default.
     */
    public $ProjectId;

    /**
     * @var integer Custom port. Value range: 1024-65535.
     */
    public $Port;

    /**
     * @var string Instance typeA. Valid values: `master` (source instance), `dr` (disaster recovery instance), `ro` (read-only instance).
     */
    public $InstanceRole;

    /**
     * @var string Instance ID. It is required when purchasing a read-only instance, which is the same as the source instance ID. You can use the [DescribeDBInstances](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) API to query the instance ID.
     */
    public $MasterInstanceId;

    /**
     * @var string MySQL version. Valid values: `5.5`, `5.6`, `5.7`, and `8.0`. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported instance versions.
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
     * @var string Information of replica AZ 1, which is the `Zone` value by default.
     */
    public $SlaveZone;

    /**
     * @var array List of parameters in the format of ParamList.0.Name=auto_increment&ParamList.0.Value=1. You can use the [DescribeDefaultParams](https://intl.cloud.tencent.com/document/api/236/32662?from_cn_redirect=1) API to query the configurable parameters.
     */
    public $ParamList;

    /**
     * @var string Information of replica AZ 2, which is left empty by default. Specify this parameter when purchasing a source instance in the one-source-two-replica architecture.
     */
    public $BackupZone;

    /**
     * @var integer Auto-renewal flag. Valid values: `0` (auto-renewal not enabled), `1` (auto-renewal enabled).
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
     * @var string Instance isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). Default value: `UNIVERSAL`.
     */
    public $DeviceType;

    /**
     * @var integer Parameter template ID
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
     * @var string Type of the default parameter template. Valid values: `HIGH_STABILITY` (high-stability template), `HIGH_PERFORMANCE` (high-performance template).
     */
    public $ParamTemplateType;

    /**
     * @var array The array of alarm policy names, such as ["policy-uyoee9wg"]. If the `AlarmPolicyList` parameter is specified, this parameter is invalid.
     */
    public $AlarmPolicyIdList;

    /**
     * @var boolean Whether to check the request without creating any instance. Valid values: `true`, `false` (default). After being submitted, the request will be checked to see if it is in correct format and has all required parameters with valid values. An error code is returned if the check failed, and `RequestId` is returned if the check succeeded. After a successful check, no instance will be created if this parameter is set to `true`, whereas an instance will be created and if it is set to `false`.
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
     * @param integer $Memory Instance memory size in MB. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported memory specifications.
     * @param integer $Volume Instance disk size in GB. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported disk specifications.
     * @param integer $Period Instance validity period in months. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
     * @param integer $GoodsNum Number of instances. Value range: 1-100. Default value: `1`.
     * @param string $Zone AZ information. The system will automatically select an AZ by default. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported AZs.
     * @param string $UniqVpcId VPC ID. If this parameter is not passed in, the basic network will be selected by default. You can use the [DescribeVpcs](https://intl.cloud.tencent.com/document/api/215/15778?from_cn_redirect=1) API to query the VPCs.
     * @param string $UniqSubnetId VPC subnet ID. If `UniqVpcId` is set, then `UniqSubnetId` will be required. You can use the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API to query the subnet lists.
     * @param integer $ProjectId Project ID. If this parameter is left empty, the default project will be used. When you purchase read-only instances and disaster recovery instances, the project ID is the same as that of the source instance by default.
     * @param integer $Port Custom port. Value range: 1024-65535.
     * @param string $InstanceRole Instance typeA. Valid values: `master` (source instance), `dr` (disaster recovery instance), `ro` (read-only instance).
     * @param string $MasterInstanceId Instance ID. It is required when purchasing a read-only instance, which is the same as the source instance ID. You can use the [DescribeDBInstances](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) API to query the instance ID.
     * @param string $EngineVersion MySQL version. Valid values: `5.5`, `5.6`, `5.7`, and `8.0`. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the supported instance versions.
     * @param string $Password The root account password, which can contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and symbols `_+-&=!@#$%^*()`. This parameter applies to source instances but not to read-only or disaster recovery instances.
     * @param integer $ProtectMode Data replication mode. Valid values: `0` (async replication), `1` (semi-sync replication), `2` (strong sync replication). Default value: `0`.
     * @param integer $DeployMode Multi-AZ or single-AZ. Valid values: `0` (single-AZ), `1` (multi-AZ). Default value: `0`.
     * @param string $SlaveZone Information of replica AZ 1, which is the `Zone` value by default.
     * @param array $ParamList List of parameters in the format of ParamList.0.Name=auto_increment&ParamList.0.Value=1. You can use the [DescribeDefaultParams](https://intl.cloud.tencent.com/document/api/236/32662?from_cn_redirect=1) API to query the configurable parameters.
     * @param string $BackupZone Information of replica AZ 2, which is left empty by default. Specify this parameter when purchasing a source instance in the one-source-two-replica architecture.
     * @param integer $AutoRenewFlag Auto-renewal flag. Valid values: `0` (auto-renewal not enabled), `1` (auto-renewal enabled).
     * @param string $MasterRegion Region information of the source instance, which is required when purchasing a read-only or disaster recovery instance.
     * @param array $SecurityGroup Security group parameter. You can use the [DescribeProjectSecurityGroups](https://intl.cloud.tencent.com/document/api/236/15850?from_cn_redirect=1) API to query the security group details of a project.
     * @param RoGroup $RoGroup Read-only instance parameter. This parameter must be passed in when purchasing read-only instances.
     * @param string $InstanceName Instance name. For multiple instances purchased at one time, they will be distinguished by the name suffix number, such as instnaceName=db and goodsNum=3, and their instance names are db1, db2, and db3, respectively.
     * @param array $ResourceTags Instance tag information
     * @param string $DeployGroupId Placement group ID
     * @param string $ClientToken A string unique in 48 hours, which is supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     * @param string $DeviceType Instance isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). Default value: `UNIVERSAL`.
     * @param integer $ParamTemplateId Parameter template ID
     * @param array $AlarmPolicyList Array of alarm policy IDs, which can be obtained through the `OriginId` field in the return value of the `DescribeAlarmPolicy` API of TCOP.
     * @param integer $InstanceNodes The number of nodes of the instance. To purchase a read-only instance or a basic instance, set this parameter to `1` or leave it empty. To purchase a three-node instance, set this parameter to `3` or specify the `BackupZone` parameter. If the instance to be purchased is a source instance and both `BackupZone` and this parameter are left empty, the value `2` will be used, which indicates the source instance will have two nodes.
     * @param integer $Cpu The number of the instance CPU cores. If this parameter is left empty, it will be subject to the `Memory` value.
     * @param integer $AutoSyncFlag Whether to automatically start disaster recovery synchronization. This parameter takes effect only for disaster recovery instances. Valid values: `0` (no), `1` (yes). Default value: `0`.
     * @param string $CageId Financial cage ID.
     * @param string $ParamTemplateType Type of the default parameter template. Valid values: `HIGH_STABILITY` (high-stability template), `HIGH_PERFORMANCE` (high-performance template).
     * @param array $AlarmPolicyIdList The array of alarm policy names, such as ["policy-uyoee9wg"]. If the `AlarmPolicyList` parameter is specified, this parameter is invalid.
     * @param boolean $DryRun Whether to check the request without creating any instance. Valid values: `true`, `false` (default). After being submitted, the request will be checked to see if it is in correct format and has all required parameters with valid values. An error code is returned if the check failed, and `RequestId` is returned if the check succeeded. After a successful check, no instance will be created if this parameter is set to `true`, whereas an instance will be created and if it is set to `false`.
     * @param string $EngineType Instance engine type. Valid values: `InnoDB` (default), `RocksDB`.
     * @param array $Vips The list of IPs for sources instances. Only one IP address can be assigned to a single source instance. If all IPs are used up, the system will automatically assign IPs to the remaining source instances that do not have one.
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
    }
}
