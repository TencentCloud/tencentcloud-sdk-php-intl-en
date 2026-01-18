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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Page visit data
 *
 * @method integer getVisitCount() Obtain Number of visits
 * @method void setVisitCount(integer $VisitCount) Set Number of visits
 * @method string getAvgDeviceVisitDeep() Obtain Average pages per device - visit_page_count / active_device_num
 * @method void setAvgDeviceVisitDeep(string $AvgDeviceVisitDeep) Set Average pages per device - visit_page_count / active_device_num
 * @method string getAvgCountVisitDeep() Obtain Pages per visit - visit_page_count / miniapp_open_num
 * @method void setAvgCountVisitDeep(string $AvgCountVisitDeep) Set Pages per visit - visit_page_count / miniapp_open_num
 * @method string getAvgPageVisitDuration() Obtain Average visit duration - miniapp_total_duration / visit_page_count
 * @method void setAvgPageVisitDuration(string $AvgPageVisitDuration) Set Average visit duration - miniapp_total_duration / visit_page_count
 * @method string getAvgCountVisitDuration() Obtain Average visit duration per session
miniapp_total_duration/miniapp_open_num
 * @method void setAvgCountVisitDuration(string $AvgCountVisitDuration) Set Average visit duration per session
miniapp_total_duration/miniapp_open_num
 * @method integer getDataTime() Obtain Refresh time in YYYYMMDD format
 * @method void setDataTime(integer $DataTime) Set Refresh time in YYYYMMDD format
 */
class VisitData extends AbstractModel
{
    /**
     * @var integer Number of visits
     */
    public $VisitCount;

    /**
     * @var string Average pages per device - visit_page_count / active_device_num
     */
    public $AvgDeviceVisitDeep;

    /**
     * @var string Pages per visit - visit_page_count / miniapp_open_num
     */
    public $AvgCountVisitDeep;

    /**
     * @var string Average visit duration - miniapp_total_duration / visit_page_count
     */
    public $AvgPageVisitDuration;

    /**
     * @var string Average visit duration per session
miniapp_total_duration/miniapp_open_num
     */
    public $AvgCountVisitDuration;

    /**
     * @var integer Refresh time in YYYYMMDD format
     */
    public $DataTime;

    /**
     * @param integer $VisitCount Number of visits
     * @param string $AvgDeviceVisitDeep Average pages per device - visit_page_count / active_device_num
     * @param string $AvgCountVisitDeep Pages per visit - visit_page_count / miniapp_open_num
     * @param string $AvgPageVisitDuration Average visit duration - miniapp_total_duration / visit_page_count
     * @param string $AvgCountVisitDuration Average visit duration per session
miniapp_total_duration/miniapp_open_num
     * @param integer $DataTime Refresh time in YYYYMMDD format
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
        if (array_key_exists("VisitCount",$param) and $param["VisitCount"] !== null) {
            $this->VisitCount = $param["VisitCount"];
        }

        if (array_key_exists("AvgDeviceVisitDeep",$param) and $param["AvgDeviceVisitDeep"] !== null) {
            $this->AvgDeviceVisitDeep = $param["AvgDeviceVisitDeep"];
        }

        if (array_key_exists("AvgCountVisitDeep",$param) and $param["AvgCountVisitDeep"] !== null) {
            $this->AvgCountVisitDeep = $param["AvgCountVisitDeep"];
        }

        if (array_key_exists("AvgPageVisitDuration",$param) and $param["AvgPageVisitDuration"] !== null) {
            $this->AvgPageVisitDuration = $param["AvgPageVisitDuration"];
        }

        if (array_key_exists("AvgCountVisitDuration",$param) and $param["AvgCountVisitDuration"] !== null) {
            $this->AvgCountVisitDuration = $param["AvgCountVisitDuration"];
        }

        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }
    }
}
