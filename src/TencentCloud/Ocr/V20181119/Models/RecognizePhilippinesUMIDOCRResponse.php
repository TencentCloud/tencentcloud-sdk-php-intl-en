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
 * RecognizePhilippinesUMIDOCR response structure.
 *
 * @method TextDetectionResult getSurname() Obtain The surname.
 * @method void setSurname(TextDetectionResult $Surname) Set The surname.
 * @method TextDetectionResult getMiddleName() Obtain The middle name.
 * @method void setMiddleName(TextDetectionResult $MiddleName) Set The middle name.
 * @method TextDetectionResult getGivenName() Obtain The given name.
 * @method void setGivenName(TextDetectionResult $GivenName) Set The given name.
 * @method TextDetectionResult getAddress() Obtain The address.
 * @method void setAddress(TextDetectionResult $Address) Set The address.
 * @method TextDetectionResult getBirthday() Obtain The date of birth.
 * @method void setBirthday(TextDetectionResult $Birthday) Set The date of birth.
 * @method TextDetectionResult getCRN() Obtain The common reference number (CRN).
 * @method void setCRN(TextDetectionResult $CRN) Set The common reference number (CRN).
 * @method TextDetectionResult getSex() Obtain The gender.
 * @method void setSex(TextDetectionResult $Sex) Set The gender.
 * @method TextDetectionResult getHeadPortrait() Obtain The Base64-encoded identity photo.
 * @method void setHeadPortrait(TextDetectionResult $HeadPortrait) Set The Base64-encoded identity photo.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class RecognizePhilippinesUMIDOCRResponse extends AbstractModel
{
    /**
     * @var TextDetectionResult The surname.
     */
    public $Surname;

    /**
     * @var TextDetectionResult The middle name.
     */
    public $MiddleName;

    /**
     * @var TextDetectionResult The given name.
     */
    public $GivenName;

    /**
     * @var TextDetectionResult The address.
     */
    public $Address;

    /**
     * @var TextDetectionResult The date of birth.
     */
    public $Birthday;

    /**
     * @var TextDetectionResult The common reference number (CRN).
     */
    public $CRN;

    /**
     * @var TextDetectionResult The gender.
     */
    public $Sex;

    /**
     * @var TextDetectionResult The Base64-encoded identity photo.
     */
    public $HeadPortrait;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param TextDetectionResult $Surname The surname.
     * @param TextDetectionResult $MiddleName The middle name.
     * @param TextDetectionResult $GivenName The given name.
     * @param TextDetectionResult $Address The address.
     * @param TextDetectionResult $Birthday The date of birth.
     * @param TextDetectionResult $CRN The common reference number (CRN).
     * @param TextDetectionResult $Sex The gender.
     * @param TextDetectionResult $HeadPortrait The Base64-encoded identity photo.
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
        if (array_key_exists("Surname",$param) and $param["Surname"] !== null) {
            $this->Surname = new TextDetectionResult();
            $this->Surname->deserialize($param["Surname"]);
        }

        if (array_key_exists("MiddleName",$param) and $param["MiddleName"] !== null) {
            $this->MiddleName = new TextDetectionResult();
            $this->MiddleName->deserialize($param["MiddleName"]);
        }

        if (array_key_exists("GivenName",$param) and $param["GivenName"] !== null) {
            $this->GivenName = new TextDetectionResult();
            $this->GivenName->deserialize($param["GivenName"]);
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new TextDetectionResult();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = new TextDetectionResult();
            $this->Birthday->deserialize($param["Birthday"]);
        }

        if (array_key_exists("CRN",$param) and $param["CRN"] !== null) {
            $this->CRN = new TextDetectionResult();
            $this->CRN->deserialize($param["CRN"]);
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = new TextDetectionResult();
            $this->Sex->deserialize($param["Sex"]);
        }

        if (array_key_exists("HeadPortrait",$param) and $param["HeadPortrait"] !== null) {
            $this->HeadPortrait = new TextDetectionResult();
            $this->HeadPortrait->deserialize($param["HeadPortrait"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
