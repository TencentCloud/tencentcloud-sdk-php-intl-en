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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxySlowLog request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getBeginTime() Obtain Start time
 * @method void setBeginTime(string $BeginTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getMinQueryTime() Obtain Slow query threshold in milliseconds
 * @method void setMinQueryTime(integer $MinQueryTime) Set Slow query threshold in milliseconds
 * @method integer getLimit() Obtain Maximum number of results returned per page
 * @method void setLimit(integer $Limit) Set Maximum number of results returned per page
 * @method integer getOffset() Obtain Offset, which is an integral multiple of `Limit`.
 * @method void setOffset(integer $Offset) Set Offset, which is an integral multiple of `Limit`.
 */
class DescribeProxySlowLogRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Start time
     */
    public $BeginTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer Slow query threshold in milliseconds
     */
    public $MinQueryTime;

    /**
     * @var integer Maximum number of results returned per page
     */
    public $Limit;

    /**
     * @var integer Offset, which is an integral multiple of `Limit`.
     */
    public $Offset;

    /**
     * @param string $InstanceId Instance ID
     * @param string $BeginTime Start time
     * @param string $EndTime End time
     * @param integer $MinQueryTime Slow query threshold in milliseconds
     * @param integer $Limit Maximum number of results returned per page
     * @param integer $Offset Offset, which is an integral multiple of `Limit`.
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

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MinQueryTime",$param) and $param["MinQueryTime"] !== null) {
            $this->MinQueryTime = $param["MinQueryTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
