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
 * Supplemental Plan Tasks
 *
 * @method TaskOpsDto getTaskBaseInfo() Obtain Basic task informationNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskBaseInfo(TaskOpsDto $TaskBaseInfo) Set Basic task informationNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getInstanceCount() Obtain Supplemental instances already generated for this task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceCount(integer $InstanceCount) Set Supplemental instances already generated for this task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCompletePercent() Obtain Supplementary Task Instance Completion Percentage
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCompletePercent(integer $CompletePercent) Set Supplementary Task Instance Completion Percentage
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSuccessPercent() Obtain Supplementary Task Instance Success Percentage
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSuccessPercent(integer $SuccessPercent) Set Supplementary Task Instance Success Percentage
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getInstanceTotalCount() Obtain Estimated Total Number of Instances Generated, as generation is asynchronous, -1 indicates instances are not fully generated yet
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceTotalCount(integer $InstanceTotalCount) Set Estimated Total Number of Instances Generated, as generation is asynchronous, -1 indicates instances are not fully generated yet
Note: This field may return null, indicating that no valid value can be obtained.
 */
class MakePlanTaskOpsDto extends AbstractModel
{
    /**
     * @var TaskOpsDto Basic task informationNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskBaseInfo;

    /**
     * @var integer Supplemental instances already generated for this task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceCount;

    /**
     * @var integer Supplementary Task Instance Completion Percentage
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CompletePercent;

    /**
     * @var integer Supplementary Task Instance Success Percentage
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SuccessPercent;

    /**
     * @var integer Estimated Total Number of Instances Generated, as generation is asynchronous, -1 indicates instances are not fully generated yet
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceTotalCount;

    /**
     * @param TaskOpsDto $TaskBaseInfo Basic task informationNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $InstanceCount Supplemental instances already generated for this task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CompletePercent Supplementary Task Instance Completion Percentage
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SuccessPercent Supplementary Task Instance Success Percentage
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $InstanceTotalCount Estimated Total Number of Instances Generated, as generation is asynchronous, -1 indicates instances are not fully generated yet
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
        if (array_key_exists("TaskBaseInfo",$param) and $param["TaskBaseInfo"] !== null) {
            $this->TaskBaseInfo = new TaskOpsDto();
            $this->TaskBaseInfo->deserialize($param["TaskBaseInfo"]);
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("CompletePercent",$param) and $param["CompletePercent"] !== null) {
            $this->CompletePercent = $param["CompletePercent"];
        }

        if (array_key_exists("SuccessPercent",$param) and $param["SuccessPercent"] !== null) {
            $this->SuccessPercent = $param["SuccessPercent"];
        }

        if (array_key_exists("InstanceTotalCount",$param) and $param["InstanceTotalCount"] !== null) {
            $this->InstanceTotalCount = $param["InstanceTotalCount"];
        }
    }
}
