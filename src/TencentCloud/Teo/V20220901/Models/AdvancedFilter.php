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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key-value pair filters for conditional filtering queries and fuzzy queries, such as filtering ID, name, and status.
If more than one filter exists, the logical relationship between these filters is `AND`.
If one filter has multiple values, the logical relationship between these values is `OR`.
 *
 * @method string getName() Obtain Field to be filtered.
 * @method void setName(string $Name) Set Field to be filtered.
 * @method array getValues() Obtain Value of the filtered field.
 * @method void setValues(array $Values) Set Value of the filtered field.
 * @method boolean getFuzzy() Obtain Whether to enable fuzzy query.
 * @method void setFuzzy(boolean $Fuzzy) Set Whether to enable fuzzy query.
 */
class AdvancedFilter extends AbstractModel
{
    /**
     * @var string Field to be filtered.
     */
    public $Name;

    /**
     * @var array Value of the filtered field.
     */
    public $Values;

    /**
     * @var boolean Whether to enable fuzzy query.
     */
    public $Fuzzy;

    /**
     * @param string $Name Field to be filtered.
     * @param array $Values Value of the filtered field.
     * @param boolean $Fuzzy Whether to enable fuzzy query.
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
