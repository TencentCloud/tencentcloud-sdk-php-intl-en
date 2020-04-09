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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBImportRecords request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method string getStartTime() Obtain Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-01-01 00:00:01.
 * @method void setStartTime(string $StartTime) Set Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-01-01 00:00:01.
 * @method string getEndTime() Obtain End time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-01-01 23:59:59.
 * @method void setEndTime(string $EndTime) Set End time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-01-01 23:59:59.
 * @method integer getOffset() Obtain Pagination parameter indicating the offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination parameter indicating the offset. Default value: 0.
 * @method integer getLimit() Obtain Pagination parameter indicating the number of results to be returned for a single request. Value range: 1-100. Default value: 20.
 * @method void setLimit(integer $Limit) Set Pagination parameter indicating the number of results to be returned for a single request. Value range: 1-100. Default value: 20.
 */
class DescribeDBImportRecordsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var string Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-01-01 00:00:01.
     */
    public $StartTime;

    /**
     * @var string End time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-01-01 23:59:59.
     */
    public $EndTime;

    /**
     * @var integer Pagination parameter indicating the offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Pagination parameter indicating the number of results to be returned for a single request. Value range: 1-100. Default value: 20.
     */
    public $Limit;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param string $StartTime Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-01-01 00:00:01.
     * @param string $EndTime End time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-01-01 23:59:59.
     * @param integer $Offset Pagination parameter indicating the offset. Default value: 0.
     * @param integer $Limit Pagination parameter indicating the number of results to be returned for a single request. Value range: 1-100. Default value: 20.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
