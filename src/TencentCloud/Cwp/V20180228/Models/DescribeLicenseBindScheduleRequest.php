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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseBindSchedule request structure.
 *
 * @method integer getTaskId() Obtain Task ID
 * @method void setTaskId(integer $TaskId) Set Task ID
 * @method integer getLimit() Obtain Limit number, 10 by default.
 * @method void setLimit(integer $Limit) Set Limit number, 10 by default.
 * @method integer getOffset() Obtain Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 * @method array getFilters() Obtain Filter parameters
Status - binding progress status. 0 - in progress; 1 - completed; 2 - failed
 * @method void setFilters(array $Filters) Set Filter parameters
Status - binding progress status. 0 - in progress; 1 - completed; 2 - failed
 */
class DescribeLicenseBindScheduleRequest extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $TaskId;

    /**
     * @var integer Limit number, 10 by default.
     */
    public $Limit;

    /**
     * @var integer Offset, which is 0 by default.
     */
    public $Offset;

    /**
     * @var array Filter parameters
Status - binding progress status. 0 - in progress; 1 - completed; 2 - failed
     */
    public $Filters;

    /**
     * @param integer $TaskId Task ID
     * @param integer $Limit Limit number, 10 by default.
     * @param integer $Offset Offset, which is 0 by default.
     * @param array $Filters Filter parameters
Status - binding progress status. 0 - in progress; 1 - completed; 2 - failed
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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
