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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyConfigToMachineGroup request structure.
 *
 * @method string getConfigId() Obtain Collection Configuration ID
-Obtain the collection configuration Id through [Access collection rule configuration](https://www.tencentcloud.com/document/product/614/58616?from_cn_redirect=1).
 * @method void setConfigId(string $ConfigId) Set Collection Configuration ID
-Obtain the collection configuration Id through [Access collection rule configuration](https://www.tencentcloud.com/document/product/614/58616?from_cn_redirect=1).
 * @method string getGroupId() Obtain Machine group ID
-Get the machine group Id by searching the [machine group list](https://www.tencentcloud.com/document/api/614/56438?from_cn_redirect=1).
 * @method void setGroupId(string $GroupId) Set Machine group ID
-Get the machine group Id by searching the [machine group list](https://www.tencentcloud.com/document/api/614/56438?from_cn_redirect=1).
 */
class ApplyConfigToMachineGroupRequest extends AbstractModel
{
    /**
     * @var string Collection Configuration ID
-Obtain the collection configuration Id through [Access collection rule configuration](https://www.tencentcloud.com/document/product/614/58616?from_cn_redirect=1).
     */
    public $ConfigId;

    /**
     * @var string Machine group ID
-Get the machine group Id by searching the [machine group list](https://www.tencentcloud.com/document/api/614/56438?from_cn_redirect=1).
     */
    public $GroupId;

    /**
     * @param string $ConfigId Collection Configuration ID
-Obtain the collection configuration Id through [Access collection rule configuration](https://www.tencentcloud.com/document/product/614/58616?from_cn_redirect=1).
     * @param string $GroupId Machine group ID
-Get the machine group Id by searching the [machine group list](https://www.tencentcloud.com/document/api/614/56438?from_cn_redirect=1).
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
