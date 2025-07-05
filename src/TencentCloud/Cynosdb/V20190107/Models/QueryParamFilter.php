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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filters for query
 *
 * @method array getNames() Obtain Search field. Valid values: "InstanceId", "ProjectId", "InstanceName", "Vip"
 * @method void setNames(array $Names) Set Search field. Valid values: "InstanceId", "ProjectId", "InstanceName", "Vip"
 * @method array getValues() Obtain Search string
 * @method void setValues(array $Values) Set Search string
 * @method boolean getExactMatch() Obtain Whether to use exact match
 * @method void setExactMatch(boolean $ExactMatch) Set Whether to use exact match
 */
class QueryParamFilter extends AbstractModel
{
    /**
     * @var array Search field. Valid values: "InstanceId", "ProjectId", "InstanceName", "Vip"
     */
    public $Names;

    /**
     * @var array Search string
     */
    public $Values;

    /**
     * @var boolean Whether to use exact match
     */
    public $ExactMatch;

    /**
     * @param array $Names Search field. Valid values: "InstanceId", "ProjectId", "InstanceName", "Vip"
     * @param array $Values Search string
     * @param boolean $ExactMatch Whether to use exact match
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
        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
