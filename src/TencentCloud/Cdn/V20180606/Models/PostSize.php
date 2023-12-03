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
 * Maximum size of the file uploaded for streaming via a POST request
 *
 * @method string getSwitch() Obtain Maximum size of the file uploaded for streaming via a POST request. Values:
`on`: Enable. When enabled, it is set to 32 MB by default.
`off`: Disable

 * @method void setSwitch(string $Switch) Set Maximum size of the file uploaded for streaming via a POST request. Values:
`on`: Enable. When enabled, it is set to 32 MB by default.
`off`: Disable

 * @method integer getMaxSize() Obtain Maximum size. Value range: 1 MB to 200 MB.
 * @method void setMaxSize(integer $MaxSize) Set Maximum size. Value range: 1 MB to 200 MB.
 */
class PostSize extends AbstractModel
{
    /**
     * @var string Maximum size of the file uploaded for streaming via a POST request. Values:
`on`: Enable. When enabled, it is set to 32 MB by default.
`off`: Disable

     */
    public $Switch;

    /**
     * @var integer Maximum size. Value range: 1 MB to 200 MB.
     */
    public $MaxSize;

    /**
     * @param string $Switch Maximum size of the file uploaded for streaming via a POST request. Values:
`on`: Enable. When enabled, it is set to 32 MB by default.
`off`: Disable

     * @param integer $MaxSize Maximum size. Value range: 1 MB to 200 MB.
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
