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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationMembers request structure.
 *
 * @method integer getOffset() Obtain Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
 * @method integer getLimit() Obtain Limit, which defaults to `10`. Value range: 1-50.
 * @method void setLimit(integer $Limit) Set Limit, which defaults to `10`. Value range: 1-50.
 * @method string getLang() Obtain Valid values: `en` (Tencent Cloud International); `zh` (Tencent Cloud).
 * @method void setLang(string $Lang) Set Valid values: `en` (Tencent Cloud International); `zh` (Tencent Cloud).
 * @method string getSearchKey() Obtain Search by member name or ID.
 * @method void setSearchKey(string $SearchKey) Set Search by member name or ID.
 * @method string getAuthName() Obtain Entity name.
 * @method void setAuthName(string $AuthName) Set Entity name.
 * @method string getProduct() Obtain Abbreviation of the trusted service, which is required during querying the trusted service admin.
 * @method void setProduct(string $Product) Set Abbreviation of the trusted service, which is required during querying the trusted service admin.
 * @method array getTags() Obtain Member tag search list, with a maximum of 10.
 * @method void setTags(array $Tags) Set Member tag search list, with a maximum of 10.
 */
class DescribeOrganizationMembersRequest extends AbstractModel
{
    /**
     * @var integer Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Limit, which defaults to `10`. Value range: 1-50.
     */
    public $Limit;

    /**
     * @var string Valid values: `en` (Tencent Cloud International); `zh` (Tencent Cloud).
     */
    public $Lang;

    /**
     * @var string Search by member name or ID.
     */
    public $SearchKey;

    /**
     * @var string Entity name.
     */
    public $AuthName;

    /**
     * @var string Abbreviation of the trusted service, which is required during querying the trusted service admin.
     */
    public $Product;

    /**
     * @var array Member tag search list, with a maximum of 10.
     */
    public $Tags;

    /**
     * @param integer $Offset Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
     * @param integer $Limit Limit, which defaults to `10`. Value range: 1-50.
     * @param string $Lang Valid values: `en` (Tencent Cloud International); `zh` (Tencent Cloud).
     * @param string $SearchKey Search by member name or ID.
     * @param string $AuthName Entity name.
     * @param string $Product Abbreviation of the trusted service, which is required during querying the trusted service admin.
     * @param array $Tags Member tag search list, with a maximum of 10.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("AuthName",$param) and $param["AuthName"] !== null) {
            $this->AuthName = $param["AuthName"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
