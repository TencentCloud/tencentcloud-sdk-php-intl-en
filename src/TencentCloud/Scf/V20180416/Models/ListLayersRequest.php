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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListLayers request structure.
 *
 * @method string getCompatibleRuntime() Obtain Compatible runtimes
 * @method void setCompatibleRuntime(string $CompatibleRuntime) Set Compatible runtimes
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 * @method string getSearchKey() Obtain Query key, which fuzzily matches the name
 * @method void setSearchKey(string $SearchKey) Set Query key, which fuzzily matches the name
 */
class ListLayersRequest extends AbstractModel
{
    /**
     * @var string Compatible runtimes
     */
    public $CompatibleRuntime;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @var string Query key, which fuzzily matches the name
     */
    public $SearchKey;

    /**
     * @param string $CompatibleRuntime Compatible runtimes
     * @param integer $Offset Offset
     * @param integer $Limit Limit
     * @param string $SearchKey Query key, which fuzzily matches the name
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
        if (array_key_exists("CompatibleRuntime",$param) and $param["CompatibleRuntime"] !== null) {
            $this->CompatibleRuntime = $param["CompatibleRuntime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
