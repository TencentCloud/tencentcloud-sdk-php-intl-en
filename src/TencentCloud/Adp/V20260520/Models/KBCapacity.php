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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Knowledge base capacity information.
 *
 * @method string getMaxCharSize() Obtain <p>Maximum number of characters</p>
 * @method void setMaxCharSize(string $MaxCharSize) Set <p>Maximum number of characters</p>
 * @method string getOverCharSize() Obtain <p>Number of excess characters</p>
 * @method void setOverCharSize(string $OverCharSize) Set <p>Number of excess characters</p>
 * @method string getUsedCharSize() Obtain <p>Used number of characters</p>
 * @method void setUsedCharSize(string $UsedCharSize) Set <p>Used number of characters</p>
 */
class KBCapacity extends AbstractModel
{
    /**
     * @var string <p>Maximum number of characters</p>
     */
    public $MaxCharSize;

    /**
     * @var string <p>Number of excess characters</p>
     */
    public $OverCharSize;

    /**
     * @var string <p>Used number of characters</p>
     */
    public $UsedCharSize;

    /**
     * @param string $MaxCharSize <p>Maximum number of characters</p>
     * @param string $OverCharSize <p>Number of excess characters</p>
     * @param string $UsedCharSize <p>Used number of characters</p>
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
        if (array_key_exists("MaxCharSize",$param) and $param["MaxCharSize"] !== null) {
            $this->MaxCharSize = $param["MaxCharSize"];
        }

        if (array_key_exists("OverCharSize",$param) and $param["OverCharSize"] !== null) {
            $this->OverCharSize = $param["OverCharSize"];
        }

        if (array_key_exists("UsedCharSize",$param) and $param["UsedCharSize"] !== null) {
            $this->UsedCharSize = $param["UsedCharSize"];
        }
    }
}
