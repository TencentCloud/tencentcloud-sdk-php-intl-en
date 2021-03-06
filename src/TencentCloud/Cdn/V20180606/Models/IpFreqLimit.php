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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access limit configuration for a single IP of a single node. This is disabled by default. 
 *
 * @method string getSwitch() Obtain IP access limit configuration switch
on: enabled
off: disabled
 * @method void setSwitch(string $Switch) Set IP access limit configuration switch
on: enabled
off: disabled
 * @method integer getQps() Obtain Sets the limited number of requests per second
514 will be returned for requests that exceed the limit
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setQps(integer $Qps) Set Sets the limited number of requests per second
514 will be returned for requests that exceed the limit
Note: this field may return null, indicating that no valid values can be obtained.
 */
class IpFreqLimit extends AbstractModel
{
    /**
     * @var string IP access limit configuration switch
on: enabled
off: disabled
     */
    public $Switch;

    /**
     * @var integer Sets the limited number of requests per second
514 will be returned for requests that exceed the limit
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Qps;

    /**
     * @param string $Switch IP access limit configuration switch
on: enabled
off: disabled
     * @param integer $Qps Sets the limited number of requests per second
514 will be returned for requests that exceed the limit
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }
    }
}
