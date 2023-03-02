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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Element in the domain list
 *
 * @method integer getDomainId() Obtain Unique ID assigned to the domain by the system
 * @method void setDomainId(integer $DomainId) Set Unique ID assigned to the domain by the system
 * @method string getName() Obtain Original format of the domain
 * @method void setName(string $Name) Set Original format of the domain
 * @method string getStatus() Obtain Domain status. Valid values: `ENABLE` (normal), `PAUSE` (suspended), `SPAM` (blocked).
 * @method void setStatus(string $Status) Set Domain status. Valid values: `ENABLE` (normal), `PAUSE` (suspended), `SPAM` (blocked).
 * @method integer getTTL() Obtain Default TTL of the default DNS record of the domain
 * @method void setTTL(integer $TTL) Set Default TTL of the default DNS record of the domain
 * @method string getCNAMESpeedup() Obtain Whether CNAME flattening is enabled. Valid values: `ENABLE` (enabled); `DISABLE` (disabled).
 * @method void setCNAMESpeedup(string $CNAMESpeedup) Set Whether CNAME flattening is enabled. Valid values: `ENABLE` (enabled); `DISABLE` (disabled).
 * @method string getDNSStatus() Obtain DNS configuration status. Valid values: `DNSERROR` (error), an empty string (normal).
 * @method void setDNSStatus(string $DNSStatus) Set DNS configuration status. Valid values: `DNSERROR` (error), an empty string (normal).
 * @method string getGrade() Obtain Plan level code of the domain
 * @method void setGrade(string $Grade) Set Plan level code of the domain
 * @method integer getGroupId() Obtain Group ID of the domain
 * @method void setGroupId(integer $GroupId) Set Group ID of the domain
 * @method string getSearchEnginePush() Obtain Whether search engine push optimization is enabled. Valid values: `YES` (yes), `NO` (no).
 * @method void setSearchEnginePush(string $SearchEnginePush) Set Whether search engine push optimization is enabled. Valid values: `YES` (yes), `NO` (no).
 * @method string getRemark() Obtain Domain remarks
 * @method void setRemark(string $Remark) Set Domain remarks
 * @method string getPunycode() Obtain Punycode-encoded domain format
 * @method void setPunycode(string $Punycode) Set Punycode-encoded domain format
 * @method array getEffectiveDNS() Obtain Effective DNS assigned to the domain by the system
 * @method void setEffectiveDNS(array $EffectiveDNS) Set Effective DNS assigned to the domain by the system
 * @method integer getGradeLevel() Obtain Number corresponding to the plan level of the domain
 * @method void setGradeLevel(integer $GradeLevel) Set Number corresponding to the plan level of the domain
 * @method string getGradeTitle() Obtain Plan name
 * @method void setGradeTitle(string $GradeTitle) Set Plan name
 * @method string getIsVip() Obtain Whether it is a paid plan
 * @method void setIsVip(string $IsVip) Set Whether it is a paid plan
 * @method string getVipStartAt() Obtain Activation time of the paid plan
 * @method void setVipStartAt(string $VipStartAt) Set Activation time of the paid plan
 * @method string getVipEndAt() Obtain Expiry time of the paid plan
 * @method void setVipEndAt(string $VipEndAt) Set Expiry time of the paid plan
 * @method string getVipAutoRenew() Obtain Whether VIP automatic renewal is enabled for the domain. Valid values: `YES` (yes); `NO` (no). Default value: `DEFAULT`.
 * @method void setVipAutoRenew(string $VipAutoRenew) Set Whether VIP automatic renewal is enabled for the domain. Valid values: `YES` (yes); `NO` (no). Default value: `DEFAULT`.
 * @method integer getRecordCount() Obtain Number of records under the domain
 * @method void setRecordCount(integer $RecordCount) Set Number of records under the domain
 * @method string getCreatedOn() Obtain Domain adding time
 * @method void setCreatedOn(string $CreatedOn) Set Domain adding time
 * @method string getUpdatedOn() Obtain Domain update time
 * @method void setUpdatedOn(string $UpdatedOn) Set Domain update time
 * @method string getOwner() Obtain Account of the domain
 * @method void setOwner(string $Owner) Set Account of the domain
 */
class DomainListItem extends AbstractModel
{
    /**
     * @var integer Unique ID assigned to the domain by the system
     */
    public $DomainId;

    /**
     * @var string Original format of the domain
     */
    public $Name;

    /**
     * @var string Domain status. Valid values: `ENABLE` (normal), `PAUSE` (suspended), `SPAM` (blocked).
     */
    public $Status;

    /**
     * @var integer Default TTL of the default DNS record of the domain
     */
    public $TTL;

    /**
     * @var string Whether CNAME flattening is enabled. Valid values: `ENABLE` (enabled); `DISABLE` (disabled).
     */
    public $CNAMESpeedup;

