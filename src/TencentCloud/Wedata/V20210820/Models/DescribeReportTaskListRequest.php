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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReportTaskList request structure.
 *
 * @method integer getPageNum() Obtain Page number
 * @method void setPageNum(integer $PageNum) Set Page number
 * @method integer getPageSize() Obtain Entries per page.
 * @method void setPageSize(integer $PageSize) Set Entries per page.
 * @method string getTenantId() Obtain Tenant id.
 * @method void setTenantId(string $TenantId) Set Tenant id.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getJobId() Obtain Job id.
 * @method void setJobId(string $JobId) Set Job id.
 * @method string getEngineTaskId() Obtain Engine task id.
 * @method void setEngineTaskId(string $EngineTaskId) Set Engine task id.
 * @method string getProductSource() Obtain DATA source, such as DATA_INTEGRATION, DATA_EXPLORATION, DATA_QUALITY, OM_CENTER.
 * @method void setProductSource(string $ProductSource) Set DATA source, such as DATA_INTEGRATION, DATA_EXPLORATION, DATA_QUALITY, OM_CENTER.
 * @method string getOnwerUid() Obtain Root account.
 * @method void setOnwerUid(string $OnwerUid) Set Root account.
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 */
class DescribeReportTaskListRequest extends AbstractModel
{
    /**
     * @var integer Page number
     */
    public $PageNum;

    /**
     * @var integer Entries per page.
     */
    public $PageSize;

    /**
     * @var string Tenant id.
     */
    public $TenantId;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Job id.
     */
    public $JobId;

    /**
     * @var string Engine task id.
     */
    public $EngineTaskId;

    /**
     * @var string DATA source, such as DATA_INTEGRATION, DATA_EXPLORATION, DATA_QUALITY, OM_CENTER.
     */
    public $ProductSource;

    /**
     * @var string Root account.
     */
    public $OnwerUid;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @param integer $PageNum Page number
     * @param integer $PageSize Entries per page.
     * @param string $TenantId Tenant id.
     * @param string $ProjectId Project ID.
     * @param string $TaskId Task ID
     * @param string $InstanceId Instance ID
     * @param string $JobId Job id.
     * @param string $EngineTaskId Engine task id.
     * @param string $ProductSource DATA source, such as DATA_INTEGRATION, DATA_EXPLORATION, DATA_QUALITY, OM_CENTER.
     * @param string $OnwerUid Root account.
     * @param string $StartTime Start time
     * @param string $EndTime End time
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("EngineTaskId",$param) and $param["EngineTaskId"] !== null) {
            $this->EngineTaskId = $param["EngineTaskId"];
        }

        if (array_key_exists("ProductSource",$param) and $param["ProductSource"] !== null) {
            $this->ProductSource = $param["ProductSource"];
        }

        if (array_key_exists("OnwerUid",$param) and $param["OnwerUid"] !== null) {
            $this->OnwerUid = $param["OnwerUid"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
