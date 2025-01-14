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
 * CompareFaceLiveness request structure.
 *
 * @method string getImageBase64() Obtain Base64 string of the image for face comparison.
- The size of the Base64-encoded image data can be up to 3 MB. JPG and PNG formats are supported.
- Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for the encoding specification.
 * @method void setImageBase64(string $ImageBase64) Set Base64 string of the image for face comparison.
- The size of the Base64-encoded image data can be up to 3 MB. JPG and PNG formats are supported.
- Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for the encoding specification.
 * @method string getVideoBase64() Obtain Base64 string of the video for liveness detection.
- The size of the Base64-encoded video data can be up to 8 MB. MP4, AVI, and FLV formats are supported.
-Use standard Base64 encoding (with = padding), following RFC4648.
 * @method void setVideoBase64(string $VideoBase64) Set Base64 string of the video for liveness detection.
- The size of the Base64-encoded video data can be up to 8 MB. MP4, AVI, and FLV formats are supported.
-Use standard Base64 encoding (with = padding), following RFC4648.
 * @method string getLivenessType() Obtain Liveness detection type.
-Values:
ACTION is action mode.
SILENT is silent mode.
-Choose one of the two modes to pass in.
 * @method void setLivenessType(string $LivenessType) Set Liveness detection type.
-Values:
ACTION is action mode.
SILENT is silent mode.
-Choose one of the two modes to pass in.
 * @method string getValidateData() Obtain Control the action sequence. Action types include: 1 (open mouth), 2 (blink), 3 (nod), 4 (shake head). Supports one or two actions.
-Required when the LivenessType parameter is set to ACTION.
-Single action example: "1".
-Multiple actions parameter passing example: "4,2".
-When the LivenessType parameter is set to SILENT, leave it blank.
 * @method void setValidateData(string $ValidateData) Set Control the action sequence. Action types include: 1 (open mouth), 2 (blink), 3 (nod), 4 (shake head). Supports one or two actions.
-Required when the LivenessType parameter is set to ACTION.
-Single action example: "1".
-Multiple actions parameter passing example: "4,2".
-When the LivenessType parameter is set to SILENT, leave it blank.
 */
class CompareFaceLivenessRequest extends AbstractModel
{
    /**
     * @var string Base64 string of the image for face comparison.
- The size of the Base64-encoded image data can be up to 3 MB. JPG and PNG formats are supported.
- Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for the encoding specification.
     */
    public $ImageBase64;

    /**
     * @var string Base64 string of the video for liveness detection.
- The size of the Base64-encoded video data can be up to 8 MB. MP4, AVI, and FLV formats are supported.
-Use standard Base64 encoding (with = padding), following RFC4648.
     */
    public $VideoBase64;

    /**
     * @var string Liveness detection type.
-Values:
ACTION is action mode.
SILENT is silent mode.
-Choose one of the two modes to pass in.
     */
    public $LivenessType;

    /**
     * @var string Control the action sequence. Action types include: 1 (open mouth), 2 (blink), 3 (nod), 4 (shake head). Supports one or two actions.
-Required when the LivenessType parameter is set to ACTION.
-Single action example: "1".
-Multiple actions parameter passing example: "4,2".
-When the LivenessType parameter is set to SILENT, leave it blank.
     */
    public $ValidateData;

    /**
     * @param string $ImageBase64 Base64 string of the image for face comparison.
- The size of the Base64-encoded image data can be up to 3 MB. JPG and PNG formats are supported.
- Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for the encoding specification.
     * @param string $VideoBase64 Base64 string of the video for liveness detection.
- The size of the Base64-encoded video data can be up to 8 MB. MP4, AVI, and FLV formats are supported.
-Use standard Base64 encoding (with = padding), following RFC4648.
     * @param string $LivenessType Liveness detection type.
-Values:
ACTION is action mode.
SILENT is silent mode.
-Choose one of the two modes to pass in.
     * @param string $ValidateData Control the action sequence. Action types include: 1 (open mouth), 2 (blink), 3 (nod), 4 (shake head). Supports one or two actions.
-Required when the LivenessType parameter is set to ACTION.
-Single action example: "1".
-Multiple actions parameter passing example: "4,2".
-When the LivenessType parameter is set to SILENT, leave it blank.
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("VideoBase64",$param) and $param["VideoBase64"] !== null) {
            $this->VideoBase64 = $param["VideoBase64"];
        }

        if (array_key_exists("LivenessType",$param) and $param["LivenessType"] !== null) {
            $this->LivenessType = $param["LivenessType"];
        }

        if (array_key_exists("ValidateData",$param) and $param["ValidateData"] !== null) {
            $this->ValidateData = $param["ValidateData"];
        }
    }
}
