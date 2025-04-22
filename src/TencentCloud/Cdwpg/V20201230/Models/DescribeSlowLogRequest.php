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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLog request structure.
 *
 * @method string getInstanceId() Obtain InstanceId.
 * @method void setInstanceId(string $InstanceId) Set InstanceId.
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method integer getLimit() Obtain Limit.
 * @method void setLimit(integer $Limit) Set Limit.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method string getDatabase() Obtain Database.
 * @method void setDatabase(string $Database) Set Database.
 * @method string getOrderBy() Obtain Sorting method.
 * @method void setOrderBy(string $OrderBy) Set Sorting method.
 * @method string getOrderByType() Obtain Ascending or descending order.
 * @method void setOrderByType(string $OrderByType) Set Ascending or descending order.
 * @method float getDuration() Obtain Duration.
 * @method void setDuration(float $Duration) Set Duration.
 */
class DescribeSlowLogRequest extends AbstractModel
{
    /**
     * @var string InstanceId.
     */
    public $InstanceId;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var integer Limit.
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var string Database.
     */
    public $Database;

    /**
     * @var string Sorting method.
     */
    public $OrderBy;

    /**
     * @var string Ascending or descending order.
     */
    public $OrderByType;

    /**
     * @var float Duration.
     */
    public $Duration;

    /**
     * @param string $InstanceId InstanceId.
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param integer $Limit Limit.
     * @param integer $Offset Offset.
     * @param string $Database Database.
     * @param string $OrderBy Sorting method.
     * @param string $OrderByType Ascending or descending order.
     * @param float $Duration Duration.
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

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
