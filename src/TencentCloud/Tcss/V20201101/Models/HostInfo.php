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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of server IDs
 *
 * @method string getHostID() Obtain <p>Host ID.</p>
 * @method void setHostID(string $HostID) Set <p>Host ID.</p>
 * @method string getHostIP() Obtain <p>Host IP address, which is the private IP address.</p>
 * @method void setHostIP(string $HostIP) Set <p>Host IP address, which is the private IP address.</p>
 * @method string getHostName() Obtain <p>Host name.</p>
 * @method void setHostName(string $HostName) Set <p>Host name.</p>
 * @method string getGroup() Obtain <p>Business group.</p>
 * @method void setGroup(string $Group) Set <p>Business group.</p>
 * @method string getDockerVersion() Obtain <p>Docker version.</p>
 * @method void setDockerVersion(string $DockerVersion) Set <p>Docker version.</p>
 * @method string getDockerFileSystemDriver() Obtain <p>Docker file system type.</p>
 * @method void setDockerFileSystemDriver(string $DockerFileSystemDriver) Set <p>Docker file system type.</p>
 * @method integer getImageCnt() Obtain <p>Number of images.</p>
 * @method void setImageCnt(integer $ImageCnt) Set <p>Number of images.</p>
 * @method integer getContainerCnt() Obtain <p>Number of containers.</p>
 * @method void setContainerCnt(integer $ContainerCnt) Set <p>Number of containers.</p>
 * @method string getStatus() Obtain <p>Agent running status.</p>
 * @method void setStatus(string $Status) Set <p>Agent running status.</p>
 * @method boolean getIsContainerd() Obtain <p>Whether it is containerd.</p>
 * @method void setIsContainerd(boolean $IsContainerd) Set <p>Whether it is containerd.</p>
 * @method string getMachineType() Obtain <p>Server source: one of ["CVM", "ECM", "LH", "BM"] is a Tencent Cloud server; one of ["Other"] is a non-Tencent Cloud server;</p>
 * @method void setMachineType(string $MachineType) Set <p>Server source: one of ["CVM", "ECM", "LH", "BM"] is a Tencent Cloud server; one of ["Other"] is a non-Tencent Cloud server;</p>
 * @method string getPublicIp() Obtain <p>Public IP address.</p>
 * @method void setPublicIp(string $PublicIp) Set <p>Public IP address.</p>
 * @method string getUuid() Obtain <p>Host UUID.</p>
 * @method void setUuid(string $Uuid) Set <p>Host UUID.</p>
 * @method string getInstanceID() Obtain <p>Host instance ID.</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Host instance ID.</p>
 * @method integer getRegionID() Obtain <p>Region ID.</p>
 * @method void setRegionID(integer $RegionID) Set <p>Region ID.</p>
 * @method ProjectInfo getProject() Obtain <p>Project.</p>
 * @method void setProject(ProjectInfo $Project) Set <p>Project.</p>
 * @method array getTags() Obtain <p>Tag.</p>
 * @method void setTags(array $Tags) Set <p>Tag.</p>
 * @method string getClusterID() Obtain <p>Cluster ID.</p>
 * @method void setClusterID(string $ClusterID) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getClusterAccessedStatus() Obtain <p>Cluster access status.</p>
 * @method void setClusterAccessedStatus(string $ClusterAccessedStatus) Set <p>Cluster access status.</p>
 * @method string getClusterAccessedSubStatus() Obtain <p>Cluster access sub-status.</p><p>Enumeration values:</p><ul><li>AccessedSubNone: none</li><li>AccessedSubUninstallException: uninstallation exception</li><li>AccessedSubTimeout: access timeout</li><li>AccessedSubUninstallTimeout: uninstallation timeout</li><li>AccessedSubResourceException: cluster component check exception, including Deployment and DaemonSet</li><li>AccessedSubCAMPermissionDenied: insufficient CAM permissions</li></ul>
 * @method void setClusterAccessedSubStatus(string $ClusterAccessedSubStatus) Set <p>Cluster access sub-status.</p><p>Enumeration values:</p><ul><li>AccessedSubNone: none</li><li>AccessedSubUninstallException: uninstallation exception</li><li>AccessedSubTimeout: access timeout</li><li>AccessedSubUninstallTimeout: uninstallation timeout</li><li>AccessedSubResourceException: cluster component check exception, including Deployment and DaemonSet</li><li>AccessedSubCAMPermissionDenied: insufficient CAM permissions</li></ul>
 * @method string getClusterAccessedErrorReason() Obtain <p>Detailed description of the failure reason.</p>
 * @method void setClusterAccessedErrorReason(string $ClusterAccessedErrorReason) Set <p>Detailed description of the failure reason.</p>
 * @method integer getChargeCoresCnt() Obtain <p>Billable cores.</p>
 * @method void setChargeCoresCnt(integer $ChargeCoresCnt) Set <p>Billable cores.</p>
 * @method string getDefendStatus() Obtain <p>Protection status:<br>Defended<br>Undefended</p>
 * @method void setDefendStatus(string $DefendStatus) Set <p>Protection status:<br>Defended<br>Undefended</p>
 * @method integer getCoresCnt() Obtain <p>Number of cores.</p>
 * @method void setCoresCnt(integer $CoresCnt) Set <p>Number of cores.</p>
 * @method string getLastOnlineTime() Obtain <p>Last online time.</p>
 * @method void setLastOnlineTime(string $LastOnlineTime) Set <p>Last online time.</p>
 */
class HostInfo extends AbstractModel
{
    /**
     * @var string <p>Host ID.</p>
     */
    public $HostID;

    /**
     * @var string <p>Host IP address, which is the private IP address.</p>
     */
    public $HostIP;

    /**
     * @var string <p>Host name.</p>
     */
    public $HostName;

