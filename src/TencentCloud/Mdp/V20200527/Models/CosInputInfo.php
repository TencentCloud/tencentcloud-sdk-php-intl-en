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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getBucket() Obtain 
 * @method void setBucket(string $Bucket) Set 
 * @method string getRegion() Obtain 
 * @method void setRegion(string $Region) Set 
 * @method string getObject() Obtain 
 * @method void setObject(string $Object) Set 
 */
class CosInputInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Bucket;

    /**
     * @var string 
     */
    public $Region;

    /**
     * @var string 
     */
    public $Object;

    /**
     * @param string $Bucket 
     * @param string $Region 
     * @param string $Object 
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }
    }
}
