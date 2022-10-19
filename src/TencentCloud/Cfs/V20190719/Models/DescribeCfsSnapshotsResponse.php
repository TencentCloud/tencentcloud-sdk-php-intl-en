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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfsSnapshots response structure.
 *
 * @method integer getTotalCount() Obtain Total number
 * @method void setTotalCount(integer $TotalCount) Set Total number
 * @method array getSnapshots() Obtain Snapshot information description
 * @method void setSnapshots(array $Snapshots) Set Snapshot information description
 * @method integer getTotalSize() Obtain Total size of snapshots
 * @method void setTotalSize(integer $TotalSize) Set Total size of snapshots
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCfsSnapshotsResponse extends AbstractModel
{
    /**
     * @var integer Total number
     */
    public $TotalCount;

    /**
     * @var array Snapshot information description
     */
    public $Snapshots;

    /**
     * @var integer Total size of snapshots
     */
    public $TotalSize;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number
     * @param array $Snapshots Snapshot information description
     * @param integer $TotalSize Total size of snapshots
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

        if (array_key_exists("Snapshots",$param) and $param["Snapshots"] !== null) {
            $this->Snapshots = [];
            foreach ($param["Snapshots"] as $key => $value){
                $obj = new SnapshotInfo();
                $obj->deserialize($value);
                array_push($this->Snapshots, $obj);
            }
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
