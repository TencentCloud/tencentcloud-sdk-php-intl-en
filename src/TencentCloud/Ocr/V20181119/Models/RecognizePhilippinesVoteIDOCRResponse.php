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
 * RecognizePhilippinesVoteIDOCR response structure.
 *
 * @method TextDetectionResult getHeadPortrait() Obtain The Base64-encoded identity photo.
 * @method void setHeadPortrait(TextDetectionResult $HeadPortrait) Set The Base64-encoded identity photo.
 * @method TextDetectionResult getVIN() Obtain The voter's identification number (VIN).
 * @method void setVIN(TextDetectionResult $VIN) Set The voter's identification number (VIN).
 * @method TextDetectionResult getFirstName() Obtain The first name.
 * @method void setFirstName(TextDetectionResult $FirstName) Set The first name.
 * @method TextDetectionResult getLastName() Obtain The last name.
 * @method void setLastName(TextDetectionResult $LastName) Set The last name.
 * @method TextDetectionResult getBirthday() Obtain The date of birth.
 * @method void setBirthday(TextDetectionResult $Birthday) Set The date of birth.
 * @method TextDetectionResult getCivilStatus() Obtain The civil status.
 * @method void setCivilStatus(TextDetectionResult $CivilStatus) Set The civil status.
 * @method TextDetectionResult getCitizenship() Obtain The citizenship.
 * @method void setCitizenship(TextDetectionResult $Citizenship) Set The citizenship.
 * @method TextDetectionResult getAddress() Obtain The address.
 * @method void setAddress(TextDetectionResult $Address) Set The address.
 * @method TextDetectionResult getPrecinctNo() Obtain The precinct.
 * @method void setPrecinctNo(TextDetectionResult $PrecinctNo) Set The precinct.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class RecognizePhilippinesVoteIDOCRResponse extends AbstractModel
{
    /**
     * @var TextDetectionResult The Base64-encoded identity photo.
     */
    public $HeadPortrait;

    /**
     * @var TextDetectionResult The voter's identification number (VIN).
     */
    public $VIN;

    /**
     * @var TextDetectionResult The first name.
     */
    public $FirstName;

    /**
     * @var TextDetectionResult The last name.
     */
    public $LastName;

    /**
     * @var TextDetectionResult The date of birth.
     */
    public $Birthday;

    /**
     * @var TextDetectionResult The civil status.
     */
    public $CivilStatus;

    /**
     * @var TextDetectionResult The citizenship.
     */
    public $Citizenship;

    /**
     * @var TextDetectionResult The address.
     */
    public $Address;

    /**
     * @var TextDetectionResult The precinct.
     */
    public $PrecinctNo;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param TextDetectionResult $HeadPortrait The Base64-encoded identity photo.
     * @param TextDetectionResult $VIN The voter's identification number (VIN).
     * @param TextDetectionResult $FirstName The first name.
     * @param TextDetectionResult $LastName The last name.
     * @param TextDetectionResult $Birthday The date of birth.
     * @param TextDetectionResult $CivilStatus The civil status.
     * @param TextDetectionResult $Citizenship The citizenship.
     * @param TextDetectionResult $Address The address.
     * @param TextDetectionResult $PrecinctNo The precinct.
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

        if (array_key_exists("VIN",$param) and $param["VIN"] !== null) {
            $this->VIN = new TextDetectionResult();
            $this->VIN->deserialize($param["VIN"]);
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = new TextDetectionResult();
            $this->FirstName->deserialize($param["FirstName"]);
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = new TextDetectionResult();
            $this->LastName->deserialize($param["LastName"]);
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = new TextDetectionResult();
            $this->Birthday->deserialize($param["Birthday"]);
        }

        if (array_key_exists("CivilStatus",$param) and $param["CivilStatus"] !== null) {
            $this->CivilStatus = new TextDetectionResult();
            $this->CivilStatus->deserialize($param["CivilStatus"]);
        }

        if (array_key_exists("Citizenship",$param) and $param["Citizenship"] !== null) {
            $this->Citizenship = new TextDetectionResult();
            $this->Citizenship->deserialize($param["Citizenship"]);
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new TextDetectionResult();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("PrecinctNo",$param) and $param["PrecinctNo"] !== null) {
            $this->PrecinctNo = new TextDetectionResult();
            $this->PrecinctNo->deserialize($param["PrecinctNo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
