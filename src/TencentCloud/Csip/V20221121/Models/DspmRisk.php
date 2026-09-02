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
 * Dspm risk
 *
 * @method string getRiskId() Obtain <p>Risk id</p>
 * @method void setRiskId(string $RiskId) Set <p>Risk id</p>
 * @method string getRiskName() Obtain <p>Risk name</p>
 * @method void setRiskName(string $RiskName) Set <p>Risk name</p>
 * @method string getRiskNameEn() Obtain <p>Risk English name</p>
 * @method void setRiskNameEn(string $RiskNameEn) Set <p>Risk English name</p>
 * @method string getStrategyType() Obtain <p>Policy type</p>
 * @method void setStrategyType(string $StrategyType) Set <p>Policy type</p>
 * @method string getStrategyCategory() Obtain <p>Policy category</p>
 * @method void setStrategyCategory(string $StrategyCategory) Set <p>Policy category</p>
 * @method string getRiskLevel() Obtain <p>Risk level.</p>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Risk level.</p>
 * @method string getAssetId() Obtain <p>Asset instance Id</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset instance Id</p>
 * @method string getAssetType() Obtain <p>Asset type</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p>
 * @method string getAssetName() Obtain <p>Asset name</p>
 * @method void setAssetName(string $AssetName) Set <p>Asset name</p>
 * @method string getAssetRegion() Obtain <p>Region.</p>
 * @method void setAssetRegion(string $AssetRegion) Set <p>Region.</p>
 * @method string getAccount() Obtain <p>Asset account</p>
 * @method void setAccount(string $Account) Set <p>Asset account</p>
 * @method string getHost() Obtain <p>Host address</p>
 * @method void setHost(string $Host) Set <p>Host address</p>
 * @method integer getAccountType() Obtain <p>Account type</p>
 * @method void setAccountType(integer $AccountType) Set <p>Account type</p>
 * @method string getDetectTime() Obtain <p>Risk detection time</p>
 * @method void setDetectTime(string $DetectTime) Set <p>Risk detection time</p>
 * @method integer getStatus() Obtain <p>Processing status. 0: unprocessed; 1: processed; 2: ignored</p>
 * @method void setStatus(integer $Status) Set <p>Processing status. 0: unprocessed; 1: processed; 2: ignored</p>
 * @method string getIdentifyId() Obtain <p>Identity id</p>
 * @method void setIdentifyId(string $IdentifyId) Set <p>Identity id</p>
 * @method DspmUinUser getOwnerUin() Obtain <p>User belonging to cloud account uin</p>
 * @method void setOwnerUin(DspmUinUser $OwnerUin) Set <p>User belonging to cloud account uin</p>
 * @method DspmPersonUser getPerson() Obtain <p>Belongs to individual user information</p>
 * @method void setPerson(DspmPersonUser $Person) Set <p>Belongs to individual user information</p>
 * @method string getRiskData() Obtain <p>Risk data.</p>
 * @method void setRiskData(string $RiskData) Set <p>Risk data.</p>
 * @method integer getIsAssetManager() Obtain <p>Whether the user is an asset administrator</p>
 * @method void setIsAssetManager(integer $IsAssetManager) Set <p>Whether the user is an asset administrator</p>
 * @method string getDataBeginTime() Obtain <p>Data start time</p>
 * @method void setDataBeginTime(string $DataBeginTime) Set <p>Data start time</p>
 * @method string getDataEndTime() Obtain <p>Data end time</p>
 * @method void setDataEndTime(string $DataEndTime) Set <p>Data end time</p>
 * @method string getRiskType() Obtain <p>Risk type. risk: Risk; alarm: Alarm.</p>
 * @method void setRiskType(string $RiskType) Set <p>Risk type. risk: Risk; alarm: Alarm.</p>
 * @method integer getAppId() Obtain <p>app id of the asset ownership account</p>
 * @method void setAppId(integer $AppId) Set <p>app id of the asset ownership account</p>
 * @method string getNickName() Obtain <p>Account nickname</p>
 * @method void setNickName(string $NickName) Set <p>Account nickname</p>
 * @method string getUin() Obtain <p>uin of the account to which the asset belongs</p>
 * @method void setUin(string $Uin) Set <p>uin of the account to which the asset belongs</p>
 * @method integer getClusterType() Obtain <p>Cluster type of MongoDb. For non-MongoDb assets, fixed to 0.</p><p>Enumeration values:</p><ul><li>0: replica set</li><li>1: sharding</li></ul><p>Default value: 0</p>
 * @method void setClusterType(integer $ClusterType) Set <p>Cluster type of MongoDb. For non-MongoDb assets, fixed to 0.</p><p>Enumeration values:</p><ul><li>0: replica set</li><li>1: sharding</li></ul><p>Default value: 0</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 */
class DspmRisk extends AbstractModel
{
    /**
     * @var string <p>Risk id</p>
     */
    public $RiskId;

    /**
     * @var string <p>Risk name</p>
     */
    public $RiskName;

    /**
     * @var string <p>Risk English name</p>
     */
    public $RiskNameEn;

    /**
     * @var string <p>Policy type</p>
     */
    public $StrategyType;

    /**
     * @var string <p>Policy category</p>
     */
    public $StrategyCategory;

