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
 * DescribeEdgeClusterInstances request structure.
 *
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method integer getLimit() Obtain Max number of returned entries
 * @method void setLimit(integer $Limit) Set Max number of returned entries
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method array getFilters() Obtain Filter condition. Only `NodeName` is supported.
 * @method void setFilters(array $Filters) Set Filter condition. Only `NodeName` is supported.
 */
class DescribeEdgeClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var integer Max number of returned entries
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var array Filter condition. Only `NodeName` is supported.
     */
    public $Filters;

    /**
     * @param string $ClusterID Cluster ID
     * @param integer $Limit Max number of returned entries
     * @param integer $Offset Offset
     * @param array $Filters Filter condition. Only `NodeName` is supported.
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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
