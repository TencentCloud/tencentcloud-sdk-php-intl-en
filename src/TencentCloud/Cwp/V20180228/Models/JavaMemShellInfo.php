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
 * @method string getQuuid() Obtain Server QUUID
 * @method void setQuuid(string $Quuid) Set Server QUUID
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
 * @method string getUuid() Obtain Server UUID
 * @method void setUuid(string $Uuid) Set Server UUID
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
 */
class JavaMemShellInfo extends AbstractModel
{
    /**
     * @var integer Event ID
     */
    public $Id;

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
     * @var string Server QUUID
     */
    public $Quuid;

    /**
     * @var MachineExtraInfo Host Additional Information
     */
    public $MachineExtraInfo;

    /**
     * @var string Server UUID
     */
    public $Uuid;

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
     * @param integer $Id Event ID
     * @param string $Alias Server name
     * @param string $HostIp Server IP address
     * @param integer $Type Memory Trojan Type. 0: Filter Type; 1: Listener Type; 2: Servlet Type; 3: Interceptors Type; 4: Agent Type; 5: Other
     * @param string $Description Description
     * @param string $CreateTime First detection time
     * @param string $RecentFoundTime Last detection time
     * @param integer $Status Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
     * @param string $Quuid Server QUUID
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
     * @param string $Uuid Server UUID
     * @param string $ClassName Class name
     * @param string $SuperClassName Parent class name
     * @param string $Interfaces Inherited API
     * @param string $Annotations Annotation
     * @param string $LoaderClassName Associated class loader.
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

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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
    }
}
