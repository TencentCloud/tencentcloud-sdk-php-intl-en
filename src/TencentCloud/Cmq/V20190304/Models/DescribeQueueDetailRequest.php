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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQueueDetail request structure.
 *
 * @method integer getOffset() Obtain Starting position of queue list to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
 * @method void setOffset(integer $Offset) Set Starting position of queue list to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
 * @method integer getLimit() Obtain Number of queues to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
 * @method void setLimit(integer $Limit) Set Number of queues to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
 * @method array getFilters() Obtain Filter parameter. Currently, filtering by `QueueName` is supported, and only one keyword is allowed
 * @method void setFilters(array $Filters) Set Filter parameter. Currently, filtering by `QueueName` is supported, and only one keyword is allowed
 * @method string getTagKey() Obtain Tag search
 * @method void setTagKey(string $TagKey) Set Tag search
 * @method string getQueueName() Obtain Exact match by `QueueName`
 * @method void setQueueName(string $QueueName) Set Exact match by `QueueName`
 */
class DescribeQueueDetailRequest extends AbstractModel
{
    /**
     * @var integer Starting position of queue list to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
     */
    public $Offset;

    /**
     * @var integer Number of queues to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
     */
    public $Limit;

    /**
     * @var array Filter parameter. Currently, filtering by `QueueName` is supported, and only one keyword is allowed
     */
    public $Filters;

    /**
     * @var string Tag search
     */
    public $TagKey;

    /**
     * @var string Exact match by `QueueName`
     */
    public $QueueName;

    /**
     * @param integer $Offset Starting position of queue list to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
     * @param integer $Limit Number of queues to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
     * @param array $Filters Filter parameter. Currently, filtering by `QueueName` is supported, and only one keyword is allowed
     * @param string $TagKey Tag search
     * @param string $QueueName Exact match by `QueueName`
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }
    }
}
