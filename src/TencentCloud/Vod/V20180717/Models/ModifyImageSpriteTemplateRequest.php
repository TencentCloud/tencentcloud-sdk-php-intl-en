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
 * ModifyImageSpriteTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique identifier of the sprite template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the sprite template.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Sprite image template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Sprite image template name. Length limit: 64 characters.
 * @method integer getWidth() Obtain Width of small images in sprite image, in the range of [32, 4096], unit: px.
 * @method void setWidth(integer $Width) Set Width of small images in sprite image, in the range of [32, 4096], unit: px.
 * @method integer getHeight() Obtain Height of small images in sprite image, in the range of [32, 4096], unit: px.
 * @method void setHeight(integer $Height) Set Height of small images in sprite image, in the range of [32, 4096], unit: px.
 * @method string getResolutionAdaptive() Obtain Resolution adaptation, available values:
<li>open: start. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptation, available values:
<li>open: start. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
 * @method string getSampleType() Obtain Sampling type, Valid value:
<li>Percent: by percent.</li>
<li>Time: By time interval.</li>
 * @method void setSampleType(string $SampleType) Set Sampling type, Valid value:
<li>Percent: by percent.</li>
<li>Time: By time interval.</li>
 * @method integer getSampleInterval() Obtain Sampling interval.
<li>When SampleType is Percent, specify the percentage of the sampling interval.</li>
<li>When SampleType is Time, specify the sampling interval in seconds.</li>
 * @method void setSampleInterval(integer $SampleInterval) Set Sampling interval.
<li>When SampleType is Percent, specify the percentage of the sampling interval.</li>
<li>When SampleType is Time, specify the sampling interval in seconds.</li>
 * @method integer getRowCount() Obtain Number of rows of small images in sprite image.
 * @method void setRowCount(integer $RowCount) Set Number of rows of small images in sprite image.
 * @method integer getColumnCount() Obtain Number of columns of small images in sprite image.
 * @method void setColumnCount(integer $ColumnCount) Set Number of columns of small images in sprite image.
 * @method string getFillType() Obtain Filling method. When video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "fill". Optional filling modes: <li>stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be squashed or stretched;</li><li>black: maintain video aspect ratio, remaining edge part filled with black;</li><li>white: maintain video aspect ratio, remaining edge part filled with white;</li><li>gauss: maintain video aspect ratio, remaining edge part filled with Gaussian blur.</li>Default value: black.
 * @method void setFillType(string $FillType) Set Filling method. When video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "fill". Optional filling modes: <li>stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be squashed or stretched;</li><li>black: maintain video aspect ratio, remaining edge part filled with black;</li><li>white: maintain video aspect ratio, remaining edge part filled with white;</li><li>gauss: maintain video aspect ratio, remaining edge part filled with Gaussian blur.</li>Default value: black.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 * @method string getFormat() Obtain Image format. Value:
<li> jpg: jpg format;</li>
<li>png: png format.</li>
<li>WEBP: webp format.</li>
 * @method void setFormat(string $Format) Set Image format. Value:
<li> jpg: jpg format;</li>
<li>png: png format.</li>
<li>WEBP: webp format.</li>
 */
class ModifyImageSpriteTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of the sprite template.
     */
    public $Definition;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Sprite image template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var integer Width of small images in sprite image, in the range of [32, 4096], unit: px.
     */
    public $Width;

    /**
     * @var integer Height of small images in sprite image, in the range of [32, 4096], unit: px.
     */
    public $Height;

    /**
     * @var string Resolution adaptation, available values:
<li>open: start. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var string Sampling type, Valid value:
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
     * @var integer Number of rows of small images in sprite image.
     */
    public $RowCount;

    /**
     * @var integer Number of columns of small images in sprite image.
     */
    public $ColumnCount;

    /**
     * @var string Filling method. When video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "fill". Optional filling modes: <li>stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be squashed or stretched;</li><li>black: maintain video aspect ratio, remaining edge part filled with black;</li><li>white: maintain video aspect ratio, remaining edge part filled with white;</li><li>gauss: maintain video aspect ratio, remaining edge part filled with Gaussian blur.</li>Default value: black.
     */
    public $FillType;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var string Image format. Value:
<li> jpg: jpg format;</li>
<li>png: png format.</li>
<li>WEBP: webp format.</li>
     */
    public $Format;

    /**
     * @param integer $Definition Unique identifier of the sprite template.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Sprite image template name. Length limit: 64 characters.
     * @param integer $Width Width of small images in sprite image, in the range of [32, 4096], unit: px.
     * @param integer $Height Height of small images in sprite image, in the range of [32, 4096], unit: px.
     * @param string $ResolutionAdaptive Resolution adaptation, available values:
<li>open: start. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
     * @param string $SampleType Sampling type, Valid value:
<li>Percent: by percent.</li>
<li>Time: By time interval.</li>
     * @param integer $SampleInterval Sampling interval.
<li>When SampleType is Percent, specify the percentage of the sampling interval.</li>
<li>When SampleType is Time, specify the sampling interval in seconds.</li>
     * @param integer $RowCount Number of rows of small images in sprite image.
     * @param integer $ColumnCount Number of columns of small images in sprite image.
     * @param string $FillType Filling method. When video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "fill". Optional filling modes: <li>stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be squashed or stretched;</li><li>black: maintain video aspect ratio, remaining edge part filled with black;</li><li>white: maintain video aspect ratio, remaining edge part filled with white;</li><li>gauss: maintain video aspect ratio, remaining edge part filled with Gaussian blur.</li>Default value: black.
     * @param string $Comment Template description, with a length limit of 256 characters.
     * @param string $Format Image format. Value:
<li> jpg: jpg format;</li>
<li>png: png format.</li>
<li>WEBP: webp format.</li>
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

        if (array_key_exists("RowCount",$param) and $param["RowCount"] !== null) {
            $this->RowCount = $param["RowCount"];
        }

        if (array_key_exists("ColumnCount",$param) and $param["ColumnCount"] !== null) {
            $this->ColumnCount = $param["ColumnCount"];
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
