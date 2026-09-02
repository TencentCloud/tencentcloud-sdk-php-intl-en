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
 * Account dspm information
 *
 * @method integer getAppID() Obtain APPID
 * @method void setAppID(integer $AppID) Set APPID
 * @method string getUin() Obtain UIN
 * @method void setUin(string $Uin) Set UIN
 * @method string getNickName() Obtain Account nickname
 * @method void setNickName(string $NickName) Set Account nickname
 * @method integer getAssetNum() Obtain Number of database assets under the account
 * @method void setAssetNum(integer $AssetNum) Set Number of database assets under the account
 * @method integer getUsedAssetNum() Obtain Number of security analysis database assets enabled under the account
 * @method void setUsedAssetNum(integer $UsedAssetNum) Set Number of security analysis database assets enabled under the account
 * @method integer getIsShared() Obtain Whether it is shared. 1: shared; 2: not shared
 * @method void setIsShared(integer $IsShared) Set Whether it is shared. 1: shared; 2: not shared
 * @method integer getIsSelfBuy() Obtain Whether to purchase separately. 1: separate purchase; 2: not purchased separately
 * @method void setIsSelfBuy(integer $IsSelfBuy) Set Whether to purchase separately. 1: separate purchase; 2: not purchased separately
 * @method integer getShareFromAppID() Obtain Quota source account
 * @method void setShareFromAppID(integer $ShareFromAppID) Set Quota source account
 * @method integer getCloudType() Obtain Cloud type (0: Tencent Cloud; 1: Amazon Web Services; 2: Microsoft Azure; 3: Google Cloud; 4: Alibaba Cloud; 5: Huawei Cloud)
 * @method void setCloudType(integer $CloudType) Set Cloud type (0: Tencent Cloud; 1: Amazon Web Services; 2: Microsoft Azure; 3: Google Cloud; 4: Alibaba Cloud; 5: Huawei Cloud)
 * @method boolean getIsIsolating() Obtain Whether the account is isolated
 * @method void setIsIsolating(boolean $IsIsolating) Set Whether the account is isolated
 * @method boolean getIsDataCleaning() Obtain Whether data clearing is underway
 * @method void setIsDataCleaning(boolean $IsDataCleaning) Set Whether data clearing is underway
 */
class UserDspmInfo extends AbstractModel
{
    /**
     * @var integer APPID
     */
    public $AppID;

    /**
     * @var string UIN
     */
    public $Uin;

    /**
     * @var string Account nickname
     */
    public $NickName;

    /**
     * @var integer Number of database assets under the account
     */
    public $AssetNum;

    /**
     * @var integer Number of security analysis database assets enabled under the account
     */
    public $UsedAssetNum;

    /**
     * @var integer Whether it is shared. 1: shared; 2: not shared
     */
    public $IsShared;

    /**
     * @var integer Whether to purchase separately. 1: separate purchase; 2: not purchased separately
     */
    public $IsSelfBuy;

    /**
     * @var integer Quota source account
     */
    public $ShareFromAppID;

    /**
     * @var integer Cloud type (0: Tencent Cloud; 1: Amazon Web Services; 2: Microsoft Azure; 3: Google Cloud; 4: Alibaba Cloud; 5: Huawei Cloud)
     */
    public $CloudType;

    /**
     * @var boolean Whether the account is isolated
     */
    public $IsIsolating;

    /**
     * @var boolean Whether data clearing is underway
     */
    public $IsDataCleaning;

    /**
     * @param integer $AppID APPID
     * @param string $Uin UIN
     * @param string $NickName Account nickname
     * @param integer $AssetNum Number of database assets under the account
     * @param integer $UsedAssetNum Number of security analysis database assets enabled under the account
     * @param integer $IsShared Whether it is shared. 1: shared; 2: not shared
     * @param integer $IsSelfBuy Whether to purchase separately. 1: separate purchase; 2: not purchased separately
     * @param integer $ShareFromAppID Quota source account
     * @param integer $CloudType Cloud type (0: Tencent Cloud; 1: Amazon Web Services; 2: Microsoft Azure; 3: Google Cloud; 4: Alibaba Cloud; 5: Huawei Cloud)
     * @param boolean $IsIsolating Whether the account is isolated
     * @param boolean $IsDataCleaning Whether data clearing is underway
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

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("AssetNum",$param) and $param["AssetNum"] !== null) {
            $this->AssetNum = $param["AssetNum"];
        }

        if (array_key_exists("UsedAssetNum",$param) and $param["UsedAssetNum"] !== null) {
            $this->UsedAssetNum = $param["UsedAssetNum"];
        }

        if (array_key_exists("IsShared",$param) and $param["IsShared"] !== null) {
            $this->IsShared = $param["IsShared"];
        }

        if (array_key_exists("IsSelfBuy",$param) and $param["IsSelfBuy"] !== null) {
            $this->IsSelfBuy = $param["IsSelfBuy"];
        }

        if (array_key_exists("ShareFromAppID",$param) and $param["ShareFromAppID"] !== null) {
            $this->ShareFromAppID = $param["ShareFromAppID"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("IsIsolating",$param) and $param["IsIsolating"] !== null) {
            $this->IsIsolating = $param["IsIsolating"];
        }

        if (array_key_exists("IsDataCleaning",$param) and $param["IsDataCleaning"] !== null) {
            $this->IsDataCleaning = $param["IsDataCleaning"];
        }
    }
}
