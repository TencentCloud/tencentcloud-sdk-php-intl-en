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
 * CreateImageSpriteTemplate request structure.
 *
 * @method string getSampleType() Obtain Sampling type. Valid values:
<li>Percent: by percent.</li>
<li>Time: by time interval. </li>
 * @method void setSampleType(string $SampleType) Set Sampling type. Valid values:
<li>Percent: by percent.</li>
<li>Time: by time interval. </li>
 * @method integer getSampleInterval() Obtain Sampling interval.
<li>When SampleType is Percent, specify the percentage of the sampling interval.</li>
<li>The time when the sampling interval is specified if SampleType is Time, in seconds.</li>
 * @method void setSampleInterval(integer $SampleInterval) Set Sampling interval.
<li>When SampleType is Percent, specify the percentage of the sampling interval.</li>
<li>The time when the sampling interval is specified if SampleType is Time, in seconds.</li>
 * @method integer getRowCount() Obtain Number of rows of small images in the sprite image.
Note: The number of subimage rows impacts the final height of the large image. The maximum height of the large image is 15,000 pixels, where the height of the large image is the product of the number of subimage rows and the subimage height.
 * @method void setRowCount(integer $RowCount) Set Number of rows of small images in the sprite image.
Note: The number of subimage rows impacts the final height of the large image. The maximum height of the large image is 15,000 pixels, where the height of the large image is the product of the number of subimage rows and the subimage height.
 * @method integer getColumnCount() Obtain Number of columns of small images in the sprite image.
Note: The columns of thumbnails impact the final width of the large image. The maximum width of the large image is 15,000 pixels, where the width of the large image is the product of the columns and the width of the thumbnails.
 * @method void setColumnCount(integer $ColumnCount) Set Number of columns of small images in the sprite image.
