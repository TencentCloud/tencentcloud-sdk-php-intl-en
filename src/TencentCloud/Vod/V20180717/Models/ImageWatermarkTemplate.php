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
 * Image watermark template
 *
 * @method string getImageUrl() Obtain Watermark image address.
 * @method void setImageUrl(string $ImageUrl) Set Watermark image address.
 * @method string getWidth() Obtain Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels.</li>
 * @method void setWidth(string $Width) Set Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels.</li>
 * @method string getHeight() Obtain Height of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels; for example, 100px means the Height is 100 pixels;</li>
0px: Height is scaled proportionally to the video width based on Width.
 * @method void setHeight(string $Height) Set Height of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels; for example, 100px means the Height is 100 pixels;</li>
0px: Height is scaled proportionally to the video width based on Width.
 * @method string getRepeatType() Obtain Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: Stay on the last frame after the watermark finished playing;</li>
<li>repeat: The watermark loops until the video ends.</li>
 * @method void setRepeatType(string $RepeatType) Set Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: Stay on the last frame after the watermark finished playing;</li>
<li>repeat: The watermark loops until the video ends.</li>
 * @method integer getTransparency() Obtain Image transparency. Value range: [0, 100].
<li>0: completely opaque.</li>
<li>100: completely transparent.</li>
 * @method void setTransparency(integer $Transparency) Set Image transparency. Value range: [0, 100].
<li>0: completely opaque.</li>
<li>100: completely transparent.</li>
 */
class ImageWatermarkTemplate extends AbstractModel
{
    /**
     * @var string Watermark image address.
     */
    public $ImageUrl;

    /**
     * @var string Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels.</li>
     */
    public $Width;

    /**
     * @var string Height of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels; for example, 100px means the Height is 100 pixels;</li>
0px: Height is scaled proportionally to the video width based on Width.
     */
    public $Height;

    /**
     * @var string Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: Stay on the last frame after the watermark finished playing;</li>
<li>repeat: The watermark loops until the video ends.</li>
     */
    public $RepeatType;

    /**
     * @var integer Image transparency. Value range: [0, 100].
<li>0: completely opaque.</li>
<li>100: completely transparent.</li>
     */
    public $Transparency;

    /**
     * @param string $ImageUrl Watermark image address.
     * @param string $Width Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels.</li>
     * @param string $Height Height of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels; for example, 100px means the Height is 100 pixels;</li>
0px: Height is scaled proportionally to the video width based on Width.
     * @param string $RepeatType Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: Stay on the last frame after the watermark finished playing;</li>
<li>repeat: The watermark loops until the video ends.</li>
     * @param integer $Transparency Image transparency. Value range: [0, 100].
<li>0: completely opaque.</li>
<li>100: completely transparent.</li>
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("RepeatType",$param) and $param["RepeatType"] !== null) {
            $this->RepeatType = $param["RepeatType"];
        }

        if (array_key_exists("Transparency",$param) and $param["Transparency"] !== null) {
            $this->Transparency = $param["Transparency"];
        }
    }
}
