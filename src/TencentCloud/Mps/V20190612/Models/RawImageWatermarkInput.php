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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input parameter of image watermark template
 *
 * @method MediaInputInfo getImageContent() Obtain Input content of watermark image. JPEG and PNG images are supported.
 * @method void setImageContent(MediaInputInfo $ImageContent) Set Input content of watermark image. JPEG and PNG images are supported.
 * @method string getWidth() Obtain Watermark width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the watermark will be the specified percentage of the video width; for example, `10%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in px, the `Width` of the watermark will be in px; for example, `100px` means that `Width` is 100 px.</li>
Default value: 10%.
 * @method void setWidth(string $Width) Set Watermark width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the watermark will be the specified percentage of the video width; for example, `10%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in px, the `Width` of the watermark will be in px; for example, `100px` means that `Width` is 100 px.</li>
Default value: 10%.
 * @method string getHeight() Obtain Watermark height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the watermark will be the specified percentage of the video height; for example, `10%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in px, the `Height` of the watermark will be in px; for example, `100px` means that `Height` is 100 px.</li>
Default value: 0 px, which means that `Height` will be proportionally scaled according to the aspect ratio of the original watermark image.
 * @method void setHeight(string $Height) Set Watermark height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the watermark will be the specified percentage of the video height; for example, `10%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in px, the `Height` of the watermark will be in px; for example, `100px` means that `Height` is 100 px.</li>
Default value: 0 px, which means that `Height` will be proportionally scaled according to the aspect ratio of the original watermark image.
 * @method string getRepeatType() Obtain Repeat type of an animated watermark. Valid values:
<li>`once`: no longer appears after watermark playback ends.</li>
<li>`repeat_last_frame`: stays on the last frame after watermark playback ends.</li>
<li>`repeat` (default): repeats the playback until the video ends.</li>
 * @method void setRepeatType(string $RepeatType) Set Repeat type of an animated watermark. Valid values:
<li>`once`: no longer appears after watermark playback ends.</li>
<li>`repeat_last_frame`: stays on the last frame after watermark playback ends.</li>
<li>`repeat` (default): repeats the playback until the video ends.</li>
 */
class RawImageWatermarkInput extends AbstractModel
{
    /**
     * @var MediaInputInfo Input content of watermark image. JPEG and PNG images are supported.
     */
    public $ImageContent;

    /**
     * @var string Watermark width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the watermark will be the specified percentage of the video width; for example, `10%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in px, the `Width` of the watermark will be in px; for example, `100px` means that `Width` is 100 px.</li>
Default value: 10%.
     */
    public $Width;

    /**
     * @var string Watermark height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the watermark will be the specified percentage of the video height; for example, `10%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in px, the `Height` of the watermark will be in px; for example, `100px` means that `Height` is 100 px.</li>
Default value: 0 px, which means that `Height` will be proportionally scaled according to the aspect ratio of the original watermark image.
     */
    public $Height;

    /**
     * @var string Repeat type of an animated watermark. Valid values:
<li>`once`: no longer appears after watermark playback ends.</li>
<li>`repeat_last_frame`: stays on the last frame after watermark playback ends.</li>
<li>`repeat` (default): repeats the playback until the video ends.</li>
     */
    public $RepeatType;

    /**
     * @param MediaInputInfo $ImageContent Input content of watermark image. JPEG and PNG images are supported.
     * @param string $Width Watermark width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the watermark will be the specified percentage of the video width; for example, `10%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in px, the `Width` of the watermark will be in px; for example, `100px` means that `Width` is 100 px.</li>
Default value: 10%.
     * @param string $Height Watermark height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the watermark will be the specified percentage of the video height; for example, `10%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in px, the `Height` of the watermark will be in px; for example, `100px` means that `Height` is 100 px.</li>
Default value: 0 px, which means that `Height` will be proportionally scaled according to the aspect ratio of the original watermark image.
     * @param string $RepeatType Repeat type of an animated watermark. Valid values:
<li>`once`: no longer appears after watermark playback ends.</li>
<li>`repeat_last_frame`: stays on the last frame after watermark playback ends.</li>
<li>`repeat` (default): repeats the playback until the video ends.</li>
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
