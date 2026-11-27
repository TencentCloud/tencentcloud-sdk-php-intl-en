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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoDeletePolicy request structure.
 *
 * @method string getFileSystemId() Obtain <p>File system ID.</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>File system ID.</p>
 * @method string getPolicyName() Obtain <p>Auto deletion policy name.</p>
 * @method void setPolicyName(string $PolicyName) Set <p>Auto deletion policy name.</p>
 * @method array getPaths() Obtain <p>List of paths for the auto deletion policy.</p>
 * @method void setPaths(array $Paths) Set <p>List of paths for the auto deletion policy.</p>
 */
class CreateAutoDeletePolicyRequest extends AbstractModel
{
    /**
     * @var string <p>File system ID.</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>Auto deletion policy name.</p>
     */
    public $PolicyName;

    /**
     * @var array <p>List of paths for the auto deletion policy.</p>
     */
    public $Paths;

    /**
     * @param string $FileSystemId <p>File system ID.</p>
     * @param string $PolicyName <p>Auto deletion policy name.</p>
     * @param array $Paths <p>List of paths for the auto deletion policy.</p>
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }
    }
}
