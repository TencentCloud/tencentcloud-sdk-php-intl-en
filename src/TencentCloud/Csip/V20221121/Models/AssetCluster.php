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
 * This example shows you how to obtain the cluster list.

Cluster protection status. enumerate on the left. display on the right.
Cluster protection status. 
Not connected.
Unprotected. 
2: partial protection. 
3: under protection. 
4: access exception. 
5: accessing. 
6: uninstalling. 
7: uninstallation exception.
 *
 * @method integer getAppId() Obtain Tenant ID
 * @method void setAppId(integer $AppId) Set Tenant ID
 * @method string getUin() Obtain Tenant uin.
 * @method void setUin(string $Uin) Set Tenant uin.
 * @method string getNick() Obtain Tenant Nickname
 * @method void setNick(string $Nick) Set Tenant Nickname
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getAssetId() Obtain Cluster ID.
 * @method void setAssetId(string $AssetId) Set Cluster ID.
 * @method string getAssetName() Obtain Cluster name.
 * @method void setAssetName(string $AssetName) Set Cluster name.
 * @method string getAssetType() Obtain Cluster type.
 * @method void setAssetType(string $AssetType) Set Cluster type.
 * @method string getInstanceCreateTime() Obtain Cluster Creation Time
 * @method void setInstanceCreateTime(string $InstanceCreateTime) Set Cluster Creation Time
 * @method string getStatus() Obtain Status.
 * @method void setStatus(string $Status) Set Status.
 * @method integer getProtectStatus() Obtain Cluster protection status, enumerate on the left, display on the right.
Protection status of the cluster. 
0: not connected.
Unprotected. 
2: partial protection. 
3: under protection. 
4: access exception. 
5: accessing. 
Uninstalling. 
7: uninstallation exception.
 * @method void setProtectStatus(integer $ProtectStatus) Set Cluster protection status, enumerate on the left, display on the right.
Protection status of the cluster. 
0: not connected.
Unprotected. 
2: partial protection. 
3: under protection. 
4: access exception. 
5: accessing. 
Uninstalling. 
7: uninstallation exception.
 * @method string getProtectInfo() Obtain Access information, being empty indicates no access exception info.
 * @method void setProtectInfo(string $ProtectInfo) Set Access information, being empty indicates no access exception info.
 * @method string getVpcId() Obtain VPC id.
 * @method void setVpcId(string $VpcId) Set VPC id.
 * @method string getVpcName() Obtain VPC name.
 * @method void setVpcName(string $VpcName) Set VPC name.
 * @method string getKubernetesVersion() Obtain kubernetes version.
 * @method void setKubernetesVersion(string $KubernetesVersion) Set kubernetes version.
 * @method string getComponent() Obtain Runtime component.
 * @method void setComponent(string $Component) Set Runtime component.
 * @method string getComponentVersion() Obtain Runtime component version.
 * @method void setComponentVersion(string $ComponentVersion) Set Runtime component version.
 * @method string getComponentStatus() Obtain Component status.
 * @method void setComponentStatus(string $ComponentStatus) Set Component status.
 * @method string getCheckTime() Obtain Health Checkup Time
 * @method void setCheckTime(string $CheckTime) Set Health Checkup Time
 * @method integer getMachineCount() Obtain Associated hosts.
 * @method void setMachineCount(integer $MachineCount) Set Associated hosts.
 * @method integer getPodCount() Obtain Associated Pod Count
 * @method void setPodCount(integer $PodCount) Set Associated Pod Count
 * @method integer getServiceCount() Obtain Associated Service Count
 * @method void setServiceCount(integer $ServiceCount) Set Associated Service Count
 * @method integer getVulRisk() Obtain Vulnerability risk.
 * @method void setVulRisk(integer $VulRisk) Set Vulnerability risk.
 * @method integer getCFGRisk() Obtain Configuration risk.
 * @method void setCFGRisk(integer $CFGRisk) Set Configuration risk.
 * @method integer getCheckCount() Obtain Health Checkup Count
 * @method void setCheckCount(integer $CheckCount) Set Health Checkup Count
 * @method integer getIsCore() Obtain Whether it is core. 1: Core; 2: Non-core.
 * @method void setIsCore(integer $IsCore) Set Whether it is core. 1: Core; 2: Non-core.
 * @method integer getIsNewAsset() Obtain New Asset or Not. 1: New
 * @method void setIsNewAsset(integer $IsNewAsset) Set New Asset or Not. 1: New
 * @method integer getCloudType() Obtain Cloud asset type: 0: tencent cloud, 1: aws, 2: azure.
 * @method void setCloudType(integer $CloudType) Set Cloud asset type: 0: tencent cloud, 1: aws, 2: azure.
 */
class AssetCluster extends AbstractModel
{
    /**
     * @var integer Tenant ID
     */
    public $AppId;

    /**
     * @var string Tenant uin.
     */
    public $Uin;

    /**
     * @var string Tenant Nickname
     */
    public $Nick;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string Cluster ID.
     */
    public $AssetId;

    /**
     * @var string Cluster name.
     */
    public $AssetName;

    /**
     * @var string Cluster type.
     */
    public $AssetType;

    /**
     * @var string Cluster Creation Time
     */
    public $InstanceCreateTime;

