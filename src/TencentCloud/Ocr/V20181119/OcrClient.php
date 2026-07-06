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

namespace TencentCloud\Ocr\V20181119;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ocr\V20181119\Models as Models;

/**
 * @method Models\ApplyCardVerificationExternalResponse ApplyCardVerificationExternal(Models\ApplyCardVerificationExternalRequest $req) This API provides general OCR recognition for overseas identity documents.

The following table lists the supported countries or regions, document types, and whether the back side is required:

<table>
<thead>
<tr>
<td style="width:200px">Nationality</td>
<td style="width:200px">CardType</td>
<td style="width:200px">Whether the Back Side is Required</td>
</tr>
</thead>
<tbody>
<tr>
<td>Argentina</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Argentina</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Argentina</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>Australia</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Australia</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Australia</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>Australia</td>
<td>Residence Permit</td>
<td>Yes</td>
</tr>
<tr>
<td>Bangladesh</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Bangladesh</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Bangladesh</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>Cambodia</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Cambodia</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Cambodia</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>Canada</td>
<td>Driver's License</td>
<td>No</td>
</tr>
<tr>
<td>Canada</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Canada</td>
<td>Passport</td>
<td>Yes</td>
</tr>
<tr>
<td>Canada</td>
<td>Residence Permit</td>
<td>Yes</td>
</tr>
<tr>
<td>Chile</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Chile</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Chile</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>Germany</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Germany</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Germany</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>Germany</td>
<td>Residence Permit</td>
<td>Yes</td>
</tr>
<tr>
<td>Mexico</td>
<td>Driver's License</td>
<td>No</td>
</tr>
<tr>
<td>Mexico</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Mexico</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>Myanmar</td>
<td>Driver's License</td>
<td>No</td>
</tr>
<tr>
<td>Myanmar</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Myanmar</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>New Zealand</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>New Zealand</td>
<td>National ID Card</td>
<td>No</td>
</tr>
<tr>
<td>New Zealand</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>New Zealand</td>
<td>Residence Permit</td>
<td>No</td>
</tr>
<tr>
<td>Nigeria</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Nigeria</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Nigeria</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>Nigeria</td>
<td>Residence Permit</td>
<td>Yes</td>
</tr>
<tr>
<td>Pakistan</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Pakistan</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Pakistan</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>Russia</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Russia</td>
<td>National ID Card</td>
<td>No</td>
</tr>
<tr>
<td>Russia</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>Singapore</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Singapore</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Singapore</td>
<td>Passport</td>
<td>No</td>
</tr>
<tr>
<td>Singapore</td>
<td>Residence Permit</td>
<td>Yes</td>
</tr>
<tr>
<td>Indonesia</td>
<td>National ID Card</td>
<td>No</td>
</tr>
<tr>
<td>Indonesia</td>
<td>Driver's License</td>
<td>No</td>
</tr>
<tr>
<td>Hong Kong, China</td>
<td>Identity Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Thailand</td>
<td>National ID Card</td>
<td>No</td>
</tr>
<tr>
<td>Thailand</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Malaysia</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Malaysia</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Singapore</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Singapore</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Philippines</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Philippines</td>
<td>Driver's License</td>
<td>No</td>
</tr>
<tr>
<td>Japan</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Japan</td>
<td>Driver's License</td>
<td>No</td>
</tr>
<tr>
<td>Macau, China</td>
<td>Identity Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Taiwan, China</td>
<td>Identity Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Bangladesh</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Nigeria</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Nigeria</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
<tr>
<td>Pakistan</td>
<td>National ID Card</td>
<td>Yes</td>
</tr>
<tr>
<td>Pakistan</td>
<td>Driver's License</td>
<td>Yes</td>
</tr>
</tbody>
</table>
 * @method Models\ExtractDocMultiResponse ExtractDocMulti(Models\ExtractDocMultiRequest $req) This API supports identifying and extracting field information in structured scenarios such as complex scenarios and multiple formats. Key scenarios include: finance, health care, transportation, travel, insurance. Click [experience now](https://ocrdemo.cloud.tencent.com/).

This API is used to set the alias SmartStructuralPro.

The default API request rate limit is 5 requests per second.
 * @method Models\GeneralAccurateOCRResponse GeneralAccurateOCR(Models\GeneralAccurateOCRRequest $req) This API is used to detect and recognize characters in an image. It can recognize Chinese, English, Chinese-English, digits, and special symbols and return the text box positions and characters.

It is suitable for scenarios with a lot of characters in complex layouts and requiring high recognition accuracy, such as examination papers, online images, signboards, and legal documents.

Strengths: compared with general print recognition, it provides higher-precision character recognition services. Its accuracy and recall rate are higher in difficult scenarios such as a large number of characters, long strings of digits, small characters, blurry characters, and tilted text.

This API is not fully available for the time being. For more information, please contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).
 * @method Models\GeneralBasicOCRResponse GeneralBasicOCR(Models\GeneralBasicOCRRequest $req) This API is used to detect and recognize characters in an image in the following 20 languages: Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, and Arabic. Mixed characters in English and each supported language can be recognized together.

It can recognize printed text in paper documents, online images, ads, signboards, menus, video titles, profile photos, etc.

Strengths: it can automatically recognize the text language, return the text box coordinate information, and automatically rotate tilted text to the upright direction.

This API is not fully available for the time being. For more information, please contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).
 * @method Models\GetCardVerificationExternalResultResponse GetCardVerificationExternalResult(Models\GetCardVerificationExternalResultRequest $req) This API is used to obtain document recognition results.
 * @method Models\HKIDCardOCRResponse HKIDCardOCR(Models\HKIDCardOCRRequest $req) This API is used to recognize key fields on the photo side of a Hong Kong (China) identity card, including name in Chinese, name in English, telecode for name, date of birth, gender, document symbol, date of the first issue, date of the last receipt, identity card number, and permanent residency attribute. 

This API is not fully available for the time being. For more information, please contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).
 * @method Models\MLIDCardOCRResponse MLIDCardOCR(Models\MLIDCardOCRRequest $req) This API is used to recognize a Malaysian identity card, including identity card number, name, gender, and address. It is also used to crop identity photos and give alarms for photographed or photocopied certificates.

This API is not fully available for the time being. For more information, contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).
 * @method Models\MLIDPassportOCRResponse MLIDPassportOCR(Models\MLIDPassportOCRRequest $req) This API is used to recognize a passport issued in Hong Kong/Macao/Taiwan (China) or other countries/regions. Recognizable fields include passport ID, name, date of birth, gender, expiration date, issuing country/region, and nationality. It has the features of cropping identity photos and alarming for photographed or photocopied documents.
This interface supports regional scope: countries with machine-readable passports
 * @method Models\MainlandPermitOCRResponse MainlandPermitOCR(Models\MainlandPermitOCRRequest $req) This API is used to recognize all fields on the front of a mainland travel permit for Hong Kong, Macao, or Taiwan residents: name in Chinese, name in English, gender, date of birth, issuing authority, validity period, document number, place of issuance, number of issues, and document type.

A maximum of 20 requests can be initiated per second for this API.
 * @method Models\PODAuditAIResponse PODAuditAI(Models\PODAuditAIRequest $req) The POD intelligent review deeply integrates multimodal large model image understanding technology, targeting the logistics last-mile delivery scenario to provide high-precision POD compliance audit service. The system auto-recognizes ticket imperfections and risks of non-compliance, helping businesses achieve standardized control in the delivery process and effectively avoid customer complaints and disputes caused by non-compliant credentials.
 * @method Models\PermitOCRResponse PermitOCR(Models\PermitOCRRequest $req) This API is used to recognize the fields on an exit/entry permit (card) for traveling to and from Hong Kong, Macao, or Taiwan, including place of issuance, issuing authority, validity period, gender, date of birth, name in English, name in Chinese, and document number.

A maximum of 10 requests can be initiated per second for this API.
 * @method Models\RecognizeBrazilCommonOCRResponse RecognizeBrazilCommonOCR(Models\RecognizeBrazilCommonOCRRequest $req) This API is used to identify Brazil common documents.

This API is used to set the default request rate limit to 5 requests/second.
 * @method Models\RecognizeBrazilDriverLicenseOCRResponse RecognizeBrazilDriverLicenseOCR(Models\RecognizeBrazilDriverLicenseOCRRequest $req) This interface supports identification of the front and back of Brazilian driver's license. The identification fields include name, driver's license category, number, validity period, etc.
 * @method Models\RecognizeBrazilIDCardOCRResponse RecognizeBrazilIDCardOCR(Models\RecognizeBrazilIDCardOCRRequest $req) This interface supports identification of the front and back of Brazilian ID license. The identification fields include name, driver's license category, number, validity period, etc.
 * @method Models\RecognizeBrazilRNEOCRResponse RecognizeBrazilRNEOCR(Models\RecognizeBrazilRNEOCRRequest $req) Brazil RNE document recognition Default interface request frequency limit: 5 times/second
 * @method Models\RecognizeBrazilRNMOCRResponse RecognizeBrazilRNMOCR(Models\RecognizeBrazilRNMOCRRequest $req) This interface supports identification of the front and back of Brazilian RNM license. The default interface request frequency limit is 5 times per second.
 * @method Models\RecognizeDetectCardCoordsResponse RecognizeDetectCardCoords(Models\RecognizeDetectCardCoordsRequest $req) This API is used to recognize the coordinates of four corners of cards.
 * @method Models\RecognizeIndonesiaIDCardOCRResponse RecognizeIndonesiaIDCardOCR(Models\RecognizeIndonesiaIDCardOCRRequest $req) Indonesian identity card recognition

Default API request rate limit: 5 requests/second.
 * @method Models\RecognizeMacaoIDCardOCRResponse RecognizeMacaoIDCardOCR(Models\RecognizeMacaoIDCardOCRRequest $req) This API is used to recognize key fields on the photo side of a Macao (China) identity card, including name in Chinese, name in English, telecode for name, date of birth, gender, document symbol, date of the first issue, date of the last receipt, identity card number, and permanent residency attribute. 

This API is not fully available for the time being. For more information, please contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).
 * @method Models\RecognizeMainlandIDCardOCRResponse RecognizeMainlandIDCardOCR(Models\RecognizeMainlandIDCardOCRRequest $req) This interface recognizes all fields on both sides of the Mainland China Resident Identity Card (second-generation), including name, gender, ethnicity, date of birth, address, ID number, issuing authority, and validity period, with an accuracy of over 99%.

In addition, the interface provides additional features for various scenarios, such as ID card and portrait photo cropping, along with five alarm detections (see table below).<table style="width:650px"> <thead> <tr> <th width="150">Value-added ability</th> <th width="500">Ability items</th> </tr> </thead> <tbody> <tr> <td rowspan="9">Alarm function</td> </tr> <tr> <td>ID card photocopy warning</td> </tr> <tr> <td>ID card on-screen display warning</td> </tr> <tr> <td>Alarm for occlusion in the ID card frame</td> </tr> <tr> <td>ID card reflective warning</td> </tr> <tr> <td>Blurry picture warning</td> </tr> </tbody> </table> Default rate limit: 20 requests/second.
 * @method Models\RecognizeMexicoVTIDResponse RecognizeMexicoVTID(Models\RecognizeMexicoVTIDRequest $req) This interface supports identification of the front and back of Mexican Voter ID Card. The default interface request frequency limit is 5 times per second.
 * @method Models\RecognizePhilippinesDrivingLicenseOCRResponse RecognizePhilippinesDrivingLicenseOCR(Models\RecognizePhilippinesDrivingLicenseOCRRequest $req) This API is used to recognize a Philippine driver's license.
 * @method Models\RecognizePhilippinesSssIDOCRResponse RecognizePhilippinesSssIDOCR(Models\RecognizePhilippinesSssIDOCRRequest $req) This API is used to recognize a Philippine SSSID/UMID card.
 * @method Models\RecognizePhilippinesTinIDOCRResponse RecognizePhilippinesTinIDOCR(Models\RecognizePhilippinesTinIDOCRRequest $req) This API is used to recognize a Philippine TIN ID card.
 * @method Models\RecognizePhilippinesUMIDOCRResponse RecognizePhilippinesUMIDOCR(Models\RecognizePhilippinesUMIDOCRRequest $req) This API is used to recognize a Philippine Unified Multi-Purpose ID (UMID) card.
 * @method Models\RecognizePhilippinesVoteIDOCRResponse RecognizePhilippinesVoteIDOCR(Models\RecognizePhilippinesVoteIDOCRRequest $req) This API is used to recognize a Philippine voters ID card. It can recognize fields such as first name, family name, date of birth, civil status, citizenship, address, precinct, and voter's identification number (VIN).

The API request rate is limited to 20 requests/sec by default.
 * @method Models\RecognizeSingaporeIDCardOCRResponse RecognizeSingaporeIDCardOCR(Models\RecognizeSingaporeIDCardOCRRequest $req) This interface supports the identification of all fields on the front side of ID card for Singapore residents.The identification accuracy reaches more than 99%.In addition, this interface also supports a variety of value-added capabilities to meet the needs of different scenarios. Such as the cropping function of ID card photos and portrait photos, and also has 5 alarm functions.
As shown in the table below. <table style="width:650px"> <thead> <tr> <th width="150">Value-added ability</th> <th width="500">Ability items</th> </tr> </thead> <tbody> <tr> <td rowspan="9">Alarm function</td> </tr> <tr> <td>ID card copy warning</td> </tr> <tr> <td>ID card copy warning</td> </tr> <tr> <td>Alarm for occlusion in the ID card frame</td> </tr> <tr> <td>ID card reflective warning</td> </tr> <tr> <td>Blurry picture warning</td> </tr> </tbody> </table> Default interface request frequency limit: 20 times/second
 * @method Models\RecognizeThaiIDCardOCRResponse RecognizeThaiIDCardOCR(Models\RecognizeThaiIDCardOCRRequest $req) This API is used to recognize the fields on a Thai identity card, including name in Thai, name in English, address, date of birth, identification number, date of issue, and date of expiry.

A maximum of 10 requests can be initiated per second for this API.
 * @method Models\RecognizeThaiPinkCardResponse RecognizeThaiPinkCard(Models\RecognizeThaiPinkCardRequest $req) This API is used to recognize the fields on a Thai identity card, including name in Thai, name in English, address, date of birth, identification number, date of issue, and date of expiry.
Currently, this API is not generally available. For more information, please [contact your sales rep](https://intl.cloud.tencent.com/zh/contact-us).

A maximum of 5 requests can be initiated per second for this API.
 * @method Models\SmartStructuralOCRV2Response SmartStructuralOCRV2(Models\SmartStructuralOCRV2Request $req) This API is used to recognize fields from cards, documents, bills, forms, contracts, and other structured information. It is flexible and efficient to use, without any configuration required. This API is suitable for recognizing structured information.

A maximum of 10 requests can be initiated per second for this API.
 * @method Models\VinOCRResponse VinOCR(Models\VinOCRRequest $req) This API is used to recognize the vehicle identification number (VIN) in an image.
 */

class OcrClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ocr.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ocr";

    /**
     * @var string
     */
    protected $version = "2018-11-19";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("ocr")."\\"."V20181119\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
