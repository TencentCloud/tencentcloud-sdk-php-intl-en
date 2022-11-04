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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance details
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getZone() Obtain Availability Zone
 * @method void setZone(string $Zone) Set Availability Zone
 * @method integer getAppId() Obtain User ID
 * @method void setAppId(integer $AppId) Set User ID
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getVpcUid() Obtain UID of the VPC where the instance resides
 * @method void setVpcUid(string $VpcUid) Set UID of the VPC where the instance resides
 * @method string getSubnetUid() Obtain UID of the subnet where the instance resides
 * @method void setSubnetUid(string $SubnetUid) Set UID of the subnet where the instance resides
 * @method integer getStatus() Obtain Instance status. `0`: Processing; `1`: Normal; `-1`: `Stopped`; `-2`: Being terminated; `-3`: Terminated; `2`: Initializing during the cluster creation.
 * @method void setStatus(integer $Status) Set Instance status. `0`: Processing; `1`: Normal; `-1`: `Stopped`; `-2`: Being terminated; `-3`: Terminated; `2`: Initializing during the cluster creation.
 * @method string getRenewFlag() Obtain This parameter is not used on the global website
 * @method void setRenewFlag(string $RenewFlag) Set This parameter is not used on the global website
 * @method string getChargeType() Obtain Instance billing method. Valid values: POSTPAID_BY_HOUR (pay-as-you-go hourly); CDHPAID (billed based on CDH, i.e., only CDH is billed but not the instances on CDH)
 * @method void setChargeType(string $ChargeType) Set Instance billing method. Valid values: POSTPAID_BY_HOUR (pay-as-you-go hourly); CDHPAID (billed based on CDH, i.e., only CDH is billed but not the instances on CDH)
 * @method integer getChargePeriod() Obtain This parameter is not used on the global website
 * @method void setChargePeriod(integer $ChargePeriod) Set This parameter is not used on the global website
 * @method string getNodeType() Obtain Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
 * @method void setNodeType(string $NodeType) Set Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
 * @method integer getNodeNum() Obtain Number of nodes
 * @method void setNodeNum(integer $NodeNum) Set Number of nodes
 * @method integer getCpuNum() Obtain Number of CPU cores of the node
 * @method void setCpuNum(integer $CpuNum) Set Number of CPU cores of the node
 * @method integer getMemSize() Obtain Node memory size in GB
 * @method void setMemSize(integer $MemSize) Set Node memory size in GB
 * @method string getDiskType() Obtain Node disk type
 * @method void setDiskType(string $DiskType) Set Node disk type
 * @method integer getDiskSize() Obtain Node disk size in GB
 * @method void setDiskSize(integer $DiskSize) Set Node disk size in GB
 * @method string getEsDomain() Obtain ES domain name
 * @method void setEsDomain(string $EsDomain) Set ES domain name
 * @method string getEsVip() Obtain ES VIP
 * @method void setEsVip(string $EsVip) Set ES VIP
 * @method integer getEsPort() Obtain ES port
 * @method void setEsPort(integer $EsPort) Set ES port
 * @method string getKibanaUrl() Obtain Kibana access URL
 * @method void setKibanaUrl(string $KibanaUrl) Set Kibana access URL
 * @method string getEsVersion() Obtain ES version number
 * @method void setEsVersion(string $EsVersion) Set ES version number
 * @method string getEsConfig() Obtain ES configuration item
 * @method void setEsConfig(string $EsConfig) Set ES configuration item
 * @method EsAcl getEsAcl() Obtain Kibana access control configuration
 * @method void setEsAcl(EsAcl $EsAcl) Set Kibana access control configuration
 * @method string getCreateTime() Obtain Instance creation time
 * @method void setCreateTime(string $CreateTime) Set Instance creation time
 * @method string getUpdateTime() Obtain Last modified time of the instance
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of the instance
 * @method string getDeadline() Obtain This parameter is not used on the global website
 * @method void setDeadline(string $Deadline) Set This parameter is not used on the global website
 * @method integer getInstanceType() Obtain Instance type (instance type identifier, which can be only 1 or 2 currently)
 * @method void setInstanceType(integer $InstanceType) Set Instance type (instance type identifier, which can be only 1 or 2 currently)
 * @method EsDictionaryInfo getIkConfig() Obtain IK analyzer configuration
 * @method void setIkConfig(EsDictionaryInfo $IkConfig) Set IK analyzer configuration
 * @method MasterNodeInfo getMasterNodeInfo() Obtain Dedicated primary node configuration
 * @method void setMasterNodeInfo(MasterNodeInfo $MasterNodeInfo) Set Dedicated primary node configuration
 * @method CosBackup getCosBackup() Obtain Auto-backup to COS configuration
 * @method void setCosBackup(CosBackup $CosBackup) Set Auto-backup to COS configuration
 * @method boolean getAllowCosBackup() Obtain Whether to allow auto-backup to COS
 * @method void setAllowCosBackup(boolean $AllowCosBackup) Set Whether to allow auto-backup to COS
 * @method array getTagList() Obtain List of tags owned by the instance
 * @method void setTagList(array $TagList) Set List of tags owned by the instance
 * @method string getLicenseType() Obtain License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
 * @method void setLicenseType(string $LicenseType) Set License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
 * @method boolean getEnableHotWarmMode() Obtain Whether it is a hot/warm cluster <li>true: yes </li><li>false: no</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEnableHotWarmMode(boolean $EnableHotWarmMode) Set Whether it is a hot/warm cluster <li>true: yes </li><li>false: no</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getWarmNodeType() Obtain Warm node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setWarmNodeType(string $WarmNodeType) Set Warm node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getWarmNodeNum() Obtain Number of warm nodes
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setWarmNodeNum(integer $WarmNodeNum) Set Number of warm nodes
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getWarmCpuNum() Obtain Number of warm node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setWarmCpuNum(integer $WarmCpuNum) Set Number of warm node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getWarmMemSize() Obtain Warm node memory size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setWarmMemSize(integer $WarmMemSize) Set Warm node memory size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getWarmDiskType() Obtain Warm node disk type
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setWarmDiskType(string $WarmDiskType) Set Warm node disk type
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getWarmDiskSize() Obtain Warm node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setWarmDiskSize(integer $WarmDiskSize) Set Warm node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getNodeInfoList() Obtain Cluster node information list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeInfoList(array $NodeInfoList) Set Cluster node information list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEsPublicUrl() Obtain ES public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEsPublicUrl(string $EsPublicUrl) Set ES public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMultiZoneInfo() Obtain Multi-AZ network information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMultiZoneInfo(array $MultiZoneInfo) Set Multi-AZ network information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDeployMode() Obtain Deployment mode <li>0: single-AZ </li><li>1: multi-AZ</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeployMode(integer $DeployMode) Set Deployment mode <li>0: single-AZ </li><li>1: multi-AZ</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublicAccess() Obtain ES public access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicAccess(string $PublicAccess) Set ES public access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method EsAcl getEsPublicAcl() Obtain ES public access control configuration
 * @method void setEsPublicAcl(EsAcl $EsPublicAcl) Set ES public access control configuration
 * @method string getKibanaPrivateUrl() Obtain Kibana private IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKibanaPrivateUrl(string $KibanaPrivateUrl) Set Kibana private IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKibanaPublicAccess() Obtain Kibana public access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) Set Kibana public access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKibanaPrivateAccess() Obtain Kibana private access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) Set Kibana private access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSecurityType() Obtain Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecurityType(integer $SecurityType) Set Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSceneType() Obtain Scenario template type. 0: not enabled; 1: general scenario; 2: log scenario; 3: search scenario
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSceneType(integer $SceneType) Set Scenario template type. 0: not enabled; 1: general scenario; 2: log scenario; 3: search scenario
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getKibanaConfig() Obtain Kibana configuration item.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setKibanaConfig(string $KibanaConfig) Set Kibana configuration item.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method KibanaNodeInfo getKibanaNodeInfo() Obtain Kibana node information
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setKibanaNodeInfo(KibanaNodeInfo $KibanaNodeInfo) Set Kibana node information
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method WebNodeTypeInfo getWebNodeTypeInfo() Obtain Visual node configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setWebNodeTypeInfo(WebNodeTypeInfo $WebNodeTypeInfo) Set Visual node configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getJdk() Obtain JDK type. Valid values: `oracle`, `kona`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setJdk(string $Jdk) Set JDK type. Valid values: `oracle`, `kona`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Cluster network communication protocol
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Cluster network communication protocol
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getSecurityGroups() Obtain Security group ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSecurityGroups(array $SecurityGroups) Set Security group ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getColdNodeType() Obtain Cold node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setColdNodeType(string $ColdNodeType) Set Cold node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getColdNodeNum() Obtain Number of cold nodes
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setColdNodeNum(integer $ColdNodeNum) Set Number of cold nodes
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getColdCpuNum() Obtain Number of cold node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setColdCpuNum(integer $ColdCpuNum) Set Number of cold node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getColdMemSize() Obtain Cold node memory size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setColdMemSize(integer $ColdMemSize) Set Cold node memory size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getColdDiskType() Obtain Cold node disk type
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setColdDiskType(string $ColdDiskType) Set Cold node disk type
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getColdDiskSize() Obtain Cold node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setColdDiskSize(integer $ColdDiskSize) Set Cold node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getFrozenNodeType() Obtain Frozen node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setFrozenNodeType(string $FrozenNodeType) Set Frozen node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getFrozenNodeNum() Obtain Number of frozen nodes
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setFrozenNodeNum(integer $FrozenNodeNum) Set Number of frozen nodes
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getFrozenCpuNum() Obtain Number of frozen node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setFrozenCpuNum(integer $FrozenCpuNum) Set Number of frozen node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getFrozenMemSize() Obtain Frozen node memory size (GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setFrozenMemSize(integer $FrozenMemSize) Set Frozen node memory size (GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getFrozenDiskType() Obtain Frozen node disk type
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setFrozenDiskType(string $FrozenDiskType) Set Frozen node disk type
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getFrozenDiskSize() Obtain Frozen node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setFrozenDiskSize(integer $FrozenDiskSize) Set Frozen node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getHealthStatus() Obtain Cluster health status. `-1`: Unknown; `0`: Green; `1`: Yellow; `2`: Red
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setHealthStatus(integer $HealthStatus) Set Cluster health status. `-1`: Unknown; `0`: Green; `1`: Yellow; `2`: Red
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getEsPrivateUrl() Obtain Private URL of the HTTPS cluster
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEsPrivateUrl(string $EsPrivateUrl) Set Private URL of the HTTPS cluster
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getEsPrivateDomain() Obtain Private domain of the HTTPS cluster
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEsPrivateDomain(string $EsPrivateDomain) Set Private domain of the HTTPS cluster
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getEsConfigSets() Obtain Configuration set info of the cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEsConfigSets(array $EsConfigSets) Set Configuration set info of the cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method OperationDuration getOperationDuration() Obtain The maintenance time slot of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperationDuration(OperationDuration $OperationDuration) Set The maintenance time slot of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOptionalWebServiceInfos() Obtain Web node list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOptionalWebServiceInfos(array $OptionalWebServiceInfos) Set Web node list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAutoIndexEnabled() Obtain Autonomous index option
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoIndexEnabled(boolean $AutoIndexEnabled) Set Autonomous index option
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnableHybridStorage() Obtain Whether the storage-computing separation feature is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableHybridStorage(boolean $EnableHybridStorage) Set Whether the storage-computing separation feature is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getProcessPercent() Obtain The process progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessPercent(float $ProcessPercent) Set The process progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKibanaAlteringPublicAccess() Obtain The alerting policy of Kibana over the public network. <li>`OPEN`: Enable the policy;</li><li>`CLOSE`: Disable the policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKibanaAlteringPublicAccess(string $KibanaAlteringPublicAccess) Set The alerting policy of Kibana over the public network. <li>`OPEN`: Enable the policy;</li><li>`CLOSE`: Disable the policy.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceInfo extends AbstractModel
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
     * @var string Region
     */
    public $Region;

    /**
     * @var string Availability Zone
     */
    public $Zone;

    /**
     * @var integer User ID
     */
    public $AppId;

    /**
     * @var string User UIN
     */
    public $Uin;

    /**
     * @var string UID of the VPC where the instance resides
     */
    public $VpcUid;

    /**
     * @var string UID of the subnet where the instance resides
     */
    public $SubnetUid;

    /**
     * @var integer Instance status. `0`: Processing; `1`: Normal; `-1`: `Stopped`; `-2`: Being terminated; `-3`: Terminated; `2`: Initializing during the cluster creation.
     */
    public $Status;

    /**
     * @var string This parameter is not used on the global website
     */
    public $RenewFlag;

    /**
     * @var string Instance billing method. Valid values: POSTPAID_BY_HOUR (pay-as-you-go hourly); CDHPAID (billed based on CDH, i.e., only CDH is billed but not the instances on CDH)
     */
    public $ChargeType;

    /**
     * @var integer This parameter is not used on the global website
     */
    public $ChargePeriod;

    /**
     * @var string Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
     */
    public $NodeType;

    /**
     * @var integer Number of nodes
     */
    public $NodeNum;

    /**
     * @var integer Number of CPU cores of the node
     */
    public $CpuNum;

    /**
     * @var integer Node memory size in GB
     */
    public $MemSize;

    /**
     * @var string Node disk type
     */
    public $DiskType;

    /**
     * @var integer Node disk size in GB
     */
    public $DiskSize;

    /**
     * @var string ES domain name
     */
    public $EsDomain;

    /**
     * @var string ES VIP
     */
    public $EsVip;

    /**
     * @var integer ES port
     */
    public $EsPort;

    /**
     * @var string Kibana access URL
     */
    public $KibanaUrl;

    /**
     * @var string ES version number
     */
    public $EsVersion;

    /**
     * @var string ES configuration item
     */
    public $EsConfig;

    /**
     * @var EsAcl Kibana access control configuration
     */
    public $EsAcl;

    /**
     * @var string Instance creation time
     */
    public $CreateTime;

    /**
     * @var string Last modified time of the instance
     */
    public $UpdateTime;

    /**
     * @var string This parameter is not used on the global website
     */
    public $Deadline;

    /**
     * @var integer Instance type (instance type identifier, which can be only 1 or 2 currently)
     */
    public $InstanceType;

    /**
     * @var EsDictionaryInfo IK analyzer configuration
     */
    public $IkConfig;

    /**
     * @var MasterNodeInfo Dedicated primary node configuration
     */
    public $MasterNodeInfo;

    /**
     * @var CosBackup Auto-backup to COS configuration
     */
    public $CosBackup;

    /**
     * @var boolean Whether to allow auto-backup to COS
     */
    public $AllowCosBackup;

    /**
     * @var array List of tags owned by the instance
     */
    public $TagList;

    /**
     * @var string License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
     */
    public $LicenseType;

    /**
     * @var boolean Whether it is a hot/warm cluster <li>true: yes </li><li>false: no</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EnableHotWarmMode;

    /**
     * @var string Warm node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $WarmNodeType;

    /**
     * @var integer Number of warm nodes
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $WarmNodeNum;

    /**
     * @var integer Number of warm node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $WarmCpuNum;

    /**
     * @var integer Warm node memory size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $WarmMemSize;

    /**
     * @var string Warm node disk type
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $WarmDiskType;

    /**
     * @var integer Warm node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $WarmDiskSize;

    /**
     * @var array Cluster node information list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeInfoList;

    /**
     * @var string ES public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EsPublicUrl;

    /**
     * @var array Multi-AZ network information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MultiZoneInfo;

    /**
     * @var integer Deployment mode <li>0: single-AZ </li><li>1: multi-AZ</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeployMode;

    /**
     * @var string ES public access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicAccess;

    /**
     * @var EsAcl ES public access control configuration
     */
    public $EsPublicAcl;

    /**
     * @var string Kibana private IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KibanaPrivateUrl;

    /**
     * @var string Kibana public access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KibanaPublicAccess;

    /**
     * @var string Kibana private access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KibanaPrivateAccess;

    /**
     * @var integer Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecurityType;

    /**
     * @var integer Scenario template type. 0: not enabled; 1: general scenario; 2: log scenario; 3: search scenario
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SceneType;

    /**
     * @var string Kibana configuration item.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $KibanaConfig;

    /**
     * @var KibanaNodeInfo Kibana node information
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $KibanaNodeInfo;

    /**
     * @var WebNodeTypeInfo Visual node configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $WebNodeTypeInfo;

    /**
     * @var string JDK type. Valid values: `oracle`, `kona`
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Jdk;

    /**
     * @var string Cluster network communication protocol
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var array Security group ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SecurityGroups;

    /**
     * @var string Cold node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ColdNodeType;

    /**
     * @var integer Number of cold nodes
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ColdNodeNum;

    /**
     * @var integer Number of cold node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ColdCpuNum;

    /**
     * @var integer Cold node memory size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ColdMemSize;

    /**
     * @var string Cold node disk type
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ColdDiskType;

    /**
     * @var integer Cold node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ColdDiskSize;

    /**
     * @var string Frozen node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $FrozenNodeType;

    /**
     * @var integer Number of frozen nodes
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $FrozenNodeNum;

    /**
     * @var integer Number of frozen node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $FrozenCpuNum;

    /**
     * @var integer Frozen node memory size (GB)
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $FrozenMemSize;

    /**
     * @var string Frozen node disk type
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $FrozenDiskType;

    /**
     * @var integer Frozen node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $FrozenDiskSize;

    /**
     * @var integer Cluster health status. `-1`: Unknown; `0`: Green; `1`: Yellow; `2`: Red
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $HealthStatus;

    /**
     * @var string Private URL of the HTTPS cluster
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EsPrivateUrl;

    /**
     * @var string Private domain of the HTTPS cluster
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EsPrivateDomain;

    /**
     * @var array Configuration set info of the cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EsConfigSets;

    /**
     * @var OperationDuration The maintenance time slot of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperationDuration;

    /**
     * @var array Web node list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OptionalWebServiceInfos;

    /**
     * @var boolean Autonomous index option
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoIndexEnabled;

    /**
     * @var boolean Whether the storage-computing separation feature is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableHybridStorage;

    /**
     * @var float The process progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessPercent;

    /**
     * @var string The alerting policy of Kibana over the public network. <li>`OPEN`: Enable the policy;</li><li>`CLOSE`: Disable the policy.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KibanaAlteringPublicAccess;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $Region Region
     * @param string $Zone Availability Zone
     * @param integer $AppId User ID
     * @param string $Uin User UIN
     * @param string $VpcUid UID of the VPC where the instance resides
     * @param string $SubnetUid UID of the subnet where the instance resides
     * @param integer $Status Instance status. `0`: Processing; `1`: Normal; `-1`: `Stopped`; `-2`: Being terminated; `-3`: Terminated; `2`: Initializing during the cluster creation.
     * @param string $RenewFlag This parameter is not used on the global website
     * @param string $ChargeType Instance billing method. Valid values: POSTPAID_BY_HOUR (pay-as-you-go hourly); CDHPAID (billed based on CDH, i.e., only CDH is billed but not the instances on CDH)
     * @param integer $ChargePeriod This parameter is not used on the global website
     * @param string $NodeType Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
     * @param integer $NodeNum Number of nodes
     * @param integer $CpuNum Number of CPU cores of the node
     * @param integer $MemSize Node memory size in GB
     * @param string $DiskType Node disk type
     * @param integer $DiskSize Node disk size in GB
     * @param string $EsDomain ES domain name
     * @param string $EsVip ES VIP
     * @param integer $EsPort ES port
     * @param string $KibanaUrl Kibana access URL
     * @param string $EsVersion ES version number
     * @param string $EsConfig ES configuration item
     * @param EsAcl $EsAcl Kibana access control configuration
     * @param string $CreateTime Instance creation time
     * @param string $UpdateTime Last modified time of the instance
     * @param string $Deadline This parameter is not used on the global website
     * @param integer $InstanceType Instance type (instance type identifier, which can be only 1 or 2 currently)
     * @param EsDictionaryInfo $IkConfig IK analyzer configuration
     * @param MasterNodeInfo $MasterNodeInfo Dedicated primary node configuration
     * @param CosBackup $CosBackup Auto-backup to COS configuration
     * @param boolean $AllowCosBackup Whether to allow auto-backup to COS
     * @param array $TagList List of tags owned by the instance
     * @param string $LicenseType License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
     * @param boolean $EnableHotWarmMode Whether it is a hot/warm cluster <li>true: yes </li><li>false: no</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $WarmNodeType Warm node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $WarmNodeNum Number of warm nodes
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $WarmCpuNum Number of warm node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $WarmMemSize Warm node memory size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $WarmDiskType Warm node disk type
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $WarmDiskSize Warm node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $NodeInfoList Cluster node information list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EsPublicUrl ES public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $MultiZoneInfo Multi-AZ network information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DeployMode Deployment mode <li>0: single-AZ </li><li>1: multi-AZ</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublicAccess ES public access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param EsAcl $EsPublicAcl ES public access control configuration
     * @param string $KibanaPrivateUrl Kibana private IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KibanaPublicAccess Kibana public access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KibanaPrivateAccess Kibana private access status <li>OPEN: enabled </li><li>CLOSE: disabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SecurityType Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SceneType Scenario template type. 0: not enabled; 1: general scenario; 2: log scenario; 3: search scenario
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $KibanaConfig Kibana configuration item.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param KibanaNodeInfo $KibanaNodeInfo Kibana node information
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param WebNodeTypeInfo $WebNodeTypeInfo Visual node configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Jdk JDK type. Valid values: `oracle`, `kona`
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Protocol Cluster network communication protocol
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $SecurityGroups Security group ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ColdNodeType Cold node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $ColdNodeNum Number of cold nodes
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $ColdCpuNum Number of cold node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $ColdMemSize Cold node memory size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $ColdDiskType Cold node disk type
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $ColdDiskSize Cold node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $FrozenNodeType Frozen node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $FrozenNodeNum Number of frozen nodes
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $FrozenCpuNum Number of frozen node CPU cores
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $FrozenMemSize Frozen node memory size (GB)
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $FrozenDiskType Frozen node disk type
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $FrozenDiskSize Frozen node disk size (in GB)
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $HealthStatus Cluster health status. `-1`: Unknown; `0`: Green; `1`: Yellow; `2`: Red
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $EsPrivateUrl Private URL of the HTTPS cluster
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $EsPrivateDomain Private domain of the HTTPS cluster
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $EsConfigSets Configuration set info of the cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param OperationDuration $OperationDuration The maintenance time slot of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $OptionalWebServiceInfos Web node list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AutoIndexEnabled Autonomous index option
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $EnableHybridStorage Whether the storage-computing separation feature is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $ProcessPercent The process progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KibanaAlteringPublicAccess The alerting policy of Kibana over the public network. <li>`OPEN`: Enable the policy;</li><li>`CLOSE`: Disable the policy.
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("VpcUid",$param) and $param["VpcUid"] !== null) {
            $this->VpcUid = $param["VpcUid"];
        }

        if (array_key_exists("SubnetUid",$param) and $param["SubnetUid"] !== null) {
            $this->SubnetUid = $param["SubnetUid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargePeriod",$param) and $param["ChargePeriod"] !== null) {
            $this->ChargePeriod = $param["ChargePeriod"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("EsDomain",$param) and $param["EsDomain"] !== null) {
            $this->EsDomain = $param["EsDomain"];
        }

        if (array_key_exists("EsVip",$param) and $param["EsVip"] !== null) {
            $this->EsVip = $param["EsVip"];
        }

        if (array_key_exists("EsPort",$param) and $param["EsPort"] !== null) {
            $this->EsPort = $param["EsPort"];
        }

        if (array_key_exists("KibanaUrl",$param) and $param["KibanaUrl"] !== null) {
            $this->KibanaUrl = $param["KibanaUrl"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }

        if (array_key_exists("EsAcl",$param) and $param["EsAcl"] !== null) {
            $this->EsAcl = new EsAcl();
            $this->EsAcl->deserialize($param["EsAcl"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("IkConfig",$param) and $param["IkConfig"] !== null) {
            $this->IkConfig = new EsDictionaryInfo();
            $this->IkConfig->deserialize($param["IkConfig"]);
        }

        if (array_key_exists("MasterNodeInfo",$param) and $param["MasterNodeInfo"] !== null) {
            $this->MasterNodeInfo = new MasterNodeInfo();
            $this->MasterNodeInfo->deserialize($param["MasterNodeInfo"]);
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = new CosBackup();
            $this->CosBackup->deserialize($param["CosBackup"]);
        }

        if (array_key_exists("AllowCosBackup",$param) and $param["AllowCosBackup"] !== null) {
            $this->AllowCosBackup = $param["AllowCosBackup"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("EnableHotWarmMode",$param) and $param["EnableHotWarmMode"] !== null) {
            $this->EnableHotWarmMode = $param["EnableHotWarmMode"];
        }

        if (array_key_exists("WarmNodeType",$param) and $param["WarmNodeType"] !== null) {
            $this->WarmNodeType = $param["WarmNodeType"];
        }

        if (array_key_exists("WarmNodeNum",$param) and $param["WarmNodeNum"] !== null) {
            $this->WarmNodeNum = $param["WarmNodeNum"];
        }

        if (array_key_exists("WarmCpuNum",$param) and $param["WarmCpuNum"] !== null) {
            $this->WarmCpuNum = $param["WarmCpuNum"];
        }

        if (array_key_exists("WarmMemSize",$param) and $param["WarmMemSize"] !== null) {
            $this->WarmMemSize = $param["WarmMemSize"];
        }

        if (array_key_exists("WarmDiskType",$param) and $param["WarmDiskType"] !== null) {
            $this->WarmDiskType = $param["WarmDiskType"];
        }

        if (array_key_exists("WarmDiskSize",$param) and $param["WarmDiskSize"] !== null) {
            $this->WarmDiskSize = $param["WarmDiskSize"];
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("EsPublicUrl",$param) and $param["EsPublicUrl"] !== null) {
            $this->EsPublicUrl = $param["EsPublicUrl"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("PublicAccess",$param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }

        if (array_key_exists("EsPublicAcl",$param) and $param["EsPublicAcl"] !== null) {
            $this->EsPublicAcl = new EsAcl();
            $this->EsPublicAcl->deserialize($param["EsPublicAcl"]);
        }

        if (array_key_exists("KibanaPrivateUrl",$param) and $param["KibanaPrivateUrl"] !== null) {
            $this->KibanaPrivateUrl = $param["KibanaPrivateUrl"];
        }

        if (array_key_exists("KibanaPublicAccess",$param) and $param["KibanaPublicAccess"] !== null) {
            $this->KibanaPublicAccess = $param["KibanaPublicAccess"];
        }

        if (array_key_exists("KibanaPrivateAccess",$param) and $param["KibanaPrivateAccess"] !== null) {
            $this->KibanaPrivateAccess = $param["KibanaPrivateAccess"];
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("KibanaConfig",$param) and $param["KibanaConfig"] !== null) {
            $this->KibanaConfig = $param["KibanaConfig"];
        }

        if (array_key_exists("KibanaNodeInfo",$param) and $param["KibanaNodeInfo"] !== null) {
            $this->KibanaNodeInfo = new KibanaNodeInfo();
            $this->KibanaNodeInfo->deserialize($param["KibanaNodeInfo"]);
        }

        if (array_key_exists("WebNodeTypeInfo",$param) and $param["WebNodeTypeInfo"] !== null) {
            $this->WebNodeTypeInfo = new WebNodeTypeInfo();
            $this->WebNodeTypeInfo->deserialize($param["WebNodeTypeInfo"]);
        }

        if (array_key_exists("Jdk",$param) and $param["Jdk"] !== null) {
            $this->Jdk = $param["Jdk"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("ColdNodeType",$param) and $param["ColdNodeType"] !== null) {
            $this->ColdNodeType = $param["ColdNodeType"];
        }

        if (array_key_exists("ColdNodeNum",$param) and $param["ColdNodeNum"] !== null) {
            $this->ColdNodeNum = $param["ColdNodeNum"];
        }

        if (array_key_exists("ColdCpuNum",$param) and $param["ColdCpuNum"] !== null) {
            $this->ColdCpuNum = $param["ColdCpuNum"];
        }

        if (array_key_exists("ColdMemSize",$param) and $param["ColdMemSize"] !== null) {
            $this->ColdMemSize = $param["ColdMemSize"];
        }

        if (array_key_exists("ColdDiskType",$param) and $param["ColdDiskType"] !== null) {
            $this->ColdDiskType = $param["ColdDiskType"];
        }

        if (array_key_exists("ColdDiskSize",$param) and $param["ColdDiskSize"] !== null) {
            $this->ColdDiskSize = $param["ColdDiskSize"];
        }

        if (array_key_exists("FrozenNodeType",$param) and $param["FrozenNodeType"] !== null) {
            $this->FrozenNodeType = $param["FrozenNodeType"];
        }

        if (array_key_exists("FrozenNodeNum",$param) and $param["FrozenNodeNum"] !== null) {
            $this->FrozenNodeNum = $param["FrozenNodeNum"];
        }

        if (array_key_exists("FrozenCpuNum",$param) and $param["FrozenCpuNum"] !== null) {
            $this->FrozenCpuNum = $param["FrozenCpuNum"];
        }

        if (array_key_exists("FrozenMemSize",$param) and $param["FrozenMemSize"] !== null) {
            $this->FrozenMemSize = $param["FrozenMemSize"];
        }

        if (array_key_exists("FrozenDiskType",$param) and $param["FrozenDiskType"] !== null) {
            $this->FrozenDiskType = $param["FrozenDiskType"];
        }

        if (array_key_exists("FrozenDiskSize",$param) and $param["FrozenDiskSize"] !== null) {
            $this->FrozenDiskSize = $param["FrozenDiskSize"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("EsPrivateUrl",$param) and $param["EsPrivateUrl"] !== null) {
            $this->EsPrivateUrl = $param["EsPrivateUrl"];
        }

        if (array_key_exists("EsPrivateDomain",$param) and $param["EsPrivateDomain"] !== null) {
            $this->EsPrivateDomain = $param["EsPrivateDomain"];
        }

        if (array_key_exists("EsConfigSets",$param) and $param["EsConfigSets"] !== null) {
            $this->EsConfigSets = [];
            foreach ($param["EsConfigSets"] as $key => $value){
                $obj = new EsConfigSetInfo();
                $obj->deserialize($value);
                array_push($this->EsConfigSets, $obj);
            }
        }

        if (array_key_exists("OperationDuration",$param) and $param["OperationDuration"] !== null) {
            $this->OperationDuration = new OperationDuration();
            $this->OperationDuration->deserialize($param["OperationDuration"]);
        }

        if (array_key_exists("OptionalWebServiceInfos",$param) and $param["OptionalWebServiceInfos"] !== null) {
            $this->OptionalWebServiceInfos = [];
            foreach ($param["OptionalWebServiceInfos"] as $key => $value){
                $obj = new OptionalWebServiceInfo();
                $obj->deserialize($value);
                array_push($this->OptionalWebServiceInfos, $obj);
            }
        }

        if (array_key_exists("AutoIndexEnabled",$param) and $param["AutoIndexEnabled"] !== null) {
            $this->AutoIndexEnabled = $param["AutoIndexEnabled"];
        }

        if (array_key_exists("EnableHybridStorage",$param) and $param["EnableHybridStorage"] !== null) {
            $this->EnableHybridStorage = $param["EnableHybridStorage"];
        }

        if (array_key_exists("ProcessPercent",$param) and $param["ProcessPercent"] !== null) {
            $this->ProcessPercent = $param["ProcessPercent"];
        }

        if (array_key_exists("KibanaAlteringPublicAccess",$param) and $param["KibanaAlteringPublicAccess"] !== null) {
            $this->KibanaAlteringPublicAccess = $param["KibanaAlteringPublicAccess"];
        }
    }
}
