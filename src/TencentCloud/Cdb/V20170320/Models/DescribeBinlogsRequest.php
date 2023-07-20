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
 * DescribeBinlogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method integer getOffset() Obtain Offset. Minimum value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Minimum value: 0.
 * @method integer getLimit() Obtain Number of entries per page. Value range: 1-100. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of entries per page. Value range: 1-100. Default value: 20.
 * @method string getMinStartTime() Obtain The earliest start time of binlog  in the format of 2016-03-17 02:10:37.
 * @method void setMinStartTime(string $MinStartTime) Set The earliest start time of binlog  in the format of 2016-03-17 02:10:37.
 * @method string getMaxStartTime() Obtain The latest start time of binlog  in the format of 2016-03-17 02:10:37.
 * @method void setMaxStartTime(string $MaxStartTime) Set The latest start time of binlog  in the format of 2016-03-17 02:10:37.
 */
class DescribeBinlogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var integer Offset. Minimum value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Value range: 1-100. Default value: 20.
     */
    public $Limit;

    /**
     * @var string The earliest start time of binlog  in the format of 2016-03-17 02:10:37.
     */
    public $MinStartTime;

    /**
     * @var string The latest start time of binlog  in the format of 2016-03-17 02:10:37.
     */
    public $MaxStartTime;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param integer $Offset Offset. Minimum value: 0.
     * @param integer $Limit Number of entries per page. Value range: 1-100. Default value: 20.
     * @param string $MinStartTime The earliest start time of binlog  in the format of 2016-03-17 02:10:37.
     * @param string $MaxStartTime The latest start time of binlog  in the format of 2016-03-17 02:10:37.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("MinStartTime",$param) and $param["MinStartTime"] !== null) {
            $this->MinStartTime = $param["MinStartTime"];
        }

        if (array_key_exists("MaxStartTime",$param) and $param["MaxStartTime"] !== null) {
            $this->MaxStartTime = $param["MaxStartTime"];
        }
    }
}
