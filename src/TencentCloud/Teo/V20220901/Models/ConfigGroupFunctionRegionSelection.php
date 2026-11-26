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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region policy settings.
 *
 * @method string getFunction() Obtain <p>Specify the function executed. The value is the unique identifier of the function in the site. This parameter is valid only when TriggerType is direct.</p>
 * @method void setFunction(string $Function) Set <p>Specify the function executed. The value is the unique identifier of the function in the site. This parameter is valid only when TriggerType is direct.</p>
 * @method array getRegions() Obtain <p>List of countries/regions. Example value: CN: China, CN.GD: Guangdong, China. For values, see <a href="https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1">Countries/Regions and Corresponding Codes</a>.</p>
 * @method void setRegions(array $Regions) Set <p>List of countries/regions. Example value: CN: China, CN.GD: Guangdong, China. For values, see <a href="https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1">Countries/Regions and Corresponding Codes</a>.</p>
 */
class ConfigGroupFunctionRegionSelection extends AbstractModel
{
    /**
     * @var string <p>Specify the function executed. The value is the unique identifier of the function in the site. This parameter is valid only when TriggerType is direct.</p>
     */
    public $Function;

    /**
     * @var array <p>List of countries/regions. Example value: CN: China, CN.GD: Guangdong, China. For values, see <a href="https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1">Countries/Regions and Corresponding Codes</a>.</p>
     */
    public $Regions;

    /**
     * @param string $Function <p>Specify the function executed. The value is the unique identifier of the function in the site. This parameter is valid only when TriggerType is direct.</p>
     * @param array $Regions <p>List of countries/regions. Example value: CN: China, CN.GD: Guangdong, China. For values, see <a href="https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1">Countries/Regions and Corresponding Codes</a>.</p>
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
        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = $param["Function"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }
    }
}