    /**
     * @var string Status.
     */
    public $Status;

    /**
     * @var integer Cluster protection status, enumerate on the left, display on the right.
Protection status of the cluster. 
0: not connected.
Unprotected. 
2: partial protection. 
3: under protection. 
4: access exception. 
5: accessing. 
Uninstalling. 
7: uninstallation exception.
     */
    public $ProtectStatus;

    /**
     * @var string Access information, being empty indicates no access exception info.
     */
    public $ProtectInfo;

    /**
     * @var string VPC id.
     */
    public $VpcId;

    /**
     * @var string VPC name.
     */
    public $VpcName;

    /**
     * @var string kubernetes version.
     */
    public $KubernetesVersion;

    /**
     * @var string Runtime component.
     */
    public $Component;

    /**
     * @var string Runtime component version.
     */
    public $ComponentVersion;

    /**
     * @var string Component status.
     */
    public $ComponentStatus;

    /**
     * @var string Health Checkup Time
     */
    public $CheckTime;

    /**
     * @var integer Associated hosts.
     */
    public $MachineCount;

    /**
     * @var integer Associated Pod Count
     */
    public $PodCount;

    /**
     * @var integer Associated Service Count
     */
    public $ServiceCount;

    /**
     * @var integer Vulnerability risk.
     */
    public $VulRisk;

    /**
     * @var integer Configuration risk.
     */
    public $CFGRisk;

    /**
     * @var integer Health Checkup Count
     */
    public $CheckCount;

    /**
     * @var integer Whether it is core. 1: Core; 2: Non-core.
     */
    public $IsCore;

    /**
     * @var integer New Asset or Not. 1: New
     */
    public $IsNewAsset;

    /**
     * @var integer Cloud asset type: 0: tencent cloud, 1: aws, 2: azure.
     */
    public $CloudType;

    /**
     * @param integer $AppId Tenant ID
     * @param string $Uin Tenant uin.
     * @param string $Nick Tenant Nickname
     * @param string $Region Region.
     * @param string $AssetId Cluster ID.
     * @param string $AssetName Cluster name.
     * @param string $AssetType Cluster type.
     * @param string $InstanceCreateTime Cluster Creation Time
     * @param string $Status Status.
     * @param integer $ProtectStatus Cluster protection status, enumerate on the left, display on the right.
Protection status of the cluster. 
0: not connected.
Unprotected. 
2: partial protection. 
3: under protection. 
4: access exception. 
5: accessing. 
Uninstalling. 
7: uninstallation exception.
     * @param string $ProtectInfo Access information, being empty indicates no access exception info.
     * @param string $VpcId VPC id.
     * @param string $VpcName VPC name.
     * @param string $KubernetesVersion kubernetes version.
     * @param string $Component Runtime component.
     * @param string $ComponentVersion Runtime component version.
     * @param string $ComponentStatus Component status.
     * @param string $CheckTime Health Checkup Time
     * @param integer $MachineCount Associated hosts.
     * @param integer $PodCount Associated Pod Count
     * @param integer $ServiceCount Associated Service Count
     * @param integer $VulRisk Vulnerability risk.
     * @param integer $CFGRisk Configuration risk.
     * @param integer $CheckCount Health Checkup Count
     * @param integer $IsCore Whether it is core. 1: Core; 2: Non-core.
     * @param integer $IsNewAsset New Asset or Not. 1: New
     * @param integer $CloudType Cloud asset type: 0: tencent cloud, 1: aws, 2: azure.
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

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("InstanceCreateTime",$param) and $param["InstanceCreateTime"] !== null) {
            $this->InstanceCreateTime = $param["InstanceCreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProtectStatus",$param) and $param["ProtectStatus"] !== null) {
            $this->ProtectStatus = $param["ProtectStatus"];
        }

        if (array_key_exists("ProtectInfo",$param) and $param["ProtectInfo"] !== null) {
            $this->ProtectInfo = $param["ProtectInfo"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("KubernetesVersion",$param) and $param["KubernetesVersion"] !== null) {
            $this->KubernetesVersion = $param["KubernetesVersion"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("ComponentVersion",$param) and $param["ComponentVersion"] !== null) {
            $this->ComponentVersion = $param["ComponentVersion"];
        }

        if (array_key_exists("ComponentStatus",$param) and $param["ComponentStatus"] !== null) {
            $this->ComponentStatus = $param["ComponentStatus"];
        }

        if (array_key_exists("CheckTime",$param) and $param["CheckTime"] !== null) {
            $this->CheckTime = $param["CheckTime"];
        }

        if (array_key_exists("MachineCount",$param) and $param["MachineCount"] !== null) {
            $this->MachineCount = $param["MachineCount"];
        }

        if (array_key_exists("PodCount",$param) and $param["PodCount"] !== null) {
            $this->PodCount = $param["PodCount"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("VulRisk",$param) and $param["VulRisk"] !== null) {
            $this->VulRisk = $param["VulRisk"];
        }

        if (array_key_exists("CFGRisk",$param) and $param["CFGRisk"] !== null) {
            $this->CFGRisk = $param["CFGRisk"];
        }

        if (array_key_exists("CheckCount",$param) and $param["CheckCount"] !== null) {
            $this->CheckCount = $param["CheckCount"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
