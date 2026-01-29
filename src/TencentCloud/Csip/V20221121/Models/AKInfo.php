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
 * AK brief information.
 *
 * @method integer getID() Obtain ak id.
 * @method void setID(integer $ID) Set ak id.
 * @method string getName() Obtain ak specific value. returns temporary key when temporary key is used.
 * @method void setName(string $Name) Set ak specific value. returns temporary key when temporary key is used.
 * @method string getUser() Obtain Associated account.
 * @method void setUser(string $User) Set Associated account.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 */
class AKInfo extends AbstractModel
{
    /**
     * @var integer ak id.
     */
    public $ID;

    /**
     * @var string ak specific value. returns temporary key when temporary key is used.
     */
    public $Name;

    /**
     * @var string Associated account.
     */
    public $User;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @param integer $ID ak id.
     * @param string $Name ak specific value. returns temporary key when temporary key is used.
     * @param string $User Associated account.
     * @param string $Remark Remarks
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
