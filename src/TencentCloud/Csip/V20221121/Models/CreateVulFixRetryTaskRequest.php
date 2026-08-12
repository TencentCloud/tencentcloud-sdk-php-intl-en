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
 * CreateVulFixRetryTask request structure.
 *
 * @method integer getTaskId() Obtain <p>Repair task ID that needs to be retried</p>
 * @method void setTaskId(integer $TaskId) Set <p>Repair task ID that needs to be retried</p>
 * @method array getInstanceIds() Obtain <p>Specify the list of host instance IDs that need to retry. If not passed, retry all failed hosts.</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>Specify the list of host instance IDs that need to retry. If not passed, retry all failed hosts.</p>
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class CreateVulFixRetryTaskRequest extends AbstractModel
{
    /**
     * @var integer <p>Repair task ID that needs to be retried</p>
     */
    public $TaskId;

    /**
     * @var array <p>Specify the list of host instance IDs that need to retry. If not passed, retry all failed hosts.</p>
     */
    public $InstanceIds;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param integer $TaskId <p>Repair task ID that needs to be retried</p>
     * @param array $InstanceIds <p>Specify the list of host instance IDs that need to retry. If not passed, retry all failed hosts.</p>
     * @param array $MemberId Group Account Member ID
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
