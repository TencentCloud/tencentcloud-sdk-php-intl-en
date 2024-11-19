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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCrossBorderCompliance request structure.
 *
 * @method string getServiceProvider() Obtain (Exact match) Service provider. Valid values: `UNICOM`.
 * @method void setServiceProvider(string $ServiceProvider) Set (Exact match) Service provider. Valid values: `UNICOM`.
 * @method integer getComplianceId() Obtain (Exact match) ID of compliance review request.
 * @method void setComplianceId(integer $ComplianceId) Set (Exact match) ID of compliance review request.
 * @method string getCompany() Obtain (Fuzzy match) Company name.
 * @method void setCompany(string $Company) Set (Fuzzy match) Company name.
 * @method string getUniformSocialCreditCode() Obtain (Fuzzy match) Unified Social Credit Code.
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) Set (Fuzzy match) Unified Social Credit Code.
 * @method string getLegalPerson() Obtain (Fuzzy match) Legal person.
 * @method void setLegalPerson(string $LegalPerson) Set (Fuzzy match) Legal person.
 * @method string getLegalPersonId() Obtain 
 * @method void setLegalPersonId(string $LegalPersonId) Set 
 * @method string getIssuingAuthority() Obtain (Fuzzy match) Issuing authority.
 * @method void setIssuingAuthority(string $IssuingAuthority) Set (Fuzzy match) Issuing authority.
 * @method string getBusinessAddress() Obtain (Fuzzy match) Business address.
 * @method void setBusinessAddress(string $BusinessAddress) Set (Fuzzy match) Business address.
 * @method integer getPostCode() Obtain (Exact match) Zip code.
 * @method void setPostCode(integer $PostCode) Set (Exact match) Zip code.
 * @method string getManager() Obtain (Fuzzy match) Operator.
 * @method void setManager(string $Manager) Set (Fuzzy match) Operator.
 * @method string getManagerId() Obtain (Exact match) Operator ID card number.
 * @method void setManagerId(string $ManagerId) Set (Exact match) Operator ID card number.
 * @method string getManagerAddress() Obtain (Fuzzy match) Operator address.
 * @method void setManagerAddress(string $ManagerAddress) Set (Fuzzy match) Operator address.
 * @method string getManagerTelephone() Obtain (Exact match) Operator phone number.
 * @method void setManagerTelephone(string $ManagerTelephone) Set (Exact match) Operator phone number.
 * @method string getEmail() Obtain (Exact match) Email.
 * @method void setEmail(string $Email) Set (Exact match) Email.
 * @method string getServiceStartDate() Obtain (Exact match) Service start date, such as `2020-07-28`.
 * @method void setServiceStartDate(string $ServiceStartDate) Set (Exact match) Service start date, such as `2020-07-28`.
 * @method string getServiceEndDate() Obtain (Exact match) Service end date, such as `2020-07-28`.
 * @method void setServiceEndDate(string $ServiceEndDate) Set (Exact match) Service end date, such as `2020-07-28`.
 * @method string getState() Obtain (Exact match) Status. Valid values: `PENDING`, `APPROVED`, and `DENY`.
 * @method void setState(string $State) Set (Exact match) Status. Valid values: `PENDING`, `APPROVED`, and `DENY`.
 * @method integer getOffset() Obtain The offset value
 * @method void setOffset(integer $Offset) Set The offset value
 * @method integer getLimit() Obtain Quantity of returned items
 * @method void setLimit(integer $Limit) Set Quantity of returned items
 */
class DescribeCrossBorderComplianceRequest extends AbstractModel
{
    /**
     * @var string (Exact match) Service provider. Valid values: `UNICOM`.
     */
    public $ServiceProvider;

    /**
     * @var integer (Exact match) ID of compliance review request.
     */
    public $ComplianceId;

    /**
     * @var string (Fuzzy match) Company name.
     */
    public $Company;

    /**
     * @var string (Fuzzy match) Unified Social Credit Code.
     */
    public $UniformSocialCreditCode;

    /**
     * @var string (Fuzzy match) Legal person.
     */
    public $LegalPerson;

    /**
     * @var string 
     */
    public $LegalPersonId;

    /**
     * @var string (Fuzzy match) Issuing authority.
     */
    public $IssuingAuthority;

    /**
     * @var string (Fuzzy match) Business address.
     */
    public $BusinessAddress;

    /**
     * @var integer (Exact match) Zip code.
     */
    public $PostCode;

