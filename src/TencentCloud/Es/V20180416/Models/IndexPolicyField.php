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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Index lifecycle policy field
 *
 * @method string getWarmEnable() Obtain Whether to enable the warm phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setWarmEnable(string $WarmEnable) Set Whether to enable the warm phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getWarmMinAge() Obtain Min age before data transitions to the warm phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setWarmMinAge(string $WarmMinAge) Set Min age before data transitions to the warm phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getColdEnable() Obtain Whether to enable the cold phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setColdEnable(string $ColdEnable) Set Whether to enable the cold phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getColdMinAge() Obtain Min age before data transitions to the cold phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setColdMinAge(string $ColdMinAge) Set Min age before data transitions to the cold phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getFrozenEnable() Obtain Whether to enable the frozen phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFrozenEnable(string $FrozenEnable) Set Whether to enable the frozen phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getFrozenMinAge() Obtain Min age before data transitions to the frozen phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFrozenMinAge(string $FrozenMinAge) Set Min age before data transitions to the frozen phase
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getColdAction() Obtain /
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColdAction(string $ColdAction) Set /
Note: This field may return null, indicating that no valid value can be obtained.
 */
class IndexPolicyField extends AbstractModel
{
    /**
     * @var string Whether to enable the warm phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $WarmEnable;

    /**
     * @var string Min age before data transitions to the warm phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $WarmMinAge;

    /**
     * @var string Whether to enable the cold phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ColdEnable;

    /**
     * @var string Min age before data transitions to the cold phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ColdMinAge;

    /**
     * @var string Whether to enable the frozen phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FrozenEnable;

    /**
     * @var string Min age before data transitions to the frozen phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FrozenMinAge;

    /**
     * @var string /
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColdAction;

    /**
     * @param string $WarmEnable Whether to enable the warm phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $WarmMinAge Min age before data transitions to the warm phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ColdEnable Whether to enable the cold phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ColdMinAge Min age before data transitions to the cold phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $FrozenEnable Whether to enable the frozen phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $FrozenMinAge Min age before data transitions to the frozen phase
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ColdAction /
Note: This field may return null, indicating that no valid value can be obtained.
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
