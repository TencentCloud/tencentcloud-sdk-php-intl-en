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
 * DescribeRocketMQTopics request structure.
 *
 * @method integer getOffset() Obtain Offset for query.
 * @method void setOffset(integer $Offset) Set Offset for query.
 * @method integer getLimit() Obtain Query limit.
 * @method void setLimit(integer $Limit) Set Query limit.
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getNamespaceId() Obtain Namespace.
 * @method void setNamespaceId(string $NamespaceId) Set Namespace.
 * @method array getFilterType() Obtain Filter by topic type. Valid values: `Normal`, `GlobalOrder`, `PartitionedOrder`, `Transaction`.
 * @method void setFilterType(array $FilterType) Set Filter by topic type. Valid values: `Normal`, `GlobalOrder`, `PartitionedOrder`, `Transaction`.
 * @method string getFilterName() Obtain Search by topic name. Fuzzy query is supported.
 * @method void setFilterName(string $FilterName) Set Search by topic name. Fuzzy query is supported.
 */
class DescribeRocketMQTopicsRequest extends AbstractModel
{
    /**
     * @var integer Offset for query.
     */
    public $Offset;

    /**
     * @var integer Query limit.
     */
    public $Limit;

    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Namespace.
     */
    public $NamespaceId;

    /**
     * @var array Filter by topic type. Valid values: `Normal`, `GlobalOrder`, `PartitionedOrder`, `Transaction`.
     */
    public $FilterType;

    /**
     * @var string Search by topic name. Fuzzy query is supported.
     */
    public $FilterName;

    /**
     * @param integer $Offset Offset for query.
     * @param integer $Limit Query limit.
     * @param string $ClusterId Cluster ID.
     * @param string $NamespaceId Namespace.
     * @param array $FilterType Filter by topic type. Valid values: `Normal`, `GlobalOrder`, `PartitionedOrder`, `Transaction`.
     * @param string $FilterName Search by topic name. Fuzzy query is supported.
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("FilterName",$param) and $param["FilterName"] !== null) {
            $this->FilterName = $param["FilterName"];
        }
    }
}