    /**
     * @var string DNS configuration status. Valid values: `DNSERROR` (error), an empty string (normal).
     */
    public $DNSStatus;

    /**
     * @var string Plan level code of the domain
     */
    public $Grade;

    /**
     * @var integer Group ID of the domain
     */
    public $GroupId;

    /**
     * @var string Whether search engine push optimization is enabled. Valid values: `YES` (yes), `NO` (no).
     */
    public $SearchEnginePush;

    /**
     * @var string Domain remarks
     */
    public $Remark;

    /**
     * @var string Punycode-encoded domain format
     */
    public $Punycode;

    /**
     * @var array Effective DNS assigned to the domain by the system
     */
    public $EffectiveDNS;

    /**
     * @var integer Number corresponding to the plan level of the domain
     */
    public $GradeLevel;

    /**
     * @var string Plan name
     */
    public $GradeTitle;

    /**
     * @var string Whether it is a paid plan
     */
    public $IsVip;

    /**
     * @var string Activation time of the paid plan
     */
    public $VipStartAt;

    /**
     * @var string Expiry time of the paid plan
     */
    public $VipEndAt;

    /**
     * @var string Whether VIP automatic renewal is enabled for the domain. Valid values: `YES` (yes); `NO` (no). Default value: `DEFAULT`.
     */
    public $VipAutoRenew;

    /**
     * @var integer Number of records under the domain
     */
    public $RecordCount;

    /**
     * @var string Domain adding time
     */
    public $CreatedOn;

    /**
     * @var string Domain update time
     */
    public $UpdatedOn;

    /**
     * @var string Account of the domain
     */
    public $Owner;

    /**
     * @param integer $DomainId Unique ID assigned to the domain by the system
     * @param string $Name Original format of the domain
     * @param string $Status Domain status. Valid values: `ENABLE` (normal), `PAUSE` (suspended), `SPAM` (blocked).
     * @param integer $TTL Default TTL of the default DNS record of the domain
     * @param string $CNAMESpeedup Whether CNAME flattening is enabled. Valid values: `ENABLE` (enabled); `DISABLE` (disabled).
     * @param string $DNSStatus DNS configuration status. Valid values: `DNSERROR` (error), an empty string (normal).
     * @param string $Grade Plan level code of the domain
     * @param integer $GroupId Group ID of the domain
     * @param string $SearchEnginePush Whether search engine push optimization is enabled. Valid values: `YES` (yes), `NO` (no).
     * @param string $Remark Domain remarks
     * @param string $Punycode Punycode-encoded domain format
     * @param array $EffectiveDNS Effective DNS assigned to the domain by the system
     * @param integer $GradeLevel Number corresponding to the plan level of the domain
     * @param string $GradeTitle Plan name
     * @param string $IsVip Whether it is a paid plan
     * @param string $VipStartAt Activation time of the paid plan
     * @param string $VipEndAt Expiry time of the paid plan
     * @param string $VipAutoRenew Whether VIP automatic renewal is enabled for the domain. Valid values: `YES` (yes); `NO` (no). Default value: `DEFAULT`.
     * @param integer $RecordCount Number of records under the domain
     * @param string $CreatedOn Domain adding time
     * @param string $UpdatedOn Domain update time
     * @param string $Owner Account of the domain
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("CNAMESpeedup",$param) and $param["CNAMESpeedup"] !== null) {
            $this->CNAMESpeedup = $param["CNAMESpeedup"];
        }

        if (array_key_exists("DNSStatus",$param) and $param["DNSStatus"] !== null) {
            $this->DNSStatus = $param["DNSStatus"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SearchEnginePush",$param) and $param["SearchEnginePush"] !== null) {
            $this->SearchEnginePush = $param["SearchEnginePush"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Punycode",$param) and $param["Punycode"] !== null) {
            $this->Punycode = $param["Punycode"];
        }

        if (array_key_exists("EffectiveDNS",$param) and $param["EffectiveDNS"] !== null) {
            $this->EffectiveDNS = $param["EffectiveDNS"];
        }

        if (array_key_exists("GradeLevel",$param) and $param["GradeLevel"] !== null) {
            $this->GradeLevel = $param["GradeLevel"];
        }

        if (array_key_exists("GradeTitle",$param) and $param["GradeTitle"] !== null) {
            $this->GradeTitle = $param["GradeTitle"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("VipStartAt",$param) and $param["VipStartAt"] !== null) {
            $this->VipStartAt = $param["VipStartAt"];
        }

        if (array_key_exists("VipEndAt",$param) and $param["VipEndAt"] !== null) {
            $this->VipEndAt = $param["VipEndAt"];
        }

        if (array_key_exists("VipAutoRenew",$param) and $param["VipAutoRenew"] !== null) {
            $this->VipAutoRenew = $param["VipAutoRenew"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }
    }
}
