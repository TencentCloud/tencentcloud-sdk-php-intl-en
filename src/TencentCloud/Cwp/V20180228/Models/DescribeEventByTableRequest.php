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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventByTable request structure.
 *
 * @method string getTableName() Obtain Event table name
 * @method void setTableName(string $TableName) Set Event table name
 * @method array getIds() Obtain Event table ID
 * @method void setIds(array $Ids) Set Event table ID
 */
class DescribeEventByTableRequest extends AbstractModel
{
    /**
     * @var string Event table name
     */
    public $TableName;

    /**
     * @var array Event table ID
     */
    public $Ids;

    /**
     * @param string $TableName Event table name
     * @param array $Ids Event table ID
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }
    }
}
