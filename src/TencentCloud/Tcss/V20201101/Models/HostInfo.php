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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of server IDs
 *
 * @method string getHostID() Obtain Server ID
 * @method void setHostID(string $HostID) Set Server ID
 * @method string getHostIP() Obtain Server IP, which is the private IP
 * @method void setHostIP(string $HostIP) Set Server IP, which is the private IP
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method string getGroup() Obtain Project
 * @method void setGroup(string $Group) Set Project
 * @method string getDockerVersion() Obtain Docker version
 * @method void setDockerVersion(string $DockerVersion) Set Docker version
 * @method string getDockerFileSystemDriver() Obtain Docker file system type
 * @method void setDockerFileSystemDriver(string $DockerFileSystemDriver) Set Docker file system type
 * @method integer getImageCnt() Obtain Number of images
 * @method void setImageCnt(integer $ImageCnt) Set Number of images
 * @method integer getContainerCnt() Obtain Number of containers
 * @method void setContainerCnt(integer $ContainerCnt) Set Number of containers
 * @method string getStatus() Obtain Agent status
 * @method void setStatus(string $Status) Set Agent status
 * @method boolean getIsContainerd() Obtain Whether it is Containerd
 * @method void setIsContainerd(boolean $IsContainerd) Set Whether it is Containerd
 * @method string getMachineType() Obtain Server source. Valid values: `CVM`, `ECM`, `LH`, `BM`, `Other`. The first four values indicate Tencent Cloud instances, while the last one indicates non-Tencent Cloud instances.
 * @method void setMachineType(string $MachineType) Set Server source. Valid values: `CVM`, `ECM`, `LH`, `BM`, `Other`. The first four values indicate Tencent Cloud instances, while the last one indicates non-Tencent Cloud instances.
 * @method string getPublicIp() Obtain Public IP
 * @method void setPublicIp(string $PublicIp) Set Public IP
 * @method string getUuid() Obtain Server UUID
 * @method void setUuid(string $Uuid) Set Server UUID
 * @method string getInstanceID() Obtain Server instance ID
 * @method void setInstanceID(string $InstanceID) Set Server instance ID
 * @method integer getRegionID() Obtain Region ID
 * @method void setRegionID(integer $RegionID) Set Region ID
 * @method ProjectInfo getProject() Obtain Project
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setProject(ProjectInfo $Project) Set Project
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getTags() Obtain Tags
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set Tags
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getClusterName() Obtain 
 * @method void setClusterName(string $ClusterName) Set 
 * @method string getClusterAccessedStatus() Obtain 
 * @method void setClusterAccessedStatus(string $ClusterAccessedStatus) Set 
 */
class HostInfo extends AbstractModel
{
    /**
     * @var string Server ID
     */
    public $HostID;

    /**
     * @var string Server IP, which is the private IP
     */
    public $HostIP;

    /**
     * @var string Server name
     */
    public $HostName;

    /**
     * @var string Project
     */
    public $Group;

    /**
     * @var string Docker version
     */
    public $DockerVersion;

    /**
     * @var string Docker file system type
     */
    public $DockerFileSystemDriver;

    /**
     * @var integer Number of images
     */
    public $ImageCnt;

    /**
     * @var integer Number of containers
     */
    public $ContainerCnt;

    /**
     * @var string Agent status
     */
    public $Status;

    /**
     * @var boolean Whether it is Containerd
     */
    public $IsContainerd;

    /**
     * @var string Server source. Valid values: `CVM`, `ECM`, `LH`, `BM`, `Other`. The first four values indicate Tencent Cloud instances, while the last one indicates non-Tencent Cloud instances.
     */
    public $MachineType;

    /**
     * @var string Public IP
     */
    public $PublicIp;

    /**
     * @var string Server UUID
     */
    public $Uuid;

    /**
     * @var string Server instance ID
     */
    public $InstanceID;

    /**
     * @var integer Region ID
     */
    public $RegionID;

    /**
     * @var ProjectInfo Project
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Project;

    /**
     * @var array Tags
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string 
     */
    public $ClusterName;

    /**
     * @var string 
     */
    public $ClusterAccessedStatus;

    /**
     * @param string $HostID Server ID
     * @param string $HostIP Server IP, which is the private IP
     * @param string $HostName Server name
     * @param string $Group Project
     * @param string $DockerVersion Docker version
     * @param string $DockerFileSystemDriver Docker file system type
     * @param integer $ImageCnt Number of images
     * @param integer $ContainerCnt Number of containers
     * @param string $Status Agent status
     * @param boolean $IsContainerd Whether it is Containerd
     * @param string $MachineType Server source. Valid values: `CVM`, `ECM`, `LH`, `BM`, `Other`. The first four values indicate Tencent Cloud instances, while the last one indicates non-Tencent Cloud instances.
     * @param string $PublicIp Public IP
     * @param string $Uuid Server UUID
     * @param string $InstanceID Server instance ID
     * @param integer $RegionID Region ID
     * @param ProjectInfo $Project Project
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $Tags Tags
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $ClusterID Cluster ID
     * @param string $ClusterName 
     * @param string $ClusterAccessedStatus 
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
        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("DockerFileSystemDriver",$param) and $param["DockerFileSystemDriver"] !== null) {
            $this->DockerFileSystemDriver = $param["DockerFileSystemDriver"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsContainerd",$param) and $param["IsContainerd"] !== null) {
            $this->IsContainerd = $param["IsContainerd"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = new ProjectInfo();
            $this->Project->deserialize($param["Project"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterAccessedStatus",$param) and $param["ClusterAccessedStatus"] !== null) {
            $this->ClusterAccessedStatus = $param["ClusterAccessedStatus"];
        }
    }
}
