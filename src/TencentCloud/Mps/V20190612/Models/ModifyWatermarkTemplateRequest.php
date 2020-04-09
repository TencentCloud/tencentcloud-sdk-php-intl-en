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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWatermarkTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique ID of a watermarking template.
 * @method void setDefinition(integer $Definition) Set Unique ID of a watermarking template.
 * @method string getName() Obtain Watermarking template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Watermarking template name. Length limit: 64 characters.
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method string getCoordinateOrigin() Obtain Origin position. Valid values:
<li>TopLeft: The origin of coordinates is in the top-left corner of the video, and the origin of the watermark is in the top-left corner of the image or text;</li>
<li>TopRight: The origin of coordinates is in the top-right corner of the video, and the origin of the watermark is in the top-right corner of the image or text;</li>
<li>BottomLeft: The origin of coordinates is in the bottom-left corner of the video, and the origin of the watermark is in the bottom-left corner of the image or text;</li>
<li>BottomRight: The origin of coordinates is in the bottom-right corner of the video, and the origin of the watermark is in the bottom-right corner of the image or text.</li>
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set Origin position. Valid values:
<li>TopLeft: The origin of coordinates is in the top-left corner of the video, and the origin of the watermark is in the top-left corner of the image or text;</li>
<li>TopRight: The origin of coordinates is in the top-right corner of the video, and the origin of the watermark is in the top-right corner of the image or text;</li>
<li>BottomLeft: The origin of coordinates is in the bottom-left corner of the video, and the origin of the watermark is in the bottom-left corner of the image or text;</li>
<li>BottomRight: The origin of coordinates is in the bottom-right corner of the video, and the origin of the watermark is in the bottom-right corner of the image or text.</li>
 * @method string getXPos() Obtain The horizontal position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the watermark will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the watermark will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
 * @method void setXPos(string $XPos) Set The horizontal position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the watermark will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the watermark will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
 * @method string getYPos() Obtain The vertical position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the watermark will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the watermark will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
 * @method void setYPos(string $YPos) Set The vertical position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the watermark will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the watermark will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
 * @method ImageWatermarkInputForUpdate getImageTemplate() Obtain Image watermarking template. This field is valid only for image watermarking templates.
 * @method void setImageTemplate(ImageWatermarkInputForUpdate $ImageTemplate) Set Image watermarking template. This field is valid only for image watermarking templates.
 * @method TextWatermarkTemplateInputForUpdate getTextTemplate() Obtain Text watermarking template. This field is valid only for text watermarking templates.
 * @method void setTextTemplate(TextWatermarkTemplateInputForUpdate $TextTemplate) Set Text watermarking template. This field is valid only for text watermarking templates.
 * @method SvgWatermarkInputForUpdate getSvgTemplate() Obtain SVG watermarking template. This field is required when `Type` is `svg` and is invalid when `Type` is `image` or `text`.
 * @method void setSvgTemplate(SvgWatermarkInputForUpdate $SvgTemplate) Set SVG watermarking template. This field is required when `Type` is `svg` and is invalid when `Type` is `image` or `text`.
 */
class ModifyWatermarkTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique ID of a watermarking template.
     */
    public $Definition;

    /**
     * @var string Watermarking template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var string Origin position. Valid values:
<li>TopLeft: The origin of coordinates is in the top-left corner of the video, and the origin of the watermark is in the top-left corner of the image or text;</li>
<li>TopRight: The origin of coordinates is in the top-right corner of the video, and the origin of the watermark is in the top-right corner of the image or text;</li>
<li>BottomLeft: The origin of coordinates is in the bottom-left corner of the video, and the origin of the watermark is in the bottom-left corner of the image or text;</li>
<li>BottomRight: The origin of coordinates is in the bottom-right corner of the video, and the origin of the watermark is in the bottom-right corner of the image or text.</li>
     */
    public $CoordinateOrigin;

    /**
     * @var string The horizontal position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the watermark will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the watermark will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
     */
    public $XPos;

    /**
     * @var string The vertical position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the watermark will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the watermark will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
     */
    public $YPos;

    /**
     * @var ImageWatermarkInputForUpdate Image watermarking template. This field is valid only for image watermarking templates.
     */
    public $ImageTemplate;

    /**
     * @var TextWatermarkTemplateInputForUpdate Text watermarking template. This field is valid only for text watermarking templates.
     */
    public $TextTemplate;

    /**
     * @var SvgWatermarkInputForUpdate SVG watermarking template. This field is required when `Type` is `svg` and is invalid when `Type` is `image` or `text`.
     */
    public $SvgTemplate;

    /**
     * @param integer $Definition Unique ID of a watermarking template.
     * @param string $Name Watermarking template name. Length limit: 64 characters.
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param string $CoordinateOrigin Origin position. Valid values:
<li>TopLeft: The origin of coordinates is in the top-left corner of the video, and the origin of the watermark is in the top-left corner of the image or text;</li>
<li>TopRight: The origin of coordinates is in the top-right corner of the video, and the origin of the watermark is in the top-right corner of the image or text;</li>
<li>BottomLeft: The origin of coordinates is in the bottom-left corner of the video, and the origin of the watermark is in the bottom-left corner of the image or text;</li>
<li>BottomRight: The origin of coordinates is in the bottom-right corner of the video, and the origin of the watermark is in the bottom-right corner of the image or text.</li>
     * @param string $XPos The horizontal position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the watermark will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the watermark will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
     * @param string $YPos The vertical position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the watermark will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the watermark will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
     * @param ImageWatermarkInputForUpdate $ImageTemplate Image watermarking template. This field is valid only for image watermarking templates.
     * @param TextWatermarkTemplateInputForUpdate $TextTemplate Text watermarking template. This field is valid only for text watermarking templates.
     * @param SvgWatermarkInputForUpdate $SvgTemplate SVG watermarking template. This field is required when `Type` is `svg` and is invalid when `Type` is `image` or `text`.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CoordinateOrigin",$param) and $param["CoordinateOrigin"] !== null) {
            $this->CoordinateOrigin = $param["CoordinateOrigin"];
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("ImageTemplate",$param) and $param["ImageTemplate"] !== null) {
            $this->ImageTemplate = new ImageWatermarkInputForUpdate();
            $this->ImageTemplate->deserialize($param["ImageTemplate"]);
        }

        if (array_key_exists("TextTemplate",$param) and $param["TextTemplate"] !== null) {
            $this->TextTemplate = new TextWatermarkTemplateInputForUpdate();
            $this->TextTemplate->deserialize($param["TextTemplate"]);
        }

        if (array_key_exists("SvgTemplate",$param) and $param["SvgTemplate"] !== null) {
            $this->SvgTemplate = new SvgWatermarkInputForUpdate();
            $this->SvgTemplate->deserialize($param["SvgTemplate"]);
        }
    }
}
