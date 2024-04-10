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
 * Multiple log topic search for topic information
 *
 * @method string getTopicId() Obtain Log Topic ID
 * @method void setTopicId(string $TopicId) Set Log Topic ID
 * @method integer getPeriod() Obtain Log storage lifetime
 * @method void setPeriod(integer $Period) Set Log storage lifetime
 * @method string getContext() Obtain You can pass through the Context value returned by this API to continue to get more logs. Expire time: 1 hour.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContext(string $Context) Set You can pass through the Context value returned by this API to continue to get more logs. Expire time: 1 hour.Note: This field may return null, indicating that no valid values can be obtained.
 */
class SearchLogInfos extends AbstractModel
{
    /**
     * @var string Log Topic ID
     */
    public $TopicId;

    /**
     * @var integer Log storage lifetime
     */
    public $Period;

    /**
     * @var string You can pass through the Context value returned by this API to continue to get more logs. Expire time: 1 hour.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Context;

    /**
     * @param string $TopicId Log Topic ID
     * @param integer $Period Log storage lifetime
     * @param string $Context You can pass through the Context value returned by this API to continue to get more logs. Expire time: 1 hour.Note: This field may return null, indicating that no valid values can be obtained.
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
