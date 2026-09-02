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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host information for connectivity detection
 *
 * @method string getHostId() Obtain <p>Host ID.</p>
 * @method void setHostId(string $HostId) Set <p>Host ID.</p>
 * @method string getHostIp() Obtain <p>Host ip address</p>
 * @method void setHostIp(string $HostIp) Set <p>Host ip address</p>
 * @method string getHostName() Obtain <p>host name</p>
 * @method void setHostName(string $HostName) Set <p>host name</p>
 * @method string getDockerVersion() Obtain <p>docker version</p>
 * @method void setDockerVersion(string $DockerVersion) Set <p>docker version</p>
 * @method string getDockerFileSystemDriver() Obtain <p>docker file system type</p>
 * @method void setDockerFileSystemDriver(string $DockerFileSystemDriver) Set <p>docker file system type</p>
 * @method string getStatus() Obtain <p>Status.</p>
 * @method void setStatus(string $Status) Set <p>Status.</p>
 * @method boolean getIsContainerd() Obtain <p>Whether it is a container.</p>
 * @method void setIsContainerd(boolean $IsContainerd) Set <p>Whether it is a container.</p>
 * @method string getMachineType() Obtain <p>Specific host types.</p>
 * @method void setMachineType(string $MachineType) Set <p>Specific host types.</p>
 * @method string getPublicIp() Obtain <p>Public ip address</p>
 * @method void setPublicIp(string $PublicIp) Set <p>Public ip address</p>
 * @method string getUuid() Obtain <p>Host UUID</p>
 * @method void setUuid(string $Uuid) Set <p>Host UUID</p>
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method integer getHostRegionId() Obtain <p>id of the region where the host is located</p>
 * @method void setHostRegionId(integer $HostRegionId) Set <p>id of the region where the host is located</p>
 * @method string getHostRegion() Obtain <p>Host region</p>
 * @method void setHostRegion(string $HostRegion) Set <p>Host region</p>
 * @method ProjectInfo getProject() Obtain <p>Cluster belonging project</p>
 * @method void setProject(ProjectInfo $Project) Set <p>Cluster belonging project</p>
 * @method array getTags() Obtain <p>Cluster tag</p>
 * @method void setTags(array $Tags) Set <p>Cluster tag</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 */
class CheckConnectivityHostInfo extends AbstractModel
{
    /**
     * @var string <p>Host ID.</p>
     */
    public $HostId;

    /**
     * @var string <p>Host ip address</p>
     */
    public $HostIp;

    /**
     * @var string <p>host name</p>
     */
    public $HostName;

    /**
     * @var string <p>docker version</p>
     */
    public $DockerVersion;

    /**
     * @var string <p>docker file system type</p>
     */
    public $DockerFileSystemDriver;

    /**
     * @var string <p>Status.</p>
     */
    public $Status;

    /**
     * @var boolean <p>Whether it is a container.</p>
     */
    public $IsContainerd;

    /**
     * @var string <p>Specific host types.</p>
     */
    public $MachineType;

    /**
     * @var string <p>Public ip address</p>
     */
    public $PublicIp;

    /**
     * @var string <p>Host UUID</p>
     */
    public $Uuid;

    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>id of the region where the host is located</p>
     */
    public $HostRegionId;

    /**
     * @var string <p>Host region</p>
     */
    public $HostRegion;

    /**
     * @var ProjectInfo <p>Cluster belonging project</p>
     */
    public $Project;

    /**
     * @var array <p>Cluster tag</p>
     */
    public $Tags;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @param string $HostId <p>Host ID.</p>
     * @param string $HostIp <p>Host ip address</p>
     * @param string $HostName <p>host name</p>
     * @param string $DockerVersion <p>docker version</p>
     * @param string $DockerFileSystemDriver <p>docker file system type</p>
     * @param string $Status <p>Status.</p>
     * @param boolean $IsContainerd <p>Whether it is a container.</p>
     * @param string $MachineType <p>Specific host types.</p>
     * @param string $PublicIp <p>Public ip address</p>
     * @param string $Uuid <p>Host UUID</p>
     * @param string $InstanceId <p>Instance id</p>
     * @param integer $HostRegionId <p>id of the region where the host is located</p>
     * @param string $HostRegion <p>Host region</p>
     * @param ProjectInfo $Project <p>Cluster belonging project</p>
     * @param array $Tags <p>Cluster tag</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("DockerFileSystemDriver",$param) and $param["DockerFileSystemDriver"] !== null) {
            $this->DockerFileSystemDriver = $param["DockerFileSystemDriver"];
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("HostRegionId",$param) and $param["HostRegionId"] !== null) {
            $this->HostRegionId = $param["HostRegionId"];
        }

        if (array_key_exists("HostRegion",$param) and $param["HostRegion"] !== null) {
            $this->HostRegion = $param["HostRegion"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = new ProjectInfo();
            $this->Project->deserialize($param["Project"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
