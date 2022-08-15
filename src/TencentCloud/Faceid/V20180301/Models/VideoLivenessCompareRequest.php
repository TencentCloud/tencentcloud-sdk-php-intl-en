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
 * VideoLivenessCompare request structure.
 *
 * @method string getImageUrl() Obtain The URL of the photo for face comparison. The downloaded image after Base64 encoding can be up to 3 MB and must be in JPG or PNG.

The image must be stored in a COS bucket in the region where the FaceID service resides to ensure a higher download speed and better stability. You can generate an image URL by using `CreateUploadUrl` or purchase the COS service.
 * @method void setImageUrl(string $ImageUrl) Set The URL of the photo for face comparison. The downloaded image after Base64 encoding can be up to 3 MB and must be in JPG or PNG.

The image must be stored in a COS bucket in the region where the FaceID service resides to ensure a higher download speed and better stability. You can generate an image URL by using `CreateUploadUrl` or purchase the COS service.
 * @method string getImageMd5() Obtain The 32-bit MD5 checksum of the image for comparison
 * @method void setImageMd5(string $ImageMd5) Set The 32-bit MD5 checksum of the image for comparison
 * @method string getVideoUrl() Obtain The URL of the video for liveness detection. The downloaded video after Base64 encoding can be up to 8 MB and must be in MP4, AVI, or FLV. It takes no more than 4s to download the video.

The video must be stored in a COS bucket in the region where the FaceID service resides to ensure a higher download speed and better stability. You can generate a video URL by using `CreateUploadUrl` or purchase the COS service.
 * @method void setVideoUrl(string $VideoUrl) Set The URL of the video for liveness detection. The downloaded video after Base64 encoding can be up to 8 MB and must be in MP4, AVI, or FLV. It takes no more than 4s to download the video.

The video must be stored in a COS bucket in the region where the FaceID service resides to ensure a higher download speed and better stability. You can generate a video URL by using `CreateUploadUrl` or purchase the COS service.
 * @method string getVideoMd5() Obtain The 32-bit MD5 checksum of the video
 * @method void setVideoMd5(string $VideoMd5) Set The 32-bit MD5 checksum of the video
 * @method string getLivenessType() Obtain The liveness detection type. Valid values: `LIP`, `ACTION`, and `SILENT`.
`LIP`: Numeric mode; `ACTION`: Motion mode; `SILENT`: silent mode. Select one of them.
 * @method void setLivenessType(string $LivenessType) Set The liveness detection type. Valid values: `LIP`, `ACTION`, and `SILENT`.
`LIP`: Numeric mode; `ACTION`: Motion mode; `SILENT`: silent mode. Select one of them.
 * @method string getValidateData() Obtain LIP parameter: Pass in a custom 4-digit verification code.
ACTION parameter: Pass in a custom action sequence (`2,1` or `1,2`).
SILENT parameter: Null.
 * @method void setValidateData(string $ValidateData) Set LIP parameter: Pass in a custom 4-digit verification code.
ACTION parameter: Pass in a custom action sequence (`2,1` or `1,2`).
SILENT parameter: Null.
 */
class VideoLivenessCompareRequest extends AbstractModel
{
    /**
     * @var string The URL of the photo for face comparison. The downloaded image after Base64 encoding can be up to 3 MB and must be in JPG or PNG.

The image must be stored in a COS bucket in the region where the FaceID service resides to ensure a higher download speed and better stability. You can generate an image URL by using `CreateUploadUrl` or purchase the COS service.
     */
    public $ImageUrl;

    /**
     * @var string The 32-bit MD5 checksum of the image for comparison
     */
    public $ImageMd5;

    /**
     * @var string The URL of the video for liveness detection. The downloaded video after Base64 encoding can be up to 8 MB and must be in MP4, AVI, or FLV. It takes no more than 4s to download the video.

The video must be stored in a COS bucket in the region where the FaceID service resides to ensure a higher download speed and better stability. You can generate a video URL by using `CreateUploadUrl` or purchase the COS service.
     */
    public $VideoUrl;

    /**
     * @var string The 32-bit MD5 checksum of the video
     */
    public $VideoMd5;

    /**
     * @var string The liveness detection type. Valid values: `LIP`, `ACTION`, and `SILENT`.
`LIP`: Numeric mode; `ACTION`: Motion mode; `SILENT`: silent mode. Select one of them.
     */
    public $LivenessType;

    /**
     * @var string LIP parameter: Pass in a custom 4-digit verification code.
ACTION parameter: Pass in a custom action sequence (`2,1` or `1,2`).
SILENT parameter: Null.
     */
    public $ValidateData;

    /**
     * @param string $ImageUrl The URL of the photo for face comparison. The downloaded image after Base64 encoding can be up to 3 MB and must be in JPG or PNG.

The image must be stored in a COS bucket in the region where the FaceID service resides to ensure a higher download speed and better stability. You can generate an image URL by using `CreateUploadUrl` or purchase the COS service.
     * @param string $ImageMd5 The 32-bit MD5 checksum of the image for comparison
     * @param string $VideoUrl The URL of the video for liveness detection. The downloaded video after Base64 encoding can be up to 8 MB and must be in MP4, AVI, or FLV. It takes no more than 4s to download the video.

The video must be stored in a COS bucket in the region where the FaceID service resides to ensure a higher download speed and better stability. You can generate a video URL by using `CreateUploadUrl` or purchase the COS service.
     * @param string $VideoMd5 The 32-bit MD5 checksum of the video
     * @param string $LivenessType The liveness detection type. Valid values: `LIP`, `ACTION`, and `SILENT`.
`LIP`: Numeric mode; `ACTION`: Motion mode; `SILENT`: silent mode. Select one of them.
     * @param string $ValidateData LIP parameter: Pass in a custom 4-digit verification code.
ACTION parameter: Pass in a custom action sequence (`2,1` or `1,2`).
SILENT parameter: Null.
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageMd5",$param) and $param["ImageMd5"] !== null) {
            $this->ImageMd5 = $param["ImageMd5"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("VideoMd5",$param) and $param["VideoMd5"] !== null) {
            $this->VideoMd5 = $param["VideoMd5"];
        }

        if (array_key_exists("LivenessType",$param) and $param["LivenessType"] !== null) {
            $this->LivenessType = $param["LivenessType"];
        }

        if (array_key_exists("ValidateData",$param) and $param["ValidateData"] !== null) {
            $this->ValidateData = $param["ValidateData"];
        }
    }
}
