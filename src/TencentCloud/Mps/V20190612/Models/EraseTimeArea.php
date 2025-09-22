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
 * Smart Erase, specifies the region configuration.
Erase the designated region directly within a specified period.
When both BeginMs and EndMs are set to 0, directly perform removal of the designated region in the entire video.
 *
 * @method integer getBeginMs() Obtain Start time, in ms.
 * @method void setBeginMs(integer $BeginMs) Set Start time, in ms.
 * @method integer getEndMs() Obtain End time, unit: ms.
 * @method void setEndMs(integer $EndMs) Set End time, unit: ms.
 * @method array getAreas() Obtain Erases the domain list within the period.
 * @method void setAreas(array $Areas) Set Erases the domain list within the period.
 */
class EraseTimeArea extends AbstractModel
{
    /**
     * @var integer Start time, in ms.
     */
    public $BeginMs;

    /**
     * @var integer End time, unit: ms.
     */
    public $EndMs;

    /**
     * @var array Erases the domain list within the period.
     */
    public $Areas;

    /**
     * @param integer $BeginMs Start time, in ms.
     * @param integer $EndMs End time, unit: ms.
     * @param array $Areas Erases the domain list within the period.
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
                $obj = new EraseArea();
                $obj->deserialize($value);
                array_push($this->Areas, $obj);
            }
        }
    }
}
