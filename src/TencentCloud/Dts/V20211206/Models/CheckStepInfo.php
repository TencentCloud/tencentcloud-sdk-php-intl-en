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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Check task running details
 *
 * @method string getStartAt() Obtain Task start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartAt(string $StartAt) Set Task start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndAt() Obtain Task end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndAt(string $EndAt) Set Task end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ProcessProgress getProgress() Obtain Task step information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProgress(ProcessProgress $Progress) Set Task step information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CheckStepInfo extends AbstractModel
{
    /**
     * @var string Task start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartAt;

    /**
     * @var string Task end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndAt;

    /**
     * @var ProcessProgress Task step information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @param string $StartAt Task start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndAt Task end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ProcessProgress $Progress Task step information
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
        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("EndAt",$param) and $param["EndAt"] !== null) {
            $this->EndAt = $param["EndAt"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = new ProcessProgress();
            $this->Progress->deserialize($param["Progress"]);
        }
    }
}
