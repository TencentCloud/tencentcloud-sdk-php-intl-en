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
 * DescribeApplicationFileInfo request structure.
 *
 * @method string getApplicationId() Obtain Application ID.
 * @method void setApplicationId(string $ApplicationId) Set Application ID.
 * @method array getFilePathList() Obtain Application file path list.
 * @method void setFilePathList(array $FilePathList) Set Application file path list.
 */
class DescribeApplicationFileInfoRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $ApplicationId;

    /**
     * @var array Application file path list.
     */
    public $FilePathList;

    /**
     * @param string $ApplicationId Application ID.
     * @param array $FilePathList Application file path list.
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

        if (array_key_exists("FilePathList",$param) and $param["FilePathList"] !== null) {
            $this->FilePathList = $param["FilePathList"];
        }
    }
}
