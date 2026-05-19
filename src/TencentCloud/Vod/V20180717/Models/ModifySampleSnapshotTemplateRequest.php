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
 * @method integer getDefinition() Obtain Unique identifier of the sampling screenshot template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the sampling screenshot template.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Sample screenshot template name. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Sample screenshot template name. The length cannot exceed 64 characters.
 * @method integer getWidth() Obtain The maximum value of screenshot width (or long side), value ranges from 0 to [32, 4096], measurement unit: px.<li>When both Width and Height are 0, the resolution is the same as the source.</li><li>When Width is 0 and Height is not 0, Width is scaled proportionally.</li><li>When Width is not 0 and Height is 0, Height is scaled proportionally.</li><li>When both Width and Height are not 0, the resolution is specified by user.</li>Default value: 0.
 * @method void setWidth(integer $Width) Set The maximum value of screenshot width (or long side), value ranges from 0 to [32, 4096], measurement unit: px.<li>When both Width and Height are 0, the resolution is the same as the source.</li><li>When Width is 0 and Height is not 0, Width is scaled proportionally.</li><li>When Width is not 0 and Height is 0, Height is scaled proportionally.</li><li>When both Width and Height are not 0, the resolution is specified by user.</li>Default value: 0.
 * @method integer getHeight() Obtain The maximum value of screenshot height (or short edge), value ranges from 0 to [32, 4096], unit: px.<li>When both Width and Height are 0, the resolution is the same as the source;</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li><li>When both Width and Height are not 0, the resolution is specified by user.</li>Default value: 0.
 * @method void setHeight(integer $Height) Set The maximum value of screenshot height (or short edge), value ranges from 0 to [32, 4096], unit: px.<li>When both Width and Height are 0, the resolution is the same as the source;</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li><li>When both Width and Height are not 0, the resolution is specified by user.</li>Default value: 0.
 * @method string getResolutionAdaptive() Obtain Resolution adaptation, available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side.</li>
<li>close: Closed. At this point, Width represents the Width of the video, and Height indicates the Height of the video.</li>
Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptation, available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side.</li>
<li>close: Closed. At this point, Width represents the Width of the video, and Height indicates the Height of the video.</li>
Default value: open.
 * @method string getSampleType() Obtain Sampling screenshot type, Valid value:
<li>Percent: by percent.</li>
<li>Time: By time interval.</li>
 * @method void setSampleType(string $SampleType) Set Sampling screenshot type, Valid value:
<li>Percent: by percent.</li>
<li>Time: By time interval.</li>
 * @method integer getSampleInterval() Obtain Sampling interval.
<li>When SampleType is Percent, specify the percentage of the sampling interval.</li>
<li>When SampleType is Time, specify the sampling interval in seconds.</li>
 * @method void setSampleInterval(integer $SampleInterval) Set Sampling interval.
<li>When SampleType is Percent, specify the percentage of the sampling interval.</li>
<li>When SampleType is Time, specify the sampling interval in seconds.</li>
 * @method string getFormat() Obtain Image format. Valid values: jpg and png.
 * @method void setFormat(string $Format) Set Image format. Valid values: jpg and png.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 * @method string getFillType() Obtain Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be squashed or stretched.</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>white: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, use Gaussian blur for the remaining edge part.</li>
Default value: black.
 * @method void setFillType(string $FillType) Set Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be squashed or stretched.</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>white: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, use Gaussian blur for the remaining edge part.</li>
Default value: black.
 */
class ModifySampleSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of the sampling screenshot template.
     */
    public $Definition;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Sample screenshot template name. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var integer The maximum value of screenshot width (or long side), value ranges from 0 to [32, 4096], measurement unit: px.<li>When both Width and Height are 0, the resolution is the same as the source.</li><li>When Width is 0 and Height is not 0, Width is scaled proportionally.</li><li>When Width is not 0 and Height is 0, Height is scaled proportionally.</li><li>When both Width and Height are not 0, the resolution is specified by user.</li>Default value: 0.
     */
    public $Width;

    /**
     * @var integer The maximum value of screenshot height (or short edge), value ranges from 0 to [32, 4096], unit: px.<li>When both Width and Height are 0, the resolution is the same as the source;</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li><li>When both Width and Height are not 0, the resolution is specified by user.</li>Default value: 0.
     */
    public $Height;

    /**
     * @var string Resolution adaptation, available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side.</li>
<li>close: Closed. At this point, Width represents the Width of the video, and Height indicates the Height of the video.</li>
Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var string Sampling screenshot type, Valid value:
<li>Percent: by percent.</li>
<li>Time: By time interval.</li>
     */
    public $SampleType;

    /**
     * @var integer Sampling interval.
<li>When SampleType is Percent, specify the percentage of the sampling interval.</li>
<li>When SampleType is Time, specify the sampling interval in seconds.</li>
     */
    public $SampleInterval;

    /**
     * @var string Image format. Valid values: jpg and png.
     */
    public $Format;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var string Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be squashed or stretched.</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>white: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, use Gaussian blur for the remaining edge part.</li>
Default value: black.
     */
    public $FillType;

    /**
     * @param integer $Definition Unique identifier of the sampling screenshot template.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Sample screenshot template name. The length cannot exceed 64 characters.
     * @param integer $Width The maximum value of screenshot width (or long side), value ranges from 0 to [32, 4096], measurement unit: px.<li>When both Width and Height are 0, the resolution is the same as the source.</li><li>When Width is 0 and Height is not 0, Width is scaled proportionally.</li><li>When Width is not 0 and Height is 0, Height is scaled proportionally.</li><li>When both Width and Height are not 0, the resolution is specified by user.</li>Default value: 0.
     * @param integer $Height The maximum value of screenshot height (or short edge), value ranges from 0 to [32, 4096], unit: px.<li>When both Width and Height are 0, the resolution is the same as the source;</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li><li>When both Width and Height are not 0, the resolution is specified by user.</li>Default value: 0.
     * @param string $ResolutionAdaptive Resolution adaptation, available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side.</li>
<li>close: Closed. At this point, Width represents the Width of the video, and Height indicates the Height of the video.</li>
Default value: open.
     * @param string $SampleType Sampling screenshot type, Valid value:
<li>Percent: by percent.</li>
<li>Time: By time interval.</li>
     * @param integer $SampleInterval Sampling interval.
<li>When SampleType is Percent, specify the percentage of the sampling interval.</li>
<li>When SampleType is Time, specify the sampling interval in seconds.</li>
     * @param string $Format Image format. Valid values: jpg and png.
     * @param string $Comment Template description, with a length limit of 256 characters.
     * @param string $FillType Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be squashed or stretched.</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>white: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, use Gaussian blur for the remaining edge part.</li>
Default value: black.
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
