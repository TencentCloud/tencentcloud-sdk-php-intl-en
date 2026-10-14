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
 * CreateInstance request structure.
 *
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getEsVersion() Obtain <p>Instance version (supported: "5.6.4", "6.4.3", "6.8.2", "7.5.1", "7.10.1")</p>
 * @method void setEsVersion(string $EsVersion) Set <p>Instance version (supported: "5.6.4", "6.4.3", "6.8.2", "7.5.1", "7.10.1")</p>
 * @method string getVpcId() Obtain <p>VPC ID</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID</p>
 * @method string getSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID.</p>
 * @method string getPassword() Obtain <p>Access password (8-16 characters, including at least two of the following: [a-z,A-Z], [0-9], and special characters in [-!@#$%&amp;^*+=_:;,.?])</p>
 * @method void setPassword(string $Password) Set <p>Access password (8-16 characters, including at least two of the following: [a-z,A-Z], [0-9], and special characters in [-!@#$%&amp;^*+=_:;,.?])</p>
 * @method string getInstanceName() Obtain <p>Instance name (1-50 English letters, Chinese characters, digits, hyphens -, or underscores _)</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name (1-50 English letters, Chinese characters, digits, hyphens -, or underscores _)</p>
 * @method integer getNodeNum() Obtain <p>Abandoned. Please use NodeInfoList<br>Node quantity (2-50)</p>
 * @method void setNodeNum(integer $NodeNum) Set <p>Abandoned. Please use NodeInfoList<br>Node quantity (2-50)</p>
 * @method string getChargeType() Obtain <p>Billing type<li>PREPAID: prepaid, i.e., monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour</li>Default value: POSTPAID_BY_HOUR</p>
 * @method void setChargeType(string $ChargeType) Set <p>Billing type<li>PREPAID: prepaid, i.e., monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour</li>Default value: POSTPAID_BY_HOUR</p>
 * @method integer getChargePeriod() Obtain <p>Annual and monthly subscription duration (unit determined by the TimeUnit parameter)</p>
 * @method void setChargePeriod(integer $ChargePeriod) Set <p>Annual and monthly subscription duration (unit determined by the TimeUnit parameter)</p>
 * @method string getRenewFlag() Obtain <p>Auto-renewal flag<li>RENEW_FLAG_AUTO: auto renewal</li><li>RENEW_FLAG_MANUAL: no auto-renewal, user renews manually</li>This needs to be set when ChargeType is PREPAID. If this parameter is not passed, no automatic renewal by default for general users, and auto renewal for SVIP users</p>
 * @method void setRenewFlag(string $RenewFlag) Set <p>Auto-renewal flag<li>RENEW_FLAG_AUTO: auto renewal</li><li>RENEW_FLAG_MANUAL: no auto-renewal, user renews manually</li>This needs to be set when ChargeType is PREPAID. If this parameter is not passed, no automatic renewal by default for general users, and auto renewal for SVIP users</p>
 * @method string getNodeType() Obtain <p>Abandoned. Please use NodeInfoList<br>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method void setNodeType(string $NodeType) Set <p>Abandoned. Please use NodeInfoList<br>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method string getDiskType() Obtain <p>Abandoned. Please use NodeInfoList<br>Node disk type<li>CLOUD_SSD: ssd cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_BSSD: universal type SSD cloud disk</li>Default value: CLOUD_SSD</p>
 * @method void setDiskType(string $DiskType) Set <p>Abandoned. Please use NodeInfoList<br>Node disk type<li>CLOUD_SSD: ssd cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_BSSD: universal type SSD cloud disk</li>Default value: CLOUD_SSD</p>
 * @method integer getDiskSize() Obtain <p>Abandoned. Please use NodeInfoList<br>Node disk capacity (unit: GB)</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Abandoned. Please use NodeInfoList<br>Node disk capacity (unit: GB)</p>
 * @method string getTimeUnit() Obtain <p>Billing duration unit (needs to be set when ChargeType is PREPAID. Default value: "m", which means month. Currently only support "m")</p>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Billing duration unit (needs to be set when ChargeType is PREPAID. Default value: "m", which means month. Currently only support "m")</p>
 * @method integer getAutoVoucher() Obtain <p>Indicates whether to use vouchers automatically<li>0: Do not use automatically.</li><li>1: Use automatically.</li>Default value: 0.</p>
 * @method void setAutoVoucher(integer $AutoVoucher) Set <p>Indicates whether to use vouchers automatically<li>0: Do not use automatically.</li><li>1: Use automatically.</li>Default value: 0.</p>
 * @method array getVoucherIds() Obtain <p>Voucher ID list. Only one voucher can be specified.</p>
 * @method void setVoucherIds(array $VoucherIds) Set <p>Voucher ID list. Only one voucher can be specified.</p>
 * @method boolean getEnableDedicatedMaster() Obtain <p>Abandoned. Please use NodeInfoList<br>Whether to create a dedicated master node<li>true: enable a dedicated master node</li><li>false: disable a dedicated master node</li>Default value: false</p>
 * @method void setEnableDedicatedMaster(boolean $EnableDedicatedMaster) Set <p>Abandoned. Please use NodeInfoList<br>Whether to create a dedicated master node<li>true: enable a dedicated master node</li><li>false: disable a dedicated master node</li>Default value: false</p>
 * @method integer getMasterNodeNum() Obtain <p>Abandoned. Please use NodeInfoList<br>Number of dedicated primary nodes (supports only 3 or 5. Required if EnableDedicatedMaster is true)</p>
 * @method void setMasterNodeNum(integer $MasterNodeNum) Set <p>Abandoned. Please use NodeInfoList<br>Number of dedicated primary nodes (supports only 3 or 5. Required if EnableDedicatedMaster is true)</p>
 * @method string getMasterNodeType() Obtain <p>Abandoned. Please use NodeInfoList<br>Dedicated primary node type (required if EnableDedicatedMaster is true)<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method void setMasterNodeType(string $MasterNodeType) Set <p>Abandoned. Please use NodeInfoList<br>Dedicated primary node type (required if EnableDedicatedMaster is true)<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method integer getMasterNodeDiskSize() Obtain <p>Abandoned. Please use NodeInfoList<br>Dedicated primary node disk size (in GB, optional; if transmitted, it must be 50. Customization is not supported temporarily)</p>
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) Set <p>Abandoned. Please use NodeInfoList<br>Dedicated primary node disk size (in GB, optional; if transmitted, it must be 50. Customization is not supported temporarily)</p>
 * @method string getClusterNameInConf() Obtain <p>ClusterName in the cluster configuration file (system default configuration is the instance ID, customization is not supported temporarily)</p>
 * @method void setClusterNameInConf(string $ClusterNameInConf) Set <p>ClusterName in the cluster configuration file (system default configuration is the instance ID, customization is not supported temporarily)</p>
 * @method integer getDeployMode() Obtain <p>Cluster deployment method<li>0: single-AZ deployment</li><li>1: multi-AZ deployment, Beijing, Shanghai, Shanghai Finance, Guangzhou, Nanjing, Hong Kong, Singapore, Frankfurt (allowlist control)</li>Default value: 0</p>
 * @method void setDeployMode(integer $DeployMode) Set <p>Cluster deployment method<li>0: single-AZ deployment</li><li>1: multi-AZ deployment, Beijing, Shanghai, Shanghai Finance, Guangzhou, Nanjing, Hong Kong, Singapore, Frankfurt (allowlist control)</li>Default value: 0</p>
 * @method array getMultiZoneInfo() Obtain <p>Detailed information of availability zones in multi-AZ deployment (required when DeployMode is 1)</p>
 * @method void setMultiZoneInfo(array $MultiZoneInfo) Set <p>Detailed information of availability zones in multi-AZ deployment (required when DeployMode is 1)</p>
 * @method string getLicenseType() Obtain <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum</p>
 * @method void setLicenseType(string $LicenseType) Set <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum</p>
 * @method array getNodeInfoList() Obtain <p>Node information list, for description of the specification information of various types of nodes in the cluster, such as node type, number of nodes, node specification, disk type, and disk size</p>
 * @method void setNodeInfoList(array $NodeInfoList) Set <p>Node information list, for description of the specification information of various types of nodes in the cluster, such as node type, number of nodes, node specification, disk type, and disk size</p>
 * @method array getTagList() Obtain <p>Node tag information list</p>
 * @method void setTagList(array $TagList) Set <p>Node tag information list</p>
 * @method integer getBasicSecurityType() Obtain <p>Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li></p>
 * @method void setBasicSecurityType(integer $BasicSecurityType) Set <p>Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li></p>
 * @method integer getSceneType() Obtain <p>Scenario template type 0: disabled 1: common 2: log 3: search</p>
 * @method void setSceneType(integer $SceneType) Set <p>Scenario template type 0: disabled 1: common 2: log 3: search</p>
 * @method WebNodeTypeInfo getWebNodeTypeInfo() Obtain <p>Visualize node configuration</p>
 * @method void setWebNodeTypeInfo(WebNodeTypeInfo $WebNodeTypeInfo) Set <p>Visualize node configuration</p>
 * @method string getProtocol() Obtain <p>Create an https cluster. http is selected by default.</p>
 * @method void setProtocol(string $Protocol) Set <p>Create an https cluster. http is selected by default.</p>
 * @method OperationDuration getOperationDuration() Obtain <p>Maintenance time slot</p>
 * @method void setOperationDuration(OperationDuration $OperationDuration) Set <p>Maintenance time slot</p>
 * @method boolean getEnableHybridStorage() Obtain <p>Whether storage-compute separation is enabled</p>
 * @method void setEnableHybridStorage(boolean $EnableHybridStorage) Set <p>Whether storage-compute separation is enabled</p>
 * @method integer getDiskEnhance() Obtain <p>Additional hard disk performance</p>
 * @method void setDiskEnhance(integer $DiskEnhance) Set <p>Additional hard disk performance</p>
 * @method boolean getEnableDiagnose() Obtain <p>Whether intelligent check is enabled</p>
 * @method void setEnableDiagnose(boolean $EnableDiagnose) Set <p>Whether intelligent check is enabled</p>
 * @method boolean getEnableCosBackup() Obtain <p>Whether to enable automatic backup</p>
 * @method void setEnableCosBackup(boolean $EnableCosBackup) Set <p>Whether to enable automatic backup</p>
 * @method string getCdcId() Obtain <p>cdcId, pass it when using a CDC subnet</p>
 * @method void setCdcId(string $CdcId) Set <p>cdcId, pass it when using a CDC subnet</p>
 * @method integer getDisasterRecoverGroupAffinity() Obtain <p>Placement group affinity. Value range: [0,10]. 0 indicates disabled.</p>
 * @method void setDisasterRecoverGroupAffinity(integer $DisasterRecoverGroupAffinity) Set <p>Placement group affinity. Value range: [0,10]. 0 indicates disabled.</p>
 * @method string getSubProductCode() Obtain <p>Enumeration values of sub-product ID: open source edition: "sp_es_io2", basic version: "sp_es_basic", platinum version: "sp_es_platinum", enterprise edition: "sp_es_enterprise", CDC platinum version: "sp_es_CDC_platinum", Log Enhancement Edition: "sp_es_enlogging", tsearch: "sp_tsearch_io2", logstash: "sp_es_logstash". It can be empty. When it is empty, the backend maps this field based on LicenseType.</p>
 * @method void setSubProductCode(string $SubProductCode) Set <p>Enumeration values of sub-product ID: open source edition: "sp_es_io2", basic version: "sp_es_basic", platinum version: "sp_es_platinum", enterprise edition: "sp_es_enterprise", CDC platinum version: "sp_es_CDC_platinum", Log Enhancement Edition: "sp_es_enlogging", tsearch: "sp_tsearch_io2", logstash: "sp_es_logstash". It can be empty. When it is empty, the backend maps this field based on LicenseType.</p>
 * @method integer getReadWriteMode() Obtain <p>Read-write separation mode: 0: not enabled; 1: local read/write separation; 2: remote read/write separation.</p>
 * @method void setReadWriteMode(integer $ReadWriteMode) Set <p>Read-write separation mode: 0: not enabled; 1: local read/write separation; 2: remote read/write separation.</p>
 * @method boolean getEnableScheduleRecoverGroup() Obtain <p>Whether the placement group has asynchronous tasks enabled</p>
 * @method void setEnableScheduleRecoverGroup(boolean $EnableScheduleRecoverGroup) Set <p>Whether the placement group has asynchronous tasks enabled</p>
 * @method EnableScheduleOperationDuration getEnableScheduleOperationDuration() Obtain <p>Maintenance time slot for enabling async tasks in a placement group</p>
 * @method void setEnableScheduleOperationDuration(EnableScheduleOperationDuration $EnableScheduleOperationDuration) Set <p>Maintenance time slot for enabling async tasks in a placement group</p>
 * @method array getAutoScaleDiskInfoList() Obtain <p>Auto capacity expansion parameter list</p>
 * @method void setAutoScaleDiskInfoList(array $AutoScaleDiskInfoList) Set <p>Auto capacity expansion parameter list</p>
 * @method string getEnableKibanaPublicAccess() Obtain <p>Whether to enable public network access to kibana. Enabled by default if not passed</p>
 * @method void setEnableKibanaPublicAccess(string $EnableKibanaPublicAccess) Set <p>Whether to enable public network access to kibana. Enabled by default if not passed</p>
 * @method array getAlarmPolicyIds() Obtain <p>Existing cloud monitoring and alarm policy ID</p>
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) Set <p>Existing cloud monitoring and alarm policy ID</p>
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>Instance version (supported: "5.6.4", "6.4.3", "6.8.2", "7.5.1", "7.10.1")</p>
     */
    public $EsVersion;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Access password (8-16 characters, including at least two of the following: [a-z,A-Z], [0-9], and special characters in [-!@#$%&amp;^*+=_:;,.?])</p>
     */
    public $Password;

    /**
     * @var string <p>Instance name (1-50 English letters, Chinese characters, digits, hyphens -, or underscores _)</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>Abandoned. Please use NodeInfoList<br>Node quantity (2-50)</p>
     */
    public $NodeNum;

    /**
     * @var string <p>Billing type<li>PREPAID: prepaid, i.e., monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour</li>Default value: POSTPAID_BY_HOUR</p>
     */
    public $ChargeType;

    /**
     * @var integer <p>Annual and monthly subscription duration (unit determined by the TimeUnit parameter)</p>
     */
    public $ChargePeriod;

    /**
     * @var string <p>Auto-renewal flag<li>RENEW_FLAG_AUTO: auto renewal</li><li>RENEW_FLAG_MANUAL: no auto-renewal, user renews manually</li>This needs to be set when ChargeType is PREPAID. If this parameter is not passed, no automatic renewal by default for general users, and auto renewal for SVIP users</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>Abandoned. Please use NodeInfoList<br>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     */
    public $NodeType;

    /**
     * @var string <p>Abandoned. Please use NodeInfoList<br>Node disk type<li>CLOUD_SSD: ssd cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_BSSD: universal type SSD cloud disk</li>Default value: CLOUD_SSD</p>
     */
    public $DiskType;

    /**
     * @var integer <p>Abandoned. Please use NodeInfoList<br>Node disk capacity (unit: GB)</p>
     */
    public $DiskSize;

    /**
     * @var string <p>Billing duration unit (needs to be set when ChargeType is PREPAID. Default value: "m", which means month. Currently only support "m")</p>
     */
    public $TimeUnit;

    /**
     * @var integer <p>Indicates whether to use vouchers automatically<li>0: Do not use automatically.</li><li>1: Use automatically.</li>Default value: 0.</p>
     */
    public $AutoVoucher;

    /**
     * @var array <p>Voucher ID list. Only one voucher can be specified.</p>
     */
    public $VoucherIds;

    /**
     * @var boolean <p>Abandoned. Please use NodeInfoList<br>Whether to create a dedicated master node<li>true: enable a dedicated master node</li><li>false: disable a dedicated master node</li>Default value: false</p>
     */
    public $EnableDedicatedMaster;

    /**
     * @var integer <p>Abandoned. Please use NodeInfoList<br>Number of dedicated primary nodes (supports only 3 or 5. Required if EnableDedicatedMaster is true)</p>
     */
    public $MasterNodeNum;

    /**
     * @var string <p>Abandoned. Please use NodeInfoList<br>Dedicated primary node type (required if EnableDedicatedMaster is true)<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     */
    public $MasterNodeType;

    /**
     * @var integer <p>Abandoned. Please use NodeInfoList<br>Dedicated primary node disk size (in GB, optional; if transmitted, it must be 50. Customization is not supported temporarily)</p>
     */
    public $MasterNodeDiskSize;

    /**
     * @var string <p>ClusterName in the cluster configuration file (system default configuration is the instance ID, customization is not supported temporarily)</p>
     */
    public $ClusterNameInConf;

    /**
     * @var integer <p>Cluster deployment method<li>0: single-AZ deployment</li><li>1: multi-AZ deployment, Beijing, Shanghai, Shanghai Finance, Guangzhou, Nanjing, Hong Kong, Singapore, Frankfurt (allowlist control)</li>Default value: 0</p>
     */
    public $DeployMode;

    /**
     * @var array <p>Detailed information of availability zones in multi-AZ deployment (required when DeployMode is 1)</p>
     */
    public $MultiZoneInfo;

    /**
     * @var string <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum</p>
     */
    public $LicenseType;

    /**
     * @var array <p>Node information list, for description of the specification information of various types of nodes in the cluster, such as node type, number of nodes, node specification, disk type, and disk size</p>
     */
    public $NodeInfoList;

    /**
     * @var array <p>Node tag information list</p>
     */
    public $TagList;

    /**
     * @var integer <p>Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li></p>
     */
    public $BasicSecurityType;

    /**
     * @var integer <p>Scenario template type 0: disabled 1: common 2: log 3: search</p>
     */
    public $SceneType;

    /**
     * @var WebNodeTypeInfo <p>Visualize node configuration</p>
     */
    public $WebNodeTypeInfo;

    /**
     * @var string <p>Create an https cluster. http is selected by default.</p>
     */
    public $Protocol;

    /**
     * @var OperationDuration <p>Maintenance time slot</p>
     */
    public $OperationDuration;

    /**
     * @var boolean <p>Whether storage-compute separation is enabled</p>
     */
    public $EnableHybridStorage;

    /**
     * @var integer <p>Additional hard disk performance</p>
     */
    public $DiskEnhance;

    /**
     * @var boolean <p>Whether intelligent check is enabled</p>
     */
    public $EnableDiagnose;

    /**
     * @var boolean <p>Whether to enable automatic backup</p>
     */
    public $EnableCosBackup;

    /**
     * @var string <p>cdcId, pass it when using a CDC subnet</p>
     */
    public $CdcId;

    /**
     * @var integer <p>Placement group affinity. Value range: [0,10]. 0 indicates disabled.</p>
     */
    public $DisasterRecoverGroupAffinity;

    /**
     * @var string <p>Enumeration values of sub-product ID: open source edition: "sp_es_io2", basic version: "sp_es_basic", platinum version: "sp_es_platinum", enterprise edition: "sp_es_enterprise", CDC platinum version: "sp_es_CDC_platinum", Log Enhancement Edition: "sp_es_enlogging", tsearch: "sp_tsearch_io2", logstash: "sp_es_logstash". It can be empty. When it is empty, the backend maps this field based on LicenseType.</p>
     */
    public $SubProductCode;

    /**
     * @var integer <p>Read-write separation mode: 0: not enabled; 1: local read/write separation; 2: remote read/write separation.</p>
     */
    public $ReadWriteMode;

    /**
     * @var boolean <p>Whether the placement group has asynchronous tasks enabled</p>
     */
    public $EnableScheduleRecoverGroup;

    /**
     * @var EnableScheduleOperationDuration <p>Maintenance time slot for enabling async tasks in a placement group</p>
     */
    public $EnableScheduleOperationDuration;

    /**
     * @var array <p>Auto capacity expansion parameter list</p>
     */
    public $AutoScaleDiskInfoList;

    /**
     * @var string <p>Whether to enable public network access to kibana. Enabled by default if not passed</p>
     */
    public $EnableKibanaPublicAccess;

    /**
     * @var array <p>Existing cloud monitoring and alarm policy ID</p>
     */
    public $AlarmPolicyIds;

    /**
     * @param string $Zone <p>AZ.</p>
     * @param string $EsVersion <p>Instance version (supported: "5.6.4", "6.4.3", "6.8.2", "7.5.1", "7.10.1")</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $SubnetId <p>Subnet ID.</p>
     * @param string $Password <p>Access password (8-16 characters, including at least two of the following: [a-z,A-Z], [0-9], and special characters in [-!@#$%&amp;^*+=_:;,.?])</p>
     * @param string $InstanceName <p>Instance name (1-50 English letters, Chinese characters, digits, hyphens -, or underscores _)</p>
     * @param integer $NodeNum <p>Abandoned. Please use NodeInfoList<br>Node quantity (2-50)</p>
     * @param string $ChargeType <p>Billing type<li>PREPAID: prepaid, i.e., monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour</li>Default value: POSTPAID_BY_HOUR</p>
     * @param integer $ChargePeriod <p>Annual and monthly subscription duration (unit determined by the TimeUnit parameter)</p>
     * @param string $RenewFlag <p>Auto-renewal flag<li>RENEW_FLAG_AUTO: auto renewal</li><li>RENEW_FLAG_MANUAL: no auto-renewal, user renews manually</li>This needs to be set when ChargeType is PREPAID. If this parameter is not passed, no automatic renewal by default for general users, and auto renewal for SVIP users</p>
     * @param string $NodeType <p>Abandoned. Please use NodeInfoList<br>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     * @param string $DiskType <p>Abandoned. Please use NodeInfoList<br>Node disk type<li>CLOUD_SSD: ssd cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_BSSD: universal type SSD cloud disk</li>Default value: CLOUD_SSD</p>
     * @param integer $DiskSize <p>Abandoned. Please use NodeInfoList<br>Node disk capacity (unit: GB)</p>
     * @param string $TimeUnit <p>Billing duration unit (needs to be set when ChargeType is PREPAID. Default value: "m", which means month. Currently only support "m")</p>
     * @param integer $AutoVoucher <p>Indicates whether to use vouchers automatically<li>0: Do not use automatically.</li><li>1: Use automatically.</li>Default value: 0.</p>
     * @param array $VoucherIds <p>Voucher ID list. Only one voucher can be specified.</p>
     * @param boolean $EnableDedicatedMaster <p>Abandoned. Please use NodeInfoList<br>Whether to create a dedicated master node<li>true: enable a dedicated master node</li><li>false: disable a dedicated master node</li>Default value: false</p>
     * @param integer $MasterNodeNum <p>Abandoned. Please use NodeInfoList<br>Number of dedicated primary nodes (supports only 3 or 5. Required if EnableDedicatedMaster is true)</p>
     * @param string $MasterNodeType <p>Abandoned. Please use NodeInfoList<br>Dedicated primary node type (required if EnableDedicatedMaster is true)<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     * @param integer $MasterNodeDiskSize <p>Abandoned. Please use NodeInfoList<br>Dedicated primary node disk size (in GB, optional; if transmitted, it must be 50. Customization is not supported temporarily)</p>
     * @param string $ClusterNameInConf <p>ClusterName in the cluster configuration file (system default configuration is the instance ID, customization is not supported temporarily)</p>
     * @param integer $DeployMode <p>Cluster deployment method<li>0: single-AZ deployment</li><li>1: multi-AZ deployment, Beijing, Shanghai, Shanghai Finance, Guangzhou, Nanjing, Hong Kong, Singapore, Frankfurt (allowlist control)</li>Default value: 0</p>
     * @param array $MultiZoneInfo <p>Detailed information of availability zones in multi-AZ deployment (required when DeployMode is 1)</p>
     * @param string $LicenseType <p>License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum</p>
     * @param array $NodeInfoList <p>Node information list, for description of the specification information of various types of nodes in the cluster, such as node type, number of nodes, node specification, disk type, and disk size</p>
     * @param array $TagList <p>Node tag information list</p>
     * @param integer $BasicSecurityType <p>Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li></p>
     * @param integer $SceneType <p>Scenario template type 0: disabled 1: common 2: log 3: search</p>
     * @param WebNodeTypeInfo $WebNodeTypeInfo <p>Visualize node configuration</p>
     * @param string $Protocol <p>Create an https cluster. http is selected by default.</p>
     * @param OperationDuration $OperationDuration <p>Maintenance time slot</p>
     * @param boolean $EnableHybridStorage <p>Whether storage-compute separation is enabled</p>
     * @param integer $DiskEnhance <p>Additional hard disk performance</p>
     * @param boolean $EnableDiagnose <p>Whether intelligent check is enabled</p>
     * @param boolean $EnableCosBackup <p>Whether to enable automatic backup</p>
     * @param string $CdcId <p>cdcId, pass it when using a CDC subnet</p>
     * @param integer $DisasterRecoverGroupAffinity <p>Placement group affinity. Value range: [0,10]. 0 indicates disabled.</p>
     * @param string $SubProductCode <p>Enumeration values of sub-product ID: open source edition: "sp_es_io2", basic version: "sp_es_basic", platinum version: "sp_es_platinum", enterprise edition: "sp_es_enterprise", CDC platinum version: "sp_es_CDC_platinum", Log Enhancement Edition: "sp_es_enlogging", tsearch: "sp_tsearch_io2", logstash: "sp_es_logstash". It can be empty. When it is empty, the backend maps this field based on LicenseType.</p>
     * @param integer $ReadWriteMode <p>Read-write separation mode: 0: not enabled; 1: local read/write separation; 2: remote read/write separation.</p>
     * @param boolean $EnableScheduleRecoverGroup <p>Whether the placement group has asynchronous tasks enabled</p>
     * @param EnableScheduleOperationDuration $EnableScheduleOperationDuration <p>Maintenance time slot for enabling async tasks in a placement group</p>
     * @param array $AutoScaleDiskInfoList <p>Auto capacity expansion parameter list</p>
     * @param string $EnableKibanaPublicAccess <p>Whether to enable public network access to kibana. Enabled by default if not passed</p>
     * @param array $AlarmPolicyIds <p>Existing cloud monitoring and alarm policy ID</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargePeriod",$param) and $param["ChargePeriod"] !== null) {
            $this->ChargePeriod = $param["ChargePeriod"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("EnableDedicatedMaster",$param) and $param["EnableDedicatedMaster"] !== null) {
            $this->EnableDedicatedMaster = $param["EnableDedicatedMaster"];
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

        if (array_key_exists("ClusterNameInConf",$param) and $param["ClusterNameInConf"] !== null) {
            $this->ClusterNameInConf = $param["ClusterNameInConf"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("WebNodeTypeInfo",$param) and $param["WebNodeTypeInfo"] !== null) {
            $this->WebNodeTypeInfo = new WebNodeTypeInfo();
            $this->WebNodeTypeInfo->deserialize($param["WebNodeTypeInfo"]);
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("OperationDuration",$param) and $param["OperationDuration"] !== null) {
            $this->OperationDuration = new OperationDuration();
            $this->OperationDuration->deserialize($param["OperationDuration"]);
        }

        if (array_key_exists("EnableHybridStorage",$param) and $param["EnableHybridStorage"] !== null) {
            $this->EnableHybridStorage = $param["EnableHybridStorage"];
        }

        if (array_key_exists("DiskEnhance",$param) and $param["DiskEnhance"] !== null) {
            $this->DiskEnhance = $param["DiskEnhance"];
        }

        if (array_key_exists("EnableDiagnose",$param) and $param["EnableDiagnose"] !== null) {
            $this->EnableDiagnose = $param["EnableDiagnose"];
        }

        if (array_key_exists("EnableCosBackup",$param) and $param["EnableCosBackup"] !== null) {
            $this->EnableCosBackup = $param["EnableCosBackup"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("DisasterRecoverGroupAffinity",$param) and $param["DisasterRecoverGroupAffinity"] !== null) {
            $this->DisasterRecoverGroupAffinity = $param["DisasterRecoverGroupAffinity"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
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

        if (array_key_exists("AutoScaleDiskInfoList",$param) and $param["AutoScaleDiskInfoList"] !== null) {
            $this->AutoScaleDiskInfoList = [];
            foreach ($param["AutoScaleDiskInfoList"] as $key => $value){
                $obj = new AutoScaleDiskInfo();
                $obj->deserialize($value);
                array_push($this->AutoScaleDiskInfoList, $obj);
            }
        }

        if (array_key_exists("EnableKibanaPublicAccess",$param) and $param["EnableKibanaPublicAccess"] !== null) {
            $this->EnableKibanaPublicAccess = $param["EnableKibanaPublicAccess"];
        }

        if (array_key_exists("AlarmPolicyIds",$param) and $param["AlarmPolicyIds"] !== null) {
            $this->AlarmPolicyIds = $param["AlarmPolicyIds"];
        }
    }
}
