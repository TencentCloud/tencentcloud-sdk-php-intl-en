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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a TKE namespace
 *
 * @method string getName() Obtain The namespace name.
 * @method void setName(string $Name) Set The namespace name.
 * @method array getSecretList() Obtain The secret list.
 * @method void setSecretList(array $SecretList) Set The secret list.
 */
class TkeNameSpaceDetail extends AbstractModel
{
    /**
     * @var string The namespace name.
     */
    public $Name;

    /**
     * @var array The secret list.
     */
    public $SecretList;

    /**
     * @param string $Name The namespace name.
     * @param array $SecretList The secret list.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SecretList",$param) and $param["SecretList"] !== null) {
            $this->SecretList = [];
            foreach ($param["SecretList"] as $key => $value){
                $obj = new TkeSecretDetail();
                $obj->deserialize($value);
                array_push($this->SecretList, $obj);
            }
        }
    }
}
