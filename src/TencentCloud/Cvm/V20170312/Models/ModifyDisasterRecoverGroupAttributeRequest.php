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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDisasterRecoverGroupAttribute request structure.
 *
 * @method string getDisasterRecoverGroupId() Obtain Spread placement group ID, which can be obtained by calling the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/api/213/17810?from_cn_redirect=1) API.
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) Set Spread placement group ID, which can be obtained by calling the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/api/213/17810?from_cn_redirect=1) API.
 * @method string getName() Obtain Name of a spread placement group. The name must be 1-60 characters long and can contain both Chinese characters and English letters.
 * @method void setName(string $Name) Set Name of a spread placement group. The name must be 1-60 characters long and can contain both Chinese characters and English letters.
 */
class ModifyDisasterRecoverGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string Spread placement group ID, which can be obtained by calling the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/api/213/17810?from_cn_redirect=1) API.
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string Name of a spread placement group. The name must be 1-60 characters long and can contain both Chinese characters and English letters.
     */
    public $Name;

    /**
     * @param string $DisasterRecoverGroupId Spread placement group ID, which can be obtained by calling the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/api/213/17810?from_cn_redirect=1) API.
     * @param string $Name Name of a spread placement group. The name must be 1-60 characters long and can contain both Chinese characters and English letters.
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
        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
