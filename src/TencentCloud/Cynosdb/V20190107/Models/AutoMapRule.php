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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Advanced mapping, automated mapping rule
 *
 * @method string getSrcInstanceId() Obtain Source instance Id
 * @method void setSrcInstanceId(string $SrcInstanceId) Set Source instance Id
 * @method string getSrcDatabaseRegex() Obtain Source database regular
 * @method void setSrcDatabaseRegex(string $SrcDatabaseRegex) Set Source database regular
 * @method string getSrcTableRegex() Obtain Source table regular
 * @method void setSrcTableRegex(string $SrcTableRegex) Set Source table regular
 * @method string getDstDatabaseRegex() Obtain Target database regular
 * @method void setDstDatabaseRegex(string $DstDatabaseRegex) Set Target database regular
 * @method string getDstTableRegex() Obtain Target table regular
 * @method void setDstTableRegex(string $DstTableRegex) Set Target table regular
 */
class AutoMapRule extends AbstractModel
{
    /**
     * @var string Source instance Id
     */
    public $SrcInstanceId;

    /**
     * @var string Source database regular
     */
    public $SrcDatabaseRegex;

    /**
     * @var string Source table regular
     */
    public $SrcTableRegex;

    /**
     * @var string Target database regular
     */
    public $DstDatabaseRegex;

    /**
     * @var string Target table regular
     */
    public $DstTableRegex;

    /**
     * @param string $SrcInstanceId Source instance Id
     * @param string $SrcDatabaseRegex Source database regular
     * @param string $SrcTableRegex Source table regular
     * @param string $DstDatabaseRegex Target database regular
     * @param string $DstTableRegex Target table regular
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
        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("SrcDatabaseRegex",$param) and $param["SrcDatabaseRegex"] !== null) {
            $this->SrcDatabaseRegex = $param["SrcDatabaseRegex"];
        }

        if (array_key_exists("SrcTableRegex",$param) and $param["SrcTableRegex"] !== null) {
            $this->SrcTableRegex = $param["SrcTableRegex"];
        }

        if (array_key_exists("DstDatabaseRegex",$param) and $param["DstDatabaseRegex"] !== null) {
            $this->DstDatabaseRegex = $param["DstDatabaseRegex"];
        }

        if (array_key_exists("DstTableRegex",$param) and $param["DstTableRegex"] !== null) {
            $this->DstTableRegex = $param["DstTableRegex"];
        }
    }
}
