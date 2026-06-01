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
 * CreateCloneInstance request structure.
 *
 * @method string getInstanceId() Obtain <p>Clone source instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Clone source instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method string getSpecifiedRollbackTime() Obtain <p>If necessary, specify this value when cloning an instance and rolling back to a specified time. The time format is yyyy-mm-dd hh:mm:ss.<br>Note: This parameter and the SpecifiedBackupId parameter require a choice between the two for configuration.</p>
 * @method void setSpecifiedRollbackTime(string $SpecifiedRollbackTime) Set <p>If necessary, specify this value when cloning an instance and rolling back to a specified time. The time format is yyyy-mm-dd hh:mm:ss.<br>Note: This parameter and the SpecifiedBackupId parameter require a choice between the two for configuration.</p>
 * @method integer getSpecifiedBackupId() Obtain <p>If necessary to clone an instance and roll back to a designated backup set, specify this value as the Id of the backup file. Please use <a href="/document/api/236/15842">query data backup file list</a>.</p><p>If it is a clone of a two-node, three-node, or four-node instance, the backup file is a physical backup. If it is a clone of a single-node or cloud disk edition instance, the backup file is a snapshot backup.</p>
 * @method void setSpecifiedBackupId(integer $SpecifiedBackupId) Set <p>If necessary to clone an instance and roll back to a designated backup set, specify this value as the Id of the backup file. Please use <a href="/document/api/236/15842">query data backup file list</a>.</p><p>If it is a clone of a two-node, three-node, or four-node instance, the backup file is a physical backup. If it is a clone of a single-node or cloud disk edition instance, the backup file is a snapshot backup.</p>
 * @method string getUniqVpcId() Obtain <p>VPC ID. Please use <a href="/document/api/215/15778">Querying VPC List</a>.</p>
 * @method void setUniqVpcId(string $UniqVpcId) Set <p>VPC ID. Please use <a href="/document/api/215/15778">Querying VPC List</a>.</p>
 * @method string getUniqSubnetId() Obtain <p>Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use <a href="/document/api/215/15784">query subnet list</a>.</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) Set <p>Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use <a href="/document/api/215/15784">query subnet list</a>.</p>
 * @method integer getMemory() Obtain <p>Instance memory size, unit: MB, must not be less than the clone source instance. Default is same as the source instance.</p>
 * @method void setMemory(integer $Memory) Set <p>Instance memory size, unit: MB, must not be less than the clone source instance. Default is same as the source instance.</p>
 * @method integer getVolume() Obtain <p>Instance disk size, unit: GB, must not be less than the clone source instance. Default is same as the source instance.</p>
 * @method void setVolume(integer $Volume) Set <p>Instance disk size, unit: GB, must not be less than the clone source instance. Default is same as the source instance.</p>
 * @method string getInstanceName() Obtain <p>Name of the newly generated clone instance. Support input of up to 60 characters.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Name of the newly generated clone instance. Support input of up to 60 characters.</p>
 * @method array getSecurityGroup() Obtain <p>Security group parameters. Use the API <a href="https://www.tencentcloud.com/document/api/236/15850?from_cn_redirect=1">Query Project Security Group Information</a> to query security group details of a certain project.</p>
 * @method void setSecurityGroup(array $SecurityGroup) Set <p>Security group parameters. Use the API <a href="https://www.tencentcloud.com/document/api/236/15850?from_cn_redirect=1">Query Project Security Group Information</a> to query security group details of a certain project.</p>
 * @method array getResourceTags() Obtain <p>Tag information of the instance.</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>Tag information of the instance.</p>
 * @method integer getCpu() Obtain <p>Instance Cpu cores, must not be less than the clone source instance. Default is same as the source instance.</p>
 * @method void setCpu(integer $Cpu) Set <p>Instance Cpu cores, must not be less than the clone source instance. Default is same as the source instance.</p>
 * @method integer getProtectMode() Obtain <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
 * @method void setProtectMode(integer $ProtectMode) Set <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
 * @method integer getDeployMode() Obtain <p>Multiple Availability Zones, defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
 * @method void setDeployMode(integer $DeployMode) Set <p>Multiple Availability Zones, defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
 * @method string getSlaveZone() Obtain <p>The AZ information of the newly generated clone instance standby 1 is the same as the source instance Zone by default.</p>
 * @method void setSlaveZone(string $SlaveZone) Set <p>The AZ information of the newly generated clone instance standby 1 is the same as the source instance Zone by default.</p>
 * @method string getBackupZone() Obtain <p>AZ information of standby 2, empty by default. Specify this parameter when you clone a strong sync primary instance.</p>
 * @method void setBackupZone(string $BackupZone) Set <p>AZ information of standby 2, empty by default. Specify this parameter when you clone a strong sync primary instance.</p>
 * @method string getDeviceType() Obtain <p>Clone instance type. Supported values include: "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "CLOUD_NATIVE_CLUSTER" - standard type for CLOUD disk, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced type for CLOUD disk. If not specified, it defaults to general-purpose instance.</p>
 * @method void setDeviceType(string $DeviceType) Set <p>Clone instance type. Supported values include: "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "CLOUD_NATIVE_CLUSTER" - standard type for CLOUD disk, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced type for CLOUD disk. If not specified, it defaults to general-purpose instance.</p>
 * @method integer getInstanceNodes() Obtain <p>Number of nodes in the new clone instance.</p><p>To clone a three-node instance, set this value to 3 or specify the BackupZone parameter. To clone a dual-node instance, set this value to 2. By default, a dual-node instance is cloned. To clone a four-node instance, set this value to 4 or specify the FourthZone parameter.</p>
 * @method void setInstanceNodes(integer $InstanceNodes) Set <p>Number of nodes in the new clone instance.</p><p>To clone a three-node instance, set this value to 3 or specify the BackupZone parameter. To clone a dual-node instance, set this value to 2. By default, a dual-node instance is cloned. To clone a four-node instance, set this value to 4 or specify the FourthZone parameter.</p>
 * @method string getDeployGroupId() Obtain <p>Placement group ID.</p>
 * @method void setDeployGroupId(string $DeployGroupId) Set <p>Placement group ID.</p>
 * @method boolean getDryRun() Obtain <p>Whether to only pre-check this request. true: Send a check request without creating an instance. Check items include required parameters, request format, and service limits. If the check fails, return the corresponding error code; if the check passes, return RequestId. Default false: Send a normal request and create the instance directly after passing the check.</p>
 * @method void setDryRun(boolean $DryRun) Set <p>Whether to only pre-check this request. true: Send a check request without creating an instance. Check items include required parameters, request format, and service limits. If the check fails, return the corresponding error code; if the check passes, return RequestId. Default false: Send a normal request and create the instance directly after passing the check.</p>
 * @method string getCageId() Obtain <p>Financial Enclosure ID.</p>
 * @method void setCageId(string $CageId) Set <p>Financial Enclosure ID.</p>
 * @method integer getProjectId() Obtain <p>Project ID. Default project ID 0.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID. Default project ID 0.</p>
 * @method string getPayType() Obtain <p>Payment type. Valid values: PRE_PAID (prepaid, also known as yearly/monthly subscription) and USED_PAID (pay-as-you-go). Default billing mode is pay-as-you-go.</p>
 * @method void setPayType(string $PayType) Set <p>Payment type. Valid values: PRE_PAID (prepaid, also known as yearly/monthly subscription) and USED_PAID (pay-as-you-go). Default billing mode is pay-as-you-go.</p>
 * @method integer getPeriod() Obtain <p>Instance duration, required when PayType is PRE_PAID, measurement unit: month, optional values include [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
 * @method void setPeriod(integer $Period) Set <p>Instance duration, required when PayType is PRE_PAID, measurement unit: month, optional values include [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
 * @method ClusterTopology getClusterTopology() Obtain <p>Topology configuration for cloud disk edition nodes.</p>
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) Set <p>Topology configuration for cloud disk edition nodes.</p>
 * @method string getSrcRegion() Obtain <p>Original instance region. Required when importing a remote backup, for example: ap-guangzhou</p>
 * @method void setSrcRegion(string $SrcRegion) Set <p>Original instance region. Required when importing a remote backup, for example: ap-guangzhou</p>
 * @method integer getSpecifiedSubBackupId() Obtain <p>Offsite data backup id</p>
 * @method void setSpecifiedSubBackupId(integer $SpecifiedSubBackupId) Set <p>Offsite data backup id</p>
 * @method string getMasterZone() Obtain <p>The AZ information of the newly generated clone instance primary database is the same as the source instance Zone by default.</p>
 * @method void setMasterZone(string $MasterZone) Set <p>The AZ information of the newly generated clone instance primary database is the same as the source instance Zone by default.</p>
 * @method string getZone() Obtain <p>The AZ information of the newly generated clone instance's primary database defaults to the same as the source instance's Zone.</p>
 * @method void setZone(string $Zone) Set <p>The AZ information of the newly generated clone instance's primary database defaults to the same as the source instance's Zone.</p>
 * @method string getFourthZone() Obtain <p>AZ information of standby 3, empty by default. Specify this parameter when you proceed to purchase a four-node primary instance.</p>
 * @method void setFourthZone(string $FourthZone) Set <p>AZ information of standby 3, empty by default. Specify this parameter when you proceed to purchase a four-node primary instance.</p>
 */
class CreateCloneInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Clone source instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>If necessary, specify this value when cloning an instance and rolling back to a specified time. The time format is yyyy-mm-dd hh:mm:ss.<br>Note: This parameter and the SpecifiedBackupId parameter require a choice between the two for configuration.</p>
     */
    public $SpecifiedRollbackTime;

    /**
     * @var integer <p>If necessary to clone an instance and roll back to a designated backup set, specify this value as the Id of the backup file. Please use <a href="/document/api/236/15842">query data backup file list</a>.</p><p>If it is a clone of a two-node, three-node, or four-node instance, the backup file is a physical backup. If it is a clone of a single-node or cloud disk edition instance, the backup file is a snapshot backup.</p>
     */
    public $SpecifiedBackupId;

    /**
     * @var string <p>VPC ID. Please use <a href="/document/api/215/15778">Querying VPC List</a>.</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use <a href="/document/api/215/15784">query subnet list</a>.</p>
     */
    public $UniqSubnetId;

    /**
     * @var integer <p>Instance memory size, unit: MB, must not be less than the clone source instance. Default is same as the source instance.</p>
     */
    public $Memory;

    /**
     * @var integer <p>Instance disk size, unit: GB, must not be less than the clone source instance. Default is same as the source instance.</p>
     */
    public $Volume;

    /**
     * @var string <p>Name of the newly generated clone instance. Support input of up to 60 characters.</p>
     */
    public $InstanceName;

    /**
     * @var array <p>Security group parameters. Use the API <a href="https://www.tencentcloud.com/document/api/236/15850?from_cn_redirect=1">Query Project Security Group Information</a> to query security group details of a certain project.</p>
     */
    public $SecurityGroup;

    /**
     * @var array <p>Tag information of the instance.</p>
     */
    public $ResourceTags;

    /**
     * @var integer <p>Instance Cpu cores, must not be less than the clone source instance. Default is same as the source instance.</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
     */
    public $ProtectMode;

    /**
     * @var integer <p>Multiple Availability Zones, defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
     */
    public $DeployMode;

    /**
     * @var string <p>The AZ information of the newly generated clone instance standby 1 is the same as the source instance Zone by default.</p>
     */
    public $SlaveZone;

    /**
     * @var string <p>AZ information of standby 2, empty by default. Specify this parameter when you clone a strong sync primary instance.</p>
     */
    public $BackupZone;

    /**
     * @var string <p>Clone instance type. Supported values include: "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "CLOUD_NATIVE_CLUSTER" - standard type for CLOUD disk, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced type for CLOUD disk. If not specified, it defaults to general-purpose instance.</p>
     */
    public $DeviceType;

    /**
     * @var integer <p>Number of nodes in the new clone instance.</p><p>To clone a three-node instance, set this value to 3 or specify the BackupZone parameter. To clone a dual-node instance, set this value to 2. By default, a dual-node instance is cloned. To clone a four-node instance, set this value to 4 or specify the FourthZone parameter.</p>
     */
    public $InstanceNodes;

    /**
     * @var string <p>Placement group ID.</p>
     */
    public $DeployGroupId;

    /**
     * @var boolean <p>Whether to only pre-check this request. true: Send a check request without creating an instance. Check items include required parameters, request format, and service limits. If the check fails, return the corresponding error code; if the check passes, return RequestId. Default false: Send a normal request and create the instance directly after passing the check.</p>
     */
    public $DryRun;

    /**
     * @var string <p>Financial Enclosure ID.</p>
     */
    public $CageId;

    /**
     * @var integer <p>Project ID. Default project ID 0.</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Payment type. Valid values: PRE_PAID (prepaid, also known as yearly/monthly subscription) and USED_PAID (pay-as-you-go). Default billing mode is pay-as-you-go.</p>
     */
    public $PayType;

    /**
     * @var integer <p>Instance duration, required when PayType is PRE_PAID, measurement unit: month, optional values include [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
     */
    public $Period;

    /**
     * @var ClusterTopology <p>Topology configuration for cloud disk edition nodes.</p>
     */
    public $ClusterTopology;

    /**
     * @var string <p>Original instance region. Required when importing a remote backup, for example: ap-guangzhou</p>
     */
    public $SrcRegion;

    /**
     * @var integer <p>Offsite data backup id</p>
     */
    public $SpecifiedSubBackupId;

    /**
     * @var string <p>The AZ information of the newly generated clone instance primary database is the same as the source instance Zone by default.</p>
     * @deprecated
     */
    public $MasterZone;

    /**
     * @var string <p>The AZ information of the newly generated clone instance's primary database defaults to the same as the source instance's Zone.</p>
     */
    public $Zone;

    /**
     * @var string <p>AZ information of standby 3, empty by default. Specify this parameter when you proceed to purchase a four-node primary instance.</p>
     */
    public $FourthZone;

    /**
     * @param string $InstanceId <p>Clone source instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     * @param string $SpecifiedRollbackTime <p>If necessary, specify this value when cloning an instance and rolling back to a specified time. The time format is yyyy-mm-dd hh:mm:ss.<br>Note: This parameter and the SpecifiedBackupId parameter require a choice between the two for configuration.</p>
     * @param integer $SpecifiedBackupId <p>If necessary to clone an instance and roll back to a designated backup set, specify this value as the Id of the backup file. Please use <a href="/document/api/236/15842">query data backup file list</a>.</p><p>If it is a clone of a two-node, three-node, or four-node instance, the backup file is a physical backup. If it is a clone of a single-node or cloud disk edition instance, the backup file is a snapshot backup.</p>
     * @param string $UniqVpcId <p>VPC ID. Please use <a href="/document/api/215/15778">Querying VPC List</a>.</p>
     * @param string $UniqSubnetId <p>Subnet ID in the private network. If UniqVpcId is set up, UniqSubnetId is required. Please use <a href="/document/api/215/15784">query subnet list</a>.</p>
     * @param integer $Memory <p>Instance memory size, unit: MB, must not be less than the clone source instance. Default is same as the source instance.</p>
     * @param integer $Volume <p>Instance disk size, unit: GB, must not be less than the clone source instance. Default is same as the source instance.</p>
     * @param string $InstanceName <p>Name of the newly generated clone instance. Support input of up to 60 characters.</p>
     * @param array $SecurityGroup <p>Security group parameters. Use the API <a href="https://www.tencentcloud.com/document/api/236/15850?from_cn_redirect=1">Query Project Security Group Information</a> to query security group details of a certain project.</p>
     * @param array $ResourceTags <p>Tag information of the instance.</p>
     * @param integer $Cpu <p>Instance Cpu cores, must not be less than the clone source instance. Default is same as the source instance.</p>
     * @param integer $ProtectMode <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
     * @param integer $DeployMode <p>Multiple Availability Zones, defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
     * @param string $SlaveZone <p>The AZ information of the newly generated clone instance standby 1 is the same as the source instance Zone by default.</p>
     * @param string $BackupZone <p>AZ information of standby 2, empty by default. Specify this parameter when you clone a strong sync primary instance.</p>
     * @param string $DeviceType <p>Clone instance type. Supported values include: "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "CLOUD_NATIVE_CLUSTER" - standard type for CLOUD disk, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced type for CLOUD disk. If not specified, it defaults to general-purpose instance.</p>
     * @param integer $InstanceNodes <p>Number of nodes in the new clone instance.</p><p>To clone a three-node instance, set this value to 3 or specify the BackupZone parameter. To clone a dual-node instance, set this value to 2. By default, a dual-node instance is cloned. To clone a four-node instance, set this value to 4 or specify the FourthZone parameter.</p>
     * @param string $DeployGroupId <p>Placement group ID.</p>
     * @param boolean $DryRun <p>Whether to only pre-check this request. true: Send a check request without creating an instance. Check items include required parameters, request format, and service limits. If the check fails, return the corresponding error code; if the check passes, return RequestId. Default false: Send a normal request and create the instance directly after passing the check.</p>
     * @param string $CageId <p>Financial Enclosure ID.</p>
     * @param integer $ProjectId <p>Project ID. Default project ID 0.</p>
     * @param string $PayType <p>Payment type. Valid values: PRE_PAID (prepaid, also known as yearly/monthly subscription) and USED_PAID (pay-as-you-go). Default billing mode is pay-as-you-go.</p>
     * @param integer $Period <p>Instance duration, required when PayType is PRE_PAID, measurement unit: month, optional values include [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
     * @param ClusterTopology $ClusterTopology <p>Topology configuration for cloud disk edition nodes.</p>
     * @param string $SrcRegion <p>Original instance region. Required when importing a remote backup, for example: ap-guangzhou</p>
     * @param integer $SpecifiedSubBackupId <p>Offsite data backup id</p>
     * @param string $MasterZone <p>The AZ information of the newly generated clone instance primary database is the same as the source instance Zone by default.</p>
     * @param string $Zone <p>The AZ information of the newly generated clone instance's primary database defaults to the same as the source instance's Zone.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SpecifiedRollbackTime",$param) and $param["SpecifiedRollbackTime"] !== null) {
            $this->SpecifiedRollbackTime = $param["SpecifiedRollbackTime"];
        }

        if (array_key_exists("SpecifiedBackupId",$param) and $param["SpecifiedBackupId"] !== null) {
            $this->SpecifiedBackupId = $param["SpecifiedBackupId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
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

        if (array_key_exists("BackupZone",$param) and $param["BackupZone"] !== null) {
            $this->BackupZone = $param["BackupZone"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("InstanceNodes",$param) and $param["InstanceNodes"] !== null) {
            $this->InstanceNodes = $param["InstanceNodes"];
        }

        if (array_key_exists("DeployGroupId",$param) and $param["DeployGroupId"] !== null) {
            $this->DeployGroupId = $param["DeployGroupId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("CageId",$param) and $param["CageId"] !== null) {
            $this->CageId = $param["CageId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ClusterTopology",$param) and $param["ClusterTopology"] !== null) {
            $this->ClusterTopology = new ClusterTopology();
            $this->ClusterTopology->deserialize($param["ClusterTopology"]);
        }

        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("SpecifiedSubBackupId",$param) and $param["SpecifiedSubBackupId"] !== null) {
            $this->SpecifiedSubBackupId = $param["SpecifiedSubBackupId"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("FourthZone",$param) and $param["FourthZone"] !== null) {
            $this->FourthZone = $param["FourthZone"];
        }
    }
}
