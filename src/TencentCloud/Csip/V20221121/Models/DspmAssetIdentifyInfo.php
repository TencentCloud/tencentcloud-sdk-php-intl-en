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
 * dspm Asset Data identification statistical information
 *
 * @method string getAssetId() Obtain <p>Asset instance id</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset instance id</p>
 * @method string getAssetName() Obtain <p>Asset name</p>
 * @method void setAssetName(string $AssetName) Set <p>Asset name</p>
 * @method string getAssetType() Obtain <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: MySQL</li><li>mariadb: MariaDB</li><li>mongodb: MongoDB</li></ul>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: MySQL</li><li>mariadb: MariaDB</li><li>mongodb: MongoDB</li></ul>
 * @method integer getDetectedDbCount() Obtain <p>Number of detected databases</p>
 * @method void setDetectedDbCount(integer $DetectedDbCount) Set <p>Number of detected databases</p>
 * @method integer getDetectedTableCount() Obtain <p>Number of detected tables</p>
 * @method void setDetectedTableCount(integer $DetectedTableCount) Set <p>Number of detected tables</p>
 * @method array getRuleIds() Obtain <p>Data item id set</p>
 * @method void setRuleIds(array $RuleIds) Set <p>Data item id set</p>
 * @method array getRuleNames() Obtain <p>Collection of data item names.</p>
 * @method void setRuleNames(array $RuleNames) Set <p>Collection of data item names.</p>
 * @method array getCategoryIds() Obtain <p>Category id set</p>
 * @method void setCategoryIds(array $CategoryIds) Set <p>Category id set</p>
 * @method array getCategoryNames() Obtain <p>Collection of category names</p>
 * @method void setCategoryNames(array $CategoryNames) Set <p>Collection of category names</p>
 * @method integer getLevelId() Obtain <p>Highest level ID</p>
 * @method void setLevelId(integer $LevelId) Set <p>Highest level ID</p>
 * @method string getLevelName() Obtain <p>Highest level name</p>
 * @method void setLevelName(string $LevelName) Set <p>Highest level name</p>
 * @method integer getLevelScore() Obtain <p>Sensitivity level</p>
 * @method void setLevelScore(integer $LevelScore) Set <p>Sensitivity level</p>
 * @method string getDetectedTime() Obtain <p>Detection time</p>
 * @method void setDetectedTime(string $DetectedTime) Set <p>Detection time</p>
 * @method array getCategoryDetails() Obtain <p>Category details</p>
 * @method void setCategoryDetails(array $CategoryDetails) Set <p>Category details</p>
 * @method integer getAppId() Obtain <p>APPID</p>
 * @method void setAppId(integer $AppId) Set <p>APPID</p>
 * @method string getNickName() Obtain <p>Account name</p>
 * @method void setNickName(string $NickName) Set <p>Account name</p>
 * @method string getUin() Obtain <p>Account ID</p>
 * @method void setUin(string $Uin) Set <p>Account ID</p>
 */
class DspmAssetIdentifyInfo extends AbstractModel
{
    /**
     * @var string <p>Asset instance id</p>
     */
    public $AssetId;

    /**
     * @var string <p>Asset name</p>
     */
    public $AssetName;

    /**
     * @var string <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: MySQL</li><li>mariadb: MariaDB</li><li>mongodb: MongoDB</li></ul>
     */
    public $AssetType;

    /**
     * @var integer <p>Number of detected databases</p>
     */
    public $DetectedDbCount;

    /**
     * @var integer <p>Number of detected tables</p>
     */
    public $DetectedTableCount;

    /**
     * @var array <p>Data item id set</p>
     */
    public $RuleIds;

    /**
     * @var array <p>Collection of data item names.</p>
     */
    public $RuleNames;

    /**
     * @var array <p>Category id set</p>
     */
    public $CategoryIds;

    /**
     * @var array <p>Collection of category names</p>
     */
    public $CategoryNames;

    /**
     * @var integer <p>Highest level ID</p>
     */
    public $LevelId;

    /**
     * @var string <p>Highest level name</p>
     */
    public $LevelName;

    /**
     * @var integer <p>Sensitivity level</p>
     */
    public $LevelScore;

    /**
     * @var string <p>Detection time</p>
     */
    public $DetectedTime;

    /**
     * @var array <p>Category details</p>
     */
    public $CategoryDetails;

    /**
     * @var integer <p>APPID</p>
     */
    public $AppId;

    /**
     * @var string <p>Account name</p>
     */
    public $NickName;

    /**
     * @var string <p>Account ID</p>
     */
    public $Uin;

    /**
     * @param string $AssetId <p>Asset instance id</p>
     * @param string $AssetName <p>Asset name</p>
     * @param string $AssetType <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: MySQL</li><li>mariadb: MariaDB</li><li>mongodb: MongoDB</li></ul>
     * @param integer $DetectedDbCount <p>Number of detected databases</p>
     * @param integer $DetectedTableCount <p>Number of detected tables</p>
     * @param array $RuleIds <p>Data item id set</p>
     * @param array $RuleNames <p>Collection of data item names.</p>
     * @param array $CategoryIds <p>Category id set</p>
     * @param array $CategoryNames <p>Collection of category names</p>
     * @param integer $LevelId <p>Highest level ID</p>
     * @param string $LevelName <p>Highest level name</p>
     * @param integer $LevelScore <p>Sensitivity level</p>
     * @param string $DetectedTime <p>Detection time</p>
     * @param array $CategoryDetails <p>Category details</p>
     * @param integer $AppId <p>APPID</p>
     * @param string $NickName <p>Account name</p>
     * @param string $Uin <p>Account ID</p>
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("DetectedDbCount",$param) and $param["DetectedDbCount"] !== null) {
            $this->DetectedDbCount = $param["DetectedDbCount"];
        }

        if (array_key_exists("DetectedTableCount",$param) and $param["DetectedTableCount"] !== null) {
            $this->DetectedTableCount = $param["DetectedTableCount"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("RuleNames",$param) and $param["RuleNames"] !== null) {
            $this->RuleNames = $param["RuleNames"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }

        if (array_key_exists("CategoryNames",$param) and $param["CategoryNames"] !== null) {
            $this->CategoryNames = $param["CategoryNames"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("LevelScore",$param) and $param["LevelScore"] !== null) {
            $this->LevelScore = $param["LevelScore"];
        }

        if (array_key_exists("DetectedTime",$param) and $param["DetectedTime"] !== null) {
            $this->DetectedTime = $param["DetectedTime"];
        }

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new DspmIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
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
    }
}
