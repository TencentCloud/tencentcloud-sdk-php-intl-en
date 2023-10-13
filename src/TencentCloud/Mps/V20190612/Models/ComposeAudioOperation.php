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
 * The audio operations of a video editing/compositing task.
 *
 * @method string getType() Obtain The operation type. Valid values:
<li>`Volume`: Volume adjustment. </li>
 * @method void setType(string $Type) Set The operation type. Valid values:
<li>`Volume`: Volume adjustment. </li>
 * @method float getVolume() Obtain  The volume level. This parameter is valid if `Type` is `Volume`. Value range: 0–5. 
<li>If the parameter value is `0`, the video will be muted. </li>
<li>If the parameter value is smaller than 1, the volume will be reduced. </li>
<li>If the parameter value is `1`, the original volume will be kept. </li>
<li>If the parameter value is greater than 1, the volume will be increased. </li>
 * @method void setVolume(float $Volume) Set  The volume level. This parameter is valid if `Type` is `Volume`. Value range: 0–5. 
<li>If the parameter value is `0`, the video will be muted. </li>
<li>If the parameter value is smaller than 1, the volume will be reduced. </li>
<li>If the parameter value is `1`, the original volume will be kept. </li>
<li>If the parameter value is greater than 1, the volume will be increased. </li>
 */
class ComposeAudioOperation extends AbstractModel
{
    /**
     * @var string The operation type. Valid values:
<li>`Volume`: Volume adjustment. </li>
     */
    public $Type;

    /**
     * @var float  The volume level. This parameter is valid if `Type` is `Volume`. Value range: 0–5. 
<li>If the parameter value is `0`, the video will be muted. </li>
<li>If the parameter value is smaller than 1, the volume will be reduced. </li>
<li>If the parameter value is `1`, the original volume will be kept. </li>
<li>If the parameter value is greater than 1, the volume will be increased. </li>
     */
    public $Volume;

    /**
     * @param string $Type The operation type. Valid values:
<li>`Volume`: Volume adjustment. </li>
     * @param float $Volume  The volume level. This parameter is valid if `Type` is `Volume`. Value range: 0–5. 
<li>If the parameter value is `0`, the video will be muted. </li>
<li>If the parameter value is smaller than 1, the volume will be reduced. </li>
<li>If the parameter value is `1`, the original volume will be kept. </li>
<li>If the parameter value is greater than 1, the volume will be increased. </li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
