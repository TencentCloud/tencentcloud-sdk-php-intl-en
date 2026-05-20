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
 * Background sound settings will add environmental sound effects during a call to make the experience more realistic. currently support the following options:.
Coffee_shops: chat in a coffee shop communication environment with background chatter.
busy office: customer service center.
Street traffic: outdoors street.
evening_mountain: outdoors mountain.
 *
 * @method string getScene() Obtain Scenario selection.
 * @method void setScene(string $Scene) Set Scenario selection.
 * @method float getVolume() Obtain Control the volume of ambient sound. value ranges from [0,2]. the lower the value, the softer the ambient sound; the higher the value, the louder the ambient sound. if not set, use the default value 1.
 * @method void setVolume(float $Volume) Set Control the volume of ambient sound. value ranges from [0,2]. the lower the value, the softer the ambient sound; the higher the value, the louder the ambient sound. if not set, use the default value 1.
 */
class AmbientSound extends AbstractModel
{
    /**
     * @var string Scenario selection.
     */
    public $Scene;

    /**
     * @var float Control the volume of ambient sound. value ranges from [0,2]. the lower the value, the softer the ambient sound; the higher the value, the louder the ambient sound. if not set, use the default value 1.
     */
    public $Volume;

    /**
     * @param string $Scene Scenario selection.
     * @param float $Volume Control the volume of ambient sound. value ranges from [0,2]. the lower the value, the softer the ambient sound; the higher the value, the louder the ambient sound. if not set, use the default value 1.
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
