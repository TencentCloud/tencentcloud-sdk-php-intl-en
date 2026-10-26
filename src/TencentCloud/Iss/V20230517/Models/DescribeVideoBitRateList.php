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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result list returned from querying the bitrate of a video channel
 *
 * @method array getBitRates() Obtain List of channel bitrates
 * @method void setBitRates(array $BitRates) Set List of channel bitrates
 */
class DescribeVideoBitRateList extends AbstractModel
{
    /**
     * @var array List of channel bitrates
     */
    public $BitRates;

    /**
     * @param array $BitRates List of channel bitrates
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
        if (array_key_exists("BitRates",$param) and $param["BitRates"] !== null) {
            $this->BitRates = [];
            foreach ($param["BitRates"] as $key => $value){
                $obj = new BitRateInfo();
                $obj->deserialize($value);
                array_push($this->BitRates, $obj);
            }
        }
    }
}
