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
 * @method string getWidth() Obtain 
 * @method void setWidth(string $Width) Set 
 * @method string getHeight() Obtain 
 * @method void setHeight(string $Height) Set 
 * @method WatermarkCycleConfigForUpdate getCycleConfig() Obtain 
 * @method void setCycleConfig(WatermarkCycleConfigForUpdate $CycleConfig) Set 
 */
class SvgWatermarkInputForUpdate extends AbstractModel
{
    /**
     * @var string 
     */
    public $Width;

    /**
     * @var string 
     */
    public $Height;

    /**
     * @var WatermarkCycleConfigForUpdate 
     * @deprecated
     */
    public $CycleConfig;

    /**
     * @param string $Width 
     * @param string $Height 
     * @param WatermarkCycleConfigForUpdate $CycleConfig 
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("CycleConfig",$param) and $param["CycleConfig"] !== null) {
            $this->CycleConfig = new WatermarkCycleConfigForUpdate();
            $this->CycleConfig->deserialize($param["CycleConfig"]);
        }
    }
}
