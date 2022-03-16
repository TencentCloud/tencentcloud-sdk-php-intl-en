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
 * @method string getImageType() Obtain Image file format. Valid values: png, jpg.
 * @method void setImageType(string $ImageType) Set Image file format. Valid values: png, jpg.
 * @method string getImageContent() Obtain Base64 encoded image content
 * @method void setImageContent(string $ImageContent) Set Base64 encoded image content
 * @method string getLocation() Obtain Origin. Valid values: TOP_LEFT, BOTTOM_LEFT, TOP_RIGHT, BOTTOM_RIGHT.
 * @method void setLocation(string $Location) Set Origin. Valid values: TOP_LEFT, BOTTOM_LEFT, TOP_RIGHT, BOTTOM_RIGHT.
 * @method integer getXPos() Obtain The watermark’s horizontal distance from the origin as a percentage of the video width. Value range: 0-100. Default: 10.
 * @method void setXPos(integer $XPos) Set The watermark’s horizontal distance from the origin as a percentage of the video width. Value range: 0-100. Default: 10.
 * @method integer getYPos() Obtain The watermark’s vertical distance from the origin as a percentage of the video height. Value range: 0-100. Default: 10.
 * @method void setYPos(integer $YPos) Set The watermark’s vertical distance from the origin as a percentage of the video height. Value range: 0-100. Default: 10.
 * @method integer getWidth() Obtain The watermark image’s width as a percentage of the video width. Value range: 0-100. Default: 10.
`0` means to scale the width proportionally to the height.
You cannot set both `Width` and `Height` to `0`.
 * @method void setWidth(integer $Width) Set The watermark image’s width as a percentage of the video width. Value range: 0-100. Default: 10.
`0` means to scale the width proportionally to the height.
You cannot set both `Width` and `Height` to `0`.
 * @method integer getHeight() Obtain The watermark image’s height as a percentage of the video height. Value range: 0-100. Default: 10.
`0` means to scale the height proportionally to the width.
You cannot set both `Width` and `Height` to `0`.
 * @method void setHeight(integer $Height) Set The watermark image’s height as a percentage of the video height. Value range: 0-100. Default: 10.
`0` means to scale the height proportionally to the width.
You cannot set both `Width` and `Height` to `0`.
 */
class CreateImageSettings extends AbstractModel
{
    /**
     * @var string Image file format. Valid values: png, jpg.
     */
    public $ImageType;

    /**
     * @var string Base64 encoded image content
     */
    public $ImageContent;

    /**
     * @var string Origin. Valid values: TOP_LEFT, BOTTOM_LEFT, TOP_RIGHT, BOTTOM_RIGHT.
     */
    public $Location;

    /**
     * @var integer The watermark’s horizontal distance from the origin as a percentage of the video width. Value range: 0-100. Default: 10.
     */
    public $XPos;

    /**
     * @var integer The watermark’s vertical distance from the origin as a percentage of the video height. Value range: 0-100. Default: 10.
     */
    public $YPos;

    /**
     * @var integer The watermark image’s width as a percentage of the video width. Value range: 0-100. Default: 10.
`0` means to scale the width proportionally to the height.
You cannot set both `Width` and `Height` to `0`.
     */
    public $Width;

    /**
     * @var integer The watermark image’s height as a percentage of the video height. Value range: 0-100. Default: 10.
`0` means to scale the height proportionally to the width.
You cannot set both `Width` and `Height` to `0`.
     */
    public $Height;

    /**
     * @param string $ImageType Image file format. Valid values: png, jpg.
     * @param string $ImageContent Base64 encoded image content
     * @param string $Location Origin. Valid values: TOP_LEFT, BOTTOM_LEFT, TOP_RIGHT, BOTTOM_RIGHT.
     * @param integer $XPos The watermark’s horizontal distance from the origin as a percentage of the video width. Value range: 0-100. Default: 10.
     * @param integer $YPos The watermark’s vertical distance from the origin as a percentage of the video height. Value range: 0-100. Default: 10.
     * @param integer $Width The watermark image’s width as a percentage of the video width. Value range: 0-100. Default: 10.
`0` means to scale the width proportionally to the height.
You cannot set both `Width` and `Height` to `0`.
     * @param integer $Height The watermark image’s height as a percentage of the video height. Value range: 0-100. Default: 10.
`0` means to scale the height proportionally to the width.
You cannot set both `Width` and `Height` to `0`.
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
        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("ImageContent",$param) and $param["ImageContent"] !== null) {
            $this->ImageContent = $param["ImageContent"];
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
