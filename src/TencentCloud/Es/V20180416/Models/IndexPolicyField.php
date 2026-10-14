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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Index lifecycle field
 *
 * @method string getWarmEnable() Obtain Whether the warm phase is enabled
 * @method void setWarmEnable(string $WarmEnable) Set Whether the warm phase is enabled
 * @method string getWarmMinAge() Obtain Transfer time to the warm phase
 * @method void setWarmMinAge(string $WarmMinAge) Set Transfer time to the warm phase
 * @method string getColdEnable() Obtain Whether the cold phase is enabled
 * @method void setColdEnable(string $ColdEnable) Set Whether the cold phase is enabled
 * @method string getColdMinAge() Obtain Transfer time to the cold phase
 * @method void setColdMinAge(string $ColdMinAge) Set Transfer time to the cold phase
 * @method string getFrozenEnable() Obtain Whether the frozen phase is enabled
 * @method void setFrozenEnable(string $FrozenEnable) Set Whether the frozen phase is enabled
 * @method string getFrozenMinAge() Obtain Time of transfer to the frozen stage
 * @method void setFrozenMinAge(string $FrozenMinAge) Set Time of transfer to the frozen stage
 * @method string getColdAction() Obtain /
 * @method void setColdAction(string $ColdAction) Set /
 */
class IndexPolicyField extends AbstractModel
{
    /**
     * @var string Whether the warm phase is enabled
     */
    public $WarmEnable;

    /**
     * @var string Transfer time to the warm phase
     */
    public $WarmMinAge;

    /**
     * @var string Whether the cold phase is enabled
     */
    public $ColdEnable;

    /**
     * @var string Transfer time to the cold phase
     */
    public $ColdMinAge;

    /**
     * @var string Whether the frozen phase is enabled
     */
    public $FrozenEnable;

    /**
     * @var string Time of transfer to the frozen stage
     */
    public $FrozenMinAge;

    /**
     * @var string /
     */
    public $ColdAction;

    /**
     * @param string $WarmEnable Whether the warm phase is enabled
     * @param string $WarmMinAge Transfer time to the warm phase
     * @param string $ColdEnable Whether the cold phase is enabled
     * @param string $ColdMinAge Transfer time to the cold phase
     * @param string $FrozenEnable Whether the frozen phase is enabled
     * @param string $FrozenMinAge Time of transfer to the frozen stage
     * @param string $ColdAction /
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
        if (array_key_exists("WarmEnable",$param) and $param["WarmEnable"] !== null) {
            $this->WarmEnable = $param["WarmEnable"];
        }

        if (array_key_exists("WarmMinAge",$param) and $param["WarmMinAge"] !== null) {
            $this->WarmMinAge = $param["WarmMinAge"];
        }

        if (array_key_exists("ColdEnable",$param) and $param["ColdEnable"] !== null) {
            $this->ColdEnable = $param["ColdEnable"];
        }

        if (array_key_exists("ColdMinAge",$param) and $param["ColdMinAge"] !== null) {
            $this->ColdMinAge = $param["ColdMinAge"];
        }

        if (array_key_exists("FrozenEnable",$param) and $param["FrozenEnable"] !== null) {
            $this->FrozenEnable = $param["FrozenEnable"];
        }

        if (array_key_exists("FrozenMinAge",$param) and $param["FrozenMinAge"] !== null) {
            $this->FrozenMinAge = $param["FrozenMinAge"];
        }

        if (array_key_exists("ColdAction",$param) and $param["ColdAction"] !== null) {
            $this->ColdAction = $param["ColdAction"];
        }
    }
}
