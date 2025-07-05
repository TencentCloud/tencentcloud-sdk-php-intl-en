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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional parameter for SecurityAction `BlockIP`.
 *
 * @method string getDuration() Obtain Penalty duration for `BlockIP`. Units: <li>`s`: second, value range 1-120;</li> <li>`m`: minute, value range 1-120;</li> <li>`h`: hour, value range 1-48.</li>.
 * @method void setDuration(string $Duration) Set Penalty duration for `BlockIP`. Units: <li>`s`: second, value range 1-120;</li> <li>`m`: minute, value range 1-120;</li> <li>`h`: hour, value range 1-48.</li>.
 */
class BlockIPActionParameters extends AbstractModel
{
    /**
     * @var string Penalty duration for `BlockIP`. Units: <li>`s`: second, value range 1-120;</li> <li>`m`: minute, value range 1-120;</li> <li>`h`: hour, value range 1-48.</li>.
     */
    public $Duration;

    /**
     * @param string $Duration Penalty duration for `BlockIP`. Units: <li>`s`: second, value range 1-120;</li> <li>`m`: minute, value range 1-120;</li> <li>`h`: hour, value range 1-48.</li>.
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
