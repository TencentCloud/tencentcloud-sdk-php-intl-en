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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark template details.
 *
 * @method integer getDefinition() Obtain Watermark template unique identifier.
 * @method void setDefinition(integer $Definition) Set Watermark template unique identifier.
 * @method string getType() Obtain Watermark type. Valid values:
<li>image: image watermark;</li>
<li>text: text watermark.</li>
 * @method void setType(string $Type) Set Watermark type. Valid values:
<li>image: image watermark;</li>
<li>text: text watermark.</li>
 * @method string getName() Obtain Watermark template name.
 * @method void setName(string $Name) Set Watermark template name.
 * @method string getComment() Obtain Template description information.
 * @method void setComment(string $Comment) Set Template description information.
 * @method string getXPos() Obtain Horizontal position of the watermark image origin point from the video origin point.
<li>If a string ends with %, it indicates that the `Left` of a watermark is a position at a specified percentage of a video's width. For example, `10%` means that `Left` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Left is at the specified pixel position of the video width. For example, 100px means Left is 100 pixels.</li>
 * @method void setXPos(string $XPos) Set Horizontal position of the watermark image origin point from the video origin point.
<li>If a string ends with %, it indicates that the `Left` of a watermark is a position at a specified percentage of a video's width. For example, `10%` means that `Left` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Left is at the specified pixel position of the video width. For example, 100px means Left is 100 pixels.</li>
 * @method string getYPos() Obtain Vertical position of the watermark image origin point from the video origin point.
<li>If a string ends with %, it indicates that the `Top` of a watermark is a location at a specified percentage of a video's height. For example, `10%` means that `Top` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Top is at the specified pixel position of the video height. For example, 100px means the Top is 100 pixels.</li>
 * @method void setYPos(string $YPos) Set Vertical position of the watermark image origin point from the video origin point.
<li>If a string ends with %, it indicates that the `Top` of a watermark is a location at a specified percentage of a video's height. For example, `10%` means that `Top` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Top is at the specified pixel position of the video height. For example, 100px means the Top is 100 pixels.</li>
 * @method ImageWatermarkTemplate getImageTemplate() Obtain Image watermark template. This field is valid only when Type is image.
 * @method void setImageTemplate(ImageWatermarkTemplate $ImageTemplate) Set Image watermark template. This field is valid only when Type is image.
 * @method TextWatermarkTemplateInput getTextTemplate() Obtain Text watermarking template. This field is valid only when Type is text.
 * @method void setTextTemplate(TextWatermarkTemplateInput $TextTemplate) Set Text watermarking template. This field is valid only when Type is text.
 * @method SvgWatermarkInput getSvgTemplate() Obtain SVG watermark template. This field is valid when Type is `svg`.
 * @method void setSvgTemplate(SvgWatermarkInput $SvgTemplate) Set SVG watermark template. This field is valid when Type is `svg`.
 * @method string getCreateTime() Obtain Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getCoordinateOrigin() Obtain Origin position. Valid values:
<li>topLeft: indicates that the coordinate origin is at the top left corner of the video image and the watermark origin is at the top left corner of the image or text.</li>
<li>topRight: indicates that the coordinate origin is at the top right corner of the video image and the watermark origin is at the top right corner of the image or text.</li>
<li>bottomLeft: indicates that the coordinate origin is at the bottom-left corner of the video image and the watermark origin is at the bottom-left corner of the image or text.</li>
<li>bottomRight: indicates that the coordinate origin is at the bottom-right corner of the video image and the watermark origin is at the lower-right of the image or text.</li>
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set Origin position. Valid values:
<li>topLeft: indicates that the coordinate origin is at the top left corner of the video image and the watermark origin is at the top left corner of the image or text.</li>
<li>topRight: indicates that the coordinate origin is at the top right corner of the video image and the watermark origin is at the top right corner of the image or text.</li>
<li>bottomLeft: indicates that the coordinate origin is at the bottom-left corner of the video image and the watermark origin is at the bottom-left corner of the image or text.</li>
<li>bottomRight: indicates that the coordinate origin is at the bottom-right corner of the video image and the watermark origin is at the lower-right of the image or text.</li>
 */
class WatermarkTemplate extends AbstractModel
{
    /**
     * @var integer Watermark template unique identifier.
     */
    public $Definition;

    /**
     * @var string Watermark type. Valid values:
<li>image: image watermark;</li>
<li>text: text watermark.</li>
     */
    public $Type;

    /**
     * @var string Watermark template name.
     */
    public $Name;

    /**
     * @var string Template description information.
     */
    public $Comment;

