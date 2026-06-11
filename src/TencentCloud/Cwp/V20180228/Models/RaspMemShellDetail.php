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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQuuid() Obtain Server QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuid(string $Quuid) Set Server QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAlias() Obtain Server name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlias(string $Alias) Set Server name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 * @method string getPrivateIp() Obtain Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublicIp() Obtain Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIp(string $PublicIp) Set Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getHostTags() Obtain Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostTags(array $HostTags) Set Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getType() Obtain Memory Trojan Type. 0: Filter Type; 1: Listener Type; 2: Servlet Type; 3: Interceptors Type; 4: Agent Type; 5: Other
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(integer $Type) Set Memory Trojan Type. 0: Filter Type; 1: Listener Type; 2: Servlet Type; 3: Interceptors Type; 4: Agent Type; 5: Other
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClassLoaderName() Obtain Associated class loader.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClassLoaderName(string $ClassLoaderName) Set Associated class loader.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSuperClassName() Obtain Parent class name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuperClassName(string $SuperClassName) Set Parent class name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInterfaces() Obtain Inherited API
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInterfaces(string $Interfaces) Set Inherited API
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAnnotations() Obtain Annotation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnnotations(string $Annotations) Set Annotation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClassName() Obtain Class name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClassName(string $ClassName) Set Class name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMd5() Obtain Class file md5
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMd5(string $Md5) Set Class file md5
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPid() Obtain Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPid(integer $Pid) Set Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExe() Obtain Java Process Path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExe(string $Exe) Set Java Process Path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getArgs() Obtain Java process command line parameters
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArgs(string $Args) Set Java process command line parameters
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClassContent() Obtain Java Memory Horse Binary Code (base64)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClassContent(string $ClassContent) Set Java Memory Horse Binary Code (base64)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClassContentPretty() Obtain Java Memory Trojan Decompilation Code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClassContentPretty(string $ClassContentPretty) Set Java Memory Trojan Decompilation Code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventDescription() Obtain Event description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventDescription(string $EventDescription) Set Event description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSecurityAdvice() Obtain Security advice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecurityAdvice(string $SecurityAdvice) Set Security advice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain First detection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set First detection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecentFoundTime() Obtain Last detection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecentFoundTime(string $RecentFoundTime) Set Last detection time
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
 * @method string getImageName() Obtain Image name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageName(string $ImageName) Set Image name
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
 */
class RaspMemShellDetail extends AbstractModel
{
    /**
     * @var integer Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Server QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuid;

    /**
     * @var string Server name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Alias;

    /**
     * @var string Instance ID
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
     * @var array Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostTags;

    /**
     * @var integer Memory Trojan Type. 0: Filter Type; 1: Listener Type; 2: Servlet Type; 3: Interceptors Type; 4: Agent Type; 5: Other
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var integer Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Associated class loader.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClassLoaderName;

    /**
     * @var string Parent class name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuperClassName;

    /**
     * @var string Inherited API
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Interfaces;

    /**
     * @var string Annotation
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Annotations;

    /**
     * @var string Class name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClassName;

    /**
     * @var string Class file md5
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Md5;

    /**
     * @var integer Process ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pid;

    /**
     * @var string Java Process Path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Exe;

    /**
     * @var string Java process command line parameters
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Args;

    /**
     * @var string Java Memory Horse Binary Code (base64)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClassContent;

    /**
     * @var string Java Memory Trojan Decompilation Code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClassContentPretty;

    /**
     * @var string Event description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventDescription;

    /**
     * @var string Security advice
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecurityAdvice;

    /**
     * @var string First detection time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last detection time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecentFoundTime;

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
     * @var string Image name
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
     * @param integer $Id Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Quuid Server QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Alias Server name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceID Instance ID
     * @param string $PrivateIp Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublicIp Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $HostTags Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Type Memory Trojan Type. 0: Filter Type; 1: Listener Type; 2: Servlet Type; 3: Interceptors Type; 4: Agent Type; 5: Other
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClassLoaderName Associated class loader.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SuperClassName Parent class name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Interfaces Inherited API
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Annotations Annotation
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClassName Class name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Md5 Class file md5
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Pid Process ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Exe Java Process Path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Args Java process command line parameters
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClassContent Java Memory Horse Binary Code (base64)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClassContentPretty Java Memory Trojan Decompilation Code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventDescription Event description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SecurityAdvice Security advice
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime First detection time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecentFoundTime Last detection time
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
     * @param string $ImageName Image name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PodName Pod name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PodIp podip
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterName Cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClassLoaderName",$param) and $param["ClassLoaderName"] !== null) {
            $this->ClassLoaderName = $param["ClassLoaderName"];
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

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
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

        if (array_key_exists("ClassContent",$param) and $param["ClassContent"] !== null) {
            $this->ClassContent = $param["ClassContent"];
        }

        if (array_key_exists("ClassContentPretty",$param) and $param["ClassContentPretty"] !== null) {
            $this->ClassContentPretty = $param["ClassContentPretty"];
        }

        if (array_key_exists("EventDescription",$param) and $param["EventDescription"] !== null) {
            $this->EventDescription = $param["EventDescription"];
        }

        if (array_key_exists("SecurityAdvice",$param) and $param["SecurityAdvice"] !== null) {
            $this->SecurityAdvice = $param["SecurityAdvice"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RecentFoundTime",$param) and $param["RecentFoundTime"] !== null) {
            $this->RecentFoundTime = $param["RecentFoundTime"];
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
    }
}
