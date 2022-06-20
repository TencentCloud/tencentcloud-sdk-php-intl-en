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
 * Describes key pair information.
 *
 * @method string getKeyId() Obtain Key pair `ID`, the unique identifier of a key pair.
 * @method void setKeyId(string $KeyId) Set Key pair `ID`, the unique identifier of a key pair.
 * @method string getKeyName() Obtain Key pair name.
 * @method void setKeyName(string $KeyName) Set Key pair name.
 * @method integer getProjectId() Obtain `ID` of the project to which a key pair belongs.
 * @method void setProjectId(integer $ProjectId) Set `ID` of the project to which a key pair belongs.
 * @method string getDescription() Obtain Key pair description.
 * @method void setDescription(string $Description) Set Key pair description.
 * @method string getPublicKey() Obtain Content of public key in a key pair.
 * @method void setPublicKey(string $PublicKey) Set Content of public key in a key pair.
 * @method string getPrivateKey() Obtain Content of private key in a key pair. Tencent Cloud do not keep private keys. Please keep it properly.
 * @method void setPrivateKey(string $PrivateKey) Set Content of private key in a key pair. Tencent Cloud do not keep private keys. Please keep it properly.
 * @method array getAssociatedInstanceIds() Obtain `ID` list of instances associated with a key.
 * @method void setAssociatedInstanceIds(array $AssociatedInstanceIds) Set `ID` list of instances associated with a key.
 * @method string getCreatedTime() Obtain Creation time, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method array getTags() Obtain The list of tags bound to the key.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTags(array $Tags) Set The list of tags bound to the key.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class KeyPair extends AbstractModel
{
    /**
     * @var string Key pair `ID`, the unique identifier of a key pair.
     */
    public $KeyId;

    /**
     * @var string Key pair name.
     */
    public $KeyName;

    /**
     * @var integer `ID` of the project to which a key pair belongs.
     */
    public $ProjectId;

    /**
     * @var string Key pair description.
     */
    public $Description;

    /**
     * @var string Content of public key in a key pair.
     */
    public $PublicKey;

    /**
     * @var string Content of private key in a key pair. Tencent Cloud do not keep private keys. Please keep it properly.
     */
    public $PrivateKey;

    /**
     * @var array `ID` list of instances associated with a key.
     */
    public $AssociatedInstanceIds;

    /**
     * @var string Creation time, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     */
    public $CreatedTime;

    /**
     * @var array The list of tags bound to the key.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Tags;

    /**
     * @param string $KeyId Key pair `ID`, the unique identifier of a key pair.
     * @param string $KeyName Key pair name.
     * @param integer $ProjectId `ID` of the project to which a key pair belongs.
     * @param string $Description Key pair description.
     * @param string $PublicKey Content of public key in a key pair.
     * @param string $PrivateKey Content of private key in a key pair. Tencent Cloud do not keep private keys. Please keep it properly.
     * @param array $AssociatedInstanceIds `ID` list of instances associated with a key.
     * @param string $CreatedTime Creation time, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     * @param array $Tags The list of tags bound to the key.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("AssociatedInstanceIds",$param) and $param["AssociatedInstanceIds"] !== null) {
            $this->AssociatedInstanceIds = $param["AssociatedInstanceIds"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
