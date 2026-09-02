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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Protection configuration details
 *
 * @method array getConfigItems() Obtain Enablement status of each configuration item
 * @method void setConfigItems(array $ConfigItems) Set Enablement status of each configuration item
 * @method integer getEligibleAssetCount() Obtain Number of assets to protect
 * @method void setEligibleAssetCount(integer $EligibleAssetCount) Set Number of assets to protect
 * @method integer getProtectedAssetCount() Obtain Number of protected assets
 * @method void setProtectedAssetCount(integer $ProtectedAssetCount) Set Number of protected assets
 * @method integer getCoveragePercent() Obtain Coverage percentage.
Value range: [0, 100].
 * @method void setCoveragePercent(integer $CoveragePercent) Set Coverage percentage.
Value range: [0, 100].
 * @method array getExpiringProducts() Obtain List of products about to expire
 * @method void setExpiringProducts(array $ExpiringProducts) Set List of products about to expire
 */
class ProtectionDetail extends AbstractModel
{
    /**
     * @var array Enablement status of each configuration item
     */
    public $ConfigItems;

    /**
     * @var integer Number of assets to protect
     */
    public $EligibleAssetCount;

    /**
     * @var integer Number of protected assets
     */
    public $ProtectedAssetCount;

    /**
     * @var integer Coverage percentage.
Value range: [0, 100].
     */
    public $CoveragePercent;

    /**
     * @var array List of products about to expire
     */
    public $ExpiringProducts;

    /**
     * @param array $ConfigItems Enablement status of each configuration item
     * @param integer $EligibleAssetCount Number of assets to protect
     * @param integer $ProtectedAssetCount Number of protected assets
     * @param integer $CoveragePercent Coverage percentage.
Value range: [0, 100].
     * @param array $ExpiringProducts List of products about to expire
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
        if (array_key_exists("ConfigItems",$param) and $param["ConfigItems"] !== null) {
            $this->ConfigItems = [];
            foreach ($param["ConfigItems"] as $key => $value){
                $obj = new ProtectionConfigItem();
                $obj->deserialize($value);
                array_push($this->ConfigItems, $obj);
            }
        }

        if (array_key_exists("EligibleAssetCount",$param) and $param["EligibleAssetCount"] !== null) {
            $this->EligibleAssetCount = $param["EligibleAssetCount"];
        }

        if (array_key_exists("ProtectedAssetCount",$param) and $param["ProtectedAssetCount"] !== null) {
            $this->ProtectedAssetCount = $param["ProtectedAssetCount"];
        }

        if (array_key_exists("CoveragePercent",$param) and $param["CoveragePercent"] !== null) {
            $this->CoveragePercent = $param["CoveragePercent"];
        }

        if (array_key_exists("ExpiringProducts",$param) and $param["ExpiringProducts"] !== null) {
            $this->ExpiringProducts = [];
            foreach ($param["ExpiringProducts"] as $key => $value){
                $obj = new ExpiringProduct();
                $obj->deserialize($value);
                array_push($this->ExpiringProducts, $obj);
            }
        }
    }
}
