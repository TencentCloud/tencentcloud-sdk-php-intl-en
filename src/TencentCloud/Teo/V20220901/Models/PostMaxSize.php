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
 * POST request upload file streaming transmission maximum limit
 *
 * @method string getSwitch() Obtain Whether to enable the POST request upload file limit. The platform defaults to a limit of 32 MB. Valid values:
<li>on: enable limit;</li>
<li>off: disables the limit.</li>
 * @method void setSwitch(string $Switch) Set Whether to enable the POST request upload file limit. The platform defaults to a limit of 32 MB. Valid values:
<li>on: enable limit;</li>
<li>off: disables the limit.</li>
 * @method integer getMaxSize() Obtain Maximum limit. This field is valid only when Switch is on. The value ranges from 1 MB to 800 MB, in bytes.
 * @method void setMaxSize(integer $MaxSize) Set Maximum limit. This field is valid only when Switch is on. The value ranges from 1 MB to 800 MB, in bytes.
 */
class PostMaxSize extends AbstractModel
{
    /**
     * @var string Whether to enable the POST request upload file limit. The platform defaults to a limit of 32 MB. Valid values:
<li>on: enable limit;</li>
<li>off: disables the limit.</li>
     */
    public $Switch;

    /**
     * @var integer Maximum limit. This field is valid only when Switch is on. The value ranges from 1 MB to 800 MB, in bytes.
     */
    public $MaxSize;

    /**
     * @param string $Switch Whether to enable the POST request upload file limit. The platform defaults to a limit of 32 MB. Valid values:
<li>on: enable limit;</li>
<li>off: disables the limit.</li>
     * @param integer $MaxSize Maximum limit. This field is valid only when Switch is on. The value ranges from 1 MB to 800 MB, in bytes.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
