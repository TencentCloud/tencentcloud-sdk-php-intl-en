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
 * 
 *
 * @method integer getBeginMs() Obtain 
 * @method void setBeginMs(integer $BeginMs) Set 
 * @method integer getEndMs() Obtain 
 * @method void setEndMs(integer $EndMs) Set 
 * @method array getAreas() Obtain 
 * @method void setAreas(array $Areas) Set 
 */
class EraseTimeArea extends AbstractModel
{
    /**
     * @var integer 
     */
    public $BeginMs;

    /**
     * @var integer 
     */
    public $EndMs;

    /**
     * @var array 
     */
    public $Areas;

    /**
     * @param integer $BeginMs 
     * @param integer $EndMs 
     * @param array $Areas 
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
