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
 * Retrieve the response result of the Cloud Native API gateway instance list.
 *
 * @method integer getTotalCount() Obtain Total quantity.
 * @method void setTotalCount(integer $TotalCount) Set Total quantity.
 * @method array getGatewayList() Obtain Cloud Native API gateway instance list.
 * @method void setGatewayList(array $GatewayList) Set Cloud Native API gateway instance list.
 */
class ListCloudNativeAPIGatewayResult extends AbstractModel
{
    /**
     * @var integer Total quantity.
     */
    public $TotalCount;

    /**
     * @var array Cloud Native API gateway instance list.
     */
    public $GatewayList;

    /**
     * @param integer $TotalCount Total quantity.
     * @param array $GatewayList Cloud Native API gateway instance list.
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

        if (array_key_exists("GatewayList",$param) and $param["GatewayList"] !== null) {
            $this->GatewayList = [];
            foreach ($param["GatewayList"] as $key => $value){
                $obj = new DescribeCloudNativeAPIGatewayResult();
                $obj->deserialize($value);
                array_push($this->GatewayList, $obj);
            }
        }
    }
}
