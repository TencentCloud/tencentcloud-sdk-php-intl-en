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
 * Slow attack first segment packet configuration.
 *
 * @method string getSwitch() Obtain Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method integer getStatTime() Obtain Statistical period of the first segment packet, in seconds. This is the expected statistical period of the first segment packet. Default value: 5 seconds.
 * @method void setStatTime(integer $StatTime) Set Statistical period of the first segment packet, in seconds. This is the expected statistical period of the first segment packet. Default value: 5 seconds.
 */
class FirstPartConfig extends AbstractModel
{
    /**
     * @var string Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var integer Statistical period of the first segment packet, in seconds. This is the expected statistical period of the first segment packet. Default value: 5 seconds.
     */
    public $StatTime;

    /**
     * @param string $Switch Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param integer $StatTime Statistical period of the first segment packet, in seconds. This is the expected statistical period of the first segment packet. Default value: 5 seconds.
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
