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
 * StartOpsTasks request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method array getTaskIds() Obtain Task Id list.
 * @method void setTaskIds(array $TaskIds) Set Task Id list.
 * @method boolean getEnableDataBackfill() Obtain Whether to supplement intermediate instances from the last pause to the current time at startup. default false indicates no supplement.
 * @method void setEnableDataBackfill(boolean $EnableDataBackfill) Set Whether to supplement intermediate instances from the last pause to the current time at startup. default false indicates no supplement.
 */
class StartOpsTasksRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var array Task Id list.
     */
    public $TaskIds;

    /**
     * @var boolean Whether to supplement intermediate instances from the last pause to the current time at startup. default false indicates no supplement.
     */
    public $EnableDataBackfill;

    /**
     * @param string $ProjectId Project ID
     * @param array $TaskIds Task Id list.
     * @param boolean $EnableDataBackfill Whether to supplement intermediate instances from the last pause to the current time at startup. default false indicates no supplement.
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

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("EnableDataBackfill",$param) and $param["EnableDataBackfill"] !== null) {
            $this->EnableDataBackfill = $param["EnableDataBackfill"];
        }
    }
}
