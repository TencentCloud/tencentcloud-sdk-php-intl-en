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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Price details by node, used for creating the cluster price list
 *
 * @method string getNodeType() Obtain The node type. Valid values: `master`, `core`, `task`, `common`, `router`, `mysql`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeType(string $NodeType) Set The node type. Valid values: `master`, `core`, `task`, `common`, `router`, `mysql`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPartDetailPrice() Obtain Price details by node part
 * @method void setPartDetailPrice(array $PartDetailPrice) Set Price details by node part
 */
class NodeDetailPriceResult extends AbstractModel
{
    /**
     * @var string The node type. Valid values: `master`, `core`, `task`, `common`, `router`, `mysql`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeType;

    /**
     * @var array Price details by node part
     */
    public $PartDetailPrice;

    /**
     * @param string $NodeType The node type. Valid values: `master`, `core`, `task`, `common`, `router`, `mysql`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PartDetailPrice Price details by node part
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PartDetailPrice",$param) and $param["PartDetailPrice"] !== null) {
            $this->PartDetailPrice = [];
            foreach ($param["PartDetailPrice"] as $key => $value){
                $obj = new PartDetailPriceItem();
                $obj->deserialize($value);
                array_push($this->PartDetailPrice, $obj);
            }
        }
    }
}
