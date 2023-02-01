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
 * DescribeRocketMQGroups request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getNamespaceId() Obtain Namespace.
 * @method void setNamespaceId(string $NamespaceId) Set Namespace.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain The max number of returned results.
 * @method void setLimit(integer $Limit) Set The max number of returned results.
 * @method string getFilterTopic() Obtain Topic name, which can be used to query all subscription groups under the topic
 * @method void setFilterTopic(string $FilterTopic) Set Topic name, which can be used to query all subscription groups under the topic
 * @method string getFilterGroup() Obtain Consumer group query by consumer group name. Fuzzy query is supported
 * @method void setFilterGroup(string $FilterGroup) Set Consumer group query by consumer group name. Fuzzy query is supported
 * @method string getSortedBy() Obtain Sort by specified field. Valid values: `tps`, `accumulative`.
 * @method void setSortedBy(string $SortedBy) Set Sort by specified field. Valid values: `tps`, `accumulative`.
 * @method string getSortOrder() Obtain Sort in ascending or descending order. Valid values: `asc`, `desc`.
 * @method void setSortOrder(string $SortOrder) Set Sort in ascending or descending order. Valid values: `asc`, `desc`.
 * @method string getFilterOneGroup() Obtain Subscription group name. After it is specified, the information of only this subscription group will be returned.
 * @method void setFilterOneGroup(string $FilterOneGroup) Set Subscription group name. After it is specified, the information of only this subscription group will be returned.
 * @method array getTypes() Obtain Group type
 * @method void setTypes(array $Types) Set Group type
 */
class DescribeRocketMQGroupsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Namespace.
     */
    public $NamespaceId;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer The max number of returned results.
     */
    public $Limit;

    /**
     * @var string Topic name, which can be used to query all subscription groups under the topic
     */
    public $FilterTopic;

    /**
     * @var string Consumer group query by consumer group name. Fuzzy query is supported
     */
    public $FilterGroup;

    /**
     * @var string Sort by specified field. Valid values: `tps`, `accumulative`.
     */
    public $SortedBy;

    /**
     * @var string Sort in ascending or descending order. Valid values: `asc`, `desc`.
     */
    public $SortOrder;

    /**
     * @var string Subscription group name. After it is specified, the information of only this subscription group will be returned.
     */
    public $FilterOneGroup;

    /**
     * @var array Group type
     */
    public $Types;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $NamespaceId Namespace.
     * @param integer $Offset Offset.
     * @param integer $Limit The max number of returned results.
     * @param string $FilterTopic Topic name, which can be used to query all subscription groups under the topic
     * @param string $FilterGroup Consumer group query by consumer group name. Fuzzy query is supported
     * @param string $SortedBy Sort by specified field. Valid values: `tps`, `accumulative`.
     * @param string $SortOrder Sort in ascending or descending order. Valid values: `asc`, `desc`.
     * @param string $FilterOneGroup Subscription group name. After it is specified, the information of only this subscription group will be returned.
     * @param array $Types Group type
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

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FilterTopic",$param) and $param["FilterTopic"] !== null) {
            $this->FilterTopic = $param["FilterTopic"];
        }

        if (array_key_exists("FilterGroup",$param) and $param["FilterGroup"] !== null) {
            $this->FilterGroup = $param["FilterGroup"];
        }

        if (array_key_exists("SortedBy",$param) and $param["SortedBy"] !== null) {
            $this->SortedBy = $param["SortedBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("FilterOneGroup",$param) and $param["FilterOneGroup"] !== null) {
            $this->FilterOneGroup = $param["FilterOneGroup"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }
    }
}
