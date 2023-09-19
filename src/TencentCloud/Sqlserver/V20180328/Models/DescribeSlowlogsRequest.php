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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowlogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of mssql-k8voqdlz
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of mssql-k8voqdlz
 * @method string getStartTime() Obtain Start time in the format of `yyyy-MM-dd HH:mm:ss`
 * @method void setStartTime(string $StartTime) Set Start time in the format of `yyyy-MM-dd HH:mm:ss`
 * @method string getEndTime() Obtain End time in the format of `yyyy-MM-dd HH:mm:ss`
 * @method void setEndTime(string $EndTime) Set End time in the format of `yyyy-MM-dd HH:mm:ss`
 * @method integer getLimit() Obtain Number of results per page. Value range: 1-100. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of results per page. Value range: 1-100. Default value: 20
 * @method integer getOffset() Obtain Page number. Default value: 0
 * @method void setOffset(integer $Offset) Set Page number. Default value: 0
 */
class DescribeSlowlogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of mssql-k8voqdlz
     */
    public $InstanceId;

    /**
     * @var string Start time in the format of `yyyy-MM-dd HH:mm:ss`
     */
    public $StartTime;

    /**
     * @var string End time in the format of `yyyy-MM-dd HH:mm:ss`
     */
    public $EndTime;

    /**
     * @var integer Number of results per page. Value range: 1-100. Default value: 20
     */
    public $Limit;

    /**
     * @var integer Page number. Default value: 0
     */
    public $Offset;

    /**
     * @param string $InstanceId Instance ID in the format of mssql-k8voqdlz
     * @param string $StartTime Start time in the format of `yyyy-MM-dd HH:mm:ss`
     * @param string $EndTime End time in the format of `yyyy-MM-dd HH:mm:ss`
     * @param integer $Limit Number of results per page. Value range: 1-100. Default value: 20
     * @param integer $Offset Page number. Default value: 0
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
