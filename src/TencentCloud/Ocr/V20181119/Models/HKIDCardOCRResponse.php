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
 * HKIDCardOCR response structure.
 *
 * @method string getCnName() Obtain Name in Chinese
 * @method void setCnName(string $CnName) Set Name in Chinese
 * @method string getEnName() Obtain Name in English
 * @method void setEnName(string $EnName) Set Name in English
 * @method string getTelexCode() Obtain Telecode for the name in Chinese
 * @method void setTelexCode(string $TelexCode) Set Telecode for the name in Chinese
 * @method string getSex() Obtain Gender. Valid values: Male, Female
 * @method void setSex(string $Sex) Set Gender. Valid values: Male, Female
 * @method string getBirthday() Obtain Date of birth
 * @method void setBirthday(string $Birthday) Set Date of birth
 * @method integer getPermanent() Obtain Permanent identity card.
0: non-permanent;
1: permanent;
-1: unknown.
 * @method void setPermanent(integer $Permanent) Set Permanent identity card.
0: non-permanent;
1: permanent;
-1: unknown.
 * @method string getIdNum() Obtain Identity card number
 * @method void setIdNum(string $IdNum) Set Identity card number
 * @method string getSymbol() Obtain Document symbol, i.e., the symbol under the date of birth, such as "***AZ"
 * @method void setSymbol(string $Symbol) Set Document symbol, i.e., the symbol under the date of birth, such as "***AZ"
 * @method string getFirstIssueDate() Obtain First issue date
 * @method void setFirstIssueDate(string $FirstIssueDate) Set First issue date
 * @method string getCurrentIssueDate() Obtain Last receipt date
 * @method void setCurrentIssueDate(string $CurrentIssueDate) Set Last receipt date
 * @method integer getFakeDetectResult() Obtain Authenticity check.
0: unable to judge (because the image is blurred, incomplete, reflective, too dark, etc.);
1: forged;
2: authentic.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFakeDetectResult(integer $FakeDetectResult) Set Authenticity check.
0: unable to judge (because the image is blurred, incomplete, reflective, too dark, etc.);
1: forged;
2: authentic.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHeadImage() Obtain Base64-encoded identity photo
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeadImage(string $HeadImage) Set Base64-encoded identity photo
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getWarningCode() Obtain Multiple alarm codes. If the ID card is spoofed, photocopied, or photoshopped, the corresponding alarm code will be returned.
-9102: Alarm for photocopied document
-9103: Alarm for spoofed document
 * @method void setWarningCode(array $WarningCode) Set Multiple alarm codes. If the ID card is spoofed, photocopied, or photoshopped, the corresponding alarm code will be returned.
-9102: Alarm for photocopied document
-9103: Alarm for spoofed document
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
class HKIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string Name in Chinese
     */
    public $CnName;

    /**
     * @var string Name in English
     */
    public $EnName;

    /**
     * @var string Telecode for the name in Chinese
     */
    public $TelexCode;

    /**
     * @var string Gender. Valid values: Male, Female
     */
    public $Sex;

    /**
     * @var string Date of birth
     */
    public $Birthday;

    /**
     * @var integer Permanent identity card.
0: non-permanent;
1: permanent;
-1: unknown.
     */
    public $Permanent;

    /**
     * @var string Identity card number
     */
    public $IdNum;

    /**
     * @var string Document symbol, i.e., the symbol under the date of birth, such as "***AZ"
     */
    public $Symbol;

    /**
     * @var string First issue date
     */
    public $FirstIssueDate;

    /**
     * @var string Last receipt date
     */
    public $CurrentIssueDate;

    /**
     * @var integer Authenticity check.
0: unable to judge (because the image is blurred, incomplete, reflective, too dark, etc.);
1: forged;
2: authentic.
Note: this field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $FakeDetectResult;

    /**
     * @var string Base64-encoded identity photo
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HeadImage;

    /**
     * @var array Multiple alarm codes. If the ID card is spoofed, photocopied, or photoshopped, the corresponding alarm code will be returned.
-9102: Alarm for photocopied document
-9103: Alarm for spoofed document
     * @deprecated
     */
    public $WarningCode;

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
     * @param string $CnName Name in Chinese
     * @param string $EnName Name in English
     * @param string $TelexCode Telecode for the name in Chinese
     * @param string $Sex Gender. Valid values: Male, Female
     * @param string $Birthday Date of birth
     * @param integer $Permanent Permanent identity card.
0: non-permanent;
1: permanent;
-1: unknown.
     * @param string $IdNum Identity card number
     * @param string $Symbol Document symbol, i.e., the symbol under the date of birth, such as "***AZ"
     * @param string $FirstIssueDate First issue date
     * @param string $CurrentIssueDate Last receipt date
     * @param integer $FakeDetectResult Authenticity check.
0: unable to judge (because the image is blurred, incomplete, reflective, too dark, etc.);
1: forged;
2: authentic.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $HeadImage Base64-encoded identity photo
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $WarningCode Multiple alarm codes. If the ID card is spoofed, photocopied, or photoshopped, the corresponding alarm code will be returned.
-9102: Alarm for photocopied document
-9103: Alarm for spoofed document
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
        if (array_key_exists("CnName",$param) and $param["CnName"] !== null) {
            $this->CnName = $param["CnName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("TelexCode",$param) and $param["TelexCode"] !== null) {
            $this->TelexCode = $param["TelexCode"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Permanent",$param) and $param["Permanent"] !== null) {
            $this->Permanent = $param["Permanent"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Symbol",$param) and $param["Symbol"] !== null) {
            $this->Symbol = $param["Symbol"];
        }

        if (array_key_exists("FirstIssueDate",$param) and $param["FirstIssueDate"] !== null) {
            $this->FirstIssueDate = $param["FirstIssueDate"];
        }

        if (array_key_exists("CurrentIssueDate",$param) and $param["CurrentIssueDate"] !== null) {
            $this->CurrentIssueDate = $param["CurrentIssueDate"];
        }

        if (array_key_exists("FakeDetectResult",$param) and $param["FakeDetectResult"] !== null) {
            $this->FakeDetectResult = $param["FakeDetectResult"];
        }

        if (array_key_exists("HeadImage",$param) and $param["HeadImage"] !== null) {
            $this->HeadImage = $param["HeadImage"];
        }

        if (array_key_exists("WarningCode",$param) and $param["WarningCode"] !== null) {
            $this->WarningCode = $param["WarningCode"];
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
