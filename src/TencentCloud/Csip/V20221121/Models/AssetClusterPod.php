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
 * This example shows you how to list the list of cluster pods. 
 *
 * @method integer getAppId() Obtain Tenant ID
 * @method void setAppId(integer $AppId) Set Tenant ID
 * @method string getUin() Obtain Tenant UIN
 * @method void setUin(string $Uin) Set Tenant UIN
 * @method string getNick() Obtain Tenant name
 * @method void setNick(string $Nick) Set Tenant name
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getAssetId() Obtain Pod ID
 * @method void setAssetId(string $AssetId) Set Pod ID
 * @method string getAssetName() Obtain Pod name
 * @method void setAssetName(string $AssetName) Set Pod name
 * @method string getInstanceCreateTime() Obtain Pod Creation Time
 * @method void setInstanceCreateTime(string $InstanceCreateTime) Set Pod Creation Time
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getStatus() Obtain Status.
 * @method void setStatus(string $Status) Set Status.
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getMachineId() Obtain Host ID
 * @method void setMachineId(string $MachineId) Set Host ID
 * @method string getMachineName() Obtain host name
 * @method void setMachineName(string $MachineName) Set host name
 * @method string getPodIp() Obtain pod ip
 * @method void setPodIp(string $PodIp) Set pod ip
 * @method integer getServiceCount() Obtain Associated Service Count
 * @method void setServiceCount(integer $ServiceCount) Set Associated Service Count
 * @method integer getContainerCount() Obtain Associated container number
 * @method void setContainerCount(integer $ContainerCount) Set Associated container number
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method integer getIsCore() Obtain Whether it is core. 1: Core; 2: Non-core.
 * @method void setIsCore(integer $IsCore) Set Whether it is core. 1: Core; 2: Non-core.
 * @method integer getIsNewAsset() Obtain New Asset or Not. 1: New
 * @method void setIsNewAsset(integer $IsNewAsset) Set New Asset or Not. 1: New
 */
class AssetClusterPod extends AbstractModel
{
    /**
     * @var integer Tenant ID
     */
    public $AppId;

    /**
     * @var string Tenant UIN
     */
    public $Uin;

    /**
     * @var string Tenant name
     */
    public $Nick;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string Pod ID
     */
    public $AssetId;

    /**
     * @var string Pod name
     */
    public $AssetName;

    /**
     * @var string Pod Creation Time
     */
    public $InstanceCreateTime;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Status.
     */
    public $Status;

    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Host ID
     */
    public $MachineId;

    /**
     * @var string host name
     */
    public $MachineName;

    /**
     * @var string pod ip
     */
    public $PodIp;

    /**
     * @var integer Associated Service Count
     */
    public $ServiceCount;

    /**
     * @var integer Associated container number
     */
    public $ContainerCount;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var integer Whether it is core. 1: Core; 2: Non-core.
     */
    public $IsCore;

    /**
     * @var integer New Asset or Not. 1: New
     */
    public $IsNewAsset;

    /**
     * @param integer $AppId Tenant ID
     * @param string $Uin Tenant UIN
     * @param string $Nick Tenant name
     * @param string $Region Region.
     * @param string $AssetId Pod ID
     * @param string $AssetName Pod name
     * @param string $InstanceCreateTime Pod Creation Time
     * @param string $Namespace Namespace
     * @param string $Status Status.
     * @param string $ClusterId Cluster ID.
     * @param string $ClusterName Cluster name.
     * @param string $MachineId Host ID
     * @param string $MachineName host name
     * @param string $PodIp pod ip
     * @param integer $ServiceCount Associated Service Count
     * @param integer $ContainerCount Associated container number
     * @param string $PublicIp Public IP address
     * @param string $PrivateIp Private IP address
     * @param integer $IsCore Whether it is core. 1: Core; 2: Non-core.
     * @param integer $IsNewAsset New Asset or Not. 1: New
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("InstanceCreateTime",$param) and $param["InstanceCreateTime"] !== null) {
            $this->InstanceCreateTime = $param["InstanceCreateTime"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("MachineId",$param) and $param["MachineId"] !== null) {
            $this->MachineId = $param["MachineId"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }
    }
}
