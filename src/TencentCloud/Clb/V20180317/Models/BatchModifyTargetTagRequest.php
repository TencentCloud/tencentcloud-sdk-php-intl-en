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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchModifyTargetTag request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID.
 * @method array getModifyList() Obtain List of tags to be modified in batches.
 * @method void setModifyList(array $ModifyList) Set List of tags to be modified in batches.
 */
class BatchModifyTargetTagRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID.
     */
    public $LoadBalancerId;

    /**
     * @var array List of tags to be modified in batches.
     */
    public $ModifyList;

    /**
     * @param string $LoadBalancerId CLB instance ID.
     * @param array $ModifyList List of tags to be modified in batches.
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
                $obj = new RsTagRule();
                $obj->deserialize($value);
                array_push($this->ModifyList, $obj);
            }
        }
    }
}
