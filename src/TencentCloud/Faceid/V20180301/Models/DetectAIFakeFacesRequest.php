<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getFaceInput() Obtain Enter the image or video with a face to be detected, in base64 encoding. Base64 value of the image: The overall image resolution is recommended to be 480x640, and the face size is 100X100 or larger; The image data size after Base64 encoding does not exceed 3M, and only supports jpg and png formats. Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. Base64 value of the video: The size after Base64 encoding does not exceed 8M, and supports mp4, avi, and flv formats. Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. The maximum supported video length is 20s, and the recommended length is 2 to 5s. The recommended video resolution is 480x640, and the frame rate is between 25fps and 30fps.
 * @method void setFaceInput(string $FaceInput) Set Enter the image or video with a face to be detected, in base64 encoding. Base64 value of the image: The overall image resolution is recommended to be 480x640, and the face size is 100X100 or larger; The image data size after Base64 encoding does not exceed 3M, and only supports jpg and png formats. Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. Base64 value of the video: The size after Base64 encoding does not exceed 8M, and supports mp4, avi, and flv formats. Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. The maximum supported video length is 20s, and the recommended length is 2 to 5s. The recommended video resolution is 480x640, and the frame rate is between 25fps and 30fps.
 * @method integer getFaceInputType() Obtain The type of input is 1- The input type is a picture 2- The input type is a video Others - Return error code InvalidParameter
 * @method void setFaceInputType(integer $FaceInputType) Set The type of input is 1- The input type is a picture 2- The input type is a video Others - Return error code InvalidParameter
 * @method Encryption getEncryption() Obtain Whether the request information needs to be fully encrypted; Supported encryption algorithms: AES-256-CBC, SM4-GCM; Users with encryption requirements can use this parameter, for details, please click the link on the left.
 * @method void setEncryption(Encryption $Encryption) Set Whether the request information needs to be fully encrypted; Supported encryption algorithms: AES-256-CBC, SM4-GCM; Users with encryption requirements can use this parameter, for details, please click the link on the left.
 * @method string getEncryptedBody() Obtain Encrypted ciphertext; The data format before encryption is as follows:{"FaceInput":"AAAAA","FaceInputType":1}
 * @method void setEncryptedBody(string $EncryptedBody) Set Encrypted ciphertext; The data format before encryption is as follows:{"FaceInput":"AAAAA","FaceInputType":1}
 */
class DetectAIFakeFacesRequest extends AbstractModel
{
    /**
     * @var string Enter the image or video with a face to be detected, in base64 encoding. Base64 value of the image: The overall image resolution is recommended to be 480x640, and the face size is 100X100 or larger; The image data size after Base64 encoding does not exceed 3M, and only supports jpg and png formats. Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. Base64 value of the video: The size after Base64 encoding does not exceed 8M, and supports mp4, avi, and flv formats. Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. The maximum supported video length is 20s, and the recommended length is 2 to 5s. The recommended video resolution is 480x640, and the frame rate is between 25fps and 30fps.
     */
    public $FaceInput;

    /**
     * @var integer The type of input is 1- The input type is a picture 2- The input type is a video Others - Return error code InvalidParameter
     */
    public $FaceInputType;

    /**
     * @var Encryption Whether the request information needs to be fully encrypted; Supported encryption algorithms: AES-256-CBC, SM4-GCM; Users with encryption requirements can use this parameter, for details, please click the link on the left.
     */
    public $Encryption;

    /**
     * @var string Encrypted ciphertext; The data format before encryption is as follows:{"FaceInput":"AAAAA","FaceInputType":1}
     */
    public $EncryptedBody;

    /**
     * @param string $FaceInput Enter the image or video with a face to be detected, in base64 encoding. Base64 value of the image: The overall image resolution is recommended to be 480x640, and the face size is 100X100 or larger; The image data size after Base64 encoding does not exceed 3M, and only supports jpg and png formats. Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. Base64 value of the video: The size after Base64 encoding does not exceed 8M, and supports mp4, avi, and flv formats. Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. The maximum supported video length is 20s, and the recommended length is 2 to 5s. The recommended video resolution is 480x640, and the frame rate is between 25fps and 30fps.
     * @param integer $FaceInputType The type of input is 1- The input type is a picture 2- The input type is a video Others - Return error code InvalidParameter
     * @param Encryption $Encryption Whether the request information needs to be fully encrypted; Supported encryption algorithms: AES-256-CBC, SM4-GCM; Users with encryption requirements can use this parameter, for details, please click the link on the left.
     * @param string $EncryptedBody Encrypted ciphertext; The data format before encryption is as follows:{"FaceInput":"AAAAA","FaceInputType":1}
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
