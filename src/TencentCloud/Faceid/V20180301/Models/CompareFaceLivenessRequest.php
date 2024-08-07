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
 * @method string getImageBase64() Obtain Base64 value of photos used for face comparison. 
The size of image data encoded by Base64 shall not exceed 3M, only jpg and png are supported. 
Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. 
Example values: "/9j/4AAQSk... (total length:61944)KiiK//2Q=="
 * @method void setImageBase64(string $ImageBase64) Set Base64 value of photos used for face comparison. 
The size of image data encoded by Base64 shall not exceed 3M, only jpg and png are supported. 
Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. 
Example values: "/9j/4AAQSk... (total length:61944)KiiK//2Q=="
 * @method string getVideoBase64() Obtain Base64 value of videos used for face comparison. 
The size of videos data encoded by Base64 shall not exceed 8M, only mp4,avi,flv are supported. 
Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. 
Example values: "/9j/4AAQSk... (total length:61944)KiiK//2Q=="
 * @method void setVideoBase64(string $VideoBase64) Set Base64 value of videos used for face comparison. 
The size of videos data encoded by Base64 shall not exceed 8M, only mp4,avi,flv are supported. 
Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. 
Example values: "/9j/4AAQSk... (total length:61944)KiiK//2Q=="
 * @method string getLivenessType() Obtain The liveness detection type. Valid values: `LIP`, `ACTION`, and `SILENT`.
`LIP`: Numeric mode; `ACTION`: Motion mode; `SILENT`: silent mode. Select one of them.
Example value: "SILENT"
 * @method void setLivenessType(string $LivenessType) Set The liveness detection type. Valid values: `LIP`, `ACTION`, and `SILENT`.
`LIP`: Numeric mode; `ACTION`: Motion mode; `SILENT`: silent mode. Select one of them.
Example value: "SILENT"
 * @method string getValidateData() Obtain When the "LivenessType" parameter is "ACTION", it must be specified.
It is used to control the action sequence. Action types: 
1 (open mouth)
2 (blink)
3 (nod)
4 (shake head). 
Select one or two from the four actions.
Example of passing single action parameter: "1".
Example of passing multiple action parameters: "4,2".
When the "LivenessType" parameter value is "SILENT", it shall be unspecified.
Example value: ""
 * @method void setValidateData(string $ValidateData) Set When the "LivenessType" parameter is "ACTION", it must be specified.
It is used to control the action sequence. Action types: 
1 (open mouth)
2 (blink)
3 (nod)
4 (shake head). 
Select one or two from the four actions.
Example of passing single action parameter: "1".
Example of passing multiple action parameters: "4,2".
When the "LivenessType" parameter value is "SILENT", it shall be unspecified.
Example value: ""
 */
class CompareFaceLivenessRequest extends AbstractModel
{
    /**
     * @var string Base64 value of photos used for face comparison. 
The size of image data encoded by Base64 shall not exceed 3M, only jpg and png are supported. 
Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. 
Example values: "/9j/4AAQSk... (total length:61944)KiiK//2Q=="
     */
    public $ImageBase64;

    /**
     * @var string Base64 value of videos used for face comparison. 
The size of videos data encoded by Base64 shall not exceed 8M, only mp4,avi,flv are supported. 
Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. 
Example values: "/9j/4AAQSk... (total length:61944)KiiK//2Q=="
     */
    public $VideoBase64;

    /**
     * @var string The liveness detection type. Valid values: `LIP`, `ACTION`, and `SILENT`.
`LIP`: Numeric mode; `ACTION`: Motion mode; `SILENT`: silent mode. Select one of them.
Example value: "SILENT"
     */
    public $LivenessType;

    /**
     * @var string When the "LivenessType" parameter is "ACTION", it must be specified.
It is used to control the action sequence. Action types: 
1 (open mouth)
2 (blink)
3 (nod)
4 (shake head). 
Select one or two from the four actions.
Example of passing single action parameter: "1".
Example of passing multiple action parameters: "4,2".
When the "LivenessType" parameter value is "SILENT", it shall be unspecified.
Example value: ""
     */
    public $ValidateData;

    /**
     * @param string $ImageBase64 Base64 value of photos used for face comparison. 
The size of image data encoded by Base64 shall not exceed 3M, only jpg and png are supported. 
Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. 
Example values: "/9j/4AAQSk... (total length:61944)KiiK//2Q=="
     * @param string $VideoBase64 Base64 value of videos used for face comparison. 
The size of videos data encoded by Base64 shall not exceed 8M, only mp4,avi,flv are supported. 
Please use standard Base64 encoding (use = for padding). Refer to RFC4648 for encoding specifications. 
Example values: "/9j/4AAQSk... (total length:61944)KiiK//2Q=="
     * @param string $LivenessType The liveness detection type. Valid values: `LIP`, `ACTION`, and `SILENT`.
`LIP`: Numeric mode; `ACTION`: Motion mode; `SILENT`: silent mode. Select one of them.
Example value: "SILENT"
     * @param string $ValidateData When the "LivenessType" parameter is "ACTION", it must be specified.
It is used to control the action sequence. Action types: 
1 (open mouth)
2 (blink)
3 (nod)
4 (shake head). 
Select one or two from the four actions.
Example of passing single action parameter: "1".
Example of passing multiple action parameters: "4,2".
When the "LivenessType" parameter value is "SILENT", it shall be unspecified.
Example value: ""
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
