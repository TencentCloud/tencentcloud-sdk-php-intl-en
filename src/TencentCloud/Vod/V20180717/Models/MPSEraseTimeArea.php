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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent erasure, specify region configuration.
Perform erasure directly in the designated region within a specified period.
When both BeginMs and EndMs are set to 0, directly perform erase on the designated region in the entire video.
 *
 * @method integer getBeginMs() Obtain <p>Start time, unit: ms</p>
 * @method void setBeginMs(integer $BeginMs) Set <p>Start time, unit: ms</p>
 * @method integer getEndMs() Obtain <p>End time, unit: ms</p>
 * @method void setEndMs(integer $EndMs) Set <p>End time, unit: ms</p>
 * @method array getAreas() Obtain <p>Domain list for erasure within the period</p>
 * @method void setAreas(array $Areas) Set <p>Domain list for erasure within the period</p>
 */
class MPSEraseTimeArea extends AbstractModel
{
    /**
     * @var integer <p>Start time, unit: ms</p>
     */
    public $BeginMs;

    /**
     * @var integer <p>End time, unit: ms</p>
     */
    public $EndMs;

    /**
     * @var array <p>Domain list for erasure within the period</p>
     */
    public $Areas;

    /**
     * @param integer $BeginMs <p>Start time, unit: ms</p>
     * @param integer $EndMs <p>End time, unit: ms</p>
     * @param array $Areas <p>Domain list for erasure within the period</p>
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
        if (array_key_exists("BeginMs",$param) and $param["BeginMs"] !== null) {
            $this->BeginMs = $param["BeginMs"];
        }

        if (array_key_exists("EndMs",$param) and $param["EndMs"] !== null) {
            $this->EndMs = $param["EndMs"];
        }

        if (array_key_exists("Areas",$param) and $param["Areas"] !== null) {
            $this->Areas = [];
            foreach ($param["Areas"] as $key => $value){
                $obj = new MPSEraseArea();
                $obj->deserialize($value);
                array_push($this->Areas, $obj);
            }
        }
    }
}
