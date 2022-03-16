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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark image settings
 *
 * @method string getLocation() Obtain Origin
 * @method void setLocation(string $Location) Set Origin
 * @method integer getXPos() Obtain The watermark image’s horizontal distance from the origin as a percentage of the video width
 * @method void setXPos(integer $XPos) Set The watermark image’s horizontal distance from the origin as a percentage of the video width
 * @method integer getYPos() Obtain The watermark image’s vertical distance from the origin as a percentage of the video height
 * @method void setYPos(integer $YPos) Set The watermark image’s vertical distance from the origin as a percentage of the video height
 * @method integer getWidth() Obtain The watermark image’s width as a percentage of the video width
 * @method void setWidth(integer $Width) Set The watermark image’s width as a percentage of the video width
 * @method integer getHeight() Obtain The watermark image’s height as a percentage of the video height
 * @method void setHeight(integer $Height) Set The watermark image’s height as a percentage of the video height
 */
class DescribeImageSettings extends AbstractModel
{
    /**
     * @var string Origin
     */
    public $Location;

    /**
     * @var integer The watermark image’s horizontal distance from the origin as a percentage of the video width
     */
    public $XPos;

    /**
     * @var integer The watermark image’s vertical distance from the origin as a percentage of the video height
     */
    public $YPos;

    /**
     * @var integer The watermark image’s width as a percentage of the video width
     */
    public $Width;

    /**
     * @var integer The watermark image’s height as a percentage of the video height
     */
    public $Height;

    /**
     * @param string $Location Origin
     * @param integer $XPos The watermark image’s horizontal distance from the origin as a percentage of the video width
     * @param integer $YPos The watermark image’s vertical distance from the origin as a percentage of the video height
     * @param integer $Width The watermark image’s width as a percentage of the video width
     * @param integer $Height The watermark image’s height as a percentage of the video height
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
        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
