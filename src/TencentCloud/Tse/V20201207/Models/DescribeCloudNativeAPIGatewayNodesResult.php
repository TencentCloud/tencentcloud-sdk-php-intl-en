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
 * Obtain gateway node info
 *
 * @method integer getTotalCount() Obtain Retrieve the cloud native API gateway node list response result.
 * @method void setTotalCount(integer $TotalCount) Set Retrieve the cloud native API gateway node list response result.
 * @method array getNodeList() Obtain Cloud native API gateway node list.
 * @method void setNodeList(array $NodeList) Set Cloud native API gateway node list.
 */
class DescribeCloudNativeAPIGatewayNodesResult extends AbstractModel
{
    /**
     * @var integer Retrieve the cloud native API gateway node list response result.
     */
    public $TotalCount;

    /**
     * @var array Cloud native API gateway node list.
     */
    public $NodeList;

    /**
     * @param integer $TotalCount Retrieve the cloud native API gateway node list response result.
     * @param array $NodeList Cloud native API gateway node list.
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

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = [];
            foreach ($param["NodeList"] as $key => $value){
                $obj = new CloudNativeAPIGatewayNode();
                $obj->deserialize($value);
                array_push($this->NodeList, $obj);
            }
        }
    }
}
