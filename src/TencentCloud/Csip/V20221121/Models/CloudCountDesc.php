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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getCloudType() Obtain 
 * @method void setCloudType(integer $CloudType) Set 
 * @method integer getCloudCount() Obtain 
 * @method void setCloudCount(integer $CloudCount) Set 
 * @method string getCloudDesc() Obtain 
 * @method void setCloudDesc(string $CloudDesc) Set 
 */
class CloudCountDesc extends AbstractModel
{
    /**
     * @var integer 
     */
    public $CloudType;

    /**
     * @var integer 
     */
    public $CloudCount;

    /**
     * @var string 
     */
    public $CloudDesc;

    /**
     * @param integer $CloudType 
     * @param integer $CloudCount 
     * @param string $CloudDesc 
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
        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("CloudCount",$param) and $param["CloudCount"] !== null) {
            $this->CloudCount = $param["CloudCount"];
        }

        if (array_key_exists("CloudDesc",$param) and $param["CloudDesc"] !== null) {
            $this->CloudDesc = $param["CloudDesc"];
        }
    }
}
