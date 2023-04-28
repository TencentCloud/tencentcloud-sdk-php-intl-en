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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReleaseFileSign request structure.
 *
 * @method integer getTimeout() Obtain Timeout period. If it is not set, it will be 5 minutes by default
 * @method void setTimeout(integer $Timeout) Set Timeout period. If it is not set, it will be 5 minutes by default
 * @method integer getFileType() Obtain Bucket type. Valid values: `1`: (Web, which is the default value), `2` (Application).
 * @method void setFileType(integer $FileType) Set Bucket type. Valid values: `1`: (Web, which is the default value), `2` (Application).
 */
class DescribeReleaseFileSignRequest extends AbstractModel
{
    /**
     * @var integer Timeout period. If it is not set, it will be 5 minutes by default
     */
    public $Timeout;

    /**
     * @var integer Bucket type. Valid values: `1`: (Web, which is the default value), `2` (Application).
     */
    public $FileType;

    /**
     * @param integer $Timeout Timeout period. If it is not set, it will be 5 minutes by default
     * @param integer $FileType Bucket type. Valid values: `1`: (Web, which is the default value), `2` (Application).
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
        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}
