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
 * Asset information
 *
 * @method integer getAppID() Obtain <p>Tenant ID</p>
 * @method void setAppID(integer $AppID) Set <p>Tenant ID</p>
 * @method string getProvider() Obtain <p>Cloud service provider</p>
 * @method void setProvider(string $Provider) Set <p>Cloud service provider</p>
 * @method string getProviderName() Obtain <p>Cloud vendor name.</p>
 * @method void setProviderName(string $ProviderName) Set <p>Cloud vendor name.</p>
 * @method string getCloudAccountID() Obtain <p>Cloud Account ID</p>
 * @method void setCloudAccountID(string $CloudAccountID) Set <p>Cloud Account ID</p>
 * @method string getCloudAccountName() Obtain <p>Cloud account name</p>
 * @method void setCloudAccountName(string $CloudAccountName) Set <p>Cloud account name</p>
 * @method string getAssetID() Obtain <p>Asset ID.</p>
 * @method void setAssetID(string $AssetID) Set <p>Asset ID.</p>
 * @method string getAssetName() Obtain <p>Asset name</p>
 * @method void setAssetName(string $AssetName) Set <p>Asset name</p>
 * @method string getAssetType() Obtain <p>Asset type</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p>
 * @method string getAssetTypeName() Obtain <p>Asset type name</p>
 * @method void setAssetTypeName(string $AssetTypeName) Set <p>Asset type name</p>
 * @method array getTags() Obtain <p>Asset tag.</p>
 * @method void setTags(array $Tags) Set <p>Asset tag.</p>
 * @method string getAddress() Obtain <p>Public network address</p>
 * @method void setAddress(string $Address) Set <p>Public network address</p>
 * @method string getAddressType() Obtain <p>Public address type</p>
 * @method void setAddressType(string $AddressType) Set <p>Public address type</p>
 * @method array getResolvedAddress() Obtain <p>Resolution address</p>
 * @method void setResolvedAddress(array $ResolvedAddress) Set <p>Resolution address</p>
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method integer getProtectStatus() Obtain <p>Protection status</p>
 * @method void setProtectStatus(integer $ProtectStatus) Set <p>Protection status</p>
 * @method integer getRiskCount() Obtain <p>Number of risks</p>
 * @method void setRiskCount(integer $RiskCount) Set <p>Number of risks</p>
 * @method integer getAlarmCount() Obtain <p>Number of alarms.</p>
 * @method void setAlarmCount(integer $AlarmCount) Set <p>Number of alarms.</p>
 * @method string getCreatedAt() Obtain <p>Instance creation time</p>
 * @method void setCreatedAt(string $CreatedAt) Set <p>Instance creation time</p>
 * @method string getFirstSyncTime() Obtain <p>First sync time</p>
 * @method void setFirstSyncTime(string $FirstSyncTime) Set <p>First sync time</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method integer getCriticalRiskCount() Obtain <p>Total number of severe risks</p>
 * @method void setCriticalRiskCount(integer $CriticalRiskCount) Set <p>Total number of severe risks</p>
 * @method integer getHighRiskCount() Obtain <p>Total number of high risks</p>
 * @method void setHighRiskCount(integer $HighRiskCount) Set <p>Total number of high risks</p>
 * @method integer getMediumRiskCount() Obtain <p>Total number of medium risks</p>
 * @method void setMediumRiskCount(integer $MediumRiskCount) Set <p>Total number of medium risks</p>
 * @method integer getLowRiskCount() Obtain <p>Total number of low risks</p>
 * @method void setLowRiskCount(integer $LowRiskCount) Set <p>Total number of low risks</p>
 * @method string getAssetRID() Obtain <p>Unique asset ID</p>
 * @method void setAssetRID(string $AssetRID) Set <p>Unique asset ID</p>
 * @method array getCustomTags() Obtain <p>CSC tag</p>
 * @method void setCustomTags(array $CustomTags) Set <p>CSC tag</p>
 * @method string getAssetTypeIconURL() Obtain <p>Asset type icon</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) Set <p>Asset type icon</p>
 */
class PublicAssetInfo extends AbstractModel
{
    /**
     * @var integer <p>Tenant ID</p>
     */
    public $AppID;

    /**
     * @var string <p>Cloud service provider</p>
     */
    public $Provider;

    /**
     * @var string <p>Cloud vendor name.</p>
     */
    public $ProviderName;

    /**
     * @var string <p>Cloud Account ID</p>
     */
    public $CloudAccountID;

    /**
     * @var string <p>Cloud account name</p>
     */
    public $CloudAccountName;

    /**
     * @var string <p>Asset ID.</p>
     */
    public $AssetID;

    /**
     * @var string <p>Asset name</p>
     */
    public $AssetName;

    /**
     * @var string <p>Asset type</p>
     */
    public $AssetType;

    /**
     * @var string <p>Asset type name</p>
     */
    public $AssetTypeName;

