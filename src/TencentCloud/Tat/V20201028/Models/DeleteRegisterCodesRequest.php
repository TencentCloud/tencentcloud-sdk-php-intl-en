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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRegisterCodes request structure.
 *
 * @method array getRegisterCodeIds() Obtain Registration code ID list. limits the input registration code ID quantity to more than 0 and less than 100.

Call the [DescribeRegisterCodes](https://www.tencentcloud.com/document/api/1340/96925?from_cn_redirect=1) api to query registration codes.
 * @method void setRegisterCodeIds(array $RegisterCodeIds) Set Registration code ID list. limits the input registration code ID quantity to more than 0 and less than 100.

Call the [DescribeRegisterCodes](https://www.tencentcloud.com/document/api/1340/96925?from_cn_redirect=1) api to query registration codes.
 */
class DeleteRegisterCodesRequest extends AbstractModel
{
    /**
     * @var array Registration code ID list. limits the input registration code ID quantity to more than 0 and less than 100.

Call the [DescribeRegisterCodes](https://www.tencentcloud.com/document/api/1340/96925?from_cn_redirect=1) api to query registration codes.
     */
    public $RegisterCodeIds;

    /**
     * @param array $RegisterCodeIds Registration code ID list. limits the input registration code ID quantity to more than 0 and less than 100.

Call the [DescribeRegisterCodes](https://www.tencentcloud.com/document/api/1340/96925?from_cn_redirect=1) api to query registration codes.
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
        if (array_key_exists("RegisterCodeIds",$param) and $param["RegisterCodeIds"] !== null) {
            $this->RegisterCodeIds = $param["RegisterCodeIds"];
        }
    }
}
