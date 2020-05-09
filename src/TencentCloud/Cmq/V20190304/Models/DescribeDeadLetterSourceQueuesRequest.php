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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeadLetterSourceQueues request structure.
 *
 * @method string getDeadLetterQueueName() Obtain Dead letter queue name
 * @method void setDeadLetterQueueName(string $DeadLetterQueueName) Set Dead letter queue name
 * @method integer getLimit() Obtain Starting position of topic list to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default.
 * @method void setLimit(integer $Limit) Set Starting position of topic list to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default.
 * @method integer getOffset() Obtain Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
 * @method void setOffset(integer $Offset) Set Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
 * @method array getFilters() Obtain Filters source queue name of dead letter queue. Currently, only filtering by `SourceQueueName` is supported
 * @method void setFilters(array $Filters) Set Filters source queue name of dead letter queue. Currently, only filtering by `SourceQueueName` is supported
 */
class DescribeDeadLetterSourceQueuesRequest extends AbstractModel
{
    /**
     * @var string Dead letter queue name
     */
    public $DeadLetterQueueName;

    /**
     * @var integer Starting position of topic list to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default.
     */
    public $Limit;

    /**
     * @var integer Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
     */
    public $Offset;

    /**
     * @var array Filters source queue name of dead letter queue. Currently, only filtering by `SourceQueueName` is supported
     */
    public $Filters;

    /**
     * @param string $DeadLetterQueueName Dead letter queue name
     * @param integer $Limit Starting position of topic list to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default.
     * @param integer $Offset Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
     * @param array $Filters Filters source queue name of dead letter queue. Currently, only filtering by `SourceQueueName` is supported
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
        if (array_key_exists("DeadLetterQueueName",$param) and $param["DeadLetterQueueName"] !== null) {
            $this->DeadLetterQueueName = $param["DeadLetterQueueName"];
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
