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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCSIPLicenseBindSchedule request structure.
 *
 * @method integer getTaskId() Obtain <p>Returned task ID of ModifyCSIPLicenseBinds</p>
 * @method void setTaskId(integer $TaskId) Set <p>Returned task ID of ModifyCSIPLicenseBinds</p>
 * @method integer getLimit() Obtain <p>Pagination size. Default value: 10.</p>
 * @method void setLimit(integer $Limit) Set <p>Pagination size. Default value: 10.</p>
 * @method integer getOffset() Obtain <p>Pagination offset</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset</p>
 * @method array getFilters() Obtain <p>Filter criteria, support filtering by Status (0-Initialization 1-Successful 2-Failed 3-Skipped)</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria, support filtering by Status (0-Initialization 1-Successful 2-Failed 3-Skipped)</p>
 */
class DescribeCSIPLicenseBindScheduleRequest extends AbstractModel
{
    /**
     * @var integer <p>Returned task ID of ModifyCSIPLicenseBinds</p>
     */
    public $TaskId;

    /**
     * @var integer <p>Pagination size. Default value: 10.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Pagination offset</p>
     */
    public $Offset;

    /**
     * @var array <p>Filter criteria, support filtering by Status (0-Initialization 1-Successful 2-Failed 3-Skipped)</p>
     */
    public $Filters;

    /**
     * @param integer $TaskId <p>Returned task ID of ModifyCSIPLicenseBinds</p>
     * @param integer $Limit <p>Pagination size. Default value: 10.</p>
     * @param integer $Offset <p>Pagination offset</p>
     * @param array $Filters <p>Filter criteria, support filtering by Status (0-Initialization 1-Successful 2-Failed 3-Skipped)</p>
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
                $obj = new LicenseBindFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
