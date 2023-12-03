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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostUpdateRecordDetail response structure.
 *
 * @method integer getTotalCount() Obtain Total count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getRecordDetailList() Obtain Certificate deployment record list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRecordDetailList(array $RecordDetailList) Set Certificate deployment record list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSuccessTotalCount() Obtain Total successful deployments
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSuccessTotalCount(integer $SuccessTotalCount) Set Total successful deployments
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getFailedTotalCount() Obtain Total failed deployments
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFailedTotalCount(integer $FailedTotalCount) Set Total failed deployments
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRunningTotalCount() Obtain Total running deployments
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRunningTotalCount(integer $RunningTotalCount) Set Total running deployments
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeHostUpdateRecordDetailResponse extends AbstractModel
{
    /**
     * @var integer Total count
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalCount;

    /**
     * @var array Certificate deployment record list
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RecordDetailList;

    /**
     * @var integer Total successful deployments
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SuccessTotalCount;

    /**
     * @var integer Total failed deployments
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FailedTotalCount;

    /**
     * @var integer Total running deployments
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RunningTotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total count
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $RecordDetailList Certificate deployment record list
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SuccessTotalCount Total successful deployments
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $FailedTotalCount Total failed deployments
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RunningTotalCount Total running deployments
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("RecordDetailList",$param) and $param["RecordDetailList"] !== null) {
            $this->RecordDetailList = [];
            foreach ($param["RecordDetailList"] as $key => $value){
                $obj = new UpdateRecordDetails();
                $obj->deserialize($value);
                array_push($this->RecordDetailList, $obj);
            }
        }

        if (array_key_exists("SuccessTotalCount",$param) and $param["SuccessTotalCount"] !== null) {
            $this->SuccessTotalCount = $param["SuccessTotalCount"];
        }

        if (array_key_exists("FailedTotalCount",$param) and $param["FailedTotalCount"] !== null) {
            $this->FailedTotalCount = $param["FailedTotalCount"];
        }

        if (array_key_exists("RunningTotalCount",$param) and $param["RunningTotalCount"] !== null) {
            $this->RunningTotalCount = $param["RunningTotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
