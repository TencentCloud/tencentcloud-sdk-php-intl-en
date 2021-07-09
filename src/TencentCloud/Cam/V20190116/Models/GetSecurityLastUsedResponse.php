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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSecurityLastUsed response structure.
 *
 * @method array getSecretIdLastUsedRows() Obtain List of key ID’s recent usage records.
 * @method void setSecretIdLastUsedRows(array $SecretIdLastUsedRows) Set List of key ID’s recent usage records.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetSecurityLastUsedResponse extends AbstractModel
{
    /**
     * @var array List of key ID’s recent usage records.
     */
    public $SecretIdLastUsedRows;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $SecretIdLastUsedRows List of key ID’s recent usage records.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("SecretIdLastUsedRows",$param) and $param["SecretIdLastUsedRows"] !== null) {
            $this->SecretIdLastUsedRows = [];
            foreach ($param["SecretIdLastUsedRows"] as $key => $value){
                $obj = new SecretIdLastUsed();
                $obj->deserialize($value);
                array_push($this->SecretIdLastUsedRows, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
