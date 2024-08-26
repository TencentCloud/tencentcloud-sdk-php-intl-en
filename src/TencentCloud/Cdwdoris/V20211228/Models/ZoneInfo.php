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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Availability zone description
 *
 * @method string getName() Obtain Availability zone name, such as ap-guangzhou-1
 * @method void setName(string $Name) Set Availability zone name, such as ap-guangzhou-1
 * @method string getDesc() Obtain Availability zone description, such as Guangzhou region 1
 * @method void setDesc(string $Desc) Set Availability zone description, such as Guangzhou region 1
 * @method integer getZoneId() Obtain Unique tag of the availability zone
 * @method void setZoneId(integer $ZoneId) Set Unique tag of the availability zone
 * @method integer getEncrypt() Obtain Encryptid
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncrypt(integer $Encrypt) Set Encryptid
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string Availability zone name, such as ap-guangzhou-1
     */
    public $Name;

    /**
     * @var string Availability zone description, such as Guangzhou region 1
     */
    public $Desc;

    /**
     * @var integer Unique tag of the availability zone
     */
    public $ZoneId;

    /**
     * @var integer Encryptid
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Encrypt;

    /**
     * @param string $Name Availability zone name, such as ap-guangzhou-1
     * @param string $Desc Availability zone description, such as Guangzhou region 1
     * @param integer $ZoneId Unique tag of the availability zone
     * @param integer $Encrypt Encryptid
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }
    }
}
