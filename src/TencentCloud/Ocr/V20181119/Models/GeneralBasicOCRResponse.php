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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GeneralBasicOCR response structure.
 *
 * @method array getTextDetections() Obtain Information of recognized text, including the text line content, confidence, text line coordinates, and text line coordinates after rotation correction. For more information, please click the link on the left.
 * @method void setTextDetections(array $TextDetections) Set Information of recognized text, including the text line content, confidence, text line coordinates, and text line coordinates after rotation correction. For more information, please click the link on the left.
 * @method string getLanguage() Obtain Detected language. For more information on the supported languages, please see the description of the `LanguageType` input parameter.
 * @method void setLanguage(string $Language) Set Detected language. For more information on the supported languages, please see the description of the `LanguageType` input parameter.
 * @method float getAngel() Obtain Image rotation angle in degrees. 0° indicates horizontal text, a positive value indicates clockwise rotation, and a negative value indicates anticlockwise rotation. For more information, please see <a href="https://cloud.tencent.com/document/product/866/45139">How to Correct Tilted Text</a>
 * @method void setAngel(float $Angel) Set Image rotation angle in degrees. 0° indicates horizontal text, a positive value indicates clockwise rotation, and a negative value indicates anticlockwise rotation. For more information, please see <a href="https://cloud.tencent.com/document/product/866/45139">How to Correct Tilted Text</a>
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GeneralBasicOCRResponse extends AbstractModel
{
    /**
     * @var array Information of recognized text, including the text line content, confidence, text line coordinates, and text line coordinates after rotation correction. For more information, please click the link on the left.
     */
    public $TextDetections;

    /**
     * @var string Detected language. For more information on the supported languages, please see the description of the `LanguageType` input parameter.
     */
    public $Language;

    /**
     * @var float Image rotation angle in degrees. 0° indicates horizontal text, a positive value indicates clockwise rotation, and a negative value indicates anticlockwise rotation. For more information, please see <a href="https://cloud.tencent.com/document/product/866/45139">How to Correct Tilted Text</a>
     */
    public $Angel;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $TextDetections Information of recognized text, including the text line content, confidence, text line coordinates, and text line coordinates after rotation correction. For more information, please click the link on the left.
     * @param string $Language Detected language. For more information on the supported languages, please see the description of the `LanguageType` input parameter.
     * @param float $Angel Image rotation angle in degrees. 0° indicates horizontal text, a positive value indicates clockwise rotation, and a negative value indicates anticlockwise rotation. For more information, please see <a href="https://cloud.tencent.com/document/product/866/45139">How to Correct Tilted Text</a>
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TextDetections",$param) and $param["TextDetections"] !== null) {
            $this->TextDetections = [];
            foreach ($param["TextDetections"] as $key => $value){
                $obj = new TextDetection();
                $obj->deserialize($value);
                array_push($this->TextDetections, $obj);
            }
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Angel",$param) and $param["Angel"] !== null) {
            $this->Angel = $param["Angel"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}