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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataEnginePythonSparkImages request structure.
 *
 * @method string getChildImageVersionId() Obtain ID of the minor version of the cluster image
 * @method void setChildImageVersionId(string $ChildImageVersionId) Set ID of the minor version of the cluster image
 */
class DescribeDataEnginePythonSparkImagesRequest extends AbstractModel
{
    /**
     * @var string ID of the minor version of the cluster image
     */
    public $ChildImageVersionId;

    /**
     * @param string $ChildImageVersionId ID of the minor version of the cluster image
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
        if (array_key_exists("ChildImageVersionId",$param) and $param["ChildImageVersionId"] !== null) {
            $this->ChildImageVersionId = $param["ChildImageVersionId"];
        }
    }
}
