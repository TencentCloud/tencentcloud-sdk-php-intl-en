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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PurgePathCache request structure.
 *
 * @method array getPaths() Obtain List of directories to be purged. The protocol header must be included.
 * @method void setPaths(array $Paths) Set List of directories to be purged. The protocol header must be included.
 * @method string getFlushType() Obtain Purge type. flush: purges updated resources, delete: purges all resources.
 * @method void setFlushType(string $FlushType) Set Purge type. flush: purges updated resources, delete: purges all resources.
 */
class PurgePathCacheRequest extends AbstractModel
{
    /**
     * @var array List of directories to be purged. The protocol header must be included.
     */
    public $Paths;

    /**
     * @var string Purge type. flush: purges updated resources, delete: purges all resources.
     */
    public $FlushType;

    /**
     * @param array $Paths List of directories to be purged. The protocol header must be included.
     * @param string $FlushType Purge type. flush: purges updated resources, delete: purges all resources.
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
        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("FlushType",$param) and $param["FlushType"] !== null) {
            $this->FlushType = $param["FlushType"];
        }
    }
}
