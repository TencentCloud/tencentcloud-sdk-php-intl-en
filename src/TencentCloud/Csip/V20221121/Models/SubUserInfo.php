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
 * 
 *
 * @method integer getID() Obtain 
 * @method void setID(integer $ID) Set 
 * @method string getAppID() Obtain 
 * @method void setAppID(string $AppID) Set 
 * @method string getUin() Obtain 
 * @method void setUin(string $Uin) Set 
 * @method string getNickName() Obtain 
 * @method void setNickName(string $NickName) Set 
 * @method string getOwnerAppID() Obtain 
 * @method void setOwnerAppID(string $OwnerAppID) Set 
 * @method string getOwnerUin() Obtain 
 * @method void setOwnerUin(string $OwnerUin) Set 
 * @method string getOwnerNickName() Obtain 
 * @method void setOwnerNickName(string $OwnerNickName) Set 
 * @method string getOwnerMemberID() Obtain 
 * @method void setOwnerMemberID(string $OwnerMemberID) Set 
 * @method integer getCloudType() Obtain 
 * @method void setCloudType(integer $CloudType) Set 
 * @method integer getServiceCount() Obtain 
 * @method void setServiceCount(integer $ServiceCount) Set 
 * @method integer getInterfaceCount() Obtain 
 * @method void setInterfaceCount(integer $InterfaceCount) Set 
 * @method integer getAssetCount() Obtain 
 * @method void setAssetCount(integer $AssetCount) Set 
 * @method integer getLogCount() Obtain 
 * @method void setLogCount(integer $LogCount) Set 
 * @method integer getConfigRiskCount() Obtain 
 * @method void setConfigRiskCount(integer $ConfigRiskCount) Set 
 * @method integer getActionRiskCount() Obtain 
 * @method void setActionRiskCount(integer $ActionRiskCount) Set 
 * @method boolean getIsAccessCloudAudit() Obtain 
 * @method void setIsAccessCloudAudit(boolean $IsAccessCloudAudit) Set 
 * @method boolean getIsAccessCheck() Obtain 
 * @method void setIsAccessCheck(boolean $IsAccessCheck) Set 
 * @method boolean getIsAccessUeba() Obtain 
 * @method void setIsAccessUeba(boolean $IsAccessUeba) Set 
 */
class SubUserInfo extends AbstractModel
{
    /**
     * @var integer 
     */
    public $ID;

    /**
     * @var string 
     */
    public $AppID;

    /**
     * @var string 
     */
    public $Uin;

    /**
     * @var string 
     */
    public $NickName;

    /**
     * @var string 
     */
    public $OwnerAppID;

    /**
     * @var string 
     */
    public $OwnerUin;

    /**
     * @var string 
     */
    public $OwnerNickName;

    /**
     * @var string 
     */
    public $OwnerMemberID;

    /**
     * @var integer 
     */
    public $CloudType;

    /**
     * @var integer 
     */
    public $ServiceCount;

    /**
     * @var integer 
     */
    public $InterfaceCount;

    /**
     * @var integer 
     */
    public $AssetCount;

    /**
     * @var integer 
     */
    public $LogCount;

    /**
     * @var integer 
     */
    public $ConfigRiskCount;

    /**
     * @var integer 
     */
    public $ActionRiskCount;

    /**
     * @var boolean 
     */
    public $IsAccessCloudAudit;

    /**
     * @var boolean 
     */
    public $IsAccessCheck;

    /**
     * @var boolean 
     */
    public $IsAccessUeba;

    /**
     * @param integer $ID 
     * @param string $AppID 
     * @param string $Uin 
     * @param string $NickName 
     * @param string $OwnerAppID 
     * @param string $OwnerUin 
     * @param string $OwnerNickName 
     * @param string $OwnerMemberID 
     * @param integer $CloudType 
     * @param integer $ServiceCount 
     * @param integer $InterfaceCount 
     * @param integer $AssetCount 
     * @param integer $LogCount 
     * @param integer $ConfigRiskCount 
     * @param integer $ActionRiskCount 
     * @param boolean $IsAccessCloudAudit 
     * @param boolean $IsAccessCheck 
     * @param boolean $IsAccessUeba 
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("OwnerAppID",$param) and $param["OwnerAppID"] !== null) {
            $this->OwnerAppID = $param["OwnerAppID"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerNickName",$param) and $param["OwnerNickName"] !== null) {
            $this->OwnerNickName = $param["OwnerNickName"];
        }

        if (array_key_exists("OwnerMemberID",$param) and $param["OwnerMemberID"] !== null) {
            $this->OwnerMemberID = $param["OwnerMemberID"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("InterfaceCount",$param) and $param["InterfaceCount"] !== null) {
            $this->InterfaceCount = $param["InterfaceCount"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("LogCount",$param) and $param["LogCount"] !== null) {
            $this->LogCount = $param["LogCount"];
        }

        if (array_key_exists("ConfigRiskCount",$param) and $param["ConfigRiskCount"] !== null) {
            $this->ConfigRiskCount = $param["ConfigRiskCount"];
        }

        if (array_key_exists("ActionRiskCount",$param) and $param["ActionRiskCount"] !== null) {
            $this->ActionRiskCount = $param["ActionRiskCount"];
        }

        if (array_key_exists("IsAccessCloudAudit",$param) and $param["IsAccessCloudAudit"] !== null) {
            $this->IsAccessCloudAudit = $param["IsAccessCloudAudit"];
        }

        if (array_key_exists("IsAccessCheck",$param) and $param["IsAccessCheck"] !== null) {
            $this->IsAccessCheck = $param["IsAccessCheck"];
        }

        if (array_key_exists("IsAccessUeba",$param) and $param["IsAccessUeba"] !== null) {
            $this->IsAccessUeba = $param["IsAccessUeba"];
        }
    }
}
