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
 * DeleteRecordingRuleYamlTask request structure.
 *
 * @method string getYamlId() Obtain <p>Task ID.</p>
 * @method void setYamlId(string $YamlId) Set <p>Task ID.</p>
 * @method string getTopicId() Obtain <p>Source metric topic id</p>
 * @method void setTopicId(string $TopicId) Set <p>Source metric topic id</p>
 */
class DeleteRecordingRuleYamlTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $YamlId;

    /**
     * @var string <p>Source metric topic id</p>
     */
    public $TopicId;

    /**
     * @param string $YamlId <p>Task ID.</p>
     * @param string $TopicId <p>Source metric topic id</p>
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
        if (array_key_exists("YamlId",$param) and $param["YamlId"] !== null) {
            $this->YamlId = $param["YamlId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
