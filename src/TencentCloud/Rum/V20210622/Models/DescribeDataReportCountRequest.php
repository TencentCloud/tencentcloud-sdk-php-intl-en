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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataReportCount request structure.
 *
 * @method integer getStartTime() Obtain Start time
 * @method void setStartTime(integer $StartTime) Set Start time
 * @method integer getEndTime() Obtain End time
 * @method void setEndTime(integer $EndTime) Set End time
 * @method integer getID() Obtain Project ID
 * @method void setID(integer $ID) Set Project ID
 * @method string getReportType() Obtain Reporting type
 * @method void setReportType(string $ReportType) Set Reporting type
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 */
class DescribeDataReportCountRequest extends AbstractModel
{
    /**
     * @var integer Start time
     */
    public $StartTime;

    /**
     * @var integer End time
     */
    public $EndTime;

    /**
     * @var integer Project ID
     */
    public $ID;

    /**
     * @var string Reporting type
     */
    public $ReportType;

    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @param integer $StartTime Start time
     * @param integer $EndTime End time
     * @param integer $ID Project ID
     * @param string $ReportType Reporting type
     * @param string $InstanceID Instance ID
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
