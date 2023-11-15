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
 * Details of server assets
 *
 * @method string getVpcId() Obtain 
 * @method void setVpcId(string $VpcId) Set 
 * @method string getVpcName() Obtain vpc-name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVpcName(string $VpcName) Set vpc-name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetName() Obtain Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetName(string $AssetName) Set Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getOs() Obtain Operating system
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOs(string $Os) Set Operating system
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPublicIp() Obtain Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPublicIp(string $PublicIp) Set Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPrivateIp() Obtain Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPrivateIp(string $PrivateIp) Set Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetType() Obtain Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetType(string $AssetType) Set Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetId() Obtain Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetId(string $AssetId) Set Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAccountNum() Obtain Total number of accounts
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAccountNum(integer $AccountNum) Set Total number of accounts
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getPortNum() Obtain Number of ports
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPortNum(integer $PortNum) Set Number of ports
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getProcessNum() Obtain Number of processes
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setProcessNum(integer $ProcessNum) Set Number of processes
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getSoftApplicationNum() Obtain Numbernumb of software applications
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSoftApplicationNum(integer $SoftApplicationNum) Set Numbernumb of software applications
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getDatabaseNum() Obtain Number of databases
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDatabaseNum(integer $DatabaseNum) Set Number of databases
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getWebApplicationNum() Obtain Number of web applications
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setWebApplicationNum(integer $WebApplicationNum) Set Number of web applications
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getServiceNum() Obtain Number of services
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setServiceNum(integer $ServiceNum) Set Number of services
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getWebFrameworkNum() Obtain Number of web frameworks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setWebFrameworkNum(integer $WebFrameworkNum) Set Number of web frameworks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getWebSiteNum() Obtain Number of websites
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setWebSiteNum(integer $WebSiteNum) Set Number of websites
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getJarPackageNum() Obtain Number of JAR packages
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setJarPackageNum(integer $JarPackageNum) Set Number of JAR packages
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getStartServiceNum() Obtain Number of enabled services
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setStartServiceNum(integer $StartServiceNum) Set Number of enabled services
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getScheduledTaskNum() Obtain Number of scheduled tasks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setScheduledTaskNum(integer $ScheduledTaskNum) Set Number of scheduled tasks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getEnvironmentVariableNum() Obtain Number of environment variables
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setEnvironmentVariableNum(integer $EnvironmentVariableNum) Set Number of environment variables
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getKernelModuleNum() Obtain Number of kernel modules
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setKernelModuleNum(integer $KernelModuleNum) Set Number of kernel modules
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getSystemInstallationPackageNum() Obtain Number of system installation packages
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSystemInstallationPackageNum(integer $SystemInstallationPackageNum) Set Number of system installation packages
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getSurplusProtectDay() Obtain Remaining service validity in days
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSurplusProtectDay(integer $SurplusProtectDay) Set Remaining service validity in days
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getCWPStatus() Obtain Whether the CWPP agent is installed. Values: `1` (installed) and `0` (not installed)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCWPStatus(integer $CWPStatus) Set Whether the CWPP agent is installed. Values: `1` (installed) and `0` (not installed)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getTag() Obtain Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getProtectLevel() Obtain Protection level
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setProtectLevel(string $ProtectLevel) Set Protection level
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getProtectedDay() Obtain Usage of CWPP service in days
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setProtectedDay(integer $ProtectedDay) Set Usage of CWPP service in days
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class AssetBaseInfoResponse extends AbstractModel
{
    /**
     * @var string 
     */
    public $VpcId;

    /**
     * @var string vpc-name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VpcName;

    /**
     * @var string Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetName;

    /**
     * @var string Operating system
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Os;

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
     * @var string Region
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetType;

    /**
     * @var string Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetId;

    /**
     * @var integer Total number of accounts
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AccountNum;

    /**
     * @var integer Number of ports
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PortNum;

    /**
     * @var integer Number of processes
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ProcessNum;

    /**
     * @var integer Numbernumb of software applications
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SoftApplicationNum;

    /**
     * @var integer Number of databases
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $DatabaseNum;

    /**
     * @var integer Number of web applications
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $WebApplicationNum;

    /**
     * @var integer Number of services
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ServiceNum;

    /**
     * @var integer Number of web frameworks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $WebFrameworkNum;

    /**
     * @var integer Number of websites
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $WebSiteNum;

    /**
     * @var integer Number of JAR packages
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $JarPackageNum;

    /**
     * @var integer Number of enabled services
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $StartServiceNum;

    /**
     * @var integer Number of scheduled tasks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ScheduledTaskNum;

    /**
     * @var integer Number of environment variables
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $EnvironmentVariableNum;

    /**
     * @var integer Number of kernel modules
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $KernelModuleNum;

    /**
     * @var integer Number of system installation packages
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SystemInstallationPackageNum;

    /**
     * @var integer Remaining service validity in days
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SurplusProtectDay;

    /**
     * @var integer Whether the CWPP agent is installed. Values: `1` (installed) and `0` (not installed)
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CWPStatus;

    /**
     * @var array Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var string Protection level
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ProtectLevel;

    /**
     * @var integer Usage of CWPP service in days
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ProtectedDay;

    /**
     * @param string $VpcId 
     * @param string $VpcName vpc-name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetName Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Os Operating system
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PublicIp Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PrivateIp Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Region Region
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetType Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetId Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $AccountNum Total number of accounts
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $PortNum Number of ports
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ProcessNum Number of processes
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $SoftApplicationNum Numbernumb of software applications
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $DatabaseNum Number of databases
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $WebApplicationNum Number of web applications
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ServiceNum Number of services
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $WebFrameworkNum Number of web frameworks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $WebSiteNum Number of websites
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $JarPackageNum Number of JAR packages
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $StartServiceNum Number of enabled services
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ScheduledTaskNum Number of scheduled tasks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $EnvironmentVariableNum Number of environment variables
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $KernelModuleNum Number of kernel modules
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $SystemInstallationPackageNum Number of system installation packages
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $SurplusProtectDay Remaining service validity in days
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $CWPStatus Whether the CWPP agent is installed. Values: `1` (installed) and `0` (not installed)
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Tag Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ProtectLevel Protection level
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ProtectedDay Usage of CWPP service in days
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
