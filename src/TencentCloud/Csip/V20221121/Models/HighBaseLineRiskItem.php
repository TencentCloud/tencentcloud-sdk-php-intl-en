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
 * High-Risk baseline risk content.
 *
 * @method string getCloudAccountID() Obtain Cloud account ID.
 * @method void setCloudAccountID(string $CloudAccountID) Set Cloud account ID.
 * @method string getAssetID() Obtain Instance ID.
 * @method void setAssetID(string $AssetID) Set Instance ID.
 * @method string getInstanceStatus() Obtain Instance status
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getRiskName() Obtain Risk name.
 * @method void setRiskName(string $RiskName) Set Risk name.
 * @method string getRiskCategory() Obtain Risk classification.
 * @method void setRiskCategory(string $RiskCategory) Set Risk classification.
 * @method string getRiskLevel() Obtain Risk level.
 * @method void setRiskLevel(string $RiskLevel) Set Risk level.
 * @method string getRiskDesc() Obtain Risk description.
 * @method void setRiskDesc(string $RiskDesc) Set Risk description.
 * @method string getRiskResult() Obtain Risk result.
 * @method void setRiskResult(string $RiskResult) Set Risk result.
 * @method string getFixAdvice() Obtain Fixing suggestion
 * @method void setFixAdvice(string $FixAdvice) Set Fixing suggestion
 * @method string getRiskCategoryName() Obtain Linux vulnerability.
 * @method void setRiskCategoryName(string $RiskCategoryName) Set Linux vulnerability.
 * @method string getRiskLevelName() Obtain Risk name.
 * @method void setRiskLevelName(string $RiskLevelName) Set Risk name.
 * @method string getInstanceStatusName() Obtain Instance status
 * @method void setInstanceStatusName(string $InstanceStatusName) Set Instance status
 * @method string getCreateTime() Obtain First detection time
 * @method void setCreateTime(string $CreateTime) Set First detection time
 * @method string getUpdateTime() Obtain Last discovery time
 * @method void setUpdateTime(string $UpdateTime) Set Last discovery time
 * @method integer getAppID() Obtain Tenant ID.
 * @method void setAppID(integer $AppID) Set Tenant ID.
 */
class HighBaseLineRiskItem extends AbstractModel
{
    /**
     * @var string Cloud account ID.
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
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Risk name.
     */
    public $RiskName;

    /**
     * @var string Risk classification.
     */
    public $RiskCategory;

    /**
     * @var string Risk level.
     */
    public $RiskLevel;

    /**
     * @var string Risk description.
     */
    public $RiskDesc;

    /**
     * @var string Risk result.
     */
    public $RiskResult;

    /**
     * @var string Fixing suggestion
     */
    public $FixAdvice;

    /**
     * @var string Linux vulnerability.
     */
    public $RiskCategoryName;

    /**
     * @var string Risk name.
     */
    public $RiskLevelName;

    /**
     * @var string Instance status
     */
    public $InstanceStatusName;

    /**
     * @var string First detection time
     */
    public $CreateTime;

    /**
     * @var string Last discovery time
     */
    public $UpdateTime;

    /**
     * @var integer Tenant ID.
     */
    public $AppID;

    /**
     * @param string $CloudAccountID Cloud account ID.
     * @param string $AssetID Instance ID.
     * @param string $InstanceStatus Instance status
     * @param string $InstanceName Instance name
     * @param string $RiskName Risk name.
     * @param string $RiskCategory Risk classification.
     * @param string $RiskLevel Risk level.
     * @param string $RiskDesc Risk description.
     * @param string $RiskResult Risk result.
     * @param string $FixAdvice Fixing suggestion
     * @param string $RiskCategoryName Linux vulnerability.
     * @param string $RiskLevelName Risk name.
     * @param string $InstanceStatusName Instance status
     * @param string $CreateTime First detection time
     * @param string $UpdateTime Last discovery time
     * @param integer $AppID Tenant ID.
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

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskCategory",$param) and $param["RiskCategory"] !== null) {
            $this->RiskCategory = $param["RiskCategory"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskDesc",$param) and $param["RiskDesc"] !== null) {
            $this->RiskDesc = $param["RiskDesc"];
        }

        if (array_key_exists("RiskResult",$param) and $param["RiskResult"] !== null) {
            $this->RiskResult = $param["RiskResult"];
        }

        if (array_key_exists("FixAdvice",$param) and $param["FixAdvice"] !== null) {
            $this->FixAdvice = $param["FixAdvice"];
        }

        if (array_key_exists("RiskCategoryName",$param) and $param["RiskCategoryName"] !== null) {
            $this->RiskCategoryName = $param["RiskCategoryName"];
        }

        if (array_key_exists("RiskLevelName",$param) and $param["RiskLevelName"] !== null) {
            $this->RiskLevelName = $param["RiskLevelName"];
        }

        if (array_key_exists("InstanceStatusName",$param) and $param["InstanceStatusName"] !== null) {
            $this->InstanceStatusName = $param["InstanceStatusName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }
    }
}
