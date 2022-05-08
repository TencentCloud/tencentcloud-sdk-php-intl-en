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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Enable Prometheus monitoring
 *
 * @method integer getPort() Obtain The listening port of the applicaiton
 * @method void setPort(integer $Port) Set The listening port of the applicaiton
 * @method string getPath() Obtain URL path for monitoring
 * @method void setPath(string $Path) Set URL path for monitoring
 */
class EnablePrometheusConf extends AbstractModel
{
    /**
     * @var integer The listening port of the applicaiton
     */
    public $Port;

    /**
     * @var string URL path for monitoring
     */
    public $Path;

    /**
     * @param integer $Port The listening port of the applicaiton
     * @param string $Path URL path for monitoring
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
