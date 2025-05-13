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
 * Batch execution result.
 *
 * @method integer getSuccess() Obtain Number of successes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuccess(integer $Success) Set Number of successes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFailed() Obtain Failure count.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailed(integer $Failed) Set Failure count.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotal() Obtain Total.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set Total.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BatchResultDs extends AbstractModel
{
    /**
     * @var integer Number of successes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Success;

    /**
     * @var integer Failure count.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Failed;

    /**
     * @var integer Total.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @param integer $Success Number of successes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Failed Failure count.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Total Total.
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
        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = $param["Failed"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
