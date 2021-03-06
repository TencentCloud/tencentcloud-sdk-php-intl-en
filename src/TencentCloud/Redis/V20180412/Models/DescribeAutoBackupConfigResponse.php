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
 * DescribeAutoBackupConfig response structure.
 *
 * @method integer getAutoBackupType() Obtain Backup type. Auto backup type: 1 "scheduled rollback"
 * @method void setAutoBackupType(integer $AutoBackupType) Set Backup type. Auto backup type: 1 "scheduled rollback"
 * @method array getWeekDays() Obtain Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday.
 * @method void setWeekDays(array $WeekDays) Set Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday.
 * @method string getTimePeriod() Obtain Time period.
 * @method void setTimePeriod(string $TimePeriod) Set Time period.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAutoBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer Backup type. Auto backup type: 1 "scheduled rollback"
     */
    public $AutoBackupType;

    /**
     * @var array Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday.
     */
    public $WeekDays;

    /**
     * @var string Time period.
     */
    public $TimePeriod;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AutoBackupType Backup type. Auto backup type: 1 "scheduled rollback"
     * @param array $WeekDays Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday.
     * @param string $TimePeriod Time period.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("AutoBackupType",$param) and $param["AutoBackupType"] !== null) {
            $this->AutoBackupType = $param["AutoBackupType"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("TimePeriod",$param) and $param["TimePeriod"] !== null) {
            $this->TimePeriod = $param["TimePeriod"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
