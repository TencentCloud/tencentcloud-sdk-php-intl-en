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
 * LivenessCompare request structure.
 *
 * @method string getLivenessType() Obtain Liveness detection type. Valid values: LIP/ACTION/SILENT.
LIP: numeric mode; ACTION: motion mode; SILENT: silent mode. You need to select a mode to input.
 * @method void setLivenessType(string $LivenessType) Set Liveness detection type. Valid values: LIP/ACTION/SILENT.
LIP: numeric mode; ACTION: motion mode; SILENT: silent mode. You need to select a mode to input.
 * @method string getImageBase64() Obtain Base64 string of the image for face comparison.
The size of the Base64-encoded image data can be up to 3 MB. JPG and PNG formats are supported.
Please use the standard Base64 encoding scheme (with the "=" padding). For the encoding conventions, please see RFC 4648.

Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageBase64` will be used.
 * @method void setImageBase64(string $ImageBase64) Set Base64 string of the image for face comparison.
The size of the Base64-encoded image data can be up to 3 MB. JPG and PNG formats are supported.
Please use the standard Base64 encoding scheme (with the "=" padding). For the encoding conventions, please see RFC 4648.

Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageBase64` will be used.
 * @method string getImageUrl() Obtain URL of the image for face comparison. The size of the downloaded image after Base64 encoding can be up to 3 MB. JPG and PNG formats are supported.

Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageBase64` will be used.

We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method void setImageUrl(string $ImageUrl) Set URL of the image for face comparison. The size of the downloaded image after Base64 encoding can be up to 3 MB. JPG and PNG formats are supported.

Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageBase64` will be used.

We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method string getValidateData() Obtain Lip mode: set this parameter to a custom 4-digit verification code.
Action mode: set this parameter to a custom action sequence (e.g., `2,1` or `1,2`).
Silent mode: do not pass in this parameter.
 * @method void setValidateData(string $ValidateData) Set Lip mode: set this parameter to a custom 4-digit verification code.
Action mode: set this parameter to a custom action sequence (e.g., `2,1` or `1,2`).
Silent mode: do not pass in this parameter.
 * @method string getOptional() Obtain Optional configuration (a JSON string)
{
"BestFrameNum": 2  // Return multiple best screenshots. Value range: 2−10
}
 * @method void setOptional(string $Optional) Set Optional configuration (a JSON string)
{
"BestFrameNum": 2  // Return multiple best screenshots. Value range: 2−10
}
 * @method string getVideoBase64() Obtain Base64 string of the video for liveness detection.
The size of the Base64-encoded video data can be up to 8 MB. MP4, AVI, and FLV formats are supported.
Please use the standard Base64 encoding scheme (with the "=" padding). For the encoding conventions, please see RFC 4648.

Either the `VideoUrl` or `VideoBase64` of the video must be provided. If both are provided, only `VideoBase64` will be used.
 * @method void setVideoBase64(string $VideoBase64) Set Base64 string of the video for liveness detection.
The size of the Base64-encoded video data can be up to 8 MB. MP4, AVI, and FLV formats are supported.
Please use the standard Base64 encoding scheme (with the "=" padding). For the encoding conventions, please see RFC 4648.

Either the `VideoUrl` or `VideoBase64` of the video must be provided. If both are provided, only `VideoBase64` will be used.
 * @method string getVideoUrl() Obtain URL of the video for liveness detection. The size of the downloaded video after Base64 encoding can be up to 8 MB. It takes no more than 4 seconds to download. MP4, AVI, and FLV formats are supported.

Either the `VideoUrl` or `VideoBase64` of the video must be provided. If both are provided, only `VideoBase64` will be used.

We recommend you store the video in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method void setVideoUrl(string $VideoUrl) Set URL of the video for liveness detection. The size of the downloaded video after Base64 encoding can be up to 8 MB. It takes no more than 4 seconds to download. MP4, AVI, and FLV formats are supported.

Either the `VideoUrl` or `VideoBase64` of the video must be provided. If both are provided, only `VideoBase64` will be used.

We recommend you store the video in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
 */
class LivenessCompareRequest extends AbstractModel
{
    /**
     * @var string Liveness detection type. Valid values: LIP/ACTION/SILENT.
LIP: numeric mode; ACTION: motion mode; SILENT: silent mode. You need to select a mode to input.
     */
    public $LivenessType;

