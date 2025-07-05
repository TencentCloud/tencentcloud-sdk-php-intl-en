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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteFiles request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method array getFileIds() Obtain Array of File ID to be deleted.
 * @method void setFileIds(array $FileIds) Set Array of File ID to be deleted.
 */
class DeleteFilesRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var array Array of File ID to be deleted.
     */
    public $FileIds;

    /**
     * @param string $ProjectId Project ID.
     * @param array $FileIds Array of File ID to be deleted.
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

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }
    }
}
