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
 * CheckIdCardInformation response structure.
 *
 * @method float getSim() Obtain <p>Similarity. - Value ranges from 0.00 to 100.00. - Recommend threshold at least 70 to judge as same person, self-adjust based on specific scenario (pass rate for threshold 70 is 0.01%).</p>
 * @method void setSim(float $Sim) Set <p>Similarity. - Value ranges from 0.00 to 100.00. - Recommend threshold at least 70 to judge as same person, self-adjust based on specific scenario (pass rate for threshold 70 is 0.01%).</p>
 * @method string getResult() Obtain <p>Business error code.</p><ul><li>Success case returns Success.</li><li>For error conditions, refer to the FailedOperation part in the error code list below.</li></ul>
 * @method void setResult(string $Result) Set <p>Business error code.</p><ul><li>Success case returns Success.</li><li>For error conditions, refer to the FailedOperation part in the error code list below.</li></ul>
 * @method string getDescription() Obtain <p>Business result description.</p>
 * @method void setDescription(string $Description) Set <p>Business result description.</p>
 * @method string getName() Obtain <p>Name.</p>
 * @method void setName(string $Name) Set <p>Name.</p>
 * @method string getSex() Obtain <p>Gender.</p>
 * @method void setSex(string $Sex) Set <p>Gender.</p>
 * @method string getNation() Obtain <p>Ethnicity.</p>
 * @method void setNation(string $Nation) Set <p>Ethnicity.</p>
 * @method string getBirth() Obtain <p>Date of birth.</p>
 * @method void setBirth(string $Birth) Set <p>Date of birth.</p>
 * @method string getAddress() Obtain <p>Address.</p>
 * @method void setAddress(string $Address) Set <p>Address.</p>
 * @method string getIdNum() Obtain <p>Identity card number.</p>
 * @method void setIdNum(string $IdNum) Set <p>Identity card number.</p>
 * @method string getPortrait() Obtain <p>The base64 encoding of the ID card portrait photo. If the image cropping fails, it will compare with the entire ID card and return null.</p>
 * @method void setPortrait(string $Portrait) Set <p>The base64 encoding of the ID card portrait photo. If the image cropping fails, it will compare with the entire ID card and return null.</p>
 * @method string getWarnings() Obtain <p>Alarm information.</p><ul><li><p>When alarm information is configured in Config, portrait comparison will be disabled, Result returns an error (FailedOperation.OcrWarningOccurred) with this alarm information.</p></li><li><p>Code list of alarm codes and definition:<br>&#39;-9101&#39;: Incomplete ID card border alarm.<br>&#39;-9102&#39;: ID card copy alarm.<br>&#39;-9103&#39;: ID card photocopy alarm.<br>&#39;-9105&#39;: ID card frame occlusion alarm.<br>&#39;-9104&#39;: Temporary ID card alarm.<br>&#39;-9106&#39;: ID card PS alarm (suspected PS traces).<br>&#39;-8001&#39;: Warn about blurry images.</p></li><li><p>Multiple codes are separated by "|", such as "-9101|-9106|-9104".</p></li></ul>
 * @method void setWarnings(string $Warnings) Set <p>Alarm information.</p><ul><li><p>When alarm information is configured in Config, portrait comparison will be disabled, Result returns an error (FailedOperation.OcrWarningOccurred) with this alarm information.</p></li><li><p>Code list of alarm codes and definition:<br>&#39;-9101&#39;: Incomplete ID card border alarm.<br>&#39;-9102&#39;: ID card copy alarm.<br>&#39;-9103&#39;: ID card photocopy alarm.<br>&#39;-9105&#39;: ID card frame occlusion alarm.<br>&#39;-9104&#39;: Temporary ID card alarm.<br>&#39;-9106&#39;: ID card PS alarm (suspected PS traces).<br>&#39;-8001&#39;: Warn about blurry images.</p></li><li><p>Multiple codes are separated by "|", such as "-9101|-9106|-9104".</p></li></ul>
 * @method float getQuality() Obtain <p>Image quality score.</p><ul><li>This parameter is significant only when warn about blurry images is configured in the request Config.</li><li>Value ranges from 0 to 100. The current default threshold is 50. A score lower than 50 triggers blurry image warnings.</li></ul>
 * @method void setQuality(float $Quality) Set <p>Image quality score.</p><ul><li>This parameter is significant only when warn about blurry images is configured in the request Config.</li><li>Value ranges from 0 to 100. The current default threshold is 50. A score lower than 50 triggers blurry image warnings.</li></ul>
 * @method Encryption getEncryption() Obtain <p>Sensitive data encryption info.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncryption(Encryption $Encryption) Set <p>Sensitive data encryption info.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEncryptedBody() Obtain <p>Encrypted data.</p>
 * @method void setEncryptedBody(string $EncryptedBody) Set <p>Encrypted data.</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class CheckIdCardInformationResponse extends AbstractModel
{
    /**
     * @var float <p>Similarity. - Value ranges from 0.00 to 100.00. - Recommend threshold at least 70 to judge as same person, self-adjust based on specific scenario (pass rate for threshold 70 is 0.01%).</p>
     */
    public $Sim;

    /**
     * @var string <p>Business error code.</p><ul><li>Success case returns Success.</li><li>For error conditions, refer to the FailedOperation part in the error code list below.</li></ul>
     */
    public $Result;

    /**
     * @var string <p>Business result description.</p>
     */
    public $Description;

    /**
     * @var string <p>Name.</p>
     */
    public $Name;

    /**
     * @var string <p>Gender.</p>
     */
    public $Sex;

    /**
     * @var string <p>Ethnicity.</p>
     */
    public $Nation;

    /**
     * @var string <p>Date of birth.</p>
     */
    public $Birth;

    /**
     * @var string <p>Address.</p>
     */
    public $Address;

    /**
     * @var string <p>Identity card number.</p>
     */
    public $IdNum;

    /**
     * @var string <p>The base64 encoding of the ID card portrait photo. If the image cropping fails, it will compare with the entire ID card and return null.</p>
     */
    public $Portrait;

    /**
     * @var string <p>Alarm information.</p><ul><li><p>When alarm information is configured in Config, portrait comparison will be disabled, Result returns an error (FailedOperation.OcrWarningOccurred) with this alarm information.</p></li><li><p>Code list of alarm codes and definition:<br>&#39;-9101&#39;: Incomplete ID card border alarm.<br>&#39;-9102&#39;: ID card copy alarm.<br>&#39;-9103&#39;: ID card photocopy alarm.<br>&#39;-9105&#39;: ID card frame occlusion alarm.<br>&#39;-9104&#39;: Temporary ID card alarm.<br>&#39;-9106&#39;: ID card PS alarm (suspected PS traces).<br>&#39;-8001&#39;: Warn about blurry images.</p></li><li><p>Multiple codes are separated by "|", such as "-9101|-9106|-9104".</p></li></ul>
     */
    public $Warnings;

    /**
     * @var float <p>Image quality score.</p><ul><li>This parameter is significant only when warn about blurry images is configured in the request Config.</li><li>Value ranges from 0 to 100. The current default threshold is 50. A score lower than 50 triggers blurry image warnings.</li></ul>
     */
    public $Quality;

    /**
     * @var Encryption <p>Sensitive data encryption info.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Encryption;

    /**
     * @var string <p>Encrypted data.</p>
     */
    public $EncryptedBody;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $Sim <p>Similarity. - Value ranges from 0.00 to 100.00. - Recommend threshold at least 70 to judge as same person, self-adjust based on specific scenario (pass rate for threshold 70 is 0.01%).</p>
     * @param string $Result <p>Business error code.</p><ul><li>Success case returns Success.</li><li>For error conditions, refer to the FailedOperation part in the error code list below.</li></ul>
     * @param string $Description <p>Business result description.</p>
     * @param string $Name <p>Name.</p>
     * @param string $Sex <p>Gender.</p>
     * @param string $Nation <p>Ethnicity.</p>
     * @param string $Birth <p>Date of birth.</p>
     * @param string $Address <p>Address.</p>
     * @param string $IdNum <p>Identity card number.</p>
     * @param string $Portrait <p>The base64 encoding of the ID card portrait photo. If the image cropping fails, it will compare with the entire ID card and return null.</p>
     * @param string $Warnings <p>Alarm information.</p><ul><li><p>When alarm information is configured in Config, portrait comparison will be disabled, Result returns an error (FailedOperation.OcrWarningOccurred) with this alarm information.</p></li><li><p>Code list of alarm codes and definition:<br>&#39;-9101&#39;: Incomplete ID card border alarm.<br>&#39;-9102&#39;: ID card copy alarm.<br>&#39;-9103&#39;: ID card photocopy alarm.<br>&#39;-9105&#39;: ID card frame occlusion alarm.<br>&#39;-9104&#39;: Temporary ID card alarm.<br>&#39;-9106&#39;: ID card PS alarm (suspected PS traces).<br>&#39;-8001&#39;: Warn about blurry images.</p></li><li><p>Multiple codes are separated by "|", such as "-9101|-9106|-9104".</p></li></ul>
     * @param float $Quality <p>Image quality score.</p><ul><li>This parameter is significant only when warn about blurry images is configured in the request Config.</li><li>Value ranges from 0 to 100. The current default threshold is 50. A score lower than 50 triggers blurry image warnings.</li></ul>
     * @param Encryption $Encryption <p>Sensitive data encryption info.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EncryptedBody <p>Encrypted data.</p>
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
        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Birth",$param) and $param["Birth"] !== null) {
            $this->Birth = $param["Birth"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Portrait",$param) and $param["Portrait"] !== null) {
            $this->Portrait = $param["Portrait"];
        }

        if (array_key_exists("Warnings",$param) and $param["Warnings"] !== null) {
            $this->Warnings = $param["Warnings"];
        }

        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("EncryptedBody",$param) and $param["EncryptedBody"] !== null) {
            $this->EncryptedBody = $param["EncryptedBody"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
