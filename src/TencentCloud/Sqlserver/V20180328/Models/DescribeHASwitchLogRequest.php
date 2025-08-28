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
 * DescribeHASwitchLog request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getStartTime() Obtain Start time (yyyy-MM-dd HH:mm:ss).
 * @method void setStartTime(string $StartTime) Set Start time (yyyy-MM-dd HH:mm:ss).
 * @method string getEndTime() Obtain End time (yyyy-MM-dd HH:mm:ss).
 * @method void setEndTime(string $EndTime) Set End time (yyyy-MM-dd HH:mm:ss).
 * @method integer getSwitchType() Obtain Switch mode. 0 - system automatic switch; 1 - manual switch. Check all switch modes by default if the parameter is left unspecified.
 * @method void setSwitchType(integer $SwitchType) Set Switch mode. 0 - system automatic switch; 1 - manual switch. Check all switch modes by default if the parameter is left unspecified.
 * @method integer getLimit() Obtain Pagination size.
 * @method void setLimit(integer $Limit) Set Pagination size.
 * @method integer getOffset() Obtain Pagination number.
 * @method void setOffset(integer $Offset) Set Pagination number.
 */
class DescribeHASwitchLogRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Start time (yyyy-MM-dd HH:mm:ss).
     */
    public $StartTime;

    /**
     * @var string End time (yyyy-MM-dd HH:mm:ss).
     */
    public $EndTime;

    /**
     * @var integer Switch mode. 0 - system automatic switch; 1 - manual switch. Check all switch modes by default if the parameter is left unspecified.
     */
    public $SwitchType;

    /**
     * @var integer Pagination size.
     */
    public $Limit;

    /**
     * @var integer Pagination number.
     */
    public $Offset;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $StartTime Start time (yyyy-MM-dd HH:mm:ss).
     * @param string $EndTime End time (yyyy-MM-dd HH:mm:ss).
     * @param integer $SwitchType Switch mode. 0 - system automatic switch; 1 - manual switch. Check all switch modes by default if the parameter is left unspecified.
     * @param integer $Limit Pagination size.
     * @param integer $Offset Pagination number.
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

        if (array_key_exists("SwitchType",$param) and $param["SwitchType"] !== null) {
            $this->SwitchType = $param["SwitchType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
