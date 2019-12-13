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
 * @method string getInstanceId() 获取Instance ID
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
 * @method string getBeginTime() 获取Start time
 * @method void setBeginTime(string $BeginTime) 设置Start time
 * @method string getEndTime() 获取End time
 * @method void setEndTime(string $EndTime) 设置End time
 * @method integer getMinQueryTime() 获取Slow log threshold in microseconds
 * @method void setMinQueryTime(integer $MinQueryTime) 设置Slow log threshold in microseconds
 * @method integer getLimit() 获取Number of entries per page
 * @method void setLimit(integer $Limit) 设置Number of entries per page
 * @method integer getOffset() 获取Offset, which is an integral multiple of `Limit`
 * @method void setOffset(integer $Offset) 设置Offset, which is an integral multiple of `Limit`
 */

/**
 *DescribeSlowLog request structure.
 */
class DescribeSlowLogRequest extends AbstractModel
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
     * @var integer Slow log threshold in microseconds
     */
    public $MinQueryTime;

    /**
     * @var integer Number of entries per page
     */
    public $Limit;

    /**
     * @var integer Offset, which is an integral multiple of `Limit`
     */
    public $Offset;
    /**
     * @param string $InstanceId Instance ID
     * @param string $BeginTime Start time
     * @param string $EndTime End time
     * @param integer $MinQueryTime Slow log threshold in microseconds
     * @param integer $Limit Number of entries per page
     * @param integer $Offset Offset, which is an integral multiple of `Limit`
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
