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
 * Domain details
 *
 * @method integer getDomainId() Obtain Domain ID
 * @method void setDomainId(integer $DomainId) Set Domain ID
 * @method string getStatus() Obtain Domain status
 * @method void setStatus(string $Status) Set Domain status
 * @method string getGrade() Obtain DNS plan level
 * @method void setGrade(string $Grade) Set DNS plan level
 * @method integer getGroupId() Obtain Domain group ID
 * @method void setGroupId(integer $GroupId) Set Domain group ID
 * @method string getIsMark() Obtain Whether the domain is starred
 * @method void setIsMark(string $IsMark) Set Whether the domain is starred
 * @method integer getTTL() Obtain TTL (DNS record cache time)
 * @method void setTTL(integer $TTL) Set TTL (DNS record cache time)
 * @method string getCnameSpeedup() Obtain Whether CNAME flattening is enabled
 * @method void setCnameSpeedup(string $CnameSpeedup) Set Whether CNAME flattening is enabled
 * @method string getRemark() Obtain Domain remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Domain remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPunycode() Obtain Domain Punycode
 * @method void setPunycode(string $Punycode) Set Domain Punycode
 * @method string getDnsStatus() Obtain DNS status of the domain
 * @method void setDnsStatus(string $DnsStatus) Set DNS status of the domain
 * @method array getDnspodNsList() Obtain NS list of the domain
 * @method void setDnspodNsList(array $DnspodNsList) Set NS list of the domain
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method integer getGradeLevel() Obtain Domain level ID
 * @method void setGradeLevel(integer $GradeLevel) Set Domain level ID
 * @method integer getUserId() Obtain Domain user ID
 * @method void setUserId(integer $UserId) Set Domain user ID
 * @method string getIsVip() Obtain Whether the domain is a VIP domain
 * @method void setIsVip(string $IsVip) Set Whether the domain is a VIP domain
 * @method string getOwner() Obtain Domain owner account
 * @method void setOwner(string $Owner) Set Domain owner account
 * @method string getGradeTitle() Obtain Domain level description
 * @method void setGradeTitle(string $GradeTitle) Set Domain level description
 * @method string getCreatedOn() Obtain Domain creation time
 * @method void setCreatedOn(string $CreatedOn) Set Domain creation time
 * @method string getUpdatedOn() Obtain Last update time
 * @method void setUpdatedOn(string $UpdatedOn) Set Last update time
 * @method string getUin() Obtain Tencent Cloud account `Uin`
 * @method void setUin(string $Uin) Set Tencent Cloud account `Uin`
 * @method array getActualNsList() Obtain NS list actually used by the domain
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActualNsList(array $ActualNsList) Set NS list actually used by the domain
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRecordCount() Obtain Number of domain records
 * @method void setRecordCount(integer $RecordCount) Set Number of domain records
 * @method string getOwnerNick() Obtain Alias of the domain account owner
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerNick(string $OwnerNick) Set Alias of the domain account owner
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var integer Domain ID
     */
    public $DomainId;

    /**
     * @var string Domain status
     */
    public $Status;

    /**
     * @var string DNS plan level
     */
    public $Grade;

    /**
     * @var integer Domain group ID
     */
    public $GroupId;

    /**
     * @var string Whether the domain is starred
     */
    public $IsMark;

    /**
     * @var integer TTL (DNS record cache time)
     */
    public $TTL;

    /**
     * @var string Whether CNAME flattening is enabled
     */
    public $CnameSpeedup;

    /**
     * @var string Domain remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Domain Punycode
     */
    public $Punycode;

    /**
     * @var string DNS status of the domain
     */
    public $DnsStatus;

    /**
     * @var array NS list of the domain
     */
    public $DnspodNsList;

    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var integer Domain level ID
     */
    public $GradeLevel;

    /**
     * @var integer Domain user ID
     */
    public $UserId;

    /**
     * @var string Whether the domain is a VIP domain
     */
    public $IsVip;

    /**
     * @var string Domain owner account
     */
    public $Owner;

    /**
     * @var string Domain level description
     */
    public $GradeTitle;

    /**
     * @var string Domain creation time
     */
    public $CreatedOn;

    /**
     * @var string Last update time
     */
    public $UpdatedOn;

    /**
     * @var string Tencent Cloud account `Uin`
     */
    public $Uin;

    /**
     * @var array NS list actually used by the domain
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActualNsList;

    /**
     * @var integer Number of domain records
     */
    public $RecordCount;

    /**
     * @var string Alias of the domain account owner
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerNick;

    /**
     * @param integer $DomainId Domain ID
     * @param string $Status Domain status
     * @param string $Grade DNS plan level
     * @param integer $GroupId Domain group ID
     * @param string $IsMark Whether the domain is starred
     * @param integer $TTL TTL (DNS record cache time)
     * @param string $CnameSpeedup Whether CNAME flattening is enabled
     * @param string $Remark Domain remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Punycode Domain Punycode
     * @param string $DnsStatus DNS status of the domain
     * @param array $DnspodNsList NS list of the domain
     * @param string $Domain Domain
     * @param integer $GradeLevel Domain level ID
     * @param integer $UserId Domain user ID
     * @param string $IsVip Whether the domain is a VIP domain
     * @param string $Owner Domain owner account
     * @param string $GradeTitle Domain level description
     * @param string $CreatedOn Domain creation time
     * @param string $UpdatedOn Last update time
     * @param string $Uin Tencent Cloud account `Uin`
     * @param array $ActualNsList NS list actually used by the domain
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RecordCount Number of domain records
     * @param string $OwnerNick Alias of the domain account owner
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("IsMark",$param) and $param["IsMark"] !== null) {
            $this->IsMark = $param["IsMark"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("CnameSpeedup",$param) and $param["CnameSpeedup"] !== null) {
            $this->CnameSpeedup = $param["CnameSpeedup"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Punycode",$param) and $param["Punycode"] !== null) {
            $this->Punycode = $param["Punycode"];
        }

        if (array_key_exists("DnsStatus",$param) and $param["DnsStatus"] !== null) {
            $this->DnsStatus = $param["DnsStatus"];
        }

        if (array_key_exists("DnspodNsList",$param) and $param["DnspodNsList"] !== null) {
            $this->DnspodNsList = $param["DnspodNsList"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("GradeLevel",$param) and $param["GradeLevel"] !== null) {
            $this->GradeLevel = $param["GradeLevel"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("GradeTitle",$param) and $param["GradeTitle"] !== null) {
            $this->GradeTitle = $param["GradeTitle"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ActualNsList",$param) and $param["ActualNsList"] !== null) {
            $this->ActualNsList = $param["ActualNsList"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("OwnerNick",$param) and $param["OwnerNick"] !== null) {
            $this->OwnerNick = $param["OwnerNick"];
        }
    }
}
