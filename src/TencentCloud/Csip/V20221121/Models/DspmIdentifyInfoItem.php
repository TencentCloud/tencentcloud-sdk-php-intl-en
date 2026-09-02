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
 * Dspm identity information
 *
 * @method string getIdentifyId() Obtain Identity id.
 * @method void setIdentifyId(string $IdentifyId) Set Identity id.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method integer getIdentifyType() Obtain Identity type. 0: undefined; 2: long-term identity; 3: temporary identity
 * @method void setIdentifyType(integer $IdentifyType) Set Identity type. 0: undefined; 2: long-term identity; 3: temporary identity
 * @method DspmUinUser getOwnerUin() Obtain User associated with the cloud account uin.
 * @method void setOwnerUin(DspmUinUser $OwnerUin) Set User associated with the cloud account uin.
 * @method DspmUinUser getCreatorUin() Obtain Creator account uin user.
 * @method void setCreatorUin(DspmUinUser $CreatorUin) Set Creator account uin user.
 * @method integer getAssetCount() Obtain Associated assets.
 * @method void setAssetCount(integer $AssetCount) Set Associated assets.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method integer getStatus() Obtain Status. 0: inactive; 1: active
 * @method void setStatus(integer $Status) Set Status. 0: inactive; 1: active
 * @method DspmPersonUser getPerson() Obtain User information to which it belongs
 * @method void setPerson(DspmPersonUser $Person) Set User information to which it belongs
 * @method DspmIdentifyAssetStatistic getAssetStatistic() Obtain Associate statistical information of data assets.
 * @method void setAssetStatistic(DspmIdentifyAssetStatistic $AssetStatistic) Set Associate statistical information of data assets.
 * @method DspmRiskCount getRiskCount() Obtain Risk statistics
 * @method void setRiskCount(DspmRiskCount $RiskCount) Set Risk statistics
 * @method string getSafetyAdvice() Obtain Security recommendation. Resolve immediate problem-solving Reinforcement None no abnormality detected
 * @method void setSafetyAdvice(string $SafetyAdvice) Set Security recommendation. Resolve immediate problem-solving Reinforcement None no abnormality detected
 * @method integer getAppId() Obtain app id of the account to which the asset belongs
 * @method void setAppId(integer $AppId) Set app id of the account to which the asset belongs
 * @method string getNickName() Obtain Account nickname
 * @method void setNickName(string $NickName) Set Account nickname
 * @method string getUin() Obtain Account uin of the asset owner
 * @method void setUin(string $Uin) Set Account uin of the asset owner
 */
class DspmIdentifyInfoItem extends AbstractModel
{
    /**
     * @var string Identity id.
     */
    public $IdentifyId;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var integer Identity type. 0: undefined; 2: long-term identity; 3: temporary identity
     */
    public $IdentifyType;

    /**
     * @var DspmUinUser User associated with the cloud account uin.
     */
    public $OwnerUin;

    /**
     * @var DspmUinUser Creator account uin user.
     */
    public $CreatorUin;

    /**
     * @var integer Associated assets.
     */
    public $AssetCount;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Status. 0: inactive; 1: active
     */
    public $Status;

    /**
     * @var DspmPersonUser User information to which it belongs
     */
    public $Person;

    /**
     * @var DspmIdentifyAssetStatistic Associate statistical information of data assets.
     */
    public $AssetStatistic;

    /**
     * @var DspmRiskCount Risk statistics
     */
    public $RiskCount;

    /**
     * @var string Security recommendation. Resolve immediate problem-solving Reinforcement None no abnormality detected
     */
    public $SafetyAdvice;

    /**
     * @var integer app id of the account to which the asset belongs
     */
    public $AppId;

    /**
     * @var string Account nickname
     */
    public $NickName;

    /**
     * @var string Account uin of the asset owner
     */
    public $Uin;

    /**
     * @param string $IdentifyId Identity id.
     * @param string $Remark Remarks.
     * @param integer $IdentifyType Identity type. 0: undefined; 2: long-term identity; 3: temporary identity
     * @param DspmUinUser $OwnerUin User associated with the cloud account uin.
     * @param DspmUinUser $CreatorUin Creator account uin user.
     * @param integer $AssetCount Associated assets.
     * @param string $CreateTime Creation time.
     * @param integer $Status Status. 0: inactive; 1: active
     * @param DspmPersonUser $Person User information to which it belongs
     * @param DspmIdentifyAssetStatistic $AssetStatistic Associate statistical information of data assets.
     * @param DspmRiskCount $RiskCount Risk statistics
     * @param string $SafetyAdvice Security recommendation. Resolve immediate problem-solving Reinforcement None no abnormality detected
     * @param integer $AppId app id of the account to which the asset belongs
     * @param string $NickName Account nickname
     * @param string $Uin Account uin of the asset owner
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
        if (array_key_exists("IdentifyId",$param) and $param["IdentifyId"] !== null) {
            $this->IdentifyId = $param["IdentifyId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = new DspmUinUser();
            $this->OwnerUin->deserialize($param["OwnerUin"]);
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = new DspmUinUser();
            $this->CreatorUin->deserialize($param["CreatorUin"]);
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("AssetStatistic",$param) and $param["AssetStatistic"] !== null) {
            $this->AssetStatistic = new DspmIdentifyAssetStatistic();
            $this->AssetStatistic->deserialize($param["AssetStatistic"]);
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = new DspmRiskCount();
            $this->RiskCount->deserialize($param["RiskCount"]);
        }

        if (array_key_exists("SafetyAdvice",$param) and $param["SafetyAdvice"] !== null) {
            $this->SafetyAdvice = $param["SafetyAdvice"];
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
