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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScheduledActions request structure.
 *
 * @method array getScheduledActionIds() Obtain Query by one or more scheduled task ids. you can obtain the scheduled task ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group). the maximum number of instances per request is 100. parameters ScheduledActionIds and Filters must not be specified simultaneously.
 * @method void setScheduledActionIds(array $ScheduledActionIds) Set Query by one or more scheduled task ids. you can obtain the scheduled task ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group). the maximum number of instances per request is 100. parameters ScheduledActionIds and Filters must not be specified simultaneously.
 * @method array getFilters() Obtain Filter criteria. obtain the scheduled task ID, scheduled task name, and scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group).
<li> scheduled-action-id - String - required: no - (filter) filter by scheduled task id.</li>.
<li> scheduled-action-name - String - required: no - (filter criteria) filters by scheduled task name.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id.</li>.
 * @method void setFilters(array $Filters) Set Filter criteria. obtain the scheduled task ID, scheduled task name, and scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group).
<li> scheduled-action-id - String - required: no - (filter) filter by scheduled task id.</li>.
<li> scheduled-action-name - String - required: no - (filter criteria) filters by scheduled task name.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id.</li>.
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 */
class DescribeScheduledActionsRequest extends AbstractModel
{
    /**
     * @var array Query by one or more scheduled task ids. you can obtain the scheduled task ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group). the maximum number of instances per request is 100. parameters ScheduledActionIds and Filters must not be specified simultaneously.
     */
    public $ScheduledActionIds;

    /**
     * @var array Filter criteria. obtain the scheduled task ID, scheduled task name, and scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group).
<li> scheduled-action-id - String - required: no - (filter) filter by scheduled task id.</li>.
<li> scheduled-action-name - String - required: no - (filter criteria) filters by scheduled task name.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id.</li>.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @param array $ScheduledActionIds Query by one or more scheduled task ids. you can obtain the scheduled task ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group). the maximum number of instances per request is 100. parameters ScheduledActionIds and Filters must not be specified simultaneously.
     * @param array $Filters Filter criteria. obtain the scheduled task ID, scheduled task name, and scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group).
<li> scheduled-action-id - String - required: no - (filter) filter by scheduled task id.</li>.
<li> scheduled-action-name - String - required: no - (filter criteria) filters by scheduled task name.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id.</li>.
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
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
