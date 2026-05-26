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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceParamTplDetail request structure.
 *
 * @method string getTplId() Obtain Parameter template ID. Use the [DescribeDBInstanceParamTpl](https://www.tencentcloud.com/document/product/240/109155?from_cn_redirect=1) interface to obtain template ID.
 * @method void setTplId(string $TplId) Set Parameter template ID. Use the [DescribeDBInstanceParamTpl](https://www.tencentcloud.com/document/product/240/109155?from_cn_redirect=1) interface to obtain template ID.
 * @method string getParamName() Obtain Parameter name. Pass in this value to retrieve parameter details of this field. Leave it empty to return all parameters.
 * @method void setParamName(string $ParamName) Set Parameter name. Pass in this value to retrieve parameter details of this field. Leave it empty to return all parameters.
 */
class DescribeDBInstanceParamTplDetailRequest extends AbstractModel
{
    /**
     * @var string Parameter template ID. Use the [DescribeDBInstanceParamTpl](https://www.tencentcloud.com/document/product/240/109155?from_cn_redirect=1) interface to obtain template ID.
     */
    public $TplId;

    /**
     * @var string Parameter name. Pass in this value to retrieve parameter details of this field. Leave it empty to return all parameters.
     */
    public $ParamName;

    /**
     * @param string $TplId Parameter template ID. Use the [DescribeDBInstanceParamTpl](https://www.tencentcloud.com/document/product/240/109155?from_cn_redirect=1) interface to obtain template ID.
     * @param string $ParamName Parameter name. Pass in this value to retrieve parameter details of this field. Leave it empty to return all parameters.
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
        if (array_key_exists("TplId",$param) and $param["TplId"] !== null) {
            $this->TplId = $param["TplId"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }
    }
}
