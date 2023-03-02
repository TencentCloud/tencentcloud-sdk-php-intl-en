<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Banding removal configuration.
 *
 * @method string getSwitch() Obtain Whether to enable banding removal. Valid values:
<li>`ON`</li>
<li>`OFF`</li>
 * @method void setSwitch(string $Switch) Set Whether to enable banding removal. Valid values:
<li>`ON`</li>
<li>`OFF`</li>
 * @method float getIntensity() Obtain The banding removal strength. Value range: 0.0 – 1.0. This parameter is valid only if `Switch` is `ON`.
Default value: `0.0`.
 * @method void setIntensity(float $Intensity) Set The banding removal strength. Value range: 0.0 – 1.0. This parameter is valid only if `Switch` is `ON`.
Default value: `0.0`.
 * @method string getType() Obtain The banding removal type. This parameter is valid only if `Switch` is `ON`. Valid values:
<li>`normal`</li>
Default value: `normal`.
 * @method void setType(string $Type) Set The banding removal type. This parameter is valid only if `Switch` is `ON`. Valid values:
<li>`normal`</li>
Default value: `normal`.
 */
class ScratchRepairInfo extends AbstractModel
{
    /**
     * @var string Whether to enable banding removal. Valid values:
<li>`ON`</li>
<li>`OFF`</li>
     */
    public $Switch;

    /**
     * @var float The banding removal strength. Value range: 0.0 – 1.0. This parameter is valid only if `Switch` is `ON`.
Default value: `0.0`.
     */
    public $Intensity;

    /**
     * @var string The banding removal type. This parameter is valid only if `Switch` is `ON`. Valid values:
<li>`normal`</li>
Default value: `normal`.
     */
    public $Type;

    /**
     * @param string $Switch Whether to enable banding removal. Valid values:
<li>`ON`</li>
<li>`OFF`</li>
     * @param float $Intensity The banding removal strength. Value range: 0.0 – 1.0. This parameter is valid only if `Switch` is `ON`.
Default value: `0.0`.
     * @param string $Type The banding removal type. This parameter is valid only if `Switch` is `ON`. Valid values:
<li>`normal`</li>
Default value: `normal`.
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

        if (array_key_exists("Intensity",$param) and $param["Intensity"] !== null) {
            $this->Intensity = $param["Intensity"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
