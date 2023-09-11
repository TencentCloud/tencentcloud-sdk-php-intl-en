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
 * Result of an async task for querying associated cloud resources
 *
 * @method string getTaskId() Obtain The task ID.
 * @method void setTaskId(string $TaskId) Set The task ID.
 * @method array getBindResourceResult() Obtain The associated cloud resources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBindResourceResult(array $BindResourceResult) Set The associated cloud resources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain The status of the async task. Valid values: `0` for querying, `1` for successful, and `2` for abnormal. If the status is `1`, the result of `BindResourceResult` will be displayed; if the status is `2`, the error causes will be displayed.
 * @method void setStatus(integer $Status) Set The status of the async task. Valid values: `0` for querying, `1` for successful, and `2` for abnormal. If the status is `1`, the result of `BindResourceResult` will be displayed; if the status is `2`, the error causes will be displayed.
 * @method Error getError() Obtain The error occurred when querying the associated cloud resources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setError(Error $Error) Set The error occurred when querying the associated cloud resources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCacheTime() Obtain The cache time of the current result.
 * @method void setCacheTime(string $CacheTime) Set The cache time of the current result.
 */
class SyncTaskBindResourceResult extends AbstractModel
{
    /**
     * @var string The task ID.
     */
    public $TaskId;

    /**
     * @var array The associated cloud resources.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BindResourceResult;

    /**
     * @var integer The status of the async task. Valid values: `0` for querying, `1` for successful, and `2` for abnormal. If the status is `1`, the result of `BindResourceResult` will be displayed; if the status is `2`, the error causes will be displayed.
     */
    public $Status;

    /**
     * @var Error The error occurred when querying the associated cloud resources.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Error;

    /**
     * @var string The cache time of the current result.
     */
    public $CacheTime;

    /**
     * @param string $TaskId The task ID.
     * @param array $BindResourceResult The associated cloud resources.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status The status of the async task. Valid values: `0` for querying, `1` for successful, and `2` for abnormal. If the status is `1`, the result of `BindResourceResult` will be displayed; if the status is `2`, the error causes will be displayed.
     * @param Error $Error The error occurred when querying the associated cloud resources.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CacheTime The cache time of the current result.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("BindResourceResult",$param) and $param["BindResourceResult"] !== null) {
            $this->BindResourceResult = [];
            foreach ($param["BindResourceResult"] as $key => $value){
                $obj = new BindResourceResult();
                $obj->deserialize($value);
                array_push($this->BindResourceResult, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new Error();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }
    }
}
