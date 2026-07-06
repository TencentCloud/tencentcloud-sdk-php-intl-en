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
 * Extended parameters used for AIGC image generation.
 *
 * @method string getAspectRatio() Obtain <p>Aspect ratio of the generated video.</p><p>Supported aspect ratios for different models:</p><ol><li>Kling 2.1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling 3.0: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling 3.0-Omni: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling O1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Vidu q2: 16:9, 9:16, 1:1, 3:4, 4:3, 21:9, 2:3, and 3:2.</li><li>MJ v7: The aspect ratio needs to be specified in the prompt.</li></ol><p>Note: For more information about the aspect ratios of specific models, see the model website.</p>
 * @method void setAspectRatio(string $AspectRatio) Set <p>Aspect ratio of the generated video.</p><p>Supported aspect ratios for different models:</p><ol><li>Kling 2.1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling 3.0: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling 3.0-Omni: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling O1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Vidu q2: 16:9, 9:16, 1:1, 3:4, 4:3, 21:9, 2:3, and 3:2.</li><li>MJ v7: The aspect ratio needs to be specified in the prompt.</li></ol><p>Note: For more information about the aspect ratios of specific models, see the model website.</p>
 * @method string getResolution() Obtain <p>Output resolution of the image.</p><p>Models that support this parameter:<br>Valid values: 720P, 1080P, 2K, and 4K.</p>
 * @method void setResolution(string $Resolution) Set <p>Output resolution of the image.</p><p>Models that support this parameter:<br>Valid values: 720P, 1080P, 2K, and 4K.</p>
 * @method integer getLogoAdd() Obtain <p>Indicates whether to add a logo watermark. No watermark is added by default. 1 - A watermark is added. 0 - No watermark is added.</p><p>Value range: [0, 1].</p><p>Default value: 0.</p>
 * @method void setLogoAdd(integer $LogoAdd) Set <p>Indicates whether to add a logo watermark. No watermark is added by default. 1 - A watermark is added. 0 - No watermark is added.</p><p>Value range: [0, 1].</p><p>Default value: 0.</p>
 * @method string getOutputFormat() Obtain <p>Specifies the output format of the image. JPEG and PNG formats are supported.</p>
 * @method void setOutputFormat(string $OutputFormat) Set <p>Specifies the output format of the image. JPEG and PNG formats are supported.</p>
 */
class AigcImageExtraParam extends AbstractModel
{
    /**
     * @var string <p>Aspect ratio of the generated video.</p><p>Supported aspect ratios for different models:</p><ol><li>Kling 2.1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling 3.0: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling 3.0-Omni: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling O1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Vidu q2: 16:9, 9:16, 1:1, 3:4, 4:3, 21:9, 2:3, and 3:2.</li><li>MJ v7: The aspect ratio needs to be specified in the prompt.</li></ol><p>Note: For more information about the aspect ratios of specific models, see the model website.</p>
     */
    public $AspectRatio;

    /**
     * @var string <p>Output resolution of the image.</p><p>Models that support this parameter:<br>Valid values: 720P, 1080P, 2K, and 4K.</p>
     */
    public $Resolution;

    /**
     * @var integer <p>Indicates whether to add a logo watermark. No watermark is added by default. 1 - A watermark is added. 0 - No watermark is added.</p><p>Value range: [0, 1].</p><p>Default value: 0.</p>
     */
    public $LogoAdd;

    /**
     * @var string <p>Specifies the output format of the image. JPEG and PNG formats are supported.</p>
     */
    public $OutputFormat;

    /**
     * @param string $AspectRatio <p>Aspect ratio of the generated video.</p><p>Supported aspect ratios for different models:</p><ol><li>Kling 2.1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling 3.0: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling 3.0-Omni: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Kling O1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, and 21:9.</li><li>Vidu q2: 16:9, 9:16, 1:1, 3:4, 4:3, 21:9, 2:3, and 3:2.</li><li>MJ v7: The aspect ratio needs to be specified in the prompt.</li></ol><p>Note: For more information about the aspect ratios of specific models, see the model website.</p>
     * @param string $Resolution <p>Output resolution of the image.</p><p>Models that support this parameter:<br>Valid values: 720P, 1080P, 2K, and 4K.</p>
     * @param integer $LogoAdd <p>Indicates whether to add a logo watermark. No watermark is added by default. 1 - A watermark is added. 0 - No watermark is added.</p><p>Value range: [0, 1].</p><p>Default value: 0.</p>
     * @param string $OutputFormat <p>Specifies the output format of the image. JPEG and PNG formats are supported.</p>
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
        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }
    }
}
