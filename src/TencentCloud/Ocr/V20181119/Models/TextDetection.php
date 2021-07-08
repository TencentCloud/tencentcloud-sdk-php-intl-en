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
 * OCR result.
 *
 * @method string getDetectedText() Obtain Recognized text line content.
 * @method void setDetectedText(string $DetectedText) Set Recognized text line content.
 * @method integer getConfidence() Obtain Confidence. Value range: 0–100.
 * @method void setConfidence(integer $Confidence) Set Confidence. Value range: 0–100.
 * @method array getPolygon() Obtain Text line coordinates, which are represented as 4 vertex coordinates.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPolygon(array $Polygon) Set Text line coordinates, which are represented as 4 vertex coordinates.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAdvancedInfo() Obtain Extended field.
The paragraph information `Parag` returned by the `GeneralBasicOcr` API contains `ParagNo`.
 * @method void setAdvancedInfo(string $AdvancedInfo) Set Extended field.
The paragraph information `Parag` returned by the `GeneralBasicOcr` API contains `ParagNo`.
 * @method ItemCoord getItemPolygon() Obtain Pixel coordinates of the text line in the image after rotation correction, which is in the format of `(X-coordinate of top-left point, Y-coordinate of top-left point, width, height)`.
 * @method void setItemPolygon(ItemCoord $ItemPolygon) Set Pixel coordinates of the text line in the image after rotation correction, which is in the format of `(X-coordinate of top-left point, Y-coordinate of top-left point, width, height)`.
 * @method array getWords() Obtain Information about a character, including the character itself and its confidence. Supported APIs: `GeneralBasicOCR`, `GeneralAccurateOCR`
 * @method void setWords(array $Words) Set Information about a character, including the character itself and its confidence. Supported APIs: `GeneralBasicOCR`, `GeneralAccurateOCR`
 * @method array getWordCoordPoint() Obtain Coordinates of a word’s four corners on the input image. Supported APIs: `GeneralBasicOCR`, `GeneralAccurateOCR`
 * @method void setWordCoordPoint(array $WordCoordPoint) Set Coordinates of a word’s four corners on the input image. Supported APIs: `GeneralBasicOCR`, `GeneralAccurateOCR`
 */
class TextDetection extends AbstractModel
{
    /**
     * @var string Recognized text line content.
     */
    public $DetectedText;

    /**
     * @var integer Confidence. Value range: 0–100.
     */
    public $Confidence;

    /**
     * @var array Text line coordinates, which are represented as 4 vertex coordinates.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Polygon;

    /**
     * @var string Extended field.
The paragraph information `Parag` returned by the `GeneralBasicOcr` API contains `ParagNo`.
     */
    public $AdvancedInfo;

    /**
     * @var ItemCoord Pixel coordinates of the text line in the image after rotation correction, which is in the format of `(X-coordinate of top-left point, Y-coordinate of top-left point, width, height)`.
     */
    public $ItemPolygon;

    /**
     * @var array Information about a character, including the character itself and its confidence. Supported APIs: `GeneralBasicOCR`, `GeneralAccurateOCR`
     */
    public $Words;

    /**
     * @var array Coordinates of a word’s four corners on the input image. Supported APIs: `GeneralBasicOCR`, `GeneralAccurateOCR`
     */
    public $WordCoordPoint;

    /**
     * @param string $DetectedText Recognized text line content.
     * @param integer $Confidence Confidence. Value range: 0–100.
     * @param array $Polygon Text line coordinates, which are represented as 4 vertex coordinates.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AdvancedInfo Extended field.
The paragraph information `Parag` returned by the `GeneralBasicOcr` API contains `ParagNo`.
     * @param ItemCoord $ItemPolygon Pixel coordinates of the text line in the image after rotation correction, which is in the format of `(X-coordinate of top-left point, Y-coordinate of top-left point, width, height)`.
     * @param array $Words Information about a character, including the character itself and its confidence. Supported APIs: `GeneralBasicOCR`, `GeneralAccurateOCR`
     * @param array $WordCoordPoint Coordinates of a word’s four corners on the input image. Supported APIs: `GeneralBasicOCR`, `GeneralAccurateOCR`
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
        if (array_key_exists("DetectedText",$param) and $param["DetectedText"] !== null) {
            $this->DetectedText = $param["DetectedText"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = [];
            foreach ($param["Polygon"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Polygon, $obj);
            }
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("ItemPolygon",$param) and $param["ItemPolygon"] !== null) {
            $this->ItemPolygon = new ItemCoord();
            $this->ItemPolygon->deserialize($param["ItemPolygon"]);
        }

        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new DetectedWords();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }

        if (array_key_exists("WordCoordPoint",$param) and $param["WordCoordPoint"] !== null) {
            $this->WordCoordPoint = [];
            foreach ($param["WordCoordPoint"] as $key => $value){
                $obj = new DetectedWordCoordPoint();
                $obj->deserialize($value);
                array_push($this->WordCoordPoint, $obj);
            }
        }
    }
}
