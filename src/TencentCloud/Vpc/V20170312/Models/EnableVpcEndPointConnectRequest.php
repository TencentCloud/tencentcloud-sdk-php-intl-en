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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableVpcEndPointConnect request structure.
 *
 * @method string getEndPointServiceId() Obtain Endpoint service ID
 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID
 * @method array getEndPointId() Obtain Endpoint ID
 * @method void setEndPointId(array $EndPointId) Set Endpoint ID
 * @method boolean getAcceptFlag() Obtain Whether to accept the request of connecting with an endpoint

 * @method void setAcceptFlag(boolean $AcceptFlag) Set Whether to accept the request of connecting with an endpoint
 */
class EnableVpcEndPointConnectRequest extends AbstractModel
{
    /**
     * @var string Endpoint service ID
     */
    public $EndPointServiceId;

    /**
     * @var array Endpoint ID
     */
    public $EndPointId;

    /**
     * @var boolean Whether to accept the request of connecting with an endpoint

     */
    public $AcceptFlag;

    /**
     * @param string $EndPointServiceId Endpoint service ID
     * @param array $EndPointId Endpoint ID
     * @param boolean $AcceptFlag Whether to accept the request of connecting with an endpoint
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
        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("AcceptFlag",$param) and $param["AcceptFlag"] !== null) {
            $this->AcceptFlag = $param["AcceptFlag"];
        }
    }
}
