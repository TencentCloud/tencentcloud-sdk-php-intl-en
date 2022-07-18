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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQClusters request structure.
 *
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain The max number of returned results.
 * @method void setLimit(integer $Limit) Set The max number of returned results.
 * @method string getIdKeyword() Obtain Search by cluster ID.
 * @method void setIdKeyword(string $IdKeyword) Set Search by cluster ID.
 * @method string getNameKeyword() Obtain Search by cluster name.
 * @method void setNameKeyword(string $NameKeyword) Set Search by cluster name.
 * @method array getClusterIdList() Obtain Filter by cluster ID.
 * @method void setClusterIdList(array $ClusterIdList) Set Filter by cluster ID.
 * @method boolean getIsTagFilter() Obtain For filtering by tag, this parameter must be set to `true`.
 * @method void setIsTagFilter(boolean $IsTagFilter) Set For filtering by tag, this parameter must be set to `true`.
 * @method array getFilters() Obtain Filter. Currently, you can filter only by tag.
 * @method void setFilters(array $Filters) Set Filter. Currently, you can filter only by tag.
 */
class DescribeRocketMQClustersRequest extends AbstractModel
{
    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer The max number of returned results.
     */
    public $Limit;

    /**
     * @var string Search by cluster ID.
     */
    public $IdKeyword;

    /**
     * @var string Search by cluster name.
     */
    public $NameKeyword;

    /**
     * @var array Filter by cluster ID.
     */
    public $ClusterIdList;

    /**
     * @var boolean For filtering by tag, this parameter must be set to `true`.
     */
    public $IsTagFilter;

    /**
     * @var array Filter. Currently, you can filter only by tag.
     */
    public $Filters;

    /**
     * @param integer $Offset Offset.
     * @param integer $Limit The max number of returned results.
     * @param string $IdKeyword Search by cluster ID.
     * @param string $NameKeyword Search by cluster name.
     * @param array $ClusterIdList Filter by cluster ID.
     * @param boolean $IsTagFilter For filtering by tag, this parameter must be set to `true`.
     * @param array $Filters Filter. Currently, you can filter only by tag.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("IdKeyword",$param) and $param["IdKeyword"] !== null) {
            $this->IdKeyword = $param["IdKeyword"];
        }

        if (array_key_exists("NameKeyword",$param) and $param["NameKeyword"] !== null) {
            $this->NameKeyword = $param["NameKeyword"];
        }

        if (array_key_exists("ClusterIdList",$param) and $param["ClusterIdList"] !== null) {
            $this->ClusterIdList = $param["ClusterIdList"];
        }

        if (array_key_exists("IsTagFilter",$param) and $param["IsTagFilter"] !== null) {
            $this->IsTagFilter = $param["IsTagFilter"];
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
