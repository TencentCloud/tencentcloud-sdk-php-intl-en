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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrefetchTasks request structure.
 *
 * @method string getJobId() Obtain Task ID
 * @method void setJobId(string $JobId) Set Task ID
 * @method string getStartTime() Obtain Start time of the query
 * @method void setStartTime(string $StartTime) Set Start time of the query
 * @method string getEndTime() Obtain End time of the query
 * @method void setEndTime(string $EndTime) Set End time of the query
 * @method integer getOffset() Obtain Offset of the query
 * @method void setOffset(integer $Offset) Set Offset of the query
 * @method integer getLimit() Obtain Maximum number of results returned
 * @method void setLimit(integer $Limit) Set Maximum number of results returned
 * @method array getStatuses() Obtain Statuses of tasks to be queried. Values:
`processing`, `success`, `failed`, `timeout` and `invalid`
 * @method void setStatuses(array $Statuses) Set Statuses of tasks to be queried. Values:
`processing`, `success`, `failed`, `timeout` and `invalid`
 * @method string getZoneId() Obtain ID of the site
 * @method void setZoneId(string $ZoneId) Set ID of the site
 * @method array getDomains() Obtain List of domain names queried
 * @method void setDomains(array $Domains) Set List of domain names queried
 * @method string getTarget() Obtain Resources queried
 * @method void setTarget(string $Target) Set Resources queried
 */
class DescribePrefetchTasksRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $JobId;

    /**
     * @var string Start time of the query
     */
    public $StartTime;

    /**
     * @var string End time of the query
     */
    public $EndTime;

    /**
     * @var integer Offset of the query
     */
    public $Offset;

    /**
     * @var integer Maximum number of results returned
     */
    public $Limit;

    /**
     * @var array Statuses of tasks to be queried. Values:
`processing`, `success`, `failed`, `timeout` and `invalid`
     */
    public $Statuses;

    /**
     * @var string ID of the site
     */
    public $ZoneId;

    /**
     * @var array List of domain names queried
     */
    public $Domains;

    /**
     * @var string Resources queried
     */
    public $Target;

    /**
     * @param string $JobId Task ID
     * @param string $StartTime Start time of the query
     * @param string $EndTime End time of the query
     * @param integer $Offset Offset of the query
     * @param integer $Limit Maximum number of results returned
     * @param array $Statuses Statuses of tasks to be queried. Values:
`processing`, `success`, `failed`, `timeout` and `invalid`
     * @param string $ZoneId ID of the site
     * @param array $Domains List of domain names queried
     * @param string $Target Resources queried
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Statuses",$param) and $param["Statuses"] !== null) {
            $this->Statuses = $param["Statuses"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }
    }
}
