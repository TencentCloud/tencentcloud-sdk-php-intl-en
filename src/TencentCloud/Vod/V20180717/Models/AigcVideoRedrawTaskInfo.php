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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC video conversion figure parameter information.
 *
 * @method string getStyle() Obtain <p>For description of style. Limited to 50 characters.</p>
 * @method void setStyle(string $Style) Set <p>For description of style. Limited to 50 characters.</p>
 */
class AigcVideoRedrawTaskInfo extends AbstractModel
{
    /**
     * @var string <p>For description of style. Limited to 50 characters.</p>
     */
    public $Style;

    /**
     * @param string $Style <p>For description of style. Limited to 50 characters.</p>
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
        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }
    }
}
