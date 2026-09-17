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
 * 
 *
 * @method string getWatermarkEraseMethod() Obtain 
 * @method void setWatermarkEraseMethod(string $WatermarkEraseMethod) Set 
 * @method string getWatermarkModel() Obtain 
 * @method void setWatermarkModel(string $WatermarkModel) Set 
 * @method array getAutoAreas() Obtain 
 * @method void setAutoAreas(array $AutoAreas) Set 
 * @method array getCustomAreas() Obtain 
 * @method void setCustomAreas(array $CustomAreas) Set 
 */
class MPSUpdateSmartEraseWatermarkConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $WatermarkEraseMethod;

    /**
     * @var string 
     */
    public $WatermarkModel;

    /**
     * @var array 
     */
    public $AutoAreas;

    /**
     * @var array 
     */
    public $CustomAreas;

    /**
     * @param string $WatermarkEraseMethod 
     * @param string $WatermarkModel 
     * @param array $AutoAreas 
     * @param array $CustomAreas 
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
        if (array_key_exists("WatermarkEraseMethod",$param) and $param["WatermarkEraseMethod"] !== null) {
            $this->WatermarkEraseMethod = $param["WatermarkEraseMethod"];
        }

        if (array_key_exists("WatermarkModel",$param) and $param["WatermarkModel"] !== null) {
            $this->WatermarkModel = $param["WatermarkModel"];
        }

        if (array_key_exists("AutoAreas",$param) and $param["AutoAreas"] !== null) {
            $this->AutoAreas = [];
            foreach ($param["AutoAreas"] as $key => $value){
                $obj = new MPSEraseArea();
                $obj->deserialize($value);
                array_push($this->AutoAreas, $obj);
            }
        }

        if (array_key_exists("CustomAreas",$param) and $param["CustomAreas"] !== null) {
            $this->CustomAreas = [];
            foreach ($param["CustomAreas"] as $key => $value){
                $obj = new MPSEraseTimeArea();
                $obj->deserialize($value);
                array_push($this->CustomAreas, $obj);
            }
        }
    }
}
