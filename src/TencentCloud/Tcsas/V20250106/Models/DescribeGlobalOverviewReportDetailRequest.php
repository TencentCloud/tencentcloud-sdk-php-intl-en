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
 * DescribeGlobalOverviewReportDetail request structure.
 *
 * @method string getPlatformId() Obtain Tenant ID
 * @method void setPlatformId(string $PlatformId) Set Tenant ID
 * @method string getReportId() Obtain Parameter value: mnp_data_analysis
 * @method void setReportId(string $ReportId) Set Parameter value: mnp_data_analysis
 * @method string getIndexId() Obtain Parameter value: app_num|corp_num|miniapp_num|miniapp_visit_pv|minigame_num|minigame_visit_pv
 * @method void setIndexId(string $IndexId) Set Parameter value: app_num|corp_num|miniapp_num|miniapp_visit_pv|minigame_num|minigame_visit_pv
 * @method string getQueryData() Obtain Base64 string containing start and end time: {"BeginDate":20251111,"EndDate":20251125}
 * @method void setQueryData(string $QueryData) Set Base64 string containing start and end time: {"BeginDate":20251111,"EndDate":20251125}
 */
class DescribeGlobalOverviewReportDetailRequest extends AbstractModel
{
    /**
     * @var string Tenant ID
     */
    public $PlatformId;

    /**
     * @var string Parameter value: mnp_data_analysis
     */
    public $ReportId;

    /**
     * @var string Parameter value: app_num|corp_num|miniapp_num|miniapp_visit_pv|minigame_num|minigame_visit_pv
     */
    public $IndexId;

    /**
     * @var string Base64 string containing start and end time: {"BeginDate":20251111,"EndDate":20251125}
     */
    public $QueryData;

    /**
     * @param string $PlatformId Tenant ID
     * @param string $ReportId Parameter value: mnp_data_analysis
     * @param string $IndexId Parameter value: app_num|corp_num|miniapp_num|miniapp_visit_pv|minigame_num|minigame_visit_pv
     * @param string $QueryData Base64 string containing start and end time: {"BeginDate":20251111,"EndDate":20251125}
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

        if (array_key_exists("IndexId",$param) and $param["IndexId"] !== null) {
            $this->IndexId = $param["IndexId"];
        }

        if (array_key_exists("QueryData",$param) and $param["QueryData"] !== null) {
            $this->QueryData = $param["QueryData"];
        }
    }
}
