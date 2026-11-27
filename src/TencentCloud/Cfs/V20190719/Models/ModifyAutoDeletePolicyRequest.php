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
 * ModifyAutoDeletePolicy request structure.
 *
 * @method string getFileSystemId() Obtain <p>File system ID.</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>File system ID.</p>
 * @method string getPolicyId() Obtain <p>Automatic cleanup policy ID.</p>
 * @method void setPolicyId(string $PolicyId) Set <p>Automatic cleanup policy ID.</p>
 * @method array getPaths() Obtain <p>List of automatic cleanup paths.</p>
 * @method void setPaths(array $Paths) Set <p>List of automatic cleanup paths.</p>
 * @method string getPolicyName() Obtain <p>Automatic cleanup policy name.</p>
 * @method void setPolicyName(string $PolicyName) Set <p>Automatic cleanup policy name.</p>
 * @method string getStatus() Obtain <p>Policy status.</p><p>Valid values:</p><ul><li>enabled: Enabled.</li><li>disabled: Disabled.</li></ul>
 * @method void setStatus(string $Status) Set <p>Policy status.</p><p>Valid values:</p><ul><li>enabled: Enabled.</li><li>disabled: Disabled.</li></ul>
 */
class ModifyAutoDeletePolicyRequest extends AbstractModel
{
    /**
     * @var string <p>File system ID.</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>Automatic cleanup policy ID.</p>
     */
    public $PolicyId;

    /**
     * @var array <p>List of automatic cleanup paths.</p>
     */
    public $Paths;

    /**
     * @var string <p>Automatic cleanup policy name.</p>
     */
    public $PolicyName;

    /**
     * @var string <p>Policy status.</p><p>Valid values:</p><ul><li>enabled: Enabled.</li><li>disabled: Disabled.</li></ul>
     */
    public $Status;

    /**
     * @param string $FileSystemId <p>File system ID.</p>
     * @param string $PolicyId <p>Automatic cleanup policy ID.</p>
     * @param array $Paths <p>List of automatic cleanup paths.</p>
     * @param string $PolicyName <p>Automatic cleanup policy name.</p>
     * @param string $Status <p>Policy status.</p><p>Valid values:</p><ul><li>enabled: Enabled.</li><li>disabled: Disabled.</li></ul>
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
