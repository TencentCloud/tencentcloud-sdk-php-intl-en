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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWxNFCResult response structure.
 *
 * @method string getResultCode() Obtain <p>NFC billing result code. Each successful NFC read is billed once (duplicate billing does not occur for repeated pull of the same NFC request). Permissible range of billing result codes:<br>  0: Read successful, billed<br>-1: Read fail, free of charge</p>
 * @method void setResultCode(string $ResultCode) Set <p>NFC billing result code. Each successful NFC read is billed once (duplicate billing does not occur for repeated pull of the same NFC request). Permissible range of billing result codes:<br>  0: Read successful, billed<br>-1: Read fail, free of charge</p>
 * @method string getIdNum() Obtain <p>Identity card number</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdNum(string $IdNum) Set <p>Identity card number</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain <p>name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set <p>name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPicture() Obtain <p>Portrait photo in the document</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPicture(string $Picture) Set <p>Portrait photo in the document</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdCardFrontImg() Obtain <p>Front photo of the identity document (portrait side)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdCardFrontImg(string $IdCardFrontImg) Set <p>Front photo of the identity document (portrait side)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdCardBackImg() Obtain <p>Photo of the back of an identity document (national emblem side)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdCardBackImg(string $IdCardBackImg) Set <p>Photo of the back of an identity document (national emblem side)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthDate() Obtain <p>Date of birth</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthDate(string $BirthDate) Set <p>Date of birth</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBeginTime() Obtain <p>Validity start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBeginTime(string $BeginTime) Set <p>Validity start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain <p>Validity end time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set <p>Validity end time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNation() Obtain <p>Ethnicity</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNation(string $Nation) Set <p>Ethnicity</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain <p>Gender</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set <p>Gender</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdType() Obtain <p>Document type</p><p>Enumeration value:</p><ul><li>01: ID card</li><li>03: Chinese passport</li><li>06: Hong Kong and Macau travel permit</li><li>07: Taiwan travel permit</li><li>08: Foreign passport</li><li>13: Permanent residence permit for foreigners</li><li>14: Residence Permit for Hong Kong (China), Macao (China), and Taiwan (China) residents</li><li>15: Return Home Permit</li><li>16: Travel permit for Chinese mainland residents to Taiwan (China)</li><li>99: Other documents</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdType(string $IdType) Set <p>Document type</p><p>Enumeration value:</p><ul><li>01: ID card</li><li>03: Chinese passport</li><li>06: Hong Kong and Macau travel permit</li><li>07: Taiwan travel permit</li><li>08: Foreign passport</li><li>13: Permanent residence permit for foreigners</li><li>14: Residence Permit for Hong Kong (China), Macao (China), and Taiwan (China) residents</li><li>15: Return Home Permit</li><li>16: Travel permit for Chinese mainland residents to Taiwan (China)</li><li>99: Other documents</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnName() Obtain <p>English name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnName(string $EnName) Set <p>English name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSigningOrganization() Obtain <p>Issuing authority</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSigningOrganization(string $SigningOrganization) Set <p>Issuing authority</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOtherIdNum() Obtain <p>Residence Permit for residents of Hong Kong (China), Macao (China) and Taiwan (China), passport number</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOtherIdNum(string $OtherIdNum) Set <p>Residence Permit for residents of Hong Kong (China), Macao (China) and Taiwan (China), passport number</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNationality() Obtain <p>Travel document nationality</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNationality(string $Nationality) Set <p>Travel document nationality</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPersonalNumber() Obtain <p>Characters 29 to 42 in the second line of the machine-readable zone of the travel document</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPersonalNumber(string $PersonalNumber) Set <p>Characters 29 to 42 in the second line of the machine-readable zone of the travel document</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCheckMRTD() Obtain <p>Verification result of the document</p><ul><li>JSON format as follows: {"result_issuer":"issuer certificate legitimacy verification result","result_paper":"Document security object legitimacy verification result","result_data":"data tampering prevention verification result","result_chip":"chip replication prevention verification result"}. - Value ranges from 0 to 3: 0: verified, 1: verification failed, 2: unverified, 3: partially passed. When all four verification results are 0, it means the document is genuine.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckMRTD(string $CheckMRTD) Set <p>Verification result of the document</p><ul><li>JSON format as follows: {"result_issuer":"issuer certificate legitimacy verification result","result_paper":"Document security object legitimacy verification result","result_data":"data tampering prevention verification result","result_chip":"chip replication prevention verification result"}. - Value ranges from 0 to 3: 0: verified, 1: verification failed, 2: unverified, 3: partially passed. When all four verification results are 0, it means the document is genuine.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class GetWxNFCResultResponse extends AbstractModel
{
    /**
     * @var string <p>NFC billing result code. Each successful NFC read is billed once (duplicate billing does not occur for repeated pull of the same NFC request). Permissible range of billing result codes:<br>  0: Read successful, billed<br>-1: Read fail, free of charge</p>
     */
    public $ResultCode;

    /**
     * @var string <p>Identity card number</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdNum;

    /**
     * @var string <p>name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string <p>Portrait photo in the document</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Picture;

    /**
     * @var string <p>Front photo of the identity document (portrait side)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdCardFrontImg;

    /**
     * @var string <p>Photo of the back of an identity document (national emblem side)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdCardBackImg;

    /**
     * @var string <p>Date of birth</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BirthDate;

    /**
     * @var string <p>Validity start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BeginTime;

    /**
     * @var string <p>Validity end time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string <p>Ethnicity</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nation;

    /**
     * @var string <p>Gender</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string <p>Document type</p><p>Enumeration value:</p><ul><li>01: ID card</li><li>03: Chinese passport</li><li>06: Hong Kong and Macau travel permit</li><li>07: Taiwan travel permit</li><li>08: Foreign passport</li><li>13: Permanent residence permit for foreigners</li><li>14: Residence Permit for Hong Kong (China), Macao (China), and Taiwan (China) residents</li><li>15: Return Home Permit</li><li>16: Travel permit for Chinese mainland residents to Taiwan (China)</li><li>99: Other documents</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdType;

    /**
     * @var string <p>English name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnName;

    /**
     * @var string <p>Issuing authority</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SigningOrganization;

    /**
     * @var string <p>Residence Permit for residents of Hong Kong (China), Macao (China) and Taiwan (China), passport number</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OtherIdNum;

    /**
     * @var string <p>Travel document nationality</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nationality;

    /**
     * @var string <p>Characters 29 to 42 in the second line of the machine-readable zone of the travel document</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PersonalNumber;

    /**
     * @var string <p>Verification result of the document</p><ul><li>JSON format as follows: {"result_issuer":"issuer certificate legitimacy verification result","result_paper":"Document security object legitimacy verification result","result_data":"data tampering prevention verification result","result_chip":"chip replication prevention verification result"}. - Value ranges from 0 to 3: 0: verified, 1: verification failed, 2: unverified, 3: partially passed. When all four verification results are 0, it means the document is genuine.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckMRTD;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ResultCode <p>NFC billing result code. Each successful NFC read is billed once (duplicate billing does not occur for repeated pull of the same NFC request). Permissible range of billing result codes:<br>  0: Read successful, billed<br>-1: Read fail, free of charge</p>
     * @param string $IdNum <p>Identity card number</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name <p>name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Picture <p>Portrait photo in the document</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdCardFrontImg <p>Front photo of the identity document (portrait side)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdCardBackImg <p>Photo of the back of an identity document (national emblem side)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BirthDate <p>Date of birth</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BeginTime <p>Validity start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime <p>Validity end time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nation <p>Ethnicity</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex <p>Gender</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdType <p>Document type</p><p>Enumeration value:</p><ul><li>01: ID card</li><li>03: Chinese passport</li><li>06: Hong Kong and Macau travel permit</li><li>07: Taiwan travel permit</li><li>08: Foreign passport</li><li>13: Permanent residence permit for foreigners</li><li>14: Residence Permit for Hong Kong (China), Macao (China), and Taiwan (China) residents</li><li>15: Return Home Permit</li><li>16: Travel permit for Chinese mainland residents to Taiwan (China)</li><li>99: Other documents</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EnName <p>English name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SigningOrganization <p>Issuing authority</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OtherIdNum <p>Residence Permit for residents of Hong Kong (China), Macao (China) and Taiwan (China), passport number</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nationality <p>Travel document nationality</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PersonalNumber <p>Characters 29 to 42 in the second line of the machine-readable zone of the travel document</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CheckMRTD <p>Verification result of the document</p><ul><li>JSON format as follows: {"result_issuer":"issuer certificate legitimacy verification result","result_paper":"Document security object legitimacy verification result","result_data":"data tampering prevention verification result","result_chip":"chip replication prevention verification result"}. - Value ranges from 0 to 3: 0: verified, 1: verification failed, 2: unverified, 3: partially passed. When all four verification results are 0, it means the document is genuine.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Picture",$param) and $param["Picture"] !== null) {
            $this->Picture = $param["Picture"];
        }

        if (array_key_exists("IdCardFrontImg",$param) and $param["IdCardFrontImg"] !== null) {
            $this->IdCardFrontImg = $param["IdCardFrontImg"];
        }

        if (array_key_exists("IdCardBackImg",$param) and $param["IdCardBackImg"] !== null) {
            $this->IdCardBackImg = $param["IdCardBackImg"];
        }

        if (array_key_exists("BirthDate",$param) and $param["BirthDate"] !== null) {
            $this->BirthDate = $param["BirthDate"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("SigningOrganization",$param) and $param["SigningOrganization"] !== null) {
            $this->SigningOrganization = $param["SigningOrganization"];
        }

        if (array_key_exists("OtherIdNum",$param) and $param["OtherIdNum"] !== null) {
            $this->OtherIdNum = $param["OtherIdNum"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("PersonalNumber",$param) and $param["PersonalNumber"] !== null) {
            $this->PersonalNumber = $param["PersonalNumber"];
        }

        if (array_key_exists("CheckMRTD",$param) and $param["CheckMRTD"] !== null) {
            $this->CheckMRTD = $param["CheckMRTD"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
