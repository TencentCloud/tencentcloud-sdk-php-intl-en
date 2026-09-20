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
 * Rotating image template details.
 *
 * @method integer getDefinition() Obtain Unique identifier for rotation diagram template.
 * @method void setDefinition(integer $Definition) Set Unique identifier for rotation diagram template.
 * @method string getType() Obtain Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: custom template.</li>
 * @method void setType(string $Type) Set Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: custom template.</li>
 * @method string getName() Obtain Rotating image template name.
 * @method void setName(string $Name) Set Rotating image template name.
 * @method string getComment() Obtain Animated image template description information.
 * @method void setComment(string $Comment) Set Animated image template description information.
 * @method integer getWidth() Obtain Maximum value of the animated gif width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method void setWidth(integer $Width) Set Maximum value of the animated gif width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method integer getHeight() Obtain Maximum value of the animated gif height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method void setHeight(integer $Height) Set Maximum value of the animated gif height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method string getResolutionAdaptive() Obtain Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
 * @method string getFormat() Obtain Animated image file format.
 * @method void setFormat(string $Format) Set Animated image file format.
 * @method integer getFps() Obtain Frame rate.
 * @method void setFps(integer $Fps) Set Frame rate.
 * @method float getQuality() Obtain Image quality.
 * @method void setQuality(float $Quality) Set Image quality.
 * @method string getCreateTime() Obtain Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AnimatedGraphicsTemplate extends AbstractModel
{
    /**
     * @var integer Unique identifier for rotation diagram template.
     */
    public $Definition;

    /**
     * @var string Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string Rotating image template name.
     */
    public $Name;

    /**
     * @var string Animated image template description information.
     */
    public $Comment;

    /**
     * @var integer Maximum value of the animated gif width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     */
    public $Width;

    /**
     * @var integer Maximum value of the animated gif height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     */
    public $Height;

    /**
     * @var string Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var string Animated image file format.
     */
    public $Format;

    /**
     * @var integer Frame rate.
     */
    public $Fps;

    /**
     * @var float Image quality.
     */
    public $Quality;

    /**
     * @var string Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique identifier for rotation diagram template.
     * @param string $Type Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: custom template.</li>
     * @param string $Name Rotating image template name.
     * @param string $Comment Animated image template description information.
     * @param integer $Width Maximum value of the animated gif width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     * @param integer $Height Maximum value of the animated gif height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     * @param string $ResolutionAdaptive Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
     * @param string $Format Animated image file format.
     * @param integer $Fps Frame rate.
     * @param float $Quality Image quality.
     * @param string $CreateTime Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
