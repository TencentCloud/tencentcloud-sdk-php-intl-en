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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role instance
 *
 * @method string getRoleName() Obtain <p>Role name.</p>
 * @method void setRoleName(string $RoleName) Set <p>Role name.</p>
 * @method string getToken() Obtain <p>Role token value.</p>
 * @method void setToken(string $Token) Set <p>Role token value.</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method string getPermType() Obtain <p>Authorization type (Cluster: cluster; TopicAndGroup: topic/consumer group)</p>
 * @method void setPermType(string $PermType) Set <p>Authorization type (Cluster: cluster; TopicAndGroup: topic/consumer group)</p>
 * @method string getTokenType() Obtain <p>Role type</p><p>Enumeration value:</p><ul><li>Temporary: Rotation key</li><li>Permanent: Permanent key</li></ul>
 * @method void setTokenType(string $TokenType) Set <p>Role type</p><p>Enumeration value:</p><ul><li>Temporary: Rotation key</li><li>Permanent: Permanent key</li></ul>
 * @method string getSecretName() Obtain <p>SSM unique ID</p>
 * @method void setSecretName(string $SecretName) Set <p>SSM unique ID</p>
 * @method integer getRotateFreq() Obtain <p>Rotation cycle</p><p>Unit: day</p>
 * @method void setRotateFreq(integer $RotateFreq) Set <p>Rotation cycle</p><p>Unit: day</p>
 */
class Role extends AbstractModel
{
    /**
     * @var string <p>Role name.</p>
     */
    public $RoleName;

    /**
     * @var string <p>Role token value.</p>
     */
    public $Token;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Authorization type (Cluster: cluster; TopicAndGroup: topic/consumer group)</p>
     */
    public $PermType;

    /**
     * @var string <p>Role type</p><p>Enumeration value:</p><ul><li>Temporary: Rotation key</li><li>Permanent: Permanent key</li></ul>
     */
    public $TokenType;

    /**
     * @var string <p>SSM unique ID</p>
     */
    public $SecretName;

    /**
     * @var integer <p>Rotation cycle</p><p>Unit: day</p>
     */
    public $RotateFreq;

    /**
     * @param string $RoleName <p>Role name.</p>
     * @param string $Token <p>Role token value.</p>
     * @param string $Remark <p>Remarks.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param string $PermType <p>Authorization type (Cluster: cluster; TopicAndGroup: topic/consumer group)</p>
     * @param string $TokenType <p>Role type</p><p>Enumeration value:</p><ul><li>Temporary: Rotation key</li><li>Permanent: Permanent key</li></ul>
     * @param string $SecretName <p>SSM unique ID</p>
     * @param integer $RotateFreq <p>Rotation cycle</p><p>Unit: day</p>
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PermType",$param) and $param["PermType"] !== null) {
            $this->PermType = $param["PermType"];
        }

        if (array_key_exists("TokenType",$param) and $param["TokenType"] !== null) {
            $this->TokenType = $param["TokenType"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("RotateFreq",$param) and $param["RotateFreq"] !== null) {
            $this->RotateFreq = $param["RotateFreq"];
        }
    }
}