    /**
     * @var string Horizontal position of the watermark image origin point from the video origin point.
<li>If a string ends with %, it indicates that the `Left` of a watermark is a position at a specified percentage of a video's width. For example, `10%` means that `Left` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Left is at the specified pixel position of the video width. For example, 100px means Left is 100 pixels.</li>
     */
    public $XPos;

    /**
     * @var string Vertical position of the watermark image origin point from the video origin point.
<li>If a string ends with %, it indicates that the `Top` of a watermark is a location at a specified percentage of a video's height. For example, `10%` means that `Top` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Top is at the specified pixel position of the video height. For example, 100px means the Top is 100 pixels.</li>
     */
    public $YPos;

    /**
     * @var ImageWatermarkTemplate Image watermark template. This field is valid only when Type is image.
     */
    public $ImageTemplate;

    /**
     * @var TextWatermarkTemplateInput Text watermarking template. This field is valid only when Type is text.
     */
    public $TextTemplate;

    /**
     * @var SvgWatermarkInput SVG watermark template. This field is valid when Type is `svg`.
     */
    public $SvgTemplate;

    /**
     * @var string Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @var string Origin position. Valid values:
<li>topLeft: indicates that the coordinate origin is at the top left corner of the video image and the watermark origin is at the top left corner of the image or text.</li>
<li>topRight: indicates that the coordinate origin is at the top right corner of the video image and the watermark origin is at the top right corner of the image or text.</li>
<li>bottomLeft: indicates that the coordinate origin is at the bottom-left corner of the video image and the watermark origin is at the bottom-left corner of the image or text.</li>
<li>bottomRight: indicates that the coordinate origin is at the bottom-right corner of the video image and the watermark origin is at the lower-right of the image or text.</li>
     */
    public $CoordinateOrigin;

    /**
     * @param integer $Definition Watermark template unique identifier.
     * @param string $Type Watermark type. Valid values:
<li>image: image watermark;</li>
<li>text: text watermark.</li>
     * @param string $Name Watermark template name.
     * @param string $Comment Template description information.
     * @param string $XPos Horizontal position of the watermark image origin point from the video origin point.
<li>If a string ends with %, it indicates that the `Left` of a watermark is a position at a specified percentage of a video's width. For example, `10%` means that `Left` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Left is at the specified pixel position of the video width. For example, 100px means Left is 100 pixels.</li>
     * @param string $YPos Vertical position of the watermark image origin point from the video origin point.
<li>If a string ends with %, it indicates that the `Top` of a watermark is a location at a specified percentage of a video's height. For example, `10%` means that `Top` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Top is at the specified pixel position of the video height. For example, 100px means the Top is 100 pixels.</li>
     * @param ImageWatermarkTemplate $ImageTemplate Image watermark template. This field is valid only when Type is image.
     * @param TextWatermarkTemplateInput $TextTemplate Text watermarking template. This field is valid only when Type is text.
     * @param SvgWatermarkInput $SvgTemplate SVG watermark template. This field is valid when Type is `svg`.
     * @param string $CreateTime Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $CoordinateOrigin Origin position. Valid values:
<li>topLeft: indicates that the coordinate origin is at the top left corner of the video image and the watermark origin is at the top left corner of the image or text.</li>
<li>topRight: indicates that the coordinate origin is at the top right corner of the video image and the watermark origin is at the top right corner of the image or text.</li>
<li>bottomLeft: indicates that the coordinate origin is at the bottom-left corner of the video image and the watermark origin is at the bottom-left corner of the image or text.</li>
<li>bottomRight: indicates that the coordinate origin is at the bottom-right corner of the video image and the watermark origin is at the lower-right of the image or text.</li>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("ImageTemplate",$param) and $param["ImageTemplate"] !== null) {
            $this->ImageTemplate = new ImageWatermarkTemplate();
            $this->ImageTemplate->deserialize($param["ImageTemplate"]);
        }

        if (array_key_exists("TextTemplate",$param) and $param["TextTemplate"] !== null) {
            $this->TextTemplate = new TextWatermarkTemplateInput();
            $this->TextTemplate->deserialize($param["TextTemplate"]);
        }

        if (array_key_exists("SvgTemplate",$param) and $param["SvgTemplate"] !== null) {
            $this->SvgTemplate = new SvgWatermarkInput();
            $this->SvgTemplate->deserialize($param["SvgTemplate"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CoordinateOrigin",$param) and $param["CoordinateOrigin"] !== null) {
            $this->CoordinateOrigin = $param["CoordinateOrigin"];
        }
    }
}
