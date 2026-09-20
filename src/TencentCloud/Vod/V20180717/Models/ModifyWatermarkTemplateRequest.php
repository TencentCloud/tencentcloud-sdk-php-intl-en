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
 * ModifyWatermarkTemplate request structure.
 *
 * @method integer getDefinition() Obtain Watermark template unique identifier.
 * @method void setDefinition(integer $Definition) Set Watermark template unique identifier.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method string getName() Obtain Watermark template name, with a length limit of 64 characters.
 * @method void setName(string $Name) Set Watermark template name, with a length limit of 64 characters.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 * @method string getCoordinateOrigin() Obtain Origin position. Valid values:
<li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the watermark origin is at the top left corner of the image or text.</li>
<li>TopRight: indicates that the coordinate origin is at the top right corner of the video image and the watermark origin is at the top right corner of the image or text.</li>
<li>BottomLeft: indicates that the coordinate origin is at the bottom-left corner of the video image and the watermark origin is at the bottom-left corner of the image or text.</li>
<li>BottomRight: indicates that the coordinate origin is at the bottom right corner of the video image and the watermark origin is at the bottom right corner of the image or text.</li>
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set Origin position. Valid values:
<li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the watermark origin is at the top left corner of the image or text.</li>
<li>TopRight: indicates that the coordinate origin is at the top right corner of the video image and the watermark origin is at the top right corner of the image or text.</li>
<li>BottomLeft: indicates that the coordinate origin is at the bottom-left corner of the video image and the watermark origin is at the bottom-left corner of the image or text.</li>
<li>BottomRight: indicates that the coordinate origin is at the bottom right corner of the video image and the watermark origin is at the bottom right corner of the image or text.</li>
 * @method string getXPos() Obtain The horizontal distance between the watermark origin and the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a watermark is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark XPos is specified in pixels. For example, 100px means XPos is 100 pixels.</li>
 * @method void setXPos(string $XPos) Set The horizontal distance between the watermark origin and the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a watermark is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark XPos is specified in pixels. For example, 100px means XPos is 100 pixels.</li>
 * @method string getYPos() Obtain Vertical position of the watermark origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a watermark is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark YPos is specified in pixels. For example, 100px means YPos is 100 pixels.</li>
 * @method void setYPos(string $YPos) Set Vertical position of the watermark origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a watermark is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark YPos is specified in pixels. For example, 100px means YPos is 100 pixels.</li>
 * @method ImageWatermarkInputForUpdate getImageTemplate() Obtain Image watermark template. This field is only applicable to image watermark templates.
 * @method void setImageTemplate(ImageWatermarkInputForUpdate $ImageTemplate) Set Image watermark template. This field is only applicable to image watermark templates.
 * @method TextWatermarkTemplateInputForUpdate getTextTemplate() Obtain Text watermarking template. This field is only applicable to text watermarking templates.
 * @method void setTextTemplate(TextWatermarkTemplateInputForUpdate $TextTemplate) Set Text watermarking template. This field is only applicable to text watermarking templates.
 * @method SvgWatermarkInputForUpdate getSvgTemplate() Obtain SVG watermark template. This field is only applicable to SVG watermark templates.
 * @method void setSvgTemplate(SvgWatermarkInputForUpdate $SvgTemplate) Set SVG watermark template. This field is only applicable to SVG watermark templates.
 */
class ModifyWatermarkTemplateRequest extends AbstractModel
{
    /**
     * @var integer Watermark template unique identifier.
     */
    public $Definition;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string Watermark template name, with a length limit of 64 characters.
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
<li>BottomLeft: indicates that the coordinate origin is at the bottom-left corner of the video image and the watermark origin is at the bottom-left corner of the image or text.</li>
<li>BottomRight: indicates that the coordinate origin is at the bottom right corner of the video image and the watermark origin is at the bottom right corner of the image or text.</li>
     */
    public $CoordinateOrigin;

    /**
     * @var string The horizontal distance between the watermark origin and the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a watermark is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark XPos is specified in pixels. For example, 100px means XPos is 100 pixels.</li>
     */
    public $XPos;

    /**
     * @var string Vertical position of the watermark origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a watermark is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark YPos is specified in pixels. For example, 100px means YPos is 100 pixels.</li>
     */
    public $YPos;

    /**
     * @var ImageWatermarkInputForUpdate Image watermark template. This field is only applicable to image watermark templates.
     */
    public $ImageTemplate;

    /**
     * @var TextWatermarkTemplateInputForUpdate Text watermarking template. This field is only applicable to text watermarking templates.
     */
    public $TextTemplate;

    /**
     * @var SvgWatermarkInputForUpdate SVG watermark template. This field is only applicable to SVG watermark templates.
     */
    public $SvgTemplate;

    /**
     * @param integer $Definition Watermark template unique identifier.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param string $Name Watermark template name, with a length limit of 64 characters.
     * @param string $Comment Template description, with a length limit of 256 characters.
     * @param string $CoordinateOrigin Origin position. Valid values:
<li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the watermark origin is at the top left corner of the image or text.</li>
<li>TopRight: indicates that the coordinate origin is at the top right corner of the video image and the watermark origin is at the top right corner of the image or text.</li>
<li>BottomLeft: indicates that the coordinate origin is at the bottom-left corner of the video image and the watermark origin is at the bottom-left corner of the image or text.</li>
<li>BottomRight: indicates that the coordinate origin is at the bottom right corner of the video image and the watermark origin is at the bottom right corner of the image or text.</li>
     * @param string $XPos The horizontal distance between the watermark origin and the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a watermark is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark XPos is specified in pixels. For example, 100px means XPos is 100 pixels.</li>
     * @param string $YPos Vertical position of the watermark origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a watermark is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark YPos is specified in pixels. For example, 100px means YPos is 100 pixels.</li>
     * @param ImageWatermarkInputForUpdate $ImageTemplate Image watermark template. This field is only applicable to image watermark templates.
     * @param TextWatermarkTemplateInputForUpdate $TextTemplate Text watermarking template. This field is only applicable to text watermarking templates.
     * @param SvgWatermarkInputForUpdate $SvgTemplate SVG watermark template. This field is only applicable to SVG watermark templates.
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
