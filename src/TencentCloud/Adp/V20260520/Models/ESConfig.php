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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES configuration
 *
 * @method boolean getCanModify() Obtain <p>Whether storage method modification is supported</p>
 * @method void setCanModify(boolean $CanModify) Set <p>Whether storage method modification is supported</p>
 * @method string getEncryptedPassword() Obtain <p>ES password (encrypted)</p>
 * @method void setEncryptedPassword(string $EncryptedPassword) Set <p>ES password (encrypted)</p>
 * @method string getInstanceId() Obtain <p>ES cluster ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>ES cluster ID</p>
 * @method integer getStorageType() Obtain <p>Storage type: 1=default storage, 2=custom storage<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>ES_STORAGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>ES_STORAGE_TYPE_DEFAULT</td><td>1</td><td>Default storage</td></tr><tr><td>ES_STORAGE_TYPE_CUSTOM</td><td>2</td><td>Custom storage</td></tr></tbody></table></p>
 * @method void setStorageType(integer $StorageType) Set <p>Storage type: 1=default storage, 2=custom storage<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>ES_STORAGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>ES_STORAGE_TYPE_DEFAULT</td><td>1</td><td>Default storage</td></tr><tr><td>ES_STORAGE_TYPE_CUSTOM</td><td>2</td><td>Custom storage</td></tr></tbody></table></p>
 * @method string getUserName() Obtain <p>ES userName</p>
 * @method void setUserName(string $UserName) Set <p>ES userName</p>
 */
class ESConfig extends AbstractModel
{
    /**
     * @var boolean <p>Whether storage method modification is supported</p>
     */
    public $CanModify;

    /**
     * @var string <p>ES password (encrypted)</p>
     */
    public $EncryptedPassword;

    /**
     * @var string <p>ES cluster ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Storage type: 1=default storage, 2=custom storage<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>ES_STORAGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>ES_STORAGE_TYPE_DEFAULT</td><td>1</td><td>Default storage</td></tr><tr><td>ES_STORAGE_TYPE_CUSTOM</td><td>2</td><td>Custom storage</td></tr></tbody></table></p>
     */
    public $StorageType;

    /**
     * @var string <p>ES userName</p>
     */
    public $UserName;

    /**
     * @param boolean $CanModify <p>Whether storage method modification is supported</p>
     * @param string $EncryptedPassword <p>ES password (encrypted)</p>
     * @param string $InstanceId <p>ES cluster ID</p>
     * @param integer $StorageType <p>Storage type: 1=default storage, 2=custom storage<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>ES_STORAGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>ES_STORAGE_TYPE_DEFAULT</td><td>1</td><td>Default storage</td></tr><tr><td>ES_STORAGE_TYPE_CUSTOM</td><td>2</td><td>Custom storage</td></tr></tbody></table></p>
     * @param string $UserName <p>ES userName</p>
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
        if (array_key_exists("CanModify",$param) and $param["CanModify"] !== null) {
            $this->CanModify = $param["CanModify"];
        }

        if (array_key_exists("EncryptedPassword",$param) and $param["EncryptedPassword"] !== null) {
            $this->EncryptedPassword = $param["EncryptedPassword"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
