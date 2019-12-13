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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getScheduledActionIds() 获取Queries by one or more scheduled task IDs in the format of asst-am691zxo. The maximum number of instances per request is 100. This parameter does not support specifying both ScheduledActionIds` and `Filters` at the same time.
 * @method void setScheduledActionIds(array $ScheduledActionIds) 设置Queries by one or more scheduled task IDs in the format of asst-am691zxo. The maximum number of instances per request is 100. This parameter does not support specifying both ScheduledActionIds` and `Filters` at the same time.
 * @method array getFilters() 获取Filter.
<li> scheduled-action-id - String - Required: No - (Filter) Filter by scheduled task ID.</li>
<li> scheduled-action-name - String - Required: No - (Filter) Filter by scheduled task name.</li>
<li> auto-scaling-group-id - String - Required: No - (Filter) Filter by auto scaling group ID.</li>
 * @method void setFilters(array $Filters) 设置Filter.
<li> scheduled-action-id - String - Required: No - (Filter) Filter by scheduled task ID.</li>
<li> scheduled-action-name - String - Required: No - (Filter) Filter by scheduled task name.</li>
<li> auto-scaling-group-id - String - Required: No - (Filter) Filter by auto scaling group ID.</li>
 * @method integer getOffset() 获取Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
 * @method void setOffset(integer $Offset) 设置Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
 * @method integer getLimit() 获取Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
 * @method void setLimit(integer $Limit) 设置Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
 */

/**
 *DescribeScheduledActions request structure.
 */
class DescribeScheduledActionsRequest extends AbstractModel
{
    /**
     * @var array Queries by one or more scheduled task IDs in the format of asst-am691zxo. The maximum number of instances per request is 100. This parameter does not support specifying both ScheduledActionIds` and `Filters` at the same time.
     */
    public $ScheduledActionIds;

    /**
     * @var array Filter.
<li> scheduled-action-id - String - Required: No - (Filter) Filter by scheduled task ID.</li>
<li> scheduled-action-name - String - Required: No - (Filter) Filter by scheduled task name.</li>
<li> auto-scaling-group-id - String - Required: No - (Filter) Filter by auto scaling group ID.</li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
     */
    public $Limit;
    /**
     * @param array $ScheduledActionIds Queries by one or more scheduled task IDs in the format of asst-am691zxo. The maximum number of instances per request is 100. This parameter does not support specifying both ScheduledActionIds` and `Filters` at the same time.
     * @param array $Filters Filter.
<li> scheduled-action-id - String - Required: No - (Filter) Filter by scheduled task ID.</li>
<li> scheduled-action-name - String - Required: No - (Filter) Filter by scheduled task name.</li>
<li> auto-scaling-group-id - String - Required: No - (Filter) Filter by auto scaling group ID.</li>
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScheduledActionIds",$param) and $param["ScheduledActionIds"] !== null) {
            $this->ScheduledActionIds = $param["ScheduledActionIds"];
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
    }
}
