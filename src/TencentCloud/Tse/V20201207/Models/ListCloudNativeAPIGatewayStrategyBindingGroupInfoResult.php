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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Retrieve the response result of the gateway grouping list bound to the instance policy for a cloud-native API gateway.
 *
 * @method integer getTotalCount() Obtain Quantity.
 * @method void setTotalCount(integer $TotalCount) Set Quantity.
 * @method array getGroupInfos() Obtain Cloud native API gateway instance policy binding gateway grouping list
 * @method void setGroupInfos(array $GroupInfos) Set Cloud native API gateway instance policy binding gateway grouping list
 */
class ListCloudNativeAPIGatewayStrategyBindingGroupInfoResult extends AbstractModel
{
    /**
     * @var integer Quantity.
     */
    public $TotalCount;

    /**
     * @var array Cloud native API gateway instance policy binding gateway grouping list
     */
    public $GroupInfos;

    /**
     * @param integer $TotalCount Quantity.
     * @param array $GroupInfos Cloud native API gateway instance policy binding gateway grouping list
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

        if (array_key_exists("GroupInfos",$param) and $param["GroupInfos"] !== null) {
            $this->GroupInfos = [];
            foreach ($param["GroupInfos"] as $key => $value){
                $obj = new CloudNativeAPIGatewayStrategyBindingGroupInfo();
                $obj->deserialize($value);
                array_push($this->GroupInfos, $obj);
            }
        }
    }
}
