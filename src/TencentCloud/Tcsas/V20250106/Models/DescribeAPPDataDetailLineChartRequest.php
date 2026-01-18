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
 * DescribeAPPDataDetailLineChart request structure.
 *
 * @method string getPlatformId() Obtain Tenant ID
 * @method void setPlatformId(string $PlatformId) Set Tenant ID
 * @method string getReportId() Obtain Fixed value: mnp_data_analysis
 * @method void setReportId(string $ReportId) Set Fixed value: mnp_data_analysis
 * @method array getIndexIds() Obtain IndexId (optional):
app_minigame_num: Number of created mini games
app_online_miniapp_num: Number of available mini programs
app_miniapp_num: Number of created mini programs
app_related_corp_num: Mini program team data
app_online_minigame_num: Number of available mini games
app_active_device_num: Number of active devices
app_new_device_num: Number of new devices
 * @method void setIndexIds(array $IndexIds) Set IndexId (optional):
app_minigame_num: Number of created mini games
app_online_miniapp_num: Number of available mini programs
app_miniapp_num: Number of created mini programs
app_related_corp_num: Mini program team data
app_online_minigame_num: Number of available mini games
app_active_device_num: Number of active devices
app_new_device_num: Number of new devices
 * @method string getQueryData() Obtain Input parameter base64 string: {"BeginDate":"20251122","EndDate":"20251128"}
 * @method void setQueryData(string $QueryData) Set Input parameter base64 string: {"BeginDate":"20251122","EndDate":"20251128"}
 * @method array getApplicationIds() Obtain Superapp ID
 * @method void setApplicationIds(array $ApplicationIds) Set Superapp ID
 */
class DescribeAPPDataDetailLineChartRequest extends AbstractModel
{
    /**
     * @var string Tenant ID
     */
    public $PlatformId;

    /**
     * @var string Fixed value: mnp_data_analysis
     */
    public $ReportId;

    /**
     * @var array IndexId (optional):
app_minigame_num: Number of created mini games
app_online_miniapp_num: Number of available mini programs
app_miniapp_num: Number of created mini programs
app_related_corp_num: Mini program team data
app_online_minigame_num: Number of available mini games
app_active_device_num: Number of active devices
app_new_device_num: Number of new devices
     */
    public $IndexIds;

    /**
     * @var string Input parameter base64 string: {"BeginDate":"20251122","EndDate":"20251128"}
     */
    public $QueryData;

    /**
     * @var array Superapp ID
     */
    public $ApplicationIds;

    /**
     * @param string $PlatformId Tenant ID
     * @param string $ReportId Fixed value: mnp_data_analysis
     * @param array $IndexIds IndexId (optional):
app_minigame_num: Number of created mini games
app_online_miniapp_num: Number of available mini programs
app_miniapp_num: Number of created mini programs
app_related_corp_num: Mini program team data
app_online_minigame_num: Number of available mini games
app_active_device_num: Number of active devices
app_new_device_num: Number of new devices
     * @param string $QueryData Input parameter base64 string: {"BeginDate":"20251122","EndDate":"20251128"}
     * @param array $ApplicationIds Superapp ID
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
        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("ReportId",$param) and $param["ReportId"] !== null) {
            $this->ReportId = $param["ReportId"];
        }

        if (array_key_exists("IndexIds",$param) and $param["IndexIds"] !== null) {
            $this->IndexIds = $param["IndexIds"];
        }

        if (array_key_exists("QueryData",$param) and $param["QueryData"] !== null) {
            $this->QueryData = $param["QueryData"];
        }

        if (array_key_exists("ApplicationIds",$param) and $param["ApplicationIds"] !== null) {
            $this->ApplicationIds = $param["ApplicationIds"];
        }
    }
}
