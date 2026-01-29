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
 * Access key risk record.
 *
 * @method string getName() Obtain Risk name.
 * @method void setName(string $Name) Set Risk name.
 * @method integer getLevel() Obtain Risk level.
0 - unavailable 1 - Note 2 - low risk 3 - medium risk 4 - high risk 5 - critical.
 * @method void setLevel(integer $Level) Set Risk level.
0 - unavailable 1 - Note 2 - low risk 3 - medium risk 4 - high risk 5 - critical.
 * @method integer getID() Obtain Risk record ID.
 * @method void setID(integer $ID) Set Risk record ID.
 * @method integer getRiskRuleID() Obtain Risk rule ID.
 * @method void setRiskRuleID(integer $RiskRuleID) Set Risk rule ID.
 * @method integer getRiskType() Obtain Risk type.
Configuration risk.
 * @method void setRiskType(integer $RiskType) Set Risk type.
Configuration risk.
 * @method string getAccessKey() Obtain Access key.
 * @method void setAccessKey(string $AccessKey) Set Access key.
 * @method integer getAccessKeyID() Obtain Access key ID.
 * @method void setAccessKeyID(integer $AccessKeyID) Set Access key ID.
 * @method string getAccessKeyRemark() Obtain Access key remark.
 * @method void setAccessKeyRemark(string $AccessKeyRemark) Set Access key remark.
 * @method string getRiskTime() Obtain Detection time of risk.
 * @method void setRiskTime(string $RiskTime) Set Detection time of risk.
 * @method integer getStatus() Obtain Risk status.
0 - unprocessed 2 - ignored 3 - converged.
 * @method void setStatus(integer $Status) Set Risk status.
0 - unprocessed 2 - ignored 3 - converged.
 * @method array getTag() Obtain Risk Tag.
 * @method void setTag(array $Tag) Set Risk Tag.
 * @method string getEvidence() Obtain Risk evidence.
 * @method void setEvidence(string $Evidence) Set Risk evidence.
 * @method string getDescription() Obtain Risk description.
 * @method void setDescription(string $Description) Set Risk description.
 * @method string getUin() Obtain Account associate Uin belonging to main account.
 * @method void setUin(string $Uin) Set Account associate Uin belonging to main account.
 * @method string getNickname() Obtain Nickname of the main account.
 * @method void setNickname(string $Nickname) Set Nickname of the main account.
 * @method string getSubUin() Obtain Sub-Account Uin belonging to.
 * @method void setSubUin(string $SubUin) Set Sub-Account Uin belonging to.
 * @method string getSubNickname() Obtain Sub-Account nickname.
 * @method void setSubNickname(string $SubNickname) Set Sub-Account nickname.
 * @method integer getType() Obtain Account type.
0 root account AK 1 sub-account AK.
2 temporary key.
 * @method void setType(integer $Type) Set Account type.
0 root account AK 1 sub-account AK.
2 temporary key.
 * @method integer getCheckStatus() Obtain Detection status.
0: detected.
1 indicates detecting.
 * @method void setCheckStatus(integer $CheckStatus) Set Detection status.
0: detected.
1 indicates detecting.
 * @method integer getAppID() Obtain App ID
 * @method void setAppID(integer $AppID) Set App ID
 * @method string getQueryParam() Obtain Query parameter corresponding to the risk.
 * @method void setQueryParam(string $QueryParam) Set Query parameter corresponding to the risk.
 * @method integer getCloudType() Obtain Cloud type 0 for tencent cloud 4 for alibaba cloud.
 * @method void setCloudType(integer $CloudType) Set Cloud type 0 for tencent cloud 4 for alibaba cloud.
 * @method array getRelatedAK() Obtain Related AK list, including AK name and remark.
 * @method void setRelatedAK(array $RelatedAK) Set Related AK list, including AK name and remark.
 */
class AccessKeyRisk extends AbstractModel
{
    /**
     * @var string Risk name.
     */
    public $Name;

    /**
     * @var integer Risk level.
0 - unavailable 1 - Note 2 - low risk 3 - medium risk 4 - high risk 5 - critical.
     */
    public $Level;

    /**
     * @var integer Risk record ID.
     */
    public $ID;

    /**
     * @var integer Risk rule ID.
     */
    public $RiskRuleID;

    /**
     * @var integer Risk type.
Configuration risk.
     */
    public $RiskType;

