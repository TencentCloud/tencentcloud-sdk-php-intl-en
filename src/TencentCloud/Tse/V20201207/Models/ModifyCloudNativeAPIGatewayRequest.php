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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCloudNativeAPIGateway request structure.
 *
 * @method string getGatewayId() Obtain Cloud native API gateway instance ID.
 * @method void setGatewayId(string $GatewayId) Set Cloud native API gateway instance ID.
 * @method string getName() Obtain Cloud Native API Gateway name, supports up to 60 characters.
 * @method void setName(string $Name) Set Cloud Native API Gateway name, supports up to 60 characters.
 * @method string getDescription() Obtain Cloud native API gateway description, supports up to 120 characters.
 * @method void setDescription(string $Description) Set Cloud native API gateway description, supports up to 120 characters.
 * @method boolean getEnableCls() Obtain Whether CLS log is enabled. The value can only be true temporarily, meaning it can only be changed from disabled to enabled.
 * @method void setEnableCls(boolean $EnableCls) Set Whether CLS log is enabled. The value can only be true temporarily, meaning it can only be changed from disabled to enabled.
 * @method string getInternetPayMode() Obtain Public network billing mode. Option values: BANDWIDTH | TRAFFIC, which means billing by bandwidth or by traffic.
 * @method void setInternetPayMode(string $InternetPayMode) Set Public network billing mode. Option values: BANDWIDTH | TRAFFIC, which means billing by bandwidth or by traffic.
 * @method boolean getDeleteProtect() Obtain Enable instance deletion protection, default false
 * @method void setDeleteProtect(boolean $DeleteProtect) Set Enable instance deletion protection, default false
 */
class ModifyCloudNativeAPIGatewayRequest extends AbstractModel
{
    /**
     * @var string Cloud native API gateway instance ID.
     */
    public $GatewayId;

    /**
     * @var string Cloud Native API Gateway name, supports up to 60 characters.
     */
    public $Name;

    /**
     * @var string Cloud native API gateway description, supports up to 120 characters.
     */
    public $Description;

    /**
     * @var boolean Whether CLS log is enabled. The value can only be true temporarily, meaning it can only be changed from disabled to enabled.
     */
    public $EnableCls;

    /**
     * @var string Public network billing mode. Option values: BANDWIDTH | TRAFFIC, which means billing by bandwidth or by traffic.
     */
    public $InternetPayMode;

    /**
     * @var boolean Enable instance deletion protection, default false
     */
    public $DeleteProtect;

    /**
     * @param string $GatewayId Cloud native API gateway instance ID.
     * @param string $Name Cloud Native API Gateway name, supports up to 60 characters.
     * @param string $Description Cloud native API gateway description, supports up to 120 characters.
     * @param boolean $EnableCls Whether CLS log is enabled. The value can only be true temporarily, meaning it can only be changed from disabled to enabled.
     * @param string $InternetPayMode Public network billing mode. Option values: BANDWIDTH | TRAFFIC, which means billing by bandwidth or by traffic.
     * @param boolean $DeleteProtect Enable instance deletion protection, default false
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnableCls",$param) and $param["EnableCls"] !== null) {
            $this->EnableCls = $param["EnableCls"];
        }

        if (array_key_exists("InternetPayMode",$param) and $param["InternetPayMode"] !== null) {
            $this->InternetPayMode = $param["InternetPayMode"];
        }

        if (array_key_exists("DeleteProtect",$param) and $param["DeleteProtect"] !== null) {
            $this->DeleteProtect = $param["DeleteProtect"];
        }
    }
}
