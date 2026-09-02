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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log retrieval information
 *
 * @method string getTopicId() Obtain <p>Topic</p>
 * @method void setTopicId(string $TopicId) Set <p>Topic</p>
 * @method integer getPeriod() Obtain <p>Time interval</p>
 * @method void setPeriod(integer $Period) Set <p>Time interval</p>
 * @method string getContext() Obtain <p>context</p>
 * @method void setContext(string $Context) Set <p>context</p>
 */
class LogSearchInfos extends AbstractModel
{
    /**
     * @var string <p>Topic</p>
     */
    public $TopicId;

    /**
     * @var integer <p>Time interval</p>
     */
    public $Period;

    /**
     * @var string <p>context</p>
     */
    public $Context;

    /**
     * @param string $TopicId <p>Topic</p>
     * @param integer $Period <p>Time interval</p>
     * @param string $Context <p>context</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
