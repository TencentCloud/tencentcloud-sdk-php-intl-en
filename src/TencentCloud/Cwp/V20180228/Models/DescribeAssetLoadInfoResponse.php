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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetLoadInfo response structure.
 *
 * @method AssetLoadSummary getCpuLoad() Obtain System load
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpuLoad(AssetLoadSummary $CpuLoad) Set System load
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AssetLoadSummary getMemLoad() Obtain Memory utilization
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemLoad(AssetLoadSummary $MemLoad) Set Memory utilization
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AssetLoadSummary getDiskLoad() Obtain Hard disk utilization
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskLoad(AssetLoadSummary $DiskLoad) Set Hard disk utilization
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAssetLoadInfoResponse extends AbstractModel
{
    /**
     * @var AssetLoadSummary System load
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CpuLoad;

    /**
     * @var AssetLoadSummary Memory utilization
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemLoad;

    /**
     * @var AssetLoadSummary Hard disk utilization
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskLoad;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param AssetLoadSummary $CpuLoad System load
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AssetLoadSummary $MemLoad Memory utilization
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AssetLoadSummary $DiskLoad Hard disk utilization
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("CpuLoad",$param) and $param["CpuLoad"] !== null) {
            $this->CpuLoad = new AssetLoadSummary();
            $this->CpuLoad->deserialize($param["CpuLoad"]);
        }

        if (array_key_exists("MemLoad",$param) and $param["MemLoad"] !== null) {
            $this->MemLoad = new AssetLoadSummary();
            $this->MemLoad->deserialize($param["MemLoad"]);
        }

        if (array_key_exists("DiskLoad",$param) and $param["DiskLoad"] !== null) {
            $this->DiskLoad = new AssetLoadSummary();
            $this->DiskLoad->deserialize($param["DiskLoad"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}