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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom domain name path mapping.
 *
 * @method string getPath() Obtain Path.
 * @method void setPath(string $Path) Set Path.
 * @method string getEnvironment() Obtain Release environment. Valid values: test, prepub, release.
 * @method void setEnvironment(string $Environment) Set Release environment. Valid values: test, prepub, release.
 */
class PathMapping extends AbstractModel
{
    /**
     * @var string Path.
     */
    public $Path;

    /**
     * @var string Release environment. Valid values: test, prepub, release.
     */
    public $Environment;

    /**
     * @param string $Path Path.
     * @param string $Environment Release environment. Valid values: test, prepub, release.
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
