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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchModifyTargetWeight request structure.
 *
 * @method string getLoadBalancerId() Obtain <p>CLB instance ID.</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) Set <p>CLB instance ID.</p>
 * @method array getModifyList() Obtain <p>List of weights to be modified in batch. The ModifyList array can contain no more than 100 elements, ModifyList[i].Targets can have no more than 50, and the total number of Targets must not exceed 500.</p>
 * @method void setModifyList(array $ModifyList) Set <p>List of weights to be modified in batch. The ModifyList array can contain no more than 100 elements, ModifyList[i].Targets can have no more than 50, and the total number of Targets must not exceed 500.</p>
 */
class BatchModifyTargetWeightRequest extends AbstractModel
{
    /**
     * @var string <p>CLB instance ID.</p>
     */
    public $LoadBalancerId;

    /**
     * @var array <p>List of weights to be modified in batch. The ModifyList array can contain no more than 100 elements, ModifyList[i].Targets can have no more than 50, and the total number of Targets must not exceed 500.</p>
     */
    public $ModifyList;

    /**
     * @param string $LoadBalancerId <p>CLB instance ID.</p>
     * @param array $ModifyList <p>List of weights to be modified in batch. The ModifyList array can contain no more than 100 elements, ModifyList[i].Targets can have no more than 50, and the total number of Targets must not exceed 500.</p>
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ModifyList",$param) and $param["ModifyList"] !== null) {
            $this->ModifyList = [];
            foreach ($param["ModifyList"] as $key => $value){
                $obj = new RsWeightRule();
                $obj->deserialize($value);
                array_push($this->ModifyList, $obj);
            }
        }
    }
}