    /**
     * @var array <p>Asset tag.</p>
     */
    public $Tags;

    /**
     * @var string <p>Public network address</p>
     */
    public $Address;

    /**
     * @var string <p>Public address type</p>
     */
    public $AddressType;

    /**
     * @var array <p>Resolution address</p>
     */
    public $ResolvedAddress;

    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var integer <p>Protection status</p>
     */
    public $ProtectStatus;

    /**
     * @var integer <p>Number of risks</p>
     */
    public $RiskCount;

    /**
     * @var integer <p>Number of alarms.</p>
     */
    public $AlarmCount;

    /**
     * @var string <p>Instance creation time</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>First sync time</p>
     */
    public $FirstSyncTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>Total number of severe risks</p>
     */
    public $CriticalRiskCount;

    /**
     * @var integer <p>Total number of high risks</p>
     */
    public $HighRiskCount;

    /**
     * @var integer <p>Total number of medium risks</p>
     */
    public $MediumRiskCount;

    /**
     * @var integer <p>Total number of low risks</p>
     */
    public $LowRiskCount;

    /**
     * @var string <p>Unique asset ID</p>
     */
    public $AssetRID;

    /**
     * @var array <p>CSC tag</p>
     */
    public $CustomTags;

    /**
     * @var string <p>Asset type icon</p>
     */
    public $AssetTypeIconURL;

    /**
     * @param integer $AppID <p>Tenant ID</p>
     * @param string $Provider <p>Cloud service provider</p>
     * @param string $ProviderName <p>Cloud vendor name.</p>
     * @param string $CloudAccountID <p>Cloud Account ID</p>
     * @param string $CloudAccountName <p>Cloud account name</p>
     * @param string $AssetID <p>Asset ID.</p>
     * @param string $AssetName <p>Asset name</p>
     * @param string $AssetType <p>Asset type</p>
     * @param string $AssetTypeName <p>Asset type name</p>
     * @param array $Tags <p>Asset tag.</p>
     * @param string $Address <p>Public network address</p>
     * @param string $AddressType <p>Public address type</p>
     * @param array $ResolvedAddress <p>Resolution address</p>
     * @param string $Region <p>Region.</p>
     * @param integer $ProtectStatus <p>Protection status</p>
     * @param integer $RiskCount <p>Number of risks</p>
     * @param integer $AlarmCount <p>Number of alarms.</p>
     * @param string $CreatedAt <p>Instance creation time</p>
     * @param string $FirstSyncTime <p>First sync time</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param integer $CriticalRiskCount <p>Total number of severe risks</p>
     * @param integer $HighRiskCount <p>Total number of high risks</p>
     * @param integer $MediumRiskCount <p>Total number of medium risks</p>
     * @param integer $LowRiskCount <p>Total number of low risks</p>
     * @param string $AssetRID <p>Unique asset ID</p>
     * @param array $CustomTags <p>CSC tag</p>
     * @param string $AssetTypeIconURL <p>Asset type icon</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("CloudAccountID",$param) and $param["CloudAccountID"] !== null) {
            $this->CloudAccountID = $param["CloudAccountID"];
        }

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("ResolvedAddress",$param) and $param["ResolvedAddress"] !== null) {
            $this->ResolvedAddress = $param["ResolvedAddress"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProtectStatus",$param) and $param["ProtectStatus"] !== null) {
            $this->ProtectStatus = $param["ProtectStatus"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("FirstSyncTime",$param) and $param["FirstSyncTime"] !== null) {
            $this->FirstSyncTime = $param["FirstSyncTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CriticalRiskCount",$param) and $param["CriticalRiskCount"] !== null) {
            $this->CriticalRiskCount = $param["CriticalRiskCount"];
        }

        if (array_key_exists("HighRiskCount",$param) and $param["HighRiskCount"] !== null) {
            $this->HighRiskCount = $param["HighRiskCount"];
        }

        if (array_key_exists("MediumRiskCount",$param) and $param["MediumRiskCount"] !== null) {
            $this->MediumRiskCount = $param["MediumRiskCount"];
        }

        if (array_key_exists("LowRiskCount",$param) and $param["LowRiskCount"] !== null) {
            $this->LowRiskCount = $param["LowRiskCount"];
        }

        if (array_key_exists("AssetRID",$param) and $param["AssetRID"] !== null) {
            $this->AssetRID = $param["AssetRID"];
        }

        if (array_key_exists("CustomTags",$param) and $param["CustomTags"] !== null) {
            $this->CustomTags = [];
            foreach ($param["CustomTags"] as $key => $value){
                $obj = new CustomTag();
                $obj->deserialize($value);
                array_push($this->CustomTags, $obj);
            }
        }

        if (array_key_exists("AssetTypeIconURL",$param) and $param["AssetTypeIconURL"] !== null) {
            $this->AssetTypeIconURL = $param["AssetTypeIconURL"];
        }
    }
}
