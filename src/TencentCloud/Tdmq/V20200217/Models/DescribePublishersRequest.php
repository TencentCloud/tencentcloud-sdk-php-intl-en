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
 * DescribePublishers request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getNamespace() Obtain Namespace name.
 * @method void setNamespace(string $Namespace) Set Namespace name.
 * @method string getTopic() Obtain Topic name.
 * @method void setTopic(string $Topic) Set Topic name.
 * @method array getFilters() Obtain Parameter filter. The `ProducerName` and `Address` fields are supported.
 * @method void setFilters(array $Filters) Set Parameter filter. The `ProducerName` and `Address` fields are supported.
 * @method integer getOffset() Obtain Offset for query. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset for query. Default value: `0`.
 * @method integer getLimit() Obtain The number of query results displayed per page. Default value: `20`.
 * @method void setLimit(integer $Limit) Set The number of query results displayed per page. Default value: `20`.
 * @method Sort getSort() Obtain Sort by field.
 * @method void setSort(Sort $Sort) Set Sort by field.
 */
class DescribePublishersRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Namespace name.
     */
    public $Namespace;

    /**
     * @var string Topic name.
     */
    public $Topic;

    /**
     * @var array Parameter filter. The `ProducerName` and `Address` fields are supported.
     */
    public $Filters;

    /**
     * @var integer Offset for query. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer The number of query results displayed per page. Default value: `20`.
     */
    public $Limit;

    /**
     * @var Sort Sort by field.
     */
    public $Sort;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $Namespace Namespace name.
     * @param string $Topic Topic name.
     * @param array $Filters Parameter filter. The `ProducerName` and `Address` fields are supported.
     * @param integer $Offset Offset for query. Default value: `0`.
     * @param integer $Limit The number of query results displayed per page. Default value: `20`.
     * @param Sort $Sort Sort by field.
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
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

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new Sort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
