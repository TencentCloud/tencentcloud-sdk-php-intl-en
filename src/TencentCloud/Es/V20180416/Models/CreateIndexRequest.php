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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIndex request structure.
 *
 * @method string getInstanceId() Obtain ES cluster ID
 * @method void setInstanceId(string $InstanceId) Set ES cluster ID
 * @method string getIndexType() Obtain Type of the index to create. `auto`: Automated; `normal`: General.
 * @method void setIndexType(string $IndexType) Set Type of the index to create. `auto`: Automated; `normal`: General.
 * @method string getIndexName() Obtain Name of the index to create
 * @method void setIndexName(string $IndexName) Set Name of the index to create
 * @method string getIndexMetaJson() Obtain JSON-formatted index metadata to create, such as `mappings` and `settings`
 * @method void setIndexMetaJson(string $IndexMetaJson) Set JSON-formatted index metadata to create, such as `mappings` and `settings`
 * @method string getUsername() Obtain Username for cluster access
 * @method void setUsername(string $Username) Set Username for cluster access
 * @method string getPassword() Obtain Password for cluster access
 * @method void setPassword(string $Password) Set Password for cluster access
 */
class CreateIndexRequest extends AbstractModel
{
    /**
     * @var string ES cluster ID
     */
    public $InstanceId;

    /**
     * @var string Type of the index to create. `auto`: Automated; `normal`: General.
     */
    public $IndexType;

    /**
     * @var string Name of the index to create
     */
    public $IndexName;

    /**
     * @var string JSON-formatted index metadata to create, such as `mappings` and `settings`
     */
    public $IndexMetaJson;

    /**
     * @var string Username for cluster access
     */
    public $Username;

    /**
     * @var string Password for cluster access
     */
    public $Password;

    /**
     * @param string $InstanceId ES cluster ID
     * @param string $IndexType Type of the index to create. `auto`: Automated; `normal`: General.
     * @param string $IndexName Name of the index to create
     * @param string $IndexMetaJson JSON-formatted index metadata to create, such as `mappings` and `settings`
     * @param string $Username Username for cluster access
     * @param string $Password Password for cluster access
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("IndexMetaJson",$param) and $param["IndexMetaJson"] !== null) {
            $this->IndexMetaJson = $param["IndexMetaJson"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
