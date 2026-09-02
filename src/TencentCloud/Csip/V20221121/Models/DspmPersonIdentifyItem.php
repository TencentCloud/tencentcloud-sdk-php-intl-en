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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dspm personal identification information
 *
 * @method string getPersonId() Obtain Identity id.
 * @method void setPersonId(string $PersonId) Set Identity id.
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getPhone() Obtain Mobile number.
 * @method void setPhone(string $Phone) Set Mobile number.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 */
class DspmPersonIdentifyItem extends AbstractModel
{
    /**
     * @var string Identity id.
     */
    public $PersonId;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Mobile number.
     */
    public $Phone;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @param string $PersonId Identity id.
     * @param string $Name Name
     * @param string $Phone Mobile number.
     * @param string $Remark Remarks.
     * @param string $CreateTime Creation time.
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
