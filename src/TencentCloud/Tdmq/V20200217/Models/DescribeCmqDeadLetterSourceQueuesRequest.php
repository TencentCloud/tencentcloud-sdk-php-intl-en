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
 * DescribeCmqDeadLetterSourceQueues request structure.
 *
 * @method string getDeadLetterQueueName() Obtain Dead letter queue name
 * @method void setDeadLetterQueueName(string $DeadLetterQueueName) Set Dead letter queue name
 * @method integer getLimit() Obtain Starting position of the list of topics to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default.
 * @method void setLimit(integer $Limit) Set Starting position of the list of topics to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default.
 * @method integer getOffset() Obtain Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
 * @method void setOffset(integer $Offset) Set Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
 * @method string getSourceQueueName() Obtain Filter by `SourceQueueName`
 * @method void setSourceQueueName(string $SourceQueueName) Set Filter by `SourceQueueName`
 */
class DescribeCmqDeadLetterSourceQueuesRequest extends AbstractModel
{
    /**
     * @var string Dead letter queue name
     */
    public $DeadLetterQueueName;

    /**
     * @var integer Starting position of the list of topics to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default.
     */
    public $Limit;

    /**
     * @var integer Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
     */
    public $Offset;

    /**
     * @var string Filter by `SourceQueueName`
     */
    public $SourceQueueName;

    /**
     * @param string $DeadLetterQueueName Dead letter queue name
     * @param integer $Limit Starting position of the list of topics to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default.
     * @param integer $Offset Number of topics to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
     * @param string $SourceQueueName Filter by `SourceQueueName`
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

        if (array_key_exists("SourceQueueName",$param) and $param["SourceQueueName"] !== null) {
            $this->SourceQueueName = $param["SourceQueueName"];
        }
    }
}
