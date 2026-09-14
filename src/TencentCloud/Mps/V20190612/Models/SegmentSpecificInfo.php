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
 * @method string getSwitch() Obtain 
 * @method void setSwitch(string $Switch) Set 
 * @method integer getFragmentTime() Obtain 
 * @method void setFragmentTime(integer $FragmentTime) Set 
 * @method integer getFragmentEndNum() Obtain 
 * @method void setFragmentEndNum(integer $FragmentEndNum) Set 
 */
class SegmentSpecificInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Switch;

    /**
     * @var integer 
     */
    public $FragmentTime;

    /**
     * @var integer 
     */
    public $FragmentEndNum;

    /**
     * @param string $Switch 
     * @param integer $FragmentTime 
     * @param integer $FragmentEndNum 
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
