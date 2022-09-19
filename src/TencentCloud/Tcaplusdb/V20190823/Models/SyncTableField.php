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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mapping of cache table field name
 *
 * @method string getSourceName() Obtain Field name of TcaplusDB table
 * @method void setSourceName(string $SourceName) Set Field name of TcaplusDB table
 * @method string getTargetName() Obtain Field name of the target cache table
 * @method void setTargetName(string $TargetName) Set Field name of the target cache table
 */
class SyncTableField extends AbstractModel
{
    /**
     * @var string Field name of TcaplusDB table
     */
    public $SourceName;

    /**
     * @var string Field name of the target cache table
     */
    public $TargetName;

    /**
     * @param string $SourceName Field name of TcaplusDB table
     * @param string $TargetName Field name of the target cache table
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
        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }
    }
}
