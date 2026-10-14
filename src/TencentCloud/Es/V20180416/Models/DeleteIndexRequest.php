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
 * DeleteIndex request structure.
 *
 * @method string getInstanceId() Obtain <p>ES cluster ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>ES cluster ID</p>
 * @method string getIndexType() Obtain <p>Deleted index type. auto: autonomous index; normal: general index</p>
 * @method void setIndexType(string $IndexType) Set <p>Deleted index type. auto: autonomous index; normal: general index</p>
 * @method string getIndexName() Obtain <p>Name of the deleted index</p>
 * @method void setIndexName(string $IndexName) Set <p>Name of the deleted index</p>
 * @method string getUsername() Obtain <p>Cluster access username.</p>
 * @method void setUsername(string $Username) Set <p>Cluster access username.</p>
 * @method string getPassword() Obtain <p>Cluster access password</p>
 * @method void setPassword(string $Password) Set <p>Cluster access password</p>
 * @method string getBackingIndexName() Obtain <p>Backing index name</p>
 * @method void setBackingIndexName(string $BackingIndexName) Set <p>Backing index name</p>
 * @method string getIndexPhrase() Obtain <p>Index life cycle</p>
 * @method void setIndexPhrase(string $IndexPhrase) Set <p>Index life cycle</p>
 */
class DeleteIndexRequest extends AbstractModel
{
    /**
     * @var string <p>ES cluster ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Deleted index type. auto: autonomous index; normal: general index</p>
     */
    public $IndexType;

    /**
     * @var string <p>Name of the deleted index</p>
     */
    public $IndexName;

    /**
     * @var string <p>Cluster access username.</p>
     */
    public $Username;

    /**
     * @var string <p>Cluster access password</p>
     */
    public $Password;

    /**
     * @var string <p>Backing index name</p>
     */
    public $BackingIndexName;

    /**
     * @var string <p>Index life cycle</p>
     */
    public $IndexPhrase;

    /**
     * @param string $InstanceId <p>ES cluster ID</p>
     * @param string $IndexType <p>Deleted index type. auto: autonomous index; normal: general index</p>
     * @param string $IndexName <p>Name of the deleted index</p>
     * @param string $Username <p>Cluster access username.</p>
     * @param string $Password <p>Cluster access password</p>
     * @param string $BackingIndexName <p>Backing index name</p>
     * @param string $IndexPhrase <p>Index life cycle</p>
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

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("BackingIndexName",$param) and $param["BackingIndexName"] !== null) {
            $this->BackingIndexName = $param["BackingIndexName"];
        }

        if (array_key_exists("IndexPhrase",$param) and $param["IndexPhrase"] !== null) {
            $this->IndexPhrase = $param["IndexPhrase"];
        }
    }
}
