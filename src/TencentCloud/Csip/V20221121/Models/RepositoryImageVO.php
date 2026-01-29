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
 * Repository Image List
 *
 * @method integer getAppId() Obtain User appid.
 * @method void setAppId(integer $AppId) Set User appid.
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getNickName() Obtain Nickname.
 * @method void setNickName(string $NickName) Set Nickname.
 * @method string getInstanceId() Obtain Mirror id.
 * @method void setInstanceId(string $InstanceId) Set Mirror id.
 * @method string getInstanceName() Obtain Image name.
 * @method void setInstanceName(string $InstanceName) Set Image name.
 * @method string getInstanceCreateTime() Obtain Image creation time.
 * @method void setInstanceCreateTime(string $InstanceCreateTime) Set Image creation time.
 * @method string getInstanceSize() Obtain Image Size with Unit
 * @method void setInstanceSize(string $InstanceSize) Set Image Size with Unit
 * @method integer getBuildCount() Obtain Build times.
 * @method void setBuildCount(integer $BuildCount) Set Build times.
 * @method string getInstanceType() Obtain Image type.
 * @method void setInstanceType(string $InstanceType) Set Image type.
 * @method integer getAuthStatus() Obtain Authorization status.
 * @method void setAuthStatus(integer $AuthStatus) Set Authorization status.
 * @method string getInstanceVersion() Obtain Mirror version.
 * @method void setInstanceVersion(string $InstanceVersion) Set Mirror version.
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getRepositoryUrl() Obtain Repository address.
 * @method void setRepositoryUrl(string $RepositoryUrl) Set Repository address.
 * @method string getRepositoryName() Obtain Repository name.
 * @method void setRepositoryName(string $RepositoryName) Set Repository name.
 * @method integer getIsCore() Obtain Core or Not
 * @method void setIsCore(integer $IsCore) Set Core or Not
 * @method integer getVulRisk() Obtain Vulnerability risk.
 * @method void setVulRisk(integer $VulRisk) Set Vulnerability risk.
 * @method integer getCheckCount() Obtain Check task.
 * @method void setCheckCount(integer $CheckCount) Set Check task.
 * @method string getCheckTime() Obtain Health Checkup Time
 * @method void setCheckTime(string $CheckTime) Set Health Checkup Time
 * @method integer getIsNewAsset() Obtain New Asset or Not. 1: New
 * @method void setIsNewAsset(integer $IsNewAsset) Set New Asset or Not. 1: New
 */
class RepositoryImageVO extends AbstractModel
{
    /**
     * @var integer User appid.
     */
    public $AppId;

    /**
     * @var string User UIN
     */
    public $Uin;

    /**
     * @var string Nickname.
     */
    public $NickName;

    /**
     * @var string Mirror id.
     */
    public $InstanceId;

    /**
     * @var string Image name.
     */
    public $InstanceName;

    /**
     * @var string Image creation time.
     */
    public $InstanceCreateTime;

    /**
     * @var string Image Size with Unit
     */
    public $InstanceSize;

    /**
     * @var integer Build times.
     */
    public $BuildCount;

    /**
     * @var string Image type.
     */
    public $InstanceType;

    /**
     * @var integer Authorization status.
     */
    public $AuthStatus;

    /**
     * @var string Mirror version.
     */
    public $InstanceVersion;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string Repository address.
     */
    public $RepositoryUrl;

    /**
     * @var string Repository name.
     */
    public $RepositoryName;

    /**
     * @var integer Core or Not
     */
    public $IsCore;

    /**
     * @var integer Vulnerability risk.
     */
    public $VulRisk;

    /**
     * @var integer Check task.
     */
    public $CheckCount;

    /**
     * @var string Health Checkup Time
     */
    public $CheckTime;

    /**
     * @var integer New Asset or Not. 1: New
     */
    public $IsNewAsset;

    /**
     * @param integer $AppId User appid.
     * @param string $Uin User UIN
     * @param string $NickName Nickname.
     * @param string $InstanceId Mirror id.
     * @param string $InstanceName Image name.
     * @param string $InstanceCreateTime Image creation time.
     * @param string $InstanceSize Image Size with Unit
     * @param integer $BuildCount Build times.
     * @param string $InstanceType Image type.
     * @param integer $AuthStatus Authorization status.
     * @param string $InstanceVersion Mirror version.
     * @param string $Region Region.
     * @param string $RepositoryUrl Repository address.
     * @param string $RepositoryName Repository name.
     * @param integer $IsCore Core or Not
     * @param integer $VulRisk Vulnerability risk.
     * @param integer $CheckCount Check task.
     * @param string $CheckTime Health Checkup Time
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

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceCreateTime",$param) and $param["InstanceCreateTime"] !== null) {
            $this->InstanceCreateTime = $param["InstanceCreateTime"];
        }

        if (array_key_exists("InstanceSize",$param) and $param["InstanceSize"] !== null) {
            $this->InstanceSize = $param["InstanceSize"];
        }

        if (array_key_exists("BuildCount",$param) and $param["BuildCount"] !== null) {
            $this->BuildCount = $param["BuildCount"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("AuthStatus",$param) and $param["AuthStatus"] !== null) {
            $this->AuthStatus = $param["AuthStatus"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RepositoryUrl",$param) and $param["RepositoryUrl"] !== null) {
            $this->RepositoryUrl = $param["RepositoryUrl"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("VulRisk",$param) and $param["VulRisk"] !== null) {
            $this->VulRisk = $param["VulRisk"];
        }

        if (array_key_exists("CheckCount",$param) and $param["CheckCount"] !== null) {
            $this->CheckCount = $param["CheckCount"];
        }

        if (array_key_exists("CheckTime",$param) and $param["CheckTime"] !== null) {
            $this->CheckTime = $param["CheckTime"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }
    }
}
