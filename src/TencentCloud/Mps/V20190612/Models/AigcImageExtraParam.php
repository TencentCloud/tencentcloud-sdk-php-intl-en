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
 * @method string getAspectRatio() Obtain The aspect ratio of the generated video.Supported aspect ratios for different models:1. GEM: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, and 21:9.Note: For more information about the aspect ratios of specific models, see the model website.
 * @method void setAspectRatio(string $AspectRatio) Set The aspect ratio of the generated video.Supported aspect ratios for different models:1. GEM: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, and 21:9.Note: For more information about the aspect ratios of specific models, see the model website.
 * @method string getResolution() Obtain Output resolution of the image.Models that support this parameter:Valid values: 720P, 1080P, 2K, and 4K.
 * @method void setResolution(string $Resolution) Set Output resolution of the image.Models that support this parameter:Valid values: 720P, 1080P, 2K, and 4K.
 */
class AigcImageExtraParam extends AbstractModel
{
    /**
     * @var string The aspect ratio of the generated video.Supported aspect ratios for different models:1. GEM: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, and 21:9.Note: For more information about the aspect ratios of specific models, see the model website.
     */
    public $AspectRatio;

    /**
     * @var string Output resolution of the image.Models that support this parameter:Valid values: 720P, 1080P, 2K, and 4K.
     */
    public $Resolution;

    /**
     * @param string $AspectRatio The aspect ratio of the generated video.Supported aspect ratios for different models:1. GEM: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, and 21:9.Note: For more information about the aspect ratios of specific models, see the model website.
     * @param string $Resolution Output resolution of the image.Models that support this parameter:Valid values: 720P, 1080P, 2K, and 4K.
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
    }
}
