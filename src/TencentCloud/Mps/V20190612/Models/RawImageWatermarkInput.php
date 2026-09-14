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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image watermark template input parameters.
 *
 * @method MediaInputInfo getImageContent() Obtain Input content of the watermark image. jpeg and png image formats are supported.
 * @method void setImageContent(MediaInputInfo $ImageContent) Set Input content of the watermark image. jpeg and png image formats are supported.
 * @method string getWidth() Obtain Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels.</li>
Default value: 10%.
 * @method void setWidth(string $Width) Set Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels.</li>
Default value: 10%.
 * @method string getHeight() Obtain Height of a watermark. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels. For example, 100px means the Height is 100 pixels.</li>
Default value: 0px, which means Height is scaled according to the aspect ratio of the raw watermark image.
 * @method void setHeight(string $Height) Set Height of a watermark. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels. For example, 100px means the Height is 100 pixels.</li>
Default value: 0px, which means Height is scaled according to the aspect ratio of the raw watermark image.
 * @method string getRepeatType() Obtain Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: Stay on the last frame after the watermark finished playing;</li>
<li>repeat: Watermark loops until the video ends (default value).</li>
 * @method void setRepeatType(string $RepeatType) Set Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: Stay on the last frame after the watermark finished playing;</li>
<li>repeat: Watermark loops until the video ends (default value).</li>
 */
class RawImageWatermarkInput extends AbstractModel
{
    /**
     * @var MediaInputInfo Input content of the watermark image. jpeg and png image formats are supported.
     */
    public $ImageContent;

    /**
     * @var string Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels.</li>
Default value: 10%.
     */
    public $Width;

    /**
     * @var string Height of a watermark. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels. For example, 100px means the Height is 100 pixels.</li>
Default value: 0px, which means Height is scaled according to the aspect ratio of the raw watermark image.
     */
    public $Height;

    /**
     * @var string Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: Stay on the last frame after the watermark finished playing;</li>
<li>repeat: Watermark loops until the video ends (default value).</li>
     */
    public $RepeatType;

    /**
     * @param MediaInputInfo $ImageContent Input content of the watermark image. jpeg and png image formats are supported.
     * @param string $Width Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels.</li>
Default value: 10%.
     * @param string $Height Height of a watermark. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels. For example, 100px means the Height is 100 pixels.</li>
Default value: 0px, which means Height is scaled according to the aspect ratio of the raw watermark image.
     * @param string $RepeatType Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: Stay on the last frame after the watermark finished playing;</li>
<li>repeat: Watermark loops until the video ends (default value).</li>
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
        if (array_key_exists("ImageContent",$param) and $param["ImageContent"] !== null) {
            $this->ImageContent = new MediaInputInfo();
            $this->ImageContent->deserialize($param["ImageContent"]);
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
    }
}
