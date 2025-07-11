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
 * DescribeWarningHostConfig response structure.
 *
 * @method integer getHostRange() Obtain Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
 * @method void setHostRange(integer $HostRange) Set Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
 * @method array getItemLabels() Obtain List of Project or Tag Names, empty for custom hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItemLabels(array $ItemLabels) Set List of Project or Tag Names, empty for custom hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getQuuids() Obtain Machine list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuids(array $Quuids) Set Machine list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total Number of Machine Lists
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total Number of Machine Lists
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getItemLabelIds() Obtain List of Project or Tag IDs, empty for custom hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItemLabelIds(array $ItemLabelIds) Set List of Project or Tag IDs, empty for custom hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getExcludedQuuids() Obtain 
 * @method void setExcludedQuuids(array $ExcludedQuuids) Set 
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeWarningHostConfigResponse extends AbstractModel
{
    /**
     * @var integer Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
     */
    public $HostRange;

    /**
     * @var array List of Project or Tag Names, empty for custom hosts
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ItemLabels;

    /**
     * @var array Machine list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuids;

    /**
     * @var integer Total Number of Machine Lists
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array List of Project or Tag IDs, empty for custom hosts
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ItemLabelIds;

    /**
     * @var array 
     */
    public $ExcludedQuuids;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $HostRange Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
     * @param array $ItemLabels List of Project or Tag Names, empty for custom hosts
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Quuids Machine list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total Number of Machine Lists
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ItemLabelIds List of Project or Tag IDs, empty for custom hosts
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ExcludedQuuids 
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
        if (array_key_exists("HostRange",$param) and $param["HostRange"] !== null) {
            $this->HostRange = $param["HostRange"];
        }

        if (array_key_exists("ItemLabels",$param) and $param["ItemLabels"] !== null) {
            $this->ItemLabels = $param["ItemLabels"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ItemLabelIds",$param) and $param["ItemLabelIds"] !== null) {
            $this->ItemLabelIds = $param["ItemLabelIds"];
        }

        if (array_key_exists("ExcludedQuuids",$param) and $param["ExcludedQuuids"] !== null) {
            $this->ExcludedQuuids = $param["ExcludedQuuids"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
