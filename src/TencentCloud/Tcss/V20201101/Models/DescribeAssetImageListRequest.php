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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetImageList request structure.
 *
 * @method integer getLimit() Obtain <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method array getFilters() Obtain <p>Filter conditions.</p><li>ImageName - String - Required: No - Image name filter;</li><li>ScanStatus - String - Required: No - Image scan status: notScan, scanning, scanned, and scanErr</li><li>ImageID - String - Required: No - Image ID filter;</li><li>SecurityRisk - String - Required: No - Security risk: VirusCnt, RiskCnt, IsTrustImage, CriticalLevelVul, HighLevelVul, MediumLevelVul, and LowLevelVul.</li>
 * @method void setFilters(array $Filters) Set <p>Filter conditions.</p><li>ImageName - String - Required: No - Image name filter;</li><li>ScanStatus - String - Required: No - Image scan status: notScan, scanning, scanned, and scanErr</li><li>ImageID - String - Required: No - Image ID filter;</li><li>SecurityRisk - String - Required: No - Security risk: VirusCnt, RiskCnt, IsTrustImage, CriticalLevelVul, HighLevelVul, MediumLevelVul, and LowLevelVul.</li>
 * @method string getBy() Obtain <p>Sorting field.</p>
 * @method void setBy(string $By) Set <p>Sorting field.</p>
 * @method string getOrder() Obtain <p>Sorting method. Valid values: asc and desc.</p>
 * @method void setOrder(string $Order) Set <p>Sorting method. Valid values: asc and desc.</p>
 */
class DescribeAssetImageListRequest extends AbstractModel
{
    /**
     * @var integer <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var array <p>Filter conditions.</p><li>ImageName - String - Required: No - Image name filter;</li><li>ScanStatus - String - Required: No - Image scan status: notScan, scanning, scanned, and scanErr</li><li>ImageID - String - Required: No - Image ID filter;</li><li>SecurityRisk - String - Required: No - Security risk: VirusCnt, RiskCnt, IsTrustImage, CriticalLevelVul, HighLevelVul, MediumLevelVul, and LowLevelVul.</li>
     */
    public $Filters;

    /**
     * @var string <p>Sorting field.</p>
     */
    public $By;

    /**
     * @var string <p>Sorting method. Valid values: asc and desc.</p>
     */
    public $Order;

    /**
     * @param integer $Limit <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param array $Filters <p>Filter conditions.</p><li>ImageName - String - Required: No - Image name filter;</li><li>ScanStatus - String - Required: No - Image scan status: notScan, scanning, scanned, and scanErr</li><li>ImageID - String - Required: No - Image ID filter;</li><li>SecurityRisk - String - Required: No - Security risk: VirusCnt, RiskCnt, IsTrustImage, CriticalLevelVul, HighLevelVul, MediumLevelVul, and LowLevelVul.</li>
     * @param string $By <p>Sorting field.</p>
     * @param string $Order <p>Sorting method. Valid values: asc and desc.</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
