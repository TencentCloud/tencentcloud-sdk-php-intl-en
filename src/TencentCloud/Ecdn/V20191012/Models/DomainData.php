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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data structure of sorted data
 *
 * @method string getResource() Obtain Domain name
 * @method void setResource(string $Resource) Set Domain name
 * @method array getDetailData() Obtain Result details.
 * @method void setDetailData(array $DetailData) Set Result details.
 */
class DomainData extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Resource;

    /**
     * @var array Result details.
     */
    public $DetailData;

    /**
     * @param string $Resource Domain name
     * @param array $DetailData Result details.
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("DetailData",$param) and $param["DetailData"] !== null) {
            $this->DetailData = [];
            foreach ($param["DetailData"] as $key => $value){
                $obj = new DetailData();
                $obj->deserialize($value);
                array_push($this->DetailData, $obj);
            }
        }
    }
}