    /**
     * @var string Base64 string of the image for face comparison.
The size of the Base64-encoded image data can be up to 3 MB. JPG and PNG formats are supported.
Please use the standard Base64 encoding scheme (with the "=" padding). For the encoding conventions, please see RFC 4648.

Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageBase64` will be used.
     */
    public $ImageBase64;

    /**
     * @var string URL of the image for face comparison. The size of the downloaded image after Base64 encoding can be up to 3 MB. JPG and PNG formats are supported.

Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageBase64` will be used.

We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
     */
    public $ImageUrl;

    /**
     * @var string Lip mode: set this parameter to a custom 4-digit verification code.
Action mode: set this parameter to a custom action sequence (e.g., `2,1` or `1,2`).
Silent mode: do not pass in this parameter.
     */
    public $ValidateData;

    /**
     * @var string Optional configuration (a JSON string)
{
"BestFrameNum": 2  // Return multiple best screenshots. Value range: 2−10
}
     */
    public $Optional;

    /**
     * @var string Base64 string of the video for liveness detection.
The size of the Base64-encoded video data can be up to 8 MB. MP4, AVI, and FLV formats are supported.
Please use the standard Base64 encoding scheme (with the "=" padding). For the encoding conventions, please see RFC 4648.

Either the `VideoUrl` or `VideoBase64` of the video must be provided. If both are provided, only `VideoBase64` will be used.
     */
    public $VideoBase64;

    /**
     * @var string URL of the video for liveness detection. The size of the downloaded video after Base64 encoding can be up to 8 MB. It takes no more than 4 seconds to download. MP4, AVI, and FLV formats are supported.

Either the `VideoUrl` or `VideoBase64` of the video must be provided. If both are provided, only `VideoBase64` will be used.

We recommend you store the video in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
     */
    public $VideoUrl;

    /**
     * @param string $LivenessType Liveness detection type. Valid values: LIP/ACTION/SILENT.
LIP: numeric mode; ACTION: motion mode; SILENT: silent mode. You need to select a mode to input.
     * @param string $ImageBase64 Base64 string of the image for face comparison.
The size of the Base64-encoded image data can be up to 3 MB. JPG and PNG formats are supported.
Please use the standard Base64 encoding scheme (with the "=" padding). For the encoding conventions, please see RFC 4648.

Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageBase64` will be used.
     * @param string $ImageUrl URL of the image for face comparison. The size of the downloaded image after Base64 encoding can be up to 3 MB. JPG and PNG formats are supported.

Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageBase64` will be used.

We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
     * @param string $ValidateData Lip mode: set this parameter to a custom 4-digit verification code.
Action mode: set this parameter to a custom action sequence (e.g., `2,1` or `1,2`).
Silent mode: do not pass in this parameter.
     * @param string $Optional Optional configuration (a JSON string)
{
"BestFrameNum": 2  // Return multiple best screenshots. Value range: 2−10
}
     * @param string $VideoBase64 Base64 string of the video for liveness detection.
The size of the Base64-encoded video data can be up to 8 MB. MP4, AVI, and FLV formats are supported.
Please use the standard Base64 encoding scheme (with the "=" padding). For the encoding conventions, please see RFC 4648.

Either the `VideoUrl` or `VideoBase64` of the video must be provided. If both are provided, only `VideoBase64` will be used.
     * @param string $VideoUrl URL of the video for liveness detection. The size of the downloaded video after Base64 encoding can be up to 8 MB. It takes no more than 4 seconds to download. MP4, AVI, and FLV formats are supported.

Either the `VideoUrl` or `VideoBase64` of the video must be provided. If both are provided, only `VideoBase64` will be used.

We recommend you store the video in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
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
        if (array_key_exists("LivenessType",$param) and $param["LivenessType"] !== null) {
            $this->LivenessType = $param["LivenessType"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ValidateData",$param) and $param["ValidateData"] !== null) {
            $this->ValidateData = $param["ValidateData"];
        }

        if (array_key_exists("Optional",$param) and $param["Optional"] !== null) {
            $this->Optional = $param["Optional"];
        }

        if (array_key_exists("VideoBase64",$param) and $param["VideoBase64"] !== null) {
            $this->VideoBase64 = $param["VideoBase64"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }
    }
}