    /**
     * @var string <p>Risk level.</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Asset instance Id</p>
     */
    public $AssetId;

    /**
     * @var string <p>Asset type</p>
     */
    public $AssetType;

    /**
     * @var string <p>Asset name</p>
     */
    public $AssetName;

    /**
     * @var string <p>Region.</p>
     */
    public $AssetRegion;

    /**
     * @var string <p>Asset account</p>
     */
    public $Account;

    /**
     * @var string <p>Host address</p>
     */
    public $Host;

    /**
     * @var integer <p>Account type</p>
     */
    public $AccountType;

    /**
     * @var string <p>Risk detection time</p>
     */
    public $DetectTime;

    /**
     * @var integer <p>Processing status. 0: unprocessed; 1: processed; 2: ignored</p>
     */
    public $Status;

    /**
     * @var string <p>Identity id</p>
     */
    public $IdentifyId;

    /**
     * @var DspmUinUser <p>User belonging to cloud account uin</p>
     */
    public $OwnerUin;

    /**
     * @var DspmPersonUser <p>Belongs to individual user information</p>
     */
    public $Person;

    /**
     * @var string <p>Risk data.</p>
     */
    public $RiskData;

    /**
     * @var integer <p>Whether the user is an asset administrator</p>
     */
    public $IsAssetManager;

    /**
     * @var string <p>Data start time</p>
     */
    public $DataBeginTime;

    /**
     * @var string <p>Data end time</p>
     */
    public $DataEndTime;

    /**
     * @var string <p>Risk type. risk: Risk; alarm: Alarm.</p>
     */
    public $RiskType;

    /**
     * @var integer <p>app id of the asset ownership account</p>
     */
    public $AppId;

    /**
     * @var string <p>Account nickname</p>
     */
    public $NickName;

    /**
     * @var string <p>uin of the account to which the asset belongs</p>
     */
    public $Uin;

    /**
     * @var integer <p>Cluster type of MongoDb. For non-MongoDb assets, fixed to 0.</p><p>Enumeration values:</p><ul><li>0: replica set</li><li>1: sharding</li></ul><p>Default value: 0</p>
     */
    public $ClusterType;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @param string $RiskId <p>Risk id</p>
     * @param string $RiskName <p>Risk name</p>
     * @param string $RiskNameEn <p>Risk English name</p>
     * @param string $StrategyType <p>Policy type</p>
     * @param string $StrategyCategory <p>Policy category</p>
     * @param string $RiskLevel <p>Risk level.</p>
     * @param string $AssetId <p>Asset instance Id</p>
     * @param string $AssetType <p>Asset type</p>
     * @param string $AssetName <p>Asset name</p>
     * @param string $AssetRegion <p>Region.</p>
     * @param string $Account <p>Asset account</p>
     * @param string $Host <p>Host address</p>
     * @param integer $AccountType <p>Account type</p>
     * @param string $DetectTime <p>Risk detection time</p>
     * @param integer $Status <p>Processing status. 0: unprocessed; 1: processed; 2: ignored</p>
     * @param string $IdentifyId <p>Identity id</p>
     * @param DspmUinUser $OwnerUin <p>User belonging to cloud account uin</p>
     * @param DspmPersonUser $Person <p>Belongs to individual user information</p>
     * @param string $RiskData <p>Risk data.</p>
     * @param integer $IsAssetManager <p>Whether the user is an asset administrator</p>
     * @param string $DataBeginTime <p>Data start time</p>
     * @param string $DataEndTime <p>Data end time</p>
     * @param string $RiskType <p>Risk type. risk: Risk; alarm: Alarm.</p>
     * @param integer $AppId <p>app id of the asset ownership account</p>
     * @param string $NickName <p>Account nickname</p>
     * @param string $Uin <p>uin of the account to which the asset belongs</p>
     * @param integer $ClusterType <p>Cluster type of MongoDb. For non-MongoDb assets, fixed to 0.</p><p>Enumeration values:</p><ul><li>0: replica set</li><li>1: sharding</li></ul><p>Default value: 0</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
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
        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskNameEn",$param) and $param["RiskNameEn"] !== null) {
            $this->RiskNameEn = $param["RiskNameEn"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("StrategyCategory",$param) and $param["StrategyCategory"] !== null) {
            $this->StrategyCategory = $param["StrategyCategory"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetRegion",$param) and $param["AssetRegion"] !== null) {
            $this->AssetRegion = $param["AssetRegion"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IdentifyId",$param) and $param["IdentifyId"] !== null) {
            $this->IdentifyId = $param["IdentifyId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = new DspmUinUser();
            $this->OwnerUin->deserialize($param["OwnerUin"]);
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("RiskData",$param) and $param["RiskData"] !== null) {
            $this->RiskData = $param["RiskData"];
        }

        if (array_key_exists("IsAssetManager",$param) and $param["IsAssetManager"] !== null) {
            $this->IsAssetManager = $param["IsAssetManager"];
        }

        if (array_key_exists("DataBeginTime",$param) and $param["DataBeginTime"] !== null) {
            $this->DataBeginTime = $param["DataBeginTime"];
        }

        if (array_key_exists("DataEndTime",$param) and $param["DataEndTime"] !== null) {
            $this->DataEndTime = $param["DataEndTime"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
