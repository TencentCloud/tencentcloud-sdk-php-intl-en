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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LicensePlateOCR response structure.
 *
 * @method string getNumber() Obtain The recognized license plate number.
 * @method void setNumber(string $Number) Set The recognized license plate number.
 * @method integer getConfidence() Obtain The confidence score (0–100).
 * @method void setConfidence(integer $Confidence) Set The confidence score (0–100).
 * @method Rect getRect() Obtain The bounding box coordinates of the text line in the original image.
 * @method void setRect(Rect $Rect) Set The bounding box coordinates of the text line in the original image.
 * @method string getColor() Obtain The recognized license plate color, which currently includes "white", "black", "blue", "green", "yellow", "yellow-green", and "temporary plate".
 * @method void setColor(string $Color) Set The recognized license plate color, which currently includes "white", "black", "blue", "green", "yellow", "yellow-green", and "temporary plate".
 * @method array getLicensePlateInfos() Obtain The vehicle license plate information.
 * @method void setLicensePlateInfos(array $LicensePlateInfos) Set The vehicle license plate information.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class LicensePlateOCRResponse extends AbstractModel
{
    /**
     * @var string The recognized license plate number.
     */
    public $Number;

    /**
     * @var integer The confidence score (0–100).
     */
    public $Confidence;

    /**
     * @var Rect The bounding box coordinates of the text line in the original image.
     */
    public $Rect;

    /**
     * @var string The recognized license plate color, which currently includes "white", "black", "blue", "green", "yellow", "yellow-green", and "temporary plate".
     */
    public $Color;

    /**
     * @var array The vehicle license plate information.
     */
    public $LicensePlateInfos;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Number The recognized license plate number.
     * @param integer $Confidence The confidence score (0–100).
     * @param Rect $Rect The bounding box coordinates of the text line in the original image.
     * @param string $Color The recognized license plate color, which currently includes "white", "black", "blue", "green", "yellow", "yellow-green", and "temporary plate".
     * @param array $LicensePlateInfos The vehicle license plate information.
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Rect",$param) and $param["Rect"] !== null) {
            $this->Rect = new Rect();
            $this->Rect->deserialize($param["Rect"]);
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("LicensePlateInfos",$param) and $param["LicensePlateInfos"] !== null) {
            $this->LicensePlateInfos = [];
            foreach ($param["LicensePlateInfos"] as $key => $value){
                $obj = new LicensePlateInfo();
                $obj->deserialize($value);
                array_push($this->LicensePlateInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
