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
 * ModifySampleSnapshotTemplate request structure.
 *
 * @method integer getDefinition() Obtain <p>Sampling screenshot template unique identifier.</p>
 * @method void setDefinition(integer $Definition) Set <p>Sampling screenshot template unique identifier.</p>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b></p>
 * @method string getName() Obtain <p>Sample screenshot template name. Length limit: 64 characters.</p>
 * @method void setName(string $Name) Set <p>Sample screenshot template name. Length limit: 64 characters.</p>
 * @method integer getWidth() Obtain <p>The maximum value of the screenshot width (or long side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
 * @method void setWidth(integer $Width) Set <p>The maximum value of the screenshot width (or long side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
 * @method integer getHeight() Obtain <p>The maximum value of the screenshot height (or short side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
 * @method void setHeight(integer $Height) Set <p>The maximum value of the screenshot height (or short side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
 * @method string getResolutionAdaptive() Obtain <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the video width, and Height represents the video height.</li>Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the video width, and Height represents the video height.</li>Default value: open.
 * @method string getSampleType() Obtain <p>Sampling screenshot type. Valid values:</p><li>Percent: By percent.</li><li>Time: By time interval.</li>
 * @method void setSampleType(string $SampleType) Set <p>Sampling screenshot type. Valid values:</p><li>Percent: By percent.</li><li>Time: By time interval.</li>
 * @method integer getSampleInterval() Obtain <p>Sampling interval.</p><li>When SampleType is Percent, specify the percentage of the sampling interval.</li><li>When SampleType is Time, specify the sampling interval in seconds.</li>
 * @method void setSampleInterval(integer $SampleInterval) Set <p>Sampling interval.</p><li>When SampleType is Percent, specify the percentage of the sampling interval.</li><li>When SampleType is Time, specify the sampling interval in seconds.</li>
 * @method string getFormat() Obtain <p>Image format. Valid values: jpg, png, and webp. Default value: jpg.</p>
 * @method void setFormat(string $Format) Set <p>Image format. Valid values: jpg, png, and webp. Default value: jpg.</p>
 * @method string getComment() Obtain <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method string getFillType() Obtain <p>Filling method. The processing method for transcoding when the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video is "fill". Optional filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged and fill the remaining edge part with black.</li><li>white: Keep the video aspect ratio unchanged and fill the remaining edge part with white.</li><li>gauss: Keep the video aspect ratio unchanged and apply Gaussian blur to the remaining edge part.</li>Default value: black.
 * @method void setFillType(string $FillType) Set <p>Filling method. The processing method for transcoding when the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video is "fill". Optional filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged and fill the remaining edge part with black.</li><li>white: Keep the video aspect ratio unchanged and fill the remaining edge part with white.</li><li>gauss: Keep the video aspect ratio unchanged and apply Gaussian blur to the remaining edge part.</li>Default value: black.
 */
class ModifySampleSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>Sampling screenshot template unique identifier.</p>
     */
    public $Definition;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Sample screenshot template name. Length limit: 64 characters.</p>
     */
    public $Name;

    /**
     * @var integer <p>The maximum value of the screenshot width (or long side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
     */
    public $Width;

    /**
     * @var integer <p>The maximum value of the screenshot height (or short side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
     */
    public $Height;

    /**
     * @var string <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the video width, and Height represents the video height.</li>Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var string <p>Sampling screenshot type. Valid values:</p><li>Percent: By percent.</li><li>Time: By time interval.</li>
     */
    public $SampleType;

    /**
     * @var integer <p>Sampling interval.</p><li>When SampleType is Percent, specify the percentage of the sampling interval.</li><li>When SampleType is Time, specify the sampling interval in seconds.</li>
     */
    public $SampleInterval;

    /**
     * @var string <p>Image format. Valid values: jpg, png, and webp. Default value: jpg.</p>
     */
    public $Format;

    /**
     * @var string <p>Transcoding template description. Length limit: 256 characters.</p>
     */
    public $Comment;

    /**
     * @var string <p>Filling method. The processing method for transcoding when the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video is "fill". Optional filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged and fill the remaining edge part with black.</li><li>white: Keep the video aspect ratio unchanged and fill the remaining edge part with white.</li><li>gauss: Keep the video aspect ratio unchanged and apply Gaussian blur to the remaining edge part.</li>Default value: black.
     */
    public $FillType;

    /**
     * @param integer $Definition <p>Sampling screenshot template unique identifier.</p>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b></p>
     * @param string $Name <p>Sample screenshot template name. Length limit: 64 characters.</p>
     * @param integer $Width <p>The maximum value of the screenshot width (or long side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
     * @param integer $Height <p>The maximum value of the screenshot height (or short side). Valid values: 0 and [32, 4096]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.</p>
     * @param string $ResolutionAdaptive <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the video width, and Height represents the video height.</li>Default value: open.
     * @param string $SampleType <p>Sampling screenshot type. Valid values:</p><li>Percent: By percent.</li><li>Time: By time interval.</li>
     * @param integer $SampleInterval <p>Sampling interval.</p><li>When SampleType is Percent, specify the percentage of the sampling interval.</li><li>When SampleType is Time, specify the sampling interval in seconds.</li>
     * @param string $Format <p>Image format. Valid values: jpg, png, and webp. Default value: jpg.</p>
     * @param string $Comment <p>Transcoding template description. Length limit: 256 characters.</p>
     * @param string $FillType <p>Filling method. The processing method for transcoding when the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video is "fill". Optional filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged and fill the remaining edge part with black.</li><li>white: Keep the video aspect ratio unchanged and fill the remaining edge part with white.</li><li>gauss: Keep the video aspect ratio unchanged and apply Gaussian blur to the remaining edge part.</li>Default value: black.
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

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = $param["SampleType"];
        }

        if (array_key_exists("SampleInterval",$param) and $param["SampleInterval"] !== null) {
            $this->SampleInterval = $param["SampleInterval"];
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
