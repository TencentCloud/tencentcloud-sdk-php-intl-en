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

namespace TencentCloud\Faceid\V20180301;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Faceid\V20180301\Models as Models;

/**
 * @method Models\ApplyCardVerificationResponse ApplyCardVerification(Models\ApplyCardVerificationRequest $req) The types of national cards supported by the API and whether instructions on the back of the card are required are as follows:  
<table> <thead> <tr> <td>Nationality</td> <td style="width:200px">CardType</td> <td style="width:200px">Back side required</td> </tr> </thead> <tbody> <tr> <td>Indonesia</td> <td>ID card</td> <td>No</td> </tr> <tr> <td>Indonesia</td> <td>Driving License</td> <td>No</td> </tr> <tr> <td>Hongkong</td> <td>ID card</td> <td>Yes</td> </tr> <tr> <td>Thailand</td> <td>ID card</td> <td>No</td> </tr> <tr> <td>Thailand</td> <td>Driving License</td> <td>Yes</td> </tr> <tr> <td>Malaysia</td> <td>ID card</td> <td>Yes</td> </tr> <tr> <td>Malaysia</td> <td>Driving License</td> <td>Yes</td> </tr> <tr> <td>Singapore</td> <td>ID card</td> <td>Yes</td> </tr> <tr> <td>Singapore</td> <td>Driving License</td> <td>Yes</td> </tr> <tr> <td>Philippine</td> <td>ID card</td> <td>Yes</td> </tr> <tr> <td>Philippine</td> <td>Driving License</td> <td>No</td> </tr> <tr> <td>Japan</td> <td>ID card</td> <td>Yes</td> </tr> <tr> <td>Japan</td> <td>Driving License</td> <td>No</td> </tr> <tr> <td>Taiwan</td> <td>ID Card</td> <td>Yes</td> </tr>  <tr> <td>Bangladesh</td> <td>ID card</td> <td>Yes</td> </tr> <tr> <td>Nigeria</td> <td>ID card</td> <td>Yes</td> </tr> <tr> <td>Nigeria</td> <td>Driving License</td> <td>Yes</td> </tr> <tr> <td>Pakistan</td> <td>ID card</td> <td>Yes</td> </tr> <tr> <td>Pakistan</td> <td>Driving License</td> <td>Yes</td> </tr> </tbody> </table>
 * @method Models\ApplyLivenessTokenResponse ApplyLivenessToken(Models\ApplyLivenessTokenRequest $req) This API is used to apply for a token before calling the liveness detection service each time. This token is required for initiating the verification process and getting the result after the verification is completed.
 * @method Models\ApplySdkVerificationTokenResponse ApplySdkVerificationToken(Models\ApplySdkVerificationTokenRequest $req) This API is used to apply for a token before calling the eKYC SDK service each time. This token is required for initiating the verification process and getting the result after the verification is completed.
 * @method Models\ApplyWebVerificationBizTokenIntlResponse ApplyWebVerificationBizTokenIntl(Models\ApplyWebVerificationBizTokenIntlRequest $req) This API is used to apply for a BizToken before calling the web-based verification service each time. This token is required for initiating a verification process and getting the result after the verification is completed.
 * @method Models\ApplyWebVerificationTokenResponse ApplyWebVerificationToken(Models\ApplyWebVerificationTokenRequest $req) This API is used to apply for a token before calling the web-based verification service each time. This token is required for initiating the verification process and getting the result after the verification is completed.
 * @method Models\CompareFaceLivenessResponse CompareFaceLiveness(Models\CompareFaceLivenessRequest $req) This interface supports judgment of real person and photo comparison to verify the user's identity online. By passing the video and photo into the interface, it will first judge whether the person in the video is real. If yes, it judges whether the person in the video is the same one as the uploaded photo and returns authentication result.
 * @method Models\CreateUploadUrlResponse CreateUploadUrl(Models\CreateUploadUrlRequest $req) This API is used to generate a temporary `UploadUrl` for uploading resource files (with the `HTTP PUT` method). After resource upload, `ResourceUrl` will be passed to the `TargetAction` API to complete the resource passing (specific fields vary by case). 
The data will be stored in a COS bucket in the region specified by the parameter `Region` for two hours.
 * @method Models\DetectAIFakeFacesResponse DetectAIFakeFaces(Models\DetectAIFakeFacesRequest $req) Based on the multimodal AI large model algorithm, it provides anti-attack detection capabilities for facial images and videos. It can effectively identify highly simulated AIGC face-changing, high-definition remakes, batch black market attacks, watermarks and other attack traces, and enhance the anti-counterfeiting security capabilities of images and videos.
 * @method Models\DetectReflectLivenessAndCompareResponse DetectReflectLivenessAndCompare(Models\DetectReflectLivenessAndCompareRequest $req) This API is used to detect liveness with the package generated by the liveness comparison (reflection-based) SDK, and to compare the person detected with that in the image passed in.
The image and the data generated with the SDK must be stored in COS, and the region of the COS bucket must be same as that of requests made with this API. We recommend that you pass resources with upload link APIs.
 * @method Models\GenerateReflectSequenceResponse GenerateReflectSequence(Models\GenerateReflectSequenceRequest $req) This API is used to generate an appropriate light sequence based on the information collected by the liveness comparison (reflection-based) SDK and pass the light sequence into the SDK to start the eKYC process.
The data generated with the SDK must be stored in COS, and the region of the COS bucket must be same as that of requests made with this API. We recommend that you pass resources with upload link APIs.
 * @method Models\GetCardVerificationResultResponse GetCardVerificationResult(Models\GetCardVerificationResultRequest $req) The interface supports obtaining the certificate authentication result based on the token.
 * @method Models\GetFaceIdResultIntlResponse GetFaceIdResultIntl(Models\GetFaceIdResultIntlRequest $req) This API is used to get the verification result with the corresponding SDK token after the identity verification process is completed. The SDK token is valid for two hours (2*3,600s) after generation and can be called multiple times.
 * @method Models\GetFaceIdTokenIntlResponse GetFaceIdTokenIntl(Models\GetFaceIdTokenIntlRequest $req) This API is used to apply for an SDK token before calling the selfie verification SDK each time. The SDK token is used throughout the eKYC process and to get the verification result after the verification is completed. A token is valid for one eKYC process only.
 * @method Models\GetLivenessResultResponse GetLivenessResult(Models\GetLivenessResultRequest $req) This API is used to get the verification result with the corresponding token (SdkToken) after the liveness detection is completed. The token is valid for two hours after issuance and can be called multiple times.
 * @method Models\GetSdkVerificationResultResponse GetSdkVerificationResult(Models\GetSdkVerificationResultRequest $req) This API is used to get the verification result with the corresponding token after the SDK-based verification is completed. The token is valid for three days after issuance and can be called multiple times.
 * @method Models\GetWebVerificationResultResponse GetWebVerificationResult(Models\GetWebVerificationResultRequest $req) This API is used to get the verification result with the corresponding token (BizToken) after the web-based verification is completed. The BizToken is valid for three days (3*24*3,600s) after issuance and can be called multiple times.
 * @method Models\GetWebVerificationResultIntlResponse GetWebVerificationResultIntl(Models\GetWebVerificationResultIntlRequest $req) This API is used to get the verification result with the corresponding BizToken after the web-based verification is completed. The token is valid for three days (259,200s) after issuance and can be called multiple times.
 * @method Models\LivenessCompareResponse LivenessCompare(Models\LivenessCompareRequest $req) This API is used to pass in a video and a photo, determine whether the person in the video is real, and if yes, then determine whether the person in the video is the same as that in the photo.
This API on the legacy version will continue to serve existing users but will be unavailable to new users. We recommend you use `VideoLivenessCompare` for better service quality.
 * @method Models\VideoLivenessCompareResponse VideoLivenessCompare(Models\VideoLivenessCompareRequest $req) This API is used to pass in URLs of a video and a photo, determine whether the person in the video is real, and if yes, then determine whether the person in the video is the same as that in the photo.
 */

class FaceidClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "faceid.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "faceid";

    /**
     * @var string
     */
    protected $version = "2018-03-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("faceid")."\\"."V20180301\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
