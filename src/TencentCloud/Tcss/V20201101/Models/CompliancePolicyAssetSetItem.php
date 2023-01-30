<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * List of check item IDs and asset IDs
 *
 * @method integer getCustomerPolicyItemId() Obtain Check item ID
 * @method void setCustomerPolicyItemId(integer $CustomerPolicyItemId) Set Check item ID
 * @method array getCustomerAssetItemIdSet() Obtain List of IDs of assets to be ignored in the specified check item. If it is empty, it indicates all.
 * @method void setCustomerAssetItemIdSet(array $CustomerAssetItemIdSet) Set List of IDs of assets to be ignored in the specified check item. If it is empty, it indicates all.
 */
class CompliancePolicyAssetSetItem extends AbstractModel
{
    /**
     * @var integer Check item ID
     */
    public $CustomerPolicyItemId;

    /**
     * @var array List of IDs of assets to be ignored in the specified check item. If it is empty, it indicates all.
     */
    public $CustomerAssetItemIdSet;

    /**
     * @param integer $CustomerPolicyItemId Check item ID
     * @param array $CustomerAssetItemIdSet List of IDs of assets to be ignored in the specified check item. If it is empty, it indicates all.
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

        if (array_key_exists("CustomerAssetItemIdSet",$param) and $param["CustomerAssetItemIdSet"] !== null) {
            $this->CustomerAssetItemIdSet = $param["CustomerAssetItemIdSet"];
        }
    }
}
