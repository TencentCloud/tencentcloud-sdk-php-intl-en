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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on special segment configuration.
 *
 * @method string getSwitch() Obtain Switch for segment duration at startup. Optional values:
on: Turn on
off: Turn off the switch
Default value: off
 * @method void setSwitch(string $Switch) Set Switch for segment duration at startup. Optional values:
on: Turn on
off: Turn off the switch
Default value: off
 * @method integer getFragmentTime() Obtain Segment duration at startup. Unit: second
 * @method void setFragmentTime(integer $FragmentTime) Set Segment duration at startup. Unit: second
 * @method integer getFragmentEndNum() Obtain Number of effective segments, indicating the first FragmentEndNum segments with FragmentTime. Value range: >=1
 * @method void setFragmentEndNum(integer $FragmentEndNum) Set Number of effective segments, indicating the first FragmentEndNum segments with FragmentTime. Value range: >=1
 */
class SegmentSpecificInfo extends AbstractModel
{
    /**
     * @var string Switch for segment duration at startup. Optional values:
on: Turn on
off: Turn off the switch
Default value: off
     */
    public $Switch;

    /**
     * @var integer Segment duration at startup. Unit: second
     */
    public $FragmentTime;

    /**
     * @var integer Number of effective segments, indicating the first FragmentEndNum segments with FragmentTime. Value range: >=1
     */
    public $FragmentEndNum;

    /**
     * @param string $Switch Switch for segment duration at startup. Optional values:
on: Turn on
off: Turn off the switch
Default value: off
     * @param integer $FragmentTime Segment duration at startup. Unit: second
     * @param integer $FragmentEndNum Number of effective segments, indicating the first FragmentEndNum segments with FragmentTime. Value range: >=1
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

        if (array_key_exists("FragmentTime",$param) and $param["FragmentTime"] !== null) {
            $this->FragmentTime = $param["FragmentTime"];
        }

        if (array_key_exists("FragmentEndNum",$param) and $param["FragmentEndNum"] !== null) {
            $this->FragmentEndNum = $param["FragmentEndNum"];
        }
    }
}
