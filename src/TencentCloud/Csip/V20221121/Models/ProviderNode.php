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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Asset tree - Cloud service provider node
 *
 * @method string getProvider() Obtain <p>Cloud service provider</p>
 * @method void setProvider(string $Provider) Set <p>Cloud service provider</p>
 * @method string getProviderName() Obtain <p>Cloud vendor name</p>
 * @method void setProviderName(string $ProviderName) Set <p>Cloud vendor name</p>
 * @method array getCategories() Obtain <p>Subordinate asset category node</p>
 * @method void setCategories(array $Categories) Set <p>Subordinate asset category node</p>
 */
class ProviderNode extends AbstractModel
{
    /**
     * @var string <p>Cloud service provider</p>
     */
    public $Provider;

    /**
     * @var string <p>Cloud vendor name</p>
     */
    public $ProviderName;

    /**
     * @var array <p>Subordinate asset category node</p>
     */
    public $Categories;

    /**
     * @param string $Provider <p>Cloud service provider</p>
     * @param string $ProviderName <p>Cloud vendor name</p>
     * @param array $Categories <p>Subordinate asset category node</p>
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = [];
            foreach ($param["Categories"] as $key => $value){
                $obj = new CategoryNode();
                $obj->deserialize($value);
                array_push($this->Categories, $obj);
            }
        }
    }
}