    /**
     * @var string Access key.
     */
    public $AccessKey;

    /**
     * @var integer Access key ID.
     */
    public $AccessKeyID;

    /**
     * @var string Access key remark.
     */
    public $AccessKeyRemark;

    /**
     * @var string Detection time of risk.
     */
    public $RiskTime;

    /**
     * @var integer Risk status.
0 - unprocessed 2 - ignored 3 - converged.
     */
    public $Status;

    /**
     * @var array Risk Tag.
     */
    public $Tag;

    /**
     * @var string Risk evidence.
     */
    public $Evidence;

    /**
     * @var string Risk description.
     */
    public $Description;

    /**
     * @var string Account associate Uin belonging to main account.
     */
    public $Uin;

    /**
     * @var string Nickname of the main account.
     */
    public $Nickname;

    /**
     * @var string Sub-Account Uin belonging to.
     */
    public $SubUin;

    /**
     * @var string Sub-Account nickname.
     */
    public $SubNickname;

    /**
     * @var integer Account type.
0 root account AK 1 sub-account AK.
2 temporary key.
     */
    public $Type;

    /**
     * @var integer Detection status.
0: detected.
1 indicates detecting.
     */
    public $CheckStatus;

    /**
     * @var integer App ID
     */
    public $AppID;

    /**
     * @var string Query parameter corresponding to the risk.
     */
    public $QueryParam;

    /**
     * @var integer Cloud type 0 for tencent cloud 4 for alibaba cloud.
     */
    public $CloudType;

    /**
     * @var array Related AK list, including AK name and remark.
     */
    public $RelatedAK;

    /**
     * @param string $Name Risk name.
     * @param integer $Level Risk level.
0 - unavailable 1 - Note 2 - low risk 3 - medium risk 4 - high risk 5 - critical.
     * @param integer $ID Risk record ID.
     * @param integer $RiskRuleID Risk rule ID.
     * @param integer $RiskType Risk type.
Configuration risk.
     * @param string $AccessKey Access key.
     * @param integer $AccessKeyID Access key ID.
     * @param string $AccessKeyRemark Access key remark.
     * @param string $RiskTime Detection time of risk.
     * @param integer $Status Risk status.
0 - unprocessed 2 - ignored 3 - converged.
     * @param array $Tag Risk Tag.
     * @param string $Evidence Risk evidence.
     * @param string $Description Risk description.
     * @param string $Uin Account associate Uin belonging to main account.
     * @param string $Nickname Nickname of the main account.
     * @param string $SubUin Sub-Account Uin belonging to.
     * @param string $SubNickname Sub-Account nickname.
     * @param integer $Type Account type.
0 root account AK 1 sub-account AK.
2 temporary key.
     * @param integer $CheckStatus Detection status.
0: detected.
1 indicates detecting.
     * @param integer $AppID App ID
     * @param string $QueryParam Query parameter corresponding to the risk.
     * @param integer $CloudType Cloud type 0 for tencent cloud 4 for alibaba cloud.
     * @param array $RelatedAK Related AK list, including AK name and remark.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RiskRuleID",$param) and $param["RiskRuleID"] !== null) {
            $this->RiskRuleID = $param["RiskRuleID"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("AccessKeyID",$param) and $param["AccessKeyID"] !== null) {
            $this->AccessKeyID = $param["AccessKeyID"];
        }

        if (array_key_exists("AccessKeyRemark",$param) and $param["AccessKeyRemark"] !== null) {
            $this->AccessKeyRemark = $param["AccessKeyRemark"];
        }

        if (array_key_exists("RiskTime",$param) and $param["RiskTime"] !== null) {
            $this->RiskTime = $param["RiskTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Evidence",$param) and $param["Evidence"] !== null) {
            $this->Evidence = $param["Evidence"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("SubNickname",$param) and $param["SubNickname"] !== null) {
            $this->SubNickname = $param["SubNickname"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("QueryParam",$param) and $param["QueryParam"] !== null) {
            $this->QueryParam = $param["QueryParam"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("RelatedAK",$param) and $param["RelatedAK"] !== null) {
            $this->RelatedAK = [];
            foreach ($param["RelatedAK"] as $key => $value){
                $obj = new AKInfo();
                $obj->deserialize($value);
                array_push($this->RelatedAK, $obj);
            }
        }
    }
}
