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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopicDetail request structure.
 *
 * @method string getInstanceId() Obtain The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
 * @method string getSearchWord() Obtain (Filter) filter by `topicName`. Fuzzy search is supported
 * @method void setSearchWord(string $SearchWord) Set (Filter) filter by `topicName`. Fuzzy search is supported
 * @method integer getOffset() Obtain Offset. If this parameter is left empty, 0 will be used by default
 * @method void setOffset(integer $Offset) Set Offset. If this parameter is left empty, 0 will be used by default
 * @method integer getLimit() Obtain Number of returned results. default: 20. value must be above 0.
 * @method void setLimit(integer $Limit) Set Number of returned results. default: 20. value must be above 0.
 * @method string getAclRuleName() Obtain Name of the preset ACL rule.
 * @method void setAclRuleName(string $AclRuleName) Set Name of the preset ACL rule.
 * @method string getOrderBy() Obtain Sorts based on specific attributes (currently supports PartitionNum/CreateTime). default value: CreateTime.
 * @method void setOrderBy(string $OrderBy) Set Sorts based on specific attributes (currently supports PartitionNum/CreateTime). default value: CreateTime.
 * @method integer getOrderType() Obtain 0 - sequential, 1 - reverse order. default value: 0.
 * @method void setOrderType(integer $OrderType) Set 0 - sequential, 1 - reverse order. default value: 0.
 * @method array getFilters() Obtain Currently supports ReplicaNum (number of replicas) filter criteria.
 * @method void setFilters(array $Filters) Set Currently supports ReplicaNum (number of replicas) filter criteria.
 */
class DescribeTopicDetailRequest extends AbstractModel
{
    /**
     * @var string The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
     */
    public $InstanceId;

    /**
     * @var string (Filter) filter by `topicName`. Fuzzy search is supported
     */
    public $SearchWord;

    /**
     * @var integer Offset. If this parameter is left empty, 0 will be used by default
     */
    public $Offset;

    /**
     * @var integer Number of returned results. default: 20. value must be above 0.
     */
    public $Limit;

    /**
     * @var string Name of the preset ACL rule.
     */
    public $AclRuleName;

    /**
     * @var string Sorts based on specific attributes (currently supports PartitionNum/CreateTime). default value: CreateTime.
     */
    public $OrderBy;

    /**
     * @var integer 0 - sequential, 1 - reverse order. default value: 0.
     */
    public $OrderType;

    /**
     * @var array Currently supports ReplicaNum (number of replicas) filter criteria.
     */
    public $Filters;

    /**
     * @param string $InstanceId The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
     * @param string $SearchWord (Filter) filter by `topicName`. Fuzzy search is supported
     * @param integer $Offset Offset. If this parameter is left empty, 0 will be used by default
     * @param integer $Limit Number of returned results. default: 20. value must be above 0.
     * @param string $AclRuleName Name of the preset ACL rule.
     * @param string $OrderBy Sorts based on specific attributes (currently supports PartitionNum/CreateTime). default value: CreateTime.
     * @param integer $OrderType 0 - sequential, 1 - reverse order. default value: 0.
     * @param array $Filters Currently supports ReplicaNum (number of replicas) filter criteria.
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

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AclRuleName",$param) and $param["AclRuleName"] !== null) {
            $this->AclRuleName = $param["AclRuleName"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
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
