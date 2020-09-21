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
 * Compliance review request
 *
 * @method string getServiceProvider() Obtain Service provider. Valid values: `UNICOM`.
 * @method void setServiceProvider(string $ServiceProvider) Set Service provider. Valid values: `UNICOM`.
 * @method integer getComplianceId() Obtain ID of compliance review request.
 * @method void setComplianceId(integer $ComplianceId) Set ID of compliance review request.
 * @method string getCompany() Obtain Full company name.
 * @method void setCompany(string $Company) Set Full company name.
 * @method string getUniformSocialCreditCode() Obtain Unified Social Credit Code.
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) Set Unified Social Credit Code.
 * @method string getLegalPerson() Obtain Legal person.
 * @method void setLegalPerson(string $LegalPerson) Set Legal person.
 * @method string getIssuingAuthority() Obtain Issuing authority.
 * @method void setIssuingAuthority(string $IssuingAuthority) Set Issuing authority.
 * @method string getBusinessLicense() Obtain Business license.
 * @method void setBusinessLicense(string $BusinessLicense) Set Business license.
 * @method string getBusinessAddress() Obtain Business address.
 * @method void setBusinessAddress(string $BusinessAddress) Set Business address.
 * @method integer getPostCode() Obtain Zip code.
 * @method void setPostCode(integer $PostCode) Set Zip code.
 * @method string getManager() Obtain Operator.
 * @method void setManager(string $Manager) Set Operator.
 * @method string getManagerId() Obtain Operator ID card number.
 * @method void setManagerId(string $ManagerId) Set Operator ID card number.
 * @method string getManagerIdCard() Obtain Operator ID card.
 * @method void setManagerIdCard(string $ManagerIdCard) Set Operator ID card.
 * @method string getManagerAddress() Obtain Operator address.
 * @method void setManagerAddress(string $ManagerAddress) Set Operator address.
 * @method string getManagerTelephone() Obtain Operator phone number.
 * @method void setManagerTelephone(string $ManagerTelephone) Set Operator phone number.
 * @method string getEmail() Obtain Email.
 * @method void setEmail(string $Email) Set Email.
 * @method string getServiceHandlingForm() Obtain Service handling form.
 * @method void setServiceHandlingForm(string $ServiceHandlingForm) Set Service handling form.
 * @method string getAuthorizationLetter() Obtain Authorization letter.
 * @method void setAuthorizationLetter(string $AuthorizationLetter) Set Authorization letter.
 * @method string getSafetyCommitment() Obtain Information security commitment.
 * @method void setSafetyCommitment(string $SafetyCommitment) Set Information security commitment.
 * @method string getServiceStartDate() Obtain Service start date.
 * @method void setServiceStartDate(string $ServiceStartDate) Set Service start date.
 * @method string getServiceEndDate() Obtain Service end date.
 * @method void setServiceEndDate(string $ServiceEndDate) Set Service end date.
 * @method string getState() Obtain Status. Valid values: `PENDING`, `APPROVED`, and `DENY`.
 * @method void setState(string $State) Set Status. Valid values: `PENDING`, `APPROVED`, and `DENY`.
 * @method string getCreatedTime() Obtain Creation time of the review form.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time of the review form.
 */
class CrossBorderCompliance extends AbstractModel
{
    /**
     * @var string Service provider. Valid values: `UNICOM`.
     */
    public $ServiceProvider;

    /**
     * @var integer ID of compliance review request.
     */
    public $ComplianceId;

    /**
     * @var string Full company name.
     */
    public $Company;

    /**
     * @var string Unified Social Credit Code.
     */
    public $UniformSocialCreditCode;

    /**
     * @var string Legal person.
     */
    public $LegalPerson;

    /**
     * @var string Issuing authority.
     */
    public $IssuingAuthority;

    /**
     * @var string Business license.
     */
    public $BusinessLicense;

    /**
     * @var string Business address.
     */
    public $BusinessAddress;

    /**
     * @var integer Zip code.
     */
    public $PostCode;

    /**
     * @var string Operator.
     */
    public $Manager;

    /**
     * @var string Operator ID card number.
     */
    public $ManagerId;

    /**
     * @var string Operator ID card.
     */
    public $ManagerIdCard;

    /**
     * @var string Operator address.
     */
    public $ManagerAddress;

    /**
     * @var string Operator phone number.
     */
    public $ManagerTelephone;

    /**
     * @var string Email.
     */
    public $Email;

    /**
     * @var string Service handling form.
     */
    public $ServiceHandlingForm;

    /**
     * @var string Authorization letter.
     */
    public $AuthorizationLetter;

    /**
     * @var string Information security commitment.
     */
    public $SafetyCommitment;

    /**
     * @var string Service start date.
     */
    public $ServiceStartDate;

    /**
     * @var string Service end date.
     */
    public $ServiceEndDate;

    /**
     * @var string Status. Valid values: `PENDING`, `APPROVED`, and `DENY`.
     */
    public $State;

    /**
     * @var string Creation time of the review form.
     */
    public $CreatedTime;

    /**
     * @param string $ServiceProvider Service provider. Valid values: `UNICOM`.
     * @param integer $ComplianceId ID of compliance review request.
     * @param string $Company Full company name.
     * @param string $UniformSocialCreditCode Unified Social Credit Code.
     * @param string $LegalPerson Legal person.
     * @param string $IssuingAuthority Issuing authority.
     * @param string $BusinessLicense Business license.
     * @param string $BusinessAddress Business address.
     * @param integer $PostCode Zip code.
     * @param string $Manager Operator.
     * @param string $ManagerId Operator ID card number.
     * @param string $ManagerIdCard Operator ID card.
     * @param string $ManagerAddress Operator address.
     * @param string $ManagerTelephone Operator phone number.
     * @param string $Email Email.
     * @param string $ServiceHandlingForm Service handling form.
     * @param string $AuthorizationLetter Authorization letter.
     * @param string $SafetyCommitment Information security commitment.
     * @param string $ServiceStartDate Service start date.
     * @param string $ServiceEndDate Service end date.
     * @param string $State Status. Valid values: `PENDING`, `APPROVED`, and `DENY`.
     * @param string $CreatedTime Creation time of the review form.
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

        if (array_key_exists("IssuingAuthority",$param) and $param["IssuingAuthority"] !== null) {
            $this->IssuingAuthority = $param["IssuingAuthority"];
        }

        if (array_key_exists("BusinessLicense",$param) and $param["BusinessLicense"] !== null) {
            $this->BusinessLicense = $param["BusinessLicense"];
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

        if (array_key_exists("ManagerIdCard",$param) and $param["ManagerIdCard"] !== null) {
            $this->ManagerIdCard = $param["ManagerIdCard"];
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

        if (array_key_exists("ServiceHandlingForm",$param) and $param["ServiceHandlingForm"] !== null) {
            $this->ServiceHandlingForm = $param["ServiceHandlingForm"];
        }

        if (array_key_exists("AuthorizationLetter",$param) and $param["AuthorizationLetter"] !== null) {
            $this->AuthorizationLetter = $param["AuthorizationLetter"];
        }

        if (array_key_exists("SafetyCommitment",$param) and $param["SafetyCommitment"] !== null) {
            $this->SafetyCommitment = $param["SafetyCommitment"];
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
