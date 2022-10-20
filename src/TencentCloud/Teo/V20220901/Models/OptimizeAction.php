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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The optimization suggestions
 *
 * @method string getName() Obtain The optimization metric. Values:
<li>`Http2`</li>
<li>`Http3`</li>
<li>`Brotli`</li>
 * @method void setName(string $Name) Set The optimization metric. Values:
<li>`Http2`</li>
<li>`Http3`</li>
<li>`Brotli`</li>
 * @method string getConnectivity() Obtain The network environment.
 * @method void setConnectivity(string $Connectivity) Set The network environment.
 * @method integer getValue() Obtain The estimated load time, in milliseconds.
 * @method void setValue(integer $Value) Set The estimated load time, in milliseconds.
 * @method integer getRatio() Obtain The estimated improvement ratio, in %.
 * @method void setRatio(integer $Ratio) Set The estimated improvement ratio, in %.
 */
class OptimizeAction extends AbstractModel
{
    /**
     * @var string The optimization metric. Values:
<li>`Http2`</li>
<li>`Http3`</li>
<li>`Brotli`</li>
     */
    public $Name;

    /**
     * @var string The network environment.
     */
    public $Connectivity;

    /**
     * @var integer The estimated load time, in milliseconds.
     */
    public $Value;

    /**
     * @var integer The estimated improvement ratio, in %.
     */
    public $Ratio;

    /**
     * @param string $Name The optimization metric. Values:
<li>`Http2`</li>
<li>`Http3`</li>
<li>`Brotli`</li>
     * @param string $Connectivity The network environment.
     * @param integer $Value The estimated load time, in milliseconds.
     * @param integer $Ratio The estimated improvement ratio, in %.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Connectivity",$param) and $param["Connectivity"] !== null) {
            $this->Connectivity = $param["Connectivity"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }
    }
}
