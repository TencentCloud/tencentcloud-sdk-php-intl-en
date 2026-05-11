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
 * Scenario-based AIGC image generation configuration.
 *
 * @method string getType() Obtain AI video scenario type. Optional values:
-product_showcase: Show the product in 360 degrees.
 * @method void setType(string $Type) Set AI video scenario type. Optional values:
-product_showcase: Show the product in 360 degrees.
 * @method ProductShowcaseConfig getProductShowcaseConfig() Obtain Product display parameter
 * @method void setProductShowcaseConfig(ProductShowcaseConfig $ProductShowcaseConfig) Set Product display parameter
 */
class AigcVideoSceneInfo extends AbstractModel
{
    /**
     * @var string AI video scenario type. Optional values:
-product_showcase: Show the product in 360 degrees.
     */
    public $Type;

    /**
     * @var ProductShowcaseConfig Product display parameter
     */
    public $ProductShowcaseConfig;

    /**
     * @param string $Type AI video scenario type. Optional values:
-product_showcase: Show the product in 360 degrees.
     * @param ProductShowcaseConfig $ProductShowcaseConfig Product display parameter
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProductShowcaseConfig",$param) and $param["ProductShowcaseConfig"] !== null) {
            $this->ProductShowcaseConfig = new ProductShowcaseConfig();
            $this->ProductShowcaseConfig->deserialize($param["ProductShowcaseConfig"]);
        }
    }
}
