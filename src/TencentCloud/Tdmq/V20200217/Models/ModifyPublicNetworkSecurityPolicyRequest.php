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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPublicNetworkSecurityPolicy request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method array getPolicyList() Obtain Policy List
 * @method void setPolicyList(array $PolicyList) Set Policy List
 */
class ModifyPublicNetworkSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var array Policy List
     */
    public $PolicyList;

    /**
     * @param string $InstanceId Cluster ID.
     * @param array $PolicyList Policy List
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PolicyList",$param) and $param["PolicyList"] !== null) {
            $this->PolicyList = [];
            foreach ($param["PolicyList"] as $key => $value){
                $obj = new SecurityPolicy();
                $obj->deserialize($value);
                array_push($this->PolicyList, $obj);
            }
        }
    }
}
