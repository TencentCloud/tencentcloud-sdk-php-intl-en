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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Paragraph text rotation information
 *
 * @method array getCoord() Obtain Paragraph text coordinates
 * @method void setCoord(array $Coord) Set Paragraph text coordinates
 * @method float getTiltAngle() Obtain Rotation angle
 * @method void setTiltAngle(float $TiltAngle) Set Rotation angle
 * @method boolean getValid() Obtain Whether the paragraph text information is valid
 * @method void setValid(boolean $Valid) Set Whether the paragraph text information is valid
 */
class RotateParagraphRect extends AbstractModel
{
    /**
     * @var array Paragraph text coordinates
     */
    public $Coord;

    /**
     * @var float Rotation angle
     */
    public $TiltAngle;

    /**
     * @var boolean Whether the paragraph text information is valid
     */
    public $Valid;

    /**
     * @param array $Coord Paragraph text coordinates
     * @param float $TiltAngle Rotation angle
     * @param boolean $Valid Whether the paragraph text information is valid
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
        if (array_key_exists("Coord",$param) and $param["Coord"] !== null) {
            $this->Coord = [];
            foreach ($param["Coord"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Coord, $obj);
            }
        }

        if (array_key_exists("TiltAngle",$param) and $param["TiltAngle"] !== null) {
            $this->TiltAngle = $param["TiltAngle"];
        }

        if (array_key_exists("Valid",$param) and $param["Valid"] !== null) {
            $this->Valid = $param["Valid"];
        }
    }
}
