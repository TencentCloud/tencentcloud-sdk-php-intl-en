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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API Binding Policy List
 *
 * @method integer getTotalCount() Obtain The quantity of rate limiting policies bound to APIs.
 * @method void setTotalCount(integer $TotalCount) Set The quantity of rate limiting policies bound to APIs.
 * @method array getApiEnvironmentStrategySet() Obtain API Binding Rate Limiting Policy List.
 * @method void setApiEnvironmentStrategySet(array $ApiEnvironmentStrategySet) Set API Binding Rate Limiting Policy List.
 */
class ApiEnvironmentStrategyStatus extends AbstractModel
{
    /**
     * @var integer The quantity of rate limiting policies bound to APIs.
     */
    public $TotalCount;

    /**
     * @var array API Binding Rate Limiting Policy List.
     */
    public $ApiEnvironmentStrategySet;

    /**
     * @param integer $TotalCount The quantity of rate limiting policies bound to APIs.
     * @param array $ApiEnvironmentStrategySet API Binding Rate Limiting Policy List.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ApiEnvironmentStrategySet",$param) and $param["ApiEnvironmentStrategySet"] !== null) {
            $this->ApiEnvironmentStrategySet = [];
            foreach ($param["ApiEnvironmentStrategySet"] as $key => $value){
                $obj = new ApiEnvironmentStrategy();
                $obj->deserialize($value);
                array_push($this->ApiEnvironmentStrategySet, $obj);
            }
        }
    }
}
