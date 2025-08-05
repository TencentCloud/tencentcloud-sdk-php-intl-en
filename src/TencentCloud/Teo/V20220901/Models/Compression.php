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
 * Smart compression configuration.
 *
 * @method string getSwitch() Obtain Whether to enable smart compression. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Whether to enable smart compression. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method array getAlgorithms() Obtain Supported compression algorithm list. valid values:.
<Li>Brotli: specifies the brotli algorithm.</li>.
<Li>Gzip: specifies the gzip algorithm.</li>.
 * @method void setAlgorithms(array $Algorithms) Set Supported compression algorithm list. valid values:.
<Li>Brotli: specifies the brotli algorithm.</li>.
<Li>Gzip: specifies the gzip algorithm.</li>.
 */
class Compression extends AbstractModel
{
    /**
     * @var string Whether to enable smart compression. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var array Supported compression algorithm list. valid values:.
<Li>Brotli: specifies the brotli algorithm.</li>.
<Li>Gzip: specifies the gzip algorithm.</li>.
     */
    public $Algorithms;

    /**
     * @param string $Switch Whether to enable smart compression. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param array $Algorithms Supported compression algorithm list. valid values:.
<Li>Brotli: specifies the brotli algorithm.</li>.
<Li>Gzip: specifies the gzip algorithm.</li>.
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
