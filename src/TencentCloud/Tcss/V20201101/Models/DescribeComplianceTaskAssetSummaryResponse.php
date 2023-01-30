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
 * DescribeComplianceTaskAssetSummary response structure.
 *
 * @method string getStatus() Obtain Status

`USER_UNINIT`: Not initialized.
`USER_INITIALIZING`: Initializing.
`USER_NORMAL`: Normal.
 * @method void setStatus(string $Status) Set Status

`USER_UNINIT`: Not initialized.
`USER_INITIALIZING`: Initializing.
`USER_NORMAL`: Normal.
 * @method array getAssetSummaryList() Obtain List of aggregated information of each type of asset
 * @method void setAssetSummaryList(array $AssetSummaryList) Set List of aggregated information of each type of asset
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeComplianceTaskAssetSummaryResponse extends AbstractModel
{
    /**
     * @var string Status

`USER_UNINIT`: Not initialized.
`USER_INITIALIZING`: Initializing.
`USER_NORMAL`: Normal.
     */
    public $Status;

    /**
     * @var array List of aggregated information of each type of asset
     */
    public $AssetSummaryList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status Status

`USER_UNINIT`: Not initialized.
`USER_INITIALIZING`: Initializing.
`USER_NORMAL`: Normal.
     * @param array $AssetSummaryList List of aggregated information of each type of asset
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AssetSummaryList",$param) and $param["AssetSummaryList"] !== null) {
            $this->AssetSummaryList = [];
            foreach ($param["AssetSummaryList"] as $key => $value){
                $obj = new ComplianceAssetSummary();
                $obj->deserialize($value);
                array_push($this->AssetSummaryList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
