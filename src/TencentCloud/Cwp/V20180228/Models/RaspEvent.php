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
 * Application protection event
 *
 * @method integer getId() Obtain Vulnerability Event ID
 * @method void setId(integer $Id) Set Vulnerability Event ID
 * @method string getUuid() Obtain Machine UUID
 * @method void setUuid(string $Uuid) Set Machine UUID
 * @method string getQuuid() Obtain Machine QUuid.
 * @method void setQuuid(string $Quuid) Set Machine QUuid.
 * @method string getAlias() Obtain host name
 * @method void setAlias(string $Alias) Set host name
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getCveId() Obtain CVE ID
 * @method void setCveId(string $CveId) Set CVE ID
 * @method string getSourceIp() Obtain Attack source IP address
 * @method void setSourceIp(string $SourceIp) Set Attack source IP address
 * @method string getCity() Obtain City of the attack source IP address
 * @method void setCity(string $City) Set City of the attack source IP address
 * @method integer getAttackPort() Obtain Port under attack
 * @method void setAttackPort(integer $AttackPort) Set Port under attack
 * @method string getCreateTime() Obtain First Attack Time
 * @method void setCreateTime(string $CreateTime) Set First Attack Time
 * @method string getMergeTime() Obtain Last attack time
 * @method void setMergeTime(string $MergeTime) Set Last attack time
 * @method integer getCount() Obtain Attack count
 * @method void setCount(integer $Count) Set Attack count
 * @method integer getStatus() Obtain Status 0: pending 1: defended 2: processed 3: ignored 4: deleted 5: allowlisted
 * @method void setStatus(integer $Status) Set Status 0: pending 1: defended 2: processed 3: ignored 4: deleted 5: allowlisted
 * @method string getAttackTypeName() Obtain Application attack type
 * @method void setAttackTypeName(string $AttackTypeName) Set Application attack type
 * @method integer getAttackType() Obtain Application Attack Type id
 * @method void setAttackType(integer $AttackType) Set Application Attack Type id
 * @method string getNodeName() Obtain Node name.
 * @method void setNodeName(string $NodeName) Set Node name.
 * @method string getNodeId() Obtain Node ID.
 * @method void setNodeId(string $NodeId) Set Node ID.
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getContainerId() Obtain container id
 * @method void setContainerId(string $ContainerId) Set container id
 * @method string getContainerStatus() Obtain Container running status
 * @method void setContainerStatus(string $ContainerStatus) Set Container running status
 * @method string getContainerNetStatus() Obtain Container isolation status
 * @method void setContainerNetStatus(string $ContainerNetStatus) Set Container isolation status
 * @method string getImageId() Obtain Image ID
 * @method void setImageId(string $ImageId) Set Image ID
 * @method string getImageName() Obtain Image Name
 * @method void setImageName(string $ImageName) Set Image Name
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getPodIp() Obtain podip
 * @method void setPodIp(string $PodIp) Set podip
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getRaspDetail() Obtain Event details, including poc
 * @method void setRaspDetail(string $RaspDetail) Set Event details, including poc
 * @method string getNodeType() Obtain regular node: NORMAL
Super node: SUPER
 * @method void setNodeType(string $NodeType) Set regular node: NORMAL
Super node: SUPER
 * @method integer getEventType() Obtain Event Type 1: Attack Time 2: Successful Defense
 * @method void setEventType(integer $EventType) Set Event Type 1: Attack Time 2: Successful Defense
 * @method string getNodeUniqueID() Obtain Unique id of a super node
 * @method void setNodeUniqueID(string $NodeUniqueID) Set Unique id of a super node
 * @method string getPocID() Obtain poc id
 * @method void setPocID(string $PocID) Set poc id
 * @method string getUrl() Obtain Request URL
 * @method void setUrl(string $Url) Set Request URL
 * @method string getPoc() Obtain malicious feature
 * @method void setPoc(string $Poc) Set malicious feature
 */
class RaspEvent extends AbstractModel
{
    /**
     * @var integer Vulnerability Event ID
     */
    public $Id;

    /**
     * @var string Machine UUID
     */
    public $Uuid;

