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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Malaysian identity card
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getID() Obtain Identity card number
 * @method void setID(string $ID) Set Identity card number
 * @method string getSex() Obtain Sex
 * @method void setSex(string $Sex) Set Sex
 * @method string getAddress() Obtain Address.
 * @method void setAddress(string $Address) Set Address.
 * @method string getType() Obtain Document type
MyKad identity card
MyPR permanent residence permit
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD labor ID card
MyKid Juvenile ID card
 * @method void setType(string $Type) Set Document type
MyKad identity card
MyPR permanent residence permit
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD labor ID card
MyKid Juvenile ID card
 * @method string getBirthday() Obtain Date of birth (currently this field only supports IKAD labor ID card and MyKad ID card)
 * @method void setBirthday(string $Birthday) Set Date of birth (currently this field only supports IKAD labor ID card and MyKad ID card)
 */
class MLIDCard extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Identity card number
     */
    public $ID;

    /**
     * @var string Sex
     */
    public $Sex;

    /**
     * @var string Address.
     */
    public $Address;

    /**
     * @var string Document type
MyKad identity card
MyPR permanent residence permit
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD labor ID card
MyKid Juvenile ID card
     */
    public $Type;

    /**
     * @var string Date of birth (currently this field only supports IKAD labor ID card and MyKad ID card)
     */
    public $Birthday;

    /**
     * @param string $Name Name
     * @param string $ID Identity card number
     * @param string $Sex Sex
     * @param string $Address Address.
     * @param string $Type Document type
MyKad identity card
MyPR permanent residence permit
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD labor ID card
MyKid Juvenile ID card
     * @param string $Birthday Date of birth (currently this field only supports IKAD labor ID card and MyKad ID card)
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

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }
    }
}
