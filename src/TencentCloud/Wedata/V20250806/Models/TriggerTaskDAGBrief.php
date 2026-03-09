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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow task summary information.
 *
 * @method array getTriggerTasks() Obtain Task information collection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerTasks(array $TriggerTasks) Set Task information collection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTriggerTaskLinks() Obtain Task connection information collection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerTaskLinks(array $TriggerTaskLinks) Set Task connection information collection.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TriggerTaskDAGBrief extends AbstractModel
{
    /**
     * @var array Task information collection.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerTasks;

    /**
     * @var array Task connection information collection.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerTaskLinks;

    /**
     * @param array $TriggerTasks Task information collection.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TriggerTaskLinks Task connection information collection.
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
        if (array_key_exists("TriggerTasks",$param) and $param["TriggerTasks"] !== null) {
            $this->TriggerTasks = [];
            foreach ($param["TriggerTasks"] as $key => $value){
                $obj = new TriggerTaskBrief();
                $obj->deserialize($value);
                array_push($this->TriggerTasks, $obj);
            }
        }

        if (array_key_exists("TriggerTaskLinks",$param) and $param["TriggerTaskLinks"] !== null) {
            $this->TriggerTaskLinks = [];
            foreach ($param["TriggerTaskLinks"] as $key => $value){
                $obj = new TriggerTaskLinkBrief();
                $obj->deserialize($value);
                array_push($this->TriggerTaskLinks, $obj);
            }
        }
    }
}
