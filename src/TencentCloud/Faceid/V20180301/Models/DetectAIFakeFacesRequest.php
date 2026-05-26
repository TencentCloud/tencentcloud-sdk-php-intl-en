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
 * DetectAIFakeFaces request structure.
 *
 * @method string getFaceInput() Obtain <p>Import the face image or facial video to be detected (currently only single face detection is supported) in base64 encoding. If your scenario involves both video and image, we recommend using video for detection. For better detection results, please note the following input data limits and suggestions:</p><ul><li><p>base64 value of the image:<br>Recommend an overall image resolution of 480x640, with the face size no less than 100x100, captured by the mobile front camera.<br>The size of the base64-encoded image data should not exceed 3M, with a maximum of 10M. Only jpg and png formats are supported.<br>Please use the standard base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.</p></li><li><p>base64 value of the video:<br>The size after base64 encoding should be within 8M, with a maximum of 10M. Supported formats include mp4, avi, and flv, captured by the mobile front camera.<br>Video duration is recommended to be 2–5s, with a maximum of 20s.<br>Video resolution is recommended at 480x640 (maximum support for 720p), with a frame rate between 25fps and 30fps.<br>Please use the standard base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.</p></li></ul><p>If you do not use Encryption for secure transmission, this field is a required parameter.</p>
 * @method void setFaceInput(string $FaceInput) Set <p>Import the face image or facial video to be detected (currently only single face detection is supported) in base64 encoding. If your scenario involves both video and image, we recommend using video for detection. For better detection results, please note the following input data limits and suggestions:</p><ul><li><p>base64 value of the image:<br>Recommend an overall image resolution of 480x640, with the face size no less than 100x100, captured by the mobile front camera.<br>The size of the base64-encoded image data should not exceed 3M, with a maximum of 10M. Only jpg and png formats are supported.<br>Please use the standard base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.</p></li><li><p>base64 value of the video:<br>The size after base64 encoding should be within 8M, with a maximum of 10M. Supported formats include mp4, avi, and flv, captured by the mobile front camera.<br>Video duration is recommended to be 2–5s, with a maximum of 20s.<br>Video resolution is recommended at 480x640 (maximum support for 720p), with a frame rate between 25fps and 30fps.<br>Please use the standard base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.</p></li></ul><p>If you do not use Encryption for secure transmission, this field is a required parameter.</p>
 * @method integer getFaceInputType() Obtain <p>Passed in type.</p><ul><li>Value ranges from 1 to 2:<br>1: Passed in image type.<br>2: Passed in video type.<br>Other: Return error code InvalidParameter.</li></ul><p>If you do not use Encryption for encrypting transmission, this field is mandatory.</p>
 * @method void setFaceInputType(integer $FaceInputType) Set <p>Passed in type.</p><ul><li>Value ranges from 1 to 2:<br>1: Passed in image type.<br>2: Passed in video type.<br>Other: Return error code InvalidParameter.</li></ul><p>If you do not use Encryption for encrypting transmission, this field is mandatory.</p>
 * @method Encryption getEncryption() Obtain <p>Whether to encrypt the entire request information.</p><ul><li>Supported encryption algorithms: AES-256-CBC, SM4-GCM.</li><li>The user with encryption requirements can use this parameter. For details, please click the left-side link.</li></ul>
 * @method void setEncryption(Encryption $Encryption) Set <p>Whether to encrypt the entire request information.</p><ul><li>Supported encryption algorithms: AES-256-CBC, SM4-GCM.</li><li>The user with encryption requirements can use this parameter. For details, please click the left-side link.</li></ul>
 * @method string getEncryptedBody() Obtain <p>Encrypted ciphertext.</p><ul><li>The data format before encryption is as follows: {"FaceInput":"AAAAA","FaceInputType":1}.</li></ul>
 * @method void setEncryptedBody(string $EncryptedBody) Set <p>Encrypted ciphertext.</p><ul><li>The data format before encryption is as follows: {"FaceInput":"AAAAA","FaceInputType":1}.</li></ul>
 */
