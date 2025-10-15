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
 * GetTaskInstanceLog request structure.
 *
 * @method string getProjectId() Obtain **Project ID**. specifies the project ID.
 * @method void setProjectId(string $ProjectId) Set **Project ID**. specifies the project ID.
 * @method string getInstanceKey() Obtain **Instance unique id**.
 * @method void setInstanceKey(string $InstanceKey) Set **Instance unique id**.
 * @method integer getLifeRoundNum() Obtain **Instance Lifecycle Number** - Identifies a specific execution of an instance.
For example: the first run of a cyclic instance has a lifecycle number of 0. If the user reruns that instance later, the second execution will have a lifecycle number of 1;
By default, the latest execution is used.
 * @method void setLifeRoundNum(integer $LifeRoundNum) Set **Instance Lifecycle Number** - Identifies a specific execution of an instance.
For example: the first run of a cyclic instance has a lifecycle number of 0. If the user reruns that instance later, the second execution will have a lifecycle number of 1;
By default, the latest execution is used.
 * @method string getLogLevel() Obtain **Log level** default All - Info - Debug - Warn - Error - All.
 * @method void setLogLevel(string $LogLevel) Set **Log level** default All - Info - Debug - Warn - Error - All.
 * @method string getNextCursor() Obtain **Used when performing paginated log queries; has no specific business meaning.**

For the first query, the value is null.

For subsequent queries, use the value of the NextCursor field returned from the previous query.
 * @method void setNextCursor(string $NextCursor) Set **Used when performing paginated log queries; has no specific business meaning.**

For the first query, the value is null.

For subsequent queries, use the value of the NextCursor field returned from the previous query.
 */
class GetTaskInstanceLogRequest extends AbstractModel
{
    /**
     * @var string **Project ID**. specifies the project ID.
     */
    public $ProjectId;

    /**
     * @var string **Instance unique id**.
     */
    public $InstanceKey;

    /**
     * @var integer **Instance Lifecycle Number** - Identifies a specific execution of an instance.
For example: the first run of a cyclic instance has a lifecycle number of 0. If the user reruns that instance later, the second execution will have a lifecycle number of 1;
By default, the latest execution is used.
     */
    public $LifeRoundNum;

    /**
     * @var string **Log level** default All - Info - Debug - Warn - Error - All.
     */
    public $LogLevel;

    /**
     * @var string **Used when performing paginated log queries; has no specific business meaning.**

For the first query, the value is null.

For subsequent queries, use the value of the NextCursor field returned from the previous query.
     */
    public $NextCursor;

    /**
     * @param string $ProjectId **Project ID**. specifies the project ID.
     * @param string $InstanceKey **Instance unique id**.
     * @param integer $LifeRoundNum **Instance Lifecycle Number** - Identifies a specific execution of an instance.
For example: the first run of a cyclic instance has a lifecycle number of 0. If the user reruns that instance later, the second execution will have a lifecycle number of 1;
By default, the latest execution is used.
     * @param string $LogLevel **Log level** default All - Info - Debug - Warn - Error - All.
     * @param string $NextCursor **Used when performing paginated log queries; has no specific business meaning.**

For the first query, the value is null.

For subsequent queries, use the value of the NextCursor field returned from the previous query.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("LifeRoundNum",$param) and $param["LifeRoundNum"] !== null) {
            $this->LifeRoundNum = $param["LifeRoundNum"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("NextCursor",$param) and $param["NextCursor"] !== null) {
            $this->NextCursor = $param["NextCursor"];
        }
    }
}
