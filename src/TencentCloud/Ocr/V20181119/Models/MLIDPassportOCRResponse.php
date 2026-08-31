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
 * MLIDPassportOCR response structure.
 *
 * @method string getID() Obtain Parsed passport ID extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setID(string $ID) Set Parsed passport ID extracted from the MRZ (Machine-Readable Zone) of passport
 * @method string getName() Obtain Parsed full name extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setName(string $Name) Set Parsed full name extracted from the MRZ (Machine-Readable Zone) of passport
 * @method string getDateOfBirth() Obtain Parsed date of birth extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setDateOfBirth(string $DateOfBirth) Set Parsed date of birth extracted from the MRZ (Machine-Readable Zone) of passport
 * @method string getSex() Obtain Parsed gender extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setSex(string $Sex) Set Parsed gender extracted from the MRZ (Machine-Readable Zone) of passport
 * @method string getDateOfExpiration() Obtain Parsed expiry date extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setDateOfExpiration(string $DateOfExpiration) Set Parsed expiry date extracted from the MRZ (Machine-Readable Zone) of passport
 * @method string getIssuingCountry() Obtain Parsed issuing country extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setIssuingCountry(string $IssuingCountry) Set Parsed issuing country extracted from the MRZ (Machine-Readable Zone) of passport
 * @method string getNationality() Obtain Parsed country-region code extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setNationality(string $Nationality) Set Parsed country-region code extracted from the MRZ (Machine-Readable Zone) of passport
 * @method array getWarn() Obtain This field is deprecated and will always return an empty array. Usage is not recommended.
 * @method void setWarn(array $Warn) Set This field is deprecated and will always return an empty array. Usage is not recommended.
 * @method string getImage() Obtain Base64-encoded identity photo
 * @method void setImage(string $Image) Set Base64-encoded identity photo
 * @method string getAdvancedInfo() Obtain This field is deprecated and will always return "1". Usage is not recommended.
 * @method void setAdvancedInfo(string $AdvancedInfo) Set This field is deprecated and will always return "1". Usage is not recommended.
 * @method string getCodeSet() Obtain Parsed MRZ line 1 raw sequence extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setCodeSet(string $CodeSet) Set Parsed MRZ line 1 raw sequence extracted from the MRZ (Machine-Readable Zone) of passport
 * @method string getCodeCrc() Obtain Parsed MRZ line 2 raw sequence extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setCodeCrc(string $CodeCrc) Set Parsed MRZ line 2 raw sequence extracted from the MRZ (Machine-Readable Zone) of passport
 * @method string getSurname() Obtain Parsed surname extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setSurname(string $Surname) Set Parsed surname extracted from the MRZ (Machine-Readable Zone) of passport
 * @method string getGivenName() Obtain Parsed given name extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setGivenName(string $GivenName) Set Parsed given name extracted from the MRZ (Machine-Readable Zone) of passport
 * @method string getType() Obtain Parsed document type extracted from the MRZ (Machine-Readable Zone) of passport
 * @method void setType(string $Type) Set Parsed document type extracted from the MRZ (Machine-Readable Zone) of passport
 * @method PassportRecognizeInfos getPassportRecognizeInfos() Obtain Document content in the visual zone
 * @method void setPassportRecognizeInfos(PassportRecognizeInfos $PassportRecognizeInfos) Set Document content in the visual zone
 * @method array getWarnCardInfos() Obtain Card Warning Information

-9101 Alarm for covered certificate
-9102 Alarm for photocopied certificate
-9103 Alarm for photographed certificate
-9104 Alarm for PS certificate
-9107 Alarm for reflective certificate
-9108 Alarm for blurry certificate 
-9109 This capability is not enabled. Please contact customer support to activate the alert service.
 * @method void setWarnCardInfos(array $WarnCardInfos) Set Card Warning Information

