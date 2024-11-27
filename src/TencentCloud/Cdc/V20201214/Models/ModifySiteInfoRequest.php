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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySiteInfo request structure.
 *
 * @method string getSiteId() Obtain Equipment room ID
 * @method void setSiteId(string $SiteId) Set Equipment room ID
 * @method string getName() Obtain Site name
 * @method void setName(string $Name) Set Site name
 * @method string getDescription() Obtain Site description
 * @method void setDescription(string $Description) Set Site description
 * @method string getNote() Obtain Note
 * @method void setNote(string $Note) Set Note
 * @method string getCountry() Obtain Country where the site is located
 * @method void setCountry(string $Country) Set Country where the site is located
 * @method string getProvince() Obtain Province where the site is located
 * @method void setProvince(string $Province) Set Province where the site is located
 * @method string getCity() Obtain City where the site is located
 * @method void setCity(string $City) Set City where the site is located
 * @method string getPostalCode() Obtain Postal code of the site area
 * @method void setPostalCode(string $PostalCode) Set Postal code of the site area
 * @method string getAddressLine() Obtain Detailed address of the site
 * @method void setAddressLine(string $AddressLine) Set Detailed address of the site
 */
class ModifySiteInfoRequest extends AbstractModel
{
    /**
     * @var string Equipment room ID
     */
    public $SiteId;

    /**
     * @var string Site name
     */
    public $Name;

    /**
     * @var string Site description
     */
    public $Description;

    /**
     * @var string Note
     */
    public $Note;

    /**
     * @var string Country where the site is located
     */
    public $Country;

    /**
     * @var string Province where the site is located
     */
    public $Province;

    /**
     * @var string City where the site is located
     */
    public $City;

    /**
     * @var string Postal code of the site area
     */
    public $PostalCode;

    /**
     * @var string Detailed address of the site
     */
    public $AddressLine;

    /**
     * @param string $SiteId Equipment room ID
     * @param string $Name Site name
     * @param string $Description Site description
     * @param string $Note Note
     * @param string $Country Country where the site is located
     * @param string $Province Province where the site is located
     * @param string $City City where the site is located
     * @param string $PostalCode Postal code of the site area
     * @param string $AddressLine Detailed address of the site
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
        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("PostalCode",$param) and $param["PostalCode"] !== null) {
            $this->PostalCode = $param["PostalCode"];
        }

        if (array_key_exists("AddressLine",$param) and $param["AddressLine"] !== null) {
            $this->AddressLine = $param["AddressLine"];
        }
    }
}