Note: The columns of thumbnails impact the final width of the large image. The maximum width of the large image is 15,000 pixels, where the width of the large image is the product of the columns and the width of the thumbnails.
 * @method integer getSubAppId() Obtain <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method string getName() Obtain Sprite image template name, with a length limit of 64 characters.
 * @method void setName(string $Name) Set Sprite image template name, with a length limit of 64 characters.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 * @method string getFillType() Obtain Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes: <li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li><li>black: Keep black edges, maintain the video aspect ratio, and fill the remaining edges with black.</li>Default value: black.
 * @method void setFillType(string $FillType) Set Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes: <li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li><li>black: Keep black edges, maintain the video aspect ratio, and fill the remaining edges with black.</li>Default value: black.
 * @method integer getWidth() Obtain Maximum value of the width (or long side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.<li>When both Width and Height are 0, Same Resolution Source is used.</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled.</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled.</li><li>When both Width and Height are not 0, the resolution specified by user is used.</li>Default value: 0. Note: The width of small images impacts the width of the final large image. The maximum width of the large image is 15000 pixels, where the width of the large image is the product of the columns and the width of small images.
 * @method void setWidth(integer $Width) Set Maximum value of the width (or long side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.<li>When both Width and Height are 0, Same Resolution Source is used.</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled.</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled.</li><li>When both Width and Height are not 0, the resolution specified by user is used.</li>Default value: 0. Note: The width of small images impacts the width of the final large image. The maximum width of the large image is 15000 pixels, where the width of the large image is the product of the columns and the width of small images.
 * @method integer getHeight() Obtain Maximum value of the height (or short side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.<li>When both Width and Height are 0, the resolution is the same as the source;</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li><li>When both Width and Height are not 0, the resolution is specified by the user.</li>Default value: 0. Note: The height of small images impacts the height of the final large image. The maximum height of the large image is 15000 pixels, where the height of the large image is the product of the subimage rows and the height of small images.
 * @method void setHeight(integer $Height) Set Maximum value of the height (or short side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.<li>When both Width and Height are 0, the resolution is the same as the source;</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li><li>When both Width and Height are not 0, the resolution is specified by the user.</li>Default value: 0. Note: The height of small images impacts the height of the final large image. The maximum height of the large image is 15000 pixels, where the height of the large image is the product of the subimage rows and the height of small images.
 * @method string getResolutionAdaptive() Obtain Resolution adaptation. Available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height represents the video height.</li>
Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptation. Available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height represents the video height.</li>
Default value: open.
 * @method string getFormat() Obtain Image format. Value:
<li> jpg: jpg format;</li>
<li> png: PNG format;</li>
<li> webp: webp format.</li>
Default value: jpg.
 * @method void setFormat(string $Format) Set Image format. Value:
<li> jpg: jpg format;</li>
<li> png: PNG format;</li>
<li> webp: webp format.</li>
Default value: jpg.
 */
class CreateImageSpriteTemplateRequest extends AbstractModel
{
    /**
     * @var string Sampling type. Valid values:
<li>Percent: by percent.</li>
<li>Time: by time interval. </li>
     */
    public $SampleType;

    /**
     * @var integer Sampling interval.
<li>When SampleType is Percent, specify the percentage of the sampling interval.</li>
<li>The time when the sampling interval is specified if SampleType is Time, in seconds.</li>
     */
    public $SampleInterval;

    /**
     * @var integer Number of rows of small images in the sprite image.
Note: The number of subimage rows impacts the final height of the large image. The maximum height of the large image is 15,000 pixels, where the height of the large image is the product of the number of subimage rows and the subimage height.
     */
    public $RowCount;

    /**
     * @var integer Number of columns of small images in the sprite image.
Note: The columns of thumbnails impact the final width of the large image. The maximum width of the large image is 15,000 pixels, where the width of the large image is the product of the columns and the width of the thumbnails.
     */
    public $ColumnCount;

    /**
     * @var integer <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string Sprite image template name, with a length limit of 64 characters.
     */
    public $Name;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var string Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes: <li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li><li>black: Keep black edges, maintain the video aspect ratio, and fill the remaining edges with black.</li>Default value: black.
     */
    public $FillType;

    /**
     * @var integer Maximum value of the width (or long side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.<li>When both Width and Height are 0, Same Resolution Source is used.</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled.</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled.</li><li>When both Width and Height are not 0, the resolution specified by user is used.</li>Default value: 0. Note: The width of small images impacts the width of the final large image. The maximum width of the large image is 15000 pixels, where the width of the large image is the product of the columns and the width of small images.
     */
    public $Width;

    /**
     * @var integer Maximum value of the height (or short side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.<li>When both Width and Height are 0, the resolution is the same as the source;</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li><li>When both Width and Height are not 0, the resolution is specified by the user.</li>Default value: 0. Note: The height of small images impacts the height of the final large image. The maximum height of the large image is 15000 pixels, where the height of the large image is the product of the subimage rows and the height of small images.
     */
    public $Height;

    /**
     * @var string Resolution adaptation. Available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height represents the video height.</li>
Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var string Image format. Value:
<li> jpg: jpg format;</li>
<li> png: PNG format;</li>
<li> webp: webp format.</li>
Default value: jpg.
     */
    public $Format;

    /**
     * @param string $SampleType Sampling type. Valid values:
<li>Percent: by percent.</li>
<li>Time: by time interval. </li>
     * @param integer $SampleInterval Sampling interval.
<li>When SampleType is Percent, specify the percentage of the sampling interval.</li>
<li>The time when the sampling interval is specified if SampleType is Time, in seconds.</li>
     * @param integer $RowCount Number of rows of small images in the sprite image.
Note: The number of subimage rows impacts the final height of the large image. The maximum height of the large image is 15,000 pixels, where the height of the large image is the product of the number of subimage rows and the subimage height.
     * @param integer $ColumnCount Number of columns of small images in the sprite image.
Note: The columns of thumbnails impact the final width of the large image. The maximum width of the large image is 15,000 pixels, where the width of the large image is the product of the columns and the width of the thumbnails.
     * @param integer $SubAppId <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param string $Name Sprite image template name, with a length limit of 64 characters.
     * @param string $Comment Template description, with a length limit of 256 characters.
     * @param string $FillType Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes: <li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li><li>black: Keep black edges, maintain the video aspect ratio, and fill the remaining edges with black.</li>Default value: black.
     * @param integer $Width Maximum value of the width (or long side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.<li>When both Width and Height are 0, Same Resolution Source is used.</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled.</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled.</li><li>When both Width and Height are not 0, the resolution specified by user is used.</li>Default value: 0. Note: The width of small images impacts the width of the final large image. The maximum width of the large image is 15000 pixels, where the width of the large image is the product of the columns and the width of small images.
     * @param integer $Height Maximum value of the height (or short side) of small images in the sprite image. Value range: 0 and [128, 4096]. Unit: px.<li>When both Width and Height are 0, the resolution is the same as the source;</li><li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li><li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li><li>When both Width and Height are not 0, the resolution is specified by the user.</li>Default value: 0. Note: The height of small images impacts the height of the final large image. The maximum height of the large image is 15000 pixels, where the height of the large image is the product of the subimage rows and the height of small images.
     * @param string $ResolutionAdaptive Resolution adaptation. Available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height represents the video height.</li>
Default value: open.
     * @param string $Format Image format. Value:
<li> jpg: jpg format;</li>
<li> png: PNG format;</li>
<li> webp: webp format.</li>
Default value: jpg.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
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
    }
}
