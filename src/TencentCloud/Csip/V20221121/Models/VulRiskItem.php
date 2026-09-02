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
 * Host vulnerability risk content
 *
 * @method string getCloudAccountID() Obtain Cloud Account ID
 * @method void setCloudAccountID(string $CloudAccountID) Set Cloud Account ID
 * @method string getAssetID() Obtain Instance ID.
 * @method void setAssetID(string $AssetID) Set Instance ID.
 * @method string getInstanceStatus() Obtain Instance status
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getVulCategory() Obtain vulnerability type
 * @method void setVulCategory(string $VulCategory) Set vulnerability type
 * @method string getVulLevel() Obtain Vulnerability level
 * @method void setVulLevel(string $VulLevel) Set Vulnerability level
 * @method string getCveID() Obtain CVE ID
 * @method void setCveID(string $CveID) Set CVE ID
 * @method string getDescription() Obtain Vulnerability description
 * @method void setDescription(string $Description) Set Vulnerability description
 * @method string getContainerID() Obtain Container ID
 * @method void setContainerID(string $ContainerID) Set Container ID
 * @method string getFix() Obtain Vulnerability risk remediation recommendations
 * @method void setFix(string $Fix) Set Vulnerability risk remediation recommendations
 * @method string getVulCategoryName() Obtain Linux vulnerability
 * @method void setVulCategoryName(string $VulCategoryName) Set Linux vulnerability
 * @method string getVulLevelName() Obtain Vulnerability level name
 * @method void setVulLevelName(string $VulLevelName) Set Vulnerability level name
 * @method string getInstanceStatusName() Obtain Chinese information of instance status
 * @method void setInstanceStatusName(string $InstanceStatusName) Set Chinese information of instance status
 * @method integer getAppID() Obtain Tenant ID
 * @method void setAppID(integer $AppID) Set Tenant ID
 */
class VulRiskItem extends AbstractModel
{
    /**
     * @var string Cloud Account ID
     */
    public $CloudAccountID;

    /**
     * @var string Instance ID.
     */
    public $AssetID;

    /**
     * @var string Instance status
     */
    public $InstanceStatus;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string vulnerability type
     */
    public $VulCategory;

    /**
     * @var string Vulnerability level
     */
    public $VulLevel;

    /**
     * @var string CVE ID
     */
    public $CveID;

    /**
     * @var string Vulnerability description
     */
    public $Description;

    /**
     * @var string Container ID
     */
    public $ContainerID;

    /**
     * @var string Vulnerability risk remediation recommendations
     */
    public $Fix;

    /**
     * @var string Linux vulnerability
     */
    public $VulCategoryName;

    /**
     * @var string Vulnerability level name
     */
    public $VulLevelName;

    /**
     * @var string Chinese information of instance status
     */
    public $InstanceStatusName;

    /**
     * @var integer Tenant ID
     */
    public $AppID;

    /**
     * @param string $CloudAccountID Cloud Account ID
     * @param string $AssetID Instance ID.
     * @param string $InstanceStatus Instance status
     * @param string $InstanceName Instance name.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time
     * @param string $VulName Vulnerability name
     * @param string $VulCategory vulnerability type
     * @param string $VulLevel Vulnerability level
     * @param string $CveID CVE ID
     * @param string $Description Vulnerability description
     * @param string $ContainerID Container ID
     * @param string $Fix Vulnerability risk remediation recommendations
     * @param string $VulCategoryName Linux vulnerability
     * @param string $VulLevelName Vulnerability level name
     * @param string $InstanceStatusName Chinese information of instance status
     * @param integer $AppID Tenant ID
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
        if (array_key_exists("CloudAccountID",$param) and $param["CloudAccountID"] !== null) {
            $this->CloudAccountID = $param["CloudAccountID"];
        }

        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("CveID",$param) and $param["CveID"] !== null) {
            $this->CveID = $param["CveID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("VulCategoryName",$param) and $param["VulCategoryName"] !== null) {
            $this->VulCategoryName = $param["VulCategoryName"];
        }

        if (array_key_exists("VulLevelName",$param) and $param["VulLevelName"] !== null) {
            $this->VulLevelName = $param["VulLevelName"];
        }

        if (array_key_exists("InstanceStatusName",$param) and $param["InstanceStatusName"] !== null) {
            $this->InstanceStatusName = $param["InstanceStatusName"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }
    }
}
