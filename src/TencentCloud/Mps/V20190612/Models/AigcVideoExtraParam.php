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
 * @method string getResolution() Obtain <p>Resolution of the generated video. The resolution is related to the selected model and set video duration.</p><p>Supported resolution options for different models:</p><ol><li>Kling: 720P (default) and 1080P.</li><li>Hailuo: 768P (default) and 1080P.</li><li>Vidu: 720P (default) and 1080P.</li><li>GV: 720P (default) and 1080P.</li><li>OS: 720P. For images, only 1280x720 and 720x1280 are supported. Resolution cannot be specified.</li></ol><p>Note: In addition to the resolution supported by the model, 2K and 4K resolutions are also available.</p>
 * @method void setResolution(string $Resolution) Set <p>Resolution of the generated video. The resolution is related to the selected model and set video duration.</p><p>Supported resolution options for different models:</p><ol><li>Kling: 720P (default) and 1080P.</li><li>Hailuo: 768P (default) and 1080P.</li><li>Vidu: 720P (default) and 1080P.</li><li>GV: 720P (default) and 1080P.</li><li>OS: 720P. For images, only 1280x720 and 720x1280 are supported. Resolution cannot be specified.</li></ol><p>Note: In addition to the resolution supported by the model, 2K and 4K resolutions are also available.</p>
 * @method string getAspectRatio() Obtain <p>Aspect ratio of the generated video.</p><p>Support for this parameter by different models:</p><ol><li>Kling only supports this parameter for text-to-video, with aspect ratios of 16:9 (default), 9:16, and 1:1.</li><li>Hailuo does not support this parameter.</li><li>Vidu supports [16:9, 9:16, 4:3, 3:4, 1:1] for text-to-video and reference image-to-video only. Only q2 supports 4:3 and 3:4.</li><li>GV supports 16:9 (default) and 9:16.</li><li>OS only supports this parameter for text-to-video, with aspect ratios of 16:9 (default) and 9:16.</li></ol><p>Note: For more information about the supported aspect ratios of specific models, see the model website.</p>
 * @method void setAspectRatio(string $AspectRatio) Set <p>Aspect ratio of the generated video.</p><p>Support for this parameter by different models:</p><ol><li>Kling only supports this parameter for text-to-video, with aspect ratios of 16:9 (default), 9:16, and 1:1.</li><li>Hailuo does not support this parameter.</li><li>Vidu supports [16:9, 9:16, 4:3, 3:4, 1:1] for text-to-video and reference image-to-video only. Only q2 supports 4:3 and 3:4.</li><li>GV supports 16:9 (default) and 9:16.</li><li>OS only supports this parameter for text-to-video, with aspect ratios of 16:9 (default) and 9:16.</li></ol><p>Note: For more information about the supported aspect ratios of specific models, see the model website.</p>
 * @method integer getLogoAdd() Obtain <p>Indicates whether to add a logo watermark.</p><ol><li>Hailuo supports this parameter.</li><li>Kling supports this parameter.</li><li>Vidu supports this parameter.</li></ol>
 * @method void setLogoAdd(integer $LogoAdd) Set <p>Indicates whether to add a logo watermark.</p><ol><li>Hailuo supports this parameter.</li><li>Kling supports this parameter.</li><li>Vidu supports this parameter.</li></ol>
 * @method boolean getEnableAudio() Obtain <p>Indicates whether to generate audio for the video. Valid values: true or false.</p><p>Models that support this parameter:</p><ol><li>GV. Default value: true.</li><li>OS. Default value: true.</li></ol>
 * @method void setEnableAudio(boolean $EnableAudio) Set <p>Indicates whether to generate audio for the video. Valid values: true or false.</p><p>Models that support this parameter:</p><ol><li>GV. Default value: true.</li><li>OS. Default value: true.</li></ol>
 * @method boolean getOffPeak() Obtain <p>Indicates whether to use the off-peak scheduling mode. Only Vidu supports this parameter.<br>Tasks submitted in off-peak mode will be processed within 48 hours. Uncompleted tasks will be canceled.</p>
 * @method void setOffPeak(boolean $OffPeak) Set <p>Indicates whether to use the off-peak scheduling mode. Only Vidu supports this parameter.<br>Tasks submitted in off-peak mode will be processed within 48 hours. Uncompleted tasks will be canceled.</p>
 * @method boolean getEnableBgm() Obtain <p>Indicates whether to add background music to the generated video. Default value: false. Valid values: true or false.<br>Note: Only some model versions support this.</p>
 * @method void setEnableBgm(boolean $EnableBgm) Set <p>Indicates whether to add background music to the generated video. Default value: false. Valid values: true or false.<br>Note: Only some model versions support this.</p>
 */
