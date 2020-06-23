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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of policies bound to environment
 *
 * @method integer getTotalCount() Obtain Number of throttling policies.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Number of throttling policies.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getEnvironmentList() Obtain Throttling policy list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironmentList(array $EnvironmentList) Set Throttling policy list.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ServiceEnvironmentStrategyStatus extends AbstractModel
{
    /**
     * @var integer Number of throttling policies.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array Throttling policy list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EnvironmentList;

    /**
     * @param integer $TotalCount Number of throttling policies.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $EnvironmentList Throttling policy list.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("EnvironmentList",$param) and $param["EnvironmentList"] !== null) {
            $this->EnvironmentList = [];
            foreach ($param["EnvironmentList"] as $key => $value){
                $obj = new ServiceEnvironmentStrategy();
                $obj->deserialize($value);
                array_push($this->EnvironmentList, $obj);
            }
        }
    }
}
