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
 * DescribeComplianceAssetPolicyItemList response structure.
 *
 * @method integer getTotalCount() Obtain Total number of check items, which is `0` if the baseline check is not enabled.
 * @method void setTotalCount(integer $TotalCount) Set Total number of check items, which is `0` if the baseline check is not enabled.
 * @method array getAssetPolicyItemList() Obtain List of check items of an asset
 * @method void setAssetPolicyItemList(array $AssetPolicyItemList) Set List of check items of an asset
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeComplianceAssetPolicyItemListResponse extends AbstractModel
{
    /**
     * @var integer Total number of check items, which is `0` if the baseline check is not enabled.
     */
    public $TotalCount;

    /**
     * @var array List of check items of an asset
     */
    public $AssetPolicyItemList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of check items, which is `0` if the baseline check is not enabled.
     * @param array $AssetPolicyItemList List of check items of an asset
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AssetPolicyItemList",$param) and $param["AssetPolicyItemList"] !== null) {
            $this->AssetPolicyItemList = [];
            foreach ($param["AssetPolicyItemList"] as $key => $value){
                $obj = new ComplianceAssetPolicyItem();
                $obj->deserialize($value);
                array_push($this->AssetPolicyItemList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
