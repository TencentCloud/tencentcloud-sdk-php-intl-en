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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyService request structure.
 *
 * @method string getServiceId() Obtain Unique ID of the service to be modified.
 * @method void setServiceId(string $ServiceId) Set Unique ID of the service to be modified.
 * @method string getServiceName() Obtain Modified service name.
 * @method void setServiceName(string $ServiceName) Set Modified service name.
 * @method string getServiceDesc() Obtain Modified service description.
 * @method void setServiceDesc(string $ServiceDesc) Set Modified service description.
 * @method string getProtocol() Obtain Modified service frontend request type, such as `http`, `https`, and `http&https`.
 * @method void setProtocol(string $Protocol) Set Modified service frontend request type, such as `http`, `https`, and `http&https`.
 * @method array getNetTypes() Obtain Network type list, which is used to specify the supported network types. `INNER` indicates access over private network, and `OUTER` indicates access over public network. The default value is `OUTER`.
 * @method void setNetTypes(array $NetTypes) Set Network type list, which is used to specify the supported network types. `INNER` indicates access over private network, and `OUTER` indicates access over public network. The default value is `OUTER`.
 */
class ModifyServiceRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the service to be modified.
     */
    public $ServiceId;

    /**
     * @var string Modified service name.
     */
    public $ServiceName;

    /**
     * @var string Modified service description.
     */
    public $ServiceDesc;

    /**
     * @var string Modified service frontend request type, such as `http`, `https`, and `http&https`.
     */
    public $Protocol;

    /**
     * @var array Network type list, which is used to specify the supported network types. `INNER` indicates access over private network, and `OUTER` indicates access over public network. The default value is `OUTER`.
     */
    public $NetTypes;

    /**
     * @param string $ServiceId Unique ID of the service to be modified.
     * @param string $ServiceName Modified service name.
     * @param string $ServiceDesc Modified service description.
     * @param string $Protocol Modified service frontend request type, such as `http`, `https`, and `http&https`.
     * @param array $NetTypes Network type list, which is used to specify the supported network types. `INNER` indicates access over private network, and `OUTER` indicates access over public network. The default value is `OUTER`.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("NetTypes",$param) and $param["NetTypes"] !== null) {
            $this->NetTypes = $param["NetTypes"];
        }
    }
}
