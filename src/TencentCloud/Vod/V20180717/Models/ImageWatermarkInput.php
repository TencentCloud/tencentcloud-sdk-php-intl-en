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
 * Image watermark template input parameters.
 *
 * @method string getImageContent() Obtain Base64-encoded string (https://tools.ietf.org/html/rfc4648) of the watermark image. Supports jpeg, png, and gif image formats.
 * @method void setImageContent(string $ImageContent) Set Base64-encoded string (https://tools.ietf.org/html/rfc4648) of the watermark image. Supports jpeg, png, and gif image formats.
 * @method string getWidth() Obtain Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, Width is in pixels. For example, 100px means Width is 100 pixels. Value range: [8, 4096].</li>
Default value: 10%.
 * @method void setWidth(string $Width) Set Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, Width is in pixels. For example, 100px means Width is 100 pixels. Value range: [8, 4096].</li>
Default value: 10%.
 * @method string getHeight() Obtain Height of a watermark. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels. For example, 100px means the Height is 100 pixels. Value range: 0 or [8, 4096].</li>
Default value: 0px, which means Height is scaled according to the aspect ratio of the raw watermark image.
 * @method void setHeight(string $Height) Set Height of a watermark. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels. For example, 100px means the Height is 100 pixels. Value range: 0 or [8, 4096].</li>
Default value: 0px, which means Height is scaled according to the aspect ratio of the raw watermark image.
 * @method string getRepeatType() Obtain Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: After the watermark finished playing, stay on the last frame;</li>
<li>repeat: loop the watermark until the video ends (default value).</li>
 * @method void setRepeatType(string $RepeatType) Set Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: After the watermark finished playing, stay on the last frame;</li>
<li>repeat: loop the watermark until the video ends (default value).</li>
 * @method integer getTransparency() Obtain Image transparency. Value range: [0, 100].
<li>0: completely opaque.</li>
<li>100: completely transparent.</li>
Default value: 0.
 * @method void setTransparency(integer $Transparency) Set Image transparency. Value range: [0, 100].
<li>0: completely opaque.</li>
<li>100: completely transparent.</li>
Default value: 0.
 */
class ImageWatermarkInput extends AbstractModel
{
    /**
     * @var string Base64-encoded string (https://tools.ietf.org/html/rfc4648) of the watermark image. Supports jpeg, png, and gif image formats.
     */
    public $ImageContent;

    /**
     * @var string Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, Width is in pixels. For example, 100px means Width is 100 pixels. Value range: [8, 4096].</li>
Default value: 10%.
     */
    public $Width;

    /**
     * @var string Height of a watermark. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels. For example, 100px means the Height is 100 pixels. Value range: 0 or [8, 4096].</li>
Default value: 0px, which means Height is scaled according to the aspect ratio of the raw watermark image.
     */
    public $Height;

    /**
     * @var string Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: After the watermark finished playing, stay on the last frame;</li>
<li>repeat: loop the watermark until the video ends (default value).</li>
     */
    public $RepeatType;

    /**
     * @var integer Image transparency. Value range: [0, 100].
<li>0: completely opaque.</li>
<li>100: completely transparent.</li>
Default value: 0.
     */
    public $Transparency;

    /**
     * @param string $ImageContent Base64-encoded string (https://tools.ietf.org/html/rfc4648) of the watermark image. Supports jpeg, png, and gif image formats.
     * @param string $Width Width of a watermark, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, Width is in pixels. For example, 100px means Width is 100 pixels. Value range: [8, 4096].</li>
Default value: 10%.
     * @param string $Height Height of a watermark. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the watermark Height is in pixels. For example, 100px means the Height is 100 pixels. Value range: 0 or [8, 4096].</li>
Default value: 0px, which means Height is scaled according to the aspect ratio of the raw watermark image.
     * @param string $RepeatType Watermark repeat type. Usage scenario: the watermark is a dynamic image. Value range:
<li>once: The dynamic watermark will no longer appear after it has finished playing;</li>
<li>repeat_last_frame: After the watermark finished playing, stay on the last frame;</li>
<li>repeat: loop the watermark until the video ends (default value).</li>
     * @param integer $Transparency Image transparency. Value range: [0, 100].
<li>0: completely opaque.</li>
<li>100: completely transparent.</li>
Default value: 0.
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
            $this->ImageContent = $param["ImageContent"];
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
