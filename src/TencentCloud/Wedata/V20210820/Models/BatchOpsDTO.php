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
 * Batch Operation Result, with Failure Reason
 *
 * @method integer getTotalCount() Obtain Total Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSuccessCount() Obtain Success count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSuccessCount(integer $SuccessCount) Set Success count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getFailCount() Obtain Failure count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFailCount(integer $FailCount) Set Failure count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getFailMessageList() Obtain Failure reason
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFailMessageList(array $FailMessageList) Set Failure reason
Note: This field may return null, indicating that no valid value can be obtained.
 */
class BatchOpsDTO extends AbstractModel
{
    /**
     * @var integer Total Quantity
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer Success count
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SuccessCount;

    /**
     * @var integer Failure count
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FailCount;

    /**
     * @var array Failure reason
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FailMessageList;

    /**
     * @param integer $TotalCount Total Quantity
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SuccessCount Success count
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $FailCount Failure count
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $FailMessageList Failure reason
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("FailMessageList",$param) and $param["FailMessageList"] !== null) {
            $this->FailMessageList = [];
            foreach ($param["FailMessageList"] as $key => $value){
                $obj = new FailMessage();
                $obj->deserialize($value);
                array_push($this->FailMessageList, $obj);
            }
        }
    }
}
