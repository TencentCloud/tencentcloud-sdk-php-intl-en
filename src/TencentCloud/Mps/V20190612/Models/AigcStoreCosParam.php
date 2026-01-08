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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getCosBucketName() Obtain 
 * @method void setCosBucketName(string $CosBucketName) Set 
 * @method string getCosBucketRegion() Obtain 
 * @method void setCosBucketRegion(string $CosBucketRegion) Set 
 * @method string getCosBucketPath() Obtain 
 * @method void setCosBucketPath(string $CosBucketPath) Set 
 */
class AigcStoreCosParam extends AbstractModel
{
    /**
     * @var string 
     */
    public $CosBucketName;

    /**
     * @var string 
     */
    public $CosBucketRegion;

    /**
     * @var string 
     */
    public $CosBucketPath;

    /**
     * @param string $CosBucketName 
     * @param string $CosBucketRegion 
     * @param string $CosBucketPath 
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
        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosBucketRegion",$param) and $param["CosBucketRegion"] !== null) {
            $this->CosBucketRegion = $param["CosBucketRegion"];
        }

        if (array_key_exists("CosBucketPath",$param) and $param["CosBucketPath"] !== null) {
            $this->CosBucketPath = $param["CosBucketPath"];
        }
    }
}
