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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The output of a live scheme subtask.
 *
 * @method string getActivityType() Obtain Atomic task type.
<li>LiveRecord: live recording.</li>
<li>AiQualityControl: media quality inspection.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActivityType(string $ActivityType) Set Atomic task type.
<li>LiveRecord: live recording.</li>
<li>AiQualityControl: media quality inspection.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LiveActivityResItem getLiveActivityResItem() Obtain The task output.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLiveActivityResItem(LiveActivityResItem $LiveActivityResItem) Set The task output.
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class LiveActivityResult extends AbstractModel
{
    /**
     * @var string Atomic task type.
<li>LiveRecord: live recording.</li>
<li>AiQualityControl: media quality inspection.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActivityType;

    /**
     * @var LiveActivityResItem The task output.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LiveActivityResItem;

    /**
     * @param string $ActivityType Atomic task type.
<li>LiveRecord: live recording.</li>
<li>AiQualityControl: media quality inspection.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LiveActivityResItem $LiveActivityResItem The task output.
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ActivityType",$param) and $param["ActivityType"] !== null) {
            $this->ActivityType = $param["ActivityType"];
        }

        if (array_key_exists("LiveActivityResItem",$param) and $param["LiveActivityResItem"] !== null) {
            $this->LiveActivityResItem = new LiveActivityResItem();
            $this->LiveActivityResItem->deserialize($param["LiveActivityResItem"]);
        }
    }
}
