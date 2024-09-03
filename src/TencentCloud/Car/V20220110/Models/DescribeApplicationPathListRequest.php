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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationPathList request structure.
 *
 * @method string getApplicationId() Obtain Cloud application ID.
 * @method void setApplicationId(string $ApplicationId) Set Cloud application ID.
 * @method string getApplicationVersionId() Obtain Cloud application version ID.
 * @method void setApplicationVersionId(string $ApplicationVersionId) Set Cloud application version ID.
 */
class DescribeApplicationPathListRequest extends AbstractModel
{
    /**
     * @var string Cloud application ID.
     */
    public $ApplicationId;

    /**
     * @var string Cloud application version ID.
     */
    public $ApplicationVersionId;

    /**
     * @param string $ApplicationId Cloud application ID.
     * @param string $ApplicationVersionId Cloud application version ID.
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationVersionId",$param) and $param["ApplicationVersionId"] !== null) {
            $this->ApplicationVersionId = $param["ApplicationVersionId"];
        }
    }
}
