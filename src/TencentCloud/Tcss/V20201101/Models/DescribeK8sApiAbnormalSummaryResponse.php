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
 * DescribeK8sApiAbnormalSummary response structure.
 *
 * @method integer getUnhandleEventCount() Obtain The number of pending events
 * @method void setUnhandleEventCount(integer $UnhandleEventCount) Set The number of pending events
 * @method integer getUnhandleHighLevelEventCount() Obtain The number of pending high-risk events
 * @method void setUnhandleHighLevelEventCount(integer $UnhandleHighLevelEventCount) Set The number of pending high-risk events
 * @method integer getUnhandleMediumLevelEventCount() Obtain The number of pending medium-risk events
 * @method void setUnhandleMediumLevelEventCount(integer $UnhandleMediumLevelEventCount) Set The number of pending medium-risk events
 * @method integer getUnhandleLowLevelEventCount() Obtain The number of pending low-risk events
 * @method void setUnhandleLowLevelEventCount(integer $UnhandleLowLevelEventCount) Set The number of pending low-risk events
 * @method integer getUnhandleNoticeLevelEventCount() Obtain The number of pending notice-level events
 * @method void setUnhandleNoticeLevelEventCount(integer $UnhandleNoticeLevelEventCount) Set The number of pending notice-level events
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeK8sApiAbnormalSummaryResponse extends AbstractModel
{
    /**
     * @var integer The number of pending events
     */
    public $UnhandleEventCount;

    /**
     * @var integer The number of pending high-risk events
     */
    public $UnhandleHighLevelEventCount;

    /**
     * @var integer The number of pending medium-risk events
     */
    public $UnhandleMediumLevelEventCount;

    /**
     * @var integer The number of pending low-risk events
     */
    public $UnhandleLowLevelEventCount;

    /**
     * @var integer The number of pending notice-level events
     */
    public $UnhandleNoticeLevelEventCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $UnhandleEventCount The number of pending events
     * @param integer $UnhandleHighLevelEventCount The number of pending high-risk events
     * @param integer $UnhandleMediumLevelEventCount The number of pending medium-risk events
     * @param integer $UnhandleLowLevelEventCount The number of pending low-risk events
     * @param integer $UnhandleNoticeLevelEventCount The number of pending notice-level events
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
        if (array_key_exists("UnhandleEventCount",$param) and $param["UnhandleEventCount"] !== null) {
            $this->UnhandleEventCount = $param["UnhandleEventCount"];
        }

        if (array_key_exists("UnhandleHighLevelEventCount",$param) and $param["UnhandleHighLevelEventCount"] !== null) {
            $this->UnhandleHighLevelEventCount = $param["UnhandleHighLevelEventCount"];
        }

        if (array_key_exists("UnhandleMediumLevelEventCount",$param) and $param["UnhandleMediumLevelEventCount"] !== null) {
            $this->UnhandleMediumLevelEventCount = $param["UnhandleMediumLevelEventCount"];
        }

        if (array_key_exists("UnhandleLowLevelEventCount",$param) and $param["UnhandleLowLevelEventCount"] !== null) {
            $this->UnhandleLowLevelEventCount = $param["UnhandleLowLevelEventCount"];
        }

        if (array_key_exists("UnhandleNoticeLevelEventCount",$param) and $param["UnhandleNoticeLevelEventCount"] !== null) {
            $this->UnhandleNoticeLevelEventCount = $param["UnhandleNoticeLevelEventCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
