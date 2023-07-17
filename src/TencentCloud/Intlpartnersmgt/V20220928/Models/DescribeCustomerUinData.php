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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of customer UINs
 *
 * @method string getCustomerUin() Obtain Customer UIN Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomerUin(string $CustomerUin) Set Customer UIN Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeCustomerUinData extends AbstractModel
{
    /**
     * @var string Customer UIN Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomerUin;

    /**
     * @param string $CustomerUin Customer UIN Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CustomerUin",$param) and $param["CustomerUin"] !== null) {
            $this->CustomerUin = $param["CustomerUin"];
        }
    }
}
