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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloneInstance request structure.
 *
 * @method string getInstanceId() Obtain ID of the instance to be cloned from
 * @method void setInstanceId(string $InstanceId) Set ID of the instance to be cloned from
 * @method string getSpecifiedRollbackTime() Obtain To roll back the cloned instance to a specific point in time, set this parameter to a value in the format of "yyyy-mm-dd hh:mm:ss".
 * @method void setSpecifiedRollbackTime(string $SpecifiedRollbackTime) Set To roll back the cloned instance to a specific point in time, set this parameter to a value in the format of "yyyy-mm-dd hh:mm:ss".
 * @method integer getSpecifiedBackupId() Obtain To roll back the cloned instance to a specific physical backup file, set this parameter to the ID of the physical backup file. The ID can be obtained by the [DescribeBackups](https://intl.cloud.tencent.com/document/api/236/15842?from_cn_redirect=1) API.
 * @method void setSpecifiedBackupId(integer $SpecifiedBackupId) Set To roll back the cloned instance to a specific physical backup file, set this parameter to the ID of the physical backup file. The ID can be obtained by the [DescribeBackups](https://intl.cloud.tencent.com/document/api/236/15842?from_cn_redirect=1) API.
 * @method string getUniqVpcId() Obtain VPC ID, which can be obtained by the [DescribeVpcs](https://intl.cloud.tencent.com/document/api/215/15778?from_cn_redirect=1) API. If this parameter is left empty, the classic network will be used by default.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID, which can be obtained by the [DescribeVpcs](https://intl.cloud.tencent.com/document/api/215/15778?from_cn_redirect=1) API. If this parameter is left empty, the classic network will be used by default.
 * @method string getUniqSubnetId() Obtain VPC subnet ID, which can be obtained by the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API. If `UniqVpcId` is set, `UniqSubnetId` will be required.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set VPC subnet ID, which can be obtained by the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API. If `UniqVpcId` is set, `UniqSubnetId` will be required.
 * @method integer getMemory() Obtain Memory of the cloned instance in MB, which should be equal to (by default) or larger than that of the original instance
 * @method void setMemory(integer $Memory) Set Memory of the cloned instance in MB, which should be equal to (by default) or larger than that of the original instance
 * @method integer getVolume() Obtain Disk capacity of the cloned instance in GB, which should be equal to (by default) or larger than that of the original instance
 * @method void setVolume(integer $Volume) Set Disk capacity of the cloned instance in GB, which should be equal to (by default) or larger than that of the original instance
 * @method string getInstanceName() Obtain Name of the cloned instance
 * @method void setInstanceName(string $InstanceName) Set Name of the cloned instance
 * @method array getSecurityGroup() Obtain Security group parameter, which can be obtained by the [DescribeProjectSecurityGroups](https://intl.cloud.tencent.com/document/api/236/15850?from_cn_redirect=1) API
 * @method void setSecurityGroup(array $SecurityGroup) Set Security group parameter, which can be obtained by the [DescribeProjectSecurityGroups](https://intl.cloud.tencent.com/document/api/236/15850?from_cn_redirect=1) API
 * @method array getResourceTags() Obtain Information of the cloned instance tag
 * @method void setResourceTags(array $ResourceTags) Set Information of the cloned instance tag
 * @method integer getCpu() Obtain The number of CPU cores of the cloned instance. It should be equal to (by default) or larger than that of the original instance.
 * @method void setCpu(integer $Cpu) Set The number of CPU cores of the cloned instance. It should be equal to (by default) or larger than that of the original instance.
 * @method integer getProtectMode() Obtain Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync). Default value: 0.
 * @method void setProtectMode(integer $ProtectMode) Set Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync). Default value: 0.
 * @method integer getDeployMode() Obtain Multi-AZ or single-AZ. Valid values: 0 (single-AZ), 1 (multi-AZ). Default value: 0.
 * @method void setDeployMode(integer $DeployMode) Set Multi-AZ or single-AZ. Valid values: 0 (single-AZ), 1 (multi-AZ). Default value: 0.
 * @method string getSlaveZone() Obtain Availability zone information of replica 1 of the cloned instance, which is the same as the value of `Zone` of the original instance by default
 * @method void setSlaveZone(string $SlaveZone) Set Availability zone information of replica 1 of the cloned instance, which is the same as the value of `Zone` of the original instance by default
 * @method string getBackupZone() Obtain Availability zone information of replica 2 of the cloned instance, 
which is left empty by default. Specify this parameter when cloning a strong sync source instance.
 * @method void setBackupZone(string $BackupZone) Set Availability zone information of replica 2 of the cloned instance, 
which is left empty by default. Specify this parameter when cloning a strong sync source instance.
 * @method string getDeviceType() Obtain Resource isolation type of the clone. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance). Default value: `UNIVERSAL`.
 * @method void setDeviceType(string $DeviceType) Set Resource isolation type of the clone. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance). Default value: `UNIVERSAL`.
 * @method integer getInstanceNodes() Obtain The number of nodes of the clone. If this parameter is set to `3` or the `BackupZone` parameter is specified, the clone will have three nodes. If this parameter is set to `2` or left empty, the clone will have two nodes.
 * @method void setInstanceNodes(integer $InstanceNodes) Set The number of nodes of the clone. If this parameter is set to `3` or the `BackupZone` parameter is specified, the clone will have three nodes. If this parameter is set to `2` or left empty, the clone will have two nodes.
 * @method string getDeployGroupId() Obtain Placement group ID.
 * @method void setDeployGroupId(string $DeployGroupId) Set Placement group ID.
 * @method boolean getDryRun() Obtain Whether to check the request without creating any instance. Valid values: `true`, `false` (default). After being submitted, the request will be checked to see if it is in correct format and has all required parameters with valid values. An error code is returned if the check failed, and `RequestId` is returned if the check succeeded. After a successful check, no instance will be created if this parameter is set to `true`, whereas an instance will be created and if it is set to `false`.
 * @method void setDryRun(boolean $DryRun) Set Whether to check the request without creating any instance. Valid values: `true`, `false` (default). After being submitted, the request will be checked to see if it is in correct format and has all required parameters with valid values. An error code is returned if the check failed, and `RequestId` is returned if the check succeeded. After a successful check, no instance will be created if this parameter is set to `true`, whereas an instance will be created and if it is set to `false`.
 * @method string getCageId() Obtain Financial cage ID.
 * @method void setCageId(string $CageId) Set Financial cage ID.
 * @method integer getProjectId() Obtain Project ID. Default value: 0.
 * @method void setProjectId(integer $ProjectId) Set Project ID. Default value: 0.
 */
class CreateCloneInstanceRequest extends AbstractModel
{
    /**
     * @var string ID of the instance to be cloned from
     */
    public $InstanceId;

    /**
     * @var string To roll back the cloned instance to a specific point in time, set this parameter to a value in the format of "yyyy-mm-dd hh:mm:ss".
     */
    public $SpecifiedRollbackTime;

    /**
     * @var integer To roll back the cloned instance to a specific physical backup file, set this parameter to the ID of the physical backup file. The ID can be obtained by the [DescribeBackups](https://intl.cloud.tencent.com/document/api/236/15842?from_cn_redirect=1) API.
     */
    public $SpecifiedBackupId;

    /**
     * @var string VPC ID, which can be obtained by the [DescribeVpcs](https://intl.cloud.tencent.com/document/api/215/15778?from_cn_redirect=1) API. If this parameter is left empty, the classic network will be used by default.
     */
    public $UniqVpcId;

    /**
     * @var string VPC subnet ID, which can be obtained by the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API. If `UniqVpcId` is set, `UniqSubnetId` will be required.
     */
    public $UniqSubnetId;

    /**
     * @var integer Memory of the cloned instance in MB, which should be equal to (by default) or larger than that of the original instance
     */
    public $Memory;

    /**
     * @var integer Disk capacity of the cloned instance in GB, which should be equal to (by default) or larger than that of the original instance
     */
    public $Volume;

    /**
     * @var string Name of the cloned instance
     */
    public $InstanceName;

    /**
     * @var array Security group parameter, which can be obtained by the [DescribeProjectSecurityGroups](https://intl.cloud.tencent.com/document/api/236/15850?from_cn_redirect=1) API
     */
    public $SecurityGroup;

    /**
     * @var array Information of the cloned instance tag
     */
    public $ResourceTags;

    /**
     * @var integer The number of CPU cores of the cloned instance. It should be equal to (by default) or larger than that of the original instance.
     */
    public $Cpu;

    /**
     * @var integer Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync). Default value: 0.
     */
    public $ProtectMode;

    /**
     * @var integer Multi-AZ or single-AZ. Valid values: 0 (single-AZ), 1 (multi-AZ). Default value: 0.
     */
    public $DeployMode;

    /**
     * @var string Availability zone information of replica 1 of the cloned instance, which is the same as the value of `Zone` of the original instance by default
     */
    public $SlaveZone;

    /**
     * @var string Availability zone information of replica 2 of the cloned instance, 
which is left empty by default. Specify this parameter when cloning a strong sync source instance.
     */
    public $BackupZone;

    /**
     * @var string Resource isolation type of the clone. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance). Default value: `UNIVERSAL`.
     */
    public $DeviceType;

    /**
     * @var integer The number of nodes of the clone. If this parameter is set to `3` or the `BackupZone` parameter is specified, the clone will have three nodes. If this parameter is set to `2` or left empty, the clone will have two nodes.
     */
    public $InstanceNodes;

    /**
     * @var string Placement group ID.
     */
    public $DeployGroupId;

    /**
     * @var boolean Whether to check the request without creating any instance. Valid values: `true`, `false` (default). After being submitted, the request will be checked to see if it is in correct format and has all required parameters with valid values. An error code is returned if the check failed, and `RequestId` is returned if the check succeeded. After a successful check, no instance will be created if this parameter is set to `true`, whereas an instance will be created and if it is set to `false`.
     */
    public $DryRun;

    /**
     * @var string Financial cage ID.
     */
    public $CageId;

    /**
     * @var integer Project ID. Default value: 0.
     */
    public $ProjectId;

    /**
     * @param string $InstanceId ID of the instance to be cloned from
     * @param string $SpecifiedRollbackTime To roll back the cloned instance to a specific point in time, set this parameter to a value in the format of "yyyy-mm-dd hh:mm:ss".
     * @param integer $SpecifiedBackupId To roll back the cloned instance to a specific physical backup file, set this parameter to the ID of the physical backup file. The ID can be obtained by the [DescribeBackups](https://intl.cloud.tencent.com/document/api/236/15842?from_cn_redirect=1) API.
     * @param string $UniqVpcId VPC ID, which can be obtained by the [DescribeVpcs](https://intl.cloud.tencent.com/document/api/215/15778?from_cn_redirect=1) API. If this parameter is left empty, the classic network will be used by default.
     * @param string $UniqSubnetId VPC subnet ID, which can be obtained by the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API. If `UniqVpcId` is set, `UniqSubnetId` will be required.
     * @param integer $Memory Memory of the cloned instance in MB, which should be equal to (by default) or larger than that of the original instance
     * @param integer $Volume Disk capacity of the cloned instance in GB, which should be equal to (by default) or larger than that of the original instance
     * @param string $InstanceName Name of the cloned instance
     * @param array $SecurityGroup Security group parameter, which can be obtained by the [DescribeProjectSecurityGroups](https://intl.cloud.tencent.com/document/api/236/15850?from_cn_redirect=1) API
     * @param array $ResourceTags Information of the cloned instance tag
     * @param integer $Cpu The number of CPU cores of the cloned instance. It should be equal to (by default) or larger than that of the original instance.
     * @param integer $ProtectMode Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync). Default value: 0.
     * @param integer $DeployMode Multi-AZ or single-AZ. Valid values: 0 (single-AZ), 1 (multi-AZ). Default value: 0.
     * @param string $SlaveZone Availability zone information of replica 1 of the cloned instance, which is the same as the value of `Zone` of the original instance by default
     * @param string $BackupZone Availability zone information of replica 2 of the cloned instance, 
which is left empty by default. Specify this parameter when cloning a strong sync source instance.
     * @param string $DeviceType Resource isolation type of the clone. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance). Default value: `UNIVERSAL`.
     * @param integer $InstanceNodes The number of nodes of the clone. If this parameter is set to `3` or the `BackupZone` parameter is specified, the clone will have three nodes. If this parameter is set to `2` or left empty, the clone will have two nodes.
     * @param string $DeployGroupId Placement group ID.
     * @param boolean $DryRun Whether to check the request without creating any instance. Valid values: `true`, `false` (default). After being submitted, the request will be checked to see if it is in correct format and has all required parameters with valid values. An error code is returned if the check failed, and `RequestId` is returned if the check succeeded. After a successful check, no instance will be created if this parameter is set to `true`, whereas an instance will be created and if it is set to `false`.
     * @param string $CageId Financial cage ID.
     * @param integer $ProjectId Project ID. Default value: 0.
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
    }
}
