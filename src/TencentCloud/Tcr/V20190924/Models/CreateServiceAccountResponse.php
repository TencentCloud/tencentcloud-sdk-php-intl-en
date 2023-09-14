<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServiceAccount response structure.
 *
 * @method string getName() Obtain Service account name (the prefix `tcr$` is automatically added)
 * @method void setName(string $Name) Set Service account name (the prefix `tcr$` is automatically added)
 * @method string getPassword() Obtain Service account password, which is displayed only once
 * @method void setPassword(string $Password) Set Service account password, which is displayed only once
 * @method integer getExpiresAt() Obtain Expiry time of the service account (timestamp)
 * @method void setExpiresAt(integer $ExpiresAt) Set Expiry time of the service account (timestamp)
 * @method string getCreateTime() Obtain Creation time of the service account
 * @method void setCreateTime(string $CreateTime) Set Creation time of the service account
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateServiceAccountResponse extends AbstractModel
{
    /**
     * @var string Service account name (the prefix `tcr$` is automatically added)
     */
    public $Name;

    /**
     * @var string Service account password, which is displayed only once
     */
    public $Password;

    /**
     * @var integer Expiry time of the service account (timestamp)
     */
    public $ExpiresAt;

    /**
     * @var string Creation time of the service account
     */
    public $CreateTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Name Service account name (the prefix `tcr$` is automatically added)
     * @param string $Password Service account password, which is displayed only once
     * @param integer $ExpiresAt Expiry time of the service account (timestamp)
     * @param string $CreateTime Creation time of the service account
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ExpiresAt",$param) and $param["ExpiresAt"] !== null) {
            $this->ExpiresAt = $param["ExpiresAt"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}