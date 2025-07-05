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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The stream mixing SEI parameters.
 *
 * @method McuLayoutVolume getLayoutVolume() Obtain The audio volume layout SEI.
 * @method void setLayoutVolume(McuLayoutVolume $LayoutVolume) Set The audio volume layout SEI.
 * @method McuPassThrough getPassThrough() Obtain The pass-through SEI.
 * @method void setPassThrough(McuPassThrough $PassThrough) Set The pass-through SEI.
 */
class McuSeiParams extends AbstractModel
{
    /**
     * @var McuLayoutVolume The audio volume layout SEI.
     */
    public $LayoutVolume;

    /**
     * @var McuPassThrough The pass-through SEI.
     */
    public $PassThrough;

    /**
     * @param McuLayoutVolume $LayoutVolume The audio volume layout SEI.
     * @param McuPassThrough $PassThrough The pass-through SEI.
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
        if (array_key_exists("LayoutVolume",$param) and $param["LayoutVolume"] !== null) {
            $this->LayoutVolume = new McuLayoutVolume();
            $this->LayoutVolume->deserialize($param["LayoutVolume"]);
        }

        if (array_key_exists("PassThrough",$param) and $param["PassThrough"] !== null) {
            $this->PassThrough = new McuPassThrough();
            $this->PassThrough->deserialize($param["PassThrough"]);
        }
    }
}
