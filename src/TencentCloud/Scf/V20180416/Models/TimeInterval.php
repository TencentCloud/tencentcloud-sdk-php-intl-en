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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Left-closed-right-open time range between the start time and end time in the format of "%Y-%m-%d %H:%M:%S"
 *
 * @method string getStart() Obtain Start time (inclusive) in the format of "%Y-%m-%d %H:%M:%S"
 * @method void setStart(string $Start) Set Start time (inclusive) in the format of "%Y-%m-%d %H:%M:%S"
 * @method string getEnd() Obtain End time (exclusive) in the format of "%Y-%m-%d %H:%M:%S"
 * @method void setEnd(string $End) Set End time (exclusive) in the format of "%Y-%m-%d %H:%M:%S"
 */
class TimeInterval extends AbstractModel
{
    /**
     * @var string Start time (inclusive) in the format of "%Y-%m-%d %H:%M:%S"
     */
    public $Start;

    /**
     * @var string End time (exclusive) in the format of "%Y-%m-%d %H:%M:%S"
     */
    public $End;

    /**
     * @param string $Start Start time (inclusive) in the format of "%Y-%m-%d %H:%M:%S"
     * @param string $End End time (exclusive) in the format of "%Y-%m-%d %H:%M:%S"
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
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
