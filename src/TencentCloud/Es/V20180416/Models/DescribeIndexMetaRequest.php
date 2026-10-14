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
 * DescribeIndexMeta request structure.
 *
 * @method string getInstanceId() Obtain ES cluster ID
 * @method void setInstanceId(string $InstanceId) Set ES cluster ID
 * @method string getIndexType() Obtain Index type. auto: autonomous index; normal: general index
 * @method void setIndexType(string $IndexType) Set Index type. auto: autonomous index; normal: general index
 * @method string getIndexName() Obtain Index name. If this parameter is left empty, all indexes are obtained.
 * @method void setIndexName(string $IndexName) Set Index name. If this parameter is left empty, all indexes are obtained.
 * @method string getUsername() Obtain Cluster access username.
 * @method void setUsername(string $Username) Set Cluster access username.
 * @method string getPassword() Obtain Cluster access password
 * @method void setPassword(string $Password) Set Cluster access password
 */
class DescribeIndexMetaRequest extends AbstractModel
{
    /**
     * @var string ES cluster ID
     */
    public $InstanceId;

    /**
     * @var string Index type. auto: autonomous index; normal: general index
     */
    public $IndexType;

    /**
     * @var string Index name. If this parameter is left empty, all indexes are obtained.
     */
    public $IndexName;

    /**
     * @var string Cluster access username.
     */
    public $Username;

    /**
     * @var string Cluster access password
     */
    public $Password;

    /**
     * @param string $InstanceId ES cluster ID
     * @param string $IndexType Index type. auto: autonomous index; normal: general index
     * @param string $IndexName Index name. If this parameter is left empty, all indexes are obtained.
     * @param string $Username Cluster access username.
     * @param string $Password Cluster access password
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
    }
}
