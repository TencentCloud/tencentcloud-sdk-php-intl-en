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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImageSpriteTemplate request structure.
 *
 * @method string getSampleType() Obtain Sampling type. Valid values:
<li>Percent: by percent.</li>
<li>Time: by time interval.</li>
 * @method void setSampleType(string $SampleType) Set Sampling type. Valid values:
<li>Percent: by percent.</li>
<li>Time: by time interval.</li>
 * @method integer getSampleInterval() Obtain Sampling interval.
<li>If `SampleType` is `Percent`, sampling will be performed at an interval of the specified percentage.</li>
<li>If `SampleType` is `Time`, sampling will be performed at the specified time interval in seconds.</li>
 * @method void setSampleInterval(integer $SampleInterval) Set Sampling interval.
<li>If `SampleType` is `Percent`, sampling will be performed at an interval of the specified percentage.</li>
<li>If `SampleType` is `Time`, sampling will be performed at the specified time interval in seconds.</li>
 * @method integer getRowCount() Obtain The number of rows of small images in the sprite image. 
Note: The number of rows of the small image will affect the height of the final large image. The maximum height of the large image is 15,000 pixels. The height of the large image is the product of the number of rows of the small image and the height of the small image.
 * @method void setRowCount(integer $RowCount) Set The number of rows of small images in the sprite image. 
Note: The number of rows of the small image will affect the height of the final large image. The maximum height of the large image is 15,000 pixels. The height of the large image is the product of the number of rows of the small image and the height of the small image.
 * @method integer getColumnCount() Obtain The number of columns of small images in the sprite image. 
Note: The number of columns of the small image will affect the width of the final large image. The maximum width of the large image is 15,000 pixels. The width of the large image is the product of the number of columns of the small image and the width of the small image.
 * @method void setColumnCount(integer $ColumnCount) Set The number of columns of small images in the sprite image. 
Note: The number of columns of the small image will affect the width of the final large image. The maximum width of the large image is 15,000 pixels. The width of the large image is the product of the number of columns of the small image and the width of the small image.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Name of an image sprite generating template. Length limit: 64 characters.
 * @method void setName(string $Name) Set Name of an image sprite generating template. Length limit: 64 characters.
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method string getFillType() Obtain Fill type. "Fill" refers to the way of processing a screenshot when its aspect ratio is different from that of the source video. The following fill types are supported:
<li> stretch: stretch. The screenshot will be stretched frame by frame to match the aspect ratio of the source video, which may make the screenshot "shorter" or "longer";</li>
<li>black: fill with black. This option retains the aspect ratio of the source video for the screenshot and fills the unmatched area with black color blocks.</li>
Default value: black.
 * @method void setFillType(string $FillType) Set Fill type. "Fill" refers to the way of processing a screenshot when its aspect ratio is different from that of the source video. The following fill types are supported:
<li> stretch: stretch. The screenshot will be stretched frame by frame to match the aspect ratio of the source video, which may make the screenshot "shorter" or "longer";</li>
<li>black: fill with black. This option retains the aspect ratio of the source video for the screenshot and fills the unmatched area with black color blocks.</li>
Default value: black.
 * @method integer getWidth() Obtain The maximum value of the width (or long side) of the small image in the sprite image, value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is from the same source;</li>
<li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li>
< li>When Width is non-0 and Height is 0, the Height is scaled proportionally; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0. 
Note: The width of the small image will affect the width of the final large image. The maximum width of the large image is 15,000 pixels. The width of the large image is the product of the number of columns of the small image and the width of the small image.
 * @method void setWidth(integer $Width) Set The maximum value of the width (or long side) of the small image in the sprite image, value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is from the same source;</li>
<li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li>
< li>When Width is non-0 and Height is 0, the Height is scaled proportionally; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0. 
Note: The width of the small image will affect the width of the final large image. The maximum width of the large image is 15,000 pixels. The width of the large image is the product of the number of columns of the small image and the width of the small image.
 * @method integer getHeight() Obtain The maximum value of the height (or short side) of the small image in the sprite image, value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is from the same source;</li>
<li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li>
< li>When Width is non-0 and Height is 0, the Height is scaled proportionally; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0. 
Note: The height of the small image will affect the height of the final large image. The maximum height of the large image is 15,000 pixels. The height of the large image is the product of the number of rows of the small image and the height of the small image.
 * @method void setHeight(integer $Height) Set The maximum value of the height (or short side) of the small image in the sprite image, value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is from the same source;</li>
<li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li>
< li>When Width is non-0 and Height is 0, the Height is scaled proportionally; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0. 
Note: The height of the small image will affect the height of the final large image. The maximum height of the large image is 15,000 pixels. The height of the large image is the product of the number of rows of the small image and the height of the small image.
 * @method string getResolutionAdaptive() Obtain Resolution adaption. Valid values:
<li>open: enabled. In this case, `Width` represents the long side of a video, while `Height` the short side;</li>
<li>close: disabled. In this case, `Width` represents the width of a video, while `Height` the height.</li>
Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaption. Valid values:
<li>open: enabled. In this case, `Width` represents the long side of a video, while `Height` the short side;</li>
<li>close: disabled. In this case, `Width` represents the width of a video, while `Height` the height.</li>
Default value: open.
 * @method string getFormat() Obtain The image format. Valid values:
<li> jpg</li>
<li> png</li>
<li> webp</li>
Default: jpg
 * @method void setFormat(string $Format) Set The image format. Valid values:
