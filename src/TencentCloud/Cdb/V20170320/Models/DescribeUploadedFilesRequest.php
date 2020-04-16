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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUploadedFiles request structure.
 *
 * @method string getPath() Obtain File path. `OwnerUin` information of the root account should be entered in this field.
 * @method void setPath(string $Path) Set File path. `OwnerUin` information of the root account should be entered in this field.
 * @method integer getOffset() Obtain Record offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Record offset. Default value: 0.
 * @method integer getLimit() Obtain Number of results to be returned for a single request. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of results to be returned for a single request. Default value: 20.
 */
class DescribeUploadedFilesRequest extends AbstractModel
{
    /**
     * @var string File path. `OwnerUin` information of the root account should be entered in this field.
     */
    public $Path;

    /**
     * @var integer Record offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned for a single request. Default value: 20.
     */
    public $Limit;

    /**
     * @param string $Path File path. `OwnerUin` information of the root account should be entered in this field.
     * @param integer $Offset Record offset. Default value: 0.
     * @param integer $Limit Number of results to be returned for a single request. Default value: 20.
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
