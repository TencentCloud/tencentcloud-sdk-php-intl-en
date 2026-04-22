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
 * DescribeMNPReportDataLineChart request structure.
 *
 * @method string getMNPId() Obtain Mini program appid
 * @method void setMNPId(string $MNPId) Set Mini program appid
 * @method string getPlatformId() Obtain Tenant ID
 * @method void setPlatformId(string $PlatformId) Set Tenant ID
 * @method string getReportId() Obtain Fixed value: mnp_data_analysis
 * @method void setReportId(string $ReportId) Set Fixed value: mnp_data_analysis
 * @method string getIndexId() Obtain IndexId (optional):
active_device_num: Active users
new_device_num: New users
total_user_num: Total users
share_num: Number of shares
miniapp_open_num: Number of opens
avg_device_open_num: Average opens per user
avg_device_open_duration: Average duration per user
avg_count_open_duration: Average duration per session
 * @method void setIndexId(string $IndexId) Set IndexId (optional):
active_device_num: Active users
new_device_num: New users
total_user_num: Total users
share_num: Number of shares
miniapp_open_num: Number of opens
avg_device_open_num: Average opens per user
avg_device_open_duration: Average duration per user
avg_count_open_duration: Average duration per session
 * @method string getQueryData() Obtain Input parameter base64 string: {"DataType":"1","Platform":0,"BeginDate":20251118,"EndDate":20251124}
 * @method void setQueryData(string $QueryData) Set Input parameter base64 string: {"DataType":"1","Platform":0,"BeginDate":20251118,"EndDate":20251124}
 */
class DescribeMNPReportDataLineChartRequest extends AbstractModel
{
    /**
     * @var string Mini program appid
     */
    public $MNPId;

    /**
     * @var string Tenant ID
     */
    public $PlatformId;

    /**
     * @var string Fixed value: mnp_data_analysis
     */
    public $ReportId;

    /**
     * @var string IndexId (optional):
active_device_num: Active users
new_device_num: New users
total_user_num: Total users
share_num: Number of shares
miniapp_open_num: Number of opens
avg_device_open_num: Average opens per user
avg_device_open_duration: Average duration per user
avg_count_open_duration: Average duration per session
     */
    public $IndexId;

    /**
     * @var string Input parameter base64 string: {"DataType":"1","Platform":0,"BeginDate":20251118,"EndDate":20251124}
     */
    public $QueryData;

    /**
     * @param string $MNPId Mini program appid
     * @param string $PlatformId Tenant ID
     * @param string $ReportId Fixed value: mnp_data_analysis
     * @param string $IndexId IndexId (optional):
active_device_num: Active users
new_device_num: New users
total_user_num: Total users
share_num: Number of shares
miniapp_open_num: Number of opens
avg_device_open_num: Average opens per user
avg_device_open_duration: Average duration per user
avg_count_open_duration: Average duration per session
     * @param string $QueryData Input parameter base64 string: {"DataType":"1","Platform":0,"BeginDate":20251118,"EndDate":20251124}
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("ReportId",$param) and $param["ReportId"] !== null) {
            $this->ReportId = $param["ReportId"];
        }

        if (array_key_exists("IndexId",$param) and $param["IndexId"] !== null) {
            $this->IndexId = $param["IndexId"];
        }

        if (array_key_exists("QueryData",$param) and $param["QueryData"] !== null) {
            $this->QueryData = $param["QueryData"];
        }
    }
}
