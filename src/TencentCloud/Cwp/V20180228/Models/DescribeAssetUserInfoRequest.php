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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetUserInfo request structure.
 *
 * @method string getQuuid() Obtain CVM UUID
 * @method void setQuuid(string $Quuid) Set CVM UUID
 * @method string getUuid() Obtain CWPP UUID
 * @method void setUuid(string $Uuid) Set CWPP UUID
 * @method string getName() Obtain Account name
 * @method void setName(string $Name) Set Account name
 */
class DescribeAssetUserInfoRequest extends AbstractModel
{
    /**
     * @var string CVM UUID
     */
    public $Quuid;

    /**
     * @var string CWPP UUID
     */
    public $Uuid;

    /**
     * @var string Account name
     */
    public $Name;

    /**
     * @param string $Quuid CVM UUID
     * @param string $Uuid CWPP UUID
     * @param string $Name Account name
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
