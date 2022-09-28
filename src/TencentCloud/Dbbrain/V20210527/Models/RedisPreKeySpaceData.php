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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Space information of Redis key prefixes
 *
 * @method integer getAveElementSize() Obtain Average element length
 * @method void setAveElementSize(integer $AveElementSize) Set Average element length
 * @method integer getLength() Obtain Total memory usage in bytes
 * @method void setLength(integer $Length) Set Total memory usage in bytes
 * @method string getKeyPreIndex() Obtain Key prefix
 * @method void setKeyPreIndex(string $KeyPreIndex) Set Key prefix
 * @method integer getItemCount() Obtain The number of elements
 * @method void setItemCount(integer $ItemCount) Set The number of elements
 * @method integer getCount() Obtain The number of keys
 * @method void setCount(integer $Count) Set The number of keys
 * @method integer getMaxElementSize() Obtain The max element length
 * @method void setMaxElementSize(integer $MaxElementSize) Set The max element length
 */
class RedisPreKeySpaceData extends AbstractModel
{
    /**
     * @var integer Average element length
     */
    public $AveElementSize;

    /**
     * @var integer Total memory usage in bytes
     */
    public $Length;

    /**
     * @var string Key prefix
     */
    public $KeyPreIndex;

    /**
     * @var integer The number of elements
     */
    public $ItemCount;

    /**
     * @var integer The number of keys
     */
    public $Count;

    /**
     * @var integer The max element length
     */
    public $MaxElementSize;

    /**
     * @param integer $AveElementSize Average element length
     * @param integer $Length Total memory usage in bytes
     * @param string $KeyPreIndex Key prefix
     * @param integer $ItemCount The number of elements
     * @param integer $Count The number of keys
     * @param integer $MaxElementSize The max element length
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
        if (array_key_exists("AveElementSize",$param) and $param["AveElementSize"] !== null) {
            $this->AveElementSize = $param["AveElementSize"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("KeyPreIndex",$param) and $param["KeyPreIndex"] !== null) {
            $this->KeyPreIndex = $param["KeyPreIndex"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("MaxElementSize",$param) and $param["MaxElementSize"] !== null) {
            $this->MaxElementSize = $param["MaxElementSize"];
        }
    }
}
