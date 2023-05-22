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
 * SmartStructuralOCRV2 response structure.
 *
 * @method float getAngle() Obtain The rotation angle (degrees) of the text on the image. 0: The text is horizontal. Positive value: The text is rotated clockwise. Negative value: The text is rotated counterclockwise.
 * @method void setAngle(float $Angle) Set The rotation angle (degrees) of the text on the image. 0: The text is horizontal. Positive value: The text is rotated clockwise. Negative value: The text is rotated counterclockwise.
 * @method array getStructuralList() Obtain The structural information (key-value).
 * @method void setStructuralList(array $StructuralList) Set The structural information (key-value).
 * @method array getWordList() Obtain The recognized text information.
 * @method void setWordList(array $WordList) Set The recognized text information.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class SmartStructuralOCRV2Response extends AbstractModel
{
    /**
     * @var float The rotation angle (degrees) of the text on the image. 0: The text is horizontal. Positive value: The text is rotated clockwise. Negative value: The text is rotated counterclockwise.
     */
    public $Angle;

    /**
     * @var array The structural information (key-value).
     */
    public $StructuralList;

    /**
     * @var array The recognized text information.
     */
    public $WordList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $Angle The rotation angle (degrees) of the text on the image. 0: The text is horizontal. Positive value: The text is rotated clockwise. Negative value: The text is rotated counterclockwise.
     * @param array $StructuralList The structural information (key-value).
     * @param array $WordList The recognized text information.
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
        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("StructuralList",$param) and $param["StructuralList"] !== null) {
            $this->StructuralList = [];
            foreach ($param["StructuralList"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->StructuralList, $obj);
            }
        }

        if (array_key_exists("WordList",$param) and $param["WordList"] !== null) {
            $this->WordList = [];
            foreach ($param["WordList"] as $key => $value){
                $obj = new WordItem();
                $obj->deserialize($value);
                array_push($this->WordList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
