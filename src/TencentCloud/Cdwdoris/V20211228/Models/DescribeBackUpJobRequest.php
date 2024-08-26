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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackUpJob request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method integer getPageSize() Obtain Pagination size
 * @method void setPageSize(integer $PageSize) Set Pagination size
 * @method integer getPageNum() Obtain Page number
 * @method void setPageNum(integer $PageNum) Set Page number
 * @method string getBeginTime() Obtain Start time
 * @method void setBeginTime(string $BeginTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getJobIdFiltersStr() Obtain String type of jobid
 * @method void setJobIdFiltersStr(string $JobIdFiltersStr) Set String type of jobid
 */
class DescribeBackUpJobRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var integer Pagination size
     */
    public $PageSize;

    /**
     * @var integer Page number
     */
    public $PageNum;

    /**
     * @var string Start time
     */
    public $BeginTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string String type of jobid
     */
    public $JobIdFiltersStr;

    /**
     * @param string $InstanceId Cluster ID
     * @param integer $PageSize Pagination size
     * @param integer $PageNum Page number
     * @param string $BeginTime Start time
     * @param string $EndTime End time
     * @param string $JobIdFiltersStr String type of jobid
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("JobIdFiltersStr",$param) and $param["JobIdFiltersStr"] !== null) {
            $this->JobIdFiltersStr = $param["JobIdFiltersStr"];
        }
    }
}
