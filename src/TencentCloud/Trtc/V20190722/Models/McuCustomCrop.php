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
 * The cropping parameters for mixed videos.
 *
 * @method integer getLocationX() Obtain The horizontal offset (pixels) of the starting point for cropping. This parameter must be greater than 0.
 * @method void setLocationX(integer $LocationX) Set The horizontal offset (pixels) of the starting point for cropping. This parameter must be greater than 0.
 * @method integer getLocationY() Obtain The vertical offset (pixels) of the starting point for cropping. This parameter must be greater than 0.
 * @method void setLocationY(integer $LocationY) Set The vertical offset (pixels) of the starting point for cropping. This parameter must be greater than 0.
 * @method integer getWidth() Obtain The video width (pixels) after cropping. The sum of this parameter and `LocationX` cannot be greater than 10000.
 * @method void setWidth(integer $Width) Set The video width (pixels) after cropping. The sum of this parameter and `LocationX` cannot be greater than 10000.
 * @method integer getHeight() Obtain The video height (pixels) after cropping. The sum of this parameter and `LocationY` cannot be greater than 10000.
 * @method void setHeight(integer $Height) Set The video height (pixels) after cropping. The sum of this parameter and `LocationY` cannot be greater than 10000.
 */
class McuCustomCrop extends AbstractModel
{
    /**
     * @var integer The horizontal offset (pixels) of the starting point for cropping. This parameter must be greater than 0.
     */
    public $LocationX;

    /**
     * @var integer The vertical offset (pixels) of the starting point for cropping. This parameter must be greater than 0.
     */
    public $LocationY;

    /**
     * @var integer The video width (pixels) after cropping. The sum of this parameter and `LocationX` cannot be greater than 10000.
     */
    public $Width;

    /**
     * @var integer The video height (pixels) after cropping. The sum of this parameter and `LocationY` cannot be greater than 10000.
     */
    public $Height;

    /**
     * @param integer $LocationX The horizontal offset (pixels) of the starting point for cropping. This parameter must be greater than 0.
     * @param integer $LocationY The vertical offset (pixels) of the starting point for cropping. This parameter must be greater than 0.
     * @param integer $Width The video width (pixels) after cropping. The sum of this parameter and `LocationX` cannot be greater than 10000.
     * @param integer $Height The video height (pixels) after cropping. The sum of this parameter and `LocationY` cannot be greater than 10000.
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
        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
