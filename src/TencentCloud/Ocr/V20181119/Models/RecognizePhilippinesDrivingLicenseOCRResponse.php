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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizePhilippinesDrivingLicenseOCR response structure.
 *
 * @method TextDetectionResult getHeadPortrait() Obtain The Base64-encoded identity photo.
 * @method void setHeadPortrait(TextDetectionResult $HeadPortrait) Set The Base64-encoded identity photo.
 * @method TextDetectionResult getName() Obtain The full name.
 * @method void setName(TextDetectionResult $Name) Set The full name.
 * @method TextDetectionResult getLastName() Obtain The last name.
 * @method void setLastName(TextDetectionResult $LastName) Set The last name.
 * @method TextDetectionResult getFirstName() Obtain The first name.
 * @method void setFirstName(TextDetectionResult $FirstName) Set The first name.
 * @method TextDetectionResult getMiddleName() Obtain The middle name.
 * @method void setMiddleName(TextDetectionResult $MiddleName) Set The middle name.
 * @method TextDetectionResult getNationality() Obtain The nationality.
 * @method void setNationality(TextDetectionResult $Nationality) Set The nationality.
 * @method TextDetectionResult getSex() Obtain The gender.
 * @method void setSex(TextDetectionResult $Sex) Set The gender.
 * @method TextDetectionResult getAddress() Obtain The address.
 * @method void setAddress(TextDetectionResult $Address) Set The address.
 * @method TextDetectionResult getLicenseNo() Obtain The license No.
 * @method void setLicenseNo(TextDetectionResult $LicenseNo) Set The license No.
 * @method TextDetectionResult getExpiresDate() Obtain The expiration date.
 * @method void setExpiresDate(TextDetectionResult $ExpiresDate) Set The expiration date.
 * @method TextDetectionResult getAgencyCode() Obtain The agency code.
 * @method void setAgencyCode(TextDetectionResult $AgencyCode) Set The agency code.
 * @method TextDetectionResult getBirthday() Obtain The date of birth.
 * @method void setBirthday(TextDetectionResult $Birthday) Set The date of birth.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class RecognizePhilippinesDrivingLicenseOCRResponse extends AbstractModel
{
    /**
     * @var TextDetectionResult The Base64-encoded identity photo.
     */
    public $HeadPortrait;

    /**
     * @var TextDetectionResult The full name.
     */
    public $Name;

    /**
     * @var TextDetectionResult The last name.
     */
    public $LastName;

    /**
     * @var TextDetectionResult The first name.
     */
    public $FirstName;

    /**
     * @var TextDetectionResult The middle name.
     */
    public $MiddleName;

    /**
     * @var TextDetectionResult The nationality.
     */
    public $Nationality;

    /**
     * @var TextDetectionResult The gender.
     */
    public $Sex;

    /**
     * @var TextDetectionResult The address.
     */
    public $Address;

    /**
     * @var TextDetectionResult The license No.
     */
    public $LicenseNo;

    /**
     * @var TextDetectionResult The expiration date.
     */
    public $ExpiresDate;

    /**
     * @var TextDetectionResult The agency code.
     */
    public $AgencyCode;

    /**
     * @var TextDetectionResult The date of birth.
     */
    public $Birthday;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param TextDetectionResult $HeadPortrait The Base64-encoded identity photo.
     * @param TextDetectionResult $Name The full name.
     * @param TextDetectionResult $LastName The last name.
     * @param TextDetectionResult $FirstName The first name.
     * @param TextDetectionResult $MiddleName The middle name.
     * @param TextDetectionResult $Nationality The nationality.
     * @param TextDetectionResult $Sex The gender.
     * @param TextDetectionResult $Address The address.
     * @param TextDetectionResult $LicenseNo The license No.
     * @param TextDetectionResult $ExpiresDate The expiration date.
     * @param TextDetectionResult $AgencyCode The agency code.
     * @param TextDetectionResult $Birthday The date of birth.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("HeadPortrait",$param) and $param["HeadPortrait"] !== null) {
            $this->HeadPortrait = new TextDetectionResult();
            $this->HeadPortrait->deserialize($param["HeadPortrait"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = new TextDetectionResult();
            $this->Name->deserialize($param["Name"]);
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = new TextDetectionResult();
            $this->LastName->deserialize($param["LastName"]);
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = new TextDetectionResult();
            $this->FirstName->deserialize($param["FirstName"]);
        }

        if (array_key_exists("MiddleName",$param) and $param["MiddleName"] !== null) {
            $this->MiddleName = new TextDetectionResult();
            $this->MiddleName->deserialize($param["MiddleName"]);
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = new TextDetectionResult();
            $this->Nationality->deserialize($param["Nationality"]);
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = new TextDetectionResult();
            $this->Sex->deserialize($param["Sex"]);
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new TextDetectionResult();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("LicenseNo",$param) and $param["LicenseNo"] !== null) {
            $this->LicenseNo = new TextDetectionResult();
            $this->LicenseNo->deserialize($param["LicenseNo"]);
        }

        if (array_key_exists("ExpiresDate",$param) and $param["ExpiresDate"] !== null) {
            $this->ExpiresDate = new TextDetectionResult();
            $this->ExpiresDate->deserialize($param["ExpiresDate"]);
        }

        if (array_key_exists("AgencyCode",$param) and $param["AgencyCode"] !== null) {
            $this->AgencyCode = new TextDetectionResult();
            $this->AgencyCode->deserialize($param["AgencyCode"]);
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = new TextDetectionResult();
            $this->Birthday->deserialize($param["Birthday"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
