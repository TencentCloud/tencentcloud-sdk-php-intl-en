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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Concurrency limit exceeded details
 *
 * @method CallSource getCallSource() Obtain <p>Call source (subject_type determines the meaning of subject_id/subject_name. For example, for APP, subject_id=app_id and subject_name=app_name)</p>
 * @method void setCallSource(CallSource $CallSource) Set <p>Call source (subject_type determines the meaning of subject_id/subject_name. For example, for APP, subject_id=app_id and subject_name=app_name)</p>
 * @method string getEventTime() Obtain <p>Time when the limit was exceeded (Unix seconds)</p>
 * @method void setEventTime(string $EventTime) Set <p>Time when the limit was exceeded (Unix seconds)</p>
 * @method string getModelName() Obtain <p>Model name</p>
 * @method void setModelName(string $ModelName) Set <p>Model name</p>
 * @method string getRequestQuery() Obtain <p>Request content (the original query text of the user request)</p>
 * @method void setRequestQuery(string $RequestQuery) Set <p>Request content (the original query text of the user request)</p>
 * @method string getSpaceId() Obtain <p>Space ID</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space ID</p>
 */
class ConcurrencyLimitDetail extends AbstractModel
{
    /**
     * @var CallSource <p>Call source (subject_type determines the meaning of subject_id/subject_name. For example, for APP, subject_id=app_id and subject_name=app_name)</p>
     */
    public $CallSource;

    /**
     * @var string <p>Time when the limit was exceeded (Unix seconds)</p>
     */
    public $EventTime;

    /**
     * @var string <p>Model name</p>
     */
    public $ModelName;

    /**
     * @var string <p>Request content (the original query text of the user request)</p>
     */
    public $RequestQuery;

    /**
     * @var string <p>Space ID</p>
     */
    public $SpaceId;

    /**
     * @param CallSource $CallSource <p>Call source (subject_type determines the meaning of subject_id/subject_name. For example, for APP, subject_id=app_id and subject_name=app_name)</p>
     * @param string $EventTime <p>Time when the limit was exceeded (Unix seconds)</p>
     * @param string $ModelName <p>Model name</p>
     * @param string $RequestQuery <p>Request content (the original query text of the user request)</p>
     * @param string $SpaceId <p>Space ID</p>
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
        if (array_key_exists("CallSource",$param) and $param["CallSource"] !== null) {
            $this->CallSource = new CallSource();
            $this->CallSource->deserialize($param["CallSource"]);
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("RequestQuery",$param) and $param["RequestQuery"] !== null) {
            $this->RequestQuery = $param["RequestQuery"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }
    }
}
