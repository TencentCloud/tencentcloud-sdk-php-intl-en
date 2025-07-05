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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of time range available for database rollback
 *
 * @method string getDBName() Obtain Database name
 * @method void setDBName(string $DBName) Set Database name
 * @method string getStartTime() Obtain Start time of time range available for rollback
 * @method void setStartTime(string $StartTime) Set Start time of time range available for rollback
 * @method string getEndTime() Obtain End time of time range available for rollback
 * @method void setEndTime(string $EndTime) Set End time of time range available for rollback
 */
class DbRollbackTimeInfo extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $DBName;

    /**
     * @var string Start time of time range available for rollback
     */
    public $StartTime;

    /**
     * @var string End time of time range available for rollback
     */
    public $EndTime;

    /**
     * @param string $DBName Database name
     * @param string $StartTime Start time of time range available for rollback
     * @param string $EndTime End time of time range available for rollback
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
        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
