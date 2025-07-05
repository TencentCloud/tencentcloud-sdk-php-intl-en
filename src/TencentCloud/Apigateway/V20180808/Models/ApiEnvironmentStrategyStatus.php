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
 * 
 *
 * @method integer getTotalCount() Obtain 
 * @method void setTotalCount(integer $TotalCount) Set 
 * @method array getApiEnvironmentStrategySet() Obtain 
 * @method void setApiEnvironmentStrategySet(array $ApiEnvironmentStrategySet) Set 
 */
class ApiEnvironmentStrategyStatus extends AbstractModel
{
    /**
     * @var integer 
     */
    public $TotalCount;

    /**
     * @var array 
     */
    public $ApiEnvironmentStrategySet;

    /**
     * @param integer $TotalCount 
     * @param array $ApiEnvironmentStrategySet 
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
