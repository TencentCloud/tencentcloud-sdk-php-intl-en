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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail request structure.
 *
 * @method string getTaskId() Obtain This field indicates the task ID (in the `Results` parameter) returned after an audio moderation task is created. It is used to identify the moderation task for which to query the details.
<br>Note: the query API can query up to **20 tasks at a time**.
 * @method void setTaskId(string $TaskId) Set This field indicates the task ID (in the `Results` parameter) returned after an audio moderation task is created. It is used to identify the moderation task for which to query the details.
<br>Note: the query API can query up to **20 tasks at a time**.
 * @method boolean getShowAllSegments() Obtain This boolean field indicates whether to display all audio segments. Valid values: True (yes), False (display only audio segments that hit the moderation rule). Default value: False.
 * @method void setShowAllSegments(boolean $ShowAllSegments) Set This boolean field indicates whether to display all audio segments. Valid values: True (yes), False (display only audio segments that hit the moderation rule). Default value: False.
 */
class DescribeTaskDetailRequest extends AbstractModel
{
    /**
     * @var string This field indicates the task ID (in the `Results` parameter) returned after an audio moderation task is created. It is used to identify the moderation task for which to query the details.
<br>Note: the query API can query up to **20 tasks at a time**.
     */
    public $TaskId;

    /**
     * @var boolean This boolean field indicates whether to display all audio segments. Valid values: True (yes), False (display only audio segments that hit the moderation rule). Default value: False.
     */
    public $ShowAllSegments;

    /**
     * @param string $TaskId This field indicates the task ID (in the `Results` parameter) returned after an audio moderation task is created. It is used to identify the moderation task for which to query the details.
<br>Note: the query API can query up to **20 tasks at a time**.
     * @param boolean $ShowAllSegments This boolean field indicates whether to display all audio segments. Valid values: True (yes), False (display only audio segments that hit the moderation rule). Default value: False.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ShowAllSegments",$param) and $param["ShowAllSegments"] !== null) {
            $this->ShowAllSegments = $param["ShowAllSegments"];
        }
    }
}
