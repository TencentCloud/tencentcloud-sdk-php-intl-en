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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmShields request structure.
 *
 * @method string getAlarmNoticeId() Obtain Notification Channel Group ID
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Notification Channel Group ID
 * @method array getFilters() Obtain - taskId: Filter by [Rule ID]. Type: String. Optional: No
- status: Filter by [Rule Status]. Type: String. Supports 0: Not yet effective, 1: In Effect, 2: Expired. Optional: No
Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method void setFilters(array $Filters) Set - taskId: Filter by [Rule ID]. Type: String. Optional: No
- status: Filter by [Rule Status]. Type: String. Supports 0: Not yet effective, 1: In Effect, 2: Expired. Optional: No
Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100.
 */
class DescribeAlarmShieldsRequest extends AbstractModel
{
    /**
     * @var string Notification Channel Group ID
     */
    public $AlarmNoticeId;

    /**
     * @var array - taskId: Filter by [Rule ID]. Type: String. Optional: No
- status: Filter by [Rule Status]. Type: String. Supports 0: Not yet effective, 1: In Effect, 2: Expired. Optional: No
Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     */
    public $Filters;

    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $AlarmNoticeId Notification Channel Group ID
     * @param array $Filters - taskId: Filter by [Rule ID]. Type: String. Optional: No
- status: Filter by [Rule Status]. Type: String. Supports 0: Not yet effective, 1: In Effect, 2: Expired. Optional: No
Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100.
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
        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
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
