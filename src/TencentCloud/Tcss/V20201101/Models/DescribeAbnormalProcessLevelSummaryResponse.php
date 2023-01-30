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
 * DescribeAbnormalProcessLevelSummary response structure.
 *
 * @method integer getHighLevelEventCount() Obtain Number of pending high-risk events of abnormal processes
 * @method void setHighLevelEventCount(integer $HighLevelEventCount) Set Number of pending high-risk events of abnormal processes
 * @method integer getMediumLevelEventCount() Obtain Number of pending medium-risk events of abnormal processes
 * @method void setMediumLevelEventCount(integer $MediumLevelEventCount) Set Number of pending medium-risk events of abnormal processes
 * @method integer getLowLevelEventCount() Obtain Number of pending low-risk events of abnormal processes
 * @method void setLowLevelEventCount(integer $LowLevelEventCount) Set Number of pending low-risk events of abnormal processes
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAbnormalProcessLevelSummaryResponse extends AbstractModel
{
    /**
     * @var integer Number of pending high-risk events of abnormal processes
     */
    public $HighLevelEventCount;

    /**
     * @var integer Number of pending medium-risk events of abnormal processes
     */
    public $MediumLevelEventCount;

    /**
     * @var integer Number of pending low-risk events of abnormal processes
     */
    public $LowLevelEventCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $HighLevelEventCount Number of pending high-risk events of abnormal processes
     * @param integer $MediumLevelEventCount Number of pending medium-risk events of abnormal processes
     * @param integer $LowLevelEventCount Number of pending low-risk events of abnormal processes
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
        if (array_key_exists("HighLevelEventCount",$param) and $param["HighLevelEventCount"] !== null) {
            $this->HighLevelEventCount = $param["HighLevelEventCount"];
        }

        if (array_key_exists("MediumLevelEventCount",$param) and $param["MediumLevelEventCount"] !== null) {
            $this->MediumLevelEventCount = $param["MediumLevelEventCount"];
        }

        if (array_key_exists("LowLevelEventCount",$param) and $param["LowLevelEventCount"] !== null) {
            $this->LowLevelEventCount = $param["LowLevelEventCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