class DetectAIFakeFacesRequest extends AbstractModel
{
    /**
     * @var string <p>Import the face image or facial video to be detected (currently only single face detection is supported) in base64 encoding. If your scenario involves both video and image, we recommend using video for detection. For better detection results, please note the following input data limits and suggestions:</p><ul><li><p>base64 value of the image:<br>Recommend an overall image resolution of 480x640, with the face size no less than 100x100, captured by the mobile front camera.<br>The size of the base64-encoded image data should not exceed 3M, with a maximum of 10M. Only jpg and png formats are supported.<br>Please use the standard base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.</p></li><li><p>base64 value of the video:<br>The size after base64 encoding should be within 8M, with a maximum of 10M. Supported formats include mp4, avi, and flv, captured by the mobile front camera.<br>Video duration is recommended to be 2–5s, with a maximum of 20s.<br>Video resolution is recommended at 480x640 (maximum support for 720p), with a frame rate between 25fps and 30fps.<br>Please use the standard base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.</p></li></ul><p>If you do not use Encryption for secure transmission, this field is a required parameter.</p>
     */
    public $FaceInput;

    /**
     * @var integer <p>Passed in type.</p><ul><li>Value ranges from 1 to 2:<br>1: Passed in image type.<br>2: Passed in video type.<br>Other: Return error code InvalidParameter.</li></ul><p>If you do not use Encryption for encrypting transmission, this field is mandatory.</p>
     */
    public $FaceInputType;

    /**
     * @var Encryption <p>Whether to encrypt the entire request information.</p><ul><li>Supported encryption algorithms: AES-256-CBC, SM4-GCM.</li><li>The user with encryption requirements can use this parameter. For details, please click the left-side link.</li></ul>
     */
    public $Encryption;

    /**
     * @var string <p>Encrypted ciphertext.</p><ul><li>The data format before encryption is as follows: {"FaceInput":"AAAAA","FaceInputType":1}.</li></ul>
     */
    public $EncryptedBody;

    /**
     * @param string $FaceInput <p>Import the face image or facial video to be detected (currently only single face detection is supported) in base64 encoding. If your scenario involves both video and image, we recommend using video for detection. For better detection results, please note the following input data limits and suggestions:</p><ul><li><p>base64 value of the image:<br>Recommend an overall image resolution of 480x640, with the face size no less than 100x100, captured by the mobile front camera.<br>The size of the base64-encoded image data should not exceed 3M, with a maximum of 10M. Only jpg and png formats are supported.<br>Please use the standard base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.</p></li><li><p>base64 value of the video:<br>The size after base64 encoding should be within 8M, with a maximum of 10M. Supported formats include mp4, avi, and flv, captured by the mobile front camera.<br>Video duration is recommended to be 2–5s, with a maximum of 20s.<br>Video resolution is recommended at 480x640 (maximum support for 720p), with a frame rate between 25fps and 30fps.<br>Please use the standard base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.</p></li></ul><p>If you do not use Encryption for secure transmission, this field is a required parameter.</p>
     * @param integer $FaceInputType <p>Passed in type.</p><ul><li>Value ranges from 1 to 2:<br>1: Passed in image type.<br>2: Passed in video type.<br>Other: Return error code InvalidParameter.</li></ul><p>If you do not use Encryption for encrypting transmission, this field is mandatory.</p>
     * @param Encryption $Encryption <p>Whether to encrypt the entire request information.</p><ul><li>Supported encryption algorithms: AES-256-CBC, SM4-GCM.</li><li>The user with encryption requirements can use this parameter. For details, please click the left-side link.</li></ul>
     * @param string $EncryptedBody <p>Encrypted ciphertext.</p><ul><li>The data format before encryption is as follows: {"FaceInput":"AAAAA","FaceInputType":1}.</li></ul>
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
        if (array_key_exists("FaceInput",$param) and $param["FaceInput"] !== null) {
            $this->FaceInput = $param["FaceInput"];
        }

        if (array_key_exists("FaceInputType",$param) and $param["FaceInputType"] !== null) {
            $this->FaceInputType = $param["FaceInputType"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("EncryptedBody",$param) and $param["EncryptedBody"] !== null) {
            $this->EncryptedBody = $param["EncryptedBody"];
        }
    }
}