class AigcVideoExtraParam extends AbstractModel
{
    /**
     * @var string <p>Resolution of the generated video. The resolution is related to the selected model and set video duration.</p><p>Supported resolution options for different models:</p><ol><li>Kling: 720P (default) and 1080P.</li><li>Hailuo: 768P (default) and 1080P.</li><li>Vidu: 720P (default) and 1080P.</li><li>GV: 720P (default) and 1080P.</li><li>OS: 720P. For images, only 1280x720 and 720x1280 are supported. Resolution cannot be specified.</li></ol><p>Note: In addition to the resolution supported by the model, 2K and 4K resolutions are also available.</p>
     */
    public $Resolution;

    /**
     * @var string <p>Aspect ratio of the generated video.</p><p>Support for this parameter by different models:</p><ol><li>Kling only supports this parameter for text-to-video, with aspect ratios of 16:9 (default), 9:16, and 1:1.</li><li>Hailuo does not support this parameter.</li><li>Vidu supports [16:9, 9:16, 4:3, 3:4, 1:1] for text-to-video and reference image-to-video only. Only q2 supports 4:3 and 3:4.</li><li>GV supports 16:9 (default) and 9:16.</li><li>OS only supports this parameter for text-to-video, with aspect ratios of 16:9 (default) and 9:16.</li></ol><p>Note: For more information about the supported aspect ratios of specific models, see the model website.</p>
     */
    public $AspectRatio;

    /**
     * @var integer <p>Indicates whether to add a logo watermark.</p><ol><li>Hailuo supports this parameter.</li><li>Kling supports this parameter.</li><li>Vidu supports this parameter.</li></ol>
     */
    public $LogoAdd;

    /**
     * @var boolean <p>Indicates whether to generate audio for the video. Valid values: true or false.</p><p>Models that support this parameter:</p><ol><li>GV. Default value: true.</li><li>OS. Default value: true.</li></ol>
     */
    public $EnableAudio;

    /**
     * @var boolean <p>Indicates whether to use the off-peak scheduling mode. Only Vidu supports this parameter.<br>Tasks submitted in off-peak mode will be processed within 48 hours. Uncompleted tasks will be canceled.</p>
     */
    public $OffPeak;

    /**
     * @var boolean <p>Indicates whether to add background music to the generated video. Default value: false. Valid values: true or false.<br>Note: Only some model versions support this.</p>
     */
    public $EnableBgm;

    /**
     * @param string $Resolution <p>Resolution of the generated video. The resolution is related to the selected model and set video duration.</p><p>Supported resolution options for different models:</p><ol><li>Kling: 720P (default) and 1080P.</li><li>Hailuo: 768P (default) and 1080P.</li><li>Vidu: 720P (default) and 1080P.</li><li>GV: 720P (default) and 1080P.</li><li>OS: 720P. For images, only 1280x720 and 720x1280 are supported. Resolution cannot be specified.</li></ol><p>Note: In addition to the resolution supported by the model, 2K and 4K resolutions are also available.</p>
     * @param string $AspectRatio <p>Aspect ratio of the generated video.</p><p>Support for this parameter by different models:</p><ol><li>Kling only supports this parameter for text-to-video, with aspect ratios of 16:9 (default), 9:16, and 1:1.</li><li>Hailuo does not support this parameter.</li><li>Vidu supports [16:9, 9:16, 4:3, 3:4, 1:1] for text-to-video and reference image-to-video only. Only q2 supports 4:3 and 3:4.</li><li>GV supports 16:9 (default) and 9:16.</li><li>OS only supports this parameter for text-to-video, with aspect ratios of 16:9 (default) and 9:16.</li></ol><p>Note: For more information about the supported aspect ratios of specific models, see the model website.</p>
     * @param integer $LogoAdd <p>Indicates whether to add a logo watermark.</p><ol><li>Hailuo supports this parameter.</li><li>Kling supports this parameter.</li><li>Vidu supports this parameter.</li></ol>
     * @param boolean $EnableAudio <p>Indicates whether to generate audio for the video. Valid values: true or false.</p><p>Models that support this parameter:</p><ol><li>GV. Default value: true.</li><li>OS. Default value: true.</li></ol>
     * @param boolean $OffPeak <p>Indicates whether to use the off-peak scheduling mode. Only Vidu supports this parameter.<br>Tasks submitted in off-peak mode will be processed within 48 hours. Uncompleted tasks will be canceled.</p>
     * @param boolean $EnableBgm <p>Indicates whether to add background music to the generated video. Default value: false. Valid values: true or false.<br>Note: Only some model versions support this.</p>
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

        if (array_key_exists("EnableBgm",$param) and $param["EnableBgm"] !== null) {
            $this->EnableBgm = $param["EnableBgm"];
        }
    }
}
