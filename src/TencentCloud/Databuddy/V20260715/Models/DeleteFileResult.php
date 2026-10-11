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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File deletion result
 *
 * @method string getFileId() Obtain <p>Deleted file ID.</p>
 * @method void setFileId(string $FileId) Set <p>Deleted file ID.</p>
 * @method boolean getStatus() Obtain <p>Whether deletion is successful</p>
 * @method void setStatus(boolean $Status) Set <p>Whether deletion is successful</p>
 */
class DeleteFileResult extends AbstractModel
{
    /**
     * @var string <p>Deleted file ID.</p>
     */
    public $FileId;

    /**
     * @var boolean <p>Whether deletion is successful</p>
     */
    public $Status;

    /**
     * @param string $FileId <p>Deleted file ID.</p>
     * @param boolean $Status <p>Whether deletion is successful</p>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
