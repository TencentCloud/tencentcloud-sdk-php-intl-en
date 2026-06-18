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
 * Details of server assets
 *
 * @method string getVpcId() Obtain vpc-id
 * @method void setVpcId(string $VpcId) Set vpc-id
 * @method string getVpcName() Obtain vpc-name
 * @method void setVpcName(string $VpcName) Set vpc-name
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
 * @method string getOs() Obtain Operating system.
 * @method void setOs(string $Os) Set Operating system.
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method integer getAccountNum() Obtain Number of accounts
 * @method void setAccountNum(integer $AccountNum) Set Number of accounts
 * @method integer getPortNum() Obtain Number of Ports
 * @method void setPortNum(integer $PortNum) Set Number of Ports
 * @method integer getProcessNum() Obtain Process quantity
 * @method void setProcessNum(integer $ProcessNum) Set Process quantity
 * @method integer getSoftApplicationNum() Obtain Number of Software Applications
 * @method void setSoftApplicationNum(integer $SoftApplicationNum) Set Number of Software Applications
 * @method integer getDatabaseNum() Obtain Database Count
 * @method void setDatabaseNum(integer $DatabaseNum) Set Database Count
 * @method integer getWebApplicationNum() Obtain Number of Web Applications
 * @method void setWebApplicationNum(integer $WebApplicationNum) Set Number of Web Applications
 * @method integer getServiceNum() Obtain Number of services
 * @method void setServiceNum(integer $ServiceNum) Set Number of services
 * @method integer getWebFrameworkNum() Obtain Web Framework Count
 * @method void setWebFrameworkNum(integer $WebFrameworkNum) Set Web Framework Count
 * @method integer getWebSiteNum() Obtain Website Count
 * @method void setWebSiteNum(integer $WebSiteNum) Set Website Count
 * @method integer getJarPackageNum() Obtain Jar Package Count
 * @method void setJarPackageNum(integer $JarPackageNum) Set Jar Package Count
 * @method integer getStartServiceNum() Obtain Started Service Count
 * @method void setStartServiceNum(integer $StartServiceNum) Set Started Service Count
 * @method integer getScheduledTaskNum() Obtain Number of Scheduled Tasks
 * @method void setScheduledTaskNum(integer $ScheduledTaskNum) Set Number of Scheduled Tasks
 * @method integer getEnvironmentVariableNum() Obtain Number of Environment Variables
 * @method void setEnvironmentVariableNum(integer $EnvironmentVariableNum) Set Number of Environment Variables
 * @method integer getKernelModuleNum() Obtain Number of Kernel Modules
 * @method void setKernelModuleNum(integer $KernelModuleNum) Set Number of Kernel Modules
 * @method integer getSystemInstallationPackageNum() Obtain System Installation Package Count
 * @method void setSystemInstallationPackageNum(integer $SystemInstallationPackageNum) Set System Installation Package Count
 * @method integer getSurplusProtectDay() Obtain remaining protection duration
 * @method void setSurplusProtectDay(integer $SurplusProtectDay) Set remaining protection duration
 * @method integer getCWPStatus() Obtain Whether client is installed. 1 for Installed, 0 for Not Installed.
 * @method void setCWPStatus(integer $CWPStatus) Set Whether client is installed. 1 for Installed, 0 for Not Installed.
 * @method array getTag() Obtain Tag.
 * @method void setTag(array $Tag) Set Tag.
 * @method string getProtectLevel() Obtain Protection level
 * @method void setProtectLevel(string $ProtectLevel) Set Protection level
 * @method integer getProtectedDay() Obtain protection duration
 * @method void setProtectedDay(integer $ProtectedDay) Set protection duration
 */
class AssetBaseInfoResponse extends AbstractModel
{
    /**
     * @var string vpc-id
     */
    public $VpcId;

    /**
     * @var string vpc-name
     */
    public $VpcName;

    /**
     * @var string Asset name
     */
    public $AssetName;

    /**
     * @var string Operating system.
     */
    public $Os;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var integer Number of accounts
     */
    public $AccountNum;

    /**
     * @var integer Number of Ports
     */
    public $PortNum;

    /**
     * @var integer Process quantity
     */
    public $ProcessNum;

    /**
     * @var integer Number of Software Applications
     */
    public $SoftApplicationNum;

    /**
     * @var integer Database Count
     */
    public $DatabaseNum;

    /**
     * @var integer Number of Web Applications
     */
    public $WebApplicationNum;

    /**
     * @var integer Number of services
     */
    public $ServiceNum;

    /**
     * @var integer Web Framework Count
     */
    public $WebFrameworkNum;

    /**
     * @var integer Website Count
     */
    public $WebSiteNum;

    /**
     * @var integer Jar Package Count
     */
    public $JarPackageNum;

    /**
     * @var integer Started Service Count
     */
    public $StartServiceNum;

    /**
     * @var integer Number of Scheduled Tasks
     */
    public $ScheduledTaskNum;

    /**
     * @var integer Number of Environment Variables
     */
    public $EnvironmentVariableNum;

    /**
     * @var integer Number of Kernel Modules
     */
    public $KernelModuleNum;

    /**
     * @var integer System Installation Package Count
     */
    public $SystemInstallationPackageNum;