    /**
     * @var string Machine QUuid.
     */
    public $Quuid;

    /**
     * @var string host name
     */
    public $Alias;

    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string CVE ID
     */
    public $CveId;

    /**
     * @var string Attack source IP address
     */
    public $SourceIp;

    /**
     * @var string City of the attack source IP address
     */
    public $City;

    /**
     * @var integer Port under attack
     */
    public $AttackPort;

    /**
     * @var string First Attack Time
     */
    public $CreateTime;

    /**
     * @var string Last attack time
     */
    public $MergeTime;

    /**
     * @var integer Attack count
     */
    public $Count;

    /**
     * @var integer Status 0: pending 1: defended 2: processed 3: ignored 4: deleted 5: allowlisted
     */
    public $Status;

    /**
     * @var string Application attack type
     */
    public $AttackTypeName;

    /**
     * @var integer Application Attack Type id
     */
    public $AttackType;

    /**
     * @var string Node name.
     */
    public $NodeName;

    /**
     * @var string Node ID.
     */
    public $NodeId;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string container id
     */
    public $ContainerId;

    /**
     * @var string Container running status
     */
    public $ContainerStatus;

    /**
     * @var string Container isolation status
     */
    public $ContainerNetStatus;

    /**
     * @var string Image ID
     */
    public $ImageId;

    /**
     * @var string Image Name
     */
    public $ImageName;

    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string podip
     */
    public $PodIp;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Event details, including poc
     */
    public $RaspDetail;

    /**
     * @var string regular node: NORMAL
Super node: SUPER
     */
    public $NodeType;

    /**
     * @var integer Event Type 1: Attack Time 2: Successful Defense
     */
    public $EventType;

    /**
     * @var string Unique id of a super node
     */
    public $NodeUniqueID;

    /**
     * @var string poc id
     */
    public $PocID;

    /**
     * @var string Request URL
     */
    public $Url;

    /**
     * @var string malicious feature
     */
    public $Poc;

    /**
     * @param integer $Id Vulnerability Event ID
     * @param string $Uuid Machine UUID
     * @param string $Quuid Machine QUuid.
     * @param string $Alias host name
     * @param string $InstanceID Instance ID
     * @param string $PrivateIp Private IP address
     * @param string $PublicIp Public IP address
     * @param integer $VulId Vulnerability ID
     * @param string $VulName Vulnerability name
     * @param string $CveId CVE ID
     * @param string $SourceIp Attack source IP address
     * @param string $City City of the attack source IP address
     * @param integer $AttackPort Port under attack
     * @param string $CreateTime First Attack Time
     * @param string $MergeTime Last attack time
     * @param integer $Count Attack count
     * @param integer $Status Status 0: pending 1: defended 2: processed 3: ignored 4: deleted 5: allowlisted
     * @param string $AttackTypeName Application attack type
     * @param integer $AttackType Application Attack Type id
     * @param string $NodeName Node name.
     * @param string $NodeId Node ID.
     * @param string $ContainerName Container name
     * @param string $ContainerId container id
     * @param string $ContainerStatus Container running status
     * @param string $ContainerNetStatus Container isolation status
     * @param string $ImageId Image ID
     * @param string $ImageName Image Name
     * @param string $PodName Pod name
     * @param string $PodIp podip
     * @param string $ClusterName Cluster name.
     * @param string $ClusterId Cluster ID.
     * @param string $RaspDetail Event details, including poc
     * @param string $NodeType regular node: NORMAL
Super node: SUPER
     * @param integer $EventType Event Type 1: Attack Time 2: Successful Defense
     * @param string $NodeUniqueID Unique id of a super node
     * @param string $PocID poc id
     * @param string $Url Request URL
     * @param string $Poc malicious feature
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AttackTypeName",$param) and $param["AttackTypeName"] !== null) {
            $this->AttackTypeName = $param["AttackTypeName"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
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

        if (array_key_exists("RaspDetail",$param) and $param["RaspDetail"] !== null) {
            $this->RaspDetail = $param["RaspDetail"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Poc",$param) and $param["Poc"] !== null) {
            $this->Poc = $param["Poc"];
        }
    }
}
