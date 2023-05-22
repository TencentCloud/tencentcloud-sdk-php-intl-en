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
 * The coordinates of the four vertices of the text
Note: This field may return null, indicating that no valid values can be obtained.
 *
 * @method Coord getLeftTop() Obtain The coordinates of the upper-left vertex.
 * @method void setLeftTop(Coord $LeftTop) Set The coordinates of the upper-left vertex.
 * @method Coord getRightTop() Obtain The coordinates of the upper-right vertex.
 * @method void setRightTop(Coord $RightTop) Set The coordinates of the upper-right vertex.
 * @method Coord getRightBottom() Obtain The coordinates of the lower-left vertex.
 * @method void setRightBottom(Coord $RightBottom) Set The coordinates of the lower-left vertex.
 * @method Coord getLeftBottom() Obtain The coordinates of the lower-right vertex.
 * @method void setLeftBottom(Coord $LeftBottom) Set The coordinates of the lower-right vertex.
 */
class Polygon extends AbstractModel
{
    /**
     * @var Coord The coordinates of the upper-left vertex.
     */
    public $LeftTop;

    /**
     * @var Coord The coordinates of the upper-right vertex.
     */
    public $RightTop;

    /**
     * @var Coord The coordinates of the lower-left vertex.
     */
    public $RightBottom;

    /**
     * @var Coord The coordinates of the lower-right vertex.
     */
    public $LeftBottom;

    /**
     * @param Coord $LeftTop The coordinates of the upper-left vertex.
     * @param Coord $RightTop The coordinates of the upper-right vertex.
     * @param Coord $RightBottom The coordinates of the lower-left vertex.
     * @param Coord $LeftBottom The coordinates of the lower-right vertex.
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
        if (array_key_exists("LeftTop",$param) and $param["LeftTop"] !== null) {
            $this->LeftTop = new Coord();
            $this->LeftTop->deserialize($param["LeftTop"]);
        }

        if (array_key_exists("RightTop",$param) and $param["RightTop"] !== null) {
            $this->RightTop = new Coord();
            $this->RightTop->deserialize($param["RightTop"]);
        }

        if (array_key_exists("RightBottom",$param) and $param["RightBottom"] !== null) {
            $this->RightBottom = new Coord();
            $this->RightBottom->deserialize($param["RightBottom"]);
        }

        if (array_key_exists("LeftBottom",$param) and $param["LeftBottom"] !== null) {
            $this->LeftBottom = new Coord();
            $this->LeftBottom->deserialize($param["LeftBottom"]);
        }
    }
}