<li> jpg</li>
<li> png</li>
<li> webp</li>
Default: jpg
 */
class CreateImageSpriteTemplateRequest extends AbstractModel
{
    /**
     * @var string Sampling type. Valid values:
<li>Percent: by percent.</li>
<li>Time: by time interval.</li>
     */
    public $SampleType;

    /**
     * @var integer Sampling interval.
<li>If `SampleType` is `Percent`, sampling will be performed at an interval of the specified percentage.</li>
<li>If `SampleType` is `Time`, sampling will be performed at the specified time interval in seconds.</li>
     */
    public $SampleInterval;

    /**
     * @var integer The number of rows of small images in the sprite image. 
Note: The number of rows of the small image will affect the height of the final large image. The maximum height of the large image is 15,000 pixels. The height of the large image is the product of the number of rows of the small image and the height of the small image.
     */
    public $RowCount;

    /**
     * @var integer The number of columns of small images in the sprite image. 
Note: The number of columns of the small image will affect the width of the final large image. The maximum width of the large image is 15,000 pixels. The width of the large image is the product of the number of columns of the small image and the width of the small image.
     */
    public $ColumnCount;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Name of an image sprite generating template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var string Fill type. "Fill" refers to the way of processing a screenshot when its aspect ratio is different from that of the source video. The following fill types are supported:
<li> stretch: stretch. The screenshot will be stretched frame by frame to match the aspect ratio of the source video, which may make the screenshot "shorter" or "longer";</li>
<li>black: fill with black. This option retains the aspect ratio of the source video for the screenshot and fills the unmatched area with black color blocks.</li>
Default value: black.
     */
    public $FillType;

    /**
     * @var integer The maximum value of the width (or long side) of the small image in the sprite image, value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is from the same source;</li>
<li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li>
< li>When Width is non-0 and Height is 0, the Height is scaled proportionally; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0. 
Note: The width of the small image will affect the width of the final large image. The maximum width of the large image is 15,000 pixels. The width of the large image is the product of the number of columns of the small image and the width of the small image.
     */
    public $Width;

    /**
     * @var integer The maximum value of the height (or short side) of the small image in the sprite image, value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is from the same source;</li>
<li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li>
< li>When Width is non-0 and Height is 0, the Height is scaled proportionally; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0. 
Note: The height of the small image will affect the height of the final large image. The maximum height of the large image is 15,000 pixels. The height of the large image is the product of the number of rows of the small image and the height of the small image.
     */
    public $Height;

    /**
     * @var string Resolution adaption. Valid values:
<li>open: enabled. In this case, `Width` represents the long side of a video, while `Height` the short side;</li>
<li>close: disabled. In this case, `Width` represents the width of a video, while `Height` the height.</li>
Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var string The image format. Valid values:
<li> jpg</li>
<li> png</li>
<li> webp</li>
Default: jpg
     */
    public $Format;

    /**
     * @param string $SampleType Sampling type. Valid values:
<li>Percent: by percent.</li>
<li>Time: by time interval.</li>
     * @param integer $SampleInterval Sampling interval.
<li>If `SampleType` is `Percent`, sampling will be performed at an interval of the specified percentage.</li>
<li>If `SampleType` is `Time`, sampling will be performed at the specified time interval in seconds.</li>
     * @param integer $RowCount The number of rows of small images in the sprite image. 
Note: The number of rows of the small image will affect the height of the final large image. The maximum height of the large image is 15,000 pixels. The height of the large image is the product of the number of rows of the small image and the height of the small image.
     * @param integer $ColumnCount The number of columns of small images in the sprite image. 
Note: The number of columns of the small image will affect the width of the final large image. The maximum width of the large image is 15,000 pixels. The width of the large image is the product of the number of columns of the small image and the width of the small image.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Name Name of an image sprite generating template. Length limit: 64 characters.
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param string $FillType Fill type. "Fill" refers to the way of processing a screenshot when its aspect ratio is different from that of the source video. The following fill types are supported:
<li> stretch: stretch. The screenshot will be stretched frame by frame to match the aspect ratio of the source video, which may make the screenshot "shorter" or "longer";</li>
<li>black: fill with black. This option retains the aspect ratio of the source video for the screenshot and fills the unmatched area with black color blocks.</li>
Default value: black.
     * @param integer $Width The maximum value of the width (or long side) of the small image in the sprite image, value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is from the same source;</li>
<li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li>
< li>When Width is non-0 and Height is 0, the Height is scaled proportionally; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0. 
Note: The width of the small image will affect the width of the final large image. The maximum width of the large image is 15,000 pixels. The width of the large image is the product of the number of columns of the small image and the width of the small image.
     * @param integer $Height The maximum value of the height (or short side) of the small image in the sprite image, value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is from the same source;</li>
<li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li>
< li>When Width is non-0 and Height is 0, the Height is scaled proportionally; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0. 
Note: The height of the small image will affect the height of the final large image. The maximum height of the large image is 15,000 pixels. The height of the large image is the product of the number of rows of the small image and the height of the small image.
     * @param string $ResolutionAdaptive Resolution adaption. Valid values:
<li>open: enabled. In this case, `Width` represents the long side of a video, while `Height` the short side;</li>
<li>close: disabled. In this case, `Width` represents the width of a video, while `Height` the height.</li>
Default value: open.
     * @param string $Format The image format. Valid values:
<li> jpg</li>
<li> png</li>
<li> webp</li>
Default: jpg
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
