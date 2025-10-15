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
 * Submits the result of a data development task.
 *
 * @method string getVersionId() Obtain Generated task version ID.

 * @method void setVersionId(string $VersionId) Set Generated task version ID.

 * @method boolean getStatus() Obtain Submission status.
 * @method void setStatus(boolean $Status) Set Submission status.
 */
class SubmitTaskResult extends AbstractModel
{
    /**
     * @var string Generated task version ID.

     */
    public $VersionId;

    /**
     * @var boolean Submission status.
     */
    public $Status;

    /**
     * @param string $VersionId Generated task version ID.

     * @param boolean $Status Submission status.
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
