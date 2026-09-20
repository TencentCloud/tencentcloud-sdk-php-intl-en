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
 * Sprite sheet template details
 *
 * @method integer getDefinition() Obtain Unique identifier of the sprite template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the sprite template.
 * @method string getType() Obtain Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
 * @method void setType(string $Type) Set Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
 * @method string getName() Obtain Sprite sheet template name.
 * @method void setName(string $Name) Set Sprite sheet template name.
 * @method integer getWidth() Obtain Maximum width (or long side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method void setWidth(integer $Width) Set Maximum width (or long side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method integer getHeight() Obtain Maximum height (or short side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method void setHeight(integer $Height) Set Maximum height (or short side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method string getResolutionAdaptive() Obtain Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height represents the video height.</li>
Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height represents the video height.</li>
Default value: open.
 * @method string getSampleType() Obtain Sampling type.
 * @method void setSampleType(string $SampleType) Set Sampling type.
 * @method integer getSampleInterval() Obtain Sampling interval.
 * @method void setSampleInterval(integer $SampleInterval) Set Sampling interval.
 * @method integer getRowCount() Obtain Number of rows of small images in the sprite image.
 * @method void setRowCount(integer $RowCount) Set Number of rows of small images in the sprite image.
 * @method integer getColumnCount() Obtain Number of columns of small images in the sprite image.
 * @method void setColumnCount(integer $ColumnCount) Set Number of columns of small images in the sprite image.
 * @method string getCreateTime() Obtain Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getFillType() Obtain Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li>black: black bars, maintain video aspect ratio, edges filled with black.</li>
Default value: black.
 * @method void setFillType(string $FillType) Set Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li>black: black bars, maintain video aspect ratio, edges filled with black.</li>
Default value: black.
 * @method string getComment() Obtain Template description information.
 * @method void setComment(string $Comment) Set Template description information.
 * @method string getFormat() Obtain Image format.
 * @method void setFormat(string $Format) Set Image format.
 */
class ImageSpriteTemplate extends AbstractModel
{
    /**
     * @var integer Unique identifier of the sprite template.
     */
    public $Definition;

    /**
     * @var string Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string Sprite sheet template name.
     */
    public $Name;

    /**
     * @var integer Maximum width (or long side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     */
    public $Width;

    /**
     * @var integer Maximum height (or short side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     */
    public $Height;

    /**
     * @var string Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height represents the video height.</li>
Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var string Sampling type.
     */
    public $SampleType;

    /**
     * @var integer Sampling interval.
     */
    public $SampleInterval;

    /**
     * @var integer Number of rows of small images in the sprite image.
     */
    public $RowCount;

    /**
     * @var integer Number of columns of small images in the sprite image.
     */
    public $ColumnCount;

    /**
     * @var string Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @var string Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li>black: black bars, maintain video aspect ratio, edges filled with black.</li>
Default value: black.
     */
    public $FillType;

    /**
     * @var string Template description information.
     */
    public $Comment;

    /**
     * @var string Image format.
     */
    public $Format;

    /**
     * @param integer $Definition Unique identifier of the sprite template.
     * @param string $Type Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
     * @param string $Name Sprite sheet template name.
     * @param integer $Width Maximum width (or long side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     * @param integer $Height Maximum height (or short side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     * @param string $ResolutionAdaptive Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height represents the video height.</li>
Default value: open.
     * @param string $SampleType Sampling type.
     * @param integer $SampleInterval Sampling interval.
     * @param integer $RowCount Number of rows of small images in the sprite image.
     * @param integer $ColumnCount Number of columns of small images in the sprite image.
     * @param string $CreateTime Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $FillType Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li>black: black bars, maintain video aspect ratio, edges filled with black.</li>
Default value: black.
     * @param string $Comment Template description information.
     * @param string $Format Image format.
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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
        }

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = $param["SampleType"];
        }

        if (array_key_exists("SampleInterval",$param) and $param["SampleInterval"] !== null) {
            $this->SampleInterval = $param["SampleInterval"];
        }

        if (array_key_exists("RowCount",$param) and $param["RowCount"] !== null) {
            $this->RowCount = $param["RowCount"];
        }

        if (array_key_exists("ColumnCount",$param) and $param["ColumnCount"] !== null) {
            $this->ColumnCount = $param["ColumnCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
