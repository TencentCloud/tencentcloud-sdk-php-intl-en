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
 * Hit product clone AIGC video parameters
 *
 * @method integer getDuration() Obtain <p>Video duration</p><p>Range: [4, 15]</p>
 * @method void setDuration(integer $Duration) Set <p>Video duration</p><p>Range: [4, 15]</p>
 * @method string getAspectRatio() Obtain <p>Aspect ratio. Options: 16:9/4:3/1:1/3:4/9:16/21:9/adaptive</p>
 * @method void setAspectRatio(string $AspectRatio) Set <p>Aspect ratio. Options: 16:9/4:3/1:1/3:4/9:16/21:9/adaptive</p>
 * @method string getResolution() Obtain <p>Resolution. Supports 720p (default)/1080p/2k/4k</p>
 * @method void setResolution(string $Resolution) Set <p>Resolution. Supports 720p (default)/1080p/2k/4k</p>
 * @method string getModelTier() Obtain <p>Model tier. flagship (default), standard</p>
 * @method void setModelTier(string $ModelTier) Set <p>Model tier. flagship (default), standard</p>
 */
class CloneViralAIGC extends AbstractModel
{
    /**
     * @var integer <p>Video duration</p><p>Range: [4, 15]</p>
     */
    public $Duration;

    /**
     * @var string <p>Aspect ratio. Options: 16:9/4:3/1:1/3:4/9:16/21:9/adaptive</p>
     */
    public $AspectRatio;

    /**
     * @var string <p>Resolution. Supports 720p (default)/1080p/2k/4k</p>
     */
    public $Resolution;

    /**
     * @var string <p>Model tier. flagship (default), standard</p>
     */
    public $ModelTier;

    /**
     * @param integer $Duration <p>Video duration</p><p>Range: [4, 15]</p>
     * @param string $AspectRatio <p>Aspect ratio. Options: 16:9/4:3/1:1/3:4/9:16/21:9/adaptive</p>
     * @param string $Resolution <p>Resolution. Supports 720p (default)/1080p/2k/4k</p>
     * @param string $ModelTier <p>Model tier. flagship (default), standard</p>
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("ModelTier",$param) and $param["ModelTier"] !== null) {
            $this->ModelTier = $param["ModelTier"];
        }
    }
}
