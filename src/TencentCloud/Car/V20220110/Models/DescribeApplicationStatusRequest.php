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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationStatus request structure.
 *
 * @method array getApplicationIdList() Obtain Application ID list.
 * @method void setApplicationIdList(array $ApplicationIdList) Set Application ID list.
 */
class DescribeApplicationStatusRequest extends AbstractModel
{
    /**
     * @var array Application ID list.
     */
    public $ApplicationIdList;

    /**
     * @param array $ApplicationIdList Application ID list.
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
        if (array_key_exists("ApplicationIdList",$param) and $param["ApplicationIdList"] !== null) {
            $this->ApplicationIdList = $param["ApplicationIdList"];
        }
    }
}
