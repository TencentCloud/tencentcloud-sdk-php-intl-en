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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information returned by the Skill security detection upload API.
 *
 * @method string getContentHash() Obtain <p>SHA256 Hash of the file, used for polling query APIs.</p>
 * @method void setContentHash(string $ContentHash) Set <p>SHA256 Hash of the file, used for polling query APIs.</p>
 * @method string getStatus() Obtain <p>Fixed value: scanning. Indicates that the task has been received.</p>
 * @method void setStatus(string $Status) Set <p>Fixed value: scanning. Indicates that the task has been received.</p>
 * @method string getMessage() Obtain <p>Readable description of the operation result.</p>
 * @method void setMessage(string $Message) Set <p>Readable description of the operation result.</p>
 */
class SkillScanUploadData extends AbstractModel
{
    /**
     * @var string <p>SHA256 Hash of the file, used for polling query APIs.</p>
     */
    public $ContentHash;

    /**
     * @var string <p>Fixed value: scanning. Indicates that the task has been received.</p>
     */
    public $Status;

    /**
     * @var string <p>Readable description of the operation result.</p>
     */
    public $Message;

    /**
     * @param string $ContentHash <p>SHA256 Hash of the file, used for polling query APIs.</p>
     * @param string $Status <p>Fixed value: scanning. Indicates that the task has been received.</p>
     * @param string $Message <p>Readable description of the operation result.</p>
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
        if (array_key_exists("ContentHash",$param) and $param["ContentHash"] !== null) {
            $this->ContentHash = $param["ContentHash"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
