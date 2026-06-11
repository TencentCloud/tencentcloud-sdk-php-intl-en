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
 * Java webshell event information
 *
 * @method integer getId() Obtain Event ID
 * @method void setId(integer $Id) Set Event ID
 * @method string getQuuid() Obtain Server QUUID
 * @method void setQuuid(string $Quuid) Set Server QUUID
 * @method string getAlias() Obtain Server name
 * @method void setAlias(string $Alias) Set Server name
 * @method string getHostIp() Obtain Server IP address
 * @method void setHostIp(string $HostIp) Set Server IP address
 * @method integer getType() Obtain Memory Trojan Type. 0: Filter Type; 1: Listener Type; 2: Servlet Type; 3: Interceptors Type; 4: Agent Type; 5: Other
 * @method void setType(integer $Type) Set Memory Trojan Type. 0: Filter Type; 1: Listener Type; 2: Servlet Type; 3: Interceptors Type; 4: Agent Type; 5: Other
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getCreateTime() Obtain First detection time
 * @method void setCreateTime(string $CreateTime) Set First detection time
 * @method string getRecentFoundTime() Obtain Last detection time
 * @method void setRecentFoundTime(string $RecentFoundTime) Set Last detection time
 * @method integer getStatus() Obtain Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
 * @method void setStatus(integer $Status) Set Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
 * @method string getMd5() Obtain Class file md5
 * @method void setMd5(string $Md5) Set Class file md5
 * @method string getClassName() Obtain Class name
 * @method void setClassName(string $ClassName) Set Class name
 * @method string getSuperClassName() Obtain Parent class name
 * @method void setSuperClassName(string $SuperClassName) Set Parent class name
 * @method string getInterfaces() Obtain Inherited API
 * @method void setInterfaces(string $Interfaces) Set Inherited API
 * @method string getAnnotations() Obtain Annotation
 * @method void setAnnotations(string $Annotations) Set Annotation
 * @method string getLoaderClassName() Obtain Associated class loader.
 * @method void setLoaderClassName(string $LoaderClassName) Set Associated class loader.
 * @method integer getPid() Obtain Process ID
 * @method void setPid(integer $Pid) Set Process ID
 * @method string getExe() Obtain Java Process Path
 * @method void setExe(string $Exe) Set Java Process Path
 * @method string getArgs() Obtain Java process command line parameters
 * @method void setArgs(string $Args) Set Java process command line parameters
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
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getPodIp() Obtain podip
 * @method void setPodIp(string $PodIp) Set podip
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getInstanceID() Obtain Same as the node id, the frontend can leave this unused.
 * @method void setInstanceID(string $InstanceID) Set Same as the node id, the frontend can leave this unused.
 * @method string getHostInnerIP() Obtain Private ip address of the server
 * @method void setHostInnerIP(string $HostInnerIP) Set Private ip address of the server
 * @method string getHostPublicIP() Obtain Public ip of the server
 * @method void setHostPublicIP(string $HostPublicIP) Set Public ip of the server
 * @method string getNodeType() Obtain Regular node: NORMAL
Super node: SUPER
 * @method void setNodeType(string $NodeType) Set Regular node: NORMAL
Super node: SUPER
 * @method string getNodeUniqueID() Obtain Super Node Unique ID
 * @method void setNodeUniqueID(string $NodeUniqueID) Set Super Node Unique ID
 */
class RaspMemShellEvent extends AbstractModel
{
    /**
     * @var integer Event ID
     */
    public $Id;

    /**
     * @var string Server QUUID
     */
    public $Quuid;

    /**
     * @var string Server name
     */
    public $Alias;

    /**
     * @var string Server IP address
     */
    public $HostIp;

    /**
     * @var integer Memory Trojan Type. 0: Filter Type; 1: Listener Type; 2: Servlet Type; 3: Interceptors Type; 4: Agent Type; 5: Other
     */
    public $Type;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string First detection time
     */
    public $CreateTime;

