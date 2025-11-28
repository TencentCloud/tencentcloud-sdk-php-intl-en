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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Price tag information. A complete price tag includes the billing category and the billing item.
 *
 * @method string getName() Obtain Price name. Enumeration values: tps: basic price of TPS; stepTps: TPS step size.
 * @method void setName(string $Name) Set Price name. Enumeration values: tps: basic price of TPS; stepTps: TPS step size.
 * @method integer getStep() Obtain Step size corresponding to the billing item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStep(integer $Step) Set Step size corresponding to the billing item.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PriceTag extends AbstractModel
{
    /**
     * @var string Price name. Enumeration values: tps: basic price of TPS; stepTps: TPS step size.
     */
    public $Name;

    /**
     * @var integer Step size corresponding to the billing item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Step;

    /**
     * @param string $Name Price name. Enumeration values: tps: basic price of TPS; stepTps: TPS step size.
     * @param integer $Step Step size corresponding to the billing item.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }
    }
}
