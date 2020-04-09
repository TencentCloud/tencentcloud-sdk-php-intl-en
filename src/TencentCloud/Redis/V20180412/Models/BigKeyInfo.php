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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Big key details
 *
 * @method integer getDB() Obtain Database
 * @method void setDB(integer $DB) Set Database
 * @method string getKey() Obtain Big key
 * @method void setKey(string $Key) Set Big key
 * @method string getType() Obtain Type
 * @method void setType(string $Type) Set Type
 * @method integer getSize() Obtain Size
 * @method void setSize(integer $Size) Set Size
 * @method integer getUpdatetime() Obtain Data timestamp
 * @method void setUpdatetime(integer $Updatetime) Set Data timestamp
 */
class BigKeyInfo extends AbstractModel
{
    /**
     * @var integer Database
     */
    public $DB;

    /**
     * @var string Big key
     */
    public $Key;

    /**
     * @var string Type
     */
    public $Type;

    /**
     * @var integer Size
     */
    public $Size;

    /**
     * @var integer Data timestamp
     */
    public $Updatetime;

    /**
     * @param integer $DB Database
     * @param string $Key Big key
     * @param string $Type Type
     * @param integer $Size Size
     * @param integer $Updatetime Data timestamp
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
        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Updatetime",$param) and $param["Updatetime"] !== null) {
            $this->Updatetime = $param["Updatetime"];
        }
    }
}
