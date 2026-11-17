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
 * @method string getFaceInput() Obtain <p>Pass in the face image or face video to be detected (currently only single-face detection is supported), encoded in Base64. If both video and image are available in your scenario, we recommend using video for detection. For better detection results, note the following restrictions and recommendations for input data:</p><ul><li><p>Base64 value of the image:<br>Recommended overall image resolution is 480x640, with the face size above 100X100, captured by the front camera of a mobile phone.<br>The Base64-encoded image data is recommended to be no more than 3 MB, and must not exceed 10 MB. Only jpg and png formats are supported.<br>Use the standard Base64 encoding method (with = padding). For encoding specifications, refer to RFC4648.</p></li><li><p>Base64 value of the video:<br>The Base64-encoded size is recommended to be within 8 MB, and must not exceed 10 MB. mp4, avi, flv, and mov formats are supported, captured by the front camera of a mobile phone.<br>Recommended video duration is 2 to 5 seconds, and must not exceed 20 seconds.<br>Recommended video resolution is 480x640 (up to 720p supported), with a frame rate between 25 fps and 30 fps.<br>Use the standard Base64 encoding method (with = padding). For encoding specifications, refer to RFC4648.</p></li></ul><p>If you do not use Encryption for encrypted transmission, this field is required.</p>
 * @method void setFaceInput(string $FaceInput) Set <p>Pass in the face image or face video to be detected (currently only single-face detection is supported), encoded in Base64. If both video and image are available in your scenario, we recommend using video for detection. For better detection results, note the following restrictions and recommendations for input data:</p><ul><li><p>Base64 value of the image:<br>Recommended overall image resolution is 480x640, with the face size above 100X100, captured by the front camera of a mobile phone.<br>The Base64-encoded image data is recommended to be no more than 3 MB, and must not exceed 10 MB. Only jpg and png formats are supported.<br>Use the standard Base64 encoding method (with = padding). For encoding specifications, refer to RFC4648.</p></li><li><p>Base64 value of the video:<br>The Base64-encoded size is recommended to be within 8 MB, and must not exceed 10 MB. mp4, avi, flv, and mov formats are supported, captured by the front camera of a mobile phone.<br>Recommended video duration is 2 to 5 seconds, and must not exceed 20 seconds.<br>Recommended video resolution is 480x640 (up to 720p supported), with a frame rate between 25 fps and 30 fps.<br>Use the standard Base64 encoding method (with = padding). For encoding specifications, refer to RFC4648.</p></li></ul><p>If you do not use Encryption for encrypted transmission, this field is required.</p>
 * @method integer getFaceInputType() Obtain <p>Type of the input.</p><ul><li>Valid values:<br>1: image type.<br>2: video type.<br>Others: the error code InvalidParameter is returned.</li></ul><p>If you do not use Encryption for encrypted transmission, this field is required.</p>
 * @method void setFaceInputType(integer $FaceInputType) Set <p>Type of the input.</p><ul><li>Valid values:<br>1: image type.<br>2: video type.<br>Others: the error code InvalidParameter is returned.</li></ul><p>If you do not use Encryption for encrypted transmission, this field is required.</p>
 * @method Encryption getEncryption() Obtain <p>Whether to encrypt the entire request body.</p><ul><li>Supported encryption algorithms: AES-256-CBC and SM4-GCM.</li><li>Users with encryption requirements can use this parameter. For details, click the link on the left.</li></ul>
 * @method void setEncryption(Encryption $Encryption) Set <p>Whether to encrypt the entire request body.</p><ul><li>Supported encryption algorithms: AES-256-CBC and SM4-GCM.</li><li>Users with encryption requirements can use this parameter. For details, click the link on the left.</li></ul>
 * @method string getEncryptedBody() Obtain <p>Encrypted ciphertext.</p><ul><li>The data format before encryption is as follows: {&quot;FaceInput&quot;:&quot;AAAAA&quot;,&quot;FaceInputType&quot;:1}.</li></ul>
 * @method void setEncryptedBody(string $EncryptedBody) Set <p>Encrypted ciphertext.</p><ul><li>The data format before encryption is as follows: {&quot;FaceInput&quot;:&quot;AAAAA&quot;,&quot;FaceInputType&quot;:1}.</li></ul>
 * @method ExtraRiskInfo getExtraRiskInfo() Obtain <p>Carries the risk control context of this request at one time, that is, "who, where, and from which IP the request is initiated".</p>
 * @method void setExtraRiskInfo(ExtraRiskInfo $ExtraRiskInfo) Set <p>Carries the risk control context of this request at one time, that is, "who, where, and from which IP the request is initiated".</p>
 */
