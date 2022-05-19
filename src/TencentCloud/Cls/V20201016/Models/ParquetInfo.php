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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `Parquet` contents
 *
 * @method array getParquetKeyInfo() Obtain `ParquetKeyInfo` array
 * @method void setParquetKeyInfo(array $ParquetKeyInfo) Set `ParquetKeyInfo` array
 */
class ParquetInfo extends AbstractModel
{
    /**
     * @var array `ParquetKeyInfo` array
     */
    public $ParquetKeyInfo;

    /**
     * @param array $ParquetKeyInfo `ParquetKeyInfo` array
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
        if (array_key_exists("ParquetKeyInfo",$param) and $param["ParquetKeyInfo"] !== null) {
            $this->ParquetKeyInfo = [];
            foreach ($param["ParquetKeyInfo"] as $key => $value){
                $obj = new ParquetKeyInfo();
                $obj->deserialize($value);
                array_push($this->ParquetKeyInfo, $obj);
            }
        }
    }
}
