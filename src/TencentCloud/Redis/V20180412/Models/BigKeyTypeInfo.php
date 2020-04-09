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
 * Big key type distribution details
 *
 * @method string getType() Obtain Type
 * @method void setType(string $Type) Set Type
 * @method integer getCount() Obtain Count
 * @method void setCount(integer $Count) Set Count
 * @method integer getSize() Obtain Size
 * @method void setSize(integer $Size) Set Size
 * @method integer getUpdatetime() Obtain Timestamp
 * @method void setUpdatetime(integer $Updatetime) Set Timestamp
 */
class BigKeyTypeInfo extends AbstractModel
{
    /**
     * @var string Type
     */
    public $Type;

    /**
     * @var integer Count
     */
    public $Count;

    /**
     * @var integer Size
     */
    public $Size;

    /**
     * @var integer Timestamp
     */
    public $Updatetime;

    /**
     * @param string $Type Type
     * @param integer $Count Count
     * @param integer $Size Size
     * @param integer $Updatetime Timestamp
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Updatetime",$param) and $param["Updatetime"] !== null) {
            $this->Updatetime = $param["Updatetime"];
        }
    }
}
