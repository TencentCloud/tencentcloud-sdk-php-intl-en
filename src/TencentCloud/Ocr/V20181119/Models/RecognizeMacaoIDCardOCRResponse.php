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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizeMacaoIDCardOCR response structure.
 *
 * @method string getCnLastName() Obtain Chinese last name
 * @method void setCnLastName(string $CnLastName) Set Chinese last name
 * @method string getEnLastName() Obtain English last name
 * @method void setEnLastName(string $EnLastName) Set English last name
 * @method string getLastNameCode() Obtain Last name code
 * @method void setLastNameCode(string $LastNameCode) Set Last name code
 * @method string getCnFirstName() Obtain Chinese first name
 * @method void setCnFirstName(string $CnFirstName) Set Chinese first name
 * @method string getEnFirstName() Obtain English first name
 * @method void setEnFirstName(string $EnFirstName) Set English first name
 * @method string getFirstNameCode() Obtain First name code
 * @method void setFirstNameCode(string $FirstNameCode) Set First name code
 * @method string getID() Obtain ID Number
 * @method void setID(string $ID) Set ID Number
 * @method string getBirthday() Obtain Birthday(DD-MM-YYYY)
 * @method void setBirthday(string $Birthday) Set Birthday(DD-MM-YYYY)
 * @method string getSex() Obtain gender
 * @method void setSex(string $Sex) Set gender
 * @method string getFirstIssueDate() Obtain First issue Date (DD-MM-YYYY)
 * @method void setFirstIssueDate(string $FirstIssueDate) Set First issue Date (DD-MM-YYYY)
 * @method string getCurrentIssueDate() Obtain Issue date (DD-MM-YYYY)
 * @method void setCurrentIssueDate(string $CurrentIssueDate) Set Issue date (DD-MM-YYYY)
 * @method string getValidityPeriod() Obtain Validity period (DD-MM-YYYY)
 * @method void setValidityPeriod(string $ValidityPeriod) Set Validity period (DD-MM-YYYY)
 * @method string getSymbol() Obtain ID symbol
 * @method void setSymbol(string $Symbol) Set ID symbol
 * @method string getHeight() Obtain Height (unit: meters)
 * @method void setHeight(string $Height) Set Height (unit: meters)
 * @method string getRetImage() Obtain Processed image (Base64)
 * @method void setRetImage(string $RetImage) Set Processed image (Base64)
 * @method string getAngle() Obtain Image rotation angle, the horizontal direction of the text is 0, clockwise is positive, counterclockwise is negative
 * @method void setAngle(string $Angle) Set Image rotation angle, the horizontal direction of the text is 0, clockwise is positive, counterclockwise is negative
 * @method string getResidentType() Obtain Resident type.
 * @method void setResidentType(string $ResidentType) Set Resident type.
 * @method array getWarnCardInfos() Obtain Card Warning Information

-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9104 Alarm for PS certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
 * @method void setWarnCardInfos(array $WarnCardInfos) Set Card Warning Information

-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9104 Alarm for PS certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class RecognizeMacaoIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string Chinese last name
     */
    public $CnLastName;

    /**
     * @var string English last name
     */
    public $EnLastName;

    /**
     * @var string Last name code
     */
    public $LastNameCode;

    /**
     * @var string Chinese first name
     */
    public $CnFirstName;

    /**
     * @var string English first name
     */
    public $EnFirstName;

    /**
     * @var string First name code
     */
    public $FirstNameCode;

    /**
     * @var string ID Number
     */
    public $ID;

    /**
     * @var string Birthday(DD-MM-YYYY)
     */
    public $Birthday;

    /**
     * @var string gender
     */
    public $Sex;

    /**
     * @var string First issue Date (DD-MM-YYYY)
     */
    public $FirstIssueDate;

    /**
     * @var string Issue date (DD-MM-YYYY)
     */
    public $CurrentIssueDate;

    /**
     * @var string Validity period (DD-MM-YYYY)
     */
    public $ValidityPeriod;

    /**
     * @var string ID symbol
     */
    public $Symbol;

    /**
     * @var string Height (unit: meters)
     */
    public $Height;

    /**
     * @var string Processed image (Base64)
     */
    public $RetImage;

    /**
     * @var string Image rotation angle, the horizontal direction of the text is 0, clockwise is positive, counterclockwise is negative
     */
    public $Angle;

    /**
     * @var string Resident type.
     */
    public $ResidentType;

    /**
     * @var array Card Warning Information

-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9104 Alarm for PS certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
     */
    public $WarnCardInfos;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CnLastName Chinese last name
     * @param string $EnLastName English last name
     * @param string $LastNameCode Last name code
     * @param string $CnFirstName Chinese first name
     * @param string $EnFirstName English first name
     * @param string $FirstNameCode First name code
     * @param string $ID ID Number
     * @param string $Birthday Birthday(DD-MM-YYYY)
     * @param string $Sex gender
     * @param string $FirstIssueDate First issue Date (DD-MM-YYYY)
     * @param string $CurrentIssueDate Issue date (DD-MM-YYYY)
     * @param string $ValidityPeriod Validity period (DD-MM-YYYY)
     * @param string $Symbol ID symbol
     * @param string $Height Height (unit: meters)
     * @param string $RetImage Processed image (Base64)
     * @param string $Angle Image rotation angle, the horizontal direction of the text is 0, clockwise is positive, counterclockwise is negative
     * @param string $ResidentType Resident type.
     * @param array $WarnCardInfos Card Warning Information

-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9104 Alarm for PS certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("CnLastName",$param) and $param["CnLastName"] !== null) {
            $this->CnLastName = $param["CnLastName"];
        }

        if (array_key_exists("EnLastName",$param) and $param["EnLastName"] !== null) {
            $this->EnLastName = $param["EnLastName"];
        }

        if (array_key_exists("LastNameCode",$param) and $param["LastNameCode"] !== null) {
            $this->LastNameCode = $param["LastNameCode"];
        }

        if (array_key_exists("CnFirstName",$param) and $param["CnFirstName"] !== null) {
            $this->CnFirstName = $param["CnFirstName"];
        }

        if (array_key_exists("EnFirstName",$param) and $param["EnFirstName"] !== null) {
            $this->EnFirstName = $param["EnFirstName"];
        }

        if (array_key_exists("FirstNameCode",$param) and $param["FirstNameCode"] !== null) {
            $this->FirstNameCode = $param["FirstNameCode"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("FirstIssueDate",$param) and $param["FirstIssueDate"] !== null) {
            $this->FirstIssueDate = $param["FirstIssueDate"];
        }

        if (array_key_exists("CurrentIssueDate",$param) and $param["CurrentIssueDate"] !== null) {
            $this->CurrentIssueDate = $param["CurrentIssueDate"];
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = $param["ValidityPeriod"];
        }

        if (array_key_exists("Symbol",$param) and $param["Symbol"] !== null) {
            $this->Symbol = $param["Symbol"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("RetImage",$param) and $param["RetImage"] !== null) {
            $this->RetImage = $param["RetImage"];
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("ResidentType",$param) and $param["ResidentType"] !== null) {
            $this->ResidentType = $param["ResidentType"];
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
