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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Face box information
 *
 * @method integer getX() Obtain Top-left X-axis coordinate of the face box
 * @method void setX(integer $X) Set Top-left X-axis coordinate of the face box
 * @method integer getY() Obtain Top-left Y-axis coordinate of the face box
 * @method void setY(integer $Y) Set Top-left Y-axis coordinate of the face box
 * @method integer getWidth() Obtain Face box width
 * @method void setWidth(integer $Width) Set Face box width
 * @method integer getHeight() Obtain Face box height
 * @method void setHeight(integer $Height) Set Face box height
 */
class FaceRect extends AbstractModel
{
    /**
     * @var integer Top-left X-axis coordinate of the face box
     */
    public $X;

    /**
     * @var integer Top-left Y-axis coordinate of the face box
     */
    public $Y;

    /**
     * @var integer Face box width
     */
    public $Width;

    /**
     * @var integer Face box height
     */
    public $Height;

    /**
     * @param integer $X Top-left X-axis coordinate of the face box
     * @param integer $Y Top-left Y-axis coordinate of the face box
     * @param integer $Width Face box width
     * @param integer $Height Face box height
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
