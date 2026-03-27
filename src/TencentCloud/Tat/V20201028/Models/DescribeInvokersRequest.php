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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInvokers request structure.
 *
 * @method array getInvokerIds() Obtain Executor ID list.

The maximum per request is 100.

Parameters must not be specified simultaneously `InvokerIds` and `Filters`.

 * @method void setInvokerIds(array $InvokerIds) Set Executor ID list.

The maximum per request is 100.

Parameters must not be specified simultaneously `InvokerIds` and `Filters`.

 * @method array getFilters() Obtain Filter criteria:.

- invoker-id - String - required: no - (filter condition) filter by executor id.
-command-id - String - required: no - (filter condition) filters commands by id. you can obtain the id through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
- invoker-type - String - required: no - (filter condition) filter by the executor type. currently only support SCHEDULE.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `InvokerIds` and `Filters` parameters cannot be specified at the same time.
 * @method void setFilters(array $Filters) Set Filter criteria:.

- invoker-id - String - required: no - (filter condition) filter by executor id.
-command-id - String - required: no - (filter condition) filters commands by id. you can obtain the id through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
- invoker-type - String - required: no - (filter condition) filter by the executor type. currently only support SCHEDULE.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `InvokerIds` and `Filters` parameters cannot be specified at the same time.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 */
class DescribeInvokersRequest extends AbstractModel
{
    /**
     * @var array Executor ID list.

The maximum per request is 100.

Parameters must not be specified simultaneously `InvokerIds` and `Filters`.

     */
    public $InvokerIds;

    /**
     * @var array Filter criteria:.

- invoker-id - String - required: no - (filter condition) filter by executor id.
-command-id - String - required: no - (filter condition) filters commands by id. you can obtain the id through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
- invoker-type - String - required: no - (filter condition) filter by the executor type. currently only support SCHEDULE.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `InvokerIds` and `Filters` parameters cannot be specified at the same time.
     */
    public $Filters;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @param array $InvokerIds Executor ID list.

The maximum per request is 100.

Parameters must not be specified simultaneously `InvokerIds` and `Filters`.

     * @param array $Filters Filter criteria:.

- invoker-id - String - required: no - (filter condition) filter by executor id.
-command-id - String - required: no - (filter condition) filters commands by id. you can obtain the id through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
- invoker-type - String - required: no - (filter condition) filter by the executor type. currently only support SCHEDULE.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `InvokerIds` and `Filters` parameters cannot be specified at the same time.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
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
        if (array_key_exists("InvokerIds",$param) and $param["InvokerIds"] !== null) {
            $this->InvokerIds = $param["InvokerIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
