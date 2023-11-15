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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Risk data
 *
 * @method string getId() Obtain Risk ID
 * @method void setId(string $Id) Set Risk ID
 * @method string getAppId() Obtain User AppId
 * @method void setAppId(string $AppId) Set User AppId
 * @method string getPublicIPDomain() Obtain Public IP/domain name
 * @method void setPublicIPDomain(string $PublicIPDomain) Set Public IP/domain name
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 */
class RiskCenterStatusKey extends AbstractModel
{
    /**
     * @var string Risk ID
     */
    public $Id;

    /**
     * @var string User AppId
     */
    public $AppId;

    /**
     * @var string Public IP/domain name
     */
    public $PublicIPDomain;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @param string $Id Risk ID
     * @param string $AppId User AppId
     * @param string $PublicIPDomain Public IP/domain name
     * @param string $InstanceId Instance ID.
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PublicIPDomain",$param) and $param["PublicIPDomain"] !== null) {
            $this->PublicIPDomain = $param["PublicIPDomain"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
