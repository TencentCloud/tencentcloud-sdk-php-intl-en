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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key-value pair filter for conditional filtering queries, such as filter ID, name, and status. If more than one filter exists, the logical relationship between these filters is `AND`. If multiple values exist in one filter, the logical relationship between these values is `OR`.
 *
 * @method string getName() Obtain Filter name
 * @method void setName(string $Name) Set Filter name
 * @method array getValues() Obtain One or more filter values
 * @method void setValues(array $Values) Set One or more filter values
 * @method boolean getExactMatch() Obtain Whether to use fuzzy query. Default value: `true`.
 * @method void setExactMatch(boolean $ExactMatch) Set Whether to use fuzzy query. Default value: `true`.
 */
class ComplianceFilters extends AbstractModel
{
    /**
     * @var string Filter name
     */
    public $Name;

    /**
     * @var array One or more filter values
     */
    public $Values;

    /**
     * @var boolean Whether to use fuzzy query. Default value: `true`.
     */
    public $ExactMatch;

    /**
     * @param string $Name Filter name
     * @param array $Values One or more filter values
     * @param boolean $ExactMatch Whether to use fuzzy query. Default value: `true`.
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

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
