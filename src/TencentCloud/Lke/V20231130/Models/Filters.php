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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Retrieve and filter dissatisfied responses.
 *
 * @method string getQuery() Obtain Retrieve user question or answer.
 * @method void setQuery(string $Query) Set Retrieve user question or answer.
 * @method array getReasons() Obtain Incorrect retrieval type.

 * @method void setReasons(array $Reasons) Set Incorrect retrieval type.
 */
class Filters extends AbstractModel
{
    /**
     * @var string Retrieve user question or answer.
     */
    public $Query;

    /**
     * @var array Incorrect retrieval type.

     */
    public $Reasons;

    /**
     * @param string $Query Retrieve user question or answer.
     * @param array $Reasons Incorrect retrieval type.
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }
    }
}