class DetectAIFakeFacesRequest extends AbstractModel
{
    /**
     * @var string <p>Pass in the face image or face video to be detected (currently only single-face detection is supported), encoded in Base64. If both video and image are available in your scenario, we recommend using video for detection. For better detection results, note the following restrictions and recommendations for input data:</p><ul><li><p>Base64 value of the image:<br>Recommended overall image resolution is 480x640, with the face size above 100X100, captured by the front camera of a mobile phone.<br>The Base64-encoded image data is recommended to be no more than 3 MB, and must not exceed 10 MB. Only jpg and png formats are supported.<br>Use the standard Base64 encoding method (with = padding). For encoding specifications, refer to RFC4648.</p></li><li><p>Base64 value of the video:<br>The Base64-encoded size is recommended to be within 8 MB, and must not exceed 10 MB. mp4, avi, flv, and mov formats are supported, captured by the front camera of a mobile phone.<br>Recommended video duration is 2 to 5 seconds, and must not exceed 20 seconds.<br>Recommended video resolution is 480x640 (up to 720p supported), with a frame rate between 25 fps and 30 fps.<br>Use the standard Base64 encoding method (with = padding). For encoding specifications, refer to RFC4648.</p></li></ul><p>If you do not use Encryption for encrypted transmission, this field is required.</p>
     */
    public $FaceInput;

    /**
     * @var integer <p>Type of the input.</p><ul><li>Valid values:<br>1: image type.<br>2: video type.<br>Others: the error code InvalidParameter is returned.</li></ul><p>If you do not use Encryption for encrypted transmission, this field is required.</p>
     */
    public $FaceInputType;

    /**
     * @var Encryption <p>Whether to encrypt the entire request body.</p><ul><li>Supported encryption algorithms: AES-256-CBC and SM4-GCM.</li><li>Users with encryption requirements can use this parameter. For details, click the link on the left.</li></ul>
     */
    public $Encryption;

    /**
     * @var string <p>Encrypted ciphertext.</p><ul><li>The data format before encryption is as follows: {&quot;FaceInput&quot;:&quot;AAAAA&quot;,&quot;FaceInputType&quot;:1}.</li></ul>
     */
    public $EncryptedBody;

    /**
     * @var ExtraRiskInfo <p>Carries the risk control context of this request at one time, that is, "who, where, and from which IP the request is initiated".</p>
     */
    public $ExtraRiskInfo;

    /**
     * @param string $FaceInput <p>Pass in the face image or face video to be detected (currently only single-face detection is supported), encoded in Base64. If both video and image are available in your scenario, we recommend using video for detection. For better detection results, note the following restrictions and recommendations for input data:</p><ul><li><p>Base64 value of the image:<br>Recommended overall image resolution is 480x640, with the face size above 100X100, captured by the front camera of a mobile phone.<br>The Base64-encoded image data is recommended to be no more than 3 MB, and must not exceed 10 MB. Only jpg and png formats are supported.<br>Use the standard Base64 encoding method (with = padding). For encoding specifications, refer to RFC4648.</p></li><li><p>Base64 value of the video:<br>The Base64-encoded size is recommended to be within 8 MB, and must not exceed 10 MB. mp4, avi, flv, and mov formats are supported, captured by the front camera of a mobile phone.<br>Recommended video duration is 2 to 5 seconds, and must not exceed 20 seconds.<br>Recommended video resolution is 480x640 (up to 720p supported), with a frame rate between 25 fps and 30 fps.<br>Use the standard Base64 encoding method (with = padding). For encoding specifications, refer to RFC4648.</p></li></ul><p>If you do not use Encryption for encrypted transmission, this field is required.</p>
     * @param integer $FaceInputType <p>Type of the input.</p><ul><li>Valid values:<br>1: image type.<br>2: video type.<br>Others: the error code InvalidParameter is returned.</li></ul><p>If you do not use Encryption for encrypted transmission, this field is required.</p>
     * @param Encryption $Encryption <p>Whether to encrypt the entire request body.</p><ul><li>Supported encryption algorithms: AES-256-CBC and SM4-GCM.</li><li>Users with encryption requirements can use this parameter. For details, click the link on the left.</li></ul>
     * @param string $EncryptedBody <p>Encrypted ciphertext.</p><ul><li>The data format before encryption is as follows: {&quot;FaceInput&quot;:&quot;AAAAA&quot;,&quot;FaceInputType&quot;:1}.</li></ul>
     * @param ExtraRiskInfo $ExtraRiskInfo <p>Carries the risk control context of this request at one time, that is, "who, where, and from which IP the request is initiated".</p>
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

        if (array_key_exists("ExtraRiskInfo",$param) and $param["ExtraRiskInfo"] !== null) {
            $this->ExtraRiskInfo = new ExtraRiskInfo();
            $this->ExtraRiskInfo->deserialize($param["ExtraRiskInfo"]);
        }
    }
}