    /**
     * @var integer remaining protection duration
     */
    public $SurplusProtectDay;

    /**
     * @var integer Whether client is installed. 1 for Installed, 0 for Not Installed.
     */
    public $CWPStatus;

    /**
     * @var array Tag.
     */
    public $Tag;

    /**
     * @var string Protection level
     */
    public $ProtectLevel;

    /**
     * @var integer protection duration
     */
    public $ProtectedDay;

    /**
     * @param string $VpcId vpc-id
     * @param string $VpcName vpc-name
     * @param string $AssetName Asset name
     * @param string $Os Operating system.
     * @param string $PublicIp Public IP address
     * @param string $PrivateIp Private IP address
     * @param string $Region Region.
     * @param string $AssetType Asset type
     * @param string $AssetId Asset ID
     * @param integer $AccountNum Number of accounts
     * @param integer $PortNum Number of Ports
     * @param integer $ProcessNum Process quantity
     * @param integer $SoftApplicationNum Number of Software Applications
     * @param integer $DatabaseNum Database Count
     * @param integer $WebApplicationNum Number of Web Applications
     * @param integer $ServiceNum Number of services
     * @param integer $WebFrameworkNum Web Framework Count
     * @param integer $WebSiteNum Website Count
     * @param integer $JarPackageNum Jar Package Count
     * @param integer $StartServiceNum Started Service Count
     * @param integer $ScheduledTaskNum Number of Scheduled Tasks
     * @param integer $EnvironmentVariableNum Number of Environment Variables
     * @param integer $KernelModuleNum Number of Kernel Modules
     * @param integer $SystemInstallationPackageNum System Installation Package Count
     * @param integer $SurplusProtectDay remaining protection duration
     * @param integer $CWPStatus Whether client is installed. 1 for Installed, 0 for Not Installed.
     * @param array $Tag Tag.
     * @param string $ProtectLevel Protection level
     * @param integer $ProtectedDay protection duration
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AccountNum",$param) and $param["AccountNum"] !== null) {
            $this->AccountNum = $param["AccountNum"];
        }

        if (array_key_exists("PortNum",$param) and $param["PortNum"] !== null) {
            $this->PortNum = $param["PortNum"];
        }

        if (array_key_exists("ProcessNum",$param) and $param["ProcessNum"] !== null) {
            $this->ProcessNum = $param["ProcessNum"];
        }

        if (array_key_exists("SoftApplicationNum",$param) and $param["SoftApplicationNum"] !== null) {
            $this->SoftApplicationNum = $param["SoftApplicationNum"];
        }

        if (array_key_exists("DatabaseNum",$param) and $param["DatabaseNum"] !== null) {
            $this->DatabaseNum = $param["DatabaseNum"];
        }

        if (array_key_exists("WebApplicationNum",$param) and $param["WebApplicationNum"] !== null) {
            $this->WebApplicationNum = $param["WebApplicationNum"];
        }

        if (array_key_exists("ServiceNum",$param) and $param["ServiceNum"] !== null) {
            $this->ServiceNum = $param["ServiceNum"];
        }

        if (array_key_exists("WebFrameworkNum",$param) and $param["WebFrameworkNum"] !== null) {
            $this->WebFrameworkNum = $param["WebFrameworkNum"];
        }

        if (array_key_exists("WebSiteNum",$param) and $param["WebSiteNum"] !== null) {
            $this->WebSiteNum = $param["WebSiteNum"];
        }

        if (array_key_exists("JarPackageNum",$param) and $param["JarPackageNum"] !== null) {
            $this->JarPackageNum = $param["JarPackageNum"];
        }

        if (array_key_exists("StartServiceNum",$param) and $param["StartServiceNum"] !== null) {
            $this->StartServiceNum = $param["StartServiceNum"];
        }

        if (array_key_exists("ScheduledTaskNum",$param) and $param["ScheduledTaskNum"] !== null) {
            $this->ScheduledTaskNum = $param["ScheduledTaskNum"];
        }

        if (array_key_exists("EnvironmentVariableNum",$param) and $param["EnvironmentVariableNum"] !== null) {
            $this->EnvironmentVariableNum = $param["EnvironmentVariableNum"];
        }

        if (array_key_exists("KernelModuleNum",$param) and $param["KernelModuleNum"] !== null) {
            $this->KernelModuleNum = $param["KernelModuleNum"];
        }

        if (array_key_exists("SystemInstallationPackageNum",$param) and $param["SystemInstallationPackageNum"] !== null) {
            $this->SystemInstallationPackageNum = $param["SystemInstallationPackageNum"];
        }

        if (array_key_exists("SurplusProtectDay",$param) and $param["SurplusProtectDay"] !== null) {
            $this->SurplusProtectDay = $param["SurplusProtectDay"];
        }

        if (array_key_exists("CWPStatus",$param) and $param["CWPStatus"] !== null) {
            $this->CWPStatus = $param["CWPStatus"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("ProtectLevel",$param) and $param["ProtectLevel"] !== null) {
            $this->ProtectLevel = $param["ProtectLevel"];
        }

        if (array_key_exists("ProtectedDay",$param) and $param["ProtectedDay"] !== null) {
            $this->ProtectedDay = $param["ProtectedDay"];
        }
    }
}
