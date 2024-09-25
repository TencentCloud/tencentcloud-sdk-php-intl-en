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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metadata structure, in key/value format
 *
 * @method string getMetaKey() Obtain Metadata key
 * @method void setMetaKey(string $MetaKey) Set Metadata key
 * @method string getMetaValue() Obtain Metadata value
 * @method void setMetaValue(string $MetaValue) Set Metadata value
 */
class MetaData extends AbstractModel
{
    /**
     * @var string Metadata key
     */
    public $MetaKey;

    /**
     * @var string Metadata value
     */
    public $MetaValue;

    /**
     * @param string $MetaKey Metadata key
     * @param string $MetaValue Metadata value
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
        if (array_key_exists("MetaKey",$param) and $param["MetaKey"] !== null) {
            $this->MetaKey = $param["MetaKey"];
        }

        if (array_key_exists("MetaValue",$param) and $param["MetaValue"] !== null) {
            $this->MetaValue = $param["MetaValue"];
        }
    }
}
