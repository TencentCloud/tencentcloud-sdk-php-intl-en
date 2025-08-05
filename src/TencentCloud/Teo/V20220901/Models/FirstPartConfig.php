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
 * The configuration to detect slow attacks based on the transfer period the first 8 KB of requests
 *
 * @method string getSwitch() Obtain Switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
 * @method integer getStatTime() Obtain The statistical period of the first segment packet is in seconds. expect the duration to be 5 seconds by default.
 * @method void setStatTime(integer $StatTime) Set The statistical period of the first segment packet is in seconds. expect the duration to be 5 seconds by default.
 */
class FirstPartConfig extends AbstractModel
{
    /**
     * @var string Switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var integer The statistical period of the first segment packet is in seconds. expect the duration to be 5 seconds by default.
     */
    public $StatTime;

    /**
     * @param string $Switch Switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
     * @param integer $StatTime The statistical period of the first segment packet is in seconds. expect the duration to be 5 seconds by default.
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

        if (array_key_exists("StatTime",$param) and $param["StatTime"] !== null) {
            $this->StatTime = $param["StatTime"];
        }
    }
}
