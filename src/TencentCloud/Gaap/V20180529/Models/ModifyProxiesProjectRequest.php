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
 * ModifyProxiesProject request structure.
 *
 * @method integer getProjectId() Obtain The target project ID.
 * @method void setProjectId(integer $ProjectId) Set The target project ID.
 * @method array getInstanceIds() Obtain ID of one or multiple connections to be operated; It’s an old parameter, please switch to ProxyIds.
 * @method void setInstanceIds(array $InstanceIds) Set ID of one or multiple connections to be operated; It’s an old parameter, please switch to ProxyIds.
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
 * @method array getProxyIds() Obtain ID of one or multiple connections to be operated; It’s a new parameter.
 * @method void setProxyIds(array $ProxyIds) Set ID of one or multiple connections to be operated; It’s a new parameter.
 */
class ModifyProxiesProjectRequest extends AbstractModel
{
    /**
     * @var integer The target project ID.
     */
    public $ProjectId;

    /**
     * @var array ID of one or multiple connections to be operated; It’s an old parameter, please switch to ProxyIds.
     */
    public $InstanceIds;

    /**
     * @var string A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
     */
    public $ClientToken;

    /**
     * @var array ID of one or multiple connections to be operated; It’s a new parameter.
     */
    public $ProxyIds;

    /**
     * @param integer $ProjectId The target project ID.
     * @param array $InstanceIds ID of one or multiple connections to be operated; It’s an old parameter, please switch to ProxyIds.
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
     * @param array $ProxyIds ID of one or multiple connections to be operated; It’s a new parameter.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }
    }
}
