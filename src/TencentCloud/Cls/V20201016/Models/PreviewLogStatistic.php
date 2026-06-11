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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Preview data details
 *
 * @method string getLogContent() Obtain Log content
 * @method void setLogContent(string $LogContent) Set Log content
 * @method integer getLineNum() Obtain Line number. Starts from 0.
 * @method void setLineNum(integer $LineNum) Set Line number. Starts from 0.
 * @method string getDstTopicId() Obtain target log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setDstTopicId(string $DstTopicId) Set target log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method string getFailReason() Obtain Error message for failure. A null string "" indicates normal.
 * @method void setFailReason(string $FailReason) Set Error message for failure. A null string "" indicates normal.
 * @method string getTime() Obtain Log time, format: `2024-05-07 17:13:17.105`

-Invalid input parameter
-Valid at that time, the time format in logs
 * @method void setTime(string $Time) Set Log time, format: `2024-05-07 17:13:17.105`

-Invalid input parameter
-Valid at that time, the time format in logs
 * @method string getDstTopicName() Obtain Target topic name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstTopicName(string $DstTopicName) Set Target topic name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PreviewLogStatistic extends AbstractModel
{
    /**
     * @var string Log content
     */
    public $LogContent;

    /**
     * @var integer Line number. Starts from 0.
     */
    public $LineNum;

    /**
     * @var string target log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $DstTopicId;

    /**
     * @var string Error message for failure. A null string "" indicates normal.
     */
    public $FailReason;

    /**
     * @var string Log time, format: `2024-05-07 17:13:17.105`

-Invalid input parameter
-Valid at that time, the time format in logs
     */
    public $Time;

    /**
     * @var string Target topic name
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $DstTopicName;

    /**
     * @param string $LogContent Log content
     * @param integer $LineNum Line number. Starts from 0.
     * @param string $DstTopicId target log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param string $FailReason Error message for failure. A null string "" indicates normal.
     * @param string $Time Log time, format: `2024-05-07 17:13:17.105`

-Invalid input parameter
-Valid at that time, the time format in logs
     * @param string $DstTopicName Target topic name
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
        if (array_key_exists("LogContent",$param) and $param["LogContent"] !== null) {
            $this->LogContent = $param["LogContent"];
        }

        if (array_key_exists("LineNum",$param) and $param["LineNum"] !== null) {
            $this->LineNum = $param["LineNum"];
        }

        if (array_key_exists("DstTopicId",$param) and $param["DstTopicId"] !== null) {
            $this->DstTopicId = $param["DstTopicId"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("DstTopicName",$param) and $param["DstTopicName"] !== null) {
            $this->DstTopicName = $param["DstTopicName"];
        }
    }
}
