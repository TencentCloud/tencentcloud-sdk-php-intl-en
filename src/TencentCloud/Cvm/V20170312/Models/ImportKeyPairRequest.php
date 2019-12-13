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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getKeyName() 获取Key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
 * @method void setKeyName(string $KeyName) 设置Key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
 * @method integer getProjectId() 获取The ID of the [project](https://cloud.tencent.com/document/product/378/10861) to which the created key pair belongs.<br><br>You can retrieve the project ID in two ways:<br><li>Query the project ID in [Project Management](https://console.cloud.tencent.com/project).<br><li>Call [DescribeProject](https://cloud.tencent.com/document/api/378/4400) and search for `projectId` in the response.

If you want to use the default project, specify 0 for the parameter.
 * @method void setProjectId(integer $ProjectId) 设置The ID of the [project](https://cloud.tencent.com/document/product/378/10861) to which the created key pair belongs.<br><br>You can retrieve the project ID in two ways:<br><li>Query the project ID in [Project Management](https://console.cloud.tencent.com/project).<br><li>Call [DescribeProject](https://cloud.tencent.com/document/api/378/4400) and search for `projectId` in the response.

If you want to use the default project, specify 0 for the parameter.
 * @method string getPublicKey() 获取Content of the public key in the key pair in the `OpenSSH RSA` format.
 * @method void setPublicKey(string $PublicKey) 设置Content of the public key in the key pair in the `OpenSSH RSA` format.
 */

/**
 *ImportKeyPair request structure.
 */
class ImportKeyPairRequest extends AbstractModel
{
    /**
     * @var string Key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
     */
    public $KeyName;

    /**
     * @var integer The ID of the [project](https://cloud.tencent.com/document/product/378/10861) to which the created key pair belongs.<br><br>You can retrieve the project ID in two ways:<br><li>Query the project ID in [Project Management](https://console.cloud.tencent.com/project).<br><li>Call [DescribeProject](https://cloud.tencent.com/document/api/378/4400) and search for `projectId` in the response.

If you want to use the default project, specify 0 for the parameter.
     */
    public $ProjectId;

    /**
     * @var string Content of the public key in the key pair in the `OpenSSH RSA` format.
     */
    public $PublicKey;
    /**
     * @param string $KeyName Key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
     * @param integer $ProjectId The ID of the [project](https://cloud.tencent.com/document/product/378/10861) to which the created key pair belongs.<br><br>You can retrieve the project ID in two ways:<br><li>Query the project ID in [Project Management](https://console.cloud.tencent.com/project).<br><li>Call [DescribeProject](https://cloud.tencent.com/document/api/378/4400) and search for `projectId` in the response.

If you want to use the default project, specify 0 for the parameter.
     * @param string $PublicKey Content of the public key in the key pair in the `OpenSSH RSA` format.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }
    }
}
