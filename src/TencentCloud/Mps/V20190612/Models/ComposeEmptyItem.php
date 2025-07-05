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
 * The placeholder element information of a video editing/compositing task.
 *
 * @method string getDuration() Obtain The element duration.
<li>The value of this parameter ends with `s`, which means seconds. For example, `3.5s` indicates 3.5 seconds. </li>
 * @method void setDuration(string $Duration) Set The element duration.
<li>The value of this parameter ends with `s`, which means seconds. For example, `3.5s` indicates 3.5 seconds. </li>
 */
class ComposeEmptyItem extends AbstractModel
{
    /**
     * @var string The element duration.
<li>The value of this parameter ends with `s`, which means seconds. For example, `3.5s` indicates 3.5 seconds. </li>
     */
    public $Duration;

    /**
     * @param string $Duration The element duration.
<li>The value of this parameter ends with `s`, which means seconds. For example, `3.5s` indicates 3.5 seconds. </li>
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
    }
}
