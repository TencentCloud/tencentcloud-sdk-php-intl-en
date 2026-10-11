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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * to schema list retrieval
 *
 * @method array getItems() Obtain schema list
 * @method void setItems(array $Items) Set schema list
 * @method string getNextPageToken() Obtain Next page pagination token
 * @method void setNextPageToken(string $NextPageToken) Set Next page pagination token
 */
class ListSchemasRsp extends AbstractModel
{
    /**
     * @var array schema list
     */
    public $Items;

    /**
     * @var string Next page pagination token
     */
    public $NextPageToken;

    /**
     * @param array $Items schema list
     * @param string $NextPageToken Next page pagination token
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new Schema();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("NextPageToken",$param) and $param["NextPageToken"] !== null) {
            $this->NextPageToken = $param["NextPageToken"];
        }
    }
}
