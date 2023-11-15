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
 * @method string getRegion() Obtain Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetId() Obtain Pod ID
 * @method void setAssetId(string $AssetId) Set Pod ID
 * @method string getAssetName() Obtain Pod name
 * @method void setAssetName(string $AssetName) Set Pod name
 * @method string getInstanceCreateTime() Obtain Creation time of the pod
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInstanceCreateTime(string $InstanceCreateTime) Set Creation time of the pod
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getNamespace() Obtain Namespace
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNamespace(string $Namespace) Set Namespace
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain Cluster ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getClusterName() Obtain Cluster name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setClusterName(string $ClusterName) Set Cluster name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getMachineId() Obtain Server ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setMachineId(string $MachineId) Set Server ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getMachineName() Obtain Server name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setMachineName(string $MachineName) Set Server name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPodIp() Obtain Pod IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPodIp(string $PodIp) Set Pod IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getServiceCount() Obtain Number of associated services
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setServiceCount(integer $ServiceCount) Set Number of associated services
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getContainerCount() Obtain Number of associated containers
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setContainerCount(integer $ContainerCount) Set Number of associated containers
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPublicIp() Obtain Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPublicIp(string $PublicIp) Set Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPrivateIp() Obtain Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPrivateIp(string $PrivateIp) Set Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsCore() Obtain Whether it's a critical asset. Values: `1` (critical asset), `0` (non-critical asset)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsCore(integer $IsCore) Set Whether it's a critical asset. Values: `1` (critical asset), `0` (non-critical asset)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsNewAsset() Obtain Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsNewAsset(integer $IsNewAsset) Set Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
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
     * @var string Region
Note: This field may return·null, indicating that no valid values can be obtained.
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
     * @var string Creation time of the pod
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InstanceCreateTime;

    /**
     * @var string Namespace
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Namespace;

    /**
     * @var string Status
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Cluster ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Cluster name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ClusterName;

    /**
     * @var string Server ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $MachineId;

    /**
     * @var string Server name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $MachineName;

    /**
     * @var string Pod IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PodIp;

    /**
     * @var integer Number of associated services
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ServiceCount;

    /**
     * @var integer Number of associated containers
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ContainerCount;

    /**
     * @var string Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PublicIp;

    /**
     * @var string Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PrivateIp;

    /**
     * @var integer Whether it's a critical asset. Values: `1` (critical asset), `0` (non-critical asset)
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsCore;

    /**
     * @var integer Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsNewAsset;

    /**
     * @param integer $AppId Tenant ID
     * @param string $Uin Tenant UIN
     * @param string $Nick Tenant name
     * @param string $Region Region
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetId Pod ID
     * @param string $AssetName Pod name
     * @param string $InstanceCreateTime Creation time of the pod
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Namespace Namespace
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Status Status
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ClusterId Cluster ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ClusterName Cluster name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $MachineId Server ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $MachineName Server name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PodIp Pod IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ServiceCount Number of associated services
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ContainerCount Number of associated containers
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PublicIp Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PrivateIp Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsCore Whether it's a critical asset. Values: `1` (critical asset), `0` (non-critical asset)
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsNewAsset Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
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
