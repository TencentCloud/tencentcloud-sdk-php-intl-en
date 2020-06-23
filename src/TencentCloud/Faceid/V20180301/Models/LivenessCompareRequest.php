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
 * @method string getImageBase64() Obtain Base64 value of a photo for face comparison;
Base64-encoded image data is up to 3 MB. Only JPG and PNG formats are supported.
 * @method void setImageBase64(string $ImageBase64) Set Base64 value of a photo for face comparison;
Base64-encoded image data is up to 3 MB. Only JPG and PNG formats are supported.
 * @method string getVideoBase64() Obtain Base64 value of a video for liveness detection;
The size after Base64-encoding cannot exceed 5 MB. MP4, AVI, and FLV formats are supported.
 * @method void setVideoBase64(string $VideoBase64) Set Base64 value of a video for liveness detection;
The size after Base64-encoding cannot exceed 5 MB. MP4, AVI, and FLV formats are supported.
 * @method string getLivenessType() Obtain Liveness detection type. Valid values: LIP/ACTION/SILENT.
LIP: numeric mode; ACTION: motion mode; SILENT: silent mode. You need to select a mode to input.
 * @method void setLivenessType(string $LivenessType) Set Liveness detection type. Valid values: LIP/ACTION/SILENT.
LIP: numeric mode; ACTION: motion mode; SILENT: silent mode. You need to select a mode to input.
 * @method string getValidateData() Obtain Input parameter for the numeric mode: numeric verification code (1234). An API needs to be called first to get a numeric verification code;
Input parameter for the motion mode: motion order (2,1 or 1,2). An API needs to be called first to get the motion order;
Input parameter for silent mode: empty.
 * @method void setValidateData(string $ValidateData) Set Input parameter for the numeric mode: numeric verification code (1234). An API needs to be called first to get a numeric verification code;
Input parameter for the motion mode: motion order (2,1 or 1,2). An API needs to be called first to get the motion order;
Input parameter for silent mode: empty.
 * @method string getOptional() Obtain This parameter does not need to be passed in for this API.
 * @method void setOptional(string $Optional) Set This parameter does not need to be passed in for this API.
 */
class LivenessCompareRequest extends AbstractModel
{
    /**
     * @var string Base64 value of a photo for face comparison;
Base64-encoded image data is up to 3 MB. Only JPG and PNG formats are supported.
     */
    public $ImageBase64;

    /**
     * @var string Base64 value of a video for liveness detection;
The size after Base64-encoding cannot exceed 5 MB. MP4, AVI, and FLV formats are supported.
     */
    public $VideoBase64;

    /**
     * @var string Liveness detection type. Valid values: LIP/ACTION/SILENT.
LIP: numeric mode; ACTION: motion mode; SILENT: silent mode. You need to select a mode to input.
     */
    public $LivenessType;

    /**
     * @var string Input parameter for the numeric mode: numeric verification code (1234). An API needs to be called first to get a numeric verification code;
Input parameter for the motion mode: motion order (2,1 or 1,2). An API needs to be called first to get the motion order;
Input parameter for silent mode: empty.
     */
    public $ValidateData;

    /**
     * @var string This parameter does not need to be passed in for this API.
     */
    public $Optional;

    /**
     * @param string $ImageBase64 Base64 value of a photo for face comparison;
Base64-encoded image data is up to 3 MB. Only JPG and PNG formats are supported.
     * @param string $VideoBase64 Base64 value of a video for liveness detection;
The size after Base64-encoding cannot exceed 5 MB. MP4, AVI, and FLV formats are supported.
     * @param string $LivenessType Liveness detection type. Valid values: LIP/ACTION/SILENT.
LIP: numeric mode; ACTION: motion mode; SILENT: silent mode. You need to select a mode to input.
     * @param string $ValidateData Input parameter for the numeric mode: numeric verification code (1234). An API needs to be called first to get a numeric verification code;
Input parameter for the motion mode: motion order (2,1 or 1,2). An API needs to be called first to get the motion order;
Input parameter for silent mode: empty.
     * @param string $Optional This parameter does not need to be passed in for this API.
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

        if (array_key_exists("Optional",$param) and $param["Optional"] !== null) {
            $this->Optional = $param["Optional"];
        }
    }
}
