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
 * StopBaselineScanTask request structure.
 *
 * @method integer getTaskID() Obtain <p>ID of the scan main task to be stopped. It must be greater than 0.</p>
 * @method void setTaskID(integer $TaskID) Set <p>ID of the scan main task to be stopped. It must be greater than 0.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class StopBaselineScanTaskRequest extends AbstractModel
{
    /**
     * @var integer <p>ID of the scan main task to be stopped. It must be greater than 0.</p>
     */
    public $TaskID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param integer $TaskID <p>ID of the scan main task to be stopped. It must be greater than 0.</p>
     * @param array $MemberId <p>Group account member id</p>
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