    /**
     * @var string <p>Business group.</p>
     */
    public $Group;

    /**
     * @var string <p>Docker version.</p>
     */
    public $DockerVersion;

    /**
     * @var string <p>Docker file system type.</p>
     */
    public $DockerFileSystemDriver;

    /**
     * @var integer <p>Number of images.</p>
     */
    public $ImageCnt;

    /**
     * @var integer <p>Number of containers.</p>
     */
    public $ContainerCnt;

    /**
     * @var string <p>Agent running status.</p>
     */
    public $Status;

    /**
     * @var boolean <p>Whether it is containerd.</p>
     */
    public $IsContainerd;

    /**
     * @var string <p>Server source: one of ["CVM", "ECM", "LH", "BM"] is a Tencent Cloud server; one of ["Other"] is a non-Tencent Cloud server;</p>
     */
    public $MachineType;

    /**
     * @var string <p>Public IP address.</p>
     */
    public $PublicIp;

    /**
     * @var string <p>Host UUID.</p>
     */
    public $Uuid;

    /**
     * @var string <p>Host instance ID.</p>
     */
    public $InstanceID;

    /**
     * @var integer <p>Region ID.</p>
     */
    public $RegionID;

    /**
     * @var ProjectInfo <p>Project.</p>
     */
    public $Project;

    /**
     * @var array <p>Tag.</p>
     */
    public $Tags;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterID;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Cluster access status.</p>
     */
    public $ClusterAccessedStatus;

    /**
     * @var string <p>Cluster access sub-status.</p><p>Enumeration values:</p><ul><li>AccessedSubNone: none</li><li>AccessedSubUninstallException: uninstallation exception</li><li>AccessedSubTimeout: access timeout</li><li>AccessedSubUninstallTimeout: uninstallation timeout</li><li>AccessedSubResourceException: cluster component check exception, including Deployment and DaemonSet</li><li>AccessedSubCAMPermissionDenied: insufficient CAM permissions</li></ul>
     */
    public $ClusterAccessedSubStatus;

    /**
     * @var string <p>Detailed description of the failure reason.</p>
     */
    public $ClusterAccessedErrorReason;

    /**
     * @var integer <p>Billable cores.</p>
     */
    public $ChargeCoresCnt;

    /**
     * @var string <p>Protection status:<br>Defended<br>Undefended</p>
     */
    public $DefendStatus;

    /**
     * @var integer <p>Number of cores.</p>
     */
    public $CoresCnt;

    /**
     * @var string <p>Last online time.</p>
     */
    public $LastOnlineTime;

    /**
     * @param string $HostID <p>Host ID.</p>
     * @param string $HostIP <p>Host IP address, which is the private IP address.</p>
     * @param string $HostName <p>Host name.</p>
     * @param string $Group <p>Business group.</p>
     * @param string $DockerVersion <p>Docker version.</p>
     * @param string $DockerFileSystemDriver <p>Docker file system type.</p>
     * @param integer $ImageCnt <p>Number of images.</p>
     * @param integer $ContainerCnt <p>Number of containers.</p>
     * @param string $Status <p>Agent running status.</p>
     * @param boolean $IsContainerd <p>Whether it is containerd.</p>
     * @param string $MachineType <p>Server source: one of ["CVM", "ECM", "LH", "BM"] is a Tencent Cloud server; one of ["Other"] is a non-Tencent Cloud server;</p>
     * @param string $PublicIp <p>Public IP address.</p>
     * @param string $Uuid <p>Host UUID.</p>
     * @param string $InstanceID <p>Host instance ID.</p>
     * @param integer $RegionID <p>Region ID.</p>
     * @param ProjectInfo $Project <p>Project.</p>
     * @param array $Tags <p>Tag.</p>
     * @param string $ClusterID <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $ClusterAccessedStatus <p>Cluster access status.</p>
     * @param string $ClusterAccessedSubStatus <p>Cluster access sub-status.</p><p>Enumeration values:</p><ul><li>AccessedSubNone: none</li><li>AccessedSubUninstallException: uninstallation exception</li><li>AccessedSubTimeout: access timeout</li><li>AccessedSubUninstallTimeout: uninstallation timeout</li><li>AccessedSubResourceException: cluster component check exception, including Deployment and DaemonSet</li><li>AccessedSubCAMPermissionDenied: insufficient CAM permissions</li></ul>
     * @param string $ClusterAccessedErrorReason <p>Detailed description of the failure reason.</p>
     * @param integer $ChargeCoresCnt <p>Billable cores.</p>
     * @param string $DefendStatus <p>Protection status:<br>Defended<br>Undefended</p>
     * @param integer $CoresCnt <p>Number of cores.</p>
     * @param string $LastOnlineTime <p>Last online time.</p>
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

        if (array_key_exists("ClusterAccessedSubStatus",$param) and $param["ClusterAccessedSubStatus"] !== null) {
            $this->ClusterAccessedSubStatus = $param["ClusterAccessedSubStatus"];
        }

        if (array_key_exists("ClusterAccessedErrorReason",$param) and $param["ClusterAccessedErrorReason"] !== null) {
            $this->ClusterAccessedErrorReason = $param["ClusterAccessedErrorReason"];
        }

        if (array_key_exists("ChargeCoresCnt",$param) and $param["ChargeCoresCnt"] !== null) {
            $this->ChargeCoresCnt = $param["ChargeCoresCnt"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }

        if (array_key_exists("CoresCnt",$param) and $param["CoresCnt"] !== null) {
            $this->CoresCnt = $param["CoresCnt"];
        }

        if (array_key_exists("LastOnlineTime",$param) and $param["LastOnlineTime"] !== null) {
            $this->LastOnlineTime = $param["LastOnlineTime"];
        }
    }
}
