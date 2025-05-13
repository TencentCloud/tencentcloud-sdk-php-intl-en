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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Batch operation result return
 *
 * @method integer getSuccessCount() Obtain Number of successful batch operations
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSuccessCount(integer $SuccessCount) Set Number of successful batch operations
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getFailedCount() Obtain Number of failed batch operations
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFailedCount(integer $FailedCount) Set Number of failed batch operations
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTotalCount() Obtain Total number of batch operations
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of batch operations
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAsyncActionId() Obtain Unique id of the asynchronous operation record.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsyncActionId(string $AsyncActionId) Set Unique id of the asynchronous operation record.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BatchOperationOpsDto extends AbstractModel
{
    /**
     * @var integer Number of successful batch operations
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SuccessCount;

    /**
     * @var integer Number of failed batch operations
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FailedCount;

    /**
     * @var integer Total number of batch operations
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalCount;

    /**
     * @var string Unique id of the asynchronous operation record.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AsyncActionId;

    /**
     * @param integer $SuccessCount Number of successful batch operations
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $FailedCount Number of failed batch operations
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TotalCount Total number of batch operations
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AsyncActionId Unique id of the asynchronous operation record.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AsyncActionId",$param) and $param["AsyncActionId"] !== null) {
            $this->AsyncActionId = $param["AsyncActionId"];
        }
    }
}
