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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSourceCidr() 获取Source IP or IP range of the request.
 * @method void setSourceCidr(string $SourceCidr) 设置Source IP or IP range of the request.
 * @method string getAction() 获取Policy: Allow (ACCEPT) or reject (DROP).
 * @method void setAction(string $Action) 设置Policy: Allow (ACCEPT) or reject (DROP).
 * @method string getAliasName() 获取Rule alias
 * @method void setAliasName(string $AliasName) 设置Rule alias
 * @method string getProtocol() 获取Protocol: TCP or UDP. ALL indicates all protocols.
 * @method void setProtocol(string $Protocol) 设置Protocol: TCP or UDP. ALL indicates all protocols.
 * @method string getDestPortRange() 获取Target port. Formatting examples:
Single port: 80
Multiple ports: 80, 443
Consecutive ports: 3306-20000
All ports: ALL
 * @method void setDestPortRange(string $DestPortRange) 设置Target port. Formatting examples:
Single port: 80
Multiple ports: 80, 443
Consecutive ports: 3306-20000
All ports: ALL
 */

/**
 *Security policy rule (input parameter)
 */
class SecurityPolicyRuleIn extends AbstractModel
{
    /**
     * @var string Source IP or IP range of the request.
     */
    public $SourceCidr;

    /**
     * @var string Policy: Allow (ACCEPT) or reject (DROP).
     */
    public $Action;

    /**
     * @var string Rule alias
     */
    public $AliasName;

    /**
     * @var string Protocol: TCP or UDP. ALL indicates all protocols.
     */
    public $Protocol;

    /**
     * @var string Target port. Formatting examples:
Single port: 80
Multiple ports: 80, 443
Consecutive ports: 3306-20000
All ports: ALL
     */
    public $DestPortRange;
    /**
     * @param string $SourceCidr Source IP or IP range of the request.
     * @param string $Action Policy: Allow (ACCEPT) or reject (DROP).
     * @param string $AliasName Rule alias
     * @param string $Protocol Protocol: TCP or UDP. ALL indicates all protocols.
     * @param string $DestPortRange Target port. Formatting examples:
Single port: 80
Multiple ports: 80, 443
Consecutive ports: 3306-20000
All ports: ALL
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
        if (array_key_exists("SourceCidr",$param) and $param["SourceCidr"] !== null) {
            $this->SourceCidr = $param["SourceCidr"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("DestPortRange",$param) and $param["DestPortRange"] !== null) {
            $this->DestPortRange = $param["DestPortRange"];
        }
    }
}
