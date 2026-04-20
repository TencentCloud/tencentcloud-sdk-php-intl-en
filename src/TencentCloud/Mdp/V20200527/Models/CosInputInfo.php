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
 * @method string getBucket() Obtain COS bucket name
 * @method void setBucket(string $Bucket) Set COS bucket name
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getObject() Obtain File object path
 * @method void setObject(string $Object) Set File object path
 */
class CosInputInfo extends AbstractModel
{
    /**
     * @var string COS bucket name
     */
    public $Bucket;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string File object path
     */
    public $Object;

    /**
     * @param string $Bucket COS bucket name
     * @param string $Region Region
     * @param string $Object File object path
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
