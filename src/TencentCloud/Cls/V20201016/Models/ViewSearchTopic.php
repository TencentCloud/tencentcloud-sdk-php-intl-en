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
 * Query view topic configuration
 *
 * @method string getRegion() Obtain <p>Region of the logset and topic</p><p>Parameter format: ap-guangzhou</p><p>In the same query view, each topic must be in the same region.</p>
 * @method void setRegion(string $Region) Set <p>Region of the logset and topic</p><p>Parameter format: ap-guangzhou</p><p>In the same query view, each topic must be in the same region.</p>
 * @method string getLogsetId() Obtain <p>Log set id</p>
 * @method void setLogsetId(string $LogsetId) Set <p>Log set id</p>
 * @method string getTopicId() Obtain <p>Log topic id</p>
 * @method void setTopicId(string $TopicId) Set <p>Log topic id</p>
 */
class ViewSearchTopic extends AbstractModel
{
    /**
     * @var string <p>Region of the logset and topic</p><p>Parameter format: ap-guangzhou</p><p>In the same query view, each topic must be in the same region.</p>
     */
    public $Region;

    /**
     * @var string <p>Log set id</p>
     */
    public $LogsetId;

    /**
     * @var string <p>Log topic id</p>
     */
    public $TopicId;

    /**
     * @param string $Region <p>Region of the logset and topic</p><p>Parameter format: ap-guangzhou</p><p>In the same query view, each topic must be in the same region.</p>
     * @param string $LogsetId <p>Log set id</p>
     * @param string $TopicId <p>Log topic id</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
