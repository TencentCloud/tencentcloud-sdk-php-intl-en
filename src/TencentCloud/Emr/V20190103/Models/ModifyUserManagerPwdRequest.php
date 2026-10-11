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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserManagerPwd request structure.
 *
 * @method string getInstanceId() Obtain <p>Cluster ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Cluster ID.</p>
 * @method string getUserName() Obtain <p>Username.</p>
 * @method void setUserName(string $UserName) Set <p>Username.</p>
 * @method string getPassWord() Obtain <p>Password.</p>
 * @method void setPassWord(string $PassWord) Set <p>Password.</p>
 * @method boolean getSyncPwd() Obtain <p>Whether to synchronize the password.</p>
 * @method void setSyncPwd(boolean $SyncPwd) Set <p>Whether to synchronize the password.</p>
 */
class ModifyUserManagerPwdRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Username.</p>
     */
    public $UserName;

    /**
     * @var string <p>Password.</p>
     */
    public $PassWord;

    /**
     * @var boolean <p>Whether to synchronize the password.</p>
     */
    public $SyncPwd;

    /**
     * @param string $InstanceId <p>Cluster ID.</p>
     * @param string $UserName <p>Username.</p>
     * @param string $PassWord <p>Password.</p>
     * @param boolean $SyncPwd <p>Whether to synchronize the password.</p>
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("SyncPwd",$param) and $param["SyncPwd"] !== null) {
            $this->SyncPwd = $param["SyncPwd"];
        }
    }
}
