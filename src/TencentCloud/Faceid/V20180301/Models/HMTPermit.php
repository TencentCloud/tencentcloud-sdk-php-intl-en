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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Exit/entry permit (card) for traveling to and from Hong Kong (China), Macao (China), or Taiwan (China)
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getEnglishName() Obtain English name
 * @method void setEnglishName(string $EnglishName) Set English name
 * @method string getNumber() Obtain License number
 * @method void setNumber(string $Number) Set License number
 * @method string getSex() Obtain Gender
 * @method void setSex(string $Sex) Set Gender
 * @method string getValidDate() Obtain Valid date
 * @method void setValidDate(string $ValidDate) Set Valid date
 * @method string getIssueAuthority() Obtain Issued authority
 * @method void setIssueAuthority(string $IssueAuthority) Set Issued authority
 * @method string getIssueAddress() Obtain Issued address
 * @method void setIssueAddress(string $IssueAddress) Set Issued address
 * @method string getBirthday() Obtain Birthday
 * @method void setBirthday(string $Birthday) Set Birthday
 */
class HMTPermit extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string English name
     */
    public $EnglishName;

    /**
     * @var string License number
     */
    public $Number;

    /**
     * @var string Gender
     */
    public $Sex;

    /**
     * @var string Valid date
     */
    public $ValidDate;

    /**
     * @var string Issued authority
     */
    public $IssueAuthority;

    /**
     * @var string Issued address
     */
    public $IssueAddress;

    /**
     * @var string Birthday
     */
    public $Birthday;

    /**
     * @param string $Name Name
     * @param string $EnglishName English name
     * @param string $Number License number
     * @param string $Sex Gender
     * @param string $ValidDate Valid date
     * @param string $IssueAuthority Issued authority
     * @param string $IssueAddress Issued address
     * @param string $Birthday Birthday
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

        if (array_key_exists("EnglishName",$param) and $param["EnglishName"] !== null) {
            $this->EnglishName = $param["EnglishName"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("IssueAuthority",$param) and $param["IssueAuthority"] !== null) {
            $this->IssueAuthority = $param["IssueAuthority"];
        }

        if (array_key_exists("IssueAddress",$param) and $param["IssueAddress"] !== null) {
            $this->IssueAddress = $param["IssueAddress"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }
    }
}
