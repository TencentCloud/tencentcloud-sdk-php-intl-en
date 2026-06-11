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
 * @method integer getMemory() Obtain <p>Instance memory size. Unit: MB. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to obtain creatable memory specifications.</p>
 * @method void setMemory(integer $Memory) Set <p>Instance memory size. Unit: MB. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to obtain creatable memory specifications.</p>
 * @method integer getVolume() Obtain <p>Instance disk size, unit: GB. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the creatable disk range.</p>
 * @method void setVolume(integer $Volume) Set <p>Instance disk size, unit: GB. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the creatable disk range.</p>
 * @method integer getPeriod() Obtain <p>Instance duration, measurement unit: month, optional values include [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
 * @method void setPeriod(integer $Period) Set <p>Instance duration, measurement unit: month, optional values include [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
 * @method integer getGoodsNum() Obtain <p>Instance count. Default value is 1, minimum value 1, maximum value 100.</p>
 * @method void setGoodsNum(integer $GoodsNum) Set <p>Instance count. Default value is 1, minimum value 1, maximum value 100.</p>
 * @method string getZone() Obtain <p>For AZ information, please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">Obtain the Purchasable Specifications of Cloud Databases</a> API to obtain the availability zones where instances can be created.</p><p>If you create a single-node, two-node, three-node, or four-node instance, this parameter is required. Specify an availability zone. If no availability zone is specified, the system will automatically select one (possibly not the availability zone you want to deploy in). If you create a cloud disk-based cluster instance, leave this parameter blank and configure the availability zones for RWNode and read-only nodes with parameter ClusterTopology.</p>
 * @method void setZone(string $Zone) Set <p>For AZ information, please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">Obtain the Purchasable Specifications of Cloud Databases</a> API to obtain the availability zones where instances can be created.</p><p>If you create a single-node, two-node, three-node, or four-node instance, this parameter is required. Specify an availability zone. If no availability zone is specified, the system will automatically select one (possibly not the availability zone you want to deploy in). If you create a cloud disk-based cluster instance, leave this parameter blank and configure the availability zones for RWNode and read-only nodes with parameter ClusterTopology.</p>
 * @method string getUniqVpcId() Obtain <p>VPC ID. Please use <a href="/document/api/215/15778">Querying VPC List</a>.<br>Description: If you create a cloud disk edition instance, this item is required and must be VPC type. If this item is left blank, the system will select the default VPC by default.</p>
 * @method void setUniqVpcId(string $UniqVpcId) Set <p>VPC ID. Please use <a href="/document/api/215/15778">Querying VPC List</a>.<br>Description: If you create a cloud disk edition instance, this item is required and must be VPC type. If this item is left blank, the system will select the default VPC by default.</p>
 * @method string getUniqSubnetId() Obtain <p>Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use <a href="/document/api/215/15784">query subnet list</a>.<br>Description: If this item is not filled, the system will select the default subnet in the Default VPC.</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) Set <p>Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use <a href="/document/api/215/15784">query subnet list</a>.<br>Description: If this item is not filled, the system will select the default subnet in the Default VPC.</p>
 * @method integer getProjectId() Obtain <p>Project ID. The default project is used if left empty. When you purchase a read-only instance or disaster recovery instance, the project ID is consistent with the primary instance by default.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID. The default project is used if left empty. When you purchase a read-only instance or disaster recovery instance, the project ID is consistent with the primary instance by default.</p>
 * @method integer getPort() Obtain <p>Custom port. Supported range: [1024-65535].<br>Description: If this item is left blank, it defaults to 3306.</p>
 * @method void setPort(integer $Port) Set <p>Custom port. Supported range: [1024-65535].<br>Description: If this item is left blank, it defaults to 3306.</p>
 * @method string getInstanceRole() Obtain <p>Instance type. Supported values include: master - primary instance, dr - disaster recovery instance, ro - read-only instance.<br>Description: Select instance type. master is selected by default if left blank.</p>
 * @method void setInstanceRole(string $InstanceRole) Set <p>Instance type. Supported values include: master - primary instance, dr - disaster recovery instance, ro - read-only instance.<br>Description: Select instance type. master is selected by default if left blank.</p>
 * @method string getMasterInstanceId() Obtain <p>Instance ID, required when purchasing a read-only instance or disaster recovery instance. This field represents the primary instance ID of the read-only instance or disaster recovery instance. Please use the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API to query the cloud database instance ID.</p>
 * @method void setMasterInstanceId(string $MasterInstanceId) Set <p>Instance ID, required when purchasing a read-only instance or disaster recovery instance. This field represents the primary instance ID of the read-only instance or disaster recovery instance. Please use the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API to query the cloud database instance ID.</p>
 * @method string getEngineVersion() Obtain <p>MySQL version, including 5.5, 5.6, 5.7, and 8.0. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the instance version created.<br>Note: When creating a non-cloud disk edition instance, specify the instance version as needed (recommend 5.7 or 8.0). If this parameter is left blank, the default value is 8.0. If creating a cloud disk edition instance, this parameter can only be set to 5.7 or 8.0.</p>
 * @method void setEngineVersion(string $EngineVersion) Set <p>MySQL version, including 5.5, 5.6, 5.7, and 8.0. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the instance version created.<br>Note: When creating a non-cloud disk edition instance, specify the instance version as needed (recommend 5.7 or 8.0). If this parameter is left blank, the default value is 8.0. If creating a cloud disk edition instance, this parameter can only be set to 5.7 or 8.0.</p>
 * @method string getPassword() Obtain <p>Set the root account password. The password must contain 8 to 64 characters and at least two of the following: letters, digits, or characters (supported characters: _+-&amp;=!@#$%^*()). You can specify this parameter when purchasing a primary instance. This parameter is invalid when purchasing a read-only instance or disaster recovery instance.</p>
 * @method void setPassword(string $Password) Set <p>Set the root account password. The password must contain 8 to 64 characters and at least two of the following: letters, digits, or characters (supported characters: _+-&amp;=!@#$%^*()). You can specify this parameter when purchasing a primary instance. This parameter is invalid when purchasing a read-only instance or disaster recovery instance.</p>
 * @method integer getProtectMode() Obtain <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
 * @method void setProtectMode(integer $ProtectMode) Set <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
 * @method integer getDeployMode() Obtain <p>Multiple Availability Zones, defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
 * @method void setDeployMode(integer $DeployMode) Set <p>Multiple Availability Zones, defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
 * @method string getSlaveZone() Obtain <p>AZ information of standby database 1.</p><p>For two-node, three-node, or four-node instances, specify this parameter. If not specified, it defaults to the Zone value. For cloud disk edition instances, this parameter is optional. Configure the AZ for read-write and read-only nodes with parameter ClusterTopology. Single-node instances are in a single availability zone, so no need to specify this parameter.</p>
 * @method void setSlaveZone(string $SlaveZone) Set <p>AZ information of standby database 1.</p><p>For two-node, three-node, or four-node instances, specify this parameter. If not specified, it defaults to the Zone value. For cloud disk edition instances, this parameter is optional. Configure the AZ for read-write and read-only nodes with parameter ClusterTopology. Single-node instances are in a single availability zone, so no need to specify this parameter.</p>
 * @method array getParamList() Obtain <p>Parameter list. The parameter format is ParamList.0.Name=auto_increment&amp;ParamList.0.Value=1. You can query the configurable parameters by referring to <a href="https://www.tencentcloud.com/document/api/236/32662?from_cn_redirect=1">querying the default configurable parameter list</a>.<br>Description: table Name case sensitivity can be turned on or off by setting the parameter lower_case_table_names. a parameter Value of 0 means enabling, and a Value of 1 means disabling. If not set, the default Value is 0. If you create a MySQL 8.0 edition instance, you need to set the lower_case_table_names parameter when creating the instance to turn on or off table Name case sensitivity. After the instance is created, the parameter cannot be modified, meaning table Name case sensitivity cannot be changed once created. Instances of other database versions support modifying the lower_case_table_names parameter after creation. For the function invocation method to set table Name case sensitivity when creating an instance, please see example 3 in this document.</p>
 * @method void setParamList(array $ParamList) Set <p>Parameter list. The parameter format is ParamList.0.Name=auto_increment&amp;ParamList.0.Value=1. You can query the configurable parameters by referring to <a href="https://www.tencentcloud.com/document/api/236/32662?from_cn_redirect=1">querying the default configurable parameter list</a>.<br>Description: table Name case sensitivity can be turned on or off by setting the parameter lower_case_table_names. a parameter Value of 0 means enabling, and a Value of 1 means disabling. If not set, the default Value is 0. If you create a MySQL 8.0 edition instance, you need to set the lower_case_table_names parameter when creating the instance to turn on or off table Name case sensitivity. After the instance is created, the parameter cannot be modified, meaning table Name case sensitivity cannot be changed once created. Instances of other database versions support modifying the lower_case_table_names parameter after creation. For the function invocation method to set table Name case sensitivity when creating an instance, please see example 3 in this document.</p>
 * @method string getBackupZone() Obtain <p>AZ information of standby 2, empty by default.</p><p>Specify this parameter when you proceed to purchase a three-node primary instance or a four-node primary instance.</p>
 * @method void setBackupZone(string $BackupZone) Set <p>AZ information of standby 2, empty by default.</p><p>Specify this parameter when you proceed to purchase a three-node primary instance or a four-node primary instance.</p>
 * @method integer getAutoRenewFlag() Obtain <p>Auto-renewal flag. Available values are: 0 - no auto-renewal; 1 - auto-renewal. Default is 0.</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>Auto-renewal flag. Available values are: 0 - no auto-renewal; 1 - auto-renewal. Default is 0.</p>
 * @method string getMasterRegion() Obtain <p>Region of the primary instance. This field is required when you purchase a disaster recovery or RO instance.</p>
 * @method void setMasterRegion(string $MasterRegion) Set <p>Region of the primary instance. This field is required when you purchase a disaster recovery or RO instance.</p>
 * @method array getSecurityGroup() Obtain <p>Security group parameters. Use the API <a href="https://www.tencentcloud.com/document/api/236/15850?from_cn_redirect=1">Query Project Security Group Information</a> to query security group details of a certain project.</p>
 * @method void setSecurityGroup(array $SecurityGroup) Set <p>Security group parameters. Use the API <a href="https://www.tencentcloud.com/document/api/236/15850?from_cn_redirect=1">Query Project Security Group Information</a> to query security group details of a certain project.</p>
 * @method RoGroup getRoGroup() Obtain <p>Read-only instance parameter. This parameter is required when you purchase a read-only instance.</p>
 * @method void setRoGroup(RoGroup $RoGroup) Set <p>Read-only instance parameter. This parameter is required when you purchase a read-only instance.</p>
 * @method string getInstanceName() Obtain <p>Instance name. When you purchase multiple instances only once, suffix numbers are used for case-sensitive instance naming. For example, instnaceName=db and goodsNum=3, the instance names are db1, db2, and db3 respectively.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name. When you purchase multiple instances only once, suffix numbers are used for case-sensitive instance naming. For example, instnaceName=db and goodsNum=3, the instance names are db1, db2, and db3 respectively.</p>
 * @method array getResourceTags() Obtain <p>Tag information of the instance.</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>Tag information of the instance.</p>
 * @method string getDeployGroupId() Obtain <p>Placement group ID.</p>
 * @method void setDeployGroupId(string $DeployGroupId) Set <p>Placement group ID.</p>
 * @method string getClientToken() Obtain <p>String used to ensure request idempotency. This string is generated by the customer and must be unique between different requests within 48 hours, with a maximum value of 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
 * @method void setClientToken(string $ClientToken) Set <p>String used to ensure request idempotency. This string is generated by the customer and must be unique between different requests within 48 hours, with a maximum value of 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
 * @method string getDeviceType() Obtain <p>Instance isolation type.</p><p>Enumeration values:</p><ul><li><p>UNIVERSAL: General-purpose instance</p></li><li><p>EXCLUSIVE: Dedicated instance</p></li><li><p>CLOUD_NATIVE_CLUSTER: Standard type of cloud disk edition</p></li><li><p>CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Enhanced type of cloud disk edition</p></li><li><p>CLOUD_NATIVE_CLUSTER_ULTRA: Premium type of cloud disk edition</p></li><li><p>If this parameter is not specified, it defaults to general-purpose instance.</p></li><li><p>Required if you create a cloud disk edition instance.</p></li><li><p>If you create a single-node instance, fill in this parameter as CLOUD_NATIVE_CLUSTER and specify parameter InstanceNodes equal to 1.</p></li></ul>
 * @method void setDeviceType(string $DeviceType) Set <p>Instance isolation type.</p><p>Enumeration values:</p><ul><li><p>UNIVERSAL: General-purpose instance</p></li><li><p>EXCLUSIVE: Dedicated instance</p></li><li><p>CLOUD_NATIVE_CLUSTER: Standard type of cloud disk edition</p></li><li><p>CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Enhanced type of cloud disk edition</p></li><li><p>CLOUD_NATIVE_CLUSTER_ULTRA: Premium type of cloud disk edition</p></li><li><p>If this parameter is not specified, it defaults to general-purpose instance.</p></li><li><p>Required if you create a cloud disk edition instance.</p></li><li><p>If you create a single-node instance, fill in this parameter as CLOUD_NATIVE_CLUSTER and specify parameter InstanceNodes equal to 1.</p></li></ul>
 * @method integer getParamTemplateId() Obtain <p>Parameter template ID.<br>Remark: If you use a custom parameter template ID, you can input the custom parameter template ID. If you plan to use the default parameter template, the input ID is invalid and you need to set ParamTemplateType.</p>
 * @method void setParamTemplateId(integer $ParamTemplateId) Set <p>Parameter template ID.<br>Remark: If you use a custom parameter template ID, you can input the custom parameter template ID. If you plan to use the default parameter template, the input ID is invalid and you need to set ParamTemplateType.</p>
 * @method array getAlarmPolicyList() Obtain <p>Array of alarm policy IDs. OriginId returned by the Tencent Cloud observability platform DescribeAlarmPolicy API.</p>
 * @method void setAlarmPolicyList(array $AlarmPolicyList) Set <p>Array of alarm policy IDs. OriginId returned by the Tencent Cloud observability platform DescribeAlarmPolicy API.</p>
 * @method integer getInstanceNodes() Obtain <p>Number of instance nodes.</p><p>For RO and single-node instances, the default value is 1. To purchase a three-node instance, set this value to 3 or specify the BackupZone parameter. When purchasing a primary instance without specifying this parameter or the BackupZone parameter, the default value is 2, meaning a dual-node instance will be purchased. To purchase a four-node instance, set this value to 4 or specify the FourthZone parameter.</p>
 * @method void setInstanceNodes(integer $InstanceNodes) Set <p>Number of instance nodes.</p><p>For RO and single-node instances, the default value is 1. To purchase a three-node instance, set this value to 3 or specify the BackupZone parameter. When purchasing a primary instance without specifying this parameter or the BackupZone parameter, the default value is 2, meaning a dual-node instance will be purchased. To purchase a four-node instance, set this value to 4 or specify the FourthZone parameter.</p>
 * @method integer getCpu() Obtain <p>Number of Cpu cores of the instance.</p><p>When multiple Cpu configurations exist for the Memory specification (for example, 64000MB Memory corresponds to 8-core/16-core/32-core), the Cpu parameter must be provided.</p>
 * @method void setCpu(integer $Cpu) Set <p>Number of Cpu cores of the instance.</p><p>When multiple Cpu configurations exist for the Memory specification (for example, 64000MB Memory corresponds to 8-core/16-core/32-core), the Cpu parameter must be provided.</p>
 * @method integer getAutoSyncFlag() Obtain <p>Whether to automatically initiate disaster recovery sync. This parameter only takes effect when purchasing a disaster recovery instance. Available values are: 0 - Do not automatically initiate disaster recovery sync; 1 - Automatically initiate disaster recovery sync. The default is 0.</p>
 * @method void setAutoSyncFlag(integer $AutoSyncFlag) Set <p>Whether to automatically initiate disaster recovery sync. This parameter only takes effect when purchasing a disaster recovery instance. Available values are: 0 - Do not automatically initiate disaster recovery sync; 1 - Automatically initiate disaster recovery sync. The default is 0.</p>
 * @method string getCageId() Obtain <p>Financial Enclosure ID.</p>
 * @method void setCageId(string $CageId) Set <p>Financial Enclosure ID.</p>
 * @method string getParamTemplateType() Obtain <p>Default parameter template type. Supported values include "HIGH_STABILITY" - HIGH-STABILITY template, "HIGH_PERFORMANCE" - HIGH-PERFORMANCE template.<br>Remark: If you need to use TencentDB for MySQL default parameter template, set up ParamTemplateType.</p>
 * @method void setParamTemplateType(string $ParamTemplateType) Set <p>Default parameter template type. Supported values include "HIGH_STABILITY" - HIGH-STABILITY template, "HIGH_PERFORMANCE" - HIGH-PERFORMANCE template.<br>Remark: If you need to use TencentDB for MySQL default parameter template, set up ParamTemplateType.</p>
 * @method array getAlarmPolicyIdList() Obtain <p>Alarm policy name array, such as ["policy-uyoee9wg"]. This parameter is invalid when AlarmPolicyList is not empty.</p>
 * @method void setAlarmPolicyIdList(array $AlarmPolicyIdList) Set <p>Alarm policy name array, such as ["policy-uyoee9wg"]. This parameter is invalid when AlarmPolicyList is not empty.</p>
 * @method boolean getDryRun() Obtain <p>Whether to perform a pre-check only for this request. true: Send a check request without creating an instance. Check items include whether required parameters are filled, request format, and service limit. If the check fails, return the corresponding error code; if the check passes, return RequestId. false: Send a normal request and create an instance directly after the check passes.<br>Default to false.</p>
 * @method void setDryRun(boolean $DryRun) Set <p>Whether to perform a pre-check only for this request. true: Send a check request without creating an instance. Check items include whether required parameters are filled, request format, and service limit. If the check fails, return the corresponding error code; if the check passes, return RequestId. false: Send a normal request and create an instance directly after the check passes.<br>Default to false.</p>
 * @method string getEngineType() Obtain <p>Instance engine type, defaults to "InnoDB". Supported values include "InnoDB" and "RocksDB".</p>
 * @method void setEngineType(string $EngineType) Set <p>Instance engine type, defaults to "InnoDB". Supported values include "InnoDB" and "RocksDB".</p>
 * @method array getVips() Obtain <p>Specify the IP list of the instance. Only the primary instance is supported. Process by instance sequence. Handle as unspecified if insufficient.</p>
 * @method void setVips(array $Vips) Set <p>Specify the IP list of the instance. Only the primary instance is supported. Process by instance sequence. Handle as unspecified if insufficient.</p>
 * @method integer getDataProtectVolume() Obtain <p>The data protection space size of the cloud disk edition instance, in GB, has a setting range of 1 - 10.</p>
 * @method void setDataProtectVolume(integer $DataProtectVolume) Set <p>The data protection space size of the cloud disk edition instance, in GB, has a setting range of 1 - 10.</p>
 * @method ClusterTopology getClusterTopology() Obtain <p>Topology configuration of cloud disk edition instance nodes.</p><p>If a cloud disk edition instance is purchased, this parameter is required. Set the topology of RW and RO nodes for the cloud disk edition instance. The node scope of RO nodes is 1-5. Set at least 1 RO node.</p>
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) Set <p>Topology configuration of cloud disk edition instance nodes.</p><p>If a cloud disk edition instance is purchased, this parameter is required. Set the topology of RW and RO nodes for the cloud disk edition instance. The node scope of RO nodes is 1-5. Set at least 1 RO node.</p>
 * @method string getDiskType() Obtain <p>Disk type. This parameter can be specified for single-node (cloud disk edition) or cloud disk edition instances. CLOUD_SSD means SSD Cloud Block Storage, CLOUD_HSSD means enhanced SSD cloud disk, and CLOUD_PREMIUM means high-performance cloud block storage.<br>Note: The supported regions for hard disk types of single-node (cloud disk edition) and cloud disk edition instances vary slightly. For specific support situation, refer to <a href="https://www.tencentcloud.com/document/product/236/8458?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
 * @method void setDiskType(string $DiskType) Set <p>Disk type. This parameter can be specified for single-node (cloud disk edition) or cloud disk edition instances. CLOUD_SSD means SSD Cloud Block Storage, CLOUD_HSSD means enhanced SSD cloud disk, and CLOUD_PREMIUM means high-performance cloud block storage.<br>Note: The supported regions for hard disk types of single-node (cloud disk edition) and cloud disk edition instances vary slightly. For specific support situation, refer to <a href="https://www.tencentcloud.com/document/product/236/8458?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
 * @method string getDestroyProtect() Obtain <p>Turn on or off instance destruction protection. on - turn on, off - turn off.</p>
 * @method void setDestroyProtect(string $DestroyProtect) Set <p>Turn on or off instance destruction protection. on - turn on, off - turn off.</p>
 * @method string getFourthZone() Obtain <p>AZ information of standby 3, empty by default. Specify this parameter when you proceed to purchase a four-node primary instance.</p>
 * @method void setFourthZone(string $FourthZone) Set <p>AZ information of standby 3, empty by default. Specify this parameter when you proceed to purchase a four-node primary instance.</p>
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer <p>Instance memory size. Unit: MB. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to obtain creatable memory specifications.</p>
     */
    public $Memory;

    /**
     * @var integer <p>Instance disk size, unit: GB. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the creatable disk range.</p>
     */
    public $Volume;

    /**
     * @var integer <p>Instance duration, measurement unit: month, optional values include [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
     */
    public $Period;

    /**
     * @var integer <p>Instance count. Default value is 1, minimum value 1, maximum value 100.</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>For AZ information, please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">Obtain the Purchasable Specifications of Cloud Databases</a> API to obtain the availability zones where instances can be created.</p><p>If you create a single-node, two-node, three-node, or four-node instance, this parameter is required. Specify an availability zone. If no availability zone is specified, the system will automatically select one (possibly not the availability zone you want to deploy in). If you create a cloud disk-based cluster instance, leave this parameter blank and configure the availability zones for RWNode and read-only nodes with parameter ClusterTopology.</p>
     */
    public $Zone;

    /**
     * @var string <p>VPC ID. Please use <a href="/document/api/215/15778">Querying VPC List</a>.<br>Description: If you create a cloud disk edition instance, this item is required and must be VPC type. If this item is left blank, the system will select the default VPC by default.</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use <a href="/document/api/215/15784">query subnet list</a>.<br>Description: If this item is not filled, the system will select the default subnet in the Default VPC.</p>
     */
    public $UniqSubnetId;

    /**
     * @var integer <p>Project ID. The default project is used if left empty. When you purchase a read-only instance or disaster recovery instance, the project ID is consistent with the primary instance by default.</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>Custom port. Supported range: [1024-65535].<br>Description: If this item is left blank, it defaults to 3306.</p>
     */
    public $Port;

    /**
     * @var string <p>Instance type. Supported values include: master - primary instance, dr - disaster recovery instance, ro - read-only instance.<br>Description: Select instance type. master is selected by default if left blank.</p>
     */
    public $InstanceRole;

    /**
     * @var string <p>Instance ID, required when purchasing a read-only instance or disaster recovery instance. This field represents the primary instance ID of the read-only instance or disaster recovery instance. Please use the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API to query the cloud database instance ID.</p>
     */
    public $MasterInstanceId;

    /**
     * @var string <p>MySQL version, including 5.5, 5.6, 5.7, and 8.0. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the instance version created.<br>Note: When creating a non-cloud disk edition instance, specify the instance version as needed (recommend 5.7 or 8.0). If this parameter is left blank, the default value is 8.0. If creating a cloud disk edition instance, this parameter can only be set to 5.7 or 8.0.</p>
     */
    public $EngineVersion;

    /**
     * @var string <p>Set the root account password. The password must contain 8 to 64 characters and at least two of the following: letters, digits, or characters (supported characters: _+-&amp;=!@#$%^*()). You can specify this parameter when purchasing a primary instance. This parameter is invalid when purchasing a read-only instance or disaster recovery instance.</p>
     */
    public $Password;

    /**
     * @var integer <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
     */
    public $ProtectMode;

    /**
     * @var integer <p>Multiple Availability Zones, defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
     */
    public $DeployMode;

    /**
     * @var string <p>AZ information of standby database 1.</p><p>For two-node, three-node, or four-node instances, specify this parameter. If not specified, it defaults to the Zone value. For cloud disk edition instances, this parameter is optional. Configure the AZ for read-write and read-only nodes with parameter ClusterTopology. Single-node instances are in a single availability zone, so no need to specify this parameter.</p>
     */
    public $SlaveZone;

    /**
     * @var array <p>Parameter list. The parameter format is ParamList.0.Name=auto_increment&amp;ParamList.0.Value=1. You can query the configurable parameters by referring to <a href="https://www.tencentcloud.com/document/api/236/32662?from_cn_redirect=1">querying the default configurable parameter list</a>.<br>Description: table Name case sensitivity can be turned on or off by setting the parameter lower_case_table_names. a parameter Value of 0 means enabling, and a Value of 1 means disabling. If not set, the default Value is 0. If you create a MySQL 8.0 edition instance, you need to set the lower_case_table_names parameter when creating the instance to turn on or off table Name case sensitivity. After the instance is created, the parameter cannot be modified, meaning table Name case sensitivity cannot be changed once created. Instances of other database versions support modifying the lower_case_table_names parameter after creation. For the function invocation method to set table Name case sensitivity when creating an instance, please see example 3 in this document.</p>
     */
    public $ParamList;

    /**
     * @var string <p>AZ information of standby 2, empty by default.</p><p>Specify this parameter when you proceed to purchase a three-node primary instance or a four-node primary instance.</p>
     */
    public $BackupZone;

    /**
     * @var integer <p>Auto-renewal flag. Available values are: 0 - no auto-renewal; 1 - auto-renewal. Default is 0.</p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>Region of the primary instance. This field is required when you purchase a disaster recovery or RO instance.</p>
     */
    public $MasterRegion;

    /**
     * @var array <p>Security group parameters. Use the API <a href="https://www.tencentcloud.com/document/api/236/15850?from_cn_redirect=1">Query Project Security Group Information</a> to query security group details of a certain project.</p>
     */
    public $SecurityGroup;

    /**
     * @var RoGroup <p>Read-only instance parameter. This parameter is required when you purchase a read-only instance.</p>
     */
    public $RoGroup;

    /**
     * @var string <p>Instance name. When you purchase multiple instances only once, suffix numbers are used for case-sensitive instance naming. For example, instnaceName=db and goodsNum=3, the instance names are db1, db2, and db3 respectively.</p>
     */
    public $InstanceName;

    /**
     * @var array <p>Tag information of the instance.</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Placement group ID.</p>
     */
    public $DeployGroupId;

    /**
     * @var string <p>String used to ensure request idempotency. This string is generated by the customer and must be unique between different requests within 48 hours, with a maximum value of 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
     */
    public $ClientToken;

    /**
     * @var string <p>Instance isolation type.</p><p>Enumeration values:</p><ul><li><p>UNIVERSAL: General-purpose instance</p></li><li><p>EXCLUSIVE: Dedicated instance</p></li><li><p>CLOUD_NATIVE_CLUSTER: Standard type of cloud disk edition</p></li><li><p>CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Enhanced type of cloud disk edition</p></li><li><p>CLOUD_NATIVE_CLUSTER_ULTRA: Premium type of cloud disk edition</p></li><li><p>If this parameter is not specified, it defaults to general-purpose instance.</p></li><li><p>Required if you create a cloud disk edition instance.</p></li><li><p>If you create a single-node instance, fill in this parameter as CLOUD_NATIVE_CLUSTER and specify parameter InstanceNodes equal to 1.</p></li></ul>
     */
    public $DeviceType;

    /**
     * @var integer <p>Parameter template ID.<br>Remark: If you use a custom parameter template ID, you can input the custom parameter template ID. If you plan to use the default parameter template, the input ID is invalid and you need to set ParamTemplateType.</p>
     */
    public $ParamTemplateId;

    /**
     * @var array <p>Array of alarm policy IDs. OriginId returned by the Tencent Cloud observability platform DescribeAlarmPolicy API.</p>
     */
    public $AlarmPolicyList;

    /**
     * @var integer <p>Number of instance nodes.</p><p>For RO and single-node instances, the default value is 1. To purchase a three-node instance, set this value to 3 or specify the BackupZone parameter. When purchasing a primary instance without specifying this parameter or the BackupZone parameter, the default value is 2, meaning a dual-node instance will be purchased. To purchase a four-node instance, set this value to 4 or specify the FourthZone parameter.</p>
     */
    public $InstanceNodes;

    /**
     * @var integer <p>Number of Cpu cores of the instance.</p><p>When multiple Cpu configurations exist for the Memory specification (for example, 64000MB Memory corresponds to 8-core/16-core/32-core), the Cpu parameter must be provided.</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Whether to automatically initiate disaster recovery sync. This parameter only takes effect when purchasing a disaster recovery instance. Available values are: 0 - Do not automatically initiate disaster recovery sync; 1 - Automatically initiate disaster recovery sync. The default is 0.</p>
     */
    public $AutoSyncFlag;

    /**
     * @var string <p>Financial Enclosure ID.</p>
     */
    public $CageId;

    /**
     * @var string <p>Default parameter template type. Supported values include "HIGH_STABILITY" - HIGH-STABILITY template, "HIGH_PERFORMANCE" - HIGH-PERFORMANCE template.<br>Remark: If you need to use TencentDB for MySQL default parameter template, set up ParamTemplateType.</p>
     */
    public $ParamTemplateType;

    /**
     * @var array <p>Alarm policy name array, such as ["policy-uyoee9wg"]. This parameter is invalid when AlarmPolicyList is not empty.</p>
     */
    public $AlarmPolicyIdList;

    /**
     * @var boolean <p>Whether to perform a pre-check only for this request. true: Send a check request without creating an instance. Check items include whether required parameters are filled, request format, and service limit. If the check fails, return the corresponding error code; if the check passes, return RequestId. false: Send a normal request and create an instance directly after the check passes.<br>Default to false.</p>
     */
    public $DryRun;

    /**
     * @var string <p>Instance engine type, defaults to "InnoDB". Supported values include "InnoDB" and "RocksDB".</p>
     */
    public $EngineType;

    /**
     * @var array <p>Specify the IP list of the instance. Only the primary instance is supported. Process by instance sequence. Handle as unspecified if insufficient.</p>
     */
    public $Vips;

    /**
     * @var integer <p>The data protection space size of the cloud disk edition instance, in GB, has a setting range of 1 - 10.</p>
     */
    public $DataProtectVolume;

    /**
     * @var ClusterTopology <p>Topology configuration of cloud disk edition instance nodes.</p><p>If a cloud disk edition instance is purchased, this parameter is required. Set the topology of RW and RO nodes for the cloud disk edition instance. The node scope of RO nodes is 1-5. Set at least 1 RO node.</p>
     */
    public $ClusterTopology;

    /**
     * @var string <p>Disk type. This parameter can be specified for single-node (cloud disk edition) or cloud disk edition instances. CLOUD_SSD means SSD Cloud Block Storage, CLOUD_HSSD means enhanced SSD cloud disk, and CLOUD_PREMIUM means high-performance cloud block storage.<br>Note: The supported regions for hard disk types of single-node (cloud disk edition) and cloud disk edition instances vary slightly. For specific support situation, refer to <a href="https://www.tencentcloud.com/document/product/236/8458?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
     */
    public $DiskType;

    /**
     * @var string <p>Turn on or off instance destruction protection. on - turn on, off - turn off.</p>
     */
    public $DestroyProtect;

    /**
     * @var string <p>AZ information of standby 3, empty by default. Specify this parameter when you proceed to purchase a four-node primary instance.</p>
     */
    public $FourthZone;

    /**
     * @param integer $Memory <p>Instance memory size. Unit: MB. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to obtain creatable memory specifications.</p>
     * @param integer $Volume <p>Instance disk size, unit: GB. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the creatable disk range.</p>
     * @param integer $Period <p>Instance duration, measurement unit: month, optional values include [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
     * @param integer $GoodsNum <p>Instance count. Default value is 1, minimum value 1, maximum value 100.</p>
     * @param string $Zone <p>For AZ information, please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">Obtain the Purchasable Specifications of Cloud Databases</a> API to obtain the availability zones where instances can be created.</p><p>If you create a single-node, two-node, three-node, or four-node instance, this parameter is required. Specify an availability zone. If no availability zone is specified, the system will automatically select one (possibly not the availability zone you want to deploy in). If you create a cloud disk-based cluster instance, leave this parameter blank and configure the availability zones for RWNode and read-only nodes with parameter ClusterTopology.</p>
     * @param string $UniqVpcId <p>VPC ID. Please use <a href="/document/api/215/15778">Querying VPC List</a>.<br>Description: If you create a cloud disk edition instance, this item is required and must be VPC type. If this item is left blank, the system will select the default VPC by default.</p>
     * @param string $UniqSubnetId <p>Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use <a href="/document/api/215/15784">query subnet list</a>.<br>Description: If this item is not filled, the system will select the default subnet in the Default VPC.</p>
     * @param integer $ProjectId <p>Project ID. The default project is used if left empty. When you purchase a read-only instance or disaster recovery instance, the project ID is consistent with the primary instance by default.</p>
     * @param integer $Port <p>Custom port. Supported range: [1024-65535].<br>Description: If this item is left blank, it defaults to 3306.</p>
     * @param string $InstanceRole <p>Instance type. Supported values include: master - primary instance, dr - disaster recovery instance, ro - read-only instance.<br>Description: Select instance type. master is selected by default if left blank.</p>
     * @param string $MasterInstanceId <p>Instance ID, required when purchasing a read-only instance or disaster recovery instance. This field represents the primary instance ID of the read-only instance or disaster recovery instance. Please use the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API to query the cloud database instance ID.</p>
     * @param string $EngineVersion <p>MySQL version, including 5.5, 5.6, 5.7, and 8.0. Please use the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the instance version created.<br>Note: When creating a non-cloud disk edition instance, specify the instance version as needed (recommend 5.7 or 8.0). If this parameter is left blank, the default value is 8.0. If creating a cloud disk edition instance, this parameter can only be set to 5.7 or 8.0.</p>
     * @param string $Password <p>Set the root account password. The password must contain 8 to 64 characters and at least two of the following: letters, digits, or characters (supported characters: _+-&amp;=!@#$%^*()). You can specify this parameter when purchasing a primary instance. This parameter is invalid when purchasing a read-only instance or disaster recovery instance.</p>
     * @param integer $ProtectMode <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
     * @param integer $DeployMode <p>Multiple Availability Zones, defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
     * @param string $SlaveZone <p>AZ information of standby database 1.</p><p>For two-node, three-node, or four-node instances, specify this parameter. If not specified, it defaults to the Zone value. For cloud disk edition instances, this parameter is optional. Configure the AZ for read-write and read-only nodes with parameter ClusterTopology. Single-node instances are in a single availability zone, so no need to specify this parameter.</p>
     * @param array $ParamList <p>Parameter list. The parameter format is ParamList.0.Name=auto_increment&amp;ParamList.0.Value=1. You can query the configurable parameters by referring to <a href="https://www.tencentcloud.com/document/api/236/32662?from_cn_redirect=1">querying the default configurable parameter list</a>.<br>Description: table Name case sensitivity can be turned on or off by setting the parameter lower_case_table_names. a parameter Value of 0 means enabling, and a Value of 1 means disabling. If not set, the default Value is 0. If you create a MySQL 8.0 edition instance, you need to set the lower_case_table_names parameter when creating the instance to turn on or off table Name case sensitivity. After the instance is created, the parameter cannot be modified, meaning table Name case sensitivity cannot be changed once created. Instances of other database versions support modifying the lower_case_table_names parameter after creation. For the function invocation method to set table Name case sensitivity when creating an instance, please see example 3 in this document.</p>
     * @param string $BackupZone <p>AZ information of standby 2, empty by default.</p><p>Specify this parameter when you proceed to purchase a three-node primary instance or a four-node primary instance.</p>
     * @param integer $AutoRenewFlag <p>Auto-renewal flag. Available values are: 0 - no auto-renewal; 1 - auto-renewal. Default is 0.</p>
     * @param string $MasterRegion <p>Region of the primary instance. This field is required when you purchase a disaster recovery or RO instance.</p>
     * @param array $SecurityGroup <p>Security group parameters. Use the API <a href="https://www.tencentcloud.com/document/api/236/15850?from_cn_redirect=1">Query Project Security Group Information</a> to query security group details of a certain project.</p>
     * @param RoGroup $RoGroup <p>Read-only instance parameter. This parameter is required when you purchase a read-only instance.</p>
     * @param string $InstanceName <p>Instance name. When you purchase multiple instances only once, suffix numbers are used for case-sensitive instance naming. For example, instnaceName=db and goodsNum=3, the instance names are db1, db2, and db3 respectively.</p>
     * @param array $ResourceTags <p>Tag information of the instance.</p>
     * @param string $DeployGroupId <p>Placement group ID.</p>
     * @param string $ClientToken <p>String used to ensure request idempotency. This string is generated by the customer and must be unique between different requests within 48 hours, with a maximum value of 64 ASCII characters. If not specified, request idempotency cannot be guaranteed.</p>
     * @param string $DeviceType <p>Instance isolation type.</p><p>Enumeration values:</p><ul><li><p>UNIVERSAL: General-purpose instance</p></li><li><p>EXCLUSIVE: Dedicated instance</p></li><li><p>CLOUD_NATIVE_CLUSTER: Standard type of cloud disk edition</p></li><li><p>CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Enhanced type of cloud disk edition</p></li><li><p>CLOUD_NATIVE_CLUSTER_ULTRA: Premium type of cloud disk edition</p></li><li><p>If this parameter is not specified, it defaults to general-purpose instance.</p></li><li><p>Required if you create a cloud disk edition instance.</p></li><li><p>If you create a single-node instance, fill in this parameter as CLOUD_NATIVE_CLUSTER and specify parameter InstanceNodes equal to 1.</p></li></ul>
     * @param integer $ParamTemplateId <p>Parameter template ID.<br>Remark: If you use a custom parameter template ID, you can input the custom parameter template ID. If you plan to use the default parameter template, the input ID is invalid and you need to set ParamTemplateType.</p>
     * @param array $AlarmPolicyList <p>Array of alarm policy IDs. OriginId returned by the Tencent Cloud observability platform DescribeAlarmPolicy API.</p>
     * @param integer $InstanceNodes <p>Number of instance nodes.</p><p>For RO and single-node instances, the default value is 1. To purchase a three-node instance, set this value to 3 or specify the BackupZone parameter. When purchasing a primary instance without specifying this parameter or the BackupZone parameter, the default value is 2, meaning a dual-node instance will be purchased. To purchase a four-node instance, set this value to 4 or specify the FourthZone parameter.</p>
     * @param integer $Cpu <p>Number of Cpu cores of the instance.</p><p>When multiple Cpu configurations exist for the Memory specification (for example, 64000MB Memory corresponds to 8-core/16-core/32-core), the Cpu parameter must be provided.</p>
     * @param integer $AutoSyncFlag <p>Whether to automatically initiate disaster recovery sync. This parameter only takes effect when purchasing a disaster recovery instance. Available values are: 0 - Do not automatically initiate disaster recovery sync; 1 - Automatically initiate disaster recovery sync. The default is 0.</p>
     * @param string $CageId <p>Financial Enclosure ID.</p>
     * @param string $ParamTemplateType <p>Default parameter template type. Supported values include "HIGH_STABILITY" - HIGH-STABILITY template, "HIGH_PERFORMANCE" - HIGH-PERFORMANCE template.<br>Remark: If you need to use TencentDB for MySQL default parameter template, set up ParamTemplateType.</p>
     * @param array $AlarmPolicyIdList <p>Alarm policy name array, such as ["policy-uyoee9wg"]. This parameter is invalid when AlarmPolicyList is not empty.</p>
     * @param boolean $DryRun <p>Whether to perform a pre-check only for this request. true: Send a check request without creating an instance. Check items include whether required parameters are filled, request format, and service limit. If the check fails, return the corresponding error code; if the check passes, return RequestId. false: Send a normal request and create an instance directly after the check passes.<br>Default to false.</p>
     * @param string $EngineType <p>Instance engine type, defaults to "InnoDB". Supported values include "InnoDB" and "RocksDB".</p>
     * @param array $Vips <p>Specify the IP list of the instance. Only the primary instance is supported. Process by instance sequence. Handle as unspecified if insufficient.</p>
     * @param integer $DataProtectVolume <p>The data protection space size of the cloud disk edition instance, in GB, has a setting range of 1 - 10.</p>
     * @param ClusterTopology $ClusterTopology <p>Topology configuration of cloud disk edition instance nodes.</p><p>If a cloud disk edition instance is purchased, this parameter is required. Set the topology of RW and RO nodes for the cloud disk edition instance. The node scope of RO nodes is 1-5. Set at least 1 RO node.</p>
     * @param string $DiskType <p>Disk type. This parameter can be specified for single-node (cloud disk edition) or cloud disk edition instances. CLOUD_SSD means SSD Cloud Block Storage, CLOUD_HSSD means enhanced SSD cloud disk, and CLOUD_PREMIUM means high-performance cloud block storage.<br>Note: The supported regions for hard disk types of single-node (cloud disk edition) and cloud disk edition instances vary slightly. For specific support situation, refer to <a href="https://www.tencentcloud.com/document/product/236/8458?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
     * @param string $DestroyProtect <p>Turn on or off instance destruction protection. on - turn on, off - turn off.</p>
     * @param string $FourthZone <p>AZ information of standby 3, empty by default. Specify this parameter when you proceed to purchase a four-node primary instance.</p>
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

        if (array_key_exists("FourthZone",$param) and $param["FourthZone"] !== null) {
            $this->FourthZone = $param["FourthZone"];
        }
    }
}
