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
 * DescribeAIScheduleList request structure.
 *
 * @method integer getOffset() Obtain <p>Pagination offset. Default: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset. Default: 0.</p>
 * @method integer getLimit() Obtain <p>Pagination size. Default: 20. Maximum: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Pagination size. Default: 20. Maximum: 100.</p>
 * @method integer getStatus() Obtain <p>Status filtering. Value: 0 (all), 1 (enabled), 2 (disabled). Default: 0.</p>
 * @method void setStatus(integer $Status) Set <p>Status filtering. Value: 0 (all), 1 (enabled), 2 (disabled). Default: 0.</p>
 * @method string getScheduleId() Obtain <p>Scheduled task ID, optional. If empty, a full query is performed.</p>
 * @method void setScheduleId(string $ScheduleId) Set <p>Scheduled task ID, optional. If empty, a full query is performed.</p>
 */
class DescribeAIScheduleListRequest extends AbstractModel
{
    /**
     * @var integer <p>Pagination offset. Default: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Pagination size. Default: 20. Maximum: 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Status filtering. Value: 0 (all), 1 (enabled), 2 (disabled). Default: 0.</p>
     */
    public $Status;

    /**
     * @var string <p>Scheduled task ID, optional. If empty, a full query is performed.</p>
     */
    public $ScheduleId;

    /**
     * @param integer $Offset <p>Pagination offset. Default: 0.</p>
     * @param integer $Limit <p>Pagination size. Default: 20. Maximum: 100.</p>
     * @param integer $Status <p>Status filtering. Value: 0 (all), 1 (enabled), 2 (disabled). Default: 0.</p>
     * @param string $ScheduleId <p>Scheduled task ID, optional. If empty, a full query is performed.</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }
    }
}
