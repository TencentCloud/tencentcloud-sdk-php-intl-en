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
 * CreateWatermarkTemplate request structure.
 *
 * @method string getType() Obtain Watermark type. Valid values:
<li>image: image watermark.</li>
<li>Text: text watermark.</li>
<li>svg: SVG watermark.</li>
 * @method void setType(string $Type) Set Watermark type. Valid values:
<li>image: image watermark.</li>
<li>Text: text watermark.</li>
<li>svg: SVG watermark.</li>
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Watermark template name. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Watermark template name. The length cannot exceed 64 characters.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 * @method string getCoordinateOrigin() Obtain Origin position. Valid values:
<li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the watermark origin is at the top left corner of the image or text.</li>
<li>TopRight: indicates that the coordinate origin is at the top right corner of the video image and the watermark origin is at the top right corner of the image or text.</li>
<li>BottomLeft: indicates that the coordinate origin is at the bottom left corner of the video image and the watermark origin is at the bottom left corner of the image or text.</li>
<li>BottomRight: indicates that the coordinate origin is at the bottom right corner of the video image and the watermark origin is at the bottom right corner of the image or text.</li>
Default value: TopLeft.
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set Origin position. Valid values:
<li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the watermark origin is at the top left corner of the image or text.</li>
<li>TopRight: indicates that the coordinate origin is at the top right corner of the video image and the watermark origin is at the top right corner of the image or text.</li>
<li>BottomLeft: indicates that the coordinate origin is at the bottom left corner of the video image and the watermark origin is at the bottom left corner of the image or text.</li>
<li>BottomRight: indicates that the coordinate origin is at the bottom right corner of the video image and the watermark origin is at the bottom right corner of the image or text.</li>
Default value: TopLeft.
 * @method string getXPos() Obtain The horizontal position of the watermark origin from the origin of coordinates of the video image. Support two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a watermark is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark XPos is specified in pixels, for example, 100px means XPos is 100 pixels.</li>
Default value: 0px.
 * @method void setXPos(string $XPos) Set The horizontal position of the watermark origin from the origin of coordinates of the video image. Support two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a watermark is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark XPos is specified in pixels, for example, 100px means XPos is 100 pixels.</li>
Default value: 0px.
 * @method string getYPos() Obtain The vertical position of the watermark origin from the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a watermark is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark YPos is specified in pixels, for example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
 * @method void setYPos(string $YPos) Set The vertical position of the watermark origin from the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a watermark is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark YPos is specified in pixels, for example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
 * @method ImageWatermarkInput getImageTemplate() Obtain Image watermark template. This field is required when Type is image. Invalid field when Type is text.
 * @method void setImageTemplate(ImageWatermarkInput $ImageTemplate) Set Image watermark template. This field is required when Type is image. Invalid field when Type is text.
 * @method TextWatermarkTemplateInput getTextTemplate() Obtain Text watermarking template. This field is required when Type is text. Invalid field when Type is image.
 * @method void setTextTemplate(TextWatermarkTemplateInput $TextTemplate) Set Text watermarking template. This field is required when Type is text. Invalid field when Type is image.
 * @method SvgWatermarkInput getSvgTemplate() Obtain SVG Watermark Template. This field is required when Type is svg. Invalid field when Type is image or text.
 * @method void setSvgTemplate(SvgWatermarkInput $SvgTemplate) Set SVG Watermark Template. This field is required when Type is svg. Invalid field when Type is image or text.
 */
class CreateWatermarkTemplateRequest extends AbstractModel
{
    /**
     * @var string Watermark type. Valid values:
<li>image: image watermark.</li>
<li>Text: text watermark.</li>
<li>svg: SVG watermark.</li>
     */
    public $Type;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Watermark template name. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var string Origin position. Valid values:
<li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the watermark origin is at the top left corner of the image or text.</li>
<li>TopRight: indicates that the coordinate origin is at the top right corner of the video image and the watermark origin is at the top right corner of the image or text.</li>
<li>BottomLeft: indicates that the coordinate origin is at the bottom left corner of the video image and the watermark origin is at the bottom left corner of the image or text.</li>
<li>BottomRight: indicates that the coordinate origin is at the bottom right corner of the video image and the watermark origin is at the bottom right corner of the image or text.</li>
Default value: TopLeft.
     */
    public $CoordinateOrigin;

    /**
     * @var string The horizontal position of the watermark origin from the origin of coordinates of the video image. Support two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a watermark is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark XPos is specified in pixels, for example, 100px means XPos is 100 pixels.</li>
Default value: 0px.
     */
    public $XPos;

    /**
     * @var string The vertical position of the watermark origin from the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a watermark is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark YPos is specified in pixels, for example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
     */
    public $YPos;

    /**
     * @var ImageWatermarkInput Image watermark template. This field is required when Type is image. Invalid field when Type is text.
     */
    public $ImageTemplate;

    /**
     * @var TextWatermarkTemplateInput Text watermarking template. This field is required when Type is text. Invalid field when Type is image.
     */
    public $TextTemplate;

    /**
     * @var SvgWatermarkInput SVG Watermark Template. This field is required when Type is svg. Invalid field when Type is image or text.
     */
    public $SvgTemplate;

    /**
     * @param string $Type Watermark type. Valid values:
<li>image: image watermark.</li>
<li>Text: text watermark.</li>
<li>svg: SVG watermark.</li>
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Watermark template name. The length cannot exceed 64 characters.
     * @param string $Comment Template description, with a length limit of 256 characters.
     * @param string $CoordinateOrigin Origin position. Valid values:
<li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the watermark origin is at the top left corner of the image or text.</li>
<li>TopRight: indicates that the coordinate origin is at the top right corner of the video image and the watermark origin is at the top right corner of the image or text.</li>
<li>BottomLeft: indicates that the coordinate origin is at the bottom left corner of the video image and the watermark origin is at the bottom left corner of the image or text.</li>
<li>BottomRight: indicates that the coordinate origin is at the bottom right corner of the video image and the watermark origin is at the bottom right corner of the image or text.</li>
Default value: TopLeft.
     * @param string $XPos The horizontal position of the watermark origin from the origin of coordinates of the video image. Support two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a watermark is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark XPos is specified in pixels, for example, 100px means XPos is 100 pixels.</li>
Default value: 0px.
     * @param string $YPos The vertical position of the watermark origin from the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a watermark is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark YPos is specified in pixels, for example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
     * @param ImageWatermarkInput $ImageTemplate Image watermark template. This field is required when Type is image. Invalid field when Type is text.
     * @param TextWatermarkTemplateInput $TextTemplate Text watermarking template. This field is required when Type is text. Invalid field when Type is image.
     * @param SvgWatermarkInput $SvgTemplate SVG Watermark Template. This field is required when Type is svg. Invalid field when Type is image or text.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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
            $this->ImageTemplate = new ImageWatermarkInput();
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
    }
}
