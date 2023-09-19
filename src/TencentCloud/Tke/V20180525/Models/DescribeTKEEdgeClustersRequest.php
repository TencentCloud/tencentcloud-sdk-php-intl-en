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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTKEEdgeClusters request structure.
 *
 * @method array getClusterIds() Obtain Cluster ID list (when it is empty,
all clusters under the account are obtained)
 * @method void setClusterIds(array $ClusterIds) Set Cluster ID list (when it is empty,
all clusters under the account are obtained)
 * @method integer getOffset() Obtain Offset. Default value: `0`
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`
 * @method integer getLimit() Obtain Maximum number of output entries. Default value: `20`
 * @method void setLimit(integer $Limit) Set Maximum number of output entries. Default value: `20`
 * @method array getFilters() Obtain Filter conditions. Values: `ClusterName` and tags in the format of ["key1:value1","key2:value2"].
 * @method void setFilters(array $Filters) Set Filter conditions. Values: `ClusterName` and tags in the format of ["key1:value1","key2:value2"].
 */
class DescribeTKEEdgeClustersRequest extends AbstractModel
{
    /**
     * @var array Cluster ID list (when it is empty,
all clusters under the account are obtained)
     */
    public $ClusterIds;

    /**
     * @var integer Offset. Default value: `0`
     */
    public $Offset;

    /**
     * @var integer Maximum number of output entries. Default value: `20`
     */
    public $Limit;

    /**
     * @var array Filter conditions. Values: `ClusterName` and tags in the format of ["key1:value1","key2:value2"].
     */
    public $Filters;

    /**
     * @param array $ClusterIds Cluster ID list (when it is empty,
all clusters under the account are obtained)
     * @param integer $Offset Offset. Default value: `0`
     * @param integer $Limit Maximum number of output entries. Default value: `20`
     * @param array $Filters Filter conditions. Values: `ClusterName` and tags in the format of ["key1:value1","key2:value2"].
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
