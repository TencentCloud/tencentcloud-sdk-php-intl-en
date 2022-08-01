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
 * ImportKeyPair request structure.
 *
 * @method string getKeyName() Obtain Key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
 * @method void setKeyName(string $KeyName) Set Key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
 * @method integer getProjectId() Obtain The project ID to which the key pair belongs after it is created. <br><br>You can obtain the project ID in the following ways: <br><li>Check the project list in the [Project management](https://console.cloud.tencent.com/project) page.<br><li>Call the `DescribeProject` API and view the `projectId` in the response.

If you want to use the default project, specify 0 for the parameter.
 * @method void setProjectId(integer $ProjectId) Set The project ID to which the key pair belongs after it is created. <br><br>You can obtain the project ID in the following ways: <br><li>Check the project list in the [Project management](https://console.cloud.tencent.com/project) page.<br><li>Call the `DescribeProject` API and view the `projectId` in the response.

If you want to use the default project, specify 0 for the parameter.
 * @method string getPublicKey() Obtain Content of the public key in the key pair in the `OpenSSH RSA` format.
 * @method void setPublicKey(string $PublicKey) Set Content of the public key in the key pair in the `OpenSSH RSA` format.
 * @method array getTagSpecification() Obtain Tag description list. This parameter is used to bind a tag to a key pair.
 * @method void setTagSpecification(array $TagSpecification) Set Tag description list. This parameter is used to bind a tag to a key pair.
 */
class ImportKeyPairRequest extends AbstractModel
{
    /**
     * @var string Key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
     */
    public $KeyName;

    /**
     * @var integer The project ID to which the key pair belongs after it is created. <br><br>You can obtain the project ID in the following ways: <br><li>Check the project list in the [Project management](https://console.cloud.tencent.com/project) page.<br><li>Call the `DescribeProject` API and view the `projectId` in the response.

If you want to use the default project, specify 0 for the parameter.
     */
    public $ProjectId;

    /**
     * @var string Content of the public key in the key pair in the `OpenSSH RSA` format.
     */
    public $PublicKey;

    /**
     * @var array Tag description list. This parameter is used to bind a tag to a key pair.
     */
    public $TagSpecification;

    /**
     * @param string $KeyName Key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
     * @param integer $ProjectId The project ID to which the key pair belongs after it is created. <br><br>You can obtain the project ID in the following ways: <br><li>Check the project list in the [Project management](https://console.cloud.tencent.com/project) page.<br><li>Call the `DescribeProject` API and view the `projectId` in the response.

If you want to use the default project, specify 0 for the parameter.
     * @param string $PublicKey Content of the public key in the key pair in the `OpenSSH RSA` format.
     * @param array $TagSpecification Tag description list. This parameter is used to bind a tag to a key pair.
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }
    }
}
