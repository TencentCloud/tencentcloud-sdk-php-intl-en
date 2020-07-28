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
 * CreateSecurityPolicy request structure.
 *
 * @method string getDefaultAction() Obtain Default policy: ACCEPT or DROP
 * @method void setDefaultAction(string $DefaultAction) Set Default policy: ACCEPT or DROP
 * @method string getProxyId() Obtain Acceleration connection ID
 * @method void setProxyId(string $ProxyId) Set Acceleration connection ID
 * @method string getGroupId() Obtain Connection group ID
 * @method void setGroupId(string $GroupId) Set Connection group ID
 */
class CreateSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string Default policy: ACCEPT or DROP
     */
    public $DefaultAction;

    /**
     * @var string Acceleration connection ID
     */
    public $ProxyId;

    /**
     * @var string Connection group ID
     */
    public $GroupId;

    /**
     * @param string $DefaultAction Default policy: ACCEPT or DROP
     * @param string $ProxyId Acceleration connection ID
     * @param string $GroupId Connection group ID
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
        if (array_key_exists("DefaultAction",$param) and $param["DefaultAction"] !== null) {
            $this->DefaultAction = $param["DefaultAction"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