    /**
     * @var string Last detection time
     */
    public $RecentFoundTime;

    /**
     * @var integer Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
     */
    public $Status;

    /**
     * @var string Class file md5
     */
    public $Md5;

    /**
     * @var string Class name
     */
    public $ClassName;

    /**
     * @var string Parent class name
     */
    public $SuperClassName;

    /**
     * @var string Inherited API
     */
    public $Interfaces;

    /**
     * @var string Annotation
     */
    public $Annotations;

    /**
     * @var string Associated class loader.
     */
    public $LoaderClassName;

    /**
     * @var integer Process ID
     */
    public $Pid;

    /**
     * @var string Java Process Path
     */
    public $Exe;

    /**
     * @var string Java process command line parameters
     */
    public $Args;

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
     * @var string Image name
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
     * @var string Same as the node id, the frontend can leave this unused.
     */
    public $InstanceID;

    /**
     * @var string Private ip address of the server
     */
    public $HostInnerIP;

    /**
     * @var string Public ip of the server
     */
    public $HostPublicIP;

    /**
     * @var string Regular node: NORMAL
Super node: SUPER
     */
    public $NodeType;

    /**
     * @var string Super Node Unique ID
     */
    public $NodeUniqueID;

    /**
     * @param integer $Id Event ID
     * @param string $Quuid Server QUUID
     * @param string $Alias Server name
     * @param string $HostIp Server IP address
     * @param integer $Type Memory Trojan Type. 0: Filter Type; 1: Listener Type; 2: Servlet Type; 3: Interceptors Type; 4: Agent Type; 5: Other
     * @param string $Description Description
     * @param string $CreateTime First detection time
     * @param string $RecentFoundTime Last detection time
     * @param integer $Status Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
     * @param string $Md5 Class file md5
     * @param string $ClassName Class name
     * @param string $SuperClassName Parent class name
     * @param string $Interfaces Inherited API
     * @param string $Annotations Annotation
     * @param string $LoaderClassName Associated class loader.
     * @param integer $Pid Process ID
     * @param string $Exe Java Process Path
     * @param string $Args Java process command line parameters
     * @param string $NodeName Node name.
     * @param string $NodeId Node ID.
     * @param string $ContainerName Container name
     * @param string $ContainerId container id
     * @param string $ContainerStatus Container running status
     * @param string $ContainerNetStatus Container isolation status
     * @param string $ImageId Image ID
     * @param string $ImageName Image name
     * @param string $PodName Pod name
     * @param string $PodIp podip
     * @param string $ClusterName Cluster name.
     * @param string $ClusterId Cluster ID.
     * @param string $InstanceID Same as the node id, the frontend can leave this unused.
     * @param string $HostInnerIP Private ip address of the server
     * @param string $HostPublicIP Public ip of the server
     * @param string $NodeType Regular node: NORMAL
Super node: SUPER
     * @param string $NodeUniqueID Super Node Unique ID
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

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RecentFoundTime",$param) and $param["RecentFoundTime"] !== null) {
            $this->RecentFoundTime = $param["RecentFoundTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("SuperClassName",$param) and $param["SuperClassName"] !== null) {
            $this->SuperClassName = $param["SuperClassName"];
        }

        if (array_key_exists("Interfaces",$param) and $param["Interfaces"] !== null) {
            $this->Interfaces = $param["Interfaces"];
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = $param["Annotations"];
        }

        if (array_key_exists("LoaderClassName",$param) and $param["LoaderClassName"] !== null) {
            $this->LoaderClassName = $param["LoaderClassName"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
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

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("HostInnerIP",$param) and $param["HostInnerIP"] !== null) {
            $this->HostInnerIP = $param["HostInnerIP"];
        }

        if (array_key_exists("HostPublicIP",$param) and $param["HostPublicIP"] !== null) {
            $this->HostPublicIP = $param["HostPublicIP"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }
    }
}
