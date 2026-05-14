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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReportOrder request structure.
 *
 * @method string getOrderId() Obtain Order number unique identifier
 * @method void setOrderId(string $OrderId) Set Order number unique identifier
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getPackageType() Obtain Usage type
 * @method void setPackageType(string $PackageType) Set Usage type
 * @method string getReportMonth() Obtain Report month, current month by default
 * @method void setReportMonth(string $ReportMonth) Set Report month, current month by default
 */
class ReportOrderRequest extends AbstractModel
{
    /**
     * @var string Order number unique identifier
     */
    public $OrderId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Usage type
     */
    public $PackageType;

    /**
     * @var string Report month, current month by default
     */
    public $ReportMonth;

    /**
     * @param string $OrderId Order number unique identifier
     * @param string $ProjectId Project ID
     * @param string $PackageType Usage type
     * @param string $ReportMonth Report month, current month by default
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("ReportMonth",$param) and $param["ReportMonth"] !== null) {
            $this->ReportMonth = $param["ReportMonth"];
        }
    }
}
