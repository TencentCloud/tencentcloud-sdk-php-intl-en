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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Routing list filter.
 *
 * @method string getName() Obtain Filters by name. currently supports security-group-id. filters by security group association.
 * @method void setName(string $Name) Set Filters by name. currently supports security-group-id. filters by security group association.
 * @method array getValues() Obtain Filter value. when the filter name is security-group-id, only supports transmission of one value.
 * @method void setValues(array $Values) Set Filter value. when the filter name is security-group-id, only supports transmission of one value.
 * @method string getRelation() Obtain Filter relationship. supports IN and NOT_IN. default is IN.
 * @method void setRelation(string $Relation) Set Filter relationship. supports IN and NOT_IN. default is IN.
 */
class RouteFilter extends AbstractModel
{
    /**
     * @var string Filters by name. currently supports security-group-id. filters by security group association.
     */
    public $Name;

    /**
     * @var array Filter value. when the filter name is security-group-id, only supports transmission of one value.
     */
    public $Values;

    /**
     * @var string Filter relationship. supports IN and NOT_IN. default is IN.
     */
    public $Relation;

    /**
     * @param string $Name Filters by name. currently supports security-group-id. filters by security group association.
     * @param array $Values Filter value. when the filter name is security-group-id, only supports transmission of one value.
     * @param string $Relation Filter relationship. supports IN and NOT_IN. default is IN.
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

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }
    }
}
