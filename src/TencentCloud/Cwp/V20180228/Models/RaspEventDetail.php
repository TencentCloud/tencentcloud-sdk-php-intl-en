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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application protection event details
 *
 * @method integer getId() Obtain Vulnerability Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set Vulnerability Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status 0: pending 1: defended 2: processed 3: ignored 4: deleted 5: allowlisted
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status 0: pending 1: defended 2: processed 3: ignored 4: deleted 5: allowlisted
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQuuid() Obtain Machine QUuid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuid(string $Quuid) Set Machine QUuid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAlias() Obtain host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlias(string $Alias) Set host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceID() Obtain Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceID(string $InstanceID) Set Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrivateIp() Obtain Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublicIp() Obtain Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIp(string $PublicIp) Set Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getHostTags() Obtain Asset tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostTags(array $HostTags) Set Asset tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain First Attack Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set First Attack Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMergeTime() Obtain Last attack time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMergeTime(string $MergeTime) Set Last attack time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackTypeName() Obtain Application attack type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackTypeName(string $AttackTypeName) Set Application attack type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackType() Obtain Application Attack Type id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackType(integer $AttackType) Set Application Attack Type id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain Request URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Request URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVulName() Obtain Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulName(string $VulName) Set Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Attack count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Attack count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCveId() Obtain CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCveId(string $CveId) Set CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceIp() Obtain Attack source IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceIp(string $SourceIp) Set Attack source IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCity() Obtain City of the attack source IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCity(string $City) Set City of the attack source IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackPort() Obtain Port under attack
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackPort(integer $AttackPort) Set Port under attack
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Vulnerability description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Vulnerability description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFix() Obtain Repair method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFix(string $Fix) Set Repair method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNetworkPayload() Obtain Request content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkPayload(string $NetworkPayload) Set Request content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeName() Obtain Node name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeName(string $NodeName) Set Node name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeId() Obtain Node ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeId(string $NodeId) Set Node ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerName() Obtain Container name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerName(string $ContainerName) Set Container name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerId() Obtain container id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerId(string $ContainerId) Set container id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerStatus() Obtain Container running status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerStatus(string $ContainerStatus) Set Container running status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerNetStatus() Obtain Container isolation status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerNetStatus(string $ContainerNetStatus) Set Container isolation status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageId() Obtain Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageId(string $ImageId) Set Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageName() Obtain Image Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageName(string $ImageName) Set Image Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPodName() Obtain Pod name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodName(string $PodName) Set Pod name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPodIp() Obtain podip
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodIp(string $PodIp) Set podip
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterName() Obtain Cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPid() Obtain Process id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPid(integer $Pid) Set Process id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMainClass() Obtain Associated Process Main Class Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMainClass(string $MainClass) Set Associated Process Main Class Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStackTrace() Obtain Stack information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStackTrace(string $StackTrace) Set Stack information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRaspDetail() Obtain Vulnerability ID-Related Event Details (JSON array format, unique to RASP)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRaspDetail(string $RaspDetail) Set Vulnerability ID-Related Event Details (JSON array format, unique to RASP)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEventType() Obtain Intrusion Status: 1 Attack Event, 2 Successful Defense
 * @method void setEventType(integer $EventType) Set Intrusion Status: 1 Attack Event, 2 Successful Defense
 */
class RaspEventDetail extends AbstractModel
{
    /**
     * @var integer Vulnerability Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var integer Status 0: pending 1: defended 2: processed 3: ignored 4: deleted 5: allowlisted
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Machine QUuid.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuid;

    /**
     * @var string host name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Alias;

    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceID;

    /**
     * @var string Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateIp;

    /**
     * @var string Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicIp;

    /**
     * @var array Asset tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostTags;

    /**
     * @var string First Attack Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last attack time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MergeTime;

    /**
     * @var string Application attack type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackTypeName;

    /**
     * @var integer Application Attack Type id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackType;

    /**
     * @var string Request URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var string Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulName;

    /**
     * @var integer Attack count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @var string CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CveId;

    /**
     * @var string Attack source IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceIp;

    /**
     * @var string City of the attack source IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $City;

    /**
     * @var integer Port under attack
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackPort;

    /**
     * @var string Vulnerability description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Repair method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Fix;

    /**
     * @var string Request content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkPayload;

    /**
     * @var string Node name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeName;

    /**
     * @var string Node ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeId;

    /**
     * @var string Container name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerName;

    /**
     * @var string container id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerId;

    /**
     * @var string Container running status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerStatus;

    /**
     * @var string Container isolation status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerNetStatus;

    /**
     * @var string Image ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageId;

    /**
     * @var string Image Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageName;

    /**
     * @var string Pod name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodName;

    /**
     * @var string podip
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodIp;

    /**
     * @var string Cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterName;

    /**
     * @var string Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var integer Process id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pid;

    /**
     * @var string Associated Process Main Class Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MainClass;

    /**
     * @var string Stack information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StackTrace;

    /**
     * @var string Vulnerability ID-Related Event Details (JSON array format, unique to RASP)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RaspDetail;

    /**
     * @var integer Intrusion Status: 1 Attack Event, 2 Successful Defense
     */
    public $EventType;

    /**
     * @param integer $Id Vulnerability Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status 0: pending 1: defended 2: processed 3: ignored 4: deleted 5: allowlisted
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Quuid Machine QUuid.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Alias host name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceID Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PrivateIp Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublicIp Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $HostTags Asset tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime First Attack Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MergeTime Last attack time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackTypeName Application attack type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackType Application Attack Type id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url Request URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VulName Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Attack count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CveId CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceIp Attack source IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $City City of the attack source IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackPort Port under attack
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Vulnerability description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Fix Repair method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NetworkPayload Request content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeName Node name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeId Node ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerName Container name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerId container id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerStatus Container running status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerNetStatus Container isolation status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageId Image ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageName Image Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PodName Pod name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PodIp podip
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterName Cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Pid Process id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MainClass Associated Process Main Class Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StackTrace Stack information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RaspDetail Vulnerability ID-Related Event Details (JSON array format, unique to RASP)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EventType Intrusion Status: 1 Attack Event, 2 Successful Defense
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("HostTags",$param) and $param["HostTags"] !== null) {
            $this->HostTags = $param["HostTags"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("AttackTypeName",$param) and $param["AttackTypeName"] !== null) {
            $this->AttackTypeName = $param["AttackTypeName"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("AttackPort",$param) and $param["AttackPort"] !== null) {
            $this->AttackPort = $param["AttackPort"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("NetworkPayload",$param) and $param["NetworkPayload"] !== null) {
            $this->NetworkPayload = $param["NetworkPayload"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerStatus",$param) and $param["ContainerStatus"] !== null) {
            $this->ContainerStatus = $param["ContainerStatus"];
        }

        if (array_key_exists("ContainerNetStatus",$param) and $param["ContainerNetStatus"] !== null) {
            $this->ContainerNetStatus = $param["ContainerNetStatus"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("StackTrace",$param) and $param["StackTrace"] !== null) {
            $this->StackTrace = $param["StackTrace"];
        }

        if (array_key_exists("RaspDetail",$param) and $param["RaspDetail"] !== null) {
            $this->RaspDetail = $param["RaspDetail"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }
    }
}
