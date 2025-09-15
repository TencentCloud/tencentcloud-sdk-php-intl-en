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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkApplications request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method integer getStartTime() Obtain Querying start time.
 * @method void setStartTime(integer $StartTime) Set Querying start time.
 * @method integer getEndTime() Obtain Querying end time.
 * @method void setEndTime(integer $EndTime) Set Querying end time.
 * @method integer getPageSize() Obtain Number of entries per page.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page.
 * @method integer getPage() Obtain Which page.
 * @method void setPage(integer $Page) Set Which page.
 */
class DescribeSparkApplicationsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var integer Querying start time.
     */
    public $StartTime;

    /**
     * @var integer Querying end time.
     */
    public $EndTime;

    /**
     * @var integer Number of entries per page.
     */
    public $PageSize;

    /**
     * @var integer Which page.
     */
    public $Page;

    /**
     * @param string $InstanceId Cluster ID.
     * @param integer $StartTime Querying start time.
     * @param integer $EndTime Querying end time.
     * @param integer $PageSize Number of entries per page.
     * @param integer $Page Which page.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
