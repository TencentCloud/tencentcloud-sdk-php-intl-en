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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Layout parameter of the small image, which takes effect in a picture-in-picture template
 *
 * @method string getUserId() Obtain ID of the user in the small image.
 * @method void setUserId(string $UserId) Set ID of the user in the small image.
 * @method integer getStreamType() Obtain Stream type of the small image. 0: camera; 1: screen sharing. If a web user's stream is displayed in the small image, enter 0 for this parameter.
 * @method void setStreamType(integer $StreamType) Set Stream type of the small image. 0: camera; 1: screen sharing. If a web user's stream is displayed in the small image, enter 0 for this parameter.
 * @method integer getImageWidth() Obtain Output width of the small image in pixels. If this parameter is left empty, 0 will be used by default.
 * @method void setImageWidth(integer $ImageWidth) Set Output width of the small image in pixels. If this parameter is left empty, 0 will be used by default.
 * @method integer getImageHeight() Obtain Output height of the small image in pixels. If this parameter is left empty, 0 will be used by default.
 * @method void setImageHeight(integer $ImageHeight) Set Output height of the small image in pixels. If this parameter is left empty, 0 will be used by default.
 * @method integer getLocationX() Obtain Output X-axis offset of the small image in pixels. The sum of `LocationX` and `ImageWidth` cannot exceed the total width of the output mixed stream. If this parameter is left empty, 0 will be used by default.
 * @method void setLocationX(integer $LocationX) Set Output X-axis offset of the small image in pixels. The sum of `LocationX` and `ImageWidth` cannot exceed the total width of the output mixed stream. If this parameter is left empty, 0 will be used by default.
 * @method integer getLocationY() Obtain Output Y-axis offset of the small image in pixels. The sum of `LocationY` and `ImageHeight` cannot exceed the total height of the output mixed stream. If this parameter is left empty, 0 will be used by default.
 * @method void setLocationY(integer $LocationY) Set Output Y-axis offset of the small image in pixels. The sum of `LocationY` and `ImageHeight` cannot exceed the total height of the output mixed stream. If this parameter is left empty, 0 will be used by default.
 */
class SmallVideoLayoutParams extends AbstractModel
{
    /**
     * @var string ID of the user in the small image.
     */
    public $UserId;

    /**
     * @var integer Stream type of the small image. 0: camera; 1: screen sharing. If a web user's stream is displayed in the small image, enter 0 for this parameter.
     */
    public $StreamType;

    /**
     * @var integer Output width of the small image in pixels. If this parameter is left empty, 0 will be used by default.
     */
    public $ImageWidth;

    /**
     * @var integer Output height of the small image in pixels. If this parameter is left empty, 0 will be used by default.
     */
    public $ImageHeight;

    /**
     * @var integer Output X-axis offset of the small image in pixels. The sum of `LocationX` and `ImageWidth` cannot exceed the total width of the output mixed stream. If this parameter is left empty, 0 will be used by default.
     */
    public $LocationX;

    /**
     * @var integer Output Y-axis offset of the small image in pixels. The sum of `LocationY` and `ImageHeight` cannot exceed the total height of the output mixed stream. If this parameter is left empty, 0 will be used by default.
     */
    public $LocationY;

    /**
     * @param string $UserId ID of the user in the small image.
     * @param integer $StreamType Stream type of the small image. 0: camera; 1: screen sharing. If a web user's stream is displayed in the small image, enter 0 for this parameter.
     * @param integer $ImageWidth Output width of the small image in pixels. If this parameter is left empty, 0 will be used by default.
     * @param integer $ImageHeight Output height of the small image in pixels. If this parameter is left empty, 0 will be used by default.
     * @param integer $LocationX Output X-axis offset of the small image in pixels. The sum of `LocationX` and `ImageWidth` cannot exceed the total width of the output mixed stream. If this parameter is left empty, 0 will be used by default.
     * @param integer $LocationY Output Y-axis offset of the small image in pixels. The sum of `LocationY` and `ImageHeight` cannot exceed the total height of the output mixed stream. If this parameter is left empty, 0 will be used by default.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }
    }
}
