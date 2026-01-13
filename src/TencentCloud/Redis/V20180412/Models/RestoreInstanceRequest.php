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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestoreInstance request structure.
 *
 * @method string getInstanceId() Obtain ID of the instance to be operated, which can be obtained through the response parameter InstanceId of the [DescribeInstances](https://www.tencentcloud.com/document/product/239/20018?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance to be operated, which can be obtained through the response parameter InstanceId of the [DescribeInstances](https://www.tencentcloud.com/document/product/239/20018?from_cn_redirect=1) API.
 * @method string getBackupId() Obtain Backup ID, which can be obtained through the response parameter RedisBackupSet of the [DescribeInstanceBackups](https://www.tencentcloud.com/document/product/239/20011?from_cn_redirect=1) API.
 * @method void setBackupId(string $BackupId) Set Backup ID, which can be obtained through the response parameter RedisBackupSet of the [DescribeInstanceBackups](https://www.tencentcloud.com/document/product/239/20011?from_cn_redirect=1) API.
 * @method string getPassword() Obtain Instance password, which needs to be validated during instance restoration (this parameter is not required for password-free instances)
 * @method void setPassword(string $Password) Set Instance password, which needs to be validated during instance restoration (this parameter is not required for password-free instances)
 */
class RestoreInstanceRequest extends AbstractModel
{
    /**
     * @var string ID of the instance to be operated, which can be obtained through the response parameter InstanceId of the [DescribeInstances](https://www.tencentcloud.com/document/product/239/20018?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var string Backup ID, which can be obtained through the response parameter RedisBackupSet of the [DescribeInstanceBackups](https://www.tencentcloud.com/document/product/239/20011?from_cn_redirect=1) API.
     */
    public $BackupId;

    /**
     * @var string Instance password, which needs to be validated during instance restoration (this parameter is not required for password-free instances)
     */
    public $Password;

    /**
     * @param string $InstanceId ID of the instance to be operated, which can be obtained through the response parameter InstanceId of the [DescribeInstances](https://www.tencentcloud.com/document/product/239/20018?from_cn_redirect=1) API.
     * @param string $BackupId Backup ID, which can be obtained through the response parameter RedisBackupSet of the [DescribeInstanceBackups](https://www.tencentcloud.com/document/product/239/20011?from_cn_redirect=1) API.
     * @param string $Password Instance password, which needs to be validated during instance restoration (this parameter is not required for password-free instances)
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

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
