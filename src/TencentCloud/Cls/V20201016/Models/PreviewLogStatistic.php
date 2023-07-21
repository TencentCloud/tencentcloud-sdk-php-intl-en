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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Preview data details
 *
 * @method string getLogContent() Obtain Log content
 * @method void setLogContent(string $LogContent) Set Log content
 * @method integer getLineNum() Obtain Line number
 * @method void setLineNum(integer $LineNum) Set Line number
 * @method string getDstTopicId() Obtain Target log topic
 * @method void setDstTopicId(string $DstTopicId) Set Target log topic
 * @method string getFailReason() Obtain Error code. An empty string "" indicates no error.
 * @method void setFailReason(string $FailReason) Set Error code. An empty string "" indicates no error.
 * @method string getTime() Obtain Log timestamp
 * @method void setTime(string $Time) Set Log timestamp
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
     * @var integer Line number
     */
    public $LineNum;

    /**
     * @var string Target log topic
     */
    public $DstTopicId;

    /**
     * @var string Error code. An empty string "" indicates no error.
     */
    public $FailReason;

    /**
     * @var string Log timestamp
     */
    public $Time;

    /**
     * @var string Target topic name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstTopicName;

    /**
     * @param string $LogContent Log content
     * @param integer $LineNum Line number
     * @param string $DstTopicId Target log topic
     * @param string $FailReason Error code. An empty string "" indicates no error.
     * @param string $Time Log timestamp
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
