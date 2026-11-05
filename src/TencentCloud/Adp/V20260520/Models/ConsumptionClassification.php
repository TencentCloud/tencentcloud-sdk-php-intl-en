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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Consumption category
 *
 * @method string getConsumptionScene() Obtain <p>Consumption scenario (such as reasoning/training/evaluation)</p>
 * @method void setConsumptionScene(string $ConsumptionScene) Set <p>Consumption scenario (such as reasoning/training/evaluation)</p>
 * @method string getConsumptionTarget() Obtain <p>Consumption target (for example, specific model name/plug-in name/platform feature name)</p>
 * @method void setConsumptionTarget(string $ConsumptionTarget) Set <p>Consumption target (for example, specific model name/plug-in name/platform feature name)</p>
 * @method string getConsumptionType() Obtain <p>Consumption type. The set of values is defined by the business side (for example, model/plugin/platform)</p>
 * @method void setConsumptionType(string $ConsumptionType) Set <p>Consumption type. The set of values is defined by the business side (for example, model/plugin/platform)</p>
 * @method string getPackageName() Obtain <p>Package name</p>
 * @method void setPackageName(string $PackageName) Set <p>Package name</p>
 */
class ConsumptionClassification extends AbstractModel
{
    /**
     * @var string <p>Consumption scenario (such as reasoning/training/evaluation)</p>
     */
    public $ConsumptionScene;

    /**
     * @var string <p>Consumption target (for example, specific model name/plug-in name/platform feature name)</p>
     */
    public $ConsumptionTarget;

    /**
     * @var string <p>Consumption type. The set of values is defined by the business side (for example, model/plugin/platform)</p>
     */
    public $ConsumptionType;

    /**
     * @var string <p>Package name</p>
     */
    public $PackageName;

    /**
     * @param string $ConsumptionScene <p>Consumption scenario (such as reasoning/training/evaluation)</p>
     * @param string $ConsumptionTarget <p>Consumption target (for example, specific model name/plug-in name/platform feature name)</p>
     * @param string $ConsumptionType <p>Consumption type. The set of values is defined by the business side (for example, model/plugin/platform)</p>
     * @param string $PackageName <p>Package name</p>
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
        if (array_key_exists("ConsumptionScene",$param) and $param["ConsumptionScene"] !== null) {
            $this->ConsumptionScene = $param["ConsumptionScene"];
        }

        if (array_key_exists("ConsumptionTarget",$param) and $param["ConsumptionTarget"] !== null) {
            $this->ConsumptionTarget = $param["ConsumptionTarget"];
        }

        if (array_key_exists("ConsumptionType",$param) and $param["ConsumptionType"] !== null) {
            $this->ConsumptionType = $param["ConsumptionType"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
