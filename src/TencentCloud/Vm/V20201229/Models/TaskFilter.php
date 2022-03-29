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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task filter
 *
 * @method array getBizType() Obtain This field is used to pass in the business type of a task as a filter. `Biztype` is the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. Different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API. `Biztype` can contain 3–32 digits, letters, and underscores.<br>Note: when this parameter is not passed in, tasks will not be filtered by business type by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBizType(array $BizType) Set This field is used to pass in the business type of a task as a filter. `Biztype` is the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. Different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API. `Biztype` can contain 3–32 digits, letters, and underscores.<br>Note: when this parameter is not passed in, tasks will not be filtered by business type by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain This field is used to pass in the type of a video moderation task as a filter. Valid values: **VIDEO** (video on demand moderation), **AUDIO** (audio on demand moderation), **LIVE_VIDEO** (video live streaming moderation), **LIVE_AUDIO** (audio live streaming moderation).<br>Note: when this parameter is not passed in, tasks will not be filtered by task type by default.
 * @method void setType(string $Type) Set This field is used to pass in the type of a video moderation task as a filter. Valid values: **VIDEO** (video on demand moderation), **AUDIO** (audio on demand moderation), **LIVE_VIDEO** (video live streaming moderation), **LIVE_AUDIO** (audio live streaming moderation).<br>Note: when this parameter is not passed in, tasks will not be filtered by task type by default.
 * @method string getSuggestion() Obtain This field is used to pass in the operation suggestion of a video moderation task as a filter. Valid values: **Block**, **Review**, **Pass**.<br>Note: when this parameter is not passed in, tasks will not be filtered by operation suggestion by default.
 * @method void setSuggestion(string $Suggestion) Set This field is used to pass in the operation suggestion of a video moderation task as a filter. Valid values: **Block**, **Review**, **Pass**.<br>Note: when this parameter is not passed in, tasks will not be filtered by operation suggestion by default.
 * @method string getTaskStatus() Obtain This field is used to pass in the status of a moderation task as a filter. Valid values: **FINISH** (task completed), **PENDING** (task pending), **RUNNING** (task in progress), **ERROR** (task error), **CANCELLED** (task canceled).<br>Note: when this parameter is not passed in, tasks will not be filtered by task status by default.
 * @method void setTaskStatus(string $TaskStatus) Set This field is used to pass in the status of a moderation task as a filter. Valid values: **FINISH** (task completed), **PENDING** (task pending), **RUNNING** (task in progress), **ERROR** (task error), **CANCELLED** (task canceled).<br>Note: when this parameter is not passed in, tasks will not be filtered by task status by default.
 */
class TaskFilter extends AbstractModel
{
    /**
     * @var array This field is used to pass in the business type of a task as a filter. `Biztype` is the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. Different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API. `Biztype` can contain 3–32 digits, letters, and underscores.<br>Note: when this parameter is not passed in, tasks will not be filtered by business type by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BizType;

    /**
     * @var string This field is used to pass in the type of a video moderation task as a filter. Valid values: **VIDEO** (video on demand moderation), **AUDIO** (audio on demand moderation), **LIVE_VIDEO** (video live streaming moderation), **LIVE_AUDIO** (audio live streaming moderation).<br>Note: when this parameter is not passed in, tasks will not be filtered by task type by default.
     */
    public $Type;

    /**
     * @var string This field is used to pass in the operation suggestion of a video moderation task as a filter. Valid values: **Block**, **Review**, **Pass**.<br>Note: when this parameter is not passed in, tasks will not be filtered by operation suggestion by default.
     */
    public $Suggestion;

    /**
     * @var string This field is used to pass in the status of a moderation task as a filter. Valid values: **FINISH** (task completed), **PENDING** (task pending), **RUNNING** (task in progress), **ERROR** (task error), **CANCELLED** (task canceled).<br>Note: when this parameter is not passed in, tasks will not be filtered by task status by default.
     */
    public $TaskStatus;

    /**
     * @param array $BizType This field is used to pass in the business type of a task as a filter. `Biztype` is the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. Different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API. `Biztype` can contain 3–32 digits, letters, and underscores.<br>Note: when this parameter is not passed in, tasks will not be filtered by business type by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Type This field is used to pass in the type of a video moderation task as a filter. Valid values: **VIDEO** (video on demand moderation), **AUDIO** (audio on demand moderation), **LIVE_VIDEO** (video live streaming moderation), **LIVE_AUDIO** (audio live streaming moderation).<br>Note: when this parameter is not passed in, tasks will not be filtered by task type by default.
     * @param string $Suggestion This field is used to pass in the operation suggestion of a video moderation task as a filter. Valid values: **Block**, **Review**, **Pass**.<br>Note: when this parameter is not passed in, tasks will not be filtered by operation suggestion by default.
     * @param string $TaskStatus This field is used to pass in the status of a moderation task as a filter. Valid values: **FINISH** (task completed), **PENDING** (task pending), **RUNNING** (task in progress), **ERROR** (task error), **CANCELLED** (task canceled).<br>Note: when this parameter is not passed in, tasks will not be filtered by task status by default.
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }
    }
}
