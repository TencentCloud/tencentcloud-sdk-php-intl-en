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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQProducers request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNamespaceId() Obtain Namespace
 * @method void setNamespaceId(string $NamespaceId) Set Namespace
 * @method string getTopic() Obtain Topic name
 * @method void setTopic(string $Topic) Set Topic name
 * @method integer getOffset() Obtain Pagination Offset
 * @method void setOffset(integer $Offset) Set Pagination Offset
 * @method integer getLimit() Obtain Pagination Limit
 * @method void setLimit(integer $Limit) Set Pagination Limit
 * @method array getFilters() Obtain Query filter criteria list. supports the following filter parameters:.

-ClientId: specifies the producer client ID.
-ClientIp: specifies the producer client IP.
 * @method void setFilters(array $Filters) Set Query filter criteria list. supports the following filter parameters:.

-ClientId: specifies the producer client ID.
-ClientIp: specifies the producer client IP.
 */
class DescribeRocketMQProducersRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace
     */
    public $NamespaceId;

    /**
     * @var string Topic name
     */
    public $Topic;

    /**
     * @var integer Pagination Offset
     */
    public $Offset;

    /**
     * @var integer Pagination Limit
     */
    public $Limit;

    /**
     * @var array Query filter criteria list. supports the following filter parameters:.

-ClientId: specifies the producer client ID.
-ClientIp: specifies the producer client IP.
     */
    public $Filters;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NamespaceId Namespace
     * @param string $Topic Topic name
     * @param integer $Offset Pagination Offset
     * @param integer $Limit Pagination Limit
     * @param array $Filters Query filter criteria list. supports the following filter parameters:.

-ClientId: specifies the producer client ID.
-ClientIp: specifies the producer client IP.
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
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
