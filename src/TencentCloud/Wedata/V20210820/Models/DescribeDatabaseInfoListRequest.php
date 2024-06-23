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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseInfoList request structure.
 *
 * @method array getFilters() Obtain Ignore Query String
 * @method void setFilters(array $Filters) Set Ignore Query String
 * @method string getConnectionType() Obtain Connection Type
 * @method void setConnectionType(string $ConnectionType) Set Connection Type
 */
class DescribeDatabaseInfoListRequest extends AbstractModel
{
    /**
     * @var array Ignore Query String
     */
    public $Filters;

    /**
     * @var string Connection Type
     */
    public $ConnectionType;

    /**
     * @param array $Filters Ignore Query String
     * @param string $ConnectionType Connection Type
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }
    }
}
