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
 * DescribeGlobalOverviewDataSummary request structure.
 *
 * @method string getDataType() Obtain string: Overview
 * @method void setDataType(string $DataType) Set string: Overview
 * @method string getPlatformId() Obtain Tenant ID
 * @method void setPlatformId(string $PlatformId) Set Tenant ID
 * @method integer getDataTime() Obtain Date in YYYYMMDD format
 * @method void setDataTime(integer $DataTime) Set Date in YYYYMMDD format
 */
class DescribeGlobalOverviewDataSummaryRequest extends AbstractModel
{
    /**
     * @var string string: Overview
     */
    public $DataType;

    /**
     * @var string Tenant ID
     */
    public $PlatformId;

    /**
     * @var integer Date in YYYYMMDD format
     */
    public $DataTime;

    /**
     * @param string $DataType string: Overview
     * @param string $PlatformId Tenant ID
     * @param integer $DataTime Date in YYYYMMDD format
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
        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }
    }
}
