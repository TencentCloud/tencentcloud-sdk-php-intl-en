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
 * Extended parameters used for AIGC video generation.
 *
 * @method string getResolution() Obtain The resolution of the generated video, which is related to the selected model and set video duration.Supported resolution options for different models:1. Kling: 720P (default) and 1080P.2. Hailuo: 768P (default) and 1080P.3. Vidu: 720P (default) and 1080P.4. GV: 720P (default) and 1080P.5. OS: 720P. For images, only 1280x720 and 720x1280 are supported. Resolution cannot be specified.Note: In addition to the resolution supported by the model, 2K and 4K resolutions are also available.
 * @method void setResolution(string $Resolution) Set The resolution of the generated video, which is related to the selected model and set video duration.Supported resolution options for different models:1. Kling: 720P (default) and 1080P.2. Hailuo: 768P (default) and 1080P.3. Vidu: 720P (default) and 1080P.4. GV: 720P (default) and 1080P.5. OS: 720P. For images, only 1280x720 and 720x1280 are supported. Resolution cannot be specified.Note: In addition to the resolution supported by the model, 2K and 4K resolutions are also available.
 * @method string getAspectRatio() Obtain The aspect ratio of the generated video.Support for this parameter by different models:1. Kling only supports this parameter for text-to-video, with aspect ratios of 16:9 (default), 9:16, and 1:1.2. Hailuo does not support this parameter.3. Vidu supports [16:9, 9:16, 4:3, 3:4, 1:1] for text-to-video and reference image-to-video only. Only q2 supports 4:3 and 3:4.4. GV supports 16:9 (default) and 9:16.5. OS only supports this parameter for text-to-video, with aspect ratios of 16:9 (default) and 9:16.Note: For more information about the supported aspect ratios of specific models, see the model website.
 * @method void setAspectRatio(string $AspectRatio) Set The aspect ratio of the generated video.Support for this parameter by different models:1. Kling only supports this parameter for text-to-video, with aspect ratios of 16:9 (default), 9:16, and 1:1.2. Hailuo does not support this parameter.3. Vidu supports [16:9, 9:16, 4:3, 3:4, 1:1] for text-to-video and reference image-to-video only. Only q2 supports 4:3 and 3:4.4. GV supports 16:9 (default) and 9:16.5. OS only supports this parameter for text-to-video, with aspect ratios of 16:9 (default) and 9:16.Note: For more information about the supported aspect ratios of specific models, see the model website.
 * @method integer getLogoAdd() Obtain Indicates whether to add a logo watermark.1. Hailuo supports this parameter.2. Kling supports this parameter.
3. Vidu supports this parameter.
 * @method void setLogoAdd(integer $LogoAdd) Set Indicates whether to add a logo watermark.1. Hailuo supports this parameter.2. Kling supports this parameter.
3. Vidu supports this parameter.
 * @method boolean getEnableAudio() Obtain Indicates whether to generate audio for the video. Valid values: true or false.Models that support this parameter:1. GV. Default value: true.2. OS. Default value: true.
 * @method void setEnableAudio(boolean $EnableAudio) Set Indicates whether to generate audio for the video. Valid values: true or false.Models that support this parameter:1. GV. Default value: true.2. OS. Default value: true.
 * @method boolean getOffPeak() Obtain Indicates whether to use the off-peak scheduling mode. Only Vidu supports this parameter.Tasks submitted in off-peak mode will be processed within 48 hours. Uncompleted tasks will be canceled.
 * @method void setOffPeak(boolean $OffPeak) Set Indicates whether to use the off-peak scheduling mode. Only Vidu supports this parameter.Tasks submitted in off-peak mode will be processed within 48 hours. Uncompleted tasks will be canceled.
 */
class AigcVideoExtraParam extends AbstractModel
{
    /**
     * @var string The resolution of the generated video, which is related to the selected model and set video duration.Supported resolution options for different models:1. Kling: 720P (default) and 1080P.2. Hailuo: 768P (default) and 1080P.3. Vidu: 720P (default) and 1080P.4. GV: 720P (default) and 1080P.5. OS: 720P. For images, only 1280x720 and 720x1280 are supported. Resolution cannot be specified.Note: In addition to the resolution supported by the model, 2K and 4K resolutions are also available.
     */
    public $Resolution;

    /**
     * @var string The aspect ratio of the generated video.Support for this parameter by different models:1. Kling only supports this parameter for text-to-video, with aspect ratios of 16:9 (default), 9:16, and 1:1.2. Hailuo does not support this parameter.3. Vidu supports [16:9, 9:16, 4:3, 3:4, 1:1] for text-to-video and reference image-to-video only. Only q2 supports 4:3 and 3:4.4. GV supports 16:9 (default) and 9:16.5. OS only supports this parameter for text-to-video, with aspect ratios of 16:9 (default) and 9:16.Note: For more information about the supported aspect ratios of specific models, see the model website.
     */
    public $AspectRatio;

    /**
     * @var integer Indicates whether to add a logo watermark.1. Hailuo supports this parameter.2. Kling supports this parameter.
3. Vidu supports this parameter.
     */
    public $LogoAdd;

    /**
     * @var boolean Indicates whether to generate audio for the video. Valid values: true or false.Models that support this parameter:1. GV. Default value: true.2. OS. Default value: true.
     */
    public $EnableAudio;

    /**
     * @var boolean Indicates whether to use the off-peak scheduling mode. Only Vidu supports this parameter.Tasks submitted in off-peak mode will be processed within 48 hours. Uncompleted tasks will be canceled.
     */
    public $OffPeak;

    /**
     * @param string $Resolution The resolution of the generated video, which is related to the selected model and set video duration.Supported resolution options for different models:1. Kling: 720P (default) and 1080P.2. Hailuo: 768P (default) and 1080P.3. Vidu: 720P (default) and 1080P.4. GV: 720P (default) and 1080P.5. OS: 720P. For images, only 1280x720 and 720x1280 are supported. Resolution cannot be specified.Note: In addition to the resolution supported by the model, 2K and 4K resolutions are also available.
     * @param string $AspectRatio The aspect ratio of the generated video.Support for this parameter by different models:1. Kling only supports this parameter for text-to-video, with aspect ratios of 16:9 (default), 9:16, and 1:1.2. Hailuo does not support this parameter.3. Vidu supports [16:9, 9:16, 4:3, 3:4, 1:1] for text-to-video and reference image-to-video only. Only q2 supports 4:3 and 3:4.4. GV supports 16:9 (default) and 9:16.5. OS only supports this parameter for text-to-video, with aspect ratios of 16:9 (default) and 9:16.Note: For more information about the supported aspect ratios of specific models, see the model website.
     * @param integer $LogoAdd Indicates whether to add a logo watermark.1. Hailuo supports this parameter.2. Kling supports this parameter.
3. Vidu supports this parameter.
     * @param boolean $EnableAudio Indicates whether to generate audio for the video. Valid values: true or false.Models that support this parameter:1. GV. Default value: true.2. OS. Default value: true.
     * @param boolean $OffPeak Indicates whether to use the off-peak scheduling mode. Only Vidu supports this parameter.Tasks submitted in off-peak mode will be processed within 48 hours. Uncompleted tasks will be canceled.
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
        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("EnableAudio",$param) and $param["EnableAudio"] !== null) {
            $this->EnableAudio = $param["EnableAudio"];
        }

        if (array_key_exists("OffPeak",$param) and $param["OffPeak"] !== null) {
            $this->OffPeak = $param["OffPeak"];
        }
    }
}
