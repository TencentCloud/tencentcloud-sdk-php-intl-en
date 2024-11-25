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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodePools request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getFilters() Obtain Query filter criteria:
·  NodePoolsName
    Filter by [Node Pool Name].
    Type: String
        Required: No



·  NodePoolsId
    Filter by [Node Pool id].
    Type: String
        Required: No



·  tags
    Filter by [Tag Key-value Pairs].
    Type: String
        Required: No



·  tag:tag-key
    Filter by [Tag Key-value Pairs].
    Type: String
        Required: No
 * @method void setFilters(array $Filters) Set Query filter criteria:
·  NodePoolsName
    Filter by [Node Pool Name].
    Type: String
        Required: No



·  NodePoolsId
    Filter by [Node Pool id].
    Type: String
        Required: No



·  tags
    Filter by [Tag Key-value Pairs].
    Type: String
        Required: No



·  tag:tag-key
    Filter by [Tag Key-value Pairs].
    Type: String
        Required: No
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of output entries. Default value: 20; maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of output entries. Default value: 20; maximum value: 100.
 */
class DescribeNodePoolsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Query filter criteria:
·  NodePoolsName
    Filter by [Node Pool Name].
    Type: String
        Required: No



·  NodePoolsId
    Filter by [Node Pool id].
    Type: String
        Required: No



·  tags
    Filter by [Tag Key-value Pairs].
    Type: String
        Required: No



·  tag:tag-key
    Filter by [Tag Key-value Pairs].
    Type: String
        Required: No
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of output entries. Default value: 20; maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $Filters Query filter criteria:
·  NodePoolsName
    Filter by [Node Pool Name].
    Type: String
        Required: No



·  NodePoolsId
    Filter by [Node Pool id].
    Type: String
        Required: No



·  tags
    Filter by [Tag Key-value Pairs].
    Type: String
        Required: No



·  tag:tag-key
    Filter by [Tag Key-value Pairs].
    Type: String
        Required: No
     * @param integer $Offset Offset. Default value: 0
     * @param integer $Limit Maximum number of output entries. Default value: 20; maximum value: 100.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