-9101 Alarm for covered certificate
-9102 Alarm for photocopied certificate
-9103 Alarm for photographed certificate
-9104 Alarm for PS certificate
-9107 Alarm for reflective certificate
-9108 Alarm for blurry certificate 
-9109 This capability is not enabled. Please contact customer support to activate the alert service.
 * @method integer getCardCount() Obtain The number of cards detected in the input image.(Currently supported only in ap-bangkok region)
 * @method void setCardCount(integer $CardCount) Set The number of cards detected in the input image.(Currently supported only in ap-bangkok region)
 * @method boolean getIsComplete() Obtain Whether the passport information is complete.
 * @method void setIsComplete(boolean $IsComplete) Set Whether the passport information is complete.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class MLIDPassportOCRResponse extends AbstractModel
{
    /**
     * @var string Parsed passport ID extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $ID;

    /**
     * @var string Parsed full name extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $Name;

    /**
     * @var string Parsed date of birth extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $DateOfBirth;

    /**
     * @var string Parsed gender extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $Sex;

    /**
     * @var string Parsed expiry date extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $DateOfExpiration;

    /**
     * @var string Parsed issuing country extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $IssuingCountry;

    /**
     * @var string Parsed country-region code extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $Nationality;

    /**
     * @var array This field is deprecated and will always return an empty array. Usage is not recommended.
     * @deprecated
     */
    public $Warn;

    /**
     * @var string Base64-encoded identity photo
     */
    public $Image;

    /**
     * @var string This field is deprecated and will always return "1". Usage is not recommended.
     * @deprecated
     */
    public $AdvancedInfo;

    /**
     * @var string Parsed MRZ line 1 raw sequence extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $CodeSet;

    /**
     * @var string Parsed MRZ line 2 raw sequence extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $CodeCrc;

    /**
     * @var string Parsed surname extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $Surname;

    /**
     * @var string Parsed given name extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $GivenName;

    /**
     * @var string Parsed document type extracted from the MRZ (Machine-Readable Zone) of passport
     */
    public $Type;

    /**
     * @var PassportRecognizeInfos Document content in the visual zone
     */
    public $PassportRecognizeInfos;

    /**
     * @var array Card Warning Information

-9101 Alarm for covered certificate
-9102 Alarm for photocopied certificate
-9103 Alarm for photographed certificate
-9104 Alarm for PS certificate
-9107 Alarm for reflective certificate
-9108 Alarm for blurry certificate 
-9109 This capability is not enabled. Please contact customer support to activate the alert service.
     */
    public $WarnCardInfos;

    /**
     * @var integer The number of cards detected in the input image.(Currently supported only in ap-bangkok region)
     */
    public $CardCount;

    /**
     * @var boolean Whether the passport information is complete.
     */
    public $IsComplete;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ID Parsed passport ID extracted from the MRZ (Machine-Readable Zone) of passport
     * @param string $Name Parsed full name extracted from the MRZ (Machine-Readable Zone) of passport
     * @param string $DateOfBirth Parsed date of birth extracted from the MRZ (Machine-Readable Zone) of passport
     * @param string $Sex Parsed gender extracted from the MRZ (Machine-Readable Zone) of passport
     * @param string $DateOfExpiration Parsed expiry date extracted from the MRZ (Machine-Readable Zone) of passport
     * @param string $IssuingCountry Parsed issuing country extracted from the MRZ (Machine-Readable Zone) of passport
     * @param string $Nationality Parsed country-region code extracted from the MRZ (Machine-Readable Zone) of passport
     * @param array $Warn This field is deprecated and will always return an empty array. Usage is not recommended.
     * @param string $Image Base64-encoded identity photo
     * @param string $AdvancedInfo This field is deprecated and will always return "1". Usage is not recommended.
     * @param string $CodeSet Parsed MRZ line 1 raw sequence extracted from the MRZ (Machine-Readable Zone) of passport
     * @param string $CodeCrc Parsed MRZ line 2 raw sequence extracted from the MRZ (Machine-Readable Zone) of passport
     * @param string $Surname Parsed surname extracted from the MRZ (Machine-Readable Zone) of passport
     * @param string $GivenName Parsed given name extracted from the MRZ (Machine-Readable Zone) of passport
     * @param string $Type Parsed document type extracted from the MRZ (Machine-Readable Zone) of passport
     * @param PassportRecognizeInfos $PassportRecognizeInfos Document content in the visual zone
     * @param array $WarnCardInfos Card Warning Information

-9101 Alarm for covered certificate
-9102 Alarm for photocopied certificate
-9103 Alarm for photographed certificate
-9104 Alarm for PS certificate
-9107 Alarm for reflective certificate
-9108 Alarm for blurry certificate 
-9109 This capability is not enabled. Please contact customer support to activate the alert service.
     * @param integer $CardCount The number of cards detected in the input image.(Currently supported only in ap-bangkok region)
     * @param boolean $IsComplete Whether the passport information is complete.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("DateOfExpiration",$param) and $param["DateOfExpiration"] !== null) {
            $this->DateOfExpiration = $param["DateOfExpiration"];
        }

        if (array_key_exists("IssuingCountry",$param) and $param["IssuingCountry"] !== null) {
            $this->IssuingCountry = $param["IssuingCountry"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Warn",$param) and $param["Warn"] !== null) {
            $this->Warn = $param["Warn"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("CodeSet",$param) and $param["CodeSet"] !== null) {
            $this->CodeSet = $param["CodeSet"];
        }

        if (array_key_exists("CodeCrc",$param) and $param["CodeCrc"] !== null) {
            $this->CodeCrc = $param["CodeCrc"];
        }

        if (array_key_exists("Surname",$param) and $param["Surname"] !== null) {
            $this->Surname = $param["Surname"];
        }

        if (array_key_exists("GivenName",$param) and $param["GivenName"] !== null) {
            $this->GivenName = $param["GivenName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PassportRecognizeInfos",$param) and $param["PassportRecognizeInfos"] !== null) {
            $this->PassportRecognizeInfos = new PassportRecognizeInfos();
            $this->PassportRecognizeInfos->deserialize($param["PassportRecognizeInfos"]);
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("CardCount",$param) and $param["CardCount"] !== null) {
            $this->CardCount = $param["CardCount"];
        }

        if (array_key_exists("IsComplete",$param) and $param["IsComplete"] !== null) {
            $this->IsComplete = $param["IsComplete"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
