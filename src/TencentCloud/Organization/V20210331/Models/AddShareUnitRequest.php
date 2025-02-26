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
 * AddShareUnit request structure.
 *
 * @method string getName() Obtain Shared unit name. It only supports combinations of uppercase and lowercase letters, digits, hyphens (-), and underscores (_), with 3 to 128 characters.
 * @method void setName(string $Name) Set Shared unit name. It only supports combinations of uppercase and lowercase letters, digits, hyphens (-), and underscores (_), with 3 to 128 characters.
 * @method string getArea() Obtain Shared unit region. You can obtain supported shared regions through the API [DescribeShareAreas](https://intl.cloud.tencent.com/document/product/850/103050?from_cn_redirect=1).
 * @method void setArea(string $Area) Set Shared unit region. You can obtain supported shared regions through the API [DescribeShareAreas](https://intl.cloud.tencent.com/document/product/850/103050?from_cn_redirect=1).
 * @method string getDescription() Obtain Shared unit description. Maximum: 128 characters.
 * @method void setDescription(string $Description) Set Shared unit description. Maximum: 128 characters.
 * @method integer getShareScope() Obtain Sharing scope. Valid values: 1: Only sharing within a group organization is allowed; 2: Sharing with any account is allowed. Default value: 1
 * @method void setShareScope(integer $ShareScope) Set Sharing scope. Valid values: 1: Only sharing within a group organization is allowed; 2: Sharing with any account is allowed. Default value: 1
 */
class AddShareUnitRequest extends AbstractModel
{
    /**
     * @var string Shared unit name. It only supports combinations of uppercase and lowercase letters, digits, hyphens (-), and underscores (_), with 3 to 128 characters.
     */
    public $Name;

    /**
     * @var string Shared unit region. You can obtain supported shared regions through the API [DescribeShareAreas](https://intl.cloud.tencent.com/document/product/850/103050?from_cn_redirect=1).
     */
    public $Area;

    /**
     * @var string Shared unit description. Maximum: 128 characters.
     */
    public $Description;

    /**
     * @var integer Sharing scope. Valid values: 1: Only sharing within a group organization is allowed; 2: Sharing with any account is allowed. Default value: 1
     */
    public $ShareScope;

    /**
     * @param string $Name Shared unit name. It only supports combinations of uppercase and lowercase letters, digits, hyphens (-), and underscores (_), with 3 to 128 characters.
     * @param string $Area Shared unit region. You can obtain supported shared regions through the API [DescribeShareAreas](https://intl.cloud.tencent.com/document/product/850/103050?from_cn_redirect=1).
     * @param string $Description Shared unit description. Maximum: 128 characters.
     * @param integer $ShareScope Sharing scope. Valid values: 1: Only sharing within a group organization is allowed; 2: Sharing with any account is allowed. Default value: 1
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ShareScope",$param) and $param["ShareScope"] !== null) {
            $this->ShareScope = $param["ShareScope"];
        }
    }
}
