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
 * Word coordinates info.
 *
 * @method string getDetectedText() Obtain The text content.
 * @method void setDetectedText(string $DetectedText) Set The text content.
 * @method Polygon getCoord() Obtain The coordinates of the four vertices.
 * @method void setCoord(Polygon $Coord) Set The coordinates of the four vertices.
 */
class WordPolygon extends AbstractModel
{
    /**
     * @var string The text content.
     */
    public $DetectedText;

    /**
     * @var Polygon The coordinates of the four vertices.
     */
    public $Coord;

    /**
     * @param string $DetectedText The text content.
     * @param Polygon $Coord The coordinates of the four vertices.
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

        if (array_key_exists("Coord",$param) and $param["Coord"] !== null) {
            $this->Coord = new Polygon();
            $this->Coord->deserialize($param["Coord"]);
        }
    }
}
