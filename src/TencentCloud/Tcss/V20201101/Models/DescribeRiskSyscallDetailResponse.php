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
 * DescribeRiskSyscallDetail response structure.
 *
 * @method RunTimeEventBaseInfo getEventBaseInfo() Obtain Basic information of the event
 * @method void setEventBaseInfo(RunTimeEventBaseInfo $EventBaseInfo) Set Basic information of the event
 * @method ProcessDetailInfo getProcessInfo() Obtain Process information
 * @method void setProcessInfo(ProcessDetailInfo $ProcessInfo) Set Process information
 * @method ProcessDetailBaseInfo getParentProcessInfo() Obtain Parent process information
 * @method void setParentProcessInfo(ProcessDetailBaseInfo $ParentProcessInfo) Set Parent process information
 * @method RiskSyscallEventDescription getEventDetail() Obtain Event description
 * @method void setEventDetail(RiskSyscallEventDescription $EventDetail) Set Event description
 * @method ProcessBaseInfo getAncestorProcessInfo() Obtain Ancestor process information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAncestorProcessInfo(ProcessBaseInfo $AncestorProcessInfo) Set Ancestor process information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRiskSyscallDetailResponse extends AbstractModel
{
    /**
     * @var RunTimeEventBaseInfo Basic information of the event
     */
    public $EventBaseInfo;

    /**
     * @var ProcessDetailInfo Process information
     */
    public $ProcessInfo;

    /**
     * @var ProcessDetailBaseInfo Parent process information
     */
    public $ParentProcessInfo;

    /**
     * @var RiskSyscallEventDescription Event description
     */
    public $EventDetail;

    /**
     * @var ProcessBaseInfo Ancestor process information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AncestorProcessInfo;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param RunTimeEventBaseInfo $EventBaseInfo Basic information of the event
     * @param ProcessDetailInfo $ProcessInfo Process information
     * @param ProcessDetailBaseInfo $ParentProcessInfo Parent process information
     * @param RiskSyscallEventDescription $EventDetail Event description
     * @param ProcessBaseInfo $AncestorProcessInfo Ancestor process information
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EventBaseInfo",$param) and $param["EventBaseInfo"] !== null) {
            $this->EventBaseInfo = new RunTimeEventBaseInfo();
            $this->EventBaseInfo->deserialize($param["EventBaseInfo"]);
        }

        if (array_key_exists("ProcessInfo",$param) and $param["ProcessInfo"] !== null) {
            $this->ProcessInfo = new ProcessDetailInfo();
            $this->ProcessInfo->deserialize($param["ProcessInfo"]);
        }

        if (array_key_exists("ParentProcessInfo",$param) and $param["ParentProcessInfo"] !== null) {
            $this->ParentProcessInfo = new ProcessDetailBaseInfo();
            $this->ParentProcessInfo->deserialize($param["ParentProcessInfo"]);
        }

        if (array_key_exists("EventDetail",$param) and $param["EventDetail"] !== null) {
            $this->EventDetail = new RiskSyscallEventDescription();
            $this->EventDetail->deserialize($param["EventDetail"]);
        }

        if (array_key_exists("AncestorProcessInfo",$param) and $param["AncestorProcessInfo"] !== null) {
            $this->AncestorProcessInfo = new ProcessBaseInfo();
            $this->AncestorProcessInfo->deserialize($param["AncestorProcessInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
