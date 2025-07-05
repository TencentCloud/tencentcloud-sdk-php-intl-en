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
 * ScanComplianceAssetsByPolicyItem request structure.
 *
 * @method integer getCustomerPolicyItemId() Obtain ID of the specified check item
 * @method void setCustomerPolicyItemId(integer $CustomerPolicyItemId) Set ID of the specified check item
 * @method array getCustomerAssetIdSet() Obtain List of IDs of customer assets to be scanned again
 * @method void setCustomerAssetIdSet(array $CustomerAssetIdSet) Set List of IDs of customer assets to be scanned again
 */
class ScanComplianceAssetsByPolicyItemRequest extends AbstractModel
{
    /**
     * @var integer ID of the specified check item
     */
    public $CustomerPolicyItemId;

    /**
     * @var array List of IDs of customer assets to be scanned again
     */
    public $CustomerAssetIdSet;

    /**
     * @param integer $CustomerPolicyItemId ID of the specified check item
     * @param array $CustomerAssetIdSet List of IDs of customer assets to be scanned again
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
        if (array_key_exists("CustomerPolicyItemId",$param) and $param["CustomerPolicyItemId"] !== null) {
            $this->CustomerPolicyItemId = $param["CustomerPolicyItemId"];
        }

        if (array_key_exists("CustomerAssetIdSet",$param) and $param["CustomerAssetIdSet"] !== null) {
            $this->CustomerAssetIdSet = $param["CustomerAssetIdSet"];
        }
    }
}
