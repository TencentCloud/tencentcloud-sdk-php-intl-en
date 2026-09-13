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
 * Avatar position coordinates
 *
 * @method integer getX() Obtain <p>Top-left horizontal coordinate of the avatar</p>
 * @method void setX(integer $X) Set <p>Top-left horizontal coordinate of the avatar</p>
 * @method integer getY() Obtain <p>Top-left vertical coordinate of the avatar</p>
 * @method void setY(integer $Y) Set <p>Top-left vertical coordinate of the avatar</p>
 * @method integer getWidth() Obtain <p>Avatar frame width.</p><p>Unit: px.</p>
 * @method void setWidth(integer $Width) Set <p>Avatar frame width.</p><p>Unit: px.</p>
 * @method integer getHeight() Obtain <p>Avatar frame height.</p><p>Unit: px.</p>
 * @method void setHeight(integer $Height) Set <p>Avatar frame height.</p><p>Unit: px.</p>
 */
class ImageCoordinates extends AbstractModel
{
    /**
     * @var integer <p>Top-left horizontal coordinate of the avatar</p>
     */
    public $X;

    /**
     * @var integer <p>Top-left vertical coordinate of the avatar</p>
     */
    public $Y;

    /**
     * @var integer <p>Avatar frame width.</p><p>Unit: px.</p>
     */
    public $Width;

    /**
     * @var integer <p>Avatar frame height.</p><p>Unit: px.</p>
     */
    public $Height;

    /**
     * @param integer $X <p>Top-left horizontal coordinate of the avatar</p>
     * @param integer $Y <p>Top-left vertical coordinate of the avatar</p>
     * @param integer $Width <p>Avatar frame width.</p><p>Unit: px.</p>
     * @param integer $Height <p>Avatar frame height.</p><p>Unit: px.</p>
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
