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
 * Instance details
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method integer getAppId() Obtain <p>uid</p>
 * @method void setAppId(integer $AppId) Set <p>uid</p>
 * @method string getUin() Obtain <p>User UIN.</p>
 * @method void setUin(string $Uin) Set <p>User UIN.</p>
 * @method string getVpcUid() Obtain <p>UID of the VPC to which the instance belongs</p>
 * @method void setVpcUid(string $VpcUid) Set <p>UID of the VPC to which the instance belongs</p>
 * @method string getSubnetUid() Obtain <p>UID of the subnet to which the instance belongs</p>
 * @method void setSubnetUid(string $SubnetUid) Set <p>UID of the subnet to which the instance belongs</p>
 * @method integer getStatus() Obtain <p>Instance status. 0: processing, 1: normal, -1: stopped, -2: being destroyed, -3: terminated, -4: isolated, 2: initializing when creating a cluster</p>
 * @method void setStatus(integer $Status) Set <p>Instance status. 0: processing, 1: normal, -1: stopped, -2: being destroyed, -3: terminated, -4: isolated, 2: initializing when creating a cluster</p>
 * @method string getRenewFlag() Obtain <p>Auto-renewal flag. Value range: <br>RENEW_FLAG_AUTO: auto renewal<br>RENEW_FLAG_MANUAL: no auto-renewal<br>Default value: <br>RENEW_FLAG_DEFAULT: no auto-renewal<br>If this parameter is set to RENEW_FLAG_AUTO, the instance will automatically renew on a monthly basis after expiration if the account balance is sufficient.</p>
 * @method void setRenewFlag(string $RenewFlag) Set <p>Auto-renewal flag. Value range: <br>RENEW_FLAG_AUTO: auto renewal<br>RENEW_FLAG_MANUAL: no auto-renewal<br>Default value: <br>RENEW_FLAG_DEFAULT: no auto-renewal<br>If this parameter is set to RENEW_FLAG_AUTO, the instance will automatically renew on a monthly basis after expiration if the account balance is sufficient.</p>
 * @method string getChargeType() Obtain <p>Instance billing mode. Value ranges: PREPAID: prepaid mode, i.e., monthly subscription. POSTPAID_BY_HOUR: postpaid, i.e., pay-as-you-go. CDHPAID: CDH-paid mode, i.e., only charges for CDH, without charging for instances on CDH.</p>
 * @method void setChargeType(string $ChargeType) Set <p>Instance billing mode. Value ranges: PREPAID: prepaid mode, i.e., monthly subscription. POSTPAID_BY_HOUR: postpaid, i.e., pay-as-you-go. CDHPAID: CDH-paid mode, i.e., only charges for CDH, without charging for instances on CDH.</p>
 * @method integer getChargePeriod() Obtain <p>Annual and monthly subscription duration, unit: month</p>
 * @method void setChargePeriod(integer $ChargePeriod) Set <p>Annual and monthly subscription duration, unit: month</p>
 * @method string getNodeType() Obtain <p>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method void setNodeType(string $NodeType) Set <p>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method integer getNodeNum() Obtain <p>Number of nodes</p>
 * @method void setNodeNum(integer $NodeNum) Set <p>Number of nodes</p>
 * @method integer getCpuNum() Obtain <p>Number of node CPU cores.</p>
 * @method void setCpuNum(integer $CpuNum) Set <p>Number of node CPU cores.</p>
 * @method integer getMemSize() Obtain <p>Node memory size (GB).</p>
 * @method void setMemSize(integer $MemSize) Set <p>Node memory size (GB).</p>
 * @method string getDiskType() Obtain <p>Node disk type</p>
 * @method void setDiskType(string $DiskType) Set <p>Node disk type</p>
 * @method integer getDiskSize() Obtain <p>Node disk size (GB).</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Node disk size (GB).</p>
 * @method string getEsDomain() Obtain <p>ES domain name</p>
 * @method void setEsDomain(string $EsDomain) Set <p>ES domain name</p>
 * @method string getEsVip() Obtain <p>ES VIP</p>
 * @method void setEsVip(string $EsVip) Set <p>ES VIP</p>
 * @method integer getEsPort() Obtain <p>ES port</p>
 * @method void setEsPort(integer $EsPort) Set <p>ES port</p>
 * @method string getKibanaUrl() Obtain <p>Kibana access url</p>
 * @method void setKibanaUrl(string $KibanaUrl) Set <p>Kibana access url</p>
 * @method string getEsVersion() Obtain <p>ES version number</p>
 * @method void setEsVersion(string $EsVersion) Set <p>ES version number</p>
 * @method string getEsConfig() Obtain <p>ES configuration item</p>
 * @method void setEsConfig(string $EsConfig) Set <p>ES configuration item</p>
 * @method EsAcl getEsAcl() Obtain <p>Kibana Access Control Configuration</p>
 * @method void setEsAcl(EsAcl $EsAcl) Set <p>Kibana Access Control Configuration</p>
 * @method string getCreateTime() Obtain <p>Instance creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Instance creation time</p>
 * @method string getUpdateTime() Obtain <p>Last modification time of the instance</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last modification time of the instance</p>
 * @method string getDeadline() Obtain <p>Instance expiration time</p>
 * @method void setDeadline(string $Deadline) Set <p>Instance expiration time</p>
 * @method integer getInstanceType() Obtain <p>Instance type (instance type flag, currently only 1 and 2)</p>
 * @method void setInstanceType(integer $InstanceType) Set <p>Instance type (instance type flag, currently only 1 and 2)</p>
 * @method EsDictionaryInfo getIkConfig() Obtain <p>Ik analyzer configuration</p>
 * @method void setIkConfig(EsDictionaryInfo $IkConfig) Set <p>Ik analyzer configuration</p>
 * @method MasterNodeInfo getMasterNodeInfo() Obtain <p>Dedicated master node configuration</p>
 * @method void setMasterNodeInfo(MasterNodeInfo $MasterNodeInfo) Set <p>Dedicated master node configuration</p>
 * @method CosBackup getCosBackup() Obtain <p>cos automatic backup configuration</p>
 * @method void setCosBackup(CosBackup $CosBackup) Set <p>cos automatic backup configuration</p>
 * @method boolean getAllowCosBackup() Obtain <p>Whether cos automatic backup is allowed</p>
 * @method void setAllowCosBackup(boolean $AllowCosBackup) Set <p>Whether cos automatic backup is allowed</p>
 * @method array getTagList() Obtain <p>Tag list of the instance</p>
 * @method void setTagList(array $TagList) Set <p>Tag list of the instance</p>
 * @method string getLicenseType() Obtain <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum</p>
 * @method void setLicenseType(string $LicenseType) Set <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum</p>
 * @method string getRealLicenseType() Obtain <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li><li>enterprise: enterprise edition</li>Default value: platinum</p>
 * @method void setRealLicenseType(string $RealLicenseType) Set <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li><li>enterprise: enterprise edition</li>Default value: platinum</p>
 * @method boolean getEnableHotWarmMode() Obtain <p>Whether it is a hot-cold cluster<li>true: Hot-cold cluster</li><li>false: Non-hot-cold cluster</li></p>
 * @method void setEnableHotWarmMode(boolean $EnableHotWarmMode) Set <p>Whether it is a hot-cold cluster<li>true: Hot-cold cluster</li><li>false: Non-hot-cold cluster</li></p>
 * @method string getWarmNodeType() Obtain <p>Warm node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method void setWarmNodeType(string $WarmNodeType) Set <p>Warm node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method integer getWarmNodeNum() Obtain <p>Number of warm nodes</p>
 * @method void setWarmNodeNum(integer $WarmNodeNum) Set <p>Number of warm nodes</p>
 * @method integer getWarmCpuNum() Obtain <p>Warm node CPU cores</p>
 * @method void setWarmCpuNum(integer $WarmCpuNum) Set <p>Warm node CPU cores</p>
 * @method integer getWarmMemSize() Obtain <p>Warm node memory size (GB).</p>
 * @method void setWarmMemSize(integer $WarmMemSize) Set <p>Warm node memory size (GB).</p>
 * @method string getWarmDiskType() Obtain <p>Warm node disk type</p>
 * @method void setWarmDiskType(string $WarmDiskType) Set <p>Warm node disk type</p>
 * @method integer getWarmDiskSize() Obtain <p>Warm node disk size (GB).</p>
 * @method void setWarmDiskSize(integer $WarmDiskSize) Set <p>Warm node disk size (GB).</p>
 * @method array getNodeInfoList() Obtain <p>Cluster node information list</p>
 * @method void setNodeInfoList(array $NodeInfoList) Set <p>Cluster node information list</p>
 * @method string getEsPublicUrl() Obtain <p>Es public network address</p>
 * @method void setEsPublicUrl(string $EsPublicUrl) Set <p>Es public network address</p>
 * @method array getMultiZoneInfo() Obtain <p>Multi-AZ network info</p>
 * @method void setMultiZoneInfo(array $MultiZoneInfo) Set <p>Multi-AZ network info</p>
 * @method integer getDeployMode() Obtain <p>Deployment mode<li>0: single availability zone</li><li>1: multi-availability zone, Beijing, Shanghai, Shanghai Finance, Guangzhou, Nanjing, Hong Kong, Singapore, Frankfurt (allowlist control)</li></p>
 * @method void setDeployMode(integer $DeployMode) Set <p>Deployment mode<li>0: single availability zone</li><li>1: multi-availability zone, Beijing, Shanghai, Shanghai Finance, Guangzhou, Nanjing, Hong Kong, Singapore, Frankfurt (allowlist control)</li></p>
 * @method string getPublicAccess() Obtain <p>ES public access status<li>OPEN: enable</li><li>CLOSE: disable</li></p>
 * @method void setPublicAccess(string $PublicAccess) Set <p>ES public access status<li>OPEN: enable</li><li>CLOSE: disable</li></p>
 * @method EsAcl getEsPublicAcl() Obtain <p>ES public network access control configuration</p>
 * @method void setEsPublicAcl(EsAcl $EsPublicAcl) Set <p>ES public network access control configuration</p>
 * @method string getKibanaPrivateUrl() Obtain <p>Kibana private network address</p>
 * @method void setKibanaPrivateUrl(string $KibanaPrivateUrl) Set <p>Kibana private network address</p>
 * @method string getKibanaPublicAccess() Obtain <p>Kibana public access status<li>OPEN: enabled</li><li>CLOSE: disabled</li></p>
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) Set <p>Kibana public access status<li>OPEN: enabled</li><li>CLOSE: disabled</li></p>
 * @method string getKibanaPrivateAccess() Obtain <p>Kibana internal access status<li>OPEN: enable</li><li>CLOSE: disable</li></p>
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) Set <p>Kibana internal access status<li>OPEN: enable</li><li>CLOSE: disable</li></p>
 * @method integer getSecurityType() Obtain <p>Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li></p>
 * @method void setSecurityType(integer $SecurityType) Set <p>Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li></p>
 * @method integer getSceneType() Obtain <p>Scenario template type: 0, not enabled; 1, common scenarios; 2, log scenario; 3, search scenario</p>
 * @method void setSceneType(integer $SceneType) Set <p>Scenario template type: 0, not enabled; 1, common scenarios; 2, log scenario; 3, search scenario</p>
 * @method string getKibanaConfig() Obtain <p>Kibana configuration item</p>
 * @method void setKibanaConfig(string $KibanaConfig) Set <p>Kibana configuration item</p>
 * @method KibanaNodeInfo getKibanaNodeInfo() Obtain <p>Kibana node information</p>
 * @method void setKibanaNodeInfo(KibanaNodeInfo $KibanaNodeInfo) Set <p>Kibana node information</p>
 * @method WebNodeTypeInfo getWebNodeTypeInfo() Obtain <p>Visualize node configuration</p>
 * @method void setWebNodeTypeInfo(WebNodeTypeInfo $WebNodeTypeInfo) Set <p>Visualize node configuration</p>
 * @method string getJdk() Obtain <p>JDK type. Valid values: oracle, kona</p>
 * @method void setJdk(string $Jdk) Set <p>JDK type. Valid values: oracle, kona</p>
 * @method string getProtocol() Obtain <p>Cluster network communication protocol</p>
 * @method void setProtocol(string $Protocol) Set <p>Cluster network communication protocol</p>
 * @method array getSecurityGroups() Obtain <p>Security group id</p>
 * @method void setSecurityGroups(array $SecurityGroups) Set <p>Security group id</p>
 * @method string getColdNodeType() Obtain <p>Cold node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method void setColdNodeType(string $ColdNodeType) Set <p>Cold node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method integer getColdNodeNum() Obtain <p>Number of cold nodes</p>
 * @method void setColdNodeNum(integer $ColdNodeNum) Set <p>Number of cold nodes</p>
 * @method integer getColdCpuNum() Obtain <p>Cold node CPU cores</p>
 * @method void setColdCpuNum(integer $ColdCpuNum) Set <p>Cold node CPU cores</p>
 * @method integer getColdMemSize() Obtain <p>Cold node memory size (GB).</p>
 * @method void setColdMemSize(integer $ColdMemSize) Set <p>Cold node memory size (GB).</p>
 * @method string getColdDiskType() Obtain <p>Cold node disk type</p>
 * @method void setColdDiskType(string $ColdDiskType) Set <p>Cold node disk type</p>
 * @method integer getColdDiskSize() Obtain <p>Cold node disk size (GB).</p>
 * @method void setColdDiskSize(integer $ColdDiskSize) Set <p>Cold node disk size (GB).</p>
 * @method string getFrozenNodeType() Obtain <p>Frozen node specification<li>ES.S1.SMALL2: 1-core 2GB</li><li>ES.S1.MEDIUM4: 2-core 4GB</li><li>ES.S1.MEDIUM8: 2-core 8GB</li><li>ES.S1.LARGE16: 4-core 16GB</li><li>ES.S1.2XLARGE32: 8-core 32GB</li><li>ES.S1.4XLARGE32: 16-core 32GB</li><li>ES.S1.4XLARGE64: 16-core 64GB</li></p>
 * @method void setFrozenNodeType(string $FrozenNodeType) Set <p>Frozen node specification<li>ES.S1.SMALL2: 1-core 2GB</li><li>ES.S1.MEDIUM4: 2-core 4GB</li><li>ES.S1.MEDIUM8: 2-core 8GB</li><li>ES.S1.LARGE16: 4-core 16GB</li><li>ES.S1.2XLARGE32: 8-core 32GB</li><li>ES.S1.4XLARGE32: 16-core 32GB</li><li>ES.S1.4XLARGE64: 16-core 64GB</li></p>
 * @method integer getFrozenNodeNum() Obtain <p>Number of frozen nodes</p>
 * @method void setFrozenNodeNum(integer $FrozenNodeNum) Set <p>Number of frozen nodes</p>
 * @method integer getFrozenCpuNum() Obtain <p>Frozen node CPU cores</p>
 * @method void setFrozenCpuNum(integer $FrozenCpuNum) Set <p>Frozen node CPU cores</p>
 * @method integer getFrozenMemSize() Obtain <p>Frozen node memory size (GB).</p>
 * @method void setFrozenMemSize(integer $FrozenMemSize) Set <p>Frozen node memory size (GB).</p>
 * @method string getFrozenDiskType() Obtain <p>Frozen node disk type</p>
 * @method void setFrozenDiskType(string $FrozenDiskType) Set <p>Frozen node disk type</p>
 * @method integer getFrozenDiskSize() Obtain <p>Frozen node disk size (GB).</p>
 * @method void setFrozenDiskSize(integer $FrozenDiskSize) Set <p>Frozen node disk size (GB).</p>
 * @method integer getHealthStatus() Obtain <p>Cluster health status: -1 unknown; 0 Green; 1 Yellow; 2 Red</p>
 * @method void setHealthStatus(integer $HealthStatus) Set <p>Cluster health status: -1 unknown; 0 Green; 1 Yellow; 2 Red</p>
 * @method string getEsPrivateUrl() Obtain <p>Intracluster network url for https.</p>
 * @method void setEsPrivateUrl(string $EsPrivateUrl) Set <p>Intracluster network url for https.</p>
 * @method string getEsPrivateDomain() Obtain <p>https cluster private network domain name</p>
 * @method void setEsPrivateDomain(string $EsPrivateDomain) Set <p>https cluster private network domain name</p>
 * @method array getEsConfigSets() Obtain <p>Cluster configuration group information.</p>
 * @method void setEsConfigSets(array $EsConfigSets) Set <p>Cluster configuration group information.</p>
 * @method OperationDuration getOperationDuration() Obtain <p>Cluster maintenance time slot</p>
 * @method void setOperationDuration(OperationDuration $OperationDuration) Set <p>Cluster maintenance time slot</p>
 * @method array getOptionalWebServiceInfos() Obtain <p>web node list</p>
 * @method void setOptionalWebServiceInfos(array $OptionalWebServiceInfos) Set <p>web node list</p>
 * @method boolean getAutoIndexEnabled() Obtain <p>Autonomous index switch</p>
 * @method void setAutoIndexEnabled(boolean $AutoIndexEnabled) Set <p>Autonomous index switch</p>
 * @method boolean getEnableHybridStorage() Obtain <p>Whether storage and computation separation is supported.</p>
 * @method void setEnableHybridStorage(boolean $EnableHybridStorage) Set <p>Whether storage and computation separation is supported.</p>
 * @method float getProcessPercent() Obtain <p>Process progress.</p>
 * @method void setProcessPercent(float $ProcessPercent) Set <p>Process progress.</p>
 * @method string getKibanaAlteringPublicAccess() Obtain <p>Kibana alerting public network alert policy<li>OPEN: enable</li><li>CLOSE: disable</li></p>
 * @method void setKibanaAlteringPublicAccess(string $KibanaAlteringPublicAccess) Set <p>Kibana alerting public network alert policy<li>OPEN: enable</li><li>CLOSE: disable</li></p>
 * @method boolean getHasKernelUpgrade() Obtain <p>Whether there is a kernel update this month: false (no) and true (yes).</p>
 * @method void setHasKernelUpgrade(boolean $HasKernelUpgrade) Set <p>Whether there is a kernel update this month: false (no) and true (yes).</p>
 * @method string getCdcId() Obtain <p>cdcId, pass it when using a CDC subnet</p>
 * @method void setCdcId(string $CdcId) Set <p>cdcId, pass it when using a CDC subnet</p>
 * @method string getKibanaPrivateVip() Obtain <p>kibana intranet vip</p>
 * @method void setKibanaPrivateVip(string $KibanaPrivateVip) Set <p>kibana intranet vip</p>
 * @method string getCustomKibanaPrivateUrl() Obtain <p>Customize the private network url of kibana</p>
 * @method void setCustomKibanaPrivateUrl(string $CustomKibanaPrivateUrl) Set <p>Customize the private network url of kibana</p>
 * @method array getOutboundPublicAcls() Obtain <p>Node outbound access detailed information.</p>
 * @method void setOutboundPublicAcls(array $OutboundPublicAcls) Set <p>Node outbound access detailed information.</p>
 * @method string getNetConnectScheme() Obtain <p>Network connection solution</p>
 * @method void setNetConnectScheme(string $NetConnectScheme) Set <p>Network connection solution</p>
 * @method integer getDisasterRecoverGroupAffinity() Obtain <p>Placement group related parameters</p>
 * @method void setDisasterRecoverGroupAffinity(integer $DisasterRecoverGroupAffinity) Set <p>Placement group related parameters</p>
 * @method string getSubProductCode() Obtain <p>Sub-product ID enumeration values: open source edition: "sp_es_io2", basic version: "sp_es_basic", platinum version: "sp_es_platinum", AI Search Enhancement Edition: "sp_es_aisearch", enterprise edition: "sp_es_enterprise", CDC platinum version: "sp_es_CDC_platinum", Log Enhancement Edition: "sp_es_enlogging", tsearch: "sp_tsearch_io2", logstash: "sp_es_logstash". It can be empty. When it is empty, the backend maps this field based on LicenseType.</p>
 * @method void setSubProductCode(string $SubProductCode) Set <p>Sub-product ID enumeration values: open source edition: "sp_es_io2", basic version: "sp_es_basic", platinum version: "sp_es_platinum", AI Search Enhancement Edition: "sp_es_aisearch", enterprise edition: "sp_es_enterprise", CDC platinum version: "sp_es_CDC_platinum", Log Enhancement Edition: "sp_es_enlogging", tsearch: "sp_tsearch_io2", logstash: "sp_es_logstash". It can be empty. When it is empty, the backend maps this field based on LicenseType.</p>
 * @method integer getCosBucketStorageSize() Obtain <p>Storage-compute separation cos usage, Unit: M</p>
 * @method void setCosBucketStorageSize(integer $CosBucketStorageSize) Set <p>Storage-compute separation cos usage, Unit: M</p>
 * @method integer getReadWriteMode() Obtain <p>Read-write separation mode: 0: not enabled; 1: local read/write separation; 2: remote read/write separation.</p>
 * @method void setReadWriteMode(integer $ReadWriteMode) Set <p>Read-write separation mode: 0: not enabled; 1: local read/write separation; 2: remote read/write separation.</p>
 * @method boolean getEnableScheduleRecoverGroup() Obtain <p>Whether there is an asynchronous task scheduling for placement groups</p>
 * @method void setEnableScheduleRecoverGroup(boolean $EnableScheduleRecoverGroup) Set <p>Whether there is an asynchronous task scheduling for placement groups</p>
 * @method EnableScheduleOperationDuration getEnableScheduleOperationDuration() Obtain <p>The time when an asynchronous task is scheduled</p>
 * @method void setEnableScheduleOperationDuration(EnableScheduleOperationDuration $EnableScheduleOperationDuration) Set <p>The time when an asynchronous task is scheduled</p>
 * @method string getEnableDestroyProtection() Obtain <p>Cluster protection: OPEN: enable, CLOSE: disable</p>
 * @method void setEnableDestroyProtection(string $EnableDestroyProtection) Set <p>Cluster protection: OPEN: enable, CLOSE: disable</p>
 * @method string getShowKibanaIpPort() Obtain <p>kibana intranet access address</p>
 * @method void setShowKibanaIpPort(string $ShowKibanaIpPort) Set <p>kibana intranet access address</p>
 * @method boolean getIsCdzLite() Obtain <p>Whether it is a CDZLite availability zone</p>
 * @method void setIsCdzLite(boolean $IsCdzLite) Set <p>Whether it is a CDZLite availability zone</p>
 * @method string getEsPrivateTcpUrl() Obtain <p>Cluster private network tcp address</p>
 * @method void setEsPrivateTcpUrl(string $EsPrivateTcpUrl) Set <p>Cluster private network tcp address</p>
 * @method boolean getIsInRecycleBin() Obtain <p>Whether it is in the recycle bin</p><p>Default value: false</p>
 * @method void setIsInRecycleBin(boolean $IsInRecycleBin) Set <p>Whether it is in the recycle bin</p><p>Default value: false</p>
 * @method boolean getRecycleLockEnabled() Obtain <p>Is locked in the recycle bin</p><p>Default value: false</p>
 * @method void setRecycleLockEnabled(boolean $RecycleLockEnabled) Set <p>Is locked in the recycle bin</p><p>Default value: false</p>
 * @method string getMayDestroyPoint() Obtain <p>The time when termination is expected</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setMayDestroyPoint(string $MayDestroyPoint) Set <p>The time when termination is expected</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method integer getDelayDestroyInterval() Obtain <p>The time when termination is delayed</p><p>Unit: day</p>
 * @method void setDelayDestroyInterval(integer $DelayDestroyInterval) Set <p>The time when termination is delayed</p><p>Unit: day</p>
 * @method integer getEnableAutoReplace() Obtain <p>Enable automatic replacement of unhealthy nodes. 0: disable, 1: enable</p>
 * @method void setEnableAutoReplace(integer $EnableAutoReplace) Set <p>Enable automatic replacement of unhealthy nodes. 0: disable, 1: enable</p>
 * @method integer getOpenMTLS() Obtain <p>Enable mtls. 0: disable, 1: enable</p>
 * @method void setOpenMTLS(integer $OpenMTLS) Set <p>Enable mtls. 0: disable, 1: enable</p>
 * @method string getServerCertSource() Obtain <p>Certificate type</p>
 * @method void setServerCertSource(string $ServerCertSource) Set <p>Certificate type</p>
 * @method string getOldEsVip() Obtain <p>VIP pending migration for the cluster</p>
 * @method void setOldEsVip(string $OldEsVip) Set <p>VIP pending migration for the cluster</p>
 * @method string getOldEsPrivateTcpUrl() Obtain <p>Cluster TCP address to be migrated</p>
 * @method void setOldEsPrivateTcpUrl(string $OldEsPrivateTcpUrl) Set <p>Cluster TCP address to be migrated</p>
 * @method boolean getNeedOfflineOldNodesNotify() Obtain <p>Whether to take old nodes offline from the VIP</p>
 * @method void setNeedOfflineOldNodesNotify(boolean $NeedOfflineOldNodesNotify) Set <p>Whether to take old nodes offline from the VIP</p>
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var integer <p>uid</p>
     */
    public $AppId;

    /**
     * @var string <p>User UIN.</p>
     */
    public $Uin;

    /**
     * @var string <p>UID of the VPC to which the instance belongs</p>
     */
    public $VpcUid;

    /**
     * @var string <p>UID of the subnet to which the instance belongs</p>
     */
    public $SubnetUid;

    /**
     * @var integer <p>Instance status. 0: processing, 1: normal, -1: stopped, -2: being destroyed, -3: terminated, -4: isolated, 2: initializing when creating a cluster</p>
     */
    public $Status;

    /**
     * @var string <p>Auto-renewal flag. Value range: <br>RENEW_FLAG_AUTO: auto renewal<br>RENEW_FLAG_MANUAL: no auto-renewal<br>Default value: <br>RENEW_FLAG_DEFAULT: no auto-renewal<br>If this parameter is set to RENEW_FLAG_AUTO, the instance will automatically renew on a monthly basis after expiration if the account balance is sufficient.</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>Instance billing mode. Value ranges: PREPAID: prepaid mode, i.e., monthly subscription. POSTPAID_BY_HOUR: postpaid, i.e., pay-as-you-go. CDHPAID: CDH-paid mode, i.e., only charges for CDH, without charging for instances on CDH.</p>
     */
    public $ChargeType;

    /**
     * @var integer <p>Annual and monthly subscription duration, unit: month</p>
     */
    public $ChargePeriod;

    /**
     * @var string <p>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     */
    public $NodeType;

    /**
     * @var integer <p>Number of nodes</p>
     */
    public $NodeNum;

    /**
     * @var integer <p>Number of node CPU cores.</p>
     */
    public $CpuNum;

    /**
     * @var integer <p>Node memory size (GB).</p>
     */
    public $MemSize;

    /**
     * @var string <p>Node disk type</p>
     */
    public $DiskType;

    /**
     * @var integer <p>Node disk size (GB).</p>
     */
    public $DiskSize;

    /**
     * @var string <p>ES domain name</p>
     */
    public $EsDomain;

    /**
     * @var string <p>ES VIP</p>
     */
    public $EsVip;

    /**
     * @var integer <p>ES port</p>
     */
    public $EsPort;

    /**
     * @var string <p>Kibana access url</p>
     */
    public $KibanaUrl;

    /**
     * @var string <p>ES version number</p>
     */
    public $EsVersion;

    /**
     * @var string <p>ES configuration item</p>
     */
    public $EsConfig;

    /**
     * @var EsAcl <p>Kibana Access Control Configuration</p>
     */
    public $EsAcl;

    /**
     * @var string <p>Instance creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last modification time of the instance</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Instance expiration time</p>
     */
    public $Deadline;

    /**
     * @var integer <p>Instance type (instance type flag, currently only 1 and 2)</p>
     */
    public $InstanceType;

    /**
     * @var EsDictionaryInfo <p>Ik analyzer configuration</p>
     */
    public $IkConfig;

    /**
     * @var MasterNodeInfo <p>Dedicated master node configuration</p>
     */
    public $MasterNodeInfo;

    /**
     * @var CosBackup <p>cos automatic backup configuration</p>
     */
    public $CosBackup;

    /**
     * @var boolean <p>Whether cos automatic backup is allowed</p>
     */
    public $AllowCosBackup;

    /**
     * @var array <p>Tag list of the instance</p>
     */
    public $TagList;

    /**
     * @var string <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum</p>
     */
    public $LicenseType;

    /**
     * @var string <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li><li>enterprise: enterprise edition</li>Default value: platinum</p>
     */
    public $RealLicenseType;

    /**
     * @var boolean <p>Whether it is a hot-cold cluster<li>true: Hot-cold cluster</li><li>false: Non-hot-cold cluster</li></p>
     */
    public $EnableHotWarmMode;

    /**
     * @var string <p>Warm node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     */
    public $WarmNodeType;

    /**
     * @var integer <p>Number of warm nodes</p>
     */
    public $WarmNodeNum;

    /**
     * @var integer <p>Warm node CPU cores</p>
     */
    public $WarmCpuNum;

    /**
     * @var integer <p>Warm node memory size (GB).</p>
     */
    public $WarmMemSize;

    /**
     * @var string <p>Warm node disk type</p>
     */
    public $WarmDiskType;

    /**
     * @var integer <p>Warm node disk size (GB).</p>
     */
    public $WarmDiskSize;

    /**
     * @var array <p>Cluster node information list</p>
     */
    public $NodeInfoList;

    /**
     * @var string <p>Es public network address</p>
     */
    public $EsPublicUrl;

    /**
     * @var array <p>Multi-AZ network info</p>
     */
    public $MultiZoneInfo;

    /**
     * @var integer <p>Deployment mode<li>0: single availability zone</li><li>1: multi-availability zone, Beijing, Shanghai, Shanghai Finance, Guangzhou, Nanjing, Hong Kong, Singapore, Frankfurt (allowlist control)</li></p>
     */
    public $DeployMode;

    /**
     * @var string <p>ES public access status<li>OPEN: enable</li><li>CLOSE: disable</li></p>
     */
    public $PublicAccess;

    /**
     * @var EsAcl <p>ES public network access control configuration</p>
     */
    public $EsPublicAcl;

    /**
     * @var string <p>Kibana private network address</p>
     */
    public $KibanaPrivateUrl;

    /**
     * @var string <p>Kibana public access status<li>OPEN: enabled</li><li>CLOSE: disabled</li></p>
     */
    public $KibanaPublicAccess;

    /**
     * @var string <p>Kibana internal access status<li>OPEN: enable</li><li>CLOSE: disable</li></p>
     */
    public $KibanaPrivateAccess;

    /**
     * @var integer <p>Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li></p>
     */
    public $SecurityType;

    /**
     * @var integer <p>Scenario template type: 0, not enabled; 1, common scenarios; 2, log scenario; 3, search scenario</p>
     */
    public $SceneType;

    /**
     * @var string <p>Kibana configuration item</p>
     */
    public $KibanaConfig;

    /**
     * @var KibanaNodeInfo <p>Kibana node information</p>
     */
    public $KibanaNodeInfo;

    /**
     * @var WebNodeTypeInfo <p>Visualize node configuration</p>
     */
    public $WebNodeTypeInfo;

    /**
     * @var string <p>JDK type. Valid values: oracle, kona</p>
     */
    public $Jdk;

    /**
     * @var string <p>Cluster network communication protocol</p>
     */
    public $Protocol;

    /**
     * @var array <p>Security group id</p>
     */
    public $SecurityGroups;

    /**
     * @var string <p>Cold node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     */
    public $ColdNodeType;

    /**
     * @var integer <p>Number of cold nodes</p>
     */
    public $ColdNodeNum;

    /**
     * @var integer <p>Cold node CPU cores</p>
     */
    public $ColdCpuNum;

    /**
     * @var integer <p>Cold node memory size (GB).</p>
     */
    public $ColdMemSize;

    /**
     * @var string <p>Cold node disk type</p>
     */
    public $ColdDiskType;

    /**
     * @var integer <p>Cold node disk size (GB).</p>
     */
    public $ColdDiskSize;

    /**
     * @var string <p>Frozen node specification<li>ES.S1.SMALL2: 1-core 2GB</li><li>ES.S1.MEDIUM4: 2-core 4GB</li><li>ES.S1.MEDIUM8: 2-core 8GB</li><li>ES.S1.LARGE16: 4-core 16GB</li><li>ES.S1.2XLARGE32: 8-core 32GB</li><li>ES.S1.4XLARGE32: 16-core 32GB</li><li>ES.S1.4XLARGE64: 16-core 64GB</li></p>
     */
    public $FrozenNodeType;

    /**
     * @var integer <p>Number of frozen nodes</p>
     */
    public $FrozenNodeNum;

    /**
     * @var integer <p>Frozen node CPU cores</p>
     */
    public $FrozenCpuNum;

    /**
     * @var integer <p>Frozen node memory size (GB).</p>
     */
    public $FrozenMemSize;

    /**
     * @var string <p>Frozen node disk type</p>
     */
    public $FrozenDiskType;

    /**
     * @var integer <p>Frozen node disk size (GB).</p>
     */
    public $FrozenDiskSize;

    /**
     * @var integer <p>Cluster health status: -1 unknown; 0 Green; 1 Yellow; 2 Red</p>
     */
    public $HealthStatus;

    /**
     * @var string <p>Intracluster network url for https.</p>
     */
    public $EsPrivateUrl;

    /**
     * @var string <p>https cluster private network domain name</p>
     */
    public $EsPrivateDomain;

    /**
     * @var array <p>Cluster configuration group information.</p>
     */
    public $EsConfigSets;

    /**
     * @var OperationDuration <p>Cluster maintenance time slot</p>
     */
    public $OperationDuration;

    /**
     * @var array <p>web node list</p>
     */
    public $OptionalWebServiceInfos;

    /**
     * @var boolean <p>Autonomous index switch</p>
     */
    public $AutoIndexEnabled;

    /**
     * @var boolean <p>Whether storage and computation separation is supported.</p>
     */
    public $EnableHybridStorage;

    /**
     * @var float <p>Process progress.</p>
     */
    public $ProcessPercent;

    /**
     * @var string <p>Kibana alerting public network alert policy<li>OPEN: enable</li><li>CLOSE: disable</li></p>
     */
    public $KibanaAlteringPublicAccess;

    /**
     * @var boolean <p>Whether there is a kernel update this month: false (no) and true (yes).</p>
     */
    public $HasKernelUpgrade;

    /**
     * @var string <p>cdcId, pass it when using a CDC subnet</p>
     */
    public $CdcId;

    /**
     * @var string <p>kibana intranet vip</p>
     */
    public $KibanaPrivateVip;

    /**
     * @var string <p>Customize the private network url of kibana</p>
     */
    public $CustomKibanaPrivateUrl;

    /**
     * @var array <p>Node outbound access detailed information.</p>
     */
    public $OutboundPublicAcls;

    /**
     * @var string <p>Network connection solution</p>
     */
    public $NetConnectScheme;

    /**
     * @var integer <p>Placement group related parameters</p>
     */
    public $DisasterRecoverGroupAffinity;

    /**
     * @var string <p>Sub-product ID enumeration values: open source edition: "sp_es_io2", basic version: "sp_es_basic", platinum version: "sp_es_platinum", AI Search Enhancement Edition: "sp_es_aisearch", enterprise edition: "sp_es_enterprise", CDC platinum version: "sp_es_CDC_platinum", Log Enhancement Edition: "sp_es_enlogging", tsearch: "sp_tsearch_io2", logstash: "sp_es_logstash". It can be empty. When it is empty, the backend maps this field based on LicenseType.</p>
     */
    public $SubProductCode;

    /**
     * @var integer <p>Storage-compute separation cos usage, Unit: M</p>
     */
    public $CosBucketStorageSize;

    /**
     * @var integer <p>Read-write separation mode: 0: not enabled; 1: local read/write separation; 2: remote read/write separation.</p>
     */
    public $ReadWriteMode;

    /**
     * @var boolean <p>Whether there is an asynchronous task scheduling for placement groups</p>
     */
    public $EnableScheduleRecoverGroup;

    /**
     * @var EnableScheduleOperationDuration <p>The time when an asynchronous task is scheduled</p>
     */
    public $EnableScheduleOperationDuration;

    /**
     * @var string <p>Cluster protection: OPEN: enable, CLOSE: disable</p>
     */
    public $EnableDestroyProtection;

    /**
     * @var string <p>kibana intranet access address</p>
     */
    public $ShowKibanaIpPort;

    /**
     * @var boolean <p>Whether it is a CDZLite availability zone</p>
     */
    public $IsCdzLite;

    /**
     * @var string <p>Cluster private network tcp address</p>
     */
    public $EsPrivateTcpUrl;

    /**
     * @var boolean <p>Whether it is in the recycle bin</p><p>Default value: false</p>
     */
    public $IsInRecycleBin;

    /**
     * @var boolean <p>Is locked in the recycle bin</p><p>Default value: false</p>
     */
    public $RecycleLockEnabled;

    /**
     * @var string <p>The time when termination is expected</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $MayDestroyPoint;

    /**
     * @var integer <p>The time when termination is delayed</p><p>Unit: day</p>
     */
    public $DelayDestroyInterval;

    /**
     * @var integer <p>Enable automatic replacement of unhealthy nodes. 0: disable, 1: enable</p>
     */
    public $EnableAutoReplace;

    /**
     * @var integer <p>Enable mtls. 0: disable, 1: enable</p>
     */
    public $OpenMTLS;

    /**
     * @var string <p>Certificate type</p>
     */
    public $ServerCertSource;

    /**
     * @var string <p>VIP pending migration for the cluster</p>
     */
    public $OldEsVip;

    /**
     * @var string <p>Cluster TCP address to be migrated</p>
     */
    public $OldEsPrivateTcpUrl;

    /**
     * @var boolean <p>Whether to take old nodes offline from the VIP</p>
     */
    public $NeedOfflineOldNodesNotify;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $Region <p>Region.</p>
     * @param string $Zone <p>AZ.</p>
     * @param integer $AppId <p>uid</p>
     * @param string $Uin <p>User UIN.</p>
     * @param string $VpcUid <p>UID of the VPC to which the instance belongs</p>
     * @param string $SubnetUid <p>UID of the subnet to which the instance belongs</p>
     * @param integer $Status <p>Instance status. 0: processing, 1: normal, -1: stopped, -2: being destroyed, -3: terminated, -4: isolated, 2: initializing when creating a cluster</p>
     * @param string $RenewFlag <p>Auto-renewal flag. Value range: <br>RENEW_FLAG_AUTO: auto renewal<br>RENEW_FLAG_MANUAL: no auto-renewal<br>Default value: <br>RENEW_FLAG_DEFAULT: no auto-renewal<br>If this parameter is set to RENEW_FLAG_AUTO, the instance will automatically renew on a monthly basis after expiration if the account balance is sufficient.</p>
     * @param string $ChargeType <p>Instance billing mode. Value ranges: PREPAID: prepaid mode, i.e., monthly subscription. POSTPAID_BY_HOUR: postpaid, i.e., pay-as-you-go. CDHPAID: CDH-paid mode, i.e., only charges for CDH, without charging for instances on CDH.</p>
     * @param integer $ChargePeriod <p>Annual and monthly subscription duration, unit: month</p>
     * @param string $NodeType <p>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     * @param integer $NodeNum <p>Number of nodes</p>
     * @param integer $CpuNum <p>Number of node CPU cores.</p>
     * @param integer $MemSize <p>Node memory size (GB).</p>
     * @param string $DiskType <p>Node disk type</p>
     * @param integer $DiskSize <p>Node disk size (GB).</p>
     * @param string $EsDomain <p>ES domain name</p>
     * @param string $EsVip <p>ES VIP</p>
     * @param integer $EsPort <p>ES port</p>
     * @param string $KibanaUrl <p>Kibana access url</p>
     * @param string $EsVersion <p>ES version number</p>
     * @param string $EsConfig <p>ES configuration item</p>
     * @param EsAcl $EsAcl <p>Kibana Access Control Configuration</p>
     * @param string $CreateTime <p>Instance creation time</p>
     * @param string $UpdateTime <p>Last modification time of the instance</p>
     * @param string $Deadline <p>Instance expiration time</p>
     * @param integer $InstanceType <p>Instance type (instance type flag, currently only 1 and 2)</p>
     * @param EsDictionaryInfo $IkConfig <p>Ik analyzer configuration</p>
     * @param MasterNodeInfo $MasterNodeInfo <p>Dedicated master node configuration</p>
     * @param CosBackup $CosBackup <p>cos automatic backup configuration</p>
     * @param boolean $AllowCosBackup <p>Whether cos automatic backup is allowed</p>
     * @param array $TagList <p>Tag list of the instance</p>
     * @param string $LicenseType <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum</p>
     * @param string $RealLicenseType <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li><li>enterprise: enterprise edition</li>Default value: platinum</p>
     * @param boolean $EnableHotWarmMode <p>Whether it is a hot-cold cluster<li>true: Hot-cold cluster</li><li>false: Non-hot-cold cluster</li></p>
     * @param string $WarmNodeType <p>Warm node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     * @param integer $WarmNodeNum <p>Number of warm nodes</p>
     * @param integer $WarmCpuNum <p>Warm node CPU cores</p>
     * @param integer $WarmMemSize <p>Warm node memory size (GB).</p>
     * @param string $WarmDiskType <p>Warm node disk type</p>
     * @param integer $WarmDiskSize <p>Warm node disk size (GB).</p>
     * @param array $NodeInfoList <p>Cluster node information list</p>
     * @param string $EsPublicUrl <p>Es public network address</p>
     * @param array $MultiZoneInfo <p>Multi-AZ network info</p>
     * @param integer $DeployMode <p>Deployment mode<li>0: single availability zone</li><li>1: multi-availability zone, Beijing, Shanghai, Shanghai Finance, Guangzhou, Nanjing, Hong Kong, Singapore, Frankfurt (allowlist control)</li></p>
     * @param string $PublicAccess <p>ES public access status<li>OPEN: enable</li><li>CLOSE: disable</li></p>
     * @param EsAcl $EsPublicAcl <p>ES public network access control configuration</p>
     * @param string $KibanaPrivateUrl <p>Kibana private network address</p>
     * @param string $KibanaPublicAccess <p>Kibana public access status<li>OPEN: enabled</li><li>CLOSE: disabled</li></p>
     * @param string $KibanaPrivateAccess <p>Kibana internal access status<li>OPEN: enable</li><li>CLOSE: disable</li></p>
     * @param integer $SecurityType <p>Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li></p>
     * @param integer $SceneType <p>Scenario template type: 0, not enabled; 1, common scenarios; 2, log scenario; 3, search scenario</p>
     * @param string $KibanaConfig <p>Kibana configuration item</p>
     * @param KibanaNodeInfo $KibanaNodeInfo <p>Kibana node information</p>
     * @param WebNodeTypeInfo $WebNodeTypeInfo <p>Visualize node configuration</p>
     * @param string $Jdk <p>JDK type. Valid values: oracle, kona</p>
     * @param string $Protocol <p>Cluster network communication protocol</p>
     * @param array $SecurityGroups <p>Security group id</p>
     * @param string $ColdNodeType <p>Cold node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     * @param integer $ColdNodeNum <p>Number of cold nodes</p>
     * @param integer $ColdCpuNum <p>Cold node CPU cores</p>
     * @param integer $ColdMemSize <p>Cold node memory size (GB).</p>
     * @param string $ColdDiskType <p>Cold node disk type</p>
     * @param integer $ColdDiskSize <p>Cold node disk size (GB).</p>
     * @param string $FrozenNodeType <p>Frozen node specification<li>ES.S1.SMALL2: 1-core 2GB</li><li>ES.S1.MEDIUM4: 2-core 4GB</li><li>ES.S1.MEDIUM8: 2-core 8GB</li><li>ES.S1.LARGE16: 4-core 16GB</li><li>ES.S1.2XLARGE32: 8-core 32GB</li><li>ES.S1.4XLARGE32: 16-core 32GB</li><li>ES.S1.4XLARGE64: 16-core 64GB</li></p>
     * @param integer $FrozenNodeNum <p>Number of frozen nodes</p>
     * @param integer $FrozenCpuNum <p>Frozen node CPU cores</p>
     * @param integer $FrozenMemSize <p>Frozen node memory size (GB).</p>
     * @param string $FrozenDiskType <p>Frozen node disk type</p>
     * @param integer $FrozenDiskSize <p>Frozen node disk size (GB).</p>
     * @param integer $HealthStatus <p>Cluster health status: -1 unknown; 0 Green; 1 Yellow; 2 Red</p>
     * @param string $EsPrivateUrl <p>Intracluster network url for https.</p>
     * @param string $EsPrivateDomain <p>https cluster private network domain name</p>
     * @param array $EsConfigSets <p>Cluster configuration group information.</p>
     * @param OperationDuration $OperationDuration <p>Cluster maintenance time slot</p>
     * @param array $OptionalWebServiceInfos <p>web node list</p>
     * @param boolean $AutoIndexEnabled <p>Autonomous index switch</p>
     * @param boolean $EnableHybridStorage <p>Whether storage and computation separation is supported.</p>
     * @param float $ProcessPercent <p>Process progress.</p>
     * @param string $KibanaAlteringPublicAccess <p>Kibana alerting public network alert policy<li>OPEN: enable</li><li>CLOSE: disable</li></p>
     * @param boolean $HasKernelUpgrade <p>Whether there is a kernel update this month: false (no) and true (yes).</p>
     * @param string $CdcId <p>cdcId, pass it when using a CDC subnet</p>
     * @param string $KibanaPrivateVip <p>kibana intranet vip</p>
     * @param string $CustomKibanaPrivateUrl <p>Customize the private network url of kibana</p>
     * @param array $OutboundPublicAcls <p>Node outbound access detailed information.</p>
     * @param string $NetConnectScheme <p>Network connection solution</p>
     * @param integer $DisasterRecoverGroupAffinity <p>Placement group related parameters</p>
     * @param string $SubProductCode <p>Sub-product ID enumeration values: open source edition: "sp_es_io2", basic version: "sp_es_basic", platinum version: "sp_es_platinum", AI Search Enhancement Edition: "sp_es_aisearch", enterprise edition: "sp_es_enterprise", CDC platinum version: "sp_es_CDC_platinum", Log Enhancement Edition: "sp_es_enlogging", tsearch: "sp_tsearch_io2", logstash: "sp_es_logstash". It can be empty. When it is empty, the backend maps this field based on LicenseType.</p>
     * @param integer $CosBucketStorageSize <p>Storage-compute separation cos usage, Unit: M</p>
     * @param integer $ReadWriteMode <p>Read-write separation mode: 0: not enabled; 1: local read/write separation; 2: remote read/write separation.</p>
     * @param boolean $EnableScheduleRecoverGroup <p>Whether there is an asynchronous task scheduling for placement groups</p>
     * @param EnableScheduleOperationDuration $EnableScheduleOperationDuration <p>The time when an asynchronous task is scheduled</p>
     * @param string $EnableDestroyProtection <p>Cluster protection: OPEN: enable, CLOSE: disable</p>
     * @param string $ShowKibanaIpPort <p>kibana intranet access address</p>
     * @param boolean $IsCdzLite <p>Whether it is a CDZLite availability zone</p>
     * @param string $EsPrivateTcpUrl <p>Cluster private network tcp address</p>
     * @param boolean $IsInRecycleBin <p>Whether it is in the recycle bin</p><p>Default value: false</p>
     * @param boolean $RecycleLockEnabled <p>Is locked in the recycle bin</p><p>Default value: false</p>
     * @param string $MayDestroyPoint <p>The time when termination is expected</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param integer $DelayDestroyInterval <p>The time when termination is delayed</p><p>Unit: day</p>
     * @param integer $EnableAutoReplace <p>Enable automatic replacement of unhealthy nodes. 0: disable, 1: enable</p>
     * @param integer $OpenMTLS <p>Enable mtls. 0: disable, 1: enable</p>
     * @param string $ServerCertSource <p>Certificate type</p>
     * @param string $OldEsVip <p>VIP pending migration for the cluster</p>
     * @param string $OldEsPrivateTcpUrl <p>Cluster TCP address to be migrated</p>
     * @param boolean $NeedOfflineOldNodesNotify <p>Whether to take old nodes offline from the VIP</p>
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

        if (array_key_exists("RealLicenseType",$param) and $param["RealLicenseType"] !== null) {
            $this->RealLicenseType = $param["RealLicenseType"];
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

        if (array_key_exists("HasKernelUpgrade",$param) and $param["HasKernelUpgrade"] !== null) {
            $this->HasKernelUpgrade = $param["HasKernelUpgrade"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("KibanaPrivateVip",$param) and $param["KibanaPrivateVip"] !== null) {
            $this->KibanaPrivateVip = $param["KibanaPrivateVip"];
        }

        if (array_key_exists("CustomKibanaPrivateUrl",$param) and $param["CustomKibanaPrivateUrl"] !== null) {
            $this->CustomKibanaPrivateUrl = $param["CustomKibanaPrivateUrl"];
        }

        if (array_key_exists("OutboundPublicAcls",$param) and $param["OutboundPublicAcls"] !== null) {
            $this->OutboundPublicAcls = [];
            foreach ($param["OutboundPublicAcls"] as $key => $value){
                $obj = new OutboundPublicAcl();
                $obj->deserialize($value);
                array_push($this->OutboundPublicAcls, $obj);
            }
        }

        if (array_key_exists("NetConnectScheme",$param) and $param["NetConnectScheme"] !== null) {
            $this->NetConnectScheme = $param["NetConnectScheme"];
        }

        if (array_key_exists("DisasterRecoverGroupAffinity",$param) and $param["DisasterRecoverGroupAffinity"] !== null) {
            $this->DisasterRecoverGroupAffinity = $param["DisasterRecoverGroupAffinity"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("CosBucketStorageSize",$param) and $param["CosBucketStorageSize"] !== null) {
            $this->CosBucketStorageSize = $param["CosBucketStorageSize"];
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

        if (array_key_exists("ShowKibanaIpPort",$param) and $param["ShowKibanaIpPort"] !== null) {
            $this->ShowKibanaIpPort = $param["ShowKibanaIpPort"];
        }

        if (array_key_exists("IsCdzLite",$param) and $param["IsCdzLite"] !== null) {
            $this->IsCdzLite = $param["IsCdzLite"];
        }

        if (array_key_exists("EsPrivateTcpUrl",$param) and $param["EsPrivateTcpUrl"] !== null) {
            $this->EsPrivateTcpUrl = $param["EsPrivateTcpUrl"];
        }

        if (array_key_exists("IsInRecycleBin",$param) and $param["IsInRecycleBin"] !== null) {
            $this->IsInRecycleBin = $param["IsInRecycleBin"];
        }

        if (array_key_exists("RecycleLockEnabled",$param) and $param["RecycleLockEnabled"] !== null) {
            $this->RecycleLockEnabled = $param["RecycleLockEnabled"];
        }

        if (array_key_exists("MayDestroyPoint",$param) and $param["MayDestroyPoint"] !== null) {
            $this->MayDestroyPoint = $param["MayDestroyPoint"];
        }

        if (array_key_exists("DelayDestroyInterval",$param) and $param["DelayDestroyInterval"] !== null) {
            $this->DelayDestroyInterval = $param["DelayDestroyInterval"];
        }

        if (array_key_exists("EnableAutoReplace",$param) and $param["EnableAutoReplace"] !== null) {
            $this->EnableAutoReplace = $param["EnableAutoReplace"];
        }

        if (array_key_exists("OpenMTLS",$param) and $param["OpenMTLS"] !== null) {
            $this->OpenMTLS = $param["OpenMTLS"];
        }

        if (array_key_exists("ServerCertSource",$param) and $param["ServerCertSource"] !== null) {
            $this->ServerCertSource = $param["ServerCertSource"];
        }

        if (array_key_exists("OldEsVip",$param) and $param["OldEsVip"] !== null) {
            $this->OldEsVip = $param["OldEsVip"];
        }

        if (array_key_exists("OldEsPrivateTcpUrl",$param) and $param["OldEsPrivateTcpUrl"] !== null) {
            $this->OldEsPrivateTcpUrl = $param["OldEsPrivateTcpUrl"];
        }

        if (array_key_exists("NeedOfflineOldNodesNotify",$param) and $param["NeedOfflineOldNodesNotify"] !== null) {
            $this->NeedOfflineOldNodesNotify = $param["NeedOfflineOldNodesNotify"];
        }
    }
}
