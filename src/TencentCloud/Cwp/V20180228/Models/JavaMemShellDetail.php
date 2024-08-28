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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Java webshell event details
 *
 * @method string getInstanceName() Obtain Container name
 * @method void setInstanceName(string $InstanceName) Set Container name
 * @method string getInstanceState() Obtain Instance Status: RUNNING, STOPPED, SHUTDOWN...
 * @method void setInstanceState(string $InstanceState) Set Instance Status: RUNNING, STOPPED, SHUTDOWN...
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method string getPublicIp() Obtain Public IP
 * @method void setPublicIp(string $PublicIp) Set Public IP
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
 * @method string getClassLoaderName() Obtain Java Loader Class Name
 * @method void setClassLoaderName(string $ClassLoaderName) Set Java Loader Class Name
 * @method string getSuperClassName() Obtain Parent class name
 * @method void setSuperClassName(string $SuperClassName) Set Parent class name
 * @method string getMd5() Obtain Class file MD5
 * @method void setMd5(string $Md5) Set Class file MD5
 * @method string getInterfaces() Obtain Inherited API
 * @method void setInterfaces(string $Interfaces) Set Inherited API
 * @method string getAnnotations() Obtain Annotation
 * @method void setAnnotations(string $Annotations) Set Annotation
 * @method integer getPid() Obtain Process ID
 * @method void setPid(integer $Pid) Set Process ID
 * @method string getExe() Obtain Java Process Path
 * @method void setExe(string $Exe) Set Java Process Path
 * @method string getArgs() Obtain Java process command line parameters
 * @method void setArgs(string $Args) Set Java process command line parameters
 * @method string getClassName() Obtain Class name
 * @method void setClassName(string $ClassName) Set Class name
 * @method string getClassContent() Obtain Java Memory Horse Binary Code (base64)
 * @method void setClassContent(string $ClassContent) Set Java Memory Horse Binary Code (base64)
 * @method string getClassContentPretty() Obtain Java Memory Trojan Decompilation Code
 * @method void setClassContentPretty(string $ClassContentPretty) Set Java Memory Trojan Decompilation Code
 * @method string getEventDescription() Obtain Event description
 * @method void setEventDescription(string $EventDescription) Set Event description
 * @method string getSecurityAdvice() Obtain Security advice
 * @method void setSecurityAdvice(string $SecurityAdvice) Set Security advice
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional host information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional host information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMachineState() Obtain Instance status: RUNNING, STOPPED, SHUTDOWN...
 * @method void setMachineState(string $MachineState) Set Instance status: RUNNING, STOPPED, SHUTDOWN...
 */
class JavaMemShellDetail extends AbstractModel
{
    /**
     * @var string Container name
     */
    public $InstanceName;

    /**
     * @var string Instance Status: RUNNING, STOPPED, SHUTDOWN...
     */
    public $InstanceState;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var string Public IP
     */
    public $PublicIp;

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
     * @var string Java Loader Class Name
     */
    public $ClassLoaderName;

    /**
     * @var string Parent class name
     */
    public $SuperClassName;

    /**
     * @var string Class file MD5
     */
    public $Md5;

    /**
     * @var string Inherited API
     */
    public $Interfaces;

    /**
     * @var string Annotation
     */
    public $Annotations;

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
     * @var string Class name
     */
    public $ClassName;

    /**
     * @var string Java Memory Horse Binary Code (base64)
     */
    public $ClassContent;

    /**
     * @var string Java Memory Trojan Decompilation Code
     */
    public $ClassContentPretty;

    /**
     * @var string Event description
     */
    public $EventDescription;

    /**
     * @var string Security advice
     */
    public $SecurityAdvice;

    /**
     * @var MachineExtraInfo Additional host information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var string Instance status: RUNNING, STOPPED, SHUTDOWN...
     */
    public $MachineState;

    /**
     * @param string $InstanceName Container name
     * @param string $InstanceState Instance Status: RUNNING, STOPPED, SHUTDOWN...
     * @param string $PrivateIp Private IP address
     * @param string $PublicIp Public IP
     * @param integer $Type Memory Trojan Type. 0: Filter Type; 1: Listener Type; 2: Servlet Type; 3: Interceptors Type; 4: Agent Type; 5: Other
     * @param string $Description Description
     * @param string $CreateTime First detection time
     * @param string $RecentFoundTime Last detection time
     * @param integer $Status Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
     * @param string $ClassLoaderName Java Loader Class Name
     * @param string $SuperClassName Parent class name
     * @param string $Md5 Class file MD5
     * @param string $Interfaces Inherited API
     * @param string $Annotations Annotation
     * @param integer $Pid Process ID
     * @param string $Exe Java Process Path
     * @param string $Args Java process command line parameters
     * @param string $ClassName Class name
     * @param string $ClassContent Java Memory Horse Binary Code (base64)
     * @param string $ClassContentPretty Java Memory Trojan Decompilation Code
     * @param string $EventDescription Event description
     * @param string $SecurityAdvice Security advice
     * @param MachineExtraInfo $MachineExtraInfo Additional host information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MachineState Instance status: RUNNING, STOPPED, SHUTDOWN...
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
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

        if (array_key_exists("ClassLoaderName",$param) and $param["ClassLoaderName"] !== null) {
            $this->ClassLoaderName = $param["ClassLoaderName"];
        }

        if (array_key_exists("SuperClassName",$param) and $param["SuperClassName"] !== null) {
            $this->SuperClassName = $param["SuperClassName"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Interfaces",$param) and $param["Interfaces"] !== null) {
            $this->Interfaces = $param["Interfaces"];
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = $param["Annotations"];
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

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
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

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("MachineState",$param) and $param["MachineState"] !== null) {
            $this->MachineState = $param["MachineState"];
        }
    }
}
