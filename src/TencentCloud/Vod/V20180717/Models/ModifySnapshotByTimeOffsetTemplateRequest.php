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
 * ModifySnapshotByTimeOffsetTemplate request structure.
 *
 * @method integer getDefinition() Obtain <p>Unique identifier of screenshot template at specified time point.</p>
 * @method void setDefinition(integer $Definition) Set <p>Unique identifier of screenshot template at specified time point.</p>
 * @method integer getSubAppId() Obtain <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
 * @method string getName() Obtain <p>Screenshot template name at specified time point. Length limit: 64 characters.</p>
 * @method void setName(string $Name) Set <p>Screenshot template name at specified time point. Length limit: 64 characters.</p>
 * @method integer getWidth() Obtain <p>The maximum value of the screenshot width (or long side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
 * @method void setWidth(integer $Width) Set <p>The maximum value of the screenshot width (or long side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
 * @method integer getHeight() Obtain <p>The maximum value of the screenshot height (or short side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
 * @method void setHeight(integer $Height) Set <p>The maximum value of the screenshot height (or short side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
 * @method string getResolutionAdaptive() Obtain <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>Default value: open.
 * @method string getFormat() Obtain <p>Image format. Valid values: jpg, png, and webp. Default value: jpg.</p>
 * @method void setFormat(string $Format) Set <p>Image format. Valid values: jpg, png, and webp. Default value: jpg.</p>
 * @method string getComment() Obtain <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method string getFillType() Obtain <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes:</p><li>stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li><li>black: maintain video aspect ratio, with the remaining edge part filled with black.</li><li>white: maintain video aspect ratio, with the edge remainder filled with white.</li><li>gauss: Gaussian blur, maintain video aspect ratio, with the remaining edge part filled with Gaussian blur.</li>Default value: black.
 * @method void setFillType(string $FillType) Set <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes:</p><li>stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li><li>black: maintain video aspect ratio, with the remaining edge part filled with black.</li><li>white: maintain video aspect ratio, with the edge remainder filled with white.</li><li>gauss: Gaussian blur, maintain video aspect ratio, with the remaining edge part filled with Gaussian blur.</li>Default value: black.
 */
class ModifySnapshotByTimeOffsetTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>Unique identifier of screenshot template at specified time point.</p>
     */
    public $Definition;

    /**
     * @var integer <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Screenshot template name at specified time point. Length limit: 64 characters.</p>
     */
    public $Name;

    /**
     * @var integer <p>The maximum value of the screenshot width (or long side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
     */
    public $Width;

    /**
     * @var integer <p>The maximum value of the screenshot height (or short side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
     */
    public $Height;

    /**
     * @var string <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var string <p>Image format. Valid values: jpg, png, and webp. Default value: jpg.</p>
     */
    public $Format;

    /**
     * @var string <p>Transcoding template description. Length limit: 256 characters.</p>
     */
    public $Comment;

    /**
     * @var string <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes:</p><li>stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li><li>black: maintain video aspect ratio, with the remaining edge part filled with black.</li><li>white: maintain video aspect ratio, with the edge remainder filled with white.</li><li>gauss: Gaussian blur, maintain video aspect ratio, with the remaining edge part filled with Gaussian blur.</li>Default value: black.
     */
    public $FillType;

    /**
     * @param integer $Definition <p>Unique identifier of screenshot template at specified time point.</p>
     * @param integer $SubAppId <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
     * @param string $Name <p>Screenshot template name at specified time point. Length limit: 64 characters.</p>
     * @param integer $Width <p>The maximum value of the screenshot width (or long side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
     * @param integer $Height <p>The maximum value of the screenshot height (or short side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
     * @param string $ResolutionAdaptive <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>Default value: open.
     * @param string $Format <p>Image format. Valid values: jpg, png, and webp. Default value: jpg.</p>
     * @param string $Comment <p>Transcoding template description. Length limit: 256 characters.</p>
     * @param string $FillType <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes:</p><li>stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li><li>black: maintain video aspect ratio, with the remaining edge part filled with black.</li><li>white: maintain video aspect ratio, with the edge remainder filled with white.</li><li>gauss: Gaussian blur, maintain video aspect ratio, with the remaining edge part filled with Gaussian blur.</li>Default value: black.
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }
    }
}
