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
 * DescribeComplianceScanFailedAssetList response structure.
 *
 * @method integer getTotalCount() Obtain Total number of assets that failed the check
 * @method void setTotalCount(integer $TotalCount) Set Total number of assets that failed the check
 * @method array getScanFailedAssetList() Obtain List of aggregated information of each type of asset that failed the check
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanFailedAssetList(array $ScanFailedAssetList) Set List of aggregated information of each type of asset that failed the check
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeComplianceScanFailedAssetListResponse extends AbstractModel
{
    /**
     * @var integer Total number of assets that failed the check
     */
    public $TotalCount;

    /**
     * @var array List of aggregated information of each type of asset that failed the check
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanFailedAssetList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of assets that failed the check
     * @param array $ScanFailedAssetList List of aggregated information of each type of asset that failed the check
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ScanFailedAssetList",$param) and $param["ScanFailedAssetList"] !== null) {
            $this->ScanFailedAssetList = [];
            foreach ($param["ScanFailedAssetList"] as $key => $value){
                $obj = new ComplianceScanFailedAsset();
                $obj->deserialize($value);
                array_push($this->ScanFailedAssetList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
