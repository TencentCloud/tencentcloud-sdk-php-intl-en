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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMaintainTimeWindow request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method string getMaintainStartTime() Obtain Maintenance start time. time zone is UTC+8.
 * @method void setMaintainStartTime(string $MaintainStartTime) Set Maintenance start time. time zone is UTC+8.
 * @method integer getMaintainDuration() Obtain Maintenance duration. unit: hr. value range: [1,4].
 * @method void setMaintainDuration(integer $MaintainDuration) Set Maintenance duration. unit: hr. value range: [1,4].
 * @method array getMaintainWeekDays() Obtain Specifies the maintenance period.
 * @method void setMaintainWeekDays(array $MaintainWeekDays) Set Specifies the maintenance period.
 */
class ModifyMaintainTimeWindowRequest extends AbstractModel
{
    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     */
    public $DBInstanceId;

    /**
     * @var string Maintenance start time. time zone is UTC+8.
     */
    public $MaintainStartTime;

    /**
     * @var integer Maintenance duration. unit: hr. value range: [1,4].
     */
    public $MaintainDuration;

    /**
     * @var array Specifies the maintenance period.
     */
    public $MaintainWeekDays;

    /**
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     * @param string $MaintainStartTime Maintenance start time. time zone is UTC+8.
     * @param integer $MaintainDuration Maintenance duration. unit: hr. value range: [1,4].
     * @param array $MaintainWeekDays Specifies the maintenance period.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }
    }
}
