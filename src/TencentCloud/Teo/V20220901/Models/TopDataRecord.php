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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Top data record
 *
 * @method string getTypeKey() Obtain Dimension value to query.
 * @method void setTypeKey(string $TypeKey) Set Dimension value to query.
 * @method array getDetailData() Obtain top data ranking.
 * @method void setDetailData(array $DetailData) Set top data ranking.
 */
class TopDataRecord extends AbstractModel
{
    /**
     * @var string Dimension value to query.
     */
    public $TypeKey;

    /**
     * @var array top data ranking.
     */
    public $DetailData;

    /**
     * @param string $TypeKey Dimension value to query.
     * @param array $DetailData top data ranking.
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
        if (array_key_exists("TypeKey",$param) and $param["TypeKey"] !== null) {
            $this->TypeKey = $param["TypeKey"];
        }

        if (array_key_exists("DetailData",$param) and $param["DetailData"] !== null) {
            $this->DetailData = [];
            foreach ($param["DetailData"] as $key => $value){
                $obj = new TopDetailData();
                $obj->deserialize($value);
                array_push($this->DetailData, $obj);
            }
        }
    }
}
