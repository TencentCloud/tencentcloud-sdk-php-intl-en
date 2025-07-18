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
 * RecognizeSingaporeIDCardOCR response structure.
 *
 * @method string getChName() Obtain Chinese name
 * @method void setChName(string $ChName) Set Chinese name
 * @method string getEnName() Obtain English name
 * @method void setEnName(string $EnName) Set English name
 * @method string getSex() Obtain gender
 * @method void setSex(string $Sex) Set gender
 * @method string getCountryOfBirth() Obtain Birth Country
 * @method void setCountryOfBirth(string $CountryOfBirth) Set Birth Country
 * @method string getBirthday() Obtain Brithday
 * @method void setBirthday(string $Birthday) Set Brithday
 * @method string getAddress() Obtain Address(back side)
 * @method void setAddress(string $Address) Set Address(back side)
 * @method string getID() Obtain License number
 * @method void setID(string $ID) Set License number
 * @method string getRace() Obtain Nationality(back side)
 * @method void setRace(string $Race) Set Nationality(back side)
 * @method string getNRICCode() Obtain NRIC code(back side)
 * @method void setNRICCode(string $NRICCode) Set NRIC code(back side)
 * @method string getPostCode() Obtain Post code(back side)
 * @method void setPostCode(string $PostCode) Set Post code(back side)
 * @method string getDateOfExpiration() Obtain Date of Expiration(back side)
 * @method void setDateOfExpiration(string $DateOfExpiration) Set Date of Expiration(back side)
 * @method string getDateOfIssue() Obtain Date of issue(back side)
 * @method void setDateOfIssue(string $DateOfIssue) Set Date of issue(back side)
 * @method string getPhoto() Obtain Head image 
 * @method void setPhoto(string $Photo) Set Head image 
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
class RecognizeSingaporeIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string Chinese name
     */
    public $ChName;

    /**
     * @var string English name
     */
    public $EnName;

    /**
     * @var string gender
     */
    public $Sex;

    /**
     * @var string Birth Country
     */
    public $CountryOfBirth;

    /**
     * @var string Brithday
     */
    public $Birthday;

    /**
     * @var string Address(back side)
     */
    public $Address;

    /**
     * @var string License number
     */
    public $ID;

    /**
     * @var string Nationality(back side)
     */
    public $Race;

    /**
     * @var string NRIC code(back side)
     */
    public $NRICCode;

    /**
     * @var string Post code(back side)
     */
    public $PostCode;

    /**
     * @var string Date of Expiration(back side)
     */
    public $DateOfExpiration;

    /**
     * @var string Date of issue(back side)
     */
    public $DateOfIssue;

    /**
     * @var string Head image 
     */
    public $Photo;

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
     * @param string $ChName Chinese name
     * @param string $EnName English name
     * @param string $Sex gender
     * @param string $CountryOfBirth Birth Country
     * @param string $Birthday Brithday
     * @param string $Address Address(back side)
     * @param string $ID License number
     * @param string $Race Nationality(back side)
     * @param string $NRICCode NRIC code(back side)
     * @param string $PostCode Post code(back side)
     * @param string $DateOfExpiration Date of Expiration(back side)
     * @param string $DateOfIssue Date of issue(back side)
     * @param string $Photo Head image 
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
        if (array_key_exists("ChName",$param) and $param["ChName"] !== null) {
            $this->ChName = $param["ChName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("CountryOfBirth",$param) and $param["CountryOfBirth"] !== null) {
            $this->CountryOfBirth = $param["CountryOfBirth"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Race",$param) and $param["Race"] !== null) {
            $this->Race = $param["Race"];
        }

        if (array_key_exists("NRICCode",$param) and $param["NRICCode"] !== null) {
            $this->NRICCode = $param["NRICCode"];
        }

        if (array_key_exists("PostCode",$param) and $param["PostCode"] !== null) {
            $this->PostCode = $param["PostCode"];
        }

        if (array_key_exists("DateOfExpiration",$param) and $param["DateOfExpiration"] !== null) {
            $this->DateOfExpiration = $param["DateOfExpiration"];
        }

        if (array_key_exists("DateOfIssue",$param) and $param["DateOfIssue"] !== null) {
            $this->DateOfIssue = $param["DateOfIssue"];
        }

        if (array_key_exists("Photo",$param) and $param["Photo"] !== null) {
            $this->Photo = $param["Photo"];
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
