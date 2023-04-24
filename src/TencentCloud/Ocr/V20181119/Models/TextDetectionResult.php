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
 * Recognition result
 *
 * @method string getValue() Obtain The recognized text line content.
 * @method void setValue(string $Value) Set The recognized text line content.
 * @method array getPolygon() Obtain The coordinates, represented in the coordinates of the four points.
 * @method void setPolygon(array $Polygon) Set The coordinates, represented in the coordinates of the four points.
 */
class TextDetectionResult extends AbstractModel
{
    /**
     * @var string The recognized text line content.
     */
    public $Value;

    /**
     * @var array The coordinates, represented in the coordinates of the four points.
     */
    public $Polygon;

    /**
     * @param string $Value The recognized text line content.
     * @param array $Polygon The coordinates, represented in the coordinates of the four points.
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = [];
            foreach ($param["Polygon"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Polygon, $obj);
            }
        }
    }
}
