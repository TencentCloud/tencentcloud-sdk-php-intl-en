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
 * DescribeAutomationAgentStatus request structure.
 *
 * @method array getInstanceIds() Obtain List of instance ids to be queried.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The maximum per request is 100.

Parameters must not be specified simultaneously `InstanceIds` and `Filters`.
 * @method void setInstanceIds(array $InstanceIds) Set List of instance ids to be queried.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The maximum per request is 100.

Parameters must not be specified simultaneously `InstanceIds` and `Filters`.
 * @method array getFilters() Obtain -agent-status - String - required: no - (filter condition) filters by agent status. valid values: Online, Offline. 
-environment - String - required: no - (filter condition) query by agent runtime environment. valid values: Linux, Windows.
-instance-id - String - required: no - (filter condition) filter by instance id. you can get the instance id through the query instance API of the corresponding cloud services. currently supports instance types: CVM, Lighthouse, and managed instances.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `InstanceIds` and `Filters` parameters cannot be specified at the same time.
 * @method void setFilters(array $Filters) Set -agent-status - String - required: no - (filter condition) filters by agent status. valid values: Online, Offline. 
-environment - String - required: no - (filter condition) query by agent runtime environment. valid values: Linux, Windows.
-instance-id - String - required: no - (filter condition) filter by instance id. you can get the instance id through the query instance API of the corresponding cloud services. currently supports instance types: CVM, Lighthouse, and managed instances.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `InstanceIds` and `Filters` parameters cannot be specified at the same time.
 * @method integer getLimit() Obtain Number of returned results. It defaults to `20`. The maximum is 100. For more information on `Limit`, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. It defaults to `20`. The maximum is 100. For more information on `Limit`, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getOffset() Obtain Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 */
class DescribeAutomationAgentStatusRequest extends AbstractModel
{
    /**
     * @var array List of instance ids to be queried.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The maximum per request is 100.

Parameters must not be specified simultaneously `InstanceIds` and `Filters`.
     */
    public $InstanceIds;

    /**
     * @var array -agent-status - String - required: no - (filter condition) filters by agent status. valid values: Online, Offline. 
-environment - String - required: no - (filter condition) query by agent runtime environment. valid values: Linux, Windows.
-instance-id - String - required: no - (filter condition) filter by instance id. you can get the instance id through the query instance API of the corresponding cloud services. currently supports instance types: CVM, Lighthouse, and managed instances.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `InstanceIds` and `Filters` parameters cannot be specified at the same time.
     */
    public $Filters;

    /**
     * @var integer Number of returned results. It defaults to `20`. The maximum is 100. For more information on `Limit`, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var integer Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @param array $InstanceIds List of instance ids to be queried.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The maximum per request is 100.

Parameters must not be specified simultaneously `InstanceIds` and `Filters`.
     * @param array $Filters -agent-status - String - required: no - (filter condition) filters by agent status. valid values: Online, Offline. 
-environment - String - required: no - (filter condition) query by agent runtime environment. valid values: Linux, Windows.
-instance-id - String - required: no - (filter condition) filter by instance id. you can get the instance id through the query instance API of the corresponding cloud services. currently supports instance types: CVM, Lighthouse, and managed instances.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `InstanceIds` and `Filters` parameters cannot be specified at the same time.
     * @param integer $Limit Number of returned results. It defaults to `20`. The maximum is 100. For more information on `Limit`, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Offset Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
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