    /**
     * @var string (Fuzzy match) Operator.
     */
    public $Manager;

    /**
     * @var string (Exact match) Operator ID card number.
     */
    public $ManagerId;

    /**
     * @var string (Fuzzy match) Operator address.
     */
    public $ManagerAddress;

    /**
     * @var string (Exact match) Operator phone number.
     */
    public $ManagerTelephone;

    /**
     * @var string (Exact match) Email.
     */
    public $Email;

    /**
     * @var string (Exact match) Service start date, such as `2020-07-28`.
     */
    public $ServiceStartDate;

    /**
     * @var string (Exact match) Service end date, such as `2020-07-28`.
     */
    public $ServiceEndDate;

    /**
     * @var string (Exact match) Status. Valid values: `PENDING`, `APPROVED`, and `DENY`.
     */
    public $State;

    /**
     * @var integer The offset value
     */
    public $Offset;

    /**
     * @var integer Quantity of returned items
     */
    public $Limit;

    /**
     * @param string $ServiceProvider (Exact match) Service provider. Valid values: `UNICOM`.
     * @param integer $ComplianceId (Exact match) ID of compliance review request.
     * @param string $Company (Fuzzy match) Company name.
     * @param string $UniformSocialCreditCode (Fuzzy match) Unified Social Credit Code.
     * @param string $LegalPerson (Fuzzy match) Legal person.
     * @param string $LegalPersonId 
     * @param string $IssuingAuthority (Fuzzy match) Issuing authority.
     * @param string $BusinessAddress (Fuzzy match) Business address.
     * @param integer $PostCode (Exact match) Zip code.
     * @param string $Manager (Fuzzy match) Operator.
     * @param string $ManagerId (Exact match) Operator ID card number.
     * @param string $ManagerAddress (Fuzzy match) Operator address.
     * @param string $ManagerTelephone (Exact match) Operator phone number.
     * @param string $Email (Exact match) Email.
     * @param string $ServiceStartDate (Exact match) Service start date, such as `2020-07-28`.
     * @param string $ServiceEndDate (Exact match) Service end date, such as `2020-07-28`.
     * @param string $State (Exact match) Status. Valid values: `PENDING`, `APPROVED`, and `DENY`.
     * @param integer $Offset The offset value
     * @param integer $Limit Quantity of returned items
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
        if (array_key_exists("ServiceProvider",$param) and $param["ServiceProvider"] !== null) {
            $this->ServiceProvider = $param["ServiceProvider"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("Company",$param) and $param["Company"] !== null) {
            $this->Company = $param["Company"];
        }

        if (array_key_exists("UniformSocialCreditCode",$param) and $param["UniformSocialCreditCode"] !== null) {
            $this->UniformSocialCreditCode = $param["UniformSocialCreditCode"];
        }

        if (array_key_exists("LegalPerson",$param) and $param["LegalPerson"] !== null) {
            $this->LegalPerson = $param["LegalPerson"];
        }

        if (array_key_exists("LegalPersonId",$param) and $param["LegalPersonId"] !== null) {
            $this->LegalPersonId = $param["LegalPersonId"];
        }

        if (array_key_exists("IssuingAuthority",$param) and $param["IssuingAuthority"] !== null) {
            $this->IssuingAuthority = $param["IssuingAuthority"];
        }

        if (array_key_exists("BusinessAddress",$param) and $param["BusinessAddress"] !== null) {
            $this->BusinessAddress = $param["BusinessAddress"];
        }

        if (array_key_exists("PostCode",$param) and $param["PostCode"] !== null) {
            $this->PostCode = $param["PostCode"];
        }

        if (array_key_exists("Manager",$param) and $param["Manager"] !== null) {
            $this->Manager = $param["Manager"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("ManagerAddress",$param) and $param["ManagerAddress"] !== null) {
            $this->ManagerAddress = $param["ManagerAddress"];
        }

        if (array_key_exists("ManagerTelephone",$param) and $param["ManagerTelephone"] !== null) {
            $this->ManagerTelephone = $param["ManagerTelephone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("ServiceStartDate",$param) and $param["ServiceStartDate"] !== null) {
            $this->ServiceStartDate = $param["ServiceStartDate"];
        }

        if (array_key_exists("ServiceEndDate",$param) and $param["ServiceEndDate"] !== null) {
            $this->ServiceEndDate = $param["ServiceEndDate"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
