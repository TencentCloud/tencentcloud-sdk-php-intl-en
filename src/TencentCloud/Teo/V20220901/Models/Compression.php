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
 * Intelligent compression configuration.
 *
 * @method string getSwitch() Obtain Intelligent compression configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Intelligent compression configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method array getAlgorithms() Obtain List of supported compression algorithms. Valid values:
<li>brotli: brotli algorithm;</li>
<li>gzip: gzip algorithm.</li>
 * @method void setAlgorithms(array $Algorithms) Set List of supported compression algorithms. Valid values:
<li>brotli: brotli algorithm;</li>
<li>gzip: gzip algorithm.</li>
 */
class Compression extends AbstractModel
{
    /**
     * @var string Intelligent compression configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var array List of supported compression algorithms. Valid values:
<li>brotli: brotli algorithm;</li>
<li>gzip: gzip algorithm.</li>
     */
    public $Algorithms;

    /**
     * @param string $Switch Intelligent compression configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param array $Algorithms List of supported compression algorithms. Valid values:
<li>brotli: brotli algorithm;</li>
<li>gzip: gzip algorithm.</li>
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

        if (array_key_exists("Algorithms",$param) and $param["Algorithms"] !== null) {
            $this->Algorithms = $param["Algorithms"];
        }
    }
}
