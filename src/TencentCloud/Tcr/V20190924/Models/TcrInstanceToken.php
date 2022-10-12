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
 * Instance login token
 *
 * @method string getId() Obtain Token ID
 * @method void setId(string $Id) Set Token ID
 * @method string getDesc() Obtain Token description
 * @method void setDesc(string $Desc) Set Token description
 * @method string getRegistryId() Obtain ID of the instance of the token
 * @method void setRegistryId(string $RegistryId) Set ID of the instance of the token
 * @method boolean getEnabled() Obtain Token status
 * @method void setEnabled(boolean $Enabled) Set Token status
 * @method string getCreatedAt() Obtain Token creation time
 * @method void setCreatedAt(string $CreatedAt) Set Token creation time
 * @method integer getExpiredAt() Obtain Token expiration timestamp
 * @method void setExpiredAt(integer $ExpiredAt) Set Token expiration timestamp
 */
class TcrInstanceToken extends AbstractModel
{
    /**
     * @var string Token ID
     */
    public $Id;

    /**
     * @var string Token description
     */
    public $Desc;

    /**
     * @var string ID of the instance of the token
     */
    public $RegistryId;

    /**
     * @var boolean Token status
     */
    public $Enabled;

    /**
     * @var string Token creation time
     */
    public $CreatedAt;

    /**
     * @var integer Token expiration timestamp
     */
    public $ExpiredAt;

    /**
     * @param string $Id Token ID
     * @param string $Desc Token description
     * @param string $RegistryId ID of the instance of the token
     * @param boolean $Enabled Token status
     * @param string $CreatedAt Token creation time
     * @param integer $ExpiredAt Token expiration timestamp
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ExpiredAt",$param) and $param["ExpiredAt"] !== null) {
            $this->ExpiredAt = $param["ExpiredAt"];
        }
    }
}
