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
 * The information of watermark images.
 *
 * @method string getWaterMarkUrl() Obtain The download URLs of the watermark images, which must be in JPG or PNG format and cannot be larger than 5 MB.
 * @method void setWaterMarkUrl(string $WaterMarkUrl) Set The download URLs of the watermark images, which must be in JPG or PNG format and cannot be larger than 5 MB.
 * @method integer getTop() Obtain The Y axis of the image's top-left corner. Value range: [0, 2560]. The value cannot be larger than the canvas height.
 * @method void setTop(integer $Top) Set The Y axis of the image's top-left corner. Value range: [0, 2560]. The value cannot be larger than the canvas height.
 * @method integer getLeft() Obtain The X axis of the image’s top-left corner. Value range: [0, 2560]. The value cannot be larger than the canvas width.
 * @method void setLeft(integer $Left) Set The X axis of the image’s top-left corner. Value range: [0, 2560]. The value cannot be larger than the canvas width.
 * @method integer getWidth() Obtain The relative width of the image. Value range: [0, 2560]. The sum of the values of this parameter and `Left` cannot exceed the canvas width.
 * @method void setWidth(integer $Width) Set The relative width of the image. Value range: [0, 2560]. The sum of the values of this parameter and `Left` cannot exceed the canvas width.
 * @method integer getHeight() Obtain The relative height of the image. Value range: [0, 2560]. The sum of the values of this parameter and `Top` cannot exceed the canvas height.
 * @method void setHeight(integer $Height) Set The relative height of the image. Value range: [0, 2560]. The sum of the values of this parameter and `Top` cannot exceed the canvas height.
 */
class WaterMarkImage extends AbstractModel
{
    /**
     * @var string The download URLs of the watermark images, which must be in JPG or PNG format and cannot be larger than 5 MB.
     */
    public $WaterMarkUrl;

    /**
     * @var integer The Y axis of the image's top-left corner. Value range: [0, 2560]. The value cannot be larger than the canvas height.
     */
    public $Top;

    /**
     * @var integer The X axis of the image’s top-left corner. Value range: [0, 2560]. The value cannot be larger than the canvas width.
     */
    public $Left;

    /**
     * @var integer The relative width of the image. Value range: [0, 2560]. The sum of the values of this parameter and `Left` cannot exceed the canvas width.
     */
    public $Width;

    /**
     * @var integer The relative height of the image. Value range: [0, 2560]. The sum of the values of this parameter and `Top` cannot exceed the canvas height.
     */
    public $Height;

    /**
     * @param string $WaterMarkUrl The download URLs of the watermark images, which must be in JPG or PNG format and cannot be larger than 5 MB.
     * @param integer $Top The Y axis of the image's top-left corner. Value range: [0, 2560]. The value cannot be larger than the canvas height.
     * @param integer $Left The X axis of the image’s top-left corner. Value range: [0, 2560]. The value cannot be larger than the canvas width.
     * @param integer $Width The relative width of the image. Value range: [0, 2560]. The sum of the values of this parameter and `Left` cannot exceed the canvas width.
     * @param integer $Height The relative height of the image. Value range: [0, 2560]. The sum of the values of this parameter and `Top` cannot exceed the canvas height.
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
        if (array_key_exists("WaterMarkUrl",$param) and $param["WaterMarkUrl"] !== null) {
            $this->WaterMarkUrl = $param["WaterMarkUrl"];
        }

        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
