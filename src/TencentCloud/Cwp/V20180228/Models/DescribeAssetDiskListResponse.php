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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetDiskList response structure.
 *
 * @method array getDisks() Obtain Disk partition list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisks(array $Disks) Set Disk partition list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotal() Obtain Total number of partitions
 * @method void setTotal(integer $Total) Set Total number of partitions
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAssetDiskListResponse extends AbstractModel
{
    /**
     * @var array Disk partition list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Disks;

    /**
     * @var integer Total number of partitions
     */
    public $Total;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Disks Disk partition list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Total Total number of partitions
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
        if (array_key_exists("Disks",$param) and $param["Disks"] !== null) {
            $this->Disks = [];
            foreach ($param["Disks"] as $key => $value){
                $obj = new AssetDiskPartitionInfo();
                $obj->deserialize($value);
                array_push($this->Disks, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
