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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAddressAttribute request structure.
 *
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method string getAddressId() Obtain Unique EIP ID, such as `eip-11112222`.
 * @method void setAddressId(string $AddressId) Set Unique EIP ID, such as `eip-11112222`.
 * @method string getAddressName() Obtain New EIP name, which can contain up to 20 characters.
 * @method void setAddressName(string $AddressName) Set New EIP name, which can contain up to 20 characters.
 * @method string getEipDirectConnection() Obtain Whether "direct access" is enabled for the EIP. TRUE: yes. FALSE: no. Note that this parameter is available only to users who have activated the EIP direct access feature.
 * @method void setEipDirectConnection(string $EipDirectConnection) Set Whether "direct access" is enabled for the EIP. TRUE: yes. FALSE: no. Note that this parameter is available only to users who have activated the EIP direct access feature.
 */
class ModifyAddressAttributeRequest extends AbstractModel
{
    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var string Unique EIP ID, such as `eip-11112222`.
     */
    public $AddressId;

    /**
     * @var string New EIP name, which can contain up to 20 characters.
     */
    public $AddressName;

    /**
     * @var string Whether "direct access" is enabled for the EIP. TRUE: yes. FALSE: no. Note that this parameter is available only to users who have activated the EIP direct access feature.
     */
    public $EipDirectConnection;

    /**
     * @param string $EcmRegion ECM region
     * @param string $AddressId Unique EIP ID, such as `eip-11112222`.
     * @param string $AddressName New EIP name, which can contain up to 20 characters.
     * @param string $EipDirectConnection Whether "direct access" is enabled for the EIP. TRUE: yes. FALSE: no. Note that this parameter is available only to users who have activated the EIP direct access feature.
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }

        if (array_key_exists("EipDirectConnection",$param) and $param["EipDirectConnection"] !== null) {
            $this->EipDirectConnection = $param["EipDirectConnection"];
        }
    }
}
