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
 * Information of microservice bound to API.
 *
 * @method string getClusterId() Obtain Microservice cluster ID.
 * @method void setClusterId(string $ClusterId) Set Microservice cluster ID.
 * @method string getNamespaceId() Obtain Microservice namespace ID.
 * @method void setNamespaceId(string $NamespaceId) Set Microservice namespace ID.
 * @method string getMicroServiceName() Obtain Microservice name.
 * @method void setMicroServiceName(string $MicroServiceName) Set Microservice name.
 */
class MicroService extends AbstractModel
{
    /**
     * @var string Microservice cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Microservice namespace ID.
     */
    public $NamespaceId;

    /**
     * @var string Microservice name.
     */
    public $MicroServiceName;

    /**
     * @param string $ClusterId Microservice cluster ID.
     * @param string $NamespaceId Microservice namespace ID.
     * @param string $MicroServiceName Microservice name.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("MicroServiceName",$param) and $param["MicroServiceName"] !== null) {
            $this->MicroServiceName = $param["MicroServiceName"];
        }
    }
}
